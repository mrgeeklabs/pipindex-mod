var Converter = require("csvtojson").Converter;
var converter = new Converter({});
var fs = require('fs');
var terms={};
var accept={};
var _=require('underscore');
var journey={

}
/*converter.fromFile("./data.csv",function(err,result){
	result.forEach(function(row){
		var email=""+row["email"];
		if(email.indexOf("shawacademy")>0){

		}
		else if(email.indexOf("academy")>0){

		}
		else if(row["eventType"]=="accept-terms"||row["event"]=="accept-terms"){
			console.log(row["logDate"]);
			accept[row["email"]]=true;
		}
		else if(row["eventType"]=="terms"){
			console.log(row["logDate"]);
			terms[row["email"]]=true;
		} else{
			console.log(row["logDate"]);
			console.log(row);
		}	
	});
	console.log(Object.keys(terms).length, Object.keys(accept).length);
	console.log(Object.keys(terms));
	console.log("*****");
	console.log(Object.keys(accept));
	console.log("*****");
	var diff=_.difference(Object.keys(terms), Object.keys(accept));
	console.log(diff);
});*/
converter.fromFile("./all_trackevents.csv",function(err,result){
	result.forEach(function(row){
		var email=""+row["email"];
		if(email.indexOf("shawacademy")>0){

		}
		else if(email.indexOf("academyft")>0){

		}
		else {
			if(! journey[email]) {
				journey[email]={
					ips:[],
					actions:[],
					actionDates:[],
					affected: "NO",
					affected_completed: "NO",
					affected_already_completed: "NO",
					arrive_landing_page: "NO"
				};
			}
			if(row["event"]!="mail-open") {
				if(row["eventSource"]==="terms-and-condition-fl.php" ){
					journey[email].affected="YES";
				}
				if(row["eventAction"]==="thank-you.php" ){
					journey[email].affected_already_completed="YES";	
				}
				if(row["eventAction"]==="thank-you-fl.php" ){
					journey[email].affected_completed="YES";
				}
				if(row["eventSource"]==="terms-and-condition.php"|| row["eventAction"]==="landing_page_3" ){
					journey[email].arrive_landing_page="YES";
				}
				journey[row["email"]]["ips"].push(row["ip"]);
				journey[row["email"]]["ips"]=_.unique(journey[row["email"]]["ips"]);
				journey[row["email"]]["actions"].push(row["event"]+";"+row["eventAction"]+";"+row["eventSource"]);
				journey[row["email"]]["actionDates"].push(row["logDate"]);						
			}
		}
	});
	Object.keys(journey).forEach(function(email){
		if(journey[email].affected=="YES"){
			console.log(email,"YES", journey[email].affected_completed, journey[email].arrive_landing_page,journey[email].affected_already_completed);
		}
	})
});