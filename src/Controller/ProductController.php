<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\EntityManager;
use App\Model\Product;
use App\Repository\ProductRepository;

class ProductController extends Controller
{
    public function new(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new Product();

            $product->setTitle($_POST['title'])
                ->setDescription($_POST['description'])
                ->setPrice($_POST['price']);

            $entityManager = new EntityManager();
            $entityManager->persist($product);
            $entityManager->flush();

            $this->redirect('/product/new');
        }


        $this->render('product/new', [
            "title" => "Créer un nouveau produit",
        ]);
    }

    public function edit(int $id): void
    {
        $productRepository = new ProductRepository();
        $product = $productRepository->findById($id);

        if (!$product) {
            throw new \Exception('Product not found');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product->setTitle($_POST['title'])
                ->setDescription($_POST['description'])
                ->setPrice($_POST['price']);

            $entityManager = new EntityManager();
            $entityManager->persist($product);
            $entityManager->flush();

            $this->redirect("/product/$id/edit");
        }

        $this->render('product/edit', [
            'title' => 'Modifier un produit',
            'product' => $product
        ]);
    }

    public function show(int $id): void
    {
        $productRepository = new ProductRepository();
        $product = $productRepository->findById($id);

        if (!$product) {
            throw new \Exception('Product not found');
        }

        $this->render('product/show', [
            'title' => $product->getTitle(),
            'product' => $product
        ]);
    }

    public function delete(int $id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_METHOD'] === 'DELETE') {
            $productRepository = new ProductRepository();
            $product = $productRepository->findById($id);

            $entityManager = new EntityManager();
            $entityManager->delete($product);

            $this->redirect("/");
        }
    }
}
