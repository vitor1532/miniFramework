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

Para executar a instancia dinamica do obj e a execução do metodo dentro do obj, precisamos criar a função run (dentro do arquivo route.php) que recebe o parametro da url tratado.
A função run (que recebe a url como parametro $url) dá inicio a um foreach usando a getRoutes com os arrays de rota, o primeiro parametro sendo o $path e o segundo sendo o $route.
Essa função permite verificar com base nos arrays recebidos qual rota devemos tomar. Colocamos então um teste para verificar com qual url estamos lidando(se o parametro $url é igual ao $route) e então, redirecionar para a rota. Por fim, o if instancia o __construct() com base na rota tomada.


*/
?>