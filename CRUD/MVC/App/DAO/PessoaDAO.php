<?php


class PessoaDAO
{
    
    private $conexao;


     
    public function __construct()
    {
        try{
            $dsn = "mysql:host=localhost:3306;dbname=db_cadastro";

            $this->conexao = new PDO($dsn, 'root', 'kadu1234');
        } catch (Exception $e){
            echo 'erro de conexao: ', $e->getMessage();
        }
    }


    
    public function insert(PessoaModel $model)
    {
        
        try{

               
        $sql = "INSERT INTO funcionarios (nome, data_nascimento, endereco, cpf, email, telefone, cargo ) VALUES (?, ?, ?, ?, ?, ?, ?) ";


        $stmt = $this->conexao->prepare($sql);


        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_nascimento);
        $stmt->bindValue(3, $model->endereco);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->cargo);

         // Ao fim, onde todo SQL está montando, executamos a consulta.
        $stmt->execute();
        } catch(Exception $e){
            echo 'erro de conexao: ', $e->getMessage();
        }
    }


    
    public function update(PessoaModel $model)
    {
        $sql = "UPDATE funcionarios SET nome=?, data_nascimento=?, endereco=?, cpf=?, email=?, telefone=? cargo=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(3, $model->endereco);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->email);
        $stmt->bindValue(3, $model->telefone);
        $stmt->bindValue(3, $model->cargo);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }


    
    public function select()
    {
        try{

            $sql = "SELECT * FROM funcionarios ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        
        return $stmt->fetchAll(PDO::FETCH_CLASS); 

        }catch (Exception $e){
            echo 'erro de conexao: ', $e->getMessage();
        }
        

             
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/PessoaModel.php';

        $sql = "SELECT * FROM funcionarios WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PessoaModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionarios WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}