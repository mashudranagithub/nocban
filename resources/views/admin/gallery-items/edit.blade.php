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
        <li class="active">Add New Gallery Item</li>
    </ol>
</section>

<!-- Main content -->
<section class="content group-members">
    <div class="row" style="margin-bottom:30px;">
        <div class="col-md-12 text-right">
            <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('gallery-items') }}">All Gallery Items</a></button>
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

            <div class="box-body">
                <h2>Gallery Image Edit Form</h2>
                <hr>

                <div class="row">
                    <div id="photo_galleries">

                        <form role="form" action="{{ route('update-gallery-item', $gallery->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="gallery_id" class="required">Gallery</label>
                                    <select name="gallery_id" id="gallery_id" required class="form-control">
                                        <option value="">Select Gallery</option>
                                        @foreach($galleries as $p_gallery)
                                        <option value="{{ $p_gallery->id }}" @if($p_gallery->id == $gallery->gallery_id) selected @endif>{{ $p_gallery->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="image" class="">Gallery Image</label>
                                    <input name="image" type="file" id="image">
                                </div>
                            </div>


                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="caption">Gallery Image Caption</label>
                                    <textarea name="caption" id="caption" cols="30" rows="2" class="form-control">{{$gallery->caption}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-5 mt-2 mb-2">
                                <img style="max-width: 300px; max-height: 300px;" src="{{ asset('frontend/assets/img/galleries_items/'.$gallery->gallery_id.'/'.$gallery->gallery_item)}}" alt="Gallery present image">
                            </div>

                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary mt-3" style="margin-top: 25px;" >Gallery Image Update</button>
                            </div>

                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>

    </div>

</section>


@section('script')
{{-- Own script for this page only --}}
@endsection

@endsection
