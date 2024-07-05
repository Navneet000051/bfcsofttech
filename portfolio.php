<?php
include('include/header.php');
?>

<style>
    .box-shadow {
        -webkit-box-shadow: 0 1px 1px rgba(72, 78, 85, .6);
        box-shadow: 0 1px 1px rgba(72, 78, 85, .6);
        -webkit-transition: all .2s ease-out;
        -moz-transition: all .2s ease-out;
        -ms-transition: all .2s ease-out;
        -o-transition: all .2s ease-out;
        transition: all .2s ease-out;
        cursor: pointer;
    }

    .box-shadow:hover {
        -webkit-box-shadow: 0 20px 40px rgba(72, 78, 85, .6);
        box-shadow: 0 20px 40px rgba(72, 78, 85, .6);
        -webkit-transform: translateY(-15px);
        -moz-transform: translateY(-15px);
        -ms-transform: translateY(-15px);
        -o-transform: translateY(-15px);
        transform: translateY(-15px);
    }

    .card {
        border-radius: 25px;

    }

    .card img {
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
    }

    .portfolio .card i {
        font-size: 35px;
        position: absolute;
        top: 10px;
        right: 10px;
        -webkit-transition: all .2s ease-out;
        -moz-transition: all .2s ease-out;
        -ms-transition: all .2s ease-out;
        -o-transition: all .2s ease-out;
        transition: all .2s ease-out;
        filter: drop-shadow(2px -1px 4px rgba(0, 69, 134, 0.2));
    }

    .card:hover i {
        filter: drop-shadow(2px -1px 4px rgba(0, 69, 134, 0.4));
    }

    .i {
        position: absolute;
        top: 18rem;
        right: 2rem;
        color: white;
        background: #d33f42;
        padding: 5px 14px;
        border-radius: 100%;
        transition: all .6s ease-in-out;
    }

    .card:hover .i {
        transform: rotate(-180deg);
    }

    .i:hover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.7) 0px 18px 36px -18px inset;
    }
</style>


<div class="web-page portfolio">

    <section class="bfc-contact-hero">
        <div class="container px-0">
            <div class="row pb-5 align-items-stretch xs-column-reverse">
                <div class="col-md-6 py-4 align-self-center jump-banner-bfcsoftech">
                    <div class="techUse-title ">
                        <h1 class="text-white">Portfolio</h1>
                    </div>
                    <p class="text-justify text-white">Over the years, BFC Softtech has helped numerous businesses across industries scale up their operations and achieve online success. As a result, our team possesses extensive proven experience in providing customised solutions tailored to meet the unique needs of all types of businesses. We pride ourselves on our ability to deliver exceptional results and help our clients thrive in the digital landscape.</p>

                </div>
                <div class="col-md-6">
                    <img src="assets/img/solutions/porfolio.webp" alt="" srcset="" class="img-fluid jump-image-bfcsofttech" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-blue py-4">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="headm softtech-heading-text mb-3">Project <span class="sub-color">Showcase</span></h2>
                <p>Explore our Project Showcase to discover how we've helped businesses like yours find online success.</p>
            </div>
            <div class="pp-project-shofttech py-5">
                <div class="portfolio-tab-tech">
                    <button class="portfolio-tablink" onclick="openPage('web-development', this, '#d33f42')" id="defaultOpen">
                        Web Development
                    </button>
                    <button class="portfolio-tablink" onclick="openPage('mobile-app-development', this, '#d33f42')">Mobile App Development</button>
                    <button class="portfolio-tablink" onclick="openPage('graphic-logo-design', this, '#d33f42')">Graphic & Logo Design</button>
                </div>
                <div id="web-development" class="tabcontent">
                    <div class="container">
                        <div class="row justify-content-center pt-5 w-100">

                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://www.koshalaliteraturefestival.com/" target="_blank">
                                    <div class="card box-shadow mx-auto my-3">
                                        <img srcset="assets/img/portfolio/koshala-literature-festival.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">Koshala Literature Festival</h4>

                                        </div>
                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://orgeen.com/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/orgeen.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">Orgeen</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://bfcpublications.com/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/publications.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">BFC Publications</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://bfccapital.com/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/capital.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">BFC Capital</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="http://lumewatt.com/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/lumewattsolar.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">Lume Watt Solar</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://pnpmedia.co.in/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/pnp.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">PNP Media</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://ambreenzaidi.com/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/az.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">Ambreen Zaidi</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://ceea.in/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/ceea.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">CEEA</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="mobile-app-development" class="tabcontent">
                    <div class="container">
                        <div class="row justify-content-center pt-5 w-100">
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="https://prodigy-pro.bfccapital.com/" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/capital.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">Prodigy-Pro</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <a href="#" target="_blank">
                                    <div class="card box-shadow my-3 mx-auto">
                                        <img src="assets/img/portfolio/lumewattsolar.webp" class="card-img-top" alt="..." />
                                        <div class="text-center portfolio py-2">
                                            <hr />
                                            <h4 class="text-black">Bhukkads</h4>

                                        </div>

                                        <a href="">
                                            <i class="bi bi-gear-fill i"></i>
                                        </a>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="graphic-logo-design" class="tabcontent">
                    <div class="container">
                        <div class="row pt-5 w-100">
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/publicationlogo.webp" class="img-fluid border" alt="bfcpublications" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/capitallogo.webp" class="img-fluid border" alt="BFC Capital" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/orgeenlogo.webp" class="img-fluid border" alt="Orgeen" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/cvsolor.webp" class="img-fluid border" alt="basicclearfundelogo" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/basicclearfundelogo.webp" class="img-fluid border" alt="cvsolar" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/wistrizlogo.webp" class="img-fluid border" alt="wistriz" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/lumesolor.webp" class="img-fluid border" alt="lumewatt" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/beinglogo.webp" class="img-fluid border" alt="being" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/surajsevalogo.webp" class="img-fluid border" alt="surajsevalogo" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/ceealogo.webp" class="img-fluid border" alt="ceealogo" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <img src="assets/img/client-logo/yokelogo.webp" class="img-fluid border" alt="yokelogo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include('include/footer.php');
?>