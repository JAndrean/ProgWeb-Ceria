<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New rental - Personal Info</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/new-rental-2.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
</head>
<body>
    <header>
        <div class="topHeader">
            <div class="container">
                <a href="../../home.html">
                    <div id="brand">
                        <img src="../../asset/main-logo.png" alt="main logo">
                    </div>
                </a>
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

    <!-- main -->
    <div class="main">
        <div class="breadcrumb">
            <div class="container">
                <a href="../../home.html">home</a> /
                <a href="./rentals.html">rentals</a> 
                / new rental
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <!-- container -->
            <div class="container">
                <h2>Details</h2>
                <input type="button" value="Cancel">
                <!-- data list -->
                <div class="dataList">
                    <!-- rental details -->
                    <div class="rentalDetails">
                        <h3>Rental details</h3>
                        <div class="data">
                            <span>from</span>
                            <span></span>
                            <span> to </span>
                            <span></span>
                        </div>
                        <div class="data">
                            <p>Car brand</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>Plate Number</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>Color</p>
                            <p></p>
                        </div>
                    </div>
                    <!-- rental details end -->
                    <!-- renter details -->
                    <div class="renterDetails">
                        <h3>Renter details</h3>
                        <form action="" method="post">
                            <div class="data">
                                <p>Not a member</p>
                                <input type="checkbox" name="isMember" id="isMember">
                            </div>
                            <div class="data">
                                <input type="text" name="">
                            </div>
                            <div class="data">
                                <p>Name</p>
                                <input type="text">
                            </div>
                            <div class="data">
                                <p>ID Number</p>
                                <input type="text">
                                
                            </div>
                            <div class="data">
                                <p>Promo code</p>
                                <input type="text">
                                
                            </div>
                        </form>
                    </div>
                    <!-- renter details end -->
                    <!-- total price -->
                    <div class="rentalPrice">
                        <div class="dataList">
                            <div class="data">
                                <p>Rental price x Days</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>Promo discount</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>Member discount</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>Subtotal (IDR)</p>
                                <p></p>
                            </div>
                            <input type="button" value="Confirm">
                        </div>
                    </div>
                    <!-- total price end -->
                </div>
                <!-- data list end -->
            </div>
            <!-- container end -->
        </div>
        <!-- content end -->
    </div>
    <!-- main end -->

    <!-- footer -->
    <footer>

    </footer>
    <!-- footer end -->
</body>
</html>