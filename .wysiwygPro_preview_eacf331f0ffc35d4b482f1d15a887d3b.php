<?php
if ($_GET['randomId'] != "fSfLZtyOvAJOkad1L04L5xdXSxlv0O1qWGDJAaR9fh4yMh29iLzPybazyAJbwPry") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
