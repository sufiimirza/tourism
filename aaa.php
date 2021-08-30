echo "<tr><td>".$sno."</td>";

                                            // echo "<td>" . $row1['expire'] . "</td>";
                                            
                                            echo "<td>" . $row['article_id'] . "</td>";

                                            echo "<td>" . $row['article_name'] . "</td>";

                                            echo "<td>" . $row['release_date'] . "</td>";

                                            ?>
                                            <td><a href="articledetail.php?article_id=<?php echo $row['article_id']; ?>" class='btn' style='background: seagreen;'>VIEW</a><br><br></td>
                                            
                                            <td><a href="articleedit.php?article_id=<?php echo $row['article_id']; ?>" class='btn' style='background: blue;'>EDIT</a><br><br></td>
                                            <?php
                                            $sno++;
                                   
                                            $uid = 0;


                                            echo " <div class='one_half gallery2 classic static filterable portfolio_type themeborder' data-id='post-2'>
                                        <a class='tour_image'>
                                            <img src=" . $row['place_photo'] . " />

                                            <div class='tour_price'>
                                             " . $row['ticket_price'] . " </div>
                                        </a>
                         
                                        <div class='portfolio_info_wrapper'>
                                            <a class='tour_link'> <h4>French Autumn</h4></a>
                                            <div class='tour_excerpt'>
                                                <p>City Tours, Urban</p>
                                            </div>
                                            <div class='tour_attribute_wrapper'>
                                                <div class='tour_attribute_rating'>
                                                    <div class='br-theme-fontawesome-stars-o'>
                                                        
                                                    </div>
                                                    <div class='tour_attribute_rating_count'>
                                                        4&nbsp; reviews </div>
                                                </div>

                                                <div class='tour_attribute_days'>
                                                    <span class='ti-time'></span> 5&nbsp;days </div>
                                            </div>
                                            <br class='clear' />
                                        </div>
                                    </div>";      
                                  $sno++;         




            //                                  /.menu js__accordion 
            // <!-- <h5 class="title">Components</h5> -->
            // <!-- /.title -->
            // <!-- <ul class="menu js__accordion">
            //     <li>
            //         <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-bar-chart"></i><span>Charts</span><span class="menu-arrow fa fa-angle-down"></span></a>
            //         <ul class="sub-menu js__content">
            //             <li><a href="chart-3d.html">3D Charts</a></li>
            //             <li><a href="chart-chartist.html">Chartist Charts</a></li>
            //             <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
            //             <li><a href="chart-dynamic.html">Dynamic Chart</a></li>
            //             <li><a href="chart-flot.html">Flot Chart</a></li>
            //             <li><a href="chart-knob.html">Knob Chart</a></li>
            //             <li><a href="chart-morris.html">Morris Chart</a></li>
            //             <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
            //             <li><a href="chart-other.html">Other Chart</a></li>
            //         </ul>
            //         </.sub-menu js__content -->
            //     <!-- </li>
            //     <li>
            //         <a class="waves-effect" href="calendar.html"><i class="menu-icon fa fa-calendar"></i><span>Calendar</span></a>
            //     </li>
            //     <li class="current active">
            //         <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-th-large"></i><span>Forms</span><span class="notice notice-blue">7</span></a>
            //         <ul class="sub-menu js__content">
            //             <li class="current"><a href="cityadd.php">General Elements</a></li>
            //             <li><a href="restaurantadd.php">Advanced Form</a></li>
            //             <li><a href="articleadd.php">Form Uploads</a></li>
            //             <li><a href="form-validation.html">Form Validation</a></li>
            //             <li><a href="form-wizard.html">Form Wizard</a></li>
            //             <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
            //             <li><a href="form-xeditable.html">X-editable</a></li>
            //         </ul> -->
            //         <!-- /.sub-menu js__content -->
            //     <!-- </li>
            //     <li>
            //         <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-table"></i><span>Tables</span><span class="menu-arrow fa fa-angle-down"></span></a>
            //         <ul class="sub-menu js__content">
            //             <li><a href="tables-basic.html">Basic Tables</a></li>
            //             <li><a href="tables-datatable.html">Data Tables</a></li>
            //             <li><a href="tables-responsive.html">Responsive Tables</a></li>
            //             <li><a href="tables-editable.html">Editable Tables</a></li>
            //         </ul> -->
            //         <!-- /.sub-menu js__content -->
            //     <!-- </li>
            // </ul> -->
            // <!-- /.menu js__accordion -->
            // <!-- <h5 class="title">Additions</h5> -->
            // <!-- /.title -->
            // <!-- <ul class="menu js__accordion">
            //     <li>
            //         <a class="waves-effect" href="profile.html"><i class="menu-icon fa fa-user"></i><span>Profile</span></a>
            //     </li>
            //     <li>
            //         <a class="waves-effect" href="inbox.html"><i class="menu-icon fa fa-envelope"></i><span>Mail</span><span class="notice notice-danger">New</span></a>
            //     </li>
            //     <li>
            //         <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-file-text"></i><span>Page</span><span class="menu-arrow fa fa-angle-down"></span></a>
            //         <ul class="sub-menu js__content">
            //             <li><a href="page-starter.html">Starter Page</a></li>
            //             <li><a href="page-login.html">Login</a></li>
            //             <li><a href="page-register.html">Register</a></li>
            //             <li><a href="page-recoverpw.html">Recover Password</a></li>
            //             <li><a href="page-lock-screen.html">Lock Screen</a></li>
            //             <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
            //             <li><a href="page-404.html">Error 404</a></li>
            //             <li><a href="page-500.html">Error 500</a></li>
            //         </ul> -->
            //         <!-- /.sub-menu js__content -->
            //     <!-- </li>
            //     <li>
            //         <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-folder-open"></i><span>Extra Pages</span><span class="menu-arrow fa fa-angle-down"></span></a>
            //         <ul class="sub-menu js__content">
            //             <li><a href="extras-contact.html">Contact list</a></li>
            //             <li><a href="extras-email-template.html">Email template</a></li>
            //             <li><a href="extras-faq.html">FAQ</a></li>
            //             <li><a href="extras-gallery.html">Gallery</a></li>
            //             <li><a href="extras-invoice.html">Invoice</a></li>
            //             <li><a href="extras-maps.html">Maps</a></li>
            //             <li><a href="extras-pricing.html">Pricing</a></li>
            //             <li><a href="extras-projects.html">Projects</a></li>
            //             <li><a href="extras-taskboard.html">Taskboard</a></li>
            //             <li><a href="extras-timeline.html">Timeline</a></li>
            //             <li><a href="extras-tour.html">Tour</a></li>
            //         </ul> -->
            //         <!-- /.sub-menu js__content -->
            //     <!-- </li> -->
            // <!-- </ul> --> -->
            // <!-- /.menu js__accordion -->