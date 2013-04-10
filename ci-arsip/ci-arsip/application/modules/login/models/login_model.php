<?php
/**
**/
class Login_model extends CI_Model{

	//checkup user password on login
	function check_user($username,$password){		$query=$this->db->get_where('users',array('username'=>$username,'password'=>md5($password)));
		if($query->num_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	function get_user($username){		$query=$this->db->get_where('users',array('username'=>$username,'isactive'=>'1'));
		if($query->num_rows()>0){
			return $query->result();
			//echo var_dump($query->result());
		}
	}
	//User Validation : check logged in user,user level is not admin, and user role
	function isuser($userid){		$sql="select a.userid,a.username,a.firstname,a.userlevel,c.roleid,c.rolename,c.roledesc from users a
			left join role_user b on a.userid=b.userid
			left join role c on b.roleid=c.roleid
			where b.roleuserid is not null and a.isactive=1 and c.roleid!=1 ";
		if(!empty($userid)){
			$sql.=" and a.userid=".$userid;
		}
		return $this->db->query($sql);
	}

	//Admin User Validation : check logged in user as administrator, user level is admin, and user role admin
	function isadmin($userid=null){

		$sql="select a.roleuserid,a.userid,a.roleid,b.rolename,c.userlevel from role_user a
			left join role b on a.roleid=b.roleid
		left join users c on a.userid=c.userid
			where a.roleid=1 and c.isactive=1 and a.isactive=1";
		if(!empty($userid) || $userid!=null):
			$sql.=" and a.userid=".$userid;
		endif;

		return $this->db->query($sql);
	}	
}
?>