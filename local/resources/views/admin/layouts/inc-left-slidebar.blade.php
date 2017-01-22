<style>

ul.nav-main > li.nav-expanded > a {
  box-shadow: 2px 0 0 #ee413c inset;
}
html.no-overflowscrolling .nano > .nano-pane > .nano-slider {
    background: #ee413c;
}
.page-header h2 {
    border-bottom-color: #ee413c;
}
</style>
<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar" ></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li {{ (Request::is('admin/dashboard*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/dashboard/')}}"  >
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li {{ (Request::is('admin/user*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/user/')}}" >
											<i class="fa fa-male" aria-hidden="true"></i>
											<span>UserAccounts</span>
										</a>
									</li>
									<li {{ (Request::is('admin/teacher*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/teacher/')}}" >
											<i class="fa fa-street-view " aria-hidden="true"></i>
											<span>Teacher</span>
										</a>
									</li>
									<li {{ (Request::is('admin/student*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/student/')}}" >
											<i class="fa fa-graduation-cap " aria-hidden="true"></i>
											<span>Student</span>
										</a>
									</li>
									<li {{ (Request::is('admin/course*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/course/')}}" >
											<i class="fa fa-cube" aria-hidden="true"></i>
											<span>Course</span>
										</a>
									</li>

									<li {{ (Request::is('admin/setting*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/setting')}}" >
											<i class="fa fa-cog " aria-hidden="true"></i>
											<span>Setting</span>
										</a>
									</li>

								</ul>



							</nav>



							<hr class="separator" />


						</div>

					</div>

				</aside>
				<!-- end: sidebar -->
