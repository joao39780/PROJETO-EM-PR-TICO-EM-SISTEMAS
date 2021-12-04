<?php
    class Task{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getTasks($user_id, $priorty, $checked){
            $this->db->query('SELECT*FROM tasks WHERE user_id = :user_id AND priorty = :priorty AND checked = :checked');
            $this->db->bind(':user_id',$user_id);
            $this->db->bind(':priorty',$priorty);
            $this->db->bind(':checked',$checked);
            $results = $this->db->resultSet();

            return $results;
        }
    
        public function addTask($data){
            $this->db->query('INSERT INTO tasks(title, user_id, body, priorty, final_date, checked) VALUES(:title, :user_id, :body, :priorty, :final_date, :checked)');
            //Bind values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':body', $data['body']);
            $this->db->bind(':priorty',$data['priorty']);
            $this->db->bind(':final_date',$data['final_date']);
            $this->db->bind(':checked',$data['checked' ]);
            // Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function getTaskById($id,$user_id){
            $this->db->query('SELECT * FROM tasks WHERE id = :id AND user_id = :user_id');
            $this->db->bind(':id',$id);
            $this->db->bind(':user_id',$user_id);

            $row = $this->db->single();

            return $row;
        }
    
        public function setDoneTask($id,$user_id,$checked){
            $this->db->query('UPDATE tasks SET checked = :checked WHERE id = :id AND user_id = :user_id');
            $this->db->bind(':checked',$checked);
            $this->db->bind(':id',$id);
            $this->db->bind(':user_id',$user_id);
            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        
        public function getDoneTask($user_id,$checked){
            $this->db->query('SELECT*FROM tasks WHERE user_id = :user_id AND checked = :checked');
            $this->db->bind(':user_id',$user_id);
            $this->db->bind(':checked',$checked);
            
            $results = $this->db->resultSet();

            return $results;
            
        }

        public function updateTask($data){
            $this->db->query('UPDATE tasks set title = :title, body = :body, priorty = :priorty, final_date = :final_date WHERE id = :id AND user_id = :user_id');
            //Bind values
            $this->db->bind(':id',$data['id']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':body', $data['body']);
            $this->db->bind(':priorty',$data['priorty']);
            $this->db->bind(':final_date',$data['final_date']);
            // Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function delete($id,$user_id){
            $this->db->query('DELETE FROM tasks WHERE id = :id AND user_id = :user_id');
            $this->db->bind(':id',$id);
            $this->db->bind(':user_id',$user_id);
            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    
    
    
    }