<?php
    include_once "../../head.php";
?>
    <title>Add member</title>
    <link rel="stylesheet" href="../../../css/member-addmember.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <div class="breadcrumb">
                <a href="../home.php">home</a>
                / <a href="./members.php">members</a> 
                / add member 
            </div>
            <!-- content start -->
            <div class="content">
                <h2>Add Member</h2> 
                <!-- datalist start -->
                <div class="dataList">
                    <form>
                        <div class="data">
                            <input type="text" name="idNumber" id="idNumber" placeholder="ID Number">
                        </div>
                        <div class="data">
                            <input type="text" name="firstName" id="firstName" placeholder="First Name">
                        </div>
                        <div class="data">
                            <input type="text" name="firstName" id="firstName" placeholder="Last Name">
                        </div>
                        <div class="data">
                            <input type="radio" name="female" id="female">
                            <span>Female</span>
                            <input type="radio" name="male" id="male">
                            <span>Male</span>
                        </div>
                        <div class="data">
                            <p>Picture</p>
                            <div class="picture">
    
                            </div>
                            <input type="file" name="profileImg" id="profileImg">
                        </div>
                        
                        <!-- input (tombol cancel/add) start -->
                        <div class="cancel">
                                <button> cancel </button>
                        </div>
                        <div class="add">
                                <button> add </button>
                        </div>
                        <!-- input tombol end -->
                    </form>
                </div>
                <!-- datalist end -->
            </div>
            <!-- content end -->
        </div>
    </div>
</body>
</html>