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
                / return
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="container">
                <h2>Return a rental</h2>
                <input type="text" placeholder="rental ID">
                <input type="button" value="Enter">
                
                <!-- data list -->
                <div class="dataList">
                    <!-- rental details -->
                    <div class="rentalDetails">
                        <h3>Rental details</h3>
                        <input type="button" value="cancel">
                        <div class="data">
                            <p>Rental ID</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>Renter name</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>Pickup date</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>Supposed Return date</p>
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
                    </div>
                    <!-- rental details end -->
                    <!-- rental price -->
                    <div class="rentalPrice">
                        <div class="dataList">
                            <div class="data">
                                <p>Late fine x days</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>Extra fines</p>
                                <input type="text">
                            </div>
                            <div class="data">
                                <p>Subtotal (IDR)</p>
                                <p></p>
                            </div>
                            <input type="button" value="Confirm">
                        </div>
                    </div>
                    <!-- rental price end -->
                </div>
                <!-- data list end -->
            </div>
        </div>
        <!-- content end -->
    </div>
    <!-- main end -->
    
</body>
</html>