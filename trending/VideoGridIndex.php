<?php
class VideoGridIndex{

    private $con, $userLoggedInObj;
    private $largeMode = false;
    private $gridClass = "videoGrid";
    public $cat;

    public function __construct($con, $userLoggedInObj) {
        $this->con = $con;
        $this->userLoggedInObj = $userLoggedInObj;
    }

    public function createForIndex($videos, $title, $showFilter,$categ) {
        if($videos == null) {
            $gridItems = $this->generateItemsComedy($categ);
        }
        else {
            $gridItems = $this->generateItemsFromVideos($videos);
        }

        $header = "";

        if($title != null) {
            $header = $this->createGridHeaderIndex($title, $showFilter);
        }

        return "$header
                <div class='$this->gridClass'>
                    $gridItems
                </div>";
    }
    
    public function generateItemsComedy($categ) {
        $query = $this->con->prepare("SELECT * FROM videos WHERE category=$categ LIMIT 15");
        $query->execute();
        
        $elementsHtml = "";
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $video = new Video($this->con, $row, $this->userLoggedInObj);
            $item = new VideoGridItemIndex($video, $this->largeMode);
            $elementsHtml .= $item->createForIndex();
        }

        return $elementsHtml;
    }

    public function generateItemsFromVideos($videos) {
        
    }
    
    public function createGridHeaderIndex($title, $showFilter) {

        $filter = "";
       
        return"<div class='videoGridHeader'>
                    <div class='left'>
                        $title
                    </div>
                    $filter
                </div>";
    }

}
?>