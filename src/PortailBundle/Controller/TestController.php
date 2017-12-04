<?php
namespace PortailBundle\Controller;

use PDO;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/testAlgo01", name="TestAlgo01", options = { "utf8": true })
     */
    public function testAlgoAction()
    {
        $adresse= "http://192.168.56.128/app_dev.php/testAlgo01";
        $a=1;
        $titre ="Page de tests";
        $adresse2=substr_replace($adresse, 'www.ok-pizza.fr', 7,14);
        
        
    if ( stristr($adresse, "app_dev.php") ) {$environnement="développement";} 
        else {$environnement="production";}
        
    $liste=[0,1,2,3,4,5,6,7,8,9];

    if ( is_int($liste[0]/2)) 
        {echo "la valeur ".$liste[0]." est pair.<br />";} else 
        {echo "la valeur ".$liste[0]." est impair.<br />"; }
        
    if ( is_int($liste[1]/2)) 
        {echo "la valeur ".$liste[1]." est pair.<br />";} else
        {echo "la valeur ".$liste[1]." est impair.<br />"; }
        
    if ( is_int($liste[2]/2)) 
        {echo "la valeur ".$liste[2]." est pair.<br />";} else
        {echo "la valeur ".$liste[2]." est impair.<br />"; }
    if ( is_int($liste[3]/2)) 
        {echo "la valeur ".$liste[3]." est pair.<br />";} else
        {echo "la valeur ".$liste[3]." est impair.<br />"; }
    if ( is_int($liste[4]/2)) 
        {echo "la valeur ".$liste[4]." est pair.<br />";} else
        {echo "la valeur ".$liste[4]." est impair.<br />"; }
    if ( is_int($liste[5]/2)) 
        {echo "la valeur ".$liste[5]." est pair.<br />";} else
        {echo "la valeur ".$liste[5]." est impair.<br />"; }
    if ( is_int($liste[6]/2)) 
        {echo "la valeur ".$liste[6]." est pair.<br />";} else
        {echo "la valeur ".$liste[6]." est impair.<br />"; }
    if ( is_int($liste[7]/2)) 
        {echo "la valeur ".$liste[7]." est pair.<br />";} else
        {echo "la valeur ".$liste[7]." est impair.<br />"; }
    if ( is_int($liste[8]/2)) 
        {echo "la valeur ".$liste[8]." est pair.<br />";} else
        {echo "la valeur ".$liste[8]." est impair.<br />"; }
    if ( is_int($liste[9]/2)) 
        {echo "la valeur ".$liste[9]." est pair.<br />";} else
        {echo "la valeur ".$liste[9]." est impair.<br />"; }
    echo "--------------------------------------------------<br />";
    
    for ($i=0; $i<count($liste); $i++)
    {
    if ( is_int($liste[$i]/2)) 
        {echo "la valeur ".$liste[$i]." est pair.<br />";} else
        {echo "la valeur ".$liste[$i]." est impair.<br />"; }
    }
        
    echo "--------------------------------------------------<br />";
    
    $a="Non";
    
    switch ($a) {
        case "non" :  echo "non";
                      break;
        case "NON":   echo "non";

        case "Non":   echo "non";
                      break;
        case "N":     echo "non";
                      break;
        case "n":     echo "non";
                      break;
        default :     echo "je ne comprends pas !!";
                
        }        
        
    exit;
        
        return $this->render('PortailBundle::testAlgo01.html.twig',  
                ['titre'=>$titre, 
                 'adresseServeur'=>$adresse, 
                 'a'=>$a,
                 'environnement'=>$environnement,
                 'nouvelleAdresse'=>$adresse2   
                ]); 

        }

    /**
     * @Route("/testSql01", name="TestSql01", options = { "utf8": true })
     */
    public function testSqlAction(){
     $db = new PDO("sqlite:/opt/DATA/SQLITE/ok-pizza.db");
     
  $resultat= $db->query('select * from produits')->fetchAll(PDO::FETCH_ASSOC);
     
     print_r($resultat);
     exit;
     return ($resultat); 
    }        
}
