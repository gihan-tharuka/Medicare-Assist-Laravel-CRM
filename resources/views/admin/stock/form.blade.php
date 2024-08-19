@extends('backend.layouts.app')

@section('content')

<section id="main" class="section">

    <div class="container ">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    @if($stock->id)
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Update Stock
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Update the stock details.
                    </p>
                    @else
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Create Stock
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Create a new stock.
                    </p>
                    @endif
                </div>

                <form method="post"

                    @if($stock->id)
                    action="{{ route('stock.update', $stock->id) }}"
                    @else
                    action="{{ route('stock.store') }}"
                    @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                    @if ($stock->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6  sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ">

                            
                            <div class="col-span-full">
                                <label for="product_id" class="block text-sm font-medium leading-6 text-gray-900">
                                    Product
                                </label>
                                <div class="mt-2">
                                    <select id="product_id" name="product_id"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4">
                                        @foreach ($products as $Product)
                                            <option value="{{ $Product->id }}"
                                                {{ ($stock && old('product_id', $stock?->product?->id) == $Product->id ? 'selected' : '') }}>
                                                {{ ucwords(str_replace('_', ' ', Str::snake($Product->name))) }}

                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Name of the product.
                                </p>
                                @error('product_id')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <div class="col-span-full">
                                <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">
                                    Quantity
                                </label>
                                <div class="mt-2">
                                    <input id="quantity" name="quantity" rows="3"
                                        value="{{ old('quantity', $stock->quantity) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Quantity of the stock.
                                </p>
                                @error('quantity')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>



                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

