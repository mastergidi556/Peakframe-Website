<?php
require_once 'header.php';
?>

 <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Services</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Services</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
        ================================================== -->
        <section id="Admissionrequirements" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Admission Requirements</h2>
                            <p class="subtitle-des wow fadeInUp animated justify" data-wow-delay=".5s" data-wow-duration="500ms">
                               
                                1.	Fill the "apply now" <a href="TrainingForm.php">here</a>. <br>
                                 2.	Submit cv and five(5) of your best works of visual art in whatever field you are currently skilled at to our email address:  peakframestudio@gmail.com

                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Works Section Start
        ================================================== -->
         <section id="trainingcalender" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Training Calender</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                            <div class="margintopshift">
                                <?php
                                include 'comingsoon.php';
                             ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

         <section id="coursespricelist" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Courses Price List</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                            <div class="row service-parts">
                                <div id="wrapper">
    <div class="container">
        <div class="row">
          <div class="col-md-3">
                  <div class="circle c3 img-circle">
                      <h4 class="green">2D-Animation</h4>
                      <span class="icon green"><i class="fa fa-eur"></i></span>
                      <span class="price-large green">250k</span>
                      <span class="price-small"></span>
                      <p></p>
                      
                  </div>
              </div><!-- .Col-md-3 ends here -->
          
              <div class="col-md-3">
                  <div class="circle c3 img-circle">
                      <h4 class="green">3D-Animation</h4>
                      <span class="icon green"><i class="fa fa-eur"></i></span>
                      <span class="price-large green">350k</span>
                      <span class="price-small"></span>
                      <p></p>
                      
                  </div>
              </div><!-- .Col-md-3 ends here -->
          
          
        </div><!-- .Container ends here -->
    </div><!-- .Row ends here -->
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section id="systemrequirements" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">System Requirements</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                                •	Dual core CPU or higher.<br>
                                •	4GB RAM.<br>
                                •	5GB free hard disk space.<br>
                                •	Display Resolution: 1024 x 768.<br>
                                •	Color Depth: True Color (32-bit)<br>
                                •	Graphics Card: NVidia Geforce GTX 400 Series/ AMD Radeon HD 5000 Series.<br>
                                •	Video Memory: 1GB RAM.
                            </p>
                </div>
            </div>
        </section><!--

-->         <section id="faq" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Frequently Asked Question</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                           <div class="margintopshift">
                                <?php
                                include'comingsoon.php';
                             ?>
                            </div>
                </div>
            </div>
        </section>



        
        <?php require_once 'footer.php'?>
         





         