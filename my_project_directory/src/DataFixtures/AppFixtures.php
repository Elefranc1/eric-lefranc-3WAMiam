<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    // create 5 users! Bam!
        // for ($i = 0; $i < 5; $i++) {
        //     $user = new User();
        //     $user->setUsername('user'.$i);
        //     $user->setPassword('password'.$i);
        //     $user->setEmail('user'.$i.'@yahoo.fr');
        //     $manager->persist($user);
        // }
    
        // $manager->flush();

        // User 1
            $user1 = new User();
            $user1->setUsername('user1');
            $user1->setPassword('password1');
            $user1->setEmail('user1@yahoo.fr');
            $manager->persist($user1);
        // User 2
            $user2 = new User();
            $user2->setUsername('user2');
            $user2->setPassword('password2');
            $user2->setEmail('user2@yahoo.fr');
            $manager->persist($user2);
        // User 3
            $user3 = new User();
            $user3->setUsername('user3');
            $user3->setPassword('password3');
            $user3->setEmail('user3@yahoo.fr');
            $manager->persist($user3);
        // User 4
            $user4 = new User();
            $user4->setUsername('user4');
            $user4->setPassword('password4');
            $user4->setEmail('user4@yahoo.fr');
            $manager->persist($user4);
        // User 5
            $user5 = new User();
            $user5->setUsername('user5');
            $user5->setPassword('password5');
            $user5->setEmail('user5@yahoo.fr');
            $manager->persist($user5);
    
        
    //create 10 recipes! Bam!
        // for ($i = 0; $i < 10; $i++) {
        //     $recipe = new Recipe();
        //     $recipe->setUserId(1);
        //     $recipe->setTitle('Recipe number '.$i+1);
        //     $recipe->setContent('This is a auto generated recipe');
        //     $recipe->setIsPublished(true);
        //     $manager->persist($recipe);
        // }
    
         $manager->flush();
    
            $recipe1 = new Recipe();
            $recipe1->setUser($user1);
            $recipe1->setTitle('Recipe number 1');
            $recipe1->setContent('This is a auto generated recipe1');
            $recipe1->setIsPublished(true);
            $manager->persist($recipe1);
    
            $recipe2 = new Recipe();
            $recipe2->setUser($user2);
            $recipe2->setTitle('Recipe number 2');
            $recipe2->setContent('This is a auto generated recipe2');
            $recipe2->setIsPublished(true);
            $manager->persist($recipe2);            
            
            $recipe3 = new Recipe();
            $recipe3->setUser($user3);
            $recipe3->setTitle('Recipe number 3');
            $recipe3->setContent('This is a auto generated recipe3');
            $recipe3->setIsPublished(true);
            $manager->persist($recipe3);            

            
            $recipe4 = new Recipe();
            $recipe4->setUser($user4);
            $recipe4->setTitle('Recipe number 4');
            $recipe4->setContent('This is a auto generated recipe 4');
            $recipe4->setIsPublished(true);
            $manager->persist($recipe4);  
            
            $recipe5 = new Recipe();
            $recipe5->setUser($user5);
            $recipe5->setTitle('Recipe number 5');
            $recipe5->setContent('This is a auto generated recipe 5');
            $recipe5->setIsPublished(true);
            $manager->persist($recipe5);    
            
            $manager->flush();
    }
}

