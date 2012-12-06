$(document).ready(function(){ 
  //alert(getSysInfo().system.ipad);
  var device =getSysInfo().system
  if(device.win || device.ipad||device.mac||device.x11){
  	$("#mainstyle").attr("href","css/maker.css");
       // $(".container").height("100em");
        //alert($(window).height());
		if($(window).height()>480){
		$(".container").height($(window).height());
                }
                 if($(window).height()<480){
		$(".container").height("480");
                }
  
  	}
  if(device.android || device.macmobile||device.nokiaN||device.winmobile){
  	$("#mainstyle").attr("href","css/makermobile.css");
  	}
    });
//css switch function
function change_skin(obj){
    if(obj.length<1){
        return;
    }else{
        document.getElementById("mainstyle").href="css/style_"+obj+".css";
    }
}

	//Switch Show and Hide
		function SwitchShow(Str,ID,IfValue,ValueA,ValueB){
			if(IfValue==true){
		    if(Str.value.indexOf(ValueA) >= 0){
		
		        Str.value = ValueB;
		
		    }else{
		
		        Str.value = ValueA;
		
		    }
			}
		
		
		    var MsgStyle = document.getElementById(ID).style;
		
		    if(MsgStyle.display == "block"){
		
		        MsgStyle.display = "none";
		
		    }else {
		
		        MsgStyle.display = "block";
		
		    }
		
		}
		function SwitchHide(Str,ID,IfValue,ValueA,ValueB){
			if(IfValue==true){
		    if(Str.value.indexOf(ValueB) >= 0){
		
		        Str.value = ValueA;
		
		    }else{
		
		        Str.value = ValueB;
		
		    }
			}
		
		
		    var MsgStyle = document.getElementById(ID).style;
		
		    if(MsgStyle.display == "none"){
		
		        MsgStyle.display = "block";
		
		    }else {
		
		        MsgStyle.display = "none";
		
		    }
		
		}
		
  function SwitchSectionShow(ID){
				var  MsgStylea = document.getElementById("moreme").style;
				
		
		        MsgStylea.display = "none";
		   	var  MsgStyleb = document.getElementById("resume").style;
		        
		         MsgStyleb.display = "none";

		
		    var  MsgStyle = document.getElementById(ID).style;
		    
		     MsgStyle.display = "block";
				
		
		}
		


//anchor slide
$(document).ready(function(){
	$(".clickanchor").click(function(){
        var href = $(this).attr("href");
        var pos = $(href).offset().top;
        $("html,body").animate({scrollTop: pos}, 600);
        return false;
    });
});
  //slidedown
	$(document).ready(function(){
    $(".slidebutton0").click(function () {
		$("#resume").hide();
		$("#moreme").hide();
		//$("#contacts").slideDown();

		});
  });

//slidedown1
	$(document).ready(function(){
    $(".slidebutton1").click(function () {
		$("#resume").hide();
		if ($("#moreme:first").is(":hidden")) {
		$("#moreme").animate({width: 'toggle'}, 500);
		} else {
		$("#moreme").animate({width: 'toggle'}, 500);
		}
		});
  });

  
//slidedown2
	$(document).ready(function(){
	$(".slidebutton2").click(function () {
		
		if ($("#resume:first").is(":hidden")) {
		$("#resume").animate({width: 'toggle'}, 500);
		} else {
		$("#resume").animate({width: 'toggle'}, 500);
		}
		$("#moreme").hide();
		});
	});

  
  
  	function ContentShow(ID){
		
				var i=1;
				for(i=1;i<5;i++){
					var ContentStyle =document.getElementById("resumecontent"+i).style;
					
					ContentStyle.display = "none";
					
					}
				var Tobj =document.getElementById("resumecontent"+ID).style;
				
				Tobj.display = "block";
		}
