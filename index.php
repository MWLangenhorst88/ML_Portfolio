<?php include ('header.html'); ?>

<body id="home">

<img src="images/templatemo_logo.jpg" style="visibility: hidden; margin-bottom:-45px" alt="Mark Langenhorst">

<div id="templatemo_header_wrapper">
	<div id="site_title"><h1>Mark Langenhorst</h1></div>
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a>
                <ul>
                    <li><span class="top"></span><span class="bottom"></span></li>
                    <li><a href="portfolio.php#Web">Website Design</a></li>
                    <li><a href="portfolio.php#Graphic">Graphic Design</a></li>
              	</ul>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->
<div id="templatemo_slider">
	<!-- This is the container for the carousel. -->
    <div id = "carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">            
        <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
        <!-- You can place links around these images -->
        <img class="cloudcarousel" src="images/slider/ML.png" alt="Mark Langenhorst" title="Mark Langenhorst" />
        <a href="http://www.chakota-trc.org" rel="lightbox" target="_blank"><img class="cloudcarousel" src="images/slider/Chakota-TRC.jpg" alt="Chakota Website" title="Chakota Website" /></a>
        <a href="http://www.tranquilityDesign.net" rel="lightbox" target="_blank"><img class="cloudcarousel" src="images/slider/TranquilityDesign.jpg" alt="Tranquility Design Website" title="Tranquility Design" /></a>
        <a href="http://www.saintdominicbreese.org" rel="lightbox" target="_blank"><img class="cloudcarousel" src="images/slider/St. Dominic SS.jpg" alt="St. Dominic Website" title="St. Dominic" /></a>
        <img class="cloudcarousel" src="images/slider/CWH.png" alt="Chakota Word Horse" title="Chakota Word Horse" />
        <a href="portfolio.php" rel="lightbox"><img class="cloudcarousel" src="images/slider/AbVo.jpg" alt="Vortex" title="Abstract Vortex" /></a>
		<a href="portfolio.php" rel="lightbox"><img class="cloudcarousel" src="images/slider/TheBirds.jpg" alt="The Birds - Cardinals" title="The Birds" /></a>
        <a href="portfolio.php" rel="lightbox"><img class="cloudcarousel" src="images/slider/STLBlues.png" alt="St. Louis Blues" title="Let's Go Blues!" /></a>
    </div>
    
    <!-- Define left and right buttons. -->
    <center>
    <input id="slider-left-but" type="button" value="" />
    <input id="slider-right-but" type="button" value="" />
    </center>
</div>
<div id="templatemo_main">
	
    <div class="col one_third fp_services">
    <h2>My Portfolio</h2>
        <img src="images/Mark.jpg" alt="Mark Langenhorst" class="image_fl" width="120" height="120" />
        <p>Thanks for viewing my portfolio! I'm a designer with certificate in Graphic Design, achieved in 2008 from Kaskaskia College, along with an Associate's Degree in Web Design, achieved in 2013 from Southwestern Illinois College. Some of my software favorites include:</p>
  		<ul class="templatemo_list">
            <li>Photoshop</li>
            <li>Dreamweaver</li>
            <li>SharePoint Designer</li>
            <li>Eclipse</li>
        </ul>
        <p><a href="about.php">Read More...</a></p>
    </div>
    <div class="col one_third fp_services">
        <h2>Web Design</h2>
        <div class="rp_pp">
            <img src="images/templatemo_image_02.jpg" alt="Image 02" />
            <p class="rp_pp_c">Tranquility Design in<br/>Breese, IL</p>
            <div class="cleaner"></div>
        </div>
        <p>One of the first classes I took a real interest in was a basic HTML lesson from a computer class in grade school. 
        I enjoyed learning about headers and links that could navigate you to another page on the internet. 
		Even then, I saw how this new form of communication could impact people's lives.</p>
    </div>
    <div class="col one_third no_margin_right fp_services">
    	<h2>Graphic Design</h2>
        <div class="rp_pp">
            <img src="images/templatemo_image_01.jpg" alt="Image 01" />
            <p class="rp_pp_c">Alfred Hitchcock's "The Birds", <br/>St. Louis Cardinals Style</p>
            <div class="cleaner"></div>
        </div>
            <p>I've liked creating images for a long time. Even before spending most of my Saturday mornings starting up Paint on the computer as a kid, 
            I've always liked to draw. While every child wanted to be a Firefighter or Police Officer when they grew up, 
            I wanted to design logos, especially for sports teams. I even had drawings of new team logos and jersey designs in my notebooks.</p>
    </div>    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<?php include ('footer.html'); ?>