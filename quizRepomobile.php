<?php
include('C:\wamp64\www\project\db\db.php');
class quizRepomobile{
    public function getFrontEndResourcesJava(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='mobile' AND lang='java'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesKotlin(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='mobile' AND lang='kotlin'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesCordova(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='mobile' AND lang='cordova'");
        if(true){
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $link = json_encode($data);
        //echo $link;
        mysqli_close($conn);
        return $data;
        }
    }
    public function getFrontEndResourcesSwift(){
        $conn = mysqli_connect("localhost","root","","dev_path");
        $result = mysqli_query($conn,"SELECT link, title FROM resources WHERE type='mobile' AND lang='swift'");
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