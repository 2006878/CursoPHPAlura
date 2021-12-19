<?php

class  Conta
{
    //definir dados da conta
    private $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        Conta::$numeroDeContas--;
    }

    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo Indisponível".PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar) : void
    {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo".PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo Indisponível".PHP_EOL;
            return;
        }

        $this->saldo -= $valorATransferir;
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }

}

