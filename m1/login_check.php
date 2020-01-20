<?php
require_once '../preset.php';
?>
<?php

$q = "SELECT * FROM kt_member WHERE id='$user_id'";
$result = $mysqli->query( $q);

if($result->num_rows==1) {
    //해당 ID 의 회원이 존재할 경우
    // 암호가 맞는지를 확인

    $encryped_pass = sha1($user_pass);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if( $row['pw'] == $encryped_pass ) {
        $_SESSION['is_logged'] = 'YES';
        $_SESSION['user_id'] = $user_id;
        $_SESSION['member_idx'] = $row['member_idx'];
        
        header('Location: '.$url['root'].'member/login_done.php');
        exit();
    }
    else {
        $_SESSION['is_logged'] = 'NO';
        $_SESSION['user_id'] = '';
        echo "회원가입이 되어 있지 않습니다.";
        header('Location: '.$url['root'].'member/login_done.php');
        exit();
    }

}
else {
    echo "회원가입이 되어 있지 않습니다.";
    header('Location: '.$url['root'].'member/login_done.php');
    exit();
}

$result->free();

$mysqli->close();

?>
