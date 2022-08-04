<?php
// src/Controller/RecipeController.php
namespace App\Controller;

use App\Entity\Recipe;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\RecipeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// ...

class RecipeController extends AbstractController
{
    #[Route('/show_recipe/{id}', name: 'recipe_show')]
    public function show(Recipe $recipe): Response
    {

        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe found for id '.$id
            );
        }

        return new Response('Check out this great recipe: '.$recipe->getTitle());

        // or render a template
        // in the template, print things with {{ recipe.name }}
        // return $this->render('recipe/show.html.twig', ['recipe' => $recipe]);
        
        
    }
    
    #[Route('/recipe/edit/{id}', name: 'recipe_edit')]
    public function update(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $recipe = $entityManager->getRepository(Recipe::class)->find($id);

        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe found for id '.$id
            );
        }

        $recipe->setTitle('New recipe title !');
        $entityManager->flush();

        return $this->redirectToRoute('recipe_show', [
            'id' => $recipe->getId()
        ]);
    }
    
    #[Route('/recipe/delete/{id}', name: 'recipe_delete')]
    public function remove(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $recipe = $entityManager->getRepository(Recipe::class)->find($id);

        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe found for id '.$id
            );
        }

        $entityManager->remove($recipe);
        $id=$recipe->getId();
       
        $entityManager->flush();
        

        return new Response('The recipe number '.$id.' has been deleted successfully.');
         
    }
    

}

?>