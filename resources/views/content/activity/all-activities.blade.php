@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main /</span> Activity
</h4>

<!-- Hoverable Table rows -->
<div class="card">
  <div class="card-header d-flex justify-content-between">
    <h5>Activities</h5>
    <a href="{{ route('add-activity') }}">
        <button type="button" class="btn btn-icon btn-success" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-plus bx-xs' ></i> <span>Add Activity</span>">
            <span class="tf-icons bx bx-plus"></span>
        </button>
    </a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead class="table-primary">
        <tr>
          <th>Title</th>
          <th>Image</th>
          <th>update</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><span class="fw-medium">React Project</span></td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-primary me-1">2/10</span></td>
          <td>
            <a href="{{ route('edit-activity') }}">
                <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-cog bx-xs' ></i> <span>Edit activity</span>">
                    <span class="tf-icons bx bx-cog"></span>
                </button>
            </a>
            <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-trash bx-xs' ></i> <span>Delete activity</span>">
                <span class="tf-icons bx bx-trash"></span>
            </button>
          </td>
        </tr>
        <tr>
          <td>Barry Hunter</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-success me-1">Completed</span></td>
          <td>
            <a href="{{ route('edit-activity') }}">
                <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-cog bx-xs' ></i> <span>Edit activity</span>">
                    <span class="tf-icons bx bx-cog"></span>
                </button>
            </a>
            <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-trash bx-xs' ></i> <span>Delete activity</span>">
                <span class="tf-icons bx bx-trash"></span>
            </button>
          </td>
        </tr>
        <tr>
          <td>Trevor Baker</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-info me-1">Scheduled</span></td>
          <td>
            <a href="{{ route('edit-activity') }}">
                <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-cog bx-xs' ></i> <span>Edit activity</span>">
                    <span class="tf-icons bx bx-cog"></span>
                </button>
            </a>
            <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<i class='bx bx-trash bx-xs' ></i> <span>Delete activity</span>">
                <span class="tf-icons bx bx-trash"></span>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Hoverable Table rows -->

@endsection
