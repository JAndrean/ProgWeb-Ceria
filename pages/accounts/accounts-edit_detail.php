<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit account details</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
</head>
<body>
    <header>
        <div class="topHeader">
            <div class="container">
                <div id="brand">
                    <img src="../../asset/main-logo.png" alt="main logo">
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="container">
                <ul id="navMenu">
                    <div><img src="../../asset/icons/dropdown.png" alt="dropdown" id="dropdown"></div>
                    <li>Rentals</li>
                    <li>Cars</li>
                    <li>Members</li>
                    <li>Accounts</li>
                    <li>Logs</li>
                </ul>
            </div>
        </div>
    </header>
    <div id="pushDown"></div>

    <!--main start-->
    <div class="main">
        <div class="container">
            
            <!--breadcrumb start-->
            <div class="breadcrumb">
                    <a href="../../home.html">home</a> /
                    <a href="./accounts.html">accounts</a> /
                    <a href="./accounts-view_accounts.html">view accounts</a> /
                    <a href="./accounts-account_detail.html">details</a> /
                    edit details
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