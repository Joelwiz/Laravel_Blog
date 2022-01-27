<?php
namespace App\Models;

use PDO;
use Core\Model;

class Product extends Model {
    const tabla = "products"; // Nombre tabla de la base de datos.

    public static function all() {
        $db = parent::db();
        //preparar consulta
        //$sql = "SELECT products.*, product_types.name as tipo FROM `products` LEFT JOIN product_types on products.type_id = product_types.id";
        $sql = "SELECT * FROM ".self::tabla;
        $statement = $db->query($sql);
        $data = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $data;
    }

    public static function find($id) {
        $db = parent::db();
        $stmt = $db->prepare('SELECT * FROM '.self::tabla.' WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $data = $stmt->fetch(PDO::FETCH_CLASS);

        return $data;
    }

    public function insert() {
        $db = parent::db();
        $stmt = $db->prepare('INSERT INTO '.self::tabla.' (name, type_id, price) VALUES(:name, :type_id, :price)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':type_id', $this->type_id);
        $stmt->bindValue(':price', $this->price);

        return $stmt->execute();
    }

    public function save() {
        $db = parent::db();
        $stmt = $db->prepare('UPDATE '.self::tabla.' 
                                    SET name = :name, type_id = :type_id, price = :price
                                    WHERE id = :id');

        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':type_id', $this->type_id);
        $stmt->bindValue(':price', $this->price);

        return $stmt->execute();
    }

    public function delete() {
        $db = parent::db();
        $stmt = $db->prepare('DELETE FROM '.self::tabla.' WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
