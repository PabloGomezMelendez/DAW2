<?php
// Clase Animal (base)
class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function comer() {
        return "{$this->nombre} está comiendo.";
    }

    public function dormir() {
        return "{$this->nombre} está durmiendo.";
    }
}

// Clase Mamifero (hereda de Animal)
class Mamifero extends Animal {
    public function amamantar() {
        return "{$this->nombre} está amamantando a sus crías.";
    }
}

// Clase Ave (hereda de Animal)
class Ave extends Animal {
    public function volar() {
        return "{$this->nombre} está volando.";
    }

    public function ponerHuevos() {
        return "{$this->nombre} ha puesto huevos.";
    }
}

// Clase Gato (hereda de Mamifero)
class Gato extends Mamifero {
    public function maullar() {
        return "{$this->nombre} dice: Miau!";
    }

    public function trepar() {
        return "{$this->nombre} está trepando un árbol.";
    }

    public function ronronear() {
        return "{$this->nombre} está ronroneando.";
    }
}

// Clase Perro (hereda de Mamifero)
class Perro extends Mamifero {
    public function ladrar() {
        return "{$this->nombre} dice: Guau!";
    }

    public function jugar() {
        return "{$this->nombre} está jugando con una pelota.";
    }

    public function olfatear() {
        return "{$this->nombre} está olfateando algo.";
    }
}

// Clase Canario (hereda de Ave)
class Canario extends Ave {
    public function cantar() {
        return "{$this->nombre} está cantando.";
    }
}

// Clase Pinguino (hereda de Ave)
class Pinguino extends Ave {
    public function nadar() {
        return "{$this->nombre} está nadando.";
    }

    public function deslizar() {
        return "{$this->nombre} se está deslizando sobre el hielo.";
    }

    public function volar() {
        return "{$this->nombre} no puede volar, pero nada muy bien.";
    }
}

// Clase Lagarto (hereda de Animal)
class Lagarto extends Animal {
    public function tomarSol() {
        return "{$this->nombre} está tomando el sol.";
    }

    public function reptar() {
        return "{$this->nombre} está reptando.";
    }

    public function regenerarCola() {
        return "{$this->nombre} está regenerando su cola.";
    }
}
?>
