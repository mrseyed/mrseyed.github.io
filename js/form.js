function form1n() {

	let f1inputs = [
		document.getElementById("fname"),
		document.getElementById("lname"),
		document.getElementById("faname"),
		document.getElementById("bdy"),
		document.getElementById("shenas"),
		document.getElementById("idnum"),
		document.getElementById("ezdevaj"),
		document.getElementById("madrak"),
		document.getElementById("phone"),
		document.getElementById("address")
	];
	let hasError=false;
	f1inputs.forEach(input => {
		input.classList.remove("error");

		if (input.value.trim() === "") {
			input.classList.add("error");
			hasError=true;
		}
	});
	if(hasError){
	alert("لطفا فیلدهای مشخص شده را کامل کنید.")
	}else{

document.getElementById("form1").hidden=true;
 document.getElementById("x1").hidden=true;
 document.getElementById("form2").hidden=false;
 document.getElementById("chek1").hidden=false;
 document.getElementById("k1").innerHTML="انجام شد";

var gend = document.getElementById("gen").value;
 
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
}
}
/// 
function success() {
var ok = document.getElementById("ok");
	if(ok.checked=true){
	document.getElementById("submit").disabled=false;
	}else{
	document.getElementById("submit").disabled=true;
	}

}

