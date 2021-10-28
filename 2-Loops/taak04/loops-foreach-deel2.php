<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

foreach ($klassen as $value) {
    echo "$x <br>";
  }
?>
<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>

</head>

<body>

<form method="post" action="mailto:jouwemail@adres.nl">

<em>Vul je voornaam in:</em> <input type="text" size="20" maxlength="40" name="voornaam"><br>

<input type="submit" value="Verzenden">



<select>

<option value="8A">8A</option>

<option value="8B">8B</option>

<option value="8C">8C</option>

<option value="8D">8D</option>

<option value="8E">8E</option>

<option value="9A">9A</option>

<option value="9B">9B</option>

<option value="9C">9C</option>

<option value="9D">9D</option>

<option value="9E">9E</option>

</select>

</form>



