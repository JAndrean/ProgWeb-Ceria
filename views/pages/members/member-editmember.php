<?php
    include_once "../../head.php";
?>
    <title>Edit member</title>
    <link rel="stylesheet" href="../../../css/member-editmember.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <div class="breadcrumb">
                <a href="../home.php">Home</a> 
                / <a href="./members.php">members</a> 
                / <a href="member-viewmembers.php">view members</a> 
                / <a href="member-viewmembersdetails.php">Details</a> 
                / Edit Member
            </div>
          <!-- content start -->
          <div class="content">
              <h2>Edit Member Details</h2>
                  <button>
                      Cancel
                  </button>
                  <div class="profileImg">
                      <button>
                          change
                      </button>
                </div>
                <!-- datalist start -->
                <div class="dataList">
                    
                        <form action="" method="post">
                            <div class="data">
                                <p> </p>
                            </div>
                            <div class="data">
                              <p>first name</p>  
                              <input type="text" name="firstName">
                            </div>
                            <div class="data">
                                <p>last name</p>
                                <input type="text" name="lastName">
                            </div>
                            <div class="data">
                                <p>idNumber</p>
                                <input type="text" name="idNumber">
                            </div>
                            <div class="data">
                                <input type="radio" name="male">
                                <span>male</span>
                                <input type="radio" name="female">
                                <span>female</span>
                            </div>
                            <div class="data">
                                <p></p>
                            </div>
                            <div class="data">
                                <p>expiry date</p>
                                <input type="text" name="expiryDate">
                            </div>
                            <button>save</button>
                        </form>
                    
                </div>
                <!-- datalist end (div atas) -->
           
            </div>
            <!-- content end (div atas) -->
        
        </div>
    </div>
</body>
</html>