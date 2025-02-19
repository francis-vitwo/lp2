<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lp2</title>
    <?php include './include/head.php' ?>
</head>

<body>
    <header id="vitwo-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home"><img src="./asset/images/logo/light-logo.png"
                            alt="vitwo-logo"></a>
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
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                            <a class="nav-link" href="#pantheons">Our Pantheons</a>
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

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
                                <input class="form-control " type="text" id="vcfoName" placeholder="Name" required />
                            </div>
                            <div class="col-12">

                                <input class="form-control" type="number" id="vcfoPhone" aria-describedby="Phone"
                                    placeholder="Phone No." required />
                            </div>
                            <div class="col-12">
                                <input class="form-control " type="email" id="vcfoEmail" placeholder="Email" required />
                            </div>
                            <div class="col-12">
                                <input class="form-control " type="text" id="vcfoCompany" placeholder="Company Name"
                                    required />
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="" cols="10" rows="4" id="vcfoNote"
                                    placeholder="Your Questions..."></textarea>
                            </div>

                            <button class="btn form-btn" type="submit" id="vcfoSubmitBtn">Send
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
                            Know More !
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                    <div class="about-content">
                        <div class="card-container">
                            <div class="card-1 card">
                                <div class="heading">About Us</div>
                                <div class="body">
                                    <p>ViTWO is a leading Virtual CFO service provider designed to provide
                                        businesses with expert financial management. We empower businesses with
                                        end-to-end financial accounting, compliance, cash flow optimisation, MIS,
                                        intelligent analytics, and strategy services.</p>
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
                                    <p>ViTWO envisions a future where finance is seamlessly managed through
                                        intelligent automation and cutting-edge technology, optimising efficiency,
                                        reducing costs, and fostering business growth through data-driven
                                        decision-making.</p>
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
                                <p>Our vision is to be a globally esteemed organisation known for excellence,
                                    integrity, and service. We are committed to continuous innovation and
                                    eco-friendly practices, working towards a digital future and bettering society
                                    through sustainable business solutions.</p>
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

    <section id="vcfo">
        <div class="conatiner">
            <div class="vcfo-heading">
                <h3>How ViTWO can grow your business</h3>
                <p>Leverage the expertise of industry experts to optimize your finance operations and pave way for
                    exponential business growth</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 g-2">
                    <div class="card book">
                        <div class="card-heading">
                            <h5>Bookkeeping Service</h5>
                            <img src="asset/images/icons/Bookkeeping.webp" alt="">
                        </div>
                        <div class="card-body">
                            <p>Avail with us the best-in-class Book-keeping service with perfectly organized records
                                of the company's day to day financial transactions.</p>

                            <div type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalForm">
                                Know More <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 g-2">
                    <div class="card book">
                        <div class="card-heading">
                            <h5>Compliance</h5>
                            <img src="asset/images/icons/Compliance.webp" alt="">
                        </div>
                        <div class="card-body">
                            <p>Ensuring adherence to all the statutes and governing compliances because the same is
                                being taken care of by our best tax experts.</p>
                            <div type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalForm">
                                Know More <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 g-2">
                    <div class="card book">
                        <div class="card-heading">
                            <h5>MIS Reporting</h5>
                            <img src="asset/images/icons/MIS.png" alt="">
                        </div>
                        <div class="card-body">
                            <p>Facilitate fast decision making with timely and necessary information tailored for
                                your company's management.</p>
                            <div type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalForm">
                                Know More <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 g-2">
                    <div class="card book">
                        <div class="card-heading">
                            <h5>Control and Optimization</h5>
                            <img src="asset/images/icons/Control and Optimization.webp" alt="">
                        </div>
                        <div class="card-body">
                            <p>With necessary checks and balances being inculcated in the overall functionality, we
                                ensure controlled and optimized business functioning scenarios.</p>
                            <div type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalForm">
                                Know More <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 g-2">
                    <div class="card book">
                        <div class="card-heading">
                            <h5>Risk Mitigation</h5>
                            <img src="asset/images/icons/Risk Mitigation.png" alt="">
                        </div>
                        <div class="card-body">
                            <p>Ensuring proactiveness and mitigating risks at each level of the transaction chain,
                                thereby, shielding your business against every risk factor</p>
                            <div type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalForm">
                                Know More <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 g-2">
                    <div class="card book">
                        <div class="card-heading">
                            <h5>Intelligent Analytics</h5>
                            <img src="asset/images/icons/Intelligent Analytics.png" alt="">
                        </div>
                        <div class="card-body">
                            <p>With the knowledge and application of industry experts, we precisely analyze, assess
                                and review the overall health of the organization.</p>
                            <div type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalForm">
                                Know More <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="industries">
        <div class="container">
            <div class="ind-heading">
                <h3>Industries We Cater</h3>
                <p>From simplifying finance operations by leveraging technology to driving excellence, ViTWO
                    delivers stellar solutions to the top Industries.</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="circle">
                        <div class="inner-circle">
                            <div class="front-circle">
                                <h5>Manufacturing</h5>
                            </div>
                            <div class="back-circle">
                                <img src="./asset/images/industries/Manufacturing Back.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="circle">
                        <div class="inner-circle">
                            <div class="front-circle">
                                <h5>Retail</h5>
                            </div>
                            <div class="back-circle">
                                <img src="./asset/images/industries/back" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="circle">
                        <div class="inner-circle">
                            <div class="front-circle">
                                <h5>Services</h5>
                            </div>
                            <div class="back-circle">
                                <img src="./asset/images/industries/Services Back.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <div class="test-heading">
                <h3>What People Are Saying</h3>
                <p>ViTWO has set a benchmark of Excellence in the world of Finance automation. The reviews shared by our valued clients manifest our validation.</p>
            </div>
            <div class="test-slide">
                <div class="silde">
                    <div class="card test-card-1">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/gauri-malik.webp" alt="">
                            <div class="card-title">
                                <h6> Gauri Malik</h6>
                                <p>Founder, Sirohi</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>From their professionalism to their reliability, Vitwo has exceeded our
                                expectations in every way. Thank you for being stellar CFOs to Sirohi !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-2">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Raj Pratap.png" alt="">
                            <div class="card-title">
                                <h6> Raj Pratap Singh</h6>
                                <p>Owner, Raj Fabrication</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>ViTWO team is totally capable of clearing problems within a day and they
                                are quite good with their communication skills as well as their commitment.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-3">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/310405154_5724293880987074_687731990506480993_n (1).jpg" alt="">
                            <div class="card-title">
                                <h6> Rajeev Agarwal</h6>
                                <p>Operations Head, Aroka</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>I'm glad to have ViTWO as our Virtual CFO. They are good service provider.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-4">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Oiendrila-Ray.jpg" alt="">
                            <div class="card-title">
                                <h6> Oeindrila Ray Kapoor</h6>
                                <p>Co-founder, Nee & Oink</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Controls, Optimisation and profound governance – to sum it up we are
                                better financially managed. Kudos to Team ViTWO.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-5">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Tarun-Kapoor.jpg" alt="">
                            <div class="card-title">
                                <h6>Tarun Kapoor</h6>
                                <p>Director, Africa Medilink Ltd.</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>ViTWO is a reputable and experienced business consultancy with
                                commitment
                                and expertise in fulfilling their responsibilities.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-6">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Aparna-Pendse.jpg" alt="">
                            <div class="card-title">
                                <h6>Aparna Pendse</h6>
                                <p>Founder, Blue Hibiscus</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>ViTWO helped me get my records in order and prepare profit and loss as
                                well as balance sheet.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-7">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Kanishka-Mazumdar.jpg" alt="">
                            <div class="card-title">
                                <h6>Kanishka Mazumdar</h6>
                                <p>Founder, Buddha Bites</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>I am very satisfied with their knowledgeable and professional work over
                                the past year to improve the profitability of my business.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-8">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Laxmi-Narayan-Bose.jpg" alt="">
                            <div class="card-title">
                                <h6>Laxmi Narayan Bose</h6>
                                <p>Sr VP Operations,Track Four Infotech(I) Pvt. Ltd</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>An articulated MIS architecture was setup, and every month, prospected
                                insights for business aspects and optimised scenarios.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="silde">
                    <div class="card test-card-9">
                        <div class="card-head">
                            <img src="./asset/images/clients-pic/Sreela-Ray.jpg" alt="">
                            <div class="card-title">
                                <h6>Mrs Sreela Dey</h6>
                                <p>Direcctor, Medicare spryness Pvt. Ltd</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Engagement started with an overview of the BTA process and gradually
                                translated into a holistic role-encompassing optimisation.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="technology">
        <div class="container">
            <div class="tech-heading">
                <h3>Technology And Integration</h3>
                <p>ViTWO offers a wide range of plug-and-play financial solutions, tailored specifically to your business objectives</p>
            </div>
            <div class="client-slide">
                <div class="slide"><img src="./asset/images/partners/8.png" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/1.webp" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/2.png" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/3.png" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/4.png" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/5.png" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/6.png" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/Microsoft Dynamics-Logo.webp" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/Oracle-Logo.webp" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/Sage-Logo.webp" alt=""></div>
                <div class="slide xero"><img src="./asset/images/partners/Xero-Logo.webp" alt=""></div>
                <div class="slide"><img src="./asset/images/partners/Zoho-Logo.webp" alt=""></div>
            </div>
        </div>
    </section>

    <section id="pantheons" class="leaders">
        <div class="container">
            <div class="d-view">
                <div class="lead-heading">
                    <h3>Our Pantheons</h3>
                    <p>At the helm of our finance operations stand the industry stalwarts with an unrivalled track record of success. Shoulder-to-shoulder! With our exceptional team, we direct an ecosystem of excellence and discipline, ensuring your business reaches its full potential.</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="leader-details">
                            <div class="leader-img">
                                <img src="./asset/images/pantheons/leaders/Neeraj Bhuwalka.webp" alt="">
                                <div class="leader-content">
                                    <h6>Neeraj Bhuwalka</h6>
                                    <p>CEO <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="leader-details right">
                            <div class="leader-img right">
                                <img src="./asset/images/pantheons/leaders/Laxminarayan Dutta.webp" alt="">
                                <div class="leader-content">
                                    <h6>Laxmi Narayan Dutta</h6>
                                    <p>COO <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="leader-details last-img">
                            <div class="leader-img">
                                <img src="./asset/images/pantheons/leaders/Sathya Pramod.webp" alt="">
                                <div class="leader-content">
                                    <h6>Sathya Pramod</h6>
                                    <p>Director <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-view">
                <div class="lead-heading">
                    <h3>Our Pantheons</h3>
                    <p>At the helm of our finance operations stand the industry stalwarts with an unrivalled track record of success. Shoulder-to-shoulder! With our exceptional team, we direct an ecosystem of excellence and discipline, ensuring your business reaches its full potential.</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="leader-details">
                            <div class="leader-img">
                                <img src="./asset/images/pantheons/leaders/Neeraj Bhuwalka.webp" alt="">
                                <div class="leader-content">
                                    <h6>Neeraj Bhuwalka</h6>
                                    <p>CEO <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="leader-details right">
                            <div class="leader-img right">
                                <img src="./asset/images/pantheons/leaders/Laxminarayan Dutta.webp" alt="">
                                <div class="leader-content">
                                    <h6>Laxmi Narayan Dutta</h6>
                                    <p>COO <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="leader-details last-img">
                            <div class="leader-img">
                                <img src="./asset/images/pantheons/leaders/Sathya Pramod.webp" alt="">
                                <div class="leader-content">
                                    <h6>Sathya Pramod</h6>
                                    <p>Director <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pantheons" class="hods">
        <div class="container">
            <div class="d-view">
                <div class="hod-heading">
                    <h3>Our Leaders</h3>
                    <p>Our teams are spearheaded by industry professionals with proven expertise in their respective podiums. Together with our talented workforce, we strive to bring excellence in your finance operations.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="hods-details">
                            <div class="hods-img">
                                <img src="./asset/images/pantheons/hod/Alok Agrawal.webp" alt="">
                                <div class="hods-content">
                                    <h6>Alok Agarwal</h6>
                                    <p>Head - Deliveries <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="hods-details right">
                            <div class="hods-img right">
                                <img src="./asset/images/pantheons/hod/Rohit Bajoria.webp" alt="">
                                <div class="hods-content">
                                    <h6>Rohit Bajoria</h6>
                                    <p>Head - Compliances <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="hods-details last-img">
                            <div class="hods-img">
                                <img src="./asset/images/pantheons/hod/Ronit Ghosh.webp" alt="">
                                <div class="hods-content">
                                    <h6>Ronit Ghosh</h6>
                                    <p>Head - <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="hods-details last-img">
                            <div class="hods-img">
                                <img src="./asset/images/pantheons/hod/Sheikh Salim Akhtar.webp" alt="">
                                <div class="hods-content">
                                    <h6>Sheikh Salim Akhtar</h6>
                                    <p>Director <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-view">
                <div class="hod-heading">
                    <h3>Our Leaders</h3>
                    <p>Our teams are spearheaded by industry professionals with proven expertise in their respective podiums. Together with our talented workforce, we strive to bring excellence in your finance operations.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="hods-details">
                            <div class="hods-img">
                                <img src="./asset/images/pantheons/hod/Alok Agrawal.webp" alt="">
                                <div class="hods-content">
                                    <h6>Alok Agarwal</h6>
                                    <p>Head - Deliveries <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="hods-details right">
                            <div class="hods-img right">
                                <img src="./asset/images/pantheons/hod/Rohit Bajoria.webp" alt="">
                                <div class="hods-content">
                                    <h6>Rohit Bajoria</h6>
                                    <p>Head - Compliances <i class="fa-brands fa-linkedin"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="hods-details last-img">
                            <div class="hods-img">
                                <img src="./asset/images/pantheons/hod/Ronit Ghosh.webp" alt="">
                                <div class="hods-content">
                                    <h6>Ronit Ghosh</h6>
                                    <p>Head - <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="hods-details last-img">
                            <div class="hods-img">
                                <img src="./asset/images/pantheons/hod/Sheikh Salim Akhtar.webp" alt="">
                                <div class="hods-content">
                                    <h6>Sheikh Salim Akhtar</h6>
                                    <p>Director <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pantheons" class="supervision">
        <div class="container">
            <div class="d-view">
                <div class="supervision-heading">
                    <h3>Energy, Exuberance & Experience</h3>
                    <p>Discover the faces behind ViTWO's success—where expertise, energy, and innovation come together to drive impactful solutions.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details">
                            <div class="supervision-img">
                                <img src="./asset/images/pantheons/supervisionaries/bachu-kumar-dey.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Bachu Kumar Dey <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details right">
                            <div class="supervision-img right">
                                <img src="./asset/images/pantheons/supervisionaries/rajeev-thakur.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Rajeev Thakur <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details last-img">
                            <div class="supervision-img">
                                <img src="./asset/images/pantheons/supervisionaries/abhijit-dhar.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Abhijit Dhar <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details last-img">
                            <div class="supervision-img">
                                <img src="./asset/images/pantheons/supervisionaries/abhilash-agarwal.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Abhilash Agarwal <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-view">
                <div class="supervision-heading">
                    <h3>Energy, Exuberance & Experience</h3>
                    <p>Discover the faces behind ViTWO's success—where expertise, energy, and innovation come together to drive impactful solutions.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details">
                            <div class="supervision-img">
                                <img src="./asset/images/pantheons/supervisionaries/bachu-kumar-dey.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Bachu Kumar Dey <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details right">
                            <div class="supervision-img right">
                                <img src="./asset/images/pantheons/supervisionaries/rajeev-thakur.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Rajeev Thakur <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details last-img">
                            <div class="supervision-img">
                                <img src="./asset/images/pantheons/supervisionaries/abhijit-dhar.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Abhijit Dhar <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="supervision-details last-img">
                            <div class="supervision-img">
                                <img src="./asset/images/pantheons/supervisionaries/abhilash-agarwal.jpg" alt="">
                                <div class="supervision-content">
                                    <h6>Abhilash Agarwal <a href=""><i class="fa-brands fa-linkedin"></i></a></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="d-view">
                <div class="gall-heading">
                    <h3>Frolics at ViTWO</h3>
                </div>
                <div class="images">
                    <div class="emp-img"><img src="./asset/images/gallery/02.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/03.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/04.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/05.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/06.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/07.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/09.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/Christmas Group Pic 2.webp" alt=""></div>
                    <div class="emp-img"><img src="./asset/images/gallery/DSC04570 copy 2.webp" alt=""></div>
                </div>
            </div>
            <div class="m-view"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                                        type="number" id="modalPhone" aria-describedby="Phone" placeholder="Phone No."
                                        required /></span>
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
                                <textarea class="w-100 bg-surface text-black-40 caption1 pl-16 pr-16 pt-12 pb-12 bora-8"
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