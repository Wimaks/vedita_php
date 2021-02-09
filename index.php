<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Vedita тестовая таблица</title>
   <script src="https://code.jquery.com/jquery-3.5.0.js"></script>  
</head>
<body>

      <?php 
      include("CProducts.php");
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
         $('#'+id).hide();
      }
   });
}

function increase(id){
   var cq = document.querySelector("tr[id='"+id+"']>td:nth-child(6)>span");
   $current_quantity = new Number(cq.innerText); 
   $.ajax({
      type: "POST",
      url: "increase.php",
      data: {
         "id": id,
         "quantity": $current_quantity + 1
      },
      success: function(){ 
         console.log(cq.innerText);
         cq.innerHTML = $current_quantity + 1;
         console.log(cq.innerText);
      }
   });
}

function decrease(id){
   var cq = document.querySelector("tr[id='"+id+"']>td:nth-child(6)>span");
   $current_quantity = new Number(cq.innerText); 
   if ($current_quantity > 0){
      $.ajax({
      type: "POST",
      url: "decrease.php",
      data: {
         "id": id,
         "quantity": $current_quantity - 1
      },
      success: function(){ 
         console.log(cq.innerText);
         cq.innerHTML = $current_quantity - 1;
         console.log(cq.innerText);
      }
   })
   };
}
</script>
<script src="index.js"></script>
</body>
</html>