This is a READMRE-file.
================================================================================

<p>
Det h�r �r en del av kursen DV1440, Databasdrivna webapplikationer PHP MVC. Kursen 
l�ses p� Blekinge tekniska h�gskola.
</p>

<p>
Projketet �r baserat p� en tutorial av Mikael Roos och ramverket Lydia. mirb �r en 
vidareutveckling av Lydia.
</p>

<h2>H�mting och installation</h2>

<h4>H�mta mirb</h4>
<p>
Du har tv� alternativ f�r h�mting av mirb, alla filer finns p� github. Under f�ljande
l�nkar: <br />
<a href='https://github.com/mirb08/mirb'>https://github.com/mirb08/mirb/</a> <br />
<a href='https://github.com/mirb08/mirb.git'>https://github.com/mirb08/mirb.git</a>
</p>

<h4>Installera</h4>
<p>
N�r du h�mtat mirb s� tar vi n�sta steg, installationen. Installationen g�r du genom att f�lja stegen nedan. <br />
Jag ska f�r s�ka f�rklara p� b�sta s�tt f�r att installationen ska bli s� enkel som m�jligt att genomf�ra. <br />
N�r du laddat ner filerna s� b�rjar du med att leta upp .htaccess filen, den ska du hitta i huvudkatalogen mirb. <br />
�ppna den och �ndra adressen till din v�g till installation, min ser ut s� h�r. <br />
<code>RewriteBase /~mirb08/mirb/</code> <br />
<code># Must use RewriteBase on www.student.bth.se, Rewritebase for url /~mirb08/test is /~mirb08/test/</code> <br />
<br />
Efter det f�rsta steget s� m�ste man se till att datakatalogen och dess filer �r l�sbara. S� h�r g�r du. <br />
�ndra katalogen och dess filer till <code>cd mirb; chmod 777 site/data</code>, Nu �r det m�jligt att skriva och <br />
skapa filer i katalogen. <br />
<br />
Sista momentet i h�mting och installation �r att initialisera modulerna. mirb �r konsturerat s� att du kan g�ra det <br />
med en kontroller. <br /> 
Har installationen blivit r�tt gjord s� finner du p� webbsidan f�r ramverket en l�nk, module/ install. Klicka p� l�nken <br />
och initialiseringen �r gjord. Du f�r en bekr�ftelse att det �r klart. <br />
Default s� skapas tv� anv�ndare i databaserna anv�ndarnamn/ l�senord, doe:doe och/ eller root/ root. <br />
</p>

<h2>Konfiguration</h2>
<p>
F�r att f� en personlig touch p� ramverket kan du konfigurera mirb p� ett antal punkter, nedan finner du instruktioner <br />
f�r att andra utseendet. F�rst letar du upp katalogen. <code>mirb/site/</code> <br />
</p>

<ol>
<li>�ndra logo: <code>mirb/site/themes/mytheme</code> hittar du <code>logo_80x80.png</code> uppdatera med din logo.</li>  
<li>�ndra titel, footer, logo: <code>mirb/site/config</code> letar du upp <code>'menu_to_region' => array</code> h�r �ndrar 
du till dina alternariv och val.</li>
<li>�ndra meny: <code>$mi->config['menus'] = array</code> h�r har du tv� alternativa menyer. L�s instuktionerna i filen. <br />
Du s�tter ditt menyval h�r <code>'menu_to_region' => array('my-navbar'=>'navbar')</code></li>
<li>�ndra tema: <code>mirb/site/themes/mythemes/style.css</code>
</ol>

<h2>Skapa inneh�ll</h2>

<p>
Sist men inte minst s� �r det dax att skapa inneh�ll i ramverket, blog och page. Uppdatera din browser med ramverket.
</p>

<h4>Skapa blog</h4>
<ol>
<li>Klicka p� blog.</li>
<li>Klicka p� edit.</li>
<li>Skapa ny.</li>
<li>Fyll i uppgifterna, Viktigt �r att type �r post och filter �r plain.</li>
<li>Spara</li>
</ol>

<h4>Skapa page</h4>
<ol>
<li>Klicka p� Content.</li>
<li>Fyll i uppgifterna, Viktigt �r att type �r page.</li>
<li>Spara</li>
</ol>

<p>
F�r att f� sidan visad i din menyn g�r du s� h�r.<code>'page' => array('label'=>'page', 'url'=>'page/view/9'),</code> <br />
du placerar kodraden i din valda meny i katalogen.<code>mirb/site/config.php</code>
</p>






