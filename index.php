<?php
    session_start();
    error_reporting(0);
    include('Systemconnection/Databaseconnection.php');
    if(isset($_POST['signin']))
    {
        $uname=$_POST['username'];
        $password=md5($_POST['password']);
        $sql ="SELECT EmailId,Password,Status,id FROM tblemployees WHERE EmailId=:uname and Password=:password";
        $query= $dbh -> prepare($sql);
        $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
        $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query-> execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);

        if($query->rowCount() > 0)
        {
            foreach ($results as $result) {
                $status=$result->Status;
                $_SESSION['eid']=$result->id;
        }
            if($status==0)
        {
            $msg="In-Active Account. Please contact your administrator!";
        } else  {
            $_SESSION['emplogin']=$_POST['username'];
            echo "<script type='text/javascript'> document.location = 'Employee/Dashboard.php'; </script>";
        }
            }   else  {
                echo "<script>alert('Sorry, Invalid Details.');</script>";
                }

    }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>HRM</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/css/quill.snow.css" rel="stylesheet">
      <link href="assets/css/quill.bubble.css" rel="stylesheet">
      <link href="assets/css/remixicon.css" rel="stylesheet">
      <link href="assets/css/simple-datatables.css" rel="stylesheet">
      <link href="Assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <main>
         <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4"> <a href="index.html" class="logo d-flex align-items-center w-auto"> <img src="Assets/img/logo.png" alt=""><span class="d-none d-lg-block">LOGIN PORTAL</span> </a></div>
                        <div class="card mb-3">
                           <div class="card-body">
                              <div class="pt-4 pb-2">
                                 <center><?php if($msg){?><div class="errorWrap"><strong>Error</strong> : <?php echo htmlentities($msg); ?> </div><?php }?></center>
                                 <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                 <p class="text-center small">Enter your username & password to login</p>
                              </div>
                              <form class="row g-3 needs-validation" method="POST" name="signin">
                                 <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                       <input type="email" name="username" class="form-control" id="username" required>
                                       <div class="invalid-feedback">Please enter valid username.</div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label> 
                                    <input type="password" name="password" class="form-control" id="password" required>
                                    <div class="invalid-feedback">Please enter valid password!</div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-check"> <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe"> <label class="form-check-label" for="rememberMe">Remember me</label></div>
                                 </div>
                                 <div class="col-12"> <button name="signin" class="btn btn-primary w-100" type="submit" id="form_submit">Login</button></div>
                                 <div class="col-12">
                                    <p class="small mb-0">Don't have account? <a href="pages-register.html">Sign Up Here</a></p>
                                 </div>
                                 <div class="col-12">
                                    <p class="small mb-0">Are You Admin? <a href="Admin/index.php">Click Here</a></p>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="credits"> Created by <a href="https://freeetemplates.com/">Sahil Mallick</a></div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </main>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
      <script src="Assets/js/apexcharts.min.js"></script>
      <script src="Assets/js/bootstrap.bundle.min.js"></script>
      <script src="Assets/js/chart.min.js"></script>
      <script src="Assets/js/echarts.min.js"></script>
      <script src="Assets/js/quill.min.js"></script>
      <script src="Assets/js/simple-datatables.js"></script>
      <script src="Assets/js/tinymce.min.js"></script>
      <script src="Assets/js/validate.js"></script>
      <script src="Assets/js/main.js"></script> 
   </body>
</html>