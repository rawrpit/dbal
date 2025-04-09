CREATE TABLE game_rounds (
  id INT AUTO_INCREMENT PRIMARY KEY,
  player_name VARCHAR(100) NOT NULL,
  pick ENUM('rock', 'paper', 'scissors') NOT NULL,
  played_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO game_rounds (player_name, pick, played_at) VALUES
('Alex', 'rock', '2025-04-09 15:00:00'),
('Jamie', 'scissors', '2025-04-09 15:01:00'),
('Taylor', 'paper', '2025-04-09 15:02:00'),
('Jordan', 'rock', '2025-04-09 15:03:00'),
('Sam', 'scissors', '2025-04-09 15:04:00');