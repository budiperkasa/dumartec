<?php
/** 
*
* help_bbcode [Croatian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-2008 Ančica Sečan
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

if (!defined('IN_PHPBB'))
{
   exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
array(
0 => '--',
1 => 'Uvod'
),
array(
0 => 'Što je BBKod?',
1 => 'BBKod je specijalna implementacija HTML-a.<br />Mogućnost korištenja BBKoda daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, opcionalno sam/a možeš deaktivirati korištenje BBKoda.<br />BBKod je sličan HTML-u u stilu; tagovi se umeću u vitičaste zagrade [ i ] [umjesto &lt; i &gt;] - što nudi veću kontrolu prikaza. Kod [tagovi] se može pisati ručno, no, ovisno o predlošku kojeg koristiš, vidjet ćeš da je dodavanje BBKoda postovima moguće i putem sučelja iznad prostora za post [poruku] na obrascu za pisanje postova.'
),
array(
0 => '--',
1 => 'Oblikovanje teksta'
),
array(
0 => 'Kako podebljati/podcrtati/nakositi tekst?',
1 => 'BBKod sadrži tagove koji omogućavaju brzo mijenjanje osnovnog stila teksta.<br />To možeš napraviti na više načina...<br /><ul><li>Za podebljanje - tekst umetneš u <strong>[b][/b]</strong>, npr.<br /><strong>[b]</strong>Pozdrav<strong>[/b]</strong><br />će biti prikazano kao <strong>Pozdrav</strong>.</li><li>Za podcrtanje - tekst umetneš u <strong>[u][/u]</strong>, npr. <br /><strong>[u]</strong>Dobro jutro<strong>[/u]</strong><br />će biti prikazano kao <u>Dobro jutro</u>.</li><li>Za nakošenje - tekst umetneš u <strong>[i][/i]</strong>, npr.<br /><strong>[i]</strong>Ovo je supač<strong>[/i]</strong><br />će biti prikazano kao <em>Ovo je supač</em>.</li></ul>'
),
array(
0 => 'Kako promijeniti boju/veličinu teksta?',
1 => 'Za promjenu boje/veličine teksta možeš koristiti donje tagove, s time da trebaš imati na umu da će krajnji rezultat [izgled] ovisit o pregledniku i sustavu gledatelja/ice(a).<br /><ul><li>Za promjenu boje - tekst umetneš u <strong>[color=][/color]</strong>.<br />Možeš upisati naziv boje [npr.: white=bijela; black=crna; itd.] njezin heksadecimalan kod [npr.: #FFFFFF=bijela; #000000=crna; itd.].<br />Npr.<br />za promjenu boje teksta u crvenu - tekst umetneš u<br /><strong>[color=red]</strong>Pozdrav<strong>[/color]</strong><br />ili<br /><strong>[color=#FF0000]</strong>Pozdrav<strong>[/color]</strong><br />što će oboje dati <span style="color:red">Pozdrav</span>.</li><li>Za promjenu veličine - tekst umetneš u <strong>[size=][/size]</strong>.<br />Ovaj tag ovisi o predlošku kojeg koristiš; preporučen format je numerička vrijednost koja predstavlja veličinu teksta u pikselima, počevši od 1 [toliko sitno da ćeš ga jedva vidjeti] pa sve do 29 [vrlo veliko].<br />Npr.<br /><strong>[size=9]</strong>SITNO<strong>[/size]</strong><br />će dati <span style="font-size:9px;">SITNO</span>;<br /><strong>[size=24]</strong>OGROMNO<strong>[/size]</strong><br />će dati <span style="font-size:24px;">OGROMNO</span>.</li></ul>'
),
array(
0 => 'Kombiniranje tagova?',
1 => 'Tagove možeš kombinirati... Npr. za privlačenje nečije pozornosti možeš napisati:<br /><strong>[size=18][color=red][b]</strong>POGLEDAJ ME!<strong>[/b][/color][/size]</strong><br />što će dati <span style="color:red;font-size:18px;"><strong>POGLEDAJ ME!</strong></span><br />Nije preporučljivo koristiti puno teksta koji je višestruko oblikovan jer se time gube čitljivost i preglednost.<br />Na tebi je da se pobrineš zatvoriti sve tagove.<br 
/>Npr. sljedeće oblikovanje je nepravilno: <strong>[b][u]</strong>Ovo je nepravilno<strong>[/b][/u]</strong>.'
),
array(
0 => '--',
1 => 'Citiranje i stvaranje teksta fiksne širine'
),
array(
0 => 'Kako citirati tekst u odgovoru?',
1 => 'Postoje dva načina citiranja teksta: s referencom ili bez reference.<br /><ul><li>Kada koristiš Citiraj funkciju za odgovaranje na post vidjet ćeš da je tekst posta na koji odgovaraš umetnut u <strong>[quote=&quot;&quot;][/quote]</strong> tag(ove).<br />Ova metoda omogućava citiranje s referencom prema osobi ili bilo čemu drugome što staviš.<br />Npr. za citiranje dijela teksta koji je napisao Mr. Blobby upišeš<br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Tekst koji je Mr. Blobby napisao...<strong>[/quote]</strong><br />Rezultat će biti taj da će pisati &quot;Mr. Blobby je napisao/la:&quot; - prije stvarnog teksta.<br />Zapamti da ime koje citiraš <strong>moraš</strong> unijeti između &quot;&quot; - navodnici nisu opcionalni.</li><li>Druga metoda omogućava naslijepo citiranje nečega.<br />Za postizanje toga umetneš tekst u <strong>[quote][/quote]</strong> tag(ove). <br />Rezultat će biti taj da će pisati &quot;Citat:&quot; - prije samog teksta.</li></ul>'
),
array(
0 => 'Kako prikazati kod ili nešto drugo fiksne širine teksta?',
1 => 'IŽeliš li prikazati dio koda ili bilo što drugo što zahtijeva fiksnu širinu, [npr. Courier tip slova...], umetneš tekst u <strong>[code][/code]</strong> tag(ove). Npr.<br /><strong>[code]</strong>echo &quot;Ovo je neki kod&quot;;<strong>[/code]</strong>.<br />Svo oblikovanje radi se unutar <strong>[code][/code]</strong> tag(ova) i zadržava se kada kasnije pogledaš napisano.'
),
array(
0 => '--',
1 => 'Stvaranje lista [popisa]'
),
array(
0 => 'Kako stvoriti nepobrojanu listu?',
1 => 'BBKod podržava dva tipa lista: nepobrojane i pobrojane.<br />One su u principu iste kao i njihovi HTML ekvivalenti.<br />Nepobrojana lista prikazuje svaku stavku u listi, jednu iza druge, označavajući svaku sa grafičkom oznakom.<br />Za nepobrojanu listu koristiš <strong>[list][/list]</strong> te odrediš svaku stavku koristeći <strong>[*]</strong>.<br />Npr. za izlistavanje tri određene boje koristiš:<br /><strong>[list]</strong><br /><strong>[*]</strong>Crvena<br /><strong>[*]</strong>Narančasta<br /><strong>[*]</strong>Žuta<br /><strong>[/list]</strong><br />što će dati<br /><ul><li>Crvena</li><li>Narančasta</li><li>Žuta</li></ul>'
),
array(
0 => 'Kako stvoriti pobrojanu listu?',
1 => 'Drugi tip liste, pobrojana lista, prikazuje svaku stavku u listi, jednu iza druge, označavajući svaku sa brojčanom odnosno alfabetskom oznakom.<br />Za pobrojanu listu koristiš <strong>[list=1][/list]</strong> za brojčanu listu odnosno <strong>[list=a][/list]</strong> za alfabetsku listu.<br />Kao i kod nepobrojane liste, stavke određuješ koristeći <strong>[*]</strong>. Npr.<br /><strong>[list=1]</strong><br /><strong>[*]</strong>Jedan<br /><strong>[*]</strong>Dva<br /><strong>[*]</strong>Tri<br /><strong>[/list]</strong><br />će dati<br /><ol type="1"><li>Jedan</li><li>Dva</li><li>Tri</li></ol><strong>[list=a]</strong><br /><strong>[*]</strong>Osoba A<br /><strong>[*]</strong>Osoba B<br /><strong>[*]</strong>Osoba C<br /><strong>[/list]</strong><br />će dati<br /><ol type="a"><li>Osoba A</li><li>Osoba B</li><li>Osoba C</li></ol>'
),
array(
0 => '--',
1 => 'Stvaranje linkova [veza]'
),
array(
0 => 'Kako napraviti link(ove)?',
1 => 'phpBB BBKod podržava više načina stvaranja URI-a, Uniform Resource Indicatora, poznatijih kao URL-ovi.<br /><ul><li>Prvi od njih koristi <strong>[url=][/url]</strong> tag(ove); bez obzira što upišeš poslije znaka = će uzrokovati da se sadržaj tagova 
ponaša kao URL.<br />Npr. za link na phpBB.com možeš koristiti<br /><strong>[url=http://www.phpbb.com/]</strong>Posjeti phpBB!<strong>[/url]</strong><br />
rezultat će biti <a href="http://www.phpbb.com/" target="_blank">Visit phpBB!</a><br />Vidjet ćeš da se link otvara u novom prozoru zato da bi korisnik/ca mogao/la nastaviti koristiti forum ako želi.</li><li>Želiš li da URL bude prikazan kao link možeš koristiti <br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br />rezultat će biti <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a>.</li><li>phpBB dodatno sadrži nešto što se zove <em>Magični linkovi</em>, a što će pretvoriti bilo koji ispravan URL u link bez upisivanja tag(ov)a ili prefiksa http://. Npr. upišeš li www.phpbb.com u post [bez tagova] automatski će u prikazu, kad pogledaš post, biti vidljiv link <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a>.</li><li>Na isti način, osim što ćeš koristiti druge tagove, možeš kreirati e-mail adrese. Npr.<br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong> odnosno, upišeš li samo, no.one@domain.adr<br />će biti prikazano kao <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>.</li></ul>Kao i sa svim BBKod tagovima, URL možeš postaviti oko bilo kojeg drugog taga kao što su <strong>[img][/img]</strong> [sljedeći odjeljak], <strong>[b][/b]</strong>, i sl.<br />Na tebi je da se pobrineš zatvoriti sve tagove.<br />Npr. sljedeće oblikovanje je nepravilno: <strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong>,<br />a može dovesti i do toga da ti post bude izbrisan [stoga pazi].'
),
array(
0 => '--',
1 => 'Prikazivanje slik(a)e u postu'
),
array(
0 => 'Kako dodati sliku u post?',
1 => 'phpBB BBKod sadrži tag(ove) za dodavanje slika u postove.<br />Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umećeš/umetneš mora biti dostupna na Internetu [Ne može postojati samo na tvojem računalu - osim ako imaš webserver!].<br />Za postanje slike, moraš obuhvatiti URL, na kojem se slika nalazi, sa: <strong>[img][/img]</strong> tago(vi)m(a). Npr.<br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong>.<br />Kao što je spomenuto u odjeljku iznad, sliku možeš obuhvatiti <strong>[url][/url]</strong> tago(vi)m(a). Npr.<br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br />će dati donju sliku.<br /><a href="http://www.google.com/" target="_blank"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
),
array(
0 => 'Kako dodati privitak u post?',
1 => 'Za postanje privitak(a), ukoliko je administrator/ica omogućio/la tu opciju te ukoliko imaš sva dopuštenja, [vidjet ćeš formu <em>Dodavanje privit(a)ka</em> ispod okvira za pisanje teksta posta], koristiš <strong>[attachment=][/attachment]</strong> tag(ove).'
),
array(
0 => '--',
1 => 'Ostalo'
),
array(
0 => 'Mogu li doda(va)ti vlastite tagove?',
1 => 'Ukoliko si administrator/ica foruma i imaš potrebna dopuštenja, možeš.'
)
);
?>