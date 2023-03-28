@extends('layouts.app')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card">
              <h3 class="card-header">
                <a href="{{ route('admin.user.create') }}" class="btn btn-info"><i class="icon-stack-plus mr-2"></i>{{_lang('create')}}</a>
              </h3>
              <div class="card-body">
                <table class="table  table-bordered table-sm content_managment_table" data-url="{{ route('admin.user.datatable') }}">
                  <thead>
                    <tr>
                      <th>{{_lang('id')}}</th>
                      <th>{{_lang('user_name')}}</th>
                      <th>{{_lang('email')}}</th>
                      <th>{{_lang('role')}}</th>
                      <th>{{_lang('status')}}</th>
                      <th>{{_lang('action')}}</th>
                    </tr>
                  </thead>
  
                  <tbody>
  
                  </tbody>
               
                 </table>
               </div>
            </div>
        </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/js/plugins/select.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/buttons.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/responsive.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
<script src="{{ asset('js/pages/user.js') }}"></script>
@endpush
