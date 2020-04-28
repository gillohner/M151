<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction(Request $request) {
        // Trying to connect to Database
        $mysqli = new \mysqli("login-67.hoststar.ch","inf17s","jL6LCigmf!YB8Hh","inf17s");

        $mysqli->set_charset('utf8');

        // Output Error Message on Error
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        };

        // Read from database
        $sql = "SELECT * FROM gil_items";
        $result = $mysqli->query($sql);

        // Read as array
        $row = $result->fetch_all();

        return $this->render("item/list.html.php",  ["items" => $row]);
    } 

    /**
     * @Route("/add")
     */
    public function addAction(Request $request) {


        // Trying to connect to Database
        $mysqli = new \mysqli("login-67.hoststar.ch","inf17s","jL6LCigmf!YB8Hh","inf17s");

        $mysqli->set_charset('utf8');

        // Output Error Message on Error
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        };

        $statement = $mysqli->prepare("INSERT INTO hil_items(amount, name) VALUES(?,?");
        $statement->bind_param("is", $itemCount, $itemName);

        $statement->execute();

        return $this->redirect("/list");

        echo"Füge ", $itemCount , " " , $itemName , " hinzu";
        die('in add action');
    }
}
?>