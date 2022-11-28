<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->
<?php
$calendario = [
    [
        'home_team' => 'Lakers',
        'guest_team' => 'Chicago Bulls',
        'home_point' => 10,
        'guest_point' => 5,
    ],
    [
        'home_team' => 'Lakers2',
        'guest_team' => 'Chicago Bulls2',
        'home_point' => 10,
        'guest_point' => 5,
    ],
    [
        'home_team' => 'Lakers3',
        'guest_team' => 'Chicago Bulls3',
        'home_point' => 10,
        'guest_point' => 5,
    ],
];
var_dump($calendario)

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
</head>

<body>


    <header id="site_header"></header>
    <!-- /#site_header -->
    <main id="site_main">
        <ul>
            <?php foreach ($calendario as $match) ?>
            <li><?php echo $match['home_team'] . '-' . $match['guest_team'] ?> | <?php echo $match['home_point'] . '-' . $match['guest_point'] ?></li>
        </ul>
        <form action="./index.php">

        </form>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"></footer>
    <!-- /#site_footer -->


    <script src='https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js'></script>
    <script src=''></script>
</body>

</html>