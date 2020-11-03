@extends('adminlte::auth.login')

@section('content')
    <div class="content">
        <div class="container">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login">
                        <div class="card-header ">
                            <div class="card-header ">
                                <h3 class="header text-center">{{ __('Login') }}</h3>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" required>
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                     <label class="form-check-label">
                                        <input class="form-check-input" name="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="form-check-sign"></span>
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-round mb-3">{{ __('Sign in') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
