<?php
    include 'Cobra.php';
    include 'ComidaCobra.php';
    $cobra = new Cobra();
    $comida = new ComidaCobra();
    

    class Tabuleiro{
        private $espacos; //vai ser um array
        function __construct(){ //o método construct vai servir para iniciar tudo que for colocado dentro dele, vou instanciar um objeto de cobra nele e adicionar dois métodos
            $this -> cobra = new Cobra();
        }
            public function drawCLI(){ // esse drawCLI vai ser a forma de fazer o gráfico do game
            }
            public function startGame(){
            }
            private function catchTeclado(){
            }
            public function gerarComida(){
            }
    }
?>