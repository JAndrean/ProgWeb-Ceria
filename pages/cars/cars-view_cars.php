<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Cars</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/view_cars.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
</head>
<body>
    <header>
        <div class="topHeader">
            <div class="container">
                <div id="brand">
                    <img src="../../asset/main-logo.png" alt="main logo">
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="container">
                <ul id="navMenu">
                    <div><img src="../../asset/icons/dropdown.png" alt="dropdown" id="dropdown"></div>
                    <li>Rentals</li>
                    <li>Cars</li>
                    <li>Members</li>
                    <li>Accounts</li>
                    <li>Logs</li>
                </ul>
            </div>
        </div>
    </header>
    <div id="pushDown"></div>
    <div class="main">
        <!--main start-->

        <div class="container">

            <!--breadcrumb start-->
            <div class="breadcrumb">
                <a href="../../home.html">home</a> 
                / <a href="./cars.html">cars</a> 
                / view cars
            </div>
            <!--breadcrumb end-->

            <!--content start-->
            <div class="content">
                <h3>View Cars</h3>
                <h5>Find Car</h5>
                <form action="">
                    <input type="text" name="find-car" placeholder="Find Car...">
                    <input type="submit" name="search" value="Search">
                </form>
                <div>
                    <h5>Sort By</h5>
                  <select>
                    <option value="-1" disabled selected>Sort By...</option>
                  	<option value="0">ID</option>
                  	<option value="1">Manufacturer</option>
                  	<option value="2">Brand</option>
                  </select>
                </div>
            </div>
            <!--content end-->

        </div>

        <!--footer start-->
        <footer>
             <div class="container">
                <div>
                </div>
                <table class="contact">
                    <tr>
                        <td>Admin Hotline</td>
                    </tr>
                    <tr>
                        <td>phone: (0274)555-xxxx</td>
                    </tr>
                    <tr>
                        <td>e-mail: autorentail@mail.com</td>
                    </tr>
                </table>
                <table class="media">
                    <tr>
                        <td>Social Media</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-facebook-square" style="font-size: 25px;"></i>
                            <i class="fa fa-twitter-square" style="font-size: 25px;"></i>
                            <i class="fa fa-instagram" style="font-size: 25px;"></i>        
                        </td>
                    </tr>
                </table>
            </div>
        </footer>
        <!--footer end-->

    <!--main end-->
    </div>
</body>
</html>