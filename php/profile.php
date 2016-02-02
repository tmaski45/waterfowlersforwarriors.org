<?php
	require_once("Database.php");
	require_once("Mail.php");

	class Profile {
		
		private $db;
		
		function __construct() {
			//$config =parse_ini_file ("database_config.ini");
			
			//$this->db  = new OBJ_mysql($config);
	   	}
		
		public function saveProfile($profile) {
			$mail = new Mail("New Veteran Profile", "tmaski45@gmail.com"); //, sfbf6667@yahoo.com, zach.fowler91@gmail.com
				
			$mail->body .= "Name: " . $profile["firstname"] . " " . $profile["lastname"] . "\r\n";
			$mail->body .= "DOB: " . $profile["dob"] . "\r\n";
			$mail->body .= "Address: " . $profile["address"] . "\r\n";
			$mail->body .= "City: " . $profile["city"] . "\r\n";
			$mail->body .= "State: " . $profile["state"] . "\r\n";
			$mail->body .= "Zip: " . $profile["zip"] . "\r\n";
			$mail->body .= "Email: " . $profile["email"] . "\r\n";
			$mail->body .= "Phone: " . $profile["phone"] . "\r\n";
			$mail->body .= "Branch: " . $profile["branch"] . "\r\n";
			$mail->body .= "Rank: " . $profile["rank"] . "\r\n";
			$mail->body .= "Medals Awarded: " . $profile["medalsawarded"] . "\r\n";
			$mail->body .= "Theatres / Conflicts: " . $profile["theatresconflicts"] . "\r\n";
			$mail->body .= "Injuries: " . $profile["injuries"] . "\r\n";
			$mail->body .= "Date of Injuries: " . $profile["dateofinjuries"] . "\r\n";
			$mail->body .= "Date of Discharge: " . $profile["dateofdischarge"] . "\r\n";
			$mail->body .= "Disability rating: " . $profile["disabilityrating"] . "\r\n";
			$mail->body .= "Gender: " . $profile["gender"] . "\r\n";
			$mail->body .= "Active: " . $profile["active"] . "\r\n";
			$mail->body .= "Reservist: " . $profile["reservist"] . "\r\n";
			$mail->body .= "Wheelchair: " . $profile["wheelchair"] . "\r\n";
			$mail->body .= "Brain: " . $profile["brain"] . "\r\n";
			$mail->body .= "Motion Sickness: " . $profile["motionsickness"] . "\r\n";
			$mail->body .= "Temperature Toleration: " . $profile["temperaturetoleration"] . "\r\n";
			$mail->body .= "Inclement Weather: " . $profile["inclementweather"] . "\r\n";
			$mail->body .= "PTSD: " . $profile["ptsd"] . "\r\n";
			$mail->body .= "May We Contact You: " . $profile["maywecontactyou"] . "\r\n";
                
            if(isset($profile["Big_Game_hunding_Archery"])){
                $mail->body .= "Interested in Big Game hunding Archery. \r\n";
            }

            if(isset($profile["Big_Game_Hunting_ML"])){
                $mail->body .= "Interested in Big Game Hunting ML. \r\n";
            }

            if(isset($profile["Big_Game_Hunting_Rifle"])){
                $mail->body .= "Interested in Big Game Hunting Rifle. \r\n";
            }

            if(isset($profile["Upland_Bird_Hunting"])){
                $mail->body .= "Interested in Upland Bird Hunting. \r\n";
            }

            if(isset($profile["Waterfowl_Hunting_Marsh"])){
                $mail->body .= "Interested in Waterfowl Hunting Marsh. \r\n";
            }

            if(isset($profile["Waterfowl_Hunting_Layout"])){
                $mail->body .= "Interested in Waterfowl Hunting Layout. \r\n";
            }

            if(isset($profile["Turkey_Hunting"])){
                $mail->body .= "Interested in Turkey Hunting. \r\n";
            }

            if(isset($profile["Lake_Fishing_Trolling"])){
                $mail->body .= "Interested in Lake Fishing Trolling. \r\n";
            }

            if(isset($profile["River_Fishing"])){
                $mail->body .= "Interested in River Fishing. \r\n";
            }

            if(isset($profile["Fly_Fishing"])){
                $mail->body .= "Interested in Fly Fishing. \r\n";
            }

            if(isset($profile["Small_Game_Hunting"])){
                $mail->body .= "Interested in Small Game Hunting. \r\n";
            }

            if(isset($profile["Trapping"])){
                $mail->body .= "Interested in Trapping. \r\n";
            }

            if(isset($profile["Hiking"])){
                $mail->body .= "Interested in Hiking. \r\n";
            }

            if(isset($profile["Camping"])){
                $mail->body .= "Interested in Camping. \r\n";
            }

            if(isset($profile["ATV_Motorcycle_Riding"])){
                $mail->body .= "Interested in ATV Motorcycle Riding. \r\n";
            }

            if(isset($profile["Boating"])){
                $mail->body .= "Interested in Boating. \r\n";
            }

            if(isset($profile["Shooting"])){
                $mail->body .= "Interested in Shooting. \r\n";
            }

            if(isset($profile["Golf"])){
                $mail->body .= "Interested in Golf. \r\n";
            }

            if(isset($profile["Out_of_State_Travel"])){
                $mail->body .= "Interested in Out of State Travel. \r\n";
            }


			$mail->body .= "Additional Comments: " . $profile["additionalcomments"] . "\r\n";
				
			$mail->send();
		}
	}
?>