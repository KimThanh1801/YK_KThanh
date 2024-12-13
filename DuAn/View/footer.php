<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="../app/css/index.css"> -->
  <style>
    footer {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      color: #fff;
      background-color: #388e3c;
      height: 441px;
    }

    .row {
      padding: 80px 0px 50px;
      display: flex;
      flex-direction: row;
    }

    h3 {
      margin: 0px 0px 16px;
    }

    .email {
      margin: 0px 6px 0px 0px;
      font-size: 16px;
    }

    a {
      text-decoration: none;
    }

    .col-md-4 .list-unstyled,
    .col-md-4 h5 {
      text-align: left;
    }

  </style>
</head>

<body>
  <footer>
    <div class="container1">
      <div class="row">
        <div class="col-md-4 text-md-start">
          <h3>YardZooks</h3>
          <p class="email">Email <span><a href="" class="text-white">contactus@yardzooks.com</a></span></p>

        </div>

        <div class="col-md-4 text-center">
          <h5>About YardZooks</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">About</a></li>
            <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
            <li><a href="#" class="text-white text-decoration-none">Shop</a></li>
            <li><a href="#" class="text-white text-decoration-none">Help</a></li>
          </ul>
        </div>

        <div class="col-md-4 text-md-end">
          <h5>Our Policies</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Returns & Exchanges Policy</a></li>
            <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
          </ul>
        </div>
        <hr class="border-white my-4">
        <div class="row">
          <div class="col-md-6 text-md-start">
            <p>©2024 YardZooks</p>
          </div>
          <div class="col-md-6 text-md-end">
            <p>Powered by <br> <strong>RUBICO</strong></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>