<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>KHIZAR MALIK | INTRODUCTION</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		<div id="wrapper">

			<!-- Header -->
				<section id="header" class="skel-layers-fixed">
					<header>
						<span class="image avatar"><img src="images/avatar.jpg" alt="" /></span>
						<h1 id="logo"><a href="#">Khizar Malik</a></h1>
						<p>Life is binary<br />
						either do or die</p>
					</header>
					<nav id="nav">
						<ul>
							<li><a href="#one" class="active">About</a></li>
							<li><a href="#two">Things I Can Do</a></li>
							<li><a href="#three">Projects, I am working on</a></li>
							<li><a href="#four">Contact</a></li>
						</ul>
					</nav>
					<footer>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
					</footer>
				</section>

			<!-- Main -->
				<div id="main">

					<!-- One -->
						<section id="one">
							<div class="container">
								<header class="major">
									<h2>I'm Khizar</h2>
									<p>Application and web developer</p>
								</header>
								<p>I am currently pursuing Bachelor in Computer Science from the Queen Mary University of London. I love programming, reading books and learning new things. My journey in this programming world, began when I was around 14 years old. I was a gamer back then, so one day I decided to make a game. I learned JavaScript and it was my first programming language. I started making some basic games and interactive websites, then after that, decided to learn other languages as well. So since then I have been learning languages and other programming tools.   </p>
							</div>
						</section>

					<!-- Two -->
						<section id="two">
							<div class="container">
								<h3>Things I Can Do</h3>
								<p>I am best at Sleeping ! No one can beat me in that ( Do not compare me with a dead person ).</p>
								<ul class="feature-icons">
									<li class="fa-code">Websites</li>
									<li class="fa-cubes">Android app</li>
									<li class="fa-book">Web application</li>
									<li class="fa-coffee">Drink much coffee</li>
									<li class="fa-bolt">Database handling</li>
									<li class="fa-users">Shadow clone technique</li>
								</ul>
							</div>
						</section>

					<!-- Three -->
						<section id="three">
							<div class="container">
								<h3>Projects, I am working on</h3>
								<p>So far, I'm only working on the projects given by the lecturers.</p>
								<div class="features">
									<article>
										<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
										<div class="inner">
											<h4>2D Adventure game</h4>
											<p>I'm learning so many things by working on this project. I am using java for building GUI and animation. In this project, so far, I have learned AWT, Swings, Graphic and other classes present in the Java API.</p>
										</div>
									</article>
									<article>
										<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
										<div class="inner">
											<h4>Web Blog</h4>
											<p>I am creating a blog about the programming and tech. This project is helping me revise the languages I learned 3 years ago. </p>
										</div>
									</article> 
								</div>
							</div>
						</section>

                    <!-- Four -->
                        <?php 
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mess = $_POST['message'];
                            $subject = $_POST['subject'];
                            $to = "kmalik1122@gmail.com";

                            $result = "";
                            if($name == "" || $email == "" || $mess == ""){
                                $result = "Please enter the missing fields.";
                            }else{
                                mail($to,$subject,$mess,'From: '.$email);
                                $result = "Your message is send to Khizar !";
                            }
                        ?>
						<section id="four">
							<div class="container">
								<h3>Contact Me</h3>
								<p>If there is anything that you would like to ask me then send me an email or message me at Facebook or Instagram.</p>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
									<div class="row uniform">
										<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" value ="<?php echo $name ?>"/></div>
										<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" value ="<?php echo $email ?>"/></div>
									</div>
									<div class="row uniform">
										<div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" value ="<?php echo $subject ?>"/></div>
									</div>
									<div class="row uniform">
										<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6" ><?php echo $mess ?></textarea></div>
									</div>
									<div class="row uniform">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="special" value="Send Message" /></li>
												<li><input type="reset" value="Reset Form" /></li>
											</ul>
										</div>
                                    </div>
                                    <div class="row uniform">
                                        <div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" value ="<?php echo $result ?>"/></div>
                                    </div> 
								</form>
							</div>
						</section>

					<!-- Five -->
					<!--
						<section id="five">
							<div class="container">
								<h3>Elements</h3>

								<section>
									<h4>Text</h4>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<header>
										<h4>Heading with a Subtitle</h4>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<header>
										<h5>Heading with a Subtitle</h5>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h5>Blockquote</h5>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h5>Preformatted</h5>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h4>Lists</h4>
									<div class="row">
										<div class="6u 12u(xsmall)">
											<h5>Unordered</h5>
											<ul>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Sagittis adipiscing lorem eleifend.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ul>
											<h5>Alternate</h5>
											<ul class="alt">
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Sagittis adipiscing lorem eleifend.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ul>
										</div>
										<div class="6u 12u(xsmall)">
											<h5>Ordered</h5>
											<ol>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Etiam vel felis at lorem sed viverra.</li>
												<li>Felis enim feugiat dolore viverra.</li>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Etiam vel felis at lorem sed viverra.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ol>
											<h5>Icons</h5>
											<ul class="icons">
												<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
												<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
												<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
											</ul>
										</div>
									</div>
									<h5>Actions</h5>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt">Default</a></li>
									</ul>
									<ul class="actions small">
										<li><a href="#" class="button special small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
										<li><a href="#" class="button alt small">Small</a></li>
									</ul>
									<div class="row">
										<div class="3u 6u(medium) 12u$(xsmall)">
											<ul class="actions vertical">
												<li><a href="#" class="button special">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button alt">Default</a></li>
											</ul>
										</div>
										<div class="3u 6u$(medium) 12u$(xsmall)">
											<ul class="actions vertical small">
												<li><a href="#" class="button special small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button alt small">Small</a></li>
											</ul>
										</div>
										<div class="3u 6u(medium) 12u$(xsmall)">
											<ul class="actions vertical">
												<li><a href="#" class="button special fit">Default</a></li>
												<li><a href="#" class="button fit">Default</a></li>
												<li><a href="#" class="button alt fit">Default</a></li>
											</ul>
										</div>
										<div class="3u 6u$(medium) 12u$(xsmall)">
											<ul class="actions vertical small">
												<li><a href="#" class="button special small fit">Small</a></li>
												<li><a href="#" class="button small fit">Small</a></li>
												<li><a href="#" class="button alt small fit">Small</a></li>
											</ul>
										</div>
									</div>
								</section>

								<section>
									<h4>Table</h4>
									<h5>Default</h5>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h5>Alternate</h5>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h4>Buttons</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt">Alternate</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special big">Big</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt small">Small</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button special fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
										<li><a href="#" class="button alt fit">Fit</a></li>
									</ul>
									<ul class="actions fit small">
										<li><a href="#" class="button special fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
										<li><a href="#" class="button alt fit small">Fit + Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
										<li><a href="#" class="button alt icon fa-check">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Special</span></li>
										<li><span class="button disabled">Default</span></li>
										<li><span class="button alt disabled">Alternate</span></li>
									</ul>
								</section>

								<section>
									<h4>Form</h4>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="6u 12u(xsmall)">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">- Category -</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row uniform">
											<div class="4u 12u(medium)">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low Priority</label>
											</div>
											<div class="4u 12u(medium)">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal Priority</label>
											</div>
											<div class="4u 12u(medium)">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High Priority</label>
											</div>
										</div>
										<div class="row uniform">
											<div class="6u 12u(medium)">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy of this message</label>
											</div>
											<div class="6u 12u(medium)">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">I am a human and not a robot</label>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

								<section>
									<h4>Image</h4>
									<h5>Fit</h5>
									<span class="image fit"><img src="images/banner.jpg" alt="" /></span>
									<div class="box alt">
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										</div>
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
										</div>
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										</div>
									</div>
									<h5>Left &amp; Right</h5>
									<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
									<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
								</section>

							</div>
						</section>
					-->

				</div>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<ul class="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>
	</body>
</html>