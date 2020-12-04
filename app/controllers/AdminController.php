<?php

namespace App\Controllers;

require_once(PATH_ROOT . '/app/controllers/BaseController.php');

require_once(PATH_ROOT . '/app/models/contact.php');

use App\Models\Contact;

class AdminController extends BaseController
{
    function __construct()
    {
        $this->folder = 'admin';
    }
    
    public function index()
    {
        $contacts = Contact::all();
        $data = array('contacts' => $contacts);
        $this->render('index', $data);
    }
    public function create()
    {
        $this->render('create');
    }
    public function handleCreate()
    {
        Contact::create($_POST['name'], $_POST['phone'], $_POST['email']);
        header('Location: /admin');
    }
    public function update()
    {
        $contact = Contact::find($_GET['id']);
        $data = array('contact' => $contact);
        $this->render('edit', $data);
    }
    public function handleUpdate()
    {
        Contact::update($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['id']);
        header('Location: /admin');
    }
    public function handleDelete()
    {
        Contact::delete($_GET['id']);
        header('Location: /admin');
    }
}
