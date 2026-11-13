/* CARDAPIO */

CREATE TABLE Pratos (
idPrato INT AUTO_INCREMENT PRIMARY KEY,
nomePrato VARCHAR(100) NOT NULL UNIQUE,
descricao VARCHAR(255),
preco NUMERIC(6,2) NOT  NULL 
)

SELECT * FROM pratos

INSERT INTO pratos
(nomePrato, descricao, preco)
VALUES 
('Strogonoff de Frango', 'Frango em pedaços com molho de strogonoff acompanhado por deliciosos champignos, arroz e batata frita', 34.99),
('Lasanha á Bolonhesa', 'Deliciosos folhas de massa produzida na casa com queijo, presunto e molho de tomate com carne moida', 46.99),
('Frango á Milanesa', 'Delicioso peito de frango à milanesa. Acompanha arroz, feijão e batata frita', 37.99),
('Filé à Mignon ao molho Madeira', 'Delicioso filé mignon ao molho madeira. Acompanha arroz e batata rústica', 87.99),
('Costela ao molho Barbecue', 'Costela de molho barbecue. Acompanha arroz e cebola à milanese', 59.99);