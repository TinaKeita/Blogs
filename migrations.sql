-- 0. Dzēšam datu bāzi, ja tā jau eksistē
DROP DATABASE IF EXISTS blog_ipb23;

-- 1. Izveidojam jaunu datu bāzi
CREATE DATABASE blog_ipb23;

-- 2. Izvēlamies šo datu bāzi
USE blog_ipb23;

-- 3. Izveidojam 'categories' tabulu
CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(25)
);

-- 4. Ievietojam kategorijas datus
INSERT INTO categories (category_name)
VALUES
("Svētki"),
("Mūzika"),
("Sports");

-- 5. Izveidojam 'posts' tabulu
CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200),
    category_id INT(255)
);

-- 6. Ievietojam ierakstus tabulā 'posts'
INSERT INTO posts (content)
VALUES
("Ziemassvētrki nāk!!!"),
("ColdPlay Latvijā"),
("Gan jau ka pietiks skriet");

-- 7. Saistām katru ierakstu ar atbilstošo kategoriju (atjauninām category_id)
UPDATE posts
SET category_id = 1
WHERE id = 1;  -- Pirmais ieraksts (Ziemassvētrki nāk!!!)

UPDATE posts
SET category_id = 2
WHERE id = 2;  -- Otrais ieraksts (Otrs bloga ieraksts)

UPDATE posts
SET category_id = 3
WHERE id = 3;  -- Trešais ieraksts (Gan jau ka pietiks)

-- 8. Pārbaudām, vai dati ir ievadīti pareizi
SELECT * FROM posts;
SELECT * FROM categories;