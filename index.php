<?php 
  session_start(); 


  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicareHelpDesk</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
</head>
<body>
<?php if (isset($_SESSION['success'])) : ?>
    <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
          <?php endif ?>
          
    
        <nav id="navbar">
            <div id="logo">
                <h3>Medicare <br>Helpdesk</h3>
                <img src="projectlogo3.jpg" alt="Mecicare.com">
            </div>
            <ul>
              
               
                

                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
       <li class="menu"><a href="index.php">Home</a></li>
       <li class="menu"><a href="about.php">About</a></li>
                <li class="menu"><a href="contact.php">Contact</a></li>
                <li class="menu"><a href="services.php">services</a></li>
                <li class="menu"><a href="profile.php">profile</a></li>
<?php }else{ ?>
    <li class="menu"><a href="index.php">Home</a></li>
       <li class="menu"><a href="about.php">About</a></li>
                <li class="menu"><a href="contact.php">Contact</a></li>
                <li class="menu"><a href="services.php">services</a></li>
                <li class="menu"><a href="profile.php">profile</a></li>
     <li class="menu"><a href="login.php">Login</a></li>
                <li class="menu"><a href="registration.php">Registration</a></li>
<?php } ?>




                <?php  if (isset($_SESSION['username'])) : ?>
    	        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	         <?php endif ?>
                </a></li>
                <li class="menu">
                <?php  if (isset($_SESSION['username'])) : ?>
    	        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                <?php endif ?></li>
            </ul>
        </nav>
        <section id="home">
            <h2 class="head-2">Welcome To our Website</h2>
            <p class="p1">Donate your <span style="color: red;font-weight: bold;">BLOOD</span> for a reason.Let the Reason to be <span style="color:green;font-weight: bold;">LIFE.</span></p>
            <P class="p2">"Be a <span style="color: rgb(15, 63, 196);font-weight: bold;">BLOOD DONOR</span>, be a <span style="color:rgb(64, 8, 97);font-weight: bold;">HERO.The real one..."</span></P>
            
        </section>

        <div class="bline">

        </div>


        <section id="login">
            <div class="all-sec-info">
               
                <p>Save your life, <br> to save someone's life...</p>
            </div>
            <div class="login-row">
                <div class="column-left">
                    <form method="get" action="registration.php">
                        <button type="submit">Donate BLOOD</button>
                    </form>
                </div>
                <div class="column-right">
                    <form method="get" action="services.php">
                        <button type="submit">Find BLOOD</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="services container">
            <h2 class="head-3">Our Services</h2>
            <h1 class="h-primary center">What we provide?</h1>
            <div id="services">
                <div class="box">
                    <img src="medicalservice1.png" alt="">
                    <h2 class="h-secondary center">Blood Donation</h2>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eius sit maiores laborum magni consequuntur repellat voluptatum asperiores quisquam facilis fuga sunt porro quis pariatur, soluta ducimus voluptatem nemo vitae! </p>
                </div>
                <div class="box">
                    <img src="medicalservice1.png" alt="">
                    <h2 class="h-secondary center">Blood Donation</h2>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eius sit maiores laborum magni consequuntur repellat voluptatum asperiores quisquam facilis fuga sunt porro quis pariatur, soluta ducimus voluptatem nemo vitae! </p>
                </div>
                <div class="box">
                    <img src="medicalservice1.png" alt="">
                    <h2 class="h-secondary center">Blood Donation</h2>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eius sit maiores laborum magni consequuntur repellat voluptatum asperiores quisquam facilis fuga sunt porro quis pariatur, soluta ducimus voluptatem nemo vitae! </p>
                </div>
                <div class="box">
                    <img src="medicalservice1.png" alt="">
                    <h2 class="h-secondary center">Blood Donation</h2>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eius sit maiores laborum magni consequuntur repellat voluptatum asperiores quisquam facilis fuga sunt porro quis pariatur, soluta ducimus voluptatem nemo vitae! </p>
                </div>
            </div>

        </section>

        <section id="contact">
            <h1  class="h-secondary center"> Contact Us </h1>
            <div id="contactbox">
                <form action="feedback.php" method="POST">
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input type="text" name="name"id="name" placeholder="Enter your name">

                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email"id="email" placeholder="Enter your e-mail">

                    </div>
                    <div class="form-group">
                        <label for="phone">Phone no.:</label>
                        <input type="phone" name="phone"id="phone" placeholder="Enter your Phone no.">

                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                       <textarea name="message" id="message" cols="10" rows="5"></textarea>
                    </div>
                     
      <div class="form-footer">
        
        <button name="feed_back" type="submit" class="btn">Send Message</button>
      </div>
                </form>
            </div>

        </section>
        
        <footer class='center'>
            Copyright &copy; www.MedicareHelpdesk.com; All rights Reserved!
        </footer>
    
    
</body>
</html>