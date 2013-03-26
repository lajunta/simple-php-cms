##Mysql 基础知识

mysql是一个数据库管理系统，用于保存和管理各种各样的数据，对数据库的管理主要包括数据库的操作，用户授权管理，数据备份和修复等，在这里我们基本上学习数据库的数据类型，数据库的操作，用户的授权及删除用户。



###数据类型

  * varchar 字符类型   # 存储不大于255个字符
  * text    文本类型   # 存储最多65535字符
  * mediumtext         # 16777215
  * longtext           # 4294967295
  * int     整数       # 保存数字
  * datetime   '0000-00-00 00:00:00'
  * date       '0000-00-00'
  * year       '0000'

###数据库操作

对数据库的操作过程分为以下几个动作：

  * 连接数据库
  * 数据库操作
  * 数据表操作
  * 录入数据
  * 查询数据
  * 更新数据
  * 删除数据


###连接数据库

__注意__ : 在连接数据库前请确保数据库服务程序已经正常启动，并且防火墙能通过访问

连接数据库命令：
　
   `mysql  <数据库>  <-h 主机ip>  <-u 用户名>  <-p>`

__例子__

  *  mysql 
  *  mysql -u root 
  *  mysql -h 172.16.1.2 -u root 
  *  mysql -uroot -p;
  *  mysql -uroot -pnewpassword;
  *  mysql mydb -uroot -p;
  *  mysql mydb -uroot -pnewpassword;

###数据库操作

__创建命令:__

    create database 数据库名;

__常用操作:__

  * show databases;          #查看有多少个数据库
  * create database abc;     #创建数据库abc
  * drop  database abc;      #删除数据库abc
  * use abc;                 #使用数据库abc
  
###数据表操作

__注意:__ 在数据表操作前，请确保先创建数据库并使用它

__创建数据表命令:__

    create table 表名(字段1 类型,字段2 类型,.....);

__注意: 在创建数据表前，先想好字段的名称和相应的类型__

例如创建一个用户表users,有三个字段, 登录名 login,  密码 password , 真实姓名 realname 

    create table users(login varchar(20),password varchar(20),realname(50));

数据表的其它操作：

    desc 表名;          #查看表的类型和结构　
    drop 表名;　　　　　#删除表


###在数据表中创建记录

__命令格式：__

    INSERT INTO 表名(字段名1, 字段名2,...字段名N) VALUES(值1, 值2,...值N );

__例子：__

    insert into students(name,age,birthday) values("zxy",20,"1992-03-03")


###查询记录

__命令格式：__

    select 字段,... from 表名 where 条件;

__例子：__

    select * from students where name='zxy'；
    select * from students where age>20;

####where条件语句

WHERE 子句

如需选取匹配指定条件的数据，请向 SELECT 语句添加 WHERE 子句。

__语法__

    SELECT column FROM table WHERE column operator value

下面的运算符可与 WHERE 子句一起使用：

运算符说明:

    =   等于
    !=  等于不等于
    >   等于不等于大于
    <   等于不等于大于小于
    >=  等于不等于大于小于大于或等于
    <=  等于不等于大于小于大于或等于小于或等于
    BETWEEN  介于一个包含范围内
    LIKE     搜索匹配的模式


注释：SQL 语句对大小写不敏感。WHERE 与 where 等效。

为了让 PHP 执行上面的语句，我们必须使用 mysql_query() 函数。该函数用于向 SQL 连接发送查询和命令。


####order by 排序

#####升序或降序的排序

如果您使用 ORDER BY 关键词，记录集的排序顺序默认是升序（1 在 9 之前，"a" 在 "p" 之前）。

请使用 DESC 关键词来设定降序排序（9 在 1 之前，"p" 在 "a" 之前）：

    SELECT column_name(s)
    FROM table_name
    ORDER BY column_name DESC

ASC 为升序

#####根据两列进行排序

可以根据多个列进行排序。当按照多个列进行排序时，只有第一列相同时才使用第二列：

    SELECT column_name(s)
    FROM table_name
    ORDER BY column_name1, column_name2

###更新记录

__命令格式：__

    UPDATE 表名 SET 字段1=新值1, 字段2=新值2  [条件语句]

__例子：__

    update students set name="aa"
    #更新所有的学生名字为 aa 

    update students set age=20,birthday='2000-02-02' where name="zxy";
    #更新zxy的年龄和出生年月 


###删除记录

__命令格式：__

    delete from 表名 [条件语句]

__例子：__

    删除全部
    delete from students；

    删除特定记录
    delete from students where age=20 ；

###用户授权

__命令格式:__

    grant 权限1,权限2,…权限n   数据库名称.表名称  to  用户名@用户地址  identified by ‘连接口令’;

__例子：__

    grant all privileges on vtdc.* to joe@% identified by ‘123′; 
    
    #任何主机 ％ 上的joe 对vtdc 数据库上的任何表都可以操作

    grant select,insert,update,delete,create,drop on vtdc.employee to joe@10.163.225.87 identified by ‘123′ with grant option;

    给来自10.163.225.87的用户joe分配可对数据库vtdc的employee表进行select,insert,update,delete,create,drop等操作的权限，并设定口令为123。  

    mysql>grant all privileges on vtdc.* to joe@10.163.225.87 identified by ‘123′; 

    FLUSH   PRIVILEGES;    

    注意授权后必须FLUSH PRIVILEGES;否则无法立即生效。

###撤权并删除用户

要取消一个用户的权限，使用REVOKE语句。REVOKE的语法非常类似于GRANT语句，除了TO用FROM取代并且没有INDETIFED BY和WITH GRANT OPTION子句：

    REVOKE privileges (columns) ON what FROM user
    　　
    Revoke All PRIVILEGES ON ultrax.* FROM tkxxd@192.168.1.12;

REVOKE语句只删除权限，而不删除用户。要完全删除一个用户，你必须用一条DELETE语句明确从user表中删除用户记录：
    　　

    mysql>DELETE FROM user  WHERE User="user_name" and Host="host_name";
    mysql>FLUSH PRIVILEGES;
    　
DELETE语句删除用户记录，而FLUSH语句告诉服务器重载授权表。（当你使用GRANT和REVOKE语句时，表自动重载，而你直接修改授权表时不是
