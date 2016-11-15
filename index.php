<?php
//check if user come from post form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //Asign variables
$user = $_POST['username'];
  $mail = $_POST['email'] ;
  $telephone = $_POST['tell'];
  $msg = $_POST['message'];

  //creating array of error_get_last
  $formErrors =  array();
  if (strlen($user) < 3) {
  $formErrors [] = "username must be at least 3 characters";
  }
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact-Form</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>
  <body>
    <!--Start Form contact---->
    <div class="container">
      <div class="Errors">
        <?php
        if (isset($formErrors)) {
          foreach ($formErrors as $error) {
          echo $error . "<br>";
          }
        }

         ?>
      </div>
      <h1 class="text-center">contact us</h1>
      <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input class="form-control" type="text" name="username"  value=""  placeholder="type your name">
           <i class="fa fa-user fa-fw"></i>
        <input class="form-control" type="mail" name="email" value="" placeholder="please enter valid email">
        <i class="fa fa-envelope fa-fw"></i>
        <input class="form-control" type="telephone" name="tell" value="" placeholder="type your phone number">
        <i class="fa fa-phone fa-fw"></i>
        <textarea class="form-control" type="text" name="message" placeholder="type your message">
        </textarea>
        <i class="fa fa-paper-plane fa-fw send-icon"></i>
        <button class="btn btn-success " type="submit" name="send">send message</button>
      </form>
    </div>

    <!--End Form contact---->

    <script src="js/jquery-3.1.0.min.js"></script>
       <script src="js/contact.js"></script>
       <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
