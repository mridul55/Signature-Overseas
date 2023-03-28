@extends('layouts.app', ['title' => _lang('user_role'), 'modal' => 'lg'])
@section('content')
 <div class="card">
  <div class="card-body">
<!-- Basic initialization -->
    <form action="{{ route('admin.user.create') }}" id="content_form" enctype="multipart/form-data" method="POST">
    <fieldset class="mb-3" id="form_field">
     <div class="row">
      <div class="col-md-2">
        <div class="form-group">
            <label for="surname">{{ _lang('Prefix') }}</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Dr/Mr/Mrs" required>
          </div>
      </div>

      <div class="col-md-5">
        <div class="form-group">
            <label for="first_name">{{ _lang('first_name') }}</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
          </div>
      </div>

      <div class="col-md-5">
        <div class="form-group">
            <label for="last_name">{{ _lang('last_name') }}</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
        </div>
     </div>

      <div class="col-md-4">
        <div class="form-group">
            <label for="email">{{ _lang('email') }}</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Last Name" required>
          </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="role_Name">{{ _lang('role_Name') }}</label>
          <select data-placeholder="Select One" name="role" id="role" class="form-control" required data-parsley-errors-container="#parsley_division_error_area">
            <option value="">Select One</option>
            @foreach ($roles as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
          <span id="parsley_division_error_area"></span>
      </div>
    </div>

      <div class="col-md-4">
        <div class="form-group">
            <label for="username">{{ _lang('username') }}</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
      </div>
     </div>

    
      <div class="col-md-6">
        <div class="form-group">
            <label for="password">{{ _lang('password') }}</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
          </div>
      </div>

      <div class="col-md-6">
       <div class="form-group">
            <label for="password_confirmation">{{ _lang('password_confirmation') }}</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="password confirmation" required>
          </div>
      </div>
     </div>
        @can('user.create')
      <div class="text-right">
        <button type="submit" class="btn btn-primary"  id="submit">{{_lang('create User')}}<i class="icon-arrow-right14 position-right"></i></button>
        <button type="button" class="btn btn-link" id="submiting" style="display: none;">{{_lang('Processing')}} <img src="{{ asset('ajaxloader.gif') }}" width="80px"></button>
       </div>
        @endcan
     <fieldset class="mb-3" id="form_field">
    </form>
  </div>
</div>
<!-- /basic initialization -->
@endsection
@push('scripts')
<script src="{{ asset('js/pages/user.js') }}"></script>
@endpush

