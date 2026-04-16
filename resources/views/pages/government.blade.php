@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

@if($page->show_hero)
<section id="breadcrumbs-hero" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url('{{ asset('images/bg-graph-2.jpg') }}') center/cover no-repeat fixed;min-height:50vh;display:flex;align-items:center;padding-top:20px;padding-bottom:40px;margin-top:60px;">
  <div class="container text-center">
    <h2 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:600;font-size:2.4rem;margin-bottom:1rem;">{{ $page->hero_title }}</h2>
    <p style="color:rgba(255,255,255,.85);font-size:1.1rem;max-width:640px;margin:1rem auto;">{{ $page->hero_subtitle }}</p>
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

@if($page->show_body && $page->body)
<section style="background:#fff;padding:60px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10" style="color:#444;line-height:1.85;font-size:1rem;">
        {!! $page->body !!}
      </div>
    </div>
  </div>
</section>
@endif

@if($page->show_cta)
<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container text-center">
    @if($page->cta_subtext)
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.8rem;margin-bottom:1rem;">{{ $page->cta_subtext }}</h2>
    @endif
    @if($page->cta_text && $page->cta_url)
    <a href="{{ $page->cta_url }}" class="btn-send d-inline-block" style="text-decoration:none;">{{ $page->cta_text }}</a>
    @elseif($page->cta_text)
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block" style="text-decoration:none;">{{ $page->cta_text }}</a>
    @endif
  </div>
</section>
@endif

@endsection
