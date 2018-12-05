<?php
/**
 * Created by PhpStorm.
 * User: Asto-Nhi
 * Date: 12/5/2018
 * Time: 2:11 PM
 */
if (isset($_SESSION['Line_ID'])) {
    echo "SESSION ". $_SESSION['Line_ID'];
}
else {
    header('https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=1623658758&redirect_uri=https://nguyennhi263.herokuapp.com/perfect.php&state=12345abcde&scope=profile');
}