function getRequest() {
	var Objeto = new XMLHttpRequest();
	Objeto.open('GET', 'scripts/backend.php', true);
	Objeto.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	Objeto.onreadystatechange = function() {
		document.getElementById('title').innerHTML = Objeto.responseText;
	}
	Objeto.send();
}

function postRequest() {
	var Objeto = new XMLHttpRequest();
	Objeto.open('POST', 'scripts/recibir.php', true);
	Objeto.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	Objeto.onreadystatechange = function() {
		document.getElementById('title').innerHTML = Objeto.responseText;
	}
	Objeto.send('username=John');
}