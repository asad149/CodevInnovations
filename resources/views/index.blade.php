<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- head files -->

@include('include.headfile')


<!--// head files  -->
<body>


<!-- header -->

@include('include.header')

<!-- //header -->


<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-w3pvt">
				<!-- banner slider-->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
						<li>
							<div class="w3ls_banner_txt">
								<h2 class="b-w3ltxt text-capitalize mt-md-4">Corporate <span>Business</span> </h2>
								<h4 class="b-w3ltxt text-capitalize">Best Technology Demand</h4>
								<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliacurae, Curabitur quis luctus lectus.
								 Morbi at dui nisl.</p>
								<!-- <a href="services.html" class="btn btn-banner my-sm-3 mr-2">Read More</a>
								<a href="contact.html" class="btn btn-banner1 my-sm-3">Get Started</a> -->
							</div>
						</li>
						<li>
							<div class="w3ls_banner_txt">
								<h3 class="b-w3ltxt text-capitalize mt-md-4">Corporate <span>Marketing</span> </h3>
								<h4 class="b-w3ltxt text-capitalize">Best Technology Demand</h4>
								<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliacurae, Curabitur quis luctus lectus.
								 Morbi at dui nisl.</p>
								<!-- <a href="services.html" class="btn btn-banner my-sm-3 mr-2">Read More</a>
								<a href="contact.html" class="btn btn-banner1 my-sm-3">Get Started</a> -->
							</div>
						</li>
						<li>
							<div class="w3ls_banner_txt">
								<h3 class="b-w3ltxt text-capitalize mt-md-4">Corporate <span>Development</span> </h3>
								<h4 class="b-w3ltxt text-capitalize">Best Technology Demand</h4>
								<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliacurae, Curabitur quis luctus lectus.
								 Morbi at dui nisl.</p>
								<!-- <a href="services.html" class="btn btn-banner my-sm-3 mr-2">Read More</a>
								<a href="contact.html" class="btn btn-banner1 my-sm-3">Get Started</a> -->
							</div>
						</li>
					</ul>
					<div class="navigation">
						<div>
							<label for="slides_1"></label>
							<label for="slides_2"></label>
							<label for="slides_3"></label>
						</div>
					</div>
				</div>
				<!-- //banner slider-->
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="banner-bottom pt-sm-5 pt-4 mt-sm-0 mt-2">
<center><h1>Our Services</h1></center>
	<div class="container">
		<div class="row bottom_grids text-center mt-lg-5 mt-3">
			
			<div class="col-md-4 grid1 mb-sm-5 mb-4">

				<span class="fa fa-fort-awesome"></span>
				<h3 class="my-sm-3 mt-3 mb-2">POS</h3>
				
				<p class=""> People are always going to go shopping. A lot of our effort is just ‘how do we make the retail experience a great one?</p>
				<a href="{{url('/pos')}}" class="btn btn-primary">View Page</a>
			</div>
			<div class="col-md-4 grid2 mb-sm-5 mb-4">
				<span class="fa fa-key"></span>
				<h3 class="my-sm-3 mt-3 mb-2">Security</h3>
				<p class=""> Vestibulum ante ipsum primis in faucibus orci luctus eted ultrices posuere Curae primis in faucibus luctus eted.</p>
			</div>
			<div class="col-md-4 grid3 mb-sm-5 mb-4">
				<span class="fa fa-tasks"></span>
				<h3 class="my-sm-3 mt-3 mb-2">Presentation</h3>
				<p class=""> Vestibulum ante ipsum primis in faucibus orci luctus eted ultrices posuere Curae primis in faucibus luctus eted.</p>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- advantages and details -->
<section class="advantages pt-lg-5 pt-3">
	<div class="container pb-md-5">
		<div class="row advantages_grids">
			<!-- <div class="col-lg-6">
				<img src="images/about.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-lg-0 mt-4">
				<h3 class="mt-sm-3">Nullam varius, est eu vulputate elementum, tortor leo elementum justo, ac viverra ex.</h3>
				<p class="my-sm-4 mt-2 mb-4">  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere et Curae Integer ullamcorper metus et urna
				maximus, ac maximus es blandit. Nam pretium tempor mi, a fringilla leo imperdiet intre. Integer lacini dolor ultricies turpis.
				 non euismod lectus tincidunt vitae. Quisqe non facilis ante. Duis luctus id ex eget volutpat. Aliquam iaculis ante
				 urn luctus viverra</p>
			</div> -->
			<div class="row mt-sm-5 mx-0">
				<div class="col-lg-3 col-6 grid4 mb-5">
					<span class="fa fa-print"></span>
					<h3 class="mt-sm-3 mt-2">Statistics</h3>
					<p class=""> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
				</div>
				<div class="col-lg-3 col-6 grid5 mb-5">
					<span class="fa fa-newspaper-o"></span>
					<h3 class="mt-sm-3 mt-2">Security</h3>
					<p class=""> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
				</div>
				<div class="col-lg-3 col-6 grid6 mb-5">
					<span class="fa fa-unlock"></span>
					<h3 class="mt-sm-3 mt-2">Presentation</h3>
					<p class=""> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
				</div>
				<div class="col-lg-3 col-6 grid7 mb-5">
					<span class="fa fa-product-hunt"></span>
					<h3 class="mt-sm-3 mt-2">Security</h3>
					<p class=""> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //advantages and details -->

<!-- statistics -->
<section class="statistics py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading mb-md-5 mb-4">Latest <strong>statistical information</strong></h3>
		<div class="row">
			<div class="col-lg-4">
				<p class="mb-4">  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere Curae Integer ullati mcorper metus et urna
				maximus, ac maximus estlen blandit. Nam pretium tempor mi, a sed fringilla leo imperdiet intre. Integer lacinia et ultricies turpis.
				non euismod lectus tincidunt vitae. Quisqe non facilisis ante.</p>
				<a href="#">Read more </a>
			</div>
			<div class="col-lg-4 my-lg-0 my-4">
				<img src="images/stats1.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-4">
				<div class="progress-one">
					<h4 class="progress-tittle">Online Marketing</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-one my-lg-4">
					<h4 class="progress-tittle">Financial Consulting</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-one">
					<h4 class="progress-tittle">Creative Projects</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-one my-lg-4">
					<h4 class="progress-tittle">Future Enhancement</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-one">
					<h4 class="progress-tittle">24/7 support</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div>
<br><br>
</div>

<!-- //statistics -->

<!-- products -->
<!-- <section class="products py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading mb-md-5 mb-4">Our Marketing <strong>Products</strong></h3>
		<div class="row products_grids text-center" >
			<div class="col-md-3 col-6 grid4 mb-md-0 mb-4" >
				<div class="prodct1">
					<a href="#">
						<span class="fa fa-print"></span>
						<h3 class="mt-2"> consulting</h3>
						<span class="fas fa-long-arrow-alt-right"></span>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-6 grid5 mb-md-0 mb-4">
				<div class="prodct1">
					<a href="#">
						<span class="fa fa-newspaper-o"></span>
						<h3 class="mt-2">Marketing</h3>
						<span class="fas fa-long-arrow-alt-right"></span>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-6 grid6">
				<div class="prodct1">
					<a href="#">
						<span class="fa fa-unlock"></span>
						<h3 class="mt-2">IT Software</h3>
						<span class="fas fa-long-arrow-alt-right"></span>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-6 grid7">
				<div class="prodct1">
					<a href="#">
						<span class="fa fa-product-hunt"></span>
						<h3 class="mt-2">Cloud Technology</h3>
						<span class="fas fa-long-arrow-alt-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section> -->

<div class="container-fluid">
	<section>
		<h2 class="text-center">Clients</h2>
		<marquee scrollamount="12" direction="right">
			<img src="images/team1.jpg" class="img-responsive mr-4">
			<img src="images/team2.jpg" class="img-responsive mr-4">
			<img src="images/team3.jpg" class="img-responsive mr-4">
			<img src="images/team4.jpg" class="img-responsive mr-4">
			<img src="images/team5.jpg" class="img-responsive mr-4">
			<img src="images/team6.jpg" class="img-responsive mr-4">
			
		</marquee>
	</section>
</div>
		
<!-- //products -->

<!-- stats section -->
<section class="">
	<div class="layer py-5">
		<div class="container py-lg-5 py-3">
			
			<h3 class="heading mb-md-5 mb-4">Our <strong>statistical growth</strong></h3>
			<div class="row">
				<div class="col-lg-8 left-build-wthree aboutright-w3pvtwthree text-lg-left text-center">
					<div class="row">
						<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid">
							<span class="fa fa-credit-card"></span>
							<p class="counter">1568</p>
							<p class="para-text-w3ls">Partners</p>
						</div>
						<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid2">	
							<span class="fa fa-users"></span>
							<p class="counter">1900</p>
							<p class="para-text-w3ls">Customers</p>
						</div>
						<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid1 mt-md-0 mt-4">
							<span class="fa fa-dollar"></span>
							<p class="counter">1422</p>
							<p class="para-text-w3ls">Projects</p>
						</div>
						<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid1 mt-md-0 mt-4">
							<span class="fa fa-users"></span>
							<p class="counter">400</p>
							<p class="para-text-w3ls">Employees</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-lg-left text-stat text-center mt-lg-0 mt-4">
					<h4 class=""> Vestibulum ante ipsum int primis faucibus orci luctus et ultrices posue elit</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<div>
<br><br>
</div>
<!-- //stats section -->

<!-- footer-top -->

<!-- //footer-top -->

<!-- footer -->

@include('include.footer')

<!-- // footer -->

</body>
</html>