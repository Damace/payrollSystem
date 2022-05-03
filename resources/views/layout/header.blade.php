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
