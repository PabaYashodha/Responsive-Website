<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require './includes/css.php' ?>
</head>

<body>
    <?php require './includes/header.php' ?>

    <!-- ======= SECTION 1 IMAGE SLIDER ======-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/wall4.jpg" class="d-block w-100 image-slider-1" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p id="slider-text">Eco Friendly</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/wall3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p id="slider-text">Save Your Money</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/wall5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p id="slider-text">Eliminates Sound Pollution </p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- =====END IMAGE SLIDER====== -->

    <!--======== SECTION 2 WELCOME NOTE========= -->

    <section class="container-fluid welcomeNoteContainer">
        <div class="row py-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="text-center mt-4 section3header">WELCOME TO MAHASEN MARINE</h2>
                <p class=" text-center welcomeNote mt-3 p-4 ">
                    Mahasen Marine Private is Sri Lanka's leading solar and hybrid boat manufacture. With the
                    decades long experience in renewable energy industry Mahasen Marine build most eco friendly boats and deliver all over the world. We design and manufacture full range of boats from small fishing boat to 80 feet dining cruise in our factory in Colombo - Sri Lanka. You are welcome to experience our
                    most innovative boats series to explore and enjoy waters in an eco friendly manner.
                </p>
                <button type="button" class="btn btn-primary btn-lg rounded-pill bg-transparent btn-outline-dark mx-auto aboutUsBtn">About Us</button>
            </div>
        </div>
    </section>
    <!-- =====END WELCOME NOTE====== -->

    <!-- ===== SECTION 3 WHAT IS SOLAR BOAT======= -->

    <div class="container">
        <div class="row py-5">
            <div class="col-12 pb-5">
                <h2 class="text-center mt-4 section3header">What is Solar Boat?</h3>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <img src="assets/images/solar_boat.jpg" class="rounded-5 shadow-lg" width="100%">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <p class="section3Text pt-lg-0 pt-sm-5">
                    Throughout history, boats have relied on various sources of propulsion, including
                    human power through paddling, wind power, or motorized power with the help of gasoline.
                    However, technological advancements have brought about a revolution in the way boats are powered. In modern times, we have witnessed the emergence of solar-powered boats that use the sun's energy to promote environmental
                    sustainability.
                    Solar boats, as the name suggests, derive their power from the sun. They incorporate
                    the use of solar panels and storage batteries that convert sunlight into electrical
                    energy to propel the boat. The incorporation of this technology results in an
                    energy-efficient and eco-friendly mode of transportation that eliminates the dependence
                    on fossil fuels.
                </p>
            </div>
        </div>
    </div>

    <!-- =========END SECTION 3======= -->

    <!-- ======SECTION 4======= -->
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 pb-5">
                <h1 class="text-center mt-4 section3header">Our Boat Models</h1>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
                <div class="card">
                    <div class="card-body shadow-lg " id="boatModelName">
                        <img src="assets/images/small.jpeg" class="card-img-top" alt="...">
                        ES20
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
                <div class="card">
                    <div class="card-body shadow-lg" id="boatModelName">
                        <img src="assets/images/small.jpeg" class="card-img-top" alt="...">
                        ES20 - DOUBLE HULL
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
                <div class="card">
                    <div class="card-body shadow-lg" id="boatModelName">
                        <img src="assets/images/small.jpeg" class="card-img-top" alt="...">
                        ES25
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
                <div class="card">
                    <div class="card-body shadow-lg" id="boatModelName">
                        <img src="assets/images/small.jpeg" class="card-img-top" alt="...">
                        ES25 - PASSENGER
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- ======END SECTION 4====== -->

        <!--====== SECTION 5 ======-->
        <div class="container mt-5 text-center" id="section5Background">

            <div class="row mt-5">
                <div class="col-12 pb-5">
                    <h1 class="text-center mt-5 section3header">Why Solar Boats</h1>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="assets/images/fully electric.png" class="sectionFiveImage">
                    <p class="sectionFiveText mt-3">Fully Electric Drive</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="assets/images/eco friendly2.png" class="sectionFiveImage">
                    <p class="sectionFiveText mt-3">Eco Friendly</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="assets/images/cost effective.png" class="sectionFiveImage">
                    <p class="sectionFiveText mt-3">Cost Effective</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="assets/images/silence.png" class="sectionFiveImage">
                    <p class="sectionFiveText mt-3">Silent Drive</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="assets/images/renewable.png" class="sectionFiveImage">
                    <p class="sectionFiveText mt-3">Renewable Energy</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="assets/images/zero maintence.png" class="sectionFiveImage">
                    <p class="sectionFiveText mt-3">Zero Maintenance</p>
                </div>
            </div>
        </div>
        <!--====== END SECTION 5 ======-->

        <!-- ========SECTION 6======== -->
        <div class="container mt-5">
            <div class="row mt-5 text-center">
                <div class="col-12 pb-5">
                    <h1 class="text-center mt-5 section3header">Contact Us</h1>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa-solid fa-mobile fs-3"></i>
                    <p class="mt-2">Call:</p>
                    <p>+94 112801017</p>
                    <p>+94 711692567</p>
                    <p>+94 703727241</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa-solid fa-envelope fs-3"></i>
                    <p class="mt-2">Email - mahasenmarine@gmail.com</p>
                    <p>Web - mahasenmarine.com</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa-solid fa-location-dot fs-3"></i>
                    <p class="mt-2">Operations :</p>
                    <p>Monday to Saturday (9 AM -5 PM)</p>
                </div>
            </div>
        </div>

        <!-- =====END SECTION 6 =======-->

        <?php require './includes/footer.php' ?>

        <?php require './includes/script.php' ?>
</body>

</html>