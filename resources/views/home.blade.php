<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forumlário</title>
  </head>
  <body class="bg-[url('assets/img/1.jpg')]">
    <!--Select para seleção da Unidade-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h3 class="text-center">Forumlário Pj Refeições</h3>
      <img class=" h-52 w-52 rounded-full mx-24" src="assets/img/2.png" alt="LogoPJ">
    </div>
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <label for="categoria">Escolha uma Categoria:</label>
      <select class="bg-orange-300 rounded-full border-4" id="categoria" onchange="carregarSubcategorias()">
        <option value="selecione">Selecione Um Unidade...</option>
        <option value="RioGrandeDoNorte">Rio Grande Do Norte</option>
        <option value="RioDeJaneiro">Rio De Janeiro</option>
        <option value="MinasGerais">Minas Gerais</option>
        <option value="Pernambuco">Pernambuco</option>
        <option value="Sergipe">Sergipe</option>
        <option value="Alagoas">Alagoas</option>
        <option value="Maranhão">Maranhão</option>
      </select>
    </div>
    <!--Select para Seleção da Unidade-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <label for="subcategoria">Escolha uma Subcategoria:</label>
      <select class="bg-orange-300 rounded-full border-4" id="subcategoria">
        <option value="SelecioneFilial">Selecione Uma Filial...</option>
      </select>
    </div>
    <!--Perguntas -->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        1 - Qual sua opnião sobre a apresentação das preparações?
      </h2>
      <form action="{{ route('formulario.store') }}" method="post">
        @csrf
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input class=""
              type="checkbox"
              id="resposta1"
              name="resposta1"
              class="mr-2"
            />
            <span class="text-sm"> 😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta2"
              name="resposta2"
              class="mr-2"
            />
            <span class="text-sm"> 👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta3"
              name="resposta3"
              class="mr-2"
            />
            <span class="text-sm"> 😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta4"
              name="resposta4"
              class="mr-2"
            />
            <span class="text-sm"> 😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta5"
              name="resposta5"
              class="mr-2"
            />
            <span class="text-sm"> 😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>

    <!--Pergunta 2-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        2 - Qual sua opnião quanto ao sabor das preparações oferecidas?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta6"
              name="resposta6"
              class="mr-2"
            />
            <span class="text-sm"> 😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta7"
              name="resposta7"
              class="mr-2"
            />
            <span class="text-sm"> 👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta8"
              name="resposta8"
              class="mr-2"
            />
            <span class="text-sm"> 😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta4" class="flex items-center">
            <input
              type="checkbox"
              id="resposta9"
              name="resposta9"
              class="mr-2"
            />
            <span class="text-sm"> 😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta5" class="flex items-center">
            <input
              type="checkbox"
              id="resposta10"
              name="resposta10"
              class="mr-2"
            />
            <span class="text-sm"> 😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 3-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        3 - O Cardápio apresenta variedade que lhe agrada?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta11"
              name="resposta11"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta12"
              name="resposta12"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta13"
              name="resposta13"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta4" class="flex items-center">
            <input
              type="checkbox"
              id="resposta14"
              name="resposta14"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta5" class="flex items-center">
            <input
              type="checkbox"
              id="resposta15"
              name="resposta15"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 4-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        4 - Quanto ao cadápio é servido conforme proposto?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta16"
              name="resposta16"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta17"
              name="resposta17"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta18"
              name="resposta18"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta19"
              name="resposta19"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta20"
              name="resposta20"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 5-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        5 - Na sua opinião, a quantidade de refeição servida é satisfatória?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta21"
              name="resposta21"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta22"
              name="resposta22"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta23"
              name="resposta23"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta24"
              name="resposta24"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta25"
              name="resposta25"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 6-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        6 - Como você avalia o atendimento dos nossos funcionários?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta26"
              name="resposta26"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta27"
              name="resposta27"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta28"
              name="resposta28"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta29"
              name="resposta29"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta30"
              name="resposta30"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 7-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        7 - Como avalia a apresentação, quanto a higiene pessoal dos nossos
        funcionários?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta31"
              name="resposta31"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta32"
              name="resposta32"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta33"
              name="resposta33"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta34"
              name="resposta34"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta35"
              name="resposta35"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 8-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        8 - As condições de higiene do ambiente do nosso serviço são
        satisfatórias no seu ponto de vista?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta36"
              name="resposta36"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta37"
              name="resposta37"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta37"
              name="resposta37"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta38"
              name="resposta38"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta39"
              name="resposta39"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 9-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        9 - O ambiente do nosso serviço é confortável no que diz respeito a
        mesas, cadeiras, pratos e talheres?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta40"
              name="resposta40"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta41"
              name="resposta41"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta42" class="flex items-center">
            <input
              type="checkbox"
              id="resposta42"
              name="resposta42"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta43"
              name="resposta43"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta44"
              name="resposta44"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <!--Pergunta 10-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">
        10 - Em geral como você avalia nossos serviços?
      </h2>
      <form action="#" method="post">
        <div class="mb-4">
          <label for="resposta1" class="flex items-center">
            <input
              type="checkbox"
              id="resposta45"
              name="resposta45"
              class="mr-2"
            />
            <span class="text-sm">😡 Detestei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta2" class="flex items-center">
            <input
              type="checkbox"
              id="resposta46"
              name="resposta46"
              class="mr-2"
            />
            <span class="text-sm">👎 Não Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta47"
              name="resposta47"
              class="mr-2"
            />
            <span class="text-sm">😐 Indiferente</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta48"
              name="resposta48"
              class="mr-2"
            />
            <span class="text-sm">😋 Gostei</span>
          </label>
        </div>
        <div class="mb-4">
          <label for="resposta3" class="flex items-center">
            <input
              type="checkbox"
              id="resposta49"
              name="resposta49"
              class="mr-2"
            />
            <span class="text-sm">😍 Adorei</span>
          </label>
        </div>
      </form>
    </div>
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md" >
      <label for="">Conte um pouco mais da sua experiência:</label>
      <textarea class="h-48 w-96 shadow-lg shadow-red-500/50 bg-orange-300 rounded-md border-4" id="experiencia" name="experiencia"></textarea>
  </div>
  <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
    <h6>
      <span class="shadow-red-500/50">Obrigado por dedicar seu tempo a essa pesquisa, estamos sempre visando melhorar os nossos serviços!</span>
    </h6>
    <button class="bg-orange-200 rounded-md w-14 hover:bg-orange-600 active:bg-orange-700 focus:outline-none focus:ring focus:ring-orange-300">Enviar</button>
  </div>
  <div>
  </div>
  </body>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</html>
