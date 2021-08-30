<?php
require 'include/db_conn.php';
?>
<div id="wrapper" class="hasbg transparent">

        <div class="header_style_wrapper">
            <!-- End top bar -->

            <div class="top_bar hasbg">
                <div class="standard_wrapper">
                    <!-- Begin logo -->
                    <div id="logo_wrapper">

                        <div id="logo_normal" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo" class="logo_wrapper hidden" href="index.html">
                                    <img src="upload/trulyasia_black.png" alt="" width="92" height="22" />
                                </a>
                            </div>
                        </div>

                        <div id="logo_transparent" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo_transparent" class="logo_wrapper default" href="index.html">
                                    <img src="upload/trulyasia_black.png" alt="" width="92" height="22" />
                                </a>
                            </div>
                        </div>
                        <!-- End logo -->

                        <div id="menu_wrapper">
                            <div id="nav_wrapper">
                                <div class="nav_wrapper_inner">
                                    <div id="menu_border_wrapper">
                                        <div class="menu-main-menu-container">
                                            <ul id="main_menu" class="nav">
                                                <li class="menu-item current-menu-item "><a href="index.php">Home</a>
                                                    <!-- <ul class="sub-menu">
                                                        <li class="menu-item menu-item-home current-menu-item"><a href="index.html">Home 1 – Background Image</a></li>
                                                        <li class="menu-item"><a href="home-2.html">Home 2 – Youtube Video</a></li>
                                                        <li class="menu-item"><a href="home-3-google-inspired.html">Home 3 – Google Inspired</a></li>
                                                        <li class="menu-item"><a href="home-4-travel-site.html">Home 4 – Travel Site</a></li>
                                                    </ul> -->
                                                </li>
                                                <!-- <li class="menu-item menu-item-has-children arrow"><a href="#">Tours</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-has-children arrow"><a href="tour-3-columns-classic.html">Tour Classic Fullwidth</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="tour-2-columns-classic.html">2 Columns</a></li>
                                                                <li class="menu-item"><a href="tour-3-columns-classic.html">3 Columns</a></li>
                                                                <li class="menu-item"><a href="tour-4-columns-classic.html">4 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="tour-2-columns-classic-right-sidebar.html">Tour Classic Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="tour-2-columns-classic-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="tour-2-columns-classic-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="tour-3-columns-grid.html">Tour Grid Fullwidth</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="tour-2-columns-grid.html">2 Columns</a></li>
                                                                <li class="menu-item"><a href="tour-3-columns-grid.html">3 Columns</a></li>
                                                                <li class="menu-item"><a href="tour-4-columns-grid.html">4 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="tour-grid-right-sidebar.html">Tour Grid Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="tour-grid-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="tour-grid-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="tour-list-right-sidebar.html">Tour List Sidebar</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="tour-list-right-sidebar.html">Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="tour-list-left-sidebar.html">Left Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="tour-3-columns-grid.html">Tour Header Type</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="tour-3-columns-grid.html">Featured Image</a></li>
                                                                <li class="menu-item"><a href="tour-3-columns-video-header.html">Video</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="#">Tour Categories</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="rural.html">Rural</a></li>
                                                                <li class="menu-item"><a href="snow-ice.html">Snow &#038; Ice</a></li>
                                                                <li class="menu-item"><a href="wildlife.html">Wildlife</a></li>
                                                                <li class="menu-item"><a href="mountain.html">Mountain</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                                <li class="menu-item menu-item-has-children arrow"><a href="the-new-california.html">Restaurant</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="restaurant.php">View Restaurant</a>
                                                            <!-- <ul class="sub-menu">
                                                                <li class="menu-item"><a href="grand-switzerland.html">Variable Tour Pricing</a></li>
                                                                <li class="menu-item"><a href="swiss-alps-trip.html">Simple Tour Pricing</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <li class="menu-item menu-item-has-children arrow"><a href="#">Type Of Cuisine</a>
                                                            <ul class="sub-menu">
                                                                 <?php

                                                                        $query  = "select distinct rest_type from restaurant";
                          
                                                                        $result = mysqli_query($con, $query);
                                                                        $no    = 1;

                                                                        if (mysqli_affected_rows($con) != 0) {
                                                                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                                                $type=$row['rest_type'];
                                                                        ?>
                                                                        <li class="menu-item"><a href="restauranttype.php?rest_type=<?php echo $type ?>"><?php echo $type ?></a></li>
                                                                        <?php
                                                                        $no=1;
                                                                    }
                                                                }
                                                            ?>   
                                                            </ul>
                                                        </li>
                                                       

                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Destinations</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="statelist.php">States</a></li>
                                                        <!-- <li class="menu-item"><a href="destination-video-header.html">Destination + Video Header</a></li>
                                                        <li class="menu-item"><a href="destination-right-sidebar.html">Destination Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="destination-left-sidebar.html">Destination Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="venice.html">Single Destination</a></li>
                                                        <li class="menu-item"><a href="paris.html">Single Destination + Video</a></li> -->
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Hotel</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="hotel.php">View Hotel</a></li>
                                                        <!-- <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                                                        <li class="menu-item"><a href="faqs.html">FAQs</a></li>
                                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                                        <li class="menu-item"><a href="page-fullwidth.html">Page Fullwidth</a></li>
                                                        <li class="menu-item"><a href="page-video-header.html">Page + Video Background Header</a></li>
                                                        <li class="menu-item"><a href="page-right-sidebar.html">Page Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="page-left-sidebar.html">Page Left Sidebar</a></li> -->
                                                    </ul>
                                                </li> 
                                                 <li class="menu-item menu-item-has-children arrow"><a href="#">Article</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="article.php">View Article</a></li>
                                                       <!--  <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                                        <li class="menu-item"><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                                        <li class="menu-item"><a href="blog-full-grid-right-sidebar.html">Blog Full + Grid Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-full-grid-left-sidebar.html">Blog Full + Grid Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-full-grid-fullwidth.html">Blog Full + Grid Fullwidth</a></li>
                                                    </ul> -->
                                                </li> 
                                              <!--   <li class="menu-item menu-item-has-children arrow"><a href="#">Shortcodes</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="accordion-toggles.html">Accordion &#038; Toggles</a></li>
                                                        <li class="menu-item"><a href="alert-boxes.html">Alert Boxes</a></li>
                                                        <li class="menu-item"><a href="animated-content.html">Animated Content</a></li>
                                                        <li class="menu-item"><a href="buttons-social-icons.html">Buttons &#038; Social Icons</a></li>
                                                        <li class="menu-item"><a href="columns.html">Columns</a></li>
                                                        <li class="menu-item"><a href="google-maps.html">Google Maps</a></li>
                                                        <li class="menu-item"><a href="image-frame-animation.html">Image Frame &#038; Animation</a></li>
                                                        <li class="menu-item"><a href="image-teasers.html">Image Teasers</a></li>
                                                        <li class="menu-item"><a href="pricing-tables.html">Pricing Tables</a></li>
                                                        <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                                    </ul>
                                                </li> -->

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin right corner buttons -->
                               
                                <!-- End right corner buttons -->
                            </div>
                            <!-- End main nav -->
                        </div>

                    </div>
                </div>
            </div>
        </div>