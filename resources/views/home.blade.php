<x-app-layout>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block  text-uppercase " style="color: whitesmoke">Welcome To MediCare Assist</h5>
                    <h1 class="display-1 text-white mb-md-4">Best Medical Assistance Solution for your loved ones</h1>
                    <div class="pt-2">
                        <a href=" {{ url('/contact') }}" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                        <a href="{{ url('/pricing') }}" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/aboutt.png" style="object-fit: cover; object-position: right;" >
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase ">About Us</h5>
                        <h1 class="display-4">Best Medical Assistance Service For You and Your Family</h1>
                    </div>
                    <p>
                        Welcome to MediCare Assist, where we are reshaping the landscape of medical assistance.
                        With timely medication reminders, appointment alerts, and a secure cloud-based patient profile system,
                        we ensure seamless healthcare management. Say goodbye to lost or damaged documents—our system enables
                        secure storage and easy access to your medical history. Our dedicated medical assistance team adds
                        a personal touch, providing document uploads, setting notifications, and making reminder calls.
                        Take control of your health with features like daily monitoring of blood sugar and blood pressure levels,
                        fostering better communication with healthcare professionals. MedCare is not just a service; it's a
                        commitment to your well-being.
                    </p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Staff</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-file-shield text-primary mb-3"></i>
                                <h6 class="mb-0">Secure<small class="d-block text-primary">Storage</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-bell text-primary mb-3"></i>
                                <h6 class="mb-0">Efficient<small class="d-block text-primary">Notifications</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-pills text-primary mb-3"></i>
                                <h6 class="mb-0">Medicine<small class="d-block text-primary">Delivery</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase ">Our Services</h5>
                <h1 class="display-4">Excellent Medical Assistance Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-bell text-white"></i>
                        </div>
                        <h4 class="mb-3">Medical Reminders</h4>
                        <p class="m-0">Timely and personalized medicine and appointment reminders to ensures seamless healthcare management and adherence to prescribed routines.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-file-shield text-white"></i>
                        </div>
                        <h4 class="mb-3">Medical Document Storage</h4>
                        <p class="m-0">A secure and accessible platform for users to store and manage their health records efficiently.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-address-card text-white"></i>
                        </div>
                        <h4 class="mb-3">Patients Profile System</h4>
                        <p class="m-0">A comprehensive platform for users to create, update, and organize their medical information, enhancing personalized care and accessibility.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-clipboard text-white"></i>
                        </div>
                        <h4 class="mb-3">Health Record Tracking</h4>
                        <p class="m-0">Empowers users to log and monitor their daily health metrics, fostering a holistic approach to well-being.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-pills text-white"></i>
                        </div>
                        <h4 class="mb-3">Medicine Delivery</h4>
                        <p class="m-0">A reliable solution for patients to receive prescribed medications promptly, promoting adherence and overall health.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-address-book text-white"></i>
                        </div>
                        <h4 class="mb-3">Emergency contact</h4>
                        <p class="m-0">Allows users to store and swiftly access critical contact information, ensuring rapid response during urgent situations.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    {{-- <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase ">Appointment</h5>
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
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" value="{{ Auth::user()->name }}" readonly>
                                </div>

                                    <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" value="{{ Auth::user()->email }}" readonly>
                                </div>
                                @endauth


                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Mobile " style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Gender" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;" required>
                                    </div>
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
    </div> --}}
<div class="container-fluid bg-primary my-5 py-5">
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





{{-- </div> --}}

    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 " style="padding-bottom: 20px;">
        <div class="container ">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-0">Medical Packages</h5>
                <h1 class="display-4">Excellent Medical Packages</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Basic Plan</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">Rs</small>6,499<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p class="mb-2">App Medication Reminders</p>
                        <p class="mb-2">App Appointment Reminders</p>
                        <p class="mb-2">Patient Profile System</p>
                        <p class="mb-2">Self-Monitoring Logs</p>
                        <p class="mb-2">Basic Customer Support</p>

                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Standard Plan</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">Rs</small>11,999<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p class="font-bold mb-3">Includes everything in the Basic Plan, Plus:</p>
                        <p class="mb-2">SMS Reminders</p>
                        <p class="mb-2">Enhanced Customer Support</p>
                        <p class="mb-2">Document Management Assistance</p>
                        <p class="mb-2">Monthly Summary Reports</p>
                        <p class="mb-2">Comprehensive Health Monitoring</p>

                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Premium Plan</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">Rs</small>21,999<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <p class="font-bold mb-3">Includes everything in the Standard Plan, Plus:</p>
                        <p class="mb-2">Personalized Voice Call Reminders</p>
                        <p class="mb-2">Medicine Delivery Service</p>
                        <p class="mb-2">Caregiver and Pharmacy Notifications</p>
                        <p class="mb-2">Family Access</p>
                        <p class="mb-2">Priority Customer Support</p>


                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4">Qualified Healthcare Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/team-1.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/team-2.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/team-3.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Search Start -->
    {{-- <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5>
                <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>
                <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
            </div>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                    <input type="text" class="form-control border-primary w-50" placeholder="Keyword">
                    <button class="btn btn-dark border-0 w-25">Search</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Search End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase">Testimonial</h5>
                <h1 class="display-4">Users Say About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">"The medical assistance service has been a game-changer for me, seamlessly organizing my health records and providing timely reminders, making healthcare management a breeze."</p>
                            <hr class="w-25 mx-auto">
                            <h3 style="padding-top: 15px">Tilini Nishani</h3>

                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">"As a caregiver, the comprehensive patients' profile system has been invaluable, allowing me to track and update medical information effortlessly, ensuring the best care for my loved ones."</p>
                            <hr class="w-25 mx-auto">
                            <h3 style="padding-top: 15px" >Hirusha Thilothma</h3>

                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">"The daily health record tracking service has transformed my approach to wellness, offering a user-friendly platform to monitor my health metrics and fostering a proactive and informed lifestyle."</p>
                            <hr class="w-25 mx-auto">
                            <h3 style="padding-top: 15px" >Siyumi Dinethma</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Testimonial End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Medical Blog Posts</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    {{-- <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script> --}}
{{-- </body> --}}
</x-app-layout>

