<?php 
	header("Content-Type: application/json");
	// $jsonData = '{ 
	// 			  "u1":{ "user":"John", "age":22, "country":"United States" },
	// 			  "u2":{ "user":"Will", "age":27, "country":"United Kingdom" },
	// 			  "u3":{ "user":"Abiel", "age":19, "country":"Mexico" }, 
	// 			  "u4":{ "user":"Rick", "age":34, "country":"Panama" },
	// 			  "u5":{ "user":"Susan", "age":23, "country":"Germany" },
	// 			  "u6":{ "user":"Amy", "age":43, "country":"France" },
	// 			  "u7":{ "user":"Pete", "age":18, "country":"Italy" },
	// 			  "u8":{ "user":"Chris", "age":25, "country":"United States" },
	// 			  "u9":{ "user":"Louis", "age":31, "country":"Spain" },
	// 			  "u10":{ "user":"Emily", "age":38, "country":"Uraguay" },
	// 			  "u11":{ "user":"Shawn", "age":52, "country":"Chile" },
	// 			  "u12":{ "user":"Greg", "age":24, "country":"Romania" }
	// 			}';
	// echo $jsonData;

	$jsonData = file_get_contents("mylist.json");
	echo $jsonData;
?>