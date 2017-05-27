@extends('Admin::layouts.main-layout')

@section('link')
    {{Html::link(route('admin.project.store'),'Save',['class'=>'btn btn-primary'])}}
@stop

@section('title','Create Project')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <form novalidate="" id="form" role="form" class="form-horizontal">
          {{Form::token()}}
          <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Title" id="title" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Video ID</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Video ID" id="subject" class="form-control" name="video_id">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <textarea required="" class="form-control my-editor" placeholder="Description" rows="10" id="description" name="description"></textarea>
            </div>
          </div>


        </form>
      </div>
    </div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '{{asset('/')}}laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '{{asset('/')}}/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '{{asset('/')}}/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '{{asset('/')}}/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace('description', options);
</script>
@stop
