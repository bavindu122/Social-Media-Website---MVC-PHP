<?php

class Pages extends Controller{
    public function __construct(){
        //load the model
        $this->pageModel = $this->model('M_Pages');
    }
    public function index(){
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/v_index', $data);
    }
    public function about(){
        $users = $this->pageModel->getUsers();
        $data = [
            'users' => $users
        ];
        $this->view('v_about', $data);
    }
}