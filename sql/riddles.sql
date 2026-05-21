CREATE TABLE riddles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    riddle VARCHAR(255) NOT NULL,
    answer VARCHAR(100) NOT NULL,
    hint VARCHAR(255),
    roomId INT NOT NULL
);


INSERT INTO riddles (riddle, answer, hint, roomId)
VALUES
    ('', '', '', '1'),
    ('', '', '', '1'),
    ('', '', '', '1'),
    ('', '', '', '2'),
    ('', '', '', '2'),
    ('', '', '', '2');

