<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>

							@if (Auth::user()->user_type ==1)
							<li class="active"> 
								<a href="{{url('/admin/dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="{{url('/admin/admin')}}"><i class="fe fe-layout"></i> <span>All Admin</span></a>
							</li>
							@elseif (Auth::user()->user_type ==0)
							<li class="active"> 
								<a href="{{url('/student/dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							@elseif (Auth::user()->user_type ==2)
							<li class="active"> 
								<a href="{{url('/teacher/dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
								
							@endif
					
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</li>
							<li> 
								<a href="{{ url('logout')}}"><i class="fe fe-star-o"></i> <span>Logout</span></a>
							</li>
							
						
						</ul>
					</div>
                </div>
            </div>