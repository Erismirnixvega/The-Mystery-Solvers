CREATE TABLE riddles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    riddle VARCHAR(255) NOT NULL,
    answer VARCHAR(100) NOT NULL,
    hint VARCHAR(255),
    roomId INT NOT NULL
);


INSERT INTO riddles (riddle, answer, hint, roomId)
VALUES
    ('Het bos is behoorlijk gevuld met mysterieuze wegen. Welk pad is blijkbaar het veiligst weg?', 'Bezaanmast Mangroven', 'Een bosrijke kustlijn waar verwoeste rompen aanspoelen.', '1'),
    ('Welke kist verbergt de sleutel?', 'XIV', 'Een antieke uitstraling. De patronen zijn zo fraai ontworpen dat ze vooral bij de adel in de smaak vallen.', '1'),
    ('Je hebt twee stukken gereedschap gevonden die rondslingerden. Welke van deze lijkt op de lange termijn nuttig te zijn??', 'Samen', 'Er is een gezegde dat luidt: Wees altijd voorbereid door iets achter de hand te houden', '1'),
    ('', '', '', '2'),
    ('', '', '', '2'),
    ('', '', '', '2');

