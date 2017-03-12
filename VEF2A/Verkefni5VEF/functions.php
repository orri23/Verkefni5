<?php
   
    function getImageId($conn){
    
    		$sql = "SELECT id, myndaheiti  FROM mynd ORDER BY myndaheiti ASC";
    		$result = $conn ->query($sql);
        return $result ->fetchAll();
    	
    }
     function getImage($conn, $Search){

        $stmt = $conn->prepare("SELECT skraarheiti FROM mynd WHERE myndaheiti = :Search");
        $stmt->bindParam(':Search', $Search);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    
    }
    function getImageInfo($conn, $id){
      
    		
        $stmt = $conn->prepare("SELECT mynd.myndaheiti, mynd.skraarheiti, notendur.nafn, mynd.textalysing FROM mynd JOIN connection ON mynd.id = connection.image_id JOIN notendur ON notendur.id = connection.user_id WHERE mynd.id = :id ORDER BY mynd.myndaheiti ASC");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    
    }
    function getUsers($conn){
      
    		$sql = "SELECT nafn FROM notendur";
    		$result = $conn ->query($sql);
        return $result ->fetchAll();
     
    }
     function getImageCount($conn){
     
            $sql = "SELECT COUNT(*) FROM mynd";
            $result = $conn ->query($sql);
        $utkoma = $result ->fetchColumn();
        return $utkoma;
        
    
    }
    function getUserImages($conn, $nafn){
     
        $stmt = $conn->prepare("SELECT mynd.skraarheiti, mynd.myndaheiti FROM mynd JOIN connection ON mynd.id = connection.image_id JOIN notendur ON notendur.id = connection.user_id WHERE notendur.nafn = :nafn");
        $stmt->bindParam(':nafn', $nafn);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    
    }
  
 ?>