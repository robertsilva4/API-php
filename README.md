# Loja Virtual com CRUD em PHP e frontend JavaScript

<p align="center">
  <img src="https://github.com/robertsilva4/API-php/blob/main/frontend/img/lojavirtual.jpg" width="500" height="300">
</p>

Status do Projeto: Em Desenvolvimento ⚠️

API de loja Virtual 
Uma plataforma de vendas e compras de produtos online.

## Tecnologias

* PHP
* JavaScript
* Bootstrap 4
* Mysql

## Funcionalidades

* Carrinho de Produtos
* Catálogo de Produtos
* Comentários por produto
* Slide de Produtos em destaque
* Uploads de produtos
* Cadastro de Clientes
* Cadastro de Vendedores
* Seção Login e Senha 
* CRUD 

## Pré Requisitos
Crie as tabelas em seu Banco de Dados contidas na pasta db

## Como Rodar a Aplicação

No terminal Clone o projeto 
* git clone https://github.com/robertsilva4/API-php/

Crie as tabelas do Banco de Dados 
* Entre no Banco de dados Mysql
* Carregue os arquivos da pasta db
* Execute os comandos de criação das Tabelas Clientes, Usuários, Produtos e Comentários

Conectar a aplicação com seu Banco de Dados 
* Entre na pasta API-php/backend
* Abra o arquivo conexao.php com seu editor de texto
* coloque o IP do seu Banco na variavel $host, a porta do Banco de Dados em $port, a senha em $passwd, na variável $db manter com o valor cadastro

## Databases
- Clientes
|nome|email|senha|cep|rua|numero|bairro|complemento|cidade|estado|
- Usuarios
|nome|email|senha|cep|rua|numero|bairro|complemento|cidade|estado|
- Produtos
|nome|descricao|valor|datahora|imagem|categoria|
- Comentarios
|item_id|user_id|nome_user|comentario|datahora|tipo|
