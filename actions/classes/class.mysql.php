<?php 
class MYConnection {

    function __construct() {
  		mysql_connect(LOCAL_SERVER, USERNAME, PASSWORD) or die("connection error");
		mysql_select_db("labmonitor") or die('Database error -> ' . mysql_error());
	     } 
	
	
	
	function Executequery($sql){
		$data= mysql_query($sql);
	
	}

	function ReturnExecutequery($sql){
		$data= mysql_query($sql);
		return $data;
	
	}	

	function getLastInsertId_slot_master(){
		$sql="select max(id) from slot_master";
		$data= mysql_query($sql);
		$row=mysql_fetch_array($data);
		return $row[0];
	}

	function getlatestSlot(){
		$sql="select from_date,to_date from slot_master order by id desc limit 1";
		$data= mysql_query($sql);
		$row=mysql_fetch_array($data);
		return $row;
		//return $row[0]."|".$row[1];
	}

	function getActiveSlot(){
		$ids="";
		$sql="select id from slot_master where isactive='Y'";
		$data= mysql_query($sql);
		
		while($row=mysql_fetch_array($data)){
			$ids=$ids.",".$row[0];
		}
		return trim($ids,',');
		
	}	
	
	function getBuildingSlots($building){
		$frame_id=$this->getActiveSlot();
		// $sql="select * from tbl_slot where SUBSTRING_INDEX(days,',',1) > curdate() and frame_id in ($frame_id) and  student_id = '0' and building="."'".$building."'";
		$sql="select * from tbl_slot where SUBSTRING_INDEX(days,',',1) > curdate() and frame_id in ($frame_id) and   building="."'".$building."'";
		$data=mysql_query($sql);
		return $data;
		
	}
	
	function getAllBuildingSlots($building){
		$frame_id=$this->getActiveSlot();
		$sql="select * from tbl_slot where  frame_id in ($frame_id)  and building="."'".$building."'";
		$data=mysql_query($sql);
		return $data;
	}
	
	function isSlotfree($slotid){
		$sql="select * from tbl_slot where student_id='0' and id="."'".$slotid."'";
		$data=mysql_query($sql);
		$count=mysql_num_rows($data);
		if($count>0){
			return true;
		}else{
			return false;
			
		}
		
	}
	

	
	function getSlotUser($slotid){
		$sql="select * from tbl_slot where  id="."'".$slotid."'";
		$data=mysql_query($sql);
		$val=mysql_fetch_array($data);
		return $val['student_id'];
		
	}
	
	
	
	function get_idfrom_student_id($student_id){
		$sql="select * from tbl_slot where student_id="."'".$student_id."'" ;
		$val=$this->ReturnExecutequery($sql);
		$data=mysql_fetch_array($val);
		return $data['id'];
		
	}
	
	function get_current_status($student_id){
		 $sql="select * from tbl_users where   StudentID="."'".$student_id."'" ;
		$val=$this->ReturnExecutequery($sql);
		$data=mysql_fetch_array($val);
		return $data['lab_agg_status'];
		
		
	}
	
	function reserverSlot($slotid,$student_id){
		$slot_stat=$this->isSlotfree($slotid);
		$status=$this->get_current_status($student_id);
		
		if($slot_stat== false or $status=='started' or $status=='finish' or $status=='TA'){
			return false;
		}else{
				$this->ChangeStaus($student_id);
				$sql="update tbl_slot set student_id="."'".$student_id."'"." where id="."'".$slotid."'";
				$this->Executequery($sql);
				
				$sql_user="update tbl_users  set lab_agg_status='Assigned' , slotnumber="."'".$slotid."'"." where StudentID="."'".$student_id."'";
				$this->Executequery($sql_user);
				return true;
			
		}
		
	}
	
	function getAdminList($username){
		$sql="select username from tbl_admin_list where username="."'".$username."'"." and status ='Y'";
		$result=$this->ReturnExecutequery($sql);
		$count=mysql_num_rows($result);
		if($count>0){
			return true;
		}else{
			return false;
			
		}
		
			
	}
	
	function loadUserProfile($id){	
		$sql="select * from tbl_users where StudentID ="."'".$id."'";
		$result=$this->ReturnExecutequery($sql);
		$row=mysql_fetch_array($result);
		return $row;
	}
	
	function loadUserProfileID($id){	
		 $sql="select * from tbl_users where StudentID ="."'".$id."'";
		$result=$this->ReturnExecutequery($sql);
		$row=mysql_fetch_array($result);
		return $row;
	}
	
	
	
	function getlabdetails($id){
		$sql="select * from tbl_slot where student_id= "."'".$id."'";
		$result=$this->ReturnExecutequery($sql);
		$row=mysql_fetch_array($result);
		echo "Days:- [ ".$row['days']."] Time:- ".$row['time']."  and  Lab:- ".$row['building'];

	}
	
	
	
	function ChangeStaus($student_id){
		$sql="update  tbl_users set slotnumber='0' where  StudentID="."'".$student_id."'" ;
		$val=$this->ReturnExecutequery($sql);
	//	$count=mysql_num_rows($val);
		
		$sql2="update  tbl_slot set Student_id='0' where  Student_id="."'".$student_id."'" ;
		$val2=$this->ReturnExecutequery($sql2);
	//	$count=mysql_num_rows($val);
		
		
		
	}
	
	function SaveAsTA($id,$taornot){
			
		$sql="update tbl_users set lab_agg_status="."'".$taornot."'"." where StudentID="."'".$id."'";
		$this->Executequery($sql);
		$retvalue= mysql_affected_rows();	
		
		if($taornot=="TA"){
			$this->ChangeStaus($id);
			
		}
		return 	$retvalue;
	}
	
	
	function update_function($studentid,$slotnumber,$key,$type,$other,$userid){
		
		$date= date('Y-m-d');
		$sql_insert="insert into tbl_event (student_id,date,key_status,lab_status,other_staus,user) values
		('$studentid','$date','$key','$type','$other','$userid')";
		$this->Executequery($sql_insert);
		
		$update_sql="update tbl_users set lab_agg_status='$type' , keyTaken ='$key' , other = '$other' where StudentID='$studentid'";
		$this->Executequery($update_sql);
		return mysql_affected_rows();	
		
	
	}
	
	function countUpdateEmailSend($id){
		$sql="select * from tbl_users where StudentID='$id'";
		$data=$this->ReturnExecutequery($sql);
		$row=mysql_fetch_array($data);
		$count=$row['email_send_count'];
		$new_count=$count+1;
		$sql_update="update tbl_users set email_send_count="."'".$new_count."' where StudentID='$id' ";
		$this->Executequery($sql_update);
	}
	
	function getLabStatus($id){
		$sql="select * from tbl_slot where student_id='$id'";
		$data=$this->ReturnExecutequery($sql);
		$row=mysql_fetch_array($data);
		return "Date:-".$row['days']."</br> Time :-".$row['time']." </br> Building :- ".$row['building'];
		
		
	} 
	
	function checkifUserExistsandStatus($id){
		$sql="select * from tbl_users where StudentID='$id'";
		$data=$this->ReturnExecutequery($sql);
		$count=mysql_num_rows($data);
		$eval=mysql_fetch_array($data);

		if($count==0){
			return $count;
		}elseif(($eval['lab_agg_status']=='Finish') || ($eval['lab_agg_status']=='started')|| ($eval['lab_agg_status']=='TA')){
			return 1;		
		}else{
			return 2;
		}
			
		}
		
	function getEventdetails($id){
		 $sql="select * from tbl_event where student_id='$id'";
		$data=$this->ReturnExecutequery($sql);
		//$eval=mysql_fetch_array($data);
		return $data;
		
	}	
	
	
	function getStudentId($email){
		$sql="SELECT StudentID,email FROM tbl_users where email="."'".$email."'";
		$data=mysql_query($sql);
		$row=mysql_fetch_array($data);
		return $row['StudentID'];
		
	}
	
	

	//function disable_enable
}

?>

    