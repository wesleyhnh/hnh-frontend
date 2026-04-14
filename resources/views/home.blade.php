@extends('layouts.app')

@section('title', 'HereNOW Help – Help When and Where You Need It')
@section('description', 'The most holistic & personalized platform for total mental health treatment. Healthcare. Veterans. Students. Employers.')

@section('content')

{{-- ============================================================
     HERO SECTION
============================================================ --}}
<section id="hero-10" class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            {{-- Left: Headline + Compliance Badge --}}
            <div class="col-md-5 text-center">
                <div class="hero-txt">
                    {{-- 1px spacer --}}
                    <img src="https://herenowhelp.com/wp-content/uploads/2021/04/1Pixel.png"
                         alt="" class="img-fluid" style="height:1px;">

                    <h2 class="default-color">
                        Intelligent<br>Mental Health Platform
                    </h2>

                    <p>
                        The most holistic &amp; personalized platform for total mental health treatment.<br>
                        <strong>Healthcare. Veterans. Students. Employers.</strong>
                    </p>

                    {{-- Compliance Badge --}}
                    <div class="hero-badges mt-3">
                        <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00"
                           target="_blank" rel="noopener">
                            <img src="https://herenowhelp.com/wp-content/uploads/2024/02/HSISO-1.png"
                                 alt="HIPAA SOC-2 ISO-27001" class="img-fluid" style="max-width:260px;">
                        </a>
                    </div>

                    <p style="margin-top:15px;">
                        <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00"
                           target="_blank" rel="noopener" class="view-report">
                            View daily compliance report
                        </a>
                    </p>
                </div>
            </div>

            {{-- Spacer col --}}
            <div class="col-md-1 d-none d-md-block"></div>

            {{-- Right: Device Image --}}
            <div class="col-md-6 hero-device text-center">
                <img src="https://herenowhelp.com/wp-content/uploads/2022/07/home-screen-gray.png"
                     alt="HereNOW Help App" class="img-fluid">
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     TESTIMONIALS SECTION
============================================================ --}}
<section class="testimonials-section">
    <div class="container">
        <div class="row">

            {{-- Testimonial 1 --}}
            <div class="col-md-6">
                <div class="fbox-2">
                    <div class="fbox-2-txt">
                        <h5>``It's Like 10 Apps In 1``</h5>
                        <p>Including assessments, telehealth, treatment plans, meditations, fitness, rewards, etc., we saved thousands while reducing the number of platforms we needed. It's like 10 apps in 1.</p>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="rating-num">5.0</span>
                    </div>
                </div>
            </div>

            {{-- Testimonial 2 --}}
            <div class="col-md-6">
                <div class="fbox-2">
                    <div class="fbox-2-txt">
                        <h5>``It Basically Runs Itself``</h5>
                        <p>Its A.I. learns our user's needs and automatically adjusts the content for each individual user to improve outcomes, send smart alerts and increase engagement. It basically runs itself.</p>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-stroke"></i>
                        <span class="rating-num">4.9</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     SERVICES SECTION
============================================================ --}}
<section class="services-section">
    <div class="container">
        <div class="row">

            {{-- HEALTHCARE --}}
            <div class="col-md-6">
                <div class="service-card">
                    <div class="b-img">
                        <img src="https://herenowhelp.com/wp-content/uploads/2022/07/milestones-gray.png"
                             alt="HEALTHCARE">
                    </div>
                    <div class="fbox-2-txt">
                        <h5>HEALTHCARE</h5>
                        <p>Tools for intake, assessments, treatment plans and outcome measurements. Stay engaged after discharge, build community, reduce claims and increase referrals.<br>
                        <a href="https://herenowhelp.com/rehab/">LEARN MORE</a></p>
                    </div>
                </div>
            </div>

            {{-- VETERANS --}}
            <div class="col-md-6">
                <div class="service-card">
                    <div class="b-img">
                        <img src="https://herenowhelp.com/wp-content/uploads/2022/07/Iphone-Transparent-my-journey-gray.png"
                             alt="VETERANS">
                    </div>
                    <div class="fbox-2-txt">
                        <h5>VETERANS</h5>
                        <p>Connect with care teams, VAMCs &amp; VSOs. Tools to assess and self-manage PTSD, anxiety, improve sleep and suicide prevention. Chat rooms for peer community support.<br>
                        <a href="https://herenowhelp.com/veterans/">LEARN MORE</a></p>
                    </div>
                </div>
            </div>

            {{-- STUDENTS --}}
            <div class="col-md-6">
                <div class="service-card">
                    <div class="b-img">
                        <img src="https://herenowhelp.com/wp-content/uploads/2022/07/Virtual-Meeting-gray.png"
                             alt="STUDENTS">
                    </div>
                    <div class="fbox-2-txt">
                        <h5>STUDENTS</h5>
                        <p>K-12, Colleges and Universities. Learn to manage your own mental wellbeing while also connecting with peers and professionals before, during and after a crisis.<br>
                        <a href="https://herenowhelp.com/government/">LEARN MORE</a></p>
                    </div>
                </div>
            </div>

            {{-- EMPLOYERS --}}
            <div class="col-md-6">
                <div class="service-card">
                    <div class="b-img">
                        <img src="https://herenowhelp.com/wp-content/uploads/2022/07/Iphone-Transparent-one-on-one-gray.png"
                             alt="EMPLOYERS">
                    </div>
                    <div class="fbox-2-txt">
                        <h5>EMPLOYERS</h5>
                        <p>Engage and empower employees to understand, track and improve their mental wellbeing.
                        86% report improvement in Happiness and Productivity.<br>
                        <a href="https://herenowhelp.com/employee/" style="color:#fff;">LEARN MORE</a></p>
                    </div>
                </div>
            </div>

            {{-- PEER SUPPORT --}}
            <div class="col-md-6">
                <div class="service-card">
                    <div class="b-img">
                        <img src="https://herenowhelp.com/wp-content/uploads/2022/07/Iphone-Transparent-counselor-gray.png"
                             alt="PEER SUPPORT">
                    </div>
                    <div class="fbox-2-txt">
                        <h5>PEER SUPPORT</h5>
                        <p>Become a Peer Support Specialist via our PeerNOW Academy Certification. Create Jobs. Expand Resources.<br>
                        <a href="https://herenowhelp.com/peernow/">LEARN MORE</a></p>
                    </div>
                </div>
            </div>

            {{-- ADMIN DASHBOARD --}}
            <div class="col-md-6">
                <div class="service-card">
                    <div class="b-img">
                        <img src="https://herenowhelp.com/wp-content/uploads/2020/11/Computer-Icon.png"
                             alt="ADMIN DASHBOARD">
                    </div>
                    <div class="fbox-2-txt">
                        <h5>ADMIN DASHBOARD</h5>
                        <p>Explore, analyze and export all user data. Including integrations to Salesforce, EMRs &amp; more. No third party sharing. HIPAA, SOC-2, and ISO-27001 compliant.<br>
                        <a href="https://herenowhelp.com/login/">LEARN MORE</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     CUSTOM DESIGN & CONTENT SECTION
============================================================ --}}
<section class="custom-design-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="section-heading">Custom Design &amp; Content.</h2>
            </div>
        </div>

        <div class="row align-items-center">

            {{-- Column 1: Your Look & Feel --}}
            <div class="col-md-3">
                <h3 class="custom-col-heading">Your Look &amp; Feel</h3>
                <ul class="custom-col-list">
                    <li>Your Logo</li>
                    <li>Your Color Scheme</li>
                    <li>Upload Quotes</li>
                    <li>Hide/Show Features</li>
                    <li>Reorder Features</li>
                </ul>
            </div>

            {{-- Phone Mockup 1 --}}
            <div class="col-md-3">
                <div class="phone-mockup-wrap">
                    <img src="https://herenowhelp.com/wp-content/uploads/2022/07/Iphone-Transparent-home-page-gray-148x300.png"
                         alt="Home Page Mockup" class="img-fluid">
                </div>
            </div>

            {{-- Phone Mockup 2 --}}
            <div class="col-md-3">
                <div class="phone-mockup-wrap">
                    <img src="https://herenowhelp.com/wp-content/uploads/2022/07/Iphone-Transparent-my-journey-gray-e1658501025555-148x300.png"
                         alt="Journey Mockup" class="img-fluid">
                </div>
            </div>

            {{-- Column 2: Your Content --}}
            <div class="col-md-3">
                <h3 class="custom-col-heading">Your Content</h3>
                <ul class="custom-col-list">
                    <li>Upload Content</li>
                    <li>Videos (Youtube, etc.)</li>
                    <li>Audio, Articles, etc.</li>
                    <li>Manage Your Library</li>
                    <li>Add Support Resources</li>
                </ul>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     VIDEO SECTION — HOW IT WORKS
============================================================ --}}
<section class="video-section">
    <div class="container">
        <h3 class="theme-color">How It Works</h3>
        <div class="video-embed-wrap">
            <iframe
                src="https://www.youtube.com/embed/1tJmvntwCkE"
                title="HereNOW Help – How It Works"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>


{{-- ============================================================
     WHAT MAKES HERENOW HELP DIFFERENT? SECTION
============================================================ --}}
<section class="features-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>What Makes HereNOW Help Different?</h3>
                </div>
            </div>
        </div>

        <div class="row">

            {{-- Column 1 --}}
            <div class="col-md-4">
                <div class="feature-item">
                    <div class="feat-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="feat-text">
                        <h5>Fully Customizable</h5>
                        <p>Change the look, feel and features of your system to match your brand and objectives.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feat-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="feat-text">
                        <h5>24/7/365 Support</h5>
                        <p>Any time. Any place. No waiting days or weeks for help. For both providers and clients.</p>
                    </div>
                </div>
            </div>

            {{-- Column 2 --}}
            <div class="col-md-4">
                <div class="feature-item">
                    <div class="feat-icon">
                        <i class="fas fa-list-check"></i>
                    </div>
                    <div class="feat-text">
                        <h5>Implementation Support</h5>
                        <p>We assist with developing a thorough 30, 60 and 90 day rollout strategy.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feat-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="feat-text">
                        <h5>Access Code</h5>
                        <p>Control who has access to your customized system via a unique access code.</p>
                    </div>
                </div>
            </div>

            {{-- Column 3 --}}
            <div class="col-md-4">
                <div class="feature-item">
                    <div class="feat-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="feat-text">
                        <h5>User Data</h5>
                        <p>Capture the data you need to measure outcomes and reports for grants and reimbursement.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feat-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="feat-text">
                        <h5>High Risk Areas</h5>
                        <p>Clients set high risk areas to avoid (using geolocation). Alerts get sent to providers and loved ones.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     SCHEDULE A DEMO / CONTACT SECTION
============================================================ --}}
<section class="contact-section" id="Contact">
    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="section-title">
                    <h3>Schedule A Demo</h3>
                    <p>Increase Intakes, Engagement, Reimbursement...and More!</p>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="contact-form-wrapper">

                    @if(session('success'))
                        <div class="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="your-name" class="form-control"
                                       placeholder="Your Name"
                                       value="{{ old('your-name') }}"
                                       required maxlength="400">
                                @error('your-name')
                                    <div style="color:#e35029;font-size:.85rem;margin-top:-0.5rem;margin-bottom:.5rem;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="your-email" class="form-control"
                                       placeholder="Email Address"
                                       value="{{ old('your-email') }}"
                                       required maxlength="400">
                                @error('your-email')
                                    <div style="color:#e35029;font-size:.85rem;margin-top:-0.5rem;margin-bottom:.5rem;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <select name="your-subject" class="form-control">
                                    <option value="" selected disabled>I'm Interested As...</option>
                                    <option value="Rehab Center/s">Rehab Center/s</option>
                                    <option value="State & Local Government">State &amp; Local Government</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Insurance Provider">Insurance Provider</option>
                                    <option value="Potential Partner">Potential Partner</option>
                                    <option value="Press">Press</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <textarea name="your-message" class="form-control"
                                          placeholder="Your Message"
                                          maxlength="2000">{{ old('your-message') }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn-send">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>

@endsection
