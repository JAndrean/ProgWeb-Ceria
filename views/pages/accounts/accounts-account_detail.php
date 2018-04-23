<?php
    include_once "../../head.php";
?>
    <title>Account details</title>
<?php
    include_once "../../header.php"
?>
    <!--main start-->
    <div class="main">
        <div class="container">
            <!-- otak-atik disini aja -->
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / <a href="./accounts.php">accounts</a> 
                / <a href="./accounts-view_accounts.php">view accounts</a> 
                / details
            </div>
            <div class="content">
            <h3>Account Details</h3>

            <!--button start-->
            <div class="buttons">
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

                <!--button start-->
                <div class="buttons">
                    <form action="">
                        <input type="submit" name="edit" value="edit">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </div>
                <!--button end-->

            </div>
        </div>
        <!--container end-->

        <!--footer start-->
        <footer>
                <div class="container">
                    <div>
                    </div>
                    <table class="contact">
                        <tr>
                            <td>Admin Hotline</td>
                        </tr>
                        <tr>
                            <td>phone: (0274)555-xxxx</td>
                        </tr>
                        <tr>
                            <td>e-mail: autorentail@mail.com</td>
                        </tr>
                    </table>
                    <table class="media">
                        <tr>
                            <td>Social Media</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-facebook-square" style="font-size: 25px;"></i>
                                <i class="fa fa-twitter-square" style="font-size: 25px;"></i>
                                <i class="fa fa-instagram" style="font-size: 25px;"></i>        
                            </td>
                        </tr>
                    </table>
                </div>
            </footer>
        <!--footer end-->

    </div>
    <!--main end-->
</body>
</html>