<?php namespace App\Controllers;

use App\Models\DinoModel;
use CodeIgniter\Controller;


class Dino extends Controller
{
    
    public function index()
    {
        $model = new DinoModel();

        $data['all'] = $model->getAll();
        $data['title'] = "Liste";
        $data['date'] = date('Y');

        echo view('templates/header', $data);
        echo view('dino/info', $data);
        echo view('templates/footer', $data);
    }

    public function site()
    {
        $model = new DinoModel();

        $uri = $this->request->uri;
        $id = $uri->getSegment(2);


        $data['site'] = $model->getInfoSite($id);
        $data['dino'] = $model->getInfoDino($id);
        $data['notes'] = $model->getInfoNote($id);
        $data['all'] = $model->getAll();
        $data['title'] = "Information site";
        $data['date'] = date('Y');


        echo view('templates/header', $data);
        echo view('dino/site', $data);
        echo view('templates/footer', $data);
    }

    public function bones()
    {

        $model = new DinoModel();

        $uri = $this->request->uri;
        $id = $uri->getSegment(2);

        $data['dino'] = $model->getBonesInfo($id);
        $data['remarks'] = $model->getRemarks($id);
        $data['all'] = $model->getAll();
        $data['title'] = "Squelette";
        $data['date'] = date('Y');

        echo view('templates/header', $data);
        echo view('dino/skeleton', $data);
        echo view('templates/footer', $data);
    }

    public function notes()
    {
        $model = new DinoModel();

        $uri = $this->request->uri;
        $id = $uri->getSegment(2);

        $data['notes'] = $model->getInfoNote($id);
        $data['all'] = $model->getAll();
        $data['title'] = "Notes";
        $data['date'] = date('Y');

        echo view('templates/header', $data);
        echo view('dino/notes', $data);
        echo view('templates/footer', $data);

    }
}