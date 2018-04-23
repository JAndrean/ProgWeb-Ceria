<?php
    include_once "../../head.php";
?>
    <title>Car Detail</title>
<?php
    include_once "../../header.php"
?>
    <!--main start-->
    <div class="main">
        <div class="container">
            <!-- otak-atik disini aja -->
            <div class="breadcrumb">
                <a href="../../home.php">home</a> 
                / <a href="./cars.php">cars</a> 
                / <a href="./cars-view_cars.php">view cars</a> 
                / details
            </div>
            <div class="content">
                
                <!--button start-->
                <div class="buttons">
                    <h3>Car details</h3>
                    <form action="">
                        <input type="submit" name="edit" value="edit">
                        <input type="submit" name="delete" value="delete">
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
                        </div>
                        <div class="data">
                            <p>Car Manufacturer</p>
                        </div>
                        <div class="data">
                            <p>Car Brand</p>
                        </div>
                        <div class="data">
                            <p>Plate Number</p>
                        </div>
                        <div class="data">
                            <p>Plate Expiry</p>
                        </div>
                        <div class="data">
                            <p>Color</p>
                        </div>
                        <div class="data">
                            <p>Rental price per day (IDR)</p>
                        </div>
                        <div class="data">
                            <p>Car Status</p>
                        </div>
                    </form>
                </div>
                <!--data list end-->

            </div>
        </div>
        <!--container end-->

    </div>
    <!--main end-->
</body>
</html>