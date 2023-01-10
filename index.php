<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="custom1.css">
</head>

<body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="useradmin.html">Admin Pannel</a>
    <a href="services.html">Services</a>
    <a href="contact.html">Contact</a>
    <a href="user.html">Register</a>
  </div>





  <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  </div>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
    }
  </script>

  <nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav mr-auto">
      <li><a class="active" href="#home">Home</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Electronics</a>
        <div class="dropdown-content">
          <a href="mobile.html">Mobile </a>
          <a href="camera.html">Camera</a>
          <a href="laptop.html">laptop</a>
          <a href="earphones.html">Earphones</a>
          <a href="ironing.html">Ironing</a>
        </div>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Apparels</a>
        <div class="dropdown-content">
          <a href="jeans.html">Jeans</a>
          <a href="shoes.html">Shoes</a>
          <a href="tshirts.html">T-shirts</a>
          <a href="traditional.html">Traditional</a>
          <a href="ethnic.html">Ethnic</a>
        </div>
      </li>


      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Bestseller</a>
        <div class="dropdown-content">
          <a href="clothes.html">Clothes</a>
          <a href="peopleschoice.html">Peoples choice</a>
          <a href="popular.html">Popular</a>
          <a href="countryside.html">Countryside</a>

        </div>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">New Releases</a>
        <div class="dropdown-content">
          <a href="trending.html">Trending</a>
          <a href="kitchenware.html">Kitchenware</a>
          <a href="Toys.html">Toys</a>
        </div>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Developers Guide</a>
        <div class="dropdown-content">

          <a href="rishi.html">Rishi Roushan</a>
        </div>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Contact us</a>
        <div class="dropdown-content">
          <a href="rishi1.html">Rishi Roushan</a>
        </div>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Report</a>
        <div class="dropdown-content">
          <a href="feedback.html">Feedback</a>

          <a href="tips.html">Tips</a>
        </div>
      </li>

    </ul>
  </nav>
  <style>
    * {
      box-sizing: border-box;
    }

    .card {
      float: left;
      width: 23.33%;
      padding: 20px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>
  </head>

  <body>


    <div class="container">
      <div class="row">
        <div class="card m-2">
          <a href="shoes.html"><img src="8486177.jpg" alt="shoes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="shoes.html"><img src="4134983364_4.jpg" alt="shoes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="shoes.html"><img src="shoes2.jpg" alt="shoes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="shoes.html"> <img src="1_525349_ZM_BLACK_ALT1.jpg" alt="shoes" class="card-img-topnew" magin-top></a>
        </div>

        <div class="card m-2">
          <a href="jeans.html"><img src="boys-clothes-500x500.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="jeans.html"> <img src="boysclothes1.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="jeans.html"><img src="boysclothes2.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="jeans.html"><img src="boysclothes3.jpg" alt="clothes" class="card-img-topnew"></a>

        </div>

        <div class="card m-2">
          <a href="jeans.html"><img src="girlsclothes1.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="jeans.html"><img src="girlsclothes2.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="jeans.html"><img src="girlsclothes3.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="clothes.html"><img src="girlsclothes4.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>

        <div class="card m-2">
          <a href="clothes.html"><img src="boysinjeans1.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="clothes.html"><img src="boysinjeans2.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="clothes.html"><img src="boysinjeans3.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="clothes.html"><img src="boysinjeans4.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="clothes.html"><img src="boysinjeans5.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="clothes.html"> <img src="boysinjeans7.jpg" alt="clothes" class="card-img-topnew"></a>
        </div>

        <div class="card m-2">
          <a href="mobile.html"><img src="mobile1.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="mobile.html"><img src="mobile2.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="mobile.html"><img src="mobile3.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="mobile.html"><img src="mobile4.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="mobile.html"> <img src="mobile5.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="mobile.html"><img src="mobile6.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>

        <div class="card m-2">
          <a href="earphones.html"><img src="earphone1.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="earphones.html"> <img src="earphone2.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="earphones.html"> <img src="earphone3.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="earphones.html"><img src="earphone4.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>


        <div class="card m-2">
          <a href="laptop.html"><img src="laptops1.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="laptop.html"><img src="laptops2.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="laptop.html"><img src="laptops4.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="laptop.html"> <img src="laptops5.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>

        <div class="card m-2">
          <a href="camera.html"> <img src="camera1.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="camera.html"><img src="camera2.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="camera.html"> <img src="camera3.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="camera.html"><img src="camera4.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="camera.html"> <img src="camera5.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="card m-2">
          <a href="camera.html"><img src="camera5.jpg" alt="electronics" class="card-img-topnew"></a>
        </div>
        <div class="row">
          <div class="card m-2">
            <a href="kitchenware.html"><img src="kitchenware1.jpg" alt="kitchen" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="kitchenware.html"><img src="kitchenware2.jpg" alt="kitchen" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="kitchenware.html"> <img src="kitchenware3.jpg" alt="kitchen" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="kitchenware.html"> <img src="kitchenware4.jpg" alt="kitchen" class="card-img-topnew"></a>
          </div>

          <div class="card m-2">
            <a href="toys.html"><img src="toys.jpg" alt="toys" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="toys.html"><img src="toys1.jpg" alt="toys" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="toys.html"><img src="toys2.jpg" alt="toys" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="toys.html"> <img src="toys3.jpg" alt="toys" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="toys.html"> <img src="toys4.jpg" alt="toys" class="card-img-topnew"></a>
          </div>

          <div class="card m-2">
            <a href="ethnic.html"><img src="ethnic1.jpg" alt="clothes" class="card-img-topnew"></a>

          </div>
          <div class="card m-2">
            <a href="ethnic.html"> <img src="ethnic2.jpg" alt="clothes" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="ethnic.html"> <img src="ethnic3.jpg" alt="clothes" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="ethnic.html"> <img src="ethnic4.jpg" alt="clothes" class="card-img-topnew"></a>
          </div>
          <div class="card m-2">
            <a href="ethnic.html"> <img src="ethnic5.jpg" alt="clothes" class="card-img-topnew"></a>
          </div>
        </div>
      </div>














      <style>
        img {
          float: right;
        }
      </style>














      <a href="feedback.html">
    </div>
    <center>
      <h1> contact us !!!!!!!!!</h1>
    </center></a>

  </body>

</html>
</body>

</html>
