<?php 
class MSConnection {

    function __construct() {
		
  		mssql_connect(SERVER, USERNAME, PASSWORD) or die("connection error");
		mssql_select_db("LoginDB") or die('Database error ');
	     } 
	
	function Login($username,$password){
		
	
		
	 $sql="SELECT L.UserName,R.RoleName
  				FROM [LoginDB].[dbo].[User] as L ,  [LoginDB].[dbo].[UserRole] as R where l.ID=R.UserID 
			and L.Active='1' and L.UserName="."'".$username."'"." and L.Password="."'".$password."'";
		
			$query=mssql_query($sql);
			 $count=mssql_num_rows($query);
			if($count>=1){
			while($data=mssql_fetch_array($query)){
				$_SESSION["type"]		=$data["1"];  // student staff(CSTECH)
				$_SESSION["UserName"]	=$data["0"];
				$_SESSION["Loggedin"]	= true;
				$type="Sucess";
			}
		}else{
			$type="Login Failed";
			
		}
		return $type;
	}
	
	function getMainStudentId($email){
		$sql="SELECT personID FROM [CoopDB].[dbo].[PersonAccount] where username="."'".$email."'";
		$data=$this->Loadquery($sql);
		$row=mssql_fetch_array($data);
		return $row['personID'];
		
	}
	
	
	
	
function Loadquery($sql){
	$data= mssql_query($sql);
	return $data;
	
}	
	

}

?>

    