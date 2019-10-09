<?php
    class HomeModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


        public function showusers()
        {
           
            $this->db->order_by('id', 'DESC');
            $result_set = $this->db->get('usertable');            
            return $result_set->result_array();
        }


// LISTA DE HABITACIONES
        public function listhabitaciones()
        {
           
            $this->db->order_by('idhabitacion', 'DESC');
            $result_set = $this->db->get('habitacion');            
            return $result_set->result_array();
            
        }
        
        // LISTA DE HUESPEDES
        public function list_huespedes()
        {
           
            $this->db->order_by('id_huesped', 'DESC');
            $result_set = $this->db->get('Huespedes');            
            return $result_set->result_array();
        }
		
		
		 public function adduser($data)
        {
			$this->db->insert("usertable",$data);
            
        }
		
		
		//CREACION DE HABITACIONES
		 public function addhabitacion($data)
        {
			$this->db->insert("habitacion",$data);
            
        }
        
		 public function addhuesped($data)
        {
			$this->db->insert("Huespedes",$data);
            
        }  
        
		 public function checkin($data)
        {
			$this->db->insert("registrohabitacion",$data);
            
        }


       public function edituser($userid)
        {
            $where['id']  = $userid;

        }


        public function getsingleuser($userid)
        {
            $this->db->where('id', $userid);
            $result = $this->db->get('usertable');
            return $result->result_array();
        }


        public function updateuser($id,$new_data)
        {
            
			$this->db->where('id', $id);
			$this->db->update('usertable', $new_data);
			
        }

        public function closerom($id,$update)
        {
            
			$this->db->where('idhabitacion', $id);
			$this->db->update('habitacion', $update);
			
        }
		


        public function deleteuser($userid)
        {
            $this->db->where('id', $userid);
			$this->db->delete('usertable');        
        }

        public function deletehabitacion($habitaiconid)
        {
            $this->db->where('id', $habitacionid);
			$this->db->delete('habitacion');        
        }

    }

?>
