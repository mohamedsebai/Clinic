
<?php require_once('templates/header.php'); ?>
<body>
    <div class="page-wrapper">
    <?php require_once('templates/nav.php'); ?>
        <div class="container-fluid bg-blue text-white pt-3">
            <div class="container pb-5">
                <div class="row gap-2">
                    <div class="col-sm order-sm-2">
                        <img src="assets/images/banner.jpg" class="img-fluid banner-img banner-img" alt="banner-image"
                            height="200">
                    </div>
                    <div class="col-sm order-sm-1">
                        <h1 class="h1">Have a Medical Question?</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                            laborum
                            saepe
                            enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis
                            consequatur
                            cum
                            iure
                            quod facere.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="h1 fw-bold text-center my-4">majors</h2>

            <div class="d-flex flex-wrap gap-4 justify-content-center">

                <div class="card p-2" style="width: 18rem;">
                    <img src="assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Major title</h4>
                        <a href="./doctors/index.php" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
                
            </div>

            <h2 class="h1 fw-bold text-center my-4">doctors</h2>

            <div class="d-flex flex-wrap gap-4 justify-content-center">

                <div class="card p-2" style="width: 18rem;">
                <img src="assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                    <h6 class="card-title fw-bold text-center">Major</h6>
                    <a href="./doctors/doctor.php" class="btn btn-outline-primary card-button">Book an
                        appointment</a>
                </div>
                </div>
                
            </div>
           <!-- #insted of doctor section-->
            <!-- <section class="splide home__slider__doctors mb-5"> 
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.php" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section> -->
            
        </div>
        <div class="banner container d-block d-lg-grid d-md-block d-sm-block">

            <?php require_once('templates/qoutes.php'); ?>

    </div>

    <?php require_once('templates/footer.php'); ?>
</body>

</html>