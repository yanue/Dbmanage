Dbmanage
========
* @author yanue
* @copyright Copyright (c) 2012 yanue.net
* @link http://yanue.net/archives/174.html
* @version 1.1
* 创建时间： 2012年5月21日

更新时间： 2012年10月6日
更新说明： 1.去除sql导入的时候排除sql文件里面的注释'-- ' 从而解决sql中单双引号不能导入
2.单行读取后的sql直接执行，避免重新将sql语句组合到数组中再从数组中读取导入sql，提高效率

* 说明：分卷文件是以_v1.sql为结尾(20120522021241_all_v1.sql)
* 功能：实现mysql数据库分卷备份,选择表进行备份,实现单个sql文件及分卷sql导入
### 使用方法：

- 1. 数据库备份（导出）
    //分别是主机，用户名，密码，数据库名，数据库编码
    $db = new DBManage ( 'localhost', 'root', 'root', 'test', 'utf8' );
    // 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2000，即2M)
    $db->backup ();
- 2. 数据库恢复（导入）
    //分别是主机，用户名，密码，数据库名，数据库编码
    $db = new DBManage ( 'localhost', 'root', 'root', 'test', 'utf8' );
    //参数：sql文件
    $db->restore ( './backup/20120516211738_all_v1.sql');
