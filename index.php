<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>DbManager</title>
<style type="text/css">
*{
    margin: 0;
    padding: 0;
}

body{
    font-size: 12px;
    font-family: '微软雅黑';
    color: #666;
}
.dbDebug{
}

.dbDebug .err{
    color: #f00;
    margin: 0 5px 0 0;

}
.dbDebug .ok{
    color: #06f;
    margin: 0 5px 0 0;

}
.dbDebug b{
    color: #06f;
    font-weight: normal;
}

.dbDebug .imp{
    color: #f06;
}
</style>
</head>
<body>
    <?php
    /**
     * Created by yanue.
     * User: yansueh
     * Date: 12-10-27
     * Time: 上午11:24
     * To change this template use File | Settings | File Templates.
     */

require 'DbManage.class.php';

//------1. 数据库备份（导出）------------------------------------------------------------
//分别是主机，用户名，密码，数据库名，数据库编码
$db = new DBManage ( 'localhost', 'root', '', 'eda', 'utf8' );
// 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2048，即2M)
//$db->backup ('','','');
$db->restore ( './backup/20121027194215_all_v1.sql');


?>

</body>
</html>