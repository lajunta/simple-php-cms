##用户模块的制作
---

用户模块所要完成的任务是用户的创建、编辑、删除、列表、用户查询等功能


###模块功能与文件对应关系
---
    1. new.php              #用户录入页面
    2. create.php           #用户添加到数据库
    3. index.php            #所有用户列表
    4. edit.php             #用户编辑页面
    5. update.php           #用户更新页面
    6. show.php             #用户查看页面
    7. delete.php           #用户删除
    8. search               #用户搜索　和index.php一起实现

__说明:__ 

1. 用户列表和用户搜索的显示是一致的
2. 用户创建、用户更新、用户删除只是一个动作，不显示什么内容，最多显示是否成功。

###各网页代码查看：
---

1. [用户录入 new.php](../code/users/new.php)
2. [用户创建 create.php](../code/users/create.php)
3. [用户列表 index.php](../code/users/index.php)
4. [用户编辑 edit.php](../code/users/edit.php)
5. [用户更新 update.php](../code/users/update.php)
6. [用户查看 show.php](../code/users/show.php)
7. [用户删除 delete.php](../code/users/delete.php)
8. 用户搜索 code/users/index.php

对用户模块的基本操作就是以上这些，当然你还可以根据需要写出更多的功能，为了阅读方便，最好一个功能或者操作一个网页.

###作业

* 在网站根目录下建立users目录，在这个目录下建立以上７个文件
* 编写代码，分别实现用户的添加、更新、删除、列表和搜索功能
