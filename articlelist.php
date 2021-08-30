<?php
require 'include/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <link rel="shortcut icon" href="upload/TG-Thumb.png" />

    <title>GTour | Travel Tour HTML Template</title>

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

    <div id="page_caption" class="hasbg parallax    blog_wrapper" style="background-image:url(upload/pexels-photo-24377.jpg);">

        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <div class="page_title_content">
                    <h1>Blog Grid Left Sidebar</h1>
                    <div class="page_tagline">
                        This is sample of page tagline and you can set it up using page option </div>
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

                    <!-- Begin each blog post -->
                    <?php
                           
                            $query  = "select * from article";
                            // echo $query;
                            $result = mysqli_query($con, $query);
                            $sno    = 1;

                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $uid   = $row['article_id'];
                                    // $query1  = "select * from city ORDER BY city_name";
                                    // $result1 = mysqli_query($con, $query1);
                                    ?>
                                <div id="post-81" class="post-81 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-passport tag-travel tag-world">

                                <div class="post_wrapper grid_layout">

                                <div class="post_img small static">
                                <a href="articleshow.php?article_id=<?php echo $row['article_id']; ?>" name="view">
                                    <img src="upload/photo-1469920783271-4ee08a94d42d-960x636.jpg" alt="Memorial Day to Someone Told Me to Travel" class="" />
                                </a>
                                </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="Memorial Day to Someone Told Me to Travel"><?php echo $row['release_date'] ?></a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="Memorial Day to Someone Told Me to Travel"><?php echo $row['article_name'] ?></a></h6>
                                </div>

                               
                               
                            </div>

                        </div>

                    </div>
                    <?php 
                    $sno++; 
                    
                }
            }
            ?>        <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-76" class="post-76 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-japan tag-passport tag-summer">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/pexels-photo-212388-960x636.jpeg" alt="7 Tips For Nomads On A Budget Trips" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="7 Tips For Nomads On A Budget Trips">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="7 Tips For Nomads On A Budget Trips">7 Tips For Nomads On A Budget Trips</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-72" class="post-72 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-passport tag-plan tag-world">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/pexels-photo-24484-960x636.jpg" alt="Taking A Travel Blog Victory Lap" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="Taking A Travel Blog Victory Lap">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="Taking A Travel Blog Victory Lap">Taking A Travel Blog Victory Lap</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-66" class="post-66 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-japan tag-plan tag-summer">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/pexels-photo-211051-960x636.jpeg" alt="On the Shores of a Pink Lake in Australia" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="On the Shores of a Pink Lake in Australia">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="On the Shores of a Pink Lake in Australia">On the Shores of a Pink Lake in Australia</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-62" class="post-62 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-japan tag-passport tag-world">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/pexels-photo-24377-960x636.jpg" alt="The World of Wearable Art &#038; Classic Cars" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="The World of Wearable Art &#038; Classic Cars">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="The World of Wearable Art &#038; Classic Cars">The World of Wearable Art &#038; Classic Cars</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-58" class="post-58 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-plan tag-summer tag-travel">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/pexels-photo-96420-960x636.jpeg" alt="Top Travel Blogs To Discover This Summer" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="Top Travel Blogs To Discover This Summer">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="Top Travel Blogs To Discover This Summer">Top Travel Blogs To Discover This Summer</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-54" class="post-54 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-plan tag-travel tag-world">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/pexels-photo-197657-960x636.jpeg" alt="How To Save Five Figures For Travel In A Year" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="How To Save Five Figures For Travel In A Year">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="How To Save Five Figures For Travel In A Year">How To Save Five Figures For Travel In A Year</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-50" class="post-50 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-passport tag-travel tag-world">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/bf1202aedf2c5b6a57d379575619a488-960x636.jpg" alt="Passport Is a Must to Teach Kids the World" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="Passport Is a Must to Teach Kids the World">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="Passport Is a Must to Teach Kids the World">Passport Is a Must to Teach Kids the World</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <!-- Begin each blog post -->
                    <div id="post-46" class="post-46 post type-post status-publish format-standard has-post-thumbnail hentry category-travel-tips tag-japan tag-summer tag-travel">

                        <div class="post_wrapper grid_layout">

                            <div class="post_img small static">
                                <a href="#">
                                    <img src="upload/Tokyo_Dollarphotoclub_72848283-copy-960x636.jpg" alt="Top 5 Things to Do in Japan While You Still Can" class="" />
                                </a>
                            </div>

                            <div class="post_header_wrapper">
                                <div class="post_header grid">
                                    <div class="post_detail single_post">
                                        <span class="post_info_date">
                                            <a href="#" title="Top 5 Things to Do in Japan While You Still Can">December 10, 2016</a>
                                        </span>
                                    </div>
                                    <h6><a href="#" title="Top 5 Things to Do in Japan While You Still Can">Top 5 Things to Do in Japan While You Still Can</a></h6>
                                </div>

                                Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache...
                                <div class="post_button_wrapper">
                                    <a class="readmore" href="#">Read More<span class="ti-angle-right"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                </div>

            </div>
            <!-- End main content -->

        </div>
    </div>

    <div id="footer" class=" ppb_wrapper">
        <ul class="sidebar_widget three">
            <li id="text-2" class="widget widget_text">
                <h2 class="widgettitle">Our Awards</h2>
                <div class="textwidget">
                    <p>London is a megalopolis of people, ideas and frenetic energy. The capital and largest city of the United Kingdom.
                        <br />
                        <img src="upload/awards.png" width="246" height="113" style="margin-top:30px;" alt="" /></p>
                </div>
            </li>
            <li id="text-4" class="widget widget_text">
                <h2 class="widgettitle">Contact Info</h2>
                <div class="textwidget">
                    <p><span class="ti-mobile" style="margin-right:10px;"></span>1-567-124-44227</p>
                    <p><span class="ti-location-pin" style="margin-right:10px;"></span>184 Main Street East Perl Habour 8007</p>
                    <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00 Sunday CLOSED</p>
                    <div style="margin-top:20px;">
                        <div class="social_wrapper shortcode dark ">
                            <ul>
                                <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                <li class="pinterest"><a target="_blank" title="Pinterest" href="https://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="instagram"><a target="_blank" title="Instagram" href="https://instagram.com/theplanetd"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li id="grandtour_flickr-7" class="widget Grandtour_Flickr">
                <h2 class="widgettitle">Recent Trips</h2>
                <ul class="flickr">
                    <li>
                        <a target="_blank" href="#"><img src="upload/28760131762_e4a64b20c4_q.jpg" alt="Buddha Sunrise in Borobudur, Magelang, Central Java, Indonesia" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="#"><img src="upload/27308262031_a6ebf0572e_q.jpg" alt="Gentoo Penguins, Falkland Islands (Islas Malvinas), British Overseas Territory" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="#"><img src="upload/27287965356_60355f51d7_q.jpg" alt="Aerial View of Singapore CBD Skyline, Marina Bay Esplanade and Raffles Place, Singapore" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="#"><img src="upload/27138570412_d25002a5c9_q.jpg" alt="View Of Sugarloaf Mountain, Botafogo And The City of Rio De Janeiro, Brazil, South America" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="#"><img src="upload/26520497604_1df03a02bc_q.jpg" alt="Sacre Coeur (Basilica of the Sacred Heart of Paris), Paris, France :: HDR" width="75" height="75" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="#"><img src="upload/27012097142_f1511b67bc_q.jpg" alt="The Great Gate (Darwaza-i rauza) of Taj Mahal, Agra, Uttar Pradesh, India :: HDR" width="75" height="75" /></a>
                    </li>
                </ul>
                <br class="clear" />
            </li>
        </ul>
    </div>

    <div class="footer_bar  ppb_wrapper ">

        <div class="footer_bar_wrapper ">
            <div class="menu-footer-menu-container">
                <ul id="footer_menu" class="footer_nav">
                    <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="tours.html">Tours</a></li>
                    <li class="menu-item"><a href="blog.html">Blog</a></li>
                    <li class="menu-item"><a href="#">Purchase Template</a></li>
                </ul>
            </div>
            <div id="copyright">© Copyright GTour Template Demo</div>
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
