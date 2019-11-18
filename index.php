<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);

	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/SMTP.php";
	include_once "PHPMailer/Exception.php";


	if (isset($_POST['submit'])) {
        
        $honeypot = trim($_POST["email"]);
        
        if(!empty($honeypot)) {
            exit;
        }
        
		$name = $_POST['name'];
		$email = $_POST['email_real'];

		$mail = new PHPMailer();


		$mail->IsSMTP();
		$mail->SMTPDebug = 0;  //1- errors/message 2- messages only
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = '';
		$mail->Password = '';
		$mail->SMTPSecure = 'tls'; 
		$mail->Port = 587;

		$mail->Subject = "Contact request from Marshallwoodmansee.com";
		$mail->isHTML(true);
    $mail->addAddress('');
    $mail->addAddress('');
	
		$mail->setFrom($email);
		$mail->Body = 'Name: ' . $name . 
		"<br><br>" . 'Email: ' . $email;

		if ($mail->send())
			$msg = "Thank you for signing up!";

		else 
			$msg = "Please enter all contact fields below and try again!";

	}
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/woodfav.png"/>
  <meta property="og:image" content="images/ogbutterfly.png"> 
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Marshall Woodmansee For SJ City Council District 6</title>

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Woodmansee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Meet Marshall</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#issues">Issues</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link js-scroll-trigger" href="#contact">Donate</a> -->
            <a href="https://secure.actblue.com/donate/marshmoney#"><button type="button" class="btn btn-primary">Donate</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <!-- <h1>Welcome to Scrolling Nav</h1>
      <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p> -->
      <img id="bigLogo" src="images/horizontal logo.png">
      <br>
      <br>
      

      <?php if ($msg != "") echo "<div class='txt-center' style='color:#25673F; font-size: 17px;'>". "$msg<br><br>" ."</div>"; ?>		

      <form class="signup" method="post" action="index.php">
        <h5>Sign up and join us in the fight for real change!</h5>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Email address</label> -->
          <input type="text" class="form-control" name="name" placeholder="Name">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div>
            <input name="email" type="text" style="display: none;">
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputPassword1">Password</label> -->
          <input type="text" class="form-control" name="email_real" placeholder="Email address">
        </div>
        <!-- <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <input class="btn btn-primary" type="submit" name="submit" value="Submit!">
      
      </form>
      <a href="https://secure.actblue.com/donate/marshmoney#"><button type="button" class="btn btn-success donate">Please Donate!</button></a>

      <br>
      <!-- <br> -->
      <div class="flex-w">
          <a href="https://www.facebook.com/marshallwoodmanseeofficial/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/marshallwoodmanseeofficial/?hl=en" target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
         
          <a href="https://twitter.com/m_w_official" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
          <a href="mailto: Marshallwoodmanseeofficial@gmail.com" target="_blank" class="btn-social btn-email"><i class="fa fa-envelope"></i></a>
      </div>
      
    </div>
    
  </header>

  <section id="about">
    <div class="container">
      <img class="bigimg" src="images/meetmarsh.jpg">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Meet Marshall</h2>
          <p class="lead">Marshall has been actively engaged in his community for over a decade. He has taught environmental education classes, lead in the advocacy for a lifestyle without fossil fuels, worked to develop social movements among young people, interned for the CA state assembly, and actively participated in city government. Now, Marshall’s ready to take the next step in leading his community to a sustainable future that improves the way we live, get around, and consume.</p>
          <p class="lead">The following are fundamental values that not only define Marshall but our movement overall:</p>
          <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Authenticity &#x25BC;
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                      In order to be successful in our mission to create a better world, we have to tell the truth about our situation. The prosperity of our generations depend on the decisions we make in these next few years, giving us all the more reason to create climate action now. It is time that we remove special interests, deception, and inaction from politics and focus on making a sustainable future for our communities.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Resiliency &#x25BC;
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                      Disaster has already affected the people of San Jose. Floods have destroyed our homes and power outages have posed a threat to many people’s lives. We must act now to ensure every community is prepared for when disaster inevitably strikes. Access to local fresh produce, public and alternative transportation, and resources to both prepare and cope with disaster are crucial steps San Jose must take to protect our neighborhoods. 
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Compassion &#x25BC;
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                      Change comes from care for your fellow human, for your planet, and for the generations to come. Both consumers and corporations must accept and welcome new practices and ways of life that support a rapid decrease in San Jose’s carbon emissions. Marshall has adopted a lifestyle independent from fossil fuels and will take the steps necessary to make that lifestyle viable for all people. 
                  </div>
                </div>
              </div>
            </div>
          <!-- <h3>Values</h3> -->
          <!-- <ul>
          
            <li>Clickable nav links that smooth scroll to page sections</li>
            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
          </ul> -->
        </div>
      </div>
    </div>
  </section>

  <section id="issues" class="bg-light">
    <div class="container">
      <img class="bigimg" src="images/air_crop.jpg">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Issues</h2>
          <p class="lead">These are the core issues I will look to address and change going forward:</p>
          <!-- <ul class="list-group">
              <li class="list-group-item">Dapibus ac facilisis in</li>
            
              
              <li class="list-group-item list-group-item-primary">Affordable and sustainable housing for all income levels</li>
              <li class="list-group-item list-group-item-secondary">Engineering safe streets</li>
              <li class="list-group-item list-group-item-success">Increasing public transit quality and accessibility</li>
              <li class="list-group-item list-group-item-danger">Protecting and improving our public school system</li>
              <li class="list-group-item list-group-item-warning">Improved communication between government and citizens</li>
              <li class="list-group-item list-group-item-info">Building strong and resilient communities</li>
              <li class="list-group-item list-group-item-light">A simple light list group item</li>
              <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
            </ul> -->
          <ul class="list-group">
            <li class="list-group-item list-group-item-success">Affordable and sustainable housing for all income levels</li>
            <li class="list-group-item list-group-item-success">Engineering safe streets</li>
            <li class="list-group-item list-group-item-success">Increasing public transit quality and accessibility</li>
            <li class="list-group-item list-group-item-success">Protecting and improving our public school system </li>
            <li class="list-group-item list-group-item-success">Improved communication between government and citizens</li>
            <li class="list-group-item list-group-item-success" >Building strong and resilient communities</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Events</h2>
          <!-- <div style="position: absolute;height: 25px;width: 100%;background: white;margin-top: 476px;"></div>   -->
          <iframe id="cal" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%230B8043&amp;ctz=America%2FLos_Angeles&amp;src=bWFyc2hhbGx3b29kbWFuc2Vlb2ZmaWNpYWxAZ21haWwuY29t&amp;color=%2322AA99&amp;showTabs=0&amp;showPrint=0&amp;showCalendars=0&amp;showTitle=0" style="border-width:0" width="730" height="500" frameborder="0" scrolling="no"></iframe>
          
          <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p> -->
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact</h2>
            <p class="lead">Please contact us anytime via email for information on the campaign, events, or anything on your mind: <a href="mailto: Marshallwoodmanseeofficial@gmail.com">marshallwoodmanseeofficial@gmail.com</a></p>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
              <h3>Social Media</h3>
              <div class="list-group">
                <a href="https://www.facebook.com/marshallwoodmanseeofficial/" class="list-group-item list-group-item-action list-group-item-primary">Facebook</a>
                <a href="https://www.instagram.com/marshallwoodmanseeofficial/?hl=en" class="list-group-item list-group-item-action list-group-item-success">Instagram</a>
                <a href="https://twitter.com/m_w_official" class="list-group-item list-group-item-action list-group-item-warning">Twitter</a>
              </div>
              <!-- <div id="socialmedia">
                  <a href="https://www.facebook.com/marshallwoodmanseeofficial/">Facebook</a>
                  <a href="https://www.instagram.com/marshallwoodmanseeofficial/?hl=en">Instagram</a>
                  <a href="https://twitter.com/m_w_official">Twitter</a>
              </div> -->
              
            </div>
          </div>
      </div>
    </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; Woodmansee 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>