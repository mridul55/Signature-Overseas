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
            
            <div class="card-body">
      <form action="{{route('admin.language.update',$id)}}" id="content_form" method="post">
        @method('patch')
       <div class="row">
     @foreach($language as $key=>$lang)
      <div class="col-md-6">
      <label for="language_name">{{ucwords($key)}}</label>
      <input type="text" class="form-control" name="language[{{ str_replace(' ','_',$key) }}]" value="{{ $lang }}" required>
      </div>
        @endforeach
             </div>

        <div class="text-right mt-2">
        <button type="submit" class="btn btn-primary"  id="submit">{{_lang('translation')}}<i class="icon-arrow-right14 position-right"></i></button>
        <button type="button" class="btn btn-link" id="submiting" style="display: none;">{{ _lang('processing') }} <img src="{{ asset('ajaxloader.gif') }}" width="80px"></button>

       </div>
       </form>
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
$('#sampleTable').DataTable({
    responsive: true
});
</script>
<script type="text/javascript" src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/pages/setting.js') }}"></script>
@endpush