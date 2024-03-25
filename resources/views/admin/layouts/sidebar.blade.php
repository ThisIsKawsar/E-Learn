<div class="deznav">
            <div class="deznav-scroll">
				<div class="main-profile">
					<img src="{{(!empty(Auth::user()->profile_photo_path))?url('upload/user_images/'.Auth::user()->profile_photo_path):url('upload/no_image.jpg')}}"alt="">
					<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
					<h5 class="mb-0 fs-20 text-black "><span class="font-w400">Hello,</span>{{Auth::user()->name}} </h5>
					<p class="mb-0 fs-14 font-w400">{{Auth::user()->email}} </p>
				</div>
				<ul class="metismenu" id="menu">
             
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('user.password')}}">change Password</a></li>
							<li><a href="{{route('user.profile')}}">User Details</a></li>
                        </ul>
                    </li>
                           <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-003-diamond"></i>
							<span class="nav-text">Service</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('service.index')}}">Service Details</a></li>
							<li><a href="{{Route('service.create')}}"> Create Service </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-053-heart"></i>
							<span class="nav-text">Project</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('project.index')}}">Project Details</a></li>
							<li><a href="{{Route('project.create')}}"> Create Project </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-044-file"></i>
							<span class="nav-text">Course</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('course.index')}}">Course Details</a></li>
							<li><a href="{{Route('course.create')}}"> Create Course </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">Information</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('information.index')}}">Information Details</a></li>
							<li><a href="{{Route('information.create')}}"> Create Information </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-381-network"></i>
							<span class="nav-text">Client reaview</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('client.index')}}">Client reaview Details</a></li>
							<li><a href="{{Route('client.create')}}"> Create Client reaview </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">Footer</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('footer.index')}}">Footer Details</a></li>
							<li><a href="{{Route('footer.create')}}"> Create Footer </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-061-puzzle"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('chart.index')}}">view chart</a></li>
                            <li><a href="{{Route('chart.create')}}">create chart</a></li>
                            
                        </ul>
                    </li>
                   <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">homepage</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('homepage.create')}}">create home</a></li>
							<li><a href="{{route('homepage.index')}}">home Details</a></li>
                        </ul>
                    </li>       <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">Contact</span>
						</a>
                        <ul aria-expanded="false">
                           
							<li><a href="{{route('contact.index')}}">contact Details</a></li>
                        </ul>
                    </li>
          
                 
                </ul>
				<div class="copyright">
					<p><strong>Zenix Crypto Admin Dashboard</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>