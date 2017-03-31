<?php 
	class Controller extends System {
		protected function view( $name, $data = null ){
			if( is_array($data) && count($data) > 0 ){
				extract($data);
			}
			require_once(VIEW . $name. '.php');
		}

		protected function site_url( $page = '' ){			
			return BASE_URL . $page;
		}
	}
?>