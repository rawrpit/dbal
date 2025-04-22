CREATE DATABASE IF NOT EXISTS usarps;
USE usarps;

DROP TABLE IF EXISTS game_rounds;

CREATE TABLE game_rounds (
  id INT AUTO_INCREMENT PRIMARY KEY,
  player_name VARCHAR(255) NOT NULL,
  symbol ENUM('rock', 'paper', 'scissors') NOT NULL,
  game_time DATETIME NOT NULL
);

INSERT INTO game_rounds (player_name, symbol, game_time) VALUES
('Alice', 'rock', '2025-04-21 10:15:00'),
('Bob', 'scissors', '2025-04-21 10:16:00'),
('Clara', 'paper', '2025-04-21 10:17:00'),
('Dave', 'rock', '2025-04-21 10:18:00'),
('Eva', 'scissors', '2025-04-21 10:19:00');
