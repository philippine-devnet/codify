<footer>
		<div class="clearfix">
			<p class="pull-left"><a class="notify-disabled" href="#"><i class="icon-chevron-up"></i></a></p>
		    <p class="pull-right">&copy; 2013 <a href="http://mickael-girault.fr/" target="_blank">Bootstrap Trooper</a></p>
		</div>
	</footer><!-- footer -->       

	  <script type="text/javascript">
	  //line
	      var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	      var data9_1 = [
	          [1, 1530],
	          [2, 6580],
	          [3, 1980],
	          [4, 6630],
	          [5, 8010],
	          [6, 10800],
	          [7, 3530],
	          [8, 7490],
	          [9, 5230],
	          [10, 2580],
	          [11, 6880],
	          [12, 3640]
	      ];

	      $.fn.UseTooltip = function() {
	          var previousPoint = null;

	          $(this).bind("plothover", function(event, pos, item) {
	              if (item) {
	                  if (previousPoint != item.dataIndex) {
	                      previousPoint = item.dataIndex;

	                      $("#tooltip").remove();

	                      var x = item.datapoint[0];
	                      var y = item.datapoint[1];

	                      showTooltip(item.pageX, item.pageY,
	                      months[x - 1] + "<br/>" + "<strong>" + y + "</strong> (" + item.series.label + ")");
	                  }
	              } else {
	                  $("#tooltip").remove();
	                  previousPoint = null;
	              }
	          });
	      };

	      function showTooltip(x, y, contents) {
	          $('<div id="tooltip">' + contents + '</div>').css({
	              position: 'absolute',
	              display: 'none',
	              top: y + 5,
	              left: x + 20,
	              border: '1px solid #E6E6E6',
	              padding: '2px',
	              size: '10',
	              'background-color': '#F7F7F7',
	              opacity: 0.80
	          }).appendTo("body").fadeIn(200);
	      }


	      $(function() {
	          $.plot($("#example-section9 #flotcontainer"), [{
	              data: data9_1,
	              points: {
	                  fillColor: "#999",
	                  color: "#4A98BE",
	                  symbol: "circle" // or callback
	              },              
	              label: "Page View",
	              lines: {
	                  show: true,
	                  color: "#4A98BE",
	                  fillColor: "#ffffff",

	              },
	              points: {
	                  show: true
	              }
	          }], {
	              grid: {
	                  hoverable: true,
	                  clickable: false,
	                  mouseActiveRadius: 30,
	                  markingsColor: "#fff",
	                  backgroundColor: {
	                      colors: ["#fff", "#fff"]
	                  }
	              },
	              xaxis: {
	                  ticks: [
	                      [1, "Jan"],
	                      [2, "Feb"],
	                      [3, "Mar"],
	                      [4, "Apr"],
	                      [5, "May"],
	                      [6, "Jun"],
	                      [7, "Jul"],
	                      [8, "Aug"],
	                      [9, "Sep"],
	                      [10, "Oct"],
	                      [11, "Nov"],
	                      [12, "Dec"]
	                  ]
	              }
	          });

	          $("#example-section9 #flotcontainer").UseTooltip();
	      });
	  </script>      


	  <script type="text/javascript">
	  //pie
	      $(function() {
	          var data = [{
	              label: "65.7% New",
	              color: "#4A98BE",
	              data: 65.7
	          }, {
	              label: "34.3% Returning",
	              color: "#9ABA40",
	              data: 34.3
	          }];

	          var options = {
	              series: {
	                  pie: {
	                      show: true
	                  }
	              }
	          };

	          $.plot($("#example-section16 #flotcontainer"), data, options);
	      });
	  </script>


	  <script type="text/javascript">
	  //tooltip
	      $("[rel=tooltip]").tooltip();
	      $(function() {
	          $('.demo-cancel-click').click(function(){return false;});
	      });
	  </script>

	  <script>
	  //gage
	    var g = new JustGage({
	      id: "gage-1", 
	      value: getRandomInt(0, 980), 
	      min: 0,
	      max: 980,
	      showInnerShadow: true,
	      shadowOpacity : 0.3, 
	      valueFontColor : ['#4A98BE'],    
	      levelColors : ['#4A98BE','#3d86a9','#347290'],     
	      title: "Visitors"
	    }); 

	    var g = new JustGage({
	      id: "gage-2", 
	      value: getRandomInt(0, 100), 
	      min: 00,   
	      max: 100,
	      showInnerShadow: true,
	      shadowOpacity : 0.3, 
	      valueFontColor : ['#e07a59'],    
	      levelColors : ['#e07a59','#db633c','#cf5027'],        
	      title: "Errors"
	    });

	    var g = new JustGage({
	      id: "gage-3", 
	      value: getRandomInt(0, 500), 
	      min: 0,
	      max: 500,
	      showInnerShadow: true,
	      shadowOpacity : 0.3, 
	      valueFontColor : ['#6A5A8C'],    
	      levelColors : ['#6A5A8C','#5a4d77','#4b3f63'],         
	      title: "Events"
	    });

	    var g = new JustGage({
	      id: "gage-4", 
	      value: getRandomInt(350, 980), 
	      min: 350,
	      max: 980,
	      showInnerShadow: true,
	      valueFontColor : ['#9aba40'],    
	      shadowOpacity : 0.3, 
	      levelColors : ['#9aba40','#85a137','#70872f'],       
	      title: "Incomes"
	    });                  
	  </script> 

	  <script type="text/javascript">
	  //sparkline
	  $("#sparkline-1").sparkline([5,6,7,6,5,7,6,4], {
	      type: 'bar',
	      height: '150',
	      barWidth: 20,
	      zeroAxis: false,
	      barColor: '#7c87ad',
	      negBarColor: '#7c87ad'});
	    $("#sparkline-2").sparkline([5,6,7,6,5,5,6,4], {
	      type: 'bar',
	      height: '150',
	      barWidth: 20,
	      zeroAxis: false,
	      barColor: '#999999',
	      negBarColor: '#999999'});
	    $("#sparkline-3").sparkline([5,6,5,6,5,7,6,4], {
	      type: 'bar',
	      height: '150',
	      barWidth: 20,
	      zeroAxis: false,
	      barColor: '#404040',
	      negBarColor: '#404040'});
	    $("#sparkline-4").sparkline([5,6,7,6,5,5,6,4], {
	      type: 'bar',
	      height: '150',
	      barWidth: 20,
	      zeroAxis: false,
	      barColor: '#FFC414',
	      negBarColor: '#FFC414'});               
	    $("#sparkline-5").sparkline([5,6,7,6,5,7,6,4], {
	      type: 'bar',
	      height: '150',
	      barWidth: 20,
	      zeroAxis: false,
	      barColor: '#9ABA40',
	      negBarColor: '#9ABA40'});
	    $("#sparkline-6").sparkline([5,6,6,6,5,5,6,4], {
	      type: 'bar',
	      height: '150',
	      barWidth: 20,
	      zeroAxis: false,
	      barColor: '#6A5A8C',
	      negBarColor: '#6A5A8C'});    
	  </script>   

