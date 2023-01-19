<?php
namespace Blogmvc\Models;

use Blogmvc\Models\Blog;
/** Class UserManager **/
class BlogManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function find($name, $userId)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM Blogs WHERE name = ? AND user_id = ?");
        $stmt->execute(array(
            $name,
            $userId
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS,"Blogmvc\Models\Blog");

        return $stmt->fetch();
    }

    public function store() {
        $stmt = $this->bdd->prepare("INSERT INTO Blogs(name, user_id, com) VALUES (?, ?, ?)");
        $stmt->execute(array(
            $_POST["name"],
            $_SESSION["user"]["id"],
            $_POST["com"]
        ));
    }

    // public function update($slug) {
    //     $stmt = $this->bdd->prepare("UPDATE Blogs SET name = ? WHERE name = ? AND user_id = ?");
    //     $stmt->execute(array(
    //         $_POST['nameTodo'],
    //         $slug,
    //         $_SESSION["user"]["id"]
    //     ));
    // }

    public function delete($slug) {

        $stmt = $this->bdd->prepare("DELETE FROM Blogs WHERE id = ? AND user_id = ?");
        $stmt->execute(array(
            $_GET["id"],
            $_SESSION["user"]["id"]
        ));
    }

    public function getAll()
    {
        $stmt = $this->bdd->prepare('SELECT * FROM Blogs');
        $stmt->execute(array());

        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Blogmvc\Models\Blog");
    }
}
