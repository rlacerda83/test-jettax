<p align="center"><a href="https://www.jettax.com.br" target="_blank"><img src="https://www.jettax.com.br/wp-content/themes/jettax/img/padroes/logo_topo.png" width="400"></a></p>


## Teste para PHP Sênior 

Este projeto foi criado apenas como base para o teste. Ao analisar o projeto você verá que ele não segue boas práticas e 
precisa ser modificado.

Pré-requisitos:

- Usar Laravel e PHP 7+ no backend;
- Usar Vue.js no front;
- Usar banco de dados MongoDB;
- Entregar a aplicação com um passo a passo de execução;
- A aplicação do cliente não pode ter latência maior que 300ms

## Tecnologias

Você pode usar qualquer tecnologia adicional que julgar necerrário (redis, memcached, supervisor, queues, 
elasticsearch, etc)

## Objetivo do Projeto

**Precisamos de um protótipo que busca as notas do cliente e salva as mesmas no banco de dados para acesso do cliente 
numa plataforma web.**

Alguns dados importantes do nosso projeto:
 - Nosso protótipo nasceu com 5k cliente na base, mas o o potencial de crescimento chega a 500k em dois anos;
 - Cada cliente tem em média 100 notas por dia;
 - A busca retorna um arquivo XML, que deve ser parseado e salvo no banco;
 - Vamos usar como base de banco uma máquina com 8GB RAM, e 2 réplicas.

Pensando no crescimento acelerado precisamos entregar os seguintes itens:

1. **A cada duas horas precisamos buscar as notas de todos os clientes**
    - Apenas clientes ativos devem ser processados;
    - Para processar, é necessário saber a cidade, o documento, o nome e os dados do certificado digital do cliente;
    - Todos os clientes devem processar em até duas horas;
    
    
2. **Após a busca, precisamos parsear as notas.**
   
    Nesse processo use o arquivo xml dentro da pasta storage/app/public. 


3. **Após parsear, devemos salvar as notas no banco**
    - Devemos salvar os seguintes dados:
        - Número
        - Modelo
        - Serie
        - Data de Emissão
        - Dados do Emitente
        - Dados do destinatário
        - Valor Total da Nota
        - Dados do produto:
            - Código
            - Nome
            - NCM
            - CFOP
            - Valor
    
   
4. **O cliente terá acesso a listagem de notas em uma aplicação web (Vue.js):**
    - Na aplicação ele terá acesso a listagem e aos seguintes totalizadores:
         - Soma do valor total das notas
         - Quantidade de notas
    
    - Ele vai poder filtrar as notas pelos seguintes campos:
        - Numero (campo nNF)
        - Data de emissão (dhEmi)
        - Descrição do produto(qualquer valor do campo prod->xProd)
        - Código do produto(qualquer valor do campo prod->cProd)
        - CNPJ do emitente (campo emit->CNPJ)
    
    - Ele Vai poder ordenar pela data de emissão e pelo valor total da nota;

## Como rodar o DEMO    

Neste demo só tem o CLI montado. Para configurar siga os passos abaixo:

 - Fazer o clone;
 - Copiar o .env.example para .env;  
 - Rodar composer install -o;
 - Se quiser rodar o seed de clientes para alimentar a base;
