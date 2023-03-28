<form action="{{route('admin.language.create')}}" id="content_form" method="post">
@csrf
<div class="row">
	<div class="col-md-12">
        <label for="language_name">Language Name</label>
	   <input type="text" class="form-control" name="language_name" id="language_name" placheloder="Language Name">
	</div>
</div>

 <div class="text-right mt-2">
  <button type="submit" class="btn btn-primary btn-lg"  id="submit">{{_lang('create')}}</button>
  <button type="button" class="btn btn-link" id="submiting" style="display: none;">{{ _lang('processing') }} <img src="{{ asset('ajaxloader.gif') }}" width="80px"></button>

 </div>
 </form>