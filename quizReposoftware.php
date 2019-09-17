<?php
include('C:\wamp64\www\project\db\db.php');
class quizReposoftware{
    public function getFrontEndResourcesC(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='software' AND lang='c'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesCplus(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='software' AND lang='cplus'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesobjective(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='software' AND lang='objective'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesSjava(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='software' AND lang='sJava'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesSpython(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='software' AND lang='sPython'");
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