<?php

class Routes
{
    /**
     * Méthode statique pour obtenir l'instance du routeur
     *
     * @return AltoRouter Retourne une instance d'AltoRouter contenant les routes définies
     */
    public static function getRouter(): AltoRouter
    {
        // Crée une nouvelle instance d'AltoRouter
        $router = new AltoRouter();

        // Définition des routes
        $router->map('GET', '/', 'c_accueilController#index', 'accueil');
        $router->map('GET|POST', '/login', 'c_securityController#index', 'login');
        $router->map('GET', '/deconnexion', 'c_securityController#destroySession', 'deconnexion');
        $router->map('GET|POST', '/inscription', 'c_securityController#inscription', 'inscription');
        $router->map('GET|POST', '/verification[.:format]?', 'c_securityController#verification', 'verification');
        $router->map('GET|POST', '/verification-email', 'c_securityController#reverification', 'reverification');
        $router->map('GET|POST', '/demande-reset-password', 'c_securityController#demandeReset', 'demandeReset');
        $router->map('GET|POST', '/reset-password[.:format]?', 'c_securityController#resetPassword', 'resetPassword');
        $router->map('GET|POST', '/profil', 'c_profil#index', 'profil');
        $router->map('GET|POST', '/test', 'c_testController#index', 'test');
        $router->map('GET', '/test/[i:id]', 'c_testController#index', 'test2');
        $router->map('GET|POST', '/dashboard', 'c_dashboardController#index', 'dashboard');
        $router->map('GET|POST', '/posts', 'c_dashboardController#posts', 'posts');
        $router->map('GET|POST', '/posts_edit[.:format]?', 'c_dashboardController#posts_edit', 'posts_edit');
        $router->map('GET|POST', '/categories', 'c_dashboardController#categories', 'categories');
        $router->map('GET|POST', '/categories_edit[.:format]?', 'c_dashboardController#categories_edit', 'categories_edit');
        $router->map('GET|POST', '/categories_add', 'c_dashboardController#categories_add', 'categories_add');
        $router->map('GET|POST', '/users', 'c_dashboardController#users', 'users');
        $router->map('GET|POST', '/users_edit[.:format]?', 'c_dashboardController#users_edit', 'users_edit');
        $router->map('GET|POST', '/users_add', 'c_dashboardController#users_add', 'users_add');
        $router->map('GET|POST', '/contents/[i:id]', 'c_dashboardController#contents', 'contents');
        $router->map('GET|POST', '/contents_edit[.:format]?', 'c_dashboardController#contents_edit', 'contents_edit');
        // Retourne l'instance du routeur avec les routes définies
        return $router;
    }
}
