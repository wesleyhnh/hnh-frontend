<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    body { font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
    .header { background: #3e97b5; color: #fff; padding: 20px; border-radius: 6px 6px 0 0; }
    .body { background: #f8f9fb; padding: 24px; border-radius: 0 0 6px 6px; }
    .field { margin-bottom: 16px; }
    .label { font-weight: bold; color: #555; font-size: 12px; text-transform: uppercase; letter-spacing: .5px; }
    .value { margin-top: 4px; font-size: 15px; }
    .message-box { background: #fff; border-left: 4px solid #3e97b5; padding: 16px; border-radius: 4px; }
  </style>
</head>
<body>
  <div class="header">
    <h2 style="margin:0;">New Contact Form Submission</h2>
    <p style="margin:6px 0 0;opacity:.85;">HereNOW Help</p>
  </div>
  <div class="body">
    <div class="field">
      <div class="label">Name</div>
      <div class="value">{{ $submission->name }}</div>
    </div>
    <div class="field">
      <div class="label">Email</div>
      <div class="value"><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></div>
    </div>
    <div class="field">
      <div class="label">Subject</div>
      <div class="value">{{ $submission->subject }}</div>
    </div>
    <div class="field">
      <div class="label">Message</div>
      <div class="message-box">{{ $submission->message }}</div>
    </div>
    <div class="field" style="margin-top:24px;font-size:13px;color:#888;">
      Received {{ $submission->created_at->format('F j, Y \a\t g:i A') }}
    </div>
  </div>
</body>
</html>
