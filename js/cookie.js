function setCookie(key, value, days, path) {
    path = path || "/";
    var date = new Date();
    if (days) {
        date.setDate(date.getDate() + days);
        document.cookie = key + "=" + encodeURIComponent(value) + ";expires=" + date + ";path=" + path;
    } else {
        document.cookie = key + "=" + encodeURIComponent(value) + ";path=" + path;
    }
}

function getCookie(key) {
    var str = document.cookie; 
    if (str) {
        var cookieList = str.split("; "); 
        for (var i = 0; i < cookieList.length; i++) {
            var cookie = cookieList[i].split("=");
            var cookieKey = cookie[0];
            var cookieValue = cookie[1];
            if (key == cookieKey) {
                return decodeURIComponent(cookieValue);
            }
        }
        return "";
    } else {
        return "";
    }
}