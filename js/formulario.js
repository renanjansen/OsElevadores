//função atribuida ao botão que insere colunas e linhas na tabela do formulário
function inserirTabela() {
  var tabela = document.getElementById('tabela');
  var numDeLinhas = tabela.rows.length;
  var numDeColunas = tabela.rows[numDeLinhas - 1].cells.length;
  var novaTabela = tabela.insertRow(numDeLinhas);
  for (i = 0; i < numDeColunas; i++) {
    newCell = novaTabela.insertCell(i);
    newCell.innerHTML = "<input>";
  }

}