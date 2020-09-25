<?php
class Writing implements JsonSerializable {
    private $id;
    private $userId;
    private $prompt;
    private $writing;

    public function __construct($id, $userId, $prompt, $writing){
        $this->id = $id;
        $this->userId = $userId;
        $this->prompt = $prompt;
        $this->writing = $writing;
    }

    
    public function getId(){ return $this->id; }
    
    public function getUserId(){ return $this->userId; }
    
    public function getPrompt(){ return $this->prompt; }

    public function getWriting(){ return $this->writing; }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
?>