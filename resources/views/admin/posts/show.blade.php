@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">

</section>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('all-posts') }}"> Back</a>
        </div>
        <br>
        <br>
        <hr>
    </div>
</div>


<div class="row">
    @if($post->file)
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <iframe width="100%" height="500px;" src="{{ asset('frontend/assets/files/posts/'.$post->category.'/'.$post->file) }}" frameborder="1"></iframe>
        </div>
    </div>
    @endif
</div>
@endsection