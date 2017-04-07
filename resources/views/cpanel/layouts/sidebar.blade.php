<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{route('admin.index')}}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i>Website Seting<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('brand.index')}}">Brand</a></li>
            <li><a href="{{route('service.index')}}">Service</a></li>
            <li><a href="{{route('about.index')}}">About</a></li>
            <li><a href="{{route('team.index')}}">Team</a></li>
            <li><a href="{{route('setting.index')}}">Setting</a></li>
          </ul>
        </li>
                <li>
                    <a href="{{route('slide.index')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li>
                   <a href="{{route('cat.index')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Cat</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('post.index')}}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Post</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>