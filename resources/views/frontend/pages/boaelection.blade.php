@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Bangladesh Olympic Association Election</h1>
    </div>
</section>
<!-- End Section Title -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="crumbs">
        <div class="container">
            <ul>
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li>/</li>
                <li><a href="{{route('boaelection')}}">BOA Election</a> </li>  
                <li>/</li>
                
                @include('frontend.partials.back-button')
                
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>
    

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">

            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Bangladesh Olympic Association Election</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <section id="tabs" class="project-tab">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Election Documents</h3>
                                            <table class="table table-hover table-striped">
                                                <thead class="scr-had-bg">
                                                    <tr>
                                                        <th>Serial</th>
                                                        <th>Title</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            @if($posts)
                                                @foreach($posts as $post)
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a target="_blank" href="{{asset("frontend/assets/posts/files/".$post->category."/".$post->file)}}">{{$post->title}}</a></td>
                                                        <td><a target="_blank" href="{{asset("frontend/assets/posts/files/".$post->category."/".$post->file)}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                @endforeach
                                                @else

                                                    <tr>
                                                        <td>1</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final Result of BOA EC Member Election 2022.docx.pdf')}}">Final Result of BOA Executive Committee Member Election 2022</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final Result of BOA EC Member Election 2022.docx.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>2</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final Voter List for BOA EC Member Election 2022.')}}">Final Voter List for BOA EC Member Election 2022</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final Voter List for BOA EC Member Election 2022.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>3</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Draft Voter List of BOA EC Member Election 2022 for vacant post.pdf')}}">Draft Voter List of BOA EC Member Election 2022 for vacant post</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Draft Voter List of BOA EC Member Election 2022 for vacant post.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>4</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Schedule of BOA EC Member Election 2022 for vacant post.pdf')}}">Schedule of BOA EC Member Election 2022 for vacant post</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Schedule of BOA EC Member Election 2022 for vacant post.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>5</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final_Result_BOA_EC_Election_2021.pdf')}}">Final Result of BOA Executive Committee Election 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final_Result_BOA_EC_Election_2021.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>6</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Primary_Result_BOA_EC_Election_2021.pdf')}}">Primary Result for BOA EC Election 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Primary_Result_BOA_EC_Election_2021.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>7</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final_Candidate_List_for_BOA_EC_Election_2021.pdf')}}">Final Candidate List for BOA EC Election 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Final_Candidate_List_for_BOA_EC_Election_2021.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>8</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Legal_Candidate_List.pdf')}}">Legal Candidate List for BOA EC Election 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Legal_Candidate_List.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>9</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Draft_Legal_Nomination_List.pdf')}}">Draft Legal Nomination List</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Draft_Legal_Nomination_List.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>10</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/final-voter-talika.pdf')}}">Final Voter List for BOA Executive Committee Election 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/final-voter-talika.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>11</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/BOA Election Bi-Laws 2021.pdf')}}">BOA Election Bi-Laws 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/BOA Election Bi-Laws 2021.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>12</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Draft Voter List of BOA EC Election 2021.pdf')}}">Draft Voter List for BOA EC Election 2021</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Draft Voter List of BOA EC Election 2021.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>13</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Election Schedule-2.pdf')}}">Election Schedule 2</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Election Schedule-2.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>14</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Election Schedule-1.pdf')}}">Election Schedule 1</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Election Schedule-1.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>15</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Circular.pdf')}}">Election Circular</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/electionFiles/Circular.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>

                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- End Info ABout --> 
                </div>  
                <!-- End Info-->
            </div>
            <!-- End About Template-->

        </div>                     
    </div>  
    <!-- End Content Central -->

</section>
<!-- End Section Area - Content Central -->

@endsection