<?php

    class Pages extends Controller{
        public $userModel;
        public function __construct()
        {

        }
        public function index() {
            $data = [
                'title' => 'You Welcomee to Our Website',

            ];
            $this->view('pages/index' , $data );
        }


        public function register(){
            $this->view("pages/register");
        }
        public function login(){
            $this->view("pages/login");
        }


    }