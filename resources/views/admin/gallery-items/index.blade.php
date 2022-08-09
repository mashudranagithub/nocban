@extends('admin.layouts.master')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Gallery</li>
            <li class="active">Items</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('create-gallery-item') }}"> Create New Gallery Item</a>
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
    <h2>Gallery Items (Photo)</h2>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Serial</th>
            <th>Photo</th>
            <th>Caption</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
	    @foreach ($photo_items as $gallery)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>
                <img style="max-width: 100px; max-height: 100px;" src="{{ asset('frontend/assets/img/galleries_items/'.$gallery->type.'/'.$gallery->gallery_id.'/'.$gallery->gallery_item)}}" alt="Gallery image">
			</td>
            <td width="65%"><h3>{{ $gallery->caption }}</h3></td>
	        <td style="display: flex; align-items:center;">
                <a style="display: inline-block; margin-right: 15px;" class="btn btn-primary" href="{{ route('edit-gallery-item',$gallery->id) }}">Edit</a>
                <form action="{{ route('delete-gallery-item',$gallery->id) }}" method="POST">
                    {!! Form::open(['method' => 'DELETE','route' => ['delete-gallery-item', $gallery->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
    {!! $photo_items->links() !!}
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <h2>Gallery Items (Video)</h2>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Serial</th>
            <th>Video</th>
            <th>Caption</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
	    @foreach ($video_items as $gallery)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>
                @php $v_id = explode('v=', $gallery->gallery_item); @endphp
                <a class="popup-video" target="_blank" href="{{$gallery->gallery_item}}">
                    <img style="max-width: 120px; overflow:hidden;" src="http://i3.ytimg.com/vi/{{$v_id[1]}}/hqdefault.jpg" alt="{{$gallery->caption}}">
                </a>
			</td>
            <td width="65%"><h3>{{ $gallery->caption }}</h3></td>
	        <td style="display: flex; align-items:center;">
                <a style="display: inline-block; margin-right: 15px;" class="btn btn-primary" href="{{ route('edit-gallery-item',$gallery->id) }}">Edit</a>
                <form action="{{ route('delete-gallery-item',$gallery->id) }}" method="POST">
                    {!! Form::open(['method' => 'DELETE','route' => ['delete-gallery-item', $gallery->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
    {!! $video_items->links() !!}
</div>
</div>
    </section>
@endsection