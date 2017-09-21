<?php

namespace App;


use App\Models\User;

class Db
{

    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        var_dump($sth);
        var_dump($data);
        return $res;
    }

    public function query($sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if(false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}