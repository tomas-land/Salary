<?php

require_once 'conect.php';
require_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>



    <div class="container-md pt-5 ">
    <form action="" method="post">
    <div class="input-box">
           
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">DATA</span>
                    <input type="text" name="data" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">PADAI</span>
                    <input type="text"name="padai" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">EILES</span>
                    <input type="text"name="eiles" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">VIP</span>
                    <input type="text"name="vip" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">NAKT-VAL</span>
                    <input type="text"name="nakt_val" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">EXTRA</span>
                    <input type="text"name="extra" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                </div>

        </div>
        <div class="input-group mb-3">
            <button name="create-dataRow" class="btn btn-outline-secondary" type="submit">SUBMIT</button>
        </div>
        </form>


        <table class="table mt-5">
            <thead class="thead-light">
                <tr>
                    <th class="col">id</th>
                    <th class="col">DATA</th>
                    <th class="col">PADAI</th>
                    <th class="col">EILES</th>
                    <th class="col">VIP</th>
                    <th class="col">NAKT-VAL</th>
                    <th class="col">EXTRA</th>
                    <th class="col text-center">actions</th>
            </thead>
            <tbody>
                <tr>

                    <?php
                    display_projects($result);
                    ?>
                </tr>
<tr>
<td>

</td>
<td>

</td>
<td>
<?php print($padai);?>
</td>
<td>

</td>
<td>

</td>
<td>

</td>
<td>

</td>
</tr>





            </tbody>
        </table>
    </div>






</body>

</html>