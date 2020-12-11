USE cadastro;
CREATE TABLE comentarios(
id INT AUTO_INCREMENT primary key NOT NULL,
item_id INT NOT NULL,
user_id INT NOT NULL,
nome_user VARCHAR(50) NOT NULL,
comentario VARCHAR(255) NOT NULL,
datahora DATETIME,
tipo VARCHAR(20))