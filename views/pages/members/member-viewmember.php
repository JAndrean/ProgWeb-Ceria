<?php
    include_once "../../head.php";
?>
    <title>View members</title>
    <link rel="stylesheet" href="../../../css/member-viewmember.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <div class="breadcrumb">
                <a href="../home.php">home</a> 
                / <a href="./members.php">members</a> 
                / view members    
              
            </div>
          <!-- content start -->
          <div class="content">
           <h2>View Member</h2>
            
                    <form action="" method="post">
                        <div class="search">
                        <input type="text" name="search"> 
                        <button>search</button>
                        </div>
                        <div>
                            <h5>sort by </h5>
                            <div id="sort-box">
                                <ul id="sort-dd">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                </ul>
                            </div>
                            
                        </div>
                    </form>
                
                <div class="table">
                </div>  

            </div>
            <!-- content end -->
        </div>
    </div>
</body>
</html>