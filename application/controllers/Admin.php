<?php
class Admin extends Application {

    function __construct()
    {
	parent::__construct();
    }

    function index()
    {
        $this->data['title'] = 'Quotations Maintenance';
        $this->data['quotes'] = $this->quotes->all();
	$this->data['pagebody'] = 'admin_list';    // this is the view we want shown
        
	$this->render();
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

