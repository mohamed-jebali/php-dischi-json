<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/232px-Spotify_icon.svg.png">
    <!-- LINK BOOTSTRAP V.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- VUE 3 SCRIPT -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div id="app">
        <div class="wrapper-app spotify-bg-header">
        <div class="container mb-5">
            <header class="row">
           <div class="col-12 mx-auto mb-3">
            <img class='icon-brand' src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/232px-Spotify_icon.svg.png" alt="icon-spotify">
                </div>
            </header>
           </div>
        </div>
        <div class="container">
            <div class="col-10 row mx-auto mb-3 justify-content-around ">
            <div class="card-disc p-4 col-3 rounded" v-for="disc in listDiscs">
                <img class='img-card mb-2' :src="disc.poster" alt="disc.title">
                <h3 class='text-center text-white'>
                 {{ disc.title }}
                </h3>
                <p class='text-center text-white'>
                {{ disc.author }}
                </p>
                <p class='text-center text-white fw-bold'>
                {{ disc.year }}
                </p>
            </div>
            </div>
    </div>
    <script src="./script/main.js"></script>
</body>
</html>


<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato. -->