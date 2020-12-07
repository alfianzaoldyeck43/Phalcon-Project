<?php

use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Form;

class TestController extends ControllerBase
{
    public function testAction()
    {
     $users = ['aan', 'hei', 'lala'];
     $genders = [
      'LK' => 'Laki-laki',
      'PR' => 'Perempuan'
     ];
        $data['users'] = $users;
        $data['genders'] = $genders;

        //play form phalcon, untuk lebih jelasnya akan dijelaskan pada bab crud
        $form = new Form();
        $name = new Text("name", array('placeholder' => 'Type your name'));
        $name->setLabel('Nama user');
        $form->add($name);
        // dd($data);
     $this->view->data = $data;
        $this->view->form = $form;
     $this->view->title = "Phalcon - User";
    }
}