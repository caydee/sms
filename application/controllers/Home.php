<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
	{
		public function __construct()
			{
				parent::__construct();
				$this->is_loggedin();
				$this->load->model("home_model","hmod");
				$this->data["title"]="sms";
			    $this->data["description"]="";
			    $this->data["keywords"]="sms";

			}
		public function is_loggedin()
			{
			
                if ($this->session->userdata('login') !== TRUE)
                    {
                      redirect("login","refresh");
                    }
                
			}	
		public function index()
			{
				$this->data["subtitle"]=
				$this->data["view"]="dashboard";
				$this->load->view("structure",$this->data);
			}
		public function template()
			{
				$this->data["subtitle"]="create template";
				if($this->input->post())
					{

					}
				$this->data["view"]="template";
				$this->load->view("structure",$this->data);
			}	
		public function incomingsms()
			{
				$this->data["subtitle"]="Incoming";
				$this->data["view"]="incomingsms";
				$this->load->view("structure",$this->data);
			}
		public function msglist()
			{
				$this->data["subtitle"]="create Message-list";
				$this->data["view"]="msglist";
				$this->data["county"]=$this->hmod->getCounties();
				$this->load->view("structure",$this->data);
			}
		public function reports($cat)
			{
				$cat=urldecode($cat);
				switch ($cat) 
					{
						case 'messages':
							$this->data["subtitle"]="reports {messages}";
							$this->data["view"]="reports/messages";
							break;
					
						case 'members':
							$this->data["subtitle"]="reports {members}";
							$this->data["view"]="reports/members";
							break;
					}
				$this->load->view("structure",$this->data);
			}
	}

