<?php

namespace App\Http\Controllers;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //dashbaord function to return view backends.dashboard
    public function dashboard()
    {
        // Prepare data for each month of the current year
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        $usersData = $this->getMonthlyUsersData();
        $customersData = $this->getMonthlyCustomersData();
        $subscriptionData = $this->getSubscriptionData();
        $salesData = $this->getMonthlySalesData();
        $totalUsers = User::count(); // Get the total number of users
        $totalSales = $this->getTotalSalesForYear();
        $totalCustomers = DB::table('subscription_items')->distinct('id')->count(); // Total number of customers


        return view('backend.dashboard', [
            'months' => $months,
            'users' => $usersData,
            'customers' => $customersData,
            'subscriptionData' => $subscriptionData,
            'sales' => $salesData,
            'totalUsers' => $totalUsers,
            'totalSales' => $totalSales,
            'totalCustomers' => $totalCustomers

        ]);
    }

    private function getMonthlyUsersData()
    {
        $usersData = [];

        for ($month = 1; $month <= 12; $month++) {
            $startDate = Carbon::create(null, $month)->startOfMonth();
            $endDate = Carbon::create(null, $month)->endOfMonth();

            $usersCount = User::whereBetween('created_at', [$startDate, $endDate])->count();
            $usersData[] = $usersCount;
        }

        return $usersData;
    }

    private function getMonthlyCustomersData()
    {
        $customersData = [];

        for ($month = 1; $month <= 12; $month++) {
            $startDate = Carbon::create(null, $month)->startOfMonth();
            $endDate = Carbon::create(null, $month)->endOfMonth();

            $customersCount = DB::table('subscription_items')
                ->select('user_id')
                ->distinct()
                ->whereBetween('created_at', [$startDate, $endDate])
                ->count();

            $customersData[] = $customersCount;
        }

        return $customersData;
    }

    private function getSubscriptionData()
    {
        $basicPlanCount = DB::table('subscription_items')
            ->where('stripe_price', 'price_1PJTO7JncBMXlWz2ZX32QJMG')
            ->count();
        $standardPlanCount = DB::table('subscription_items')
            ->where('stripe_price', 'price_1PJTPKJncBMXlWz2y0ZkBgeH')
            ->count();
        $premiumPlanCount = DB::table('subscription_items')
            ->where('stripe_price', 'price_1PJTQFJncBMXlWz2SEsZtgdB')
            ->count();

        return [
            'basic' => $basicPlanCount,
            'standard' => $standardPlanCount,
            'premium' => $premiumPlanCount
        ];
    }

    private function getMonthlySalesData()
    {
        $salesData = [];
        $priceMapping = [
            'price_1PJTO7JncBMXlWz2ZX32QJMG' => 6499, // basic plan
            'price_1PJTPKJncBMXlWz2y0ZkBgeH' => 11999, // standard plan
            'price_1PJTQFJncBMXlWz2SEsZtgdB' => 21999  // premium plan
        ];

        for ($month = 1; $month <= 12; $month++) {
            $startDate = Carbon::create(null, $month)->startOfMonth();
            $endDate = Carbon::create(null, $month)->endOfMonth();

            $monthlySales = DB::table('subscription_items')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->get()
                ->reduce(function ($total, $item) use ($priceMapping) {
                    return $total + ($priceMapping[$item->stripe_price] ?? 0);
                }, 0);

            $salesData[] = $monthlySales;
        }

        return $salesData;
    }

    private function getTotalSalesForYear()
    {
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        $priceMapping = [
            'price_1PJTO7JncBMXlWz2ZX32QJMG' => 6499, // basic plan
            'price_1PJTPKJncBMXlWz2y0ZkBgeH' => 11999, // standard plan
            'price_1PJTQFJncBMXlWz2SEsZtgdB' => 21999  // premium plan
        ];

        $totalSales = DB::table('subscription_items')
            ->whereBetween('created_at', [$startOfYear, $endOfYear])
            ->get()
            ->reduce(function ($total, $item) use ($priceMapping) {
                return $total + ($priceMapping[$item->stripe_price] ?? 0);
            }, 0);

        return $totalSales;
    }
}
