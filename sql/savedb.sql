CREATE TABLE IF NOT EXISTS PdtCasino (
	id BIGINT PRIMARY KEY AUTO_INCREMENT,
    prix SMALLINT NOT NULL)
    ENGINE=InnoDB;



ALTER TABLE pdtcasino ADD COLUMN name VARCHAR(50) NOT NULL;



INSERT INTO pdtcasino (name, prix) VALUES ("kinder", 3.5), ("Prince Tout Choco", 6),
 ("Figolu Figue", 5.5), ("Malteser", 3.5);