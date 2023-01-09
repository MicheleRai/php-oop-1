<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?
class Movie {
    public $titolo;
    public $trama;
    public $voto;

    public function __construct($titolo, $trama)
    {
       $this->titolo = $titolo;
       $this->trama = $trama;
    }
    public function setVoto ($voto) {

        if (is_integer($voto) && $voto >= 0){
            $this->voto = $voto;
        }
        return $voto;
    }

    public function getVoto() {
        return $this->voto;
    }
}


$batman = new Movie('batman', 'lorem ipsum');
$supermen = new Movie('supermen', 'lorem ipsum');

var_dump($batman);
var_dump($supermen);

$batman->setVoto(4);
echo '<br>';
echo $batman->titolo;
echo '<br>';
echo $batman->voto;
echo '<br>';
echo $batman->trama;

$supermen->setVoto(5);
echo '<br>';
echo $supermen->titolo;
echo '<br>';
echo $supermen->voto;
echo '<br>';
echo $supermen->trama;
