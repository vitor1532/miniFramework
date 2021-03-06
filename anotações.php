<?


// O namespace do script é fundamental para o autoload

// No controller é criado a classe construtora que irá criar as actions ou métodos do controlador específico.

// Nas rotas (Route.php) nós criamos a classe rotas e dentro, uma função para iniciar essas rotas com arrays contendo chaves associativas. 
// Cada rota representa uma página da aplicação, e cada página da aplicação contém as seguintes chaves associativas: 
// 'route' => '[endereço da pagina da aplicação]'
// 'controller' =>'[indicando qual o controlador a rota aponta]'
// 'action' => '[apontando a ação a ser submetida dentro do determinado controlador]'

// Dentro das rotas também são criadas duas funções: a função getRoutes e a função setRoutes, uma captura o valor do atributo $routes e outra o retorna 
	
// é criado um método construtor (function __construct()) que será executado no momento em que a instancia do obj for chamada com base na classe

// Para executar a instancia dinamica do obj e a execução do metodo dentro do obj, precisamos criar a função run (dentro do arquivo route.php) que recebe o parametro da url tratado.
// A função run (que recebe a url como parametro $url) dá inicio a um foreach usando a getRoutes com os arrays de rota, o primeiro parametro sendo o $path e o segundo sendo o $route.
// Essa função permite verificar com base nos arrays recebidos qual rota devemos tomar. Colocamos então um teste para verificar com qual url estamos lidando(se o parametro $url é igual ao $route) e então, redirecionar para a rota. Por fim, o if instancia o __construct() com base na rota tomada.

// Retiramos os métodos de Routes.php, levando-os a uma classe abstrata (que só pode ser herdada), deixando assim o código mais simples
// Alteramos também a proteção de alguns metodos, mudando de public para protected
// Definimos um método abstrato e protegido vazio com o nome de initRoutes que, quando herdado pela classe de Routes.php, passa a ter funções definidas
// Por fim, determinamos ao script Routes.php para usar o namespace de MF/Init/Bootstrap

// //// AULA VIEWS

// Cria-se um diretório 'index' dentro da pasta views, que irá se comunicar diretamente com os controladores de IndexController.php

// No diretório index(dentro de Views) são criados dois arquivos de extensão PHTML
// phtml é geralmente a extensão usada pelos frameworks para misturar códigos php com html

// transferimos o conteúdo das funções contidas no controller para suas respectivas páginas phtml



// No IndexController, usamos require_once
// A referencia dos requires e outras requisições está sempre sendo carregado a partir do script index.php no diretório public
// O PONTO DE PARTIDA DOS REQUIRES É SEMPRE DE INDEX.PHP (no dir public)

// Os models podem ser usados pelos controladores para recuperar informações de banco de dados, retorná-las aos controladores, que por sua vez, passam essas informações para a view, o consumidor final.

// //AULA ABSTRAÇÃO DE CONTROLLERS
// A ideia é isolar os requisitos funcionais da aplicação dos requisitos não funcionais, ligando os requisitos não funcionais diretamente ao framework
// Deixando assim, os controladores principais apenas com requisitos funcionais da aplicação

// Criamos a pasta "controller" dentro do diretório MF, e dentro da pasta criada, inserimos um script com o nome de Action.php, que receberá um namespace (para uso futuro) e todos os parametros não-funcionais da aplicação, deixando assim os controllers principais com um código mais enxuto

// //AULA DEFININDO E REUTILIZANDO UM LAYOUT

// <!-- Bootstrap CDN -->
// <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

// 		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
// 		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
// 		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

// A proposta é pegar códigos que são comuns a todas as paginas da aplicação e usa-lo em um só script para evitar ficar repetindo códigos

// Criamos um arquivo dentro do dir Views chamado 'layout.phtml' para que todas as views sejam renderizadas dentro do layout criado

//* fazemos a inclusão dentro do layout com o comando <?= $this->content() */

// dentro da classe Action, criamos o método content() passando a lógica de renderização do método render() seja passada para o método criado (content())
// o metodo render, então será responsável por renderizar o layout, e o layout será responsável pela renderização.
// dentro de render, chamamos o método $this->content()
// para a chamada funcionar, usamos um require_once do layout que já está chamando o método $this->content()
// para resolver o problema do parametro $view em render ser vazio, dentro desse método, adicionamos um atributo à instancia do obj view com a linha '$this->view->page = $view;', criando o parametro 'page'

// então, no método contente, mudamos o parametro dinamico $view em require_once para $this->view->page

// DEFININDO O LAYOUT COMO DINAMICO:

// Em indexController.php, nas funções de render, chamamos mais um parametro, sendo ele o layout de sua preferencia

// Já na Action.php, passamos a recebero parametro do layout (render($view, $layout))
// modificando o require do mesmo, passando require_once "../App/Views".$layout.".phtml";

// implementamos por fim, um if(file_exists) verificando se o arquivo de layout existe para então, renderiza-lo
// usamos o else para renderizar a pagina sem layout, caso o mesmo não exista

// //AULA MODELS E BANCO DE DADOS

// criamos o script connection.php dentro do diretório App
// Definimos o namespace App;
// criamos uma classe Connection com um método público estático chamado getDb (o método é definido estático para a classe Connection não precisar ser instanciada para o uso desse método)
// Esse método será responsável pela conexão com o banco de dados.
// Dentro da classe, incluimos um bloco try catch onde o objetivo é estabelecer uma conexão utilizando o PDO.

// Criamos um banco de dados chamado mvc e nele, uma tabela tb_produtos com tres parametros, o id(primary key), a descrição e o preço

// O proximo passo é levar a conexão a um modelo (Model)

// no diretório Models dentro de App, criamos um script chamado produto.php
// Definimos um namespace App\Models;

// e definimos então uma classe chamada produto. nela, criamos uma variavel protected $db que receberá a conexão com o banco. Dentro dessa mesma classe, configuramos a função __construct que vai receber a instancia de PDO com a seguinte sintaxe:
// --->public function __construct(PDO $db)<--- (o PDO aí define a propriedade do parametro a ser recebido)

// Em indexController, na função index, criamos uma instancia de conexão e de modelo. Para isso, precisamos definir o uso dos namespaces App\Connection; e App\Models\Produto;

// na função index() em IndexController fazemos uma variável $conn e nela instanciamos a classe de conexão e ligada nela, a função getDb, usando a sintaxe:
// --->Connection::getDb()<---


// para instanciar o modelo, criamos uma variável $produto e nela, instanciamos a classe Produto($conn)

// A partir da instancia, criamos métodos que irão manipular os dados no banco. Criamos a variável $produtos e instanciamos a função de busca por esses produtos com $produtos = $produto->getProdutos()

// criamos esse método na classe Produto, retornando um array de produtos

//atribuimos então, à variavel $produtos, os dados recebidos na Action a partir da sintaxe $this->view->dados = $produtos
//Então, dentro da view, o array de dados está sendo trabalhado por um foreach.
//A action não mais trabalha os dados, faz apenas a ponte entre o modelo, que cuida do processamento de dados e da visualização



?>