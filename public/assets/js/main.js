
function carregarSubcategorias() {
    // Obtém referências aos elementos select
    var categoriaSelect = document.getElementById('categoria');
    var subcategoriaSelect = document.getElementById('subcategoria');

    // Limpa as opções atuais do segundo select
    subcategoriaSelect.innerHTML = '';

    // Obtém o valor selecionado do primeiro select
    var categoriaSelecionada = categoriaSelect.value;

    // Lógica para carregar opções do segundo select com base na escolha do primeiro
    if (categoriaSelecionada === 'RioGrandeDoNorte') {
      criarOpcao(subcategoriaSelect, 'Refeitório Matriz', 'Refeitório Matriz Natal - RN');
      criarOpcao(subcategoriaSelect, 'SAMU', 'Refeitório SAMU Natal - RN');
      criarOpcao(subcategoriaSelect, 'Renner', 'Refeitório RENNER Natal - RN');
      criarOpcao(subcategoriaSelect, 'Nat. Divino Amor', 'Refeitório Mat. Divino Amor Natal - RN');
      criarOpcao(subcategoriaSelect, 'João Machado', 'Refeitório João Machado Natal - RN');
      criarOpcao(subcategoriaSelect, 'UPA Parnamirim', 'Refeitório UPA Parnamirim - RN');
      criarOpcao(subcategoriaSelect, 'Márcio Marinho Pirangi', 'Refeitório Hosp. Márcio Marinho Pirangi Natal - RN');
      criarOpcao(subcategoriaSelect, 'Copagás Extremoz', 'Refeitório Copagás Extremoz - RN');
    } else if (categoriaSelecionada === 'RioDeJaneiro') {
      criarOpcao(subcategoriaSelect, 'Rocha Faria', 'Refeitório Hosp. Rocha Faria - RJ');
      criarOpcao(subcategoriaSelect, 'Munir Rafull', 'Refeitório Hosp. Munir Rafull - RJ');
      criarOpcao(subcategoriaSelect, 'S. joão batista', 'Refeitório Hosp. S.João Batista - RJ');
      criarOpcao(subcategoriaSelect, 'Hosp. Brasilata', 'Refeitório Hosp. Brasilata - RJ');
    } else if (categoriaSelecionada === 'Maranhão') {
      criarOpcao(subcategoriaSelect, 'Central São Luís', 'Refeitório Cenral São Luís - MA');
      criarOpcao(subcategoriaSelect, 'ILA São Luís', 'Refeitório ILA São Luís - MA');
      criarOpcao(subcategoriaSelect, 'Refeitório Paulo Freire', 'Refeitório Paulo Freire São Luís - MA');
      criarOpcao(subcategoriaSelect, 'Refeitório Sta Amélia São Luís', 'Refeitório Sta Amélia São Luís - MA');
      criarOpcao(subcategoriaSelect, 'Refeitório COLUN São Luís', 'Refeitório COLUN são Luís - MA');
  }   else if (categoriaSelecionada === 'MinasGerais') {
      criarOpcao(subcategoriaSelect, 'Refeitório Glória Uberlândia', 'Refeitório Glória Uberlândia - MG');
      criarOpcao(subcategoriaSelect, 'Refeitório Umuarama Uberlândia', 'Refeitório Umuarama Uberlândia - MG');
      criarOpcao(subcategoriaSelect, 'Refeitório Santa Mônica', 'Refeitório Santa Mônica Uberlândia - MG');
  } else if (categoriaSelecionada === 'Sergipe') {
      criarOpcao(subcategoriaSelect, 'Refeitório Aracaju', 'Refeitório Aracaju - SE');
  } else if (categoriaSelecionada === 'Alagoas') {
      criarOpcao(subcategoriaSelect, 'Refeitório HU Maceió', 'Refeitório HU Maceió - AL');
      criarOpcao(subcategoriaSelect, 'Refeitório Rei Pelé Maceió', 'Refeitório Rei Pelé Maceió - AL');
      criarOpcao(subcategoriaSelect, 'Refeitório Teknosonda Maceió', 'Refeitório Teknosonda Maceió - AL');
  } else if (categoriaSelecionada === 'Pernambuco'){
      criarOpcao(subcategoriaSelect, 'Refeitório HC Recife', 'Refeitório HC Recife - PE');
  }
}
  function criarOpcao(select, valor, texto) {
    // Cria e adiciona uma nova opção ao select
    var option = document.createElement('option');
    option.value = valor;
    option.text = texto;
    select.add(option);
  }