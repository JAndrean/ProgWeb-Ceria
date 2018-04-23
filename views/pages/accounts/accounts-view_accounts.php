<?php
    include_once "../../head.php";
?>
    <title>View Accounts</title>
    <link rel="stylesheet" href="../../../css/view_accounts.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <!--main start-->
        <div class="container">

            <!--breadcrumb start-->
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / <a href="./accounts.php">accounts</a> 
                / view accounts
            </div>
            <!--breadcrumb end-->

            <!--content start-->
            <div class="content">
                <h3>View Accounts</h3>
                <h5>Find Member</h5>
                <form action="">
                    <input type="text" name="find-account" placeholder="Find Account...">
                    <input type="submit" name="search" value="Search">
                </form>
                <div>
                    <h5>Sort By</h5>
                    <select>
                        <option value="-1" disabled selected>Sort By...</option>
                        <option value="0">ID</option>
                        <option value="1">First Name</option>
                        <option value="2">Last Name</option>
                    </select>
                </div>
            </div>
            <!--content end-->

        </div>

    <!--main end-->
    </div>
</body>
</html>