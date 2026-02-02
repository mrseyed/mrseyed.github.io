// تاریخ و زمان هدف
var countDownDate = new Date("Mar 21, 2026 00:00:00").getTime();
var xy = 0;
var x = setInterval(
function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);



document.getElementById("day").innerHTML = days;
if(hours < 10){
document.getElementById("hr").innerHTML = "0" + hours;
}else{
document.getElementById("hr").innerHTML = hours;
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
    document.getElementById("notime").innerHTML = "زمان به اتمام رسیده است";
  }
}, 1000);