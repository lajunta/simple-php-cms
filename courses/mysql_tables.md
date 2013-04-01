##文章管理系统数据库及数据表的建立
---

###数据库的建立步骤
---

1. 连接数据库服务器

    mysql -h localhost -u root -p

2. 查看已经存在的数据库

    show databases;

3. 创建数据库 phpcms

    create database phpcms;

###文章数据表的建立步骤
---

1. 使用 phpcms 数据库

    use phpcms;

2. 创建文章 articles 数据表



      create table articles(id int not null auto_increment primary key,   #文章id ,用于区分每一篇文章
                            title varchar(100),                           #文章标题
                            body text,                                    #文章内容
                            author varchar(50),                           #文章作者
                            tag varchar(30),                              #文章类别 标签
                            created_at datetime,                          #文章创建时间
                            updated_at datetime,                          #文章更新时间
                          );

###用户数据表的建立步骤
---

1. 使用 phpcms 数据库

    use phpcms;

2. 创建用户 users 数据表

      create table users(id int not null auto_increment primary key,    #用户id
                         login varchar(40),                             #登录名
                         password varchar(50),    　　　　　　　　　　  #密码
                         realname varchar(40)                           #真实名
                        );

