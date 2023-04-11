<?php

require_once 'dbconfig.php';

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
	
	public function register($fname,$lname,$contact,$uname,$email,$upass,$education_level,$field_of_study,$programming,$programming_lang,$other_familiar_with,$experience,$rec,$expected_salary,$code)
	{
		try
		{							
			$password = md5($upass);
			$stmt = $this->conn->prepare("INSERT INTO users(fname,lname,contact,uname,userEmail,userPass,educationlevel,field_of_study,familiar_with_programming,programming_lang,other_familiar_with,experience,proven_experience,expected_salary,tokenCode) 
			                                             VALUES(:f_name,:l_name,:phone,:user_name, :user_mail, :user_pass,:education_level,:field_of_study,:programming,:checkbox,:familiar,:experience,:rec,:expected_salary,:active_code)");
			$stmt->bindparam(":f_name",$fname);
			$stmt->bindparam(":l_name",$lname);
			$stmt->bindparam(":phone",$contact);
			$stmt->bindparam(":user_name",$uname);
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":education_level",$education_level);
			$stmt->bindparam(":field_of_study",$field_of_study);
			$stmt->bindparam(":programming",$programming);
			$stmt->bindparam(":checkbox",$programming_lang);
			$stmt->bindparam(":familiar",$other_familiar_with);
			$stmt->bindparam(":experience",$experience);
			$stmt->bindparam(":rec",$rec);
			$stmt->bindparam(":expected_salary",$expected_salary);
			$stmt->bindparam(":active_code",$code);
			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM users WHERE userEmail=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() == 1)
			{
				if($userRow['userStatus']=="Y" ||$userRow['userStatus']=="N"  )
				{
					if($userRow['userPass']==md5($upass))
					{
						$_SESSION['userSession'] = $userRow['id'];
						return true;
					}
					else
					{
						header("Location: index.php?error");
						exit;
					}
				}
				else
				{
					
					header("Location: index.php?inactive");
					exit;
				}	
			}
			else
			{
				header("Location: index.php?error");
				exit;
			}		
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	

	
	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}
	
	//function send_mail($email,$message,$subject)
	//{						
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
*/
//Load Composer's autoloader
//require ('PHPMailer/src/PHPmailer.php');

//Create an instance; passing `true` enables exceptions

function send_mail($email,$message,$subject)
	{						
			require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($email);
		$mail->Username="esquaretechnology802@gmail.com";  
		$mail->Password="NIBERIC1234";            
		$mail->SetFrom('esquaretechnology802@gmail.com','E-SQUARE TECHNOLOGY LTD RWANDA');
		$mail->AddReplyTo("esquaretechnology802@gmail.com","E-SQUARE TECHNOLOGY LTD RWANDA");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
		if(!$mail->send()){
	       echo'not sent to ';
	       }
	       else{
	           echo'Email Send Sucessiful';
	       }
	}	
}

	   
	   
	
		
