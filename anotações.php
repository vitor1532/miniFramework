<?
/*

O namespace do script é fundamental para o autoload

No controller é criado a classe construtora que irá criar as actions ou métodos do controlador específico.

Nas rotas (Route.php) nós criamos a classe rotas e dentro, uma função para iniciar essas rotas com arrays contendo chaves associativas. 
Cada rota representa uma página da aplicação, e cada página da aplicação contém as seguintes chaves associativas: 
'route' => '[endereço da pagina da aplicação]'
'controller' =>'[indicando qual o controlador a rota aponta]'
'action' => '[apontando a ação a ser submetida dentro do determinado controlador]'

Dentro das rotas também são criadas duas funções: a função getRoutes e a função setRoutes, uma captura o valor do atributo $routes e outra o retorna 
	
é criado um método construtor (function __construct()) que será executado no momento em que a instancia do obj for chamada com base na classe

para executar a instancia dinamica do obj e a execução do metodo dentro do obj, precisamos criar a função run (dentro do arquivo route.php) que recebe o parametro da url tratado.

*/
?>