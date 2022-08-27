<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <p class="text-aqua" style="font-size: 2rem;margin:0 10px 0 0;">{{ Auth::user()->name }}</p>
            </div>
            <div class="pull-left">
                <a href="#" style="line-height: 30px;margin-left: 15px;"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>			
            <li><a class="nav-link" href="{{ route('settings') }}"><i class="fa fa-cog text-aqua"></i>Settings</a></li>
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-picture-o text-red"></i>
                    <span>Sliders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a class="nav-link" href="{{ route('sliders') }}"><i class="fa fa-circle-o text-aqua"></i>All Sliders</a></li>
                    <li><a class="nav-link" href="{{ route('createSlider') }}"><i class="fa fa-circle-o text-aqua"></i>Add a Slider</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-picture-o text-aqua"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a class="nav-link" href="{{route('galleries')}}"><i class="fa fa-circle-o text-aqua"></i>Galleries</a></li>
                    <li><a class="nav-link" href="{{route('createGallery')}}"><i class="fa fa-edit text-aqua"></i>Add Gallery</a></li>
                    <li><a class="nav-link" href="{{route('gallery-items')}}"><i class="fa fa-circle-o text-aqua"></i>All Gallery Images</a></li>
                    <li><a class="nav-link" href="{{route('create-gallery-item')}}"><i class="fa fa-circle-o text-aqua"></i>Add Gallery Image</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-tasks text-yellow"></i>
                    <span>Partners</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a class="nav-link" href="{{route('all-partners')}}"><i class="fa fa-circle-o text-aqua"></i>All Partners</a></li>
                    <li><a class="nav-link" href="{{route('create-partner')}}"><i class="fa fa-circle-o text-aqua"></i>Create New Partner</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-calendar text-yellow"></i>
                    <span>Posts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a class="nav-link" href="{{ route('all-posts') }}"><i class="fa fa-circle-o text-aqua"></i>All Posts</a></li>
                    <li><a class="nav-link" href="{{ route('create-post') }}"><i class="fa fa-circle-o text-aqua"></i>Create New post </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-calendar text-yellow"></i>
                    <span>Games & Results</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a class="nav-link" href="{{ route('all-games-results') }}"><i class="fa fa-circle-o text-aqua"></i>All Games & Result</a></li>
                    <li><a class="nav-link" href="{{ route('create-games-result') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Games & Result </a></li>
                </ul>
            </li>

            <li><a class="nav-link" href="{{url('/register')}}"><i class="fa fa-circle-o text-aqua"></i>Create New User </a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>