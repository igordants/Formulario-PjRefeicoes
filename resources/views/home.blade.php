<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forumlário</title>
</head>

<body class="bg-[url('assets/img/1.jpg')]">
    <div class="bg-green-500 flex justify-center">
    @if(Session::has('success'))
        <p class="alert alert-info ">{{ Session::get('success') }}</p>
    @endif
    </div>
    <!--Select para seleção da Unidade-->
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h3 class="text-center">Forumlário Pj Refeições</h3>
        <img class=" h-52 w-52 rounded-full mx-24" src="assets/img/2.png" alt="LogoPJ">
    </div>
    <form method="POST" action="{{ route('form.store') }}">
      @csrf
        <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
            <label for="categoria">Escolha uma Categoria:</label>
            <select class="bg-orange-300 rounded-full border-4" id="categoria" name="categories" onchange="carregarSubcategorias()">
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
            <select name="subcategories" class="bg-orange-300 rounded-full border-4" id="subcategoria">
                <option value="SelecioneFilial">Selecione Uma Filial...</option>
            </select>
        </div>
      <!--Perguntas -->
        <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4">
                1 - Qual sua opnião sobre a apresentação das preparações?
            </h2>
                <div class="mb-4"> 
                    <label for="resposta1" class="flex items-center">
                        <input type="radio" id="resposta1" name="preparations" value="Detestei" class="mr-2"/>
                        <span class="text-sm"> 😡 Detestei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta2" class="flex items-center">
                        <input type="radio" id="resposta2" name="preparations" value="Não Gostei" class="mr-2" />
                        <span class="text-sm"> 👎 Não Gostei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta3" class="flex items-center">
                        <input type="radio" id="resposta3" name="preparations" value="Indiferente" class="mr-2" />
                        <span class="text-sm"> 😐 Indiferente</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta3" class="flex items-center">
                        <input type="radio" id="resposta4" name="preparations" value="Gostei" class="mr-2" />
                        <span class="text-sm"> 😋 Gostei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta3" class="flex items-center">
                        <input type="radio" id="resposta5" name="preparations" value="Adorei" class="mr-2" />
                        <span class="text-sm"> 😍 Adorei</span>
                    </label>
                </div>
        </div>

        <!--Pergunta 2-->
        <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4">
                2 - Qual sua opnião quanto ao sabor das preparações oferecidas?
            </h2>
                <div class="mb-4">
                    <label for="resposta1" class="flex items-center">
                        <input type="radio" id="resposta6" name="flavor" value="Detestei" class="mr-2" />
                        <span class="text-sm"> 😡 Detestei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta2" class="flex items-center">
                        <input type="radio" id="resposta7" name="flavor" value="Não Gostei" class="mr-2" />
                        <span class="text-sm"> 👎 Não Gostei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta3" class="flex items-center">
                        <input type="radio" id="resposta8" name="flavor" value="Indiferente" class="mr-2" />
                        <span class="text-sm"> 😐 Indiferente</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta4" class="flex items-center">
                        <input type="radio" id="resposta9" name="flavor" value="Gostei" class="mr-2" />
                        <span class="text-sm"> 😋 Gostei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta5" class="flex items-center">
                        <input type="radio" id="resposta10" name="flavor" value="Adorei" class="mr-2" />
                        <span class="text-sm"> 😍 Adorei</span>
                    </label>
                </div>
        </div>
        <!--Pergunta 3-->
        <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-4">
                3 - O Cardápio apresenta variedade que lhe agrada?
            </h2>
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="resposta1" class="flex items-center">
                        <input type="radio" id="resposta11" name="menu" value="Detestei" class="mr-2" />
                        <span class="text-sm">😡 Detestei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta2" class="flex items-center">
                        <input type="radio" id="resposta12" name="menu" value="Não Gostei" class="mr-2" />
                        <span class="text-sm">👎 Não Gostei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta3" class="flex items-center">
                        <input type="radio" id="resposta13" name="menu" value="Indiferente" class="mr-2" />
                        <span class="text-sm">😐 Indiferente</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta4" class="flex items-center">
                        <input type="radio" id="resposta14" name="menu" value="Gostei" class="mr-2" />
                        <span class="text-sm">😋 Gostei</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="resposta5" class="flex items-center">
                        <input type="radio" id="resposta15" name="menu" value="Adorei" class="mr-2" />
                        <span class="text-sm">😍 Adorei</span>
                    </label>
                </div>
        </div>
      <!--Pergunta 4-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              4 - Quanto ao cadápio é servido conforme proposto?
          </h2>
          <form action="#" method="post">
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta16" name="served" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta17" name="served" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta18" name="served" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta19" name="served" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta20" name="served" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
          
        </div>
      <!--Pergunta 5-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              5 - Na sua opinião, a quantidade de refeição servida é satisfatória?
          </h2>
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta21" name="opinion" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta22" name="opinion" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta23" name="opinion" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta24" name="opinion" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta25" name="opinion" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
      </div>
      <!--Pergunta 6-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              6 - Como você avalia o atendimento dos nossos funcionários?
          </h2>
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta26" name="service" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta27" name="service" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta28" name="service" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta29" name="service" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta30" name="service" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
      </div>
      <!--Pergunta 7-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              7 - Como avalia a apresentação, quanto a higiene pessoal dos nossos
              funcionários?
          </h2>
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta31" name="hygiene" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta32" name="hygiene" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta33" name="hygiene" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta34" name="hygiene" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta35" name="hygiene" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
      </div>
      <!--Pergunta 8-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              8 - As condições de higiene do ambiente do nosso serviço são
              satisfatórias no seu ponto de vista?
          </h2>
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta36" name="conditions" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta37" name="conditions" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta37" name="conditions" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta38" name="conditions" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta39" name="conditions" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
      </div>
      <!--Pergunta 9-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              9 - O ambiente do nosso serviço é confortável no que diz respeito a
              mesas, cadeiras, pratos e talheres?
          </h2>
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta40" name="comfortable" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta41" name="comfortable" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta42" class="flex items-center">
                      <input type="radio" id="resposta42" name="comfortable" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta43" name="comfortable" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta44" name="comfortable" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
      </div>
      <!--Pergunta 10-->
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h2 class="text-2xl font-semibold mb-4">
              10 - Em geral como você avalia nossos serviços?
          </h2>
              <div class="mb-4">
                  <label for="resposta1" class="flex items-center">
                      <input type="radio" id="resposta45" name="general" value="Detestei" class="mr-2" />
                      <span class="text-sm">😡 Detestei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta2" class="flex items-center">
                      <input type="radio" id="resposta46" name="general" value="Não Gostei" class="mr-2" />
                      <span class="text-sm">👎 Não Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta47" name="general" value="Indiferente" class="mr-2" />
                      <span class="text-sm">😐 Indiferente</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta48" name="general" value="Gostei" class="mr-2" />
                      <span class="text-sm">😋 Gostei</span>
                  </label>
              </div>
              <div class="mb-4">
                  <label for="resposta3" class="flex items-center">
                      <input type="radio" id="resposta49" name="general" value="Adorei" class="mr-2" />
                      <span class="text-sm">😍 Adorei</span>
                  </label>
              </div>
      </div>
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <label for="">Conte um pouco mais da sua experiência:</label>
          <textarea class="h-48 w-96 shadow-lg shadow-red-500/50 bg-orange-300 rounded-md border-4" id="experiencia"
              name="experience"></textarea>
      </div>
      <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
          <h6>
              <span class="shadow-red-500/50">Obrigado por dedicar seu tempo a essa pesquisa, estamos sempre visando
                  melhorar os nossos serviços!</span>
          </h6>
          <input
              class="bg-orange-200 rounded-md w-14 hover:bg-orange-600 active:bg-orange-700 focus:outline-none focus:ring focus:ring-orange-300"
              type="submit" value="Enviar">
      </div>
      <div>
      </div>
    </form>
</body>
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
