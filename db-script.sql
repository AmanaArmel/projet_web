CREATE DATABASE stackdev;
USE stackdev;

CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(50) UNIQUE NOT NULL,
                       email VARCHAR(100) UNIQUE NOT NULL,
                       password VARCHAR(255) NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE questions (
                           id INT AUTO_INCREMENT PRIMARY KEY,
                           user_id INT NOT NULL,
                           title VARCHAR(255) NOT NULL,
                           body TEXT NOT NULL,
                           created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                           FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE answers (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         question_id INT NOT NULL,
                         user_id INT NOT NULL,
                         body TEXT NOT NULL,
                         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                         FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE,
                         FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);


# Insertion des données fictives

-- Insertion d'un utilisateur
INSERT INTO users (username, email, password)
VALUES ('armel', 'armel@example.com', SHA2('password123', 256));
INSERT INTO users (username, email, password)
VALUES ('kronos', 'kronos@example.com', SHA2('password123', 256));

-- Insertion d'une question
INSERT INTO questions (user_id, title, body)
VALUES (1, 'Comment structurer un projet PHP MVC ?', 'Je débute avec PHP MVC et j’aimerais savoir comment organiser mes fichiers.');

-- Insertion d'une réponse
INSERT INTO answers (question_id, user_id, body)
VALUES (1, 1, 'Tu peux organiser ton projet avec un dossier public, app, config et core.');
