<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

    <style>
        .carousel-indicators [data-bs-target] {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* ////////////////////////// */
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 48px;
            height: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            border: 2px solid #fff;
            z-index: 1;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 15px;
            height: 15px;
        }

        .carousel-control-prev {
            left: 20px;
        }

        .carousel-control-next {
            right: 20px;
        }

        /* ////////////////////////////////// */
        img {
            height: 600px;
        }

        .text {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 700px;
            font-size: 40px;
            color: white;
            font-weight: bold;
            text-align: center;
            font-family: 'Prata';
            margin: 0px 0px 48px;
        }

        .button {
            position: absolute;
            top: 63%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            color: #27622A;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins';
            padding: 16px 10px;
            width: 260px;
            height: 50px;
            border: none;
            overflow: hidden;
            z-index: 1;
        }

        .button:before {
            content: '';
            bottom: 0;
            height: 100%;
            left: 0;
            position: absolute;
            width: 100%;
            z-index: -1;
        }

        .button:after {
            content: '';
            background: #388e3c;
            position: absolute;
            bottom: 0;
            height: 100%;
            left: 0;
            width: 0%;
            transition: width 0.5s ease;
            z-index: -1;
        }

        .button:hover {
            color: white;
        }

        .button:hover:after {
            width: 100%;
            color: #ffff;
            font-weight: bold;
        }

        /* ////////////////////////////// */
        .Product-Category {
            padding: 100px 0px 0px;
           
        }

        .product_item {
            padding: 0px 12px;
            
        }
        h3{
            color: #27622A;
            font-size: 26px;
            font-family: 'Prata';
            margin: 0px 0px 8px;
            align-items: center;
            display: flex;
            justify-content: center;
            margin-bottom: 70px;
        }
        /* ///////////////////////////////// */
        .contain_product_box{
            display: flex;
            flex-wrap: wrap;
            gap:20px;
            justify-content: center;
        }

        .contain_product {
            width: 38%;
            display: flex;
            flex-direction: row;
            position: relative;
            border: none;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .product-left{
            margin-right: 15px;
        }
        .contain_product:before {
            content: '';
            height: 5px;
            background: #bcaaa4;
            bottom: 0;
            left: 0;
            position: absolute;
            width: 100%;
        }

        .contain_product:after {
            content: '';
            height: 5px;
            background: #388e3c;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            transition: width 0.5s ease;
        }

        .contain_product:hover:after {
            width: 100%;
        }

        .product-left img {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin: 0px 18px 0px 18px;
        }

        .product-right {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .title-product {
            font-size: 22px;
            color: #163717;
        }
        .light-product{
            border-bottom: 1px solid #ccc;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Previous</span> -->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Next</span> -->
            </button>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="https://yardzooks.com/wp-content/uploads/2020/09/new-Homepage-Hero-image-2.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="https://yardzooks.com/wp-content/uploads/2020/09/new-Homepage-Hero-image.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://yardzooks.com/wp-content/uploads/2020/09/new-Homepage-Hero-image.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="text">Your one stop for Everything Garden!</div>
            <button class="button">GO TO SHOP</button>
        </div>
        <!---------------------------------------------------------------------->
        <section class="Product-Category">
            <div class="product_item">
                <div class="title">
                    <h3>Product Categories</h3>
                </div>
                <div class="contain_product_box">
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2020/01/83291.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2020/09/725081.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2021/04/cat-metal-planters.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2022/09/74048_Helios_84inchLargeSunflower.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2022/11/527046.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2020/01/baby-hippo-bag.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                    <div class="contain_product col-sm-12 col-md-6 col-lg-4">
                        <div class="product-left">
                            <img src="https://yardzooks.com/wp-content/uploads/2021/04/wrought-iron.jpg" alt="">
                        </div>
                        <div class="product-right">
                            <p class="title-product">
                                Animal Statues
                            </p>
                            <p class="light-product">
                                Explore
                            </p>
                        </div>
                    </div>
                </div>
    
                   

                </div>

            </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>