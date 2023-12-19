@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main / Activity /</span> Add Activity
</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Add Activity</h5>
    </div>
    <div class="card-body">

        <div class="mb-3">
            <label for="defaultFormControlInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
        </div>

        <div class="mb-3">
            <label for="defaultFormControlInput" class="form-label">Description</label>
            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
        </div>

        <div class="mb-5">
            <label for="prodetail" class="form-label">Media</label>
            <div class="container border">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-2 p-2">
                    <div class="position-relative p-0">
                        <div class="p-0 overflow-hidden rounded">
                            <img class="object-cover" src="{{ asset('img/activity/ac01/ac01.jpg') }}" width="350" height="150" alt="">
                        </div>
                        <button type="button" class="btn btn-sm rounded-pill btn-icon btn-danger position-absolute top-0 end-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-x bx-xs' ></i> <span>Delete</span>">
                            <i class='bx bx-x'></i>
                        </button>
                    </div>
                    <div class="position-relative p-0">
                        <div class="p-0 overflow-hidden rounded">
                            <img class="object-cover" src="{{ asset('img/activity/ac01/ac02.jpg') }}" width="350" height="150" alt="">
                        </div>
                        <button type="button" class="btn btn-sm rounded-pill btn-icon btn-danger position-absolute top-0 end-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-x bx-xs' ></i> <span>Delete</span>">
                            <i class='bx bx-x'></i>
                        </button>
                    </div><div class="position-relative p-0">
                        <div class="p-0 overflow-hidden rounded">
                            <img class="object-cover" src="{{ asset('img/activity/ac01/ac03.jpg') }}" width="350" height="150" alt="">
                        </div>
                        <button type="button" class="btn btn-sm rounded-pill btn-icon btn-danger position-absolute top-0 end-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-x bx-xs' ></i> <span>Delete</span>">
                            <i class='bx bx-x'></i>
                        </button>
                    </div><div class="position-relative p-0">
                        <div class="p-0 overflow-hidden rounded">
                            <img class="object-cover" src="{{ asset('img/activity/ac01/ac04.jpg') }}" width="350" height="150" alt="">
                        </div>
                        <button type="button" class="btn btn-sm rounded-pill btn-icon btn-danger position-absolute top-0 end-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-x bx-xs' ></i> <span>Delete</span>">
                            <i class='bx bx-x'></i>
                        </button>
                    </div><div class="position-relative p-0">
                        <div class="p-0 overflow-hidden rounded">
                            <img class="object-cover" src="{{ asset('img/activity/ac01/ac05.jpg') }}" width="350" height="150" alt="">
                        </div>
                        <button type="button" class="btn btn-sm rounded-pill btn-icon btn-danger position-absolute top-0 end-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-x bx-xs' ></i> <span>Delete</span>">
                            <i class='bx bx-x'></i>
                        </button>
                    </div>
                    <div class="p-0">
                        <div class="d-flex justify-content-center align-items-center" style="width: 350px; height: 150px;">
                            <button type="button" class="btn btn-success">Add Image</button>
                        </div>
                    </div>
                </div>
            </div>
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
