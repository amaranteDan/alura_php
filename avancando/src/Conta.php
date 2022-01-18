<?php

class Conta
{
    //definir dados da conta

    //A partir da versao 7.4 o php ja permite definir o tipo do atributo da classe
    
    private string $cpfTitular; //atributos 
    private string $nomeTitular;
    private float $saldo = 0; //definindo uma valor inicial
    private static $numeroDeContas = 0; // Inicio atributo da classe static

    //Criando um metodo construtor que inicializara a classe com dados 

    public function __construct(string $cpfTitular, string $nomeTitular) //Informo que tem que solicitar cpf e nome do titular
    {
        $this->cpfTitular = $cpfTitular; //digo que o cpf da instacia sera passado como parametros passados pelo construtor
        
        $this->nomeTitular = $nomeTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->saldo = 0;

        self::$numeroDeContas++; //referencia a classe Conta ao inves de trazer o nome todo o temppo
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar (float $valorASacar): void //metodos

    {
        if ($valorASacar > $this->saldo){
            echo "saldo indisponivel";
            return;// principio do Eearly return -> Simplifica a leitura do codigo.

        }
        $this->saldo -= $valorASacar;
        

    }

    public function depositar (float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "O Valor precisar ser positivo";
            return;

        }
        $this->saldo += $valorADepositar;
        
    }
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indispoonivel";
            return;

        }
        //$this -> tem a referencia para o objeto que chamou o metodo atual.
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
    return $this->titular->recuperaCpf();
    }

    private function validaNomeTitular(string $nomeTitular){

        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    
    public static function recuperaNumeroDeContas() : int //metodo estatico para retornar o numero de contas criado
    {
        return self::$numeroDeContas; 
    }



}