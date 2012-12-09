var xmlHttp

 
function sendmail()
{
var address=document.getElementById("address").value
//alert(address)
var subject=document.getElementById("subject").value
var content=document.getElementById("content").value
var pname=document.getElementById("name").value
var alertdiv=document.getElementById("alertdiv")

if (address.length==0)
  { 
  document.getElementById("txtHint").innerHTML="no email"
  return
  }

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
  {
   $("#alertdiv").show(500);
  document.getElementById("txtHint").innerHTML="Browser does not support HTTP Request"
  return
  } 
var chk=checkEmail(address)
//alert(chk)
if (chk==false)
  {

	  $("#alertdiv").show(500);
	  document.getElementById("txtHint").innerHTML="Please Verify Your Mail Address"
	  return
  
  }
//var url="http://zhaozheya.is-great.net/sendmail.php"
var url="../sendmail.php"
url=url+"?address="+address+"&name="+pname+"&subject="+subject+"&content="+content
//alert(url)
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)



} 

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("txtHint").innerHTML=xmlHttp.responseText 
   $("#alertdiv").show(500)
   if(document.getElementById("txtHint").innerHTML=="Message has been sent."){
          document.getElementById("alertdiv").style.background="#7EC0EE"
	 document.getElementById("alertdiv").style.color="white"
   	//document.getElementById("address").value=""
   	//document.getElementById("subject").value=""
   	//document.getElementById("content").value=""
        //document.getElementById("name").value=""
   	}
 } 
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}

function checkEmail(str){
  var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
if(reg.test(str)){
 return true
}else{
 return false
}
}

function closeDiv(str){
	$("#"+str).hide(500);
	
	}
