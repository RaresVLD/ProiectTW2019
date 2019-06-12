<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 2:20 PM
	 */
	
	class FaqController extends Controller {
		
		public function showAllFaqs() {
			$result = $this->model->getAllFaqs();
			
			$toEncode = [];
			foreach ( $result as $item ) {
				$toEncode[] = array(
					'intrebare' => $item['QUESTION'],
					'raspuns'   => $item['ANSWER']
				);
			}
			$this->loadView( 'Faq', [ 'faq' => array_reverse($toEncode) ] );
		}
	}
