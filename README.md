<h1 align="center">
  Aplicação PHP - MVC
</h1>

<p align="center">Proposta de solução para o desafio do derramamento de água em reservatórios aleatórios atravéz de um arquivo. 
</p>

## 🧠 Resolução 
<p align="center">
  <img  src="docs\logic.png">
</p>

## 🔍 Observações
- Um arquivo `input.txt` na raíz do projeto, satisfaz a entrada do desafio.
- Para o front-end foi usado twig(parecido com o blade do laravel) e bootstrap 5.
- ⚠️(testes quebrados) Para realizar os testes de unidade, basta executar `./vendor/bin/phpunit tests`. 
 
## 👾 Tecnologias
- ⚡ PHP - Fast, flexible and pragmatic.
- 🐳 Docker — Build safer, share wider, run faster

## ✋🏻 Pré-requisitos

- [PHP - v7.2](https://www.php.net/downloads)
- [Composer - v2.1.8](https://getcomposer.org/download/)
- [Docker - v20.10.8](https://docs.docker.com/desktop/windows/install/)
## 💥 Instalação e execução

1. Faça um clone desse repositório `git clone https://github.com/oliveira7/pour-water-challenge.git`;
2. Entre na pasta do projeto;
3. Rode `composer install`; 
3. Rode `docker-compose up -d` para subir os containers;
4. Acesse o `localhost:8000`;

## 🤓 Fluxo da aplicação

<p align="center">
  <img src="docs\fluxo-simples.png">
</p>

## 👷 A fazer
- [x] Lógica
- [x] Manipular arquivo
- [x] Frontend simples(form)
- [x] Validação e Tratamento de erro
- [ ] Criar testes(PHPUnit)
- [x] Nginx
- [x] Dockerizar(Dockerfile, docker-compose)