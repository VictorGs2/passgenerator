<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/stylesheet/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <?php include 'process.php'; ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://image.flaticon.com/icons/png/512/102/102643.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Pass Generator
                </a>
            </div>
        </nav>
    </header>
    <div class="content">
        <form id="passgen-form" method="POST" action="">
            <div class="form-check">
                <label for="">Tamanho</label>
                <input class="form-control" type="number" name="passlength" id="passlength">
                <label for="">Senha</label>
                <input class="form-control" type="text" name="" id="" value="<?= $randstring ?>" readonly>
                <button class="btn btn-success" id="checkBtn">Gerar</button><br>
                <input class="form-check-input" type="checkbox" class="teste" name="type1" id="type1" value="number" checked>
                <label for="">Números</label><br>
                <input class="form-check-input" type="checkbox" class="teste" name="type2" id="type2" value="lowercase" checked>
                <label for="lowercase">Letras (Caixa Baixa)</label><br>
                <input class="form-check-input" type="checkbox" class="teste" name="type3" id="type3" value="uppercase" checked>
                <label for="uppercase">Letras (Caixa Alta)</label><br>

            </div>
        </form>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            // $(document).ready(function() {
            //     $('#passgen-form').on('submit', function(e) {
            //         //Stop the form from submitting itself to the server.
            //         e.preventDefault();
            //         // var passlenght = $('#passlenght').val();
            //         var type1 = $('#type1').val();
            //         // var type2 = $('#type2').val();
            //         // var type3 = $('#type3').val();
            //         $.ajax({
            //             type: "POST",
            //             url: 'process.php',
            //             data: {
            //                 // passlenght: passlenght,
            //                 type1: type1,
            //                 // type2: type2,
            //                 // type3: type3,
            //             },
            //             success: function(data) {
            //                 alert(data);
            //             }
            //         });
            //     });
            // });
        </script>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="text">Developed with ❤️ and 💪🏽 by a Student.<br>
                <div class="year">@
                    <?= date("Y") ?> Goulart, José</div>
            </div>
        </div>

    </footer>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type=checkbox]').on('change', function() {
            checked = $("input[type=checkbox]:checked").length;

            if (checked > 1) {
                if ('input[type=checkbox]:checked') {
                    $('input[type=checkbox]:checked').attr('onclick', 'return true');
                }
            }
            if (checked <= 1) {
                if ('input[type=checkbox]:checked') {
                    $('input[type=checkbox]:checked').attr('onclick', 'return false');
                }

            }
        });
    });
    //     $('#contactform').submit(function(e) {
    //     e.preventDefault();
    //     const nome = $('input[name="passlength"]').val();
    //     $.ajax({
    //         url: 'index.php', // caminho para o script que vai processar os dados
    //         type: 'POST',
    //         data: {nome: nome},
    //         success: function(response) {
    //             $('#resp').html(response);
    //         },
    //         error: function(xhr, status, error) {
    //             alert(xhr.responseText);
    //         }
    //     });
    //     return false;
    // });
</script>

</html>