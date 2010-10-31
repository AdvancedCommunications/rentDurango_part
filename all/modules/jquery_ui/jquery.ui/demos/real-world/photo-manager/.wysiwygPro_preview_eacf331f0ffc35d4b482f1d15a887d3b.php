<?php
if ($_GET['randomId'] != "7isYVMJczf_GgBByQLiX8OKblwzorV4ki0ERYqqskWEAMVVbRQDnG7ITNfnVeGm_") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
