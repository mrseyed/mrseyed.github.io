// تاریخ و زمان هدف
var countDownDate = new Date("Jul 30, 2024 06:00:00").getTime();
var xy = 0;
var x = setInterval(
function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

var intxy = setInterval(function() {
if(xy == 0){

xy = 1;
document.getElementById("dxy").style.color = "gold";
}else{
xy = 0;
document.getElementById("dxy").style.color = "black";
}
}, 250);


document.getElementById("rooz").innerHTML = days;
if(hours < 10){
document.getElementById("hour").innerHTML = "0" + hours;
}else{
document.getElementById("hour").innerHTML = hours;
}
if(minutes < 10){
document.getElementById("min").innerHTML = "0" + minutes;
}else{
document.getElementById("min").innerHTML = minutes;
}
if(seconds < 10){
document.getElementById("sec").innerHTML = "0" + seconds;
}else{
document.getElementById("sec").innerHTML = seconds;
}





  if (distance < 10) { 
    clearInterval(x);
    document.getElementById("demo").innerHTML = "زمان به اتمام رسیده است";
  }
}, 1000);