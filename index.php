<?php
if (isset($_GET['page'])) {
  $page=$_GET['page'];
}
else {
  $page="about";
}


if(isset($_POST['submit'])){
    $to = "jeffers.n.88@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    mail('jeffers.n.88@gmail.com','Yaddah','Thank you yaddah yaddah yaddah');
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sage Journey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>

@font-face{
  font-family: InkFree;
  src: url(files/InkFree.woff);
}
body{
  background-color: #cdcdcd;
}

.jumbotron{
  background-color: rgb(253,253,253);
  margin-bottom: 0px;
  padding-bottom: 10px;
  padding-top: 10px;
}
.card-header{
    background-color: rgb(109,126,97);
  /* background-color: #f4a460; */
}
.nav-link{
  color: black;
}
h3{
  font-family: InkFree;
}
h2{
  font-family: InkFree;
}
div div h5{
  font-weight: bold;
  font-family: InkFree;
}
</style>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <img src="images/SageJourney.png" alt="Sage Journey">
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link <?php if($page=="about")echo"active"?>" href="index.php?page=about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page=="mission")echo"active"?>" href="index.php?page=mission">Mission Statement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page=="services")echo"active"?>" href="index.php?page=services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page=="team")echo"active"?>" href="index.php?page=team" >Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page=="contact")echo"active"?>" href="index.php?page=contact" >Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page=="careers")echo"active"?>" href="index.php?page=careers">Oppourtunities</a>
            </li>
          </ul>
        </div>

        <?php if($page=="about"):?>
<!--ABOUT /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="card-body">
            <h2 class="card-title font-weight-bold text-center">About</h2>
            <p class="card-text">	Sage Journey is a care company that prides itself on providing medicine from the heart.
                    At Sage Journey, all clients will receive a personally catered care plan that will respect culture, language, and the freedom to choose. Person
                    first is the stance at Sage Journey, and staff will always ensure clients are able to participate in their culture, language, and religion. Each
                    client will be treated with respect and dignity in all levels of care. </p>
            <p class="card-text">We recognize that everyone who comes to us is their own person, with their own histories, languages, and experiences; Sage Journey
              will not only respect each person for who they are, but work to foster individuals’ sense of self throughout the process of aging. Staff have extensive
              experience working with clients of all backgrounds and are well versed in dementia care and end of life care. We seek to ensure that everyone can age gracefully
              and with dignity. </p><br><br><br>
              <p class="card-text text-center"><a href="Vision Mission Values.pdf" download="Vission Mission Values">Download our Brochure</a></p>
          </div>


        <?php elseif ($page=="mission"):?>
<!--MISSION /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="card-body">
            <h2 class="card-title font-weight-bold text-center">Mission Statement</h2>
            <h3 class="card-text text-center">Vision</h3>
            <p class="card-text">Sage Journey will provide inclusive care to all seniors in need (regardless of race, religion, or creed) by working with caregivers and staff
              to create and implement individualized care plans. We believe in the individual’s right to speak freely in their preferred language, respect for treaty land, and medicine
              from the heart.</p>
            <h3 class="card-text text-center">Mission</h3>
            <p class="card-text">Sage Journey exists to provide all levels of care for seniors in need. We will provide personal, emotional, and spiritual supports based on individualized
              care plans that cater to the clients’ specific needs and cultural background. Sage Journey will work with clients to ensure their preferences are catered to, whether
              language, spirituality, or culture; we are here for each client as an individual. </p>
            <h3 class="card-text text-center">Values</h3>
            <p class="card-text">Sage Journey operates by the following principles:</p><br>
            <h5 class="card-text ">Dignity</h5>
            <p class="card-text">Ensuring all clients are respected and cared for while preserving their dignity and encouraging active choice</p><br>
            <h5 class="card-text">Inclusiveness</h5>
            <p class="card-text">Working with clients of diverse backgrounds and providing personalized care while supporting clients’ cultural needs</p><br>
            <h5 class="card-text">Integrity</h5>
            <p class="card-text">Preserving each and every clients’ integrity and right to choose through personalized care </p><br>
          </div>

        <?php elseif($page=="services"):?>
<!--Services /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="card-body">
            <h3 class="card-title font-weight-bold text-center">Services</h3>
            <p class="card-text">There are no services at this time.</p>
          </div>

        <?php elseif($page=="team"):?>
<!--STAFF /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="card-body">
            <h3 class="card-title font-weight-bold text-center">Our Team</h3>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card">
                  <img src="images/80220021.png" class="card-img-top" alt="Vancouver Island">
                  <div class="card-body">
                    <h5 class="card-title">Bev</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="images/80230032.png" class="card-img-top" alt="also Vancouver Island">
                  <div class="card-body">
                    <h5 class="card-title">Sam</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>

              <!-- <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div> -->

            </div>
          </div>

        <?php elseif($page=="contact"):?>
<!--contact /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="card-body">
            <h3 class="card-title font-weight-bold text-center">Contact Us</h3><br>
<!--
            <form action="" method="post">
            First Name: <input type="text" name="first_name"><br>
            Last Name: <input type="text" name="last_name"><br>
            Email: <input type="text" name="email"><br>
            Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
            <input type="submit" name="submit" value="Submit">
            </form> -->
              <h5 class=" text-center">Please email Bev at example@example.ca</h5>
          </div>


        <?php elseif($page=="careers"):?>
<!--CAREERS /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="card-body">
            <h3 class="card-title font-weight-bold text-center">Careers</h3>
            <p class="card-text">There are no oppourtunities at this time.</p>
          </div>

        <?php else: header("Location: index.php") ?>
        <?php endif ?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
