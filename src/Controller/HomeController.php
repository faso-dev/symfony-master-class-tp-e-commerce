<?php
	
	namespace App\Controller;
	
	use App\Entity\Product;
	use App\Service\CategoryManager;
	use App\Service\ProductManager;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Attribute\Route;
	
	class HomeController extends AbstractController
	{
		
		#[Route('', name: 'app_home')]
		public function index(ProductManager $productManager, CategoryManager $categoryManager)
		{
			return $this->render('shop/index.html.twig', [
				'featured_products' => $productManager->getFeatured(4),
				'categories' => $categoryManager->actives(),
			]);
		}
	}
