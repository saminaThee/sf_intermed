<?php

namespace App\Controller\Front;//dossier ranger dans à l'endroit

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    // Faire la fonction qui affiche la liste des produits
    // Ainsi que celle qui affiche un produit en particulier.
 /**
     * @Route ("products", name="product_list") //Tu as la Route que mène vers le lien qu’on veut.

     */
    public function productList(ProductRepository $productRepository)

    {
        $products = $productRepository->findAll();//Ici on demande à la variable de récupérer toutes les informations dans la base de données de la table « products » grâce à ProductRepository.
        return $this->render('front/products.html.twig', ['products' => $products]);//Enfin, ici on lui dit « dirige-moi vers le fichier products.html.twig en prenant connaissances de la variables $products (qui sont les informations récupérées de la base de données)

    }


    /**
     * @Route("product/{id}", name="product_show")
     */
    public function productShow($id, ProductRepository $productRepository)
    {
        $product = $productRepository->find($id);

        return $this->render("front/product.html.twig", ['product' => $product]);
    }
}