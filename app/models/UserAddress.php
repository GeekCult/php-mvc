<?php 
namespace App\Models;
use \PDO, App\Utils\Db;

class UserAddress
{
    protected $id;
    protected $id_user;
    protected $address;
    protected $number;
    protected $city;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->id_user;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getCity()
    {
        return $this->city;
    }


    public function setUserId(int $id_user)
    {
        $this->id_user = $id_user;
    }
    // SET METHODS
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }
    public function create(int $id_user, array $data)
    {
        $pdo = Db::getConection();
        $sql = "INSERT INTO user_address (id_user, address, number, city) VALUES (:id_user, :address, :number, :city)";

        $stmt= $pdo->prepare($sql);
        $stmt->bindParam('id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam('address', $data['address'], PDO::PARAM_STR);
        $stmt->bindParam('number', $data['number'], PDO::PARAM_INT);
        $stmt->bindParam('city', $data['city'], PDO::PARAM_STR);
        $save = $stmt->execute();
        return $save;
    }

    public function find(int $id = 0)
    {
       
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}