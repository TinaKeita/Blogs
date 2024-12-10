-- 1. izveido datu bāzi
CREATE DATABASE blog_ipb23;

-- 2. izmanto datu bāzi
 USE blog_ipb23;

-- 3. Izveidot tabulu
CREATE TABLE posts (
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		content VARCHAR(5200)  
);

-- 4. Ielikt saturu posts tabula
INSERT INTO posts
(content)
VALUES
("Ziemassvētrki nāk!!!"),
("Otrs bloga ieraksts"),
("Gan jau ka pietiks");

SELECT * FROM posts;