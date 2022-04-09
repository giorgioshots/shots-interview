##Contesto:
E-commerce, vedi [schema erd del database](https://app.diagrams.net/#Hgiorgioshots%2Fshots-interview%2Fmaster%2Fsimplified-ecommerce-erd.drawio)

##Stack:
MySQL + PHP + JS/jQuery + AJAX

##Richiesta cliente:
Sviluppare un gioco memory. Il cliente deve gestire in autonomia le coppie di elementi che compongono il gioco tramite CMS.
Possono giocare solo gli utenti già registrati e autenticati. Ognuno può giocare solo una volta.
Se il giocatore crea un accoppiamento sbagliato, non succede nulla.
Se il giocatore crea un accoppiamento corretto, la coppia selezionata sparisce dal gioco.
Quando il giocatore completa l'ultima coppia rimasta, gli viene generato un codice sconto personalizzato che può usare solo lui.
Se il giocatore ricarica la pagina durante la partita, perde tutti i progressi, ovvero non è necessario salvare automaticamente lo stato della partita.
Solo quando la partita finisce dobbiamo salvarne lo stato in modo persistente, cosicchè il giocatore non possa cominciarne un'altra.
Modificare la struttura del database e i file in questa cartella per supportare la feature.