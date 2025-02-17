<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lp</title>
    <link rel="shortcut icon" type="image/png" href="./asset/images/logo/ViTWO_Favicon.webp">

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- google-fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- font-awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SLICK CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- CUSTOM CSS -->

    <link rel="stylesheet" href="./asset/css/style.css">
</head>

<body>
    <header id="vitwo-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home"><img src="./asset/images/logo/light-logo.png" alt="vitwo-logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="#home">Home</a>
                            <a class="nav-link" href="#about">About Us</a>
                            <a class="nav-link" href="#vcfo">Virtual CFO Services</a>
                            <a class="nav-link" href="#pantheons">Our Pantheons</a>
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section id="home">
            <div class="container">
                <div class="hero-section">
                    <div class="bg-img">
                        <img src="./asset/images/hero/finacne.webp" alt="">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h1>Your Most Trusted Hub <br>
                                For Virtual CFO <br>
                                Services
                            </h1>
                            <p>Get personalized financial advice to help reach your financial goals.</p>
                        </div>
                        <div class="head-form">
                            <form class="row" action="./thank-you.php" id="vcfoBookDemo" method="post">
                                <div class="form-header">
                                    <h5>Get In Touch</h5>
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>

                                <div class="col-12 col-sm-12">
                                    <input
                                        class="form-control "
                                        type="text" id="vcfoName" placeholder="Name" required />
                                </div>
                                <div class="col-12">

                                    <input
                                        class="form-control"
                                        type="number" id="vcfoPhone" aria-describedby="Phone"
                                        placeholder="Phone No." required />
                                </div>
                                <div class="col-12">
                                    <input
                                        class="form-control "
                                        type="email" id="vcfoEmail" placeholder="Email" required />
                                </div>
                                <div class="col-12">
                                    <input
                                        class="form-control "
                                        type="text" id="vcfoCompany" placeholder="Company Name" required />
                                </div>
                                <div class="col-12">
                                    <textarea
                                        class="form-control"
                                        name="" cols="10" rows="4" id="vcfoNote"
                                        placeholder="Your Questions..."></textarea>
                                </div>

                                <button
                                    class="btn form-btn"
                                    type="submit" id="vcfoSubmitBtn">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients">
            <div class="container">
                <div class="client-slide">
                    <div class="slider">
                        <img src="./asset/images/clients/Actia.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Altox.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/AROKA.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Babaji Shivram.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Bandodkar.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Benchmark.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Car Trends.jpg" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Circutsutra.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Cuba Bar.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Electrodada.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/eOxygen.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Gobyk.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Hana.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/IP Travel Lines.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Kanelle.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Lanka Medilink-01.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Mansi Paints Logo.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Rasik Infra.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/RDPL.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Renewcell-01.png" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Silisoul.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Sirohi.webp" alt="">
                    </div>
                    <div class="slider">
                        <img src="./asset/images/clients/Vasava Engineering.png" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="about-heading">
                    <h3>Why ViTWO VCFO Services</h3>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="video">
                            <video src="./asset/images/video/About Us Overview.m4v"></video>
                            <div type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">
                                Launch demo modal
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                        <div class="about-content">
                            <div class="card-container">
                                <div class="card-1 card">
                                    <div class="heading">About Us</div>
                                    <div class="body">
                                        <p>ViTWO is a leading Virtual CFO service provider designed to provide businesses with expert financial management. We empower businesses with end-to-end financial accounting, compliance, cash flow optimisation, MIS, intelligent analytics, and strategy services.</p>
                                        <!-- <ul>
                                                <li>Seamless workflow for efficient financial operations.</li>
                                                <li>Advanced reporting KPIs for growth-oriented decision-making.</li>
                                                <li>Complete data security and compliance adherence.</li>
                                            </ul> -->
                                    </div>
                                </div>

                                <div class="card-2 card">
                                    <div class="heading">Mission</div>
                                    <div class="body">
                                        <p>ViTWO envisions a future where finance is seamlessly managed through intelligent automation and cutting-edge technology, optimising efficiency, reducing costs, and fostering business growth through data-driven decision-making.</p>
                                        <!-- <ul>
                                                <li>Accelerated financial processes are driven by our experts.</li>
                                                <li>Reduced time, cost & error, boosted efficiency.</li>
                                                <li>Empowered decision-making through real-time analytics.</li>
                                            </ul> -->
                                    </div>
                                </div>
                            </div>

                            <div class="card-3 card">
                                <div class="heading">Vision</div>
                                <div class="body">
                                    <p>Our vision is to be a globally esteemed organisation known for excellence, integrity, and service. We are committed to continuous innovation and eco-friendly practices, working towards a digital future and bettering society through sustainable business solutions.</p>
                                    <!-- <ul>
                                                <li>Reshape the future of finance.</li>
                                                <li>Cater to Indian Startups and MSMEs to strengthen the economy.</li>
                                                <li>Elevate client experience, uplift professional standards.</li>
                                            </ul> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>

    <!-- JAVA SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <script src="./asset/js/main.js"></script>
    <script src="./asset/js/slick.js"></script>
    <script src="./asset/js/modal-form.js"></script>
    <script src="./asset/js/vcfo-form.js"></script>



    <!-- MODAL FORM -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Get In Touch</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-block flex-columns-between gap-20" action="./thankyou.php" id="modalBookDemo">

                        <div class="row row-gap-20">
                            <div class="col-12 col-sm-12">
                                <input
                                    class="form-control w-100 bg-surface text-black-40 caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                    type="text" id="modalName" placeholder="Name" required />
                            </div>
                            <div class="col-12">
                                <span class="input-group-text form-control" id="inputGroupPrepend2">+91
                                    <input
                                        class="w-100 bg-surface text-black-40 caption1 pl-16 pr-16 pt-12 pb-12 bora-8 ml-5"
                                        type="number" id="modalPhone" aria-describedby="Phone"
                                        placeholder="Phone No." required /></span>
                            </div>
                            <div class="col-12">
                                <input
                                    class="form-control w-100 bg-surface text-black-40 caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                    type="email" id="modalEmail" placeholder="Email" required />
                            </div>
                            <div class="col-12">
                                <input
                                    class="form-control w-100 bg-surface text-black-40 caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                    type="text" id="modalCompany" placeholder="Company Name" required />
                            </div>
                            <div class="col-12">
                                <textarea
                                    class="w-100 bg-surface text-black-40 caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
                                    name="" cols="10" rows="4" id="modalNote"
                                    placeholder="Your Questions..."></textarea>
                            </div>
                        </div>
                        <div class="button-block mt-16">
                            <button class="button-share w-100 bg-on-white text-button text-white pl-36 pr-36 bora-48"
                                type="submit" id="modalSubmitBtn">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>