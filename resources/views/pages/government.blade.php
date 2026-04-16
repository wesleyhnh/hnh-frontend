@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

@if($page->show_hero)
<section id="breadcrumbs-hero" style="background:url('{{ asset('images/hero-background.jpg') }}') center/cover no-repeat fixed;min-height:50vh;display:flex;align-items:center;padding-top:20px;padding-bottom:40px;margin-top:60px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5">
        <div class="hero-txt" style="text-align:center;">
          <h2 style="color:#024f7c;font-family:'Nunito',sans-serif;font-weight:700;font-size:2.5rem;margin-bottom:1.5rem;line-height:1.2;">{{ $page->hero_title }}</h2>
          <p style="color:#3e97b5;font-size:1rem;line-height:1.6;margin-bottom:1rem;">{{ $page->hero_subtitle }}</p>
          
          <div class="hero-badge mt-3" style="margin-bottom:1rem;">
            <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00" target="_blank" rel="noopener">
              <img src="{{ asset('images/hipaa-badge.png') }}" alt="HIPAA SOC-2 ISO-27001" style="max-width:200px;height:auto;">
            </a>
          </div>
          
          <p style="margin-top:14px;">
            <a href="https://app.drata.com/security-report/4f420f38-b5d7-45f6-80c7-7f918eed280d/bbd6ae71-4b61-43ed-a2e4-ff901c895a00" target="_blank" rel="noopener" class="view-report" style="color:#3e97b5;text-decoration:none;font-size:0.95rem;">
              View daily compliance report
            </a>
          </p>
        </div>
      </div>

      <div class="col-md-1 d-none d-md-block"></div>

      <div class="col-md-6 hero-device mt-4 mt-md-0" style="text-align:center;">
        <img src="{{ asset('images/home-screen-gray.png') }}" alt="Government Platform - Computer and Mobile Device Display" style="max-width:100%;height:auto;">
      </div>
    </div>
  </div>
</section>
@endif

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-network-wired','title'=>'Connect Residents with Providers','body'=>'Connecting residents with health providers and community agencies via virtual talk, text, video and in-person.'],
        ['icon'=>'fa-brain','title'=>'Self-Management Tools','body'=>'Tools to self-manage mental health and/or addiction recovery via goals, surveys, set high-risk areas, and more.'],
        ['icon'=>'fa-graduation-cap','title'=>'PeerNOW Certification','body'=>'Our PeerNOW Academy certifies Peer Support Recovery Specialists and provides them well-paying jobs.'],
        ['icon'=>'fa-map-marker-alt','title'=>'Provider Directory','body'=>'View profiles & proximity of local providers. Meet virtually via text, talk or video. Leave ratings & reviews.'],
        ['icon'=>'fa-chart-pie','title'=>'Community Data & Reporting','body'=>'Explore, analyze and export all community health data for grants, reporting, and policy decisions.'],
        ['icon'=>'fa-shield-halved','title'=>'HIPAA Compliant','body'=>'No third-party data sharing. HIPAA, SOC-2, and ISO-27001 compliant to protect community member privacy.'],
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

<!-- CLIENT APP Section -->
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;">
      <h3 style="text-align:center;"><span style="color:#3e97b5;font-size:2.75rem;">CLIENT APP</span></h3>
    </div>
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 style="text-align:center;">Find Providers</h3>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;">
              <li style="margin-bottom:5px;text-align:center;">View profiles &amp; proximity</li>
              <li style="margin-bottom:5px;text-align:center;">Meet Virtually – Text, talk or video</li>
              <li style="margin-bottom:5px;text-align:center;">Leave ratings &amp; reviews</li>
              <li style="margin-bottom:5px;text-align:center;">Journal</li>
              <li style="text-align:center;">Set high-risk areas</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/map.png') }}" alt="Find Providers" style="max-width:148px;height:auto;margin-bottom:1rem;" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 style="text-align:center;">Track Progress</h3>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;">
              <li style="margin-bottom:5px;text-align:center;">Set goals</li>
              <li style="margin-bottom:5px;text-align:center;">Track progress</li>
              <li style="margin-bottom:5px;text-align:center;">Answer surveys</li>
              <li style="margin-bottom:5px;text-align:center;">Journal</li>
              <li style="text-align:center;">Set high-risk areas</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/phone-milestones-gray.png') }}" alt="Track Progress" style="max-width:148px;height:auto;margin-bottom:1rem;" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROVIDER APP Section -->
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;">
      <h3 style="text-align:center;"><span style="color:#3e97b5;font-size:2.75rem;">PROVIDER APP</span></h3>
    </div>
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 style="text-align:center;">TeleHealth Tools</h3>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;">
              <li style="margin-bottom:5px;text-align:center;">Manage your calendar</li>
              <li style="margin-bottom:5px;text-align:center;">Meet Virtually (Text, talk or video)</li>
              <li style="margin-bottom:5px;text-align:center;">Create and send surveys</li>
              <li style="margin-bottom:5px;text-align:center;">Get alerts for high-risk clients</li>
              <li style="text-align:center;">Get data for reimbursement</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/Iphone-Transparent-one-on-one-gray.png') }}" alt="TeleHealth Tools" style="max-width:148px;height:auto;margin-bottom:1rem;" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 style="text-align:center;">Peer Certification</h3>
            <ul style="list-style:none;padding:0;margin:0;color:#666;font-size:.95rem;">
              <li style="margin-bottom:5px;text-align:center;">Enter our PeerNOW Academy</li>
              <li style="margin-bottom:5px;text-align:center;">Work as much as you want</li>
              <li style="margin-bottom:5px;text-align:center;">Get paid $15 – $20 an hr.</li>
              <li style="margin-bottom:5px;text-align:center;">Accept Appointments</li>
              <li style="text-align:center;">Enjoy meaningful work</li>
            </ul>
          </div>
          <div class="col-sm-6 text-center">
            <img src="{{ asset('images/Iphone-Transparent-counselor-gray.png') }}" alt="Peer Certification" style="max-width:148px;height:auto;margin-bottom:1rem;" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ADMIN DASHBOARD Section -->
<section style="background:#fff;padding:80px 0;">
  <div class="container">
    <div style="text-align:center;margin-bottom:3rem;">
      <h3 style="text-align:center;"><span style="color:#3e97b5;font-size:2.75rem;">ADMIN DASHBOARD</span></h3>
    </div>
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <div style="margin-bottom:2rem;">
          <div style="display:flex;align-items:flex-start;gap:20px;">
            <div style="font-size:2.5rem;color:#3e97b5;flex-shrink:0;">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h5 style="color:#333;font-weight:700;margin-bottom:0.5rem;">User Data</h5>
              <p style="color:#666;margin:0;font-size:.95rem;line-height:1.6;">Analyze and export all user data for reporting, reimbursement and integrations with other platforms (i.e. SalesForce, ERM's, etc.).</p>
            </div>
          </div>
        </div>
        
        <div style="margin-bottom:2rem;">
          <div style="display:flex;align-items:flex-start;gap:20px;">
            <div style="font-size:2.5rem;color:#3e97b5;flex-shrink:0;">
              <i class="fas fa-chart-line"></i>
            </div>
            <div>
              <h5 style="color:#333;font-weight:700;margin-bottom:0.5rem;">Surveys</h5>
              <p style="color:#666;margin:0;font-size:.95rem;line-height:1.6;">Measure user satisfaction, mental health status and recovery progress via customized surveys that can be scheduled, automated and sent on-demand in-app.</p>
            </div>
          </div>
        </div>
        
        <div style="margin-bottom:2rem;">
          <div style="display:flex;align-items:flex-start;gap:20px;">
            <div style="font-size:2.5rem;color:#3e97b5;flex-shrink:0;">
              <i class="fas fa-calendar"></i>
            </div>
            <div>
              <h5 style="color:#333;font-weight:700;margin-bottom:0.5rem;">Calendars</h5>
              <p style="color:#666;margin:0;font-size:.95rem;line-height:1.6;">Tools for healthcare providers to manage appointments; Recovery centers to manage clients calendars and group meetings; and Coordinators to manage community events.</p>
            </div>
          </div>
        </div>
        
        <div>
          <div style="display:flex;align-items:flex-start;gap:20px;">
            <div style="font-size:2.5rem;color:#3e97b5;flex-shrink:0;">
              <i class="fas fa-code"></i>
            </div>
            <div>
              <h5 style="color:#333;font-weight:700;margin-bottom:0.5rem;">Integrations</h5>
              <p style="color:#666;margin:0;font-size:.95rem;line-height:1.6;">Fully integrate with your EMR or data platform so all of your data is connected.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/MacBook.png') }}" alt="Admin Dashboard" style="max-width:100%;height:auto;">
      </div>
    </div>
  </div>
</section>

@include('partials.contact-form')

@endsection
