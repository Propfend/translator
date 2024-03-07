PROJETO:

•TRADUTOR AUTOMÁTICO REAL-TIME

STACK:

•PHP - 8.3

•LARAVEL - 10.4

•LIVEWIRE - 3

•TAILWIND CSS - 3

BIBLIOTECAS E/OU APIS:

•GOOGLE TRANSLATOR API

DESCRIÇÃO:

•translator é um aplicativo de traduções real-time, com framework 
livewire integrado ao laravel para realização de requisições AJAX,
com belo design sofisticado do tailwind css.

INSTRUÇÕES:

•Crie um diretório, use os seguintes comandos no terminal do seu projeto:

(obs: PHP e Composer previamente instalados)

-git clone https://github.com/Propfend/translator.git

-cd translator

-composer update

-copy .env.example .env

-php artisan generate:key

-php artisan serve

USO:

•O site apresenta uma interface simples de se utilizar, dentro do
container principal há duas caixa menores, o input e o output da 
mensagem a ser traduzida. Digite a mensagem em qualquer linguagem 
no <textarea> de cima, ao clicar fora da barra, o texto será traduzido
após aproximadamente meio segundo.

INFORMAÇÕES PARA NERDS:

•A função wire:blur foi utilizada em ordem da tradução da frase ao
passo que o usuário clica fora da caixa de texto. a decisão foi tomada
devido ao excesso de requisições AJAX cada vez que o usuário digita 
alguma letra, que podem diminuir a satisfação referente à experiencia
so usuário com o site.

•A API foi integrada através de pacotes e libs, e nao com requisições
diretamente em http, usando bibliotecas como Guzzle ou Http, POO deixa
tudo mais simples.
