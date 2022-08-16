<?php
   include_once "../../../../Backend/modelo/producto/producto_mod.php";

   $queso = new Producto;
   $all_queso = $queso -> producto_queso();
   // print_r($all_queso);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../../Vendor//CSS//Lacteos.css">

   <!-- custom js file link  -->
   <script src="../../../../Backend/Scrip.js" defer></script>

</head>
<body>
   <nav class="nav">
      <ul class="menu">
      <li><a href="../../productos/publico/Lacteos_Productos.html">PRODUCTOS</a></li>
          <li><a href="../../Producto//index.php">PEDIR PRODUCTO</a></li>
          <li><a href="../../../Inicio.html">INICIO</a></li>
      </ul>
  </nav>
   <!--Productos-->
    <div class="container">

        <h3 class="title">Productos quesos</h3>
     
        <div class="products-container">
     
         <?php
            foreach($all_queso as $q){
         ?>

           <div class="product" data-name="p-<?php echo $q -> id ?>">
              <img src="../../../../Backend/img/productos/<?php echo $q -> imagen ?>" alt="">
              <h3><?php echo $q -> descripcion ?></h3>
              <div class="price">$<?php echo $q -> precio ?></div>
           </div>

           <?php
               }
            ?>
     
        </div>
     
     </div>
     <!--Tarjeta de compra-->
     
     <div class="products-preview">

         <?php
            foreach($all_queso as $q){
         ?>
     
        <div class="preview" data-target="p-<?php echo $q -> id ?>">
           <i class="fas fa-times"></i>
           <img src="../../../../Backend/img/productos/<?php echo $q -> imagen ?>" alt="">
           <h3><?php echo $q -> descripcion ?></h3>
           <div class="price">$<?php echo $q -> precio ?></div>
           <div class="buttons">
            <a href="../../Producto//index.php" class="buy">Compra ahora</a>
            <a href="../../Producto//index.php" class="cart">Agregar al carrito</a>
           </div>
        </div>
     </div>

         <?php
            }
         ?>
     
     </body>
     </html>