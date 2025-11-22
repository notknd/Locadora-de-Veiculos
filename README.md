-----
##  Alunos
 Kendy Hashimoto RA: 2033463
 Pedro Henrique Nascimento RA: 2080759
 João Pedro de Araujo Aguiar RA: 2031820
 Raissa Kaori Kawakami RA: 2040357
-----
##  Requisitos
  * PHP 8.0+
  * [Composer](https://getcomposer.org/) para gerenciamento do autoload.
-----
## Como Executar
Após a instalação, execute o seguinte comando na raiz do projeto para iniciar a aplicação:
```bash
php index.php
```
## Classes
* **Veiculo**: Classe abstrata que serve como base para o cadastro de todos os veículos. Possui 4 atributos, placa, marca, modelo, ano, um método de construção, e um método para exibir os detalhes da classe.
* **Carro**: Classe herdeira da "Veiculo", que possui um atributo próprio "numeroPortas", e o método "exibirDetalhes".
* **Moto**: Classe herdeira da "Veiculo", que possui um atributo próprio "cilindradas", e o método "exibirDetalhes".
* **Cliente**: Possui 2 atributos, "cpf", e "nome", e o método "exibirDetalhes".
* **Aluguel**: Possui 3 atributos "cliente", "veiculo", e "dataInicio", e o método "exibirDetalhes".
* **Pagamento**: Classe abstrata que serve como base para o pagamentoCartao, pagamentoPix, pagamento Boleto; Possuindo atributos getValor() e processar pagamento e um método de construção.
* **PagamentoPix**: Classe extendida de "Pagamento", como sendo uma classe que extende dela, recebe o atributo valor com parent:: e _construct para a passagem do valor a classe Pai, a função "processar_pagamento()", sendo todos os atributos extendidos de "Pagamento", mas tendo um método de débito direto a contaCliente(Sendo uma variável extendida de ContaBancariaCliente).
* **PagamentoBoleto**: Classe extendida de "Pagamento", como sendo uma das classes que extende dela, recebe o atributo valor com parent:: e _construct para a passagem do valor a classe Pai, a função "processor_pagamento()", sendo todos os atributos extendidos de "Pagamento", tendo também um método de registro de boletos para débito a contaCliente(Sendo uma variável extendida de ContaBancariaCliente).
* **PagamentoCartão**: Classe extendida de "Pagamento", como sendo uma das classes que extende dela, recebe o atributo valor com parent:: e _construct para a passagem do valor a classe Pai, a função "processor_pagamento()", sendo todos os atributos extendidos de "Pagamento", tendo também um método de debitar o valor(ou pagamento á débito), e um pagamento a Crédito, sendo descontado o valor à próxima fátura do cartão.
* **PreReserva**: Classe responsável pelo processamento da pré reserva da alocação do veículo, da qual vai trazer para dentro de si atributos das classes-> PagamentoPix, PagamentoBoleto, PagamentoCartão, Cliente e veículo, contendo dentro da classe set de determinado tipo de pagamento e prazo da alocação que vão receber um valor no index e get nas classes cliente e veiculo na qual vai retornar valores das próprias classes. Com método processarPagamento(), vai retornar false, até o pagamento ser realizado durante a efetivação da pré-reserva, que ocorre na page index.html. Por fim, tendo método exibirDetalhes(), na qual vai trazer na tela todas as informações da classe cliente, veiculo, prazo de pagamentoe, método de paghamento e se ocorreu tudo certo no cadastro, se realizou o pagamento, agora, se não ocorreu, não vai ser cadastrado a pré-reserva.
* **ContaBancariaCliente**: Classe responsável pela entrada e saída do saldo bancário do cliente, tendo dois atributos próprios, sendo $saldo e $conta (número da conta) que vai receber os valores da page index.html. Contendo a function debitar(), responsável pelo cálculo de entrada de valores e atualização do saldo atual. Debitando do saldo atual o valor da préReserva.
  ## Funcionamento
  O programa inicia em um **menu**, que roda em um loop "*while*" com escolhas através de números inseridos pelo usuário, no qual ele pode escolher entre:
  * Cadastrar carro
  * Cadastrar moto
  * Cadastrar cliente
  * Listar veículos
  * Listar clientes
  * Registrar aluguél
  * Listar alugueis
  * Pré-Reserva
  * Sair
  A escolha é recebida por um "*readline*" e aplicada em um "*switch case*", onde cada número de 1 a 9, representa respectivamente as opções mencionadas anteriormente.
  As opções de cadastro, recebem por um "*readline*" as informações do objeto que o usuário está cadastrando, seja um veículo ou um cliente, e cria uma nova classe utilizando o "*new (classe)*".
  As opções de listagem, mostram os objetos cadastrados pelo usuário, os quais que foram armazenados em uma *matriz*, "veiculos", "clientes", "alugueis", e utiliza um loop *for*, para percorrer pela matriz desejada.
  A opção de registro de aluguel, exibe para o usuário os veículos cadastrados, e pede para que ele selecione algum, inserindo o número referente à este veículo. Em seguida exibe os clientes cadastrados, e pede para que ele selecione algum, também, inserindo o número referente ao mesmo.
  A opção da pré-reserva, apresenta para o usuário os veículos e clientes cadastrados no sistema, na qual ele pode selecionar dentre as opções exibidas para efetuar a pré-reserva. Subsequente, listando os métodos de pagamentos, sendo PIX, cartão e boleto, para que seja processado e retornando o resultado da  function processar_pagamento(), sendo reservado com sucesso ou não. Só será um aluguel quando o pagamento for efetivado dentro do prazo estabelecido, utlizando a função substr para comparação das datas.
