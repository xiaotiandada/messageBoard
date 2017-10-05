<?php
include 'messageTab.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>留言板</title>

    <!-- Bootstrap -->
    <link href="./bootstrap.min.css" rel="stylesheet">
    
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    留言板
                </h1>
                <form role="form" action="message.php" method="post">
                    <div class="form-group">
                         
                        <label for="exampleInputEmail1">
                            标题
                        </label>
                        <input type="text" name="title" class="form-control" placeholder="请输入标题" required>
                    </div>

                    <div class="form-group">
                            
                           <label for="exampleInputEmail1">
                               内容
                           </label>
                           <textarea name="content" class="form-control" rows="3" placeholder="请输入内容"></textarea>
                       </div>
                    <input type="submit" name="submit" value="提交" class="btn btn-default">
                </form>
                <h3>
                   留言内容
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                标题
                            </th>
                            <th>
                                内容
                            </th>
                            <th>
                                时间
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
 while( $row = mysqli_fetch_assoc($rs) ){
$oTime = date('Y-m-d H:i:s',$row['pubtime']);
$tabStr = <<<TAB
<tr><td>{$row['id']}</td>
<td>{$row['title']}</td>
<td>{$row['content']}</td>
<td>{$oTime}</td></tr>
TAB;
echo $tabStr;
}
 ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap.min.js"></script>
  </body>
</html>