/* 

JAVASCRIPT by: Maria Karamina (sdi1600059)

*/

function addTicket() {
	var row = document.getElementsByClassName("ticket-row"),
	    clone = row[0].cloneNode(true); // true means clone all childNodes and all event handlers
	clone.getElementsByClassName("remove-row")[0].style.display="inline";
	var tickets = document.getElementById("tickets-container");
	tickets.insertBefore(clone, document.getElementById("add-ticket"));
}

function removeTicket(node) {
	node.parentNode.parentNode.parentNode.removeChild(node.parentNode.parentNode);
}