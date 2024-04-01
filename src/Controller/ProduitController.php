<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{
    /**
 * @Route("/home")
 */

public function home(){
    $msg="Bienvenue ssssssss";
    $articles=
[
["id"=>101,
"libelle"=>"Asus i3",
"quantite"=>30,
"gamme"=>"ordinateur"],
["id"=>102,
"libelle"=>"laser Brother",
"quantite"=>10,
"gamme"=>"imprimante"],
["id"=>103,
"libelle"=>"Epson S31",
"quantite"=>12,
"gamme"=>"videoprojecteur"]];
    //return new Response ($msg);
    return $this->render("porduit/home.html.twig",["articl"=>$articles]);
}


}
?>