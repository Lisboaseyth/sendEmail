### Send Email

Sua Solução para automatizar emails!

## 🔧 Execução do Projeto

Para executar este projeto, é necessário seguir os passos abaixo:

1. É necessário baixar um ambiente de desenvolvimento PHP, de preferência o XAMPP, você pode baixar pelo site oficial: https://www.apachefriends.org/pt_br/index.html.
2. Após baixar e instalar, inicie-o e ative o ative o Apache e o MySql.
3. Feito isso, abra o seu navegador e acesse o seu http://localhost/phpmyadmin/ e no canto esquerdo irá conter alguns Bancos de dados, clique em Novo para criar um novo banco.
4. É necessário usar baixar o Composer para iniciar os processos, você pode baixar no site oficial: https://getcomposer.org/
5. Para sistemas baseados em Unix ou Linux, você geralmente pode usar o seguinte comando para baixar e instalar o Composer globalmente:
   ```bash
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php --install-dir=/usr/local/bin --filename=composer
   ```

6.  Após fazer o processo de instalação do Composer executar o comando para instalar as dependências, que serão utilizadas. Portanto utilize o comando abaixo para instalar as dependências:

```bash
# Primeiro use esse comando:
composer install

# Após finalizar a instalação use esse comando:
npm install
```

1. Execute as migrações do banco de dados:

```bash

# Utilizando o yarn
php artisan migrate

# Caso precise reiniciar as migrations
php artisan migrate:fresh
```

4. Inicie o servidor:

```bash
# Abra um terminal e digite:
php artisan serve

# Mantendo um terminal ativo abra um segundo terminal e digite:
npm run dev
```

1. Após fazer todos os passos descritos a aplicação estará sendo executado em http://127.0.0.1:8000.
