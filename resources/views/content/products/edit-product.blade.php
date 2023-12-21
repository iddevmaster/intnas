@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main / Products /</span> Edit Products
</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Edit Products</h5>
        @if(session('error'))
            <div class="alert alert-success">
                <span><i class='bx bx-x'></i></span>{{ session('error') }}
            </div>
        @endif
    </div>
    <form action="{{ route('update-product', ['pid' => $pid]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="divider">
                <div class="divider-text">Products Page</div>
            </div>

            <div class="d-flex flex-wrap align-items-start align-items-sm-center gap-4 mb-4">
                <img src="{{ asset('/uploads/product/'. $product->img ?? '') }}" alt="user-avatar" class="d-block rounded" height="150" width="150" id="exampleImage" />
                <div class="button-wrapper">
                  <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" name="uploadImg" class="account-file-input" hidden accept="image/png, image/jpeg" />
                  </label>
                  <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>

                  <p class="text-muted mb-0">Allowed JPG or PNG. Max size of 10Mb. Recommend size is 374x374 or more</p>
                </div>
            </div>

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="defaultFormControlInput" name="pname" value="{{$product->name}}" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
            </div>

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Description</label>
                <input type="text" class="form-control" id="defaultFormControlInput" name="pdesc" value="{{$product->desc}}" placeholder="Product Description" aria-describedby="defaultFormControlHelp" />
            </div>
            <div class="mb-3 d-flex flex-wrap gap-4">
                <div>
                    <label for="exampleFormControlSelect1" class="form-label">category</label>
                    <select class="form-select" id="exampleFormControlSelect1" name="pcategory" value="{{$product->category}}" aria-label="Default select example">
                      <option disabled>select category</option>
                      <option value="1">DJI</option>
                      <option value="2">Aiang</option>
                    </select>
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Price</label>
                    <input type="number" max="9999999" class="form-control" name="pprice" value="{{$product->price}}" id="defaultFormControlInput" placeholder="Product Price" aria-describedby="defaultFormControlHelp" />
                </div>
            </div>

            <div class="divider my-5">
                <div class="divider-text">Product Detail Page</div>
            </div>

            <div class="mb-5">
                <label for="prodetail" class="form-label">Detail</label>
                <textarea id="prodetail" name="pdetail" placeholder="Product Detail">{!! $product->detail !!}</textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-outline-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>
<!--/ Hoverable Table rows -->
<script>
    tinymce.init({
        selector: 'textarea#prodetail'
    });

    // Get the file input element
    const fileInput = document.getElementById('upload');

    // Add an event listener to detect when a file is selected
    fileInput.addEventListener('change', handleFileSelect);

    function handleFileSelect(event) {
        const file = event.target.files[0];

        // Check if a file is selected
        if (file) {

            // Read the selected file as a data URL
            const reader = new FileReader();
            reader.onload = function (e) {
                // Set the source of the example image
                document.getElementById('exampleImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    };
</script>
@endsection
