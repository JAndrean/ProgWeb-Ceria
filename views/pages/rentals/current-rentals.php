<?php
    include_once "../../head.php";
?>
    <title>Current rentals</title>
    <link rel="stylesheet" href="../../../css/current-rentals.css">
<?php
    include_once "../../header.php"
?>
    <!-- main -->
    <div class="main">
        <div class="breadcrumb">
            <div class="container">
                <a href="../home.php">home</a> 
                / <a href="./rentals.php">rentals</a> 
                / current
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="container">
                <h2>Current rentals</h2>
                <input type="text" placeholder="find rentals">

                <div class="displayTable">
                    <div class="sortBy">
                        <select name="sortRental" id="sortRental">
                            <option value="0"  disabled selected>Sort by...</option>
                            <option value="1">Latest</option>
                            <option value="2">Earliest</option>
                            <option value="3">Name</option>
                        </select>
                    </div>
                    <div class="table">

                    </div>
                </div>
            </div>            
        </div>
        <!-- content end -->
    </div>
    <!-- main end -->

</body>
</html>