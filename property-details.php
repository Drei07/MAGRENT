<?php
include_once 'dashboard/user/authentication/user-forgot-password.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the values from the POST request
    $propertyId = isset($_POST['property_id']) ? $_POST['property_id'] : '';

    // Store the values in session variables
    $_SESSION['property_id'] = $propertyId;
}

// Retrieve the values from session variables
$propertyId = isset($_SESSION['property_id']) ? $_SESSION['property_id'] : '';

//property data
$stmt = $user->runQuery("SELECT * FROM property WHERE id=:id");
$stmt->execute(array(":id" => $propertyId));
$property_data = $stmt->fetch(PDO::FETCH_ASSOC);

//user data
$stmt = $user->runQuery("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id" => $property_data['user_id']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
$user_fullname          = $user_data['last_name'] . ", " . $user_data['first_name'];
$user_profile           = $user_data['profile'];


//property gallery data
$stmt = $user->runQuery("SELECT * FROM property_gallery WHERE property_id=:id");
$stmt->execute(array(":id" => $propertyId));
$property_gallery_data = $stmt->fetch(PDO::FETCH_ASSOC);

//property location
$stmt = $user->runQuery("SELECT * FROM property_location WHERE property_id=:id");
$stmt->execute(array(":id" => $propertyId));
$property_location_data = $stmt->fetch(PDO::FETCH_ASSOC);

//property floor plan
$stmt = $user->runQuery("SELECT * FROM property_floor_plan WHERE property_id=:id");
$stmt->execute(array(":id" => $propertyId));
$property_floor_plan_data = $stmt->fetch(PDO::FETCH_ASSOC);

//property floor plan
$stmt = $user->runQuery("SELECT * FROM property_viewing_time WHERE property_id=:id");
$stmt->execute(array(":id" => $propertyId));
$property_viewing_time_data = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'configuration/header.php'; ?>
    <title>MAGRENT | Property Details</title>
</head>
<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-clock"></i>Mon - Sat 9.00 - 18.00</li>
                            <li><i class="far fa-phone"></i><a href="tel:2512353256"><?php echo $config->getSystemNumber() ?></a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="<?php echo $config->getSystemFacebook() ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $config->getSystemInstagram() ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="sign-box">
                            <a href="signin"><i class="fas fa-user"></i>Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="./"><img src="src/images/main_logo/<?php echo $config->getSystemLogo() ?>" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="./"><span>Home</span></a></li>
                                        <li class=""><a href="partners"><span>Became A Partner</span></a></li>
                                        <li class=""><a href="find-home"><span>Find A Home</span></a></li>
                                        <li class=""><a href="about-us"><span>About Us</span></a></li>
                                        <li><a href="contact-us"><span>Contact Us</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="./"><img src="src/images/main_logo/<?php echo $config->getSystemLogo() ?>" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href=""><img src="src/images/main_logo/<?php echo $config->getSystemLogo() ?>" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href=""><?php echo $config->getSystemName() ?></a></li>
                        <li><a href="">/<?php echo $config->getSystemEmail() ?></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href=""><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->



        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(src/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(src/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Property Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="./">Home</a></li>
                        <li>Property Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3><?php echo $property_data['property_name'] ?></h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                                <figure class="author-thumb"><img src="src/images/feature/author-1.jpg" alt=""></figure>
                                <h6>Rating's</h6>
                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <div class="price-box pull-right">
                                <h3>₱ <?php echo number_format($property_data['property_price']); ?></h3>
                            </div>
                        </div>
                        <ul class="other-option pull-right clearfix">
                            <!-- <button type="submit" onclick="setSessionValues(<?php echo $property_data['id'] ?>)" class="theme-btn btn-one">Edit Details</button> -->
                            <!-- <li><a href="controller/property-controller?property_id=<?php echo $propertyId ?>&delete_property=1" class="delete_property"><i class='bx bxs-trash' ></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <figure class="image-box"><img src="src/images/property_gallery/<?php echo $property_gallery_data['picture_1'] ?>" alt=""></figure>
                                    <figure class="image-box"><img src="src/images/property_gallery/<?php echo $property_gallery_data['picture_2'] ?>" alt=""></figure>
                                    <figure class="image-box"><img src="src/images/property_gallery/<?php echo $property_gallery_data['picture_3'] ?>" alt=""></figure>
                                    <figure class="image-box"><img src="src/images/property_gallery/<?php echo $property_gallery_data['picture_4'] ?>" alt=""></figure>
                                    <figure class="image-box"><img src="src/images/property_gallery/<?php echo $property_gallery_data['picture_5'] ?>" alt=""></figure>

                                </div>
                            </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Property Description</h4>
                                    <ul class="other-option pull-right clearfix">
                                </div>
                                <div class="text">
                                    <p><?php echo $property_data['property_description'] ?></p>
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Property Details</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Garage Size: <span><?php echo $property_data['garage_size'] ?> Sq Ft</span></li>
                                    <li>Property Price: <span>$30,000</span></li>
                                    <li>Bedrooms: <span><?php echo $property_data['bedrooms'] ?></span></li>
                                    <li>Property Type:<span>
                                            <?php
                                            if ($property_data['property_type'] == 1) {
                                                echo "Apartment";
                                            } elseif ($property_data['property_type'] == 2) {
                                                echo "House";
                                            } elseif ($property_data['property_type'] == 3) {
                                                echo "Lady's Bed Space";
                                            } elseif ($property_data['property_type'] == 4) {
                                                echo "Men's Bed Space";
                                            } elseif ($property_data['property_type'] == 5) {
                                                echo "Dormitory";
                                            } elseif ($property_data['property_type'] == 5) {
                                                echo "Transient";
                                            } else {
                                                echo "";
                                            }

                                            ?>
                                        </span></li>
                                    <li>Bathrooms: <span><?php echo $property_data['bathrooms'] ?></span></li>
                                    <li>Property Size: <span><?php echo $property_data['property_size'] ?> Sq Ft</span></li>
                                    <li>Parking: <span><?php echo $property_data['parking'] ?></span></li>
                                </ul>
                            </div>
                            <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Amenities</h4>
                                </div>
                                <ul class="list clearfix">
                                    <?php
                                    $stmt1 = $user->runQuery("SELECT * FROM property WHERE id=:id");
                                    $stmt1->execute(array(":id" => $property_data['id']));

                                    if ($stmt1->rowCount() >= 1) {
                                        while ($property_data = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                            // Explode the values from the amenities column
                                            $amenitiesArray = explode(',', $property_data['amenities']);

                                            // Iterate through the exploded values
                                            foreach ($amenitiesArray as $amenity) {
                                                // Use each amenity value as needed
                                                // echo "Amenity: " . trim($amenity) . "<br>";
                                                $stmt2 = $user->runQuery("SELECT * FROM amenities WHERE id=:id");
                                                $stmt2->execute(array(":id" => trim($amenity)));
                                                $amenities_data = $stmt2->fetch(PDO::FETCH_ASSOC);

                                    ?>
                                                <li><?php echo $amenities_data['amenities'] ?></li>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="floorplan-inner content-widget">
                                <div class="title-box">
                                    <h4>Floor Plan</h4>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>First Floor</h5>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content-box">
                                                <figure class="image-box">
                                                    <img src="src/images/property_floorplan/<?php echo $property_floor_plan_data['first_floor'] ?>" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>Second Floor</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content-box">
                                                <figure class="image-box">
                                                    <img src="src/images/property_floorplan/<?php echo $property_floor_plan_data['second_floor'] ?>" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>Third Floor</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content-box">
                                                <figure class="image-box">
                                                    <img src="src/images/property_floorplan/<?php echo $property_floor_plan_data['third_floor'] ?>" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Location</h4>
                                </div>
                                <div class="google-map-area">
                                    <div id="map-canvas"></div>

                                </div>
                            </div>
                            <div class="schedule-box content-widget">
                                <div class="title-box">
                                    <h4>Property Viewing Schedule</h4>
                                </div>
                                <div class="form-inner">
                                    <h6>Visiting Rules:</h6>
                                    <p><?php echo $property_viewing_time_data['visiting_rules'] ?></p><br>
                                    <h6>Visitation Time From:</h6>
                                    <p><?php echo date("h:i A", strtotime($property_viewing_time_data['visitation_hours_from'])); ?></p><br>
                                    <h6>Visitation Time To:</h6>
                                    <p><?php echo date("h:i A", strtotime($property_viewing_time_data['visitation_hours_to'])); ?></p><br>
                                </div>
                                <div class="amenities-box">
                                    <ul class="list clearfix">
                                        <?php
                                        $stmt3 = $user->runQuery("SELECT * FROM property_viewing_time WHERE property_id=:id");
                                        $stmt3->execute(array(":id" => $propertyId));

                                        if ($stmt3->rowCount() >= 1) {
                                            while ($property_viewing_time_data = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                                // Explode the values from the amenities column
                                                $visitationDaysArray = explode(',', $property_viewing_time_data['visitation_days']);

                                                // Iterate through the exploded values
                                                foreach ($visitationDaysArray as $days) {
                                                    // Use each amenity value as needed
                                                    // echo "Amenity: " . trim($amenity) . "<br>";
                                                    $stmt5 = $user->runQuery("SELECT * FROM day WHERE id=:id");
                                                    $stmt5->execute(array(":id" => trim($days)));
                                                    $days_data = $stmt5->fetch(PDO::FETCH_ASSOC);

                                        ?>
                                                    <li><?php echo $days_data['day'] ?></li>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="src/images/profile/<?php echo $user_profile ?>" alt=""></figure>
                                    <div class="inner">
                                        <h6><?php echo $user_fullname ?></h6><br>
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i>84 St. John Wood High Street,
                                                St Johns Wood</li>
                                            <li><i class="fas fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column mx-auto">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p>Welcome to Magrent! Discover the perfect living space with our easy-to-use room rental finder.</p>
                                    <p>Find your next home is now a seamless experience – just a few clicks away.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column mx-auto">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="about-us">About Us</a></li>
                                        <li><a href="find-home">Find Home</a></li>
                                        <li><a href="contact-us">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column mx-auto">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $config->getSystemAddress() ?></li>
                                        <li><i class="fas fa-phone"></i><a href=""><?php echo $config->getSystemNumber() ?></a></li>
                                        <li><i class="fas fa-envelope"></i><a href=""><?php echo $config->getSystemEmail() ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright pull-left">
                            <p><?php echo $config->getSystemCopyright() ?></p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="terms">Terms of Service</a></li>
                            <li><a href="privacy_policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

    <!-- script -->
    <?php include_once 'configuration/footer.php'; ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzYdQJTyqPkzfTsVEwzJSSgQhe_Qg9OLI&callback=initMap" async defer></script>
    <script>
        function initMap() {
            // Replace the coordinates with the desired location
            var location = {
                lat: <?php echo $property_location_data['latitude'] ?>,
                lng: <?php echo $property_location_data['longitude'] ?>
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: location,
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Your Location'
            });
        }

        function setSessionValues(propertyId) {
			fetch('edit-property-details.php', {
					method: 'POST',
					headers: {
						'Content-Type': 'application/x-www-form-urlencoded',
					},
					body: 'property_id=' + encodeURIComponent(propertyId),
				})
				.then(response => {
					window.location.href = 'edit-property-details';
				})
				.catch(error => {
					console.error('Error:', error);
				});
		}

    </script>
    <?php include_once 'configuration/sweetalert.php'; ?>

</body><!-- End of .page_wrapper -->

</html>