## Casos de uso
Cadastro

Caso de uso: Fazer cadastro.
Atores: Cliente, Loja.
Pré-condição: Inserir dados corretos.
Ações do sistema: 
    • Pedir dados 
    • verificar dados 
Ações do cliente: 
    • Inserir dados 
    • Concluir Cadastro 
Pós-condição: Cadastro concluído. 

Login 
Caso de uso: Fazer Login. 
Atores: Cliente, Loja.
Pré-condição: Ter cadastro. 
Fluxo principal:
Ações do sistema 
    • Pedir usuário e senha 
    • Verificar usuário e senha 
Ações do cliente 
    • Inserir usuário e senha 
    • realizar Login 
Fluxo de exceção: 
Ações do cliente
    • Cliente erra usuário ou senha 
    • Cliente tenta fazer login sem possuir cadastro 
Ações do sistema 
    • Sistema oferece a opção recuperar senha 
    • Sistema redireciona cliente para tela de cadastro 
Include: Fazer Cadastro 
Pós-condição: Login efetuado

Feedback
Caso de uso: Dar Feedback.
Atores: Cliente, Loja.
Pré-condição: Ter e-mail, WhatsApp ou Instagram. .
Fluxo principal:
Ações do sistema 
    • Mostrar opções de contato para o cliente 
    • Receber a mensagem do cliente 
Ações do Cliente 
    • Selecionar incon de contato 
    • Selecionar uma das opções de contato 
    • Escrever algo sobre o site 
Include: Fazer login 
Pós-condição: Feedback dado

Produto
Casos de uso: Selecionar Produto. 
Atores: Cliente, Loja.
Fluxo principal: 
Ação do sistema  
    • Armazenar produtos selecionados pelo cliente 
Ação do cliente 
    • Selecionar produtos de sua escolha 
Fluxo de exceção: Produto não disponível. 
Include: Fazer login
Pós-condição: Produto (s) no carrinho 

Pagamento
Casos de uso: Realizar Pagamento. 
Atores: Cliente, loja
Pré-condição: Possuir cartão ou conta em algum banco. 
Fluxo principal:
Ação do sistema 
    • Pedir que o cliente insira os dados necessários, como nome completo, cpf, endereço, dados do banco ou do cartão 
    • Informar o cliente se o pagamento foi efetuado 
Ação do cliente 
    • Inserir dados pessoais e bancários 
    • confirmar pagamento 
Fluxo Alternativo 
    • Cliente seleciona a forma de pagamento por boleto. 
    • Sistema lança o boleto para o cliente, e aguarda o pagamento. 
Include: Fazer login, selecionar produto (s). 
Pós-condição: Pagamento efetuado, produto pronto para entrega.
