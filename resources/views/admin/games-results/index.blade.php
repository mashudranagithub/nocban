@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Games & Results</li>
        </ol>
    </div>
</section>


<div class="row mb-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Games & Results List</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('create-games-result') }}"> Create New Games & Result</a>
        </div>
    </div>
</div>


@if($message = Session::get('msg'))
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
                    <td style="display: flex; justify-content: space-between;">
                        <a class="btn btn-info" href="{{ route('show-games-result', $post->id) }}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('edit-games-result', $post->id) }}"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('delete-post',$post->id) }}" method="POST">
                            {!! Form::open(['method' => 'DELETE','route' => ['delete-post', $post->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' =>'btn btn-danger']) !!}
                            <i class="fa fa-delete"></i>
                            {!! Form::close() !!}
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