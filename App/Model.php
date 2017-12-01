<?php

namespace App;

use App\Db;

abstract class Model
{
    const TABLE = '';
    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        $res = $db->query('SELECT * FROM ' . static::TABLE, static::class);
        return $res;
    }

    public static function findById($id)
    {
        $db = Db::instance();
        $res = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id = :id', static::class, [':id' => $id]);
        if ($res) {
            return $res[0];
        } else {
            return false;
        }
    }

    public static function findLast($lim)
    {
        $db = Db::instance();
        $res = $db->query('SELECT *FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $lim, static::class);
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':' . $k] = $v;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $columns) . ') 
        VALUES (' . implode(',', array_keys($values)) .
            ')';
        $db = Db::instance();
        $db->execute($sql, $values);
        $this->id = $db->lastInsertId();
    }

    public function update()
    {
        if ($this->isNew()) {
            echo 'я тут';
            return;

        }
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k . '=:' . $k;
            $values[':' . $k] = $v;

        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(',', $columns) . ' 
        WHERE id=' . $this->id;
        $db = Db::instance();
        $db->execute($sql, $values);
    }

    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        if ($this->isNew()) {
            return;
        }
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=' . $this->id;
        $db = Db::instance();
        $db->execute($sql);
    }

}