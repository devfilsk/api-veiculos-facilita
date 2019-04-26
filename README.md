# api-veiculos-facilita
Api laravel para vendas de veiculos 

## Clonar Repositório

    $ git clone git@github.com:devfilsk/api-veiculos-facilita.git
    $ cd api-veiculos-facilita

## Configuração e instalando dependencias

## É necessário configurar o arquivo .env para o sqlite, o arquivo sqlite do projeto se encontra no diretório database/database.sqlite
* configuração do arquivo .env: 

    
    
* Clone o arquivo .env.example para .env e faça a seguinte configuração : 

comentando as demais configurações de conexão com um #
    
    $ DB_CONNECTION=sqlite 
    $ #DB_DATABASE=homestead
    $ #DB_HOST=127.0.0.1
    $ #DB_PORT=3306
    $ #DB_USERNAME=homestead
    $ #DB_PASSWORD=secret

    $ php artisan key:generate
    $ composer install
    
    
    
##Carregar migrations e seeders

    $ php artisan migrate --seed
    
## Iniciar o servidor laravel

        $ php artisan serve

