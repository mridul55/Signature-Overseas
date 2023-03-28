@extends('layouts.app', ['title' => _lang('language'), 'modal' => 'lg'])

@section('content')
<!-- Basic initialization -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
    
      <div class="col-sm-6">
      <h3 class="p-2">Language</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Language</li>
        </ol>
      </div>
        <div class="col-md-12">
          <div class="card">
            <h3 class="card-header">
              <button type="button" class="btn btn-info" id="content_managment" data-url ="{{ route('admin.language.create') }}"><i class="icon-stack-plus mr-2"></i>{{_lang('create')}}</button>
            </h3>
            <div class="card-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>{{_lang('language')}}</th>
                    <th>{{_lang('edit_tarnslation')}}</th>
                    <th>{{_lang('remove')}}</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach(get_language_list() as $language)
                <tr>
                <td>{{ ucwords($language) }}</td>
                  <td>
                    <a href="{{ route('admin.language.edit',$language) }}" class="btn btn-info"><i class="icon-pencil7"></i>{{_lang('translate')}}</a>
                  </td>
                 <td>
                    <a href="#" class="btn btn-danger" id="delete_item" data-id ="{{$language}}" data-url="{{route('admin.language.delete',$language) }}">{{_lang('trash')}}</a>
                 </td>
                </tr>
                @endforeach
                </tbody>
               </table>
             </div>
          </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- /basic initialization -->
@stop
@push('scripts')
<script>
$(document).ready(function(){
  $('#sampleTable').DataTable({
    responsive: true
});
});
</script>
<script type="text/javascript" src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/pages/setting.js') }}"></script>
@endpush