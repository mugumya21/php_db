 <?php

$server_name="localhost";
$user_name="root";
$password="";
$database="dailysales";

$conn =mysqli_connect ($server_name,$user_name,$password,$database);
if($conn==false)
{
    echo "not connected";
}  

// for the connection done


// for declaring or getting the items from the from
if(isset($_POST['item' ])&&isset($_POST['qty' ])&&isset($_POST['item_category' ])&&isset($_POST['unit_price' ])&&isset($_POST['amount' ]))
 {      $ITEM=$_POST['item' ];
        $QTY=$_POST['qty' ];
        $ITEM_CATEGORY=$_POST['item_category' ];
        $UNIT_PRICE=$_POST['unit_price' ];
        $AMOUNT=$_POST['amount' ];  

    
//if the all filles are not empty, 

      if (!empty($_POST['item' ])&&!empty($_POST['qty' ])&&!empty($_POST['item_category' ])&&!empty($_POST['unit_price' ])&&!empty($_POST['amount' ]))  
      {
         

        //insert 
        $run="INSERT INTO sales(item, qty, item_category, unit_price, amount) VALUES('$ITEM','$QTY','$ITEM_CATEGORY','$UNIT_PRICE',' $AMOUNT')"; 

        //call the conn and the insert(run)
        $good=mysqli_query($conn,$run);


        // if inserted successfully, then echo "form submited:"
        if($good==true){
            echo "form submited:";
        }
      }
 }



        ?>

<?
 $server_name="localhost";
$user_name="root";
$password="";
$database="dailySales";

$conn=msqli_connect($server_name, $user_name, $password, $database);
if($conn==false){
    echo('not submited');
}

if(isset($_POST['item'])&&isset($_POST['qty'])  ){
    $ITEM=$_POST['item'];
    $QTY=$_POST['qty'];
    if(!empty($ITEM)&&!empty($QTY)){
        $run="INSERT into sales(item, qty) values($ITEM, $qty); ";
        $good=mysqli_query($conn, $run);

        if($good==true){
            echo "submited well";
        }
    }

}
