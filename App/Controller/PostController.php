<?php

namespace Gondr\Controller;

use Gondr\DB;

class PostController extends MasterController {
    
    public function writePage() {

        $this->render("post/write");

    }

    public function writeProcess() {
        $TopName = $_POST['TopName'];
        $JugName = $_POST['JugName'];
        $MidName = $_POST['MidName'];
        $AdcName = $_POST['AdcName'];
        $SupName = $_POST['SupName'];
        
        $TopTier = $_POST['TopTier'];
        $JugTier = $_POST['JugTier'];
        $MidTier = $_POST['MidTier'];
        $AdcTier = $_POST['AdcTier'];
        $SupTier = $_POST['SupTier'];

        $writer = $_SESSION['user']->id;
        $id = $_POST['id'];

        if(isset($_POST['id'])) {
            $sql = "UPDATE team_info SET TopName = ?, TopTier = ?, JugName = ?, JugTier = ?, MidName = ?, MidTier = ?, AdcName = ?, AdcTier = ?, SupName = ?, SupTier = ?,  WHERE id = ?";
            $data = [$TopName, $TopTier, $JugName, $JugTier, $MidName, $MidTier, $AdcName, $AdcTier, $SupName, $SupTier, $id];
        }else {
            $sql = "INSERT INTO team_info(TopName, TopTier, JugName, JugTier, MidName, MidTier, AdcName, AdcTier, SupName, SupTier ,writer, wdate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            $data = [$TopName, $TopTier, $JugName, $JugTier, $MidName, $MidTier, $AdcName, $AdcTier, $SupName, $SupTier, $writer];
        }

        $cnt = DB::query($sql, $data);

        if($cnt != 1) {
            $_SESSION['flash_msg'] = ['msg' => '글 작성중 오류 발생'];
            header("Location: /post");
        }else {
            $_SESSION['flash_msg'] = ['msg' => '글이 작성되었습니다'];
            header("Location: /");
        }
    }

    public function viewPage(){
        if(!isset($_GET['id'])){
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }

        $id = $_GET['id'];

        $data = DB::fetch("SELECT * FROM team_info WHERE id = ?", [$id]);
        
        if(!$data){
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }

        $this->render("post/view", ['data'=>$data]);
    }

    public function updatePage() {

        if(!isset($_GET['id'])){
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }

        $id = $_GET['id'];

        $sql = "SELECT * FROM team_info WHERE id = ?";

        $data = DB::fetch($sql, [$id]);

        $this->render("post/update", ['data' => $data]);

    }
    public function deletePage(){
        $id = $_GET['id'];
        $sql = "DELETE FROM team_info WHERE id = ?";
        $data = [$id];
        
        $cnt = DB::query($sql, $data);
        
        if($cnt != 1) {
            $_SESSION['flash_msg'] = ['msg' => '글 삭제중 오류 발생'];
            header("Location: /");
        }else {
            $_SESSION['flash_msg'] = ['msg' => '글이 삭제되었습니다'];
            header("Location: /");
        }

    }
}