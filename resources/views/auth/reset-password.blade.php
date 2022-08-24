@extends('auth.template')

@section('auth-page', 'Reset Password')

@section('auth-content')
    <div class="o-page o-page--center">
        <div class="o-page__card">
            <div class="c-card c-card--center">
                <span class="c-icon c-icon--large u-mb-small">
                    <img src="{{ asset('admin/img/logo-small.svg') }}" alt="Neat">
                </span>


                <h4 class="u-mb-medium">Reset Password</h4>
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
                <form method="POST" action="/reset-password">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    <div class="c-field">
                        <label class="c-field__label">Enter Email</label>
                        <input name="email" class="c-input u-mb-small @error('email') c-input--danger @enderror" type="email" placeholder="e.g. adam@sandler.com">
                        @error('email')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="c-field">
                        <label class="c-field__label">Enter New Password</label>
                        <input name="password" class="c-input u-mb-small @error('password') c-input--danger @enderror" type="password" placeholder="Numbers, Pharagraphs Only">
                        @error('password')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="c-field">
                        <label class="c-field__label">Confirm Password</label>
                        <input name="password_confirmation" class="c-input u-mb-small @error('password_confirmation') c-input--danger @enderror" type="password" placeholder="Numbers, Pharagraphs Only">
                        @error('password_confirmation')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="c-btn c-btn--fullwidth c-btn--info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
