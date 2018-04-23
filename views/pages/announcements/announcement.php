<?php
    include_once "../../head.php";
?>
    <title>Announcements</title>
    <link rel="stylesheet" href="../../../css/announcement.css">
<?php
    include_once "../../header.php"
?>
    <div class="main">
        <div class="container">
            <div class="breadcrumb">
              <a href="../home.php">home</a>
              / make announcement
            </div>
          <!-- content start -->
          <div class="content">
              <h2>Make an announcement</h2>
            <form action="" method="post">
                <input type="text" placeholder="Title">
            </form>
                <textarea name="announcement-content" id="A-Content" cols="30" rows="10" placeholder="content" resize: none;></textarea>    
          </div>
          <!-- content end -->
            <!-- input (tombol cancel/add) start -->
            <div class="kansel">
                    <input type="cancel" name="batal" value="cancel">
            </div>
            <div class="add">
                    <input type="add" name="tambah" value="add">
            </div>
            <!-- input tombol end -->   
        </div>
    </div>

</body>
</html>