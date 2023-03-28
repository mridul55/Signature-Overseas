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
							<a href="{{ route('admin.user.role.create') }}" class="btn btn-info"><i class="icon-stack-plus mr-2"></i>{{_lang('create')}}</a>
						</h3>
						<div class="card-body">
							<table class="table table-hover table-bordered" id="sampleTable">
								<thead>
									<tr>
									<th>{{_lang('id')}}</th>
									 <th>{{_lang('role_permission')}}</th>
									 <th>{{_lang('action')}}</th>
									</tr>
								</thead>
								<tbody>
								 @foreach($model as $key => $model)
								<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $model->name }}</td>
								 <td>
								 	<a href="{{ route('admin.user.role.edit',$model->id) }}" class="btn btn-info" title="{{ _lang('edit_permission') }}" data-popup="tooltip" data-placement="bottom"><i class="fa fa-pencil-square-o"></i></a>
									
									<a href="#" id="delete_item" data-id ="{{$model->id}}" data-url="{{route('admin.user.role.delete',$model->id) }}" class="btn btn-danger" title="{{ _lang('delete_permission') }}" data-popup="tooltip" data-placement="bottom"><i class="fa fa-trash"></i></a>
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