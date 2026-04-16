@extends('layouts.app')

@section('title', 'HereNOW Help – Help When and Where You Need It')
@section('description', 'The most holistic & personalized platform for total mental health treatment. Healthcare. Veterans. Students. Employers.')

@section('content')

{{-- ══════════════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════════════ --}}
<section id="hero-10">
    <div class="container">
        <div class="row align-items-center">

            {{-- Left: text + badges --}}
            <div class="col-md-5">
                <div class="hero-txt" style="text-align: center;">
                    <h2>Intelligent<br>Mental Health Platform</h2>

                    <p>The most holistic &amp; personalized platform for total mental health treatment.<br>
                    <strong>Healthcare. Veterans. Students. Employers.</strong></p>

                    <div class="hero-badge mt-3">
                        <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00"
                           target="_blank" rel="noopener">
                            <img src="{{ asset('images/hipaa-badge.png') }}" alt="HIPAA SOC-2 ISO-27001">
                        </a>
                    </div>

                    <p style="margin-top:14px;">
                        <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00"
                           target="_blank" rel="noopener" class="view-report">
                            View daily compliance report
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-md-1 d-none d-md-block"></div>

            {{-- Right: device mockup --}}
            <div class="col-md-6 hero-device mt-4 mt-md-0">
                <img src="{{ asset('images/home-screen.png') }}" alt="HereNOW Help App on device">
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════════════════════════════════ --}}
<section class="testimonials-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="tbox">
                    <div class="tbox-quote">``It's Like 10 Apps In 1``</div>
                    <div class="tbox-body">Including assessments, telehealth, treatment plans, meditations, fitness, rewards, etc., we saved thousands while reducing the number of platforms we needed. It's like 10 apps in 1.</div>
                    <div class="tbox-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <span class="tbox-score">5.0</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tbox">
                    <div class="tbox-quote">``It Basically Runs Itself``</div>
                    <div class="tbox-body">Its A.I. learns our user's needs and automatically adjusts the content for each individual user to improve outcomes, send smart alerts and increase engagement. It basically runs itself.</div>
                    <div class="tbox-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-stroke"></i>
                        <span class="tbox-score">4.9</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════════
     SERVICES
══════════════════════════════════════════════════════════════════════ --}}
<section class="services-section">
    <div class="container">
        <div class="row">

            @php
            $services = [
                ['icon'=>'icon-healthcare.png','title'=>'HEALTHCARE',      'route'=>'rehab',     'body'=>'Tools for intake, assessments, treatment plans and outcome measurements. Stay engaged after discharge, build community, reduce claims and increase referrals.'],
                ['icon'=>'icon-veterans.png',  'title'=>'VETERANS',        'route'=>'veterans',  'body'=>'Connect with care teams, VAMCs &amp; VSOs. Tools to assess and self-manage PTSD, anxiety, improve sleep and suicide prevention. Chat rooms for peer community support.'],
                ['icon'=>'icon-students.png',  'title'=>'STUDENTS',        'route'=>'students',  'body'=>'K-12, Colleges and Universities. Learn to manage your own mental wellbeing while also connecting with peers and professionals before, during and after a crisis.'],
                ['icon'=>'icon-employers.png', 'title'=>'EMPLOYERS',       'route'=>'employees', 'body'=>'Engage and empower employees to understand, track and improve their mental wellbeing. 86% report improvement in Happiness and Productivity.'],
                ['icon'=>'icon-peer.png',      'title'=>'PEER SUPPORT',    'route'=>'peernow',   'body'=>'Become a Peer Support Specialist via our PeerNOW Academy Certification. Create Jobs. Expand Resources.'],
                ['icon'=>'icon-admin.png',     'title'=>'ADMIN DASHBOARD', 'route'=>'support',   'body'=>'Explore, analyze and export all user data. Including integrations to Salesforce, EMRs &amp; more. No third party sharing. HIPAA, SOC-2, and ISO-27001 compliant.'],
            ];
            @endphp

            @foreach($services as $svc)
            <div class="col-md-6">
                <div class="svc-card">
                    <div class="svc-icon">
                        <img src="{{ asset('images/'.$svc['icon']) }}" alt="{{ $svc['title'] }}">
                    </div>
                    <div class="svc-body">
                        <h5>{{ $svc['title'] }}</h5>
                        <p>{!! $svc['body'] !!}<br>
                        <a class="learn-more" href="{{ route($svc['route']) }}">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════════
     CUSTOM DESIGN & CONTENT
══════════════════════════════════════════════════════════════════════ --}}
<section class="custom-design-section">
    <div class="container">

        <h2 class="section-heading">Custom Design &amp; Content.</h2>

        <div class="row align-items-center justify-content-center">

            {{-- Look & Feel list --}}
            <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <h3 class="custom-col-title">Your Look &amp; Feel</h3>
                <ul class="custom-col-list">
                    <li>Your Logo</li>
                    <li>Your Color Scheme</li>
                    <li>Upload Quotes</li>
                    <li>Hide/Show Features</li>
                    <li>Reorder Features</li>
                </ul>
            </div>

            {{-- Phone mockup 1 --}}
            <div class="col-md-3 col-6">
                <div class="phone-wrap">
                    <img src="{{ asset('images/phone-home.png') }}" alt="Home screen mockup">
                </div>
            </div>

            {{-- Phone mockup 2 --}}
            <div class="col-md-3 col-6">
                <div class="phone-wrap">
                    <img src="{{ asset('images/phone-journey.png') }}" alt="Journey screen mockup">
                </div>
            </div>

            {{-- Content list --}}
            <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <h3 class="custom-col-title">Your Content</h3>
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


{{-- ══════════════════════════════════════════════════════════════════════
     VIDEO — HOW IT WORKS
══════════════════════════════════════════════════════════════════════ --}}
<section class="video-section">
    <div class="container">
        <h3 class="section-head">How It Works</h3>
        <div class="video-wrap">
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


{{-- ══════════════════════════════════════════════════════════════════════
     FEATURES — WHAT MAKES HERENOW HELP DIFFERENT?
══════════════════════════════════════════════════════════════════════ --}}
<section class="features-section" style="background-image:linear-gradient(rgba(30,40,50,.45), rgba(30,40,50,.45)),url('{{ asset('images/bg-graph.jpg') }}');background-position:bottom center;background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">
    <div class="container">

        <h3 class="section-head">What Makes HereNOW Help Different?</h3>

        @php
        $features = [
            ['icon'=>'fa-paint-brush',  'title'=>'Fully Customizable',     'body'=>'Change the look, feel and features of your system to match your brand and objectives.'],
            ['icon'=>'fa-headset',      'title'=>'24/7/365 Support',        'body'=>'Any time. Any place. No waiting days or weeks for help. For both providers and clients.'],
            ['icon'=>'fa-list-check',   'title'=>'Implementation Support',  'body'=>'We assist with developing a thorough 30, 60 and 90 day rollout strategy.'],
            ['icon'=>'fa-lock',         'title'=>'Access Code',             'body'=>'Control who has access to your customized system via a unique access code.'],
            ['icon'=>'fa-chart-line',   'title'=>'User Data',               'body'=>'Capture the data you need to measure outcomes and reports for grants and reimbursement.'],
            ['icon'=>'fa-map-pin',      'title'=>'High Risk Areas',         'body'=>'Clients set high risk areas to avoid (using geolocation). Alerts get sent to providers and loved ones.'],
        ];
        $cols = array_chunk($features, 2);
        @endphp

        <div class="row">
            @foreach($cols as $col)
            <div class="col-md-4">
                @foreach($col as $feat)
                <div class="feat-item">
                    <div class="feat-icon"><i class="fas {{ $feat['icon'] }}"></i></div>
                    <div class="feat-text">
                        <h5>{{ $feat['title'] }}</h5>
                        <p>{{ $feat['body'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════════
     SCHEDULE A DEMO (Partial)
══════════════════════════════════════════════════════════════════════ --}}
@include('partials.contact-form')

@endsection
