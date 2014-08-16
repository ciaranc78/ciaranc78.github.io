<?php
$pageTitle='Frequently Asked Questions';
$origin='About PND';
include_once 'pndheader.php';

echo '<div class="contact-form col-md-8">';

                    

                         require 'dbconnect.php';





                         if( $_SERVER['REQUEST_METHOD'] == 'POST')  {

                           
                            $name = $_POST['name'];
                            $city = $_POST['city'];
                            $county = $_POST['county'];
                            $country = $_POST['country'];
                            $comment = $_POST['comment'];
                            $postdate=date('d-m-y');

                            $pdo = Database::connect();
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO guestbook (name,city,county,country,comment, postdate) values(?, ?, ?, ?, ?, ?)";
                            $q = $pdo->prepare($sql);
                            $q->execute(array($name,$city,$county,$country,$comment, $postdate));
                            Database::disconnect();
                            header("Location: guestbook.php");
                           

                            echo '<section class="promo box box-dark">
                                  <h3>Thank you for taking the time to leave a message.</h3><br>
                                      It is only with your help & input that we can continue to grow.
                                  <br>
                                  </section>';
                        
                         }
                         else{
                            echo '
                         

                    

                        <div class="page-row box box-border">
                            <h1>Please sign our guestbook</h1><br>
                             Let us know what you think of our website or scroll down to read comments from other visitors.<br><br> 
                             <span class=required>*</span>This section is for leaving comments only..to talk to someone please go to the <a href="">discussions</a> section.<br>
                             
                            <br>
                        <form action="guestbook.php" method="post">
                            <div class="form-group name">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter your name">
                            </div><!--//form-group-->
                            <div class="form-group email">
                                <label for="county">Location</label>
                                <input name="county" type="text" class="form-control" placeholder="Location">
                            </div><!--//form-group-->
                            <div class="form-group message">
                                <label for="comment">Message<span class="required">*</span></label>
                                <textarea name="comment" class="form-control" rows="6" placeholder="Enter your message here..."></textarea>
                            </div><!--//form-group-->
                            <button type="submit" class="btn btn-theme">Submit message</button>
                        </form>             
                        <br>

                    </div>';
                }
                ?>


                    <!-- Get existing messages from guestbook -->

                    <?php

                     #include "dbconnect.php";
                     $pdo = Database::connect();
                     $sql = 'SELECT * FROM guestbook ORDER BY stamp DESC';
                     foreach ($pdo->query($sql) as $row) {
                            echo '<div class="page-row box box-border">';
                            echo '<p><b>Name: </b>'. $row['name'] . '</p>';
                            echo '<p><b>Location: </b>'. $row['county'] . '</p>';
                            echo '<p><b>Date: </b>' . $row['postdate'] . '</p>';
                            echo '<p><b>Comment: </b>'. $row['comment'] . '</p>';
                            echo '</div>';
                   }
                   Database::disconnect();

                    ?>
<?php                
echo                '</div>';

include 'sidebar.php';
include 'pndfooter.php';
?>
                
