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
   <body oncontextmenu="return true;">
      <!-- header Page inlcuded here -->
      <?php include 'System/header.php'; ?>
      <!-- Sidebar page include here -->
      <?php include 'System/Sidebar.php'; ?>
       <!-- Main Page design start here -->
      <main id="main" class="main">
         <div class="pagetitle">
            <h1><strong><i>Profile</i></strong></h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Profile</li>
               </ol>
            </nav>
         </div>
         <section class="section profile">
            <div class="row">
               <div class="col-xl-4">
                  <div class="card">
                     <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2>Sahil Mallick</h2>
                        <h3>Web Developer</h3>
                        <div class="social-links mt-2"><a href="#" class="twitter"><i class="bi bi-twitter"></i>
                        </a><a href="#" class="facebook"><i class="bi bi-facebook"></i></a> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a></div>
                     </div>
                  </div><br>
                  <div>
                       <div class="card">
                     <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                       <center><h2><strong><i class="bi bi-person-workspace">&nbsp;Your Skils</i>&nbsp;<button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Addskills"><i class="bi bi-plus"></i></button></strong></h2></center>
                        <!-- Start Skilss Add Code -->
                        <table class="table table-hover-justify">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Skills</th>
                                          <th>Expertise(%)</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>PHP</td>
                                          <td>90%</td>
                                          <td><button class="bi bi-trash"></button></td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>JAVA</td>
                                          <td>30%</td>
                                           <td><button class="bi bi-trash"></button></td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>PYTHON</td>
                                          <td>20%</td>
                                           <td><button class="bi bi-trash"></button></td>
                                      </tr>                    
                                  </tbody>
                              </table>
                        <!-- End Skills Add Code -->
                     </div>
                  </div>
                  </div>
               </div>
               <div class="col-xl-8">
                  <div class="card">
                     <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                           <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
                           <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Family Details</button></li>
                           <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Education</button></li>
                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Experience</button></li>
                           <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button></li>
                        </ul>
                        <div class="tab-content pt-2">
                           <div class="tab-pane fade show active profile-overview" id="profile-overview">
                              <h5 class="card-title">About</h5>
                              <p>Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                              <h5 class="card-title">Profile Details</h5>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                 <div class="col-lg-9 col-md-8">Jassa</div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Company</div>
                                 <div class="col-lg-9 col-md-8">Therichpost</div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Job</div>
                                 <div class="col-lg-9 col-md-8">Web Designer</div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Country</div>
                                 <div class="col-lg-9 col-md-8">USA</div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Address</div>
                                 <div class="col-lg-9 col-md-8">Ludhiana, Punjab, India</div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Phone</div>
                                 <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-3 col-md-4 label">Email</div>
                                 <div class="col-lg-9 col-md-8"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e982c788878d8c9b9a8687a98c91888499858cc78a8684">[email&#160;protected]</a></div>
                              </div>
                           </div>
                           <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                              <form>
                                 <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                       <img src="assets/img/profile-img.jpg" alt="Profile">
                                       <div class="pt-2"> <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a> <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a></div>
                                    </div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9"> <input name="fullName" type="text" class="form-control" id="fullName" value="Jassa"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                    <div class="col-md-8 col-lg-9"><textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                    <div class="col-md-8 col-lg-9"> <input name="company" type="text" class="form-control" id="company" value="Therichpost"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                    <div class="col-md-8 col-lg-9"> <input name="job" type="text" class="form-control" id="Job" value="Web Designer"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                    <div class="col-md-8 col-lg-9"> <input name="country" type="text" class="form-control" id="Country" value="USA"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9"> <input name="address" type="text" class="form-control" id="Address" value="Ludhiana, Punjab, India"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9"> <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9"> <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                    <div class="col-md-8 col-lg-9"> <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                    <div class="col-md-8 col-lg-9"> <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                    <div class="col-md-8 col-lg-9"> <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#"></div>
                                 </div>
                                 <div class="row mb-3">
                                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                    <div class="col-md-8 col-lg-9"> <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#"></div>
                                 </div>
                                 <div class="text-center"> <button type="submit" class="btn btn-primary">Save Changes</button></div>
                              </form>
                           </div>
                           <div class="tab-pane fade pt-3" id="profile-settings">
                              <form>
                                 <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                    <div class="col-md-8 col-lg-9">
                                       <div class="form-check"> <input class="form-check-input" type="checkbox" id="changesMade" checked> <label class="form-check-label" for="changesMade"> Changes made to your account </label></div>
                                       <div class="form-check"> <input class="form-check-input" type="checkbox" id="newProducts" checked> <label class="form-check-label" for="newProducts"> Information on new products and services </label></div>
                                       <div class="form-check"> <input class="form-check-input" type="checkbox" id="proOffers"> <label class="form-check-label" for="proOffers"> Marketing and promo offers </label></div>
                                       <div class="form-check"> <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled> <label class="form-check-label" for="securityNotify"> Security alerts </label></div>
                                    </div>
                                 </div>
                                 <div class="text-center"> <button type="submit" class="btn btn-primary">Save Changes</button></div>
                              </form>
                           </div>
                           <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Code Start for change password -->

                    
                              <center><form>
                                 <div class="col-6">
                                    <label for="yourUsername" class="form-label"><b><i>Old Password</i></b></label>
                                    <div class="input-group has-validation">
                                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                                       <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <label for="yourPassword" class="form-label"><b><i>New Password</i></b></label> 
                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                 </div>
                                 <div class="col-6">
                                    <label for="yourPassword" class="form-label"><b><i>Re-Enter New Password</i></b></label> <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                 </div>&nbsp;
                                 <div class="col-6"> 
                                   <center><button class="btn btn-danger" type="submit">Change</button></div></center>
                              </form></center>
                           </div>
                        </div>
                     </div>
                  </div>
                            <!-- Code End for change password -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Start Skill Adding Code Here -->
           <div class="modal fade" id="Addskills" tabindex="-1">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Employee Skills</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                <div class="card-body">
                        <h5 class="card-title">Please Enter Skill Details</h5>
                        <form>
                           <div class="row mb-3">
                              <label for="inputText" class="col-sm-2 col-form-label"><strong>Name</strong></label>
                              <div class="col-sm-10"> <input type="text" class="form-control"></div>
                           </div>
                           <div class="row mb-3">
                              <label for="inputEmail" class="col-sm-2 col-form-label"><strong>Expertise</strong></label>
                              <div class="col-sm-10"> <input type="email" class="form-control"></div>
                           </div>   
                        </form>
                     </div>
                                 <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div>
                              </div>
                           </div>
                        </div>
         <!-- End Skill Adding Code Here -->
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