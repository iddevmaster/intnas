@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
<script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Account Settings /</span> Account
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Profile Details</h5>
      <!-- Account -->
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <p class="text-muted mb-0">Allowed JPG PNG. Max size of 20MB</p>
          </div>
        </div>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Name</label>
              <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="organization" class="form-label">Password</label>
              <input type="text" class="form-control" id="organization" name="organization" value="{{config('variables.creatorName')}}" />
            </div>

            <div class="divider">
                <div class="divider-text">
                  <i class="bx bx-buildings"></i>
                </div>
            </div>

            <div class="mb-3 col-md-6">
              <label class="form-label" for="country">Agency</label>
              <select id="country" class="select2 form-select">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="language" class="form-label">Branch</label>
              <select id="language" class="select2 form-select">
                <option value="">Select Language</option>
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="de">German</option>
                <option value="pt">Portuguese</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="timeZones" class="form-label">Department</label>
              <select id="timeZones" class="select2 form-select">
                <option value="">Select Timezone</option>
                <option value="-12">(GMT-12:00) International Date Line West</option>
                <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                <option value="-10">(GMT-10:00) Hawaii</option>
                <option value="-9">(GMT-09:00) Alaska</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="currency" class="form-label">Role</label>
              <select id="currency" class="select2 form-select">
                <option value="">Select Currency</option>
                <option value="usd">USD</option>
                <option value="euro">Euro</option>
                <option value="pound">Pound</option>
                <option value="bitcoin">Bitcoin</option>
              </select>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection
