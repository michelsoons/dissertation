<?php
include('C:\wamp64\www\project\db\db.php');
class quizRepo{
    public function getFrontEndResources(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link FROM resources WHERE type='front' AND lang='html'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResources1(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link FROM resources WHERE type='front' AND lang='css'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
}

?>