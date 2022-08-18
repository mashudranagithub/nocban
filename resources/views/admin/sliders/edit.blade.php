@extends('admin.layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Slider Edit</li>
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
			<form role="form" action="{{ route('updateSlider', $slider->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Slide Create Form</h2>
        	<hr>
          <div class="form-group">
            <img style="width: 200px;" src="{{ url('frontend/assets/img/sliders/'.$slider->slider_image) }}" alt="Slide Image"> <br>
            <label for="slider_image">Slider Image</label>
            <input name="slider_image" type="file" class="form-control" id="slider_image" placeholder="Slider Image" accept=".jpg, .jpeg">
            <p class="help-block text-red">Size: 1920px width and 900px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>

          <div class="form-group">
            <label for="slider_title">Slider Title</label>
            <input name="slider_title" type="text" class="form-control" id="slider_title" value="{{ $slider->slider_title }}">
          </div>

          <div class="form-group">
            <label for="slider_position">Slider Position (Default Position - 1st)</label>
            <input name="slider_position" value="{{ $slider->slider_position }}" type="number" class="form-control" id="slider_position">
          </div>

          <div class="form-group">
            <label for="active_yn">Active yn</label>
            <select type="radio" name="active_yn" id="active_yn" class="form-control">
              <option value="Y" @if($slider->active_yn == 'Y') selected @endif >Active</option>
              <option value="N" @if($slider->active_yn == 'N') selected @endif >In-active</option>
            </select>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Sliderr Update</button>
          </div>

        </div>
        <!-- /.box-body -->

        
      </form>
		</div>
	</div>
</section>

@endsection