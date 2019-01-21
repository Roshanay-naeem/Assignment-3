
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Login System in PHP</title>
</head>
<body style="background:#CCC;">
    
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
		    <div role="banner" class="header sc-selection-disabled show fixed g-dark g-z-index-header">
        <div class="header__inner l-container l-fullwidth">
        <div class="header__left left">
        <div id="header__loading" class="sc-hidden">
          <img src="logo.png" width="150" height="65">
        </div>
		</div>
      </div>
    </div>
 
            <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">
 
                
                <?php 
 
                if(isset($_SESSION['U_D']))
                {
                    echo    '<form action="includes/logout.php" method="POST">
                                <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">Logout</button></li>
                            </form>';
                }
                else
                {
                    echo ' <li class="nav-item"><a href="logindesign.php" class="btn btn-outline-light">Login</a></li>
                    <li class="nav-item"><a href="signupdesign.php" class="btn btn-outline-light ml-3">Sign Up</a></li>';
                }
 
                ?>
                  
                </ul>
            </div>                
 
        </div>
    </nav>