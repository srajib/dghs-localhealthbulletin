
<style>

svg {
  display: block;
}

#nmr svg{
  height: 400px;
  min-width: 100px;
  min-height: 100px;
}

</style>
<div id="nmr">
<svg></svg>
</div>
<script>

historicalBarChart = [ 
  {
    key: "Cumulative Return",
    values: [
      { 
        "label" : "<?php echo "abcd";?>" ,
        "value" : 29.765957771107,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "B" , 
        "value" : 0,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "C" , 
        "value" : 32.807804682612,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "D" , 
        "value" : 196.45946739256,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "E" ,
        "value" : 0.19434030906893,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "F" , 
        "value" : 98.079782601442,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "G" , 
        "value" : 13.925743130903,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "H" , 
        "value" : 5.1387322875705,
		"color": "#FF5B14"
      }
    ]
  }
];




nv.addGraph(function() {  
  var chart = nv.models.discreteBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .staggerLabels(true)
      //.staggerLabels(historicalBarChart[0].values.length > 8)
      .tooltips(false)
      .showValues(true)

  d3.select('#nmr svg')
      .datum(historicalBarChart)
    .transition().duration(500)
      .call(chart);

  nv.utils.windowResize(chart.update);

  return chart;
});


</script>
