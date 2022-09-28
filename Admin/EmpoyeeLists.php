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
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css">
   </head>
   <body>
      <!-- header Page inlcuded here -->
      <?php include 'System/header.php'; ?>
      <!-- Sidebar page include here -->
      <?php include 'System/Sidebar.php'; ?>
       <!-- Main Page design start here -->
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Company Employees</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">Employee</li>
               </ol>
            </nav>
         </div>

         <section class="section dashboard">
         <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Employee Lists&nbsp;<a href="AddEmployee.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i></a></h5>
                       
                        <table id="example" class="display responsive nowrap" width="100%">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">EMP. ID</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Position</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>ABC123</td>
                                 <td>Sahil Mallick</td>
                                 <td>Developer</td>
                                 <td><button class="btn btn-success btn-sm">Enable</button></td>
                                 <td><a href="EmployeeProfile.php" class="btn btn-secondary btn-sm"><i class="bi bi-binoculars"></i></a>&nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>ABC123</td>
                                 <td>Sahil Mallick</td>
                                 <td>Developer</td>
                                 <td><button class="btn btn-success btn-sm">Enable</button></td>
                                 <td><a href="EmployeeProfile.php" class="btn btn-secondary btn-sm"><i class="bi bi-binoculars"></i></a>&nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>ABC123</td>
                                 <td>Sahil Mallick</td>
                                 <td>Developer</td>
                                 <td><button class="btn btn-success btn-sm">Enable</button></td>
                                 <td><a href="EmployeeProfile.php" class="btn btn-secondary btn-sm"><i class="bi bi-binoculars"></i></a>&nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                              </tr>
                              <tr>
                                 <th scope="row">4</th>
                                 <td>ABC123</td>
                                 <td>Sahil Mallick</td>
                                 <td>Developer</td>
                                 <td><button class="btn btn-success btn-sm">Enable</button></td>
                                 <td><a href="EmployeeProfile.php" class="btn btn-secondary btn-sm"><i class="bi bi-binoculars"></i></a>&nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                              </tr>
                              <tr>
                                 <th scope="row">5</th>
                                 <td>ABC123</td>
                                 <td>Sahil Mallick</td>
                                 <td>Developer</td>
                                 <td><button class="btn btn-success btn-sm">Enable</button></td>
                                 <td><a href="EmployeeProfile.php" class="btn btn-secondary btn-sm"><i class="bi bi-binoculars"></i></a>&nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                              </tr>
                              <tr>
                                 <th scope="row">6</th>
                                 <td>ABC123</td>
                                 <td>Sahil Mallick</td>
                                 <td>Developer</td>
                                 <td><button class="btn btn-success btn-sm">Enable</button></td>
                                 <td><a href="EmployeeProfile.php" class="btn btn-secondary btn-sm"><i class="bi bi-binoculars"></i></a>&nbsp;<button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                              </tr>
                           </tbody>
                        </table>
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
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
         <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>
         <script>
         $('#example').DataTable( {
         responsive: true
         } );
         </script>
               
   </body>
</html>
