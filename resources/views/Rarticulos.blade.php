<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="{{ asset('css/Registers.css') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration of Articles</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Kind of Article</span>
            <input type="text" placeholder="kind of article" required>
          </div>
          <div class="input-box">
            <span class="details">Name of article </span>
            <input type="text" placeholder="Enter Name of Article" required>
          </div>
          <div class="input-box">
            <span class="details">Marca</span>
            <input type="text" placeholder="Marca o provedor" required>
          </div>
          <div class="input-box">
            <span class="details">Descripshion</span>
            <input type="text" placeholder="Descripcion del articulo " required>
          </div>
          <div class="input-box">
            <span class="details">Precio Compra</span>
            <input type="text" placeholder="Precio del articulo" required>
          </div>
          <div class="input-box">
            <span class="details"> Cantidad </span>
            <input type="text" placeholder="Fecha de Ingreso del Articulo" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" >
          <input type="radio" name="gender" >
          <input type="radio" name="gender" >
          
          
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
