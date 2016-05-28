// JavaScript Document
$(document).ready(function(){
	var ctx = document.getElementById("skillBars");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Java", "Apex", "Salesforce", "Git/hub", "Bash/Batch", "JS", "CSS", "Android Java", "Bootstrap", "Python"],
        datasets: [{
            label: 'Number of Years in Experience',
            data: [6, 1, 1, 1, 3, 6, 4, 1, 1, 4],
						backgroundColor: "rgba(253,61,80,1)"
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

});
