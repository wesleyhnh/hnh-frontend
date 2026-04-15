@extends('layouts.app')
@section('title', 'Government – HereNOW Help')
@section('description', 'Local & State Government. Helping communities support the mental health and addiction recovery of its residents.')

@section('content')
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:55vh;display:flex;align-items:center;padding-top:90px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.8rem;">Local &amp; State Government</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.15rem;max-width:680px;margin:1rem auto;">Helping communities (City, County, State, etc) support the mental health and addiction recovery of its residents.</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>

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

<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container text-center">
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">Support Your Community's Mental Health</h2>
    <p style="color:#444;max-width:680px;margin:0 auto 2rem;">Partner with HereNOW Help to provide your residents with 24/7 access to mental health tools, peer support, and licensed professionals.</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>
@endsection
