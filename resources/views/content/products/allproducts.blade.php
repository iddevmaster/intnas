@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main /</span> Products
</h4>

<!-- Hoverable Table rows -->
<div class="card">
  <div class="card-header d-flex justify-content-between">
    <h5>All Products</h5>
    <a href="{{ route('add-products') }}">
        <button type="button" class="btn btn-icon btn-success" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-plus bx-xs' ></i> <span>Add product</span>">
            <span class="tf-icons bx bx-plus"></span>
        </button>
    </a>
  </div>
    @if(session('status'))
        <div class="alert alert-success">
            <span><i class='bx bx-check'></i></span>{{ session('status') }}
        </div>
    @endif
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>category</th>
            <th>price</th>
            <th>stock</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><img src="/uploads/product/{{ $product->img }}" width="50" alt=""> <span class="fw-medium">{{ $product->name }}</span></td>
                <td>{{ optional($product->getCate)->prefix }}</td>
                <td>{{ $product->price }}</td>
                <td><span class="badge bg-label-primary me-1">2/10</span></td>
                <td>
                <a href="{{ route('edit-product', ['pid' => $product->id]) }}">
                    <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-cog bx-xs' ></i> <span>Edit product</span>">
                        <span class="tf-icons bx bx-cog"></span>
                    </button>
                </a>
                <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-trash bx-xs' ></i> <span>Delete product</span>">
                    <span class="tf-icons bx bx-trash"></span>
                </button>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Hoverable Table rows -->

@endsection
