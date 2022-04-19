
# MDT_NeroLinuxius

O MDT Nero Linuxius é um Mobile Data Terminal rodando na WEB. Foi feito como protótipo para implementação no FiveM, com uma possível interligação do MDT na WEB e no jogo. Basicamente, é um CRUD, visto que possibilita que o usuário manipule dados de um banco de dados, criando, lendo-os, atualizando-os e deletando-os.

  

## Características

- Totalmente responsivo, através do uso do Bootstrap

- Não foi usada nenhum tipo de biblioteca além do Bootstrap

  

### Bugs conhecidos

Não necessariamente afetam o funcionamento do MDT, então, não priorizei.

  

- [ ] A tabela de oficiais em serviço não sofre overflow e ocupa mais do que 100vh no dashboard.

## Funcionalidades

### Gostaria de adicionar:

Não estão necessariamente no objetivo do projeto, mas talvez eu as adicione num futuro:

- [ ] Adicionar autenticação para o uso do MDT

- [ ] Com a adição de cima, fazer com que os webhooks rodem no server-side

  

### Atuais:

Seguem prints das áreas do MDT:

  

**Load Inicial**

![load inicial](https://i.imgur.com/UEkg2Vz.png)

![load inicial celular](https://i.imgur.com/90qOvba.png)

  

**Login**

  

![login](https://i.imgur.com/GT0bB9H.png)

![login celular](https://i.imgur.com/ymgXhKU.png)

  

**Dashboard**

  

![dashboard](https://i.imgur.com/Onz9KnB.png)

![dashboard celular](https://i.imgur.com/2GBArlL.png)

**Ficha do Cidadão**

![ficha computador](https://i.imgur.com/r7qruLb.png)

![ficha celular](https://i.imgur.com/cbqVMv4.png)
  
  **Pesquisa de Mandados**
  ![enter image description here](https://i.imgur.com/UI33VLY.png)
![enter image description here](https://i.imgur.com/vnZgngu.png)
**Webhooks**

Ao adicionar e remover multas, o webhook do Discord é acionado.

  
![Imagem de Multa Removida](https://i.imgur.com/EvfKHx5.png)

  

![Imagem de adição de Multa](https://i.imgur.com/CaNKt7y.png)

**E muito mais interfaces! Não colocarei aqui para não ficar muito grande.**

## Como usá-lo

 1.  git clone https://github.com/MarcosGaius/mdt_nerolinuxius.git em algum diretório do seu pc
 2. Baixe o xampp e nele inicie o Apache e o MySql
 3. Abra o arquivo db_nerolinuxius e execute-o. (Eu uso o HeidiSQL para gerenciar o bando de dados)
 4. Digite localhost no navegador e estará funcionando*

*Apenas se você clonou no diretório padrão do xampp (htdocs), caso tenha instalado em outro diretório, basta abrir o xampp e clicar na opção config do Apache, nela escolha "Apache (httpd.conf)" e um arquivo de texto irá se abrir. Ao redor da linha 252 você encontrará o diretório padrão dos documentos. Agora você pode substituir o diretório ou adicionar após a tag  `</Directory>` o texto abaixo:

```
DocumentRoot "SEU DIRETÓRIO" 
<Directory "SEU DIRETÓRIO>
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
``` 

