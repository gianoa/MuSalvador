<?php 
namespace App\Admincp\Controllers;
use core\controller;

class DashboardController extends controller {

    public function index() {
        $this->view('admin/dashboard');
    }
}
 ?> 