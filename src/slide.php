<?php 
// namespace App\slide;
class slide{
    public $id;
    public $path;
    public $description;

    public $slides = []; // collection of slide 

    public $conn;

    public function __construct(){
        $this->conn = new \PDO('mysql:host=localhost;dbname=assingment', 'root', '');
        $this->id = 0;
        $this->path = "";
        $this->description = "";
        $this->slides = [];

        //connect the database 
    }

    public function getSlide(int $id){
        

        // fetch a record using the id : db oparation 

        //build a slide object 
        $data = [];
        $this->build($data);

        //return the slide object
    } 

    public function getAsliderecord(int $id):array{
        $_slidedata = [];    
        return $_slidedata;
    }
     public function getASlidesFromDatabase(int $id): Slide{
        $_slidedata = $this->getAsliderecord($id);  
        return $this->build($_slidedata);
    }

    public function getANewSlide(array $slidedata):Slide{
        $_slidedata = $slidedata;
        return $this->build($_slidedata);
    }

    public function getActiveSlide(){

    }

    public function getAllSlideRecords(): array{
        //build a slide object 
        $_allslidedata = [];
        //fetch all the slide records from the database
        $sql = "SELECT * FROM slide";
        $result = $this->conn->query($sql);
       if($result->rowCount() > 0){
            while($row = $result->fetch(\PDO::FETCH_ASSOC)){
                $_slidedata = $row;
                $_allslidedata[] = $_slidedata;
            }
        }
       return $_allslidedata; 
    }
    public function getAllSlides():Slide{
        $_allslidedata = $this->getAllSlideRecords();
        foreach($_allslidedata as $_slidedata){
            $this->slides[] = $this->build($_slidedata);
        }
        return $this;
    }

    public function build(array $slidedata){

        $slide = new Slide();

        // if($slidedata['id'] == null){
        //     $slide->id = '';
        // }else{
        //     $slide->id = $slidedata['id'];
        // }

        // $slide->id = $slidedata['id'] == null ? '' : $slidedata['id'];

        $slide->id = $slidedata['id'] == null ?? '';
        $slide->path = $slidedata['path'] ?? '';
        $slide->description = $slidedata['description'] ?? '';

        return $slide;
    }

    public function createSlide(array $data): bool{

        //build a object using the slide data
        $sql = 'INSERT INTO `slides` (path , description ) VALUES (:path , :description)';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':path', $data['path']);
        $stmt->bindParam(':description', $data['description']);
        return $stmt->execute();
    }

    public function updateSlide(array $data): bool{

        //build a object using the slide data
        $sql = 'UPDATE slides SET path = :path , description = :description WHERE id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':path', $data['path']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':id', $data['id']);
        return $stmt->execute();
    }

    public function deleteSlide(int $id): bool{
        $sql = 'DELETE FROM slides WHERE id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}


