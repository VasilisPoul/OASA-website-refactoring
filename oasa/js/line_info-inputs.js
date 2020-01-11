/* 

JAVASCRIPT by: Maria Karamina (sdi1600059)

*/

function inputToUrl(param, value) {
	var url = new URL(window.location);
	url.searchParams.set(param, value);
	window.location.href = url.toString();	
}

function urlToOutput() {
	const url = new URL(window.location);
	if(url.searchParams == "") {
		return;
	}

	var param;
	if(url.pathname.includes("lines.php")) {
		param = url.searchParams.get("line");
	}
	else if(url.pathname.includes("stations.php")) {
		param = url.searchParams.get("station");
	}
	else {
		param = url.searchParams.get("area");
	}

	var output = document.getElementById("output");
	output.innerHTML = "Looking for: " + param;
}