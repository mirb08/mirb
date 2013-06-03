This is a READMRE-file.
================================================================================

<p>
Det här är en del av kursen DV1440, Databasdrivna webapplikationer PHP MVC. Kursen 
läses på Blekinge tekniska högskola.
</p>

<p>
Projketet är baserat på en tutorial av Mikael Roos och ramverket Lydia. mirb är en 
vidareutveckling av Lydia.
</p>

<h2>Hämting och installation</h2>

<h4>Hämta mirb</h4>
<p>
Du har två alternativ för hämting av mirb, alla filer finns på github. Under följande
länkar: <br />
<a href='https://github.com/mirb08/mirb'>https://github.com/mirb08/mirb/</a> <br />
<a href='https://github.com/mirb08/mirb.git'>https://github.com/mirb08/mirb.git</a>
</p>

<h4>Installera</h4>
<p>
När du hämtat mirb så tar vi nästa steg, installationen. Installationen gör du genom att följa stegen nedan. <br />
Jag ska för söka förklara på bästa sätt för att installationen ska bli så enkel som möjligt att genomföra. <br />
När du laddat ner filerna så börjar du med att leta upp .htaccess filen, den ska du hitta i huvudkatalogen mirb. <br />
Öppna den och ändra adressen till din väg till installation, min ser ut så här. <br />
<code>RewriteBase /~mirb08/mirb/</code> <br />
<code># Must use RewriteBase on www.student.bth.se, Rewritebase for url /~mirb08/test is /~mirb08/test/</code> <br />
<br />
Efter det första steget så måste man se till att datakatalogen och dess filer är läsbara. Så här gör du. <br />
Ändra katalogen och dess filer till <code>cd mirb; chmod 777 site/data</code>, Nu är det möjligt att skriva och <br />
skapa filer i katalogen. <br />
<br />
Sista momentet i hämting och installation är att initialisera modulerna. mirb Är konsturerat så att du kan göra det <br />
med en kontroller. <br /> 
Har installationen blivit rätt gjord så finner du på webbsidan för ramverket en länk, module/ install. Klicka på länken <br />
och initialiseringen är gjord. Du får en bekräftelse att det är klart. <br />
Default så skapas två användare i databaserna användarnamn/ lösenord, doe:doe och/ eller root/ root. <br />
</p>

<h2>Konfiguration</h2>
<p>
För att få en personlig touch på ramverket kan du konfigurera mirb på ett antal punkter, nedan finner du instruktioner <br />
för att andra utseendet. Först letar du upp katalogen. <code>mirb/site/</code> <br />
</p>

<ol>
<li>Ändra logo: <code>mirb/site/themes/mytheme</code> hittar du <code>logo_80x80.png</code> uppdatera med din logo.</li>  
<li>Ändra titel, footer, logo: <code>mirb/site/config</code> letar du upp <code>'menu_to_region' => array</code> här ändrar 
du till dina alternariv och val.</li>
<li>Ändra meny: <code>$mi->config['menus'] = array</code> här har du två alternativa menyer. Läs instuktionerna i filen. <br />
Du sätter ditt menyval här <code>'menu_to_region' => array('my-navbar'=>'navbar')</code></li>
<li>Ändra tema: <code>mirb/site/themes/mythemes/style.css</code>
</ol>

<h2>Skapa innehåll</h2>

<p>
Sist men inte minst så är det dax att skapa innehåll i ramverket, blog och page. Uppdatera din browser med ramverket.
</p>

<h4>Skapa blog</h4>
<ol>
<li>Klicka på blog.</li>
<li>Klicka på edit.</li>
<li>Skapa ny.</li>
<li>Fyll i uppgifterna, Viktigt är att type är post och filter är plain.</li>
<li>Spara</li>
</ol>

<h4>Skapa page</h4>
<ol>
<li>Klicka på Content.</li>
<li>Fyll i uppgifterna, Viktigt är att type är page.</li>
<li>Spara</li>
</ol>

<p>
För att få sidan visad i din menyn gör du så här.<code>'page' => array('label'=>'page', 'url'=>'page/view/9'),</code> <br />
du placerar kodraden i din valda meny i katalogen.<code>mirb/site/config.php</code>
</p>






