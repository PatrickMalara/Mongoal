<?php
class Goal implements JsonSerializable {
    private $id;
    private $userId;
    private $title;
    private $date;
    private $outOf;
    private $curr;

    public function __construct($id, $userId, $title, $date, $outOf, $curr){
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->date = $date;
        $this->outOf = $outOf;
        $this->curr = $curr;
    }

    
    public function getId(){ return $this->id; }
    
    public function getUserId(){ return $this->userId; }
    
    public function getTitle(){ return $this->title; }

    public function getDate(){ return $this->date; }

    public function getOutOf(){ return $this->outOf; }
    
    public function getCurr(){ return $this->curr; }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
?>