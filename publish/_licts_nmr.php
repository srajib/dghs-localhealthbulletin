<style>

svg {
  display: block;
}

#nmr svg{	
	width: 650px;
	height: 450px;
}

</style>
<div id="nmr">
	<svg></svg>
</div>
<script>

historicalBarChartNMR = [ 
  {
    key: "Cumulative Return",
    values: [
      { 
        "label" : "<?php echo "Still Birth";?>" ,
        "value" : <?php echo $pdfdata->a34;?>,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "<?php echo "Neonatal Death";?>" ,
        "value" : <?php echo $pdfdata->a35;?>,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "<?php echo "Infant Death";?>" ,
        "value" : <?php echo $pdfdata->a36;?>,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "<?php echo "U5 Death";?>" ,
        "value" : <?php echo $pdfdata->a37;?>,
		"color": "#FF5B14"
      }
    ]
  }
];




nv.addGraph(function() {  
  var chartNMR = nv.models.discreteBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .staggerLabels(true)
      //.staggerLabels(historicalBarChart[0].values.length > 8)
      .tooltips(false)
      .showValues(true)

  d3.select('#nmr svg')
      .datum(historicalBarChartNMR)
    .transition().duration(500)
      .call(chartNMR);

  nv.utils.windowResize(chartNMR.update);

  return chartNMR;
});


</script>
