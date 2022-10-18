<?php

/**
 * fichier src/Controller/EventController.php
 * =
 *
 *
 * chemin Route: /events
 * nom Route:
 *
 * created: src/Controller/EventController.php
 * created: templates/event/index.html.twig
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController {

	/**
	 * @Route("/events/{id}", name = "show_event", requirements={"id" = "\d+"})
	 */

	public function show($id): Response {

		return $this->render('event/show.html.twig', ['event_id' => $id]);
	}

	// ---------------------------------------------------------------------

	/**
	 * @Route("/events/{category}", name = "list_events")
	 */

	public function list($category = null): Response {

		$htmlMessage = "fichier template: Aucun, tt est codé en dur";
		$htmlMessage .= "<br>";
		$htmlMessage .= "ds le fichier: src/Controller/EventController.php";
		$htmlMessage .= "<br>";
		$htmlMessage .= "controller: list(\$category = null)";
		$htmlMessage .= "<br>";
		$htmlMessage .= "<br>";

		if($category) {
			$htmlMessage .= " affichage du parametre \${category}:";
			$htmlMessage .= "{$category}";
		} else {
			$htmlMessage .= "le parametre \${category} est null, pas d'affichage";
		}

		return new Response($htmlMessage);
	}

}
