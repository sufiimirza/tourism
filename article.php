
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


<body class="page-template page-template-blog_g page-template-blog_g-php page page-id-111 page-child parent-pageid-86 woocommerce-no-js">

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

    <div id="page_caption" class="hasbg parallax    blog_wrapper" style="background-image:url(images/article.jpg);">

        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <div class="page_title_content">
                    <h1>Article & Tips</h1>
                    <div class="page_tagline">
                        Explore Malaysia </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg blog_wrapper">
        <div class="inner">

            <!-- Begin main content -->
            <div class="inner_wrapper">

                <div class="page_content_wrapper"></div>

                <div id="blog_grid_wrapper" class="sidebar_content full_width fixed_column">

                    <?php 
                    $query7="select * from article";

                     $result = mysqli_query($con, $query7);
                            $sno    = 1;


                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $id = $row['article_id'];
                                    $article   = $row['article_name'];
                                    $date = $row['release_date'];
                                    $photo = $row['article_link'];
                                    ?>

                    <!-- Begin each blog post -->
                    <div id="post-81" class="post-81 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-passport tag-travel tag-world">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="articledetail.php?article_id=<?php echo $id ?>">
                                    <img width="700" height="300" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($photo);  ?> " />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="Memorial Day to Someone Told Me to Travel"><?php echo $date ?> </a>
                                        </span>
                                    </div>
                                    <h6><a href="#"><?php echo $article ?> </a></h6>
                                </div>

                                                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php
                                $sno++;
                                }
                            }
                    ?>

                    <!-- End each blog post -->


                 
                   
                
                 
                  
                 
                    
               
                    <!-- End each blog post -->

                </div>

            </div>
            <!-- End main content -->

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
