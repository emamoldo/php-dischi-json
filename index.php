<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Disks</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <div id="app">
        <!-- Header with the logo -->
        <div class="header">
            <div class="container">
                <img class="logo" src="./assets/img/Spotify_Logo_CMYK_Black.png" alt="">
            </div>
        </div>




        <!-- main with the posters and the info of the disks -->
        <div class="main py-5">
            <!-- Structure for the cards -->
            <div class="container text-center">
                <div class="row row-cols-4">

                    <div class="cards card py-5 my-3 mx-3" v-for="(disk, index) in disks">

                        <div class="col">
                            <img class="poster" :src="disk.poster" alt="">
                        </div>

                        <div class="title col">
                            {{ disk.title }}
                        </div>

                        <div class="author col">
                            {{ disk.author }}
                        </div>

                        <div class="year col">
                            {{ disk.year }}
                        </div>

                    </div>



                </div>
            </div>
        </div>


        <!-- CDN for Vue Js and Axios -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js'
            integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=='
            crossorigin='anonymous' referrerpolicy='no-referrer'>
            </script>

        <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

        <script src='./assets/js/app.js'></script>
</body>

</html>

</body>

</html>