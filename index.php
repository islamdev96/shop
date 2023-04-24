<?php
include "connection.php";
?>
<html>
<head>


</head>

<body>

<form name="form1" action="" method="post" enctype="multipart/form-data">
    <h6>Add Name</h6>
    <input type="text" placeholder="name" name="name" autocomplete="off" >
    <h6>Add Link</h6>
    <input type="text" placeholder="link" name="link" autocomplete="off" >
    <br>
    <h6>Add Photo</h6>
    <input type="file" name="f1" required="" />

    <input type="submit" name="sumbit1" value="Add"    >
    <!--Database -->
    <?php
    if (isset($_POST["sumbit1"]))
    {
        $tm=md5(time());
            $fnm=$_FILES["f1"]["name"];
            $dst="./youtube_image/".$tm.$fnm;
            $dst1="youtube_image/".$tm.$fnm;
            move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

            $sql = mysqli_query($link, "INSERT INTO `things` (`youtube_image`, `name`, `link`) VALUES ('$dst1','$_POST[name]','$_POST[link]')");
            if($sql){
                ?>
    <script type="text/javascript">
        alert ("things inserted");
        window.location="index.php"
        </script>
    <?php
            }else{
                ?>
                    <script type="text/javascript">
                        alert ("something went wrong");
                        window.location="index.php"
                    </script>
    <?php
            }
    }

    ?>

</form>

</body>

</html>
