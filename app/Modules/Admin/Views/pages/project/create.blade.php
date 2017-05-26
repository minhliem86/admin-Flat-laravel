@extends('Admin::layouts.main-layout')

@section('link')
    {{Html::link(route('admin.project.store'),'Save',['class'=>'btn btn-primary'])}}
@stop

@section('title','Create Project')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <form novalidate="" id="form" role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Title" id="title" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Subject</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Subject" id="subject" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <textarea required="" class="form-control" placeholder="Description" rows="10" cols="30" id="description" name="description"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <textarea required="" class="form-control" placeholder="Description" rows="10" cols="30" id="description" name="description"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <textarea required="" class="form-control" placeholder="Description" rows="10" cols="30" id="description" name="description"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <textarea required="" class="form-control" placeholder="Description" rows="10" cols="30" id="description" name="description"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <textarea required="" class="form-control" placeholder="Description" rows="10" cols="30" id="description" name="description"></textarea>
            </div>
          </div>

        </form>
      </div>
    </div>
@endsection
