<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calendário em PHP</title>
    <?php 
        date_default_timezone_set('America/Sao_Paulo');
    ?>
</head>
<body>
    <h1>Estamos em <?php echo date('Y');?></h1>
        <p>Hoje é dia <strong><?php echo date('d / '); ?></strong>
            <?php echo date('m'); ?>
            agora são <?php echo date ('H'); ?>horas e
            <?php echo date('i');?> minutos.</p>



        <?php
            function linha($semana){
                echo "<tr>";
                for ($i = 0; $i <=6; $i++){
                    if(isset($semana[$i])){
                        echo "<td>{$semana[$i]}</td>";
                    } else{
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            function calendario(){
                $dia = 1;
                $semana = array();

                while($dia <= 31){
                    array_push($semana, $dia);
                    if(count($semana) == 7){
                        linha($semana);
                        $semana = array();
                    }
                    $dia++;
                }
                linha($semana);
            }

            function hora(){
            $hr = date(" H ");
				if($hr >= 12 && $hr<18) {
			$resp = "Boa tarde!";}
				else if ($hr >= 0 && $hr <12 ){
			$resp = "Bom dia!";}
				else {
			$resp = "Boa noite!";}
				echo "<h1>$resp</h1>";
			}

			function mes(){
		switch (date("m")) {
        case "01":    $mes = Janeiro;     break;
        case "02":    $mes = Fevereiro;   break;
        case "03":    $mes = Março;       break;
        case "04":    $mes = Abril;       break;
        case "05":    $mes = Maio;        break;
        case "06":    $mes = Junho;       break;
        case "07":    $mes = Julho;       break;
        case "08":    $mes = Agosto;      break;
        case "09":    $mes = Setembro;    break;
        case "10":    $mes = Outubro;     break;
        case "11":    $mes = Novembro;    break;
        case "12":    $mes = Dezembro;    break; 
 			}
 			
 		}
			
        ?>
        <table border="1">
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sáb</th>
                <?php calendario(); ?>
            </tr>
        </table>
        <p>
        <?php hora(); ?>
        <?php mes(); ?>
        </p>
</body>
</html>