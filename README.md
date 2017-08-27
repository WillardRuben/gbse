## **GBSE - Gerenciamento de Bloqueio de Sites e Extensões**

## Objetivo
O projeto em questão tem a proposta de fazer o bloqueio de sites e extensões através da utilização de uma interface web para o servidor proxy squid3.

## Descrição
Squid é um servidor proxy baseado em Unix que armazena o conteúdo da Internet mais próximo de um solicitante do que o seu ponto de origem original. Squid suporta armazenamento em cache de muitos tipos diferentes de objetos da Web, incluindo aqueles acessados através de HTTP e FTP . O armazenamento em cache de páginas Web, arquivos de mídia e outros conteúdos solicitados com frequência, acelera o tempo de resposta e reduz o congestionamento de largura de banda.
A utilização do squid tambem possibilita a criação de regras de acesso(as ACL's), diante disso vem a possibilidade de se fazer a gerência destas.

## Inspiração

A inspiração para o projeto partiu da observação da ferramenta "Sarg".

A figura 1 mostra a ferramenta "Sarg".![sarg]({{site.baseurl}}//sarg.jpg)
![]({{site.baseurl}}//sarg.jpg)

![sarg.jpg]({{site.baseurl}}/sarg.jpg) _figura 1 - Sarg_

Com a observação da ferramenta citada anteriormente, foi visto que a mesma só faz a exibição de arquivos de log de forma amigável, porém, a idéia é que além de o administrador poder visualizar os arquivos de log em geral, ele pudesse também fazer a gerencia de algumas regras que podem ser feitas no squid3, a exemplo do bloqueio de sites e extensões. 

## Protótipos

![bloqueio_de_sites.png]({{site.baseurl}}/bloqueio_de_sites.png)
> We loved with a love that was more than love

![bloqueio_de_extensoes.png]({{site.baseurl}}/bloqueio_de_extensoes.png)

## Instrução de instalação do Squid3
	apt-get install squid3
    
## Comandos

	service squid3 start
	service squid3 stop
	service squid3 restart
    
Os comando anteriores, servem para gerenciar o serviço no servidor em questão.![]({{site.baseurl}}/)

