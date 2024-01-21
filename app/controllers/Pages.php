<?php

    class Pages extends Controller {


        /* Home Page ======== */ 
        public function home() 
        {

            $data = [
                'Title' => 'Wiki Home page',
                'Description' => 'Descriptio,',
            ];
            $this->loadView('pages/home' , $data);
        }
    }