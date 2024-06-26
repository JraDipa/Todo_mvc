<?php 

    include("../config/database.php");
    class TodoModel extends db {
        public function todo_add($todo, $todo_data){
            $date = date('y-m-d H-m-sa');
            $is_done = 0;

            $sql = "INSERT INTO todo_tbl(topic, todo, is_done, add_date)VALUE(?, ?, ?, ?)";
            $sql_exc = $this->connect()->prepare($sql);
            return $sql_exc->execute([$todo, $todo_data, $is_done, $date]);
        }
        
        public function all_todos(){
            $sql = "SELECT * FROM todo_tbl";
            $sql_exc = $this->connect()->prepare($sql);
            $sql_exc->execute();
            $result = $sql_exc->fetchAll();

            return $result;
        }
        
        public function todo_update($id, $topic, $todo){
            $sql = "UPDATE todo_tbl SET topic = ?, todo = ? WHERE id = ?";
            $sql_exc = $this->connect()->prepare($sql);
            $result = $sql_exc->execute([$topic, $todo, $id]);

            return $result;
            
        }

        public function todo_delete($id){
            $sql = "DELETE FROM todo_tbl WHERE id = ?";
            $sql_exc = $this->connect()->prepare($sql);
            $result = $sql_exc->execute([$id]);

            return $result;
        }
    }
    }
