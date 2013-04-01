##文章模块的制作
---

文章模块所要完成的任务是文章的创建、编辑、删除、列表、分类列表、文章查询等功能


###模块功能与文件对应关系
---
    1. new.php              #文章录入页面
    2. create.php           #文章添加到数据库
    3. index.php            #所有文章列表
    4. edit.php             #文章编辑页面
    5. update.php           #文章更新页面
    6. show.php             #文章查看页面
    7. delete.php           #文章删除
    8. atag                 #文章分类并列表 在index.php中实现
    9. search               #文章搜索并列表 在index.php中实现

__说明:__ 

1. 文章列表和文章搜索、文章分类的外观是一致的
2. 文章创建、文章更新、文章删除只是一个动作，不显示什么内容，最多显示是否成功。

###各网页代码查看：
---

1. [文章录入 new.php](../code/articles/new.php)
2. [文章创建 create.php](../code/articles/create.php)
3. [文章列表 index.php](../code/articles/index.php)
4. [文章编辑 edit.php](../code/articles/edit.php)
5. [文章更新 update.php](../code/articles/update.php)
6. [文章查看 show.php](../code/articles/show.php)
7. [文章删除 delete.php](../code/articles/delete.php)
8. 文章类别 (../code/articles/index.php)
9. 文章搜索 (../code/articles/search.php)

对文章模块的基本操作就是以上这些，当然你还可以根据需要写出更多的功能，为了阅读方便，最好一个功能或者操作一个网页.


###作业

* 在网站根目录下建立articles目录，在这个目录下建立以上７个文件
* 编写代码，分别实现文章的添加、更新、删除、列表和搜索功能
