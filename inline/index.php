<!DOCTYPE html>
<html>
<head>
	<title>JSON | Inline</title>
	<link rel="stylesheet" type="text/css" href="/JSON/styles/styles.css">
</head>
<body>
	<script>
		var obj1 = { user:"John", age:22, country:"United States" };
		var obj2 = { user:"Will", age:27, country:"United Kingdom" };
		var obj3 = { user:"Abiel", age:19, country:"Mexico" };
		var obj4 = { u1:obj1, u2:obj2, u3:obj3 };

		document.write(obj3.user+" lives in "+obj3.country);
		obj3.country = "Italy";

		document.write("<hr />");

		document.write(obj3.user+" lives in "+obj3.country);

		document.write("<hr />");

		document.write(obj4.u2.user);

		// document.write(obj4["u2"]["user"]);

		document.write("<hr />");

		var meats = ["beef","pork","lamb"];
		var fruit = ["apple","plumb","grape","orange"];
		var obj5 = { arr1:meats, arr2:fruit };
		
		document.write(obj5.arr1[1]+" with "+obj5.arr2[0]+" is for dinner");
	</script>
</body>
</script>
</body>
</html>