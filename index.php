<?php
//check if user come from post form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //Asign variables
$user = filter_var( $_POST['username'], FILTER_SANITIZE_STRING);
  $mail = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
  $telephone = filter_var($_POST['tell'], FILTER_SANITIZE_NUMBER_INT);
  $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
  /*echo $user . "<br>";
  echo $mail . "<br>";
  echo $telephone . "<br>";
  echo $msg ;
  */

  //creating array of error_get_last
  $formErrors =  array();
  if (strlen($user) < 3) {
  $formErrors [] = "username must be at least <strong>3</strong> characters";
  }
  if (strlen($msg) < 13) {
  $formErrors [] = "user message  must be at least <strong>13</strong> characters";
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
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// ->
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
  </head>
  <body>
    <!--Start Form contact---->
    <div class="container">
      <h1 class="text-center">contact us</h1>
      <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

          <?php
          if (!empty($formErrors)) { ?>
            <div class="alert alert-danger alert-dismissible" role="start ">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php
                foreach ($formErrors as $error) {
                echo $error . "<br>";
                }
                ?>
             </div>
    <?php  }   ?>
<div class="form-group">
  <input class="form-control username" type="text" name="username"  value="<?php if(isset($user)){
    echo $user;
  } ?>"  placeholder="type your name">
     <i class="fa fa-user fa-fw"></i>
     <span class="disclaimer">*</span>
     <div class="alert alert-danger costom-alert">
       username must be at least <strong>3</strong> characters
     </div>
</div>
<div class="form-group">
  <input class="form-control" type="mail" name="email" value="<?php if(isset($mail)){
    echo $mail;
  } ?>" placeholder="please enter valid email">
  <i class="fa fa-envelope fa-fw"></i>
  <span class="disclaimer">*</span>
  <div class="alert alert-danger costom-alert">
    E-mail request must not be  <strong>empty</strong>
  </div>
</div>
  <input class="form-control" type="telephone" name="tell" value="<?php if(isset($tell)){
    echo $tell;
  } ?>" placeholder="type your phone number">
  <i class="fa fa-phone fa-fw"></i>
  <div class="alert alert-danger costom-alert">
    Telephone request must not be  <strong>empty</strong>
  </div>
<div class="form-group">
  <textarea class="form-control" type="text" name="message" value="<?php if(isset($user)){
    echo $user;
  } ?>" placeholder="type your message">
  </textarea>
  <span class="disclaimer">*</span>
  <div class="alert alert-danger costom-alert">
    Text  request must not be  <strong>empty</strong>
  </div>
</div>
      <div class="form-group">
        <button class="btn btn-success " type="submit" name="send">send message</button>
        <i class="fa fa-paper-plane fa-fw send-icon"></i>
      </div>
      </form>


    <!--End Form contact---->

    <script src="js/jquery-3.1.0.min.js"></script>
       <script src="js/contact.js"></script>
       <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
