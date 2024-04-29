use aplication;

CREATE TABLE tbAlunos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255)NOT NULL,
	idade INT NOT NULL,
    matricula INT NOT NULL UNIQUE,
    curso VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    foto VARCHAR(255) NOT NULL,
    serie VARCHAR(255) NOT NULL,
    nacess VARCHAR(255) NOT NULL,
    email VARCHAR(255)NOT NULL  UNIQUE
    );
    
DROP TABLE tbAlunos;
    
    describe tbAlunos;
SELECT * FROM tbAlunos;
DESCRIBE tbAlunos;

INSERT INTO tbalunos (nome, idade, matricula, curso, senha, foto, serie, nacess, email) 
VALUES ('Henry ', '23','3213','ds', 'awdwadw','c6542154fff4c25e178f09f455b5327e.png', '3','1', 'franzhenry46@gmail.com')