@extends('auth.template')

@section('auth-page', 'Sign Up')

@section('auth-content')
    <div class="o-page o-page--center">
        <div class="o-page__card">
            <div class="c-card c-card--center">
                <span class="c-icon c-icon--large u-mb-small">
                    <img src="{{ asset('admin/img/logo-small.svg') }}" alt="Neat">
                </span>

                <h4 class="u-mb-medium">Sing Up to Get Started</h4>
                <form method="POST" action="/register" novalidate>
                    @csrf
                    <div class="c-field">
                        <label class="c-field__label">Name</label>
                        <input name="name" class="c-input u-mb-small @error('name') c-input--danger @enderror" type="text" placeholder="e.g. Adam Sandler" required>
                        @error('name')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="c-field">
                        <label class="c-field__label">Email Address</label>
                        <input name="email" class="c-input u-mb-small @error('email') c-input--danger @enderror" type="email" placeholder="e.g. adam@sandler.com" required>
                        @error('email')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label">Password</label>
                        <input name="password" class="c-input @error('password') c-input--danger @enderror" type="password" placeholder="Numbers, Pharagraphs Only" required>
                        @error('password')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label">Confirm Password</label>
                        <input name="password_confirmation" class="c-input @error('password_confirmation') c-input--danger @enderror" type="password" placeholder="Rewrite your password" required>
                        @error('password_confirmation')
                            <div class="c-field__message">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="c-btn c-btn--fullwidth c-btn--info">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script>
        $(document).ready(function() {
            $('.password-confirmation').change(function() {
                if ($(this).val() > 5 && $('.password').val() != $(this).val()) {
                    $(this).addClass('c-input--danger');
                } else {
                    $(this).removeClass('c-input--danger');
                }
            });
        })
    </script>
@endsection
