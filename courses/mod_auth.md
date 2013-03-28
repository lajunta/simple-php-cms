##用户认证模块
---

用户认证是指系统检查用户是否存在， 用户在各个模块中的角色是什么的过程。


###认证的三个操作
---

1. 输入用户名和密码
2. 系统进行验证，如果信息正确，则使用session给这个用户存在一些信息以供各个页面使用
3. 用户登出系统，则系统中保存这个用户信息的 session 全部销毁

###认证所对应的三个页及作用
---

    1. [login.php](../code/auth/login.php)   登录页面
    2. auth.php(../code/auth/auth.php)    验证及生成session
    3. logout.php(../code/auth/logout.php)  销毁session

认证的详细代码及过程请看以上三个文件的内容
