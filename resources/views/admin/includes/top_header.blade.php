 		<!--header-->
		 <header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
					
					</div>
				</div>



				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						


			
				
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0">Админ сайта</p>
									</div>
									<img src="https://via.placeholder.com/110x110" class="user-img" alt="">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a>
								<div class="dropdown-divider mb-0"></div>	
								
								
								<a href="{{ route('admin.logout') }}" class="dropdown-item" href="javascript:;"><i
										class="bx bx-power-off"></i><span>Выйти</span>
								</a>

							</div>
						</li>

						<li class="nav-item dropdown dropdown-language">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="{{ route('admin.logout') }}" >
									<span style="font-size: 14px">выйти</span>
							</a>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->