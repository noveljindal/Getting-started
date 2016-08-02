
function userstring(){
	var str = document.getElementById("ename").value;
		if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "registration.php?q=" + str, true);
        xmlhttp.send();
    }
   
}

	$(document).ready(function(){
    
    $("input").keyup(function(){
        userstring();
    });
	});