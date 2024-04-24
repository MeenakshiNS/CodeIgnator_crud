<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

     function __construct() {
        parent::__construct();
        $this->load->model('Blog/Blog_m');
    }


     function insert(){
        if($this->input->post('add'))
        {
        //    print_r($_POST);
           //taking each data from form and assigning into $data
           $data['uname']= $this->input->post('name');
           $data['agee']= $this->input->post('age');
           //now we have to save this inside db
           $response=$this->Blog_m->insert_data($data);
           if($response==true){
            echo "Records saved successfully";
    }else{
            echo"Insert error !";
   }

        }
  
        // if(isset($_POST['add'])){
        //     print_r($_POST);
        // }
        $this->load->view('Blog/add');
    }




    // FUNCTION TO LIST DATA //
    function listData(){
        //to to model and write query to display data isnerted
        $result['data']=$this->Blog_m->display_records();
         print_r($result);
         $this->load->view('Blog/list',$result);


    }


    function update(){
        //getting id from url
        $id=$this->input->get('id');
        //going to model fetching data  of that id nd sending back in view page
        $result['data']=$this->Blog_m->displayrecordsById($id);
print_r($result);

        $this->load->view('Blog/update',$result);
    }

    function delete(){

    }
	
}


