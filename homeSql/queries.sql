
-- create
CREATE TABLE Students (
  stId INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress varchar(100)
);

-- insert
INSERT INTO Students VALUES (0001, 'Viki', '17', 'Moscow Bolshaya Sadovaya street 43');
INSERT INTO Students VALUES (0002, 'Alex', '23', 'Moscow Lenin Street 2');
INSERT INTO Students VALUES (0003, 'Ann', '16', 'Samara 77 Pushkin Street');
INSERT INTO Students VALUES (0004, 'Nika', '51', 'Anapa 51 Primorskaya Street');
INSERT INTO Students VALUES (0005, 'Andrew', '28', 'Taganrog Admiral Kruys str. 12');
INSERT INTO Students VALUES (0006, 'Nick', '35', 'Taganrog Bolshaya bulvarnaya str. 18');
INSERT INTO Students VALUES (0007, 'Kate', '76', 'Rostov-on-Don 82 Gorky Street');


SELECT * FROM Students WHERE age BETWEEN 18 AND 70;