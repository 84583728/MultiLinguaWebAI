<?php
/***
name:小千哥
wechat:5833487
email:9723331@gmail.com
****/
header("Content-Type: text/html; charset=UTF-8");
class h5_error {
    public function index() {
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background-color:#fff;color:#333;display:flex;justify-content:center;align-items:center;height:100vh;padding:20px}.container{max-width:500px;text-align:center;padding:40px 20px}.error-code{font-size:96px;font-weight:700;color:#000;line-height:1;margin-bottom:16px}.error-title{font-size:24px;font-weight:500;margin-bottom:16px;color:#333}.error-message{font-size:16px;color:#666;margin-bottom:24px;line-height:1.5}.contact-info{margin-bottom:24px;padding:12px;border-top:1px solid #eee;border-bottom:1px solid #eee}.contact-email{color:#06c;text-decoration:none}.contact-email:hover{text-decoration:underline}.home-button{display:inline-block;background-color:#000;color:white;text-decoration:none;padding:12px 24px;border-radius:4px;font-weight:500}.home-button:hover{background-color:#333}@media(max-width:480px){.error-code{font-size:72px}.error-title{font-size:20px}}</style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <h1 class="error-title">Page Not Found</h1>
        <div class="error-message">
            The page you are looking for does not exist or has been removed.
            <br>Please check the URL or return to the homepage.
        </div>
        <div class="contact-info">
            Need help? Contact:
            <a href="mailto:9723331@gmail.com" class="contact-email">9723331@gmail.com</a>
        </div>
        <a href="/" class="home-button">Return to Homepage</a>
    </div>
</body>
</html>';
    }
}