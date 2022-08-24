@extends('auth.template')

@section('auth-page', 'Sign In')

@section('auth-content')
    <div class="o-page o-page--center">
        <div class="o-page__card">
            <div class="c-card c-card--center">
                <span class="c-icon c-icon--large u-mb-small">
                    <img src="{{ asset('admin/img/logo-small.svg') }}" alt="Neat">
                </span>

                <h4 class="u-mb-medium">Welcome Back :)</h4>
                @if (session('status'))
                    <div class="c-alert c-alert--success u-mb-medium">
                        <span class="c-alert__icon">
                            <i class="feather icon-check"></i>
                        </span>
                        <div class="c-alert__content">
                            <h4 class="c-alert__title">{{ session('status') }}</h4>
                        </div>
                    </div>
                @endif
                <form action="/login" method="POST" novalidate>
                    @csrf
                    <div class="c-field">
                        <label class="c-field__label">Email Address</label>
                        <input name="email" class="c-input u-mb-small @error('email') c-input--danger @enderror" type="email" placeholder="e.g. adam@sandler.com" required>
                        @error('email')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="c-field">
                        <label class="c-field__label">Password</label>
                        <input name="password" class="c-input u-mb-small @error('password') c-input--danger @enderror" type="password" placeholder="Numbers, Pharagraphs Only" required>
                        @error('password')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="c-btn c-btn--fullwidth c-btn--info">Login</button>
                </form>
                <p class="u-text-right u-mt-xsmall"><a href="/forgot-password">Forgot your password?</a></p>
            </div>
            <p>Don't have an account yet?<a href="/register"> Register here</a></p>
        </div>
    </div>
@endsection
