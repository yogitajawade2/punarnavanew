<?php
		function validate_admin()
		{
			$errors = array();
			
			if(empty($_POST['password']))
			{
				$errors['pass'] = "Please enter password<br>";
			}
			elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password']))
			{
				$errors['pass'] = "Please enter valid Password";
			}
			if(empty($_POST['email']))
			{
				$errors['ema'] = "Please enter email address<br>";
			}
			elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['ema'] = "Please enter valid email address";
			}
						
			return $errors;
	}


		function validate_operator()
		{
			$errors = array();
		
			if(empty($_POST['email']))
			{
				$errors['email'] = "Please enter email address<br>";
			}
			elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = "Please enter valid email address";
			}
			
			if(empty($_POST['password']))
			{
				$errors['pass'] = "Please enter password<br>";
			}
			elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password']))
			{
				$errors['pass'] = "Please enter valid Password";
			}
						
			return $errors;
	}


		function validate_main_operator()
		{
			$errors = array();
		
			if(empty($_POST['email']))
			{
				$errors['email'] = "Please enter email address<br>";
			}
			elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = "Please enter valid email address";
			}
			
			if(empty($_POST['password']))
			{
				$errors['pass'] = "Please enter password<br>";
			}
			elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password']))
			{
				$errors['pass'] = "Please enter valid Password";
			}
						
			return $errors;
	}



   function  validate_editphoto() 
		{
			$errors = array();
		    if (empty($_POST['caption']))
			{
				$errors['cap'] = "Please enter caption<br>";
			}
			 if (empty($_POST['caption2']))
			{
				$errors['cap2'] = "Please enter caption<br>";
			}
			 if (empty($_POST['caption3']))
			{
				$errors['cap3'] = "Please enter caption<br>";
			}
			 if (empty($_POST['caption4']))
			{
				$errors['cap4'] = "Please enter caption<br>";
			}
			 if (empty($_POST['caption5']))
			{
				$errors['cap5'] = "Please enter caption<br>";
			}
				
			
		    return $errors;
	   }
	 

	
//admin_registration  page validation
     
	    function  validate_register() 
		{
			$errors = array();
		    if (empty($_POST['name']))
			{
				$errors['n1'] = "Please enter full name<br>";
			}
					
			if(empty($_POST['email']))
			{
		       $errors['e'] = "Please enter email address";
			}
			elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['e'] = "Please enter valid email address";
			}
			
			if(empty($_POST['mobile']))
			{
				$errors['mo'] = "Please enter mobile";
			}

			if(empty($_POST['password']))
			{
				$errors['p'] = "Please enter password";
			}
			
			
		
		    return $errors;
	   }
	   
	   
	   function  validate_image() 
		{
			$errors = array();
		    if (empty($_POST['caption']))
			{
				$errors['caption'] = "Please enter image title<br>";
			}
					
			if (empty($_FILES['image1']['name']))
			{
			    $errors['image1']="Please select image.<br>";
			}
			elseif($_FILES['image1']['error']==0)
			{
			    $types=array('image/jpg','image/jpeg','image/gif','image/png');
			    if(!in_array($_FILES['image1']['type'],$types))
			    $errors['image1']="please select photo of type only jpeg,jpg, png, gif.<br>";
			}
		   
		       if (empty($_POST['caption2']))
			{
				$errors['caption2'] = "Please enter image title<br>";
			}
					
			if (empty($_FILES['image2']['name']))
			{
			    $errors['image2']="Please select image.<br>";
			}
			elseif($_FILES['image2']['error']==0)
			{
			    $types=array('image/jpg','image/jpeg','image/gif','image/png');
			    if(!in_array($_FILES['image2']['type'],$types))
			    $errors['image2']="please select photo of type only jpeg,jpg, png, gif.<br>";
			}
		   
		   if (empty($_POST['caption3']))
			{
				$errors['caption3'] = "Please enter image title<br>";
			}
					
			if (empty($_FILES['image3']['name']))
			{
			    $errors['image3']="Please select image.<br>";
			}
			elseif($_FILES['image3']['error']==0)
			{
			    $types=array('image/jpg','image/jpeg','image/gif','image/png');
			    if(!in_array($_FILES['image3']['type'],$types))
			    $errors['image3']="please select photo of type only jpeg,jpg, png, gif.<br>";
			}
		   
		   if (empty($_POST['caption4']))
			{
				$errors['caption4'] = "Please enter image title<br>";
			}
					
			if (empty($_FILES['image4']['name']))
			{
			    $errors['image4']="Please select image.<br>";
			}
			elseif($_FILES['image4']['error']==0)
			{
			    $types=array('image/jpg','image/jpeg','image/gif','image/png');
			    if(!in_array($_FILES['image4']['type'],$types))
			    $errors['image4']="please select photo of type only jpeg,jpg, png, gif.<br>";
			}
		   
		   if (empty($_POST['caption5']))
			{
				$errors['caption5'] = "Please enter image title<br>";
			}
					
			if (empty($_FILES['image5']['name']))
			{
			    $errors['image5']="Please select image.<br>";
			}
			elseif($_FILES['image5']['error']==0)
			{
			    $types=array('image/jpg','image/jpeg','image/gif','image/png');
			    if(!in_array($_FILES['image5']['type'],$types))
			    $errors['image5']="please select photo of type only jpeg,jpg, png, gif.<br>";
			}
			
		
		    return $errors;
	   }
	   
	   function validate_register_farmers(){
	   	$errors = array();
	   	   	if (($_POST['main_operator_id'])== -1)
			{
				$errors['main_operator_id'] = "Please Select City Location Name <br>";
			}
		
		  	if (($_POST['operator_id'])== -1)
			{
				$errors['operator_id'] = "Please Select Taluka Name <br>";
			}
		

		    if (empty($_POST['name']))
			{
				$errors['n1'] = "Please enter Name<br>";
			}
					
			
			if(empty($_POST['mobile']))
			{
				$errors['p'] = "Please enter mobile No";
			}
			
			
			if(empty($_POST['aadharno']))
				{
					$errors['aa'] = "Please enter aadharno.";
				}

		 if(empty($_POST['password']))
				{
					$errors['password'] = "Please enter password.";
				}
		
		    return $errors;
		 }   
	   
 function validate_register_farmer_edit(){
	   	$errors = array();

            if (($_POST['main_operator_id'])== -1)
			{
				$errors['main_operator_id'] = "Please Select City Location Name <br>";
			}
		
		  	if (($_POST['operator_id'])== -1)
			{
				$errors['operator_id'] = "Please Select Taluka Name <br>";
			}
			      	
		    if (empty($_POST['name']))
			{
				$errors['n1'] = "Please enter Name<br>";
			}
					
			
			if(empty($_POST['mobile']))
			{
				$errors['p'] = "Please enter mobile No";
			}
			
			
			if(empty($_POST['aadharno']))
				{
					$errors['aa'] = "Please enter aadharno.";
				}
		
		    return $errors;
	  
	   }

function validate_operator_farmer_edit(){
	   	$errors = array();

            if (($_POST['main_operator_id'])== -1)
			{
				$errors['main_operator_id'] = "Please Select City Location Name <br>";
			}
		
		  	if (($_POST['operator_id'])== -1)
			{
				$errors['operator_id'] = "Please Select Taluka Name <br>";
			}
			      	
		    if (empty($_POST['name']))
			{
				$errors['n1'] = "Please enter Name<br>";
			}
					
			
			if(empty($_POST['mobile']))
			{
				$errors['p'] = "Please enter mobile No";
			}	
			
			if(empty($_POST['aadharno']))
				{
					$errors['aa'] = "Please enter aadharno.";
				}
		
		    return $errors;
	  
	   }


	   function add_commodity(){
  	      $errors = array();
  	        if (($_POST['farmer_id'])== -1)
			 {
				$errors['farmer_id'] = "Please Select Farmer Name <br>";
			 }

  	        if (($_POST['id'])== -1)
			 {
				$errors['id'] = "Please Select Commodity Name <br>";
			 }
		
     		if(empty($_POST['quantity']))
			{
		       $errors['qt'] = "Please enter quantity";
			}
			
           if(($_POST['cities_id'])== -1)
			{
				$errors['cities_id'] = "Please enter City";
			}
			

			if(($_POST['taluka_id'])== -1)
			{
				$errors['lc'] = "Please enter Taluka";
			}
			
			if(($_POST['grade'])== -1)
				{
					$errors['gr'] = "Please enter grade";
				}
			if(empty($_POST['duration_from']))
				{
					$errors['df'] = "Please enter Duration";
				}
			if(empty($_POST['duration_to']))
				{
					$errors['dt'] = "Please enter Duration";
				}
			if(empty($_POST['price']))
				{
					$errors['pr'] = "Please enter Price.";
				}
			if(empty($_POST['description']))
				{
					$errors['ds'] = "Please enter Description.";
				}
			if(empty($_FILES['image']['name']))
			  {
				$errors['image']="please select photo.<br>";
			  }
             elseif($_FILES['image']['error']==0)
			  {
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['image']['type'],$types))
				 $errors['image']="please select photo of type only jpeg ,png, gif.<br>";
			  }
  
  return $errors;
  }

 function edit_commodity(){
  	      $errors = array();
   if (($_POST['farmer_id'])== -1)
			 {
				$errors['farmer_id'] = "Please Select Farmer Name <br>";
			 }

  	        if (($_POST['id'])== -1)
			 {
				$errors['id'] = "Please Select Commodity Name <br>";
			 }
		
     		if(empty($_POST['quantity']))
			{
		       $errors['qt'] = "Please enter quantity";
			}
			
           if(($_POST['cities_id'])== -1)
			{
				$errors['cities_id'] = "Please enter City";
			}
			

			if(($_POST['taluka_id'])== -1)
			{
				$errors['lc'] = "Please enter Taluka";
			}
			
			if(($_POST['grade'])== -1)
				{
					$errors['gr'] = "Please enter grade";
				}
			if(empty($_POST['duration_from']))
				{
					$errors['df'] = "Please enter Duration";
				}
			if(empty($_POST['duration_to']))
				{
					$errors['dt'] = "Please enter Duration";
				}
			if(empty($_POST['price']))
				{
					$errors['pr'] = "Please enter Price.";
				}
			if(empty($_POST['description']))
				{
					$errors['ds'] = "Please enter Description.";
				}
			// if($_FILES['image']['error']==0)
			//   {
			// 	$types=array('image/jpeg','image/gif','image/png');
			// 	if(!in_array($_FILES['image']['type'],$types))
			// 	 $errors['image']="please select photo of type only jpeg ,png, gif.<br>";
			//   }
           
       return $errors;
  }

function operator_edit_commodity(){
  	      $errors = array();
   if (($_POST['farmer_id'])== -1)
			 {
				$errors['farmer_id'] = "Please Select Farmer Name <br>";
			 }

  	        if (($_POST['id'])== -1)
			 {
				$errors['id'] = "Please Select Commodity Name <br>";
			 }
		
     		if(empty($_POST['quantity']))
			{
		       $errors['qt'] = "Please enter quantity";
			}
			
           if(($_POST['cities_id'])== -1)
			{
				$errors['cities_id'] = "Please enter City";
			}
			

			if(($_POST['taluka_id'])== -1)
			{
				$errors['lc'] = "Please enter Taluka";
			}
			
			if(($_POST['grade'])== -1)
				{
					$errors['gr'] = "Please enter grade";
				}
			if(empty($_POST['duration_from']))
				{
					$errors['df'] = "Please enter Duration";
				}
			if(empty($_POST['duration_to']))
				{
					$errors['dt'] = "Please enter Duration";
				}
			if(empty($_POST['price']))
				{
					$errors['pr'] = "Please enter Price.";
				}
			if(empty($_POST['description']))
				{
					$errors['ds'] = "Please enter Description.";
				}
			// if($_FILES['image']['error']==0)
			//   {
			// 	$types=array('image/jpeg','image/gif','image/png');
			// 	if(!in_array($_FILES['image']['type'],$types))
			// 	 $errors['image']="please select photo of type only jpeg ,png, gif.<br>";
			//   }
       return $errors;
  }
// category validations
 function category(){
  	      $errors = array();
		    if (empty($_POST['category']))
			{
				$errors['c'] = "Please enter category name<br>";
			}
            if(empty($_FILES['category_image']['name']))
			{
				$errors['category_image']="please upload commodity category photo.<br>";
			}
            elseif($_FILES['category_image']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['category_image']['type'],$types))
				 $errors['category_image']="please select photo of type only jpeg ,png, gif.<br>";
			}
  return $errors;
  }

// edit category
 function category_edit(){
  	      $errors = array();
		    if (empty($_POST['category']))
			{
				$errors['c'] = "Please enter category name<br>";
			}
			// if($_FILES['category_image']['error']==0)
			// {
			// 	$types=array('image/jpeg','image/gif','image/png');
			// 	if(!in_array($_FILES['category_image']['type'],$types))
			// 	 $errors['category_image']="please select photo of type only jpeg ,png, gif.<br>";
			// }
  return $errors;
  }

// commodity validations
 function commodity(){
  	      $errors = array();
		    if (empty($_POST['commodity']))
			{
				$errors['n1'] = "Please enter Commodity name<br>";
			}
			if (($_POST['category_id']) == -1)
			{
				$errors['c'] = "Please select category name<br>";
			}
  return $errors;
  }

 // commodity edit validations
 function commodity_edit(){
  	      $errors = array();
		    if (empty($_POST['commodity']))
			{
				$errors['n1'] = "Please enter Commodity name<br>";
			}
			if (($_POST['category_id']) == -1)
			{
				$errors['c'] = "Please select category name<br>";
			}
  return $errors;
  }

// For city validations
function city(){
  	      $errors = array();
		    if (empty($_POST['city']))
			{
				$errors['n1'] = "Please enter City name<br>";
			}

  return $errors;
  }

 function city_edit(){
  	      $errors = array();
		    if (empty($_POST['city']))
			{
				$errors['n1'] = "Please enter City name<br>";
			}

  return $errors;
  }

//For Taluka validations
function taluka(){
  	      $errors = array();
		    if (empty($_POST['taluka']))
			{
				$errors['n1'] = "Please enter Taluka name<br>";
			}

  return $errors;
  }

 function taluka_edit(){
  	      $errors = array();
		    if (empty($_POST['taluka']))
			{
				$errors['n1'] = "Please enter Taluka name<br>";
			}

  return $errors;
  }


// for operator add
function add_operators()
{
  	$errors = array();
  	        
		    if (($_POST['main_operator_id'])== -1)
			{
				$errors['main_operator_id'] = "Select enter Main Operator name<br>";
			}

		    if (empty($_POST['name']))
			{
				$errors['name'] = "Please enter Operator name<br>";
			}

				if(empty($_POST['email']))
			{
		       $errors['email'] = "Please enter email address";
			}
			elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = "Please enter valid email address";
			}
		
			
            if(empty($_POST['taluka']))
			{
					$errors['taluka'] = "Please enter Taluka";
			}

            
			if(empty($_POST['mobile']))
			{
		       $errors['mobile'] = "Please enter Mobile No";
			}
						
					
			
			if(empty($_POST['password']))
			{
				$errors['password'] = "Please enter Password";
			}

			if(empty($_FILES['photo']['name']))
			{
				$errors['photo']="please select photo.<br>";
			}
            elseif($_FILES['photo']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['photo']['type'],$types))
				 $errors['photo']="please select photo of type only jpeg ,png, gif.<br>";
			}
  
            return $errors;
  }


// edit operator
function edit_operators()
{
  	$errors = array();
 	        
		    if (($_POST['main_operator_id'])== -1)
			{
				$errors['main_operator_id'] = "Select enter Main Operator name<br>";
			}

		    if (empty($_POST['name']))
			{
				$errors['name'] = "Please enter Operator name<br>";
			}
			
            if(empty($_POST['taluka']))
			{
					$errors['taluka'] = "Please enter Taluka";
			}


			if(empty($_POST['mobile']))
			{
		       $errors['mobile'] = "Please enter Mobile No";
			}
								
		
          return $errors;
  }

// edit operator
function operators_admin_edit()
{
  	$errors = array();
 	        
		  
		    if (empty($_POST['name']))
			{
				$errors['name'] = "Please enter Operator name<br>";
			}
			
			  if (empty($_POST['email']))
			{
				$errors['email'] = "Please enter email address<br>";
			}
		
            if(empty($_POST['taluka']))
			{
					$errors['taluka'] = "Please enter Taluka";
			}


			if(empty($_POST['mobile']))
			{
		       $errors['mobile'] = "Please enter Mobile No";
			}
								
		
          return $errors;
  }


// for main operator add
function add_main_operators()
{
  	$errors = array();
		    if (empty($_POST['main_name']))
			{
				$errors['op'] = "Please enter Main Operator name<br>";
			}
			elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['main_name']))
			{
			  $errors['op']="Please enter valid Main Operator Name";
			}
					
			if(empty($_POST['mobile']))
			{
		       $errors['mo'] = "Please enter Mobile No";
			}
						
					
			if(empty($_POST['cities']))
			{
					$errors['lo'] = "Please enter City Location";
			}
			elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['cities']))
			{
			  $errors['lo']="Please enter valid City Name";
			}

			if(empty($_POST['password']))
			{
				$errors['co'] = "Please enter Password";
			}

			if(empty($_FILES['photo1']['name']))
			{
				$errors['photo1']="please select photo.<br>";
			}
            elseif($_FILES['photo1']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['photo1']['type'],$types))
				 $errors['photo1']="please select photo of type only jpeg ,png, gif.<br>";
			}
  
            return $errors;
  }

// for main operator edit
function edit_main_operators()
{
  	$errors = array();
		    if (empty($_POST['main_name']))
			{
				$errors['op'] = "Please enter Main Operator name<br>";
			}
					
			if(empty($_POST['cities']))
			{
					$errors['lo'] = "Please enter City Location";
			}
			
			if(empty($_POST['mobile']))
			{
		       $errors['mo'] = "Please enter Mobile No";
			}
			
		
            return $errors;
  }


//For Change Password
function validate_pass()
{
	$errors=array();
	if(empty($_POST['old_pass']))
	{
		$errors['old_pass'] = "Please enter old Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['old_pass']))
	{
		$errors['old_pass'] = "Please enter valid Password";
	}
	if(empty($_POST['new_pass']))
	{
		$errors['new_pass'] = "Please enter Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['new_pass']))
	{
		$errors['new_pass'] = "Please enter valid Password";
    }
		if(empty($_POST['re_pass']))
	{
		$errors['re_pass'] = "Please enter correct Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['re_pass'])){
		$errors['re_pass'] = "Please enter valid Password";
	}
    return $errors;
}

//For Change Password
function validate_operator_pass()
{
	$errors=array();
	if(empty($_POST['old_pass']))
	{
		$errors['old_pass'] = "Please enter old Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['old_pass']))
	{
		$errors['old_pass'] = "Please enter valid Password";
	}
	if(empty($_POST['new_pass']))
	{
		$errors['new_pass'] = "Please enter Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['new_pass']))
	{
		$errors['new_pass'] = "Please enter valid Password";
    }
		if(empty($_POST['re_pass']))
	{
		$errors['re_pass'] = "Please enter correct Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['re_pass'])){
		$errors['re_pass'] = "Please enter valid Password";
	}
    return $errors;
}

 
function add_total_quantity(){
	   	$errors = array();
		  	if (($_POST['operator_id'])== -1)
			{
				$errors['operator_id'] = "Please Select Operator Name <br>";
			}
		
		    if (($_POST['id'])== -1)
			{
				$errors['id'] = "Please enter Name <br>";
			}				
			
			if(empty($_POST['total_quantity']))
			{
				$errors['total_quantity'] = "Please enter total quantity";
			}

			if(empty($_POST['total_price']))
			{
				$errors['total_price'] = "Please enter total quantity";
			}

					   
			if(empty($_FILES['total_photo']['name']))
			  {
				$errors['total_photo']="please select photo.<br>";
			  }
             elseif($_FILES['total_photo']['error']==0)
			  {
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['total_photo']['type'],$types))
				 $errors['total_photo']="please select photo of type only jpeg ,png, gif.<br>";
			  }
		    return $errors;
		 }   	   

function edit_total_quantity(){
	   	$errors = array();
		  	if (($_POST['operator_id'])== -1)
			{
				$errors['operator_id'] = "Please Select Operator Name <br>";
			}
		
		    if (($_POST['id'])== -1)
			{
				$errors['id'] = "Please enter Name <br>";
			}				
			
			if(empty($_POST['total_quantity']))
			{
				$errors['total_quantity'] = "Please enter total quantity";
			}

			if(empty($_POST['total_price']))
			{
				$errors['total_price'] = "Please enter total quantity";
			}
					   
        /*    if($_FILES['total_photo']['error']==0)
			  {
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['total_photo']['type'],$types))
				 $errors['total_photo']="please select photo of type only jpeg ,png, gif.<br>";
			  }
		*/    return $errors;
		 }   
		 
		 
// blog section validation
function validate_blog()
{
    $error = array();
    
  	if (empty($_FILES['blogimg']['name']))
			{
			    $errors['blogimg']="Please select image.<br>";
			}
			elseif($_FILES['blogimg']['error']==0)
			{
			    $types=array('image/jpg','image/jpeg','image/gif','image/png');
			    if(!in_array($_FILES['blogimg']['type'],$types))
			    $errors['blogimg']="please select photo of type only jpeg,jpg, png, gif.<br>";
			}
		   
    if(empty($_POST['heading']))
    {
        $errors['heading']="Please enter Heading ";
    }
    elseif (!preg_match("#^[-A-Za-z ]*$#", $_POST['heading']))
    {
		$errors['heading']="Please enter valid Heading ";
	}
	
    if(empty($_POST['date']))
    {
        $errors['date']="Please enter date";
    }
    
    // if(empty($_POST['expire_date']))
    // {
    //     $errors['expire_date']="Please enter expire date";
    // }
    
    if(empty($_POST['abstract']))
    {
        $errors['abstract']="Please enter Abstract ";
    }
//     elseif (!preg_match("#^[-A-Za-z ]*$#", $_POST['abstract']))
//     {
// 		$errors['abstract']="Please enter valid Abstract ";
// 	}
    
	if(empty($_FILES['pdf']['name']))
	  {
		$errors['pdf']="Please select pdf type document.<br>";
	  }
     elseif($_FILES['pdf']['error']==0)
	  {
		$types=array('application/pdf');
		if(!in_array($_FILES['pdf']['type'],$types))
		 $errors['pdf']="please select pdf of type only pdf.<br>";

	  }
	  
	  
	return $errors;
}

?>


