<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="{{url('/index')}}"><span class=""></span> Code Innovations </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active" style="color: white"><a href="{{url('/index')}}">Home</a></li>
				<li class="{{url('/about')}}" ><a href="about" style="color: white" >About Us</a></li>
				<li class="{{url('/services')}}"><a href="services" style="color: white">Our Services</a></li>
				
				<!-- <li class=""><a href="blog.html">Blog</a></li> -->
				<li class=""><a href="{{url('/contact')}}" style="color: white">Contact Us</a></li>
				<!-- <li class="last-grid"><a href="#">Get started</a></li> -->
			</ul>
		</nav>
		<!-- //nav -->
		
	</div>
</header>