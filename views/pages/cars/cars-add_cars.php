<?php
    include_once "../../head.php";
?>
    <title>Add a new car</title>
    <link rel="stylesheet" href="../../../css/add_cars.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <!--breadcrumb start-->
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / <a href="./cars.php">cars</a> 
                / add car
            </div>
            <!--breadcrumb end-->

            <!--content start-->
            <div class="content">
                <!--button start-->
                <h3>Add new Car</h3>
                <div class="button">
                    <div>
                        <input type="submit" name="cancel" value="cancel">
                    </div>
                    <div>    
                        <form action="">
                            <input type="submit" name="add" value="add">
                        </form>
                    </div>
                </div>
                <!--button end-->
                
                <!--datalist start-->
                <div class="datalist">
                    <form action="" method="post">
                        <div id="data">
                            <input type="text" name="manufacturer" placeholder="manufacturer">
                        </div>
                        <div id="data">
                            <input type="text" name="brand" placeholder="brand">
                        </div>
                        <div id="data">
                            <input type="text" name="plate" placeholder="plate">
                        </div>
                        <div id="data">
                            <input type="text" name="expiry" placeholder="plate expiration">
                        </div>
                        <div id="data">
                            <input type="text" name="color" placeholder="color">
                        </div>
                        <div id="data">
                            <input type="text" name="price" placeholder="price">
                        </div>
                        <div id="upl-button">
                            <input type="submit" name="upload-img" value="upload image">
                        </div>
                    </form>
                </div>
                <!--datalist end-->                
            </div>
            <!--content end-->
        </div>

    <!--main end-->    
    </div>
</body>
</html>