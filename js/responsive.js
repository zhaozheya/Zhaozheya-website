

function getSysInfo(){
//��������
var engine = {
	ie     : 0,
	gecko  : 0,
	webkit : 0,
	khtml  : 0,
	opera  : 0,
	//�����İ汾��
	ver    : null
};
 
//�����
var browser = {
//��Ҫ�����
	ie	    : 0,
	firefox : 0,
	konq    : 0,
	opera   : 0,
	chrome  : 0,
	safari  : 0,
 
	//����İ汾��
	ver     : null
};
 
//ƽ̨���豸�Ͳ���ϵͳ
var system ={
	win : false,
	mac : false,
	xll : false,
 
	//�ƶ��豸
	iphone    : false,
	ipod      : false,
	nokiaN    : false,
	winMobile : false,
	macMobile : false,
 
	//��Ϸ�豸
	wii : false,
	ps  : false
};
//����������������
var	ua = navigator.userAgent;
if (window.opera){
	engine.ver = browser.ver = window.opera.version();
	engine.opera = browser.opera = parseFloat(engine.ver);
} else if (/AppleWebKit\/(\S+)/.test(ua)){
	engine.ver = RegExp["$1"];
	engine.webkit = parseFloat(engine.ver);
 
	//ȷ����Chrome����Safari
	if (/Chrome\/(\S+)/.test(ua)){
		browser.ver = RegExp["$1"];
		browser.chrome = parseFloat(browser.ver);
	} else if (/Version\/(\S+)/.test(ua)){
		browser.ver = RegExp["$1"];
		browser.safari = parseFloat(browser.ver);
	} else {
	//���Ƶ�ȷ���汾��
		var safariVersion = 1;
		if(engine.webkit < 100){
			safariVersion = 1;
		} else if (engine.webkit < 312){
			safariVersion = 1.2;
		} else if (engine.webkit < 412){
			safariVersion = 1.3;
		} else {
			safariVersion = 2;
		}
		browser.safari = browser.ver = safariVersion;	
	}
} else if (/KHTML\/(\S+)/.test(ua) || /Konquersor\/([^;]+)/.test(ua)){
	engine.ver = browser.ver = RegExp["$1"];
	engine.khtml = browser.kong = paresFloat(engine.ver);	
} else if (/rv:([^\)]+)\) Gecko\/\d{8}/.test(ua)){
	engine.ver = RegExp["$1"]
	engine.gecko = parseFloat(engine.ver);
	//ȷ���ǲ���Firefox
	if (/Firefox\/(\S+)/.test(ua)){
		browser.ver = RegExp["$1"];
		browser.firefox = parseFloat(browser.ver);
	}
} else if(/MSIE([^;]+)/.test(ua)){
		browser.ver = RegExp["$1"];
		browser.firefox = parseFloat(browser.ver);
}
//��������
browser.ie = engine.ie;
browser.opera = engine.opera;
//���ƽ̨
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
//���Windows����ϵͳ
if (system.win){
	if (/Win(?:doms)?([^do]{2})\s?(\d+\.\d+)?/.test(ua)){
		if (RegExp["$1"] == "NT"){
			switch(RegExp["$2"]){
				case "5.0":
					system.win = "2000";
					break;
				case "5.1":
					system.win = "XP";
					break;
				case "6.0":
					system.win = "Vista";
					break;
				default   :
					system.win = "NT";
					break;				
			}
		} else if (RegExp["$1"]){
			system.win = "ME";
		} else {
			system.win = RegExp["$1"];
		}
	}
}
//ƽ���豸
system.ipad    =ua.indexOf("iPad") > -1;
//�ƶ��豸
system.iphone	 = ua.indexOf("iPhone") > -1;
system.ipod    = ua.indexOf("iPod") > -1;
system.android = ua.indexOf("Android") > -1;
system.ipad = ua.indexOf("iPad") > -1;
system.nokiaN	 = ua.indexOf("NokiaN") > -1;
system.winMobile = (system.win == "CE");
system.macMobile = (system.iphone || system.ipod);
//��Ϸϵͳ
system.wii = ua.indexOf("Wii") > -1;
system.ps  = /playstation/i.test(ua);
//������Щ����
return {
	engine:  engine,
	browser:  browser,
	system:  system
};
}