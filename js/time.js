var xhour = 0;
var xmin = 0;
var xsec = 0;
var xy = 0;
var intxy = setInterval(function() {
if(xy == 0){
xy = 1;
document.getElementById("dxy").innerHTML = " ";
}else{
xy = 0;
document.getElementById("dxy").innerHTML = ":";
}
}, 500);
var intsec = setInterval(function() {
if(xsec == 59){
xsec = 0;
}else{
xsec += 1;
}
document.getElementById("ds").innerHTML = xsec;
      }, 1000);
var intmin = setInterval(function() {
if(xmin == 59){
xmin = 0;
}else{
xmin += 1;
}
document.getElementById("dm").innerHTML = xmin;
}, 60000);

var inthour = setInterval(function() {
xhour += 1;
document.getElementById("dh").innerHTML = xhour;
}, 3600000);
