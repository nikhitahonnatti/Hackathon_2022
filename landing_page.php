<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She codes Website</title>
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">She<span>Codes.</span></a></div>
            <ul class="menu">
                <li><a href="policy.php" class="menu-btn">Policy</a></li>
                <li><a href="aboutus.php" class="menu-btn">About</a></li>
                <!--<li><a href="" class="menu-btn">Courses</a></li>-->
                <li><a href="register.php" class="menu-btn">Sign Up</a></li>
                <li><a href="login.php" class="menu-btn">Sign In</a></li>
				<li><a href="external_links.php" class="menu-btn">External Links</a></li>
                <li><a href="contact.php" class="menu-btn">Contact Us</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Coding made easy with,</div>
                <div class="text-3">Gamified Learning <span class="typing"></span></div>
                <a href="index.php">Lets Begin</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Relevant Courses</h2>
            <div class="about-content">
                <div class="column left">
				
                    <img src="images/mit.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">MIT Courses</div>
                    <p>MIT OpenCourseWare is a web-based publication of virtually all MIT course content. OCW is open and available to the world and is a permanent MIT activity.</p>
                    <a href="external.php">Relevant Link</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our Games</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">HTML</div>
                        <p>HTML stands for Hypertext Markup Language, the foundational language used to create websites and web documents.</p>
						<a href="students.php">
	                    <button type="button" class="btn btn-light" style="margin-right:10px;height:60px;width:80px;">Lets Play</button>
	                    </a>
						<a href="enroll_html.php">
	                    <button type="button" class="btn btn-warning" style="margin-right:10px;height:60px;width:80px;">Enroll now</button>
	                    </a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">CSS</div>
                        <p>CSS stands for Cascading Style Sheets. It is the coding language that gives a website its look and layout.</p>
						<a href="css_video.php">
	                    <button type="button" class="btn btn-light" style="margin-right:10px;height:60px;width:80px;">Lets Play</button>
	                    </a>
						<a href="enroll_css.php">
	                    <button type="button" class="btn btn-warning" style="margin-right:10px;height:60px;width:80px;">Enroll now</button>
	                    </a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Javascript</div>
                        <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive.</p>
						<a href="js_video.php">
	                    <button type="button" class="btn btn-light" style="margin-right:10px;height:60px;width:80px;">Lets Play</button>
	                    </a>
						<a href="enroll_js.php">
	                    <button type="button" class="btn btn-warning" style="margin-right:10px;height:60px;width:80px;">Enroll now</button>
	                    </a>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Technology used</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">The technologies used by us are</div>
                    <p>Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. websites.</p>
                    
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <!--<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>-->
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Preeti Sahani</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Allahabad</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">preetisahani98@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.codingnepalweb.com"></a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
