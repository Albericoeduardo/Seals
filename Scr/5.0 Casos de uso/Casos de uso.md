## Casos de uso
<h3 class= PrimeiroCaso> Cadastro </h3>
<br><b>Caso de uso 1:</b> Fazer cadastro</br>
        <b>Atores:</b>Cliente
        <br><b>Descrição:</b>Este caso de uso descreve as etapas percorridas para o cliente realizar cadastro.<br>
        <br><b>Pré-condição:</b>Inserir dados corretos</br>
        <b>Fluxo principal:</b>
        <ul>
            <li>Sistema pedi que usuário insira dados</li>
            <li>Usuário inseri dados</li>
            <li>Sistema verifica dados</li>
            <li>usuário conclui cadastro</li>
        </ul>
        <b>Pós-condição:</b>Cadastro concluido. 
    <h3 class= SegundoCaso> Login </h3>
    <b>Caso de uso 2:</b>Fazer Login
    <br><b>Atores:</b>Cliente</br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessária para o cliente realizar login.</br>
    <b>Pré-condição:</b>Ter cadastro.
    <br><b>Fluxo principal:</b></br>
    <ul>
        <li>Sistema pede imail e senha</li>
        <li>Usuário inseri imail e senha</li>
        <li>Sistema verifica imail e senha do usuário</li>
        <li>Usuário faz login</li>
    </ul>
    <b>Fluxo Alternativo:</b>
    <ul>
        <li>Usuário erra imail ou senha</li>
        <li>Sistema bloqueia login do usuário</li>
        <li>Usuário tenta fazer login sem possuir cadastro</li>
        <li>Sistema redireciona usuário para tela de cadastro</li>
    </ul>
    <b>Include:</b>Fazer Cadastro
    <br><b>Pós-condição:</b>Login efetuado</br>
    <h3 class= TerceiroCaso> Feedback</h3>
    <B>Caso de uso 3:</B>Dar Feedback
    <br><b>Atores:</b>Cliente</br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessárias para o cliente realizar feedback.</br>
    <b>Pré-condição:</b>Ter email, Whatsapp ou Instagram.
    <br><B>Fluxo principal:</B><br>
    <ul>
        <li>Usuário clica no icon de contato
        <li>Sistema mostra opções de contato para o usuário</li>
        <li>Usuário seleciona uma das opções de contato</li>
        <li>Sistema redireciona usuário para a opção escolhida</li>
        <li>Usuário escreve algum comentário e envia</li>
        <li>Sistema recebe comentário</li>
    </ul>
    <b>Include:</b> Fazer login
    <br><b>Pós-condição:</b>Feedback dado<br>
    <h3 class="QuartoCaso">Produto</h3>
    <b>Casos de uso 4:</b>Selecionar Produto
    <br><b>Atores:</b>Cliente</br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessárias para o cliente selecionar um produto.</br>
    <b>Fluxo principal:</b>
    <ul>
        <li>Usuário seleciona algum produto
        <li>Sistema armazena produto(s) selecionados pelo usuário</li>
    </ul>
    <b>Fluxo de exceção:</b> Produto não disponivel.
    <br><B>Include:</B>Fazer login<br>
    <b>Pós-condição:</b>Produto(s) no carrinho
    <h3 class="QuintoCaso">Pagamento</h3>
    <b>Casos de uso 5:</b>Realizar Pagamento.
    <br><b>Atores:</b>Cliente,banco<br>
    <br><b>Descrição:</b>Esse caso de uso descreve as etapas necessárias para o usuário realizar um pagamento.</br>
    <b>Pré-condição:</b>Possuir cartão ou conta em algum banco.
    <br><b>Fluxo principal:</b><br>
    <ul>
        <li>Usuário escolhe forma de pagamento
        <li>Sistema pedi que o usuário ensira os dados necessarios, como nome completo, cpf, endereço , dados do banco ou do cartão</li>
        <li>Usuário inseri dados
        <li>Sistema informa o usuário se o pagamento foi efetuado</li>
    </ul>
    <br><b>Fluxo Alternativo</b>
    <ul>
        <li>Usuário seleciona a forma de pagamento por boleto.</li>
        <li>Sistema lança o boleto para o cliente, e aguarda o pagamento.</li>
    </ul>
    <b>Include:</b>Fazer login, selecionar produto(s).
    <br><b>Pós-condição:</b>Pagamento efetuado, produto pronto para entrega.
    

