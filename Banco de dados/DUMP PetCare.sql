DROP DATABASE petcare;

CREATE DATABASE petcare;

USE petcare;

CREATE TABLE usuario (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    tipo ENUM("ADM","Cliente"),
    nome VARCHAR(50),
    email VARCHAR(150),
    senha VARCHAR(50),
    telefone VARCHAR(50),
    cpf VARCHAR(50),
    logradouro VARCHAR(50),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    uf VARCHAR(50),
    numero VARCHAR(50)
);

CREATE TABLE fornecedor (
    nome VARCHAR(150),
    razao_social VARCHAR(100),
    telefone VARCHAR(50),
    cpf_fornecedor VARCHAR(50) PRIMARY KEY
);

CREATE TABLE marca (
    id_marca INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100)
);

CREATE TABLE categoria_produto (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50)
);

CREATE TABLE servico (
    id_servico INT AUTO_INCREMENT PRIMARY KEY,
    preco VARCHAR(50),
    descricao VARCHAR(50)
);

CREATE TABLE produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    estoque INT,
    preco FLOAT,
    animal ENUM("Gato", "Cachorro"),
    descritivo VARCHAR(200),
    id_marca INT,
    id_categoria INT,
    FOREIGN KEY(id_marca) REFERENCES marca (id_marca),
    FOREIGN KEY(id_categoria) REFERENCES categoria_produto (id_categoria)
);

CREATE TABLE imagens (
    descritivo VARCHAR(150),
    id_imagem INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT,
    FOREIGN KEY(id_produto) REFERENCES produto (id_produto)
);

CREATE TABLE pet (
    id_pet INT AUTO_INCREMENT PRIMARY KEY,
    idade ENUM("Filhote","Adulto","Idoso"),
    nome VARCHAR(100),
    raca VARCHAR(100),
    id_cliente INT,
    FOREIGN KEY(id_cliente) REFERENCES usuario (id_cliente)
);

CREATE TABLE agenda (
    horario DATETIME,
    data_ag DATE,
    id_agenda INT AUTO_INCREMENT PRIMARY KEY,
    id_pet INT,
    FOREIGN KEY(id_pet) REFERENCES pet (id_pet)
);

CREATE TABLE produto_fornecedor (
    id_produto INT,
    cpf_fornecedor VARCHAR(50),
    FOREIGN KEY(id_produto) REFERENCES produto (id_produto),
    FOREIGN KEY(cpf_fornecedor) REFERENCES fornecedor (cpf_fornecedor)
);

CREATE TABLE servicos_realizados (
    id_servicos_realizados INT AUTO_INCREMENT PRIMARY KEY,
    id_servico INT,
    id_agenda INT,
    FOREIGN KEY(id_servico) REFERENCES servico (id_servico),
    FOREIGN KEY(id_agenda) REFERENCES agenda (id_agenda)
);

CREATE TABLE venda (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    data_venda VARCHAR(50),
    id_cliente INT,
    FOREIGN KEY(id_cliente) REFERENCES usuario (id_cliente)
);

CREATE TABLE itens (
    id_itens INT AUTO_INCREMENT PRIMARY KEY,
    quantidade INT,
    preco_unitario FLOAT,
    id_venda INT,
    id_produto INT,
    FOREIGN KEY (id_venda) REFERENCES venda (id_venda),
    FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);

INSERT INTO usuario (
tipo, 
nome, 
email, 
senha, 
telefone, 
cpf, 
logradouro, 
bairro, 
cidade, 
uf, 
numero) VALUES (
'ADM',
'João Guilherme Silveira',
'joaosilveira31@hotmail.com',
'123',
'14996177820',
'29558599960',
'Rua Doutor Ignácio de Almeida Prado',
'Jardim Odete',
'Jaú',
'SP',
'506'
);
