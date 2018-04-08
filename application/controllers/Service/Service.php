<?php
   class Service extends CI_Controller {

    public function index() {
      $this->load->view('service/index');
      }
      public function digitalmarketing() {
        $this->load->view('service/digitalmarketing');
      }
   }
?>
