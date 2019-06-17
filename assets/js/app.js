
$(document).ready(function(){
	$.ajax({
			url:"http://localhost/mobile%20web%20app/data.php",
			method: "GET",
			success: function(data) {
			console.log(data);
			var apnu_total=[];
			var ppp_total=[];
			var tuf_total=[];
			var urp_total=[];
			
			for (var i in data) {
				apnu_total.push(data[i].apnu_total);
				ppp_total.push(data[i].ppp_total);
				tuf_total.push(data[i].tuf_total);
				urp_total.push(data[i].urp_total);	
			}
			var chartdata= {
				labels:  ["Apnu","PPP","TUF","URP"],
			datasets : [
			{ 	fill: true,
				backgroundColor: [
				'rgba(50, 250, 50, 1.75)',
				'rgba(250, 20, 20, 0.75)',
				'rgba(50, 55, 185, 0.75)',
				'rgba(100, 50, 0, 0.75)'],
				hoverBackgroundColor: [
				'rgba(50, 250, 50, 2)',
				'rgba(250, 20, 20, 1)',
				'rgba(50, 55, 185, 1)',
				'rgba(100, 50, 0, 1)',],
				data:[apnu_total,ppp_total,tuf_total,urp_total]	
				}
				
			]
			
			};
			var options = {
        title: {
				  maintainAspectRatio: false,
				  display: true,
                  text: 'Overall Votes',
                  position: 'top'
              },
};

			var ctx= $("#mycanvas");
			
			var barGraph = new Chart(ctx, {
			type: 'pie',
			data: chartdata,
			options: options
					});
					},
			error: function(data) {
				console.log(data);
			}
	});
});




