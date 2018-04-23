<?php
    include_once "../../head.php";
?>
    <title>Member details</title>
    <link rel="stylesheet" href="../../../css/member-viewmemberdetails.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / <a href="./members.php">members</a> 
                / <a href="./member-viewmembers"> view members </a>
                / details
            </div>
          
            <!-- content start -->
            <div class="content">
              <!-- datalist start -->
              <div class="datalist">
                  
                    <form action="" method="post">
                            <div class="data">
                                <p> </p>
                            </div>
                            <div class="data">
                              <p>first name</p>  
                              
                            </div>
                            <div class="data">
                                <p>last name</p>
                                
                            </div>
                            <div class="data">
                                <p>idNumber</p>
                                
                            </div>
                            <div class="data">
                                <p>gender</p>
                            </div>
                            <div class="data">
                                <p></p>
                            </div>
                            <div class="data">
                                <p>expiry date</p>
                            </div>
                            <button>save</button>
                    </form>  
              </div>
              <!-- datalist end -->
            </div>
            <!-- content end -->
        </div>
    </div>
</body>
</html>