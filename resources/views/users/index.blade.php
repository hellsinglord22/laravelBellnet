<!DOCTYPE html>
<html>
	<head>
		<title>Bellnet | Welcome</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/navbar-style.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/login-area.css">
	</head>
	<body>

		<div id="open"></div>

		<div id="video-bg">
		  <video autoplay loop>
		    <source type="video/mp4" src="media/video2.mp4" media="(orientation:landscape)">
		  </video>
		</div>

		<!--******************** main-body section start ********************-->
		<section class="main-body">

			<!--******************** login-area section start ********************-->
			<section class="login-area">
				<a href="student.html"><div class="holder">
					<p>Jessy Star</p>
					<div class="profile"></div>
				</div></a>
			</section><!--******************** login-area section end ********************-->




			<!--******************** navbar section start ********************-->
			<section class="navbar">
				<div class="navbar-register">
					<img src="imgs/logo.png" alt="">
					<!--{!!Form::open(array('action'=>'UserController@signup'))!!}-->	
						<input type="text"  name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<input type="password" name="confirmpassword" placeholder="Confirm Password">
						<input type="text" name="email" placeholder="E-Mail">
						<select class="countrylist" name="country">

								<option value="AFG">Afghanistan</option>
								<option value="ALA">Åland Islands</option>
								<option value="ALB">Albania</option>
								<option value="DZA">Algeria</option>
								<option value="ASM">American Samoa</option>
								<option value="AND">Andorra</option>
								<option value="AGO">Angola</option>
								<option value="AIA">Anguilla</option>
								<option value="ATA">Antarctica</option>
								<option value="ATG">Antigua and Barbuda</option>
								<option value="ARG">Argentina</option>
								<option value="ARM">Armenia</option>
								<option value="ABW">Aruba</option>
								<option value="AUS">Australia</option>
								<option value="AUT">Austria</option>
								<option value="AZE">Azerbaijan</option>
								<option value="BHS">Bahamas</option>
								<option value="BHR">Bahrain</option>
								<option value="BGD">Bangladesh</option>
								<option value="BRB">Barbados</option>
								<option value="BLR">Belarus</option>
								<option value="BEL">Belgium</option>
								<option value="BLZ">Belize</option>
								<option value="BEN">Benin</option>
								<option value="BMU">Bermuda</option>
								<option value="BTN">Bhutan</option>
								<option value="BOL">Bolivia, Plurinational State of</option>
								<option value="BES">Bonaire, Sint Eustatius and Saba</option>
								<option value="BIH">Bosnia and Herzegovina</option>
								<option value="BWA">Botswana</option>
								<option value="BVT">Bouvet Island</option>
								<option value="BRA">Brazil</option>
								<option value="IOT">British Indian Ocean Territory</option>
								<option value="BRN">Brunei Darussalam</option>
								<option value="BGR">Bulgaria</option>
								<option value="BFA">Burkina Faso</option>
								<option value="BDI">Burundi</option>
								<option value="KHM">Cambodia</option>
								<option value="CMR">Cameroon</option>
								<option value="CAN">Canada</option>
								<option value="CPV">Cape Verde</option>
								<option value="CYM">Cayman Islands</option>
								<option value="CAF">Central African Republic</option>
								<option value="TCD">Chad</option>
								<option value="CHL">Chile</option>
								<option value="CHN">China</option>
								<option value="CXR">Christmas Island</option>
								<option value="CCK">Cocos (Keeling) Islands</option>
								<option value="COL">Colombia</option>
								<option value="COM">Comoros</option>
								<option value="COG">Congo</option>
								<option value="COD">Congo, the Democratic Republic of the</option>
								<option value="COK">Cook Islands</option>
								<option value="CRI">Costa Rica</option>
								<option value="CIV">Côte d'Ivoire</option>
								<option value="HRV">Croatia</option>
								<option value="CUB">Cuba</option>
								<option value="CUW">Curaçao</option>
								<option value="CYP">Cyprus</option>
								<option value="CZE">Czech Republic</option>
								<option value="DNK">Denmark</option>
								<option value="DJI">Djibouti</option>
								<option value="DMA">Dominica</option>
								<option value="DOM">Dominican Republic</option>
								<option value="ECU">Ecuador</option>
								<option value="EGY">Egypt</option>
								<option value="SLV">El Salvador</option>
								<option value="GNQ">Equatorial Guinea</option>
								<option value="ERI">Eritrea</option>
								<option value="EST">Estonia</option>
								<option value="ETH">Ethiopia</option>
								<option value="FLK">Falkland Islands (Malvinas)</option>
								<option value="FRO">Faroe Islands</option>
								<option value="FJI">Fiji</option>
								<option value="FIN">Finland</option>
								<option value="FRA">France</option>
								<option value="GUF">French Guiana</option>
								<option value="PYF">French Polynesia</option>
								<option value="ATF">French Southern Territories</option>
								<option value="GAB">Gabon</option>
								<option value="GMB">Gambia</option>
								<option value="GEO">Georgia</option>
								<option value="DEU">Germany</option>
								<option value="GHA">Ghana</option>
								<option value="GIB">Gibraltar</option>
								<option value="GRC">Greece</option>
								<option value="GRL">Greenland</option>
								<option value="GRD">Grenada</option>
								<option value="GLP">Guadeloupe</option>
								<option value="GUM">Guam</option>
								<option value="GTM">Guatemala</option>
								<option value="GGY">Guernsey</option>
								<option value="GIN">Guinea</option>
								<option value="GNB">Guinea-Bissau</option>
								<option value="GUY">Guyana</option>
								<option value="HTI">Haiti</option>
								<option value="HMD">Heard Island and McDonald Islands</option>
								<option value="VAT">Holy See (Vatican City State)</option>
								<option value="HND">Honduras</option>
								<option value="HKG">Hong Kong</option>
								<option value="HUN">Hungary</option>
								<option value="ISL">Iceland</option>
								<option value="IND">India</option>
								<option value="IDN">Indonesia</option>
								<option value="IRN">Iran, Islamic Republic of</option>
								<option value="IRQ">Iraq</option>
								<option value="IRL">Ireland</option>
								<option value="IMN">Isle of Man</option>
								<option value="ITA">Italy</option>
								<option value="JAM">Jamaica</option>
								<option value="JPN">Japan</option>
								<option value="JEY">Jersey</option>
								<option value="JOR">Jordan</option>
								<option value="KAZ">Kazakhstan</option>
								<option value="KEN">Kenya</option>
								<option value="KIR">Kiribati</option>
								<option value="PRK">Korea, Democratic People's Republic of</option>
								<option value="KOR">Korea, Republic of</option>
								<option value="KWT">Kuwait</option>
								<option value="KGZ">Kyrgyzstan</option>
								<option value="LAO">Lao People's Democratic Republic</option>
								<option value="LVA">Latvia</option>
								<option value="LBN">Lebanon</option>
								<option value="LSO">Lesotho</option>
								<option value="LBR">Liberia</option>
								<option value="LBY">Libya</option>
								<option value="LIE">Liechtenstein</option>
								<option value="LTU">Lithuania</option>
								<option value="LUX">Luxembourg</option>
								<option value="MAC">Macao</option>
								<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
								<option value="MDG">Madagascar</option>
								<option value="MWI">Malawi</option>
								<option value="MYS">Malaysia</option>
								<option value="MDV">Maldives</option>
								<option value="MLI">Mali</option>
								<option value="MLT">Malta</option>
								<option value="MHL">Marshall Islands</option>
								<option value="MTQ">Martinique</option>
								<option value="MRT">Mauritania</option>
								<option value="MUS">Mauritius</option>
								<option value="MYT">Mayotte</option>
								<option value="MEX">Mexico</option>
								<option value="FSM">Micronesia, Federated States of</option>
								<option value="MDA">Moldova, Republic of</option>
								<option value="MCO">Monaco</option>
								<option value="MNG">Mongolia</option>
								<option value="MNE">Montenegro</option>
								<option value="MSR">Montserrat</option>
								<option value="MAR">Morocco</option>
								<option value="MOZ">Mozambique</option>
								<option value="MMR">Myanmar</option>
								<option value="NAM">Namibia</option>
								<option value="NRU">Nauru</option>
								<option value="NPL">Nepal</option>
								<option value="NLD">Netherlands</option>
								<option value="NCL">New Caledonia</option>
								<option value="NZL">New Zealand</option>
								<option value="NIC">Nicaragua</option>
								<option value="NER">Niger</option>
								<option value="NGA">Nigeria</option>
								<option value="NIU">Niue</option>
								<option value="NFK">Norfolk Island</option>
								<option value="MNP">Northern Mariana Islands</option>
								<option value="NOR">Norway</option>
								<option value="OMN">Oman</option>
								<option value="PAK">Pakistan</option>
								<option value="PLW">Palau</option>
								<option value="PSE">Palestinian Territory, Occupied</option>
								<option value="PAN">Panama</option>
								<option value="PNG">Papua New Guinea</option>
								<option value="PRY">Paraguay</option>
								<option value="PER">Peru</option>
								<option value="PHL">Philippines</option>
								<option value="PCN">Pitcairn</option>
								<option value="POL">Poland</option>
								<option value="PRT">Portugal</option>
								<option value="PRI">Puerto Rico</option>
								<option value="QAT">Qatar</option>
								<option value="REU">Réunion</option>
								<option value="ROU">Romania</option>
								<option value="RUS">Russian Federation</option>
								<option value="RWA">Rwanda</option>
								<option value="BLM">Saint Barthélemy</option>
								<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KNA">Saint Kitts and Nevis</option>
								<option value="LCA">Saint Lucia</option>
								<option value="MAF">Saint Martin (French part)</option>
								<option value="SPM">Saint Pierre and Miquelon</option>
								<option value="VCT">Saint Vincent and the Grenadines</option>
								<option value="WSM">Samoa</option>
								<option value="SMR">San Marino</option>
								<option value="STP">Sao Tome and Principe</option>
								<option value="SAU">Saudi Arabia</option>
								<option value="SEN">Senegal</option>
								<option value="SRB">Serbia</option>
								<option value="SYC">Seychelles</option>
								<option value="SLE">Sierra Leone</option>
								<option value="SGP">Singapore</option>
								<option value="SXM">Sint Maarten (Dutch part)</option>
								<option value="SVK">Slovakia</option>
								<option value="SVN">Slovenia</option>
								<option value="SLB">Solomon Islands</option>
								<option value="SOM">Somalia</option>
								<option value="ZAF">South Africa</option>
								<option value="SGS">South Georgia and the South Sandwich Islands</option>
								<option value="SSD">South Sudan</option>
								<option value="ESP">Spain</option>
								<option value="LKA">Sri Lanka</option>
								<option value="SDN">Sudan</option>
								<option value="SUR">Suriname</option>
								<option value="SJM">Svalbard and Jan Mayen</option>
								<option value="SWZ">Swaziland</option>
								<option value="SWE">Sweden</option>
								<option value="CHE">Switzerland</option>
								<option value="SYR">Syrian Arab Republic</option>
								<option value="TWN">Taiwan, Province of China</option>
								<option value="TJK">Tajikistan</option>
								<option value="TZA">Tanzania, United Republic of</option>
								<option value="THA">Thailand</option>
								<option value="TLS">Timor-Leste</option>
								<option value="TGO">Togo</option>
								<option value="TKL">Tokelau</option>
								<option value="TON">Tonga</option>
								<option value="TTO">Trinidad and Tobago</option>
								<option value="TUN">Tunisia</option>
								<option value="TUR">Turkey</option>
								<option value="TKM">Turkmenistan</option>
								<option value="TCA">Turks and Caicos Islands</option>
								<option value="TUV">Tuvalu</option>
								<option value="UGA">Uganda</option>
								<option value="UKR">Ukraine</option>
								<option value="ARE">United Arab Emirates</option>
								<option value="GBR">United Kingdom</option>
								<option value="USA">United States</option>
								<option value="UMI">United States Minor Outlying Islands</option>
								<option value="URY">Uruguay</option>
								<option value="UZB">Uzbekistan</option>
								<option value="VUT">Vanuatu</option>
								<option value="VEN">Venezuela, Bolivarian Republic of</option>
								<option value="VNM">Viet Nam</option>
								<option value="VGB">Virgin Islands, British</option>
								<option value="VIR">Virgin Islands, U.S.</option>
								<option value="WLF">Wallis and Futuna</option>
								<option value="ESH">Western Sahara</option>
								<option value="YEM">Yemen</option>
								<option value="ZMB">Zambia</option>
								<option value="ZWE">Zimbabwe</option>
						</select>

						<div class="radios">
							<input type="radio" name="type" value="student">Student</input>
							<input type="radio" name="type" value="instructor">Instructor</input>
						</div>

						<input type="submit" name="submit" value="Register">
					<!--{!!Form::close()!!}  -->
					<button>Close</button>
				</div>



				@if(count($errors)>0)
<ul>
@foreach($errors->all() as $error)
<li>{!!$error!!}</li>
@endforeach

</ul>
@endif

				<div class="navbar-login">
					<img src="imgs/logo.png" alt="">
					<form>
		<!--{!!Form::open(array('action'=>'UserController@login'))!!}-->
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<input type="submit" name="login" value="LOG IN">

					</form>
						<!--{!!Form::close()!!}-->
						<button>Close</button>
				</div>

				<ul class="navbar-menu">
					<li id="register" class="navbar-item"><span>SIGN UP</span></li>
					<li id="login" class="navbar-item"><span>SIGN IN</span></li>
				</ul>
			</section><!--******************** navbar section end ********************-->

			<!--******************** header section start ********************-->
			<section class="header" id="header">
				<ul class="menu">
					<a class="scroll" href="index.html"><li>Home</li></a>
					<a class="scroll" href="#courses"><li>Courses</li></a>
					<a class="scroll" href="#services"><li>Services</li></a>
					<a class="scroll" id="image" href="indes.html"><li><img src="imgs/logo.png" alt=""></li></a>
					<a class="scroll" href="#tools"><li>Tools</li></a>
					<a class="scroll" href="#about"><li>About</li></a>
					<a class="scroll" href="#contact"><li>Contact Us</li></a>
				</ul>


				<br><br>
				<!--******************** login-area section start ********************-->
				<section class="virtual-button">
					<a href="virtual.html"><p>Try virtual class room</p></a>
				</section><!--******************** login-area section end ********************-->


				<br><br><br><br><br>
				<div class="splitter-light"></div>
				<p><span>Creative Tutorials</span><span>.</span><span>Expert Teachers</span><span>.</span><span>Life Streaming</span></p>
				<div class="splitter-light"></div>
				<h1>Welcome to Bellnet</h1>

				<form action="">
					<div class="container12">
						<div class="prefix3 column6">
							<input type="text" placeholder="Search Our Courses">
						</div>
					</div>
				</form>

				<a href="#about" class="scroll arrow"><p class="more icon-arrow-down8"></p></a>
			</section><!--******************** header section end ********************-->


			<!--******************** about section start ********************-->
			<section class="about" id="about">

				<h1>About Us</h1>

				<p>Something you should know about us,a litle hint</p>

				<div class="container12">
					<div id="item1" class="item column4">
						<h2 class="icon-users32"></h2>
						<h3>Expert Teachers</h3>
						<h4> Online learners want more than just static content they want to learn from Expert teachers</h4>
					</div>

					<div id="item2" class="item column4">
						<h2 class="icon-cogs"></h2>
						<h3>Innovative Tools</h3>
						<h4>Bellnet is equiped with innovative tools for powerfull way of learning</h4>
						<button class="miko">csdfsas</button>
					</div>

					<div id="item3" class="item column4">
						<h2 class="icon-pencil"></h2>
						<h3>Learn Anywhere</h3>
						<h4>Here you can learn anywhere and anytime as Bellnet work 24-7 hours</h4>
					</div>

				</div>

			</section><!--******************** about section end ********************-->


			<!--******************** services section start ********************-->
			<section class="services" id="services">

				<h1>Services</h1>

				<p>WE OFFER ONLY QUALITY SERVICES</p>

				<img src="imgs/services.png" alt="">

				<div class="container12">
					<div class="item column4">
						<h2 class="icon-users32"></h2>
						<hr>
						<h3>Very Handy Virtual Class Rooms</h3>
						<h4>Virtual Class Room Designed in simple Way to easy way of learning to facilitate Learning</h4>
					</div>

					<div class="item column4">
						<h2 class="icon-book"></h2>
						<hr>
						<h3>Hundreds of Courses</h3>
						<h4>Here There are more and more courses foe each category to facilitate learning for student</h4>
					</div>

					<div class="item column4">
						<h2 class="icon-headphones"></h2>
						<hr>
						<h3>24-7 Support</h3>
						<h4>Fulltime support for users to help them to learn easliy on Bellnet anytime</h4>
					</div>

				</div>

			</section><!--******************** services section end ********************-->


			<!--******************** courses section start ********************-->
			<section class="courses" id="courses">

				<h6>Our Courses</h6>
				<p>A great library contain various powerful courses.</p>

				<br>
				<br>
				<br>
				<br>
				<br>

				<div class="items">
					<div id="a1" class="item army">
						<div class="flipper-front">
							<h1>Web</h1>
							<p class="icon-browser2"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a2" class="item orange">
						<div class="flipper-front">
							<h1>Graphics</h1>
							<p class=" icon-brush"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a3" class="item teal">
						<div class="flipper-front">
							<h1>Game</h1>
							<p class="icon-meter"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a4" class="item plum">
						<div class="flipper-front">
							<h1>Programming</h1>
							<p class="icon-code"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a5" class="item purple">
						<div class="flipper-front">
							<h1>Photography</h1>
							<p class="icon-camera4"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a6" class="item blue">
						<div class="flipper-front">
							<h1>Education</h1>
							<p class="icon-screen3"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a7" class="item sky">
						<div class="flipper-front">
							<h1>Network</h1>
							<p class="icon-network"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>7,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>

					<div id="a8" class="item green">
						<div class="flipper-front">
							<h1>More Categories</h1>
							<p class="icon-coin"></p>
						</div>
						<div class="flipper-back">
							<h2>500</h2>
							<h3>Courses</h3>
							<h4>21,256,654</h4>
							<h5>Hours</h5>
						</div>
					</div>
				</div>

			</section><!--******************** courses section end ********************-->


			<!--******************** tools section start ********************-->
			<section class="tools" id="tools">

				<h1>Used Tools</h1>
				<p>Perfect tools to bring you smooth feeling</p>

				<div class="container12">
					<div class="column3">
						<div class="item">
							<img src="imgs/tool1.png" alt="">
							<h4>Photoshop</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool2.png" alt="">
							<h4>Illustrator</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool3.png" alt="">
							<h4>Dreamweaver</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool4.png" alt="">
							<h4>Android</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool5.png" alt="">
							<h4>Intellj Idea</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool6.png" alt="">
							<h4>3D Max</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool7.png" alt="">
							<h4>Cinima 4D</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>

					<div class="column3">
						<div class="item">
							<img src="imgs/tool8.png" alt="">
							<h4>Photoshop</h4>
							<h5><i>400 </i><span> courses</span>&nbsp; &nbsp; <i>13,000 </i><span> Video Tutorials</span></h5>
						</div>
					</div>


				</div>

			</section><!--******************** tools section end ********************-->


			<!--******************** contact section start ********************-->
			<section id="contact" class="contact">
				<h1>GET IN TOUCH WITH US!</h1>
				<p><span class="icon-home"></span>123 B, 7th District, Cairo, Egypt </p>
				<p><span class="icon-phone"></span>+(20) 123-456-7890 / +(20) 098-765-4321</p>
				<br><br><br>

				<div class="container12">

					<div class="column4">
						<div class="item">
							<p class="icon-phone"></p>
							<span>+(20) 123-456-7890</span>
						</div>
					</div>

					<div class="column4">
						<div class="item">
							<p class="icon-location"></p>
							<span>123 B, 7th District, Cairo, Egypt</span>
						</div>
					</div>

					<div class="column4">
						<div class="item">
							<p class="icon-mail5"></p>
							<span>info@bellnet.com</span>
						</div>
					</div>
				</div>

				<form class="footer-form" action="">
					<div class="container12">
						<div class="column4">
							<input class="column4" type="text" placeholder="Name">
						</div>

						<div class="column4">
							<input class="column4" type="text" placeholder="E-Mail">
						</div>

						<div class="column4">
							<input class="column4" type="text" placeholder="Phone">
						</div>

						<div class="column12">
							<textarea placeholder="Message"></textarea>
						</div>

						<input type="submit" value="Send">
					</div>
				</form>


				<div class="social">
					<a href="https://www.facebook.com/Bellnet-439526066243636/"><span class="icon-facebook"></span></a>
					<a href=""><span class="icon-twitter"></span></a>
					<a href="https://www.linkedin.com/in/asmsyssg"><span class="icon-linkedin2"></span></a>
					<a href=""><span class="icon-pinterest22"></span></a>
					<a href=""><span class="icon-googleplus"></span></a>
					<a href=""><span class="icon-dribbble"></span></a>
					<a href=""><span class="icon-instagram3"></span></a>
					<a href=""><span class="icon-vimeo"></span></a>
					<a href=""><span class="icon-youtube"></span></a>
				</div>

				<p>© Bellnet 2016, All Rights Reserved.</p>
			</section><!--******************** contact section end ********************-->

		</section><!--******************** main-body section end ********************-->


		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>