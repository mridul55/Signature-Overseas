@extends('layouts.app', ['title' => _lang('setting'), 'modal' => false])
@section('content')
<!-- Basic initialization -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="p-2">Setting</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Setting</li>
        </ol>
      </div>
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
             <div class="bs-component">

              <ul class="nav nav-pills nav-justified p-2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#home">{{_lang('home')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu1">{{_lang('logo')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu2">{{_lang('basic')}}</a>
                </li>
              </ul>
				
              

  <!-- Tab panes -->
          

          <form action="{{route('admin.setting')}}" id="content_form" method="post">
            @csrf
              <div class="tab-content">
                <div id="home" class="container tab-pane active">
                   <div class="row">
                     <div class="col-md-6">
                       <label for="company_name">company Name</label>
                       <input type="text" name="company_name" value="{{get_option('company_name')}}"  class="form-control">
                     </div>

                     <div class="col-md-6">
                       <label for="contact_number">Contact Number</label>
                       <input type="text" name="contact_number" value="{{get_option('contact_number')}}"  class="form-control">
                     </div>

                     <div class="col-sm-6">
                        <label for="company_id">company Id</label>
                       <input type="text" name="company_id" value="{{get_option('company_id')}}"  class="form-control">
                     </div>

					 <div class="col-sm-6">
                        <label for="language">System Language</label>
						<select name="language" class="form-control select">
                        {!! load_language( get_option('language') ) !!}
                        </select>
                     </div>

					 <div class="col-sm-6">
                        <label for="address">Company Address</label>
						<textarea name="address" id="address"  rows="3" class="form-control"></textarea>
                        </select>
                     </div>

                    </div>
                  </div>

                <div id="menu1" class="container tab-pane fade">
                 <div class="row">
                   <div class="col-md-6">
                     <label for="logo">Logo</label>
                     <input type="file" name="logo" id="logo">
                     @if(get_option('logo'))
                        <input type="hidden" class="form-controll-file" name="oldLogo" value="{{get_option('logo')}}">
                      @endif

                   </div>

                   <div class="col-md-6">
                     <label for="favicon">Favicon</label>
                     <input type="file" name="favicon">
                      @if(get_option('favicon'))
                        <input type="hidden" name="oldfavicon" value="{{get_option('favicon')}}">
                      @endif
                   </div>

                 </div> 
                </div>
             
				
			  <div id="menu2" class="container tab-pane fade"><br>
                 <div class="row">
                    <div class="col-md-6">
						<label for="facebook_link">Facebook</label>
                    	<input type="text" name="facebook_link" id="facebook_link" class="form-control">
                    </div>

					<div class="col-md-6">
						<label for="twitter_link">Twitter</label>
                    	<input type="text" name="twitter_link" id="twitter_link" class="form-control">
                    </div>

					<div class="col-md-6">
						<label for="youtube_link">Twitter</label>
                    	<input type="text" name="youtube_link" id="youtube_link" class="form-control">
                    </div>

					<div class="col-md-6">
						<label for="linkden_link">Linkden</label>
                    	<input type="text" name="linkden_link" id="linkden_link" class="form-control">
                    </div>
                      
                 </div>
                </div>


                 <div class="text-right mr-2 pt-2">
                  <button type="submit" class="btn btn-primary"  id="submit">{{_lang('update_setting')}}</button>
                  <button type="button" class="btn btn-link" id="submiting" style="display: none;">{{ _lang('processing') }} <img src="{{ asset('ajaxloader.gif') }}" width="80px"></button>

                 </div>
                 </form>
              </div>

            </div>
          </div>
        </div>
    </div>
	</div>
  </div>
</section>
        
<!-- /basic initialization -->
@stop
@push('scripts')
<script src="{{ asset('js/pages/setting.js') }}"></script>
@endpush