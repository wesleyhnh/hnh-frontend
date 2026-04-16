{{-- ══════════════════════════════════════════════════════════════════════
     CARE TYPES PARTIAL (Self-Care, Peer-Care, Clinical-Care)
     Usage: @include('partials.care-types', ['context' => 'veterans']) // or 'students'
══════════════════════════════════════════════════════════════════════ --}}
@php
  $contextLabel = $context ?? 'veterans';
  $audienceLabel = $contextLabel === 'students' ? 'students' : 'Veterans';
@endphp
<section style="background:url('{{ asset('images/bg-graph-title.png') }}') center/cover no-repeat;padding:40px 0;">
  <div class="container">
    <div class="row text-center">

      {{-- Self-Care --}}
      <div class="col-md-4 mb-3 mb-md-0">
        <div style="width:60px;height:60px;margin:0 auto .75rem;background:rgba(255,255,255,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <i class="fas fa-heart" style="font-size:1.5rem;color:#fff;"></i>
        </div>
        <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:.5rem;">Self-Care</h4>
        <p style="color:rgba(255,255,255,.9);font-size:.9rem;line-height:1.5;margin:0;">
          Tools to empower {{ $audienceLabel }} to manage their own mental well-being.
        </p>
      </div>

      {{-- Peer-Care --}}
      <div class="col-md-4 mb-3 mb-md-0">
        <div style="width:60px;height:60px;margin:0 auto .75rem;background:rgba(255,255,255,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <i class="fas fa-users" style="font-size:1.5rem;color:#fff;"></i>
        </div>
        <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:.5rem;">Peer-Care</h4>
        <p style="color:rgba(255,255,255,.9);font-size:.9rem;line-height:1.5;margin:0;">
          Tools to help {{ $audienceLabel }} support each other.
        </p>
      </div>

      {{-- Clinical-Care --}}
      <div class="col-md-4">
        <div style="width:60px;height:60px;margin:0 auto .75rem;background:rgba(255,255,255,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
          <i class="fas fa-user-md" style="font-size:1.5rem;color:#fff;"></i>
        </div>
        <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:.5rem;">Clinical-Care</h4>
        <p style="color:rgba(255,255,255,.9);font-size:.9rem;line-height:1.5;margin:0;">
          @if($contextLabel === 'students')
          Tools to help counselors and administrators engage and support students in crisis.
          @else
          Tools to help VA staff and clinicians engage and support Veterans in crisis.
          @endif
        </p>
      </div>

    </div>
  </div>
</section>
