<?php
require_once 'header.php';
require_once 'connection.php';
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

if(isset($_POST["name"]))
{
   $query = "insert into contact (id,name,email,subject,message) values('','".mysqli_real_escape_string($db_con,$name)."','".mysqli_real_escape_string($db_con,$email)."','".mysqli_real_escape_string($db_con,$subject)."','".mysqli_real_escape_string($db_con,$message)."')";
   mysqli_query($db_con, $query);
   
   $alert = <<<_END
    <div class ="alert alert-success alert-dismissable fade in alert-holder" style="text-align:center;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Success !</strong> Thank you for contacting us, we will get back to you shortly.
  </div>
_END;
}

?>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
       

        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
       <?php
       echo $alert;
       ?>
        <section id="contact-section" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact  Us</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                               
                            </p>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="contact.php" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                
                            </p>
                            <div class="map">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.789792281753!2d7.445061214631892!3d8.991481093546874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0d26d4a9ce6f%3A0x816c671d9df53c3e!2sPeakframe%20Studios!5e0!3m2!1sen!2sng!4v1568228558660!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <img src="images/placeholder2.png" alt="">
                            <h5>Dakwo Community Center <br> behind Golden Spring Estate, opposite Sunnyvale Junction Lokogoma Abuja Nigeria</h5>
                        </div>
                    </div>
<!--                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <img src="images/placeholder2.png" alt="">
                            <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                        </div>
                    </div>-->
                    <div class="col-md-3" >
                        <div class="address wow fadeInLeft heightinc" data-wow-duration="500ms" data-wow-delay=".7s">
                            <img src="images/mail2.png" alt="">
                            <h5>Peakframestudios@gmail.com<br></h5>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <div class="address wow fadeInLeft heightinc" data-wow-duration="500ms" data-wow-delay=".9s">
                            <img src="images/phone-book2.png" alt="">
                            <h5>+2349050560656<br>+2348089345684</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>






        <!-- 
        ================================================== 
            Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">THANK YOU FOR WORKING WITH US</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                            <a href="index.php" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Home</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Footer Section Start
        ================================================== -->
        <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2017</span> . PeakFrame Studio</p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/peakframestudios/" class="Facebook">
                                    <img src="images/facebook2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Twitter">
                                    <img src="images/twitter2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                     <img src="images/linkedin2.png" alt="">
                                     
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCP4ShqT31qper-0tbb3FrhQ" class="Google Plus">
                                   <img src="images/youtube2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Google Plus">
                                   <img src="images/instagram2.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
        
    </body>

<!-- Mirrored from demo.themefisher.com/timer/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2017 23:25:34 GMT -->
</html>


