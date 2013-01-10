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
                         <li class="active"><a href="?file=home">Home</a></li>
                         <li><a href="?file=aboutus">About Us</a></li>
                         <li><a href="?file=products">Products</a></li>
                         <li><a href="?file=projects">Projects</a></li>
                         <li><a href="?file=contactus">Contact Us</a></li>
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
							Testing
						</div>
				</div>
            </div>
            <div class='footer'>
				Copyright &copy; Technological Developments 2013
            </div>
        </div>
    </body>
</html>
