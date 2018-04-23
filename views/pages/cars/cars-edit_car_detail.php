<?php
    include_once "../../head.php";
?>
    <title>Edit car details</title>
<?php
    include_once "../../header.php"
?>
    <!--main start-->
    <div class="main">
        <div class="container">
            <!--breadcrumb start-->
            <div class="breadcrumb">
                    <a href="../home.php">home</a> 
                    / <a href="./cars.php">cars</a> 
                    / <a href="./cars-view_cars.php">view cars</a> 
                    / <a href="./cars-car_detail.php">details</a> 
                    / edit details
                </div>
            <!--breadcrumb end-->
            <div class="content">

            <!--button start-->
            <div class="buttons">
                <h3>Car details</h3>
                <form action="">
                    <input type="submit" name="cancel" value="cancel">
                    <input type="submit" name="save" value="save">
                </form>
            </div>
            <!--button end-->

                 <!--data list start-->
                 <div class="datalist">
                        <form action="" method="post">
                            <div class="data">
                                <p> </p>
                            </div>
                            <div class="data">
                                <p>Car ID</p>
                                <input type="text" name="carId" id="carId">
                            </div>
                            <div class="data">
                                <p>Car Manufacturer</p>
                                <input type="text" name="carManuf" id="carManuf">
                            </div>
                            <div class="data">
                                <p>Car Brand</p>
                                <input type="text" name="carBrand" id="carBrand">
                            </div>
                            <div class="data">
                                <p>Plate Number</p>
                                <input type="text" name="plateNum" id="plateNum">
                            </div>
                            <div class="data">
                                <p>Plate Expiry</p>
                                <input type="text" name="plateEx" id="plateEx">
                            </div>
                            <div class="data">
                                <p>Color</p>
                                <input type="text" name="car-color" id="car-color">
                            </div>
                            <div class="data">
                                <p>Rental price per day (IDR)</p>
                                <input type="text" name="rentPrice" id="rentPrice">
                            </div>
                            <div class="data">
                                <p>Car Status</p>
                                <input type="radio" name="available">
                                <span>available</span>
                                <input type="radio" name="maintenance">
                                <span>maintenance</span>
                            </div>
                        </form>
                    </div>
                    <!--data list end-->

            </div>
        </div>
        <!--main end-->
        
    </div>
    <!--main end-->
</body>
</html>