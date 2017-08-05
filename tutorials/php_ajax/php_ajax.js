function ajax_get_json(){

	var results = document.getElementById("divresult");
    var hr = new XMLHttpRequest();

    hr.open("GET", "php_ajax.php", true);
    hr.setRequestHeader("Content-type", "application/json");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var data = JSON.parse(hr.responseText);
			results.innerHTML = "";
			for(var obj in data){
				results.innerHTML += data[obj].user+" is "+data[obj].age+" and lives in "+data[obj].country+"<hr />";
			}
	    }
    }
    hr.send(null);
    results.innerHTML = "requesting...";
}
$("document").ready(function(){
	ajax_get_json();
});