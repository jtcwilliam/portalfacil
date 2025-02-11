<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation for Sites</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  <script>
    function toggleFullScreen() {
      alert('tela cheia');
      if (!document.fullscreenElement && // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) { // current working methods
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
          document.documentElement.msRequestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
          document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      }
    }
  </script>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>

  <div class="grid-x grid-padding-x" style="background-color: #155f9b; color: white; padding-left: 30px;">

    <b>Prefeitura de Guarlhos - Mockup de Testes</b>

  </div>
  <div class="grid-x grid-padding-x" style="background-color: #0494c7; padding-left: 30px;">
    <div class="large-4 cell">
      <img src="logoBarra.png">
    </div>

    <div class="large-3 cell">
    </div>

    <div class="large-5 cell">
      <img src="barra.png">
    </div>



  </div>


  <div class="grid-x grid-padding-x">

    <div class="large-3 cell" style="background-color: #001a23;height: 100vh;">

      <img src="barraLateral.png">
    </div>


    <div class="large-9 cell">
      <form action="gravarForm.php" enctype="multipart/form-data" method="POST">


        <br>&nbsp;<br>
        <div class="grid-x grid-padding-x">

          <div class="medium-12 cell">
            <a class="button" id="btn">Tela cheia</a>
            <label>Tipo de Processo
              <input type="text" placeholder="Ordem de Anexo" readonly>
            </label>
          </div>

          <div class="medium-12 cell">
            <label>Especificação
              <select id="mySelect" style="width: 100%;" name="comboProcessos" required>
                <option> </option>
                <option> ABERTURA DE CONCURSO INTERNO E EXTERNO </option>
                <option> ABERTURA DE EDITAL </option>
                <option> ABONOS LEGAIS </option>
                <option> AÇÃO ANULATÓRIA </option>
                <option> AÇÃO ANULATÓRIA COM CUMPRIMENTO DE SENTENÇA </option>
                <option> AÇÃO ANULATÓRIA COM REPETIÇÃO DE INDÉBITO </option>
                <option> AÇÃO ANULATÓRIA DE DÉBITO FISCAL </option>
                <option> AÇÃO ANULATÓRIA DE NULIDADE DE ATO ADMINISTRATIVO OU MULTA INFRACIONAIS </option>
                <option> AÇÃO CAUTELAR </option>
                <option> AÇÃO CÍVEL - 1ª VARA DA FAZENDA PÚBLICA DE GUARULHOS </option>
                <option> AÇÃO CÍVEL - 2ª VARA DA FAZENDA PÚBLICA DE GUARULHOS </option>
                <option> AÇÃO CIVIL PÚBLICA </option>
                <option> AÇÃO DECLARATÓRIA </option>
                <option> AÇÃO DECLARATÓRIA DE DÉBITO FISCAL </option>
                <option> AÇÃO DE COBRANÇA </option>
                <option> AÇÃO DE CONSIGNAÇÃO EM PAGAMENTO </option>
                <option> AÇÃO DE ENCERRAMENTO DE ATIVIDADE COMERCIAL </option>
                <option> AÇÃO DE EXECUÇÃO DE TÍTULO EXTRAJUDICIAL </option>
                <option> AÇÃO DE IMPROBIDADE ADMINISTRATIVA </option>
                <option> AÇÃO DE INDENIZAÇÃO </option>
                <option> AÇÃO DE INDENIZAÇÃO COM PERDAS E DANOS MATERIAIS </option>
                <option> AÇÃO DE INDENIZAÇÃO COM PERDAS E DANOS MATERIAIS E MORAIS </option>
                <option> AÇÃO DEMOLITÓRIA </option>
                <option> AÇÃO DE NUNCIAÇÃO DE OBRA NOVA </option>
                <option> AÇÃO DE OBRIGAÇÃO DE FAZER </option>
                <option> AÇÃO DE RECUPERAÇÃO JUDICIAL </option>
                <option> AÇÃO DE REPARAÇÃO DE DANOS </option>
                <option> AÇÃO DE REPETIÇÃO DE INDÉBITO TRIBUTÁRIO </option>
                <option> AÇÃO MONITÓRIA </option>
                <option> AÇÃO ORDINÁRIA </option>
                <option> AÇÃO POPULAR </option>
                <option> AÇÃO RESCISÓRIA </option>
                <option> ACESSO A INFORMAÇÃO - LAI Nº 12.527/2011 </option>
                <option> ACIDENTE DE TRABALHO </option>
                <option> AÇÕES PARA USO DO TEATRO PADRE BENTO </option>
                <option> ACOMPANHAMENTO DA APLICAÇÃO MÍNIMA CONSTITUCIONAL DE RECURSOS </option>
                <option> ACOMPANHAMENTO DA MOVIMENTAÇÃO DOS ALMOXARIFADOS </option>
                <option> ACOMPANHAMENTO DAS CONTAS PÚBLICAS </option>
                <option> ACOMPANHAMENTO DE METAS FISCAIS E RENÚNCIA DA RECEITA NA LEI DE DIRETRIZES ORÇAMENTÁRIAS-LDO </option>
                <option> ACOMPANHAMENTO E CONTROLE DE OCUPAÇÕES IRREGULARES </option>
                <option> ACOMPANHAMENTO E MONITORAMENTO DE CUIDADO INTEGRADO </option>
                <option> ACOMPANHAMENTO SITUACIONAL DE INSTRUMENTOS FIRMADOS COM ÓRGÃOS EXTERNOS </option>
                <option> ACOMPANHAMENTO TÉCNICO REF. CRAS/CREAS </option>
                <option> ADIN -AÇÃO DIRETA DE INCONSTITUCIONALIDADE </option>
                <option> ADOTE UMA ÁREA VERDE </option>
                <option> AGRAVO DE INSTRUMENTO </option>
                <option> ALTERAÇÃO DA DATA DE VENCIMENTO REF. ISS E GISS </option>
                <option> ALTERAÇÃO DE DADOS CADASTRAIS- SANITÁRIA </option>
                <option> ALTERAÇÃO DE DADOS DE CANDIDATOS DE PROCESSOS SELETIVOS E CONCURSOS PÚBLICOS </option>
                <option> ALTERAÇÃO DE DATA DO CANCELAMENTO DE INSCRIÇÃO MOBILIÁRIA </option>
                <option> ALTERAÇÃO DE JORNADA </option>
                <option> ALTERAÇÃO DE VEÍCULO E PLACA </option>
                <option> ALTERAÇÃO ORÇAMENTÁRIA - ELEMENTO 92 </option>
                <option> ALTERAÇÃO ORÇAMENTÁRIA - EXCESSO/SUPERÁVIT (FUNDO E OUTROS) </option>
                <option> ALTERAÇÃO ORÇAMENTÁRIA/FINANCEIRA - CMG </option>
                <option> ALTERAÇÃO ORÇAMENTÁRIA - GERAL </option>
                <option> ALTERAÇÕES DE NOME PARA PUBLICAÇÃO </option>
                <option> ALVARÁ DE DEMOLIÇÃO </option>
                <option> ALVARÁ DE INSTALAÇÃO DE ESTAÇÃO DE TRANSMISSÃO DE RADIOCOMUNICAÇÃO - ETR </option>
                <option> ALVARÁ DE PUBLICIDADE PARA TÁXI E VAN ESCOLAR </option>
                <option> ALVARÁ DE TÁXI </option>
                <option> ALVARÁ DE TRANSPORTE ESCOLAR </option>
                <option> ALVARÁ SANITÁRIO - CNAE 0892-4/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1031-7/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1032-5/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1032-5/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1041-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1042-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1043-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1053-8/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1061-9/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1061-9/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1062-7/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1063-5/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1064-3/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1065-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1065-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1065-1/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1069-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1071-6/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1072-4/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1072-4/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1081-3/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1081-3/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1082-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1091-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1092-9/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1093-7/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1093-7/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1094-5/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1095-3/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1096-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/05 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/06 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/07 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1099-6/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1121-6/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1122-4/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1731-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1732-0/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1733-8/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1742-7/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 1742-7/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2014-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2052-5/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2061-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2062-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2063-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2093-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2110-6/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2121-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2121-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2121-1/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2123-8/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2219-6/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2222-6/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2312-5/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2341-9/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2349-4/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2591-8/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2660-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 2829-1/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3092-0/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/05 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/06 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3250-7/07 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3291-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3292-2/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3600-6/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3600-6/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3812-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 3822-0/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4632-0/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4637-1/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4644-3/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4645-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4645-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4645-1/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4646-0/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4646-0/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4649-4/08 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4664-8/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4711-3/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4711-3/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4712-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4721-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4721-1/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4722-9/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4722-9/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4729-6/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4771-7/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4771-7/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4771-7/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4772-5/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4774-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4930-2/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 4930-2/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5211-7/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5211-7/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5590-6/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5611-2/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5611-2/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5620-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 5620-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 6203-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 7120-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 7500-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8122-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8129-0/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8292-0/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8412-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8511-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8591-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8610-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8610-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8621-6/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8621-6/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8622-4/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8630-5/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8630-5/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8630-5/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8630-5/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8630-5/06 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8630-5/07 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/05 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/06 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/07 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/08 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/09 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/10 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/11 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/12 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/13 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/14 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8640-2/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8650-0/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8650-0/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8690-9/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8690-9/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8690-9/04 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8711-5/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8711-5/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8711-5/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8712-3/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8720-4/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8720-4/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8730-1/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8730-1/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8730-1/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 8800-6/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9311-5/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9312-3/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9313-1/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9321-2/00 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9601-7/03 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9602-5/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9602-5/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9603-3/01 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9603-3/02 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9603-3/05 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9603-3/99 </option>
                <option> ALVARÁ SANITÁRIO - CNAE 9609-2/06 </option>
                <option> ALVARÁ SANITÁRIO - EQUIPAMENTO </option>
                <option> AMBULÂNCIA PARA EVENTOS </option>
                <option> AMPLIAÇÃO DE UNIDADES ADMINISTRATIVAS </option>
                <option> ANÁLISE DA COMISSÃO PARA GESTÃO DE CRISE DO REGIME ADMINISTRATIVO ESPECIAL </option>
                <option> ANÁLISE DE CELEBRAÇÃO E DE AJUSTES DE INSTRUMENTOS FIRMADOS COM ÓRGÃOS EXTERNOS </option>
                <option> ANÁLISE DE DADOS </option>
                <option> ANÁLISE DE DÉBITOS EM EXECUÇÃO FISCAL </option>
                <option> ANÁLISE DE ESTUDO DE IMPACTO DE VIZINHANÇA </option>
                <option> ANÁLISE E APROVAÇÃO DO PGRCC </option>
                <option> ANÁLISE E APROVAÇÃO DO PGRS </option>
                <option> ANÁLISE FUNCIONAL - LEI Nº 8266/2024 </option>
                <option> ANÁLISE INCONSISTÊNCIA EM PARCELAMENTO </option>
                <option> ANOTAÇÃO DE NUMERAÇÃO OFICIAL EM VIAS OFICIAIS </option>
                <option> ANTECIPAÇÃO DE VENCIMENTO DE PARCELAS </option>
                <option> ANUÊNCIA AMBIENTAL PARA EXECUÇÃO DE OBRAS </option>
                <option> APELAÇÃO </option>
                <option> APLICAÇÃO DE PENALIDADES LEI FEDERAL Nº 14133/2021 </option>
                <option> APLICAÇÃO DE PENALIDADES LEI FEDERAL Nº 8666/1993 </option>
                <option> APOIO DA GUARDA CIVIL MUNICIPAL </option>
                <option> APOIO DE BATEDORES </option>
                <option> APOIO PARA EVENTOS ESPORTIVOS </option>
                <option> APOIO PARA GRANDES EVENTOS REF. CULTURA </option>
                <option> APOIO PARA REALIZAÇÃO DE DOCUMENTÁRIO </option>
                <option> APOIO PARA UTILIZAÇÃO DO CENTRO CULTURAL </option>
                <option> APOSENTADORIAS INSS/IPREF/COMPULSÓRIO </option>
                <option> APROVAÇÃO DE PROJETO DE MORADIA ECONÔMICA </option>
                <option> APROVEITAMENTO DE TEMPO DE CARGOS ANTERIORES </option>
                <option> APURAÇÃO DE CONDUTA DE AGENTE POLÍTICO </option>
                <option> APURAÇÃO DE DESCONTOS INDEVIDOS EM FOLHA DE PAGAMENTO </option>
                <option> APURAÇÃO DE FALTAS INJUSTIFICADAS </option>
                <option> APURAÇÃO DE IRREGULARIDADE PARA ASUNTOS DE REPERCUSSÃO PÚBLICA </option>
                <option> AQUISIÇÃO DE ÁREA PÚBLICA </option>
                <option> ÁREA DEMARCADA PARA IMPLANTAÇÃO DE INTERCEPTOR </option>
                <option> ARRECADAÇÃO DE IMÓVEIS </option>
                <option> ASSUNTOS FEDERATIVOS </option>
                <option> ASSUNTOS FUNCIONAIS DE SERVIDORES </option>
                <option> ASSUNTOS INTERNACIONAIS </option>
                <option> ATENDIMENTO A NOTIFICAÇÃO PRELIMINAR POSTURAS </option>
                <option> ATENDIMENTO A NOTIFICAÇÃO PRELIMINAR VIAS URBANAS </option>
                <option> ATENDIMENTO AO TRIBUNAL DE CONTAS DO ESTADO DE SÃO PAULO </option>
                <option> ATENDIMENTO DOMICILIAR </option>
                <option> ATESTADO DE CAPACIDADE TÉCNICA E SERVIÇOS EXECUTADOS </option>
                <option> ATESTADO DE SAÚDE OCUPACIONAL - ASO </option>
                <option> ATESTE DE CONTAS DE CONSUMO (ÁGUA, ENERGIA, TELEFONIA) </option>
                <option> ATESTO DE SERVIÇOS </option>
                <option> ATRIBUIÇÃO OU REVISÃO DE NUMERAÇÃO OFICIAL </option>
                <option> ATUALIZAÇÃO CADASTRAL DE SEPULTURA / NICHO </option>
                <option> ATUALIZAÇÃO DA CARTA DE SERVIÇOS - OUVIDORIA </option>
                <option> ATUALIZAÇÃO DE DADOS CADASTRAIS DE TITULARIDADE </option>
                <option> AUDITORIA CONFORME PROGRAMAÇÃO DO PLANO ANUAL DE AUDITORIA INTERNA </option>
                <option> AUDITORIA EM CONTRATOS DE ALUGUEL </option>
                <option> AUDITORIA EXTRAORDINÁRIA - CGM </option>
                <option> AUTO DE INFRAÇÃO AMBIENTAL </option>
                <option> AUTO DE INFRAÇÃO BANCA DE JORNAL/APREENSÃO DE EQUIPAMENTO </option>
                <option> AUTO DE INFRAÇÃO BANCA DE JORNAL/DIVERGÊNCIA DE RAMO </option>
                <option> AUTO DE INFRAÇÃO BANCA DE JORNAL/FALTA DE LICENÇA </option>
                <option> AUTO DE INFRAÇÃO BANCA DE JORNAL/PERTUBAÇÃO SONORA </option>
                <option> AUTO DE INFRAÇÃO COMÉRCIO AMBULANTE/APREENSÃO DE MERCADORIAS </option>
                <option> AUTO DE INFRAÇÃO COMÉRCIO AMBULANTE/EMPACHAMENTO DE VIA PÚLBLICA </option>
                <option> AUTO DE INFRAÇÃO COMÉRCIO AMBULANTE/EXCESSO METRAGEM </option>
                <option> AUTO DE INFRAÇÃO COMÉRCIO AMBULANTE/FALTA DA LICENÇA </option>
                <option> AUTO DE INFRAÇÃO COMÉRCIO AMBULANTE/PERTUBAÇÃO SONORA </option>
                <option> AUTO DE INFRAÇÃO CONCESSÃO DE DESCONTO </option>
                <option> AUTO DE INFRAÇÃO CONSTRUÇÃO DE MURO </option>
                <option> AUTO DE INFRAÇÃO DE EMPACHAMENTO COM RELAÇÃO ÀS ATIVIDADES ECONÔMICAS </option>
                <option> AUTO DE INFRAÇÃO DE SERVIÇOS FUNERÁRIOS </option>
                <option> AUTO DE INFRAÇÃO ESTABELECIMENTOS </option>
                <option> AUTO DE INFRAÇÃO FISCALIZAÇÃO DE OBRAS </option>
                <option> AUTO DE INFRAÇÃO FISCALIZAÇÃO DE SEGURANÇA DE EDIFICAÇÕES </option>
                <option> AUTO DE INFRAÇÃO LANÇAMENTO DE MULTA </option>
                <option> AUTO DE INFRAÇÃO LIMPEZA, MURO E PASSEIO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: DEFEITOS DECORRENTES DE FALHA DE MATERIAIS OU DE EXECUÇÃO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: DEIXAR DE APRESENTAR CADASTRO GEORREFERENCIADO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: DEIXAR DE CUMPRIR DIRETRIZES DA LEI 8.242/2024 </option>
                <option> AUTO DE INFRAÇÃO OBRAS: DEIXAR DE RECOMPOR OU REPARAR DANOS EM RAZÃO DA OBRA OU SERVIÇO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: DEIXAR DE RECOMPOR OU REPARAR NO PRAZO E ESPECIFICAÇÕES </option>
                <option> AUTO DE INFRAÇÃO OBRAS: EMBARAÇAR A FISCALIZAÇÃO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: EM DESACORDO COM A AUTORIZAÇÃO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: EQUIPAMENTO INATIVO, SOBRAS OU MATERIAIS EM LOGRADOURO PÚBLICO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: EQUIPAMENTOS EM MAU ESTADO DE CONSERVAÇÃO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: NÃO COMUNICAÇÃO DE INÍCIO DE OBRAS </option>
                <option> AUTO DE INFRAÇÃO OBRAS: NÃO MANTER AUTORIZAÇÃO NO LOCAL DA OBRA OU SERVIÇO </option>
                <option> AUTO DE INFRAÇÃO OBRAS: SEM AUTORIZAÇÃO PRÉVIA </option>
                <option> AUTO DE INFRAÇÃO PATOLOGIA DAS CONSTRUÇÕES </option>
                <option> AUTO DE INFRAÇÃO POÇO DE VISITA COM BASE COLAPSADA </option>
                <option> AUTO DE INFRAÇÃO POÇO DE VISITA COM TAMPA QUEBRADA </option>
                <option> AUTO DE INFRAÇÃO POÇO DE VISITA DESNIVELADO </option>
                <option> AUTO DE INFRAÇÃO POÇO DE VISITA SEM TAMPA </option>
                <option> AUTO DE INFRAÇÃO POR DESCARTE IRREGULAR DE RESÍDUOS </option>
                <option> AUTO DE INFRAÇÃO POR DESCUMPRIMENTO DE HORÁRIO DE TRANSPORTE </option>
                <option> AUTO DE INFRAÇÃO POR EXCEDER O HORÁRIO LICENCIADO </option>
                <option> AUTO DE INFRAÇÃO POR FALTA DE CADASTRO DE CATAÇÃO </option>
                <option> AUTO DE INFRAÇÃO POR FALTA DE CADASTRO DE TRANSPORTADOR </option>
                <option> AUTO DE INFRAÇÃO POR FALTA DE CONTRATO DE COLETA DE RESÍDUOS </option>
                <option> AUTO DE INFRAÇÃO POR FALTA DE CTR / MTR </option>
                <option> AUTO DE INFRAÇÃO POR FALTA DE PGRS </option>
                <option> AUTO DE INFRAÇÃO POR IRREGULARIDADE DE CAÇAMBA </option>
                <option> AUTO DE INFRAÇÃO POR NÃO ATENDIMENTO DE NOTIFICAÇÃO PRELIMINAR </option>
                <option> AUTO DE INFRAÇÃO POR OBSTRUÇÃO DE FISCALIZAÇÃO </option>
                <option> AUTO DE INFRAÇÃO POR PERTURBAÇÃO DO SOSSEGO PÚBLICO </option>
                <option> AUTO DE INFRAÇÃO POSTE DANIFICADO COM FERRAGEM EXPOSTA </option>
                <option> AUTO DE INFRAÇÃO POSTE DE MADEIRA </option>
                <option> AUTO DE INFRAÇÃO POSTE FORA DO ALINHAMENTO </option>
                <option> AUTO DE INFRAÇÃO POSTE INCLINADO/ RISCO QUEDA </option>
                <option> AUTO DE INFRAÇÃO POSTE INSTALADO NA VIA </option>
                <option> AUTO DE INFRAÇÃO POSTURAS: CANALIZAÇÃO </option>
                <option> AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DA SARJETA </option>
                <option> AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DE PASSAGEM DE ÁGUAS PLUVIAIS </option>
                <option> AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DE PASSAGEM DE SERVIDÃO </option>
                <option> AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DO PASSEIO PÚBLICO </option>
                <option> AUTO DE INFRAÇÃO POSTURAS: LIMPEZA, MURO E PASSEIO </option>
                <option> AUTO DE INFRAÇÃO PRORROGAÇÃO DE PRAZO PARA INTERPOSIÇÃO DE RECURSO </option>
                <option> AUTO DE INFRAÇÃO PUBLICIDADE </option>
                <option> AUTO DE INFRAÇÃO RECURSO </option>
                <option> AUTO DE INFRAÇÃO SUPRESSÃO ARBÓREA </option>
                <option> AUTO DE INFRAÇÃO TRAILER/APREENSÃO DE EQUIPAMENTO </option>
                <option> AUTO DE INFRAÇÃO TRAILER/DIVERGÊNCIA DE RAMO </option>
                <option> AUTO DE INFRAÇÃO TRAILER/EMPACHAMENTO DE VIA PUBLICA </option>
                <option> AUTO DE INFRAÇÃO TRAILER/FALTA DE LICENÇA </option>
                <option> AUTO DE INFRAÇÃO TRAILER/PERTUBAÇÃO SONORA </option>
                <option> AUTO DE INFRAÇÃO TRANSPORTE IRREGULAR DE RESÍDUOS </option>
                <option> AUTO DE INFRAÇÃO VEÍCULO MOTORIZADO/APREENSÃO DE EQUIPAMENTO </option>
                <option> AUTO DE INFRAÇÃO VEÍCULO MOTORIZADO/DIVERGÊNCIA DE RAMO </option>
                <option> AUTO DE INFRAÇÃO VEÍCULO MOTORIZADO/EMPACHAMENTO DE VIA PÚBLICA </option>
                <option> AUTO DE INFRAÇÃO VEÍCULO MOTORIZADO/FALTA DE LICENÇA </option>
                <option> AUTO DE INFRAÇÃO VEÍCULO MOTORIZADO/PERTUBAÇÃO SONORA </option>
                <option> AUTO DE INFRAÇÃO VIAS URBANAS: CABOS ROMPIDOS, SOLTOS, EMARANHADOS </option>
                <option> AUTO DE INTERDIÇÃO E FECHAMENTO </option>
                <option> AUTO DE MULTA - CANCELAMENTO </option>
                <option> AUTO DE MULTA OBRAS </option>
                <option> AUTÓGRAFO </option>
                <option> AUTORIZAÇÃO AMBIENTAL </option>
                <option> AUTORIZAÇÃO DE FORNECIMENTO </option>
                <option> AUTORIZAÇÃO/ LICENCIAMENTO / APOIO PARA REALIZAÇÃO DE EVENTOS </option>
                <option> AUTORIZAÇÃO PARA ABERTURA DE VIA PÚBLICA </option>
                <option> AUTORIZAÇÃO PARA EMPENHO - ENCERRAMENTO DO EXERCÍCIO </option>
                <option> AUTORIZAÇÃO PARA EMPREITEIROS TRABALHAR EM CEMITÉRIOS </option>
                <option> AUTORIZAÇÃO PARA UTILIZAÇÃO DE ESPAÇO EM VAREJÃO </option>
                <option> AUXÍLIO EMERGENCIAL </option>
                <option> AUXÍLIO MORADIA </option>
                <option> AVALIAÇÃO DE CONSTATAÇÃO DE RISCO </option>
                <option> AVALIAÇÃO DO PLANO PLURIANUAL - PPA </option>
                <option> AVALIAÇÃO EM ESTÁGIO PROBATÓRIO </option>
                <option> AVALIAÇÃO ESPECIAL DE DESEMPENHO </option>
                <option> AVERBAÇÃO DE TEMPO DE SERVIÇO DO VINCULO ANTERIOR </option>
                <option> AVERIGUAÇÃO EM UNIDADES MUNICIPAIS - CGM </option>
                <option> BAIXA DE DÉBITOS </option>
                <option> BAIXA DE EXECUÇÃO FISCAL </option>
                <option> BAIXA DE PAGAMENTO DUPLICADO MULTA DE TRÂNSITO </option>
                <option> BAIXA DE RECIBO </option>
                <option> BALANCETE DA CÂMARA MUNICIPAL </option>
                <option> BALANCETE DA CÂMARA MUNICIPAL DE GUARULHOS </option>
                <option> BALANCETE DA PMG </option>
                <option> BALANCETE DA PREFEITURA </option>
                <option> BALANCETE DA PROGUARU </option>
                <option> BALANCETE DO IPREF </option>
                <option> BALANÇO DE MEDICAMENTOS </option>
                <option> CADASTRAMENTO DE ÁREA TERRITORIAL DE IMÓVEIS ADQUIRIDOS POR AÇÃO JUDICIAL DE USUCAPIÃO </option>
                <option> CADASTRO CNES </option>
                <option> CADASTRO CONDUTOR DE TÁXI </option>
                <option> CADASTRO DE CATADOR DE MATERIAIS RECICLAVEIS </option>
                <option> CADASTRO DE CONDUMOTO </option>
                <option> CADASTRO DE EMPRESA / COOPERATIVA DE CATAÇÃO DE RESÍDUOS </option>
                <option> CADASTRO DE TRANSPORTADORES DE RESÍDUOS DA CONSTRUÇÃO CIVIL E VOLUMOSOS </option>
                <option> CADASTRO MONITOR ESCOLAR </option>
                <option> CADASTRO MOTORISTA COMPANHEIRO TÁXI </option>
                <option> CADASTRO TÉCNICO DE INFRAESTRUTURA REF. MAPEAMENTO DE INTERFERÊNCIAS </option>
                <option> CAMPANHAS E PROJETOS DE EDUCAÇÃO AMBIENTAL </option>
                <option> CANCELAMENO DE AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DA SARJETA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - ATIVIDADE IRREGULAR EM ÁREA PÚBLICA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - CABOS ROMPIDOS, EMARANHADOS, SOLTOS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - CLCB/AVCB </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - COMUNICAÇÃO INÍCIO DE OBRA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO DE EMPACHAMENTO COM RELAÇÃO ÀS ATIVIDADES ECONÔMICAS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - DEMOLIÇÃO IRREGULAR </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - DESCUMPRIMENTO AO AUTO DE INT. DE EDIFICAÇÕES/EQUIPAMENTOS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - DESLACRAÇÃO DE OBRA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - EMISSÃO E TRANSMISSÃO DE CALOR </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - EMPACHAMENTO DA CALÇADA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - FECHAMENTO DE VÃOS ILUMINANTES </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - FEIRA LIVRE </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - FISCALIZAÇÃO DE OBRAS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - FISCALIZAÇÃO DE SEGURANÇA DE EDIFICAÇÕES </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - INEXISTÊNCIA CERTIFICADO CONFORMIDADE </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - INEXISTÊNCIA DE ALVARÁ DE CONSTRUÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - INEXISTÊNCIA DE DOCUMENTAÇÃO NA OBRA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - INEXISTÊNCIA DE TELA E BANDEJA DE PROTEÇÃO NA OBRA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - MANUTENÇÃO DE VIAS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - MOVIMENTAÇÃO DE TERRA, CORTE E ATERRO TERRAPLENAGEM IRREGULAR </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - OBRA CONCLUÍDA SEM REGULARIZAÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - OBRA DE REFORMA IRREGULAR </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - OBRA EM DESACORDO COM PROJETO APROVADO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS:DEFEITOS DECORRENTES FALHA MATERIAIS OU EXECUÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: DEIXAR DE APRESENTAR CADASTRO GEORREFERENCIADO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: DEIXAR DE CUMPRIR DIRETRIZES DA LEI 8.242/2024 </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: DEIXAR DE RECOMPOR/REPARAR DANOS - OBRA OU SERVIÇO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: DEIXAR DE RECOMPOR/REPARAR NO PRAZO E ESPECIFICAÇÕES </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: EMBARAÇAR A FISCALIZAÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: EM DESACORDO COM A AUTORIZAÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: EQUIPAMENTOS EM MAU ESTADO DE CONSERVAÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: EQUIP. INATIVO/SOBRAS- MATERIAIS LOGRADOURO PÚBLICO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: NÃO COMUNICAÇÃO DE INÍCIO DE OBRAS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: NÃO MANTER AUTORIZAÇÃO NO LOCAL DA OBRA OU SERVIÇO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO OBRAS: SEM AUTORIZAÇÃO PRÉVIA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - OBSTRUÇÃO CALÇADA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - PANFLETAGEM </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - PATOLOGIA DAS CONSTRUÇÕES </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - PLACA DE IDENTIFICAÇÃO DA OBRA/ASSUNÇÃO RESPONS. TÉCNICA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POÇO DE VISITA COM BASE ACOPLADA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POÇO DE VISITA COM TAMPA QUEBRADA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POÇO DE VISITA DESNIVELADO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POÇO DE VISITA SEM TAMPA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POR EXCEDER HORÁRIO LICENCIADO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POR PERTURBAÇÃO DO SOSSEGO PÚBLICO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POSTE DANIFICADO COM FERRAGEM EXPOSTA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POSTE INCLINADO/ RISCO QUEDA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POSTE INSTALADO FORA DO ALINHAMENTO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - POSTE INSTALADO NA VIA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POSTURAS: CANALIZAÇÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DE PASSAGEM DE ÁGUAS PLUVIAIS </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DE PASSAGEM DE SERVIDÃO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POSTURAS: DESOBSTRUÇÃO DO PASSEIO PÚBLICO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO POSTURAS: LIMPEZA, MURO E PASSEIO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - PROPAGANDA IRREGULAR ÁREA PÚBLICA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO PUBLICIDADE </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - REMOÇÃO POSTE DE MADEIRA </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - RENOVAÇÃO LICENÇA BANCA DE JORNAL FORA DO PRAZO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - RENOVAÇÃO LICENÇA COMÉRCIO AMBULANTE FORA DO PRAZO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - RENOVAÇÃO LICENÇA FEIRA LIVRE FORA DO PRAZO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - RENOVAÇÃO LICENÇA FOOD TRUCK FORA DO PRAZO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - RENOVAÇÃO LICENÇA TRAILER FORA DO PRAZO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - RENOVAÇÃO LICENÇA VEÍCULO MOTORIZ. FORA DO PRAZO </option>
                <option> CANCELAMENTO DE AUTO DE INFRAÇÃO - VERIFICAÇÃO FUNC. DO SIST. DE SENSOR E DE VÁLV. DE BLOQUEIO </option>
                <option> CANCELAMENTO DÉBITO DÍVIDA ATIVA </option>
                <option> CANCELAMENTO DE CADASTRO DE ESTABELECIMENTO SOB VIGILÂNCIA SANITÁRIA- CEVS </option>
                <option> CANCELAMENTO DE CADASTRO FISCAL DE PUBLICIDADE EM VEÍCULOS AUTOMOTORES </option>
                <option> CANCELAMENTO DE DÉBITOS </option>
                <option> CANCELAMENTO DE EFEITO SUSPENSIVO </option>
                <option> CANCELAMENTO DE EXECUÇÃO FISCAL </option>
                <option> CANCELAMENTO DE HONORÁRIOS ADVOCATÍCIOS </option>
                <option> CANCELAMENTO DE IMPUGNAÇÃO </option>
                <option> CANCELAMENTO DE IPTU </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - BANCA DE JORNAL </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - COMÉRCIO AMBULANTE </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR DE EMPACHAMENTO COM RELAÇÃO ÀS ATIVIDADES ECONÔMICAS </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - FEIRA LIVRE </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR – FISCALIZAÇÃO DE OBRAS </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - FISCALIZAÇÃO DE SEGURANÇA DE EDIFICAÇÕES </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR LICENÇA DE FUNCIONAMENTO EM ÁREA PARTICULAR </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR NÃO ATENDIDA </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR NÃO ATENDIDA - INEXISTÊNCIA CERTIFICADO CONFORMIDADE </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR NÃO ATENDIDA - VISTORIA TÉCNICA </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE APRESENTAR CADASTRO GEORREFERENCIADO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE CUMPRIR DIRETRIZES DA LEI 8.242/2024 </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE RECOMPOR/REPARAR NO PRAZO/ESPECIFICAÇÕES </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: EMBARAÇAR A FISCALIZAÇÃO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: EM DESACORDO COM A AUTORIZAÇÃO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: EQUIPAMENTOS EM MAU ESTADO DE CONSERVAÇÃO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: NÃO COMUNICAÇÃO DE INÍCIO DE OBRAS </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: NÃO MANTER AUTORIZAÇÃO NO LOCAL DA OBRA/SERVIÇO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR OBRAS: SEM AUTORIZAÇÃO PRÉVIA </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR – PATOLOGIA DAS CONSTRUÇÕES </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR POR EXCEDER O HORÁRIO LICENCIADO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR POSTURAS </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR POSTURAS: CANALIZAÇÃO (QUANDO DADO O NÃO ATENDIMENTO) </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - PUBLICIDADE </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR (QUANDO DADO O NÃO ATENDIMENTO) </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - TRAILER </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR - VEÍCULO MOTORIZADO </option>
                <option> CANCELAMENTO DE NOTIFICAÇÃO PRELIMINAR VIAS URBANAS </option>
                <option> CANCELAMENTO DE NOTIF. PREL. OBRAS: DEFEITOS DECORRENTES DE FALHA DE MATERIAIS/EXECUÇÃO </option>
                <option> CANCELAMENTO DE NOTIF. PREL. OBRAS: DEIXAR DE RECOMPOR/REPARAR DANOS-RAZÃO DA OBRA/SERVIÇO </option>
                <option> CANCELAMENTO DE NOTIF. PREL. OBRAS: EQUIPAMENTO INATIVO/SOBRAS/MATERIAIS EM LOGRADOURO PÚBLICO </option>
                <option> CANCELAMENTO DE TRIBUTOS DECORRENTE DO ENCERRAMENTO DAS INSCRIÇÕES E/OU POR ERRO DE EMISSÃO </option>
                <option> CANCELAMENTO TRIBUTOS-ENCERRAMENTO INSCRIÇÕES E/OU ERRO DE EMISSÃO (EXECUTADOS/PROTESTADOS) </option>
                <option> CERTIDÃO DE ABERTURA DE VIA </option>
                <option> CERTIDÃO DE AVALIAÇÃO AMBIENTAL </option>
                <option> CERTIDÃO DE BREVE RELATO </option>
                <option> CERTIDÃO DE CADASTRAMENTO COM BENEFÍCIO </option>
                <option> CERTIDÃO DE CADASTRAMENTO DE DESDOBRO TRIBUTÁRIO&nbsp; </option>
                <option> CERTIDÃO DE CADASTRAMENTO DE ENGLOBAMENTO TRIBUTÁRIO&nbsp; </option>
                <option> CERTIDÃO DE CADASTRAMENTO DE INFRAESTRUTURA PÚBLICA (EQUIPAMENTOS URBANOS) </option>
                <option> CERTIDÃO DE CADASTRAMENTO DE INÍCIO DE LANÇAMENTO TERRITORIAL&nbsp; </option>
                <option> CERTIDÃO DE CADASTRAMENTO IMOBILIÁRIO&nbsp; </option>
                <option> CERTIDÃO DE CADASTRAMENTO IMOBILIÁRIO - DEMOLIÇÃO </option>
                <option> CERTIDÃO DE CADASTRAMENTO MEDIDAS E CONFRONTAÇÕES&nbsp; </option>
                <option> CERTIDÃO DE CADASTRAMENTO PREDIAL ÁREAS E DATAS </option>
                <option> CERTIDÃO DE DESAPROPRIAÇÃO </option>
                <option> CERTIDÃO DE DIREITO DE PREEMPÇÃO </option>
                <option> CERTIDÃO DE INEXISTÊNCIA DE CADASTRO IMOBILIÁRIO (NOME DE PROPRIETÁRIO/COMPROMISSÁRIO) </option>
                <option> CERTIDÃO DE INEXISTÊNCIA OU EXISTÊNCIA DE OFICIALIZAÇÃO DE NOMENCLATURA DE LOGRADOURO PÚBLICO </option>
                <option> CERTIDÃO DE INÍCIO E TÉRMINO DE ATIVIDADES </option>
                <option> CERTIDÃO DE INSCRIÇÃO OU DE NÃO INSCRIÇÃO MOBILIÁRIA </option>
                <option> CERTIDÃO DE LANÇAMENTO TRIBUTÁRIO (EXERCÍCIO DE 1996 AO ATUAL)&nbsp; </option>
                <option> CERTIDÃO DE LANÇAMENTO TRIBUTÁRIO (EXERCÍCIOS ANTERIORES A 1996 E PARA 1997)&nbsp; </option>
                <option> CERTIDÃO DE LEGALIDADE DO LOTEAMENTO </option>
                <option> CERTIDÃO DE NUMERAÇÃO&nbsp; </option>
                <option> CERTIDÃO DE PAGAMENTO TRIBUTOS MOBILIÁRIOS (PERÍODOS ANTERIORES AO EXERCÍCIO DE 2002) </option>
                <option> CERTIDÃO DE PERÍMETRO URBANO </option>
                <option> CERTIDÃO DE REGULARIDADE AMBIENTAL-CRA </option>
                <option> CERTIDÃO DE REGULARIDADE DA OBRA </option>
                <option> CERTIDÃO DE TRIBUTOS IMOBILIÁRIOS </option>
                <option> CERTIDÃO DE TRIBUTOS MOBILIÁRIOS </option>
                <option> CERTIDÃO DE USO DO SOLO </option>
                <option> CERTIDÃO DE VALORES PAGOS </option>
                <option> CERTIDÃO DE VALOR VENAL (EXERCÍCIO1996, 1998 AO ATUAL )&nbsp; </option>
                <option> CERTIDÃO DE VALOR VENAL (EXERCÍCIOS ANTERIORES A 1996 E 1997)&nbsp; </option>
                <option> CERTIDÃO DE ZONEAMENTO </option>
                <option> CERTIDÃO ICMS </option>
                <option> CERTIDÃO IPI </option>
                <option> CERTIDÃO IPVA </option>
                <option> CERTIDÃO NEGATIVA POR INEXISTÊNCIA DE CADASTRO MOBILIÁRIO </option>
                <option> CERTIDÃO TEMPO DE SERVIÇO </option>
                <option> CERTIDÕES PARA CONTAGEM DE PONTUAÇÃO (PH) </option>
                <option> CERTIDÕES PARA CONTAGEM DE TEMPO DE SERVIÇO </option>
                <option> CESSÃO DE SERVIDOR </option>
                <option> CESSÃO DE USO </option>
                <option> CHAMAMENTO PÚBLICO </option>
                <option> COBRANÇA DE ALUGUEL </option>
                <option> COMISSÃO MUNICIPAL DE ACESSO À INFORMAÇÃO - CGM </option>
                <option> COMISSÕES DA CMG </option>
                <option> COMPARATIVO DE CONSUMO DE COMBUSTÍVEL </option>
                <option> COMPENSAÇÃO DE VALORES </option>
                <option> COMPROMISSO AMBIENTAL – ÁREA DE PROTEÇÃO PERMANENTE </option>
                <option> COMUNICAÇÃO DE APOSENTADORIA CONCEDIDA PELO INSS E/OU OUTROS ÓRGÃOS DE PREVIDÊNCIA </option>
                <option> CONCESSÃO DE DESCONTO NO IPTU PARA PF/PJ QUE TRANSFERIREM VEÍCULO AUTOMOTOR À CIRETRAN/GUARULHOS </option>
                <option> CONCESSÃO DE DIREITOS E VANTAGENS </option>
                <option> CONCESSÃO DE ESPAÇO PÚBLICO </option>
                <option> CONCESSÃO DE SEPULTURA / NICHO </option>
                <option> CONCLUSÃO DE OBRAS E SERVIÇOS EM LOGRADOUROS PÚBLICOS </option>
                <option> CONFIRMATÓRIO DE NÃO INCIDÊNCIA DE APP </option>
                <option> CONSIGNAÇÃO DE PAGAMENTO </option>
                <option> CONSULTORIA JURÍDICA </option>
                <option> CONTINGENCIAMENTO DAS DESPESAS DOS ÓRGÃOS ORÇAMENTÁRIOS - DISPOSITIVO DECRETO DE EXECUÇÃO </option>
                <option> CONTRATAÇÃO E TÉRMINO DE CONTRATO POR PRAZO DETERMINADO </option>
                <option> CONTRATAÇÕES DE SERVIDORES </option>
                <option> CONVITE/AUDIÊNCIA PÚBLICA - CMG </option>
                <option> CONVITE/EVENTO - CMG </option>
                <option> CONVOCAÇÃO DE SECRETÁRIO MUNICIPAL OU DE OUTRA AUTORIDADE MUNICIPAL </option>
                <option> CONVOCAÇÃO PARA CAPACITAÇÃO </option>
                <option> CÓPIA DE AUTO DE INFRAÇÃO </option>
                <option> CÓPIA DE AUTO DE MULTA </option>
                <option> CÓPIA DE LICENÇA DE FUNCIONAMENTO DE ESTABELECIMENTO </option>
                <option> CÓPIA DE LICENÇA EM ÁREA PÚBLICA </option>
                <option> CÓPIA DE MAPA AEROFOTOGRAMÉTRICO </option>
                <option> CÓPIA DE NOTIFICAÇÃO PRELIMINAR </option>
                <option> CÓPIA DE NP/AI OU AM </option>
                <option> CÓPIA DE OCORRÊNCIA DA GUARDA </option>
                <option> CÓPIA DE OFÍCIO </option>
                <option> CÓPIA DE PLANTA DE LOTEAMENTO </option>
                <option> CÓPIA DE PROCESSO DIGITALIZADO </option>
                <option> CÓPIA DE PROCESSO ELETRÔNICO </option>
                <option> CÓPIA DE PROCESSO MICROFILMADO </option>
                <option> CÓPIA DE PRONTUÁRIO MÉDICO </option>
                <option> CÓPIA OU VISTA DE PROCESSO/DOCUMENTO - ART. 76 DA LOMG </option>
                <option> CREDENCIAMENTO DE CENTRO TÉCNICO PARA INSPEÇÃO VEICULAR </option>
                <option> CREDENCIAMENTO DE EMPRESA </option>
                <option> CREDENCIAMENTO DE VAGAS EM ESTACIONAMENTO PARA IDOSOS </option>
                <option> CREDENCIAMENTO DE VAGAS EM ESTACIONAMENTO PARA PESSOA COM DEFICIÊNCIA </option>
                <option> CREDENCIAMENTO DE VAGAS EM ZONA AZUL - VEÍCULO HÍBRIDO </option>
                <option> CREDENCIAMENTO PARA VAGAS EM ESTACIONAMENTO DE ZONA AZUL - FISCAL </option>
                <option> CREDENCIAMENTO PARA VAGAS EM ESTACIONAMENTO DE ZONA AZUL - VEÍCULO A SERVIÇO PÚBLICO </option>
                <option> CRIAÇÃO DE E-MAIL INSTITUCIONAL </option>
                <option> CRIAÇÃO DE GRUPO DE TRABALHO </option>
                <option> CUMPRIMENTO DE SENTENÇA </option>
                <option> DADOS AMBIENTAIS PARA PESQUISA ACADÊMICA </option>
                <option> DECLARAÇÃO DE ÁREA PASSÍVEL DE CDRU- CONCESSÃO DE DIREITO REAL DE USO </option>
                <option> DECLARAÇÃO DE HOMÔNIMO </option>
                <option> DECLARAÇÃO DE NÃO SIMILARIDADE DO UNIFORME </option>
                <option> DECLARAÇÃO DE UTILIZAÇÃO DE PRÓPRIOS MUNICIPAIS </option>
                <option> DECLARAÇÃO PARA RENOVAÇÃO DE TERMO DE ADITAMENTO </option>
                <option> DECLARAÇÃO PARA RENOVAÇÃO DO TERMO DE CONVÊNIO </option>
                <option> DECLARAÇÃO REFERENTE AO SAAE </option>
                <option> DECLARATÓRIA </option>
                <option> DECLARATÓRIA COM CUMPRIMENTO DE SENTENÇA </option>
                <option> DECLARATÓRIA COM REPETIÇÃO DE INDÉBITO </option>
                <option> DECRETO LEGISLATIVO </option>
                <option> DECRETO REGULAMENTADOR </option>
                <option> DEFINIÇÃO E ACOMPANHAMENTO DAS METAS BIMESTRAIS DE ARRECADAÇÃO </option>
                <option> DELEGA </option>
                <option> DENOMINAÇÃO DE LOGRADOURO PÚBLICO </option>
                <option> DENÚNCIA AMBIENTAL </option>
                <option> DENUNCIA DE CONSTRUÇÃO IRREGULAR EM ÁREA PÚBLICA </option>
                <option> DENÚNCIA DE IRREGULARIDADE </option>
                <option> DENÚNCIA DE IRREGULARIDADES - GCM </option>
                <option> DENÚNCIA DE LOTEAMENTO IRREGULAR DE ÁREA PARTICULAR </option>
                <option> DENÚNCIA DE OCUPAÇÃO IRREGULAR DE ÁREA PÚBLICA </option>
                <option> DEPÓSITO DE PLACA </option>
                <option> DEPÓSITO JUDICIAL </option>
                <option> DESAFETAÇÃO </option>
                <option> DESCONSIDERAÇÕES DE MARCAÇÕES DUPLICADAS </option>
                <option> DESIGNAÇÃO E SUSTAÇÃO DE FUNÇÕES DESIGNADAS </option>
                <option> DESINTERDIÇÃO - CEREST </option>
                <option> DESINTERDIÇÃO DE ESTABELECIMENTO </option>
                <option> DESINTERDIÇÃO DE IMÓVEL </option>
                <option> DESINTERDIÇÃO OU DESLACRAÇÃO DE EDIFICAÇÃO E/OU EQUIPAMENTO – SEGURANÇA DE EDIFICAÇÕES </option>
                <option> DESINTERDIÇÃO - SANITÁRIA </option>
                <option> DESLACRAÇÃO DE OBRA </option>
                <option> DESLACRAÇÃO DE OBRA / CONSTRUÇÃO - FISCALIZAÇÃO DE OBRAS </option>
                <option> DESOBSTRUÇÃO DE VIA </option>
                <option> DESPACHO DE RECURSO </option>
                <option> DESPEJO POR FALTA DE PAGAMENTO </option>
                <option> DESVINCULAÇÃO DE CNPJ DO CADASTRO IMOBILIÁRIO </option>
                <option> DESVINCULAÇÃO DE DÉBITOS </option>
                <option> DESVINCULAÇÃO DE MULTA DE TRÂNSITO </option>
                <option> DESVINCULO DE CNPJ DE INSCRIÇÃO CADASTRAL </option>
                <option> DESVINCULO DE CPF DA INSCRIÇÃO MOBILIÁRIA </option>
                <option> DESVÍNCULO DE CPF DE PROTESTOS </option>
                <option> DESVÍNCULO DE PROTESTO EXTRAJUDICIAL </option>
                <option> DESVÍNCULO DO CPF DE EXECUÇÃO FISCAL </option>
                <option> DETALHAMENTO DE DÉBITOS TRIBUTÁRIOS </option>
                <option> DEVOLUÇÃO DE IMPORTÂNCIA </option>
                <option> DEVOLUÇÃO DE IMPORTÂNCIA REF. TAXA AMBIENTAL </option>
                <option> DEVOLUÇÃO DE MERCADORIAS COMÉRCIO AMBULANTE </option>
                <option> DIRETRIZES URBANÍSTICAS </option>
                <option> DISK DENÚNCIA AMBIENTAL </option>
                <option> DISPENSA DE COMINAÇÕES LEGAIS </option>
                <option> DISPENSA DE ELABORAÇÃO DO PLANO DE GERENCIAMENTO DE RESÍDUOS SÓLIDOS </option>
                <option> DISPONIBILIZAÇÃO DE EQUIPAMENTO E OPERACIONAIS PARA DESFAZIMENTO </option>
                <option> DOAÇÃO DE ÁREA </option>
                <option> DOAÇÃO DE BRINDES </option>
                <option> DÚVIDAS SOBRE ESTÁGIOS </option>
                <option> EFEITO SUSPENSIVO </option>
                <option> ELABORAÇÃO DE LEI ORÇAMENTÁRIA ANUAL - LOA </option>
                <option> ELABORAÇÃO E REVISÃO PLANO PLURIANUAL-PPA E LEI DE DIRETRIZES ORÇAMENTÁRIAS-LDO </option>
                <option> ELOGIO VIA OUVIDORIA </option>
                <option> EMBARGOS À EXECUÇÃO </option>
                <option> EMBARGOS À EXECUÇÃO C/ CUMPRIMENTO DE SENTENÇA </option>
                <option> EMBARGOS À EXECUÇÃO FISCAL </option>
                <option> EMBARGOS DE TERCEIRO </option>
                <option> EMENDA ADITIVA </option>
                <option> EMENDA À LEI ORGÂNICA </option>
                <option> EMENDA MODIFICATIVA </option>
                <option> EMENDA SUPRESSIVA </option>
                <option> EMISSÃO DE PLANO DE ATENDIMENTO A EMERGÊNCIAS </option>
                <option> EMISSÃO DE TÍTULO DE CONCESSÃO DE DIREITO REAL DE USO </option>
                <option> EMPENHO </option>
                <option> EMPRÉSTIMO DE EQUIPAMENTO </option>
                <option> ENCAMINHAMENTO DE ATESTADOS MÉDICOS </option>
                <option> ENCAMINHAMENTO DE DOCUMENTAÇÃO PARA LOCAÇÃO SOCIAL </option>
                <option> ENCARGOS SOCIAIS - INSS E FGTS </option>
                <option> ENCARGOS SOCIAIS - PREVCOM </option>
                <option> ENCARGOS SOCIAIS - RPPS </option>
                <option> ENCARGOS SOCIAIS - SERVIDORES CEDIDOS DE OUTROS ORGÃOS </option>
                <option> ENQUADRAMENTO NO SIMPLES NACIONAL </option>
                <option> ESTIMATIVA DE RECEITA - PPA/LDO/LOA </option>
                <option> ESTUDO DE VIABILIDADE DE ALTERAÇÃO ITINERÁRIO E/OU HORÁRIOS LINHAS DO TRANSPORTE PÚBLICO </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE OBRAS DE CONTENÇÃO </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE PONTO DE ÔNIBUS </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE REDUTOR DE VELOCIDADE </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE SEMÁFORO </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE SINALIZAÇÃO DE PROIBIDO ESTACIONAR </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE SINALIZAÇÃO HORIZONTAL/VERTICAL </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE SINALIZAÇÃO VIÁRIA EM ESCOLAS </option>
                <option> ESTUDO DE VIABILIDADE DE IMPLANTAÇÃO DE VAGA DE ESTACIONAMENTO </option>
                <option> ESTUDO DE VIABILIDADE DE MUDANÇA DE SINALIZAÇÃO DE MÃO DE DIREÇÃO </option>
                <option> ESTUDO DE VIABILIDADE DE MUDANÇA/REMOÇÃO DE PONTO DE PARADA DE ÔNIBUS </option>
                <option> ESTUDO DE VIABILIDADE DE PROPOSITURA </option>
                <option> ESTUDO DE VIABILIDADE DE REALOCAÇÃO DE VAGAS DE ZONA AZUL </option>
                <option> ESTUDO DE VIABILIDADE PARA IMPLANTAÇÃO DE EQUIPAMENTOS PÚBLICOS </option>
                <option> ESTUDO DE VIABILIDADE PARA IMPLANTAÇÃO DE SERVIÇOS PÚBLICOS </option>
                <option> EVENTO CULTURAL </option>
                <option> EXCEÇÃO DE PRÉ-EXECUTIVIDADE </option>
                <option> EXCLUSÃO DE CADASTRO MOBILIÁRIO </option>
                <option> EXCLUSÃO DE TÍTULO DE CONCESSÃO DE DIREITO REAL DE USO </option>
                <option> EXONERAÇÃO/DISPENSAS A PEDIDO </option>
                <option> EXTENSÃO/ALTERAÇÃO DE CARGA HORÁRIA </option>
                <option> EXTENSÃO DO DESCONTO DE IPTU VERDE OU SEPARAÇÃO DE RESÍDUOS SÓLIDOS PARA OS CONDÔMINOS </option>
                <option> EXTINÇÃO DE DÉBITOS DE IPTU </option>
                <option> EXTRATO DE DÉBITOS CONSUBSTANCIADOS </option>
                <option> EXUMAÇÃO </option>
                <option> FALÊNCIA </option>
                <option> FALÊNCIA - ALIENAÇÃO JUDICIAL DE BENS </option>
                <option> FALÊNCIA - HABILITAÇÃO DE CRÉDITO </option>
                <option> FECHAMENTO DE VIA </option>
                <option> FÉRIAS COMPULSÓRIAS </option>
                <option> FISCALIZAÇÃO - CEREST </option>
                <option> FISCALIZAÇÃO DE EQUIPAMENTOS EM ÁREA PÚBLICA </option>
                <option> FISCALIZAÇÃO DE TRÂNSITO/TRANSPORTE </option>
                <option> FISCALIZAÇÃO EM ÁREA INVADIDA </option>
                <option> FISCALIZAÇÃO EM ESTABELECIMENTOS COMERCIAIS </option>
                <option> FISCALIZAÇÃO - SANITÁRIA </option>
                <option> FISCALIZAÇÃO - ZOONOSES </option>
                <option> FOLHA DE PAGAMENTO - 13º SALÁRIO </option>
                <option> FOLHA DE PAGAMENTO - ADIANTAMENTO SALARIAL </option>
                <option> FOLHA DE PAGAMENTO - AUTÔNOMOS </option>
                <option> FOLHA DE PAGAMENTO - BOLSISTAS </option>
                <option> FOLHA DE PAGAMENTO - CAT </option>
                <option> FOLHA DE PAGAMENTO - CONSELHEIROS TUTELARES </option>
                <option> FOLHA DE PAGAMENTO - FÉRIAS </option>
                <option> FOLHA DE PAGAMENTO - MUNICIPALIZADOS </option>
                <option> FOLHA DE PAGAMENTO - PENSÃO VITALÍCIA </option>
                <option> FOLHA DE PAGAMENTO - RESCISÃO CONTRATUAL </option>
                <option> FOLHA DE PAGAMENTO - SUPLEMENTARES </option>
                <option> FOLHA DE PAGAMENTO - VENCIMENTOS </option>
                <option> FORMULÁRIO DE INSALUBRIDADE E PERICULOSIDADE - FIP </option>
                <option> FORNECIMENTO DE KIT LANCHE REF. ATLETAS </option>
                <option> FORNECIMENTO DE MATERIAIS ESPORTIVOS </option>
                <option> FORNECIMENTO DE MATERIAIS REF. REFORMA E CONSTRUÇÃO </option>
                <option> FORNECIMENTO DE MEDICAMENTOS </option>
                <option> FUSÃO </option>
                <option> GESTÃO DE MATERIAIS </option>
                <option> GESTÃO DE PROCESSO INTERNO </option>
                <option> GESTÃO DE USUÁRIO SEI: CONCESSÃO E CANCELAMENTO DE ACESSO </option>
                <option> GESTÃO ORÇAMENTÁRIA E FINANCEIRA </option>
                <option> GESTOR DE FROTA - ATUALIZAÇÃO DOS VEÍCULOS E RESPONSÁVEIS DA FROTA </option>
                <option> HABILITAÇÃO DE CRÉDITO </option>
                <option> HISTÓRICO DE CHAMADAS RECEBIDAS </option>
                <option> HORÁRIO DE ESTUDANTE </option>
                <option> HORÁRIO MÓVEL </option>
                <option> ILUMINAÇÃO PÚBLICA </option>
                <option> IMAGENS DE CÂMERAS DE MONITORAMENTO </option>
                <option> IMPLANTAÇÃO DE ACESSO ATRAVÉS DE VIADUTO </option>
                <option> IMPLANTAÇÃO DE BASE DE MONITORAMENTO </option>
                <option> IMPLANTAÇÃO DE CENTRO INTEGRADO DE CIDADANIA </option>
                <option> IMPLANTAÇÃO DE CRAS </option>
                <option> IMPLANTAÇÃO DE PARQUE EMPRESARIAL </option>
                <option> IMPLANTAÇÃO DE PISO </option>
                <option> IMPLANTAÇÃO DE PISTA DE CAMINHADA </option>
                <option> IMPLANTAÇÃO DE PLACA REF. PROIBIDO JOGAR LIXO </option>
                <option> IMPLANTAÇÃO DE PLACAS EM ÁRVORES </option>
                <option> IMPLANTAÇÃO DE PRAÇAS </option>
                <option> IMPLANTAÇÃO DE PROGRAMA DE SANEAMENTO BÁSICO </option>
                <option> IMPLANTAÇÃO DE PRÓPRIOS CULTURAIS </option>
                <option> IMPLANTAÇÃO DE PRÓPRIOS MUNICIPAIS </option>
                <option> IMPLANTAÇÃO DE REDE DE DISTRIBUIÇÃO DE GÁS NATURAL </option>
                <option> IMPLANTAÇÃO DE SISTEMAS OU INFRAESTRUTURAS DE SANEAMENTO BÁSICO </option>
                <option> IMPLANTAÇÃO DE TOTEN DE MONITORAMENTO </option>
                <option> IMPLANTAÇÃO DE UNIVERSIDADE PÚBLICA </option>
                <option> IMPLANTAÇÃO DE VIELA </option>
                <option> IMPLANTAÇÃO/ MANUTENÇÃO CALÇADAS E PASSEIOS PÚBLICOS </option>
                <option> IMPLANTAÇÃO NA GRADE CURRICULAR DA DEFESA CIVIL NAS ESCOLAS </option>
                <option> IMPUGNAÇÃO AO TERMO DE EXCLUSÃO DO SIMPLES NACIONAL </option>
                <option> IMPUGNAÇÃO AO TERMO DE INDEFERIMENTO DA OPÇÃO PELO SIMPLES NACIONAL </option>
                <option> IMPUGNAÇÃO DE CRÉDITO </option>
                <option> IMPUGNAÇÃO DE CRÉDITO C/ CUMPRIMENTO DE SENTENÇA </option>
                <option> IMPUGNAÇÃO DE IPTU </option>
                <option> IMUNIDADE TRIBUTÁRIA DE ISSQN </option>
                <option> IMUNIDADE TRIBUTÁRIA DO IPTU </option>
                <option> IMUNIDADE TRIBUTÁRIA DO ISSQN E IPTU </option>
                <option> INCENTIVOS FISCAIS ART. 19 LEI 7306/2014 (AMPLIAÇÃO PROPORCIONAL) </option>
                <option> INCENTIVOS FISCAIS IPTU (AMPLIAÇÃO) </option>
                <option> INCENTIVOS FISCAIS IPTU (INSTALAÇÃO) </option>
                <option> INCENTIVOS FISCAIS ISS/CC (AMPLIAÇÃO) </option>
                <option> INCENTIVOS FISCAIS ISS/CC (INSTALAÇÃO) </option>
                <option> INCLUSÃO DE DOCUMENTAÇÃO E INFORMAÇÃO PARA ELABORAÇÃO DE PPP </option>
                <option> INCLUSÃO EM DÍVIDA ATIVA </option>
                <option> INCLUSÃO NO CADASTRO DE AUXÍLIO MORADIA </option>
                <option> INCLUSÃO REF. CONCESSÃO DE SEPULTURA </option>
                <option> INCORPORAÇÃO E TOMBAMENTO DE BENS PERMANENTES </option>
                <option> INDENIZAÇÃO POR DANO MORAL </option>
                <option> INDICAÇÃO DE TITULAR/SUPLENTE </option>
                <option> INDICAÇÃO/ VEREADOR </option>
                <option> INDIVIDUALIZAÇÃO DE DÉBITO </option>
                <option> INFORMAÇÃO VIA OUVIDORIA </option>
                <option> INFORMAÇÕES CADASTRAIS DE IPTU </option>
                <option> INFORMAÇÕES CADASTRAIS REFERENTES À IMÓVEL </option>
                <option> INFORMAÇÕES DO PROGRAMA DE LOCAÇÃO SOCIAL </option>
                <option> INFORMATIVO CIRCULAR </option>
                <option> INOVA GESTÃO - TRANSFORMAÇÃO DIGITAL </option>
                <option> INSCRIÇÃO DO CADASTRO FISCAL MOBILIÁRIO </option>
                <option> INSCRIÇÃO PARA COMERCIO AMBULANTE </option>
                <option> INSCRIÇÃO PARA PARTICIPAÇÃO EM EDITAL DE CHAMAMENTO PÚBLICO </option>
                <option> INSCRIÇÃO PARA PONTA DE FEIRA </option>
                <option> INSPEÇÃO PARA IDENTIFICAÇÃO DE ANIMAIS PEÇONHENTOS </option>
                <option> INSTALAÇÃO DE LIXEIRA </option>
                <option> INSTALAÇÃO DE PLACAS DE COMUNICAÇÃO </option>
                <option> INSTAURAÇÃO DE PROCEDIMENTO DE RESCISÃO DO CONTRATO DE CONCESSÃO </option>
                <option> INSTAURAR PROCEDIMENTO DE TOMADA DE CONTAS ESPECIAL </option>
                <option> INTERVENÇÃO EM VIA REF. REDE CABEAMENTO AÉREO </option>
                <option> INTERVENÇÃO EM VIA REF. REDE CABEAMENTO SUBTERRÂNEO </option>
                <option> INTIMAÇÃO FISCAL CANCELAMENTO </option>
                <option> INTIMAÇÃO FISCAL E AUTO DE MULTA/INFRAÇÃO CANCELAMENTO </option>
                <option> INTIMAÇÃO FISCAL REVISÃO </option>
                <option> INTIMAÇÃO FISCAL SOLICITAÇÃO DE CÓPIAS </option>
                <option> INVASÃO DE ÁREA PÚBLICA </option>
                <option> INVENTÁRIO E PARTILHA </option>
                <option> ISENÇÃO DE IPI PARA TÁXI </option>
                <option> ISENÇÃO DE IPTU </option>
                <option> ISENÇÃO DE IPTU PARA APOSENTADOS E PENSIONISTAS </option>
                <option> ISENÇÃO DE IPTU PARA BPC/LOAS </option>
                <option> ISENÇÃO DE ISSQN </option>
                <option> ISENÇÃO DE ISSQN DA CONSTRUÇÃO CIVIL </option>
                <option> ISENÇÃO DE ISSQN DA CONSTRUÇÃO CIVIL PARA TEMPLOS RELIGIOSOS </option>
                <option> ITBI - ADJUDICAÇÃO </option>
                <option> ITBI - ARREMATAÇÃO </option>
                <option> ITBI - CÁLCULO </option>
                <option> ITBI - CANCELAMENTO DE GUIA GERADA EM DUPLICIDADE </option>
                <option> ITBI - CISÃO OU FUSÃO (NÃO INCIDÊNCIA TRIBUTÁRIA) </option>
                <option> ITBI - IMUNIDADE TRIBUTÁRIA </option>
                <option> JUSTIFICATIVA DE PONTO </option>
                <option> LANÇAMENTO DE MULTA REF. APREENSÃO DE VEÍCULO </option>
                <option> LAUDO TÉCNICO DE AVALIAÇÃO (LTA) </option>
                <option> LEVANTAMENTO DE DÉBITOS REF. SAAE </option>
                <option> LEVANTAMENTO PLANIALTIMÉTRICO </option>
                <option> LEVANTAMENTO TOPOGRÁFICO </option>
                <option> LEVANTE DO EMBARGO DE OBRA </option>
                <option> LIBERAÇÃO DE OPERAÇÃO DE VEÍCULO </option>
                <option> LIBERAÇÃO DE REGISTRO DE PONTO </option>
                <option> LIBERAÇÃO DE RESERVAS DE INVESTIMENTO </option>
                <option> LIBERAÇÃO DE VALORES CONTINGENCIADOS </option>
                <option> LIBERAÇÃO DE VEÍCULO APREENDIDO </option>
                <option> LIBERAÇÃO DO VEÍCULO REF. APREENSÃO POR INFRAÇÃO </option>
                <option> LICENÇA DE CONFORMIDADE DE EQUIPAMENTOS FIXOS </option>
                <option> LICENÇA DE FUNCIONAMENTO - ALTO RISCO/RENOVAÇÃO </option>
                <option> LICENÇA DE FUNCIONAMENTO - ASSOCIAÇÕES </option>
                <option> LICENÇA DE FUNCIONAMENTO - AUTÔNOMO </option>
                <option> LICENÇA DE FUNCIONAMENTO - BANCA DE CONVENIÊNCIA EM ÁREA PÚBLICA </option>
                <option> LICENÇA DE FUNCIONAMENTO - EQUIPAMENTOS TRANSITÓRIOS </option>
                <option> LICENÇA DE FUNCIONAMENTO - FEIRA LIVRE/RENOVAÇÃO </option>
                <option> LICENÇA DE FUNCIONAMENTO - HORÁRIO ESPECIAL </option>
                <option> LICENÇA DE FUNCIONAMENTO - HORÁRIO ESPECIAL - MEI </option>
                <option> LICENÇA DE FUNCIONAMENTO - ÓRGÃOS PÚBLICOS </option>
                <option> LICENÇA DE FUNCIONAMENTO - PROVISÓRIA </option>
                <option> LICENÇA DE FUNCIONAMENTO - VEÍCULO APROPRIADO EM ÁREA PÚBLICA </option>
                <option> LICENÇA PARA INSTALAÇÃO DE ANÚNCIOS PUBLICITÁRIOS </option>
                <option> LICENCIAMENTO AMBIENTAL </option>
                <option> LICENCIAMENTO DE EVENTO </option>
                <option> LICENCIAMENTO DE EVENTO EM ÁREA PÚBLICA </option>
                <option> LIQUIDAÇÃO </option>
                <option> LIVRO DE REGISTRO INFORMATIZADO - SANITÁRIO </option>
                <option> LOTAÇÃO, EXERCÍCIO E PERMUTA </option>
                <option> MANDADO DE CITAÇÃO </option>
                <option> MANDADO DE SEGURANÇA </option>
                <option> MANDADO DE SEGURANÇA C/ CUMPRIMENTO DE SENTENÇA </option>
                <option> MANDADO DE SEGURANÇA COM PEDIDO DE LIMINAR </option>
                <option> MANIFESTAÇÃO TÉCNICA AMBIENTAL </option>
                <option> MANIFESTAÇÃO TÉCNICA STMU </option>
                <option> MANUTENÇÃO CORRETIVA REF. EQUIPAMENTOS ELETRÔNICOS </option>
                <option> MANUTENÇÃO DE GUARD-RAIL (DEFENSA METÁLICA) </option>
                <option> MANUTENÇÃO DE INCENTIVOS FISCAIS </option>
                <option> MANUTENÇÃO DE SINALIZAÇÃO VERTICAL E HORIZONTAL DE TRÂNSITO/TRANSPORTES </option>
                <option> MANUTENÇÃO DE SISTEMA DE SANEAMENTO BÁSICO </option>
                <option> MANUTENÇÃO E CONSERVAÇÃO DE PRÓPRIOS DA SECRETARIA DA SAÚDE </option>
                <option> MANUTENÇÃO E CONSERVAÇÃO DE PRÓPRIOS MUNICIPAIS </option>
                <option> MAPA DO MUNICÍPIO </option>
                <option> MATÉRIA ORÇAMENTÁRIA </option>
                <option> MEDIDA CAUTELAR </option>
                <option> MEMORANDO DE LICENÇA PRÊMIO FORA DE PRAZO </option>
                <option> MEMÓRIA DE CÁLCULO </option>
                <option> MOÇÃO </option>
                <option> MONITORAMENTO - CGM </option>
                <option> MONITORAMENTO DA SF SOBRE INSTRUMENTOS FIRMADOS COM ÓRGÃOS EXTERNOS </option>
                <option> MUDANÇA DE LOCAL DE COMERCIALIZAÇÃO </option>
                <option> NOTIFICAÇÃO AO FORNECEDOR </option>
                <option> NOTIFICAÇÃO DE OCUPAÇÃO IRREGULAR EM ÁREA PÚBLICA DE APP/APA </option>
                <option> NOTIFICAÇÃO PRELIMINAR ACOMPANHAMENTO </option>
                <option> NOTIFICAÇÃO PRELIMINAR AMBIENTAL </option>
                <option> NOTIFICAÇÃO PRELIMINAR ÁREA DE PROTEÇÃO PERMANENTE </option>
                <option> NOTIFICAÇÃO PRELIMINAR CEREST </option>
                <option> NOTIFICAÇÃO PRELIMINAR – CONCESSIONÁRIAS – POSTE DE MADEIRA </option>
                <option> NOTIFICAÇÃO PRELIMINAR DEFESA CIVIL </option>
                <option> NOTIFICAÇÃO PRELIMINAR DESABAMENTO </option>
                <option> NOTIFICAÇÃO PRELIMINAR DE SERVIÇOS FUNERÁRIOS </option>
                <option> NOTIFICAÇÃO PRELIMINAR ENCAMINHAMENTO DE DOCUMENTOS </option>
                <option> NOTIFICAÇÃO PRELIMINAR ESCLARECIMENTOS </option>
                <option> NOTIFICAÇÃO PRELIMINAR EXTRAJUDICIAL </option>
                <option> NOTIFICAÇÃO PRELIMINAR FEIRA LIVRE/DIVERGÊNCIA DE RAMO </option>
                <option> NOTIFICAÇÃO PRELIMINAR FEIRA LIVRE/FALTA DA LICENÇA </option>
                <option> NOTIFICAÇÃO PRELIMINAR – FISCALIZAÇÃO DE OBRAS </option>
                <option> NOTIFICAÇÃO PRELIMINAR – FISCALIZAÇÃO DE SEGURANÇA DE EDIFICAÇÕES </option>
                <option> NOTIFICAÇÃO PRELIMINAR INFORMA ATENDIMENTO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: DEFEITOS DECORRENTES DE FALHA DE MATERIAIS OU DE EXECUÇÃO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE APRESENTAR CADASTRO GEORREFERENCIADO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE CUMPRIR DIRETRIZES DA LEI 8.242/2024 </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE RECOMPOR OU REPARAR DANOS EM RAZÃO DA OBRA OU SERVIÇO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: DEIXAR DE RECOMPOR OU REPARAR NO PRAZO E ESPECIFICAÇÕES </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: EMBARAÇAR A FISCALIZAÇÃO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: EM DESACORDO COM A AUTORIZAÇÃO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: EQUIPAMENTO INATIVO, SOBRAS OU MATERIAIS EM LOGRADOURO PÚBLICO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: EQUIPAMENTOS EM MAU ESTADO DE CONSERVAÇÃO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: NÃO COMUNICAÇÃO DE INÍCIO DE OBRAS </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: NÃO MANTER AUTORIZAÇÃO NO LOCAL DA OBRA OU SERVIÇO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OBRAS: SEM AUTORIZAÇÃO PRÉVIA </option>
                <option> NOTIFICAÇÃO PRELIMINAR OCORRÊNCIA DE DESLIZAMENTO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OCORRÊNCIA DE INCÊNDIO </option>
                <option> NOTIFICAÇÃO PRELIMINAR OCORRÊNCIA DE QUEDA DE ÁRVORE </option>
                <option> NOTIFICAÇÃO PRELIMINAR PARA COMPROVAÇÃO DE DESTINAÇÃO DE RESÍDUOS AMBIENTALMENTE ADEQUADA </option>
                <option> NOTIFICAÇÃO PRELIMINAR – PATOLOGIA DAS CONSTRUÇÕES </option>
                <option> NOTIFICAÇÃO PRELIMINAR POR EXCEDER O HORÁRIO LICENCIADO </option>
                <option> NOTIFICAÇÃO PRELIMINAR POR FALTA DE PGRS </option>
                <option> NOTIFICAÇÃO PRELIMINAR POSTURAS: CANALIZAÇÃO </option>
                <option> NOTIFICAÇÃO PRELIMINAR POSTURAS: DESOBSTRUÇÃO DA SARJETA </option>
                <option> NOTIFICAÇÃO PRELIMINAR POSTURAS: DESOBSTRUÇÃO DE PASSAGEM DE ÁGUAS PLUVIAIS </option>
                <option> NOTIFICAÇÃO PRELIMINAR POSTURAS: DESOBSTRUÇÃO DE PASSAGEM DE SERVIDÃO </option>
                <option> NOTIFICAÇÃO PRELIMINAR POSTURAS: DESOBSTRUÇÃO DO PASSEIO PÚBLICO </option>
                <option> NOTIFICAÇÃO PRELIMINAR POSTURAS: LIMPEZA, MURO E PASSEIO </option>
                <option> NOTIFICAÇÃO PRELIMINAR PRORROGAÇÃO DE PRAZO </option>
                <option> NOTIFICAÇÃO PRELIMINAR SANITÁRIA </option>
                <option> NOTIFICAÇÃO PRELIMINAR SUPRESSÃO INDIVIDUO ARBÓREO </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: CABOS ROMPIDOS, SOLTOS, EMARANHADOS </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POÇO DE VISITA COM BASE COLAPSADA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POÇO DE VISITA COM TAMPA QUEBRADA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POÇO DE VISITA DESNIVELADO </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POÇO DE VISITA SEM TAMPA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POSTE DANIFICADO COM FERRAGEM EXPOSTA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POSTE FORA DO ALINHAMENTO </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POSTE INCLINADO /RISCO DE QUEDA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POSTE INSTALADO NA VIA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VIAS URBANAS: POSTES DE MADEIRA </option>
                <option> NOTIFICAÇÃO PRELIMINAR VISTORIA TÉCNICA VIÁRIO </option>
                <option> NOTIFICAÇÃO PRELIMINAR ZOONOSES </option>
                <option> OBRIGAÇÃO DE FAZER COM DANOS MORAIS </option>
                <option> OBTENÇÃO DE CADASTRO DE CONDUTOR </option>
                <option> OBTENÇÃO DE CADASTRO DE MONITOR </option>
                <option> OCUPAÇÃO IRREGULAR DE ÁREA PÚBLICA </option>
                <option> OCUPAÇÃO IRREGULAR DE PASSEIO PÚBLICO </option>
                <option> OFICIALIZAÇÃO DE LOGRADOURO </option>
                <option> OFÍCIO ADMINISTRATIVO AO EXECUTIVO </option>
                <option> OFÍCIO ADMINISTRATIVO DO EXECUTIVO </option>
                <option> OFÍCIO DE COMISSÃO AO EXECUTIVO </option>
                <option> OFÍCIO DE GABINETE AO EXECUTIVO </option>
                <option> OFÍCIO LEGISLATIVO AO EXECUTIVO </option>
                <option> OFÍCIO LEGISLATIVO DO EXECUTIVO </option>
                <option> OPÇÃO AO SIMPLES NACIONAL – REGULARIZAÇÃO DE PENDÊNCIAS </option>
                <option> ORDINÁRIA </option>
                <option> ORIENTAÇÃO TÉCNICA - CGM </option>
                <option> PAGAMENTO DE HONORÁRIOS DA PROCURADORIA GERAL DO MUNICÍPIO DE GUARULHOS </option>
                <option> PAGAMENTO DE HORAS EXTRAS </option>
                <option> PARCELAMENTO DE DÉBITOS </option>
                <option> PARECER FAZENDO CONSTAR MANIFESTAÇÃO NOS TERMOS DA RESOLUÇÃO CONAMA 237/97 </option>
                <option> PARECER JUNTO AO CONSELHO DO PATRIMÔNIO HISTÓRICO </option>
                <option> PARECER PRÉVIO REF. INSTALAÇÃO DE TORRE DE TRANSMISSÃO </option>
                <option> PAVIMENTAÇÃO ASFÁLTICA </option>
                <option> PAVIMENTAÇÃO COM INTERTRAVADOS EM SISTEMA DE MUTIRÃO </option>
                <option> PEDIDO DE CERTIDÕES DIVERSAS </option>
                <option> PERFIS AGENTES SOLICITANTES / ORÇAMENTÁRIOS SIOP/SISA </option>
                <option> PERMISSÃO DE INTERVENÇÃO EM ESPAÇO PÚBLICO REF. PRAÇAS E PARQUES </option>
                <option> PERMISSÃO DE REGISTRO DE PONTO EM MAIS DE UM LOCAL DE TRABALHO </option>
                <option> PERMISSÃO DE USO </option>
                <option> PERMISSÃO DE USO DE LOGRADOUROS PÚBLICOS P/ IMPLANTAÇÃO DE INFRAESTRUTURA </option>
                <option> PGRSCC PLANO DE GERENCIAMENTO DE RESÍDUOS DA CONSTRUÇÃO CIVIL E VOLUMOSOS </option>
                <option> PGRS PLANO DE GERENCIAMENTO DE RESÍDUOS </option>
                <option> PLACA DE DENOMINAÇÃO DE LOGRADOURO </option>
                <option> PLANO DE TRABALHO E PLANO ANUAL DE AUDITORIA INTERNA (PAAI) - CGM </option>
                <option> PODA DE ÁRVORES PARA ÓRGÃOS PÚBLICOS </option>
                <option> POLO PASSIVO </option>
                <option> PRECATÓRIOS </option>
                <option> PRESTAÇÃO DE CONTAS ANUAL </option>
                <option> PRESTAÇÃO DE CONTAS DE CONVÊNIOS CONGÊNERES </option>
                <option> PRESTAÇÃO DE CONTAS DE CONVÊNIOS ESTADUAIS </option>
                <option> PRESTAÇÃO DE CONTAS DE CONVÊNIOS FEDERAIS </option>
                <option> PRESTAÇÃO DE CONTAS DE CONVÊNIOS REPASSES </option>
                <option> PRESTAÇÃO DE CONTAS DE CONVÊNIOS SUBVENÇÕES </option>
                <option> PRESTAÇÃO DE CONTAS - SDAS - OSCs </option>
                <option> PROCEDIMENTO ADMINISTRATIVO INTERNO </option>
                <option> PROCEDIMENTOS ADMINISTRATIVOS DE NATUREZA INDIVIDUAL - (MP) </option>
                <option> PROCEDIMENTOS DE NATUREZA CRIMINAL, CONSUMIDOR, DIFUSOS, ELEITORAL E FISCALIZAÇÃO (MP) </option>
                <option> PROCESSO ADMINISTRATIVO DISCIPLINAR RITO ORDINÁRIO </option>
                <option> PROCESSO ADMINISTRATIVO DISCIPLINAR RITO SUMÁRIO </option>
                <option> PROCESSO DE MULTA POR INFRAÇÃO DE TRÂNSITO </option>
                <option> PRODUÇÃO DE INFORMAÇÃO PARA AVERIGUAÇÃO DE CONDUTAS - CGM </option>
                <option> PROGRAMAÇÃO DE DUODÉCIMOS </option>
                <option> PROGRAMAÇÃO FINANCEIRA - FLUXO DE CAIXA </option>
                <option> PROGRAMA #PARTIU360 - SOLICITAÇÃO DE AGENDAMENTO DE TRANSPORTE (ÔNIBUS) </option>
                <option> PROGRAMA #PARTIU360 - SOLICITAÇÃO DE KITS LANCHE </option>
                <option> PROJETO DE ALINHAMENTO DE VIAS </option>
                <option> PROJETO DE EMENDA À LEI ORGÂNICA </option>
                <option> PROJETO DE LEI </option>
                <option> PROJETO DE LEI DE INICIATIVA DO LEGISLATIVO </option>
                <option> PROJETO DE RECUPERAÇÃO AMBIENTAL </option>
                <option> PROJETOS AMBIENTAIS </option>
                <option> PROPOSTA DE LOCAÇÃO DE IMÓVEL </option>
                <option> PRORROGAÇÃO DE BENEFÍCIO </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR - BANCA DE JORNAL </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR - COMÉRCIO AMBULANTE </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR DE EMPACHAMENTO C REL. ÀS ATIVIDADES ECONÔMICAS </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR - FEIRA LIVRE </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR - FISCALIZAÇÃO DE OBRAS </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR - FISCALIZAÇÃO DE SEGURANÇA DE EDIFICAÇÕES </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR LICENÇA DE FUNCIONAMENTO EM ÁREA PARTICULAR </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR – PATOLOGIA DAS CONSTRUÇÕES </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR POR EXCEDER O HORÁRIO LICENCIADO </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR POSTURAS </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR PUBLICIDADE </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR - TRAILER </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR VEÍCULO MOTORIZADO </option>
                <option> PRORROGAÇÃO DE PRAZO NOTIFICAÇÃO PRELIMINAR VIAS URBANAS </option>
                <option> PRORROGAÇÃO DE PRAZO PARA LICENCIAMENTO </option>
                <option> PRORROGAÇÃO PRAZO NOTIFICAÇÃO PRELIMINAR OBRAS: EMBARAÇAR A FISCALIZAÇÃO </option>
                <option> PRORROGAÇÃO PRAZO NOTIFICAÇÃO PRELIMINAR OBRAS: EM DESACORDO COM A AUTORIZAÇÃO </option>
                <option> PRORROGAÇÃO PRAZO NOTIFICAÇÃO PRELIMINAR OBRAS: SEM AUTORIZAÇÃO PRÉVIA </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: DEFEITOS DECORRENTES DE FALHA DE MATERIAIS/EXECUÇÃO </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: DEIXAR DE APRESENTAR CADASTRO GEORREFERENCIADO </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: DEIXAR DE CUMPRIR DIRETRIZES DA LEI 8.242/2024 </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: DEIXAR DE RECOMPOR/REPARAR DANOS- RAZÃO DA OBRA/SERVIÇO </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: DEIXAR DE RECOMPOR/REPARAR NO PRAZO E ESPECIFICAÇÕES </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: EQUIPAMENTO INATIVO/SOBRAS/MATERIAIS LOGRADOURO PÚBLICO </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: EQUIPAMENTOS EM MAU ESTADO DE CONSERVAÇÃO </option>
                <option> PRORROGAÇÃO PRAZO NOTIF. PREL. OBRAS: NÃO MANTER AUTORIZAÇÃO NO LOCAL DA OBRA OU SERVIÇO </option>
                <option> PROVIDÊNCIAS ACOMPANHAMENTO DE DESCARTE </option>
                <option> PROVIDÊNCIAS ACOMPANHAMENTO DE LEILÃO </option>
                <option> PROVIDÊNCIAS BAIXA POR DETERMINAÇÃO JUDICIAL </option>
                <option> PROVIDÊNCIAS CRIAÇÃO DE CARGOS </option>
                <option> PROVIDÊNCIAS DE CELEBRAÇÃO DO TERMO DE COLABORAÇÃO </option>
                <option> PROVIDÊNCIAS DE REVITALIZAÇÃO DE ÁREA </option>
                <option> PROVIDÊNCIAS DESBLOQUEIO DE CONTA BANCÁRIA </option>
                <option> PROVIDÊNCIAS PARA APROPRIAÇÃO DE ÁREA, GUARDA, MANUTENÇÃO E ZELO </option>
                <option> PROVIDÊNCIAS PARA DESASSOREAMENTO DE CÓRREGO </option>
                <option> PROVIDÊNCIAS PARA EVENTO AMBIENTAL </option>
                <option> PROVIDÊNCIAS PARA INDENIZAÇÕES </option>
                <option> PROVIDÊNCIAS QUANTO A MANUTENÇÃO E CONSERVAÇÃO </option>
                <option> PROVIDÊNCIAS REFERENTE A AÇÃO DE DESAPROPRIAÇÃO </option>
                <option> PROVIDÊNCIAS REFERENTES A AÇÃO DE USUCAPIÃO </option>
                <option> PROVIDÊNCIAS REFERENTES A APONTAMENTOS TCESP </option>
                <option> PROVIDÊNCIAS REFERENTES À CANALIZAÇÃO DE RIOS E CÓRREGOS </option>
                <option> PROVIDÊNCIAS REFERENTES À COLETA DE LIXO/RESÍDUOS RECICLÁVEIS </option>
                <option> PROVIDÊNCIAS REFERENTES À DECRETOS </option>
                <option> PROVIDÊNCIAS REFERENTES À EXECUÇÃO FISCAL </option>
                <option> PROVIDÊNCIAS REFERENTES A MATERIAIS EM DESUSO </option>
                <option> PROVIDÊNCIAS REFERENTES À MEDIDA JUDICIAL </option>
                <option> PROVIDÊNCIAS REFERENTES AO SISTEMA VIÁRIO / MOBILIDADE URBANA </option>
                <option> PROVIDÊNCIAS REFERENTES A PROGRAMA MUNICIPAL </option>
                <option> PROVIDÊNCIAS REFERENTES A PROJETOS, PROGRAMAS E POLÍTICAS SOCIAIS </option>
                <option> PROVIDÊNCIAS REFERENTES À PRORROGAÇÃO DE CONVÊNIO </option>
                <option> PROVIDÊNCIAS REFERENTES À PROTEÇÃO ANIMAL </option>
                <option> PROVIDÊNCIAS REFERENTES À SAÚDE PÚBLICA </option>
                <option> PROVIDÊNCIAS REFERENTES À SEGURANÇA PÚBLICA </option>
                <option> PROVIDÊNCIAS RELATIVAS A NÃO LOCALIZAÇÃO DE BENS NO INVENTÁRIO </option>
                <option> PROVIDÊNCIAS RELATIVAS AO INVENTÁRIO PATRIMONIAL </option>
                <option> PROVIDÊNCIAS RELATIVAS À PERTURBAÇÃO DO SOSSEGO PÚBLICO </option>
                <option> PROVIDÊNCIAS SOBRE LEI DE ACESSO À INFORMAÇÃO - CGM </option>
                <option> PROVIDÊNCIAS SOBRE LEI GERAL DE PROTEÇÃO DE DADOS - CGM </option>
                <option> PUBLICAÇÃO DE PORTARIA EM DIÁRIO OFICIAL </option>
                <option> PUBLICAÇÃO DE RELATÓRIO DE ATIVIDADES </option>
                <option> PUBLICAÇÃO EM DIÁRIO OFICIAL </option>
                <option> QUALIFICAÇÃO DE ORGANIZAÇÃO SOCIAL </option>
                <option> QUESTIONAMENTOS EM GERAL SOBRE ESTÁGIO PROBATÓRIO E AVALIAÇÃO DE DESEMPENHO </option>
                <option> QUITAÇÃO DE PARCELAMENTO </option>
                <option> REALIZAÇÃO DE AÇÕES DA CULTURA </option>
                <option> REATIVAÇÃO DE INSCRIÇÃO </option>
                <option> REATIVAÇÃO DE INSCRIÇÃO MOBILIÁRIA COM DATA RETROATIVA </option>
                <option> REATIVAÇÃO DE PARCELAMENTO </option>
                <option> REATIVAÇÃO DO LANÇAMENTO DE ISSQN </option>
                <option> REAVALIAÇÃO DE EXAME MEDICO ADMISSIONAL QUANDO CONSIDERADO INAPTO </option>
                <option> REAVALIAÇÃO DE VALORES NÃO PAGOS/DESCONTADOS EM RESCISÃO </option>
                <option> REBAIXAMENTO DE GUIA </option>
                <option> RECADASTRAMENTO DE JAZIGO </option>
                <option> RECAPEAMENTO DE VIA </option>
                <option> RECLAMAÇÃO TRABALHISTA - 10ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 11ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 12ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 13ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 1ª VARA DA FAZENDA PÚBLICA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 1ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 2ª VARA DA FAZENDA PÚBLICA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 2ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 3ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 4ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 5ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 6ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 7ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 8ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - 9ª VARA TRABALHISTA DE GUARULHOS </option>
                <option> RECLAMAÇÃO TRABALHISTA - MINISTÉRIO PÚBLICO DO TRABALHO </option>
                <option> RECLAMAÇÃO TRABALHISTA – PROCESSO JUDICIAL DE OUTRA NATUREZA </option>
                <option> RECLAMAÇÃO TRABALHISTA – VARAS DA FAZENDA DA CAPITAL E GRANDE SÃO PAULO </option>
                <option> RECLAMAÇÃO TRABALHISTA – VARAS DO TRABALHO DA CAPITAL E GRANDE SÃO PAULO </option>
                <option> RECLAMAÇÃO VIA OUVIDORIA </option>
                <option> RECONSIDERAÇÃO DE DESPACHO - LICENCIAMENTO </option>
                <option> RECONSIDERAÇÃO DE DESPACHO - VIABILIDADE VRE </option>
                <option> RECUPERAÇÃO JUDICIAL / FALÊNCIA </option>
                <option> RECURSO À JUNTA DE RECURSOS DE EDIFICAÇÕES E LICENCIAMENTO - JUREL </option>
                <option> RECURSO À JUNTA DE RECURSOS DE OBRAS DE INFRAESTRUTURA – JURINFRA </option>
                <option> RECURSO À JUNTA DE RECURSOS FISCAIS – JRF </option>
                <option> RECURSO DE AUTO DE MULTA </option>
                <option> RECURSO SANITÁRIO - VIGILÂNCIA, CEREST, ZOONOSES </option>
                <option> RECURSOS SOBRE CONCURSOS INTERNOS DE PROMOÇÃO NA CARREIRA </option>
                <option> REENQUADRAMENTO DE REGIME </option>
                <option> REFORMA EM LOTEAMENTO DE INTERESSE SOCIAL </option>
                <option> REGISTRO DE DECLARAÇÕES DE ÓBITOS </option>
                <option> REGULARIZAÇÃO AMBIENTAL </option>
                <option> REGULARIZAÇÃO CADASTRAL DE PRÓPRIOS </option>
                <option> REGULARIZAÇÃO DE FEIRA LIVRE </option>
                <option> REGULARIZAÇÃO DE FEIRA LIVRE REF. ÁREA PRIVADA </option>
                <option> REGULARIZAÇÃO DE INTERVENÇÃO EM ÁREA DE PROTEÇÃO PERMANENTE </option>
                <option> REGULARIZAÇÃO FUNDIÁRIA </option>
                <option> REINTEGRAÇÃO DE POSSE </option>
                <option> RELATÓRIO DE ACIDENTE DE TRÂNSITO </option>
                <option> RELATÓRIO DE CONCLUSÃO DE OBRAS </option>
                <option> RELATÓRIO DE CONSUMO DE COMBUSTÍVEL </option>
                <option> RELATÓRIO DE DANOS </option>
                <option> RELATÓRIO DE DIAGNÓSTICO DE DEMANDA </option>
                <option> RELATÓRIO DISCRIMINADO DO LANÇAMENTO DO IPTU </option>
                <option> REMANEJAMENTO DE COTA ORÇAMENTÁRIA/FINANCEIRA </option>
                <option> REMANEJAMENTO DE PROJETOS </option>
                <option> REMANEJAMENTO DE VERBA </option>
                <option> REMOÇÃO DE ÁRVORES PARA ÓRGÃOS PÚBLICOS </option>
                <option> REMOÇÃO DE POSTE DE ILUMINAÇÃO PÚBLICA </option>
                <option> RENOVAÇÃO CREDENCIAMENTO DE MOTO </option>
                <option> RENOVAÇÃO DE ALVARÁ DE ESTACIONAMENTO </option>
                <option> RENOVAÇÃO DE ALVARÁ DE TÁXI </option>
                <option> RENOVAÇÃO DE ALVARÁ E CADASTRO ESCOLAR </option>
                <option> RENOVAÇÃO DE CADASTRO DE CONDUTOR/MONITOR DE TRANSPORTE ESCOLAR </option>
                <option> RENOVAÇÃO DE TERMO DE ADITAMENTO </option>
                <option> REORGANIZAÇÃO DE FEIRA LIVRE </option>
                <option> REPARAÇÃO DE DANO AMBIENTAL </option>
                <option> REPARO EM MURO </option>
                <option> REPETIÇÃO DE INDÉBITO </option>
                <option> REPLANTIO ARBÓREO </option>
                <option> REQUERIMENTO DE AUXÍLIO FUNERAL </option>
                <option> REQUERIMENTO DE INFORMAÇÃO/ VEREADOR </option>
                <option> REQUERIMENTO DE LIBERAÇÃO DE DIREITOS </option>
                <option> REQUERIMENTO DE LICENCA PRÊMIO EM DESCANSO </option>
                <option> REQUERIMENTO DE PARCELAMENTO DE SALDO DEVEDOR DE RESCISÃO </option>
                <option> REQUERIMENTO DE RECURSO PERÍCIA MÉDICA - DECRETO 41512/2024 - ART. 30 </option>
                <option> REQUERIMENTO PARA CUMPRIMENTO DE DECISÕES JUDICIAS </option>
                <option> REQUERIMENTO PARA CUMPRIMENTO DE SENTENÇA JUDICIAL DE PENSÃO ALIMENTÍCIA </option>
                <option> REQUERIMENTO PARA MANUTENÇÃO DO VÍNCULO EMPREGATÍCIO POR CANCELAMENTO DE APOSENTADORIA NO INSS </option>
                <option> REQUISIÇÃO DE USUÁRIOS DE PONTO ELETRÔNICO </option>
                <option> REQUISITÓRIOS DE PEQUENO VALOR - RPV (EM CUMPRIMENTO DE SENTENÇA) </option>
                <option> RESOLUÇÃO LEGISLATIVA </option>
                <option> RETIFICAÇÃO DE REGISTRO (ÁREA) </option>
                <option> RETIRADA DE PARQUE E ACADEMIA PÚBLICA </option>
                <option> RETORNO DE AFASTAMENTO </option>
                <option> REVISÃO DE ÁREA PREDIAL </option>
                <option> REVISÃO DE ÁREA TERRITORIAL </option>
                <option> REVISÃO DE REQUERIMENTO </option>
                <option> REVISÃO DE VALORES (RECIBOS) </option>
                <option> RONDA ESCOLAR </option>
                <option> RONDA PERIÓDICA </option>
                <option> RUBRICA DE RECEITA </option>
                <option> SAÍDA ANTECIPADA (DIA DE PROVA DO SERVIDOR) </option>
                <option> SE/DPOE - ESTUDO DE VIABILIDADE TÉCNICA </option>
                <option> SE/DRHE - PROCESSO SELETIVO SIMPLIFICADO </option>
                <option> SEGUNDA VIA DE COMPROVANTE DE PAGAMENTO DE TRIBUTOS </option>
                <option> SEGUNDA VIA DE COMPROVANTE DE PAGAMENTO REF. SAAE </option>
                <option> SEGUNDA VIA DE CONCESSÃO DE SEPULTURA </option>
                <option> SEGUNDA VIA DE TARIFA REF. SAAE </option>
                <option> SEGUNDA VIA DO CADASTRO DE INSCRIÇÃO DE AUTÔNOMO </option>
                <option> SEGUNDA VIA TERMO DE ACORDO </option>
                <option> SERVIÇO ASSISTENCIAL FUNERÁRIO </option>
                <option> SINDICÂNCIA </option>
                <option> SINISTRO DE ABALROAMENTO MOBILIÁRIO STMU LEI 8178/2023 </option>
                <option> SOLICITAÇÃO/ALTERAÇÃO/SUSTAÇÃO DE JORNADA ESPECIAL </option>
                <option> SOLICITAÇÃO AMBIENTAL </option>
                <option> SOLICITAÇÃO DE CADASTRO DE INFRAESTRUTURAS URBANAS </option>
                <option> SOLICITAÇÃO DE CERTIDÃO Á CÂMARA MUNICIPAL </option>
                <option> SOLICITAÇÃO DE CESSÃO DE PLENÁRIO </option>
                <option> SOLICITAÇÃO DE CÓDIGO DE ENDEREÇAMENTO POSTAL PARA OS CORREIOS </option>
                <option> SOLICITAÇÃO DE CÓPIA/ 2ª VIA DE DOCUMENTOS </option>
                <option> SOLICITAÇÃO DE CÓPIA DE CONTA DE ÁGUA, ENERGIA E TELEFONE (DETALHADA) </option>
                <option> SOLICITAÇÃO DE CÓPIAS DE FOLHAS DE OCORRÊNCIAS ATENDIDAS PELA DEFESA CIVIL </option>
                <option> SOLICITAÇÃO DE CORTE / DESLIGAMENTO / BAIXA / CESSAÇÃO </option>
                <option> SOLICITAÇÃO DE ESTUDOS DE DIVISÃO DE CONSUMO DE ÁGUA/ENERGIA </option>
                <option> SOLICITAÇÃO DE EVOLUÇÃO FUNCIONAL </option>
                <option> SOLICITAÇÃO DE INCLUSÃO/EXCLUSÃO DE AGENTES DE RH </option>
                <option> SOLICITAÇÃO DE INFORMAÇÕES PARA MOVIMENTAÇÃO DE SERVIDOR (A) </option>
                <option> SOLICITAÇÃO DE NOVOS ASSUNTOS </option>
                <option> SOLICITAÇÃO DE RELATÓRIO DE GASTOS </option>
                <option> SOLICITAÇÃO DE RELOTAÇÃO DE VAGAS </option>
                <option> SOLICITAÇÃO DE REPARO / VAZAMENTO DE&nbsp;HIDRÔMETRO </option>
                <option> SOLICITAÇÃO DE RETIRADA DE&nbsp;HIDRÔMETRO&nbsp;/ MEDIDOR / TELEFONE PÚBLICO </option>
                <option> SOLICITAÇÃO DE TRANSFERÊNCIAS DE RESPONSABILIDADE </option>
                <option> SOLICITAÇÃO DE TROCA DE HIDRÔMETRO / MEDIDOR </option>
                <option> SOLICITAÇÃO DE VACÂNCIA POR POSSE EM OUTRO ÓRGÃO PÚBLICO </option>
                <option> SOLICITAÇÃO DE VISTORIAS TÉCNICAS </option>
                <option> SOLICITAÇÃO DO LEGISLATIVO </option>
                <option> SOLICITAÇÃO MUDANÇA DE ENDEREÇO DE LINHA TELEFÔNICA </option>
                <option> SOLICITAÇÃO PARA BLOQUEIO / LIBERAÇÃO DE SERVIÇOS TELEFÔNICOS </option>
                <option> SOLICITAÇÃO PARA LIGAÇÃO NOVA DE ÁGUA </option>
                <option> SOLICITAÇÃO PARA LIGAÇÃO NOVA DE ENERGIA ELÉTRICA </option>
                <option> SOLICITAÇÃO PARA NOVA LINHA TELEFÔNICA </option>
                <option> SOLICITAÇÃO PARA REALIZAÇÃO DE SESSÃO EXTRAORDINÁRIA </option>
                <option> SOLICITAÇÃO PARA RELIGAÇÃO DE ÁGUA </option>
                <option> SOLICITAÇÃO PARA REPARO DE LINHA TELEFÔNICA </option>
                <option> SOLICITAÇÃO PARA REPOSIÇÃO DE&nbsp;HIDRÔMETRO&nbsp;/ MEDIDOR FURTADOS </option>
                <option> SOLICITAÇÃO PARA REPOSIÇÃO DE LACRE DE&nbsp;HIDRÔMETRO </option>
                <option> SOLICITAÇÃO/PRORROGAÇÃO/SUSTAÇÃO DE LIP </option>
                <option> SOLICITAÇÃO REFERENTE A ASSUNTOS JURÍDICOS - CMG </option>
                <option> SOLICITAÇÃO VIA OUVIDORIA </option>
                <option> SUBSTITUTIVO </option>
                <option> SUBVENÇÃO </option>
                <option> SUGESTÃO VIA OUVIDORIA </option>
                <option> SÚMULA - CGM </option>
                <option> SUSPENSÃO DAS ATIVIDADES DA INSCRIÇÃO MOBILIÁRIA </option>
                <option> SUSPENSÃO DE COBRANÇA REF. ISS </option>
                <option> SUSPENSÃO DE EXIGIBILIDADE DE CRÉDITOS TRIBUTÁRIOS </option>
                <option> SUSPENSÃO DE PRAZO POR DESIGNAÇÃO DE CARGO COMISSIONADO EM ESTÁGIO PROBATÓRIO </option>
                <option> SUSTAÇÃO DE FÉRIAS </option>
                <option> TERMO DE AJUSTAMENTO DE CONDUTA - TAC </option>
                <option> TERMO DE CESSÃO DE USO </option>
                <option> TERMO DE COMPROMISSO - GOVERNO FEDERAL </option>
                <option> TERMO DE INUTILIZAÇÃO - SANITÁRIO </option>
                <option> TERMO DE OCORRÊNCIA </option>
                <option> TERMO DE PARCERIA </option>
                <option> TOMBAMENTO DE IMÓVEL </option>
                <option> TRANSFERÊNCIA DE AUTO DE INFRAÇÃO </option>
                <option> TRANSFERÊNCIA DE CONCESSÃO DE SEPULTURAS </option>
                <option> TRANSFERÊNCIA DE DIREITOS TÁXI E VAN ESCOLAR </option>
                <option> TRANSFERÊNCIA DE RESERVA ORÇAMENTÁRIA </option>
                <option> TRANSFERÊNCIA DE TÍTULO DE CONCESSÃO DE DIREITO REAL DE USO </option>
                <option> TRANSFERÊNCIA POLO PASSIVO </option>
                <option> TUTELA CAUTELAR ANTECEDENTE </option>
                <option> UTILIZAÇÃO DE ESPAÇO PÚBLICO </option>
                <option> UTILIZAÇÃO DE PRÓPRIOS MUNICIPAIS </option>
                <option> VARAS CÍVEIS - CAPITAL E GRANDE SÃO PAULO </option>
                <option> VIABILIDADE TÉCNICA MEIO AMBIENTE </option>
                <option> VISTORIA AMBIENTAL </option>
                <option> VISTORIA DE PATOLOGIAS EM CONSTRUÇÕES </option>
                <option> VISTORIA EM CARÁTER DE URGÊNCIA </option>
                <option> VISTORIA TÉCNICA </option>
                <option> VISTORIA TÉCNICA – FISCALIZAÇÃO DE SEGURANÇA DE EDIFICAÇÕES </option>
                <option> VISTORIA TÉCNICA REF. FLORA URBANA </option>


              </select>

            </label>
          </div>

          <div class="medium-12 cell">
            <label>Classificação por Assunto
              <input type="text" placeholder=" ">
            </label>
          </div>

          <div class="medium-12 cell">
            <label>Interessados
              <input type="text" placeholder="">
              <textarea placeholder="Ordem de Anexo" rows="3"></textarea>
            </label>
          </div>

          <div class="medium-12 cell">
            <label>Observações dessa Unidade
              <textarea rows="3"></textarea>
            </label>
          </div>

          <div class="medium-12 cell">
            <fieldset class="fieldset">
              <legend>Nivel de Acesso</legend>
              <div class="grid-x grid-padding-x">

                <div class="medium-4 cell">
                  <input id="checkbox1" type="checkbox"><label for="checkbox1">Sigiloso</label>
                </div>

                <div class="medium-4 cell">
                  <input id="checkbox1" type="checkbox"><label for="checkbox1">Restrito</label>
                </div>


                <SDdiv class="medium-4 cell">
                  <input id="checkbox1" type="checkbox"><label for="checkbox1">Publico</label>
              </div>



          </div>

          </fieldset>
        </div>



        <input type="submit" value="Registrar Ordem de Anexo">
      </form>
    </div>






  </div>


  </div>









  <script>
    const btn = document.querySelector("#btn");
    btn.addEventListener("click", function() {
      toggleFullScreen();
    });


    $(document).ready(function() {

      $('#mySelect').select2();

    });
  </script>
</body>


/html>