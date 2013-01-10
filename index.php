<!DOCTYPE html>
<html lang="en">
     
<head> 
        <meta charset=utf-8> 
        <title>Third Year Project</title>
        
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
        <link href="css/main.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" /> 
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script> 
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script> 
</head>

    <body>
        <div class='container'>
			<div class='row' style='margin-left:auto;margin-right:auto;'>
				<div class='banner'>
					<img src='images/banner2.png' />
				</div>
			</div>
            <div class="navbar" style='margin-bottom:0px;width:1010px'>
                <div class="navbar-inner">
                      <ul class="nav">
						<?php
							if(!isset($_GET['file']))
							{
								$file = "home";
							}
							else
							{
								$file = htmlspecialchars($_GET['file']);
							}
						?>
						<li <?php if($file == "home"){print("class='active'");} ?>><a href="?file=home"><i class="icon-home"></i> Home</a></li>
						<li <?php if($file == "aboutus"){print("class='active'");} ?>><a href="?file=aboutus"><i class="icon-question-sign"></i> About Us</a></li>
						<li <?php if($file == "team"){print("class='active'");} ?>><a href="?file=team"><i class="icon-user"></i> Meet the Team</a></li>
						<li <?php if($file == "projects"){print("class='active'");} ?>><a href="?file=projects"><i class="icon-folder-open"></i> Projects</a></li>
                        <li <?php if($file == "contactus"){print("class='active'");} ?>><a href="?file=contactus"><i class="icon-envelope"></i></i> Contact Us</a></li>
                      </ul>
                    </div>
                </div>
             <div class='contentbox'>
             		<div class='mainContentBox'>
             				<?php
									if(!isset($_GET['file']))
                                    {
										$file = "content/home.php";
                                    }
									else
                                    {
                                        $file = "content/". $_GET['file'] . ".php";
                                    }               
									if(file_exists("$file"))
                                    {
                                        include("$file");
                                    }
									else
                                    {
                                        include("content/error.php");
                                    }
							?>
						</div>
						<div class='sidecontentbox'>
						<?php
							include("content/sidebar.php")
						?>
						</div>
				</div>
            </div>
            <div class='footer'>
				Copyright &copy; Technological Developments 2013
            </div>
        </div>
    </body>
</html>
