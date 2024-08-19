<x-app-layout>

    <div class="font-[sans-serif] bg-white p-4 pt-10 pb-10 d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="md:max-w-5xl max-w-xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="lg:col-span-2 max-md:order-1">
            <h2 class="text-3xl font-extrabold text-gray-800">Make a payment</h2>
            <p class="text-gray-800 text-sm mt-4">Complete your transaction swiftly and securely with our easy-to-use payment process.</p>

            <form id="payment-form" class="mt-8 max-w-lg" method="POST" action="{{ route('subscription.create') }}">
                @csrf
               
                <input type="hidden" name="plan" value="{{ $plan->id }}">
                <input type="hidden" name="token" id="payment-token">

                <div class="grid gap-4">
                    <input type="text" id="card-holder-name" name="name" placeholder="Cardholder's Name"
                    class="px-4 py-3.5 bg-gray-100 text-gray-800 w-full text-sm border rounded-md focus:border-purple-500 focus:bg-transparent outline-none" required />

                    <div class="flex bg-gray-100 border rounded-md focus-within:border-purple-500 focus-within:bg-transparent overflow-hidden">
                        <div id="card-element" class="px-4 py-3.5 text-gray-800 w-full text-sm outline-none bg-transparent"></div>
                    </div>
                </div>

                <button type="submit" class="mt-4 w-40 py-3.5 text-sm bg-purple-500 text-white rounded-md hover:bg-purple-600 tracking-wide" id="card-button" data-secret="{{ $intent->client_secret }}">Pay</button>
            </form>
          </div>

          <div class="bg-gray-100 p-6 rounded-md">
            <h2 class="text-3xl font-extrabold text-gray-800">${{ $plan->price }}</h2>

            <ul class="text-gray-800 mt-6 space-y-3">
              <li class="flex flex-wrap gap-4 font-bold">Selected Plan <span class="ml-auto  text-sm">{{ $plan->name }}</span></li>
              <li class="flex flex-wrap gap-4 font-bold">Plan Description <span class="ml-auto  text-sm">{{ $plan->description }}</span></li>
              <li class="flex flex-wrap gap-4 text-sm font-bold border-t-2 pt-4">Total <span class="ml-auto">${{ $plan->price }}</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{-- Stripe script --}}
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        const cardButton = document.getElementById('card-button');
        const cardHolderName = document.getElementById('card-holder-name');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            cardButton.disabled = true;

            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardButton.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value,
                        },
                    },
                }
            );

            if (error) {
                cardButton.disabled = false;
                // Display error.message in your UI.
            } else {
                // Send the setupIntent.payment_method to your server.
                let tokenInput = document.getElementById('payment-token');
                tokenInput.value = setupIntent.payment_method;
                form.submit();
            }
        });
    </script>
</x-app-layout>
