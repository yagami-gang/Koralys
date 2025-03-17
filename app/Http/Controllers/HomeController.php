<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Affiche la page demandée
     *
     * @param string|null $page
     * @return \Illuminate\View\View
     */
    public function show($page = null)
    {
        // Si aucune page n'est spécifiée, afficher la page d'accueil
        if ($page === null || $page === '') {
            $page = 'home';
        }
        
        // Vérifier si la vue existe
        $viewPath = 'pages.' . $page;
        
        if (View::exists($viewPath)) {
            return view($viewPath);
        }
        
        // Si la vue n'existe pas, retourner une page 404
        abort(404);
    }
}