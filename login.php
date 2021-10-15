<?php
    /* Your password */
    $password = 'a0106918309a';
    /* Redirects here after login */
    $redirect_after_login = 'index.php';

    /* Will not ask password again for */
    $remember_password = strtotime('+30 days'); // 30 days

    if (isset($_POST['password']) && $_POST['password'] == $password) {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>تسجيل الدخول للوحة التحكم</title>
      <meta content='width=device-width, initial-scale=1' name='viewport'/>

</head>
<body>
    <div style="text-align:center;margin-top:50px;">
        <form method="POST">
            <input type="text" name="password" placeholder="كلمة السر" style="width: 318px;background: #f5f8fa;border: 1px solid #e6e6e6;box-shadow: 0px 1px 1px #e6e6e6;margin:5px auto;display: block;padding: 15px;">
            <input type="submit" id="submit" value="دخول" style="background: #000;color: #fff;font-size: 20px;padding: 10px;border: 0;border-radius: 3px;box-shadow: 0px 1px 3px #a4a4a4;margin:10px auto;width: 350px;"/>
        </form>
    </div>
</body>
</html>