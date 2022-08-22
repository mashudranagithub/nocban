@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Posts</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-posts') }}"> Back</a>
    </div>
</section>


<div class="row mb-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Posts List</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('create-post') }}"> Create New post</a>
        </div>
    </div>
</div>


@if ($message = Session::get('msg'))
<div class="alert alert-info">
    <p>{{ $message }}</p>
</div>
@endif


<div class="card mt-4">
    <div class="card-body">
        <table id="post-datatable" class="table table-striped dataTable">
            <thead>
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending">SI</th>
                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1">Category</th>
                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1">Title</th>
                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1">File Name</th>
                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1">Status</th>
                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp @foreach ($posts as $post)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->file }}</td>
                    <td>@if($post->status == 1) <button class="btn btn-success badge">Active</button> @else <button class="btn btn-warning badge">In-active</button> @endif</td>
                    <td>
                        <form action="{{ route('delete-post',$post->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('show-post',$post->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('edit-post',$post->id) }}">Edit</a> {!! Form::open(['method' => 'DELETE','route' => ['delete-post', $post->id],'style'=>'display:inline']) !!} {!! Form::submit('Delete', ['class' =>
                            'btn btn-danger']) !!} {!! Form::close() !!}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$posts->links()}}
</div>
</div>

</div>

@endsection