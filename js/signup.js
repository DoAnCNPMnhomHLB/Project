// duoi day la cua trang dang nhap
var Chuyen = document.getElementsByClassName("in-to-up")[0];
var Chuyentit = document.getElementsByClassName("chuyen-title")[0];
function Signup() {
    Chuyen.style.marginLeft = '-585px';
    Chuyentit.style.marginTop = '-110px';
}

function Signin() {
    Chuyen.style.marginLeft = '0px';
    Chuyentit.style.marginTop = '0px';
}

//Duoi day la cua forgotpass.html (lay lai mat khau)

var Chuyen2 = document.getElementsByClassName("chuyen-box")[0];
var x = 550;
function Next() {
    Chuyen2.style.marginLeft = '-' + x + 'px';
    x += 550;
}

function Previous() {
    Chuyen2.style.marginLeft = 0 + 'px';
    x = 0;
}

