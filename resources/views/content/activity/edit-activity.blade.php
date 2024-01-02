@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main / Activity /</span> Edit Activity
</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Edit Activity</h5>
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('update-activity', ['aid' => $activity->id]) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card-body">

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Title</label>
                <input type="text" name="ac_title" value="{{ $activity->title }}" required maxlength="500" class="form-control" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
            </div>

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Description</label>
                <input type="text" class="form-control" value="{{ $activity->desc }}" name="ac_desc" maxlength="1000" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
            </div>

            <div class="mb-5">
                <label for="prodetail" class="form-label">Media</label>
                <div class="container border">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-2 p-2">
                        @foreach ($activity->media as $key => $media)
                            @if ($key !== 'by')
                                <div class="position-relative p-0">
                                    <div class="p-0 overflow-hidden rounded">
                                        <img class="object-fit-cover" src="{{asset('uploads/activity/'. $media)}}" width="350" height="150" alt="">
                                    </div>
                                    <button type="button" aid="{{ $activity->id }}" media="{{ $media }}" class="btn btn-sm rounded-pill btn-icon btn-danger position-absolute top-0 end-0 delBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-x bx-xs' ></i> <span>Delete</span>">
                                        <i class='bx bx-x'></i>
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <label for="prodetail" class="form-label">Upload</label>
                <div class="input-images"></div>
            </div>

            <input type="text" name="oldMedia" value="{{ json_encode($activity->media) }}" hidden>

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

        $('.delBtn').click(function() {
            const actid = $(this).attr('aid');
            const delmedia = $(this).attr('media');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    console.log(delmedia);
                    $.ajax({
                        url: '/admin/activity/' + actid + '/delete/media/' + delmedia, // URL where the POST request is sent
                        type: 'GET',
                        success: function(response) {
                            // Handle success. For example, showing a success message
                            console.log(response.data);
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            })
                            .then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload()
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                            Swal.fire('Error', 'There was a problem deleting the news.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
