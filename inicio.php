<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herois-PHP</title>
</head>
<body>
    <?php
        /*$x=5; //declara variável no PHP
        echo $x; //Lê variável no PHP
        if($x==5){
            echo "ok" . "<br>"; // Para concatenar no PHP, usa-se .
        } else{
            echo "errado!";
        }*/

        $universo = "Marvel";
        $heroi = "Batman";
        $replay = 0;

        if($universo == "Marvel"){
            for($replay = 0; $replay < 10; $replay++){
                
                if($heroi == "Hulk"){
                   echo '<p>O universo escolhido foi:<b>' .$universo . '</b> e o herói foi:<b>' . $heroi . '</b></p><br>'; 
                }
                else if($heroi == "Capitão América"){
                    echo '<p>O universo escolhido foi:<b>' .$universo . '</b> e o herói foi:<b>' . $heroi . '</b></p><br>'; 
                }
                else if($heroi == "Homem de Ferro"){
                    echo '<p>O universo escolhido foi:<b>' .$universo . '</b> e o herói foi:<b>' . $heroi . '</b></p><br>'; 
                }
                else if($heroi == "Pantera Negra"){
                    echo '<p>O universo escolhido foi:<b>' .$universo . '</b> e o herói foi:<b>' . $heroi . '</b></p><br>'; 
                }
                else if($heroi == "Doutor Estranho"){
                    echo '<p>O universo escolhido foi:<b>' .$universo . '</b> e o herói foi:<b>' . $heroi . '</b></p><br>'; 
                }
                else{
                    echo '<p>O universo escolhido foi:<b>' .$universo . '</b> mas o herói <strong>NÃO EXISTE</strong> nesse universo. <br>'; 
                }
                    
            }
        }
        else if($universo == "DC"){
            while($replay < 10){
                if($heroi == "Superman"){
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                }
                else if($heroi == "Batman"){
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                }
                else if($heroi == "Mulher Maravilha"){
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                }
                else if($heroi == "Lanter Verde"){
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                }
                else if($heroi == "Flash"){
                    echo 'O universo é: <b>' . $universo . '</b> e o herói é o <b>' . $heroi . '</b><br>';
                }
                
                $replay++;
            }
        }
        else{
            echo 'Universo inválido!';
        }
            
    ?>
</body>
</html>