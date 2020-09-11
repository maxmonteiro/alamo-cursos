## Hub Álamo - Teste back end

## Requisitos
- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- MySQL Server
- Composer

## Instalação
Clone o projeto e acesse o diretório pelo terminal
Faça uma cópia do arquivo .env.example e renomeio para .env e configure as variáveis de conexão com o banco
Execute o comando para instalar as dependências do Laravel
```
composer install
```
Execute as migrations
```
php artisan migrate
```
Para testar, execute o comando
```
php artisan serve
```
Acesse a url informada no console do terminal