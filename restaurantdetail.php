
<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <link rel="shortcut icon" href="upload/TG-Thumb.png" />

    <title>Restaurant | Malaysia Tourism System</title>

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
 $coordinates = array();
    $latitudes = array();
    $longitudes = array();

                            $aname  = $_GET['restaurant_ID'];
                            $query  = "select * from restaurant where restaurant_ID= '$aname'";
                            // echo $query;
                            $result = mysqli_query($con, $query);
                            
                             $sno    = 2;


                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                   
                                    $name = $row['restaurant_name'];
                                    $open = $row['opening_hour'];
                                    $detail= $row['rest_detail'];
                                    $photo= $row['res_photo'];
                                    $city = $row['city_ID'];
                                    $remail = $row['res_email'];
                                    $close = $row['closing_hour'];
                                    $phone = $row['res_phoneNo'];
                                    $latitudes[] = $row['locationLatitude'];
                                    $longitudes[] = $row['locationLongitude'];
                                    $coordinates[] = 'new google.maps.LatLng(' . $row['locationLatitude'] .','. $row['locationLongitude'] .'),';
                                    // $query1  = "select * from city ORDER BY city_name";
                                    // $result1 = mysqli_query($con, $query1);
                                    $sno++;
                                }
                            }

                            $lastcount = count($coordinates)-1;
                            $coordinates[$lastcount] = trim($coordinates[$lastcount], ","); 
                                    ?>


                        <?php
                        $count = "UPDATE restaurant set res_visit=res_visit + 1 where restaurant_ID= '$aname'";
                            $hasil = mysqli_query($con, $count);
                            ?> 

<?php
        $queryavg= "select ROUND(AVG(res_rating),1) as avg1 from rest_feedback where restaurant_id='$aname'";
        $resultavg = mysqli_query($con, $queryavg);

            $ano=1;
        if (mysqli_affected_rows($con) != 0) {
                                while ($row1 = mysqli_fetch_array($resultavg, MYSQLI_ASSOC)) {
                                    $avg=$row1['avg1'];
                                    $ano++;
                                }
                            }


?>


        <div id="page_caption" class="hasbg parallax  " style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($photo); ?>);">
            <div class="single_tour_header_content">
                <div class="standard_wrapper">
                    <!-- <a href="upload/pexels-photo-24377.jpg" id="single_tour_gallery_open" class="button fancy-gallery"><span class="ti-camera"></span>View Photos</a>
                    <div style="display:none;">
                        <a id="single_tour_gallery_image1" href="upload/pexels-photo-96420.jpeg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_tour_gallery_image2" href="upload/Tokyo_Dollarphotoclub_72848283-copy.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_tour_gallery_image3" href="upload/venice-WBEUROCITIES16.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_tour_gallery_image4" href="upload/pexels-photo-197657.jpeg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_tour_gallery_image5" href="upload/bf1202aedf2c5b6a57d379575619a488.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_tour_gallery_image6" href="upload/pexels-photo-24484.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                        <a id="single_tour_gallery_image7" href="upload/39267772-prague-wallpapers.jpg" title="The road to success and the road to failure are almost exactly the same" class="fancy-gallery"></a>
                    </div> -->

<!--                     <a href="#video_review168" id="single_tour_video_preview_open" class="button" data-type="inline"><span class="ti-control-play"></span>Video Preview</a>
 -->
                    <!-- <div id="video_review168" class="tour_video_preview_wrapper" style="display:none;">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/CwA0w3CFhjU" frameborder="0" allowfullscreen></iframe>
                    </div> -->

                    <!-- <div class="single_tour_header_price">
                        <div class="single_tour_price">
                            <span class="normal_price">
                            $6,700                      
                        </span> 
                        $6,200 
                    </div>
                        <div class="single_tour_per_person">
                            Per Person </div>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg ">
            <div class="inner">

                <!-- Begin main content -->
                <div class="inner_wrapper">

                    <div class="sidebar_wrapper">

                        <div class="sidebar_top"></div>

                        <div class="sidebar">

                            <div class="content">

                                <!-- div class="single_tour_header_price">
                                    <div class="single_tour_price">
                                        <span class="normal_price">
                                            $6,700 
                                        </span> 
                                        $6,200 
                                    </div>
                                    <div class="single_tour_per_person">
                                        Per Person </div>
                                </div> -->
<!-- 
                                <div class="single_tour_booking_wrapper themeborder contact_form7">
                                    <div role="form" class="wpcf7" id="wpcf7-f142-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">

                                            <p>
                                                <label> Full Name
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="John Doe" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Email Address
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="sample@yourcompany.com" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Phone Number
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap tel-729"><input type="tel" name="tel-729" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Tour Date
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap menu-419">
                                                        <select name="menu-419" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                            <option value="10-18 January 2017">10-18 January 2017</option>
                                                            <option value="23-31 January 2017">23-31 January 2017</option>
                                                            <option value="7-15 February 2017">7-15 February 2017</option>
                                                            <option value="18-26 February 2017">18-26 February 2017</option>
                                                        </select>
                                                    </span> 
                                                </label>
                                            </p>
                                            <p>
                                                <label> Number of Person
                                                    <br />
                                                    <span class="wpcf7-form-control-wrap text-237">
                                                        <input type="text" name="text-237" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="1 person" />
                                                    </span> 
                                                </label>
                                                <span class="wpcf7-form-control-wrap dynamictourtitle">
                                                    <input type="hidden" name="dynamictourtitle" value="The New California" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" />
                                                </span>
                                                <span class="wpcf7-form-control-wrap dynamictoururl">
                                                    <input type="hidden" name="dynamictoururl" value="#" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" />
                                                </span>
                                            </p>
                                            <p>
                                                <input type="submit" value="Book This Tour" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                    <div class="single_tour_view_wrapper themeborder">
                                        <div class="single_tour_view_desc">
                                            This tour&#039;s been viewed&nbsp;544&nbsp;times in the past week </div>

                                        <div class="single_tour_view_icon ti-alarm-clock"></div>
                                    </div>
                                    <br class="clear" />
                                </div> -->

                               



                                <a id="single_tour_share_button"href="mailto:<?php echo $remail ?>" class="button ghost themeborder"><span class="ti-email"></span>For any Inquiries</a>

                                <ul class="sidebar_widget">
                                    <li id="text-3" class="widget widget_text">
                                        <h2 class="widgettitle">Contact Number</h2>
                                        <div class="textwidget"><span class="ti-mobile" style="margin-right:10px;"></span><?php echo $phone ?>
                                        <?php 
                                        date_default_timezone_set('Asia/Singapore');
                                        // $timestamp=date_default_timezone_get();
                                       
                                        $currenttime = date(' H:i:s'); 
                                        // (new DateTime())-> setTimeStamp($timestamp);


                                        if (($open < $currenttime) && ($currenttime < $close)) {
                                            $status ='Open';
                                        } else {
                                            $status ='Closed';
                                        }
                                        ?>

                                            <br/>
                                            <?php echo $status ?>
                                            <?php echo $currenttime ?>
                                           </div>
                                    </li>
                                    <li id="grandtour_tour_posts-11" class="widget Grandtour_Tour_Posts">
                                        <h2 class="widgettitle">Suggested Hotel</h2>
                               <!--      <h2 class="widgettitle">Suggested Hotel</h2> -->
                                     <?php 

                                $query5  = "select * from hotel where city_id='$city' order by rand() limit 3 ";
                                $result = mysqli_query($con, $query5);
                                $sno    = 1;

                                  if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $id   = $row['hotel_id'];
                                    $hname = $row['hotel_name'];
                                    $hotelno = $row['hotel_no'];
                                    $photo = $row['hotel_photo'];  
                                    $details= $row['hotel_detail'];
                                    $hrate = $row['hotel_rate'];
                                    // $query1  = "select * from city ORDER BY city_name";
                                    // $result1 = mysqli_query($con, $query1);
                                    
                                
                            
                                    ?>
                                    
                                        <div class="one gallery1 grid static filterable portfolio_type themeborder" style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($photo); ?>);">
                                            <a class="tour_image" href="#"></a>
                                            <div class="portfolio_info_wrapper">
                                                <div class="tour_price ">
                                                    <?php echo $hrate ?> Stars</div>
                                                <h5><?php echo $hname ?></h5>
                                                <div class="tour_attribute_wrapper">
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                        $sno++;

                                        }
                                    }
                                    ?>


                                        <br class="clear" />
                                    </li>
                                </ul>

                                <div class="single_tour_users_online_wrapper themeborder">
                                    <div class="single_tour_users_online_icon">
                                        <span class="ti-info-alt"></span>
                                    </div>
                                    <div class="single_tour_users_online_content">
                                        <strong>131</strong> traveler(s) are considering our tours right now! </div>
                                </div>

                            </div>

                        </div>
                        <br class="clear" />

                        <div class="sidebar_bottom"></div>
                    </div>
                    <div class="sidebar_content ">

                        <h1><?php echo $name ?> </h1>
                        <div class="single_tour_content">
                            <p class="p1"><?php echo $detail ?></p>

                        </div>
                       <!--  <div class="single_tour_attribute_wrapper themeborder ">
                            <div class="one_fourth">
                                <div class="tour_attribute_icon ti-time"></div>
                                <div class="tour_attribute_content">
                                    <?php echo $open ?> </div>
                            </div>

                            <div class="one_fourth">
                                <div class="tour_attribute_icon ti-id-badge"></div>
                                <div class="tour_attribute_content">
                                    Age 12+ </div>
                            </div>

                            <div class="one_fourth">
                                <div class="tour_attribute_icon ti-calendar"></div>
                                <div class="tour_attribute_content">
                                    Sep,&nbsp;Oct,&nbsp;Nov,&nbsp;Dec </div>
                            </div>

                            <div class="one_fourth last">
                                <div class="tour_attribute_icon ti-user"></div>
                                <div class="tour_attribute_content">
                                    Availability 50 </div>
                            </div>

                        </div> -->
                        <br class="clear" />
                    <!--     <div class="single_tour_content">
                            <h4 class="p1">Day 1</h4>
                            <p class="p1">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                            <div id="attachment_48" style="width: 1034px" class="wp-caption alignnone"><img class="wp-image-48 size-large" src="upload/Tokyo_Dollarphotoclub_72848283-copy-1024x683.jpg" width="1024" height="683" />
                                <p class="wp-caption-text">The road to success and the road to failure are almost exactly the same</p>
                            </div>
                            <h4 class="p1">Day 2</h4>
                            <p class="p1">Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth,</p>
                            <h4 class="p1">Day 3</h4>
                            <p class="p1">Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral.</p>
                            <div id="attachment_169" style="width: 1034px" class="wp-caption alignnone"><img class="wp-image-169 size-large" src="upload/pexels-photo-1-1024x683.jpg" width="1024" height="683" />
                                <p class="wp-caption-text">Emotional discomfort, when accepted, rises, crests and falls in a series of waves.</p>
                            </div>
                            <h4 class="p1">Day 4</h4>
                            <p class="p1">Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low</p>
                            <p class="p1"><span class="s1">Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</span></p>
                            <p class="p1"><span class="s1">See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</span></p>
                        </div -->

                        <ul class="single_tour_departure_wrapper themeborder">                 

                            
                            <li>
                                <div class="single_tour_departure_title">Operating Hour</div>
                                <div class="single_tour_departure_content">
                                    <div class="one_half ">
                                       </span><?php echo $open ?> </div>
                                   
                                </div>
                            </li>
                            <li>
                                <div class="single_tour_departure_title">Closing Hour</div>
                                <div class="single_tour_departure_content">
                                    <div class="one_half ">
                                       </span><?php echo $close ?> </div>
                                    
                                </div>
                            </li>
                             <li>
                                <div class="single_tour_departure_title">Location</div>
                                <div class="single_tour_departure_content">
                                    <div class="one_half ">
                                       
                                    
                                </div>
                            </li>

                            
                        </ul>

                        <br class="clear" />

                        <div class="fullwidth_comment_wrapper sidebar">
                           <!--  <div class="row">
                <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                    <div class="form-area">       
                        <button type="submit" id="submit" name="import" class="btn-submit">RELOAD DATA</button><br />
                    </div>
                </form>
            </div> -->
            <div id="map" style="width: 100%; height: 80vh;"></div>
                            <script>
            function initMap() {
              var mapOptions = {
                zoom: 18,
                center: {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>}, //{lat: --- , lng: ....}
                mapTypeId: google.maps.MapTypeId.SATELITE
              };

              var map = new google.maps.Map(document.getElementById('map'),mapOptions);

              var RouteCoordinates = [
                <?php
                    $i = 0;
                    while ($i < count($coordinates)) {
                        echo $coordinates[$i];
                        $i++;
                    }
                ?>
              ];

              var RoutePath = new google.maps.Polyline({
                path: RouteCoordinates,
                geodesic: true,
                strokeColor: '#1100FF',
                strokeOpacity: 1.0,
                strokeWeight: 10
              });

              mark = 'img/mark.png';
              flag = 'img/flag.png';

              startPoint = {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>};
              endPoint = {<?php echo'lat:'.$latitudes[$lastcount] .', lng:'. $longitudes[$lastcount] ;?>};

              var marker = new google.maps.Marker({
                position: startPoint,
                map: map,
                icon: mark,
                title:"Start point!",
                animation: google.maps.Animation.BOUNCE
              });

              var marker = new google.maps.Marker({
              position: endPoint,
               map: map,
               icon: flag,
               title:"End point!",
               animation: google.maps.Animation.DROP
            });

              RoutePath.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <!--remenber to put your google map key-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
                        
                            <h3 class="comment_title"> Reviews</span> (Average Rating: <?php echo $avg ?>)</h3>


                           
                            <div>
                                <a name="comments"></a>
                                <?php

                                        $aname2=$_GET['restaurant_ID'];
                                        $query3="select * from rest_feedback where restaurant_id='$aname2'";

                                         $result = mysqli_query($con, $query3);
                                         $sno    = 2;


                                        if (mysqli_affected_rows($con) != 0) {
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $uid   = $row['tourist_name'];
                                        $date = $row['comment_date'];
                                        $rating = $row['res_rating'];
                                        $comment = $row['res_comment'];

                                        ?>

                                <div class="comment" id="comment-20">
                                    <!-- div class="gravatar">
                                        <img src="upload/author1-100x100.jpg" width="60" height="60" alt="Jack Dawson" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div> -->

                                    <div class="right ">
                                        

                                        <h7><?php echo $uid ?></h7>

                                        <div class="comment_date"><?php echo $date ?></div>
                                        <div class="comment_text" />
                                        <p><?php echo $comment ?></p>
                                        <div class="comment_rating_wrapper">
                                            <div class="comment_rating_label">Rating</div>
                                            <div class="br-theme-fontawesome-stars-o">
                                                <div class="br-widget">
                                                    <?php 
                                                    $star=0;
                                                    while ($star != $rating) {
                                                        ?>
                                                    <a href="javascript:;" class="br-selected"></a>
                                                    <?php
                                                    $star++;
                                                    }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
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
                            </li>
                            <!-- #comment-## -->

                        
                
                  
              
            </div>

            <!-- End of thread -->
            <div style="height:10px"></div>

            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">Write A Review <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                <?php
                $aname1=$_GET['restaurant_ID'];

                ?>
                <form action="feedbacksubmit.php" method="post" id="commentform1" class="comment-form">
                     <!-- <input type="hidden" id="Iplace_ID" name="Iplace_ID" value=/> -->
                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                    <p class="comment-form-author">
                        <label for="id">Restaurant ID <span class="required">*</span></label>
                        <input id="rid" name="restaurant_id" type="text" value="<?php echo $aname1 ?>" size="30" maxlength="245" readonly />
                    </p>
                    <p class="comment-form-comment">
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="res_comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                    </p>
                    <p class="comment-form-author">
                        <label for="author">Name <span class="required">*</span></label>
                        <input id="author" name="tourist_name" type="text" value="" size="30" maxlength="245" required='required' />
                    </p>
                    <p class="comment-form-email">
                        <label for="email">Email <span class="required">*</span></label>
                        <input id="email" name="tourist_email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' />
                    </p>
                   
                    <p class="comment-form-rating">
                        <label for="accomodation_rating">Rating</label>
                        <span class="commentratingbox">
                        <select id="accomodation_rating" name="res_rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option></select></p>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> 
                        </p>            
                    </form>
                </div><!-- #respond -->

            </div>

            </div>      
        </div>
    </div>
    <!-- End main content -->

    <br class="clear"/>
    <div class="tour_related">
        <h3 class="sub_title">Suggested Tours</h3>
        <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
            
            <?php

                                        $query4="select * from places where city_id='$city' order by rand() limit 3 ";

                                         $result = mysqli_query($con, $query4);
                                         $pno    = 1;

                                        if (mysqli_affected_rows($con) != 0) {
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $pid   = $row['Iplace_ID'];
                                        $pname = $row['place_name'];
                                        $pdetail = $row['place_details'];
                                        $phour = $row['opening_hour'];
                                        $pprice = $row['ticket_price'];
                                        $pphoto = $row['place_photo'];

            ?>
            <div class="element grid classic3_cols">
            <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-171">

                <a class="tour_image" href="#">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pphoto);  ?> " />  
                        <div class="tour_price">
                        RM<?php echo $pprice ?>                                              
                        </div> 
                    
                </a>

                <div class="portfolio_info_wrapper">
                    <a class="tour_link" href="#"><h4><?php echo $pname ?></h4></a>
                    <div class="tour_excerpt">
                        <p><?php echo $pdetail ?></p>
                    </div>
                    <div class="tour_attribute_wrapper">
                        <div class="tour_attribute_rating">
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="tour_attribute_rating_count">
                                4&nbsp; reviews </div>
                        </div>

                        <div class="tour_attribute_days">
                            <span class="ti-time"></span> <?php echo $phour ?> </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div>
        <?php 
        $pno++;
    }
}
?>
        <!-- <div class="element grid classic3_cols">
            <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-173">

                <a class="tour_image" href="#">
                    <img src="upload/pexels-photo-115070-700x466.jpeg" alt="Hong Kong" />
                    <div class="tour_price has_discount">
                        <span class="normal_price">
                           $3,000                              
                       </span> $2,400 
                   </div>
                </a>

                <div class="portfolio_info_wrapper">
                    <a class="tour_link" href="#"><h4>Hong Kong</h4></a>
                    <div class="tour_excerpt">
                        <p>Iconic, Shopping, City Tours</p>
                    </div>
                    <div class="tour_attribute_wrapper">
                        <div class="tour_attribute_rating">
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="tour_attribute_rating_count">
                                4&nbsp; reviews </div>
                        </div>

                        <div class="tour_attribute_days">
                            <span class="ti-time"></span> 1&nbsp;day </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div> -->
       <!--  <div class="element grid classic3_cols">
            <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-176">

                <a class="tour_image" href="#">
                    <img src="upload/bf1202aedf2c5b6a57d379575619a488-700x466.jpg" alt="Seoul Your Soul" />
                    <div class="tour_price ">
                        $5,900 </div>
                </a>

                <div class="portfolio_info_wrapper">
                    <a class="tour_link" href="#"><h4>Seoul Your Soul</h4></a>
                    <div class="tour_excerpt">
                        <p>City Tours, Shopping</p>
                    </div>
                    <div class="tour_attribute_wrapper">
                        <div class="tour_attribute_rating">
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="tour_attribute_rating_count">
                                4&nbsp; reviews </div>
                        </div>

                        <div class="tour_attribute_days">
                            <span class="ti-time"></span> 5&nbsp;days </div>
                    </div>
                    <br class="clear" />
                </div>
            </div>
        </div> -->
    </div>
    </div>

    </div>
    <br class="clear" />
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmVhK5ZjYRjzAe-e9ZKS1mA3NBPuViwQ"></script>
    <script type='text/javascript' src='js/plugins/jquery.simplegmaps.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.barrating.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax-video.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>

    <script type='text/javascript'>
        jQuery(document).ready(function() {
            jQuery("#map1568200871211588506").simplegmaps( {
                MapOptions: {
                    zoom: 13, scrollwheel: false, styles: [ {
                        "featureType":"landscape.man_made", "elementType":"geometry", "stylers":[ {
                            "color": "#f7f1df"
                        }
                        ]
                    }
                    , {
                        "featureType":"landscape.natural", "elementType":"geometry", "stylers":[ {
                            "color": "#d0e3b4"
                        }
                        ]
                    }
                    , {
                        "featureType":"landscape.natural.terrain", "elementType":"geometry", "stylers":[ {
                            "visibility": "off"
                        }
                        ]
                    }
                    , {
                        "featureType":"poi", "elementType":"labels", "stylers":[ {
                            "visibility": "off"
                        }
                        ]
                    }
                    , {
                        "featureType":"poi.business", "elementType":"all", "stylers":[ {
                            "visibility": "off"
                        }
                        ]
                    }
                    , {
                        "featureType":"poi.medical", "elementType":"geometry", "stylers":[ {
                            "color": "#fbd3da"
                        }
                        ]
                    }
                    , {
                        "featureType":"poi.park", "elementType":"geometry", "stylers":[ {
                            "color": "#bde6ab"
                        }
                        ]
                    }
                    , {
                        "featureType":"road", "elementType":"geometry.stroke", "stylers":[ {
                            "visibility": "off"
                        }
                        ]
                    }
                    , {
                        "featureType":"road", "elementType":"labels", "stylers":[ {
                            "visibility": "off"
                        }
                        ]
                    }
                    , {
                        "featureType":"road.highway", "elementType":"geometry.fill", "stylers":[ {
                            "color": "#ffe15f"
                        }
                        ]
                    }
                    , {
                        "featureType":"road.highway", "elementType":"geometry.stroke", "stylers":[ {
                            "color": "#efd151"
                        }
                        ]
                    }
                    , {
                        "featureType":"road.arterial", "elementType":"geometry.fill", "stylers":[ {
                            "color": "#ffffff"
                        }
                        ]
                    }
                    , {
                        "featureType":"road.local", "elementType":"geometry.fill", "stylers":[ {
                            "color": "black"
                        }
                        ]
                    }
                    , {
                        "featureType":"transit.station.airport", "elementType":"geometry.fill", "stylers":[ {
                            "color": "#cfb2db"
                        }
                        ]
                    }
                    , {
                        "featureType":"water", "elementType":"geometry", "stylers":[ {
                            "color": "#a2daf2"
                        }
                        ]
                    }
                    ],
                }
            }
            );
        }

        );
    </script>
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
