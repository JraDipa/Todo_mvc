<?php
header("Content-Type: application/json");

include_once("../model/TodoModel.php");

$todoController = new TodoController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'view':
            $todos = $todoController->view_todos();
            echo json_encode($todos);
            break;
        case 'add':
            $todo = $_GET['todo'];
            $todo_data = $_GET['todo_data'];
            $result = $todoController->add_todo($todo, $todo_data);
            echo json_encode(['message' => 'Todo added successfully']);
            break;
    }
} else {
    echo json_encode(['error' => 'Invalid action']);
}
