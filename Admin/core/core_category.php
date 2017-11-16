<?php

    // TO GET ADMIN NAME TO FILL CREATOR_NAME
    $admin = "josh";

    //FOR TIME & DATE IN DATABASE
    date_default_timezone_set("Africa/Lagos");
    $date=date('M-jS-Y');
    $time=date('g:i A');

    if (isset($_POST["submit"])) {
        $category = secure_input($_POST["category"]);
      
             
     //Check if category exists
		$sql = "SELECT id,category FROM category WHERE category='".$_POST['category']."'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if($row['category']==$_POST['category']){
            $err_msg = '<div class="alert alert-danger">
                                <strong>Oopps!</strong> category already exists.
                        </div>';
            
        } else{

    	// SQL INSERT INTO TABLE
		$sql = "INSERT INTO category (category, creatorName, date, time)
			VALUES ('$category','$admin','$date','$time')";

            if ($conn->query($sql) === TRUE){
                $succ_msg=	'<div class="alert alert-success">
                                    <strong>Success!</strong> New category created.
                            </div>';
            } else{
                echo "Error.". $sql."<br>" . $conn->error;
            }

	   }
        
        
        
    }

ini_set('display_errors', '0'); 		# don't show any errors...
error_reporting(E_ALL | E_STRICT); 		# ...but do log them



?>