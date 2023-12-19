@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main / News /</span> Edit News
</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Edit News</h5>
    </div>
    <div class="card-body">
        <div class="divider">
            <div class="divider-text">News Page</div>
        </div>

        <div class="d-flex flex-wrap align-items-start align-items-sm-center gap-4 mb-4">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="150" width="150" id="uploadedAvatar" />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload cover photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
              </label>
              <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>

              <p class="text-muted mb-0">Allowed JPG or PNG. Max size of 10Mb. Recommend size is 1050x600 or more</p>
            </div>
        </div>

        <div class="mb-3">
            <label for="defaultFormControlInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
        </div>

        <div class="divider my-5">
            <div class="divider-text">News Detail Page</div>
        </div>

        <div class="mb-5">
            <label for="prodetail" class="form-label">Description</label>
            <textarea id="prodetail" placeholder="Product Detail"></textarea>
        </div>

        <div>
            <button type="button" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-outline-danger">Cancel</button>
        </div>
    </div>
</div>
<!--/ Hoverable Table rows -->
<script>
    tinymce.init({
        selector: 'textarea#prodetail'
    });
</script>
@endsection
