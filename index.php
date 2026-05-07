<h1>Atividade: Classe Pessoa (4 pilares da programacao)</h1>
<?php   

class Pessoa{
    protected $nome;
    protected $cpf;
    protected $idade;

    public function __construct($nome, $cpf, $idade){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    public function apresentar(){
        echo "Olá eu sou " . $this->nome;
    }
}
// herança
class Estudante extends Pessoa{
    public $matricula;

    public function __construct($nome, $cpf, $idade, $matricula){
        $this->matricula = $matricula;
        parent::__construct($nome, $cpf, $idade);
    }
    public function apresentar(){
        echo "Olá eu sou o estudante ". $this->nome;
    }
}
class Servidor extends Pessoa{
    private $salario;
    public function __construct($nome, $cpf, $idade, $salario = 1500){
        $this->salario = $salario;
        parent::__construct($nome, $cpf, $idade);
    }
}


$pessoa_x = new Estudante("Felipe","000.000.000-00","20",20000);
$servidor_x = new Servidor("Victoria","111.111.111-11","23");
$pessoa_x->apresentar();
echo "<br>";
$servidor_x->apresentar();
?>