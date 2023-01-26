# AgendEsportes - CODESP

Este projeto tem como objetivo ser uma aplicação de agenda virtual para a Coordenação Desportiva do IFRN - Campus Natal Central.

Atualmente o projeto não possui uma implementação, mas está aberto a receber contribuições de código que representem as especificação aqui presente.

Todo material está publicado sob licença [GPL-3.0](https://www.gnu.org/licenses/quick-guide-gplv3.pt-br.html).

### Artefatos do Projeto

* [Documento de visão](https://github.com/AgendEsportes/AgendEsport/blob/main/docs/visao_do_produto.md)

* Documento de Requisitos

* [Diagrama de casos de uso](https://github.com/AgendEsportes/AgendEsport/blob/main/docs/diagramas/Diagrama%20Casos%20de%20Uso.png)

* Detalhamento de casos de uso 

  1. [Abrir Agenda do Dia](https://github.com/AgendEsportes/AgendEsport/blob/main/docs/casos_de_uso/cdu_abrir_agenda_do_dia.md)

  2. [Consultar Agenda do Dia](https://github.com/AgendEsportes/AgendEsport/blob/main/docs/casos_de_uso/cdu_consultar_agenda_do_dia.md)

  3. [Dashboard de Agenda](https://github.com/AgendEsportes/AgendEsport/blob/main/docs/casos_de_uso/cdu_dashboard_de_agenda.md)
* [Diagrama de classes de domínio](https://github.com/AgendEsportes/AgendEsport/blob/main/docs/diagramas/DiagramaClasses.pdf)
* Diagrama de arquitetura

### Re-buildar na maquina virtual

1. yarn build
2. sudo cp -r build/* /var/www/html/
3. sudo systemctl restart apache2
