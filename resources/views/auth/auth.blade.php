@extends('template-AUTH.master')
@section('contentAuth')
    

<div id="loader"> <img src="noa-assets/assets/images/media/loader.svg" alt=""> </div> <!-- Loader -->
<div class="container px-3">
    <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-4 d-flex justify-content-center"> <a href="index.html"> <img
                        src="noa-assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class=""> </a> </div>
            <div class="card custom-card">
                <div class="card-body p-4 pb-3">
                    <h4 class="fw-semibold mb-4 text-center">Sign In</h4>
                    <div class="input-box mb-3" data-bs-validate="Valid email is required: ex@abc.xyz"> <input
                            type="text" class="form-control form-control-lg" id="signin-username"
                            placeholder="user name"> <span class="authentication-input-icon"><i
                                class="ri-mail-fill text-default fs-15 op-7"></i></span> </div>
                    <div class="input-group input-box mb-3"> <input type="password"
                            class="form-control form-control-lg" id="signin-password" placeholder="password"> <span
                            class="authentication-input-icon"><i
                                class="ri-lock-2-fill text-default fs-15 op-7"></i></span> <button type="button"
                            aria-label="button" class="btn btn-light"
                            onclick="createpassword('signin-password',this)" id="button-addon2"><i
                                class="ri-eye-off-line align-middle"></i></button> </div>
                    <div class="mb-3">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                id="defaultCheck1"> <label class="form-check-label text-muted fw-normal"
                                for="defaultCheck1"> Remember password ? </label> </div>
                    </div>
                    <div class="col-xl-12 d-grid mb-3"> <a href="index.html" class="btn btn-lg btn-primary">Sign
                            In</a> </div>
                    <div class="text-center mb-2"><a href="forgot-password.html" class="text-danger">Forget password
                            ?</a></div>
                    <div class="text-center mb-0">Not a Member ?<a href="sign-up.html"
                            class="text-primary ms-2">Create an Account</a></div>
                </div>
                <div class="card-footer">
                    <div class="btn-list text-center"> <button type="button" aria-label="button"
                            class="btn btn-icon btn-light"> <i
                                class="ri-google-line fw-bold text-dark op-7 align-middle"></i> </button> <button
                            type="button" aria-label="button" class="btn btn-icon btn-light"> <i
                                class="ri-facebook-line fw-bold text-dark op-7 align-middle"></i> </button> <button
                            type="button" aria-label="button" class="btn btn-icon btn-light"> <i
                                class="ri-twitter-line fw-bold text-dark op-7 align-middle"></i> </button> </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Bootstrap JS --> <noscript>
    <p>To display this page you need a browser that supports JavaScript.</p>
</noscript>
<script src="noa-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<noscript>
    <p>To display this page you need a browser that supports JavaScript.</p>
</noscript>
<script src="noa-assets/assets/js/custom-switcher.min.js"></script>
<!-- Show Password JS --> <noscript>
    <p>To display this page you need a browser that supports JavaScript.</p>
</noscript>
<script src="noa-assets/assets/js/show-password.js"></script>
@endsection