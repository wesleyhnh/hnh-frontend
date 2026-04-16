@extends('layouts.app')
@section('title', $page->title)
@section('description', $page->meta_description)

@section('content')

@if($page->show_hero)
<section class="page-hero" style="background:linear-gradient(135deg,#4a8daa 0%,#87bcc6 50%,#3e97b5 100%),url('{{ asset('images/banner-1.jpg') }}') center/cover no-repeat fixed;min-height:55vh;display:flex;align-items:center;padding-top:90px;">
  <div class="container text-center">
    <h1 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2.8rem;">{{ $page->hero_title }}</h1>
    <p style="color:rgba(255,255,255,.9);font-size:1.15rem;max-width:640px;margin:1rem auto;">{{ $page->hero_subtitle }}</p>
    <p style="color:#ee9f36;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;">86% Improve Happiness and Productivity</p>
    <a href="{{ route('home') }}#Contact" class="btn-send d-inline-block mt-3" style="text-decoration:none;">Schedule A Demo</a>
  </div>
</section>
@endif

<section style="background:#1e2d38;padding:80px 0;">
  <div class="container">
    <div class="row">
      @php $features = [
        ['icon'=>'fa-brain','title'=>'Self-Management Tools','body'=>'Tools to empower students to manage their own mental wellbeing via journal, meditations, self-assessments, and more.'],
        ['icon'=>'fa-users','title'=>'Peer Community','body'=>'Build community via message boards and chat rooms. Train students to be support coaches to their peers.'],
        ['icon'=>'fa-video','title'=>'24/7 Professional Access','body'=>'Access licensed professionals 24/7/365 via talk, text, and video — before, during, and after a crisis.'],
        ['icon'=>'fa-bell','title'=>'Early Intervention Alerts','body'=>'Alert system to identify high-risk students and enable early intervention by counselors and administrators.'],
        ['icon'=>'fa-headphones','title'=>'10,000+ Meditations','body'=>'Meditations (10,000+ Video & Audio) to reduce stress, anxiety, and improve focus for K-12, college, and university students.'],
        ['icon'=>'fa-chart-bar','title'=>'Wellness Tracking','body'=>'Self-assessments to learn top needs. Daily mood check-ins. Track progress and share results with advisors.'],
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

@if($page->show_cta)
<section style="background:#f8f9fb;padding:80px 0;">
  <div class="container text-center">
    @if($page->cta_subtext)
    <h2 style="color:#3e97b5;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:1rem;">{{ $page->cta_subtext }}</h2>
    @endif
    @if($page->cta_description)
    <p style="color:#666;font-size:.95rem;max-width:600px;margin:0 auto 1.5rem;">{{ $page->cta_description }}</p>
    @endif
    @if($page->show_body && $page->body)
    <p style="color:#444;max-width:680px;margin:0 auto 2rem;">{!! $page->body !!}</p>
    @endif
    @if($page->cta_text && $page->cta_url)
    <a href="{{ $page->cta_url }}" class="btn-send d-inline-block" style="text-decoration:none;">{{ $page->cta_text }}</a>
    @endif
  </div>
</section>
@endif

@endsection
