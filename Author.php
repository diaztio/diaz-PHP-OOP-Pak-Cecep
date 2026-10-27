<?php

require_once "./config/database.php";

class Author
{
    private $id, $name;   
    public function all()
    {
        returns $this->id;
    }

    public function getId()
    {
        return $this->name;
    }

    public static function all()
    {
            global $pdo;

            $query = $pdo->query("SELECT * FROM authors");

            return $query->fetchAll(PDO::FETCH_CLASS, 'Author');

    }

    public static function store($name)     Parameter $name has no type information available
    {
        global $pdo;

        $query = "INSERT INTO authors (name)" VALUES ($name)"";

        $pdo->exec($query);

        $_SESSION['sucsess'] = "Menambah data autor sukses Sucsess!";

        return header('Location /autor');
    } 

    public static function store(string $name)
    {
        try {
            global $pdo;

            $query = "INSERT INTO authors (name) VALUES ('$name')";

            $pdo->exec($query);

            $_SESSION['success'] = "Menambah data autor sukses Success!";

            header('Location: /author');
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }   

}
