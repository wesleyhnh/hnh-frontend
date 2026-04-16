@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

@include('partials.contact-form', ['subtitle' => ''])

<section style="background:#1a2d3a;padding:60px 0;">
  <div class="container">
    <div class="row">
      @php $benefits = [
        ['icon'=>'fa-users','title'=>'ENGAGE ALUMNI','body'=>'Build community w/ message boards. Connect via talk, text &amp; video. Send surveys. Announce events...and more.'],
        ['icon'=>'fa-chart-line','title'=>'MEASURE OUTCOMES','body'=>'Do assessments, create treatment plans, set goals and track progress. Explore &amp; export all user data.'],
        ['icon'=>'fa-share','title'=>'INCREASE REFERRALS','body'=>'Engage family and friends with tools to connect, track progress, share stories and invite others in need.'],
      ]; @endphp
      @foreach($benefits as $b)
      <div class="col-md-4 mb-3">
        <div style="text-align:center;color:#fff;">
          <div style="font-size:2.5rem;margin-bottom:0.8rem;"><i class="fas {{ $b['icon'] }}"></i></div>
          <h5 style="font-weight:700;font-size:1.1rem;margin-bottom:0.8rem;color:#fff;">{{ $b['title'] }}</h5>
          <p style="font-size:0.9rem;line-height:1.5;color:rgba(255,255,255,.85);">{{ $b['body'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section style="background:url('{{ asset('images/bg-map.png') }}') center/cover no-repeat,#f8f9fb;background-attachment:fixed;padding:80px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3 style="text-align:center;color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:2rem;margin-bottom:3rem;">How It Works</h3>
        <div style="text-align:center;">
          <iframe style="border:20px solid white;border-radius:8px;box-shadow:0 8px 32px rgba(0,0,0,0.3);" width="100%" height="400" src="https://www.youtube.com/embed/ysweTz-9oZs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Feature Showcase with iPhone Mockups -->
<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h3 style="color:#333;font-size:1.4rem;font-weight:700;margin-bottom:1rem;">Key Platform Features</h3>
      <p style="color:#666;max-width:600px;margin:0 auto;font-size:1rem;">Experience powerful tools designed for engagement, treatment, and outcomes</p>
    </div>
    <div class="row" style="display:flex;flex-wrap:wrap;justify-content:center;gap:30px;align-items:flex-start;">
      <div style="flex:0 1 150px;text-align:center;">
        <img src="{{ asset('images/Iphone-Transparent-one-on-one-gray.png') }}" alt="Virtual Meetings - Text, Talk, Video" style="max-width:100%;height:auto;margin-bottom:1rem;">
        <h5 style="color:#333;font-weight:700;font-size:.95rem;margin-bottom:.5rem;">Virtual Meetings</h5>
        <p style="color:#666;font-size:.85rem;line-height:1.6;">Talk, Text & Video with integrated calendar and reminders</p>
      </div>
      <div style="flex:0 1 150px;text-align:center;">
        <img src="{{ asset('images/Iphone-Transparent-Health-Summary-gray.png') }}" alt="In-Treatment - Assessments and Treatment Plans" style="max-width:100%;height:auto;margin-bottom:1rem;">
        <h5 style="color:#333;font-weight:700;font-size:.95rem;margin-bottom:.5rem;">In-Treatment</h5>
        <p style="color:#666;font-size:.85rem;line-height:1.6;">Assessments, treatment plans & progress tracking</p>
      </div>
      <div style="flex:0 1 150px;text-align:center;">
        <img src="{{ asset('images/Iphone-Transparent-my-journey-gray.png') }}" alt="Aftercare - Message Boards and Self-Assessments" style="max-width:100%;height:auto;margin-bottom:1rem;">
        <h5 style="color:#333;font-weight:700;font-size:.95rem;margin-bottom:.5rem;">Aftercare</h5>
        <p style="color:#666;font-size:.85rem;line-height:1.6;">Message boards, self-assessments & peer support</p>
      </div>
      <div style="flex:0 1 150px;text-align:center;">
        <img src="{{ asset('images/Virtual-Meeting-gray.png') }}" alt="Loved Ones - Support Community" style="max-width:100%;height:auto;margin-bottom:1rem;">
        <h5 style="color:#333;font-weight:700;font-size:.95rem;margin-bottom:.5rem;">Loved Ones</h5>
        <p style="color:#666;font-size:.85rem;line-height:1.6;">Support community for family & friends</p>
      </div>
      <div style="flex:0 1 150px;text-align:center;">
        <img src="{{ asset('images/Iphone-Transparent-counselor-gray.png') }}" alt="Peer Support - Certification and Jobs" style="max-width:100%;height:auto;margin-bottom:1rem;">
        <h5 style="color:#333;font-weight:700;font-size:.95rem;margin-bottom:.5rem;">Peer Support</h5>
        <p style="color:#666;font-size:.85rem;line-height:1.6;">Peer certification and meaningful employment</p>
      </div>
    </div>
  </div>
</section>

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-comments','title'=>'Community & Communication','body'=>'Build community with message boards. Connect via talk, text & video. Send surveys. Announce events...and more.'],
        ['icon'=>'fa-clipboard-list','title'=>'Treatment Plans & Outcomes','body'=>'Do assessments, create treatment plans, set goals and track progress. Explore & export all user data.'],
        ['icon'=>'fa-heart','title'=>'Family & Friends Engagement','body'=>'Engage family and friends with tools to connect, track progress, share stories and invite others in need.'],
        ['icon'=>'fa-calendar','title'=>'Scheduling & Reminders','body'=>'Talk, Text & Video. Calendars. Reminders. EMR Integration. Satisfaction Reviews.'],
        ['icon'=>'fa-brain','title'=>'Clinical Tools','body'=>'Assessments. Treatment Plans. Guided Meditations. Surveys. Track Progress. Smart Alerts.'],
        ['icon'=>'fa-map-pin','title'=>'Safety & Risk Management','body'=>'Set Risk areas. Share progress. Message Boards. Self-Assessments. Guided Meditations. Library.'],
      ]; @endphp
      @foreach($features as $f)
      <div class="col-md-4 mb-4">
        <div class="feat-item">
          <div class="feat-icon"><i class="fas {{ $f['icon'] }}"></i></div>
          <div class="feat-text"><h5>{{ $f['title'] }}</h5><p>{{ $f['body'] }}</p></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Engage Patients & Alumni Section -->
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;">
      <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:2rem;">Engage Patients & Alumni</h3>
    </div>
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1.25rem;">Build Community</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;line-height:2.2;">
              <li style="margin-bottom:0.5rem;">Message Boards</li>
              <li style="margin-bottom:0.5rem;">Share Stories</li>
              <li style="margin-bottom:0.5rem;">Join Discussions</li>
              <li style="margin-bottom:0.5rem;">Moderate Posts & Users</li>
              <li style="margin-bottom:0.5rem;">Make Referrals</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/Iphone-Transparent-my-journey-gray.png') }}" alt="Build Community" style="max-height:250px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1.25rem;">Real-Time Alerts</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;line-height:2.2;">
              <li style="margin-bottom:0.5rem;">Alerts for high risk areas</li>
              <li style="margin-bottom:0.5rem;">Alerts for low engagement</li>
              <li style="margin-bottom:0.5rem;">Alerts based on surveys</li>
              <li style="margin-bottom:0.5rem;">Alerts for red flags</li>
              <li style="margin-bottom:0.5rem;"><u><i>Completely customizable</i></u></li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/Iphone-Transparent-Health-Summary-gray.png') }}" alt="Real-Time Alerts" style="max-height:250px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Improve & Measure Outcomes Section -->
<section style="background:url('{{ asset('images/bg-graph-2-white.jpg') }}') center/cover no-repeat,#fff;padding:80px 0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;">
      <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:2rem;">Improve & Measure Outcomes</h3>
    </div>
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1.25rem;">TeleHealth Tools</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;line-height:2.2;">
              <li style="margin-bottom:0.5rem;">Manage Calendars</li>
              <li style="margin-bottom:0.5rem;">Text. Talk. Video.</li>
              <li style="margin-bottom:0.5rem;">Create and Send surveys</li>
              <li style="margin-bottom:0.5rem;">Capture ALL Data</li>
              <li style="margin-bottom:0.5rem;">Integrate – SalesForce & EMRs</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/Iphone-Transparent-one-on-one-gray.png') }}" alt="TeleHealth Tools" style="max-height:250px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1.25rem;">Track Outcomes</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;line-height:2.2;">
              <li style="margin-bottom:0.5rem;">Create Treatment Plans</li>
              <li style="margin-bottom:0.5rem;">Set Goals & Track Progress</li>
              <li style="margin-bottom:0.5rem;">Customizable Outcome Surveys</li>
              <li style="margin-bottom:0.5rem;">Explore & Export All Data</li>
              <li style="margin-bottom:0.5rem;"><u><i>Measure real impact</i></u></li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/Iphone-Transparent-Health-Summary-gray.png') }}" alt="Track Outcomes" style="max-height:250px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Customize App Section -->
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;">
      <h3 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:2rem;">Customize App</h3>
    </div>
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1.25rem;">Your Look & Feel</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;line-height:2.2;">
              <li style="margin-bottom:0.5rem;">Use Your Logo</li>
              <li style="margin-bottom:0.5rem;">Your Color Scheme</li>
              <li style="margin-bottom:0.5rem;">Pick Quotes</li>
              <li style="margin-bottom:0.5rem;">Pick Library Content</li>
              <li style="margin-bottom:0.5rem;">Share Your Resources</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/phone-home-gray.png') }}" alt="Your Look & Feel" style="max-height:250px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h4 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.3rem;margin-bottom:1.25rem;">Track Progress</h4>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;line-height:2.2;">
              <li style="margin-bottom:0.5rem;">Progress Updates</li>
              <li style="margin-bottom:0.5rem;">Alerts for High Risk Areas</li>
              <li style="margin-bottom:0.5rem;">Alerts for Low Engagement</li>
              <li style="margin-bottom:0.5rem;">Alerts Based on Surveys</li>
              <li style="margin-bottom:0.5rem;"><u><i>Completely customizable</i></u></li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/phone-milestones-gray.png') }}" alt="Track Progress" style="max-height:250px;filter:drop-shadow(0 8px 24px rgba(0,0,0,.15));">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Device Mockup Showcase Section -->
<section style="background:#fff;padding:60px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/home-screen-gray.png') }}" alt="Responsive Device Design - Phone and Computer Mockup" style="max-width:100%;height:auto;box-shadow:0 10px 40px rgba(0,0,0,.1);border-radius:12px;">
      </div>
      <div class="col-md-6">
        <h3 style="color:#333;font-size:1.4rem;font-weight:700;margin-bottom:1.5rem;">Responsive Platform Design</h3>
        <p style="color:#666;margin-bottom:1rem;line-height:1.8;">Access your wellness platform from any device - desktop, tablet, or mobile. Our responsive design ensures a seamless experience across all screen sizes with full functionality wherever your participants are.</p>
        <ul style="list-style:none;padding:0;color:#666;line-height:2;">
          <li>✓ Mobile-first design philosophy</li>
          <li>✓ Full feature parity across devices</li>
          <li>✓ Optimized touch interactions</li>
          <li>✓ Fast loading and performance</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Admin Dashboard Section with Laptop Mockup -->
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h3 style="color:#333;font-size:1.4rem;font-weight:700;margin-bottom:1.5rem;">Admin Dashboard & Analytics</h3>
        <p style="color:#666;margin-bottom:1.5rem;line-height:1.8;">Powerful admin tools for system management, user oversight, and data-driven decision making.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
          <div>
            <h5 style="color:#3e97b5;font-weight:600;margin-bottom:.5rem;font-size:.95rem;">User Management</h5>
            <ul style="list-style:none;padding:0;color:#666;font-size:.9rem;line-height:1.8;">
              <li>✓ Create & manage users</li>
              <li>✓ Assign permissions</li>
              <li>✓ Activity monitoring</li>
            </ul>
          </div>
          <div>
            <h5 style="color:#3e97b5;font-weight:600;margin-bottom:.5rem;font-size:.95rem;">Data & Reporting</h5>
            <ul style="list-style:none;padding:0;color:#666;font-size:.9rem;line-height:1.8;">
              <li>✓ Export all user data</li>
              <li>✓ Custom reports</li>
              <li>✓ Outcome tracking</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/MacBook.png') }}" alt="Admin Dashboard on MacBook - User Management and Analytics" style="max-width:100%;height:auto;box-shadow:0 10px 40px rgba(0,0,0,.1);">
      </div>
    </div>
  </div>
</section>

<!-- Compliance & Compliance Section -->
<section style="background:#f8f9fb;padding:60px 0;text-align:center;">
  <div class="container">
    <h4 style="color:#333;font-size:1.2rem;font-weight:700;margin-bottom:2rem;">Enterprise-Grade Security & Compliance</h4>
    <div style="display:flex;justify-content:center;margin-bottom:2rem;">
      <img src="{{ asset('images/hipaa-and-other-comp-e1657735562632.png') }}" alt="HIPAA, SOC-2, and ISO-27001 Compliance Certifications" style="max-height:100px;object-fit:contain;">
    </div>
    <p style="color:#666;max-width:600px;margin:0 auto;font-size:.95rem;line-height:1.8;">Our platform meets the highest standards for data security and regulatory compliance, protecting your users and organization with HIPAA, SOC-2, and ISO-27001 certifications.</p>
  </div>
</section>

@include('partials.contact-form', ['subtitle' => ''])

@endsection
