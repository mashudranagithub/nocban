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
                <h2>Gallery Item Add Form</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label class="required">Select gallery item type</label>
                        <br>
                        <div class="form-group" style="display: inline-flex;justify-content: space-between;min-width: 120px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="item_type" id="exampleRadios1" value="photo" checked>
                                <label class="form-check-label" for="exampleRadios1">Photo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="item_type" id="exampleRadios2" value="video">
                                <label class="form-check-label" for="exampleRadios2">Video</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="photo_galleries">

                        <form role="form" action="{{ route('store-gallery-item') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="gallery_id" class="required">Gallery</label>
                                    <select name="gallery_id" id="gallery_id" required class="form-control">
                                        <option value="">Select Gallery</option>
                                        @foreach($photo_galleries as $gallery)
                                        <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="image" class="required">Gallery Image</label>
                                    <input name="image" type="file" id="image" required>
                                </div>
                            </div>


                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="caption">Gallery Item Caption</label>
                                    <textarea name="caption" id="caption" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary mt-3" style="margin-top: 25px;" >Gallery Item Add</button>
                            </div>

                        </form>


                    </div>
                </div>


                <div class="row">
                    <div id="video_galleries">

                        <form role="form" action="{{ route('store-gallery-item') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="gallery_id" class="required">Gallery</label>
                                    <select name="gallery_id" id="gallery_id" required class="form-control">
                                        <option value="">Select Gallery</option>
                                        @foreach($video_galleries as $gallery)
                                        <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="gallery_item">Gallery Video Link</label>
                                    <input name="gallery_item" type="url" placeholder="Paste the video link here" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="caption">Gallery Item Caption</label>
                                    <textarea name="caption" id="caption" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary mt-3" style="margin-top: 25px;" >Gallery Item Add</button>
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
function selGallery (sel_gallery) {
    var gallery = sel_gallery;
    if(gallery == 'photo'){
        $('#photo_galleries').show();
        $('#video_galleries').hide();
    }else if(gallery == 'video') {
        $('#photo_galleries').hide();
        $('#video_galleries').show();
    }else {
        $('#photo_galleries').show();
        $('#video_galleries').hide();
    }
};
$(document).ready(function(){
    var sel_gallery = $("input[name='item_type']:checked").val();
    selGallery (sel_gallery);
    $("input[name='item_type']").on('change', function(){
        var sel_gallery = $("input[name='item_type']:checked").val();
        selGallery (sel_gallery);
    });
});
@endsection

@endsection
