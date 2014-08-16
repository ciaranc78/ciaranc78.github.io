<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>PND Ireland | <?php echo $pageTitle ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="home-page">


<!-- JavaScript SDK for facebook tag -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">              
                    <div class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">

                        <a href="http://www.facebook.com/pndireland"><img src="assets/images/f.jpg" alt="facebook-logo"></a>                              
                    </div><!--//social-icons-->
                    <form class="pull-right search-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search the site...">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form>         
                </div>      
            </div><!--//to-bar-->
            <div class="header-main container">
                          

                <div class="logo col-md-1 col-sm-1">
                    <a href="index.html"><img id="logo" src="assets/images/tmum.png" alt="Logo">
                        </a>
                </div>

                <div class="logo-txt col-md-7 col-sm-7">
                         <h1><a href="#">PND Ireland</a></h1>
                         <h4>..providing support and friendship to those suffering from Post Natal Depression.</h4>
                </div>

                <div class="info col-md-4 col-sm-4">
                    <ul class="menu-top navbar-right hidden-xs">
                        <li class="divider"><a href="index.html">Home</a></li>
                        <li class="divider"><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul><!--//menu-top-->
                    <br />
                    <div class="contact pull-right">
                        <p class="phone"><i class="fa fa-phone"></i>Call us 021 4922083</p> 
                        <p class="email"><i class="fa fa-envelope"></i><a href="#">support@pnd.ie</a></p>
                    </div><!--//contact-->
                </div><!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->
        
        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="index.html">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">About PND <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="whatispnd.php">What is PND??</a></li>
                                <li><a href="causes.php">Causes</a></li>
                                <li><a href="symptoms.php">Symptoms</a></li>
                                <li><a href="faq.php">Frequently Asked Questions</a></li>
                                <li><a href="stories.php">PND Stories</a></li>
                                <li><a href="readmore.php">Read More</a></li>
                                <li><a href="how_others_can_help.php">How others can help</a></li>              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Discussion <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">All Forums</a></li>
                                <li><a href="phpBB3/viewforum.php?f=3">Mums</a></li>
                                <li><a href="#">Dads</a></li>
                                <li><a href="#">Friends & Family</a></li>
                                <li><a href="#">PND.ie Recovered Mums</a></li>
                                           
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#">News & Events</a></li>
                        <li class="nav-item"><a href="guestbook.php">Guestbook</a></li>
                        <li class="nav-item"><a href="#">Chatroom</a></li>
                        <li class="nav-item"><a href="contact.php">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->

        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left"><?php echo $pageTitle ?></h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html"><?php echo $origin ?></a><i class="fa fa-angle-right"></i></li>
                            <li class="current"><?php echo $pageTitle ?></li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 

                <div class="row cols-wrapper">
               
               <div class="col-md-1">
               </div>
