@extends('admin.layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Slider Create</li>
  </ol>
</section>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<!-- Main content -->
<section class="content">
  <div class="row" style="margin-bottom:30px;">
    <div class="col-md-12 text-right">
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('sliders') }}">All Slides</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('storeSlider') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Slide Create Form</h2>
        	<hr>
          <div class="form-group">
            <label for="slider_image">Slider Image</label>
            <input name="slider_image" type="file" class="form-control" id="slider_image" placeholder="Slide Image" accept=".jpg, .jpeg" required>
            <p class="help-block text-red">Size: 1920px width and 900px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>

          <div class="form-group">
            <label for="slider_title">Slider Title</label>
            <input name="slider_title" type="text" class="form-control" id="slider_title" placeholder="Slide Title">
          </div>

          <div class="form-group">
            <label for="active_yn">Active yn</label>
            <select type="radio" name="active_yn" id="active_yn" class="form-control">
              <option value="Y">Active</option>
              <option value="N">In-active</option>
            </select>
          </div>

          <div class="form-group">
            <label for="slider_position">Slide Position (Default Position - 1st)</label>
            <input name="slider_position" value="1" type="number" class="form-control" id="slider_position">
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Slider Create</button>
          </div>

        </div>
        <!-- /.box-body -->

        
      </form>
		</div>
	</div>
</section>

@endsection