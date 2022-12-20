## Contesto:
E-commerce, vedi [schema erd del database](https://app.diagrams.net/#Hgiorgioshots%2Fshots-interview%2Fmaster%2Fsimplified-ecommerce-erd.drawio), che necessita di intergazione con sistemi esterni (gestionale, crm, data warehouse, etc.)

## Stack:
MySQL + PHP + Google Cloud

## Richiesta:
Abbiamo bisogno di integrare il sito web con una serie di sistemi esterni.
L'integrazione consiste nel sincronizzare i dati di utenti, ordini, prodotti e altre entità che scaturiscono dalle interazioni degli utenti sul sito.
Ad esempio: quando un utente conclude un ordine, questa informazione deve essere trasmessa al gestionale, al CRM e alla data warehouse. Ognuno di questi sistemi mette a disposizione API REST con relative librerie per PHP.
Il malfunzionamento temporaneo di uno qualsiasi di questi sistemi non deve interferire con le attività che l'utente finale svolge sul sito. Ad esempio il server del gestionale può essere momentaneamente down, ma l'utente deve poter concludere l'ordine comunque sull'ecommerce.
Inoltre il tipo e il numero di eventi "trigger" varierà nel tempo, ma vogliamo evitare (o ridurre al minimo) che il team addetto alle integrazioni debba apportare modifiche ai componenti core del sistema ecommerce, come l'ORM o le entità utenti, ordini, prodotti, etc.