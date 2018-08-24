<?php 
    namespace System;

    use System\System;

    class Controller extends System 
    {
        protected function view($name, $data = null)
        {
            if (is_array($data) && count($data) > 0) {
                extract($data);
            }
            require_once APPPATH . DIRECTORY_SEPARATOR . \Config::$view . DIRECTORY_SEPARATOR . $name . '.php';
        }

        protected function url($page = '')
        {
            $base = BASE_URL == '/' || BASE_URL == '' ? $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/' : BASE_URL;
            return $base . $page;
        }

        protected function json($json)
        {    
            return json_encode($json);
        }

        public function post($key = '')
        {    
            if ($key != '') {
                return addslashes($_POST[$key]);
            } else {
                $post = array();
                foreach ($_POST as $key => $value) {
                    $post[$key] = addslashes($value);
                }
                return $post;
            }
        }

        public function get($key = '')
        {    
            if ($key != '') {
                return addslashes($_GET[$key]);
            } else {
                $post = array();
                foreach ($_GET as $key => $value) {
                    $post[$key] = addslashes($value);
                }
                return $post;
            }
        }

    }