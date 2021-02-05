<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vedita тестовая таблица</title>
   <script src="https://code.jquery.com/jquery-3.5.0.js"></script>  
</head>
<body>

      <?php 
      include("CProducts.php");
      echo "<link rel='stylesheet' href='style.css'>";
      $products = new CProducts;
      $products->get(10);
      $products->show();
     
?>
<script>
function hide_row(id){
   $.ajax({
      type: "POST",
      url: "hide_product.php",
      data: "id="+id,
      success: function(){
         $('#'+ id).hide("slow");
      }
   });
}

</script>
<script src="index.js"></script>
</body>
</html>