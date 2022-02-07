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

Retiramos os métodos de Routes.php, levando-os a uma classe abstrata (que só pode ser herdada), deixando assim o código mais simples
Alteramos também a proteção de alguns metodos, mudando de public para protected
Definimos um método abstrato e protegido vazio com o nome de initRoutes que, quando herdado pela classe de Routes.php, passa a ter funções definidas
Por fim, determinamos ao script Routes.php para usar o namespace de MF/Init/Bootstrap

//// AULA VIEWS

Cria-se um diretório 'index' dentro da pasta views, que irá se comunicar diretamente com os controladores de IndexController.php

No diretório index(dentro de Views) são criados dois arquivos de extensão PHTML
phtml é geralmente a extensão usada pelos frameworks para misturar códigos php com html

transferimos o conteúdo das funções contidas no controller para suas respectivas páginas phtml



No IndexController, usamos require_once
A referencia dos requires e outras requisições está sempre sendo carregado a partir do script index.php no diretório public
O PONTO DE PARTIDA DOS REQUIRES É SEMPRE DE INDEX.PHP (no dir public)






*/
?>