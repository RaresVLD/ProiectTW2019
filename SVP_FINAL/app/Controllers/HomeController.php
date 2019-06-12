<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 2:05 PM
	 */
	
	class HomeController extends Controller {
		
		public function homepage(  ) {
			$announcementsController = new AnunturiController();
			$announcements = $announcementsController->showFiveAnnouncements();

			$this->loadView( 'Home', [ 'announcements' => $announcements ] );
		}
	}
