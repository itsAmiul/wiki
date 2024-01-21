<?php

    class Errors extends Controller {

        public function notFound()
        {
            $data = [
                "pageTitle" => "WIki - Error Page (404)"
            ];
            $this->loadView("error/404", $data);
        }
    }