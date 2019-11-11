@include('frontend.partials.header')
<div class="register-page">


    @include('frontend.partials.navigation')

    <div class="site-signup">
        <h1>Reset Password</h1>
        <div class="form-wrap">
            <form method="POST" action="{{  route('frontend.password.reset')  }}" id="login-form">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <input id="email" type="email" placeholder="Email" class="form-control" name="email"
                    value="{{ $email or old('email') }}" required autofocus>
                <input id="password" type="password" placeholder="Password" class="form-control" name="password"
                    required>
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control"
                    name="password_confirmation" required>
                <div class="d-flex justify-content-between align-items-center btn-groups">
                    <div class="btn-submit">
                        <a href="#login" onclick="document.getElementById('login-form').submit();">Reset Password</a>
                    </div>
                </div>

            </form>
            <br />
            <div class="text-center">
                @if (count($errors) > 0)
                <div class="align-items-center alert alert-danger error-alert">
                    @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="text-center">
                @if (session('status'))
                <div class="alert alert-success error-alert">
                    <span>{{ session('status') }}</span>
                </div>
                @endif
            </div>
        </div>
        @include('frontend.partials.navigation-footer')



    </div>
    @include('frontend.partials.footer')