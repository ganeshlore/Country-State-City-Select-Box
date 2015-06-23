<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<title>Country-State-City-Select-Box</title>
</head>

<body>
<div class="row">
                            <div class="col-sm-8">
								   
                                 <select class="form-control form-group-margin" id="country">
										
										
				                 </select>
							</div>
                            <div class="col-sm-4">
                            <div class="btn btn-danger" id="bcountry" style="width:100%">Block Country</div>
                            </div>
                        </div>
                         
                         <div class="row">
                            <div class="col-sm-8">
								   
                                 <select class="form-control form-group-margin" id="state">
										
										
				                 </select>
							</div>
                            <div class="col-sm-4">
                            <div class="btn btn-danger" id="bstate" style="width:100%">Block State</div>
                            </div>
                         </div>
                        
                         <div class="row">
                            <div class="col-sm-8">
								   
                                 <select class="form-control form-group-margin" id="city">
										
										
				                 </select>
							</div>
                            <div class="col-sm-4">
                            <div class="btn btn-danger" id="bcity" style="width:100%">Block City</div>
                            </div>
                       </div>
</body>
<script>

fcountry("country","country"); //// function call for country

$("select[id=country]").change(function() {
	  
	   var country = $(this).val(); /// we pass country we get state of that
	   fcountry("state","state",country);   //// function call for state
	   
	   $("select[id=city]").html('');  // first set value none for
	   
})

$("select[id=state]").change(function() {
	
	   $("select[id=city]").html(''); // first set value none
	   
	   var country = $("select[id=country]").val(); /// we pass country we get state of that
	   var state = $(this).val(); /// we pass state we get city of that
	   fcountry("city","city",country,state); //// function call for city
})


function fcountry(canvas,type,country,state){
	
	if(typeof country !=='undefined'){
		
		var dcountry = country;
	}else{
		var dcountry = '';
	}
	if(typeof state   !=='undefined'){
		
		var dstate  = state;
	}else{
		var dstate  = '';
	}
	
	
	var pdata = {'area': type,'country_id':dcountry, 'state_id':dstate};
	
	//var creator =  $.cookie("uemail");
	var MySelectBox = '<option value="none">Select</option>';
	$.ajax({
			  url: 'http://ganeshlore.com/projects/country_state_city_select_box/country_state_city_api.php',
			  type: 'POST',
			  data: pdata,
			  dataType:"xml",
			  success: function(xml) {
				//called when successful
				$(xml).find('root').each(function(index, element) {
                    
					$(this).find('object').each(function(index, element) {
						
						var obj_id   = $(this).find('id').text();
						var obj_name = $(this).find('name').text();
						
						MySelectBox +='<option value="'+obj_id+'">'+obj_name+'</option>';
					})
					
					
                });
				
				$("#"+canvas).html(MySelectBox);
			  },
			  error: function(err) {
				//called when there is an error
				alert(err.message);
			  }
	});
}

</script>
</html>