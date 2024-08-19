@extends('backend.layouts.app')

@section('content')

<section id="main" class="section">

    <div class="container  ">
        <div class="space-y-10 divide-y divide-gray-900/10 ">

            <div class="grid grid-cols-1 gap-x-2 gap-y-0 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    @if($product->id)
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Update Product
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Update the product details.
                    </p>
                    @else
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Add Product
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Add a new product.
                    </p>
                    @endif
                </div>

                <form method="post"



                    @if($product->id)
                    action="{{ route('product.update', $product->id) }}"
                    enctype="multipart/form-data"
                    @else
                    action="{{ route('product.store') }}"

                    enctype="multipart/form-data"
                    @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2 ">

                    @csrf
                    @if ($product->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6  sm:p-8 " >
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ">

                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                    Name
                                </label>
                                <div class="mt-2">
                                    <input id="name" name="name" rows="3"
                                        value="{{ old('name', $product->name) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Name of the product.
                                </p>
                                @error('name')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="col-span-full">
                                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">
                                    Price
                                </label>
                                <div class="mt-2">
                                    <input id="price" name="price" rows="3"
                                        value="{{ old('price', $product->price) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Price of the product.
                                </p>
                                @error('price')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="col-span-full">
                                <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">
                                    Slug
                                </label>
                                <div class="mt-2">
                                    <input id="slug" name="slug" rows="3"
                                        value="{{ old('slug', $product->slug) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Slug of the product.
                                </p>
                                @error('slug')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>
                            {{-- <div class="col-span-full">
                                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">
                                    Description
                                </label>
                                <div class="mt-2">
                                    <input id="description" name="description" rows="3"

                                        value="{{ old('description', $product->description) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Description of the product.
                                </p>
                                @error('description')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div> --}}
                            <div class="col-span-full">
    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">
        Description
    </label>
    <div class="mt-2">
        <textarea id="description" name="description" rows="3"
            class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('description', $product->description) }}</textarea>
    </div>
    <p class="mt-3 text-sm leading-6 text-gray-600">
        Description of the product.
    </p>
    @error('description')
        <p class="mt-3 text-sm leading-6 text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>

                            {{--    Product category selection field --}}
                            <div class="col-span-full">
                                <label for="product_category_id" class="block text-sm font-medium leading-6 text-gray-900">
                                    Product category
                                </label>
                                <div class="mt-2">
                                    <select id="product_category_id" name="product_category_id"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4">
                                        @foreach ($categories as $Category)
                                            <option value="{{ $Category->id }}"
                                                {{-- {{ ($product && old('product_category_id', $product?->productCategory?->id) == $Category->id ? 'selected' : '') }}> --}}
                                                {{ (old('product_category_id', $product?->product_category_id) == $Category->id ? 'selected' : '') }}>
                                                {{ ucwords(str_replace('_', ' ', Str::snake($Category->name))) }}

                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Category of the product.
                                </p>
                                @error('product_category_id')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-- Product image file upload field --}}
                            <div class="col-span-full">
                                <label for="image" class="block text-sm font-medium leading-6 text-gray-900">
                                    Image
                                </label>
                                @if($product->image)
                                <img src="/uploads/products/{{$product->image}}" alt="product image" class="w-30 h-20 object-cover rounded-md">
                                @endif
                                <div class="mt-2">
                                    <input id="image" name="image" type="file"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600 mb-5">
                                    Image of the product.
                                </p>
                                @error('image')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror


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

