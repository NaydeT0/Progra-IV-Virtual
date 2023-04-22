<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de alumnos</title>
</head>
<body>
    <form action="procesar_datos_alumnos.php" method="post">
        <label for="textnombre">NOMBRE:</label>
        <input type="text" name= "textnombre" id="textnombre" 
        required title= "Por favor ingrese su nombre">
        <br><br>

        <label for="textdireccion">DIRECCION</label>
        <input type="textdireccion" name="textdireccion" id= "textdireccion" 
        required title= "Por favor ingrese su direccion de residencia">
        <br><br>

        <label for="textedad">EDAD</label>
        <input type="number" name="textedad" id="textedad" 
        required title= "Por favor ingrese su edad">
        <br><br>
        
        <input type="submit" value="ENVIAR DATOS">

    </form>
</body>
</html>

