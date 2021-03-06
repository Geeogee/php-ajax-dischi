<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi - PHP, VueJs, Axios</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- Javscript -->
    <script src="js/main.js"></script>

</head>
<body> 
    
    <div class="container">
        
        <div id="app" class="music-library">
            <div id="menu">
                <select v-model="filterKey" @change="filterByGenre">
                    <option value="" selected>All</option>
                    <option v-for="genre in allGenres">{{ genre }}</option>
                </select>
            </div>

            <div id="wrapper-songs">
                <div class="song" v-for="song in music">
                    <div class="song-cover">
                        <img :src="song.poster">
                    </div> 
                    <h2 class="song-text title">
                        {{ song.title }}
                    </h2>
                    <h3 class="song-text author">
                        {{ song.author }}
                    </h3>
                </div>
            </div> 
        </div>
    </div>
    
</body>
</html>