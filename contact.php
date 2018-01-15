<?php include ('header.html'); ?>

<body id="subpage">

<img src="images/templatemo_logo.jpg" style="visibility: hidden; margin-bottom:-45px" alt="Mark Langenhorst">

<div id="templatemo_header_wrapper">
	<div id="site_title"><h1>Mark Langenhorst</h1></div>
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="portfolio"><a href="portfolio.php">Portfolio</a>
                <ul>
                    <li><span class="top"></span><span class="bottom"></span></li>
                    <li><a href="portfolio.php#Web">Website Design</a></li>
                    <li><a href="portfolio.php#Graphic">Graphic Design</a></li>
              	</ul>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php" class="selected">Contact</a></li>
        </ul>
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
	
    <h2>Contact Information</h2>
        <div class="half float_l">
        <h4>Tell me what you think of my Portfolio</h4>
            <p>Whether you're an employer who likes my stuff, a fellow designer with questions or comments, or even a business owner who would like me to make your website, 
			just enter the information in the form below!</p>
            <div id="contact_form">
               <form method="post" name="contact" action="contactProcess.php">
                        
                        <label for="author">Name: </label><br/><input type="text" size="65" id="name" name="name" class="required input_field" />
                        
						<div class="cleaner h10"></div>
                        
						<label for="email">Email: </label><br/><input type="text" size="65" id="email" name="email" class="validate-email required input_field" />
                        
						<div class="cleaner h10"></div>
                        
						<label for="subject">Subject: </label><br/><input type="text" size="65" name="subject" id="subject" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="message">Message: </label><br/><textarea id="message" name="message" rows="5" cols="50" class="required"></textarea>
                        
						<div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                        
            	</form>
            </div>
		</div>
        <div class="half float_r">
        	<h4>My Contact Information</h4>
            <h6><strong>Address</strong></h6>
          		<p>
          			6504 Wesclin Road<br/>
					Germantown, IL 62245
				</p>
			<h6><strong>Email</strong></h6>
          		<p>
          			<a href="mailto:mwlangenhorst88@yahoo.com">Yahoo Account</a><br/>
          			<a href="mailto:mwlangenhorsst88@gmail.com">Gmail Account</a>
				</p>
				
		<p><br/><br/><br/><img src="images/map.PNG" style="width:400px" alt="Map of Germantown, IL" /></p>
        
        </div>		   	
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<?php include ('footer.html'); ?>