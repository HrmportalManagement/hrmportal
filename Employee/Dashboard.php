<?php
    session_start();
    error_reporting(0);
    include('../Systemconnection/Databaseconnection.php');
    if(strlen($_SESSION['emplogin'])==0){   
        header('location:../index.php');
    } else {
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
      <?php include 'System/header.php'; ?>
      <?php include 'System/Sidebar.php'; ?>
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </nav>
         </div>
         <section class="section dashboard">
            <div class="row">
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card sales-card">
                           <div class="card-body">
                              <h5 class="card-title">Depertment</h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-box"></i></div>
                                 <div class="ps-3">
                                    <h6><strong><i>10</i></strong></h6>
                                    <center><p><i><b>Employee Depertment</b></i></p></center>
                                    <a href="Depertment.php"><i>View All</i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card revenue-card">
                           <div class="card-body">
                              <h5 class="card-title">Designation</span></h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-box"></i></div>
                                 <div class="ps-3">
                                    <h6><strong><i>5</i></strong></h6>
                                    <center><p><i><b>Employee Designation</b></i></p></center>
                                    <a href="Designation.php"><i>View All</i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                           <div class="card-body">
                              <h5 class="card-title">Company Branchs</h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-box"></i></div>
                                 <div class="ps-3">
                                    <h6><strong><i>10</i></strong></h6>
                                    <center><p><i><b>Company Branchs</b></i></p></center>
                                    <a href="Companybranch.php"><i>View All</i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                        <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                           <div class="card-body">
                              <h5 class="card-title">Total Assets</h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-box"></i></div>
                                 <div class="ps-3">
                                    <h6><strong><i>20</i></strong></h6>
                                    <center><p><i><b>Company Assets</b></i></p></center>
                                    <a href="Assets.php"><i>View All</i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                           <div class="card-body">
                              <h5 class="card-title">Notice Board</h5>
                              <table class="table table-borderless datatable">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Customer</th>
                                       <th scope="col">Product</th>
                                       <th scope="col">Price</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row"><a href="#">#2457</a></th>
                                       <td>Brandon Jacob</td>
                                       <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                       <td>$64</td>
                                       <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                       <th scope="row"><a href="#">#2147</a></th>
                                       <td>Bridie Kessler</td>
                                       <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                                       <td>$47</td>
                                       <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                       <th scope="row"><a href="#">#2049</a></th>
                                       <td>Ashleigh Langosh</td>
                                       <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                                       <td>$147</td>
                                       <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                       <th scope="row"><a href="#">#2644</a></th>
                                       <td>Angus Grady</td>
                                       <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                                       <td>$67</td>
                                       <td><span class="badge bg-danger">Rejected</span></td>
                                    </tr>
                                    <tr>
                                       <th scope="row"><a href="#">#2644</a></th>
                                       <td>Raheem Lehner</td>
                                       <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                                       <td>$165</td>
                                       <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Daily Activity &nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-plus"></i></button></h5>
                        <div class="overflow-hidden">
                        <div class="activity">
                           <div class="activity-item d-flex">
                              <div class="activite-label">Date: 01-01-2022</div>
                              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                              <div class="activity-content"> Total Task 20 for today</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">Date: 02-01-2022</div>
                              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                              <div class="activity-content"> Total Task 15 for today</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">Date: 03-01-2022</div>
                              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                              <div class="activity-content"> Total Task 15 for today</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">Date: 04-01-2022</div>
                              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                              <div class="activity-content"> Total Task 30 for today</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">Date: 05-01-2022</div>
                              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                              <div class="activity-content"> Total Task 36 for today</div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  
                  
                  <div class="card">
                     <div class="card-body pb-0">
                        <h5 class="card-title">Blogs &amp; Updates</h5>
                        <div class="news">
                           <div class="post-item clearfix">
                              <img src="../assets/img/news-1.jpg" alt="">
                              <h4><a href="#">Sample Blog</a></h4>
                              <p>This is the Sample blog for testing purposes...</p>
                           </div>
                           <div class="post-item clearfix">
                              <img src="../assets/img/news-1.jpg" alt="">
                              <h4><a href="#">Sample Blog</a></h4>
                              <p>This is the Sample blog for testing purposes...</p>
                           </div>
                           <div class="post-item clearfix">
                              <img src="../assets/img/news-1.jpg" alt="">
                              <h4><a href="#">Sample Blog</a></h4>
                              <p>This is the Sample blog for testing purposes...</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
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
<?php } ?>