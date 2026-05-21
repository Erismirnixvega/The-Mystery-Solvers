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
    ('🐑 (-ap) + 🥅 (-ne) + 🦅 (-rend) + 🍺 (-bie) + 🚗 (-uto) + 🌊 (-ater)', 'schatkaart', 'Elke piraat heeft dit nodig om de schat te vinden', '2'),
    ('Ik heb geen ogen, toch zie ik de zee. Ik heb geen handen, toch wijs ik de weg. Elke piraat heeft mij nodig, maar verliezen ze mij, dan zijn ze verloren. Wat ben ik?', 'kompas', 'Elke zeeman heeft dit aan boord', '2'),
    ('Iemand liet deze getallen achter op de muur van de grot: 19 - 3 - 8 - 1 - 20', 'schat', 'A-B-C-D-E...', '2');

