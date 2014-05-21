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

+ Vid byte av logotypen på webbplatsen lägger du in din valda logo i mappen för temat, *site/themes/mytheme*. Därefter får du gå in i *site/config* och ändra på rad 133 från *logo_80x80.png* till namnet på din logo. Där kan du även på de efterföljande raderna 134 och 135 ändra höjden och bredden på din logo. På rad 132 kan du även lägga till din logo som favicon om du skulle vilja.
+ Vid byte av sidans huvudtitel är det *site/config* och rad 130, header, som gäller. Där står det för närvarande titeln *Floyd* som ramverket orginaltitle. Ändra till den titel du vill ha.   
+ Vid byte av sidans slogan är det samma som i fallet med header. *site/config* och denna gång rad 131, slogan. *A PHP-based MVC-inspired CMF* står det från start, byt till vad du vill.
+ Vid byte av texten i sidans footer är det *site/config*, rad 136, footer och där det för närvarande står *Floyd &copy; by Johannes (burt@floyd.se)*. Bara att byta.

<pre>
130: 'header' => 'Floyd',
131: 'slogan' => 'A PHP-based MVC-inspired CMF',
132: 'favicon' => 'logo_80x80.png',
133: 'logo' => 'logo_80x80.png',
134: 'logo_width' => 80,
135: 'logo_height' => 80,
136: 'footer' => '&lt;p&gt;Floyd &copy; by Johannes (burt@floyd.se)&lt;/p&gt;',
</pre>

+ Vid förändring, byte eller tillägg av navigerings menyn så är det mellan rad 146-157 som gäller. När du har installerat färdigt ramverket så kommer det med den förvalda *my-navbaren* se rad 154 i *site/config* koden här under. *my-navbar*-menyn är nerskalad för my-temat. Vill du i stället använda grundmenyn för Floyd-ramverket får du gå på rad 128 och ändra från *my-navbar* till *navbar*. För att lägga till din skapade sida i menyerna skriver du namnet på din sida, namnet du vill ha i menyen och till sist urlen. Till exempel *page/view/*+id på sidan du skapat.

<pre>
128: 'menu_to_region' => array('my-navbar'=>'navbar'),
</pre>
<pre>
146: $fl->config['menus'] = array(
147:  'navbar' => array(
148:    'home' => array('label'=>'Home', 'url'=>'home'),
149:    'modules' => array('label'=>'Modules', 'url'=>'module'),
150:    'content' => array('label'=>'Content', 'url'=>'content'),
151:    'guestbook' => array('label'=>'Guestbook', 'url'=>'guestbook'),
152:    'blog' => array('label'=>'Blog', 'url'=>'blog'),
153:  ),
154:  'my-navbar' => array(
155:    'home' => array('label'=>'About Me', 'url'=>'my'),
156:    'blog' => array('label'=>'My Blog', 'url'=>'my/blog'),
157:    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
</pre>

+ Det finns även möjlighter att ändra webbplatsens/temats utseende. Detta görs i *site/themes/mytheme* i filen *style.css*. Här kan du ändra utseendet på bland annat bodyn, header, footer, menyn och så vidare.
  Exempelvis om du vill ändra sidans header så går du till rad 8, *#outer-wrap-header* och ändrar *background-color:#FFBAD2;* för bakgrundsfärgen och *border-bottom:2px solid #555* för bordern i botten av headern.
  
<pre>
8: #outer-wrap-header{background-color:#FFBAD2;border-bottom:2px solid #555}
</pre>  

+ Är det något som inte finns med i *site/themes/mytheme/style.css* som du vill ändra, så går det bra att addera det eftersom denna tema-style extendar hela webbplatsens style så finns inte allt med i denna extendning av *style.css*.

Skapa innehåll i form av blogg eller sida:
-----

+ Om du vill skapa ett nytt blogginlägg eller en ny statisksida så får du lägga till *content/create* i din sökväg i webbläsaren(eller om du har ändrat till navbar-menyn välja content och på den sidan finns det en länk under *actions* som heter *Create new content*).

1. Title: Här väljer du din sida/bloggs title.
2. Key: Här väljer du sidan/bloggens nyckelord.
3. Content: Lägger du in allt innehåll du vill ha på sidan/bloggen.
4. Type: Här väljer du *post* för att skapa ett blogginlägg och *page* för att skapa en sida.
5. Filter: Här väljer du hur du vill formatera din text. Till exempel med *bbcode*.
