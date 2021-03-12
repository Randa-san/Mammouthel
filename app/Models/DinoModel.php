<?php namespace App\Models;

use CodeIgniter\Model;


class DinoModel extends Model
{
    
    public function getAll() {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM site";
        $req = $db->query($sql);
        $result = $req->getResult('array');
        return $result;
    }

    public function getInfoSite($id) 
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM site WHERE id = '$id'";
        $req = $db->query($sql);
        $result = $req->getResult('array');
        return $result;
    }

    public function getInfoDino($id) {

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM dino WHERE site_id = '$id'";
        $req = $db->query($sql);
        $result = $req->getResult('array');
        return $result;

    }

    public function getInfoNote($id) {

        $db = \Config\Database::connect();
        $sql = "SELECT * FROM notes WHERE id = '$id'";
        $req = $db->query($sql);
        $result = $req->getResult('array');
        return $result;

    }

    public function getBonesInfo($id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM dino WHERE id = '$id'";
        $req = $db->query($sql);
        $result = $req->getResult('array');
        return $result;
    }

    public function getRemarks($id) {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM remarks WHERE id = '$id'";
        $req = $db->query($sql);
        $result = $req->getResult('array');
        return $result;
    }

    // protected $table = "site";

    // public function getAll($id = false) {
    //     if( $id === false ) {
    //         return $this->findAll();
    //     }
    //     return $this->asArray()->where(["id"=> $id])->first();
    // }
    
}