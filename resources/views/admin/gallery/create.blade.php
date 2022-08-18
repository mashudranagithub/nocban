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
    <li class="active">Add New Gallery</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('galleries') }}">All Galleries</a></button>
		</div>
	</div>

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif

	<div class="row">

		<div class="col-lg-12 col-xs-12">
            <form role="form" action="{{ route('storeGallery') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="box-body">
                    <h2>Gallery Add Form</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name" class="required">Gallery Name</label>
                                <textarea name="name" class="form-control" id="name" cols="30" rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image" class="required">Gallery Thumbnail Image</label>
                                <input name="image" type="file" id="image" required >
                            </div>
                        </div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Gallery Create</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>

	</div>

</section>

@endsection