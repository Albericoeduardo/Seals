## Casos de uso
<br><b>Caso de uso:</b> Fazer cadastro</br>
        <b>Atores:</b>Cliente, Loja
        <br><b>Descrição:</b>Este caso de uso descreve as etapas percorridas para o cliente realizar cadastro.<br>
        <br><b>Pré-condição:</b>Inserir dados corretos</br>
        <b>Ações do sistema</b>
        <ul>
            <li>Pedir dados</li>
            <li>verificar dados</li>
        </ul>
        <b>Ações do Usuário</b>
        <ul>
            <li>usuário inseri dados</li>
            <Li>Usuário conclui Cadastro</Li>
        </ul>
        <b>Pós-condição:</b>Cadastro concluido. 
    <h3 class= SegundoCaso> Login </h3>
    <b>Caso de uso:</b>Fazer Login
    <br><b>Atores:</b>Cliente, Loja</br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessária para o cliente realizar login.</br>
    <b>Pré-condição:</b>Ter cadastro.
    <br><b>Fluxo principal:</b></br><b>Acões do sistema</b>
    <ul>
        <li>Pedir usuário e senha</li>
        <li>Verificar usuário e senha</li>
    </ul>
    <b>Ações do cliente</b>
    <ul>
        <li>Usuário inseri usuário e senha</li>
        <li>Usário realiza Login</li>
    </ul>
    <b>Fluxo de exceção:</b>
    <br><b>Ações do usuário</b></br>
    <ul>
        <li>Usuário erra usuário ou senha</li>
        <li>Usuário tenta fazer login sem possuir cadastro</li>
    </ul>
    <b>Ações do sistema</b>
    <ul>
        <li>Sistema oferece a opção recuperar senha</li>
        <li>Sistema redireciona cliente para tela de cadastro</li>
    </ul>
    <b>Include:</b>Fazer Cadastro
    <br><b>Pós-condição:</b>Login efetuado</br>
    <h3 class= TerceiroCaso> Feedback</h3>
    <B>Caso de uso:</B>Dar Feedback
    <br><b>Atores:</b>Cliente, Loja</br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessárias para o cliente realizar feedback.</br>
    <b>Pré-condição:</b>Ter email, Whatsapp ou Instagram.
    <br><B>Fluxo principal:</B><br>
    <b>Ações do sistema</b>
    <ul>
        <li>Mostrar opções de contato para o cliente</li>
        <li>Receber o mensagem do cliente</li>
    </ul>
    <b>Ações do usuário</b>
    <ul>
        <li>usuário seleciona incon de contato</li>
        <li>Usuário seleciona uma das opções de contato</li>
        <li>Usuário escrever algum comentário sobre o site</li>
        <li>Usuário envia comentário</li>
    </ul>
    <b>Include:</b> Fazer login
    <br><b>Pós-condição:</b>Feedback dado<br>
    <h3 class="QuartoCaso">Produto</h3>
    <b>Casos de uso:</b>Selecionar Produto
    <br><b>Atores:</b>Cliente,Loja<br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessárias para o cliente selecionar um produto.</br>
    <b>Fluxo principal:</b>
    <br><b>Ação do sistema</b><br>
    <ul>
        <li>Armazenar produtos selecionados pelo cliente</li>
    </ul>
    <b>Ação do usuário</b>
    <ul>
        <li>Usuário seleciona produtos de sua escolha</li>
    </ul>
    <b>Fluxo de exceção:</b> Produto não disponivel.
    <br><B>Include:</B>Fazer login<br>
    <b>Pós-condição:</b>Produto(s) no carrinho
    <h3 class="QuintoCaso">Pagamento</h3>
    <b>Casos de uso:</b>Realizar Pagamento.
    <br><b>Atores:</b>Cliente,loja<br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessárias para o usuário realizar um pagamento.</br>
    <b>Pré-condição:</b>Possuir cartão ou conta em algum banco.
    <br><b>Fluxo principal:</b><br>
    <b>Ação do sistema</b>
    <ul>
        <li>Pedir que o cliente ensira os dados necessarios, como nome completo, cpf, endereço , dados do banco ou do cartão</li>
        <li>Informar o cliente se o pagamento foi efetuado</li>
    </ul>
    <b>Ações do usuário</b>
    <ul>
        <li>Usuário escolhe uma forma de pagamento</li>
        <li>Usuário inseri dados pessoais e bancarios</li>
        <li>Usuário confirma pagamento</li>
    </ul>
    <br><b>Fluxo Alternativo</b>
    <ul>
        <li>Usuário seleciona a forma de pagamento por boleto.</li>
        <li>Sistema lança o boleto para o cliente, e aguarda o pagamento.</li>
    </ul>
    <b>Include:</b>Fazer login, selecionar produto(s).
    <br><b>Pós-condição:</b>Pagamento efetuado, produto pronto para entrega.
    

