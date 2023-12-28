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
        criarOpcao(subcategoriaSelect, 'filialRN1', 'Refeitório Matriz Natal - RN');
        criarOpcao(subcategoriaSelect, 'filialRN2', 'Refeitório SAMU Natal - RN');
        criarOpcao(subcategoriaSelect, 'filialRN3', 'Refeitório RENNER Natal - RN');
        criarOpcao(subcategoriaSelect, 'filialRN4', 'Refeitório Mat. Divino Amor Natal - RN');
        criarOpcao(subcategoriaSelect, 'filialRN5', 'Refeitório João Machado Natal - RN');
        criarOpcao(subcategoriaSelect, 'filialRN6', 'Refeitório UPA Parnamirim - RN');
        criarOpcao(subcategoriaSelect, 'filialRN7', 'Refeitório Hosp. Márcio Marinho Pirangi Natal - RN');
        criarOpcao(subcategoriaSelect, 'filialRN8', 'Refeitório Copagás Extremoz - RN');
      } else if (categoriaSelecionada === 'RioDeJaneiro') {
        criarOpcao(subcategoriaSelect, 'filialRJ1', 'Refeitório Hosp. Rocha Faria - RJ');
        criarOpcao(subcategoriaSelect, 'filialRJ2', 'Refeitório Hosp. Munir Rafull - RJ');
        criarOpcao(subcategoriaSelect, 'filialRJ3', 'Refeitório Hosp. S.João Batista - RJ');
        criarOpcao(subcategoriaSelect, 'filialRJ4', 'Refeitório Hosp. Brasilate - RJ');
      } else if (categoriaSelecionada === 'Maranhão') {
        criarOpcao(subcategoriaSelect, 'filialMA1', 'Refeitório Cenral São Luís - MA');
        criarOpcao(subcategoriaSelect, 'filialMA2', 'Refeitório ILA São Luís - MA');
        criarOpcao(subcategoriaSelect, 'filialMA3', 'Refeitório Paulo Freire São Luís - MA');
        criarOpcao(subcategoriaSelect, 'filialMA4', 'Refeitório Sta Amélia São Luís - MA');
        criarOpcao(subcategoriaSelect, 'filialMA5', 'Refeitório COLUN são Luís - MA');
    }   else if (categoriaSelecionada === 'MinasGerais') {
        criarOpcao(subcategoriaSelect, 'filialMG1', 'Refeitório Glória Uberlândia - MG');
        criarOpcao(subcategoriaSelect, 'filialMG2', 'Refeitório Umuarama Uberlândia - MG');
        criarOpcao(subcategoriaSelect, 'filialMG3', 'Refeitório Santa Mônica Uberlândia - MG');
    } else if (categoriaSelecionada === 'Sergipe') {
        criarOpcao(subcategoriaSelect, 'filialSE1', 'Refeitório Aracaju - SE');
    } else if (categoriaSelecionada === 'Alagoas') {
        criarOpcao(subcategoriaSelect, 'filialAL1', 'Refeitório HU Maceió - AL');
        criarOpcao(subcategoriaSelect, 'filialAL2', 'Refeitório Rei Pelé Maceió - AL');
        criarOpcao(subcategoriaSelect, 'filialAL3', 'Refeitório Teknosonda Maceió - AL');
    } else if (categoriaSelecionada === 'Pernambuco'){
        criarOpcao(subcategoriaSelect, 'filialPE1', 'Refeitório HC Recife - PE');
    }
}
    function criarOpcao(select, valor, texto) {
      // Cria e adiciona uma nova opção ao select
      var option = document.createElement('option');
      option.value = valor;
      option.text = texto;
      select.add(option);
    }