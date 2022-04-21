
<!--
    Laravel recherche le fichier master le modèle de lame que nous venons de créer. 
    Remplacer @yield('meta') par le meta et remplacer @yield('content') par la section
    du contenu
-->

@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="description" content="Tutoriel Laravel 9 gratuit">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
    <p>Corps du contenu.</p>
@endsection