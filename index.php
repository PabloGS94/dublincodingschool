<?php include_once("htmlhead.php"); ?>

<body>
    <?php include_once("header.php"); ?>

    <section class="body-section">
        <!-- Hero Section -->
        <div id="hero" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#hero" data-slide-to="0" class="active"></li>
                <li data-target="#hero" data-slide-to="1"></li>
                <li data-target="#hero" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="hero-img d-block w-100" src="static/_MG_2585.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="hero-img d-block w-100" src="static/_MG_2414.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="hero-img d-block w-100" src="static/_MG_1422.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#hero" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Contact Section -->
        <div id="contact-section">
            <h1 id="contact-section-title">Contact me</h1>
            <div id="contact-cards">
                <div id="contact-linkedin" class="contact-card ">
                    <h2 class="card-title">Linkedin</h2>
                    <h1 class="card-body">
                        <a target="_blank" href="https://www.linkedin.com/in/pablo-giles-sanz-aa1848201/">
                            <i class="fas fa-external-link-alt"></i> &nbsp Pablo Giles Sanz
                        </a>
                    </h1>
                </div>
                <div id="contact-email" class="contact-card">
                    <h2 class="card-title">Email</h2>
                    <h1 class="card-body">
                        pablogiles7@gmail.com
                    </h1>

                </div>
                <div id="contact-instagram" class="contact-card">
                    <h2 class="card-title">Instagram</h2>
                    <h1 class="card-body">@gilesanzphoto</h1>

                </div>
            </div>
            <div id="contact-button">
                <a href="contact.php"><button class="btn btn-light">Get in touch</button></a>
            </div>
        </div>
    </section>


    <?php include_once("footer.php"); ?>
</body>

</html>