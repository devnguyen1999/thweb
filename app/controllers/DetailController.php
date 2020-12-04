<?php

namespace App\Controllers;

require_once(PATH_ROOT . '/app/controllers/BaseController.php');

require_once(PATH_ROOT . '/app/models/contact.php');

use App\Models\Contact;

class DetailController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function index()
    {
        $contact = Contact::find($_GET['id']);
        $data = array('contact' => $contact);
        $this->render('detail', $data);
    }
}
