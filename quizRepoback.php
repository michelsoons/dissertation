<?php
include('C:\wamp64\www\project\db\db.php');
class quizRepoBack{
    public function getFrontEndResourcesPHP(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='back' AND lang='php'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesSQL(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='back' AND lang='sql'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesNODE(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='back' AND lang='node'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesPYTHON(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='back' AND lang='python'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesRUBY(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='back' AND lang='ruby'");
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