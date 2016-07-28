function getUrlHostName(){	
var protocol=window.location.protocol;
var hostname=window.location.host;
return protocol+"//"+hostname;		
}

function setCookie(cname, cvalue,exdays) {
     var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function checkNetConnection(){
 var xhr = new XMLHttpRequest();
 var file = "http://demos.subinsb.com/cdn/dot.png";
 var r = Math.round(Math.random() * 10000);
 xhr.open('HEAD', file + "?subins=" + r, false);
 try {
  xhr.send();
  if (xhr.status >= 200 && xhr.status < 304) {
   return true;
  } else {
   return false;
  }
 } catch (e) {
  return false;
 }
}


