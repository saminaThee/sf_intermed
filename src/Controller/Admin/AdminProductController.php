<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminProductController extends AbstractController
{

    // Pour les trois entités (Product, Category, Brand): faire le CRUD complet dans
    // des AdminController

    // Modèle des routes @Route("/admin/create/product/", name="admin_create_product")

    //Bonus : trouver un moyen de pouvoir supprimer des catégories et des brands même si elles sont liés à un product
}