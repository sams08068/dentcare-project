<?php
include('../includes/connect.php');
if(isset($_POST['login']))
{
   
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * from admin where email='$email' AND password='$password'";
  $results=$connect->query($sql);
  $final=$results->fetch_assoc();

  $_SESSION['email']=$final['email'];
  $_SESSION['password']=$final['password'];

  if($email=$final['email'] AND $password=$final['password']){
      header('location: ../admin/Dashboard.php');
  }else{
    header('location: ../admin/index.php');
  }

}
?>



<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>


<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3">
                        <div class="card-3d-wrap mx-auto">
                            <form action="" method="post">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Admin Login</h4>
                                            <div class="form-group"> <input type="email" name="email"
                                                    class="form-style" placeholder="Your Email" id="logemail"
                                                    autocomplete="none"> <i class="input-icon fa fa-at"></i> </div>
                                            <div class="form-group mt-2"> <input type="password" name="password"
                                                    class="form-style" placeholder="Your Password" id="logpass"
                                                    autocomplete="none"> <i class="input-icon fa fa-lock"></i> </div>  
                                                    <input type="submit" value="Login" name="login" class="btn mt-4" >
                                            <p class="mb-0 mt-4 text-center"> <a href="/admin/includes/signup.php" class="link">Sign Up Here</a> </p>
                                        </div>
                                    </div>
                                </div>
</div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>