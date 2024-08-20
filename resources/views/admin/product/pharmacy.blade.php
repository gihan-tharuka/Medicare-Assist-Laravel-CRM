<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
</x-slot>

<section class="py-10 bg-gray-100">
  <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @foreach ($products as $product )

        <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
        <a href="{{ route('product.display', $product->slug) }}">
        <div class="relative flex items-end overflow-hidden rounded-xl">

          <img src="/uploads/products/{{$product->image}}" alt="Medicine Photo" class="w-42 h-32" />


        </div>

        <div class="mt-1 p-2">
          <h2 class="text-slate-700">{{ $product->name }}</h2>

          <a href="{{ route('category.show', $product->category->slug) }}" class="text-sm text-blue-500">{{ $product->category->name }}</a>
          <p class="mt-1 text-sm text-slate-400">{{ Str::words($product->description, 6, '...') }}</p>

          <div class="mt-3 flex items-end justify-between">
              <p class="text-lg font-bold text-blue-500">Rs {{ $product->price }}</p>

                @if ($product->stock)
                    <p class="text-sm text-slate-400">Stock: {{ $product->stock->quantity }}</p>
                @else
                    <p class="text-sm text-slate-400">Stock: Not available</p>
                @endif


          </div>
        </div>
      </a>
    </article>

    @endforeach


</section>

</x-app-layout>
