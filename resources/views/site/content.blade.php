
<section id="home">
	<div class="overlay"></div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!--Indicator-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center">
								<h1>ROBOT<span>X</span></h1>
								<h3>WEB DEVELOPMENT SOLUTIONS</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center">
								<h1>ROBOT<span>X</span></h1>
								<h3>WEB DEVELOPMENT SOLUTIONS</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center">
								<h1>ROBOT<span>X</span></h1>
								<h3>WEB DEVELOPMENT SOLUTIONS</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center">
								<h1>ROBOT<span>X</span></h1>
								<h3>WEB DEVELOPMENT SOLUTIONS</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

@if(isset($services) && is_object($services))
<!--SERVICES AREA-->
<section id="service">
	<div class="container">
		<div class="row">
			<div class="col-md-12  wow bounce">
				<div class="section-heading text-center text-uppercase  wow bounceInUp">
					<h2>OUR <span>SERVICeS</span></h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
	@foreach($services as $k=>$services)
			<div class="col-sm-6 col-md-3  wow bounceIn">
				<div class="single-item text-center">
					<i class="fa {{ $services->icon }}"></i>
					<h4 class="text-uppercase">{{ $services->name }}</h4>
					<p>{{ $services->text }}</p>
					<a href="#" class="btn btn-red text-uppercase">more</a>
				</div>
			</div>
	@endforeach
		</div>
	</div	
</section>
@endif

@if (isset($peoples) && is_object($peoples))
<!--team section-->
<section id="team">
	<div class="container">
		<div class="section-heading text-center text-uppercase wow  wow bounceInRight">
			<h2>OUR <span>team</span></h2>
		</div>
		<div class="row  wow bounceInLeft">
			@foreach($peoples as $people)
				<div class="col-sm-6 col-md-3">
				<div class="single-team">
					{{ Html::image('assets/img/'.$people->images,$people->name ) }}
					<h3>{{ $people->position }}</h3>
					<p>{{ $people->text }}</p>
					<div class="member-social-icon text-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>

				</div>
			</div>
			@endforeach
		</div>
		<div class="skill-heading text-center text-uppercase">
			<h3>skill</h3>
		</div>
		<div class="row">
			<div class="bar">
				<div class="col-sm-3 col-xs-3">
					<h4>WordPress</h4>
				</div>
				<div class="col-sm-8 col-xs-8">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70"
						     aria-valuemin="0" aria-valuemax="100" style="width:80%">
						</div>
					</div>
				</div>
				<div class="col-sm-1 col-xs-1">
					<h4>80%</h4>
				</div>
			</div>
			<div class="wp-bar bar">
				<div class="col-sm-3 col-xs-3">
					<h4>HTML5</h4>
				</div>
				<div class="col-sm-8 col-xs-8">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70"
						     aria-valuemin="0" aria-valuemax="100" style="width:90%">
						</div>
					</div>
				</div>
				<div class="col-sm-1 col-xs-1">
					<h4>90%</h4>
				</div>
			</div>
			<div class="wp-bar bar">
				<div class="col-sm-3 col-xs-3">
					<h4>CSS3</h4>
				</div>
				<div class="col-sm-8 col-xs-8">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70"
						     aria-valuemin="0" aria-valuemax="100" style="width:85%">
						</div>
					</div>
				</div>
				<div class="col-sm-1 col-xs-1">
					<h4>85%</h4>
				</div>
			</div>
			<div class="wp-bar bar">
				<div class="col-sm-3 col-xs-3">
					<h4>Responsive Design</h4>
				</div>
				<div class="col-sm-8 col-xs-8">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70"
						     aria-valuemin="0" aria-valuemax="100" style="width:80%">
						</div>
					</div>
				</div>
				<div class="col-sm-1 col-xs-1">
					<h4>80%</h4>
				</div>
			</div>
		</div>
	</div>
</section>
@endif


<!--gallery area-->

@if (isset($portfolios) && is_object($portfolios))
<section id="gallery">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="section-heading text-center text-uppercase  wow shake">
					<h2>OUR <span>GALLERY</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat nonenim ad minim veniam, proident, sunt in culpa qui officia
						deserunt.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="gallery-btn text-center text-uppercase">
		<a href="#" class="active btn btn-trans" data-filter="*">ALL</a>
		@foreach($tags as $tag)
		<a href="#" class="btn btn-trans" data-filter=".{{$tag}}">{{$tag}}</a>
		@endforeach
		
	</div>
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="gellery-item text-center">
			@foreach($portfolios as $ithem)
				<div class="single-gl {{ $ithem->filter }} col-md-2 col-sm-3">
				{{ Html::image('assets/img/'.$ithem->images,$ithem->name) }}
					<div class="gl-overlay">
						<div class="caption">
							<a href={{ Html::image('assets/img/'.$ithem->images,$ithem->name) }}
							<i class="fa fa-search"></i></a>
							<a href="#"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</section>

@endif



<section id="news">
	<div class="section-heading news-heading text-center text-uppercase wow swing">
		<h2>OUR <span>News</span></h2>
	</div>
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-7 col-md-offset-1">

				<div class="latest-news">

					<h3>Latest News</h3>

					<div class="news-content">
						<div class="news-date">
							<h1>21</h1>

							<h1>Dec</h1>
						</div>
						<div class="news-text">
							<h5>Enim ad minim veniam, quis nostrud </h5>

							<p>Lorem ipsum dolor sit amet, consectetur</p>

							<p>adipiscing elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="news-content">
						<div class="news-date">
							<h1>12</h1>

							<h1>Dec</h1>
						</div>
						<div class="news-text">
							<h5>Minim veniam, quis nostrud uenim ad </h5>

							<p>Lorem ipsum dolor sit amet, consectetur</p>

							<p>adipiscing elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="news-content wow bounceInLeft">
						<div class="news-date">
							<h1>12</h1>

							<h1>Dec</h1>
						</div>
						<div class="news-text">
							<h5>Quis ad minim veniam, quis nostrud </h5>

							<p>Lorem ipsum dolor sit amet, consectetur</p>

							<p>adipiscing elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="news-list">

					<div class="single-news">
						<div class="list-date">
							<h4>10</h4>
							<h4>Dec</h4>
						</div>
						<div class="list-text">
							<a href="#"><h5>Uenim ad minim veniam</h5></a>

							<p>Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="single-news">
						<div class="list-date">
							<h4>10</h4>
							<h4>Dec</h4>
						</div>
						<div class="list-text">
							<a href="#"><h5>Uenim ad minim veniam</h5></a>

							<p>Lorem ipsum dolor sit ame  consectetur elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="single-news">
						<div class="list-date">
							<h4>10</h4>
							<h4>Dec</h4>
						</div>
						<div class="list-text">
							<a href="#"><h5>Uenim ad minim veniam</h5></a>

							<p>Lorem ipsum dolor sit ame  consecteturelit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="single-news">
						<div class="list-date">
							<h4>10</h4>
							<h4>Dec</h4>
						</div>
						<div class="list-text">
							<a href="#"><h5>Uenim ad minim veniam</h5></a>

							<p>Lorem ipsum dolor sit amet consectetur elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="single-news">
						<div class="list-date">
							<h4>10</h4>
							<h4>Dec</h4>
						</div>
						<div class="list-text">
							<a href="#"><h5>Uenim ad minim veniam</h5></a>

							<p>Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>
					<div class="single-news">
						<div class="list-date">
							<h4>10</h4>
							<h4>Dec</h4>
						</div>
						<div class="list-text">
							<a href="#"><h5>Uenim ad minim veniam</h5></a>

							<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor</p>
							<i class="fa fa-eye"></i> <span>129</span>
							<i class="fa fa-comment"></i><span>81</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--contact heading-->
<section id="contact">
	<div class="section-heading contact-heading text-center text-uppercase">
		<h2>OUR <span>Contact</span></h2>
	</div>

	<div id="map">


	</div>
	<div id="map-overlay" class="text-left text-uppercase">
		<div class="container">
			<h2>+29 20 466 4241</h2>

			<h2>info@robotx.com</h2>
		</div>
	</div>
	
	
	
	<!-- contact massage-->
	<div class="contact-form">
		<div class="container">
			<div class="row">
				<form action="{{ route('home') }}" method="post">

					<div class="col-sm-4">
						<label for="usr">Your Name</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
					<div class="col-sm-4">
						<label for="email">Your Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="col-sm-4">
						<label for="number">Your Number</label>
						<input type="number" class="form-control" id="number" name="number">
					</div>
					<div class="col-sm-12">
						<label for="massage">Your Massage</label>
						<textarea class="form-control" rows="10" id="text" name="text"></textarea>
						<button type="submit" class="btn red-btn"> SEND YOUR MESSAGE</button>
					</div>
					{{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
</section>
<!-- footer-area-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-2 text-center">
				<a href=""><img src="{{ asset('assets/img/fo-logo.png') }}" alt="logo"></a>
			</div>
			<div class="col-sm-8">
				<div class="footer-p text-center">
					<p>© Copyright 2014 - 2015, All Rights Reserved, Designed by: www.designoatmeal.com</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="footer-social text-center">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-rss"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
	