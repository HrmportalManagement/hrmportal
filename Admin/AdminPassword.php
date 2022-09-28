
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>HRM</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="../assets/img/favicon.png" rel="icon">
      <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
      <link href="../assets/css/boxicons.min.css" rel="stylesheet">
      <link href="../assets/css/quill.snow.css" rel="stylesheet">
      <link href="../assets/css/quill.bubble.css" rel="stylesheet">
      <link href="../assets/css/remixicon.css" rel="stylesheet">
      <link href="../assets/css/simple-datatables.css" rel="stylesheet">
      <link href="../assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- header Page inlcuded here -->
      <?php include 'System/header.php'; ?>
      <!-- Sidebar page include here -->
      <?php include 'System/Sidebar.php'; ?>
       <!-- Main Page design start here -->
      <main id="main" class="main">
        <!-- Start page deisgn here -->
         <div class="pagetitle">
            <h1>Password</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">Change Pasword</li>
               </ol>
            </nav>
         </div>
         <!-- End Page title Design here -->
        <section class="section dashboard">
            <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                           <div class="card-body">
                              <div class="pt-4 pb-2">
                                 <h5 class="card-title text-center pb-0 fs-4"><i>Change Password</i></h5>
                              </div>
                              <form class="row g-3 needs-validation">
                                 <div class="col-12">
                                    <label for="yourUsername" class="form-label"><b><i>Old Password</i></b></label>
                                    <div class="input-group has-validation">
                                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                                       <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <label for="yourPassword" class="form-label"><b><i>New Password</i></b></label> 
                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                 </div>
                                 <div class="col-12">
                                    <label for="yourPassword" class="form-label"><b><i>Re-Enter New Password</i></b></label> <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                 </div>
                                 <div class="col-12"> 
                                   <center><button class="btn btn-danger" type="submit">Change</button></div></center>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
         </section>
      </main>
       <!-- Main Page design end here -->
      <?php include 'System/footer.php'; ?>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="../assets/js/apexcharts.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/chart.min.js"></script>
        <script src="../assets/js/echarts.min.js"></script>
        <script src="../assets/js/quill.min.js"></script>
        <script src="../assets/js/simple-datatables.js"></script>
        <script src="../assets/js/tinymce.min.js"></script>
        <script src="../assets/js/validate.js"></script>
        <script src="../assets/js/main.js"></script> 
             
   </body>
</html>