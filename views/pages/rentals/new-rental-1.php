<?php
    include_once "../../head.php";
?>
    <title>New rental - Available cars</title>
    <link rel="stylesheet" href="../../../css/new-rental-1.css">
<?php
    include_once "../../header.php"
?>
    <!-- main -->
    <div class="main">
        <div class="breadcrumb">
            <div class="container">
                <a href="../home.php">home</a> 
                / <a href="./rentals.php">rentals</a> 
                / new rental
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <!-- date input -->
            <div class="dateInput">
                <div class="bgImage"></div>
                <div class="container">
                    <div class="formBox">
                        <form action="" method="post">
                            <input type="date" name="pickupDate" id="pickupDate">
                            <input type="date" name="pickupDate" id="pickupDate">
                            <input type="submit" value="Search" name="searchButton" id="searchButton">
                        </form>
                    </div>
                </div>
            </div>
            <!-- date input end -->

            <!-- available cars -->
            <div class="availableCars">
                <h2>Available cars</h2>
                <div class="carCards"></div>
            </div>
            <!-- available cars end -->            
        </div>
        <!-- content end -->
    </div>
    <!-- main end -->

</body>
</html>