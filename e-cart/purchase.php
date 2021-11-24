<?php 
session_start();
// session_destroy();

$con=mysqli_connect("localhost","root","","ecart");

// if ($con==TRUE)
//  {
//    echo " connect succssfully";
// }
// else
// {
//     echo "connect unsuccssfully";
// }

// if(mysqli_connect_error())
// {
//     echo" <script>
//                 alert('Cannot connect to database')
//                 window.location.href='mycart.php';
//                 </script>";
//         exit();
// }


if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if (isset($_POST['purchase']))
     {
       
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Mobile_Number`, `Addresh`, `Payment_Mod`) value ('$_POST[fname]','$_POST[mobile_no]','$_POST[addresh]','$_POST[payment_mod]')";

          if(mysqli_query($con,$query1))
           {

        $Order_Id=mysqli_insert_id($con);
         $qy2 = "INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
         $stmt=mysqli_prepare($con,$qy2);
         if($stmt)
         {
            mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
            foreach ($_SESSION['cart'] as $key => $value)
             {
                $Item_Name=$value{'Item_Name'};
                $Price=$value['Price'];
                $Quantity=$value['Quantity'];
                mysqli_stmt_execute($stmt);
            }

            unset($_SESSION['cart']);
             echo "<script>
               alert('Order Successfully Placed');
                window.location.href='index.php';
             </script>";
         }
         else
         {
            echo "<script>
               alert('stmt error');
                window.location.href='mycart.php';
             </script>";
         }

             }
          else
          {
            echo" <script>
                    alert('Cannection error')
                    window.location.href='mycart.php';
                    </script>";
         }
    }
}

?>