<style>
svg {
  display: block;
}

#mmr svg{
	width: 650px;
	height: 450px;
	min-width: 100px;
	min-height: 100px;
}

</style>
<div id="mmr">
	<svg></svg>
</div>
<script>

historicalBarChartMMR = [ 
  {
    key: "Cumulative Return",
    values: [
      { 
        "label" : "<?php echo "R.P.W";?>" ,
        "value" : <?php echo ($pdfdata->a40+$pdfdata->a41+$pdfdata->a42+$pdfdata->a43+$pdfdata->a44); ?>,
		"color": "#FF5B14"		
      } , 
      { 
        "label" : "<?php echo "1st ANC";?>" ,
        "value" : <?php echo ($pdfdata->a45+$pdfdata->a46+$pdfdata->a47+$pdfdata->a48+$pdfdata->a49); ?>,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "<?php echo "4th ANC";?>" ,
        "value" : <?php echo ($pdfdata->a50+$pdfdata->a51+$pdfdata->a52+$pdfdata->a53+$pdfdata->a54); ?>,
		"color": "#FF5B14"
      } , 
      { 
        "label" : "<?php echo "C. Preg.";?>" ,
        "value" : <?php echo ($pdfdata->a60+$pdfdata->a61+$pdfdata->a62+$pdfdata->a63+$pdfdata->a64); ?>,
		"color": "#FF5B14"
      } ,
	  { 
        "label" : "<?php echo "N. deli.";?>" ,
        "value" : <?php echo ($pdfdata->a65+$pdfdata->a66+$pdfdata->a67+$pdfdata->a68+$pdfdata->a69); ?>,
		"color": "#FF5B14"
      } ,
	  { 
        "label" : "<?php echo "V. deli.";?>" ,
        "value" : <?php echo ($pdfdata->a70+$pdfdata->a71+$pdfdata->a72+$pdfdata->a73+$pdfdata->a74); ?>,
		"color": "#FF5B14"
      } ,	 
	  { 
        "label" : "<?php echo "C. deli.";?>" ,
        "value" : <?php echo ($pdfdata->a75+$pdfdata->a76+$pdfdata->a77+$pdfdata->a78+$pdfdata->a79); ?>,
		"color": "#FF5B14"
      } ,
	  { 
        "label" : "<?php echo "F. deli.";?>" ,
        "value" : <?php echo ($pdfdata->a80+$pdfdata->a81+$pdfdata->a82+$pdfdata->a83+$pdfdata->a84); ?>,
		"color": "#FF5B14"
      } ,
	  { 
        "label" : "<?php echo "PNC";?>" ,
        "value" : <?php echo ($pdfdata->a90+$pdfdata->a91+$pdfdata->a92+$pdfdata->a93+$pdfdata->a94); ?>,
		"color": "#FF5B14"
      }
    ]
  }
];




nv.addGraph(function() {  
  var chartMMR = nv.models.discreteBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .staggerLabels(true)
      //.staggerLabels(historicalBarChart[0].values.length > 8)
      .tooltips(false)
      .showValues(true)

  d3.select('#mmr svg')
      .datum(historicalBarChartMMR)
    .transition().duration(500)
      .call(chartMMR);

  nv.utils.windowResize(chartMMR.update);

  return chartMMR;
});


</script>
