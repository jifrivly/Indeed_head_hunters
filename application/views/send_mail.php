<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>
<body>
    <form action="<?php base_url() ?>Email/send" method="post">
        Email ID : <input type="email" name="to" id="to"> <br />
        Subject  : <input type="text" name="sub" id="sub"> <br />
        Message  : <input type="text" name="msg" id="msg"> <br />
        <input type="submit" value="send" name="send">
    </form>
</body>
</html>