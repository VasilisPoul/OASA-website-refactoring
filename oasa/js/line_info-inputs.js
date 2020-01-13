/* 

JAVASCRIPT by: Maria Karamina (sdi1600059)

*/

function inputToUrl(param, value) {
	var url = new URL(window.location);
	url.searchParams.set(param, value);
	url.searchParams.set("submit", "true");
	window.location.href = url.toString();	
}

function urlToOutput() {
	const url = new URL(window.location);
	if(url.searchParams == "" || url.searchParams.get("submit") === "false") {
		return;
	}

	var param;
	if(url.pathname.includes("lines.php")) {
		param = url.searchParams.get("idline");
	}
	else if(url.pathname.includes("stations.php")) {
		param = url.searchParams.get("idstation");
	}
	else {
		param = url.searchParams.get("idarea");
	}

	document.getElementById("info-input").value = param;

	url.searchParams.set("submit", "false");
	window.location.href = url.toString();
	document.getElementById("submit-form").submit;
}