<?php
class Pages extends Controller{
    public function __construct(){
        
    }

    public function index(){
       
        
        $data = [
            'title' => 'Aplicação taskHelper',
            'description' => 'Utilize o taskHelper para lembrar-se de suas tarefas pendentes, e consequentemente ter mais produtividade e foco em suas atividades.'
            
        ];
        
        
        
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'decription' => 'App to share posts with other users'
        ];
        $this->view('pages/about', $data);
    }
}