1 - Instalei o laravel na hostinger, depois dei download, 
2 - Criei um repositório no github para o deploy a partir do próprio download
3 - Precisei deletar todo o conteúdo do site para implementação git
3 - Depois criei a implementação GIT com o webhook, por algum motivo ficou quebrado, 
    acredito deve ter faltado algum arquivo env ou de configuração
4 - de qualquer jeito, eu fui lá e reintalei o laravel pela plataforma, depois disso funcionou

5 - depois baixei os arquivos .env (e todos dot files que tinham) estranho não ter vindo antes
6 - abri o .env e substitui o hostname de 127.0.0.1 para sql889.main-hosting.eu (ou 89.117.7.52)
7 - também foi preciso colocar meu IP na plataforma hostinger na seção:
    Banco de dados > MySQl Remoto (optei pela opção qualquer servidor #)
    e inserir meu IP para eu poder acessar o mesmo banco de dados de produção.

8 - depois eu tentei acessar o servidor via ssh
    tive que ativar pela plataforma e depois criar/alterar uma senha
    pelo comando ssh [usuario]@[ip] -p [porta] (todos os dados informados na plataforma)

9 - depois fiquei daando ls e cd até achar a pasta do projeto e dei o comando:
    php artisan migrate (deu certo e criou as tabelas)
    php artisan migrate:rollback (para voltar as modificações caso sejam migrations exemplo)

10 - eu também populei o banco de dados como comando:
    php artisan db:seed --class=AlimentoSeeder
    mas isso foi antes de criar os seeders pelo comando:
    php artisan make:seeder AlimentoSeeder

11 - precisei de digitar todos os campos manualmente, mas pelo menos não teria que refazer
     o serviço caso tenha algum problema no banco de dados e precise apagar tudo. Tive esse
     retrabalho antes de criar as migrações e realmente da uma desanimada quando isso acontece.

12 - voltei depois de um tempo com o arquivo seeder com mais informações.
     pretendo ter tudo em hardcode, pelo menos a parte da TACO
