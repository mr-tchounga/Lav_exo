<!-- 
-  Laravel cherchera un modèle de lame nommé « sidebar.blade.php« , et l’importera 
-  ici. Le site @yield est utilisée pour afficher le contenu d’une section donnée.
-->
<html>
    <head>
        @yield('meta')
    </head>
    <body>

        @section('sidebar')

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>