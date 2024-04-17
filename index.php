<?php 
    $disk_container = file_get_contents('disks.json');
    var_dump($disk_container);
    $disks_contents = json_encode($disk_container);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Disks</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>
    
<div id="app">
<!-- <ul>
    <li v-for="(disk, index) in disks">
    <span>
        {{ disk.title }}
        {{ disk.author }}
        {{ disk.year }}
        {{ disk.poster }}
        {{ disk.genre }}
    </span>
    </li>
</ul> -->
</div>




<!-- CDN for Vue Js and Axios -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

<script src='app.js'></script>
</body>
</html>

</body>
</html>