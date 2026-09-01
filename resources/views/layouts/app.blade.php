<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Prefeitura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body class="d-flex">
 
    <aside class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
        <h4>Prefeitura</h4>
        <ul class="nav flex-column">
            <li><a href="/funcionarios" class="nav-link text-white">Funcionários</a></li>
            <li><a href="/cnhs" class="nav-link text-white">CNHs</a></li>
            <li>------</li>
            <li><a href="/secretarias" class="nav-link text-white">Secretarias</a></li>
            <li><a href="/projetos" class="nav-link text-white">Projetos</a></li>
            <li>------</li>
            <li><a href="/bairros" class="nav-link text-white">Bairros</a></li>
        </ul>
    </aside>
 
    <main class="p-4" style="width: 100%;">
        @yield('content')
    </main>
 
</body>
</html>