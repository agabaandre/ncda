<?php

class Governance extends MX_Controller
{

    public  function __construct(){
        parent:: __construct();

        $this->module ="governance";
        $this->load->model("governance_model",'governanceModel'); //board members model
    }

    //get board members list
    public function index(){  

        $page  = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
        $route = 'board-list';
        $perPage = 10;

        $count = $this->governanceModel->count_members();
        $data['members'] = $this->governanceModel->get($perPage, $page);

        $data['links'] = paginate($route, $count, $perPage, 2);
        $data['module']=$this->module;
        $data['title']="Board Members";
        $data['view']="board_members";

        render_view($data);
    }
    
    
    //save members
    public function store() { 

        $this->governanceModel->save();
        set_flash('Member saved successfully');
        return redirect(site_url('board-list'));
    }

    //update members
    public function update($id = null){ 
        $this->governanceModel->update($id);
        set_flash('Member updated successfully');
        return redirect(site_url('board-list'));
    }
 
   

}

