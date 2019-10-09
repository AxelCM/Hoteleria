<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class user extends  CI_Controller{
	
	public function index()
    {
       $this->load->view('template/inc/header.php');
       $this->load->view('template/home/home.php',$this->showusers());
       $this->load->view('template/inc/footer.php');
    }

    public function showusers($value='')
    {
		
    	$data['userdata'] =	$this->HomeModel->showusers();
    	return $data;
    }



    public function adduser()
	{
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/adduser.php');
		$this->load->view('template/inc/footer.php');
	}

    public function addhabitacion()
	{
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/addhabitacion.php');
		
		$this->load->view('template/inc/footer.php');
	} 
	
	public function addhuesped()
	{
		$data['habitacion'] =	$this->HomeModel->listhabitaciones();
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/addhuesped.php' , $data);
		$this->load->view('template/inc/footer.php');
	}	
	
	public function checkin()
	{
	    $this->load->view('jquery-ui-autocomplete');
		$data['habitacion'] =	$this->HomeModel->listhabitaciones();
		$data['huesped'] =	$this->HomeModel->list_huespedes();
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/checkin.php' , $data);
		$this->load->view('template/inc/footer.php');
	}



	public function saveuser()
	{
		
		$data['name'] 		=  $this->input->post('name');
		$data['email']	 	=  $this->input->post('email');
		$data['address'] 	=  $this->input->post('address');
		$data['sex']		=  $this->input->post('sex');
		$data['mobile']		=  $this->input->post('mobile');
		
		if(empty($data['name']) || empty($data['email']) || empty($data['address']) || empty($data['sex']) || empty($data['mobile'])){
			$this->load->library('session');
			$session_data['message'] = "<p class='alert alert-warning'>Field Must Not be Empty</p>";
			$this->session->set_userdata($session_data);
			redirect("Home/adduser");
		}else{
			$result = $this->HomeModel->adduser($data);
			redirect("user");
		}
		
		
	}

	public function savehabitacion()
	{
		
		$data['no_habitacion'] 		=  $this->input->post('no_habitacion');
		$data['estado']	 =  0; //Set room enable 

		if(empty($data['no_habitacion'])){
			$session_data['message'] = "<p class='alert alert-warning'>Este campo no puede ir Vacio</p>";
			redirect("User/habitaciones");
		}else{
			$result = $this->HomeModel->addhabitacion($data);
			redirect("User/habitaciones");
		}
	}

	public function savehuesped()
	{
        $id = $this->input->post("idhabitacion");
        $update['estado'] = 1;
		
	//	$data['idhabitacion'] 		=  $this->input->post('idhabitacion');
		$data['nombre']	 	=  $this->input->post('nombre');
		$data['apellido']	 	=  $this->input->post('apellido');
		$data['telefono']	 	=  $this->input->post('telefono');
		$data['nit']	 	=  $this->input->post('nit');

		if(empty($data['nombre'])  || empty($data['apellido'])  || empty($data['telefono'])  || empty($data['nit'])      ){
			$session_data['message'] = "<p class='alert alert-warning'>Field Must Not be Empty</p>";
			redirect("User/huespedes");
		}else{
			$result = $this->HomeModel->addhuesped($data);
// 			echo $this->HomeModel->closerom($id,$update);   //set Disabled the room after register at client
			redirect("User/huespedes");
		}
	}
		
	public function Docheckin()
	{
        $id = $this->input->post("idhabitacion");
        $update['estado'] = 1;
		
		$data['idhabitacion'] 		=  $this->input->post('idhabitacion');
		$data['id_huesped']	 	=  $this->input->post('id_huesped');
		$data['fechaentrada']	 	=  $this->input->post('fechaentrada');
		$data['fechasalida']	 	=  $this->input->post('fechasalida');

		if(empty($data['idhabitacion'])  || empty($data['id_huesped'])  || empty($data['fechaentrada'])  || empty($data['fechasalida'])      ){
			$session_data['message'] = "<p class='alert alert-warning'>Field Must Not be Empty</p>";
			redirect("User/huespedes");
		}else{
			$result = $this->HomeModel->checkin($data);
            echo $this->HomeModel->closerom($id,$update);   //set Disabled the room after register at client
			redirect("User/huespedes");
		}
		
		
	}


	 public function userlist($value='')
    {
	
    	$data['userdata'] =	$this->HomeModel->showusers();
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/user/viewuser.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }

	 public function habitaciones($value='')
    {
	
    	$data['habitacion'] =	$this->HomeModel->listhabitaciones();
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/user/viewhabitacion.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }
    
	 public function huespedes($value='')
    {
	
    	$data['huespedes'] =	$this->HomeModel->list_huespedes();
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/user/viewhuesped.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }


    public function edituser($userid = "")
    {
        $this->load->view('template/inc/header.php');
        $data = array(
            "userdata"	=> $this->HomeModel->getsingleuser($userid)

        );
        $this->load->view("template/home/edituser",$data);
        $this->HomeModel->edituser($userid);
        $this->load->view('template/inc/footer.php');
    }

    public function updateuser()
    {
        $id = $this->input->post("id");
        
        $new_data['name'] 	    = $this->input->post('name');
        $new_data['email']  	= $this->input->post('email');
        $new_data['address'] 	= $this->input->post('address');
        $new_data['mobile'] 	= $this->input->post('mobile');
        $new_data['sex'] 		=  $this->input->post('sex');


        echo $this->HomeModel->updateuser($id,$new_data);
        redirect("user");
    }

    public function viewuser($userid = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['userdata'] = $this->HomeModel->getsingleuser($userid);
       $this->load->view('template/home/viewuser.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	

     public function deleteuser($userid = "")
    {
        $data['userdata'] =$this->HomeModel->deleteuser($userid);
        redirect('user');
    }

    public function autocomplete(){
     $this->load->view('jquery-ui-autocomplete');
    }
 
    public function search(){
 
        $term = $this->input->get('term');
 
        $this->db->like('name', $term);
 
        $data = $this->db->get("Huespedes")->result();
 
        echo json_encode( $data);
    }
	
	
	
}
