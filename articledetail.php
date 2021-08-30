
<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <link rel="shortcut icon" href="upload/TG-Thumb.png" />

    <title>Article | Malaysia Tourism System</title>

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

                            $aid  = $_GET['article_id'];
                            $query  = "select * from article where article_id= '$aid'";
                            // echo $query;
                            $result = mysqli_query($con, $query);
                            
                             $sno    = 2;


                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $name   = $row['article_name'];
                                    $date   = $row['release_date'];                                  
                                    $detail = $row['article_content'];
                                    $aphoto = $row['article_link'];
                                    // $query1  = "select * from city ORDER BY city_name";
                                    // $result1 = mysqli_query($con, $query1);
                                    $sno++;
                                }
                            }
                                    ?>


                        <!-- <?php
                        $count = "UPDATE places set count_visit=count_visit + 1 where Iplace_ID= '$aname'";
                            $hasil = mysqli_query($con, $count);
                            ?> -->


        <div id="page_caption" class="hasbg parallax    " style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($aphoto); ?>);">

            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <div class="page_title_content">
                        <h1><?php echo $name ?></h1>
                       
                    </div>
                </div>
            </div>

        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg ">
            <div class="inner">
                <!-- Begin main content -->
                <div class="inner_wrapper">
                    <div class="sidebar_content full_width">

                       
                        <p class="p1"><?php echo $detail ?></p>
                       
                    </div>
                </div>
                <!-- End main content -->
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
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    
</body>
</html>
