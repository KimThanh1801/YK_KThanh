<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        nav {
    z-index: 1000;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff; /* Đảm bảo có nền */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng đổ bóng */
    padding: 0; /* Loại bỏ padding không cần thiết */
}
        .row{
            padding:0px 12px;
        }
        .li1{
            padding: 31px 30px;
        }
        .li2{
            margin: 0px 0px 0px 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="row col-5">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item li1 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Animal Statues</a></li>
                                <li><a class="dropdown-item" href="#">Coconut Liners</a></li>
                                <li><a class="dropdown-item" href="#">Metal Planters</a></li>
                                <li><a class="dropdown-item" href="#">Outdoor Decor</a></li>
                                <li><a class="dropdown-item" href="#">Small Indoor Pots</a></li>
                                <li><a class="dropdown-item" href="#">Watering Bags</a></li>
                                <li><a class="dropdown-item" href="#">Wrought Iron</a></li>
                            </ul>
                        </li>
                        <li class="nav-item li1">
                            <a class="nav-link disabled" aria-disabled="true">CONTACT</a>
                        </li>
                        <li class="nav-item li1">
                            <a class="nav-link disabled" aria-disabled="true">ABOUT</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row col-2">
                <a href=""><img src="../app/img/logo.png" alt="Logo"></a>
            </div>
            <div class="row col-5">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item li2">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="nav-item li2">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>0 ITEM - $0</span>
                            </a>
                        </li>

                        <li class="nav-item li2">
                            <a class="nav-link" href="#">
                                MY ACCOUNT
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>