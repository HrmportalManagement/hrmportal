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
            <h1>Sub Company</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Sub Company</li>
               </ol>
            </nav>
         </div>
         <!-- End Page title Design here -->
        <section class="section dashboard">

            <!-- Depertment Table Design Here -->
               <div class="row">
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title"><strong><i>Sub Company Details</i></strong></h5>
                      <form class="row g-3">
                           <div class="col-12"> 
                              <label for="inputNanme4" class="form-label"><strong>SubCompany ID</strong></label>
                               <input type="text" class="form-control" id="inputNanme4">
                            </div>
                           <div class="col-12"> 
                              <label for="inputEmail4" class="form-label"><strong>Sub Company Name</strong></label> 
                              <input type="email" class="form-control" id="inputEmail4">
                           </div>
                           <div class="col-12"> 
                              <label for="inputPassword4" class="form-label"><strong>Sub Company Short Form</strong></label> 
                              <input type="password" class="form-control" id="inputPassword4">
                           </div>
                           <div class="text-center"> <button type="submit" class="btn btn-success">Save</button> 
                              <button type="reset" class="btn btn-secondary">Reset</button></div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title"><strong><i>Sub Company Details</i></strong></h5>
                       <table class="table datatable">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Short Form</th>
                                 <th scope="col">Code</th>
                                 <th scope="col">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Brandon Jacob</td>
                                 <td>Designer</td>
                                 <td>28</td>
                                 <td><div class="text-center"> <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button> <button type="reset" class="btn btn-secondary"><i class="bi bi-recycle"></i></button></div></td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>Bridie Kessler</td>
                                 <td>Developer</td>
                                 <td>35</td>
                                 <td><div class="text-center"> <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button> <button type="reset" class="btn btn-secondary"><i class="bi bi-recycle"></i></button></div></td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>Ashleigh Langosh</td>
                                 <td>Finance</td>
                                 <td>45</td>
                                 <td><div class="text-center"> <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button> <button type="reset" class="btn btn-secondary"><i class="bi bi-recycle"></i></button></div></td>
                              </tr>
                              <tr>
                                 <th scope="row">4</th>
                                 <td>Angus Grady</td>
                                 <td>HR</td>
                                 <td>34</td>
                                 <td><div class="text-center"> <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button> <button type="reset" class="btn btn-secondary"><i class="bi bi-recycle"></i></button></div></td>
                              </tr>
                              <tr>
                                 <th scope="row">5</th>
                                 <td>Raheem Lehner</td>
                                 <td>Dynamic Division Officer</td>
                                 <td>47</td>
                                 <td><div class="text-center"> <button type="submit" class="btn btn-warning"><i class="bi bi-pen"></i></button> <button type="reset" class="btn btn-secondary"><i class="bi bi-recycle"></i></button></div></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Depert Table Design End Here -->
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