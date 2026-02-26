@extends('frontEnd.layouts.master')
@section('title','Forgot Password')
@section('content')
<section class="auth-section" style="margin-top: 30px;">
    <div class="container" style="margin-top:50px !important;">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="form-content">
                    <p class="auth-title">পাসওয়ার্ড রিসেট করুন</p>
                    <form action="{{route('customer.forgot.verify')}}" method="POST"  data-parsley-validate="">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">ইমেইল</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="আপনার ইমেইল এড্রেস" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- col-end -->
                        <p style="font-size: 13px; color: #666; margin-bottom: 15px;">আপনার নিবন্ধিত ইমেইল এড্রেসে পাসওয়ার্ড রিসেট লিংক পাঠানো হবে।</p>
                        <div class="form-group mb-3">
                            <button class="submit-btn">রিসেট লিংক পাঠান</button>
                        </div>
                     <!-- col-end -->
                     </form>
                     <div class="register-now no-account" style="margin-top: 20px;">
                        <a href="{{route('customer.login')}}"><i data-feather="arrow-left"></i> লগিনে ফিরুন</a>
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