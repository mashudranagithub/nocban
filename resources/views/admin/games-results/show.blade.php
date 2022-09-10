@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">

</section>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('all-games-results') }}"> Back</a>
        </div>
        <br>
        <br>
        <hr>
    </div>
</div>



    @if($post->category)
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="category" class="required">Games & Result Type/Category</label>
                <select name="category" class="form-control select2" id="category" required>
                    <option>Select Type/Category</option>
                    <option @if($post->category == "games_results_national") selected @endif value="games_results_national">National</option>
                    <option @if($post->category == "g_r_int_asian") selected @endif value="g_r_int_asian">International - Asian</option>
                    <option @if($post->category == "g_r_int_asian_beach") selected @endif value="g_r_int_asian_beach">International - Asian Beach</option>
                    <option @if($post->category == "g_r_int_asian_youth") selected @endif value="g_r_int_asian_youth">International - Asian Youth</option>
                    <option @if($post->category == "g_r_int_common_wealth") selected @endif value="g_r_int_common_wealth">International - Common Wealth</option>
                    <option @if($post->category == "g_r_int_common_wealth_youth") selected @endif value="g_r_int_common_wealth_youth">International - Common Wealth Youth</option>
                    <option @if($post->category == "g_r_int_children") selected @endif value="g_r_int_children">International - Children of Asia International Sports Games</option>
                    <option @if($post->category == "g_r_int_islamic") selected @endif value="g_r_int_islamic">International - Islamic Solidarity Games</option>
                    <option @if($post->category == "g_r_int_summer") selected @endif value="g_r_int_summer">International - Summer Olympic Games</option>
                    <option @if($post->category == "g_r_int_youth_olympic") selected @endif value="g_r_int_youth_olympic">International - Youth Olympic Games</option>
                    <option @if($post->category == "g_r_int_south_asian") selected @endif value="g_r_int_south_asian">International - South Asian</option>
                    <option @if($post->category == "g_r_int_south_asian_beach") selected @endif value="g_r_int_south_asian_beach">International - South Asian Beach Games</option>
                </select>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="status" class="required">Games & Result Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option @if($post->status == 1) selected @endif value="1">Active</option>
                    <option @if($post->status == 0) selected @endif value="0">In active</option>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="title" class="required">Games & Result Title</label>
                <input name="title" type="text" id="title" class="form-control" required @if($post->title) value="{{$post->title}}" @endif>
            </div>
        </div>

        @if($post->file)
        <div class="col-md-12">
            <h3>Previous File</h3>
            <iframe width="100%" height="500px;" src="{{ asset('frontend/assets/posts/files/'.$post->category.'/'.$post->file) }}" frameborder="1"></iframe>
        </div>
        @endif
    </div>
    @endif

@endsection