<?php


class Square
{public $a, $b, $c, $d;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $a;
        $this->d = ($b * $b) - 4 * ($a) * ($c);
    }

    public function getResult()
    {
        if ($this->d > 0) {
            return 'x1 = ' . ($this->b * (-1) + sqrt($this->d)) / 2 * $this->a . '<br/>' .
                'x2 = ' . ($this->b * (-1) - sqrt($this->d)) / 2 * $this->a;
        } elseif ($this->d == 0) {
            return 'x1, x2 = ' . ($this->b * (-1)) / 2 * $this->a;
        } else {
            return "Дискриминант меньше 0, решений нет";
        }
    }
}

$Square = new Square();
echo $Square->getResult();

}