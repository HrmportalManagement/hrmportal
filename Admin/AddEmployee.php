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
   <body oncontextmenu="return false;">
      <!-- header Page inlcuded here -->
      <?php include 'System/header.php'; ?>
      <!-- Sidebar page include here -->
      <?php include 'System/Sidebar.php'; ?>
       <!-- Main Page design start here -->
      <main id="main" class="main">
         <div class="pagetitle">
            <h1><strong><i>New Employee Entry Page</i></strong></h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Employee</li>
               </ol>
            </nav>
         </div>

         <section class="section dashboard">
               <form>
               <div class="card">
                     <div class="card-body">
                        <h5 class="card-title"><strong><i>Add Employee Details&nbsp;<a href="EmpoyeeLists.php" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-bar-right"></i></a></i></strong></h5>
                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                           <li class="nav-item flex-fill" role="presentation"> 
                              <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#personalsection" type="button" role="tab" aria-controls="home" aria-selected="true"><strong><i>Personal</i></strong>
                              </button>
                           </li>
                           <li class="nav-item flex-fill" role="presentation"> 
                              <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bankingsection" type="button" role="tab" aria-controls="profile" aria-selected="false"><strong><i>Bank</i></strong></button>
                           </li>
                        <li class="nav-item flex-fill" role="presentation">
                           <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Emergencycontacts" type="button" role="tab" aria-controls="contact" aria-selected="false"><strong><i>Emergency Contacts</i></strong></button>
                        </li>
                          <li class="nav-item flex-fill" role="presentation">
                           <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Family" type="button" role="tab" aria-controls="contact" aria-selected="false"><strong><i>Family</i></strong></button>
                        </li>
                         </li>
                          <li class="nav-item flex-fill" role="presentation">
                           <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Education" type="button" role="tab" aria-controls="contact" aria-selected="false"><strong><i>Education</i></strong></button>
                        </li>
                          <li class="nav-item flex-fill" role="presentation">
                           <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Experience" type="button" role="tab" aria-controls="contact" aria-selected="false"><strong><i>Experience</i></strong></button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                           <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#passwordsection" type="button" role="tab" aria-controls="contact" aria-selected="false"><strong><i>Password</i></strong></button>
                        </li>
                          <li class="nav-item flex-fill" role="presentation">
                           <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Documents" type="button" role="tab" aria-controls="contact" aria-selected="false"><strong><i>Documents</i></strong></button>
                        </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabjustifiedContent">
                           <div class="tab-pane fade show active" id="personalsection" role="tabpanel" aria-labelledby="home-tab"> 
                           <!-- Start code here -->
                           Personal Details Here
                           <!-- End Code here -->
                           </div>
                           <div class="tab-pane fade" id="bankingsection" role="tabpanel" aria-labelledby="profile-tab"> Bank Details Entry Here
                           </div>
                           <div class="tab-pane fade" id="Emergencycontacts" role="tabpanel" aria-labelledby="contact-tab"> 
                              Emergency contacts Entry Here
                           </div>
                          <div class="tab-pane fade" id="Education" role="tabpanel" aria-labelledby="contact-tab"> 
                              Education details Entry Here
                           </div>
                            <div class="tab-pane fade" id="Experience" role="tabpanel" aria-labelledby="contact-tab"> 
                              Experience details Entry Here
                           </div>
                             <div class="tab-pane fade" id="Family" role="tabpanel" aria-labelledby="contact-tab">
                              Family details Entry Here
                           </div>
                            <div class="tab-pane fade" id="passwordsection" role="tabpanel" aria-labelledby="contact-tab">
                              Password Here
                           </div>
                          <div class="tab-pane fade" id="Documents" role="tabpanel" aria-labelledby="contact-tab">
                              Documents Upload Here
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
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