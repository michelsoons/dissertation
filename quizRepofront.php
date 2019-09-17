<?php
include('C:\wamp64\www\project\db\db.php');
class quizRepofront{
    public function getFrontEndResources(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='front' AND lang='html'");
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
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='front' AND lang='css'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResources2(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='front' AND lang='js'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResources3(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='front' AND lang='react'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResources4(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='front' AND lang='vue'");
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