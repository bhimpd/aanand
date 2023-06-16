<?php
$pageTitle = "Hotel";
?>
<?php
include "main.php";
?>

<?php include "header.php" ?>


<!-- background image with text  -->
<section class="showcase">

    <img src="assets/images/bg1.jpg" alt="Picture" class="img-fluid">
    <div class="overlay">
        <h2 class="animate__animated animate__backInUp animate__delay-1s">Best Hotel</h2>
        <div class="astrodivider  animate__animated animate__backInLeft animate__delay-1s">
            <div class="astrodividermask"></div>
            <span><i>&#10038;</i></span>
        </div>

        <h1 class="animate__animated animate__backInDown animate__delay-1s">In Town</h1>

        <p class="animate__animated animate__slideInRight animate__delay-1s">
            We offer a luxurious and comfortable stay with exceptional amenities and services.
        </p>
    </div>

</section>
<!-- ended background image with the text -->



<!-- Our hotel text started -->
<div class=" container text-center my-5">
    <h1 class="headings">Our Hotel</h1>
</div>
<!-- our hotel text ended -->




<!-- about us section started....... -->
<section id="aboutsection">
    <img src="assets/images/bg2.jpg" alt="" class="img-fluid bgimg">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-6" style="color:white;">
                <h2 data-aos="flip-left">Our <span style="color:yellow;">Hotel</span></h2>
                <p>The hotel is a premier destination for discerning travelers seeking a luxurious and unforgettable
                    stay. With its elegant and stylish design, it exudes sophistication and offers a seamless blend
                    of
                    modern comfort and classic charm. From spacious and well-appointed rooms to world-class
                    amenities
                    and exceptional service, every aspect of the hotel is designed to exceed guest expectations</p>
                <button class="btn btn-outline-success my-3" type="submit">Book Now</button>

            </div>
            <div class="col-md-6 ">
                <img src="assets/images/hotel.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

</section>
<!-- about us section ended........ -->

<!-- service text started -->
<div class="container text-center mb-5">

    <h1 class="headings">Our Services</h1>

</div>
</div>
<!-- service text ends -->


<!-- our services section started -->
<section id="servicesection">
    <img src="assets/images/bgflower.jpg" alt="" class="img-fluid bgimg">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container py-5">
                    <div class="row">

                        <div class="col-md-6" style="color:white;">
                            <h2>Our <span style="color:yellow;">Garden</span></h2>
                            <p>Leads to Happier & Healthier Life</p>
                            <p>With its serene atmosphere and natural beauty, it offers a peaceful retreat for
                                relaxation and rejuvenation. Whether strolling through the pathways or sitting
                                amidst
                                the greenery, guests can immerse themselves in the soothing sights and sounds of
                                nature.
                            </p>

                            <div class="wrap d-flex mb-5">
                                <div class="happy">
                                    <a class="hover-fx"><i class="fa-solid fa-child-reaching"></i>
                                    </a>
                                    <p>Happy life</p>
                                </div>
                                <div class="flowers">
                                    <a class="hover-fx"><i class="fa-sharp fa-solid fa-seedling"></i></a>
                                    <p>Flowers</p>
                                </div>
                                <div class="greenery">
                                    <a class="hover-fx"><i class="fa-solid fa-tree-city"></i></a>
                                    <p>Greenery</p>
                                </div>
                                <div class="freshair">
                                    <a class="hover-fx"><i class="fa-solid fa-tree"></i></a>
                                    <p>Fresh Air</p>
                                </div>
                            </div>
                            <!-- forked from https://tympanus.net/Development/IconHoverEffects/ -->
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/garden.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">

                        <div class="col-md-6" style="color:white;">
                            <h2>Health Club <span style="color:yellow;"> & Recreation</span></h2>
                            <p> Promotes physical fitness, relaxation, and rejuvenation.</p>
                            <p>The health club and recreation facility provides a comprehensive range of fitness
                                equipment and classes, allowing individuals to achieve their health and wellness
                                goals
                                in a motivating and supportive environment.</p>

                            <div class="wrap d-flex mb-5">
                                <div class="happy">
                                    <a class="hover-fx"><i class="fa-solid fa-dumbbell"></i>
                                    </a>
                                    <p>Gym</p>
                                </div>
                                <div class="flowers">
                                    <a class="hover-fx"><i class="fa-sharp fa-solid fa-bed"></i></a>
                                    <p>Spa</p>
                                </div>
                                <div class="greenery">
                                    <a class="hover-fx"><i class="fa-solid fa-hot-tub-person"></i></a>
                                    <p>Steam</p>
                                </div>
                                <div class="freshair">
                                    <a class="hover-fx"><i class="fa-solid fa-house-tsunami"></i></a>
                                    <p>Sauna</p>
                                </div>
                            </div>
                            <!-- forked from https://tympanus.net/Development/IconHoverEffects/ -->
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/gym.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">

                        <div class="col-md-6" style="color:white;">
                            <h2>Meetings <span style="color:yellow;"> & Events</span></h2>
                            <p>Leads to Socialization & Cheerful Life</p>
                            <p>With its serene atmosphere and natural beauty, it offers meetings and events
                                in_arrayour
                                beautiful hall.We offer various services in our meeting and during the
                                events.We are happy to offer share our hospitality, culture through our meetings and
                                events.</p>

                            <div class="wrap d-flex mb-5">
                                <div class="happy">
                                    <a class="hover-fx"><i class="fa-solid fa-temperature-arrow-up"></i>
                                    </a>
                                    <p>Air Conditioner</p>
                                </div>
                                <div class="flowers">
                                    <a class="hover-fx"><i class="fa-solid fa-users-viewfinder"></i></a>
                                    <p>Projector</p>
                                </div>
                                <div class="greenery">
                                    <a class="hover-fx"><i class="fa-solid fa-ranking-star"></i></a>
                                    <p>Podium</p>
                                </div>
                                <div class="freshair">
                                    <a class="hover-fx"><i class="fa-sharp fa-solid fa-microphone-lines"></i></a>
                                    <p>MicroPhone</p>
                                </div>
                            </div>
                            <!-- forked from https://tympanus.net/Development/IconHoverEffects/ -->
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/meeting.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">

                        <div class="col-md-6" style="color:white;">
                            <h2>Swimming <span style="color:yellow;">Pool</span></h2>
                            <p>Leads to Refreshment & Commited Life</p>
                            <p>In addition to promoting the development of our muscle mass in a much less an
                                aggressive
                                way for our joints than other exercises, swimming is psychologically beneficial and
                                gives us more confidence in ourselves. Swimming is a very complete sport, it allows
                                to
                                work the arms, the back, and the legs … Either the whole body. </p>

                            <div class="wrap d-flex mb-5">
                                <div class="happy">
                                    <a class="hover-fx"><i class="fa-solid fa-water-ladder"></i>
                                    </a>
                                    <p>Fresh Water</p>
                                </div>
                                <div class="flowers">
                                    <a class="hover-fx"><i class="fa-solid fa-mountain-sun"></i></a>
                                    <p>View</p>
                                </div>
                                <div class="greenery">
                                    <a class="hover-fx"><i class="fa-solid fa-volleyball"></i></a>
                                    <p>Water Game</p>
                                </div>
                                <div class="freshair">
                                    <a class="hover-fx"><i class="fa-solid fa-umbrella-beach"></i></a>
                                    <p>Pool Bench</p>
                                </div>
                            </div>
                            <!-- forked from https://tympanus.net/Development/IconHoverEffects/ -->
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/swimmingpool.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




</section>

<!-- our services section ended here.... -->



<!-- our rooms text started -->
<div class="container text-center mb-5">
    <h1 class="headings">Our Accodomation</h1>
</div>
<!-- our room text ended -->



<!-- our room section with nav tab started -->

<div class="container">
    <!-- Pills navs -->
    <ul class="nav nav-pills nav-fill mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex2-tab-1" data-bs-toggle="pill" href="#ex2-pills-1" role="tab"
                aria-controls="ex2-pills-1" aria-selected="true">Junior Suite</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-2" data-bs-toggle="pill" href="#ex2-pills-2" role="tab"
                aria-controls="ex2-pills-2" aria-selected="false">Queen Room</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-bs-toggle="pill" href="#ex2-pills-3" role="tab"
                aria-controls="ex2-pills-3" aria-selected="false">Honeymoon Suite</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-4" data-bs-toggle="pill" href="#ex2-pills-4" role="tab"
                aria-controls="ex2-pills-4" aria-selected="true">Family Room</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-5" data-bs-toggle="pill" href="#ex2-pills-5" role="tab"
                aria-controls="ex2-pills-5" aria-selected="false">Deluxe Double</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-6" data-bs-toggle="pill" href="#ex2-pills-6" role="tab"
                aria-controls="ex2-pills-6" aria-selected="false">Deluxe Single</a>
        </li>
    </ul>
</div>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content" id="ex2-content">
    <div class="tab-pane fade show active" id="ex2-pills-1" role="tabpanel" aria-labelledby="ex2-tab-1">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6"> <img src="assets/images/hotel.jpg" alt="" class="img-fluid"></div>
                    <div class="col-md-6">
                        <h1>Junior Suite </h1>
                        <p>Relax in our Junior Suite that features a plush King bed, crisp linens, bathrobes and
                            slippers, flat-screen television with satellite channels, and mini bar, with plenty of
                            extra
                            room to accommodate a small group looking to explore our city.</p>
                        <button class="btn btn-outline-success my-3" type="submit">View More</button>
                        <button class="btn btn-outline-success my-3" type="submit">Book Now</button>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <div class="tab-pane fade" id="ex2-pills-2" role="tabpanel" aria-labelledby="ex2-tab-2">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6"> <img src="assets/images/hotel.jpg" alt="" class="img-fluid"></div>
                    <div class="col-md-6">
                        <h1>Queen Room </h1>
                        <p>Relax in our Queen Room that features a plush King bed, crisp linens, bathrobes and
                            slippers,
                            flat-screen television with satellite channels, and mini bar, with plenty of extra room
                            to
                            accommodate a small group looking to explore our city.</p>
                        <button class="btn btn-outline-success my-3" type="submit">View More</button>
                        <button class="btn btn-outline-success my-3" type="submit">Book Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-pills-3" role="tabpanel" aria-labelledby="ex2-tab-3">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6"> <img src="assets/images/hotel.jpg" alt="" class="img-fluid"></div>
                    <div class="col-md-6">
                        <h1>Honeymoon Suite </h1>
                        <p>Relax in our Honeymoon Suite that features a plush King bed, crisp linens, bathrobes and
                            slippers, flat-screen television with satellite channels, and mini bar, with plenty of
                            extra
                            room to accommodate a small group looking to explore our city.</p>
                        <button class="btn btn-outline-success my-3" type="submit">View More</button>
                        <button class="btn btn-outline-success my-3" type="submit">Book Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-pills-4" role="tabpanel" aria-labelledby="ex2-tab-4">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6"> <img src="assets/images/hotel.jpg" alt="" class="img-fluid"></div>
                    <div class="col-md-6">
                        <h1>Family Room </h1>
                        <p>Relax in our Family Room that features a plush King bed, crisp linens, bathrobes and
                            slippers, flat-screen television with satellite channels, and mini bar, with plenty of
                            extra
                            room to accommodate a small group looking to explore our city.</p>
                        <button class="btn btn-outline-success my-3" type="submit">View More</button>
                        <button class="btn btn-outline-success my-3" type="submit">Book Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-pills-5" role="tabpanel" aria-labelledby="ex2-tab-5">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6"> <img src="assets/images/hotel.jpg" alt="" class="img-fluid"></div>
                    <div class="col-md-6">
                        <h1>Deluxe Double </h1>
                        <p>Relax in our Deluxe Double that features a plush King bed, crisp linens, bathrobes and
                            slippers, flat-screen television with satellite channels, and mini bar, with plenty of
                            extra
                            room to accommodate a small group looking to explore our city.</p>
                        <button class="btn btn-outline-success my-3" type="submit">View More</button>
                        <button class="btn btn-outline-success my-3" type="submit">Book Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex2-pills-6" role="tabpanel" aria-labelledby="ex2-tab-6">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6"> <img src="assets/images/hotel.jpg" alt="" class="img-fluid"></div>
                    <div class="col-md-6">
                        <h1>Deluxe Single </h1>
                        <p>Relax in our Deluxe Single that features a plush King bed, crisp linens, bathrobes and
                            slippers, flat-screen television with satellite channels, and mini bar, with plenty of
                            extra
                            room to accommodate a small group looking to explore our city.</p>
                        <button class="btn btn-outline-success my-3" type="submit">View More</button>
                        <button class="btn btn-outline-success my-3" type="submit">Book Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pills content -->
<!-- our room section with nav tab ends here -->


<!-- our gallery text here -->
<div class="container text-center mb-5">
    <h1 class="headings">Our Gallery</h1>
</div>
<!-- our gallery text ends here -->



<!-- gallery images here -->
<!-- gallery images ends here -->