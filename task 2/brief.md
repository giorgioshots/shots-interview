## Contesto:
Blog del sito web, vedi [schema erd del database](https://app.diagrams.net/#Hgiorgioshots%2Fshots-interview%2Fmaster%2Fsimplified-ecommerce-erd.drawio)  
Sulla pagina dell'articolo viene stampato l'elenco dei relativi commenti, recuperandoli dal database.

## Stack:
MySQL + PHP

## Richiesta cliente:
Deve essere possibile aggiungere commenti rispondendo a un commento esistente,
non c'è limite ai livelli di profondità dei commenti.  
In frontend le risposte devono essere stampate sotto il commento "padre".  
Modificare la struttura del DB e i file php in questa cartella per supportare la feature. 