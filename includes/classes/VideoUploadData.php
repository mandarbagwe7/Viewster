<?php
class VideoUploadData {

    public $videoDataArray, $title, $description, $type, $category, $uploadedBy;

    public function __construct($videoDataArray, $title, $description, $type, $category, $uploadedBy) {
        $this->videoDataArray = $videoDataArray;
        $this->title = $title;
        $this->description = $description;
        $this->type = $type;
        $this->category = $category;
        $this->uploadedBy = $uploadedBy;
    }

}
?>