			 <script src="js/jquery.min.js"></script>
			<!-- smart resize event -->
			<script src="js/jquery.debouncedresize.min.js"></script>
			<!-- hidden elements width/height -->
			<script src="js/jquery.actual.min.js"></script>
			<!-- js cookie plugin -->
			<script src="js/jquery.cookie.min.js"></script>
			<!-- main bootstrap js -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<!-- bootstrap plugins -->
			<script src="js/bootstrap.plugins.min.js"></script>
			<!-- tooltips -->
			<script src="lib/qtip2/jquery.qtip.min.js"></script>
			<!-- jBreadcrumbs -->
			<script src="lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
			<!-- sticky messages -->
            <script src="lib/sticky/sticky.min.js"></script>
			<!-- fix for ios orientation change -->
			<script src="js/ios-orientationchange-fix.js"></script>
			<!-- scrollbar -->
			<script src="lib/antiscroll/antiscroll.js"></script>
			<!--<script src="lib/antiscroll/jquery-mousewheel.js"></script>-->
			<!-- lightbox -->
            <script src="lib/colorbox/jquery.colorbox.min.js"></script>
            <!-- common functions -->
			<script src="js/gebo_common.js"></script>
	
            <script src="lib/jquery-ui/jquery-ui-1.8.20.custom.min.js"></script>
            <!-- touch events for jquery ui-->
            <script src="js/forms/jquery.ui.touch-punch.min.js"></script>
            <!-- masked inputs -->
            <script src="js/forms/jquery.inputmask.min.js"></script>
            <!-- autosize textareas -->
            <script src="js/forms/jquery.autosize.min.js"></script>
            <!-- textarea limiter/counter -->
            <script src="js/forms/jquery.counter.min.js"></script>
            <!-- datepicker -->
            <script src="lib/datepicker/bootstrap-datepicker.min.js"></script>
            <!-- timepicker -->
            <script src="lib/datepicker/bootstrap-timepicker.min.js"></script>
            <!-- tag handler -->
            <script src="lib/tag_handler/jquery.taghandler.min.js"></script>
            <!-- input spinners -->
            <script src="js/forms/jquery.spinners.min.js"></script>
            <!-- styled form elements -->
            <script src="lib/uniform/jquery.uniform.min.js"></script>
            <!-- animated progressbars -->
            <script src="js/forms/jquery.progressbar.anim.js"></script>
            <!-- multiselect 
            <script src="lib/multiselect/js/jquery.multi-select.min.js"></script>-->
            <!-- enhanced select (chosen) -->

            <!-- <script src="lib/chosen/chosen.jquery.js"></script>
              <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
            <script src="lib/chosen/chosen.proto.js"></script>-->
            <script src="lib/chosen/chosen.jquery.js" type="text/javascript"></script>
  
            <!-- TinyMce WYSIWG editor -->
            <script src="lib/tiny_mce/jquery.tinymce.js"></script>
			<!-- plupload and all it's runtimes and the jQuery queue widget (attachments) -->
			<script type="text/javascript" src="lib/plupload/js/plupload.full.js"></script>
			<script type="text/javascript" src="lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.full.js"></script>
            <!-- colorpicker -->
			<script src="lib/colorpicker/bootstrap-colorpicker.js"></script>
			<!-- form functions -->
            <script src="js/gebo_forms.js"></script>
            <script src="multi_js/jquery.multi-select.js" type="text/javascript"></script>
<script>
$('.selects').multiSelect();
</script>
<script type="text/javascript">
    function doMath(a,b,c,d,e,t)
    {
        // Capture the entered values of two input boxes
        var a = document.getElementById(a).value;
        var b= document.getElementById(b).value;
		var c= document.getElementById(c).value;
		var d= document.getElementById(d).value;
		var e= document.getElementById(e).value;
        // Add them together and display
		
		if(a!=""){ var a=a.split(',').join(''); }
		else{ var a=0; }
		
		if(b!=""){ var b=b.split(',').join('');}
		else{ var b=0; }
		
		if(c!=""){ var c=c.split(',').join(''); }
		else{ var c=0; }
		
		if(d!=""){ var d=d.split(',').join(''); }
		else{ var d=0; }
		
		if(e!=""){ var e=e.split(',').join(''); }	
		else{ var e=0; }
		
        var sum = parseInt(a) + parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e);
		document.getElementById(t).innerHTML=sum;
   }
 
</script>
<!--<script type="text/javascript">
  document.observe('dom:loaded', function(evt) {
    var select, selects, _i, _len, _results;
    if (Prototype.Browser.IE && (Prototype.BrowserFeatures['Version'] === 6 || Prototype.BrowserFeatures['Version'] === 7)) {
      return;
    }
    selects = $$(".mhz-select");
    _results = [];
    for (_i = 0, _len = selects.length; _i < _len; _i++) {
      select = selects[_i];
      _results.push(new Chosen(select));
    }
    deselects = $$(".mhz-select-deselect");
    for (_i = 0, _len = deselects.length; _i < _len; _i++) {
      select = deselects[_i];
      _results.push(new Chosen(select,{allow_single_deselect:true}));
    }
    return _results;
  });
  </script>
  <script type="text/javascript"> 
  $(".mhz-select").chosen(); $(".mhz-select-deselect").chosen({allow_single_deselect:true}); 
  </script>-->

<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> --->
<script src="jquery.autocomplete.js" type="text/javascript"></script>
<script>
$(".icd_10").autocomplete("autocomplete-ajax.php");
</script>
<style>
/* autocomplete */
input.autocomplete-loading
{
	background-image:url(autocomplete.gif);
	background-position: center right;
	background-repeat:no-repeat;
}
ul.autocomplete 
{
    position:static;
    overflow: hidden;
    background-color: #fff;
    border: 1px solid ButtonShadow;
    margin: 0px;
    padding: 0px;
    list-style: none;
    color: #000;
	display:none;
	z-index:1000;
}
ul.autocomplete li 
{
  display: block; 
  padding: 0.1em; 
  overflow: hidden;
  width: 100%;
  cursor:pointer;
}

ul.autocomplete li.selected 
{
  background-color: Highlight ; 
  color: #fff;
}
.hide{
	display:none;
}
</style>