@extends('template-AUTH.master')

@section('contentAuth')
    <div id="loader">
        <img src="noa-assets/assets/images/media/loader.svg" alt="">
    </div>
    <div class="container px-3">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-4 d-flex justify-content-center">
                    <a href="index.html">
                        <img src="noa-assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class="">
                    </a>
                </div>
                <form class="card custom-card" action="{{ url('/authProses') }}" method="post">
                    @csrf
                   
                    <div class="card-body p-4 pb-3">
                        <h4 class="fw-semibold mb-4 text-center">Login</h4>
                        @if (session()->has('error'))
                        <div class="alert AlertClass alert-danger alert-berhasil" id="alertLoginGagal" style="margin-top: 3% !important;"
                            role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <script>
                        const alert = document.querySelector('#alertLoginGagal');
                        setTimeout(() => {
                         alert.style.display="none";
                        }, 3000);
                    </script>
                        <div class="input-box mb-3">
                            <input type="email" class="form-control form-control-lg" id="signin-email" placeholder="Email" name="email" value="{{ old('email') }}">
                            <span class="authentication-input-icon"><i class="ri-mail-fill text-default fs-15 op-7"></i></span>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-group input-box mb-3">
                            <div  class="input-group input-box">
                            <input type="password" class="form-control form-control-lg" id="signin-password" placeholder="Password" name="password">
                            <span class="authentication-input-icon"><i class="ri-lock-2-fill text-default fs-15 op-7"></i></span>
                            <button type="button" aria-label="button" class="btn btn-light" onclick="createpassword('signin-password', this)" id="button-addon2">
                                <i class="ri-eye-off-line align-middle"></i>
                            </button>
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        </div>
                        <div class="col-xl-12 d-grid mb-3">
                            <button class="btn btn-lg btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="noa-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="noa-assets/assets/js/custom-switcher.min.js"></script>
    <script src="noa-assets/assets/js/show-password.js"></script>
@endsection
