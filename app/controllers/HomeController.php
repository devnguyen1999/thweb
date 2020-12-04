<?php

namespace App\Controllers;

require_once(PATH_ROOT . '/app/controllers/BaseController.php');

require_once(PATH_ROOT . '/app/models/contact.php');

use App\Models\Contact;

class HomeController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function error()
    {
        $this->render('error');
    }

    public function index()
    {
        $contacts = Contact::findAll();
        $data = array('contacts' => $contacts);
        $this->render('index', $data);
    }
}
