## ARVDESK

## Sistema web para gerenciamento de atividades Help Desk

### Ferramentas utilizadas:
- XAMPP
- Linguagem de programação: PHP.
- Interfaces: HTML, CSS e Bootstrap.

### Funcionalidades:
- Cadastro de usuários com níveis de acessos para: usuário comum, administrador e tecnicos.
- Cadastro de ativos.
- Abertura e encaminhamento de solicitações.
- Visualização de solicitações por stuatus.
- Alteração de cadastros (apenas para administradores).
- Realizar consultas e gerar relátorios.

### Configurações para subir aplicação:
- clonar repositório na pasta htdocs do xampp
- criar base de dados 'arvdesk' e rodar script 'arvdesk.sql' no phpMyAdmin
- verificar configurações do banco no arquivo conexao.php
- start no apache e no mysql no xampp
- para gerar pdf é necessário remover ';' da extensao gd do arquivo php.ini 

### Atualizações:
- Criptografia nas senhas
- Correção relatórios
- Novo layout
- Pie chart do google charts na home

### Telas (LAYOUT ATUALIZADO):


### - Login
![index](https://github.com/vansoufer/sistemaHelpdesk/blob/master/new-index.png)


