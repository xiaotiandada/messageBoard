<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 20:52
 */

date_default_timezone_set("PRC");
$pTitle =$_POST['title'];
$pContent = $_POST['content'];
$pSub = $_POST['submit'];
//$pSEr = $_SERVER['REQUEST_METHOD']=='POST';
if(isset($pSub)){
    $dbhost = 'localhost';  // mysql服务器主机地址
    $dbuser = 'root';            // mysql用户名
    $dbpass = '';          // mysql用户名密码
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));
    }
    echo '连接成功';

// 发送数据
    mysqli_query($conn,'use test');
    mysqli_query($conn,'set names utf8');


// 接受POST数据
    $sql = "insert into liuyanbiao (title,content,pubtime) values ('".$pTitle."','".$pContent."',".time().")";

    if(mysqli_query($conn,$sql)){
        echo '留言成功';
    }else{
        echo '留言失败';
    }
    mysqli_close($conn);
    $page = "index.php";
    echo "<script>window.location=\"".$page."\";</script>";
}else{
    echo '没有提交';
}

