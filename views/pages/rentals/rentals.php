<?php
    include_once "../../head.php";
?>
    <title>Rentals</title>
    <link rel="stylesheet" href="../../../css/rentals.css">
<?php
    include_once "../../header.php"
?>
    <!-- main -->
    <div class="main">
        <div class="breadcrumb">
            <div class="container">
                <a href="../home.php">home</a> 
                / rentals
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <!-- menu -->
            <div class="menu">
                <div class="menuBg"></div>
                <div class="container">
                    <!-- menu grid -->
                    <div class="grid">
                        <a href="./new-rental-1.php">
                            <div class="menuItems">
                                <div class="menuLogo">
                                    <img src="../../../asset/icons/rentals.png" alt="">
                                </div>
                                <div class="menuTitle">
                                    <p>Make new rental</p>
                                </div>
                            </div>
                        </a>
                        <a href="./rental-return.php">
                            <div class="menuItems">
                                <div class="menuLogo">
                                    <img src="../../../asset/icons/rentals.png" alt="">
                                </div>
                                <div class="menuTitle">
                                    <p>Return a rental</p>
                                </div>
                            </div>
                        </a>
                        <a href="./current-rentals.php">
                            <div class="menuItems">
                                <div class="menuLogo">
                                    <img src="../../../asset/icons/rentals.png" alt="">
                                </div>
                                <div class="menuTitle">
                                    <p>Current rentals</p>
                                </div>
                            </div>
                        </a>
                        <a href="./cancel-rental.php">
                            <div class="menuItems">
                                <div class="menuLogo">
                                    <img src="../../../asset/icons/rentals.png" alt="">
                                </div>
                                <div class="menuTitle">
                                    <p>Cancel a rental</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- menu grid end -->
                </div>
            </div>
            <!-- menu end -->
        </div>
        <!-- content end -->
    </div>
    <!-- main end -->

</body>
</html>