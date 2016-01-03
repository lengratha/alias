// JavaScript Document

$(document).ready(function(){
	
	$('.cur-nav').click(function(){
		$('.cur-drop-list').fadeToggle();
	});
	
	$('.cur-drop-list li').click(function(){
		$('.cur-drop-list').fadeOut();
	});
	
	$('.cate-nav').click(function(){
		$('.categories-list').fadeToggle();
	});
	
	$('.categories-list li').click(function(){
		$('.categories-list').fadeOut();
	});
	
	/*$('.menu-nav li').click(function(){
		$('.menu-child').slideDown();
	});*/
	
	$('body').hover(function(){
		var offset = $(".menu-nav").offset();
		$('.menu-child').css({ left: offset.left });
	});
	
	
});

function header(url)
{
	window.location.href=url;
}

function menuClick(selector,textVal)
{
	document.getElementById(selector).innerHTML=textVal;
}

function silentExec(filepath,idx, val)
{
	var datastring="id="+ idx+"&val="+val;
	//if(confirm("Sure you want to delete this data ? There is NO Undo!" ))
	//{
	$.ajax({
		type: "POST",
		url: filepath,
		data: datastring,
		cache: false,
		success: function(html){}
	});
	//}
}

function addChat(code,name,price)
{
	var s=document.getElementById('txtQty').value;
	if(s.length<1||s=='0')
	{
		alert('Invalid amount!');
		return 0;
	}
	this.silentExec('../ajax_exe/xxx_add_2_cart.php',0,code+"|"+name+"|"+price+"|"+s);
	document.getElementById('txtQty').value="";
	this.silentRepalce('0','../ajax_exe/countitem.php','showcart');
}

function silentRepalce(str,path,demo)
{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById(demo).innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(demo).innerHTML=xmlhttp.responseText;
		}
	  }  
	///document.getElementById(demo).scrollTop=10000;
	xmlhttp.open("GET",path+"?jid="+str,true);
	xmlhttp.send();
	//-------------
}