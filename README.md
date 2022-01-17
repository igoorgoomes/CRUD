<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# CRUD - DEVELOPER BOOKS
Simples CRUD, listando alguns livros para desenvolvedores. Para rodar esse repositório em seu sistema local deve seguir os passos abaixo:

## Requisitos - Deverá ter instalado em sua máquina

- Composer - [Link para instalação](https://getcomposer.org/download/)
- Laravel - [Link para instalação](https://laravel.com/docs/8.x)
- Servidor Localhost podendo ser o [Wamp](https://www.wampserver.com/en/) ou [Xampp](https://www.apachefriends.org/pt_br/index.html)
- npm - [Link ppara instalação](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## Como executar o repositório em sistema local
1. Faça um clone do projeto https://github.com/igoorgoomes/CRUD.git
2. Abra o terminal de comandos e navega até a pasta do projeto /CRUD
3. Gere o arquivo **.env** manualmente com os seguintes comandos:
- **cp .env.example .env**
- **php artisan key:generate**
4. Configure seu banco de dados no arquivo **.env**
5. Após a configuração, execulte o seguinte comando no terminal **php artisan migrate**
6. Ainda no terminal vamos execultar o servidor laravel com seguinte comando **php artisan serve**
7. Caso tenha clonado o projeto para dentro de servidor localhost lembre-se de validar se o serviço está ativo em sua máquina.
8. Os endereços de navegação ficaram da seguinte forma:
- Acesso pela porta serve laravel http://127.0.0.1:8000/livros
- Acesso pela porta servido localhost http://localhost:8000/livros

Obrigado por visitar meu projeto
