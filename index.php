<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './config/bootstrap.php'?>
    <link rel="stylesheet" href="./public/style.css">
    <link rel="shortcut icon" href="/public/images/5977595.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>


</head>

<body>
    <?php include './components/navbar.php'?>

    <section class="section-1 container-fluid py-4">
        <div class="row gx-3">
            <!-- Left Column -->
            <div class="col-12 col-md-3 d-flex flex-column gap-3">
                <div class="card">
                    <img src="/Users/public/images/51.jpeg" class="img-fluid" alt="">
                </div>
                <div class="card">
                    <img src="/Users/public/images/58.jpeg" class="img-fluid" alt="">
                </div>
                <div class="card">
                    <img src="/Users/public/images/54.jpeg" class="img-fluid" alt="">
                </div>
            </div>

            <!-- Middle Column -->
            <div class="col-12 col-md-6 d-flex flex-column gap-3">
                <div class="card">
                    <img src="/Users/public/images/55.jpeg" class="img-fluid" alt="">
                </div>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <div class="card w-100">
                        <img src="/Users/public/images/44.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="card w-100">
                        <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-e8bc/k2-_aeaa500c-6d94-4043-97f1-bbc4993b4629.v1.png?odnHeight=388&odnWidth=385&odnBg=&odnDynImageQuality=70"
                            class="img-fluid" alt="">
                    </div>
                </div>
                <div class="card bg-warning">
                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-eb70/k2-_64e6fa00-8563-42c3-9191-a283e8b17248.v1.png"
                        class="img-fluid" alt="">
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-md-3 d-flex flex-column gap-3">
                <div class="card">
                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-faaf/k2-_cf23a432-8d71-49e1-88e2-b4e702f94e93.v1.jpg?odnHeight=256&odnWidth=385&odnBg=&odnDynImageQuality=70"
                        class="img-fluid" alt="">
                </div>
                <div class="card">
                    <img src="/Users/public/images/60.jpeg" class="img-fluid" alt="">
                </div>
                <div class="card">
                    <img src="/Users/public/images/48.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="section-2  p-4">
        <p class="fw-bold fs-5">Grocery and Kitchen</p>
        <div class="row">
            <!-- Left Image -->
            <div class="col-12 col-lg-6 mb-3">
                <div class="card border-0 rounded-1 h-100">
                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-7a3c/k2-_6f7865d9-dcf3-483e-ba79-4f34a0c7e119.v1.jpg?odnHeight=447&odnWidth=794&odnBg=&odnDynImageQuality=70"
                        alt="" class="img-fluid rounded-2">
                </div>
            </div>

            <!-- Right Carousel -->
            <div class="col-12 col-lg-6">
                <div id="itemCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row g-3">
                                <!-- 4 Cards per slide -->
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 1</h6>
                                            <p class="text-warning mb-1">★★★★★</p>
                                            <p class="text-success fw-bold">$59.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 2</h6>
                                            <p class="text-warning mb-1">★★★★☆</p>
                                            <p class="text-success fw-bold">$45.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 3</h6>
                                            <p class="text-warning mb-1">★★★☆☆</p>
                                            <p class="text-success fw-bold">$35.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 4</h6>
                                            <p class="text-warning mb-1">★★☆☆☆</p>
                                            <p class="text-success fw-bold">$25.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 5</h6>
                                            <p class="text-warning mb-1">★★★★★</p>
                                            <p class="text-success fw-bold">$39.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 6</h6>
                                            <p class="text-warning mb-1">★★★★☆</p>
                                            <p class="text-success fw-bold">$49.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 7</h6>
                                            <p class="text-warning mb-1">★★★☆☆</p>
                                            <p class="text-success fw-bold">$29.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 8</h6>
                                            <p class="text-warning mb-1">★★☆☆☆</p>
                                            <p class="text-success fw-bold">$19.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>



    <section class="section-2  p-4">
        <p class="fw-bold fs-5">New: Weekend Acedemy</p>
        <div class="row">
            <!-- Left Image -->


            <!-- Right Carousel -->
            <div class="col-12 col-lg-6">
                <div id="itemCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row g-3">
                                <!-- 4 Cards per slide -->
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 1</h6>
                                            <p class="text-warning mb-1">★★★★★</p>
                                            <p class="text-success fw-bold">$59.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 2</h6>
                                            <p class="text-warning mb-1">★★★★☆</p>
                                            <p class="text-success fw-bold">$45.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 3</h6>
                                            <p class="text-warning mb-1">★★★☆☆</p>
                                            <p class="text-success fw-bold">$35.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/22.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 4</h6>
                                            <p class="text-warning mb-1">★★☆☆☆</p>
                                            <p class="text-success fw-bold">$25.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 5</h6>
                                            <p class="text-warning mb-1">★★★★★</p>
                                            <p class="text-success fw-bold">$39.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 6</h6>
                                            <p class="text-warning mb-1">★★★★☆</p>
                                            <p class="text-success fw-bold">$49.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 7</h6>
                                            <p class="text-warning mb-1">★★★☆☆</p>
                                            <p class="text-success fw-bold">$29.99</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 d-none d-md-block">
                                    <div class="card h-100 text-center">
                                        <img src="/Users/public/images/23.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Product 8</h6>
                                            <p class="text-warning mb-1">★★☆☆☆</p>
                                            <p class="text-success fw-bold">$19.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-3">
                <div class="card border-0 rounded-1 h-100">
                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-c69e/k2-_48e4af5f-0d82-4511-8c3e-30803d2b158e.v1.jpg?odnHeight=447&odnWidth=794&odnBg=&odnDynImageQuality=70"
                        alt="" class="img-fluid rounded-2">
                </div>
            </div>
        </div>
    </section>


    <section class="section-4 p-4">

        <h5 class="mb-3">Multiple Item Carousel</h5>

        <div id="multiItemCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-5">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-3 flex-nowrap">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="/Users/public/images/50.jpeg" class="d-block w-75" alt="1">
                            <div>Alpha</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-bc93/k2-_5c8044b6-cd62-4615-86fa-8b20acb71786.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="2">
                            <div>Beta</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-44dd/k2-_a505e49e-9b6b-4b4d-b8fc-e8c6506a9fa8.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="3">
                            <div>Gamma</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-f4d9/k2-_f947ef1f-52fe-461a-9e0a-0c91b35ca076.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="4">
                            <div>Delta</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-1222/k2-_8202a2b0-4157-4602-a0c9-9bcee5a5f589.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="5">
                            <div>Epsilon</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-e6a0/k2-_c07e4bfc-6a34-4d51-9167-c6f84f45aa95.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="6">
                            <div>Zeta</div>

                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-33d9/k2-_d07759dd-36d5-4f1e-822b-de3b43b3583f.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="7">
                            <div>Eta</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-bc3f/k2-_f9f33c27-2e99-476e-95f5-a3beabd12f54.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="8">
                            <div>Theta</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-6665/k2-_ddcfae2e-c70f-43f6-b234-71fcba59bdac.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="9">
                            <div>Iota</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="/Users/public/images/46.jpeg" class="d-block d-75" alt="10">
                            <div>Kappa</div>
                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row flex-nowrap g-3">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-33d9/k2-_d07759dd-36d5-4f1e-822b-de3b43b3583f.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="7">
                            <div>Eta</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-bc3f/k2-_f9f33c27-2e99-476e-95f5-a3beabd12f54.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="8">
                            <div>Theta</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-6665/k2-_ddcfae2e-c70f-43f6-b234-71fcba59bdac.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="9">
                            <div>Iota</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="/Users/public/images/46.jpeg" class="d-block w-75" alt="10">
                            <div>Kappa</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="/Users/public/images/47.jpeg" class="d-block w-75" alt="11">
                            <div>Lambda</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-d59a/k2-_3c62c186-8ec0-4541-9e7c-24efaa163e9f.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="12">
                            <div>Mu</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="/Users/public/images/47.jpeg" class="d-block w-75" alt="11">
                            <div>Lambda</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-d59a/k2-_3c62c186-8ec0-4541-9e7c-24efaa163e9f.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="12">
                            <div>Mu</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="/Users/public/images/47.jpeg" class="d-block w-75" alt="11">
                            <div>Lambda</div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1 text-center">
                            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-d59a/k2-_3c62c186-8ec0-4541-9e7c-24efaa163e9f.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                                class="d-block w-75" alt="12">
                            <div>Mu</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev bg-dark rounded-5  position-absolute"
                style="height: 40px;width: 40px; top:50px  " type="button" data-bs-target="#multiItemCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-dark rounded-5 position-absolute"
                style="height: 40px;width: 40px; top:50px " type="button" data-bs-target="#multiItemCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </section>


    <section class="section-5 p-4">


        <h5 class="mb-3">Product Carousel</h5>

        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-5">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row flex-nowrap">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card h-100">
                                <img src="https://i5.walmartimages.com/asr/9c04cf23-fb19-4821-b979-d53448e6fdf0.6ba3ebf6e09f31bc97690803276dbdf2.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/asr/9c04cf23-fb19-4821-b979-d53448e6fdf0.6ba3ebf6e09f31bc97690803276dbdf2.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 1">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item One</h6>
                                    <p class="mb-1 text-success">$12.99</p>
                                    <p class="card-text small">Nice product description.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/seo/IronMax-13Amp-Corded-Scarifier-15-Electric-Lawn-Dethatcher-w-50L-Collection-Bag-Orange_61b77659-f14b-4a77-8b39-a7d6feebe077.f849321e58f5f2e9a7112f06baa2c35a.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/seo/IronMax-13Amp-Corded-Scarifier-15-Electric-Lawn-Dethatcher-w-50L-Collection-Bag-Orange_61b77659-f14b-4a77-8b39-a7d6feebe077.f849321e58f5f2e9a7112f06baa2c35a.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 2">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Two</h6>
                                    <p class="mb-1 text-success">$14.99</p>
                                    <p class="card-text small">Short product text here.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/seo/FOUKUS-Set-5-Green-Self-Watering-Plastic-Plant-Pots-Drainage-Holes-Eco-Friendly-Indoor-Outdoor-Flower-Planters-Succulents-Cactus-Snake-Plants-Sizes-7_35e20a10-3316-40fe-a720-2fec7d08464c.00da249909c28b73f53216c3638927b1.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/seo/FOUKUS-Set-5-Green-Self-Watering-Plastic-Plant-Pots-Drainage-Holes-Eco-Friendly-Indoor-Outdoor-Flower-Planters-Succulents-Cactus-Snake-Plants-Sizes-7_35e20a10-3316-40fe-a720-2fec7d08464c.00da249909c28b73f53216c3638927b1.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 3">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Three</h6>
                                    <p class="mb-1 text-success">$19.50</p>
                                    <p class="card-text small">Product info example.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/asr/e4f0e266-4b03-4402-84cc-e2bcbf893350.18bd05eb3d9ade26a3d7943a82260ed3.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/asr/e4f0e266-4b03-4402-84cc-e2bcbf893350.18bd05eb3d9ade26a3d7943a82260ed3.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 4">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Four</h6>
                                    <p class="mb-1 text-success">$9.99</p>
                                    <p class="card-text small">Simple description.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/asr/b8690bb4-54c3-4689-9c3e-1072ab03b139.c40cfb68e303abfbf90715a9bb9bfc87.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/asr/b8690bb4-54c3-4689-9c3e-1072ab03b139.c40cfb68e303abfbf90715a9bb9bfc87.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 5">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Five</h6>
                                    <p class="mb-1 text-success">$24.00</p>
                                    <p class="card-text small">Useful for daily use.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/seo/Costway-Gray-Rectangle-Metal-Picnic-Table-Bench-Set-with-Extension_1b35de67-26f9-4675-b2b5-2b936168eb5f.1005ee1d0548a44e37abc19289459776.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/seo/Costway-Gray-Rectangle-Metal-Picnic-Table-Bench-Set-with-Extension_1b35de67-26f9-4675-b2b5-2b936168eb5f.1005ee1d0548a44e37abc19289459776.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 6">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Six</h6>
                                    <p class="mb-1 text-success">$29.99</p>
                                    <p class="card-text small">Product overview here.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row flex-nowrap">
                        <!-- Repeat same structure for more items -->
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/seo/Costway-Ironmax-2400-PSI-at-1-7-GPM-120-V-Electric-Cold-Water-Pressure-Washer-High-Pressure-Hose_8c0efb8b-1360-483c-9ecd-b0031baedfcc.15578f92b671c265de0689a1194bb920.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/seo/Costway-Ironmax-2400-PSI-at-1-7-GPM-120-V-Electric-Cold-Water-Pressure-Washer-High-Pressure-Hose_8c0efb8b-1360-483c-9ecd-b0031baedfcc.15578f92b671c265de0689a1194bb920.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 7">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Seven</h6>
                                    <p class="mb-1 text-success">$18.49</p>
                                    <p class="card-text small">More product details.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/seo/FCMP-Outdoor-RC4000-50-Gallon-Outdoor-Rain-Water-Catcher-Barrel-Black_88a2ed44-4e1c-4e25-9ea8-09e06acaa7f8.75ce779cfccd045427b881cc3a975ce4.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Item 7">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Seven</h6>
                                    <p class="mb-1 text-success">$18.49</p>
                                    <p class="card-text small">More product details.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/asr/038a53ef-54cf-4ac9-be33-73863fc4b4fb.25eddf448bcecbf77ff23fe5bea83047.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/asr/038a53ef-54cf-4ac9-be33-73863fc4b4fb.25eddf448bcecbf77ff23fe5bea83047.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 7">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Seven</h6>
                                    <p class="mb-1 text-success">$18.49</p>
                                    <p class="card-text small">More product details.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/seo/Ktaxon-75gal-Outdoor-Garden-Resin-Storage-Deck-Box-Tools-White_18aa7875-4aec-4046-9cbc-8b57df6dbbaf.e2e1b1478ace73437be73f9eaf801b21.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/seo/Ktaxon-75gal-Outdoor-Garden-Resin-Storage-Deck-Box-Tools-White_18aa7875-4aec-4046-9cbc-8b57df6dbbaf.e2e1b1478ace73437be73f9eaf801b21.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 7">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Seven</h6>
                                    <p class="mb-1 text-success">$18.49</p>
                                    <p class="card-text small">More product details.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/asr/3a74dac2-eb9d-4ad3-9631-8a0f34ca0af6.69f4d0106604bea26c667a0a673f39ed.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Item 7">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Seven</h6>
                                    <p class="mb-1 text-success">$18.49</p>
                                    <p class="card-text small">More product details.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <img src="https://i5.walmartimages.com/asr/5dc1abfe-0de9-4b0b-87b8-85555c6b75b6.33dd832cd554905d4487891421fa0e82.jpeg?odnHeight=175&odnWidth=175&odnBg=FFFFFF 1x, https://i5.walmartimages.com/asr/5dc1abfe-0de9-4b0b-87b8-85555c6b75b6.33dd832cd554905d4487891421fa0e82.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF 2x"
                                    class="card-img-top" alt="Item 7">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Item Seven</h6>
                                    <p class="mb-1 text-success">$18.49</p>
                                    <p class="card-text small">More product details.</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Add 5 more col-2 cards for total 6 -->
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev bg-dark position-absolute start-0 top-50 "
                style="height: 40px;width: 40px;" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-dark position-absolute  top-50" style="height: 40px;width: 40px;"
                type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </section>




    <section class="secton-6 p-4">
        <div class="d-flex w-100 h-100">
            <div class=" p-2" style="width: 40%;">
                <div class="card">
                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-f652/k2-_14dea6e8-4513-4c97-99db-854542a39af1.v1.jpg?odnHeight=658&odnWidth=658&odnBg=&odnDynImageQuality=70"
                        alt="" width="100%" height="600px" height="">
                </div>
            </div>
            <div class="d-flex flex-column gap-2 p-2" style="width:30%">
                <div class="card" style="width: 100%;">
                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-3971/k2-_4e4d3052-13bc-4fd6-a891-1519b953f129.v1.jpg?odnHeight=292&odnWidth=512&odnBg=&odnDynImageQuality=70"
                        alt="">
                </div>
                <div class="d-flex gap-2 gap-2">
                    <div class="card"><img
                            src="https://i5.walmartimages.com/dfw/4ff9c6c9-928c/k2-_76119750-4441-4e8b-b075-c613f6433ca0.v1.jpg?odnHeight=342&odnWidth=248&odnBg=&odnDynImageQuality=70"
                            alt="" width="100%" height="350px"></div>
                    <div class="card"><img
                            src="https://i5.walmartimages.com/dfw/4ff9c6c9-a54a/k2-_0cea4f04-1c79-4eda-96e5-cf0421815a5f.v1.jpg?odnHeight=342&odnWidth=248&odnBg=&odnDynImageQuality=70"
                            alt="" width="100%" height="350px"></div>
                </div>
            </div>
            <div class=" p-2" style="width: 30%;">
                <div class="card"><img
                        src="https://i5.walmartimages.com/dfw/4ff9c6c9-4adf/k2-_c8134d4b-fbb5-45ef-a95f-f0770c220d1e.v1.jpg?odnHeight=658&odnWidth=385&odnBg=&odnDynImageQuality=70"
                        width="100%" height="600px" alt=""></div>
            </div>
        </div>
    </section>

    <section class="section-7 p-4">

        <h5 class="mb-3">Product Carousel with Favorite Icon</h5>

        <div id="carouselWithHeart" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-5">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row flex-nowrap">
                        <!-- Product Card Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/05075d3c-abe2-40ed-b3dc-fdca22aafbb5.267f2d9274e461f1f3a4c1984329dcd0.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <!-- Heart icon in corner -->
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$12.99</h6>
                                    <p class="small mb-2">Short description</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat this block for more products -->
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/seo/La-Roche-Posay-Lipikar-AP-Moisturizing-Body-Face-Wash-13-52-fl-oz_6f282647-1db9-43bd-a9d5-33b4a172b5c3.0a7f46f4d1b350f82d77fce8a6c31991.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$19.99</h6>
                                    <p class="small mb-2">Another item here</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/seo/La-Roche-Posay-Lipikar-AP-Gentle-Foaming-Cleansing-Oil-13-52-fl-oz_b39de64b-0a29-42a1-8c4a-c7fe08776f8c.769fa2ba34fbe00d0ba7273ef6c2c1d7.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$8.50</h6>
                                    <p class="small mb-2">Useful item</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/e8ba05c7-7c69-4e59-8f8b-4a207c702158.54bb2775787ce7f216643036641ec09d.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$16.75</h6>
                                    <p class="small mb-2">Great for travel</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/seo/La-Roche-Posay-Cicaplast-Balm-B5-for-Dry-Skin-Irritations-1-35-fl-oz_8c0f4122-33f6-4675-a034-96ce42fe205a.6145eab0f2f9484338fd872d4f1927ce.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$22.00</h6>
                                    <p class="small mb-2">Lightweight item</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/seo/La-Roche-Posay-Toleriane-Hydrating-Gentle-Face-Cleanser-13-52-fl-oz_b0f94471-7951-44d1-9e86-3365333ca6a1.e705f22cb6d3a6c2c5cce2c2fd5a6ad2.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card End -->
                    </div>
                </div>

                <!-- Slide 2 (copy similar block for more products) -->
                <div class="carousel-item">
                    <div class="row flex-nowrap">
                        <!-- Add 6 more product cards here -->
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/2f0b6717-559e-4560-a884-d09e17eca707.eb41e614f3d0ae205d872a92cb0208c4.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/78006253-4e7c-4c86-a2c9-42d45df12c10.99e14f6f6402c1aff8ee216a7bf8a828.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/78006253-4e7c-4c86-a2c9-42d45df12c10.99e14f6f6402c1aff8ee216a7bf8a828.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/0307481f-0484-45ba-9a6b-ef5edf757e46.d3d560b1a33417b2cdb8446b154f5051.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/asr/f222ea9b-217e-4db9-858f-931ccd7c1ee9.92f084597faef0ff17baf22e509cc770.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="card position-relative">
                                <img src="https://i5.walmartimages.com/seo/La-Roche-Posay-Toleriane-Double-Repair-Matte-Moisturizer-SPF-30-3-38-fl-oz_68959ee3-5915-420b-9c57-f5955ae599bb.78a52356770b77e4d0346e6c73d8ce2f.png?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                                    class="card-img-top" alt="Product">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="fas fa-heart text-danger"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="text-success mb-1">$10.00</h6>
                                    <p class="small mb-2">Handy and cheap</p>
                                    <button class="btn btn-sm btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev bg-dark position-absolute top-50" style="height: 40px;width: 40px;"
                type="button" data-bs-target="#carouselWithHeart" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-dark position-absolute top-50" style="height: 40px;width: 40px;"
                type="button" data-bs-target="#carouselWithHeart" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        </div>

    </section>



    <section class="section-video-carousel py-4 bg-white">
        <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-5">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row flex-nowrap g-4">
                        <!-- Video 1 -->
                        <div class="col-md-3">
                            <video class="w-100 rounded" controls>
                                <source
                                    src="https://advertising.walmart.com/thunder/assets/media-service/wcnp-prod/videos/c20485d2-c19e-404b-90c0-b7219f0ef353/transcode/c21be021-76c1-48a8-8c8d-00e6255db0c2/720x1280_PROGRESSIVE_1858715843.mp4"
                                    type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <img src="/Users/public/images/26.jpeg" width="40px" class="rounded-circle"
                                    alt="profile">
                                <span class="fw-bold">$19.99</span>
                            </div>
                            <p class="text-muted small">High-quality wireless charger with fast charging support.
                            </p>
                        </div>

                        <!-- Video 2 -->
                        <div class="col-md-3">
                            <video class="w-100 rounded" controls>
                                <source
                                    src="https://advertising.walmart.com/thunder/assets/media-service/wcnp-prod/videos/7829ad19-3ea0-41b0-a445-74fb68e65410/transcode/e620b641-f982-4fd4-a4a6-505ded8cd25f/720x1280_PROGRESSIVE_0d7.mp4"
                                    type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <img src="/Users/public/images/26.jpeg" width="40px" class="rounded-circle"
                                    alt="profile">
                                <span class="fw-bold">$14.50</span>
                            </div>
                            <p class="text-muted small">Compact speaker with crystal-clear sound and Bluetooth.</p>
                        </div>

                        <!-- Video 3 -->
                        <div class="col-md-3">
                            <video class="w-100 rounded" controls>
                                <source
                                    src="https://advertising.walmart.com/thunder/assets/media-service/wcnp-prod/videos/9eff21ce-6e0c-4d02-8681-257af0ed19c8/transcode/5f369a20-4596-4862-956c-757866e8afd2/720x1280_PROGRESSIVE_1858715843.mp4"
                                    type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <img src="/Users/public/images/30.jpeg" class="rounded-circle" width="40px"
                                    alt="profile">
                                <span class="fw-bold">$29.99</span>
                            </div>
                            <p class="text-muted small">Stylish lamp with adjustable brightness and USB support.</p>
                        </div>

                        <!-- Video 4 -->
                        <div class="col-md-3">
                            <video class="w-100 rounded" controls>
                                <source
                                    src="https://advertising.walmart.com/thunder/assets/media-service/wcnp-prod/videos/003c570a-084b-4019-bfa9-d89f5f009089/transcode/154c9a7f-abc0-4394-ad6c-15440622dbd1/720x1280_PROGRESSIVE_1858715843.mp4"
                                    type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <img src="/Users/public/images/26.jpeg" class="rounded-circle" alt="profile"
                                    width="40px">
                                <span class="fw-bold">$11.25</span>
                            </div>
                            <p class="text-muted small">Desk organizer set for professionals and students alike.</p>
                        </div>
                    </div>
                </div>

                <!-- You can copy the .carousel-item block to create more slides -->
                <div class="carousel-item active">
                    <div class="row flex-nowrap g-4">
                        <!-- Video 1 -->
                        <div class="col-md-3">
                            <video class="w-100 rounded" controls>
                                <source
                                    src="https://advertising.walmart.com/thunder/assets/media-service/wcnp-prod/videos/653a8a0e-1337-4048-b219-2d268bf35f1c/transcode/b4d2c501-d9f3-4c9c-9e74-93db45c14daf/720x1280_PROGRESSIVE_e9b.mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <img src="/Users/public/images/10.jpeg" width="40px" class="rounded-circle"
                                    alt="profile">
                                <span class="fw-bold">$19.99</span>
                            </div>
                            <p class="text-muted small">High-quality wireless charger with fast charging support.
                            </p>
                        </div>

                        <!-- Video 2 -->
                        <div class="col-md-3">
                            <video class="w-100 rounded" controls>
                                <source
                                    src="https://advertising.walmart.com/thunder/assets/media-service/wcnp-prod/videos/654933b8-e0e1-40c5-9ec3-bc91abed0984/transcode/b59cf8af-f814-4298-bb94-fd70d3fdad2a/720x1280_PROGRESSIVE_b6d.mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <img src="/Users/public/images/26.jpeg" width="40px" class="rounded-circle"
                                    alt="profile" width="40px">
                                <span class="fw-bold">$14.50</span>
                            </div>
                            <p class="text-muted small">Compact speaker with crystal-clear sound and Bluetooth.</p>
                        </div>

                        <!-- Video 3 -->


                        <!-- Video 4 -->

                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev bg-dark position-absolute top-50" style="height: 40px; width: 40px;"
                type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-dark position-absolute top-50" style="height: 40px; width: 40px;"
                type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- Bootstrap JS CDN (include at end of body) -->

    <section class="section-8 p-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-between">
            <!-- Card -->
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Magnetic-Wireless-Charging-Pad-15W-White_8078668d-6e55-4c09-a690-cbfefd4ded77.5baa0aa55d2ef0934e7710a7db6c1ff3.png?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="position-relative">
                        <img src="https://i5.walmartimages.com/seo/onn-Multi-Angle-Laptop-Stand_9c75e802-406b-494f-b41c-ab84885e5689.7bab41ff235f27066ea3368a9b8387f0.jpeg?odnHeight=580&odnWidth=580&odnBg=FFFFFF"
                            class="card-img-top" alt="">
                    </div>
                    <div class="card-body p-2">
                        <button class="btn btn-primary rounded-5 mb-2">+Add</button>
                        <p class="fw-bold mb-1"><sup>$</sup><sub class="fs-5">21</sub><sup>76</sup></p>
                        <p class="mb-1">On multi Angle Laptop Stand</p>
                        <p class="text-warning d-flex align-items-center gap-2 mb-1">
                            ★★★★★<sub class="text-secondary">215</sub>
                        </p>
                        <p class="text-primary fw-bold mb-1" style="font-size:small;">
                            Save with
                            <img src="//i5.walmartimages.com/dfw/63fd9f59-ac39/29c6759d-7f14-49fa-bd3a-b870eb4fb8fb/v1/wplus-icon-blue.svg"
                                width="20px">
                        </p>
                        <p class="mb-0" style="font-size: small;">Free Pickup <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Delivery <b>today</b></p>
                        <p class="mb-0" style="font-size: small;">Free Shipping, arrive <b>today</b></p>
                    </div>
                </div>
            </div>

            <!-- Duplicate the above .col block for more cards -->
        </div>
    </section>

    <section class="section-social p-4">
        <p class="fs-4 fw-bold">Trend On Social Media</p>
        <div class="row g-3">
            <div class="col-lg-4">
                <div class="card"><img
                        src="https://i5.walmartimages.com/dfw/605847c-deee/k2-_567a8c8c-a60d-4063-b974-0035ef451c55.v1.jpg?odnHeight=520&odnWidth=520"
                        width="100%" alt=""></div>
            </div>
            <div class="col-lg-4"><img
                    src="https://i5.walmartimages.com/dfw/605847c-5461/k2-_9aed96e9-2f3c-4268-9ab9-fb136a65c132.v1.jpg?odnHeight=520&odnWidth=520"
                    alt="" width="100%"></div>
            <div class="col-lg-4"><img
                    src="https://i5.walmartimages.com/dfw/605847c-665c/k2-_3821658d-1f8f-4b62-a962-cd6ba56a755d.v1.jpg?odnHeight=520&odnWidth=520"
                    alt="" width="100%"></div>
        </div>
    </section>

    <?php include './includes/footer.php'?>




    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#showOverlayBtn').click(function(e) {
            e.stopPropagation();

            const $underlay = $('.underlay');

            if ($underlay.is(':visible')) {
                $underlay.fadeOut();
                $('body').css('overflow', 'auto'); // enable scrolling
            } else {
                $underlay.removeClass('d-none').fadeIn();
                $('body').css('overflow', 'hidden'); // disable scrolling
            }
        });


        // Clicking on the underlay hides it
        $('.underlay').click(function() {
            $(this).fadeOut(function() {
                $(this).addClass('d-none');
            });
            $('body').css('overflow', 'auto');
        });

        // Prevent the overlay component from closing when clicked inside
        $('#pick-up').click(function(e) {
            e.stopPropagation();
        });
        $('#address').click(function(e) {
            e.stopPropagation();
        })
        $('#add-address').click(function() {
            $('#address').removeClass('d-none');
            $('.underlay-2').removeClass('d-none');
        })
        $('.address-x').click(function() {
            $('.underlay-2').addClass('d-none');
        })

        // here the underlay-3
        $('#store-btn').click(function() {
            $('.underlay-3').removeClass('d-none')
        })
        $('.address-x-2').click(function(e) {
            e.stopPropagation();
            $('.underlay-3').addClass('d-none')
        })
        $('.underlay-3').click(function(e) {
            e.stopPropagation();
            $('.underlay-3').addClass('d-none')
        })
        $('#underlay-3-foam').click(function(e) {
            e.stopPropagation();
        })
        $('#toggleIcon').click(function() {
            $(this).toggleClass('rotate-90');
        });
        $('#recorder').click(function() {

            $recorder = $('.recorder-lay');
            if ($recorder.is(':visible')) {
                $recorder.fadeOut();
                $('body').css('overflow', 'auto'); // enable scrolling
            } else {
                $recorder.removeClass('d-none').fadeIn();
                $('body').css('overflow', 'hidden'); // disable scrolling
            }
        })
        $('.recorder-lay').click(function(e) {
            e.stopPropagation();
        })
        $('#department').click(function() {

            $recorder = $('.department-lay');
            if ($recorder.is(':visible')) {
                $recorder.fadeOut();
                $('body').css('overflow', 'auto'); // enable scrolling
            } else {
                $recorder.removeClass('d-none').fadeIn();
                $('body').css('overflow', 'hidden'); // disable scrolling
            }
        })
        $('#service').click(function() {
            $recorder = $('.service-lay');
            if ($recorder.is(':visible')) {
                $recorder.fadeOut();
                $('body').css('overflow', 'auto'); // enable scrolling
            } else {
                $recorder.removeClass('d-none').fadeIn();
                $('body').css('overflow', 'hidden');
                // disable scrolling
            }
        })
        $('#signin').click(function() {

            $recorder = $('.signin-lay');
            if ($recorder.is(':visible')) {
                $recorder.fadeOut();
                $('body').css('overflow', 'auto'); // enable scrolling
            } else {
                $recorder.removeClass('d-none').fadeIn();
                $('body').css('overflow', 'hidden'); // disable scrolling
            }
        })
        $('#more').click(function() {

            $recorder = $('.more-lay');
            if ($recorder.is(':visible')) {
                $recorder.fadeOut();
                $('body').css('overflow', 'auto'); // enable scrolling
            } else {
                $recorder.removeClass('d-none').fadeIn();
                $('body').css('overflow', 'hidden'); // disable scrolling
            }
        })

    });
    </script>
</body>

</html>