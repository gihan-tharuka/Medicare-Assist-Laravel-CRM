<x-app-layout>
    <!-- Appointment Start -->
{{-- <div class="container-fluid bg-primary  py-5" style=" height: 100vh;"> --}}
    <div class="container-fluid bg-primary py-5 d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container py-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-white text-uppercase">Appointment</h5>
                    <h1 class="display-4">Make An Appointment For Your Loved One</h1>
                </div>
                <p class="text-white mb-5">To gain further insights or inquire about our comprehensive medical assistance services, we encourage you to schedule an appointment with one of our dedicated medical assistants. Whether you seek information on medication management, health record organization, or personalized healthcare plans, our team is ready to assist you.</p>
                <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Packages</a>
                <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    <form method="post" action="{{ route('booking.create') }}">
                        @csrf
                        <div class="row g-3">

                            @auth
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            @endauth

                            <input type="hidden" name="status" value="0">

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0 @error('mobile') is-invalid @enderror" name="mobile" placeholder="Your Mobile" style="height: 55px;" value="{{ old('mobile') }}" required>
                                @error('mobile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <select class="form-control bg-light border-0 @error('gender') is-invalid @enderror" name="gender" style="height: 55px;" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">

                                    <input type="date" name="date" class="form-control bg-light border-0 datetimepicker-input @error('date') is-invalid @enderror" placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;" value="{{ old('date') }}" required>
                                    @error('date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="col-12 col-sm-6">

                                    <input type="time" name="time" class="form-control bg-light border-0 datetimepicker-input @error('time') is-invalid @enderror" placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;" value="{{ old('time') }}" required>
                                    @error('time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="col-12">
                                @auth
                                    <button class="btn btn-primary w-100 py-3" type="submit" style="background-color: #13C5DD">Make An Appointment</button>
                                @endauth
                                @guest
                                    <a href="{{ route('login') }}" class="btn btn-primary w-100 py-3" style="background-color: #13C5DD">Log In To Make An Appointment</a>
                                @endguest
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Appointment End -->
</x-app-layout>
