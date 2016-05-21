'use strict'
$(function() {
	var pieData = [
	   {
	      value: 25,
	      label: 'Java',
	      color: '#811BD6'
	   },
	   {
	      value: 10,
	      label: 'Scala',
	      color: '#9CBABA'
	   },
	   {
	      value: 30,
	      label: 'PHP',
	      color: '#D18177'
	   },
	   {
	      value : 35,
	      label: 'HTML',
	      color: '#6AE128'
	   }
	]


	var context = document.getElementById('skills').getContext('2d');
	var skillsChart = new Chart(context).Pie(pieData);
});


$(function() {
var data = {
    labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
    datasets : [
        {
            fillColor : "gray",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "blue",
            pointStrokeColor : "#fff",
            data : [65,54,30,81,56,55,40]
        },
        {
            fillColor : "rgba(219,156,52,0.4)",
            strokeColor : "red",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            data : [20,60,42,58,31,21,50]
        },
    ]
}
var canvas = document.getElementById("linegraph");
var ctx = canvas.getContext("2d");
new Chart(ctx).Line(data);


});