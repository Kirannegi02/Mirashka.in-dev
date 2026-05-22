@extends('frontend.layouts.app')

@section('content')
  <div class="auth-page">
    <div class="auth-wrapper">
      <!-- ── LEFT: Branding Panel ── -->
      <div class="auth-brand">
        <div class="brand-bg">
          <div class="brand-blob brand-blob-1"></div>
          <div class="brand-blob brand-blob-2"></div>
          <div class="brand-blob brand-blob-3"></div>
        </div>
        <div class="brand-content">
          <div class="brand-logo">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Logo">
              <rect width="32" height="32" rx="8" fill="white" fill-opacity="0.15"/>
              <path d="M10 22L16 10L22 22" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12.5 18H19.5" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
            <span>Elevate</span>
          </div>
          <div class="brand-text">
            <h1>Set New Password</h1>
            <p>Your new password must be different from previously used passwords.</p>
          </div>
          <div class="brand-features">
            <div class="feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="Check"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Minimum 8 characters</span>
            </div>
            <div class="feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="Check"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Encrypted & secure</span>
            </div>
            <div class="feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="Check"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Instant account access</span>
            </div>
          </div>
        </div>
        <div class="brand-footer">
          <p>Trusted by <strong>2,400+</strong> businesses worldwide</p>
        </div>
      </div>

      <!-- ── RIGHT: Form Card ── -->
      <div class="auth-form-panel">
        <div class="auth-card">
          <!-- Fixed header -->
          <div class="auth-card-header">
            <a href="{{ route('clientportallogin') }}" class="back-link">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
              Back to login
            </a>
            <div class="brand-mini">Elevate</div>
          </div>

          <!-- Scrollable form content -->
          <div class="auth-card-body">
            <div class="form-header">
              <h2>Create new password</h2>
              <p>Enter your new password below</p>
            </div>

            <form method="post" class="auth-form" action="{{ route('password.update') }}">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <div class="input-icon-wrap">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-label="Email"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                  </span>
                  <input type="email" class="form-control" name="email" id="email" autocomplete="email" value="{{ old('email', $email ?? '') }}" placeholder="you@example.com" required>
                </div>
                @error('email')<span class="error-msg">{{ $message }}</span>@enderror
              </div>

              <div class="form-group">
                <label for="password" class="form-label">New Password</label>
                <div class="input-icon-wrap">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-label="Lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                  </span>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Min. 8 characters" required>
                </div>
                @error('password')<span class="error-msg">{{ $message }}</span>@enderror
              </div>

              <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <div class="input-icon-wrap">
                  <span class="input-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-label="Lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                  </span>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" required>
                </div>
                @error('password_confirmation')<span class="error-msg">{{ $message }}</span>@enderror
              </div>

              <button type="submit" class="btn-auth btn-auth-primary w-100">
                <span>Reset password</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="Arrow"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </button>
            </form>
          </div>
        </div>
        <p class="auth-footer-note">&copy; {{ date('Y') }} Elevate. All rights reserved.</p>
      </div>
    </div>
  </div>

<style>
:root {
  --auth-primary: #006039;
  --auth-primary-light: #006039;
  --auth-primary-dark: #006039;
  --auth-accent: #006039;
  --auth-bg: #f8fafc;
  --auth-surface: #ffffff;
  --auth-border: #e2e8f0;
  --auth-text: #1e293b;
  --auth-text-muted: #64748b;
  --auth-error: #ef4444;
  --auth-success: #10b981;
  --auth-radius: 20px;
  --auth-radius-sm: 12px;
  --auth-transition: .3s cubic-bezier(.4,0,.2,1);
  --font-sans: var(--mirashka-font-primary);
}

.auth-page { width: 100%; height: 100vh; background: var(--auth-bg); font-family: var(--font-sans); color: var(--auth-text); display: flex; align-items: center; justify-content: center; }
.auth-wrapper { display: flex; width: 100%; height: 100%; max-width: 100%; border-radius: 0; overflow: hidden; box-shadow: none; background: #fff; }

.auth-brand { position: relative; flex: 1; background: linear-gradient(135deg, #1e1b4b 0%, #312e81 30%, #4f46e5 60%, #0ea5e9 100%); color: #fff; display: flex; flex-direction: column; justify-content: center; padding: 40px 48px; overflow: hidden; }
.brand-bg { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
.brand-blob { position: absolute; border-radius: 50%; filter: blur(80px); opacity: .35; }
.brand-blob-1 { width: 400px; height: 400px; background: #818cf8; top: -100px; right: -100px; animation: floatBlob 8s ease-in-out infinite alternate; }
.brand-blob-2 { width: 300px; height: 300px; background: #06b6d4; bottom: -80px; left: -60px; animation: floatBlob 10s ease-in-out infinite alternate-reverse; }
.brand-blob-3 { width: 200px; height: 200px; background: #a78bfa; top: 50%; left: 30%; animation: floatBlob 6s ease-in-out infinite alternate; }
@keyframes floatBlob { from { transform: translate(0,0) scale(1); } to { transform: translate(30px, -20px) scale(1.1); } }
.brand-content { position: relative; z-index: 1; max-width: 480px; }
.brand-logo { display: inline-flex; align-items: center; gap: 10px; font-size: 1.35rem; font-weight: 700; letter-spacing: -.5px; margin-bottom: 48px; color: #fff; }
.brand-text h1 { font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 16px; letter-spacing: -.5px; color: #fff; }
.brand-text p { font-size: 1.05rem; opacity: .8; line-height: 1.7; margin-bottom: 40px; }
.brand-features { display: flex; flex-direction: column; gap: 16px; }
.feature-item { display: flex; align-items: center; gap: 12px; font-size: .95rem; opacity: .9; }
.feature-item svg { flex-shrink: 0; color: #34d399; background: rgba(52,211,153,.15); padding: 4px; border-radius: 6px; }
.brand-footer { position: relative; z-index: 1; margin-top: auto; padding-top: 48px; font-size: .8rem; opacity: .55; border-top: 1px solid rgba(255,255,255,.1); }

.auth-form-panel { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 32px 40px; background: var(--auth-bg); overflow: hidden; }
.auth-card { background: var(--auth-surface); border-radius: var(--auth-radius); width: 100%; max-width: 520px; height: 100%; max-height: 90vh; display: flex; flex-direction: column; overflow: hidden; }
.auth-card-header { flex-shrink: 0; padding: 32px 36px 0; }
.brand-mini { font-size: 1.1rem; font-weight: 700; color: var(--auth-text); margin-bottom: 20px; letter-spacing: -.3px; }
.back-link { display: inline-flex; align-items: center; gap: 6px; font-size: .85rem; color: var(--auth-text-muted); text-decoration: none; margin-bottom: 16px; transition: color var(--auth-transition); }
.back-link:hover { color: var(--auth-primary); }

.auth-card-body { flex: 1; overflow-y: auto; padding: 24px 36px 32px; scrollbar-width: thin; scrollbar-color: #cbd5e1 transparent; }
.auth-card-body::-webkit-scrollbar { width: 4px; }
.auth-card-body::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

.form-header { margin-bottom: 28px; }
.form-header h2 { font-size: 1.4rem; font-weight: 700; color: var(--auth-text); margin-bottom: 6px; letter-spacing: -.3px; }
.form-header p { font-size: .875rem; color: var(--auth-text-muted); }

.auth-form { display: flex; flex-direction: column; gap: 18px; }
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-label { font-size: .825rem; font-weight: 600; color: var(--auth-text); }
.input-icon-wrap { position: relative; display: flex; align-items: center; }
.input-icon { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--auth-text-muted); pointer-events: none; display: flex; align-items: center; z-index: 2; transition: color var(--auth-transition); }
.form-control { width: 100%; padding: 11px 14px 11px 42px; font-size: .9rem; font-family: var(--font-sans); color: var(--auth-text); background: #f8fafc; border: 1.5px solid var(--auth-border); border-radius: var(--auth-radius-sm); outline: none; transition: border-color var(--auth-transition), box-shadow var(--auth-transition), background var(--auth-transition); }
.form-control::placeholder { color: #94a3b8; font-size: .875rem; }
.form-control:focus { border-color: var(--auth-primary); background: #fff; box-shadow: 0 0 0 3px rgba(79,70,229,.12); }
.form-control:focus ~ .input-icon, .form-control:focus + .input-icon { color: var(--auth-primary); }
.error-msg { font-size: .78rem; color: var(--auth-error); font-weight: 500; display: block; }

.btn-auth { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 13px 24px; font-size: .925rem; font-weight: 600; font-family: var(--font-sans); border: none; border-radius: var(--auth-radius-sm); cursor: pointer; transition: transform var(--auth-transition), box-shadow var(--auth-transition); letter-spacing: .2px; }
.btn-auth-primary { background: linear-gradient(135deg, var(--auth-primary) 0%, var(--auth-accent) 100%); color: #fff; box-shadow: 0 4px 14px rgba(79,70,229,.35); }
.btn-auth-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(79,70,229,.45); }
.btn-auth-primary:active { transform: translateY(0); }
.btn-auth svg { transition: transform var(--auth-transition); }
.btn-auth:hover svg { transform: translateX(4px); }

.auth-footer-note { text-align: center; font-size: .78rem; color: var(--auth-text-muted); margin-top: 20px; }

@media (max-width: 900px) {
  .auth-wrapper { height: auto; min-height: 100vh; flex-direction: column; border-radius: 0; }
  .auth-brand { display: none; }
  .auth-form-panel { padding: 24px 20px; flex: 1; }
  .auth-card { max-width: 100%; border-radius: 16px; max-height: none; height: auto; }
  .auth-card-header { padding: 24px 24px 0; }
  .auth-card-body { padding: 20px 24px 24px; }
}
@media (max-width: 560px) {
  .auth-card { border-radius: 12px; }
  .auth-card-header { padding: 20px 20px 0; }
  .auth-card-body { padding: 16px 20px 20px; }
  .form-header h2 { font-size: 1.2rem; }
  .btn-auth { padding: 12px 20px; }
}
</style>
@endsection
