CREATE DATABASE IF NOT EXISTS banco_de_dados;

USE banco_de_dados;

CREATE TABLE IF NOT EXISTS informacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    info VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO informacoes (info) VALUES
('Experiência em HTML, CSS e JavaScript'),
('Familiaridade com frameworks como React e Angular'),
('Amo aprender novas tecnologias!');
