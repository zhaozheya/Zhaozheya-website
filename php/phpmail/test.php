<html>

<style>
  #emailform
    {
     background-color:#dee1ff;
     font-size:16px;
     color:#004080;
     border-bottom:2px;
     border-top:0px;
     border-left:0px;
border-right:0px;
    }
</style>
<body>
<h3>Mail Send Test Zhaozheya</h3>
请你输入<font color="#FF6666">收信</font>的邮箱地址:
<form name="phpmailer" action="send.php" method="post">
<input type="hidden" name="submitted" value="1"/>
SendTo: <input type="text" id="emailform" size="50" name="address" />
<br/>
Subject:<input type="text" id="emailform" size="50" name="subject" />
<br/>
Content:<textArea type="text" id="emailform" cols="50" rows="10" name="content" ></textArea>
<br/>

<br/>
<input type="submit" value="send" />


</body>
</html>		