var fname = document.getElementById("fname");
var lname= document.getElementById("lname");
var faname= document.getElementById("faname");





//  تولد  //

var bday = document.getElementById("bday");
var bdd = document.getElementById("bdd");
var bdm = document.getElementById("bdm");
var bdy = document.getElementById("bdy");

var mybdate = setInterval(
	function () {
	bday.value = bdy.value + "/" + bdm.value + "/" + bdd.value;
	}
, 1000);

// سربازی //
var sarbaz = document.getElementById("nvazife");
var pgen = document.getElementById("geneder");
var ingen = document.getElementById("gen");
var kadr = document.getElementById("kadr");

function male() {
 sarbaz.disabled=false;
 ingen.value="مرد";
 kadr.hidden=false;
 pgen.innerHTML="مرد";
}
function female() {
sarbaz.disabled=true;
ingen.value="زن";
kadr.hidden=false;
pgen.innerHTML="زن";
}










function myjob2() {
	var qjob2 = document.getElementById("chj2");
	var job2 = document.getElementById("j2");
	var job3 = document.getElementById("j3");
	var job4 = document.getElementById("j4");
	var job5 = document.getElementById("j5");
		if(qjob2.checked === true){
		job2.hidden=false;
		}else{
		job2.hidden=true;
		job3.hidden=true;
		job4.hidden=true;
		job5.hidden=true;
		}
}
function myjob3() {
	var qjob3 = document.getElementById("chj3");
	var job3 = document.getElementById("j3");
	var job4 = document.getElementById("j4");
	var job5 = document.getElementById("j5");

		if(qjob3.checked === true){
		job3.hidden=false;
		}else{
		job3.hidden=true;
		job4.hidden=true;
		job5.hidden=true;
		}
}
function myjob4() {
	var qjob4 = document.getElementById("chj4");
	var job4 = document.getElementById("j4");
	var job5 = document.getElementById("j5");

		if(qjob4.checked === true){
		job4.hidden=false;
		}else{
		job4.hidden=true;
		job5.hidden=true;
		}
}
function myjob5() {
	var qjob5 = document.getElementById("chj5");
	var job5 = document.getElementById("j5");
		if(qjob5.checked === true){
		job5.hidden=false;
		}else{
		job5.hidden=true;
		}









// FORMS //
function form1n() {
var gend = ingen.value;
 
 if (gend === "مرد") {
 document.getElementById("seljob1").hidden=false;
 document.getElementById("seljob2").hidden=false;
 document.getElementById("seljob3").hidden=false;
 document.getElementById("seljob4").hidden=false;
 document.getElementById("seljob5").hidden=false;
 document.getElementById("seljob01").hidden=true;
 document.getElementById("seljob02").hidden=true;
 document.getElementById("seljob03").hidden=true;
 document.getElementById("seljob04").hidden=true;
 document.getElementById("seljob05").hidden=true;
 }
 if (gend === "زن") {
 document.getElementById("seljob1").hidden=true;
 document.getElementById("seljob2").hidden=true;
 document.getElementById("seljob3").hidden=true;
 document.getElementById("seljob4").hidden=true;
 document.getElementById("seljob5").hidden=true;
 document.getElementById("seljob01").hidden=false;
 document.getElementById("seljob02").hidden=false;
 document.getElementById("seljob03").hidden=false;
 document.getElementById("seljob04").hidden=false;
 document.getElementById("seljob05").hidden=false;
}








document.getElementById("form1").hidden=true;
 document.getElementById("x1").hidden=true;
 document.getElementById("form2").hidden=false;
 document.getElementById("chek1").hidden=false;
 document.getElementById("k1").innerHTML="انجام شد";

}
