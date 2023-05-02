<?php 
namespace App\Models;
use PDO, App\Models\UserAddress, App\Utils\Db;

class User
{
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $email;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // SET METHODS
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName(string $last_name)
    {
        $this->last_name = $last_name;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function create($data = [])
    {
        $pdo = Db::getConection();
        $sql = "INSERT INTO user (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
        
        $stmt= $pdo->prepare($sql);
        $save = $stmt->execute($data);

        return $save;
    }

    public function find(int $id)
    {
        $pdo = Db::getConection();        
        $sql = "SELECT * FROM user  WHERE id = :id";

        $stmt= $pdo->query($sql);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);

        $recordset = $stmt->fetch();
        return $recordset;

    }
    public function findAll()
    {   
        $pdo = Db::getConection();
        $sql = "SELECT * FROM user  ORDER BY ID DESC LIMIT 10";
        
        $stmt= $pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $recordset = $stmt->fetchAll();

        return $recordset;

    }

    public function delete(int $id)
    {
        $pdo = Db::getConection(); 
        $sql = "DELETE FROM user WHERE id = :id";

        $stmt= $pdo->prepare($sql);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $delete = $stmt->execute();
        return $delete;
    }
}