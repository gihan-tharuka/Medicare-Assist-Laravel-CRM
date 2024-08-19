@extends('backend.layouts.app')

@section('content')

<section id="main" class="section">

    <div class="container ">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    @if($booking->id)
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Update booking
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Update the booking details.
                    </p>
                    @else
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Create booking
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Create a new booking.
                    </p>
                    @endif
                </div>

                <form method="post"

                    @if($booking->id)
                    action="{{ route('booking.update', $booking->id) }}"
                    @else
                    action="{{ route('booking.store') }}"
                    @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                    @if ($booking->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6  sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ">
                            <div class="col-span-full">
                                <label for="status" class="block text-sm font-medium leading-6 text-gray-900">
                                    Status
                                </label>
                                <div class="mt-2">
                                    <select id="status" name="status"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="1" @if ($booking->status == 1) selected @endif>Confirmed</option>
                                        <option value="0" @if ($booking->status == 0) selected @endif>Pending</option>
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Status of the booking.
                                </p>
                                @error('status')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-- email --}}
                            <div class="col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                    Email
                                </label>
                                <div class="mt-2">
                                    <input id="email" name="email" rows="3"
                                        value="{{ old('email', $booking->email) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Email of the booking.
                                </p>
                                @error('email')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-- name --}}
                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                    Name
                                </label>
                                <div class="mt-2">
                                    <input id="name" name="name" rows="3"
                                        value="{{ old('name', $booking->name) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Name of the booking.
                                </p>
                                @error('name')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-- date --}}
                            <div class="col-span-full">
    <label for="date" class="block text-sm font-medium leading-6 text-gray-900">
        Date
    </label>
    <div class="mt-2">
        <input type="date" id="date" name="date"
               value="{{ old('date', $booking->date) }}"
               class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
    </div>
    <p class="mt-3 text-sm leading-6 text-gray-600">
        Date of the booking.
    </p>
    @error('date')
        <p class="mt-3 text-sm leading-6 text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>

                            {{-- time --}}
                            <div class="col-span-full">
    <label for="time" class="block text-sm font-medium leading-6 text-gray-900">
        Time
    </label>
    <div class="mt-2">
        <input type="time" id="time" name="time"
               value="{{ old('time', $booking->time) }}"
               class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
    </div>
    <p class="mt-3 text-sm leading-6 text-gray-600">
        Time of the booking.
    </p>
    @error('time')
        <p class="mt-3 text-sm leading-6 text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>

                            {{-- mobile --}}
                            <div class="col-span-full">
                                <label for="mobile" class="block text-sm font-medium leading-6 text-gray-900">
                                    Mobile
                                </label>
                                <div class="mt-2">
                                    <input id="mobile" name="mobile" rows="3"
                                        value="{{ old('mobile', $booking->mobile) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Mobile of the booking.
                                </p>
                                @error('mobile')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-- gender field--}}
                            <div class="col-span-full">
                                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">
                                Gender
                                </label>
                                <div class="mt-2">
                                    <select id="gender" name="gender" class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="Male" {{ old('gender', $booking->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender', $booking->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ old('gender', $booking->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                Gender of the booking.
                                </p>
                                @error('gender')
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

