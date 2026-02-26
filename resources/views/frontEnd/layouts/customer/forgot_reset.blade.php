@extends('frontEnd.layouts.master')
@section('title','Forgot Password Reset')
@section('content')
<section class="auth-section">
    <div class="container" style="margin-top:50px !important;">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="form-content">
                    <p class="auth-title">পাসওয়ার্ড রিসেট করুন</p>
                    <form action="{{route('customer.forgot.store')}}" method="POST"  data-parsley-validate="">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="code">যাচাইকরণ কোড</label>
                            <input type="text" id="code" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" placeholder="আপনার ইমেইলে পাঠানো কোড" required>
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- col-end -->

                        <div class="form-group mb-3">
                            <label for="password">নতুন পাসওয়ার্ড</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="নতুন পাসওয়ার্ড" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- col-end -->
                        <div class="form-group mb-3">
                            <button class="submit-btn">পাসওয়ার্ড আপডেট করুন</button>
                        </div>
                     <!-- col-end -->
                     </form>
                     <div class="resend_otp">
                        <form action="{{route('customer.forgot.resendotp')}}" method="POST">
                            @csrf
                            <button type="button" onclick="this.closest('form').submit();"><i data-feather="rotate-cw"></i> পুনরায় কোড পাঠান</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script src="{{asset('public/frontEnd/')}}/js/parsley.min.js"></script>
<script src="{{asset('public/frontEnd/')}}/js/form-validation.init.js"></script>
@endpush