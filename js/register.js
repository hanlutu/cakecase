// var registerBtn = document.getElementById("registerBtn");
// var usernameInput = document.getElementById("username");
// var username_span = document.getElementById("username_span");
// var promptText = document.getElementById("prompt-text");

// var userpwdInput1 = document.getElementById("userpwd1");
// var userpwdInput2 = document.getElementById("userpwd2");
// var userpwd_span = document.getElementById("userpwd_span");

// var randCodeInput = document.getElementById("randCode");
// var showCodeSpan = document.getElementById("showCode");
// var randCode_span = document.getElementById("randCode_span");//放随机数

// randCode_span.innerHTML = getCode();
//     randCode_span.onclick = function(){
//     randCode_span.innerHTML = getCode();
//    }


// document.onclick = function(){
//     registerBtn.onclick();
//     checkUsername(username,username_span,usernameReg)
//     checkUserpwd(userpwd1,userpwd2,userpwd_span,userpwdReg);
// }
// registerBtn.onclick = function(){
//     var username = usernameInput.value;
//     var usernameReg = /^[a-z$_][0-9a-z$_]{5,11}$/ig;
//     var usernameFlag =  checkUsername(username,username_span,usernameReg);

//     var userpwd1 = userpwdInput1.value;
//     var userpwd2 = userpwdInput2.value;
//     var userpwdReg = /^[0-9a-z]{6,12}$/ig;
//     var userpwdFlag =  checkUserpwd(userpwd1,userpwd2,userpwd_span,userpwdReg);

//     var randCode = randCodeInput.value;
//     var randCode_span = randCode_span.innerHTML;
//     var randCodeFlag = checkRandCode(randCode,showCodeSpan,randCode_span);


// }


function checkUsername(username,username_span,usernameReg){
    if(usernameReg.test(username)){
        username_span.innerHTML = `<i>√</i>`;
        return true;
    }else{
        promptText.innerHTML =` <p><span>！</span>用户名输入不合法</p> ` ;
       return false;
    }
};


function checkUserpwd(userpwd1,userpwd2,userpwd_span,userpwdReg){
    if(userpwd1 == userpwd2){
        if(userpwdReg.test(userpwd1)){
            var numReg = /[0-9]/g;
            var numCount = numReg.test(userpwd1) ? 1 : 0;
            var upperReg = /[A-Z]/g;
            var upperCount = upperReg.test(userpwd1) ? 1 : 0;
            var lowerReg = /[a-z]/g;
            var lowerCount = lowerReg.test(userpwd1) ? 1 : 0;
            switch(numCount + upperCount + lowerCount){
                case 1:
                        userpwd_span.innerHTML = `<i style="background-color:red;">弱</i>`;
                        break;
                case 2:
                         userpwd_span.innerHTML = `<i style="background-color:orange;">中</i>`;
                        break;
                case 3:
                         userpwd_span.innerHTML = `<i>强</i>`;
                        break;
            }
            return true;
        }
        else{
            promptText.innerHTML = ` <p><span>！</span>输入密码不合法</p> `;
            return false;
        }
    }
    else{
        promptText.innerHTML = ` <p><span>！</span>两次输入密码不一致</p> `;
        return false;
    }
}

function checkRandCode(randCode,showCode,randCode_span){
    randCode_span.innerHTML = "";
    if(randCode.toUpperCase() == showCode.toUpperCase()){
        randCode_span.innerHTML = `<i>√</i>`;
        return true;
    }
    else{
        promptText.innerHTML = ` <p><span>！</span>验证码输入错误</p> `;
        showCodeSpan.innerHTML = getCode();
        return false;
    }
}






function getCode(){
    var str = "";
    for(var i=0;i < 4;i++){
        var temp = Math.round(Math.random()*(totalList.length-1));
        var rand = totalList[temp];
        str += rand
    }
    return str;
}





var numList = [];
var smallList = [];
var bigList = [];
var otherList = ["$","_"];
for(var i = 48;i <= 57;i++){
	var code = String.fromCharCode(i);
	numList.push(code);
}
for(var i = 97; i <= 122;i++){
	var code = String.fromCharCode(i);
	smallList.push(code);
}
for(var i =65;i <= 90;i++){
	var code = String.fromCharCode(i);
	bigList.push(code);
}
var totalList = otherList.concat(numList, smallList,bigList);
// console.log(totalList);




// var $ = {
//     ajax: function (json) {
//         try {
//             var url = json.url;
//             if (json.data) {
//                 url += "?";
//                 for (var attr in json.data) {
//                     url += attr + "=" + json.data[attr] + "&";
//                 }
//                 //php/login.php?username=leson&userpwd=123&;
//                 url = url.substring(0, url.length - 1);
//             }
//             var req = new XMLHttpRequest();
//             req.open(json.type, url, true);
//             req.send();
//             req.onreadystatechange = function () {
//                 if (req.readyState == 4 && req.status == 200) {
//                     let result = req.responseText;
//                     if (json.dataType == "json") {
//                         result = JSON.parse(result);
//                     }
//                     if (json.success) {
//                         json.success(result);
//                     }

//                 }

//             }
//         } catch (e) {
//             if (json.error) {
//                 json.error(e);
//             }

//         }





//     }
// }


