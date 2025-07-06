<?php
return [

    'items' => [

        [
            'label' => 'Inicio',
            'route' => 'dashboard',
            'icon'  => 'home',
            'roles' => ['Admin', 'Instructor', 'Student'],
        ],

        [
            'label' => 'Usuarios',
            'route' => 'users.index',
            'icon'  => 'users',
            'roles' => ['Admin'],
        ],

        [
            'label' => 'Academias',
            'route' => 'academies.index',
            'icon'  => 'school',
            'roles' => ['Admin'],
        ],

        [
            'label' => 'Estilos',
            'route' => 'martials.index',
            'icon'  => 'scroll',
            'roles' => ['Admin'],
        ],
        [
            'label' => 'Mi Academia',
            'route' => 'academy.show',
            'icon'  => 'calendar',
            'roles' => ['Instructor'],
        ],

        [
            'label' => 'Mis Clases',
            'route' => 'classes.index',
            'icon'  => 'calendar',
            'roles' => ['Instructor'],
        ],

        [
            'label' => 'Mi Progreso',
            'route' => 'progress.index',
            'icon'  => 'chart-bar',
            'roles' => ['Student'],
        ],
    ]
];
