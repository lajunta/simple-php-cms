##在php中操作mysql

在php中可能通过相关的函数来连接mysql数据库，进行相关的操作，完成mysql客户端程序一样的功能。

一般来说在php中操作数据库需要完成以下几步：

1. 连接数据库服务器。
2. 选择数据库。
3. 执行数据查询操作(crud)。
4. 对取回来的数据进行处理(r)。
5. 关闭数据库连接。

### 1.连接数据库和关闭数据库连接

__语法__

    mysql_connect(servername,username,password);
    mysql_close($conn);

  * servername 可选, 指定要连接的mysql服务器地址。默认是'localhost:3306'
  * username 可选, 规定登录所使用的用户名。默认值是拥有服务器进程的用户的名称。
  * password 可选, 规定登录所用的密码。默认是 ""。 


__例子__

    <?php
      $con = mysql_connect("localhost","peter","abc123");
      mysql_close($con);
    ?>

### 2.选择数据库

在进行表操作前,要先选择数据库：

__语法__

    mysql_select_db(数据库名,连接符)；

__例子__

    mysql_select_db("my_db", $con);

### 3.执行数据库的查询操作(crud)：

对mysql数据库的操作统一由mysql_query函数来完成，它的格式如下：

__语法__ : 

    mysql_query(sql语句,连接符)；

__例子__

    //创建一个数据库
    <?php
      $con = mysql_connect("localhost","peter","abc123");
      $result = mysql_query("CREATE DATABASE my_db",$con));

      if($result)
        {
          echo "数据库已经创建";
        }
      else
        {
          echo "不能创建数据库";
        }
      mysql_close($con);
    ?>

### 4. 从数据集合中取出记录进行操作

使用 `mysql_fetch_array` 函数从数据集中每次取出一条记录

__注意__ 这个函数不能从insert、update 、delete 操作中取得数据，只能从select 操作中取得数据。

__函数：__

    mysql_fetch_array(数据集合)

__例子__

    <?php
      $con = mysql_connect("localhost","peter","abc123");

      mysql_select_db("my_db", $con);

      $result = mysql_query("SELECT * FROM Persons");

      while($row = mysql_fetch_array($result))
        {
          echo $row['FirstName'] . " " . $row['LastName'];
          echo "<br />";
        }

      mysql_close($con);
    ?>

### 5.一个完整的例子

从数据表students 中取得数据，并放入表格中

    <?php

      $con = mysql_connect("localhost","root","123456");

      mysql_select_db("zxy", $con);

      $result = mysql_query("SELECT * FROM students");

      echo "<table>";
      while($row = mysql_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>".$row['name']."</td><td>".$row['age']."</td>";
          echo "</tr>"
        }
      echo "</table>"
      mysql_close($con);

    ?>
