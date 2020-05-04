<!DOCTYPE html>
 
<html lang="cs">
    <head>
        <meta name="Jakub">
        <title>
            Jhin
        </title>
        <link rel ="stylesheet" type ="text/css" href="css/screen.css">
    </head>
    <h1>umime jen do 4!</h1>
    <dl>           
        <dt>Jhin je op</dt>
        <dd>Kazdy 4. naboj pecka jak z dela 1</dd>
    </dl>
    <dl>           
        <dt>Draven op</dt>
        <dd>Kazde auto je op</dd>
    </dl>

    <a href="https://www.blizzard.com">Blizzard</a>
    <ol>
        <li type = square>rageblade</li>
        <li type = circle>infinita</li>
        <li type = disc>phantom Dancer</li>
    </ol>
    <table border="6">
        <tr>
            <td width = "120">jhin</td>
            <td width = "120">vyhra</td>
        </tr>
        <tr>
            <td width = "120">ashe</td>
            <td width = "120">prohra</td>
        </tr>
        <tr>
            <td width = "120">zed</td>
            <td width = "120">100% win</td>
        </tr>
    </table>
    <!--poznámka-->
    <a href ="tapeta bleach.jpg"><br><img src="tapeta bleach.jpg" width="500"></a>
    <br><img src="jhin.jpg" width="500"/>
    <br><div>
        <dl>
            <dt>Nick:</dt>
            <dd><input type ="text"></dd>
            <dt>Heslo:</dt>
            <dd><input type ="text"></dd>
        </dl>
    </div>
    <form action="index.html" method="get">
        <textarea>Co milujes na Jhinovi</textarea>
        <br><h1><i>Zvol co je pravda</i></h1>
        <form>
            <dl>
                <dt>Je jhin op</dt>
                <dd><input type ="radio"></dd>
            </dl>
            <dl>
                <dt>Je zed good v jg?</dt>
                <dd><input type ="radio"></dd>
            </dl>
            <dl>
                <dt> Zkousel jsi Draven jg?</dt>
                <dd><input type ="radio"></dd>
            </dl>
            <dl>
                <dt>Musi dat buff jhinovi</dt>
                <dd><input type ="checkbox"></dd>
            </dl>
            <dl>
                <dt>Milujes Jhina</dt>
                <dd><input type ="checkbox"></dd>
            </dl>
            <dl>
                <dt>hrajes adc?</dt>
                <dd><input type ="checkbox"></dd>
            </dl>
            <p>
                <input type="submit" value="schválit">
                <br><input type="text" value="">
                <br><input type="password" value="">
                <br><input type="file">
            </p>
            <select name ="radit">
                <option value="jmeno">Jhin</option>
                <option value="jmeno">Jhin se skinem</option>
                <option value="jmeno">Jhin bez masky</option>
                <option value="jmeno">Jhin s maskou</option>
                <option value="jmeno">Zed </option>
            </select>
        </form>

</html>
<?PHP
require (require 'zt3\autoload.php');
use Tracy\Debugger;
Debugger::DEVELOPMENT;
Debugger::enable();



echo "Ahoj";
echo "<br>";
print_r("Ahoj");
echo "<br>";
dump("Ahoj");
echo "<br>";
echo "\&AHOooooooooooj";
echo "<br>";
echo "<a href=\"index.php\">Homepage</a>";

$a = 2;
$b = 3;
$c = 4;
dump($a + $b);
dump($b - $c);
dump($a / $c);
dump($c * $b);
dump($b++);
dump($c--);
dump($a += $b);
dump($c -= $b);
dump($c *= $a);
dump($b /= $a);
dump($a == $b);
dump($c != $b);
dump($a > $b);
dump($a < $b);
dump($c || $a);
dump($b && $a);
dump(!$a);

echo "<h2>";
echo Date("d.m.20y");
echo "<br>";
echo Date("h:i:s");
echo "<br>";
echo "</h2>";

$cena1 = 12;
$cena2 = 13;
if ($cena1 > $cena2) {
    echo "je větší";
} else {
    echo "je menší";
}
echo "<br>";

$hodnota1 = 12;
$hodnota2 = 10;

if ($hodnota1 == $hodnota2) {
    echo "Ano,jhin je op <3";
} else {
    echo "Ne, Draven je op :D";
}
echo "<br>";

echo "<br>";
if ($hodnota1 == $hodnota2) {
    echo "Rovnají se";
} elseif ($hodnota1 < $hodnota2) {
    echo "Nerovnost 1";
} elseif ($hodnota1 > $hodnota2) {
    echo "Nerovnost 2";
}
echo "<br>";
$ovoce = array(1 => 'Mango', 2 => 'jablko', 3 => 'mandarinka', 4 => 'Rajce', 5 => 'pomelo', 6 => 'kiwi', 7 => 'banan', 8 => 'avokádo', 9 => 'jahoda', 10 => 'malina');
dump($ovoce);

echo "<br>";
$auta['osobní'] = '';
$auta['nákladní'] = '';

$auta['osobní']['Porshe'][1] = '911';
$auta['osobní']['Porshe'][2] = 'carrera';
$auta['osobní']['audi'][3] = 'A6';
$auta['osobní']['audi'][4] = 'A8';
$auta['osobní']['Škoda'][1] = 'Yetty';
$auta['osobní']['Škoda'][2] = 'Fabia';
$auta['osobní']['Škoda'][3] = 'Octavia';
$auta['osobní']['Škoda'][4] = 'Kamiq';
$auta['osobní']['mercedes'][1] = 'amg';
$auta['osobní']['mercedes'][2] = 'gt';
$auta['osobní']['Dodge'][1] = 'Viper';
$auta['osobní']['Dodge'][2] = 'Venom';
$auta['nákladní']['Tatra'][1] = '815';
$auta['nákladní']['Tatra'][2] = '24';
$auta['nákladní']['Tatra'][3] = '11';
$auta['nákladní']['Tatra'][4] = '12';
$auta['nákladní']['Tatra'][5] = '13';
$auta['nákladní']['Tatra'][6] = '111';
$auta['nákladní']['Mercedes-Benz'][1] = 'ACTROS 2551';
$auta['nákladní']['Mercedes-Benz'][2] = 'ACTROS 2553';
$auta['nákladní']['Mercedes-Benz'][3] = 'ACTROS 2542 6x2';


dump($auta);
echo '<br>';
echo "<table border = '1'>";
foreach ($ovoce as $key => $value) {
    echo "<tr>", "<td>", $key, "</td>", "<td>", $value, "</td>", "</tr>";
}
echo "</table>";
echo '<br>';
echo '<br>';
echo "</table>";
echo '<br>';


$count1 = 10;
$count2 = 5;

echo "<table border = '1'>";
for ($index = 1; $index < $count1 + 1; $index ++) {
    echo "<tr>";
    echo "<td>". $index . "</td>";
    for ($index2 = 1; $index2 < $count2 + 1; $index2 ++) {
        
        echo "<td>". $index . "." . $index2 . "</td>";
    }

    echo "</tr>";
}
echo "</table>"; 
echo "<br>";

echo "<h2>";
echo Date("d.m.20y");
echo "<br>";
echo Date("h:i:s");
echo "<br>";
echo "</h2>";


class Users{
    public $pohlavi = array('muz','zena');
}
class User extends Users{
    
    private $firstname;
    
    private $lastname;
    
    private $fullname;
    
    private $street;
    
    private $city;
    
    private $zip;
    
    private $email;
    
    private $phone;
    
    public function _construct ($data){
    $this->firstname = $data['firstName'];
    
    foreach ($data as $key => $value) {

    $this->$key = $value; 
        
    }    
    }
    }

$data['firstName'] = "Jan";
$data['lastName'] = "Novák";
$data['fullName'] = "Jan Novak";

$user = new User($data);
dump($user);
dump($data);

class A {
	var $a;
	public $b;
	protected $c;
	private $d;
	
	public static $e;
	
	private $f = '';
	private $g = 'foo';
	private $h = 108;
	private $i = array('bar');
}

phpinfo()


?>