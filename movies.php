<?php
session_start(); ?>

<!doctype html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Movies</title>
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">

</head>

<body>
	<header id="site-header" class="w3l-header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="dashboard.php"><span class="fa fa-play icon-log" aria-hidden="true"></span>Myflex</a></h1>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="dashboard"></a>Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="movies.php">Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="Contact_Us.php">Contact</a>
						</li>
					</ul>
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span class="fa fa-search ml-3" aria-hidden="true"></span></a>

						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search" style="color:black" required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
									<ul class="search-items">
										<li><a href="movies.php">Action</a></li>
										<li><a href="movies.php">Drama</a></li>
										<li><a href="movies.php">Family</a></li>
										<li><a href="movies.php">Thriller</a></li>
										<li><a href="movies.php">Commedy</a></li>
										<li><a href="movies.php">Romantic</a></li>
										<li><a href="movies.php">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
					</div>

					<div>
						<?php if (isset($_SESSION["username"])) {
							// If username is set in the session, the user is logged in
							echo '<a href="logout.php" class="btn btn-dark search-hny mr-lg-3 mt-lg-0 mt-4" title="Logout">Log out</a>';
						} else {
							// If username is not set in the session, the user is not logged in
							echo '<div class="Login_SignUp" id="login" style="font-size: 2rem; display: inline-block; position: relative;">
                <a class="nav-link" href="sign_in.php"><i class="fa fa-user-circle-o"></i></a>
            </div>';
						} ?>
					</div>

				</div>

				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<?php if (isset($_SESSION["username"])) {
					echo "<p>Hey, " . $_SESSION["username"] . "!</p>";
				} ?>

			</div>
		</nav>
	</header>

	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="dashboard.php">Home</a> » <span class="breadcrumb_last" aria-current="page">movies</span>
			</div>
		</nav>
	</div>
	<section class="w3l-grids">
		<div class="grids-main py-4">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<h3 class="hny-title">Popular Movies</h3>
				</div>
				<div class="owl-four owl-carousel owl-theme">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner1.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Avengers End Game</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span>1 Hr 4min</span>
										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa-solid fa-circle-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<div class="box16 mt-4">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner2.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa-solid fa-circle-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner3.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Joker</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa-solid fa-circle-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<div class="box16 mt-4">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner4.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Aladdin</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
	</section>
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Latest Movies</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="movies.php">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>

								<img class="img-fluid" src="assets/images/FTF.jpg" alt="">
							</figure>
							<a href=".Commando3" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Fast and Furious</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 40min
											
									</h4>
								</div>
							</a>
							<div class="modal fade FTF" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">

											<p>
											<h3>Release Date&nbsp;:September 25, 2001</h3>
											<h3>Venue&nbsp;:The Fast and the Furious </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Dominic Toretto (Vin Diesel) enjoys the adrenaline of street car
												racing and his fans treat him like a rock star.
												After a blazing encounter with the ruthless Johnny Tran, Dom decides to
												take Brian (Paul Walker),
												a newcomer to street racing, under his wing. Dom's sister Mia sees
												something she likes in Brian, too.
												Trouble is, neither of them realize he's an undercover cop, and Dominic
												and his rival
												Johnny Tran are both the prime suspects in a case involving dirty money
												and big-rig hijacking.
											</p>
											<h4>Star Cast</h4>
											<p>
												Vin Diesel (Dominic)<br />
												Paul Walker (Brian)<br />
												Michelle Rodriguez (Letty)<br />
												Jordana Brewster (Mia) <br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php'">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m3.jpg" alt="">
							</figure>
							<a href=".Knivesout" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 10min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<div class="modal fade Knivesout" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m3.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:September 7, 2019 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Knives Out is a 2019 American mystery film written and directed by Rian
												Johnson, and produced by Johnson and Ram Bergman. It follows a master
												detective investigating the death of the patriarch of a wealthy,
												dysfunctional family. The film features an ensemble cast including
												Daniel Craig, Chris Evans, Ana de Armas, Jamie Lee Curtis, Michael
												Shannon, Don Johnson, Toni Collette, Lakeith Stanfield, Katherine
												Langford, Jaeden Martell, and Christopher Plummer.
											</p>
											<h4>Star Cast</h4>
											<p>
												Daniel Craig as Benoit Blanc<br />
												Chris Evans as Hugh "Ransom" Drysdale<br />
												Ana de Armas as Marta Cabrera<br />
												Jamie Lee Curtis as Linda Drysdale<br />
												Michael Shannon as Walt Thrombey
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/KFP.jpg" alt="">
							</figure>
							<a href=".Bharat" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Kung Fu Panda</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 35min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<div class="modal fade Bharat" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/KFP.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:5 June 2019 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Po might just be the laziest, clumsiest panda in the Valley of Peace,
												but he secretly dreams of becoming a kung fu legend.
												When the villainous snow leopard Tai Lung threatens Po's homeland,
												the hapless panda is chosen to fulfil an ancient prophecy and defend the
												Valley from attack.
												Training under Master Shifu, Po embarks on an epic
												high-kicking adventure as he sets out to thwart Tai Lung's evil plans. A
												DreamWorks animation.
											</p>
											<h4>Star Cast</h4>
											<p>
												Jack black as Po<br />
												James hong as Mr Ping<br />
												Jackie Chan as Monkey<br />
												Dustin Hoffman as MasterShifu<br />
												Lucy viu as viper
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m5.jpg" alt="">
							</figure>
							<a href=".Jumanji" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Jumanji : The Next Level</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 3min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>

							<div class="modal fade Jumanji" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m5.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:December 13, 2019 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Jumanji: The Next Level is a 2019 American fantasy adventure comedy film
												directed by Jake Kasdan and co-written by Kasdan, Jeff Pinkner, and
												Scott Rosenberg. It is a sequel to 2017's Jumanji: Welcome to the
												Jungle, the second follow-up to 1995's Jumanji, and is the fourth
												installment in the Jumanji franchise. It stars Dwayne Johnson, Jack
												Black, Kevin Hart, Karen Gillan, Nick Jonas, Alex Wolff, Morgan Turner,
												Ser'Darius Blain, and Madison Iseman reprising their roles from the
												previous film while Awkwafina, Rory McCann, Danny Glover, and Danny
												DeVito also join the cast. The film's plot takes place two years after
												Welcome to the Jungle, in which the same group of teenagers, along with
												an old friend and two unwitting additions, become trapped in Jumanji.
												There, they all find themselves facing new problems and challenges with
												both old and new avatars while having to save the land from a new
												villain in order to escape.
											</p>
											<h4>Star Cast</h4>
											<p>
												Dwayne Johnson as Dr. Xander "Smolder" Bravestone<br />
												Jack Black as Professor Sheldon "Shelly" Oberon<br />
												Kevin Hart as Franklin "Mouse" Finbar<br />
												Karen Gillan as Ruby Roundhouse<br />
												Nick Jonas as Jefferson "Seaplane" McDonough
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Adults</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="movies.php">Show all</a></h4>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/AP.jpg" alt="">
							</figure>
							<a href=".Rocketman" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">American Pie</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 1min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<div class="modal fade Rocketman" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/AP.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:August 25, 1999 </h3>
											<h3>Venue&nbsp;:East Grand Rapids </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												A riotous and raunchy exploration of the most eagerly anticipated
												and most humiliating rite of adulthood, known as losing one's virginity.
												In this hilarious lesson in life, love and libido, a group of friends,
												fed up with their well-deserved reputations as sexual no-hitters, decide
												to take action.
											</p>
											<h4>Star Cast</h4>
											<p>
												Jason Biggs as Jim <br />
												Sean William Scott as Steve<br />
												Alyson Hannigan as Michelle<br />
												Chris Klein as Chris<br />

											</p>
										</div>
										<div class="bookbtn">

											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>

					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m2.jpg" alt="">
							</figure>
							<a href=".Doctorsleep" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Doctor Sleep</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 32min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>

							<div class="modal fade Doctorsleep" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m2.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:October 21, 2019 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Doctor Sleep is a 2019 American supernatural horror film written and
												directed by Mike Flanagan. It is based on the 2013 novel of the same
												name by Stephen King, a sequel to King's 1977 novel The Shining. The
												film, which also serves as a direct sequel to the 1980 film adaptation
												of The Shining, directed by Stanley Kubrick, is set several decades
												after the events of the original and combines elements of the 1977 novel
												as well. Ewan McGregor plays the lead role as Danny Torrance, a man with
												psychic abilities who struggles with childhood trauma. Rebecca Ferguson,
												Kyliegh Curran, and Cliff Curtis have supporting roles.[6][7] In the
												film, Dan Torrance, now an adult, must protect a young girl with similar
												powers from a cult known as the True Knot, whose members prey on
												children who possess the shining to extend their own lives.
											</p>
											<h4>Star Cast</h4>
											<p>
												Ewan McGregor as Danny Torrance<br />
												Rebecca Ferguson as Rose the Hat<br />
												Cliff Curtis as Billy Freeman<br />
												Carl Lumbly as Dick Hallorann<br />
												Zahn McClarnon as Crow Daddy
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/mr.jpg" alt="">
							</figure>
							<a href=".kabir" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Maze Runner</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1h 53m

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>

							<div class="modal fade kabir" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/mr.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:September 17, 2014 </h3>
											<h3>Venue&nbsp;:Louisiana </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Thomas (Dylan O'Brien), a teenager, arrives in a glade at the center of
												a giant labyrinth.
												Like the other youths dumped there before him, he has no memory of his
												previous life.
												Thomas quickly becomes part of the group and soon after demonstrates a
												unique
												perspective that scores him a promotion to Runner status those who
												patrol the always-changing maze to find an escape route.
												Together with Teresa (Kaya Scodelario), the only female, Thomas tries to
												convince his cohorts that he knows a way out.
											</p>
											<h4>Star Cast</h4>
											<p>
												Dylan O'Brien as Thomas<br />
												Thomas Brodie as Dr Preeti Sikka<br />
												Soham Majumdar as Dr Shiva<br />
												Arjan Bajwa as Karan Rajdheer Singh, Kabir's brother<br />
												Nikita Dutta as Jiah Sharma
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m9.jpg" alt="">
							</figure>
							<a href=".Joker" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Joker 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 2min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<div class="modal fade Joker" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m9.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:October 4, 2019 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Joker is a 2019 American psychological thriller film directed and
												produced by Todd Phillips, who co-wrote the screenplay with Scott
												Silver. The film, based on DC Comics characters, stars Joaquin Phoenix
												as The Joker and provides an alternative origin story for the character.
												Set in 1981, it follows Arthur Fleck, a failed clown and stand-up
												comedian whose descent into insanity and nihilism inspires a violent
												counter-cultural revolution against the wealthy in a decaying Gotham
												City. Robert De Niro, Zazie Beetz, Frances Conroy, Brett Cullen, Glenn
												Fleshler, Bill Camp, Shea Whigham, and Marc Maron appear in supporting
												roles. Joker was produced by Warner Bros. Pictures, DC Films, and Joint
												Effort, in association with Bron Creative and Village Roadshow Pictures,
												and distributed by Warner Bros.
											</p>
											<h4>Star Cast</h4>
											<p>
												Joaquin Phoenix as Arthur Fleck / Joker<br />
												Robert De Niro as Murray Franklin<br />
												Zazie Beetz as Sophie Dumond<br />
												Frances Conroy as Penny Fleck<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Kids</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="movies.php">Show all</a></h4>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/cars.jpg" alt="">
							</figure>
							<a href=".tzp" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Cars</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1h 57m

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<div class="modal fade tzp" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/cars.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:21 December 2007 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												In a world where the towns are peopled with cars, and even the bugs are
												mini motors
												a young ambitious racing car called Lightning McQueen is a star.
												On his way to an important event he has to stop in the little town of
												Radiator Springs after
												he accidentally damages the road and is forced to repair it. He finds
												living in a community oddly endearing,
												making true friends and beginning to realise there's more in life than
												winning. A Pixar animation.
											</p>
											<h4>Star Cast</h4>
											<p>
												Owen Wilson as Lightning McQueen<br />
												Larry the cabi as Mater<br />
												Paul Newman as Doc Wilson<br />
												Bonnie Hunt as Sally Carrera<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/Dm.jpg" alt="">
							</figure>
							<a href=".Chillarparty" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Moana</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1h 47m

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<div class="modal fade Chillarparty" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/Dm.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:November 30, 2016</h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												An adventurous teenager sails out on a daring mission to save her
												people.
												During her journey, Moana meets the once-mighty demigod Maui, who guides
												her in her quest to become a master way-finder.
												Together they sail across the open ocean on an action-packed voyage,
												encountering enormous monsters and impossible odds.
												Along the way, Moana fulfills the ancient quest of her ancestors and
												discovers the one thing she always sought: her own identity.
											</p>
											<h4>Star Cast</h4>
											<p>
												Auli'i Cravalho as Moana<br />
												Dwayne Johnson as Maui<br />
												Alan Tudyk as Hei hei the rooster<br />
												Jemaine Clement as Tamatoa<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/zoo.jpeg" alt="">
							</figure>
							<a href=".ganesha" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Zootopia</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1h 48m

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>

							<div class="modal fade ganesha" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/zoo.jpeg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:February 17, 2016 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												From the largest elephant to the smallest shrew, the city of Zootopia is
												a mammal metropolis where various animals live and thrive.
												When Judy Hopps (Ginnifer Goodwin) becomes the first rabbit to join the
												police force,
												she quickly learns how tough it is to enforce the law. Determined to
												prove herself,
												Judy jumps at the opportunity to solve a mysterious case. Unfortunately,
												that means working with Nick Wilde (Jason Bateman),
												a wily fox who makes her job even harder.
											</p>
											<h4>Star Cast</h4>
											<p>
												Ginnifer Goodwin as Judy Hopps<br />
												Jason Bateman as Nick Wilde<br />
												Rich Moore as Doug<br />
												Shakira as Gazelle<br />
												Mushtaq Khan as Police Inspector
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m8.jpg" alt="">
							</figure>
							<a href=".Toystory" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Toy Story 4</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 59min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>

							<div class="modal fade Toystory" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m8.jpg" class="img-fluid modalimg" alt="" />
											<p>
											<h3>Release Date&nbsp;:June 21, 2019 </h3>
											<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Toy Story 4 is a 2019 American computer-animated comedy film produced by
												Pixar Animation Studios and released by Walt Disney Pictures. It is the
												fourth and final installment in Pixar's Toy Story series and the sequel
												to Toy Story 3 (2010). It was directed by Josh Cooley (in his feature
												directorial debut) from a screenplay by Andrew Stanton and Stephany
												Folsom; the three also conceived the story alongside John Lasseter,
												Rashida Jones, Will McCormack, Valerie LaPointe, and Martin Hynes.
												Tom Hanks, Tim Allen, Annie Potts, Joan Cusack, Don Rickles (via archive
												recordings),Wallace Shawn, John Ratzenberger, Estelle Harris, Blake
												Clark, Bonnie Hunt, Jeff Garlin, Kristen Schaal and Timothy Dalton
												reprise their character roles from the first three films. They are
												joined by Tony Hale, Keegan-Michael Key, Jordan Peele, Christina
												Hendricks, Keanu Reeves, and Ally Maki, who voice the new characters.
											</p>
											<h4>Star Cast</h4>
											<p>
												Madeleine McGraw as Bonnie<br />
												Maliah Bargas-Good as Lost Girl<br />
												Tim Allen as Buzz Lightyear<br />
												Tom Hanks as Woody<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success" onclick="location.href='ticket-booking.php';">Book</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
	</section>
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">

					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Recent Movies</li>
							<li>Popular Movies</li>
							<li>Trend Movies</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">

									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php">

													<img src="assets/images/m6.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Long Shot</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m5.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Jumanji</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m4.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Little Women</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/Trans.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Transformers</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m2.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m3.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/n1.jpg" class="img-fluid" alt="author image">
													<span class="fa fa-play video-icon" aria-hidden="true"></span>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">No Time to Die</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/n2.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Mulan</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/n3.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Free Guy</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="albums-content">
								<div class="row">

									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/cars.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Cars</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m2.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m3.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m7.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m8.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m9.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="albums-content">
								<div class="row">

									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m7.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m8.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m9.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>

									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m10.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">Alita</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min
													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m11.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">The Lego</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min
													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.php"><img src="assets/images/m12.jpg" class="img-fluid" alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.php">The Hustle</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row footer-about">
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="movies.php"><img class="img-fluid" src="assets/images/banner1.jpg" alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="movies.php"><img class="img-fluid" src="assets/images/banner2.jpg" alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="movies.php"><img class="img-fluid" src="assets/images/banner3.jpg" alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="movies.php"><img class="img-fluid" src="assets/images/banner4.jpg" alt=""></a>
								</div>
							</div>
							<div class="row footer-links">


								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Movies</h6>
									<ul>
										<li><a href="#">Movies</a></li>
										<li><a href="#">Videos</a></li>
										<li><a href="#">English Movies</a></li>
										<li><a href="#">Tailor</a></li>
										<li><a href="#">Upcoming Movies</a></li>
										<li><a href="Contact_Us.php">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="dashboard.php">Home</a> </li>
										<li><a href="about.php">About</a> </li>
										<li><a href="#">Tv Series</a> </li>
										<li><a href="#">Blogs</a> </li>
										<li><a href="sign_in.php">Login</a></li>
										<li><a href="Contact_Us.php">Contact</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Locations</h6>
									<ul>
										<li><a href="movies.php">Asia</a></li>
										<li><a href="movies.php">France</a></li>
										<li><a href="movies.php">Taiwan</a></li>
										<li><a href="movies.php">United States</a></li>
										<li><a href="movies.php">Korea</a></li>
										<li><a href="movies.php">United Kingdom</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Newsletter</h6>
									<form action="#" class="subscribe mb-3" method="post">
										<input type="email" name="email" placeholder="Your Email Address" required="">
										<button><span class="fa fa-envelope-o"></span></button>
									</form>
									<p>Enter your email and receive the latest news, updates and special offers from us.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2024 Myflex. All rights reserved</p>
						</div>

						<ul class="social text-lg-right">
							<li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>

			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				window.onscroll = function() {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>


		</section>
	</footer>
</body>

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$('.owl-four').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					nav: true
				},
				1000: {
					items: 2,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function() {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 40,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					margin: 20,
					nav: true
				},
				1000: {
					items: 3,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(function() {
		$('.navbar-toggler').click(function() {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<script>
	$(window).on("scroll", function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});
	$(".navbar-toggler").on("click", function() {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function() {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function() {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<script src="assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#parentHorizontalTab').easyResponsiveTabs({
			type: 'default',
			width: 'auto',
			fit: true,
			tabidentify: 'hor_1',
			activate: function(event) {
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
	});
</script>
<script src="https://kit.fontawesome.com/dc18e510fa.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>