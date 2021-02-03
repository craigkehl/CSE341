<?php
class ProductList {

    private $con, $sqlData;

    public function __construct($con, $input) {
        $this->con = $con;

        if(is_array($input)) {
            $this->sqlData = $input;
        }
        else {
            $query = $this->con->prepare("SELECT * FROM product");
            $query->bindParam($input);
            $query->execute();

            $this->sqlData = $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
    public function getId() {
        return $this->sqlData["id"];
    }

    public function getName() {
        return $this->sqlData["name"];
    }

    public function getDescription() {
        return $this->sqlData["description"];
    }

    public function getPrice() {
        return $this->sqlData["price"];
    }

    public function getFilePath() {
        return $this->sqlData["filePath"];
    }


    // public function incrementViews() {
    //     $videoId = $this->getId();
    //     $query = $this->con->prepare("UPDATE videos SET views=views+1 WHERE id=:id");
    //     $query->bindParam(":id", $videoId);

    //            $query->execute();

    //     $this->sqlData["views"] = $this->sqlData["views"] + 1;
    // }
}
?>