<?php
    include_once "../../head.php";
?>
    <title>Edit account details</title>
<?php
    include_once "../../header.php"
?>
    <!--main start-->
    <div class="main">
        <div class="container">
            <!--breadcrumb start-->
            <div class="breadcrumb">
                    <a href="../home.php">home</a> 
                    / <a href="./accounts.php">accounts</a> 
                    / <a href="./accounts-view_accounts.php">view accounts</a> 
                    / <a href="./accounts-account_detail.php">details</a> 
                    / edit details
                </div>
            <!--breadcrumb end-->
            <div class="content">
                <h3>Edit Account details</h3>

                <!--button start-->
                <div class="buttons">
                    <form action="">
                        <input type="submit" name="cancel" value="cancel">
                        <input type="submit" name="save" value="save">
                    </form>
                </div>
                <!--button end-->

                <!--datalist start-->
                <div class="datalist">
                    <form action="" method="post">
                        <div id="data">
                            <input type="text" name="idNumber" placeholder="ID Number">
                        </div>
                        <div id="data">
                            <input type="text" name="fname"     placeholder="First Name">
                        </div>
                        <div id="data">
                            <input type="text" name="lname" placeholder="Last Name">
                        </div>
                        <div id="data">
                            <p>Position</p>
                            <input type="radio" name="position-admin">
                            <span>Admin</span>
                            <input type="radio"     name="position-frontdesk">
                            <span>Front Desk</span>
                        </div>
                        <div id="data">
                            <p>Gender</p>
                            <input type="radio" name="genderM">
                            <span>Male</span>
                            <input type="radio" name="genderF">
                            <span>Female</span>
                        </div>
                        <div id="data">
                            <input type="text" name="address" placeholder="Address">
                        </div>
                        <div id="data">
                            <input type="text" name="contact-number" placeholder="Contact Number">
                        </div>
                        <div id="data">
                            <input type="text" name="e-mail" placeholder="E-mail Address">
                        </div>
                        <div id="account-upl-pic">
                            <input type="submit" name="member-upload-img" value="upload image">
                        </div>
                    </form>
                </div>
                <!--datalist end-->
            </div>
        </div>
        <!--main end-->

    </div>
    <!--main end-->
</body>
</html>