<?php
    include_once "../../head.php";
?>
    <title>Rental details</title>
    <link rel="stylesheet" href="../../../css/rental-details.css">
<?php
    include_once "../../header.php"
?>
    <!-- main -->
    <div class="main">
        <div class="breadcrumb">
            <div class="container">
                <a href="../home.php">home</a> 
                / <a href="./rentals.php">rentals</a>
                / <a href="./current-rentals.php">current</a>
                / details
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="container">
                <h2>Rental details</h2>
                <!-- data list -->
                <div class="dataList">
                    <div class="rentalDetails">
                        <h3>Rental details</h3>
                        <div class="data">
                            <p>Pickup date</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>Return date</p>
                            <p></p>
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
                        <div class="data">
                            <p>Renter name</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ID number</p>
                            <p></p>
                        </div>
                    </div>
                    
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
                        </div>
                    </div>
                    <!-- total price end -->
                </div>
                <!-- data list end -->
            </div>            
        </div>
        <!-- content end -->
    </div>
    <!-- main end -->

</body>
</html>