@extends('admin.layouts.app')

@section('panel-header')
    <div>
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.view.dashboard') }}">Admin</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.setting') }}">Settings</a></li>
            <li><i data-feather="chevron-right"></i></li>
            <li><a href="{{ route('admin.view.setting.preference') }}">System Preferences</a></li>
        </ul>
        <h1 class="panel-title">System Preferences</h1>
    </div>
@endsection

@section('panel-body')
    <form action="{{ route('admin.handle.setting.preference.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <figure class="panel-card">
            <div class="panel-card-header">
                <div>
                    <h1 class="panel-card-title">System Preferences</h1>
                    <p class="panel-card-description">Manage you system preferences</p>
                </div>
            </div>
            <div class="panel-card-body">
                <div class="grid 2xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5">

                    {{-- Divider --}}
                    <div class="2xl:col-span-5 lg:col-span-4 md:col-span-2 sm:col-span-1">
                        <h1 class="title">Application Name</h1>
                    </div>

                    {{-- Name --}}
                    <div class="input-group">
                        <label for="APP_NAME" class="input-label">Name <em>*</em></label>
                        <input type="text" name="APP_NAME"
                            value="{{ old('APP_NAME', $setting::where('key', 'APP_NAME')->first()?->value) }}"
                            class="input-box-md @error('APP_NAME') input-invalid @enderror" placeholder="Enter Name"
                            minlength="1" maxlength="250" required>
                        @error('APP_NAME')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Referral Reward --}}
                    <div class="input-group">
                        <label for="REFERRAL_REWARD" class="input-label">Referral Reward <em>*</em></label>
                        <input type="number" name="REFERRAL_REWARD"
                            value="{{ old('REFERRAL_REWARD', $setting::where('key', 'REFERRAL_REWARD')->first()?->value) }}"
                            class="input-box-md @error('REFERRAL_REWARD') input-invalid @enderror"
                            placeholder="Enter Referral Reward" min="1" max="10000" required>
                        @error('REFERRAL_REWARD')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Divider --}}
                    <div class="2xl:col-span-5 lg:col-span-4 md:col-span-2 sm:col-span-1">
                        <br>
                        <h1 class="title">Bank Details</h1>
                    </div>

                    {{-- Bank Name --}}
                    <div class="input-group">
                        <label for="PAYMENT_BANK_NAME" class="input-label">Bank Name <em>*</em></label>
                        <input type="text" name="PAYMENT_BANK_NAME"
                            value="{{ old('PAYMENT_BANK_NAME', $setting::where('key', 'PAYMENT_BANK_NAME')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_BANK_NAME') input-invalid @enderror"
                            placeholder="Enter Bank Name" minlength="1" maxlength="250" required>
                        @error('PAYMENT_BANK_NAME')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Branch Name --}}
                    <div class="input-group">
                        <label for="PAYMENT_BANK_BRANCH" class="input-label">Branch Name <em>*</em></label>
                        <input type="text" name="PAYMENT_BANK_BRANCH"
                            value="{{ old('PAYMENT_BANK_BRANCH', $setting::where('key', 'PAYMENT_BANK_BRANCH')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_BANK_BRANCH') input-invalid @enderror"
                            placeholder="Enter Branch Name" minlength="1" maxlength="250" required>
                        @error('PAYMENT_BANK_BRANCH')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Account No --}}
                    <div class="input-group">
                        <label for="PAYMENT_ACCOUNT_NO" class="input-label">Account No <em>*</em></label>
                        <input type="text" name="PAYMENT_ACCOUNT_NO"
                            value="{{ old('PAYMENT_ACCOUNT_NO', $setting::where('key', 'PAYMENT_ACCOUNT_NO')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_ACCOUNT_NO') input-invalid @enderror"
                            placeholder="Enter Account No" minlength="1" maxlength="20" required>
                        @error('PAYMENT_ACCOUNT_NO')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- IFSC Code --}}
                    <div class="input-group">
                        <label for="PAYMENT_IFSC_CODE" class="input-label">IFSC Code <em>*</em></label>
                        <input type="text" name="PAYMENT_IFSC_CODE"
                            value="{{ old('PAYMENT_IFSC_CODE', $setting::where('key', 'PAYMENT_IFSC_CODE')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_IFSC_CODE') input-invalid @enderror"
                            placeholder="Enter IFSC Code" minlength="1" maxlength="20" required>
                        @error('PAYMENT_IFSC_CODE')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Account Holder Name --}}
                    <div class="input-group">
                        <label for="PAYMENT_ACCOUNT_HOLDER" class="input-label">Account Holder Name <em>*</em></label>
                        <input type="text" name="PAYMENT_ACCOUNT_HOLDER"
                            value="{{ old('PAYMENT_ACCOUNT_HOLDER', $setting::where('key', 'PAYMENT_ACCOUNT_HOLDER')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_ACCOUNT_HOLDER') input-invalid @enderror"
                            placeholder="Enter Account Holder Name" minlength="1" maxlength="250" required>
                        @error('PAYMENT_ACCOUNT_HOLDER')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- UPI Address --}}
                    <div class="input-group">
                        <label for="PAYMENT_UPI_ADDRESS" class="input-label">UPI Address <span>(Optional)</span></label>
                        <input type="text" name="PAYMENT_UPI_ADDRESS"
                            value="{{ old('PAYMENT_UPI_ADDRESS', $setting::where('key', 'PAYMENT_UPI_ADDRESS')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_UPI_ADDRESS') input-invalid @enderror"
                            placeholder="Enter UPI Address" minlength="1" maxlength="100">
                        @error('PAYMENT_UPI_ADDRESS')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- QR Code --}}
                    <div class="input-group">
                        <label for="PAYMENT_QR_CODE" class="input-label">QR Code <span>(Optional)</span></label>
                        <input type="file" name="PAYMENT_QR_CODE"
                            value="{{ old('PAYMENT_QR_CODE', $setting::where('key', 'PAYMENT_QR_CODE')->first()?->value) }}"
                            class="input-box-md @error('PAYMENT_UPI_ADDRESS') input-invalid @enderror"
                            placeholder="Enter QR Code" minlength="1" maxlength="100">
                        @error('PAYMENT_QR_CODE')
                            <span class="input-error">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

            </div>
            <div class="panel-card-footer">
                <button type="submit" class="btn-primary-md md:w-fit sm:w-full">Save Changes</button>
            </div>
        </figure>
    </form>
@endsection

@section('panel-script')
    <script>
        document.getElementById('setting-tab').classList.add('active');
    </script>
@endsection
