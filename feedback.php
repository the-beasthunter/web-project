<!doctype html>
<html>
<head>
<title>feedback</title>
<style type="text/css">
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:helvetica;
}
body{
background-color:white;
}
.menu{
width:500px;
margin:50px auto;
border:3px solid #dc143c;
border-radius:10px;
background-color:#fffaf0;
border-left:40px solid #dc143c;
}
.apple{
width:100%;
padding:8px;
background-color:#dc143c;
font-size:20px;
font-weight:bold;
text-align;center;
color:#fff;
text-shadow:1px 1px 2px #000;
}
.form-box{
padding:25px;
}
label{
color:navy;
font-size:20px;
}
.inp,#msg-box{
width:100%;
padding:10px;
margin-bottom:5px;
border:2px solid #dc143c;
border-radius:5px;
font-weight:bold;
border-right:20px solid #dc143c;
border-left:20px solid #dc143c;
color:navy;
}
.inp:focus,#msg-box:focus{
outline:none;
border:2px solid navy;
border-right:20px solid navy;
border-left:20px solid navy;
}
.sub-btn{
width:100%;
padding:10px;
margin-top:5px;
border:none;
border-radius:5px;
color:#fff;
background:linear-gradient(#dc143c,#800000);
font-size:20px;
}
</style>
</head>
<body>

<br><br><br>
<div class="menu">
<div class="apple">Give Your Feedback</div>
<form action="#" method="post" name="form" class="form-box">
<label for="name">NAME</label><br>
<input type="text" name="name" class="inp" Placeholder="Enter your name" required><br>
<label for="E-mail">E-mail</label><br>
<input type="e-mail" name="E-mail" class="inp" Placeholder="Enter your e-mail" required><br>
<label for="phone">PHONE</label><br>
<input type="tel" name="E-mail" class="inp" Placeholder="Enter your phone" required><br>
<label for="message">MESSAGE</label><br>
<textarea name="msg" id="msg-box" placeholder="enter your message......."></textarea><br>
<input type="submit" name="submit" value="send" class="sub-btn">
</form>
</div>
</body>
</html>
