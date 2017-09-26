<!DOCTYPE html>
<html>
 <head>
   <title></title>

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

 </style>

<meta charset ='utf-8'>
 </head>
 <body>
<h1>	 Bill Splitter </h1>

<div class="container">
<form method='GET' action= 'index.php' >
    <div>
        <label for="split">Split by # of People:</label>
        <input type="text" id="name" name="numpeople">
    </div>
<br>
<br>
    <div>
        <label for="tabtotal">Tab Total</label>
        <input type="text" id="mail" name="totalnum">
    </div>
    <br>
    <div>
    <label for='tip'>Tip Amount</label>
           <select name='tip' id='tip'>
               <option value='select'>Select</option>
               <option value='10' >10%</option>
               <option value='15' >15%</option>
               <option value='18' >18%</option>
               <option value='20' >20%</option>
               <option value='25' >25%</option>
           </select>
    </div>
    <br>
    <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Calculate'>

</form>
	</div>


</body>
</html>
