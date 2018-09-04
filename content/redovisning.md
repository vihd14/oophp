---
...
Redovisning
=========================



Kmom01 {#kmom01}
-------------------------

### Hur känns det att hoppa rakt in i objekt och klasser med PHP, gick det bra och kan du relatera till andra objektorienterade språk?
Det gick väldigt enkelt då jag ligger ett år efter med denna kurs och redan gjort kursen Ramverk1 som i princip är oophp,
fastän något mer komplicerat. Jag har även programmerat en del objektorienterad JavaScript under HT17 och VT18 i både dbwebb-kurser samt ett projekt jag hade under våren. Att skriva klasser fungerar i princip på samma sätt i de flesta programmeringsspråk jag använt.

### Berätta hur det gick det att utföra uppgiften “Gissa numret” med GET, POST och SESSION?
Inga större problem här heller, det gick smidigt genom att följa uppgiften samt kolla på exempelklassen man fick tillgång till.
GET, POST och SESSION är inget nytt för mig så jag visste hur de fungerade. Samma med att skriva klassen som inte heller är något
nytt för mig, som sagt.

### Har du några inledande reflektioner kring me-sidan och dess struktur?
Jag har arbetat med Anax i snart två år så man har ju lärt sig dess grundstruktur och hur Mos har byggt upp sitt lilla "ramverk".
Det finns vissa saker jag skulle vilja slipa till på min sida men det tänkte jag göra i kommande kursmoment. Man kan ju inte göra
allt på det första, lite får man spara tills senare så man har något att fixa till i de kommande momenten.

### Vilken är din TIL för detta kmom?
Att jag har lärt mig väldigt mycket på ett år, då jag gjorde detta kursmoment för första gången i den "gamla" kursen.
Något nytt programmeringsmässigt har jag inte lärt mig då jag gjort saker som dessa tidigare. Jag har dock lärt mig att
städa upp min gamla kod som jag återanvände på vissa delar från förra versionen av kursen. Man programmerar lite snyggare
och bättre nu i alla fall, vilket är skönt att veta!



Kmom02 {#kmom02}
-------------------------

### Hur gick det att överföra spelet “Gissa mitt nummer” in i din me-sida?
Det var inget större problem då videoguiden var klar och tydlig med hur man skulle göra. Sedan var det bara att kontrollera så
att allting fungerade på samma sätt både inuti och utanför ramverket.

### Berätta om hur du löste uppgiften med Tärningsspelet 100, hur du tänkte, planerade och utförde uppgiften samt hur du organiserade din kod?
Detta tog väldigt lång tid för mig... Svår uppgift med en hel del logik som man behövde ha i åtanke. Jag började med att flytta
över spelet till min me-sida (såg ingen anledning till att testa utanför, inga problem uppstod pågrund av detta) och kikade sen
igenom mina "gamla" klasser för att se vilka som var vitala för spelet. Jag bestämde mig för att göra det så enkelt för mig som möjligt
genom att endast spara min Dice-klass och sedan bygga en för själva spelet (DiceGame). Jag valde att ha båda spelarnas kast och poäng
i denna klass som sedan används i vyn för att skapa ett "spelbeteende" hos spelaren (val mellan att spara poäng eller kasta vidare osv.).

Hela datorns logik sker i princip i klassen DiceGame, då det ska ske automatiskt utan någon input från spelaren. Det uppstod en
del problem med `SESSION` då saker inte sparades i sessionen när jag ville att det skulle sparas. Efter en hel del debugging och
fördjupning inom `SESSION` fick jag allt att fungera som planerat. Lite problem med poängsummeringen uppstod också men löstes
genom att skicka med varje kasts poäng i ett gömt fält i POST som sedan sparades i `SESSION` via en variabel, som sedan adderades
till den totala poängen.

Spelet i helhet är så enkelt som det kan bli men jag är nöjd ändå!

### Berätta om din syn på modellering likt UML jämfört med verktyg som phpDocumentor. Fördelar, nackdelar, användningsområde? Vad tycker du om konceptet make doc?
Phpdoc är betydligt mycket smidigare än att skapa ett UML-diagram. UML ger tydliga bilder över klasserna men det är inget jag
gillar att sitta och bygga ihop. Det är framförallt väldigt tidskrävande att klippa och klistra jämfört med ett enkelt `make doc`
kommando i terminalen.

### Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?
Jag föredrar att skriva inuti ramverket från början, då man slipper klippa och klistra in delar i efterhand men som flera andra
påpekat så kan det vara enklare att debugga utanför ramverket, speciellt när det gäller större program. Guess och dice100 var inte
så pass stora och går helt klart att bygga inuti ramverket, men jag förstår varför vissa valde att bygga sitt dice100 utanför
och sedan flytta in det. Alla föredrar olika sätt och jag tror jag hade gjort på samma sätt om det gällt ett större projekt.

### Vilken är din TIL för detta kmom?
`SESSION`! Herregud vad jag tjafsat med detta... X antal timmar har lagts på fördjupning för att skapa en förståelse över hur det
fungerar och nu känner man sig nästan som en expert inom `POST` och `SESSION`. Jag har även lärt mig en hel del logik över lag då
det krävdes en hel del logiskt tänkande i detta kursmoment (speciellt i dice100). Det är många delar som ska fungera tillsammans
och det var en lättnad när man äntligen hade ett fungerande spel.


Kmom03 {#kmom03}
-------------------------

Här är redovisningstexten



Kmom04 {#kmom04}
-------------------------

Här är redovisningstexten



Kmom05 {#kmom05}
-------------------------

Här är redovisningstexten



Kmom06 {#kmom06}
-------------------------

Här är redovisningstexten



Kmom07-10 {#kmom0710}
-------------------------

Här är redovisningstexten
