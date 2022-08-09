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
            <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;"
                    href="{{ route('galleries') }}">All Galleries</a></button>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12 col-xs-12">
            <form action="{{ route('updateGallery', $gallery->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <h2>Gallery Edit Form</h2>
                    <hr>
                    <div class="row">


                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type" class="required">Gallery Type</label>
                                        <select name="type" id="type" required class="form-control">
                                            <option value="">Select Gallery Type</option>
                                            <option value="photo" @if($gallery->type=='photo') selected @endif >Photo
                                                Gallery</option>
                                            <option value="video" @if($gallery->type=='video') selected @endif >Video
                                                Gallery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gal_cat" class="required">Gallery Category</label>
                                        <select name="gal_cat" id="gal_cat" required class="form-control">
                                            <option value="">Select gallery category</option>
                                            <option value="local" @if($gallery->gal_cat=='local') selected @endif >Local
                                            </option>
                                            <option value="national" @if($gallery->gal_cat=='national') selected @endif
                                                >National</option>
                                            <option value="international" @if($gallery->gal_cat=='international')
                                                selected @endif >International</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="image">Gallery Thumbnail Image</label>
                                    <input name="image" type="file" id="image">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="required">Gallery/Event Name</label>
                                        <textarea name="name" class="form-control" id="name" cols="30" rows="2"
                                            required>{{ $gallery->name }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button type="submit" class="btn btn-primary">Gallery Update</button>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="">Gallery/Event Existing Thumbnail Image</label>
                                <img width="100%"
                                    src="{{ asset('frontend/assets/img/galleries_thumbnails/'.$gallery->type.'/'.$gallery->image) }}"
                                    alt="Thumbnail image">
                                <br>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>

    </div>

</section>

@endsection
