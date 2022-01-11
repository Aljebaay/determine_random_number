
<?php require_once('random.php') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container bg-dark text-white p-4">  
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" name="form">

        <input type="hidden" name="counter" value="<?= $counter; ?>">
        <input type="hidden" name="rand-num" value="<?= $rand_num; ?>">
        <input type="hidden" name="min-num" value="<?= $min_rand_num; ?>">
        <input type="hidden" name="max-num" value="<?= $max_rand_num; ?>">

        <div class="w-50 ml-0 mr-0 mx-auto text-center ">
            <h3> <?= counter($counter, $rand_num) ?></h3>

            <input type="submit" class="btn btn-warning" value="Kleiner" name="submit-smaller" />
            <input type="submit" class="btn btn-success" value="Rechtig" name="right-number"/>
            <input type="submit" class="btn btn-primary" value="Größer" name="submit-greater" />
        </div>
    </form>
</div>


