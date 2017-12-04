<?php
class Employees
{
    private static $dbhost = "localhost";
    private static $dbname = "employees";
    private static $dbusername = 'root';
    private static $dbpassword = 'root';
    public static $pdo_connection = null;
    public static function getConnection()
    {
        if (null === self::$pdo_connection) {
            self::$pdo_connection = new PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname, self::$dbusername, self::$dbpassword);
        }
        return self::$pdo_connection;
    }
    public static function create($name, $address, $salary)
    {
        $sql = "INSERT INTO employees (name, address, salary) VALUES ( :name, :address, :salary)";
        $pdo_statement = self::getConnection()->prepare($sql);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":address", $address);
        $pdo_statement->bindValue(":salary", $salary);
        $pdo_statement->execute();
        $id = self::getConnection()->lastInsertId();
        return $id;
    }
    public static function findAll()
    {
        $sql = "SELECT * FROM employees";
        $pdo_statement = self::getConnection()->prepare($sql);
        $pdo_statement->execute();
        return $pdo_statement->fetchAll();
    }
    public static function deleteById($id)
    {
        $sql = "DELETE FROM employees WHERE id = :id";
        $pdo_statement = self::getConnection()->prepare($sql);
        $pdo_statement->bindValue("id", $id);
        $pdo_statement->execute();
    }
    public static function updateById($name, $address, $salary, $id)
    {
        $sql = "UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id = :id";
        $pdo_statement = self::getConnection()->prepare($sql);
        $pdo_statement->bindValue("name", $name);
        $pdo_statement->bindValue("address", $address);
        $pdo_statement->bindValue("salary", $salary);
        $pdo_statement->bindValue("id", $id);
        $pdo_statement->execute();
    }
}