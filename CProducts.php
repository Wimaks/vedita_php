<?php


class CProducts{    
 
    private $products;

    public function __construct($products=NULL){
        $this->products = $products;
    }

    public function set($products){
        return $this->products = $products;
    }

    public function get($limit=Null){
        include('includes/db.php');
        $query = "SELECT * FROM products WHERE IS_HIDE = false ORDER BY DATE_CREATE DESC ";
        if($limit != NULL){
            $query .= "LIMIT $limit";
        };
        $result = $mysqli->query($query) or die($mysqli->error);
        return $this->set($result);
    }

    public function show(){
        $result = $this->products;
         echo "<table>
            <tr>
               <th>ID</th>
               <th>ID Продукта</th>
               <th>Наименование продукта</th>
               <th>Цена</th><th>Артикль</th>
               <th>Кол-во</th>
               <th>Дата добавления</th>
               <th>Скрытие</th>
            </tr>";
        while ($row=mysqli_fetch_array($result)) {
          echo "<tr id=$row[0]>
          <td>$row[0]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td>$row[4]</td>
          <td><button id=minus>-</button><span>$row[5]</span><button id=plus>+</button></td>
          <td>$row[6]</td>
          <td><button onclick=hide_row($row[0])>Скрыть</button></td>
        </tr>";
        }
         echo "</table>";
    }

}

?>