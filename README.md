#  Sistema de Locadora de Veículos (Projeto POO)

Este é um projeto acadêmico desenvolvido para a disciplina de Programação Orientada a Objetos. A aplicação simula um sistema de gerenciamento para uma locadora de veículos e funciona inteiramente via CLI (Interface de Linha de Comando).

O principal objetivo do projeto é demonstrar a aplicação prática dos princípios de **Abstração** e **Herança** em PHP.

-----

##  Conceitos de POO Aplicados

  * **Abstração:** A classe `Veiculo` é uma classe abstrata que define um "contrato" com os atributos e métodos essenciais que todo veículo deve ter, mas não pode ser instanciada diretamente.
  * **Herança:** As classes `Carro` e `Moto` herdam da classe `Veiculo`, reutilizando seu código e adicionando suas próprias características e implementações específicas.

-----

##  Requisitos

  * PHP 8.0+
  * [Composer](https://getcomposer.org/) para gerenciamento do autoload.

-----

## 🚀 Instalação e Configuração

1.  Clone este repositório ou baixe os arquivos para o seu computador.

2.  Abra o terminal na pasta raiz do projeto.

3.  Instale as dependências do Composer (que neste caso, irá apenas gerar o autoloader):

    ```bash
    composer install
    ```

-----

## Como Executar

Após a instalação, execute o seguinte comando na raiz do projeto para iniciar a aplicação:

```bash
php index.php
```

O menu interativo será exibido no terminal, permitindo o cadastro de veículos e clientes.
