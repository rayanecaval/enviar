<?php 

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

$adminUser = "Angel of the Night";
$adminPass = "1980";



if( isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
    echo "<p>A série A Ordem Paranormal se passa em um universo onde existem duas dimensões: o Normal e o Paranormal. O Normal é onde nós vivemos como humanos, enquanto o Paranormal é um lugar completamente diferente, onde tudo que parece impossível pode se tornar real, o que normalmente estaria associado a espíritos, demônios, entre outros tipos de anormalidades ligadas ao pós vida, por exemplo.</br>O Segredo Na Floresta, continuação de A Ordem Paranormal, é uma campanha de RPG de mesa baseada em uma versão adaptada do sistema Chamado de Cthulhu (do inglês, Call of Cthulhu), mestrada pelo streamer Cellbit, a princípio tem como protagonistas Cesar Oliveira Cohen, Cristopher Cohen, Elizabeth Webber, Joui Jouki e Thiago Fritz. Mais tarde, Arthur Cervero se junta ao grupo.</br>Ordem Paranormal: Desconjuração é a terceira temporada de Ordem Paranormal sendo a continuação de O Segredo na Floresta. É uma campanha de RPG de mesa baseado em uma versão adaptada pelo mestre do sistema Chamado de Cthulhu (do inglês, Call of Cthulhu). Mestrado pelo streamer Cellbit, é protagonizado por Arthur Cervero, Beatrice Portinari, Dante, Elizabeth Webber, Erin Parker, Fernando Carvalho, Joui Jouki, Kaiser e Luciano Carvalho.</br>Ordem Paranormal: Calamidade é a quarta temporada do RPG Ordem Paranormal, continuação de Ordem Paranormal: Desconjuração.[1] É uma campanha de RPG de mesa baseada em um sistema exclusivo feito para o universo, criado pelo mestre junto da equipe de Skyfall RPG (Mestre Pedrok e Sil&Crafts) e da equipe de Tormenta 20 (Felipe Della Corte e Guilherme Dei Svaldi).[2] Mestrado pelo roteirista, streamer e diretor criativo, Cellbit, é protagonizado por dois lados: do lado da Ordem, sendo Antônio Pontevedra, Arthur Cervero, Carina Leone, Dante e Rubens Naluti; do lado de Kian, sendo Artemis Rodrigues, Boris Lukic, Damir Lukic, Gal e Theodore Bagwell.</p>";
} else {
    echo "<br> O usuario pra Login e Senha não informados";
    
}



?>