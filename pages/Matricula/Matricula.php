<?php
require_once './scripts/autenticado.php';

if (isset($_COOKIE['id'])) {

    require './dataBase/config.php';

    $id = base64_decode($_COOKIE['id']);
    $sql = 'SELECT materias FROM usuario WHERE' . ' usuario.id' . " =  $id";
    $statement = $pdo->query($sql);
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($user[0]['materias'] != null) {
        $materias = json_decode($user[0]['materias']);
    } else {
        $materias = [];
    }
}

?>

<html lang="pt-br">
<?php if (isset($_COOKIE['acesso']) && $_COOKIE['acesso'] == md5('aluno')) { ?>
    <section class="matricula">
        <div class="tableContainer">
            <form class="matricula__formulario" action="Pages/Matricula/cadastro/cadastro.php" method="post">
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
                                <input <?php
                                        if (in_array('feiticos', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="feiticos" id="feiticos" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>TRANSFORMAÇÕES</td>
                            <td>Minerva McGonagall</td>
                            <td>A matéria de Transformações ensina os bruxos a como transformarem objetos e seres vivos em outras coisas. É uma matéria altamente técnica e envolvente, e exige portanto disciplina e concentração.</td>
                            <td>
                                <input <?php
                                        if (in_array('transformacoes', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="transformacoes" id="transformacoes" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>POÇÕES</td>
                            <td> Severo Snape</td>
                            <td>A matéria de Poções envolve o estudo e preparo das mais diversas poções e contrapoções.</td>
                            <td>
                                <input <?php
                                        if (in_array('pocoes', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="pocoes" id="pocoes" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>DEFESA CONTRA AS ARTES DAS TREVAS</td>
                            <td> Remo Lupin</td>
                            <td>A Defesa Contra as Artes das Trevas estuda os seres, magias e técnicas das Trevas, e as formas de se defender dela. Todos os bruxos que desejam ser Aurores costumam dedicar-se de forma muito intensa a essa matéria. </td>
                            <td>
                                <input <?php
                                        if (in_array('defesasContraTrevas', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="defesasContraTrevas" id="def" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>VÔO COM VASSOURAS</td>
                            <td>Rolanda Hooch</td>
                            <td>Ansina o vôo com Vassouras algumas manobras avançadas e as regras básicas do Quadribol.</td>
                            <td>
                                <input <?php
                                        if (in_array('vooVassoura', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="vooVassoura" id="voo" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>HERBOLOGIA</td>
                            <td>Pomona Sprout</td>
                            <td>A matéria de Herbologia visa ensinar como lidar com todas as estranhas plantas que em geral um bruxo usa quando prepara suas poções.</td>
                            <td>
                                <input <?php
                                        if (in_array('herbologia', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="herbologia" id="herb" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>ASTRONOMIA</td>
                            <td>Sinistra</td>
                            <td>A Astronomia é um ramo da magia que estuda as estrelas e o movimento dos planetas. Não é necessário o uso de magia nessa matéria.</td>
                            <td>
                                <input <?php
                                        if (in_array('astronomia', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="astronomia" id="astro" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>HISTÓRIA DA MAGIA</td>
                            <td> Binns</td>
                            <td>História da Magia basicamente explica como o mundo dos bruxos tornou-se o que é hoje. E essa matéria tem uma grande curiosidade: é ensinada por um fantasma!!!</td>
                            <td>
                                <input <?php
                                        if (in_array('historiaDaMagia', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="historiaDaMagia" id="hist" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>TRATO DE CRIATURAS MÁGICAS</td>
                            <td> Rúbeo Hagrid</td>
                            <td> Trato das Criaturas Mágicas é uma matéria opcional de Hogwarts que ensina como tratar as criaturas do mundo mágico, pode ser escolhida a partir do terceiro ano. Nos primeiros anos os alunos estudam criaturas pouco perigosas como crupes, amassos, vermes-cegos e tronquilhos. Conforme se passam os anos, as criaturas estudadas vão desenvolvendo mais complexidades e tornando-se verdadeiros desafios para os alunos</td>
                            <td>
                                <input <?php
                                        if (in_array('criaturasMagicas', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="criaturasMagicas" id="criat" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>ADIVINHAÇÃO</td>
                            <td> Sibila Trelawney</td>
                            <td>A adivinhação é um ramo da magia[1] que envolve a tentativa de prever o futuro, ou coletar entedimentos sobre eventos futuros, através de vários rituais e ferramentas.</td>
                            <td>
                                <input <?php
                                        if (in_array('adivinhacao', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="adivinhacao" id="adiv" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>ARITMANCIA</td>
                            <td>Vector</td>
                            <td>Aritmancia é uma espécie de “matemágica”, aonde princípios de matemática trouxa são misturados com numerologia e cabala.</td>
                            <td>
                                <input <?php
                                        if (in_array('aritmancia', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="aritmancia" id="arit" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>RUNAS ANTIGAS</td>
                            <td> Bathsheda Babbling.</td>
                            <td>O estudo de Runas Antigas é voltado para a interpretação de antigos idiomas mágicos e de idiomas antigos de importância mágica. Nada se sabe sobre o professor de Runas Antigas. </td>
                            <td>
                                <input <?php
                                        if (in_array('runasAntigas', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="runasAntigas" id="runas" class="inputCheck">
                            </td>
                        </tr>
                        <tr>
                            <td>ESTUDO DOS TROUXAS</td>
                            <td> Caridade Burbage.</td>
                            <td>Normalmente uma opção na lista de matérias optativas de bruxos de sangue puro, Estudo dos Trouxas explica, para os bruxos, as coisas que os trouxas usam e fazem, de forma que, no dia a dia, eles não se espantem com as coisas comuns aos trouxas.</td>
                            <td>
                                <input <?php
                                        if (in_array('EstudosDosTrouxas', $materias)) {
                                            echo 'checked';
                                        }
                                        ?> type="checkbox" name="disciplina[]" value="EstudosDosTrouxas" id="trouxas" class="inputCheck">
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <button class="matricula__button" type="submit">Confirmar matricula</button>
            </form>
        </div>
    </section>
<?php } else { ?>
<?php
    require_once './Pages/Matricula/graficosDeAlunos/grafico.php';
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChartNumAlunosPorMateria);
        google.charts.setOnLoadCallback(drawChartNumAlunosMatriculados);

        function drawChartNumAlunosPorMateria() {
            var data = google.visualization.arrayToDataTable([
                ['Materias', 'N° de matriculados'],
                ['FEITIÇOS', <?php echo $arrayDeQuantidadeDeMatriculados['feiticos'] ?>],
                ['TRANSFORMAÇÕES', <?php echo $arrayDeQuantidadeDeMatriculados['transformacoes'] ?>],
                ['POÇÕES', <?php echo $arrayDeQuantidadeDeMatriculados['pocoes'] ?>],
                ['DEFESA CONTRA AS ARTES DAS TREVAS', <?php echo $arrayDeQuantidadeDeMatriculados['defesasContraTrevas'] ?>],
                ['VÔO COM VASSOURAS', <?php echo $arrayDeQuantidadeDeMatriculados['vooVassoura'] ?>],
                ['HERBOLOGIA', <?php echo $arrayDeQuantidadeDeMatriculados['herbologia'] ?>],
                ['ASTRONOMIA', <?php echo $arrayDeQuantidadeDeMatriculados['astronomia'] ?>],
                ['HISTÓRIA DA MAGIA', <?php echo $arrayDeQuantidadeDeMatriculados['historiaDaMagia'] ?>],
                ['TRATO DE CRIATURAS MÁGICAS', <?php echo $arrayDeQuantidadeDeMatriculados['criaturasMagicas'] ?>],
                ['ADIVINHAÇÃO', <?php echo $arrayDeQuantidadeDeMatriculados['adivinhacao'] ?>],
                ['ARITMANCIA', <?php echo $arrayDeQuantidadeDeMatriculados['aritmancia'] ?>],
                ['RUNAS ANTIGAS', <?php echo $arrayDeQuantidadeDeMatriculados['runasAntigas'] ?>],
                ['ESTUDO DOS TROUXAS', <?php echo $arrayDeQuantidadeDeMatriculados['EstudosDosTrouxas'] ?>]
            ]);

            var options = {
                title: 'Quantidade de alunos matriculados',
                is3D: true,
                pieSliceText: 'value',
                legend: {position: 'bottom'},
                width: widthGrafico
            };

            var chart = new google.visualization.PieChart(document.getElementById('matriculadosPorMateria'));
            chart.draw(data, options);
        }
       
        let widthGrafico = 360;
        if(window.screen.width <= 600){
            widthGrafico = 360;
        }else if(window.screen.width > 600 && window.screen.width < 1024){
            widthGrafico = 540;
        }else{
            widthGrafico = 768;
        }
        

        function drawChartNumAlunosMatriculados() {
            var data = google.visualization.arrayToDataTable([
                ['Matriculados', 'N° de matriculados'],
                ['Não matriculados', <?php echo $numeroDeAlunosNaoMatriculado ?>],
                ['Matriculados', <?php echo ($numeroDeAlunos - $numeroDeAlunosNaoMatriculado) ?>],
            ]);

            var options = {
                title: 'Quantidade de alunos matriculados',
                is3D: true,
                legend: {position: 'bottom'}
            };

            var chart = new google.visualization.PieChart(document.getElementById('naoMatriculados'));
            chart.draw(data, options);
        }
    </script>

    <section class="matricula__relatorio">
        <div id="matriculadosPorMateria"></div>
        <div id="naoMatriculados"></div>
    </section>    

<?php } ?>

</html>