<?php include 'loginSystem/directAccess.php';?>
<!DOCTYPE html>
<html class=" js touch">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php include 'loginSystem/userName.php';?></title>
        <!-- CSS -->
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/stylehomepage.css">
		<!-- JS -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="I Am Kendall Lewis /">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body background = "<?php include 'loginSystem/userWallpaper.php';?>" onload="myFunction()" style="margin:0;">
		<div id="loader" style ="border-top:16px solid <?php include 'loginSystem/userTheme.php';?>"></div>
		<!--Header tab section-->
		<section class="wrapper style="display:none;" id="myDiv" class="animate-bottom">
			<div class="containerMain">
				<header class="header-block">
					<div class="header-container">
						<ul class="header-menu horizontal-list tabs">							
							<li class="header-menu-tab active">
								<button class="dropbtnLang"><a href="#tab10Portal">Portal</a></button>
							</li>
							<li class="header-menu-tab">
								<button class="dropbtnLang"><a href="#tab20Portal">Media</a></button>
							</li>
							<li class="header-menu-tab">
								<button class="dropbtnLang"><a href="#tab30Portal">Cloud</a></button>
							</li>
							<li class="header-menu-tab">
								<button class="dropbtnLang"><a href="#tab40Portal">Setting</a></button>
							</li>
							<div class="signInSection">
								<div class="signButtonUserName">
									<p><?php include 'loginSystem/userName.php';?></p>
								</div>
								<div class="signInButton">
									<div class="container" style="border:14px solid <?php include 'loginSystem/userTheme.php';?>">
										<a href="loginSystem/logout.php">
											<img width="75" src="<?php include "loginSystem/fetch_image.php";?>" alt="view/images/titlepic.jpg" class="profile">
										</a>
									</div>
								</div>
							</div>
						</ul>
					</div>
				</header>
				<header class="header-blockMin">
					<div class="header-container">
						<ul class="header-menu horizontal-list tabs">
							<li class="liContainer active">
								<button class="dropbtnLang"><a href="#tab10Portal" class="tablinks" onclick="openCity(event, 'London')">Portal</a></button>
							</li>
							<li class="liContainer">
								<button class="dropbtnLang"><a href="#tab20Portal" class="tablinks" onclick="openCity(event, 'Paris')">Media</a></button>
							</li>
							<li class="liContainer">
								<button class="dropbtnLang"><a href="#tab30Settings" class="tablinks" onclick="openCity(event, 'Tokyo')">Cloud</a></button>
							</li>
							<li class="liContainer">
								<button class="dropbtnLang"><a href="#tab40Settings" class="tablinks" onclick="openCity(event, 'Texas')">Setting</a></button>
							</li>
							<div class="dropdown">
								<button class="dropbtn"><a>Menu</a></button>
								<div class="dropdown-content">
									<div id="London" class="tabcontentMenu">
										<ul class="menu-box-menu tabPortal-links">
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab11Portal">Portal</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab12Portal">Art Gallery</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab13Portal">Coding</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab14Portal">Users</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab15Portal">Message</a>
											</li>
										</ul>
									</div>
									<div id="Paris" class="tabcontentMenu">
										<ul class="menu-box-menu tabMediaSettings-links">
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab21Portal">Plex</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab22Portal">Movies</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab23Portal">Videos</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab24Portal">Photos</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab25Portal">Music</a>
											</li>
										</ul>
									</div>
									<div id="Tokyo" class="tabcontentMenu">
										<ul class="menu-box-menu tabSocialSettings-links">
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab31Portal">Owncloud</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab32Portal">Documents</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab33Portal">Photos</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab34Portal">Music</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab35Portal">Video</a>
											</li>
										</ul>
									</div>
									<div id="Texas" class="tabcontentMenu">
										<ul class="menu-box-menu tabSettings-links">
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab1Settings">Username</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab2Settings">Email</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab3Settings">User Image</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab4Settings">Password</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab5Settings">Theme</a>
											</li>
											<li class="menu-liContainer">
												<a class="menu-box-tab" href="#tab6Settings">Background</a>
											</li>
										</ul>
									</div>
									<script>
									function openCity(evt, cityName) {
										var i, tabcontent, tablinks;
										tabcontent = document.getElementsByClassName("tabcontentMenu");
										for (i = 0; i < tabcontent.length; i++) {
											tabcontent[i].style.display = "none";
										}
										tablinks = document.getElementsByClassName("tablinks");
										for (i = 0; i < tablinks.length; i++) {
											tablinks[i].className = tablinks[i].className.replace(" active", "");
										}
										document.getElementById(cityName).style.display = "block";
										evt.currentTarget.className += " active";
									}
									</script>
								</div>
							</div>
							<div class="signInSection">
								<div class="signInButton">
									<div class="container">
										<a href="loginSystem/logout.php">
											<img width="75" src="<?php include "loginSystem/fetch_image.php";?>" class="profile">
										</a>
									</div>
								</div>
							</div>
						</ul>
					</div>
				</header>
				<!-- LEFT-CONTAINER-->
				<div class="left-container container containerMin">
					<div class="menu-box block">
						<section class="wrapperMain bg-color" style="background-color: <?php include 'loginSystem/userTheme.php';?>">
							<h2 class="titular">DECEMBER</h2>
						</section>
						<div class="menu-box-container">
							<!-- Menu Box left-->
							<ul class="menu-box-menu">
								<li class="activeSettings">
									<div id="tab10Portal" class="tabsPortal">
										<div class="tabPortal-content">
											<ul class="menu-box-menu tabPortal-links">
												<li>
													<a class="menu-box-tab" href="#tab11Portal">Portal</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab12Portal">Art Gallery
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">3</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab13Portal">Coding
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">24</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab14Portal">Users
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">5</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab15Portal">Message
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">5</section>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div id="tab20Portal" class="tabsPortal">
										<div class="tabPortal-content">
											<ul class="menu-box-menu tabMediaSettings-links">
												<li class="activeSettings">
													<a class="menu-box-tab" href="#tab21Portal">Plex
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">9</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab22Portal">Movies
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">1</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab23Portal">Videos
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">4</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab24Portal">Photos</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab25Portal">Music
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">3</section>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div id="tab30Portal" class="tabsPortal">
										<div class="tabPortal-content">
											<ul class="menu-box-menu tabSocialSettings-links">
												<li class="activeSettings">
													<a class="menu-box-tab" href="#tab31Portal">Owncloud</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab32Portal">Documents
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">3</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab33Portal">Photos
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">3</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab34Portal">Music
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">1</section>
													</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab35Portal">Video
														<section class="menu-box-number bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">2</section>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div id="tab40Portal" class="tabsPortal">
										<div class="tabSettings-content">
											<ul class="menu-box-menu tabSettings-links">
												<li class="activeSettings">
													<a class="menu-box-tab" href="#tab1Settings">Username</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab2Settings">Email</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab3Settings">User Image</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab4Settings">Password</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab5Settings">Theme</a>
												</li>
												<li>
													<a class="menu-box-tab" href="#tab6Settings">Background</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="profile-container block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
						<div class="bg-color" id="draggable">
							<section class="bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">
								<div class="profile"> <!-- PROFILE (MIDDLE-CONTAINER) -->
									<div class="profile-picture big-profile-picture">
										<img width="150px" alt="User Pic picture" src="<?php include "loginSystem/fetch_image.php";?>">
									</div>
									<h1 class="user-name"><?php include 'loginSystem/userName.php';?></h1>
									<div class="profile-description">
										<p class="scnd-font-color">Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.
										</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="middle-container container w3-animate-right"><!-- MAIN WINDOW (MIDDLE-CONTAINER)--> 
					<div class="main-window-container">
						<ul class="tab__content" style="height: 2576px;">
							<li class="active" style="display: list-item;">
								<div id="tab10Portal">
									<section class="bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">
										<div id="tab11Portal" class="activePortal">
											<div class="sky">
												<div class="tinted-image">
													<div class="moon"></div>
													<div class="clouds_one"></div>
													<div class="clouds_two"></div>
													<div class="clouds_three"></div>
												</div>
												<div class="moon"></div>
												<div class="clouds_one"></div>
												<div class="clouds_two"></div>
												<div class="clouds_three"></div>
												<div class="neato-header">
													<h2>Portal</h2>
													<div class="hit-the-floor">December</div>
												</div>
											</div>
										</div>
										<div id="tab12Portal" class="tabsHeight">
											<div class="sky">
												<div class="w3-content sliderGal" style="height: 100%; width: 100%;">
													<div class="sliderGalImage">
														<img class="mySlides" src="view/images/drawings/theQueen.JPG" style="height: 80%; display: block;">
														<img class="mySlides" src="view/images/drawings/couple.jpg" style="height: 80%; display: none;">
														<img class="mySlides" src="view/images/drawings/Kid Cudi.jpg" style="height: 60%; display: none;">
														<img class="mySlides" src="view/images/drawings/Scarjo.jpg" style="height: 60%; display: none;">
														<img class="mySlides" src="view/images/drawings/wink.jpg" style="height: 60%; display: none;">
														<img class="mySlides" src="view/images/drawings/forever.jpg" style="height: 60%; display: none;">
														<img class="mySlides" src="view/images/drawings/Scarjo.jpg" style="height: 60%; display: none;">
														<img class="mySlides" src="view/images/drawings/couple.jpg" style="height: 80%; display: none;">
													</div>
													<div class="sliderNavRow">
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off w3-opacity-off" src="view/images/drawings/theQueen.JPG" style="width:100%" onclick="currentDiv(1)">											
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/couple.jpg" style="width:100%" onclick="currentDiv(2)">
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/Kid Cudi.jpg" style="width:100%" onclick="currentDiv(3)">
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/Scarjo.jpg" style="width:100%" onclick="currentDiv(4)">
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/wink.jpg" style="width:100%" onclick="currentDiv(5)">
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/forever.jpg" style="width:100%" onclick="currentDiv(6)">
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/Scarjo.jpg" style="width:100%" onclick="currentDiv(7)">
														</div>
														<div class="sliderNav">
															<img class="demo w3-opacity w3-hover-opacity-off" src="view/images/drawings/couple.jpg" style="width:100%" onclick="currentDiv(8)">
														</div>
													</div>
												</div>
												<script>
												var slideIndex = 1;
												showDivs(slideIndex);

												function plusDivs(n) {
												  showDivs(slideIndex += n);
												}

												function currentDiv(n) {
												  showDivs(slideIndex = n);
												}

												function showDivs(n) {
												  var i;
												  var x = document.getElementsByClassName("mySlides");
												  var dots = document.getElementsByClassName("demo");
												  if (n > x.length) {slideIndex = 1}
												  if (n < 1) {slideIndex = x.length}
												  for (i = 0; i < x.length; i++) {
													 x[i].style.display = "none";
												  }
												  for (i = 0; i < dots.length; i++) {
													 dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
												  }
												  x[slideIndex-1].style.display = "block";
												  dots[slideIndex-1].className += " w3-opacity-off";
												}
												</script>
											</div>
										</div>
										<div id="tab13Portal" class="tabsHeight">
											<div class="sky">
												<div class="sliderGal">
													<section style=" height: 100%;">
														<div class="tbl-header">
															<table cellpadding="0" cellspacing="0" border="0">
																<thead>
																	<tr>
																		<th>Code</th>
																		<th>Edition</th>
																		<th>Change</th>
																		<th>Date</th>
																		<th>Download</th>
																	</tr>
																</thead>
															</table>
														</div>
														<div class="tbl-content">
															<table cellpadding="0" cellspacing="0" border="0">
																<tbody>
																	<tr>
																		<td>BAC Calc</td>
																		<td>CSC </td>
																		<td>325</td>
																		<td>04/127/2015</td>
																		<td>
																			<a href="title=" bac="" calc"="">Dribbble</a>
																		</td>
																	</tr>
																	<tr>
																		<td>MSUopoly</td>
																		<td>CSC </td>
																		<td>450</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>3D Solar System</td>
																		<td>CSC</td>
																		<td>550</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>Alexa App (Assistant)</td>
																		<td>CSC </td>
																		<td>590</td>
																		<td>05/19/2016</td>
																		<td>-0.36%</td>
																	</tr>
																	<tr>
																		<td>Alexa App (BAC)</td>
																		<td>CSC </td>
																		<td>590.5</td>
																		<td>12/05/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>MSUopoly</td>
																		<td>CSC </td>
																		<td>450</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>MSUopoly</td>
																		<td>CSC </td>
																		<td>450</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>MSUopoly</td>
																		<td>CSC </td>
																		<td>450</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>MSUopoly</td>
																		<td>CSC </td>
																		<td>450</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																	<tr>
																		<td>MSUopoly</td>
																		<td>CSC </td>
																		<td>450</td>
																		<td>11/15/2015</td>
																		<td> Down</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</section>
												</div>
											</div>
										</div>	
										<div id="tab14Portal" class="tabsHeight">
											<div class="sky">
												<div class="sliderGal">
													<div class="tbl-header tbl-User">
														<h2>Users</h2>
													</div>
													<table class="w3-table w3-striped w3-bordered w3-border w3-margin-top" id="myTable">
														<input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">
														<tbody>
															<tr>
															  <th style="width:60%;">Name</th>
															  <th style="width:40%;">Country</th>
															</tr>
															<tr>
															  <td>Alfreds Futterkiste</td>
															  <td>Germany</td>
															</tr>
															<tr>
															  <td>Berglunds snabbkop</td>
															  <td>Sweden</td>
															</tr>
															<tr>
															  <td>Island Trading</td>
															  <td>UK</td>
															</tr>
															<tr>
															  <td>Koniglich Essen</td>
															  <td>Germany</td>
															</tr>
															<tr>
															  <td>Laughing Bacchus Winecellars</td>
															  <td>Canada</td>
															</tr>
															<tr>
															  <td>Magazzini Alimentari Riuniti</td>
															  <td>Italy</td>
															</tr>
															<tr>
															  <td>North/South</td>
															  <td>UK</td>
															</tr>
															<tr>
															  <td>Paris specialites</td>
															  <td>France</td>
															</tr>
														</tbody>
													</table>
												</div>
												<script>
													function myFunction() {
													  var input, filter, table, tr, td, i;
													  input = document.getElementById("myInput");
													  filter = input.value.toUpperCase();
													  table = document.getElementById("myTable");
													  tr = table.getElementsByTagName("tr");
													  for (i = 0; i < tr.length; i++) {
														td = tr[i].getElementsByTagName("td")[0];
														if (td) {
														  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
															tr[i].style.display = "";
														  } else {
															tr[i].style.display = "none";
														  }
														}
													  }
													}
												</script>
											</div>
										</div>
										<div id="tab15Portal" class="tabsHeight">
											<div class="containerChat clearfixChat">
												<div class="people-list" id="people-list">
													<div class="search">
														<input type="text" placeholder="search" />
														<i class="fa fa-search"></i>
													</div>
													<ul class="list">
														<li class="clearfixChat">
															<img src="<?php include "loginSystem/fetch_image.php";?>" alt="avatar" />
															<div class="about">
																<div class="name"><?php include 'loginSystem/userName.php';?></div>
																<div class="status">
																	<i class="fa fa-circle online"></i> online
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Aiden Chavez</div>
																<div class="status">
																	<i class="fa fa-circle offline"></i> left 7 mins ago
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Mike Thomas</div>
																<div class="status">
																	<i class="fa fa-circle online"></i> online
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Erica Hughes</div>
																<div class="status">
																	<i class="fa fa-circle online"></i> online
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Ginger Johnston</div>
																<div class="status">
																	<i class="fa fa-circle online"></i> online
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Tracy Carpenter</div>
																<div class="status">
																	<i class="fa fa-circle offline"></i> left 30 mins ago
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Christian Kelly</div>
																<div class="status">
																	<i class="fa fa-circle offline"></i> left 10 hours ago
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Monica Ward</div>
																<div class="status">
																	<i class="fa fa-circle online"></i> online
																</div>
															</div>
														</li>
														<li class="clearfixChat">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar" />
															<div class="about">
																<div class="name">Dean Henry</div>
																<div class="status">
																	<i class="fa fa-circle offline"></i> offline since Oct
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="chat">
													<div class="chat-header clearfixChat">
														<img src="<?php include "loginSystem/fetch_image.php";?>" alt="avatar" />
														<div class="chat-about">
															<div class="chat-with"><?php include 'loginSystem/userName.php';?></div>
															<div class="chat-num-messages">53 Messages</div>
														</div>
														<i class="fa fa-star"></i>
													</div> <!-- end chat-header -->
													<div class="chat-history">
														<ul>
															<li class="clearfixChat">
																<div class="message-data align-right">
																	<span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
																	<span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
																</div>
																<div class="message other-message float-right">
																	Hi Vincent, how are you? How is the project coming along?
																</div>
															</li>
															<li>
																<div class="message-data">
																	<span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
																	<span class="message-data-time">10:12 AM, Today</span>
																</div>
																<div class="message my-message">
																	Are we meeting today? Project has been already finished and I have results to show you.
																</div>
															</li>
															<li class="clearfixChat">
																<div class="message-data align-right">
																	<span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
																	<span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
																</div>
																<div class="message other-message float-right">
																	Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
																</div>
															</li>
															<li>
																<div class="message-data">
																	<span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
																	<span class="message-data-time">10:20 AM, Today</span>
																</div>
																<div class="message my-message">
																	Actually everything was fine. I'm very excited to show this to our team.
																</div>
															</li>
															<li>
																<div class="message-data">
																	<span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
																	<span class="message-data-time">10:31 AM, Today</span>
																</div>
																<i class="fa fa-circle online"></i>
																<i class="fa fa-circle online" style="color: #AED2A6"></i>
																<i class="fa fa-circle online" style="color:#DAE9DA"></i>
															</li>
														</ul>
													</div> <!-- end chat-history -->
													<div class="chat-message clearfixChat" >
													
													<form action="js/php/chat.php" method="post" enctype="multipart/form-data">
														<textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
														<i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
														<i class="fa fa-file-image-o"></i>
														<button>Send</button>
														<button class="bg-color" type="submit" name="submit">Submit</button>
													</form>
													</div> <!-- end chat-message -->
												</div> <!-- end chat -->
											</div> <!-- end container -->
											<script id="message-template" type="text/x-handlebars-template">
												<li class="clearfix">
													<form action="js/php/chat.php" method="post" enctype="multipart/form-data">
														<div class="message-data align-right">
															<span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
															<span class="message-data-name" ><?php include 'loginSystem/userName.php';?></span> <i class="fa fa-circle me"></i>
														</div>
														<div class="message other-message float-right" id="messageOutput">{{messageOutput}}</div>
													</form>
												</li>
											</script>
											<script id="message-response-template" type="text/x-handlebars-template">
												<li>
													<div class="message-data">
														<span class="message-data-name">
															<i class="fa fa-circle online">
																<?php include 'loginSystem/randomName';?>
															</i>
														</span>
													  <span class="message-data-time">{{time}}, Today</span>
													</div>
													<div class="message my-message">{{response}}</div>
												</li>
											</script>
										</div>
									</section>
								</div>
							</li>
							<li>
								<div id="tab20Portal" class="tabsPortal">
									<section class="bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">
										<div class="block"> <!-- MAIN WINDOW (MIDDLE-CONTAINER) --> 
											<div id="tab21Portal" class="activePortal">
												<div class="sky">
													<div class="tinted-image">
														<div class="moon"></div>
														<div class="clouds_one"></div>
														<div class="clouds_two"></div>
														<div class="clouds_three"></div>
													</div>
													<div class="moon"></div>
													<div class="clouds_one"></div>
													<div class="clouds_two"></div>
													<div class="clouds_three"></div>
													<div class="neato-header">
														<h2>Portal</h2>
														<div class="hit-the-floor">Media</div>
													</div>
												</div>
											</div>
											<div id="tab22Portal" class="tabsHeight">
												<div id="media_one" class="tabsInsetHeight"></div>
											</div>
											<div id="tab23Portal" class="tabsHeight">
												<div id="media_two" class="tabsInsetHeight"></div>
											</div>
											<div id="tab24Portal" class="tabsHeight">
												<div id="media_three" class="tabsInsetHeight"></div>
											</div>
											<div id="tab25Portal" class="tabsHeight">
												<button><a href="https://kendalllewismedia.us.to:32400/web/index.html">Win $1 million dollars for free</a></button>
											</div>
										</div>
									</section>
								</div>
							</li>
							<li>
								<div id="tab30Portal" class="tabsPortal">
									<section class="bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">
										<div class="block"> <!-- MAIN WINDOW (MIDDLE-CONTAINER) --> 
											<div id="tab31Portal" class="activePortal">
												<div class="sky">
													<div class="tinted-image">
														<div class="moon"></div>
														<div class="clouds_one"></div>
														<div class="clouds_two"></div>
														<div class="clouds_three"></div>
													</div>
													<div class="moon"></div>
													<div class="clouds_one"></div>
													<div class="clouds_two"></div>
													<div class="clouds_three"></div>
													<div class="neato-header">
														<h2>Portal</h2>
														<div class="hit-the-floor">Cloud</div>
													</div>
												</div>
											</div>
											<div id="tab32Portal" class="tabsHeight">
												<div id="owncloud_one" class="tabsInsetHeight"></div>
											</div>
											<div id="tab33Portal" class="tabsHeight">
												<div id="owncloud_two" class="tabsInsetHeight"></div>
											</div>
											<div id="tab34Portal" class="tabsHeight">
												<div id="owncloud_three" class="tabsInsetHeight"></div>
											</div>
											<div id="tab35Portal" class="tabsHeight">
												<div id="owncloud_four" class="tabsInsetHeight"></div>
											</div>
										</div>
									</section>
								</div>
							</li>
							<li>
								<div id="tab40Portal" class="tabsPortal">
									<div class="leftContainerSettings">
										<div class="modal">
											<section class="bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>">
												<div class="block"> <!-- MAIN WINDOW (MIDDLE-CONTAINER) --> 
													<div id="tab1Settings" class="activePortal">
														<div class="sky settingsPadding">
															<form action="loginSystem/emailSettings.php" method="post" enctype="multipart/form-data">
																<label for="email" required="required">Email Address</label>
																<input id="email" name="email" type="email" placeholder="<?php include 'loginSystem/userEmail.php';?>" value="">
																<label for="pass">Password</label>
																<input id="password" type="password" name="password" autocomplete="new-password" required="required" placeholder="*********" value="">
																<button class="bg-color" type="submit" value="" submit"="" name="submit">Submit</button>	
															</form>
														</div>
													</div>
													<div id="tab2Settings" class="tabsHeight">
														<div class="sky settingsPadding">
															<form action="loginSystem/emailSettings.php" method="post" enctype="multipart/form-data">
																<label for="email" required="required">Email Address</label>
																<input id="email" name="email" type="email" placeholder="<?php include 'loginSystem/userEmail.php';?>" value="">
																<label for="pass">Password</label>
																<input id="password" type="password" name="password" autocomplete="new-password" required="required" placeholder="*********" value="">
																<button class="bg-color" type="submit" value="" submit"="" name="submit">Submit</button>	
															</form>
														</div>
													</div>
													<div id="tab3Settings" class="tabsHeight">
														<div class="sky settingsPadding">
															<form action="loginSystem/profileSettings.php" method="post" enctype="multipart/form-data">
																<label for="pass">Profile Pic</label>
																<input type="file" name="file" id="file">
																<label for="pass">Password</label>
																<input id="password" type="password" name="password" required="required" placeholder="*********">
																<button class="bg-color" type="submit" name="submit">Submit</button>	
															</form>
														</div>
													</div>
													<div id="tab4Settings" class="tabsHeight">
														<div class="sky settingsPadding">
															<form action="loginSystem/passwordSettings.php" method="post" enctype="multipart/form-data">
																<label for="pass">Current Password</label>
																<input id="password" type="password" name="password" autocomplete="new-password" required="required" placeholder="*********" value="">
																<label for="pass">New Password</label>
																<input name="user_password" type="password" id="user_password" placeholder="Password">
																<label for="pass">Password</label>
																<input name="confirm_user_pass" type="password" id="confirm_user_pass" placeholder="Confirm Password">
																<button class="bg-color" type="submit" value="" submit"="" name="submit">Submit</button>
															</form>
														</div>
													</div>
													<div id="tab5Settings" class="tabsHeight">
														<div class="sky settingsPadding">
															<script>
																function moveValues(color) {
																	document.getElementById("result").value= color;
																}
															</script>
															<form class="colors" action="loginSystem/themeSettings.php" method="post" enctype="multipart/form-data">
																<li id="theme" value="rgba(118,83,51,1)" name="no" onclick="moveValues('rgba(118,83,51,1)')" data-color="rgba(118,83,51,1)"></li>
																<li id="theme" value="rgba(223,173,133,1)" name="no" onclick="moveValues('rgba(223,173,133,1)')" data-color="rgba(223,173,133,1)"></li>
																<li id="theme" value="rgba(99, 146, 126,1)" name="no" onclick="moveValues('rgba(99, 146, 126,1)')" data-color="rgba(99, 146, 126,1)"></li>
																<li id="theme" value="rgba(113,140,158,1)" name="no" onclick="moveValues('rgba(113,140,158,1)')" data-color="rgba(113,140,158,1)"></li>
																<li id="theme" value="rgba(0,0,0,0.90)" name="no" onclick="moveValues('rgba(0,0,0,0.90')" data-color="rgba(0,0,0,1)"></li>
																<li id="theme" value="rgba(101, 0, 0,1)" name="no" onclick="moveValues('rgba(101, 0, 0,1)')" data-color="rgba(101, 0, 0,1)"></li>
																<li id="theme" value="rgba(11, 62, 54,1)" name="no" onclick="moveValues('rgba(11, 62, 54,1)')" data-color="rgba(11, 62, 54,1)"></li>
																<li id="theme" value="rgba(11, 48, 62,1)" name="no" onclick="moveValues('rgba(11, 48, 62,1)')" data-color="rgba(11, 48, 62,1)"></li>
																<li id="theme" value="rgba(11, 13, 62,1)" name="no" onclick="moveValues('rgba(11, 13, 62,1)')" data-color="rgba(11, 13, 62,1)"></li>
																<li id="theme" value="rgba(62, 11, 30,1)" name="no" onclick="moveValues('rgba(62, 11, 30,1)')" data-color="rgba(62, 11, 30,1)"></li>
																<li id="theme" value="rgba(62, 61, 61,1)" name="no" onclick="moveValues('rgba(62, 61, 61,1)')" data-color="rgba(62, 61, 61,1)"></li>
																<li id="theme" value="rgba(62, 61, 61,1)" name="no" onclick="moveValues('rgba(56, 27, 23,1)')" data-color="rgba(56, 27, 23,1)"></li>
																<li id="theme" value="rgb(191,129,120)" name="no" onclick="moveValues('rgb(191,129,120)')" data-color="rgb(191,129,120)"></li>
																<li id="theme" value="rgba(41, 6, 6,1)" name="no" onclick="moveValues('rgba(41, 6, 6,1)')" data-color="rgba(41, 6, 6,1))"></li>
																<li id="theme" value="rgba(6, 41, 30,1)" name="no" onclick="moveValues('rgba(6, 41, 30,1)')" data-color="rgba(6, 41, 30,1)"></li>
																<li id="theme" value="rgba(74, 73, 90,1)" name="no" onclick="moveValues('rgba(74, 73, 90,1)')" data-color="rgba(74, 73, 90,1)"></li>
																<li id="theme" value="rgba(90, 73, 77,1)" name="no" onclick="moveValues('rgba(90, 73, 77,1)')" data-color="rgba(90, 73, 77,1)"></li>
																<li id="theme" value="rgba(16, 27, 17,1)" name="no" onclick="moveValues('rgba(16, 27, 17,1)')" data-color="rgba(16, 27, 17,1)"></li>
																<li id="theme" value="rgba(61, 68, 63,1)" name="no" onclick="moveValues('rgba(61, 68, 63,1)')" data-color="rgba(61, 68, 63,1)"></li>
																<li id="theme" value="rgba(179, 142, 86,1)" name="no" onclick="moveValues('rgba(179, 142, 86,1)')" data-color="rgba(179, 142, 86,1)"></li>
																<li id="theme" value="rgba(90, 35, 35,1)" name="no" onclick="moveValues('rgba(90, 35, 35,1)')" data-color="rgba(90, 35, 35,1)"></li>
																<li id="theme" value="rgba(35, 62, 90,1)" name="no" onclick="moveValues('rgba(35, 62, 90,1)')" data-color="rgba(35, 62, 90,1)"></li>
																<li id="theme" value="rgba(39, 37, 36,1)" name="no" onclick="moveValues('rgba(39, 37, 36,1)')" data-color="rgba(39, 37, 36,1)"></li>
																<li id="theme" value="rgba(50, 77, 90,1)" name="no" onclick="moveValues('rgba(50, 77, 90,1)')" data-color="rgba(50, 77, 90,1)"></li>
																<input type="text" id="result" name="theme" size="20" placeholder="Enter Color theme">
																<button class="bg-color" type="submit" name="submit">Submit</button>	
															</form>
														</div>
													</div>
													<div id="tab6Settings" class="tabsHeight">
														<div class="sky settingsPadding">
															<script>
																function moveWallpaper(image) {
																	document.getElementById("resultImage").value = image;
																}
															</script>
															<form class="colors" action="loginSystem/wallpaperSettings.php" method="post" enctype="multipart/form-data">
																<div class="slider">
																	<input type="radio" name="slide_switch" id="id-1" value="view/images/shadowAged.jpg" onclick="moveWallpaper('view/images/shadowAged.jpg')">
																	<label for="id-1">
																		<li id="wallpaper" value="view/images/shadowAged.jpg" name="no" onclick="moveWallpaper('view/images/shadowAged.jpg')">
																			<img src="view/images/shadowAged.jpg">
																		</li>
																	</label>
																	<img src="view/images/shadowAged.jpg">
																	<input type="radio" name="slide_switch" id="id-2" value="view/images/london.jpg" onclick="moveWallpaper('view/images/london.jpg')">
																	<label for="id-2">
																		<li id="wallpaper" value="view/images/london.jpg" name="no" onclick="moveWallpaper('view/images/london.jpg')">
																			<img src="view/images/london.jpg">
																		</li>
																	</label>
																	<img src="view/images/london.jpg">
																	<input type="radio" name="slide_switch" id="id-3" value="view/images/Venice.jpg" onclick="moveWallpaper('view/images/Venice.jpg')">
																	<label for="id-3">
																		<li id="wallpaper" value="view/images/Venice.jpg" name="no" onclick="moveWallpaper('view/images/Venice.jpg')">
																			<img src="view/images/Venice.jpg">
																		</li>
																	</label>
																	<img src="view/images/Venice.jpg">
																	<input type="radio" name="slide_switch" id="id-4" value="view/images/Italy.jpg" onclick="moveWallpaper('view/images/Italy.jpg')">
																	<label for="id-4">
																		<li id="wallpaper" value="view/images/Italy.jpg" name="no" onclick="moveWallpaper('view/images/Italy.jpg')">
																			<img src="view/images/Italy.jpg">
																		</li>
																	</label>
																	<img src="view/images/Italy.jpg">
																	<input type="radio" name="slide_switch" id="id-5" value="view/images/Venice2.jpg" onclick="moveWallpaper('view/images/Venice2.jpg')">
																	<label for="id-5">
																		<li id="wallpaper" value="view/images/Venice2.jpg" name="no" onclick="moveWallpaper('view/images/Venice2.jpg')">
																			<img src="view/images/Venice2.jpg">
																		</li>
																	</label>
																	<img src="view/images/Venice2.jpg">
																	<input type="radio" name="slide_switch" id="id-6" value="view/images/Italy2.jpg" onclick="moveWallpaper('view/images/Italy2.jpg')">
																	<label for="id-6">
																		<li id="wallpaper" value="view/images/Italy2.jpg" name="no" onclick="moveWallpaper('view/images/Italy2.jpg')">
																			<img src="view/images/Italy2.jpg">
																		</li>
																	</label>
																	<img src="view/images/Italy2.jpg">
																	<input type="radio" name="slide_switch" id="id-7" value="view/images/Venice3.jpg" onclick="moveWallpaper('view/images/Venice3.jpg')">
																	<label for="id-7">
																		<li id="wallpaper" value="view/images/Venice3.jpg" name="no" onclick="moveWallpaper('view/images/Venice3.jpg')">
																			<img src="view/images/Venice3.jpg">
																		</li>
																	</label>
																	<img src="view/images/Venice3.jpg">
																	<input type="radio" name="slide_switch" id="id-8" value="view/images/parisDark.jpg" onclick="moveWallpaper('view/images/parisDark.jpg')">
																	<label for="id-8">
																		<li id="wallpaper" value="view/images/parisDark.jpg" name="no" onclick="moveWallpaper('view/images/parisDark.jpg')">
																			<img src="view/images/parisDark.jpg">
																		</li>
																	</label>
																	<img src="view/images/parisDark.jpg">
																	<input type="radio" name="slide_switch" id="id-9" value="view/images/aged.jpg" onclick="moveWallpaper('view/images/aged.jpg')">
																	<label for="id-9">
																		<li id="wallpaper" value="view/images/aged.jpg" name="no" onclick="moveWallpaper('view/images/aged.jpg')">
																			<img src="view/images/aged.jpg">
																		</li>
																	</label>
																	<img src="view/images/aged.jpg">
																	<input type="radio" name="slide_switch" id="id-10" value="view/images/agedTwo.jpg" onclick="moveWallpaper('view/images/agedTwo.jpg')">
																	<label for="id-10">
																		<li id="wallpaper" value="view/images/agedTwo.jpg" name="no" onclick="moveWallpaper('view/images/agedTwo.jpg')">
																			<img src="view/images/agedTwo.jpg">
																		</li>
																	</label>
																	<img src="view/images/agedTwo.jpg">
																	<button class="bg-color" id="resultImage" name="resultImage" type="submit">Submit</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
									<div class="rightContainerSettings">
										<div class="promos">
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Basic</span></div>
													<span class="price">$5</span>
													<ul class="features"><li>Home Screen</li><li>Resume</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Plus</span></div>
													<span class="price">$20</span>
													<ul class="features"><li>Art Portal</li><li>Code Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Premium</span></div>
													<span class="price">$10</span>
													<ul class="features"><li>Cloud Portal</li><li>Plex Media Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
										</div><div class="promos">
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Basic</span></div>
													<span class="price">$5</span>
													<ul class="features"><li>Home Screen</li><li>Resume</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Plus</span></div>
													<span class="price">$20</span>
													<ul class="features"><li>Art Portal</li><li>Code Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Premium</span></div>
													<span class="price">$10</span>
													<ul class="features"><li>Cloud Portal</li><li>Plex Media Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
										</div><div class="promos">
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Basic</span></div>
													<span class="price">$5</span>
													<ul class="features"><li>Home Screen</li><li>Resume</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Plus</span></div>
													<span class="price">$20</span>
													<ul class="features"><li>Art Portal</li><li>Code Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Premium</span></div>
													<span class="price">$10</span>
													<ul class="features"><li>Cloud Portal</li><li>Plex Media Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
										</div><div class="promos">
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Basic</span></div>
													<span class="price">$5</span>
													<ul class="features"><li>Home Screen</li><li>Resume</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Plus</span></div>
													<span class="price">$20</span>
													<ul class="features"><li>Art Portal</li><li>Code Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Premium</span></div>
													<span class="price">$10</span>
													<ul class="features"><li>Cloud Portal</li><li>Plex Media Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
										</div><div class="promos">
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Basic</span></div>
													<span class="price">$5</span>
													<ul class="features"><li>Home Screen</li><li>Resume</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Plus</span></div>
													<span class="price">$20</span>
													<ul class="features"><li>Art Portal</li><li>Code Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Premium</span></div>
													<span class="price">$10</span>
													<ul class="features"><li>Cloud Portal</li><li>Plex Media Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
										</div>
										<div class="promos">
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Basic</span></div>
													<span class="price">$5</span>
													<ul class="features"><li>Home Screen</li><li>Resume</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Plus</span></div>
													<span class="price">$20</span>
													<ul class="features"><li>Art Portal</li><li>Code Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
											<div class="promo">
												<section class="wrapperMain bg-color " style="background-color:<?php include 'loginSystem/userTheme.php';?>">
													<div class="deal"><span>Premium</span></div>
													<span class="price">$10</span>
													<ul class="features"><li>Cloud Portal</li><li>Plex Media Portal</li><li>And more...</li></ul>
													<button>Sign up</button>
												</section>
											</div>
										</div>
									</div>
									<script src="http://code.jquery.com/jquery.min.js"></script>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="bottom-container container bottomRadius w3-animate-bottom">
					<section class="bg-color" style="background-color:<?php include 'loginSystem/userTheme.php';?>;border-radius: 5px;">
						<div class="footer-box">
							<div class="footer-box-container">© 2014 <span>KENDALL LEWIS</span> <strong>&nbsp; - &nbsp;</strong>
									ANYTHING GREAT HAS TO START WITH AN IDEA
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
		<script>
			var myVar;

			function myFunction() {
				myVar = setTimeout(showPage, 3000);
			}

			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("myDiv").style.display = "block";
			}
		</script>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
		<script src="js/indexChat.js"></script>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="js/indexDrag.js"></script>
		<script src="js/indexImageView.js"></script>
    	<script src="js/indexprofileTab.js"></script>
		<script src="js/indexManager.js"></script>
		<script src="js/indexMediaTabs.js"></script>
		<script src="js/indexSocialTabs.js"></script>
	</body>
</html>