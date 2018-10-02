function pumpkin() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			days=this.responseText.split("\n\n");
			if((new Date()).getDate()==31) {
				document.getElementById("decoration").innerHTML=days[1];
			}
			else if((new Date()).getDate()>15) {
				document.getElementById("decoration").innerHTML=days[0];
				flash=days[1];
				base=days[0];
				flicker();
			}
			else {
				document.getElementById("decoration").innerHTML=days[0];
			}
		}
	};
	xhttp.open("GET", "pumpkinhtml.txt", true);
	xhttp.send();
}
function flicker() {
	console.log("flicker");
	setTimeout(
		function(){
			if(Math.random()<0.055555555555555) {
				document.getElementById("decoration").innerHTML=flash;
				setTimeout(function(){
					document.getElementById("decoration").innerHTML=base;
					setTimeout(function(){
						document.getElementById("decoration").innerHTML=flash;
						setTimeout(function(){
							document.getElementById("decoration").innerHTML=base;
						},100)
					},50)
				},100)
			} 
			flicker();
		},
		(Math.random()+Math.random())*1000+500
	)
}