<?php

namespace App\Controller;

use App\Controller\AppController;


class CalenderController extends AppController
{

    public function index() {

    // レイアウトの設定
    $this->viewBuilder()->setLayout('calender');

    }
}