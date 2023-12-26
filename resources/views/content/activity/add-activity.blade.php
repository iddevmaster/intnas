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
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('store-activity') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card-body">

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Title</label>
                <input type="text" name="ac_title" required maxlength="500" class="form-control" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
            </div>

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Description</label>
                <input type="text" class="form-control" name="ac_desc" maxlength="1000" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
            </div>

            <div class="mb-5">
                <label for="prodetail" class="form-label">Media</label>
                <div class="input-images"></div>
            </div>


            <div>
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-outline-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>
<!--/ Hoverable Table rows -->
<script>
    tinymce.init({
        selector: 'textarea#prodetail'
    });

    $(document).ready(function(){
        $('.input-images').imageUploader();
    });
</script>
@endsection
