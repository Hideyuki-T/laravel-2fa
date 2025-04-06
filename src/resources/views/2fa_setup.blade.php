<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>2FA認証</title>
</head>
<body>
<h1>2FA認証</h1>
<p>下のQRコードをGoogle Authenticatorで読み取ってください。</p>
<!-- QRコードURLを元にQRコード画像を表示 -->
<img src="https://api.qrserver.com/v1/create-qr-code/?data={{ urlencode($qrCodeUrl) }}&amp;size=200x200" alt="QR Code">

<hr>

<p>認証後、アプリで生成されたワンタイムパスワードを入力してください：</p>
<form action="/2fa" method="POST">
    @csrf
    <input type="text" name="one_time_password" placeholder="OTP">
    <button type="submit">認証する</button>
</form>
</body>
</html>
