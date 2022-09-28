<!-- Insert Depertment database -->
<?php
    session_start();
    error_reporting(0);
    include('../Systemconnection/Databaseconnection.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {
    if(isset($_POST['add'])){

    $branchname=$_POST['branchname'];
    $branchaddress=$_POST['branchaddress'];
    $branchcode=$_POST['branchcode'];   
    $sql="INSERT INTO tblbranchs(BranchName,BranchCode,BranchAddress) VALUES(:branchname,:branchcode,:branchaddress)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':branchname',$branchname,PDO::PARAM_STR);
    $query->bindParam(':branchcode',$branchcode,PDO::PARAM_STR);
    $query->bindParam(':branchaddress',$branchaddress,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId){
      echo "<script>alert('Branch Added Successfully');</script>";
      echo "<script type='text/javascript'> document.location = 'Companybranch.php'; </script>";
    } else {
    $error="Something went wrong. Please try again";
    }
}
?>
<!-- End code here -->

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
         <div class="pagetitle">
            <h1>Company Branch</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">Branch</li>
               </ol>
            </nav>
         </div>

         <section class="section dashboard">

            <!-- Branch Table Design Here -->
               <div class="row">
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Branch Details</h5>
                      <form class="row g-3" method="POST">
                           <div class="col-12"> 
                           <label for="inputNanme4" class="form-label"><strong>Branch ID</strong></label>
                           <input class="form-control" name="branchcode" type="text" autocomplete="off" required id="example-email-input">
                            </div>
                           <div class="col-12"> 
                           <label for="inputEmail4" class="form-label"><strong>Branch Name</strong></label> 
                           <input name="branchname" type="text" required id="example-text-input" class="form-control">
                           </div>
                           <div class="col-12"> 
                           <label for="inputPassword4" class="form-label"><strong>Branch Address</strong></label> 
                           <textarea class="form-control" style="height: 100px" name="branchaddress" type="text" autocomplete="off" required id="example-text-input"></textarea>
                           </div>
                           <div class="text-center"> <button class="btn btn-primary" name="add" id="add" type="submit">Save</button> 
                              <button type="reset" class="btn btn-secondary">Reset</button></div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Branch Lists</h5>
                       <table class="table datatable">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                  <th scope="col">Branch ID</th>
                                 <th scope="col">Branch Name</th>
                                 <th scope="col">Branch Address</th>
                                 <th scope="col">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                               <?php $sql = "SELECT * from tblbranchs";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {               ?>  
                              <tr>
                                 <th scope="row"><?php echo htmlentities($cnt);?></th>
                                 <td><?php echo htmlentities($result->BranchCode);?></td>
                                 <td><?php echo htmlentities($result->BranchName);?></td>
                                <td><?php echo htmlentities($result->BranchAddress);?></td>
                                
                                 <td><div class="text-center"> <button type="submit" class="btn btn-primary"><i class="bi bi-pen"></i></button> <button class="btn btn-danger"><i class="bi bi-trash"></i></button></div></td>
                              </tr>
                              <?php $cnt++;} }?>
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
<?php } ?>