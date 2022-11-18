<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once './scripts/autenticado.php';
?>
<section>
    <div class="tableContainer">
        <form action="Pages/Matricula/cadastro/cadastro.php" method="post">
            <table class="materias">
                <thead>
                    <tr>
                        <th>
                            MATÉRIA
                        </th>
                        <th>
                            PROFESSOR
                        </th>
                        <th>
                            DESCRICAO
                        </th>
                        <th>
                            MATRICULAR
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FEITIÇOS</td>
                        <td> Filius Flitwick</td>
                        <td>Uma das mais importantes matérias de Hogwarts, senão a mais importante, ela lida com Feitiços e Encantamentos. </td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="feiticos" id="feiticos" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>TRANSFORMAÇÕES</td>
                        <td>Minerva McGonagall</td>
                        <td>A matéria de Transformações ensina os bruxos a como transformarem objetos e seres vivos em outras coisas. É uma matéria altamente técnica e envolvente, e exige portanto disciplina e concentração.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="transformacoes" id="pocoes" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>POÇÕES</td>
                        <td> Severo Snape</td>
                        <td>A matéria de Poções envolve o estudo e preparo das mais diversas poções e contrapoções.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="pocoes" id="pocoes" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>DEFESA CONTRA AS ARTES DAS TREVAS</td>
                        <td> Remo Lupin</td>
                        <td>A Defesa Contra as Artes das Trevas estuda os seres, magias e técnicas das Trevas, e as formas de se defender dela. Todos os bruxos que desejam ser Aurores costumam dedicar-se de forma muito intensa a essa matéria. </td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="def" id="def" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>VÔO COM VASSOURAS</td>
                        <td>Rolanda Hooch</td>
                        <td>Ansina o vôo com Vassouras algumas manobras avançadas e as regras básicas do Quadribol.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="voo" id="voo" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>HERBOLOGIA</td>
                        <td>Pomona Sprout</td>
                        <td>A matéria de Herbologia visa ensinar como lidar com todas as estranhas plantas que em geral um bruxo usa quando prepara suas poções.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="herb" id="herb" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>ASTRONOMIA</td>
                        <td>Sinistra</td>
                        <td>A Astronomia é um ramo da magia que estuda as estrelas e o movimento dos planetas. Não é necessário o uso de magia nessa matéria.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="astro" id="astro" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>HISTÓRIA DA MAGIA</td>
                        <td> Binns</td>
                        <td>História da Magia basicamente explica como o mundo dos bruxos tornou-se o que é hoje. E essa matéria tem uma grande curiosidade: é ensinada por um fantasma!!!</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="hist" id="hist" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>TRATO DE CRIATURAS MÁGICAS</td>
                        <td> Rúbeo Hagrid</td>
                        <td> Trato das Criaturas Mágicas é uma matéria opcional de Hogwarts que ensina como tratar as criaturas do mundo mágico, pode ser escolhida a partir do terceiro ano. Nos primeiros anos os alunos estudam criaturas pouco perigosas como crupes, amassos, vermes-cegos e tronquilhos. Conforme se passam os anos, as criaturas estudadas vão desenvolvendo mais complexidades e tornando-se verdadeiros desafios para os alunos</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="criat" id="criat" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>ADIVINHAÇÃO</td>
                        <td> Sibila Trelawney</td>
                        <td>A adivinhação é um ramo da magia[1] que envolve a tentativa de prever o futuro, ou coletar entedimentos sobre eventos futuros, através de vários rituais e ferramentas.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="adiv" id="adiv" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>ARITMANCIA</td>
                        <td>Vector</td>
                        <td>Aritmancia é uma espécie de “matemágica”, aonde princípios de matemática trouxa são misturados com numerologia e cabala.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="arit" id="arit" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>RUNAS ANTIGAS</td>
                        <td> Bathsheda Babbling.</td>
                        <td>O estudo de Runas Antigas é voltado para a interpretação de antigos idiomas mágicos e de idiomas antigos de importância mágica. Nada se sabe sobre o professor de Runas Antigas. </td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="runas" id="runas" class="inputCheck">
                        </td>
                    </tr>
                    <tr>
                        <td>ESTUDO DOS TROUXAS</td>
                        <td> Caridade Burbage.</td>
                        <td>Normalmente uma opção na lista de matérias optativas de bruxos de sangue puro, Estudo dos Trouxas explica, para os bruxos, as coisas que os trouxas usam e fazem, de forma que, no dia a dia, eles não se espantem com as coisas comuns aos trouxas.</td>
                        <td>
                            <input type="checkbox" name="disciplina[]" value="trouxas" id="trouxas" class="inputCheck">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <button type="submit">Confirmar matricula</button>
                </tfoot>
            </table>
        </form>
    </div>
</section>

</html>