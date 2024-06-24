DROP DATABASE IF EXISTS petcare;

CREATE DATABASE petcare;

USE petcare;

CREATE TABLE usuario (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    tipo ENUM("ADM","Cliente"),
    nome VARCHAR(50),
    email VARCHAR(150),
    senha VARCHAR(200),
    telefone VARCHAR(50),
    cpf VARCHAR(50),
    logradouro VARCHAR(50),
    bairro VARCHAR(50),
    cep VARCHAR(20),
    cidade VARCHAR(50),
    uf VARCHAR(50),
    numero VARCHAR(50),
    status_cliente ENUM("Ativo", "Inativo")
);

CREATE TABLE fornecedor (
    nome VARCHAR(150),
    razao_social VARCHAR(100),
    telefone VARCHAR(50),
    cpf_fornecedor VARCHAR(50) PRIMARY KEY,
    status_fornecedor ENUM("Ativo", "Inativo")
);

CREATE TABLE marca (
    id_marca INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    status_marca ENUM("Ativo", "Inativo")
);

CREATE TABLE categoria_produto (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50),
    status_categoria ENUM("Ativo", "Inativo")
);

CREATE TABLE servico (
    id_servico INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50),
    servico_status ENUM('Ativo', 'Inativo')
);

CREATE TABLE produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    imagem VARCHAR(200) NOT NULL,
    estoque INT,
    preco FLOAT,
    animal ENUM("Ambos", "Gato", "Cachorro"),
    descritivo VARCHAR(200),
    id_marca INT,
    id_categoria INT,
    status_produto ENUM("Ativo", "Inativo"),
    FOREIGN KEY(id_marca) REFERENCES marca (id_marca),
    FOREIGN KEY(id_categoria) REFERENCES categoria_produto (id_categoria)
);

CREATE TABLE pet (
    id_pet INT AUTO_INCREMENT PRIMARY KEY,
    idade ENUM("Filhote","Adulto","Idoso"),
    nome VARCHAR(100),
    raca VARCHAR(100),
    id_cliente INT,
    status_pet ENUM("Ativo", "Inativo"),
    tipo_pet ENUM('Gato', 'Cachorro'),
    FOREIGN KEY(id_cliente) REFERENCES usuario (id_cliente)
);

CREATE TABLE agenda (
    id_agenda INT AUTO_INCREMENT PRIMARY KEY,
    tipo_servico INT,
    horario TIME,
    data_ag DATE,
    id_pet INT,
    valor_servico FLOAT,
    FOREIGN KEY (id_pet) REFERENCES pet (id_pet),
    FOREIGN KEY (tipo_servico) REFERENCES servico (id_servico)
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