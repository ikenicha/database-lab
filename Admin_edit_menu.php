<?php
include_once 'dbconnect.php';

if(isset($_GET['delete']))
{
    $getproductID = $_GET['delete'];
    $sqlquery_delete_product = "DELETE FROM product WHERE ProductID = $getproductID";
    mysqli_query($conn,$sqlquery_delete_product);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Edit Menu</title>
        <<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="database.css">
<style>

</style>
<style>

body  {
    background-image: url("bg/christmas.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
</head>
</body><div class="del">
  <div id="head">
  <div class="topnav-right">
      <div class="dropdown">
        <a href ="Admin_customer_info.html"><button class="dropbtn">CUSTOMER INFO |</button></a>
      </div>

      <div class="dropdown">
        <a href ="Admin_staff_info.html"><button class="dropbtn">STAFF INFO |</button></a>
        </div>

      <div class="dropdown">
        <a href ="Admin_order.html"><button class="dropbtn">ORDER |</button></a>
      </div>


      <div class="dropdown">
        <a href ="Admin_edit_menu.php"><button class="dropbtn">EDIT MENU |</button></a>
      </div>

      <div class="dropdown">
        <a href="Admin_feedback.html"><button class="dropbtn">FEEDBACK |</button></a>
      </div>

      <div class="dropdown">
        <button class="dropbtn">JO-ADMIN |</button>
      </div>

    </div>
    </div>
    <div class="container">

          <div class="row">

            <div class="mid">
              <h2>EDIT MENU</h2><hr>
              <center>
<a href="Admin_add_menu.html"><input type="submit"  value="ADD MENU"></a>
<h1>Main Course</h1>
<table border='2'>
    <tr>
          <th>
            ProductID
          </th>
          <th>
            ProductName
          </th>
          <th>
            Cal
          </th>
          <th>
            Price
          </th>
          <th>
            ProductTypeID
          </th>
          <th>
            imgurl
          </th>
          <th> Delete
          </th>
        </tr>
        <tr>
          <td>1</td>
          <td>Pizza</td>
          <td>250</td>
          <td>150</td>
          <td>1</td>
          <td>food/Pizza.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

        <tr>
          <td>2</td>
          <td>Shrimp</td>
          <td>220</td>
          <td>150</td>
          <td>1</td>
          <td>food/Shrimp.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

        <tr>
          <td>1</td>
          <td>Shell</td>
          <td>220</td>
          <td>150</td>
          <td>1</td>
          <td>food/shell.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>


        <tr>
          <td>1</td>
          <td>Salmon</td>
          <td>220</td>
          <td>150</td>
          <td>1</td>
          <td>food/salmon.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>


<?php

$sqlquery_menu_maincourse = "SELECT * FROM product WHERE ProductType_ProductTypeID = 1";
$result_query_menu_maincourse = mysqli_query($conn,$sqlquery_menu_maincourse);
while($rowmaincourse = mysqli_fetch_assoc($result_query_menu_maincourse)){
echo "
<tr>
<td>".$rowmaincourse['ProductID']."
</td>
<td>".$rowmaincourse['ProductName']."
</td>
<td>".$rowmaincourse['Cal']."
</td>
<td>".$rowmaincourse['Price']."
</td>
<td>".$rowmaincourse['ProductType_ProductTypeID']."
</td>
<td>".$rowmaincourse['imgurl']."&nbsp;&nbsp;&nbsp;<a href='?delete=".$rowmaincourse['ProductID']."'>&times;</a>
</td>
</tr>
";
}
?>

</table>

<h1>Desserts</h1>
<table border='2'>
    <tr>
          <th>
            ProductID
          </th>
          <th>
            ProductName
          </th>
          <th>
            Cal
          </th>
          <th>
            Price
          </th>
          <th>
            ProductTypeID
          </th>
          <th>
            imgurl
          </th>
          <th> Delete
          </th>
        </tr>
        <tr>
          <td>5</td>
          <td>Big Fudgy Bittersweet Brownies</td>
          <td>250</td>
          <td>69</td>
          <td>2</td>
          <td>dessert/brownies.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

        <tr>
          <td>6</td>
          <td>Fresh Raspberry-Mousse Almond Crumb Cake</td>
          <td>250</td>
          <td>89</td>
          <td>2</td>
          <td>food/Crumb.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

        <tr>
          <td>7</td>
          <td>Orange Angel Food Cake with Fruit Compote</td>
          <td>257</td>
          <td>89</td>
          <td>2</td>
          <td>food/Cake.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>


        <tr>
          <td>8</td>
          <td>Caramel
Popcorn</td>
          <td>257</td>
          <td>79</td>
          <td>2</td>
          <td>food/popcorn.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

<?php
$sqlquery_menu_maincourse = "SELECT * FROM product WHERE ProductType_ProductTypeID = 2";
$result_query_menu_maincourse = mysqli_query($conn,$sqlquery_menu_maincourse);
while($rowmaincourse = mysqli_fetch_assoc($result_query_menu_maincourse)){
echo "
<tr>
<td>".$rowmaincourse['ProductID']."
</td>
<td>".$rowmaincourse['ProductName']."
</td>
<td>".$rowmaincourse['Cal']."
</td>
<td>".$rowmaincourse['Price']."
</td>
<td>".$rowmaincourse['ProductType_ProductTypeID']."
</td>
<td>".$rowmaincourse['imgurl']."&nbsp;&nbsp;&nbsp;<a href='?delete=".$rowmaincourse['ProductID']."'>&times;</a>
</td>
</tr>
";
}
?>
</table>

<h1>Beverages</h1>
<table border='2'>
    <tr>
          <th>
            ProductID
          </th>
          <th>
            ProductName
          </th>
          <th>
            Cal
          </th>
          <th>
            Price
          </th>
          <th>
            ProductTypeID
          </th>
          <th>
            imgurl
          </th>
          <th> Delete
          </th>
        </tr>
        <tr>
          <td>9</td>
          <td>Milk</td>
          <td>120</td>
          <td>45</td>
          <td>3</td>
          <td>dessert/milk.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

        <tr>
          <td>10</td>
          <td>Green Tea</td>
          <td>0</td>
          <td>80</td>
          <td>3</td>
          <td>food/tea.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>

        <tr>
          <td>11</td>
          <td>Kiwi Smoothie</td>
          <td>110</td>
          <td>79</td>
          <td>3</td>
          <td>food/kiwi.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>


        <tr>
          <td>12</td>
          <td>Nutty Smoothie</td>
          <td>110</td>
          <td>79</td>
          <td>3</td>
          <td>food/butter.jpg</td>
          <td><img style="margin: 0px 10px"src="error.png" width="15px" height="15px"></td>
        </tr>
<?php
$sqlquery_menu_maincourse = "SELECT * FROM product WHERE ProductType_ProductTypeID = 3";
$result_query_menu_maincourse = mysqli_query($conn,$sqlquery_menu_maincourse);
while($rowmaincourse = mysqli_fetch_assoc($result_query_menu_maincourse)){
echo "
<tr>
<td>".$rowmaincourse['ProductID']."
</td>
<td>".$rowmaincourse['ProductName']."
</td>
<td>".$rowmaincourse['Cal']."
</td>
<td>".$rowmaincourse['Price']."
</td>
<td>".$rowmaincourse['ProductType_ProductTypeID']."
</td>
<td>".$rowmaincourse['imgurl']."&nbsp;&nbsp;&nbsp;<a href='?delete=".$rowmaincourse['ProductID']."'>&times;</a>
</td>
</tr>
";
}
?>
</table>
</body>
<style>
    table{
        width:60%;
    }
    td{
        padding:20px;
        text-align:center;
    }
    </style>
    </html>
