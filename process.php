<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index1.php?error');
       }
       else
       {
           $to = "facebooksup171@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index1.php?success");
           }
       }
    }
    else
    {
        header("location:index1.php");
    }
?>
