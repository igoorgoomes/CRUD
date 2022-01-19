<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# CRUD - DEVELOPER BOOKS
Simples CRUD, listando alguns livros para desenvolvedores. Para rodar esse repositório em seu sistema local deve seguir os passos abaixo:

## Requisitos - Deverá ter instalado em sua máquina

- Composer - [Link para instalação](https://getcomposer.org/download/)
- Laravel - [Link para instalação](https://laravel.com/docs/8.x)
- Servidor Localhost podendo ser o [WampServe](https://www.wampserver.com/en/) ou [Xampp](https://www.apachefriends.org/pt_br/index.html)
- npm - [Link ppara instalação](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)


## Como executar o repositório em sistema local
1. Faça um clone do projeto https://github.com/igoorgoomes/CRUD.git .
2. Abra o terminal de comandos e navega até a pasta do projeto /CRUD .
3. Execute o seguinte comando no terminal **composer install --no-scripts**.
4. Por padrão quando você clonar o projeto, o arquivo *.env* é apenas um arquivo exemplo.
5. Agora vamos precisar gerar o arquivo **.env** manualmente seguindo com os seguintes comandos no terminal:
- **cp .env.example .env** 
- **php artisan key:generate**
- **code .** (Utilizei a IDE VSCode - abrindo o programa pelo terminal)
6. *Nesse projeto foi utilizado o MySQL administrado pelo phpMyAdmin que já vem no WampServe e também no Xampp  , porém é importante criar um usuário e senha*, seguindo então com a configuração do banco de dados, vamos criar um usuário e senha dentro do phpMyAdmin:
- Ao acessar o phpMyAdmin atrávez do Wampserve ou Xampp,podemos logar apenas com usuário root;
- Agora na aba *User accounts*
- Vamos em *New - Add user account* 
- Informe o nome do usuário *user name* em *Host name* vamos colocar o parâmetro **local** e logo a frente **localhost**.
- Defina uma senha em *Password*, logo abaixo a aba **Global privileges** marque o flex *Check all (para marca todos)*.
**Agora temos um usuário para administrar o banco de dados, vamos continuar nossa configuração:** 
7. Dentro no phpMyAdmin vamos na aba *SQL* e vamos executar os seguintes comandos:
- **drop database livros;**
- **create database livros;**
- **use livros;** 
8. Configurar o arquivo **.env**, em *DB_CONNECTION=mysql* vamos alterar as seguintes linhas:
- **DB_HOST=127.0.0.1** alterar para **DB_HOST=localhost**.
- **DB_PORT=3306** caso está linha já esteja na porta 3306, podemos manter nessa porta ou caso você esteja utilizando outra porta pode alterar esse 3306 para porta local que esteja usando.
- **DB_DATABASE=crud** alterar para **DB_DATABASE=livros**,  feito isso salve o arquivo **.env**.  
9. Agora vamos ajustar o arquivo **AppServiceProvider.php** no seguinte diretorio *App\Providers* logo abaixo da linha *use Illuminate\Support\ServiceProvider;* vamos incluir *use Illuminate\Support\Facades\Schema;* e também lá no final do arquivo temos a **public function boot()** dentro de {} deve colocar o seguinte comando *Schema::defaultStringLength(191);* feito essas duas inclusões, salve o arquivo **AppServiceProvider.php**.
5. Após essas configurações, execulte o seguinte comando no terminal **php artisan migrate:fresh**
6. Ainda no terminal vamos execultar o servidor laravel com seguinte comando **php artisan serve**
7. Caso tenha clonado o projeto para dentro de servidor localhost lembre-se de validar se o serviço está ativo em sua máquina.
8. Os endereços de navegação ficaram da seguinte forma:
- Acesso pela porta serve laravel http://127.0.0.1:8000/livros
- Acesso pela porta servido localhost http://localhost:8000/livros

Obrigado por visitar meu projeto, em caso de dúvidas pode entrar contado pelo [Linkedin](https://www.linkedin.com/in/igor-gomes-de-brito/)
