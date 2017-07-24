<?php
exec('MODE COM4:9600,n,8,1');
$fp=fopen("COM4","r+b");
if(!$fp){
echo("Erro ao abrir a porta com1");
exit;
} else echo("COM4 aberta <br>");
echo("enviando ENQ <br>");
fwrite($fp,chr(5));
echo("aguardando <br>");
sleep(1);
echo(fgets($fp));
echo("recebido <br>");
fclose($fp);
?><?php
exec('MODE COM4:9600,n,8,1');
$fp=fopen("COM4","r+b");
if(!$fp){
echo("Erro ao abrir a porta com1");
exit;
} else echo("COM4 aberta <br>");
echo("enviando ENQ <br>");
fwrite($fp,chr(5));
echo("aguardando <br>");
sleep(1);
echo(fgets($fp));
echo("recebido <br>");
fclose($fp);
?>