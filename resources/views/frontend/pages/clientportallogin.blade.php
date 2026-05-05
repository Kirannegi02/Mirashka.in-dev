
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
          
              <img src="{{ asset('assets/frontend/img/elevatenew.svg') }}" alt="ElevateOne Media" style="
    background-color: #fff;
    border-radius: 8px;
    padding: 10px;
">
          </div>
          <div class="brand-text">
            <h1 id="brandHeading">Welcome Back</h1>
            <p id="brandSubtext">Access your personalized dashboard and manage your projects with ease.</p>
          </div>
          <div class="brand-features">
            <div class="feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Real-time project tracking</span>
            </div>
            <div class="feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Secure client portal access</span>
            </div>
            <div class="feature-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Dedicated support team</span>
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
          <!-- Fixed header: brand + tabs -->
          <div class="auth-card-header">
            
            <!-- Tab Toggle -->
            <div class="auth-card-tabs-wrap">
              <ul class="nav nav-pills mb-0" id="authPillsTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link auth-tab-btn active" id="tabLogin" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link auth-tab-btn" id="tabRegister" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                </li>
              </ul>
              <div class="auth-tab-indicator" id="tabIndicator"></div>
            </div>
          </div>

          <!-- Scrollable form content -->
          <div class="auth-card-body">
            <div class="tab-content auth-tab-content" id="authPillsTabContent">

              <!-- ── Login Form ── -->
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="tabLogin">
                <div class="form-header">
                  <h2>Sign in to your account</h2>
                  <p>Enter your credentials below to access your portal</p>
                </div>
                <form class="auth-form" id="loginForm" method="post" action="{{ route('clientportallogin.post') }}">
                  @csrf
                  <div id="loginErrorMsg"></div>
                  <div class="form-group">
                    <label for="login_email" class="form-label">Email address</label>
                    <div class="input-icon-wrap">
                      
                      <input type="text" class="form-control" name="login" id="login_email" autocomplete="username" value="{{ old('login') }}" placeholder="you@example.com" required>
                    </div>
                    @error('login')<span class="error-msg">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-group">
                    <label for="login_password" class="form-label">Password</label>
                    <div class="input-icon-wrap">
                    
                      <input type="password" class="form-control" name="password" id="login_password" autocomplete="current-password" placeholder="Enter your password" required>
                      <button type="button" class="input-toggle" id="togglePassword" aria-label="Toggle password visibility">
                        <svg class="eye-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        <svg class="eye-closed d-none" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                      </button>
                    </div>
                    @error('password')<span class="error-msg">{{ $message }}</span>@enderror
                  </div>
                  <div class="form-row-2col">
                    <div class="form-check-group">
                      <input class="form-check-input" type="checkbox" name="remember" id="rememberme" value="forever">
                      <label class="form-check-label" for="rememberme">Remember me</label>
                    </div>
                    <a href="javascript:void(0)" class="forgot-link" id="showForgotPassword">Forgot password?</a>
                  </div>
                  <button type="submit" class="btn-auth btn-auth-primary w-100" id="loginSubmitBtn">
                    <span>Sign in</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-label="Arrow"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </button>
                </form>
                <div class="auth-divider"><span>or continue with</span></div>
                <div class="social-login">
                  <button type="button" class="btn-social">
                    <svg width="18" height="18" viewBox="0 0 24 24" aria-label="Google"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    <span>Google</span>
                  </button>
                  <button type="button" class="btn-social">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-label="GitHub"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    <span>GitHub</span>
                  </button>
                </div>
              </div>

              <!-- ── Register Form ── -->
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="tabRegister">
                <div class="form-header">
                  <h2>Create your account</h2>
                  <p>Get started with Elevate — it's free</p>
                </div>
                <form method="post" class="auth-form" id="registerForm" action="{{ route('register') }}">
                  @csrf
                  <div class="form-grid-2">
                    <div class="form-group">
                      <label for="reg_name" class="form-label">Full Name</label>
                      <div class="input-icon-wrap">
                       
                        <input type="text" class="form-control" name="name" id="reg_name" value="{{ old('name') }}" placeholder="John Doe" required>
                      </div>
                      @error('name')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="reg_username" class="form-label">Username</label>
                      <div class="input-icon-wrap">
                       
                        <input type="text" class="form-control" name="username" id="reg_username" value="{{ old('username') }}" placeholder="johndoe" required>
                      </div>
                      @error('username')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="reg_email" class="form-label">Email</label>
                      <div class="input-icon-wrap">
                        
                        <input type="email" class="form-control" name="email" id="reg_email" autocomplete="email" value="{{ old('email') }}" placeholder="john@example.com" required>
                      </div>
                      @error('email')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="reg_phone" class="form-label">Phone</label>
                      <div class="input-icon-wrap">
                        
                        <input type="tel" class="form-control" name="phone" id="reg_phone" value="{{ old('phone') }}" placeholder="+1 (555) 000-0000" required>
                      </div>
                      @error('phone')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="reg_company" class="form-label">Company Name</label>
                      <div class="input-icon-wrap">
                       
                        <input type="text" class="form-control" name="company_name" id="reg_company" value="{{ old('company_name') }}" placeholder="Acme Inc." required>
                      </div>
                      @error('company_name')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="reg_password" class="form-label">Password</label>
                      <div class="input-icon-wrap">
                        
                        <input type="password" class="form-control" name="password" id="reg_password" placeholder="Min. 8 characters" required>
                      </div>
                      @error('password')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="reg_password_confirmation" class="form-label">Confirm Password</label>
                      <div class="input-icon-wrap">
                        
                        <input type="password" class="form-control" name="password_confirmation" id="reg_password_confirmation" placeholder="Repeat password" required>
                      </div>
                      @error('password_confirmation')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                  </div>
                  <div class="form-info-text">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    <span>A link to set a new password will be sent to your email address.</span>
                  </div>
                  <div class="form-privacy">
                    By registering, you agree to our <a href="#" target="_blank">Terms of Service</a> and <a href="#" target="_blank">Privacy Policy</a>.
                  </div>
                  <button type="submit" class="btn-auth btn-auth-primary w-100">
                    <span>Create account</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </button>
                </form>
              </div>

            </div><!-- end tab-content -->

            <!-- ── Forgot Password View (hidden by default, shown via JS) ── -->
            <div class="auth-view" id="forgotPasswordView" style="display:none;">
              <div class="forgot-password-box">
                <!-- Forgot: Initial State -->
                <div id="forgotFormState">
                  <div class="form-header">
                    <div class="forgot-icon">
                      <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <h2>Forgot password?</h2>
                    <p>Enter your email and we'll send you a reset link</p>
                  </div>
                  <form id="forgotPasswordForm" method="post">
                    @csrf
                    <div id="forgotErrorMsg" class="mb-2"></div>
                    <div class="form-group">
                      <label for="forgot_email" class="form-label">Email address</label>
                      <div class="input-icon-wrap">
                       
                        <input type="email" class="form-control" name="email" id="forgot_email" placeholder="you@example.com" required>
                      </div>
                    </div>
                    <button type="submit" class="btn-auth btn-auth-primary w-100" id="forgotSubmitBtn">
                      <span class="btn-text">Send reset link</span>
                      <span class="btn-loader d-none"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spin" aria-label="Loading"><path d="M21 12a9 9 0 1 1-6.219-8.56"/></svg> Sending...</span>
                    </button>
                  </form>
                </div>
                <!-- Forgot: Success State -->
                <div id="forgotSuccessState" style="display:none;">
                  <div class="success-state">
                    <div class="success-icon">
                      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h2>Check your email</h2>
                    <p>We sent a password reset link to <strong id="sentEmail"></strong>. Check your inbox and click the link to reset your password.</p>
                    <div class="resend-wrap">
                      <span>Didn't receive it?</span>
                      <button type="button" class="btn-resend" id="resendLinkBtn">Resend</button>
                    </div>
                    <button type="button" class="btn-auth btn-auth-outline w-100 mt-3" id="backToLoginBtn">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                      Back to login
                    </button>
                  </div>
                </div>
                <!-- Forgot: Resend Success State -->
                <div id="resendSuccessState" style="display:none;">
                  <div class="success-state">
                    <div class="success-icon">
                      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h2>Link resent!</h2>
                    <p>We've sent another reset link to <strong id="resentEmail"></strong>. Please check your inbox.</p>
                    <button type="button" class="btn-auth btn-auth-outline w-100 mt-3" id="backToLoginFromResendBtn">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                      Back to login
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- end auth-card-body -->
        </div><!-- end auth-card -->
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
  --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
}

.auth-page { width: 100%; height: 100vh; background: var(--auth-bg); font-family: var(--font-sans); color: var(--auth-text); display: flex; align-items: center; justify-content: center; }
.auth-wrapper { display: flex; width: 100%; height: 100%; max-width: 100%; border-radius: 0; overflow: hidden; box-shadow: none; background: #fff; }

/* ── Brand Panel ── */
.auth-brand { position: relative; flex: 1; background: #006039; color: #fff; display: flex; flex-direction: column; justify-content: center; padding: 40px 48px; overflow: hidden; }
.brand-bg { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
.brand-blob { position: absolute; border-radius: 50%; filter: blur(80px); opacity: .35; }
.brand-blob-1 { width: 400px; height: 400px; background: #818cf8; top: -100px; right: -100px; animation: floatBlob 8s ease-in-out infinite alternate; }
.brand-blob-2 { width: 300px; height: 300px; background: #06b6d4; bottom: -80px; left: -60px; animation: floatBlob 10s ease-in-out infinite alternate-reverse; }
.brand-blob-3 { width: 200px; height: 200px; background: #a78bfa; top: 50%; left: 30%; animation: floatBlob 6s ease-in-out infinite alternate; }
@keyframes floatBlob { from { transform: translate(0,0) scale(1); } to { transform: translate(30px, -20px) scale(1.1); } }
.brand-content { position: relative; z-index: 1; max-width: 480px; }
.brand-logo { display: inline-flex; align-items: center; gap: 10px; font-size: 1.35rem; font-weight: 700; letter-spacing: -.5px; margin-bottom: 48px; color: #fff; }
.brand-text h1 { font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 16px; letter-spacing: -.5px; color: #fff; transition: opacity .2s ease; }
.brand-text p { font-size: 1.05rem; opacity: .8; line-height: 1.7; margin-bottom: 40px; transition: opacity .2s ease; }
.brand-features { display: flex; flex-direction: column; gap: 16px; }
.feature-item { display: flex; align-items: center; gap: 12px; font-size: .95rem; opacity: .9; }
.feature-item svg { flex-shrink: 0; color: #34d399; background: rgba(52,211,153,.15); padding: 4px; border-radius: 6px; }
.brand-footer { position: relative; z-index: 1; margin-top: auto; padding-top: 48px; font-size: .8rem; opacity: .55; border-top: 1px solid rgba(255,255,255,.1); }

/* ── Form Panel ── */
.auth-form-panel { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 32px 40px; background: var(--auth-bg); overflow: hidden; }
.auth-card { background: var(--auth-surface); border-radius: var(--auth-radius); width: 100%; max-width: 520px; height: 100%; max-height: 90vh; display: flex; flex-direction: column; overflow: hidden; }
.auth-card-header { flex-shrink: 0; padding: 32px 36px 0; }
.brand-mini { font-size: 1.1rem; font-weight: 700; color: var(--auth-text); margin-bottom: 20px; letter-spacing: -.3px; }
.auth-card-tabs-wrap { position: relative; }
.auth-card-body { flex: 1; overflow-y: auto; padding: 24px 36px 32px; scrollbar-width: thin; scrollbar-color: #cbd5e1 transparent; }
.auth-card-body::-webkit-scrollbar { width: 4px; }
.auth-card-body::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

/* ── Auth Tabs ── */
#authPillsTab { display: grid; grid-template-columns: 1fr 1fr; gap: 0; background: #f1f5f9; border-radius: var(--auth-radius-sm); padding: 5px; }
#authPillsTab .nav-item { position: relative; z-index: 2; }
.auth-tab-btn { width: 100%; background: transparent !important; border: none !important; padding: 10px 20px; font-size: .9rem; font-weight: 600; color: var(--auth-text-muted) !important; cursor: pointer; border-radius: 9px; transition: color var(--auth-transition); display: flex; align-items: center; justify-content: center; box-shadow: none !important; }
.auth-tab-btn.active { color: #fff !important; }
.auth-tab-indicator { position: absolute; top: 5px; left: 5px; width: calc(50% - 5px); height: calc(100% - 10px); background: linear-gradient(135deg, var(--auth-primary) 0%, var(--auth-accent) 100%); border-radius: 9px; transition: transform var(--auth-transition); z-index: 1; box-shadow: 0 2px 8px rgba(79,70,229,.3); pointer-events: none; }
.auth-tab-indicator[data-active="register"] { transform: translateX(100%); }

/* ── Auth View (forgot password) ── */
.auth-view { animation: fadeInUp .3s ease; }
@keyframes fadeInUp { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
.forgot-password-box { max-width: 100%; }
.forgot-icon { display: flex; align-items: center; justify-content: center; width: 64px; height: 64px; background: rgba(79,70,229,.08); border-radius: 16px; margin-bottom: 20px; color: var(--auth-primary); }
@media (max-width: 560px) {
  .forgot-icon { width: 52px; height: 52px; }
  .forgot-icon svg { width: 28px; height: 28px; }
  .success-icon { width: 64px; height: 64px; }
  .success-icon svg { width: 36px; height: 36px; }
}

/* ── Form Header ── */
.form-header { margin-bottom: 28px; }
.form-header h2 { font-size: 1.4rem; font-weight: 700; color: var(--auth-text); margin-bottom: 6px; letter-spacing: -.3px; }
.form-header p { font-size: .875rem; color: var(--auth-text-muted); }

/* ── Form Fields ── */
.auth-form { display: flex; flex-direction: column; gap: 18px; }
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-label { font-size: .825rem; font-weight: 600; color: var(--auth-text); }
.input-icon-wrap { position: relative; display: flex; align-items: center; }
.input-icon { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--auth-text-muted); pointer-events: none; display: flex; align-items: center; z-index: 2; transition: color var(--auth-transition); }
.form-control { width: 100%; padding: 11px 14px 11px 42px; font-size: .9rem; font-family: var(--font-sans); color: var(--auth-text); background: #f8fafc; border: 1.5px solid var(--auth-border); border-radius: var(--auth-radius-sm); outline: none; transition: border-color var(--auth-transition), box-shadow var(--auth-transition), background var(--auth-transition); }
.form-control::placeholder { color: #94a3b8; font-size: .875rem; }
.form-control:focus { border-color: var(--auth-primary); background: #fff; box-shadow: 0 0 0 3px rgba(79,70,229,.12); }
.form-control:focus ~ .input-icon, .form-control:focus + .input-icon { color: var(--auth-primary); }
.input-toggle { position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer; color: var(--auth-text-muted); padding: 2px; display: flex; align-items: center; transition: color var(--auth-transition); }
.input-toggle:hover { color: var(--auth-primary); }
.input-icon-wrap .form-control { padding-right: 42px; }
.error-msg { font-size: .78rem; color: var(--auth-error); font-weight: 500; display: block; }
.error-msg-inline { font-size: .78rem; color: var(--auth-error); font-weight: 500; display: block; }
.error-box { background: rgba(239,68,68,.08); border: 1px solid rgba(239,68,68,.2); color: var(--auth-error); padding: 10px 14px; border-radius: 10px; font-size: .85rem; margin-bottom: 16px; font-weight: 500; }
.error-box svg { flex-shrink: 0; }

/* ── 2-Column Grid ── */
.form-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 14px 16px; }

/* ── Form Helpers ── */
.form-row-2col { display: flex; align-items: center; justify-content: space-between; }
.form-check-group { display: flex; align-items: center; gap: 8px; }
.form-check-input { width: 17px; height: 17px; border-radius: 5px; border: 1.5px solid #cbd5e1; cursor: pointer; accent-color: var(--auth-primary); margin: 0; }
.form-check-label { font-size: .85rem; color: var(--auth-text-muted); cursor: pointer; user-select: none; }
.forgot-link { font-size: .85rem; font-weight: 600; color: var(--auth-primary); text-decoration: none; transition: color var(--auth-transition); }
.forgot-link:hover { color: var(--auth-primary-dark); }

/* ── Info & Privacy ── */
.form-info-text { display: flex; align-items: flex-start; gap: 8px; font-size: .8rem; color: var(--auth-text-muted); background: #f8fafc; padding: 10px 14px; border-radius: 10px; border: 1px solid var(--auth-border); }
.form-info-text svg { flex-shrink: 0; margin-top: 1px; color: var(--auth-accent); }
.form-privacy { font-size: .8rem; color: var(--auth-text-muted); text-align: center; }
.form-privacy a { color: var(--auth-primary); text-decoration: none; font-weight: 500; }
.form-privacy a:hover { text-decoration: underline; }

/* ── Buttons ── */
.btn-auth { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 13px 24px; font-size: .925rem; font-weight: 600; font-family: var(--font-sans); border: none; border-radius: var(--auth-radius-sm); cursor: pointer; transition: transform var(--auth-transition), box-shadow var(--auth-transition); letter-spacing: .2px; }
.btn-auth-primary { background: linear-gradient(135deg, var(--auth-primary) 0%, var(--auth-accent) 100%); color: #fff; box-shadow: 0 4px 14px rgba(79,70,229,.35); }
.btn-auth-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(79,70,229,.45); }
.btn-auth-primary:active { transform: translateY(0); }
.btn-auth-outline { background: #fff; color: var(--auth-primary); border: 1.5px solid var(--auth-primary); box-shadow: none; }
.btn-auth-outline:hover { background: rgba(79,70,229,.05); transform: translateY(-1px); }
.btn-auth svg { transition: transform var(--auth-transition); }
.btn-auth:hover svg { transform: translateX(-4px); }
.btn-auth-primary:hover svg { transform: translateX(4px); }

/* ── Social Login ── */
.auth-divider { display: flex; align-items: center; gap: 12px; margin: 20px 0; }
.auth-divider::before, .auth-divider::after { content: ''; flex: 1; height: 1px; background: var(--auth-border); }
.auth-divider span { font-size: .8rem; color: var(--auth-text-muted); white-space: nowrap; }
.social-login { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.btn-social { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 10px 16px; font-size: .85rem; font-weight: 500; font-family: var(--font-sans); background: #fff; color: var(--auth-text); border: 1.5px solid var(--auth-border); border-radius: var(--auth-radius-sm); cursor: pointer; transition: border-color var(--auth-transition), box-shadow var(--auth-transition), transform var(--auth-transition); }
.btn-social:hover { border-color: #94a3b8; box-shadow: 0 2px 8px rgba(0,0,0,.06); transform: translateY(-1px); }
.btn-social svg { flex-shrink: 0; }

/* ── Forgot Password States ── */
.success-state { text-align: center; padding: 10px 0; }
.success-icon { display: flex; align-items: center; justify-content: center; width: 80px; height: 80px; background: rgba(16,185,129,.08); border-radius: 50%; margin: 0 auto 20px; }
.success-state h2 { font-size: 1.4rem; font-weight: 700; color: var(--auth-text); margin-bottom: 12px; }
.success-state p { font-size: .875rem; color: var(--auth-text-muted); line-height: 1.6; margin-bottom: 20px; }
.success-state strong { color: var(--auth-text); }
.resend-wrap { display: flex; align-items: center; justify-content: center; gap: 8px; font-size: .85rem; color: var(--auth-text-muted); }
.btn-resend { background: none; border: none; color: var(--auth-primary); font-weight: 600; font-size: .85rem; cursor: pointer; text-decoration: underline; padding: 0; font-family: var(--font-sans); }
.btn-resend:hover { color: var(--auth-primary-dark); }

/* ── Spinner ── */
@keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
.spin { animation: spin 1s linear infinite; }
.d-none { display: none !important; }

/* ── Footer ── */
.auth-footer-note { text-align: center; font-size: .78rem; color: var(--auth-text-muted); margin-top: 20px; }

/* ── Utility ── */
.mb-2 { margin-bottom: 8px; }
.mt-3 { margin-top: 16px; }
.w-100 { width: 100%; }

/* ── Responsive ── */
@media (max-width: 900px) {
  .auth-wrapper { height: auto; min-height: 100vh; flex-direction: column; border-radius: 0; }
  .auth-brand { display: none; }
  .auth-form-panel { padding: 24px 20px; flex: 1; }
  .auth-card { max-width: 100%; border-radius: 16px; max-height: none; height: auto; }
  .auth-card-header { padding: 24px 24px 0; }
  .auth-card-body { padding: 20px 24px 24px; }
}
@media (max-width: 560px) {
  .form-grid-2 { grid-template-columns: 1fr; }
  .auth-card { border-radius: 12px; }
  .auth-card-header { padding: 20px 20px 0; }
  .auth-card-body { padding: 16px 20px 20px; }
  .form-header h2 { font-size: 1.2rem; }
  .btn-auth { padding: 12px 20px; }
  .social-login { grid-template-columns: 1fr 1fr; gap: 8px; }
}
@media (max-width: 380px) {
  .auth-card-header { padding: 16px 16px 0; }
  .auth-card-body { padding: 12px 16px 16px; }
  .social-login { grid-template-columns: 1fr; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {

  /* ── Tab indicator slide + brand panel text swap ── */
  var indicator = document.getElementById('tabIndicator');
  var brandHeading = document.getElementById('brandHeading');
  var brandSubtext = document.getElementById('brandSubtext');
  var brandContent = {
    login: { heading: 'Welcome Back', subtext: 'Access your personalized dashboard and manage your projects with ease.' },
    register: { heading: 'Join Elevate Today', subtext: 'Create your account and unlock powerful tools to grow your business.' }
  };
  var brandContentForgot = {
    heading: 'Reset Your Password',
    subtext: 'No worries, we\'ll send you reset instructions to get back into your account.'
  };

  function switchBrand(target) {
    if (!brandHeading || !brandSubtext) return;
    brandHeading.style.opacity = '0';
    brandSubtext.style.opacity = '0';
    setTimeout(function() {
      if (target === 'forgot') {
        brandHeading.textContent = brandContentForgot.heading;
        brandSubtext.textContent = brandContentForgot.subtext;
      } else {
        brandHeading.textContent = brandContent[target].heading;
        brandSubtext.textContent = brandContent[target].subtext;
      }
      brandHeading.style.opacity = '1';
      brandSubtext.style.opacity = '1';
    }, 180);
  }

  document.querySelectorAll('[data-bs-toggle="pill"]').forEach(function(tab) {
    tab.addEventListener('shown.bs.tab', function(e) {
      var target = e.target.id === 'tabLogin' ? 'login' : 'register';
      if (indicator) indicator.dataset.active = target;
      switchBrand(target);
    });
    tab.addEventListener('hidden.bs.tab', function(e) {
      var target = e.target.id === 'tabLogin' ? 'login' : 'register';
      if (indicator) delete indicator.dataset.active;
    });
  });

  if (brandHeading && brandSubtext) {
    brandHeading.style.transition = 'opacity .2s ease';
    brandSubtext.style.transition = 'opacity .2s ease';
  }

  /* ── Password toggle ── */
  var toggleBtn = document.getElementById('togglePassword');
  if (toggleBtn) {
    toggleBtn.addEventListener('click', function() {
      var input = document.getElementById('login_password');
      var eyeOpen = this.querySelector('.eye-open');
      var eyeClosed = this.querySelector('.eye-closed');
      if (!input) return;
      if (input.type === 'password') {
        input.type = 'text';
        eyeOpen.classList.add('d-none');
        eyeClosed.classList.remove('d-none');
      } else {
        input.type = 'password';
        eyeOpen.classList.remove('d-none');
        eyeClosed.classList.add('d-none');
      }
    });
  }

  /* ── Forgot Password Flow ── */
  var tabContent = document.getElementById('authPillsTabContent');
  var forgotView = document.getElementById('forgotPasswordView');
  var showForgotBtn = document.getElementById('showForgotPassword');
  var backToLoginBtn = document.getElementById('backToLoginBtn');
  var backToLoginFromResendBtn = document.getElementById('backToLoginFromResendBtn');
  var forgotForm = document.getElementById('forgotPasswordForm');
  var forgotSubmitBtn = document.getElementById('forgotSubmitBtn');
  var forgotErrorMsg = document.getElementById('forgotErrorMsg');
  var resendLinkBtn = document.getElementById('resendLinkBtn');

  function showForgotPassword() {
    tabContent.style.display = 'none';
    forgotView.style.display = 'block';
    switchBrand('forgot');
    var tabList = document.querySelectorAll('#authPillsTab .auth-tab-btn');
    tabList.forEach(function(t) { t.classList.remove('active'); });
    var tabPanel = document.querySelectorAll('.tab-pane');
    tabPanel.forEach(function(p) { p.classList.remove('show', 'active'); });
    forgotErrorMsg.innerHTML = '';
    document.getElementById('forgot_email').value = document.getElementById('login_email').value || '';
  }

  function showLoginView() {
    forgotView.style.display = 'none';
    tabContent.style.display = 'block';
    switchBrand('login');
    var loginPane = document.getElementById('login');
    if (loginPane) {
      loginPane.classList.add('show', 'active');
    }
    var loginTab = document.getElementById('tabLogin');
    if (loginTab) {
      loginTab.classList.add('active');
      loginTab.setAttribute('aria-selected', 'true');
    }
    var registerPane = document.getElementById('register');
    if (registerPane) {
      registerPane.classList.remove('show', 'active');
    }
    var registerTab = document.getElementById('tabRegister');
    if (registerTab) {
      registerTab.classList.remove('active');
      registerTab.setAttribute('aria-selected', 'false');
    }
    if (indicator) delete indicator.dataset.active;
    forgotErrorMsg.innerHTML = '';
    document.getElementById('forgot_email').value = '';
  }

  if (showForgotBtn) {
    showForgotBtn.addEventListener('click', showForgotPassword);
  }
  if (backToLoginBtn) {
    backToLoginBtn.addEventListener('click', showLoginView);
  }
  if (backToLoginFromResendBtn) {
    backToLoginFromResendBtn.addEventListener('click', showLoginView);
  }

  /* ── Forgot Password AJAX Submit ── */
  if (forgotForm) {
    forgotForm.addEventListener('submit', function(e) {
      e.preventDefault();
      var email = document.getElementById('forgot_email').value.trim();
      var csrfToken = forgotForm.querySelector('input[name="_token"]') ||
                      document.querySelector('meta[name="csrf-token"]');

      if (!email) {
        forgotErrorMsg.innerHTML = '<span class="error-msg">Please enter your email address.</span>';
        return;
      }

      var btnText = forgotSubmitBtn.querySelector('.btn-text');
      var btnLoader = forgotSubmitBtn.querySelector('.btn-loader');
      btnText.classList.add('d-none');
      btnLoader.classList.remove('d-none');
      forgotSubmitBtn.disabled = true;
      forgotErrorMsg.innerHTML = '';

      var controller = new AbortController();
      var timeoutId = setTimeout(function() { controller.abort(); }, 15000);

      fetch("{{ route('password.email') }}", {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken.content || csrfToken.value,
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({ email: email }),
        signal: controller.signal
      })
      .then(function(response) { return response.json(); })
      .then(function(data) {
        clearTimeout(timeoutId);
        btnText.classList.remove('d-none');
        btnLoader.classList.add('d-none');
        forgotSubmitBtn.disabled = false;

        if (data.success || (data.status && data.status.indexOf('sent') !== -1)) {
          document.getElementById('sentEmail').textContent = email;
          document.getElementById('forgotFormState').style.display = 'none';
          document.getElementById('resendSuccessState').style.display = 'none';
          document.getElementById('forgotSuccessState').style.display = 'block';
        } else {
          var msg = (data.errors && data.errors.email) ? data.errors.email[0] :
                    (data.message || 'Something went wrong. Please try again.');
          forgotErrorMsg.innerHTML = '<span class="error-msg">' + msg + '</span>';
        }
      })
      .catch(function(err) {
        clearTimeout(timeoutId);
        btnText.classList.remove('d-none');
        btnLoader.classList.add('d-none');
        forgotSubmitBtn.disabled = false;
        if (err.name === 'AbortError') {
          forgotErrorMsg.innerHTML = '<span class="error-msg">Request timed out. Please try again.</span>';
        } else {
          forgotErrorMsg.innerHTML = '<span class="error-msg">Network error. Please check your connection.</span>';
        }
      });
    });
  }

  /* ── Resend Link AJAX ── */
  if (resendLinkBtn) {
    resendLinkBtn.addEventListener('click', function() {
      var email = document.getElementById('sentEmail').textContent ||
                  document.getElementById('forgot_email').value.trim();
      if (!email) return;

      var csrfToken = document.querySelector('meta[name="csrf-token"]');

      resendLinkBtn.disabled = true;
      resendLinkBtn.textContent = 'Sending...';

      var controller = new AbortController();
      var timeoutId = setTimeout(function() { controller.abort(); }, 15000);

      fetch("{{ route('password.email') }}", {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken.content,
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({ email: email }),
        signal: controller.signal
      })
      .then(function(response) { return response.json(); })
      .then(function(data) {
        clearTimeout(timeoutId);
        resendLinkBtn.disabled = false;
        resendLinkBtn.textContent = 'Resend';

        if (data.success || (data.status && data.status.indexOf('sent') !== -1)) {
          document.getElementById('resentEmail').textContent = email;
          document.getElementById('forgotFormState').style.display = 'none';
          document.getElementById('forgotSuccessState').style.display = 'none';
          document.getElementById('resendSuccessState').style.display = 'block';
        } else {
          var msg = (data.errors && data.errors.email) ? data.errors.email[0] :
                    (data.message || 'Could not resend. Please try again.');
          alert(msg);
        }
      })
      .catch(function(err) {
        clearTimeout(timeoutId);
        resendLinkBtn.disabled = false;
        resendLinkBtn.textContent = 'Resend';
        alert(err.name === 'AbortError' ? 'Request timed out.' : 'Network error.');
      });
    });
  }

  /* ── Login AJAX Submit ── */
  var loginForm = document.getElementById('loginForm');
  if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      var loginErrorDiv = document.getElementById('loginErrorMsg');
      var submitBtn = document.getElementById('loginSubmitBtn');
      var originalText = submitBtn ? submitBtn.querySelector('span').innerHTML : 'Sign in';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.querySelector('span').innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spin">Sending...</svg>';
      }
      loginErrorDiv.innerHTML = '';

      var controller = new AbortController();
      var timeoutId = setTimeout(function() { controller.abort(); }, 15000);

      fetch("{{ route('clientportallogin.post') }}", {
        method: 'POST',
        body: new FormData(loginForm),
        headers: {
          'X-CSRF-TOKEN': loginForm.querySelector('input[name="_token"]').value,
          'Accept': 'application/json'
        },
        signal: controller.signal
      })
      .then(function(response) {
        if (response.redirected || response.url.includes('dashboard')) {
          window.location.href = response.url || '/user/dashboard';
          return null;
        }
        return response.json().catch(function() { return { error: 'Invalid response' }; });
      })
      .then(function(data) {
        clearTimeout(timeoutId);
        if (!data) return;
        if (data.success || data.redirect) {
          window.location.href = data.redirect || '/user/dashboard';
        } else {
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.querySelector('span').innerHTML = originalText;
          }
          if (data.errors) {
            var errors = Object.values(data.errors).flat();
            loginErrorDiv.innerHTML = '<div class="error-box">' + errors.join('<br>') + '</div>';
          } else if (data.message) {
            loginErrorDiv.innerHTML = '<div class="error-box">' + data.message + '</div>';
          }
        }
      })
      .catch(function(err) {
        clearTimeout(timeoutId);
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.querySelector('span').innerHTML = originalText;
        }
        loginErrorDiv.innerHTML = '<div class="error-box">' + (err.name === 'AbortError' ? 'Request timed out.' : 'Network error.') + '</div>';
      });
    });
  }

});
</script>
@endsection
