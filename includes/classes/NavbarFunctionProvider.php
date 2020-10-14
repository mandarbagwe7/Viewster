<?php

class NavbarFunctionProvider{

    public function __construct($con , $userLoggedInObj){
        $this->con = $con;
        $this->userLoggedInObj = $userLoggedInObj;

    }

    public function getVideos($categ){
        
        $query = $this->con->prepare("SELECT * FROM videos WHERE category=$categ");
        
        $query->execute();

        $videos = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $video = new Video($this->con, $row, $this->userLoggedInObj);
            array_push($videos, $video);
        }
        return $videos;
    }
	
    public function getTypes($categ){
        $query = $this->con->prepare("SELECT * FROM videos WHERE type=$categ");
        
        $query->execute();

        $videos = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $video = new Video($this->con, $row, $this->userLoggedInObj);
            array_push($videos, $video);
        }
        return $videos;
    }
}


?>