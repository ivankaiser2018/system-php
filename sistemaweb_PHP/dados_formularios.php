<?php




if (empty($_POST['email'])||empty($_POST['email'])){
    
  header('Location:login.php');
  exit();


}
        
    //CRIANDO CONEXÃO COM BANCO 
$dsn="mysql:dbname=website;host=localhost";
$user="root";
$password="";
   
    try {
        
        $db=new PDO($dsn, $user,$password);
    }
    
 catch (PDOException $erro){
     
        echo 'erro'.$erro->getMessage();
 }



$email= addslashes($db,$_POST['email']);
$senha= addslashes($db,$_POST['senha']);

$sql="select from usuarios where email='$email' and senha='$senha' ";

$resultado=$sql($db,$sql);


echo $resultado;






?>

