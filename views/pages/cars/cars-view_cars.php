<?php
    include_once "../../head.php";
?>
    <title>View cars</title>
    <link rel="stylesheet" href="../../../css/view_cars.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <!--breadcrumb start-->
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / <a href="./cars.php">cars</a> 
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
                    <option value="0" disabled selected>Sort By...</option>
                  	<option value="1">ID</option>
                  	<option value="2">Manufacturer</option>
                  	<option value="3">Brand</option>
                  </select>
                </div>
            </div>
            <!--content end-->
        </div>
    </div>
</body>
</html>