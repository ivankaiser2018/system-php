
<?php
class Conexao{
    
   private  $db;
   




     public function __construct(){ 
   
         try {
            $this->db=new PDO("mysql:dbname=website;host=localhost","root","");
        
            
        } 
             
         catch (PDOException $error) {
            echo  "Erro ao Conectar com Banco".$error->getMessage();
        }
    
    }
    
    
    
    public function selecionar(){
       
        // metodo de preparar conexao
        $sql= $this->db->prepare("select *from usuarios");
        $sql->execute();
        if ($sql->rowCount()>0) {
            echo 'Ha usuarios'."</br>";
            
            //pegar os usuarios
            foreach ($sql->fetchAll()as $dados){
                //criando array de dados
                 $email=$dados['email'];
                $senha=$dados['senha'];
                echo 'Email:'.$email."</br>";
                echo 'Senha:'.$senha."</br>";
                
                
            }
            
        } else {
            echo 'não há usuarios';
        }
        
        
    }
    
    public function inserir($email,$senha){
           $sql= $this->db->prepare("insert into set nome='$nome' and senha='$senha' ");
        $sql->execute();
        echo 'dados inseridos com sucesso';
        
    }
    
    
    
    
    //metodo de busca login
    
    public function buscar_login($email,$senha){
        
        $sql= $this->db->prepare("select from usuarios where email='$email' and senha='$senha'");
        $sql->execute();
        
        
        
    }
    
    
    
    
}



?>