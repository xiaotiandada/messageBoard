<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 20:52
 */
date_default_timezone_set("PRC");

$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
//echo '连接成功';

// 发送数据
mysqli_query($conn,'use test');
mysqli_query($conn,'set names utf8');

$sql = 'select * from liuyanbiao';
$rs = mysqli_query($conn,$sql);
//while( $row = mysqli_fetch_assoc($rs) ){
////     print_r($row);
//     var_dump($row);
//$tabStr = <<<TAB
//<td>{$row['id']}</td>
//<td>{$row['title']}</td>
//<td>{$row['content']}</td>
//<td>{$row['pubtime']}</td>
//TAB;
////echo $tabStr;
//
//}

mysqli_close($conn);