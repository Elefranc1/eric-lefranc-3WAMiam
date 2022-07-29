Models

- User
- Recipe
(- Page) géré par le framework


Managers

- UserManager
- RecipeManager
(- PageManager) géré par le framework


Controller

(- AuthenticationController (géré par userController))
(- RouteController (géré par symphony))
- UserController
- RecipeController
(- PageController) géré par le framework. On remplace par un controller moins générique
- HomeController
- +AdminController