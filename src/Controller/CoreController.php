<?php

/**
 * fichier src/Controller/CoreController.php
 * =
 * index, acceuil ou homepage
 *
 * chemin Route: /
 * nom Route: homepage
 *
 * created: src/Controller/CoreController.php
 * created: templates/core/index.html.twig
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoreController extends AbstractController {

	/**
	 * @Route("/", name = "homepage")
	 */

	public function homepage(): Response {

		return $this->render('core/index.html.twig');
	}
}
