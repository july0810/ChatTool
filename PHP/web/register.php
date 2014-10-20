<?php
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $repeat_pwd = $_POST['repeat_pwd'];

    if(empty($nickname))
    {
        echo "Your NickName is empty!<br>\n";
        return;
    }

    if(empty($password))
    {
        echo "You passwor is empty!<br>\n";
        return;
    }

    if(empty($repeat_pwd))
    {   
        echo "Repeat password is empty!<br>\n";
        return;
    }

    if($password != $repeat_pwd)
    {   
        echo "Please repeate the same password!<br>\n";
        return;
    }


    $conn = mysql_connect("127.0.0.1", "root", "111")or die("".mysql_error());
    mysql_query("set names gbk");
    mysql_select_db("test", $conn)or die("".mysql_error());

    $uid = rand(1000000, 9999999);
    $sql = "select * from user where uid = '$uid'";
    $res = mysql_query($sql, $conn);
    $res_num = mysql_num_rows($res);

    while($res_num)
    {
        $uid = rand(1000000, 9999999);
        $sql = "select * from user where uid = '$uid'";
        $res = mysql_query($sql, $conn);
        $res_num = mysql_num_rows($res);
    }

    $sql = "insert into user values('$uid', '$password', '$nickname')";
    $res = mysql_query($sql, $conn);

    if($res)
    {
        echo "Register Success!<br>\n";
        echo "Your User Id: ". "$uid". "<br>\n";
    }

    mysql_close($conn);
?>
