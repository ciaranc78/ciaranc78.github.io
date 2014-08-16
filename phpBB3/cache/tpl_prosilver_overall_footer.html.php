<?php if (!defined('IN_PHPBB')) exit; ?></div>
  </div>
</div>
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
                                    <span class='county'>Cork</span><br>
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
                <div class="copyright">
		<?php if ($this->_rootref['U_ACP']) {  ?><br /><strong><a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>">Administrator Control Panel</a></strong><?php } ?>

	</div>
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
   
    <!-- Javascript -->          
    <script type="text/javascript" src="../../../../assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../../../assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="a../../../../ssets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="../../../../assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="../../../../assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="../../../../assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="../../../../assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../../../../assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="../../../../assets/js/main.js"></script>            
</body>
</html>