<?php
    include_once "../../head.php";
?>
    <title>Add a new account</title>
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
                / add account
            </div>
            <!--breadcrumb end-->

            <!--content start-->
            <div class="content">
                <div class="label">
                    <h3>Add Account</h3>
                </div>
                
                <!--form start-->
                <div class="forms">
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
                <!--form end-->

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
            </div>
            <!--content end-->
        </div>

    <!--main end-->    
    </div>
</body>
</html>