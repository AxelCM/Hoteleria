<?php
    class LoginModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


		public function adduser($data)
        {
			return $this->db->insert("usertable",$data);
            
        }
		

        public function edituser($userid)
        {
            $where['id']  = $userid;

        }


        public function checkexistance($username)
        {
            $where['username']  = $username;
            $result = $this->db->get_where("usertable",$where);
            return true;
        }


      /*  public function login($username, $password)
        {
            $where['username'] = $username;
            $where['password'] = $password;

           $result =  $this->db->count("usertable",$where);
           return $result;
        }*/
        
         public function login($username, $password)
        {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $result =  $this->db->get('usertable');
           if($result)
           {
			   return true;
			   
			   }else{
				   return false;
				   }
        }
        

    }

?>
