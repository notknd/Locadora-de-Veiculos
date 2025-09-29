
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

  ## Funcionamento

  O programa inicia em um **menu**, que roda em um loop "*while*" com escolhas através de números inseridos pelo usuário, no qual ele pode escolher entre: 
  
  * Cadastrar carro 
  * Cadastrar moto
  * Cadastrar cliente 
  * Listar veículos
  * Listar clientes 
  * Registrar aluguél 
  * Listar alugueis
  * Sair
  
  A escolha é recebida por um "*readline*" e aplicada em um "*switch case*", onde cada número de 1 a 8, representa respectivamente as opções mencionadas anteriormente.
  
  As opções de cadastro, recebem por um "*readline*" as informações do objeto que o usuário está cadastrando, seja um veículo ou um cliente, e cria uma nova classe utilizando o "*new (classe)*".
  
  As opções de listagem, mostram os objetos cadastrados pelo usuário, os quais que foram armazenados em uma *matriz*, "veiculos", "clientes", "alugueis", e utiliza um loop *for*, para percorrer pela matriz desejada.
  
  A opção de registro de aluguel, exibe para o usuário os veículos cadastrados, e pede para que ele selecione algum, inserindo o número referente à este veículo. Em seguida exibe os clientes cadastrados, e pede para que ele selecione algum, também, inserindo o número referente ao mesmo. 
