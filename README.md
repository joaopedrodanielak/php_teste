Olá, este é o repositório para teste pratico de programador.

Itens a serem desenvolvidos no teste CRUD (Create , Read, Update e Delete)
Itens Obrigatórios

    Apache com php 7
    Mysql
    Git

Teste

    Faça o clone do repositorio https://bitbucket.org/julioglinski/teste_prog/
    Crie uma nova database
    Na pasta sql tem o script de criação da Tabela
    Na pasta classe/lib/ existe o arquivo MyPDO.php que deve ser colocado o nome do database usuario e senha
    Agora o teste pode ser executado http://localhost/teste_prog/

O que deve ser feito

    No menu existe o Item Artigos
    Nesta pagina(artigos.php) devera listar os artigos utilizando o metodo GetAll da classe artigosBO
    artigos_Add.php existe o formulario que devera persistir no banco no if(isset($_POST['adicionar'])) { da artigos.php, prrenchendo o 
    objeto artigosVO e utilizando o metodo Add da classe artigosBO

    artigos_Edit.php existe o formulario que devera buscar e alterar no banco, buscando informações no metodo $bo→Get($_GET['id']) da 
    classe artigosBO e alterando os dados no if(isset($_POST['editar'])) { da artigos.php, prenchendo o objeto artigosVO e utilizando o 
    metodo Edit da classe artigosBO

    Delete extra

Publicação

    Pode ser feito um pull request ou
    Um novo repositório publico seu nos enviando o link ou
    Zip por e-mail curriculo@legulas.com.br com seu nome completo

Bom Teste!!!
Duvidas podem entrar em contato pelo whatts
https://web.whatsapp.com/send?phone=5504130795203