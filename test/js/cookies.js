function setCookie(cname, cvalue) {
  return setCookie(cname, cvalue, null)
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    exdays != null ? d.setTime(d.getTime() + (exdays*24*60*60*1000)) : d.setTime(d.getTime() + (10000*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
