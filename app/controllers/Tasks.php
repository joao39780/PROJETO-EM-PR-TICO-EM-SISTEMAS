<?php
class Tasks extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->taskModel = $this->model('Task');
    }

    public function index(){
        //Get the value of the current session
        $user_id = $_SESSION['user_id'];
        //Set an array of tree options with the priorty values
        $priorty = ['Alta' => 'Prioridade Alta',
                   'Media' => 'Prioridade Media',
                   'Baixa' => 'Prioridade Baixa'];
        $checked = 'n';
        //fetch the high priorty tasks
        $highPriortyTasks = $this->taskModel->getTasks($user_id,$priorty['Alta'],$checked);
        //fetch the medium priorty tasks
        $mediumPriortyTasks = $this->taskModel->getTasks($user_id,$priorty['Media'],$checked);
        //fetch the low priorty tasks
        $lowPriortyTasks = $this->taskModel->getTasks($user_id,$priorty['Baixa'],$checked);
        $data = [
            'highPriortyTasks' => $highPriortyTasks,
            'mediumPriortyTasks' => $mediumPriortyTasks,
            'lowPriortyTasks' => $lowPriortyTasks

        ];
        
        $this->view('tasks/index',$data);
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => $_POST['title'],
                'body' => $_POST['body'],
                'final_date' => $_POST['final_date'],
                'priorty' => $_POST['priorty'],
                'user_id' => $_SESSION['user_id'],
                'checked' => 'n',
                'title_err' => '',
                'body_err' => '',
                'final_date_err' =>''
                
            ];

            //Validate
            if(empty($data['title'])){
                $data['title_err'] = 'Por favor adicione um titulo';
            }
            if(empty($data['body'])){
                $data['body_err'] = 'Por favor adicione uma descricao';
            }

            if(empty($data['final_date'])){
                $data['final_date_err'] = 'Por favor defina uma data';
            }

            if(empty($data['priorty'])){
                $data['priorty'] = 'Por favor selecione uma prioridade';
            }
            
            //Make sure no errors
            if(empty($data['title_err']) && empty($data['body_err']) && empty($data['final_date_err'])){
                //Validated
                if($this->taskModel->addTask($data)){
                     redirect('tasks');
                }else{
                    die('Something went wrong');
                }
            }else{
                $this->view('tasks/add',$data);
            }

        }else{
            $data = [
                'title' => '',
                'body' => '',
                'final_date' => '',
                'priorty' => ''
            ];  
        }

    
        $this->view('tasks/add',$data);
    }

    public function show($id = ''){
        $user_id = $_SESSION['user_id'];
        $task = $this->taskModel->getTaskById($id, $user_id);
            
            $data = [
                'task' => $task
            ];
            $this->view('tasks/show',$data);
       
    }

    public function done($id){
        $user_id = $_SESSION['user_id'];
        $checked = 'y';
        if($this->taskModel->setDoneTask($id, $user_id, $checked)){
            redirect('tasks');
            flash('set_task_success', 'Tarefa concluida com sucesso');
        }else{
            die('Something went wrong');
        } 
        
    }

    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => $_POST['title'],
                'body' => $_POST['body'],
                'final_date' => $_POST['final_date'],
                'priorty' => $_POST['priorty'],
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
                'final_date_err' =>''
                
            ];

            //Validate
            if(empty($data['title'])){
                $data['title_err'] = 'Por favor adicione um titulo';
            }
            if(empty($data['body'])){
                $data['body_err'] = 'Por favor adicione uma descricao';
            }

            if(empty($data['final_date'])){
                $data['final_date_err'] = 'Por favor defina uma data';
            }

            if(empty($data['priorty'])){
                $data['priorty'] = 'Por favor selecione uma prioridade';
            }
            
            //Make sure no errors
            if(empty($data['title_err']) && empty($data['body_err']) && empty($data['final_date_err'])){
                //Validated
                if($this->taskModel->updateTask($data)){
                    flash('set_task_success', 'Tarefa atualizada!'); 
                    redirect('tasks');
                }else{
                    die('Something went wrong');
                }
            }else{
                $this->view('tasks/edit',$data);
            }

        }else{
            $user_id = $_SESSION['user_id'];
            $task = $this->taskModel->getTaskById($id,$user_id);
            
            $data = [
                'id' => $id,
                'title' => $task->title,
                'body' => $task->body,
                'final_date' => $task->final_date,
                'priorty' => $task->priorty
            ];  
        }

    
        $this->view('tasks/edit',$data);
    }

  public function delete($id){
        $user_id = $_SESSION['user_id'];
        if($this->taskModel->delete($id, $user_id)){
            redirect('tasks');
            flash('delete', 'Tarefa deletada', 'alert alert-danger');
        }else{
            die('Something went wrong');
        }
    }

    public function finished(){
        $user_id = $_SESSION['user_id'];
        $checked = 'y';
        $finishedTasks = $this->taskModel->getDoneTask($user_id,$checked);
        $data = [
            'finishedTasks' => $finishedTasks
        ];
        $this->view('tasks/finished',$data);
    }


}