<?php
	require_once("form/init.php");
	if(isset($_POST['name']))
	{
		//echo "Thanks, I will get back to you shortly, {$_POST['name']}.";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		$direct = "thankyou.php";
		sendMessage($name, $email, $msg, $direct);
	}
	else
	{
		//echo "Please fill out the form.";	
	}

?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Afilion - Contact Form">
    <title>Afilion | Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Questrial" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://use.fontawesome.com/c2a91e42b2.js"></script>
  </head>
  <body>

      <div class="row">
      <div class="large-12 columns">
        <h1 class="hide">Afilion | Contact</h1>
      </div>
    </div>

  <header class="expanded row align-justify">

    <div class="small-12 small-order-1 medium-2 medium-order-1 large-2 large-order-1 logoSec columns">
    <h2>Afilion</h2>
    </div>

    <div class="small-12 small-order-3 medium-12 medium-order-3 large-6 large-order-2 columns">
      <nav class="topNav menu-hover-lines">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="music.html">Music</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="extras.html">Extras</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

    </div>

    <div class="small-12 small-order-2 medium-10 medium-order-2 large-4 large-order-3 socialIcons columns">

      <a href="https://facebook.com/afilionmusic" target="_blank" class="fa fa-facebook" aria-hidden="true"></a>
      <a href="spotify:artist:59P7w1DGQOI4eYMUaWQv8h" target="_blank" class="fa fa-spotify" aria-hidden="true"></a>
      <a href="https://itunes.apple.com/us/artist/afilion/id475475322" target="_blank" class="fa fa-apple" aria-hidden="true"></a>
      <a href="https://instagram.com/afilion_" target="_blank" class="fa fa-instagram" aria-hidden="true"></a>
      <a href="https://twitter.com/afilionmusic" target="_blank" class="fa fa-twitter" aria-hidden="true"></a>
      <a href="https://afilion.bandcamp.com/" target="_blank" class="fa fa-bandcamp" aria-hidden="true"></a>
      <a href="https://soundcloud.com/afilionmusic" target="_blank" class="fa fa-soundcloud" aria-hidden="true"></a>

    </div>

  </header>
    
  <div class="pageTitle">
  <section class="row">
    <div class="small-12 column">
      <h2>Contact</h2>
    </div>
  </section>
</div>

    <section class="row">
    <div class="small-12 medium-6 column"> 
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="contactForm">
   	
        <input required name="name" id="name" placeholder="Your Name" type="text">
        <input required name="email" id="email" placeholder="Your Email" type="text">
        <textarea required id="msg" name="msg" placeholder="Message"></textarea>
        <input type="submit" id="send" value="Send">  
        
    </form>
	</div>
  </section>
  
  <footer class="expanded row">
      <div class="column align-self-bottom">
          <p>&copy 2017 Justin West Music/Afilion</p>
      </div>
  </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>