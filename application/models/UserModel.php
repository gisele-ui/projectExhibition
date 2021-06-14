<?php

class UserModel extends CI_Model{
	public function getData(){
		$info = $this->db->query("select d.*, s.* from districts d inner join sectors s where s.districtId = d.districtId");
	    
        if($info->num_rows()>0){
            return $info->result();
        }else{
            return "No information";
        }
    }

	public function saveUser($data){
		$this->db->insert("users", $data);
	}

	public function checkLink($link){
		$isValid = $this->db->query("select * from users where link = '$link'");

		if($isValid->num_rows()>0){
			$userId = $isValid->result()[0]->userId;
			$verified = $this->db->query("update users set verified = '1' where userId = $userId");
			if($verified){
				$this->db->query("update users set link = '' where userId = $userId");
				return $isValid->result();
			}
		}else{
           return false;
		}
	}


	public function authUser($email, $password){
		$this->db->where("email", $email);
		$query = $this->db->get('users');

		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$dbPass = $row->password;
				$hashed = hash("SHA512", $password);

				if($dbPass == $hashed){
					return $row;
				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}

}

?>
