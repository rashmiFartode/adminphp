<?php
	function validate_login()
	{
		$errors=array();
		
		if(empty($_POST['email']))
		{
			$errors['e'] = "Please enter email address";
		}
		elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		{
			$errors['e'] = "Please enter valid email address";
		}
		if(empty($_POST['password']))
		{
			$errors['p'] = "Please enter Password";
		}
		elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password']))
			$errors['p'] = "Please enter valid Password";
	return $errors;
	}

function validate_signup()
{
  $errors=array();
  if(empty($_POST['first_name']))
  { 
    $errors['fn']="Please enter your First Name";
  }
  elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['first_name']))
  {
    $errors['fn']="Please enter valid First Name";
  }
   if(empty($_POST['last_name']))
  { 
    $errors['ln']="Please enter your Last Name";
  }
  elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['last_name']))
  {
    $errors['ln']="Please enter valid Last Name";
  }
  if(empty($_POST['email']))
  { 
    $errors['em']="Please enter your Email Address";
  }
  elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
    $errors['em']="Please enter valid Email Address";
  }
  if(empty($_POST['mobile_no']))
	{ 
		$errors['mob_no']="Please enter Mobile No.";
	}
	elseif(!preg_match("#^[-0-9' ]*$#",$_POST['mobile_no'])){
	$errors['mob_no']="Enter valid Mobile No.";
	}
  if(empty($_POST['password']))
  {
	$errors['p'] = "Please enter Password";
  }
  elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password'])){
		$errors['p'] = "Please enter valid Password";
	}
  return $errors;
  }
  
  function validate_signup_edit()
{
  $errors=array();
  if(empty($_POST['first_name']))
  { 
    $errors['fn']="Please enter your First Name";
  }
  elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['first_name']))
  {
    $errors['fn']="Please enter valid First Name";
  }
   if(empty($_POST['last_name']))
  { 
    $errors['ln']="Please enter your Last Name";
  }
  elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['last_name']))
  {
    $errors['ln']="Please enter valid Last Name";
  }
  if(empty($_POST['email']))
  { 
    $errors['em']="Please enter your Email Address";
  }
  elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
    $errors['em']="Please enter valid Email Address";
  }
  
  if(empty($_POST['mobile_no']))
	{ 
		$errors['mob_no']="Please enter Mobile No.";
	}
	elseif(!preg_match('/^\d{10}$/', $_POST['mobile_no'] )){
	$errors['mob_no']="Enter valid Mobile No.";
	}
  
  return $errors;
  }
  
  function validate_edit()
{
  $errors=array();
  if(empty($_POST['first_name']))
  { 
    $errors[]="please enter your first_name";
  }
  elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['first_name']))
  {
    $errors[]="please enter valid first_name";
  }
   if(empty($_POST['last_name']))
  { 
    $errors[]="please enter your last_name";
  }
  elseif(!preg_match("#^[-A-Za-z]*$#",$_POST['last_name']))
  {
    $errors[]="please enter valid last_name";
  }
  if(empty($_POST['email']))
  { 
    $errors[]="please enter your email address";
  }
  elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
    $errors[]="please enter valid name";
  }
  return $errors;
  }
  
  // add rj validation
  function validate_add_rj()
  {
  $errors=array();
  if(empty($_POST['rj_email']))
  { 	
    $errors['e']="Please Enter Your Email Address";
}  
 elseif(!filter_var($_POST['rj_email'],FILTER_VALIDATE_EMAIL))
{
  $errors['e']="Please Enter Valid Email Address";
  }
  if(empty($_POST['rj_name']))
  { 
    $errors['rjerror']="Please Enter Your Name";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['rj_name']))
  {
    $errors['rjerror']="Please Enter Valid Name";
  }
  
  if(empty($_POST['rj_mobileno']))
  { 
    $errors['mn'] = "Please Enter Your Mobile Number";
  }
  elseif(!preg_match("#^[-0-9']*$#",$_POST['rj_mobileno']))
  {
    $errors['mn'] = "Please Enter Valid Mobile Number";
  }
   if(empty($_FILES['photo']['name']))
	{
		$errors['pic']="Please Select Photo.";
	}
	elseif($_FILES['photo']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['photo']['type'],$types))
				 $errors['pic']="Please select photo of type only jpeg ,png, gif.<br>";
			}
	if(empty($_POST['about']))
  { 
    $errors['abt']="Please Enter About Your Rj.";
  }
  
  return $errors;
  } 
// edit rj validation
  function validate_add_rj_edit()
  {
  $errors=array();
  if(empty($_POST['rj_email']))
  { 	
    $errors['e']="Please Enter Your Email Address";
}  
 elseif(!filter_var($_POST['rj_email'],FILTER_VALIDATE_EMAIL))
{
  $errors['e']="Please Enter Valid Email Address";
  }
  if(empty($_POST['rj_name']))
  { 
    $errors['rjerror']="Please Enter Your Name";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['rj_name']))
  {
    $errors['rjerror']="Please Enter Valid Name";
  }
  
  if(empty($_POST['rj_mobileno']))
  { 
    $errors['mn'] = "Please Enter Your Mobile Number";
  }
  elseif(!preg_match("#^[-0-9']*$#",$_POST['rj_mobileno']))
  {
    $errors['mn'] = "Please Enter Valid Mobile Number";
  }
  if($_FILES['photo']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['photo']['type'],$types))
				 $errors['pic']="Please select photo of type only jpeg ,png, gif.<br>";
			}
	if(empty($_POST['about']))
  { 
    $errors['abt']="Please Enter About Your Rj.";
  }
 
  return $errors;
  } 

  
  //Ad validation
    
  function validate_ad()
  {
  $errors=array();
   if(empty($_POST['add_text']))
  { 
    $errors['text']="Please Enter Your Advertisement";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['add_text']))
  {
    $errors['text']="Please Enter Valid Advertisement";
  }
   if(empty($_FILES['add_img']['name']))
	{
		$errors['pic1']="Please Select Photo.";
	}
	elseif($_FILES['add_img']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['add_img']['type'],$types))
				 $errors['pic1']="Please select photo of type only jpeg ,png, gif.<br>";
			}
   return $errors;
  }
//Ad edit validation
    
  function validate_ad_edit()
  {
  $errors=array();
   if(empty($_POST['add_text']))
  { 
    $errors['text']="Please Enter Your Advertisement";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['add_text']))
  {
    $errors['text']="Please Enter Valid Advertisement";
  }
   if($_FILES['add_img']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['add_img']['type'],$types))
				 $errors['pic1']="Please select photo of type only jpeg ,png, gif.<br>";
			}
   return $errors;
  }

  // event validation
  function validate_event()
  {
  $errors=array();
   if(empty($_POST['people_name']))
  { 
    $errors['en']="Please Enter People Name";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['event_name']))
  {
    $errors['en']="Please Enter Valid People Name";
  }
   if(empty($_FILES['people_img']['name']))
	{
		$errors['pic2']="Please Select People Photo.";
	}
	elseif($_FILES['people_img']['error']==0)
	{
		$types=array('image/jpeg','image/gif','image/png');
		if(!in_array($_FILES['people_img']['type'],$types))
		$errors['pic2']="Please select people photo of type only jpeg ,png, gif.<br>";
	}
	if(empty($_POST['people_msg']))
	{ 
		$errors['ev']="Please Enter Message.";
	}
	elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['people_msg']))
	{
		$errors['ev']="Please Enter Valid Message.";
	}
	
   return $errors;
  }
// birthday validation
  function validate_birthday()
  {
  $errors=array();
   if(empty($_POST['b_name']))
  { 
    $errors['bn']="Please Enter Birthday Member Name";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['b_name']))
  {
    $errors['bn']="Please Enter Valid Birthday Member Name";
  }
   if(empty($_FILES['b_img']['name']))
	{
		$errors['bi']="Please Select Birthday Photo.";
	}
	elseif($_FILES['b_img']['error']==0)
	{
		$types=array('image/jpeg','image/gif','image/png');
		if(!in_array($_FILES['b_img']['type'],$types))
		$errors['bi']="Please select Birthday photo of type only jpeg ,png, gif.<br>";
	}
	if(empty($_POST['b_date']))
	{ 
		$errors['b_date']="Please Select Birthday Date.";
	}
   return $errors;
  }

function validate_birthday_edit()
  {
  $errors=array();
   if(empty($_POST['b_name']))
  { 
    $errors['bn']="Please Enter Event Name";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['b_name']))
  {
    $errors['bn']="Please Enter Valid Event Name";
  }

	if($_FILES['b_img']['error']==0)
	{
		$types=array('image/jpeg','image/gif','image/png');
		if(!in_array($_FILES['b_img']['type'],$types))
		$errors['bi']="Please select Event photo of type only jpeg ,png, gif.<br>";
	}
	return $errors;
  }






//edit event validateion
function validate_event_edit()
  {
  $errors=array();
   if(empty($_POST['people_name']))
  { 
    $errors['en']="Please Enter People Name";
  }
  elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['event_name']))
  {
    $errors['en']="Please Enter Valid People Name";
  }
   if(empty($_FILES['people_img']['name']))
	{
		$errors['pic2']="Please Select People Photo.";
	}
	elseif($_FILES['people_img']['error']==0)
	{
		$types=array('image/jpeg','image/gif','image/png');
		if(!in_array($_FILES['people_img']['type'],$types))
		$errors['pic2']="Please select people photo of type only jpeg ,png, gif.<br>";
	}
	if(empty($_POST['people_msg']))
	{ 
		$errors['ev']="Please Enter Message.";
	}
	elseif(!preg_match("#^[-A-Z a-z]*$#",$_POST['people_msg']))
	{
		$errors['ev']="Please Enter Valid Message.";
	}
   return $errors;
  }

  
  //Track validation
    
  function validate_track()
  {
	  $errors=array();
	if(empty($_FILES['file']['name']))
	{
		$errors['track']="Please Select Track.";
	}
	elseif($_FILES['file']['error']==0)
			{
				$types=array('audio/mp3','audio/mpeg','audio/ogg');
				if(!in_array($_FILES['file']['type'],$types))
				 $errors['track']="Please select Track of type only MP3 ,MPEG, OGG.";
			}
   return $errors;
  }

	  //slider validation
    
  function validate_slider()
  {
	  $errors=array();
	if(empty($_FILES['s_img']['name']))
	{
		$errors['slide']= "Please Select slider image.";
	}
	elseif($_FILES['s_img']['error']==0)
			{
				$types=array('image/jpeg','image/gif','image/png');
				if(!in_array($_FILES['s_img']['type'],$types))
				$errors['slide']="Please select slider photo of type only jpeg ,png, gif.<br>";
			}
   return $errors;
  }



function validate_pass()
{
	$errors=array();
	if(empty($_POST['old_pass']))
	{
		$errors['old_pass'] = "Please enter old Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['old_pass']))
		$errors['old_pass'] = "Please enter valid Password";
	if(empty($_POST['new_pass']))
	{
		$errors['new_pass'] = "Please enter Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['new_pass']))
		$errors['new_pass'] = "Please enter valid Password";
		if(empty($_POST['re_pass']))
	{
		$errors['re_pass'] = "Please enter correct Password";
	}
	elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['re_pass']))
		$errors['re_pass'] = "Please enter valid Password";
return $errors;
}
 
    	
  	?>