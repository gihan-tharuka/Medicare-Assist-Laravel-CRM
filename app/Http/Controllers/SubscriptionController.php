<?php

namespace App\Http\Controllers;
//subscription, user, plan
use App\Models\Subscription;
use App\Models\User;
use App\Models\Plan;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //
    public function index()
    {
        return view('admin.subscription.index', [
            'subscriptions' => Subscription::orderBy('id', 'ASC')->paginate(10),
            'users' => User::all(),
            'plans' => Plan::all()
        ]);


    }

    //function to show the subscriptions which are only made by the user
    public function user()
    {
        return view('user.subscription.index', [
            'subscriptions' => Subscription::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->paginate(10),
            'users' => User::all(),
            'plans' => Plan::all()
        ]);
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('subscription.index') ->with('success', 'subscription successfully deleted!');
    }
}
