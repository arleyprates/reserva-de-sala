<?php
/* $cpf = $_SESSION["cpf"];
 $email = $_SESSION["email"];
 $data = $_GET["data"];
 $horai =$_GET["horai"];
 $sala = $_GET["sala"];

 
 if($_SESSION['tipousuario'] != 1){

 }*/
$cpf="1";
$email="teste@teste";
$horai='09:00:00';
$repetir="semana";
$data= '2014-11-03';
$codsetor="1";
//obter horario de encerramento do setor
//$res= mysql_query("SELECT horario_encerramento FROM setor WHERE cod_setor='$codsetor'");
//$horae = mysql_fetch_array($res);
$horae='20:00:00';
//selection da hora final
$hi=explode(":",$horai);
$hf=explode(":",$horae);
echo "Hora Final: ";
echo "<selection id=\"horafinal\" name=\"horaf\">";
for($i=$hi[0];$i<$hf;$i++){
	echo " <option value=\"$i\">$i</option>";
}
echo "</selection>";
//$timestamp= strtotime($data);
if($repetir=="dia"){
	$i=0;
	$dia= date("w",strtotime($data."+$i days"));
	while(($dia!=6) AND ($dia!=0)){
		echo date("Y-m-d",strtotime($data."+$i days"));
		$i++;
		$dia= date("w",strtotime($data."+$i days"));
	}
}else{
	if($repetir=="semana"){
		$nsemana=4;
	        $i=0;
        	while($i<$nsemana){
                	echo date("Y-m-d",strtotime($data."+$i weeks"));
                	$i++;
                	
        	}

	}else{
		$nmes=4;
                $i=0;
                while($i<$nmes){
			$m=$i*5;
                        echo date("Y-m-d",strtotime($data."+$m weeks "));
                        $i++;
                        
                }
	}
}
?>
