<x-app-layout>


<section class="text-gray-700 body-font overflow-hidden bg-white d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="container px-5 py-24 mx-auto ">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">

      <img alt="Medicine Image" class="lg:w-1/2 w-full  object-center rounded border border-gray-200" src="/uploads/products/{{$product->image}}" style="width: 450px; height: 300px;">

      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">



        <a href="{{ route('category.show', $product->category->slug) }}" class="text-sm title-font text-blue-500 tracking-widest">{{ $product->category->name }}</a>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>

          </span>

          </span>
        </div>
        <p class="leading-relaxed">Amoxicillin is a highly effective broad-spectrum antibiotic belonging to the penicillin class, commonly used to treat a variety of bacterial infections such as ear infections, throat infections, pneumonia, skin infections, and urinary tract infections. It works by inhibiting the synthesis of bacterial cell walls, leading to bacterial death and rapid relief from symptoms.</p>
        <div class="flex mt-6 items-center pb-5  border-gray-200 mb-5">

        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">Rs {{ $product->price }}</span>

        </div>
      </div>
    </div>
  </div>
</section>




</x-app-layout>
