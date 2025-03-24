<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Affiche la liste des projets
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Dans une application réelle, ces données viendraient d'une base de données
        $projects = $this->getProjects();
        
        return view('pages.projects', [
            'projects' => $projects
        ]);
    }

    /**
     * Affiche les détails d'un projet spécifique
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Dans une application réelle, ces données viendraient d'une base de données
        $projects = $this->getProjects();
        
        // Recherche du projet par son slug
        $project = collect($projects)->firstWhere('slug', $slug);
        
        // Si le projet n'existe pas, redirection vers la liste des projets
        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Projet non trouvé');
        }
        
        return view('pages.project-detail', [
            'project' => $project
        ]);
    }

    /**
     * Données de démonstration pour les projets
     * Dans une application réelle, ces données viendraient d'une base de données
     *
     * @return array
     */
    private function getProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'Centre Commercial Modern',
                'slug' => 'centre-commercial-modern',
                'category' => 'commercial',
                'description' => 'Un espace commercial innovant avec une architecture contemporaine et des solutions durables.',
                'completion_year' => '2023',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab',
                'full_description' => 'Ce centre commercial moderne représente une nouvelle approche du commerce de détail, combinant espaces de vente, de restauration et de loisirs dans un environnement architectural audacieux. Le projet a mis l\'accent sur la durabilité avec des systèmes énergétiques efficaces et des matériaux écologiques.',
                'features' => [
                    'Surface de 25 000 m²',
                    'Certification environnementale LEED Gold',
                    'Toiture végétalisée',
                    'Système de récupération des eaux pluviales',
                    'Éclairage LED intelligent'
                ],
                'gallery' => [
                    'https://images.unsplash.com/photo-1497366811353-6870744d04b2',
                    'https://images.unsplash.com/photo-1497366754035-f200968a6e72',
                    'https://images.unsplash.com/photo-1497366216548-37526070297c'
                ]
            ],
            [
                'id' => 2,
                'title' => 'Résidence de Luxe',
                'slug' => 'residence-de-luxe',
                'category' => 'residential',
                'description' => 'Une maison familiale élégante combinant confort moderne et design intemporel.',
                'completion_year' => '2022',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                'full_description' => 'Cette résidence de luxe a été conçue pour offrir un cadre de vie exceptionnel, alliant esthétique contemporaine et fonctionnalité. Chaque espace a été pensé pour maximiser la lumière naturelle et créer une connexion harmonieuse avec l\'environnement extérieur.',
                'features' => [
                    'Surface habitable de 450 m²',
                    'Piscine intérieure chauffée',
                    'Système domotique intégré',
                    'Matériaux haut de gamme',
                    'Jardin paysager de 1200 m²'
                ],
                'gallery' => [
                    'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c',
                    'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea',
                    'https://images.unsplash.com/photo-1600210492493-0946911123ea'
                ]
            ],
            // Ajoutez les autres projets ici...
        ];
    }
}