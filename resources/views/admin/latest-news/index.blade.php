@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Newses</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-news') }}"> Back</a>
    </div>
</section>


<div class="row mb-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Posts List</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('create-news') }}"> Create New news</a>
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
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">SI</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp @foreach ($newses as $news)
                <tr class="odd">
                    <td>{{ ++$i }}</td>
                    <td>{{ $news->title }}</td>
                    <td>@if($news->status == 1) <button class="btn btn-success badge">Active</button> @else <button class="btn btn-warning badge">In-active</button> @endif</td>
                    <td>
                        <form action="{{ route('delete-news',$news->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('edit-news',$news->id) }}">Edit</a> {!! Form::open(['method' => 'DELETE','route' => ['delete-news', $news->id],'style'=>'display:inline']) !!} {!! Form::submit('Delete', ['class' =>
                            'btn btn-danger']) !!} {!! Form::close() !!}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

</div>

@endsection