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
    public $curso;

    public function __construct($nome, $cpf, $idade, $curso){
        $this->curso = $curso;
        parent::__construct($nome, $cpf, $idade);
    }
    public function apresentar(){
        echo "Olá eu sou o estudante ". $this->nome. " eu sou do curso de " . $this->curso;
    }
}
class Servidor extends Pessoa{
    private $salario;
    public function __construct($nome, $cpf, $idade,$funcao, $salario = 1500){
        $this->salario = $salario;
        $this->funcao = $funcao;
        parent::__construct($nome, $cpf, $idade);
    }
    public function apresentar(){
        echo "Olá eu sou ". $this->nome. " e sou " . $this->funcao;
    }
}
class Professor extends Pessoa{
    private $salario;
    public $curso;
    public function __construct($nome, $cpf, $idade, $curso, $salario = 1500){
        $this->salario = $salario;
        $this->curso = $curso;
        parent::__construct($nome, $cpf, $idade);

    }
    public function apresentar(){
        echo "Olá eu sou o professor ".$this->nome. " do curso de ". $this->curso;
    }
}
class Visitante extends Pessoa{
    public function __construct($nome, $cpf, $idade){
        parent::__construct($nome, $cpf, $idade);
    }
}
$pessoa_x = new Estudante("Felipe","000.000.000-00","20","Administração");
$servidor_x = new Servidor("Victoria","111.111.111-11","23","bolsista");
$professor_x = new Professor("Julia","222.222.222-22","33","SI");
$visitante_x = new Visitante("Gabriel","333.333.333-22","19");
$pessoa_x->apresentar();
echo "<br>";
$servidor_x->apresentar();
echo "<br>";
$professor_x->apresentar(); 
echo "<br>";
$visitante_x->apresentar(); 
?>