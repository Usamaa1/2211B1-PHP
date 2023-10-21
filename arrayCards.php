<?php

    $prodNames = [
        [
            'name'=>'Headphone',
            'description'=>'Wired Headphones 3 5mm Bass Stereo Foldable With Microphone Adjustable Headphones Suitable For Pc',
            'price' => 45000
        ],
        [
            'name'=>'File',
            'description'=>'Wired Headphones 3 5mm Bass Stereo Foldable With Microphone Adjustable Headphones Suitable For Pc',
            'price' => 45
        ],
        [
            'name'=>'Duster',
            'description'=>'Wired Headphones 3 5mm Bass Stereo Foldable With Microphone Adjustable Headphones Suitable For Pc',
            'price' => 230
        ],
        [
            'name'=>'Fan',
            'description'=>'Wired Headphones 3 5mm Bass Stereo Foldable With Microphone Adjustable Headphones Suitable For Pc',
            'price' => 5600
        ]
    ];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row">
        <?php foreach( $prodNames as $value){ ?>
           <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value['name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $value['price'] ?></h6>
                    <p class="card-text"><?php echo $value['description'] ?></p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>       
        <?php } ?>      
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>