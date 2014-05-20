Floyd
=====

Installation:
-----
1. Börja med att klona Floyd från github https://github.com/2bert/thefloyd.git (eller ladda ner zip-filen om du hellre vill).
> git clone git://github.com/2bert/thefloyd.git.

2. Sedan måste du göra mappen data skrivbar, eftersom Floyd måste ha möljighet att skriva om eller skapa nya filer här. Använd:
> cd thefloyd; chmod 777 site/data.

3. Om/när du skall installera Floyd på studentservern behöver du öpnna .htaccess-filen och tabort # före Rewritebase på rad tre och lägga till din bas-url.
4. Till slut så behöver du öpnna Floyds sökväg i din webbläsare och antingen lägga till module/install i din sökväg eller gå till index-sidan och klicka på länken med samma namn.

Anpassa utseendet:
-----

Här nedan kommer ett antal punkter med sätt att anpassa utseendet på din Floyd-webbsida.

+ För att ändra logotypen på webbplatsen lägger du in din valda logo i mappen för temat, *site/themes/mytheme*. Därefter får du gå in i *site/config* och ändra på rad 133 från *logo_80x80.png* till namnet på din logo. Där kan du även på de efterföljande raderna 134 och 135 ändra höjden och bredden på din logo. På rad 132 kan du även lägga till din logo som favicon om du skulle vilja.
+ HEJ
+ HEJ
+ HEJ
+ HEJ
+ HEJ

En till punkt:
-----
Här kommer text om något...
