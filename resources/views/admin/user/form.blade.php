@extends('backend.layouts.app')

@section('content')

<section id="main" class="section">

    <div class="container ">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    @if($user->id)
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Update User
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Update the user's details.
                    </p>
                    @else
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Create User
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Create a new user.
                    </p>
                    @endif
                </div>

                <form method="post"
                    @if($user->id)
                    action="{{ route('user.update', $user->id) }}"
                    @else
                    action="{{ route('user.store') }}"
                    @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                    @if ($user->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                    Name
                                </label>
                                <div class="mt-2">
                                    <input id="name" name="name" rows="3"
                                        value="{{ old('name', $user->name) }}"
                                        class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Name of the user.
                                </p>
                                @error('name')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                    Email
                                </label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" rows="3"
                                        value="{{ old('email', $user->email) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Email of the user.
                                </p>
                                @error('email')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="role" class="block text-sm font-medium leading-6 text-gray-900">
                                    Role
                                </label>
                                <div class="mt-2">
                                    <select id="role" name="role"
                                        class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->value }}"
                                                {{ ($user && old('role', $user?->role?->value) == $role->value ? 'selected' : '') }}>
                                                {{ ucwords(str_replace('_', ' ', Str::snake($role->name))) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Role of the user.
                                </p>
                                @error('role')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                        {{-- cancell button which returns the user to view all users --}}
                        <a href="{{ route('user.index') }}"
                            class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-700">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
