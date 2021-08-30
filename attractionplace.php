
<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <link rel="shortcut icon" href="upload/TG-Thumb.png" />

    <title>Attraction Places | Malaysia Tourism System</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
  
    <link rel='stylesheet' href='css/icons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/tooltipster.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/tooltipster-light.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animations.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/fontawesome-stars-o.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/frontend.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/wordpress.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animation.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/ilightbox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom-ui.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/tooltipster.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/odometer-theme-minimal.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/screen.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/leftalignmenu.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/themify-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/grid.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Work+Sans%3A700%2C700%2C700%2C700%2C700%2C100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A700%2C700%2C700%2C700%2C700%2C100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset' type='text/css' media='all' />



</head>

<body class="home page-template-default page page-id-3102 woocommerce-no-js ppb_enable">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign" />
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="" />
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="" />
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="images/" />
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
    <input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="1" />
    <input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1" />
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="0" />
    <input type="hidden" id="post_client_column" name="post_client_column" value="4" />
    <input type="hidden" id="pp_back" name="pp_back" value="Back" />
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="" />
    <input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value="" />
    <input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value="" />
    <input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black" />
    <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal" />
    <input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1" />
    <input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8" />
    <input type="hidden" id="tg_sidemenu_overlay_effect" name="tg_sidemenu_overlay_effect" value="blur" />
    <input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0" />
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3" />

    <!-- Begin mobile menu -->
   <?php include 'sidebar.php' ;?>         
    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <?php include 'navbar.php' ;?>

    <?php
                            $aname  = $_GET['state_name'];

                            $query  = "select * from state where state_name='$aname'";
                            // echo $query;
                            $result = mysqli_query($con, $query);
                            $no    = 1;

                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $img=$row['state_photo'];

                                    $no=1;
                                }
                            }
            ?>

        <div id="page_caption" class="hasbg parallax    " style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>);">
            
            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <div class="page_title_content">
                        <h1><?php echo $aname ?></h1>
                        <div class="page_tagline">
                            Be an explorer and experience the beauty of diversity in <?php echo $aname ?></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg ">
            <!-- <form id="tour_search_form" name="tour_search_form" method="get" action="http://themes.themegoods.com/granddemo/tours/tour-2-columns-classic-right-sidebar/">
                <div class="tour_search_wrapper">
                    <div class="one_fourth themeborder">
                        <input name="keyword" id="myInput" type="text" onkeyup="myFunction()" placeholder="Destination, city" />
                        <span class="ti-search"></span>
                        <div id="autocomplete" class="autocomplete" data-mousedown="false"></div>
                    </div>
                    
                    
                    <div class="one_fourth last themeborder">
                        <input id="tour_search_btn" type="submit" class="button" value="Search" />
                    </div>

                    <br class="clear" />

                </div>
            </form> -->

            <!-- Begin content -->

            <div class="inner">

                <div class="inner_wrapper nopadding">

                    <div id="page_main_content" class="sidebar_content fixed_column">

                        <div class="standard_wrapper" id="wrapper">
                                
                            <div  class="gallery classic two_cols portfolio-content section content clearfix" data-columns="3">
                            
                                
                            <?php
                            $aname  = $_GET['state_name'];
                            $query  = "select a.place_name, a.Iplace_ID, a.ticket_price, a.place_details, a.opening_hour, a.place_photo,c.state_name from state c join city b on c.state_ID=b.state_ID join places a on a.city_id=b.city_id where c.state_name= '$aname'";
                            // echo $query;
                            $result = mysqli_query($con, $query);
                            $sno    = 2;


                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $uid   = $row['state_name'];
                                    $price = $row['ticket_price'];
                                    $id    = $row['Iplace_ID'];
                                    // $query1  = "select * from city ORDER BY city_name";
                                    // $result1 = mysqli_query($con, $query1);
                                    ?>
                                    

                                    <div class="element grid classic2_cols animated<?php '$sno' ?>;">
                                        <div class='one_half gallery2 classic static filterable portfolio_type themeborder' data-id='post-<?php '$sno' ?>'>
                                   
                                    <a class='tour_image' name="place_photo" href="placesdetail.php?Iplace_ID=<?php echo $id ?>"> 
                                     <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['place_photo']); ?> " controls width='700px' height='466px' />
                                 </form>
                                     <?php 
                                     if (isset($_POST['place_photo'])) {
                                    $counting="UPDATE places SET count_visit + 1 where Iplace_ID='$id'";
                                }
                                ?>
                                     <div class='tour_price'>
                                        <?php if ($price == 'Free' || $price == 'free'): 
                                             echo $price ?>
                                        <?php else: ?>
                                            <?php echo "RM" . $price ?>
                                         <?php endif ?>
                                          </div>
                                    </a>
                                    <div class='portfolio_info_wrapper'>
                                            <a class='tour_link'> <h4><?php echo $row['place_name'] ?></h4></a>
                                            <div class='tour_excerpt'>
                                                <p><?php echo $row['place_details'] ?></p>
                                            </div>
                                            <div class='tour_attribute_wrapper'>
                                                <div class='tour_attribute_rating'>
                                                    <div class='br-theme-fontawesome-stars-o'>
                                                       
                                                    </div>
                                                    <!-- <div class='tour_attribute_rating_count'>
                                                        4&nbsp; reviews </div> -->
                                                </div>

                                                <div class='tour_attribute_days'>
                                                    <span class='ti-time'></span> <?php echo $row['opening_hour'] ?> </div>
                                            </div>
                                            <br class='clear' />
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                     $sno++;
                              }          
                                    
                            }
                        ?> 

                            
                               
                                
                                
                                
                                
                            
                               

                            </div>
                            <br class="clear" />

                        </div>
                    </div>

                    <div class="sidebar_wrapper">
                        <div class="sidebar">

                            <div class="content">
                                <ul class="sidebar_widget">
                                    <li id="grandtour_cat_posts-5" class="widget Grandtour_Cat_Posts">
                                        <h2 class="widgettitle"><span>Travel Tips</span></h2>
                                        <ul class="posts blog withthumb ">
                                <?php
                                $sid=$_GET['state_name'];
                                $que="select a.article_id,a.article_name,a.release_date from article a join state b on a.state_id=b.state_ID where b.state_name='$sid' ";
                                $result1 = mysqli_query($con, $que);
                                $no    = 1;


                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                                    $uid   = $row['article_id'];
                                    $name = $row['article_name'];
                                    $date = $row['release_date'];
                                    
                                    // $query1  = "select * from city ORDER BY city_name";
                                    // $result1 = mysqli_query($con, $query1);
                                    ?>
                                
                                    
                                        
                                        
                                            <li>
                                                <div class="post_circle_thumb">
                                                    <a href="#"><img class="alignleft frame post_thumb" src="upload/photo-1469920783271-4ee08a94d42d-150x150.jpg" alt="" /></a>
                                                </div><a href="#"><?php echo $name ?></a>
                                                <div class="post_attribute"><?php echo $date ?></div>
                                            </li>
                                          
                                        
                                    
                                    <?php 
                                    $no++;
                                    
                                }
                            }?>
                            
                                 </li>
                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    <div id="footer" class=" ppb_wrapper">
        <ul class="sidebar_widget three">
            <li id="text-2" class="widget widget_text">
                <h2 class="widgettitle">Develop by:</h2>
                <div class="textwidget">
                    <p>Muhammad Sufi Mirza bin Sawalludin
                        <br />
                        </p>
                </div>
            </li>
           
            
        </ul>
    </div>

    <div class="footer_bar  ppb_wrapper ">

        <div class="footer_bar_wrapper ">
            
            <br class="clear" />
            <a id="toTop" href="javascript:;"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>

    </div>





    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/core.min.js'></script>
    <script type='text/javascript' src='js/plugins/datepicker.min.js'></script>
    <script type='text/javascript' src='js/plugins/spin.min.js'></script>
    <script type='text/javascript' src='js/plugins/spin.jquery.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src='js/plugins/functions.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.requestAnimationFrame.js'></script>
    <script type='text/javascript' src='js/plugins/ilightbox.packed.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='js/plugins/waypoints.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.isotope.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.masory.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.sticky-kit.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.stellar.min.js'></script>
    <script type='text/javascript' src='js/plugins/custom_plugins.js'></script>
    <script type='text/javascript' src='js/plugins/custom.js'></script>
    <script type='text/javascript' src='js/plugins/custom_onepage.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax-video.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>
    <script>
    function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("wrapper");
    tr = table.getElementsByTagName("h4");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("h4")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
    }
    </script>
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var booked_js_vars = {
            "ajax_url": "#",
            "profilePage": "",
            "publicAppointments": "",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_please_wait": "Please wait ...",
            "i18n_wrong_username_pass": "Wrong username\/password combination.",
            "i18n_fill_out_required_fields": "Please fill out all required fields.",
            "i18n_guest_appt_required_fields": "Please enter your name to book an appointment.",
            "i18n_appt_required_fields": "Please enter your name, your email address and choose a password to book an appointment.",
            "i18n_appt_required_fields_guest": "Please fill in all \"Information\" fields.",
            "i18n_password_reset": "Please check your email for instructions on resetting your password.",
            "i18n_password_reset_error": "That username or email is not recognized."
        };
        /* ]]> */
    </script>
</body>
</html>
