<?php 
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cart</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center boder rounded bg-info my-5">
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
         
            <table class="table boder table-primary rounded">
              <thead class="text-center">
                <tr>
                  <th scope="col">Serial No.</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Item Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                   <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="text-center ">
                <?php 
                // $total=0;
                if (isset($_SESSION['cart']))
                 {
                foreach ($_SESSION['cart'] as $key => $value) 
                {
                  // print_r($value);
                  $sr=$key+1;
                  // $total=$total+$value['Price'];
                  echo "
                      <tr>
                        <td>$sr</td>
                       <td>$value[Item_Name]</td>
                        <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'> </td>
                        <form action='manage_cart.php' method='POST'>
                        <td>
                        <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </td>
                        </form>
                        <td class='itotal'></td>
                        <td>
                        <form action='manage_cart.php' method='POST'>
                        <button name='Remove_Item' class='btn btn-sm btn-danger'>REMOVE</button>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                        </td>
                      </tr>
                  ";
                }
              }
                 ?>

              </tbody>
            </table>
     </div>

     <div class="col-lg-3">
      <div class="boder bg-info rounded p-4">
      <h4>Grand Total:</h4>
       <h5 class="text-end" id="gtotal">
        <!-- <?php echo $total ?> -->
         
       </h5>
       <br>
       <?php 

        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
        { 
        ?>
       <form action="purchase.php" method="POST">
          <div class="form-group">
            <label>Full Name:</label>
            <input type="text" name="fname" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Mobile Number:</label>
            <input type="text" name="mobile_no" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Addresh:</label>
            <input type="text" name="addresh" class="form-control" required>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="payment_mod" value="COD" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Cash On Delivery
              </label>
          </div>
          <br>
         <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
       </form>
       <?php 
          }
        ?>
       </div>
     </div>

    </div> 
  </div>


  <script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal')

    function subTotal()
    {
      gt=0;
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

        gt=gt+(iprice[i].value)*(iquantity[i].value);

        /*
         price 10 Quantity 1    gt=0+(10*1)   ==== gt=10

          price 20 Quantity 2   gt=10+(20*2)    ==== gt=50

          price 30 Quantity 3   gt=50+(30*3)    ==== gt=140

        */
      }
      gtotal.innerText=gt;
    }

    subTotal();

  </script>

</body>
</html>