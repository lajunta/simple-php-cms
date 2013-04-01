<!DOCTYPE html>
<html>
<head>
<title>登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <h2>用户登录</h2>
  <form name="login_form" action='auth.php' method='post'>
    <p>
      <label>登录名：</label>
    </p>
    <p>
      <input type='text' name='login' />
    </p>
    <p>
      <label>密码：</label>
    </p>
    <p>
      <input type='password' name='password' />
    </p>
    <p><input type='submit' name='submit' value='登录'></p>
  </form>
</body>
</html>
