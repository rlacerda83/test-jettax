<p align="center"><a href="https://www.jettax.com.br" target="_blank"><img src="https://www.jettax.com.br/wp-content/themes/jettax2023/assets/images/logo-full-header@2x.webp" width="400"></a></p>


## Teste para PHP Pleno 

Pré-requisitos:

- Usar backend com PHP 8+;
- Usar Vue.js no front;
- Usar banco de dados MongoDB;
- Entregar a aplicação com um passo a passo de execução;

## Tecnologias

Você pode usar qualquer tecnologia adicional que julgar necessário.

## Objetivo do Projeto

**Precisamos baixar a CND da cidade de Franca - SP.**

O link do site è [https://franca.sp.gov.br/portal-servico/paginas/publica/certidao/contribuinte/pesquisa_certidao_tributos_gerais.xhtml](https://franca.sp.gov.br/portal-servico/paginas/publica/certidao/contribuinte/pesquisa_certidao_tributos_gerais.xhtml)

Para conseguir a certidão siga os seguintes passos:
 - Preencha o CNPJ e um nome qualquer no bloco de solicitante.
 - Preencha o CNP nos dados de contribuinte e clique em pesquisar.
 - Na próxima página deve ser clicado no bot̀ão Emissão de Certidão Negativa de Tributos Municipais
 - Se a resposta for um PDF, a empresa esta em situação regular e vai gerar um PDF.
 - Se a resposta nao for o PDF, a empresa não esta em situação regular.
 
Devemos gravar os seguintes campo no mongo:

- CNPJ
- Situação da empresa (regular, irregular)
- Data da busca
- Se for regular, a data de validade da CND, o código de validação e o arquivo PDF (de preferência na AWS)

Os dados da CND devem ser exibidos através de uma listagem com filtro de CNPJ, se está regular ou náo e pela data de validade
