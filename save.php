<?php 

    //config
    $config = array(
        
		"db_host" => "localhost:3306",
        "db_login"      => "aletc_aletc",
        "db_passwd" => "jg#5cd99"
	
    );

    //connecting to the database
    $conn = mysqli_connect($config['db_host'],$config['db_login'],$config['db_passwd']);
    if(mysqli_connect_errno()){
        printf("Boohoo. Connect failed: %s\n", mysqli_connect_error());
    }else{
		echo "connected";
	}

?>