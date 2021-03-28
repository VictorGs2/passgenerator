<?php
$alphabetUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$alphabetLower = "abcdefghijklmnopqrstuvwxyz";
$digits = "0123456789";
$types = [];
$randstring = '';

if (isset($randstring) && isset($_POST['passlength'])) {
    $passlength = $_POST['passlength'];
    if (isset($_POST['type1'])) {
        $typeNumber = $_POST['type1'];
        if ($typeNumber == 'number') {
            $types[] = $digits;
        }
    }
    if (isset($_POST['type2'])) {
        $typelowercase = $_POST['type2'];
        if ($typelowercase == 'lowercase') {
            $types[] = $alphabetLower;
        }
    }
    if (isset($_POST['type3'])) {
        $typeuppercase = $_POST['type3'];
        if ($typeuppercase == 'uppercase') {
            $types[] = $alphabetUpper;
        }
    }
    for ($i = 1; $i <= $passlength; $i++) {
        // Pega um dos elementos do array TYPES randomicamente
        $randType = $types[rand(0, count($types) - 1)];
        // var_dump($randType);
        $randstring .= $randType[rand(0, strlen($randType) - 1)];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/stylesheet/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://image.flaticon.com/icons/png/512/102/102643.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Bootstrap
                </a>
            </div>
        </nav>
    </header>
    <div class="content">
        <form method="post">
            <div class="form-check">
                <!-- <div class="input-group mb-3"> -->
                    <label for="">Tamanho</label>
                    <input class="form-control" type="number" name="passlength" id="">
                    <label for="">Senha</label>
                    <input class="form-control" type="text" name="" id="" value="<?= $randstring ?>" readonly>
                    <button class="btn btn-success" id="checkBtn">Gerar</button><br>
                    <input class="form-check-input" type="checkbox" class="teste" name="type1" id="type1" value="number" checked>
                    <label for="">Números</label><br>
                    <input class="form-check-input" type="checkbox" class="teste" name="type2" id="type2" value="lowercase" checked>
                    <label for="lowercase">Letras (Caixa Baixa)</label><br>
                    <input class="form-check-input" type="checkbox" class="teste" name="type3" id="type3" value="uppercase" checked>
                    <label for="uppercase">Letras (Caixa Alta)</label><br>
                    <!-- <input type="text"  placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server"> -->
                <!-- </div> -->
                <div></div>

            </div>
        </form>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type=checkbox]').on('change', function() {
            checked = $("input[type=checkbox]:checked").length;

            if (checked > 1) {
                if ('input[type=checkbox]:checked') {
                    $('input[type=checkbox]:checked').prop('disabled', false);
                }
            }
            if (checked <= 1) {
                if ('input[type=checkbox]:checked') {
                    $('input[type=checkbox]:checked').prop('disabled', true);
                }

            }
        });
    });
</script>

</html>