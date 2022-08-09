@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Athletes</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-athlete') }}"> Back</a>
    </div>
</section>


<div class="row mb-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Athletes List</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('create-athlete') }}"> Create New athlete</a>
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
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Athlete ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Division</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Category</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Date of Birth</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Age</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp @foreach ($posts as $post)
                <tr class="odd">
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->athlete_id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->division }}</td>
                    <td>{{ $post->category }}</td>
                    <td class="dob">{{ date('Y-m-d', strtotime($post->dob)) }}</td>
                    <td class="age"></td>
                    <td>@if($post->status == 1) <button class="btn btn-success badge">Active</button> @else <button class="btn btn-warning badge">In-active</button> @endif</td>
                    <td>
                        <form action="{{ route('delete-athlete',$post->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('edit-athlete',$post->id) }}">Edit</a> {!! Form::open(['method' => 'DELETE','route' => ['delete-athlete', $post->id],'style'=>'display:inline']) !!} {!! Form::submit('Delete', ['class' =>
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

@section('script')
    $('.dob').each(function (){
        var d = $(this).text();
        getAge(d, this);
    })
    function getAge(d, that) {
        var dob = d;
        var year = Number(dob.substr(0, 4));
        var month = Number(dob.substr(4, 2)) - 1;
        var day = Number(dob.substr(6, 2));
        var today = new Date();
        var age = today.getFullYear() - year;
        if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
            age--;
        }
        $(that).closest('tr.odd').find('.age').text(age);
    }
@endsection