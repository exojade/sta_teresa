<?php

    require("includes/config.php");
    require("includes/uuid.php");
    require("includes/checkhit.php");
	
	
		
		
		$request = $_SERVER['REQUEST_URI'];
		$constants = get_defined_constants();
		$request = explode('/sta_teresa',$request);
		$request = $request[1];
		$request = explode('?',$request);
		$request = $request[0];
		$request = explode('/',$request);
		$request = $request[1];
		
		$countering = array("login", "register", "soa");
		
		if (!in_array($request, $countering)){
			if(empty($_SESSION["sta_teresa"]["userid"]) && empty($_SESSION["sta_teresa"]["application"])){
				require 'public/login_system/login.php';
			}
			else{
				if($request == 'index' || $request == '/')
					require 'public/dashboard_system/main.php';
				else if ($request == 'users')
					require 'public/users_system/users.php';
				else if ($request == 'logout')
					require 'logout.php';
				else if ($request == 'burial_contract')
					require 'public/burial_contract_system/burial_contract.php';
				else if ($request == 'soa')
					require 'public/soa_system/soa.php';
				else
					require 'public/404_system/404.php';
			}
		}
		else{
			
			if ($request == 'login')
				require 'public/login_system/login.php';

			if ($request == 'soa')
				require 'public/soa_system/soa.php';
			
			else if ($request == 'register')
				require 'public/register_system/register.php';
		}
		
		
			
		
?>
