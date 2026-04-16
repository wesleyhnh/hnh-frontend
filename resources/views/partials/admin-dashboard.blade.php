{{-- ══════════════════════════════════════════════════════════════════════
     ADMIN DASHBOARD PARTIAL
     Usage: @include('partials.admin-dashboard')
══════════════════════════════════════════════════════════════════════ --}}
<section style="background:linear-gradient(135deg,rgba(74,141,170,0.92) 0%,rgba(62,151,181,0.92) 50%,rgba(45,122,148,0.92) 100%),url('{{ asset('images/bg-graph.jpg') }}') center/cover no-repeat;padding:80px 0;">
  <div class="container">
    <h3 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:800;font-size:2rem;margin-bottom:2.5rem;text-align:center;">ADMIN DASHBOARD</h3>

    <div class="row align-items-center">
      {{-- Left: Feature descriptions --}}
      <div class="col-lg-5">
        <div style="margin-bottom:2rem;">
          <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.25rem;margin-bottom:.75rem;">
            <i class="fas fa-chart-bar" style="margin-right:10px;color:#ee9f36;"></i> User Data
          </h4>
          <p style="color:rgba(255,255,255,.85);font-size:.95rem;line-height:1.7;">
            Analyze and export all user data for reporting, reimbursement and integrations with other platforms (i.e. SalesForce, ERM's, etc.).
          </p>
        </div>

        <div style="margin-bottom:2rem;">
          <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.25rem;margin-bottom:.75rem;">
            <i class="fas fa-poll" style="margin-right:10px;color:#ee9f36;"></i> Surveys
          </h4>
          <p style="color:rgba(255,255,255,.85);font-size:.95rem;line-height:1.7;">
            Measure user satisfaction, mental health status and recovery progress via customized surveys that can be scheduled, automated and sent on-demand in-app.
          </p>
        </div>

        <div style="margin-bottom:2rem;">
          <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.25rem;margin-bottom:.75rem;">
            <i class="fas fa-calendar-alt" style="margin-right:10px;color:#ee9f36;"></i> Calendars
          </h4>
          <p style="color:rgba(255,255,255,.85);font-size:.95rem;line-height:1.7;">
            Tools for healthcare providers to manage appointments; Recovery centers to manage clients calendars and group meetings; and Coordinators to manage community events.
          </p>
        </div>

        <div>
          <h4 style="color:#fff;font-family:'Nunito',sans-serif;font-weight:700;font-size:1.25rem;margin-bottom:.75rem;">
            <i class="fas fa-plug" style="margin-right:10px;color:#ee9f36;"></i> Integrations
          </h4>
          <p style="color:rgba(255,255,255,.85);font-size:.95rem;line-height:1.7;">
            Fully integrate with your EMR or data platform so all of your data is connected.
          </p>
        </div>
      </div>

      {{-- Right: MacBook image --}}
      <div class="col-lg-7 text-center mt-4 mt-lg-0">
        <img src="{{ asset('images/admin-dashboard.png') }}" alt="Admin Dashboard" style="max-width:100%;filter:drop-shadow(0 20px 50px rgba(0,0,0,.4));">
      </div>
    </div>
  </div>
</section>
