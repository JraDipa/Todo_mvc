CREATE TABLE todo_tbl (
  id INT AUTO_INCREMENT PRIMARY KEY,
  topic VARCHAR(255) NOT NULL,
  todo TEXT NOT NULL,
  is_done TINYINT(1) NOT NULL DEFAULT 0,
  add_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO todo_tbl (topic, todo, is_done, add_date) VALUES (?, ?, ?, ?);

UPDATE todo_tbl SET topic = ?, todo = ? WHERE id = ?;

DELETE FROM todo_tbl WHERE id = ?;
