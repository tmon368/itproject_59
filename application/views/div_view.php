<!DOCTYPE HTML>
<html>
<head>
	<script src="<?php echo base_url('re/js/canvasjs.js') ?>"> </script>

</head>
<body>

<div class="card-body">
	<div id="chartContainer" style="height: 400px; width: 100%;"></div>
</div>
</body>

<script type="text/javascript">
window.onload = function () {
	
var html = [];
	
	   $.ajax({
           type: 'ajax',
           url: '<?php echo base_url() ?>index.php/div_con/chartdiv',
           async: false,
           dataType: 'json',
           success: function(data) {
               
               console.log(data);
               var i;
               for (i = 0; i < data.length; i++) {
                   html.push({
                        x:i,
                       label: data[i].label, 
                       y:data[i].y
                   });
               }
            	var interval = 5;

               console.log(html);
               
               var chart = new CanvasJS.Chart("chartContainer", {
            		theme: "light1", // "light2", "dark1", "dark2"
					animationEnabled: false, // change to true	
            		title:{
            			text: "จำนวนนักศึกษาที่กระทำผิดทุกสำนักวิชา"
            		},
            		axisY:{
						interval:interval
					
                		},
            		data: [
            		
            		{
            			// Change type to "bar", "area", "spline", "pie",etc.
						type: "column",
				

            			
            			dataPoints: html
            				/*
            				{ label: "หมวด 6 ความผิดเกี่ยวกับการเสพสุราหรือของมึนเมา",  y: 60  },
            				{ label: "หมวด 8 ความผิดเกี่ยวกับวินัยจราจร", y: 15  },
            				{ label: "หมวด 9 ความผิดเกี่ยวกับความประพฤติ  ศีลธรรม และวัฒนธรรมอันดีงาม", y: 25  },
            				{ label: "หมวด 11 ความผิดเกี่ยวกับความสะอาดเรียบร้อย",  y: 60  },
            		*/
            				
            			
            		}]
            	});
           	

               chart.render();
           },
           error: function() {
               alert('ไม่มีข้อมูล');
           }
	   });     

}
</script>
</html>