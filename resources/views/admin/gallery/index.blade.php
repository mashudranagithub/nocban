@extends('admin.layouts.master')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Galleries</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('createGallery') }}"> Create New Gallery</a>
    </div>
</section>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="content-body">

    <div class="row">
    <div class="col-md-12">
    <h2>Photo Galleries</h2>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Serial</th>
            <th>Category</th>
            <th>Thumbnail Image</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
	    @foreach ($photo_galleries as $gallery)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $gallery->gal_cat }}</td>
	        <td>
                <img style="max-width: 100px; max-height: 100px;" src="{{ asset('frontend/assets/img/galleries_thumbnails/'.$gallery->type.'/'.$gallery->image)}}" alt="Gallery image">
			</td>
            <td width="65%"><h3>{{ $gallery->name }}</h3></td>
	        <td style="display: flex; align-items:center;">
                <a style="display: inline-block; margin-right: 15px;" class="btn btn-primary" href="{{ route('editGallery',$gallery->id) }}">Edit</a>
                <form action="{{ route('deleteGallery',$gallery->id) }}" method="POST">
                    {!! Form::open(['method' => 'DELETE','route' => ['deleteGallery', $gallery->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
    {!! $photo_galleries->links() !!}
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <h2>Video Galleries</h2>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Serial</th>
            <th>Category</th>
            <th>Thumbnail Image</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
	    @foreach ($video_galleries as $gallery)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $gallery->gal_cat }}</td>
	        <td>
                <img style="max-width: 100px; max-height: 100px;" src="{{ asset('frontend/assets/img/galleries_thumbnails/'.$gallery->type.'/'.$gallery->image)}}" alt="Gallery image">
			</td>
            <td width="65%"><h3>{{ $gallery->name }}</h3></td>
	        <td style="display: flex; align-items:center;">
                <a style="display: inline-block; margin-right: 15px;" class="btn btn-primary" href="{{ route('editGallery',$gallery->id) }}">Edit</a>
                <form action="{{ route('deleteGallery',$gallery->id) }}" method="POST">
                    {!! Form::open(['method' => 'DELETE','route' => ['deleteGallery', $gallery->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
    {!! $video_galleries->links() !!}
</div>
</div>
    </section>
@endsection