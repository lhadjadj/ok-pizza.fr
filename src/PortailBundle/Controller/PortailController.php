<?php
namespace PortailBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PDO;

class PortailController extends Controller
{
    /**
     * @Route("/", name="root", options = { "utf8": true })
     */
    public function indexAction()
    {


      return $this->render('PortailBundle::index.html.twig',  []);
    }

	/**
     * @Route("/carte", name="carteMenu", options = { "utf8": true })
     */
    public function carteMenuAction(Request $request)
    {
	  //Test si la requête est de type AJAX
	  if ($request->get('categorieSelectionnee')!=null)
		{
		 $resultat=$request->get('categorieSelectionnee');
		 $response = new JsonResponse();
         $response->setData(['resultat'=>$resultat]);
         return $response;
		}

	  // La requêtes n'est de type AJax. Ouverture de la page
	  $titre="Carte des menus";

	  // j'ouvre la base de données
	  $db = new PDO("sqlite:/opt/DATA/SQLITE/ok-pizza.db");
	  // je prépare la requete SQL
	  $requeteType="select distinct type from produits order by type asc";
      // j'execute la requête et je retourne les valeurs dans un tableau Asscoiatif
	  $categorie= $db->query($requeteType)->fetchAll(PDO::FETCH_ASSOC);

	  // je deboggue
	  //var_dump($resultat);

	  // je debbogue : j'affiche le tableau
	  //foreach ($resultat as $value) {print_r($value['type']); echo "<br />";}

      return $this->render('PortailBundle::carte.html.twig',
	  ['titre'=>$titre, 'categories'=> $categorie]);

    }

}
