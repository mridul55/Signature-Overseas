@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.user.role.create') }}" id="content_form" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Role Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2>{{_lang('permission')}}</h2>
                                <table class="table table-bordered">
                                    @foreach (split_name($permissions) as $key => $element)
                                    <tr>
                                        <td rowspan="{{count($element)+1}}">{!! $key !!}</td>
                                        <td rowspan="{{count($element)+1}}">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input select_all"
                                                    id="select_all_{{$key}}" data-id="{{$key}}">
                                                <label class="custom-control-label" for="select_all_{{$key}}">{{_lang('select_all')}}</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($element as $per)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input {{$key}}" id="{{$per}}" multiple="multiple" name="permissions[]" value="{{$per}}">
                                                <label class="custom-control-label" for="{{$per}}">{{tospane($per)}}</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </table>
                            </div>
                            @can('role.create')
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" id="submit">{{_lang('set_permission')}}<i class="icon-arrow-right14 position-right"></i></button>
                                <button type="button" class="btn btn-link" id="submiting" style="display: none;">{{_lang('processing')}} <img src="{{ asset('ajaxloader.gif') }}" width="80px"></button>
                            </div>
                            @endcan

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
@push('scripts')
<script src="{{ asset('js/pages/role.js') }}"></script>
<script>
  $(document).on('click','.select_all',function(){
    var id =$(this).data('id');
    if (this.checked) {
      $("."+id).prop('checked', true);
    } else{
      $("."+id).prop('checked', false);
    }
  });
</script>
@endpush
