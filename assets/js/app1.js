
$(document).ready(function(){
	$.ajax({
			url:"http://localhost/mobile%20web%20app/data1.php",
			method: "GET",
			success: function(data) {
			console.log(data);
			var district =[];
			var district_name=[];
			var apnu=[];
			var ppp=[];
			var tuf=[];
			var urp=[];
			
			for (var i in data) {
				district.push( data[i].district);
				district_name.push("Region" + data[i].district + data[i].district_name);
				apnu.push(data[i].apnu);
				ppp.push(data[i].ppp);
				tuf.push(data[i].tuf);
				urp.push(data[i].urp);	
			}
			var chartdata= {
				labels:  district,
			datasets : [
			{
			label : 'Apnu Total', 
				backgroundColor: 'rgba(50, 250, 50, 1.75)',
				borderColor:'rgba(50, 200, 250, 1.75)',
				hoverBackgroundColor: 'rgba(50, 250, 50, 2)',
				hoverBorderColor: 'rgba(50, 250, 50, 2)',
				data: apnu
			},
			{		label: 'PPP Total', 
				backgroundColor: 'rgba(250, 20, 20, 0.75)',
				borderColor:'rgba(250, 20, 20, 0.75)',
				hoverBackgroundColor:  'rgba(250, 20, 20, 1)',
				hoverBorderColor: 'rgba(250, 20, 20, 1)',
				data: ppp
				},
				{   
				label:'TUF Total', 
				backgroundColor: 'rgba(50, 55, 185, 0.75)',
				borderColor:'rgba(50, 55, 185, 0.75)',
				hoverBackgroundColor:  'rgba(50, 55, 185, 1)',
				hoverBorderColor: 'rgba(50, 55, 185, 1)',
				data:tuf
				
				},
				{  
				label:'URP Total',
				backgroundColor: 'rgba(100, 50, 0, 0.75)',
				borderColor:'rgba(100, 50, 0, 0.75)',
				hoverBackgroundColor:  'rgba(100, 50, 0, 1)',
				hoverBorderColor: 'rgba(100, 50, 0, 1)',
				data: urp
				
				}
				
			]
			};
			
			var options = {
        title: {
				  maintainAspectRatio: false,
				  responsive: true,
                  display: true,
                  text: 'Overall Votes per District',
                  position: 'top'
              },
};
			var ctx= $("#mycanvas");
			
			var barGraph = new Chart(ctx, {
				type: 'bar',
				options: options,
				data: chartdata
			
			});
			},
			error: function(data) {
				console.log(data);
			}
	});
});




