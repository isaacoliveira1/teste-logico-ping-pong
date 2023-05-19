


<div class = "round">
            <?php
            // Entrada do valor com string ":" utilizar trim para pegar os valores e fazer a validação
            /* validações
            Player A sempre começa com o saque
            Jogo > 20 = 2 Sacadas por jogador
            Jogo < 20 = 5 Sacadas por jogador
            Ganhar o jogo > 21 minimo 2 pontos de liderança
            Jogo 20:20 primeiro a alcançar 22 Pts
            */
                $valor = $_POST['entrada'];
                $trim = explode(":", $valor);
                $jogadorA = intval($trim[0]);
                $jogadorB = intval($trim[1]);
                $saque = $jogadorA + $jogadorB;
                for($i=0;$i <= $saque; $i++){
                    if(abs($jogadorA - $jogadorB) < 2 && $jogadorA < 21 && $jogadorB < 21 ) {          
                        if($i >=0 & $i < 5){
                            $retorna = "<br>"."Jogador A";
                        } else if ($i >= 5 && $i < 10) {
                            $retorna = "<br>"."Jogador B";
                        } else if( $i >= 10 && $i < 15){
                            $retorna = "<br>"."Jogador A";
                        } else if( $i >= 15 && $i < 20){
                            $retorna = "<br>"."Jogador B";
                        }
                    } else {
                        if($jogadorA > $jogadorB){
                            $retorna = "<br>"."Jogador A";

                        } else{
                            $retorna = "<br>"."Jogador B";

                        }
                    }
                    
                }
                echo $retorna;
               
            ?>
            <form name="form" action="index.php" method="post">
            <input type="submit" name="voltar" 
           value="Voltar"/>
            </form>
</div>