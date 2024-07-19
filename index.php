<?php

require "./service/database.php";

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

$albums = query("SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alboem Kelas</title>
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body class="grid grid-cols-[15%,85%]">
    <aside class="bg-gray-200 w-full h-screen">
        <div class="bg-white w-full h-16 flex justify-center">
            <h1 class="text-xl font-bold self-center">Daftar Siswa</h1>
        </div>
        <ul class="flex flex-col overflow-y-scroll">
            <?php foreach ($albums as $album) : ?>
            <li class="hover:bg-gray-300 py-4 transition-all duration-300 ease-linear">
                <a class="px-2" href="#"><?= $album['nama']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <main class="bg-gray-100">
        <header class="bg-white w-full h-16 flex">
            <ul class="self-center">
               <li>
                <a href="#" class="text-xl px-2 py-2">Home</a>
               </li> 
            </ul>
        </header>
    </main>
</body>
</html>