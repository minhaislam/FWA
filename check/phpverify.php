
<?php
require_once('../db/database.php');


			function checkUniqueValue($value){
				// $conn=mysqli_connect('localhost','root','','fwa');		
				$conn=dbconnect();				

			$found = 0;
						$sql="select * from info where uname='{$value}' or email='{$value}'";
			$get=mysqli_query($conn,$sql);
			$user=mysqli_fetch_assoc($get);
						if($user["uname"] == $value){
							$found = 1;

						}
						if($user["email"] == $value){
							$found = 1;
						}
					
			return $found;
		}

		function funame($uname){
				if (strlen($uname)<2) {
					echo 'Atleast 2 words required';
					return false;
				}
				
		elseif(($uname[0]<'A' || $uname[0]>'Z') && ($uname[0]<'a' || $uname[0][0]>'z')){
			//alert('starts with letter');
			echo "starts with letter";
			return false;
		}
		
		return $uname;


		}
		function fpass ($pass) {
		
		
		 if(strlen($pass)<8){
			echo "must contain 8 characters";
        return false;
		}
		return $pass;
	}
	function fcpass ($cpass) {
		
		
		 if(strlen($cpass)<8){
			echo "must contain 8 characters";
        return false;
		}
		return $cpass;
	}

	/*function femail($email) {
			
   
    
    	$emailParts = explode("@",$email);
    	if(strlen($emailParts) !== 2) {
      echo "Wrong number of @ signs";
        return false;   
    }
    else{
    	 $emailName = $emailParts[0];
    $emailDomain = $emailParts[1];

    
    if(strlen($emailName)< 1 || strlen($emailDomain) < 3) {
       echo "Wrong number of @ signs";
    	return false;
    }
    else{
    	 $validChars = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','.','0','1','2','3','4','5','6','7','8','9','_','-'];

    // emailName must only include valid chars
    for($i = 0; $i < strlen($emailName); $i += 1) {
        if($validChars.indexOf($emailName.charAt(i)) < 0 ) {
            echo "Invalid character in name section";
         	return false;
        }
    }
    for( $j = 0; $j < srtlen($emailDomain); $j += 1) {
        if($validChars.indexOf($emailDomain.charAt(j)) < 0) {
             echo "Invalid character in domain section";
             return false;
        }
    }
     if(emailDomain.indexOf('.') <= 0) {
         document.getElementById('em2').innerHTML="Domain must include but not start with .";
        return false;
    }
    else{
    	 var emailDomainParts = emailDomain.split('.');
    if(emailDomainParts[emailDomainParts.length - 1].length < 2) {
         document.getElementById('em2').innerHTML="Domain's last . should be 2 chars or more from the end";
        return false;
    }
    else{
			document.getElementById('em2').innerHTML="&#10003";
			return true;
		}
    }
    }
    }
    
    return email;
}*/


		?>