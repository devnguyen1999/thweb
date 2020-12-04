<?php

namespace App\Models;

use App\DB;

class Contact
{
    public $id;
    public $name;
    public $phone;
    public $email;

    function __construct($id, $name, $phone, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    static function findAll()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('CALL findAll_Proc()');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Contact($item['id'], $item['name'], $item['phone'], $item['email']);
        }

        return $list;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM contacts WHERE `id` = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return new Contact($item['id'], $item['name'], $item['phone'], $item['email']);
        }
        return null;
    }

    static function create($name, $phone, $email)
    {
        $db = DB::getInstance();
        $req = $db->prepare('INSERT INTO contacts (`name`, `phone`, `email`) VALUES (:name, :phone, :email)');
        $req->execute(array('name' => $name, 'phone' => $phone, 'email' => $email));
        return null;
    }

    static function update($name, $phone, $email, $id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('UPDATE contacts SET `name` = :name, `phone` = :phone, `email` = :email WHERE `id` = :id');
        $req->execute(array('name' => $name, 'phone' => $phone, 'email' => $email, 'id' => $id));
        return null;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('DELETE FROM contacts WHERE `id` = :id');
        $req->execute(array('id' => $id));
        return null;
    }
}
