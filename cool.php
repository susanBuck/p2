<?php
//var_dump($_GET);
//echo 'numbers are'.$_GET['totalnum']

$numpeople = $_GET['numpeople'];
$totalnum = $_GET['totalnum'];
        $tip = $_GET['tip'];
        $amount = (($totalnum * $tip)+$totalnum)/$numpeople; //Per Person Bill Calc

        if(isset($_GET['roundup']) && //If Checked off Round up Amount people owe

           $_GET['roundup'] == 'Yes')
{
          echo(ceil($amount));
        }
        else
        {
            echo $amount;
        }
 ?>
