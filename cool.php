

<?php
require ('Form.php');
//require ('helpers.php');


#use DWA\Form;

$form = new DWA\Form ($_GET);
if ($form->isSubmitted()) {




    $errors = $form->validate(
        [
            'numpeople' => 'required|numeric',
'totalnum'=> 'required|numeric',

        ]    );




$numpeople = $_GET['numpeople'];
    $totalnum = $_GET['totalnum'];
            $tip = $_GET['tip'];
            $amount = (($totalnum * $tip)+$totalnum)/$numpeople; //Per Person Bill Calc

            if(isset($_GET['roundup']) && //If Checked off Round up Amount people owe

               $_GET['roundup'] == 'Yes')
    {
              $amount = (ceil($amount));
            }


}



 ?>
