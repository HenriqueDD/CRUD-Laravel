<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos () {
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Celular</li>";
        echo "<li>Microondas</li>";
        echo "</ol>";
    }

    public function getNome(){
        return "Henrique Sousa";
    }

    public function getIdade(){
        return "24";
    }

    public function multiplicar(){
        return 30 * 3;
    }
}
