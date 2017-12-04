<?php
namespace PortailBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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
	  if ($request->get('categorieSelectionnee')!=null)
		{
		 $resultat=$request->get('categorieSelectionnee');
		 $response = new JsonResponse();
         $response->setData(['resultat'=>$resultat]);
         return $response;
		}

	  $titre="Carte des menus";

      return $this->render('PortailBundle::carte.html.twig',
	  ['titre'=>$titre ]);

    }

}
