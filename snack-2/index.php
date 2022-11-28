<!-- ## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
if (empty($_GET['name']) && $_GET['email'] && $_GET['age']) {
    # code...

} else {
    $name = $_GET['name'];
    if (strlen($name) <= 3) {
        # code...
        echo 'il nome inserito non è valido';
        // $name_error = 'il nome inserito non è valido';
    }
    //  else {
    //     $class = 'red';
    // }
    function chkEmail($email)
    {

        $email = $_GET[$email];

        // se la stringa è vuota sicuramente non è una mail
        if (!$email) {
            return false;
        }

        // controllo che ci sia una sola @ nella stringa
        $num_at = count(explode('@', $email)) - 1;
        if ($num_at != 1) {
            return false;
        }

        // controllo la presenza di ulteriori caratteri "pericolosi":
        if (strpos($email, ';') || strpos($email, ',') || strpos($email, ' ')) {
            return false;
        }

        return true;
    }

    if (chkEmail($email)) {
        echo 'Indirizzo email corretto';
    } else {
        echo 'Indirizzo email errato';
    }
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <title>Document</title>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
    <link rel='stylesheet' href=''>
    <style>

    </style>
</head>

<body>


    <header id="site_header">

    </header>
    <!-- /#site_header -->
    <main id="site_main">

        <form action="./index.php">
            <div>
                <label for="name">
                    Name
                </label>
                <input type="text" name="name" id="name">
                <label for="email">
                    Email
                </label>
                <input type="email" name="email" id="email">
                <label for="age">
                    age
                </label>
                <input type="number" name="age" id="age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </main>
    <!-- /#site_main -->
    <footer id="site_footer">

    </footer>
    <!-- /#site_footer -->

    <script src='https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js'></script>
    <script src=''></script>
</body>

</html>