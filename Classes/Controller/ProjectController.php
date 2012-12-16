<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ben van Kruistum <ben@u-creations.nl>, u-creations
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package projectseavieuw
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Projectseavieuw_Controller_ProjectController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * projectRepository
	 *
	 * @var Tx_Projectseavieuw_Domain_Repository_ProjectRepository
	 */
	protected $projectRepository;

	/**
	 * injectProjectRepository
	 *
	 * @param Tx_Projectseavieuw_Domain_Repository_ProjectRepository $projectRepository
	 * @return void
	 */
	public function injectProjectRepository(Tx_Projectseavieuw_Domain_Repository_ProjectRepository $projectRepository) {
		$this->projectRepository = $projectRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$projects = $this->projectRepository->findAll();

		$this->view->assign('projects', $projects);
	}

	/**
	 * action show
	 *
	 * @param Tx_Projectseavieuw_Domain_Model_Project $project
	 * @return void
	 */
	public function showAction(Tx_Projectseavieuw_Domain_Model_Project $project = NULL) {
		if(is_null($project)){
			echo 'euh';
			die();
		}
		$this->view->assign('project', $project);
	}

}

?>