@extends('auth.template')

@section('auth-page', 'Forgot Password')

@section('auth-content')
    <div class="o-page o-page--center">
        <div class="o-page__card">
            <div class="c-card c-card--center">
                <span class="c-icon c-icon--large u-mb-small">
                    <img src="{{ asset('admin/img/logo-small.svg') }}" alt="Neat">
                </span>
                <h4 class="u-mb-medium">Forgot Your Password</h4>
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
                <form method="POST" action="/forgot-password">
                    @csrf
                    <div class="c-field">
                        <label class="c-field__label">Email Address</label>
                        <input name="email" class="c-input u-mb-small @error('email') c-input--danger @enderror" type="email" placeholder="e.g. adam@sandler.com">
                        @error('email')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="c-note u-mb-small">
                        <span class="c-note__icon">
                            <i class="feather icon-info"></i>
                        </span>

                        <p>After submitting you email address you will receive password reset instructions.</p>
                    </div>

                    <button class="c-btn c-btn--fullwidth c-btn--info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
