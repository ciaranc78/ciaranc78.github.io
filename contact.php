<?php
$pageTitle='Contact Us';
$origin='Home';
include_once 'pndheader.php';


echo '
                        
                        <div class="contact-form col-md-8 col-sm-7  page-row">    
                            <div class="page-row box box-border">                        
                            <h2><b>Monthly Support Meetings</b></h2><br>
                            Our Monthly Support Meetings are held on the last Tuesday of every month at: <br><b>Cork Maternity Hospital,<br>
                            Wilton,<br>
                            Cork</b>
                            </div>
                            <div class="page-row box box-border">
                                <h2><b>Support Line: 021 4922083</b></h2><br>
                                Our Support Line is attended on Tuesdays and Thursdays between 10am and 2pm.
                                Our answering service is available outside these hours.</h1>
                           </div>
                            <div class="page-row box box-border">
                                <h2><b> Send us a message</b></h2>
                                <br>
                            <form>
                                <div class="form-group name">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter your email">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number">
                                </div><!--//form-group-->
                                <div class="form-group message">
                                    <label for="message">Message<span class="required">*</span></label>
                                    <textarea id="message" class="form-control" rows="6" placeholder="Enter your message here..."></textarea>
                                </div><!--//form-group-->
                                <button type="submit" class="btn btn-theme">Send message</button>
                            </form>                  
                        </div>
                      </div>';

include_once 'sidebar.php';

              echo '</div><div class="page-row">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3><br><br>
                            <div id="map"></div><!--//map-->
                        </article><!--//map-->
                    </div><!--//page-row-->';


              echo '</div><!--//page-wrapper--> 
        </div><!--//content-->
    </div><!--//wrapper-->

     <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>About</h3>
                        <ul>
                            <li><a href="index.html"><i class="fa fa-caret-right"></i>About us</a></li>
                            <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <li><a href="#.html"><i class="fa fa-caret-right"></i>Privacy policy</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3>Join our mailing list</h3>
                        <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                        <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="submit" value="Subscribe">
                        </form>
                        
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col--> 
                <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span class="street-address">PND Ireland</span><br>
                                    <span class="region">Cork Maternity Hospital</span><br>
                                    <span class="postal-code">Wilton</span><br>
                                    <span class="county">Cork</span><br>
                                    <span class="country-name">Ireland</span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>021 4922083</p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#">support@pnd.ie</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2014 PND Ireland | Website design by <a href="#">Ciaran Campbell</a>.</small>
                    
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
   
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="assets/plugins/gmaps/gmaps.js"></script>   
    <script type="text/javascript" src="assets/js/map.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

';
?>
                       
