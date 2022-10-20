# cs_locadora 1.0 - Sistema de entrada e saida de video simples desenvolvido usando o metódo MVC - Models, Views, Controllers

## Tecnologias utilizadas

- Linguagem PHP
- Html
- Banco de dados MySQL
- Bootstrap para estilizar as páginas
- JavaScript


## Instalação do sistema local

-ative o xampp no seu computador
-copie a pasta cs_locadora para a pasta HTDOCS do xampp
-selecione o aqruivo cs_locadora.sql e carregue o arquivo no PHPMYADMIN do xampp criando o banco de dados,
-entre no navegador e digite localhost/cs_locadora e pronto já estará na vegando no  mesmo 

## Estrutura do projeto

`index.php`: Arquivo principal que contém o layout da aplicação e é responsável por abrir as páginas internas de cada funcionalidade de acordo com o parâmetro passado na URL.

`\config`: Nesta pasta está o arquivo `config.php`, responsável pelas configurações e por acessar o banco de dados.

`\views`: Nesta pasta há uma subpasta para cada cadastro do sistema (titulos, localização, contatos, etc). Cada pasta contém os seguintes arquivos:

- `Create.php`: Cria o formulário de cadastro e o mesmo contém um botão salvar que da um POST salvando o registro.
- `index.php`: Lista os registros gerados pelo Create.php, sendo fácil a sua manipulação através da edição e exclusão dos registros.
- 
`\controllers`: Nesta pasta há todos os controllers responsaveis pelo gerenciamento de POST, EDIT, etc..

-`\models`: Nesta pasta há subpastas DAO, SERVICE e VALIDAÇÃO, responsáveis por validar, manipular dados etc..
-
`\assets`: Aqui estão os arquivos CSS e JavaScript do Bootstrap, necessários para estilizar as páginas e fazer o menu funcionar.

-A tela de cadastro de contato na aba Endereço, tem o preenchimento automatico do formulário a partir do CEP é utilizado o JavaScript para realizar a ação utilizando o webservice gratuito ViaCep.
Inclusive esse formulário pode ser utilizado para calcular frete.


##### Descrição e visão do projeto

-é um pequeno sistema desenvolvido em PHP com javascript e MySQL com a finalidade de gerenciar entrada e saída
de videos, o mesmo foi desenvolvido baseado de um ERP que eu mesmo estou desenvolvendo, pois o intuito aqui
é mostrar todas as funções que podem ser aplicadas apenas usando PHP aliado a 'REGRA DE NEGÓCIO'.
desculpas por não ter concluido o mesmo com mais funcionalidades, é que tive um problema de saúde na familia ai atrapalhou
um pouco, mais pretendo continuar..abraços




