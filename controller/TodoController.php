<?php 
    include_once("../model/TodoModel.php");

    class TodoController extends TodoModel {
        public function view_todos(){
            return $this->all_todos();
        }

        public function add_todo($todo, $todo_data){
            return $this->todo_add($todo, $todo_data);
        }

        public function update_todo($id, $topic, $todo){
            return $this->todo_update($id, $topic, $todo);
        }

        public function delete_todo($id){
            return $this->todo_delete($id);
        }
    }

