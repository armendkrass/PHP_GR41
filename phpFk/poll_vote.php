<?php
$vote = $_REQUEST['vote'];

//merret permbajta e textfile-it
$filename = "poll_result.txt";
$content = file($filename);

//vendos permbajtjen ne varg
$array = explode("||", $content[0]);
$Fiek = $array[0];
$Fim = $array[1];
$Fna=$array[2];

if ($vote == 0) {
    $Fiek = $Fiek + 1;
}
if ($vote == 1) {
    $Fim = $Fim + 1;
}
if($vote==2){
    $Fna=$Fna +1;
}

//shtohen votat ne textfile
$insertvote = $Fiek."||".$Fim."||".$Fna;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Rezultatet:</h2>
<table>
    <tr>
        <td>FIEK:</td>
        <td>
            <img src="foto/poll.png"
                 width='<?php echo(100*round($Fiek/($Fim+$Fna+$Fiek),2)); ?>'
                 height='20'>
            <?php echo(100*round($Fiek/($Fim+$Fna+$Fiek),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>FIM:</td>
        <td>
            <img src="foto/poll.png"
                 width='<?php echo(100*round($Fim/($Fim+$Fiek+$Fna),2)); ?>'
                 height='20'>
            <?php echo(100*round($Fim/($Fim+$Fiek+$Fna),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>FNA:</td>
        <td>
            <img src="foto/poll.png"
                 width='<?php echo(100*round($Fna/($Fiek+$Fim+$Fna),2)); ?>'
                 height='20'>
            <?php echo(100*round($Fna/($Fiek+$Fim+$Fna),2)); ?>%
        </td>
    </tr>
</table>