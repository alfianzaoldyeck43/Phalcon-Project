<?php

class UserController extends ControllerBase
{
    public function indexAction()
    {
        $users = So::find();
        $this->view->title = "Phalcon - Users";
        $this->view->user = $users;
        // dd($users);
    }

    public function showAction($userId)
    {
        $conditions = ['userId' => $userId];
        $user = So::findFirst([
            'conditions' => 'id=:userId:',
            'bind' => $conditions,
        ]);
        $this->view->title = "Phalcon - User";
        $this->view->user = $user;
        // dd($users);
    }

    public function createAction()
    {
        $this->view->title = "Phalcon - Create Sistem Operasi";
    }

    public function saveAction()
    {
        $nama = $this->request->get('nama');
        $jenis = $this->request->get('jenis');
        $versi = $this->request->get('versi');
        $tahun_keluar = $this->request->get('tahun_keluar');

        $user = new So();
        $user->nama = $nama;
        $user->jenis = $jenis;
        $user->versi = $versi;
        $user->tahun_keluar = $tahun_keluar;

        if ($this->request->isPost()) {
            if ($user->create()) {
                return $this->response->redirect('user');
            }
        } else {
            $this->flash->error('User form is not valid.');
        }
    }
    public function editAction($userId)
    {
        $conditions = ['userId' => $userId];
        $user = So::findFirst(
            [
                'conditions' => 'id=:userId:', 'bind' => $conditions,
            ]
        );
        $this->view->title = "Phalcon - Sistem Operasi";
        $this->view->user = $user;
        if ($this->request->isPost()) {
            $nama = $this->request->get('nama');
            $jenis = $this->request->get('jenis');
            $versi = $this->request->get('versi');
            $tahun_keluar = $this->request->get('tahun_keluar');
            $user->nama = $nama;
            $user->jenis = $jenis;
            $user->versi = $versi;
            $user->tahun_keluar = $tahun_keluar;
            if ($user->save()) {
                return $this->response->redirect('user');
            } else {
                $messages = $user->getMessages();
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }
    public function deleteAction($userId)
    {
        $user = So::findFirst($userId);
        if ($user->delete()) {
            return $this->response->redirect('user');
        } else {
            $messages = $user->getMessages();
            foreach ($messages as $message) {
                $this->flash->error($message);
            }
        }
    }
}
