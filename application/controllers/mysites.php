<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MySites extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $user = $this->get_user_or_redirect();
        if (!$user)
            return;
        $host = $this->input->get("host");

        $this->load->model('Site_model');
        $site = $this->Site_model->get_site($host);
        if (!$site)
        {
            $site = new Site_model();
            $site->host = $host;
        }
        $this->load->view('mysites.html');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */