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
1. Clone o projeto e acesse o diretório pelo terminal.
2. Faça uma cópia do arquivo .env.example e renomei-o para .env e configure as variáveis de conexão com o banco.
3. Execute o comando para instalar as dependências do Laravel.
```
composer install
```
4. Gere a key do projeto
```
php artisan key:generate
```
5. Execute as migrations.
```
php artisan migrate
```
6. Povoe o banco.
7. Para testar, execute o comando.
```
php artisan serve
```
Acesse a url informada no console do terminal.