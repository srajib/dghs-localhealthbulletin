<script type="text/javascript">
function changing(id) {
           var e = document.getElementById(id);

           if(e.type == 'text'){
              e.type= 'hidden';
              e.className= 'hide';
             }
           else {
              e.type = 'text';                        
              e.className= 'icd_10';
			  e.value='';
			  }
}  
</script>
<?
function multiselect($field_id){
		
		if(isset($_POST[$field_id]) && $_POST[$field_id]!=""){
		$arrs=$_POST[$field_id];
		$fields="";
		
			foreach($arrs as $arr){
			$fields=$arr.",".$fields;
			}
			
			$field_id=$fields;
			$field_output=mysql_real_escape_string($field_id);			
			return $field_output;
		} else{
			$field_id="";
			return $field_id;
		}
}

function escape_replace($current_data, $replace_data, $field_id){
		
		if(isset($_POST[$field_id]) && $_POST[$field_id]!=""){
		
		$escapeing=mysql_real_escape_string($_POST[$field_id]);
		$replacedata=str_replace($current_data,$replace_data,$escapeing);
		return $replacedata;
		
		} else{
			$replacedata="";
			return $replacedata;
		}
			
			
}

/*function insert_data_into($str_sl, $end_sl, $datatable, $orgid, $year, $lvlid){

		$values="'','$orgid','$year','$lvlid',";
		
		while($str_sl<$end_sl){
		$a_var="$a".$str_sl;
		$values=$values." '".${$a_var}."',";
		$str_sl++;
		}
		
		$a_var_l="$a".$end_sl;
		$values=$values."'".$a819."'";
		$insert_query="INSERT INTO ".$datatable." VALUES (".$values.")";
		return $insert_query;

}*/
function icd10_data($field_id,$value){
	echo "<input type=\"text\" class=\"span12\" name=\"".$field_id."\" id=\"".$value."\" value=\"".$value."\" placeholder=\"Write 4 digit ICD 10 Code Only\" />";
	/*if($value==0 || $value=="" ){
		echo "<input type=\"text\" name=\"".$field_id."\" id=\"".$field_id."\" class=\"icd_10\" autocomplete=\"off\" placeholder=\"Select ICD Code\" value=\"\" />";
		echo "<div id=\"suggestions-container\" style=\"position: relative; float: left; width: 400px; margin: 10px;\"></div>";
	} 
	else{ 
	$icd_q=mysql_query("SELECT * FROM icd_10 WHERE icd_id='$value'");
	$icd_r=mysql_fetch_object($icd_q);
	$icd_value=$icd_r->icd10_4." ".$icd_r->disease;
	$onclk="changing('".$field_id."')";
	echo $icd_value;
	echo "<input id=\"aa\" type=\"button\" onclick=\"".$onclk."\" value=\"Click to Update\" />";
	echo "<input type=\"hidden\" name=\"".$field_id."\" id=\"".$field_id."\" class=\"\" autocomplete=\"off\" placeholder=\"Select ICD Code\" value=\"".$value."\" />";
	echo "<div id=\"suggestions-container\" style=\"position: relative; float: left; width: 400px; margin: 10px;\"></div>";
	}*/
}

?>
