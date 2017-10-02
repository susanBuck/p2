

<?php require ('cool.php');?>

<!DOCTYPE html>

<html>
 <head>


   <style type="text/css">
   label{
     display: block;
     float: left;
     width : 120px;
   }
   form {
     width: 300px;
 margin: 0 auto;
    }
h1 {    text-align: center;
font-family: "Tahoma"
}

ul {color: blue;}

 </style>
<title>Bill Splitter</title>
<meta charset ='utf-8'>
 </head>
 <body>
<h1>	 Bill Splitter </h1>
<div class="container">
  <form method='GET'  >
    <div>
        <label for="numpeople">Split by # of People: <div style="color: red; ">(required)</div></label>
        <input type="text" id="numpeople" name="numpeople">
    </div>
    <br>
<br>
<br>
    <div>
        <label for="totalnum">Tab Total <div style="color: red; ">(required)</div></label>
        <input type="text" id="totalnum" name="totalnum">
</div>
  <br>
    <div>
      <br>
    <label for='tip'>Tip Amount</label>
           <select name='tip' id='tip'>
               <option value='select'>Select</option>
               <option value='.10' >10%</option>
               <option value='.15' >15%</option>
               <option value='.18' >18%</option>
               <option value='.20' >20%</option>
               <option value='.25' >25%</option>
           </select>
    </div>
    <br>
    <div>
        <label for="roundup">Round Up?</label>
        <input type="checkbox" id="roundup" name="roundup" value="Yes" />
    </div>
    <br>

    <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Calculate'>


<?php if (isset($errors)): ?>

  <ul>
    <?php foreach($errors as $error): ?>
      <li> <?=$error?></li>
    <?php endforeach; ?>
    <li><?php if( $_GET['tip'] == 'select') { echo 'Select Tip Amount'; };?></li>
  </ul>
<?php endif; ?>

<div>
<p>The total per person is: <?php echo $amount;?> </p>
</div>
</form>
</div>



</body>
