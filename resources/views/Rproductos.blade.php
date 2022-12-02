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
    <div class="title">Registration Comics</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter Comic name" required>
          </div>
          <div class="input-box">
            <span class="details">Edishion</span>
            <input type="text" placeholder="Numero de edicion de comic" required>
          </div>
          <div class="input-box">
            <span class="details">Compañia</span>
            <input type="text" placeholder="Compañia del comic" required>
          </div>
          <div class="input-box">
            <span class="details">Cantidad</span>
            <input type="text" placeholder="Numero de Comics" required>
          </div>
          <div class="input-box">
            <span class="details">Precio Compra</span>
            <input type="text" placeholder="Precio del Comic" required>
          </div>
          <div class="input-box">
            <span class="details"> Fecha Ingreso</span>
            <input type="text" placeholder="Fecha de Recibo" required>
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
