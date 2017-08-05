function ajax_get_json(){

	var results = document.getElementById("divresult");
    var hr = new XMLHttpRequest();

    hr.open("POST", "post_php_ajax.php", true);
    hr.setRequestHeader("Content-type", "application/json");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var data = JSON.parse(hr.responseText);
			results.innerHTML = "";
			for(var obj in data){
				results.innerHTML += "Property A: "+data[obj].propertyA+"<hr />";
				results.innerHTML += "Property B: "+data[obj].propertyB;
			}
	    }
    }
    hr.send("var1=birds&var2=bees");
    results.innerHTML = "requesting...";
}
$("document").ready(function(){
	ajax_get_json();
});