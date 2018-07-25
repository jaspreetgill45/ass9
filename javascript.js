function submitChat() {
	
	var uname = $("#uname").val();
	var msg = $("#msg").val();
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			$("#chatlog").html() = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','server.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();

}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#logs').load('logs.php'); }, 2000 );
});