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
* **Veiculo**: Classe abstrata que serve como base para o cadastro de todos os veículos. Possui 4 atributos, placa, marca, modelo, ano, um método de construção, e métodos para retornar os detalhes da classe.
  
* **Carro**: Classe herdeira da "Veiculo", que possui um atributo próprio "numeroPortas", e métodos para definir e retornar os detalhes da classe.
  
* **Moto**: Classe herdeira da "Veiculo", que possui um atributo próprio "cilindradas", e métodos para definir e retornar os detalhes da classe.
  
* **Cliente**: Possui 3 atributos, "cpf", "nome" e "numConta"(qual origina-se da classe ContaBancariaCliente),e métodos para definir e retornar os detalhes da classe.
 
* **Aluguel**: Possui 3 atributos "cliente", "veiculo", e "dataInicio", e métodos para definir e retornar os detalhes da classe.
  
* **Pagamento**: Classe abstrata que serve como base para o PagamentoBoleto, PagamentoCartao, e PagamentoPix; Possuindo atributos valor, método de construção, retorno de valor, e um método abstrato de processo de pagamento.
  
* **PagamentoBoleto**: Classe extendida de "Pagamento", recebe o atributo valor com parent::_construct, a função "processor_pagamento()", sendo todos extendidos de "Pagamento". Através da função processar_pagamento() um boleto é registrado e armazenado na contaCliente(Sendo uma variável extendida de ContaBancariaCliente).
  
* **PagamentoCartão**: Classe extendida de "Pagamento", recebe o atributo valor com parent:: e _construct, a função "processor_pagamento()", sendo todos extendidos de "Pagamento", tendo também um método de debitar o valor(ou pagamento com débito), e um pagamento com Crédito, sendo descontado o valor à próxima fátura do cartão.

* **PagamentoPix**: Classe extendida de "Pagamento", recebe o atributo valor com parent:: e _construct, a função "processar_pagamento()", sendo todos extendidos de "Pagamento", mas tendo um método de débito direto a contaCliente(Sendo uma variável extendida de ContaBancariaCliente).
 
* **PreReserva**: Classe responsável pelo processamento da pré reserva da alocação do veículo, da qual vai trazer para dentro de si atributos das classes->PagamentoBoleto, PagamentoCartão, PagamentoPix, Cliente e Veiculo, contendo dentro da classe set de determinado tipo de pagamento e prazo da alocação que vão receber um valor no index e get nas classes cliente e veiculo na qual vai retornar valores das próprias classes. Com método processarPagamento(), vai retornar false, até o pagamento ser realizado durante a efetivação da pré-reserva, que ocorre no index. Por fim, tendo método exibirDetalhes(), na qual vai trazer na tela todas as informações da classe cliente, veiculo, prazo de pagamentoe, método de paghamento e se ocorreu tudo certo no cadastro, se realizou o pagamento, agora, se não ocorreu, não vai ser cadastrado a pré-reserva.
  
* **ContaBancariaCliente**: Classe responsável pela entrada e saída do saldo bancário do cliente, tendo dois atributos próprios, sendo $saldo e $numConta que vai receber os valores do index. Contendo o método debitar(), responsável pelo cálculo de entrada de valores e atualização do saldo atual. Debitando do saldo atual o valor da preReserva.
  
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
  A opção da pré-reserva, apresenta para o usuário os veículos e clientes cadastrados no sistema, na qual ele pode selecionar dentre as opções exibidas para efetuar a pré-reserva. Subsequente, listando os métodos de pagamentos, sendo PIX, cartão e boleto, para que seja processado e retornando o resultado da  function processar_pagamento(), sendo reservado com sucesso ou não. Só será um aluguel quando o pagamento for efetivado dentro do prazo estabelecido.
