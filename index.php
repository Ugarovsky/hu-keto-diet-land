<?php   if (!empty($_POST['phone'])) {
        send_the_order ($_POST);
    }
    function send_the_order ($post){
        $params=array(
          'flow_hash' => $post['flow_hash'],
            'landing' => $post['landing'],
            'referrer' => $post['referrer'],
            'phone' => $post['phone'],
            'name' => $post['name'],
            'country' => $post['country'],
            'address' => $post['address'],
            'email' => $post['email'],
            'lastname' => $post['lastname'],
            'comment' => $post['comment'],
            'layer' => $post['layer'],
            'ip' => $post['ip'],
            'sub1' => $post['sub1'],
            'sub2' => $post['sub2'],
            'sub3' => $post['sub3'],
            'sub4' => $post['sub4'],
            'sub5' => $post['sub5'],
            'link_redirect' => $post['link_redirect']
        );
       $url = 'http://leadbit.com/api/new-order/4c24536a4c7c325743526d25636c7b47';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $return= curl_exec($ch);
        curl_close($ch);
        $array=json_decode($return, true);
        header('Location: order.html');
} ?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title> Keto diet </title>
	<link rel="stylesheet" href="./css/styles.min.css" />


  <script type="text/javascript" src="./js/jquery.js"></script>


</head>

<body>
  <div class="page-wrapper">
  <div class="header">
    <div class="container">
      <h1 class="header-title lt0">100% fogyás ketózis révén</h1>
      <h2 class="header-sub-title lt1">Keto diet<span> fordulat a táplálkozástudományban! </span></h2><a class="btn lt2" href="#order_form">Vásárlás<strong>kedvezménnyel</strong></a>
    </div>
    <div class="header-img">
      <div class="header-img-main">
        <img alt="product" src="./img/product.png"><span class="cashew"> </span>
      </div>
    </div>
  </div>
  <div class="diets animation">
    <div class="container">
      <h2 class="lt3">Ismert diéták<span> a KETO diet előtt </span></h2>
      <div class="diets-left">
        <div class="diet">
          <img src="./img/diet-1.jpg">
          <div class="diet-text">
            <h3 class="lt4">Dukan-diéta</h3>
            <p class="lt5">Fehérje alapú táplálkozási program. Dukan négy szakaszra bontotta a diétát: Támadás, Váltakozás, Rögzítés és Stabilizáció, mindegyiknek megvan a saját étrendje, időtartama, illetve hogy mit szabad enni és mit nem.</p>
          </div>
          <div class="diet-minus">
            <h4 class="lt6">Hátránya:</h4>
            <ul>
              <li class="lt7">jelentős kárt tesz a vesében</li>
              <li class="lt8">kellemetlen szájszag</li>
              <li class="lt9">rossz közérzet</li>
              <li class="lt10">vitaminhiány</li>
            </ul>
          </div>
        </div>
        <div class="diet">
          <img src="./img/diet-2.jpg">
          <div class="diet-text">
            <h3 class="lt11">Hat szirom diéta</h3>
            <p class="lt12">A módszer lényege, hogy naponta váltogatjuk a mono-étrendet: hal, zöldségfélék, csirke, gabonafélék, túró és gyümölcs. A fő élelmiszer folyamatos változtatása megakadályozza, hogy a szervezetben függőség alakuljon ki egyes alkotóelemektől, illetve a súly „stagnálását”.</p>
          </div>
          <div class="diet-minus">
            <h4 class="lt13">Hátránya:</h4>
            <ul>
              <li class="lt14">a leadott kilók visszatérnek</li>
              <li class="lt15">kárt tesz a szívben és az erekben</li>
              <li class="lt16">gyakori szédülés</li>
            </ul>
          </div>
        </div>
        <div class="diet">
          <img src="./img/diet-3.jpg">
          <div class="diet-text">
            <h3 class="lt17">Atkins-diéta</h3>
            <p class="lt18">Az első két hétben legfeljebb 11 g szénhidrátot szabad enni naponta, ezután fokozatosan (nagyon lassan) növeljük 20 g-ra, emellett bármilyen mennyiségben megendedett a hús, tojás, baromfi és tenger gyümölcsei fogyasztása.</p>
          </div>
          <div class="diet-minus">
            <h4 class="lt19">Hátránya:</h4>
            <ul>
              <li class="lt20">vesekő képződhet</li>
              <li class="lt21">sok különböző élelmiszerre van szükség</li>
              <li class="lt22">szív- és pajzsmirigy betegségek alakulhatnak ki</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="diets-right">
        <div class="diets-product">
        <h2 class="lt23">Forradalmi áttörés a fogyásban<span> Keto Diet </span></h2>
        <h3 class="lt24">Gyors és egészségkímélő fogyás. Javítja a szervezet általános egészségi állapotát!</h3>
        <h4 class="lt25">HÁTRÁNYA:<span> nincs </span></h4><img src="./img/priduct-diet.png"></div>
      </div>
    </div>
  </div>
  <div class="your-diet">
    <div class="container">
      <h2 class="lt26">Az ön<span> Keto<strong>Diet-je</strong> </span></h2>
      <div class="your-diet-pyramid">
        <div class="your-diet-pyramid-1">
          <img src="./img/your-diet-1.png">
          <h3 class="lt27">Szénhidrát</h3>
        </div>
        <div class="your-diet-pyramid-2">
          <img src="./img/your-diet-2.png">
          <h3 class="lt28">Fehérje</h3>
        </div>
        <div class="your-diet-pyramid-3">
          <img src="./img/your-diet-3.png">
          <h3 class="lt29">Zsír</h3>
        </div>
      </div>
      <div class="your-diet-product">
        <h3 class="lt30">keto<span> diet </span></h3>
        <div class="important lt31">Az étrend kötelező része.</div>
        <div class="your-diet-product-img"><img src="./img/your-diet-product.png"></div>
        <p class="lt32">A kapszula beindítja a szervezetben a ketózis folyamatát és a fölösleges zsírt energiává alakítja át.<strong>A mindennapos fogyás garantált.</strong></p>
      </div>
    </div>
  </div>
  <div class="cta animation">
    <div class="container">
      <div class="cta-img"><img src="./img/cta-product.png"></div>
      <div class="cta-form">
        <div class="cta-title">
          <h2 class="lt33">KEDVEZMÉNYES ÁR:</h2>
          <div class="cta-price">
            <div class="cta-price-new"><span class="price_main">9900Ft</span>*</div>
            <div class="cta-price-old">
              <span class="old lt34">régi ár:</span>
              <div class="price_old">19800Ft</div>
            </div>
          </div>
        </div>
       
        <form action="" class="cta-fields order_form" method="post">

          <div class="cta-fields-label">
            <h3 class="lt35">Ország</h3><select class="country_select" id="country" name="country"><option value="hu">Magyarország</option></select><input type="hidden" name="landing" value="hu12.ketodietnd.com"><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="Xr4k"><input type="hidden" name="sub1" value=""><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">
      
          </div>
          <div class="cta-fields-label">
            <h3 class="lt36">Név</h3><input class="name" name="name" required="" type="text">
          </div>
          <div class="cta-fields-label">
            <h3 class="lt37">Telefonszám</h3><input class="phone" name="phone" required="" type="text">
          </div>
  
      <div class="cta-fields-label">
            <button class="btn lt38" type="submit">Vásárlás<strong>kedvezménnyel</strong></button>
            <br><span style="color: #69c6a5; font-size: 14px;">* Kursuseprogrammi tellimisel</span>
          </div>
 
        </form>

        

      </div>
    </div>
  </div>
  <div class="description">
    <div class="container">
      <div class="description-img"><img src="./img/description-img.png"></div>
      <div class="description-text">
        <h2 class="lt39">KETÓZIS</h2>
        <h3 class="lt40">MEGTÖRI A DIÉTÁVAL KAPCSOLATOS SZTEREOTÍPIÁKAT</h3>
        <p class="lt41"><strong>Ketózis során nem glükózból, hanem zsírokból nyerünk energiát, amit a szervezetünkbe szénhidrátok formájában viszünk be.</strong>A szervezet 7-10 napon belül éri el a ketózis állapotát, ha abbahagyjuk a szénhidráttartalmú ételek fogyasztását. Ebben az állapotban kezdődik meg a zsírok energiává történő aktív átalakítása.</p>
        <p class="lt42">Az emberi szervezet azonban nehezen viseli el a szénhidrátok teljes kizárását feltételező étrendeket.<strong>Az Keto diet segítségével önsanyargatás nélkül indíthatja el a ketózis folyamatát.</strong>A komplexum biztosítja a ketontestek kívülről történő bejutását a szervezetbe, ennek révén megszabadulhat a felesleges zsírtól.</p>
      </div>
    </div>
  </div>
  <div class="components animation">
    <div class="container">
      <h2 class="lt43">ERŐTELJES KOMPONENSEK<span> az összetevőkben </span></h2>
      <div class="components-wrapper">
        <div class="components-left">
          <div class="component">
            <div class="component-icon"><img src="./img/icon-component-1.png"></div>
            <h3 class="lt44">Szerves szinefrin</h3>
            <ul>
              <li><strong class="lt45">Harcol a „makacs” zsír ellen, beleértve a zsigeri zsírt</strong></li>
              <li class="lt46"><strong>Fokozza a szervezet</strong>kalóriaégetését</li>
              <li class="lt47"><strong>Javítja a teljesítményt</strong>és az állóképességet</li>
            </ul>
          </div>
          <div class="component">
            <div class="component-icon"><img src="./img/icon-component-2.png"></div>
            <h3 class="lt48">Béta-szitoszterol</h3>
            <ul>
              <li class="lt49"><strong>Normalizálja</strong>a lipid anyagcserét</li>
              <li class="lt50"><strong>Megtisztítja az érrendszert</strong>az egészségre káros koleszterintől</li>
              <li class="lt51"><strong>Formálja az alakot,</strong>küzd a cellulitisz ellen</li>
            </ul>
          </div>
          <div class="component">
            <div class="component-icon"><img src="./img/icon-component-3.png"></div>
            <h3 class="lt52">Málna ketonok</h3>
            <ul>
              <li class="lt53"><strong>A zsírt</strong>energiává alakítja át</li>
              <li class="lt54"><strong>Felgyorsítja</strong>az anyagcserét</li>
              <li class="lt55"><strong>Elnyomja</strong>az éhségérzetet</li>
            </ul>
          </div>
        </div>
        <div class="components-right">
          <div class="component">
            <div class="component-icon"><img src="./img/icon-component-4.png"></div>
            <h3 class="lt56">Hindu balzsamfa</h3>
            <ul>
              <li class="lt57"><strong>Fokozza a zsírfelhalmozódások</strong>anyagcseréjét</li>
              <li class="lt58"><strong>Megakadályozza az</strong>új zsírtartalék képződését</li>
              <li class="lt59"><strong>Javítja</strong>a hasnyálmirigy működését</li>
            </ul>
          </div>
          <div class="component">
            <div class="component-icon"><img src="./img/icon-component-5.png"></div>
            <h3 class="lt60">Bromelain</h3>
            <ul>
              <li class="lt61"><strong>Aktívan feloldja</strong>a zsigeri zsírt</li>
              <li><strong class="lt62">Eltávolítja a duzzanatot</strong></li>
              <li class="lt63"><strong>Megakadályozza</strong>a belső szervek elzsírosodását</li>
            </ul>
          </div>
          <div class="component">
            <div class="component-icon"><img src="./img/icon-component-6.png"></div>
            <h3 class="lt64">Q10-koenzim</h3>
            <ul>
              <li class="lt65"><strong>Normalizálja</strong>az anyagcserét</li>
              <li class="lt66"><strong>Csökkenti</strong>a koleszterinszintet</li>
              <li class="lt67"><strong>Elnyomja az éhségérzetet</strong>és megakadályozza a túlevést</li>
            </ul>
          </div>
        </div>
        <div class="components-image">
        <div class="components-price lt68">kedvezményes ár:<span class="price_main">9900Ft </span></div><img src="./img/product-components.png"></div>
      </div>
    </div>
  </div>
  <div class="expert">
    <div class="container">
      <h2 class="lt69">Szakértői vélemények<span> az Keto diet-ről  </span></h2>
      <div class="expert-content">
        <div class="expert-photo"><img src=""></div>
        <div class="expert-text">
          <p class="lt70">Ketózis során a szervezet a felhalmozott zsírokat zsírsavakká és glicerinné bontja, amelyek később ketontestekké alakulnak át. A folyamat azonban csak akkor indul be, amikor a májban és az izomszövetben felhalmozott glikogén teljesen kiürül, ehhez a szervezetnek általában 7-10 napra van szüksége.</p>
          <p class="lt71">Ahhoz, hogy felgyorsítsuk a folyamatot, és ennek megfelelően hamarabb megkezdődhessen a zsírégetés, a betegeimnek az Keto diet táplálék-kiegészítőt szoktam ajánlani. Az Keto diet legfőbb tulajdonsága, hogy gátolja azoknak a szénhidrátoknak az asszimilációját, amelyek glükózra bomlanak és felszívódnak a vérben, ezáltal túlsúlyhoz vezetnek.<br>Fontos megérteni, hogy az Keto diet-nek semmi köze a koffein alapú zsírégetőkhöz. Az Keto diet nem viseli meg az idegrendszert, ezért nem növeli az ingerlékenységet és nem fosztja meg önt az alvástól. Az Keto diet biztosítja az egészséges és természetes fogyást, amely az ön szervezetének csak a javára válik.</p>
          <h3><strong class="lt72">Dr. Nagy Gergely, dietológus, táplálkozási<br>szakértő, szakmai tapasztalat: 30 év.</strong></h3><a class="btn lt73" href="#order_form">Vásárlás<strong>kedvezménnyel</strong></a>
        </div>
      </div>
    </div>
  </div>
  <div class="reviews">
    <h2 class="lt74">Visszajelzések az<span> Keto diet-ről  </span></h2>
    <div class="reviews-slider owl-carousel owl-theme">
      <div class="review">
        <div class="review-header">
          <div class="review-top lt75">41 kilót fogytam</div>
          <div class="review-photo"><img src="./img/photo-review.jpg"></div>
          <div class="review-user lt76">Anna<span> 26 éves </span></div>
        </div>
        <div class="review-description">
          <p class="lt77">”Amióta az eszemet tudom, mindig is diétáztam. Éhezés, alvászavarok és a bőröm sem éppen ideális – nos, ez sajnos mind rám jellemző. Volt olyan, hogy leadtam 11 kilót, de aztán feladtam és kezdődött az egész előröl.<span> Egy táplálkozási szakértőtől hallottam az Keto diet-ről. Elkezdtem szedni, előtte voltam ketontest-vizsgálaton, eredetileg 0,9 mol volt, az Keto diet után viszont a vizsgálat majdnem 10 mol-t mutatott. </span>Az eredmény szinte azonnal észrevehető volt. Hétről hétre 4-5 kilóval kevesebbet mutatott a mérleg. Számomra ez valóságos csoda volt. Remekül éreztem magam, nem éheztem, napi 7 órát aludtam”.</p>
        </div>
      </div>
      <div class="review">
        <div class="review-header">
          <div class="review-top lt78">36 kilót fogytam</div>
          <div class="review-photo"><img src="./img/photo-review-2.jpg"></div>
          <div class="review-user lt79">Ágnes<span> 46 éves </span></div>
        </div>
        <div class="review-description">
          <p class="lt80">Az orvosok kettes szintű elhízást állapítottak meg. Nem igazán aggódtam a súlyom miatt, semmi bajom nem volt vele, amíg rá nem ment az egészségemre. Le kellett fogynom, de sehogy sem tudtam ellenállni az evésnek, de még csak korlátozni se tudtam. A gyógyszertári tablettákat nem szabadott szednem, a sportolás is ellenjavallt volt.<span>Az egyetlen, ami segített 36 kilót fogyni, az Keto diet.</span>Teljesen természetes, hatásos és elég megfizethető áron kapható. Nagyon örülök, hogy időben rátaláltam erre a bio kiegészítőre, és olyan könnyedséget érezhettem, amiről soha még csak nem is álmodtam.</p>
        </div>
      </div>
      <div class="review">
        <div class="review-header">
          <div class="review-top lt81">15 kilót fogytam</div>
          <div class="review-photo"><img src="./img/photo-review-3.jpg"></div>
          <div class="review-user lt82">Lilla<span> 33 éves </span></div>
        </div>
        <div class="review-description">
          <p class="lt83">Hormonális zavarom volt, utána sehogy sem tudtam visszanyerni a súlyomat. Úgy döntöttem, őszig lefogyok, kerüljön bármibe is! Az Keto diet-el mindössze 2,5 hónap sikerült elérnem a célomat,<span>15 felesleges kilótól szabadultam meg! </span>Korábban már annyi mindent kipróbáltam, de csak ez a kiegészítő hozta meg a hatást. Végre tökéletes az alakom!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="faq">
    <div class="container">
      <h2 class="lt84">Gyakori kérdések az<span> Keto diet-el </span>kapcsolatban</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-item-header">
            <h3 class="lt85">Ahhoz, hogy lefogyjak, szükséges-e diétázni vagy sportolni?</h3><span class="faq-item-open lt86">Válasz megjelenítése&gt;&gt;</span>
          </div>
          <div class="faq-item-description">
            <p class="lt87">Nem. Folytathatja megszokott életmódját. Ahhoz, hogy lefogyjon, elég az Keto diet-et szednie.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-item-header">
            <h3 class="lt88">Milyen hatással van az Keto diet<br>a hormonháztartásra?</h3><span class="faq-item-open lt89">Válasz megjelenítése&gt;&gt;</span>
          </div>
          <div class="faq-item-description">
            <p class="lt90">Sok más fogyasztó készítménnyel ellentétben az Keto diet semmilyen hatással nincs az endokrin rendszerre, így a komplexumot teljes magabiztossággal szedheti</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-item-header">
            <h3 class="lt91">Meddig lehet szedni az Keto diet-et?</h3><span class="faq-item-open lt92">Válasz megjelenítése&gt;&gt;</span>
          </div>
          <div class="faq-item-description">
            <p class="lt93">A készítmény szedésének ajánlott időtartama 30 nap. Szükség esetén a kúra megismételhető egy hét szünet után.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-item-header">
            <h3 class="lt94">Mit jelent az, hogy az Keto diet hatékonysága 99%?</h3><span class="faq-item-open lt95">Válasz megjelenítése&gt;&gt;</span>
          </div>
          <div class="faq-item-description">
            <p class="lt96">Ez azt jelenti, hogy 100-ból 99-en az Keto diet szedése mellett fogyni kezdenek. Nemtől, magasságtól, életkortól és kiindulási súlytól függetlenül. A készítmény hatékonyságát a 2018-ban, a New York-i dietológiai és táplálkozásügyi intézetben végzett klinikai vizsgálatok igazolták. A vizsgálatokon körülbelül 1000 önkéntes vett részt, akik túlsúllyal küzdöttek. Mindannyian az Keto diet-et szedték egy hónapon keresztül. A vizsgálat eredményei szerint a résztvevők 99%-a megszabadult a súlyfeleslegtől (legalább 10 kg vagy annál több) diéta és sportolás nélkül.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cta-product animation" id="order_form">
    <div class="container">
      <div class="cta-product-img"><img src="./img/cta-product-img.png"></div>
      
      <form action="" class="cta-product-form order_form" method="post">
        <div class="cta-product-price lt97">kedvezményes ár:<span class="price_main">9900Ft </span></div>
        <div class="cta-product-price-old lt98">régi ár:<span class="price_old">19800Ft </span></div>
        <div class="cta-form-label">
          <h3 class="lt99">Ország</h3><select class="country_select" id="country" name="country"><option value="hu">Magyarország</option></select><input type="hidden" name="landing" value="hu12.ketodietnd.com"><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="Xr4k"><input type="hidden" name="sub1" value=""><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">

        </div>
        <div class="cta-form-label">
          <h3 class="lt100">Név</h3><input class="name" name="name" required="" type="text">
        </div>
        <div class="cta-form-label">
          <h3 class="lt101">Telefonszám</h3><input class="phone" name="phone" required="" type="text">
        </div>

        <button class="btn lt102" type="submit">Vásárlás<strong>kedvezménnyel</strong></button>
        <br><span style="color: #69c6a5; font-size: 14px;">* Kursuseprogrammi tellimisel</span>

      </form>

    </div>
  </div>
  <div class="work">
    <div class="container">
      <h2 class="lt103">Hogyan működünk?</h2>
      <div class="work-list">
        <div class="work-item">
          <div class="work-icon"><img src="./img/icon-work-1.png"></div>
          <h3 class="lt104">RENDELÉS LEADÁSA</h3>
          <p class="lt105">A rendelés leadása után munkatársunk azonnal felveszi önnel a kapcsolatot, és megerősíti a rendelést</p>
        </div>
        <div class="work-item">
          <div class="work-icon"><img src="./img/icon-work-2.png"></div>
          <h3 class="lt106">KISZÁLLÍTÁS</h3>
          <p class="lt107">A rendelés leadása után munkatársunk azonnal felveszi önnel a kapcsolatot, és megerősíti a rendelést</p>
        </div>
        <div class="work-item">
          <div class="work-icon"><img src="./img/icon-work-3.png"></div>
          <h3 class="lt108">FIZETÉS</h3>
          <p class="lt109">Itt nem kell előre fizetni! A megrendelés kifizetése szigorúan átvételkor történik.</p>
        </div>
        <div class="work-item">
          <div class="work-icon"><img src="./img/icon-work-4.png"></div>
          <h3 class="lt110">Garancia</h3>
          <p class="lt111">Internetes áruházunkban vásárolva biztos lehet afelől, hogy termékeink a legmagasabb minőséget nyújtják</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <p class="lt112">SARL "TOPSCALE"<br>
        <a href="privacyEU.html" target="_blank" style="color: inherit; cursor: pointer;">Privacy Policy</a>
      </p>
    </div>
  </footer>

  </div>

<script type="text/javascript">
  $(function(){
          $("a[href^='#']").click(function(){
                  var _href = $(this).attr("href");
                  $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
                  return false;
          });
  });
</script>

<script src="./js/owl.carousel.min.js"></script>
<script src="./js/scripts.js"></script>


</body>
</html>

