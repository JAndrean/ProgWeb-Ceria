<?php
    include_once "../../head.php";
?>
    <title>Auto Rentals - Home</title>
    <link rel="stylesheet" href="../../../css/logs-car.css">
    <script src="../../../js/logs.js"></script>
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / logs
            </div>
      
            <!-- content start -->
            <div class="content">
                <button class="button1"> View rental history </button>
                <button class="button2"> View car status</button>
                <!-- car status start -->
                <div id="carStatus">
                    <h3>Car Status </h3>
                    <h5>find car</h5>
                    <input type="text" name="history" class="search">
                    <button class="button4">Search</button>

                    <h5>sort by</h5>
                        <!-- table start -->
                        <div class="tableCar">

                        </div>   
                        <!-- table end -->
                </div>
                <!-- car status end -->

                <!-- rental history start -->
                <div id="rentalHistory">
                    <h3>Rental History </h3>
                    <h5>find rental history</h5>
                    <input type="text" name="history" class="search">
                    <button class="button3">Search</button>

                    <h5>sort by</h5>
                        <!-- table start -->
                        <div class="tableHistory">

                        </div>   
                        <!-- table end -->
                </div>
                <!-- rental history end -->
            </div>
            <!-- content end (div atas) -->     
        </div>
    </div>

</body>
</html>