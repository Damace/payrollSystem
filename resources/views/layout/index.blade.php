<!DOCTYPE html>
<html lang="en">


<head>    
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - MhawaNet Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MhawaNet - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: white;">
 <small> 

  <div class="row align-items-top" justify-content-center>
   
    <div class="col-lg-1">

   

</div>

<div class="col-lg-10">
 
  <!-- Card with header and footer -->
  <div class="card">

<!------------------------------- Header begins hereeeeeeeeeeeeeeeeeeee--------------------------------------->


<div class="card-header">
      
    
      <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
  
              
  
              <!-- Customers Card -->
              

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        
                        <img src="assets/img/logo.png" alt="" style="padding-left: 120px;">
                        
                      </div>
                      <div class="col-lg-11" align="right">
                        <h1 class="card-title">MhawaNet Payroll System |<span style="color: #045bb8;font-weight: bold;"> MPS</span></h1>
                        
                        <nav class="header-nav ms-auto" style="float: right;">
                          <ul class="d-flex align-items-center">
                           
                            

                            <li class="nav-item dropdown pe-3">

                              <!-- Add Navigation iterms hereeeeeeeeeeeeeeeeeee -->  
                              
                              

                                <li class="nav-item dropdown">
                                

                                  <div id="date-time"></div>
		<script>
			// Function to format 1 in 01
			const zeroFill = n => {
				return ('0' + n).slice(-2);
			}

			// Creates interval
			const interval = setInterval(() => {
				// Get current time
				const now = new Date();

				// Format date as in mm/dd/aaaa hh:ii:ss
				const dateTime = zeroFill((now.getMonth() + 1)) + '-' + zeroFill(now.getUTCDate()) + '-' + now.getFullYear() + ' | ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

				// Display the date and time on the screen using div#date-time
				document.getElementById('date-time').innerHTML = dateTime;
			}, 1000);
		</script>

                                  </li>

                              <li class="nav-item dropdown">

                                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                  <i class="bi bi-bell"></i>
                                  <span class="badge bg-primary badge-number">4</span>
                                </a><!-- End Notification Icon -->
                              </li>

                              <!-- End of Navigation iterms -->    
                              
                             
                             
                              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                               <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                               <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                              </a><!-- End Profile Iamge Icon -->
                             
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                  <h6>Kevin Anderson</h6>
                                  <span>Web Designer</span>
                                </li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                    
                                <li>
                                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                  </a>
                                </li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                    
                                <li>
                                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                  </a>
                                </li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                    
                                <li>
                                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                  </a>
                                </li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                    
                                <li>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                  </a>
                                </li>
                    
                              </ul><!-- End Profile Dropdown Items -->
                              
                            </li><!-- End Profile Nav -->
                    
                          </ul>
                        </nav><!-- End Icons Navigation -->
                      </div>
                    </div>
  
                 
               
  
             <section class="form-control" style="border: none;background-color: #045bb8;"></section>

           


            </div>
          </div><!-- End Left side columns -->
        </div>
      </section>
    
    </div>










<!------------------------------- Header Ends hereeeeeeeeeeeeeeeeeeee--------------------------------------->



    <div class="row align-items-top">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body"style="min-height: 100vh;">
          
            
      <!------------------------------- Side begins hereeeeeeeeeeeeeeeeeeee--------------------------------------->




      

      <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i style="font-size: 35px;" class="bi bi-list"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu">
                <li class="dropdown-header text-start">
                  <h6>Menu</h6>
                </li>
        
                
                <li>
                  <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ExtralargeModal" style="cursor:pointer">
                    <i class="bi bi-plus-circle"></i>
                    <span><small>New employee</small></span>
                  </a>

                 

                </li>


 
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
                  
                <li>
                  <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="cursor:pointer">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Attendance</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Deductions</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Allowances</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Department</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Get Pay Slip</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Payroll Report</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>

                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span><small>Support</small></span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
               
                
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span><small>Settings</small></span>
                  </a>
                </li>
               
              </ul>
            </div>







       <!------------------------------- Side Ends hereeeeeeeeeeeeeeeeeeee--------------------------------------->
        
               
       <!-- Default Tabs -->
       <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">  <i class="bi bi-person-circle" style="color:#045bb8;"></i> Employees</button>
        </li>
        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">   <i class="bi bi-question-circle" style="color:#045bb8;"></i>  Profile</button>
        </li>
        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false"> <i class="bi bi-person" ></i>Contact</button>
        </li>

        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact1" aria-selected="false"> <i class="bi bi-person" ></i>Contact</button>
        </li>

        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact2" aria-selected="false"> <i class="bi bi-person" ></i>Contact</button>
        </li>


        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact3" aria-selected="false"> <i class="bi bi-person" ></i>Contact</button>
        </li>
      </ul>



      <div class="tab-content pt-2" id="myTabjustifiedContent">
        <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
        
        <div align="right"> 

        
              <div class="modal fade" id="ExtralargeModal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><i class="bi bi-plus-circle"></i> New employee</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
              


                    <!------------------------------- form begins hereeeeeeeeeeeeeeeeeeee--------------------------------------->






                   <!------------------------------- forms Ends hereeeeeeeeeeeeeeeeeeee--------------------------------------->


                    </div>
                  
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->
        </div>
            

  <!-- Vertically centered Modal -->
 
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <small>Info.</small>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                  
                                        
                    <div class="alert alert-info alert-dismissible fade show" role="alert">

                Connect to Biometric machine then try again.
                
              </div>

                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->












        <small>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                   
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                   
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                   
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                   
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                   
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
</small>
              <!-- End Table with stripped rows -->

           





        </div>
        <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
          Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
        </div>
        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
        </div>

        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab1">
          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
        </div>

        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab2">
          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
        </div>


        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab3">
          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
        </div>

      </div><!-- End Default Tabs -->

     


              </div>
          </div>
        </div>
        </div><!-- End Default Card -->

       <!------------------------------- Footer begins hereeeeeeeeeeeeeeeeeeee--------------------------------------->






<!------------------------------- Footer Ends hereeeeeeeeeeeeeeeeeeee--------------------------------------->

  </div><!-- End Card with header and footer -->
</div>

    <div class="col-lg-1">
</div>
</div>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>



</html>