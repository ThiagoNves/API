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


/* BEBIDA */

CREATE TABLE Bebidas (
idBebida INT AUTO_INCREMENT PRIMARY KEY,
nomeBebida VARCHAR(100) NOT NULL,
volume VARCHAR(255) NOT NULL,
alcoolico BOOLEAN NOT NULL,
preco NUMERIC(6,2) NOT  NULL,

CONSTRAINT chk_alcoolico
CHECK (alcoolico IN (0,1))
);

INSERT INTO Bebidas 
(nomeBebida, volume, alcoolico, preco )
VALUES 
('Coca Cola','200 ml', '0', 4.99),
('Suco Del Valley de Maracujá','450ml', '0', 9.99),
('Energetico Zero', '420ml', '0', 14.99),
('Pitú', '200ml', '1', 6.99),
('Caipirinha de limão','350ml', '1', 12.99);

SELECT * FROM Bebidas


/* SOBREMESA */

CREATE TABLE Sobremesa (
idSobremesa INT AUTO_INCREMENT PRIMARY KEY,
nomeSobremesa VARCHAR(100) NOT NULL,
descricao VARCHAR(255) NOT NULL,
preco NUMERIC(6,2) NOT  NULL
);

INSERT INTO Sobremesa 
(nomeSobremesa, descricao, preco )
VALUES 
('Sorvete de Negresco','Um doce frio e saboroso em dias de extremo calor, sabor chocolate com pedaços de negresgo ', 15.99),
('Mousse de Morango','Um delicioso Mousse feito de Morangos muito deliciosos', 20.00),
('Bolo de chocolate', 'Uma fatia deliciosa e generosa de chocolate', 18.00);

SELECT * FROM Sobremesa


