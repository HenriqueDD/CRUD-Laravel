<?php

use Illuminate\Support\Facades\Route;

//Import do controlador:
use App\Http\Controllers\MeuControlador;
use App\Http\Controllers\ClienteControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

////Parâmetros opcionais:
//
////Route::get('/teste/{nome?}/', function($nome=null) {
////    if (isset($nome))
////        return "Olá $nome seja muito bem vindo!!";
////    else
////        return "Você não digitou nenhum nome";
////});
//
////Parâmetros com regras:
////Route::get('/teste/{nome}/{n}', function($nome, $n) {
////        for ($i=0;$i<$n;$i++)
////            echo "Olá $nome seja muito bem vindo!! </br>";
////})->where('nome', '[A-Za-z]+')->where('n', '[0-9]+');
//
////Agrupamento de rotas:
//
//Route::prefix('/app')->group(function () {
//
//    Route::get('/', function () {
//        return view('app');
//    });
//
//    Route::get('/user', function () {
//        return view('user');
//    });
//
//    Route::get('/profile', function () {
//        return view('profile');
//    });
//
//
//});
//
//
////Nomeando Rotas:
//
//Route::prefix('/app')->group(function () {
//
//    Route::get('/', function () {
//        return view('app');
//    })->name('app');
//
//    Route::get('/user', function () {
//        return view('user');
//    })->name('app.user');
//
//    Route::get('/profile', function () {
//        return view('profile');
//    })->name('app.profile');
//});
//
////Route::get('/produtos', function (){
////   echo "<h1>Produtos</h1>";
////   echo "<ol>";
////   echo "<li>Notebook</li>";
////   echo "<li>Celular</li>";
////   echo "<li>Microondas</li>";
////   echo "</ol>";
////})->name('/meuspodutos');
//
//Route::redirect('todosprodutos', 'produtos', 301);
//


////Métodos HTTP:
//Route::get('/todosprodutos2', function (){
//    return redirect()->route('meusprodutos');
//});
//
//Route::post('/requisicoes', function (Request $request){
//   return "HELLO POST!!";
//});
//
//Route::put('/requisicoes', function (){
//    return "HELLO PUT!!";
//});
//
//Route::delete('/requisicoes', function (){
//    return "HELLO DELETE!!";
//});
//
//Route::patch('/requisicoes', function (){
//    return "HELLO PATCH!!";
//});
//
//Route::options('/requisicoes', function (){
//    return "HELLO OPTIONS!!";
//});
//
//Route::get('/requisicoes', function (){
//    return "HELLO GET!!";
//});

//Controlador:

Route::get('produtos', [MeuControlador::class, 'produtos']);
Route::get('nome', [MeuControlador::class, 'getNome']);
Route::get('idade', [MeuControlador::class, 'getIdade']);
Route::get('multiplicar', [MeuControlador::class, 'multiplicar']);

//Essa rota pega os métodos la da controller ClienteControlador, para não ter que ficar criando um monte de rotas.
Route::resource('clientes', ClienteControlador::class);
