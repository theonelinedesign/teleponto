Teleponto Web

O Teleponto Web é uma aplicação simples baseada em HTML, CSS e JavaScript, criada para funcionar como um teleponto online. Este projeto foi desenvolvido para facilitar a leitura de textos, com a possibilidade de ajustar configurações como tamanho do texto, espaçamento entre linhas, velocidade de scroll, e reflexo do texto.

Funcionalidades
	•	Inserir texto diretamente na página de administração.
	•	Ajustar o tamanho do texto e o espaçamento entre linhas.
	•	Controlar a velocidade de scroll do texto.
	•	Alternar o reflexo do texto para exibição em espelho.
	•	Visualizar um preview das configurações no painel administrativo.
	•	Sincronizar configurações para a página de teleponto em tempo real.

Estrutura do Projeto
teleponto/
├── css/
│   └── styles.css            # Estilos do projeto
├── js/
│   ├── admin.js              # JavaScript para a página de administração
│   └── index.js              # JavaScript para o teleponto
├── admin.html                # Página de administração
├── index.html                # Página principal do teleponto
├── upload.php                # Script para upload de textos (se necessário)
└── README.md                 # Documentação do projeto

Como Usar

1. Página de Administração (admin.html)
	1.	Abra o ficheiro admin.html no navegador.
	2.	Insira o texto na caixa de texto diretamente na interface.
	3.	Ajuste o tamanho do texto, espaçamento entre linhas e velocidade de scroll com os sliders.
	4.	Clique em Refletir para ativar ou desativar o reflexo do texto.
	5.	Clique em Play para testar o scroll no preview da administração.
	6.	Use o botão Enviar para Index para sincronizar o texto e configurações com o teleponto.

2. Página de Teleponto (index.html)
	1.	Abra o ficheiro index.html no navegador.
	2.	O texto enviado da administração será exibido com as configurações ajustadas.
	3.	Use o botão Play para iniciar o scroll do texto no teleponto.

Requisitos
	•	Navegador compatível com HTML5, CSS3 e JavaScript moderno.
	•	Opcional: servidor local para funcionalidades adicionais como upload de ficheiros (upload.php).

Notas
	•	O projeto foi testado nos navegadores mais populares: Google Chrome, Microsoft Edge e Brave.
	•	Certifique-se de que os ficheiros styles.css, admin.js e index.js estão corretamente referenciados no HTML.
	•	O texto e as configurações são enviados em tempo real para a página do teleponto.
 
