# Wordpress. Criando um tema do zero.

O Wordpress é um CMS bastante popular no desenvolvimento de blogs a plataformas de conteũdo mais complexas. Estima-se, segundo dados de 2015 que 25% dos sites da internet são feitos em Wordpress.

![Dados sobre a afirmação](https://img1.ibxk.com.br/2015/11/09/09142201003299.jpg?w=700)

Apesar da hegemonia em relação aos outros CMSs, o Wordpress ainda assim é não consegue agradar a gregos e troianos. Dentre as várias críticas, há quem critique o usu demasiado de código estruturado, segurança (??), tem também aquela galera que gosta de fazer tudo na raça, além de vários outros pontos e conceitos pessoais. 

## O joio e o trigo

Apesar das criticas, o fato é: Wordpress é uma realidade no desenvolvimento dos mais variados tipos de websites e por isso uma ferramenta excelente. Por sua vez, é preciso ter em mente que a qualidade de código do programador é parte fundamental no resultado final. E, convenhamos,  não da pra ficar socando plugin a qualquer custo. Um bom front e uma base de desenvolvimento no backend faz toda a diferença.

No geral, o que me agrada mesmo no wordpress é o controle administrativo que o usuário final tem. Além é claro da possibilidade de expansão para deixar a experiência de quem gerecia o conteúdo cada vez mais intuitiva.

## 1.1 Iniciando

Neste tutorial, criaremos um tema, desevolvendo seus recursos passo a passo e por fim disponibilizá-lo para uso no próprio Wordpress.

## 1.2 Estrutura Básica

No WordPress existe um padrão hierárquico de desenvolvimento e ordem do layout que deve ser respeitado. Isso por quê o WordPress processa a informação levando em consideração essa ordem de arquivos, que genéricamente podem ser divididos em: index, header e footer.php. Esses são os arquivos básicos para a criação de um layout.

```
├── footer.php
├── functions.php
├── header.php
├── index.php
├── README.md
└── style.css
```

Em ordem de importância. Quando falamos em index.php a própria nomenclatura já dispensa muitas explicações. É o primeiro e mais importante de um tema. Pois é nele que toda a informação do site converge e apresenta-se ao usuário final.

Em seguida, o style.css é o principal arquivo de estilos do nosso tema. Entretanto, em seu conteúdo trás informações importantes também para o próprio WordPress, como nome do tema, desenvolvedor, links, tags… No nosso tema em questão, as informações são estas:

/*
  Theme Name: Mere Lite
  Theme URI: https://github.com/brunodarshan/mere-lite
  Author: Darshan(@brunodarshan)
  Author URI: https://github.com/brunodarshan/
  Description: A simple template developed by @brunodarshan
  Version: 1.0
  License: MIT License
  License URI: https://github.com/brunodarshan/mere-lite
  Text Domain: mere-lite
  Tags: blog, bootstrap, simple, lite website
*/

Por ultimo, mas não menos importante temos o header.php e footer.php. Estes fazem parte da composição geral do template. Carrega dados importantes como o cabeçalho html com estilos e scripts. Para isso usa algumas funções que veremos em breve e que são dependentes do nosso functions.php.

## 1.3 Let's Code

Mãos a massa, então!

Quando se fala em site a primeira coisa que vem a nossa mente é o HTML e com o Wordpress não é diferente. Todo o nosso trabalho é baseado em uma estrutura html dividida entre nosso header, index e footer.php. 

Segue a baixo a estrutura dos três arquivos.

 _header.php_
 ```PHP
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- A mágica começa aqui! -->

 ```

 _index.php_
 ```PHP
 <!-- A mágica acontece aqui!  -->
```


 _footer.php_
 ```PHP
        <!-- A máǵica termina aqui -->
    </body>
</html>
```

Ok. Já temos o que precisamos para fazer "a mágica acontecer". Para não deixarmos o nosso index limpo demais vamos adicionar algumas tags como título e descrição do nosso site wordpress. Para isso usaremos a template tag _bloginfo()_.

A bloginfo é uma template tag que mostra informações do nosso site/blog. Seu uso é global e possui vários [valores possĩveis](https://developer.wordpress.org/reference/functions/bloginfo/#possible-values-for-show) para display. Por agora vamos nos ater a duas, name e description.

_index.php_
 ```PHP
 <h1> <?php bloginfo('name');?> </h1>
 <span> <?php bloginfo('description');?> </span>
 
```