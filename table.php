<?php 

    $employees = [
            [
                'id' => '1',
                'Name' => 'Arif',
                'Designation' => 'Accountant',
                'Company' => 'Telsoft'
            ],
            [
                'id' => '2',
                'Name' => 'Haris',
                'Designation' => 'Peon',
                'Company' => '10Pearls'
            ],
            [
                'id' => '3',
                'Name' => 'Zahid',
                'Designation' => 'Front Desk Officer',
                'Company' => 'ArphaTech'
            ]
        ];


        $emp_keys = array_keys($employees[0]);

        print_r($emp_keys);



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
    <h1>Employee List!</h1>

    <div class="container">
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Company</th> -->



      <?php  foreach($emp_keys as $key){ ?>
        <th scope="col"><?= $key ?></th>
        <?php } ?>

        
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach($employees as $emp): ?>
        <tr>
            <th scope="row"><?= $emp['id'] ?></th>
            <td><?= $emp['Name'] ?></td>
            <td><?= $emp['Designation'] ?></td>
            <td><?= $emp['Company'] ?></td>
        </tr>
        <?php endforeach; ?>
  
  </tbody>
</table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>