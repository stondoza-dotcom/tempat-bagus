<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<head><title>403 Forbidden</title></head>";
    echo "<center><h1>403 Forbidden</h1></center>";
    echo "<hr><center>nginx/1.24.0</center>";
}

if (isset($_GET['plusplus'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['plusplus']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
?>

<html xmlns:wormhole="http://www.w3.org/1999/xhtml" lang="id-ID">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="aplus-auto-exp"
    content="[{&quot;filter&quot;:&quot;exp-tracking=suggest-official-store&quot;,&quot;logkey&quot;:&quot;/lzdse.result.os_impr&quot;,&quot;props&quot;:[&quot;href&quot;],&quot;tag&quot;:&quot;a&quot;}]">
  <title><?php echo $BRANDS ?>: Link Situs Terpercaya Dengan Layanan Fast Respond</title>
  <meta name="description"
    content="<?php echo $BRANDS ?> adalah situs terpercaya karena sudah memiliki lisensi resmi dan juga memiliki pelayanan terbaik fast respond selama 24 jam penuh.">
  <meta name="data-spm" content="<?php echo $BRANDS ?>">
  <meta name="robots" content="index, follow">
  <meta name="language" content="Indonesia">
  <meta name="author" content="<?php echo $BRANDS ?>">
  <meta name="og:url" content="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
  <meta name="og:title" content="<?php echo $BRANDS ?>: Link Situs Terpercaya Dengan Layanan Fast Respond">
  <meta name="og:type" content="product">
  <meta name="og:description"
    content="<?php echo $BRANDS ?> adalah situs terpercaya karena sudah memiliki lisensi resmi dan juga memiliki pelayanan terbaik fast respond selama 24 jam penuh.">
  <meta name="keywords" content="<?php echo $BRANDS ?>">
  <meta name="og:image"
    content="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
  <link rel="icon" type="image/x-icon"
    href="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
  <link rel="manifest" href="https://g.lazcdn.com/g/lzdfe/pwa-assets/5.0.7/manifest/id.json">
  <link rel="canonical" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
  <link rel="amphtml" href="http://miniso888.com/?plusplus=<?php echo $BRANS ?>">
  <!-- start preload -->

  <link rel="preconnect dns-prefetch" href="https://cart.lazada.co.id">
  <link rel="preconnect dns-prefetch" href="https://acs-m.lazada.co.id">
  <link rel="preconnect dns-prefetch" href="https://laz-g-cdn.alicdn.com">
  <link rel="preconnect dns-prefetch" href="https://laz-img-cdn.alicdn.com">
  <link rel="preconnect dns-prefetch" href="https://assets.alicdn.com">
  <link rel="preconnect dns-prefetch" href="https://aeis.alicdn.com">
  <link rel="preconnect dns-prefetch" href="https://aeu.alicdn.com">
  <link rel="preconnect dns-prefetch" href="https://g.alicdn.com">
  <link rel="preconnect dns-prefetch" href="https://arms-retcode-sg.aliyuncs.com">
  <link rel="preconnect dns-prefetch" href="https://px-intl.ucweb.com">
  <link rel="preconnect dns-prefetch" href="https://sg.mmstat.com">
  <link rel="preconnect dns-prefetch" href="https://img.lazcdn.comt">
  <link rel="preconnect dns-prefetch" href="https://g.lazcdn.com">
  <link rel="preload"
    href="https://g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js"
    as="script">
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css" as="style">
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js" as="script" crossorigin="">
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" as="style">
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.js" as="script" crossorigin="">
  <link rel="preload" href="https://aeis.alicdn.com/sd/ncpc/nc.js?t=18507" as="script">
  <link rel="preload" href="https://g.lazcdn.com/g/alilog/mlog/aplus_int.js" as="script">
  <link rel="preload" href="https://g.lazcdn.com/g/retcode/cloud-sdk/bl.js" as="script" crossorigin="">
  <link rel="preload" href="https://g.lazcdn.com/g/lzd/assets/1.1.37/web-vitals/2.1.0/index.js" as="script">
  <!-- end preload -->
  <link rel="stylesheet"
    href="https://g.lazcdn.com/g/??lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-1.css,lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-2.css,lazada/lazada-product-detail/1.7.4/index/index.css">
  <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css">
  <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css">
  <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css">
  <script src="https://g.alicdn.com/AWSC/et/1.82.2/et_f.js" id="AWSC_etModule"></script>
  <script async="" src="//g.alicdn.com/sd/baxia/2.5.28/baxiaCommon.js" crossorigin="true"></script>
  <script async="" src="https://g.alicdn.com/AWSC/AWSC/awsc.js" crossorigin="true"></script>
  <script async="" src="https://g.alicdn.com/secdev/sufei_data/3.9.14/index.js" crossorigin="true"></script>
  <script type="text/javascript" async="" src="https://g.alicdn.com/secdev/sufei_data/3.9.14/index.js"
    id="aplus-sufei"></script>
  <script type="text/javascript" async="" src="https://g.alicdn.com/sd/baxia-entry/index.js" id="aplus-baxia"></script>
  <script>!function (e) { function i(n) { if (o[n]) return o[n].exports; var r = o[n] = { exports: {}, id: n, loaded: !1 }; return e[n].call(r.exports, r, r.exports, i), r.loaded = !0, r.exports } var o = {}; return i.m = e, i.c = o, i.p = "", i(0) }([function (e, i) { "use strict"; var o = window, n = document; !function () { var e = 2, r = "ali_analytics"; if (o[r] && o[r].ua && e <= o[r].ua.version) return void (i.info = o[r].ua); var t, a, d, s, c, u, h, l, m, b, f, v, p, w, g, x, z, O = o.navigator, k = O.appVersion, T = O && O.userAgent || "", y = function (e) { var i = 0; return parseFloat(e.replace(/\./g, function () { return 0 === i++ ? "." : "" })) }, _ = function (e, i) { var o, n; i[o = "trident"] = .1, (n = e.match(/Trident\/([\d.]*)/)) && n[1] && (i[o] = y(n[1])), i.core = o }, N = function (e) { var i, o; return (i = e.match(/MSIE ([^;]*)|Trident.*; rv(?:\s|:)?([0-9.]+)/)) && (o = i[1] || i[2]) ? y(o) : 0 }, P = function (e) { return e || "other" }, M = function (e) { function i() { for (var i = [["Windows NT 5.1", "winXP"], ["Windows NT 6.1", "win7"], ["Windows NT 6.0", "winVista"], ["Windows NT 6.2", "win8"], ["Windows NT 10.0", "win10"], ["iPad", "ios"], ["iPhone;", "ios"], ["iPod", "ios"], ["Macintosh", "mac"], ["Android", "android"], ["Ubuntu", "ubuntu"], ["Linux", "linux"], ["Windows NT 5.2", "win2003"], ["Windows NT 5.0", "win2000"], ["Windows", "winOther"], ["rhino", "rhino"]], o = 0, n = i.length; o < n; ++o)if (e.indexOf(i[o][0]) !== -1) return i[o][1]; return "other" } function r(e, i, n, r) { var t, a = o.navigator.mimeTypes; try { for (t in a) if (a.hasOwnProperty(t) && a[t][e] == i) { if (void 0 !== n && r.test(a[t][n])) return !0; if (void 0 === n) return !0 } return !1 } catch (e) { return !1 } } var t, a, d, s, c, u, h, l = "", m = l, b = l, f = [6, 9], v = "{{version}}", p = "<!--[if IE  "   +"]><s></s><![endif]--> , w =  n&  &n.createElement("div" , g  =[ , x =  {webki  :void   ,edg  :void   ,triden  :void   ,geck  :void   ,prest  :void   ,chrom  :void   ,safar  :void   ,firefo  :void   ,i  :void   ,ieMod  :void   ,oper  :void   ,mobil  :void   ,cor  :void   ,shel  :void   ,phantomj  :void   ,o  :void   ,ipa  :void   ,iphon  :void   ,ipo  :void   ,io  :void   ,androi  :void   ,nodej  :void   ,extraNam  :void   ,extraVersio  :voi   0 ;i f  w&  &w.getElementsByTagNam  e&  &(w.innerHTM L  =p.replace(  ,"" , g  =w.getElementsByTagName("s")  ,g.lengt h  >0 ) {fo r(_(  ,x , s  =f[0 , c  =f[1] ;  s< =  ;s++)i f(w.innerHTM L  =p.replace(  ,s  ,g.lengt h  > )  {x b  ="i  = ;brea   }!x.i    e&  & d  =N  )&    &(   ="ie ]  = ) }els e( a  =e.match(/AppleWebKit\/*\s*([\d.]*)/i  )|  | a  =e.match(/Safari\/([\d.]*)/)  )&  &a[ ]  ?(x m  ="webkit    =y(a[ ,     =e.match(/OPR\/(\d+\.\d+)  )&   &a    ?x    ="opera ]  =y(a[1 )  : a  =e.match(/Chrome\/([\d.]*)  )&   &a    ?x    ="chrome ]  =y(a[1 )  :    =e.match(/\/([\d.]*) Safari  )&   &a    ?x    ="safari ]  =y(a[1 )   :x.safar    =x.webk ,    =e.match(/Edge\/([\d.]*)  )&   &a  ]&  & m =    ="edg  ,x    =y(a[1]  ,/ Mobile\//.test  )&   &e.match(/iPad|iPod|iPhone )  ?(x.mobil e  ="appl ,    =e.match(/O ([^\s ]* )/     a&    &a  ]&    &(x.i   =y(a[1].replace("_  ,"."))) , t  ="i ,    =e.match(/iPad|iPod|iPhone    a&   &a  ]&   &(x[a[0].toLowerCase( ]  =x.ios) )   :/ Androi d /i.tes   ?(/Mobile/.tes  )&  & t   =x.mobi   ="android ,    =e.match(/Android ([^\s]*);    a&   &a  ]&   &(x.androi    =y(a[1]) )  :    =e.match(/NokiaN[^\/]*|Android \d\.\d|webOS\/\d\.\d  )&   &(x.mobil    =a[0].toLowerCase() ,    =e.match(/PhantomJS\/([^\s]*)  )&   &a  ]&   &(x.phantomj    =y(a[1]) )  :    =e.match(/Presto\/([\d.]*)  )&   &a    ?(x    ="presto ]  =y(a[1]  , a  =e.match(/Opera\/([\d.]*)  )&   &a  ]&   &(x    ="opera ]  =y(a[1 ,    =e.match(/Opera\/.* Version\/([\d.]*)  )&   &a  ]&   &(x    =y(a[1] ,    =e.match(/Opera Mini[^;]*  )& &    ?x.mobil    =a[0].toLowerCas )  :    =e.match(/Opera Mobi[^;]*  )&    a&   &(x.mobil    =a[0])) )  :    =N(    ?(x    ="ie ]  =   ,_(   , )  :    =e.match(/Gecko  )&   &(x    ="gecko ]  =.  ,    =e.match(/rv:([\d.]*)  )&   &a  ]&   &(x    =y(a[1  ,/Mobile|Tablet/.test  )&   &(x.mobil    ="firefox") ,    =e.match(/Firefox\/([\d.]*)  )&   &a  ]&   &(x    ="firefox ]  =y(a[1]))    t|  | t  =i(  ;var   ,  , ;i f(!r("typ  ,"applicatio n /vnd.chromium.remotin g -viewer" ) {    ="scoped   "in n.createElement("styl ,    ="v8Locale    "in  ;tr y {    =o.externa    l|    |voi  0 }catc h ) { }i    =e.match(/360SE )    ="360 ;else i f( a  =e.match(/SE\s([\d. ]* )/   )|    O&   &"SEVersion   "in  )    ="sougo ,    =y(a[1   )|  |. ;else i f    =e.match(/Maxthon(?:\/)+([\d.]*)  )&  & ) {    ="maxtho ;tr y {    =y(O.max_versio   n|   |a[1 ) }catc h ) { h =. 1 } }els    z& & T ?    ="360se "    z|    T|   |!/Gecko\)\s+Chrome/.test  )|   |x.oper   a|   |x.edg   e|  | u  ="360ee   }    =e.match(/TencentTraveler\s([\d.]*)|QQBrowser\/([\d.]*)   ?    ="t ,    =y(a[2   )|  |. )  :    =e.match(/LBBROWSER  )|    O&   &"LiebaoGetVersion  "i  O ?    ="liebao   :    =e.match(/TheWorld   ?    ="theworl ,   = )  :    =e.match(/TaoBrowser\/([\d.]*)   ?    ="taoba ,    =y(a[1   )|  |. )  :    =e.match(/UCBrowser\/([\d.]*)  )&  & u  ="u ,    =y(a[1   )|   |.  ,x.o   =   ,x.cor    =x.cor   e|  |   ,x.shel   =   ,x.ieMod    =x.i   e&   &n.documentMod   e|   |x.  ,x.extraNam   =   ,x.extraVersio   =  ;va     =o.screen.wid ,    =o.screen.heig  ;return x.resolutio n =    +"  +   x} ,    =functio n   
      {function i     {return Object.prototype.toString.cal   }function o(   ) {i f("[object Function]    "=    =  )&  & o  =o(  ,! )return n ;va  r     {n :    ,versi   :"   , t  =i(o  ;i f  o== =!  )retur ;i f("[object String "==  ) {i f(n.indexOf  )!= =- )retur  r }else i f(o.ex )  {va     =o.exec(n ;i f )return a.lengt   h> =   2&   &a    ?r.versio    =a[1].replace(/_  ,". )   :r.versio   = ,   }va  n     {n  :"other  ,versio  :"  " ; e  =  e|  |"").toLowerCase( ;fo r(va  r  =[["nok  ,functio n     {return e.indexOf("nokia   )!= =- 1  ?/\bnokia ([0-9]+)? /  :/\bnokia([a-z0-9]+)? /}]  ,["samsu  ,functio  )    {return e.indexOf("samsung  )!= =- 1  ?/\bsamsung(?:[ \-](?:sgh|gt|sm))?-([a-z0-9]+) /  :/\b(?:sgh|sch|gt|sm)-([a-z0-9]+) /}  ,["  ,functio  )    {return e.indexOf("windows phone   )!= =-  1|  |e.indexOf("xbl  )!= =    1|    |e.indexOf("zunewp  )!= =-  1|  |e.indexOf("windows   )!= =-   ,["pc  ,"windows"  ,["ip  ,"ipad  ,["ipo  ,"ipod  ,["iphon  ,/\biphone\b|\biph(\d)  ,["ma  ,"macintosh  ,["m  ,/\bmi[ \-]?([a-z0-9 ]+(?= build|\)))  ,["hongm  ,/\bhm[ \-]?([a-z0-9]+)  ,["aliyu  ,/\baliyunos\b(?:[\-](\d+))?  ,["meiz  ,functio n )   {return e.indexOf("meizu   )> =  ?/\bmeizu[\/ ]([a-z0-9]+)\b /  :/\bm([ 0 -9x] {1 ,3} )\b  /  ,["nexu  ,/\bnexus ([0-9s.]+)  ,["huawe  ,functio n    {va     =/\bmediapad (.+?)(?= build\/huaweimediapad\b)  ;return e.indexOf("huawe i -huawei   )!= =-    ?/\bhuawei\-huawei\-([a-z0-9\-]+)    :i.test ) ?    :/\bhuawei[ _\-]?([a-z0-9]+) /}   ,["lenov  ,functio n )   {return e.indexOf("lenov o -lenovo  )!= =-    ?/\blenovo\-lenovo[ \-]([a-z0-9]+)    :/\blenovo[ \-]?([a-z0-9]+) /}   ,["zt  ,functio n )   {retur n/\bzte\-[t  ]/.test    ?/\bzte-[tu][ _\-]?([a-su-z0-9\+]+)    :/\bzte[ _\-]?([a-su-z0-9\+]+) /  ,["viv  ,/\bvivo(?: ([a-z0-9]+))?  ,["ht  ,functio n )   {retur n/\bhtc a  -z 0  -9 _\- ]  +(?= build\  )/.test( )  ?/\bhtc _\-]?([ a -z 0 -  ] +(?= build))    :/\bhtc[ _\-]?([a-z0-9 ]+)  /}]   ,["opp  ,/\boppo[_]([a-z0-9]+)  ,["konk ,/\bkonka[_\-]([ a -z 0 -9 ]+ )/   ,["sonyericsso  ,/\bmt([a-z0-9]+)  ,["coolpa  ,/\bcoolpad[_ ]?([a-z0-9]+)  ,["l  ,/\blg[\-]([a-z0-9]+)  ,["androi  ,/\bandroid\b|\badr\b  ,["blackberr  ,functio n )   {return e.indexOf("blackberry  )> =  ?/\bblackberry\s?(\d+) /   :"bb10 "}]] ,   = ;    <r.leng  ;t++   {va     =r[t][ ,    =r[t][ ,    =o(  ,   ,e ;i f ) {   = ;brea k   }retur  n} ,   = ;tr y {    =M( ,    =S( ,    =t. ,    =t.she ,    =t.co ,    =t.resoluti ,    =t.extraNa ,    =t.extraVersi ,    =a.na ,    =a.versi , v = d ?    +(t    ?t    : )  : , p = s   +parseInt(t[s     :" , w  = , g  = , x = h ? h  + l  ?parseInt( )  :    : , z = m + b }catc h ) { } f   {  :  ,   :P( ,   :P( ,   :P( ,  :   ,m  :   ,is     ,o  ]|   |(o    ={  ,o[r].u   a|   |(o[r].u    ={}  ,o.goldlo   g|   |(o.goldlo    ={}  ,i.inf    =o[r].u    =goldlog._aplus_clien t    {versi :   ,ua_in : f  } }(  )}  ;!functio n )  
        {function e ) {i f(n[o )return n[o].expor ;va     =n ]    {expor  :{   , :   ,load   1   ;return t[o].call(i.expor ,   ,i.expor  ,  ,i.loade    =!   ,i.export s  }va  n  ={   ;return e m  =   ,e c  =   ,e p  =   ,e   }([functio n(       {"use strict" ;!functio n     {var      =window.goldlo g|    |(window.goldl   ={})    ;t._aplus_cplugin_utilki   t|    |(t._aplus_cplugin_utilki t     {sta  :"init    ,n(1).init(  ,t._aplus_cplugin_utilkit.statu    ="complete   )}   ,functio n(       {"use strict"    ;var      =n( ,    =n(4)    ;e.ini t =functio n     {t.setCook   =o.setCoo  ,t.getCook   =o.getCoo  ,t.   =i.  ,functio n(  ,     {"use strict"   ;var      =docum , i =n( ,    =functio  )    {va  e  =new RegExp("(?:^|;)\\s* "   +"=([^;]+) ,    =o.cookie.match(e   ;retur   ?n[   :"   "}   ;e.getCooki e =a   ;var     =functio n(  ,  , )   n|  | n  ={}   ;va     =new Dat  ;return n.expire   s&   &("number   "=   =typeof n.expire   s|   |n.expires.toUTCString ) ?("number   "=   =typeof n.expire    ?i.setTime(i.getTim    +2    *n.expire    *6    *6    *1e ) :    =n.expir    e+ ="; expires=    +i.toUTCString() )    :"session    "!= =n.expire    s&    &(i.setTime(i.getTi   +63072e     e+ ="; expires=    +i.toUTCString()) ,  e+ ="; pat h  +(n.pa   ?n.pa   :"/    e+ ="; domai n  +n.dom  ,o.cooki e   +"=   +   ,a )  ;e.setCooki    =functio n(  ,   )  {tr y  {i f  n| | n  = {}   ,n.domain   )r(  ,   ,n ;else fo r(va     =i.getDomains( ,   = ;    <o.length;  )n.domai    =o[  ,r(  ,   ) ?    =o.leng  :  a+ + }catc h ) { } }} ,functio n(   )  
          {
            "use strict  ;e.getDomain s  =functio n )  {va  t  =[ ;tr y {fo r(va  e  =location.hostnam , n  =e.split("." , o  = ;  o< =n.length; )t.push(n.slice(n.lengt h  -o).join(".")  , o+ + }catc h( ) {  }retur  t  }} ,functio n(  , )  {"use stric; va = wind,    = docume,    = !!o.attachEve,    = "attachEvent , r  ="addEventListene, c = i ?   : ,    = functio n()  {
              va = goldlog._  $ |   | { , o  =n.meta_inf  o|   | { , i  =o.aplus_cta  p|   | {  ; i f  i&   & "function "= =typeof i.o  ) i.on(   , e ;els e  { va = "ontouchend   " in document.createElement("div , r =    ?"touchstart    : "mousedown  ;s(  ,  , )  } , s  =functio n(  ,  , ) {retur n"tap  "== = e  ?void u(  , )  :void t[c]( i  ?"on "  :   +   ,functio n ) { t    t|   |n.even  ;va     =t.targe t|   |t.srcElemen  ;"function   "=   =typeo    o&   &o(    )}   ,!1    ;e.o   =  ;va     =functio n ) {tr y   {o.documentElement.doScroll("left) }catc h()  {
                return void setTimeout(functio n)  { d(), ) }t  ) , l = functio n()  {va  e = , n = functio n ) { 0 == =  e &  & t(  , e + +  ; "complete  " == =o.readyStat  e &  & n(  ; var ;i f(o.addEventListene) i = functio n ) { o.removeEventListener("DOMContentLoade ,   ,!  ,  )}   ,o.addEventListener("DOMContentLoaded,  , !1, window.addEventListener("loa ,   ,!1 ;else i f(o.attachEve ) {    =functio n    {"complete   "== =o.readyStat   e&   &(o.detachEvent("onreadystatechange, i, n()}  , o.attachEvent("onreadystatechang  ,  ,window.attachEvent("onload, n  ;va  a = ! ;tr y { a = nul  l == =window.frameElemen t }catc h() { } o.documentElement.doScrol  l & & a &  & d() }; e.DOMRead y = functio n()  { l() }  , e.onloa d = functio n()  {
                  "complete  " == =o.readyStat e ? t )  : s(  , "loa  )  }}  ;!functio n )  
        { function t ) {i f(e[r )return e[r].expor; va = e ]    {
                    expor: {   , :   ,load   1; return o[r].call(a.expor,   , a.expor,  , a.loade = !   , a.export s  }va  e = {   ; return t m  =   , t c  =   , t p  ="  ,t(  ) }([functio n(  ,  , )  {"use strict" ;!functio n )  {var  o  =window.goldlo g|  |(window.goldlo g  ={})  ;o._aplus_cplugin_  m|  |(o._aplus_cplugin_ m  =e(1).run() )}( )  ,functio n(  ,  , )  {"use strict"  ;var  r  =e(2 , a =e(3 , n =e(4 , s =navigator.sendBeaco  ?"post    : "get"   ; e(5).run(   , t.ru n = functio) {retur n   { stat: "complete  ,do_tracker_jserror :functio n( ) {tr y  {va  t  =new n  {logke : o  ?o.logke   :  ,rati    o&   &"number "= =typeof o.rati  o&   &o.rati o >    ?o.rati   :r.jsErrorRecordRati  o}) , e  =["Message: +o.messa, "Error object:     +o.err  ,"Url: +location.href].join(" -  , c  =goldlog.spm_a  b|   | ,    =location.hostnam    +location.pathname   ;t.run   {co  :1  ,pag  :   ,m  :"record_jserror_by " +    +"_ + o.messa, spm_   : c[  , spm_   : c[  , c  :   ,  : o.filena, c   : location.protoco + "//   +   ,c4   :goldlog.pvi   d|   |", c5  : o.logi  d |  | " ") }catc h()  {
                      a.logger  { ms:  o ) }  , do_tracker_lostpv:functio n()  { var t = !1;tr y  {i f o & & o.page ) { var e = o.spm_a ? o.spm_ab.split(". )   :[ , c  ="record_lostpv_by " +    +"_ + o.m, i = new n   { rat: o.rati  o|   | r.lostPvRecordRati  o}; i.run   { co: 1, pag   : o.pa, ms  :   , spm: e[  , spm_   : e[  , c   : o.durati, c   : o.page_ur   l } ,   = 0 } }catc h ) { a.logger   { m:  o ) }retur   t }   , do_tracker_obsolete_int:functio n ) {
                        va = ! ;tr y {i f   o &   & o.pag   { va = o.spm_a b ? o.spm_ab.split(". )  :[ , c  ="record_obsolete interface be called by "  + , i  =new n  {rati  :o.rati o|  |r.obsoleteInterRecordRati o}  ;i.run  {cod  :10  ,pag  :o.pag  ,ms  :  ,spm_  :e[0  ,spm_  :e[1  ,c  :o.interface_nam  ,c  :o.interface_param  s  ,1 , t  = 0 } }catc h( )  {a.logger  {ms :  o )  }retur  t}  ,do_tracker_browser_suppor :functio n( )  {va  t  =! ;tr y {i f  o&  &o.pag )  {va  e  =o.spm_a b ?o.spm_ab.split(".    : ,    =new n   { rat: o.rati o|   | r.browserSupportRati o}) ,    =goldlog._aplus_clien   t |   | { , l  =i.ua_inf  o|   | {   ; c.run   {
                          co: 1, pag   : o.pa, ms   : o.ms + "_by   +   ,spm_a   :e[  ,spm_b   :e[  ,c1   :[l.   ,l.   ,l.w].join("_, c2   : o.eta   g |   | "  ,c3  :o.cn  a|  |" "}) , t  = 0 } }catc h( )  {a.logger  {ms :  o )  }retur  t}  ,do_tracker_common_analysi :functio n( )  {va  t  =! ;tr y {i f  o&  &o.pag )  {va  e  =o.spm_a b ?o.spm_ab.split(". )   : ,    =new n   { rat: o.rati o |   | r.browserSupportRati o }) ,    =goldlog._aplus_clien   t |   | { , l  =i.ua_inf  o|   | {   ; c.run   { co: 1, pag   : o.pa, ms   : o.ms + "_by   +   ,spm_a   :e[  ,spm_b   :e[  ,c1   :[l.   ,l.   ,l.w].join("_, c2   : o.init_tim   e |   | "  ,c3  :o.wspv_tim  e|  |  ,c4  :o.load_tim  e|  |  ,c5  :o.channel_typ e}) , t  = 0 } }catc h( )  {a.logger  {ms :  o )  }retur  t } } }} ,functio n(  , )  {"use strict; t.lostPvRecordRati = "0.01  ,t.obsoleteInterRecordRati o  ="0.00, t.jsErrorRecordRati = "0.001  ,t.browserSupportRati o  ="0.00, t.goldlogQueueRati = "0.01   " } ,functio n()
                          {
                            "use strict  ;va  e  =functio n( )  {va  t  =o.leve l|  |"war; window.consol   e &   & window.console  ]&   & window.console[t](o.m   ; t.logge =   , t.assig = functio n() {i f("function " = typeof Object.assi)  { va = functio n ) {i f(nul   l ==  )throw new TypeError("Cannot convert undefined or null to object" ;fo r(va = Object( ,   = ; <arguments.leng  ; e++{ va     =arguments[e ; i f(nul   l!=  )fo r(var a in r   ) Object.prototype.hasOwnProperty.call() &   & (t = r[a   } retur; return e(      } return Object.assign({  ,  ,   ) }   , t.makeCacheNu = functio n    { return Math.floor(26843545 * Math.random()).toString() }   , t.obj2para = functio n )
                            {
                              var   , ,    =[ ;fo r(t in  )o.hasOwnProperty  )&  & e  ="    +o[  ,r.push    +" = +encodeURIComponent(e); return r.join("& )  }} ,functio n(  ,  , )  {va  r  =e(3 , a =  {rati  :  ,logke  :"fsp.1.  , gmke   : "  ,chksu  :"H46747615  " , n  =functio n( ) {  o&  &"object "= =typeo   o|  | o  =a  ,this.opt s  =  ,this.opts.rati o  =o.rati  o|  |a.rati  ,this.opts.logke y  =o.logke  y|  |a.logke  ,this.opts.gmke y  =o.gmke  y|  |a.gmke  ,this.opts.chksu m  =o.chksu  m|  |a.chksu  m , s  =n.prototyp  ;s.getRando m  =functio n )  {return Math.floor(1e 3  *Math.random( ) +  1}  ,s.ru n  =functio n(  , )  {var   , , n =  {pi  :"aplu, cod   : 1, ms   : "异常内容   ,    =" ;tr y  {va  c = window.goldlo g |  | { , i  =c._  $|  | { , l  =i.meta_inf  o|  | { , g  =parseFloat(l["aplu s -tracke r -rate"] ; i f e  =this.opt  s|  | {  , "number  "=  = typeo   g& & g + " "! ="NaN  " |  | g  =e.ratio, a = this.getRandom( , t | | a < =1e 3 * ) { s = "//gm.mmstat.com/ " + e.logke, o.re l = i.script_nam e + "@ " + c.lve, o.typ e = o.cod, o.ui d = encodeURIComponent(c.getCookie("cna"), o = r.assign(  , o  ;va  u = r.obj2param(o  ; c.tracke r = c.send( , { cach: r.makeCacheNum(  , goke  :  , logtyp  : "2  ", "POST ) } }catc h( )  {r.logger  {ms  :"tracker.run() exec error: " +  o )  }}  ,o.export s =  n} ,functio n(  ,  , )  {"use strict  ; va  r  =e(6, a = functio n()  { va  t  =window.goldlo g|  | { , e  =t._ $  =t._  $|  | { , r  =t.spm_a b?t.spm_ab.join(". )  :"0.0, a = e.send_pv_coun  t |  | ; i f a<  1&  & navigato  r&  & navigator.sendBeaco)  { va  n  =window.goldlog_queu e|  | (window.goldlog_queu e = []), s = location.hostnam e + location.pathnam; n.push  { actio: ["goldlog  ,"_aplus_cplugin_m, "do_tracker_lostpv"].join(".", argument  : { pag:  , page_ur: location.protoco l  + "// " +  , duration  :  , spm_ab  :  , msg  : "dom_state= " + document.readyStat e} ] } ) }; t.ru n = functio n ) {va  o = new Dat; r.on(windo, "beforeunload  ,functio n )  {var  t  =new Dat , e =t.getTime )  -o.getTime()  ;a(  ) ) }} ,functio n(  , )  {"use strict  ;va  e = sel, r = e.documen, a = !!r.attachEven, n = "attachEvent , s  ="addEventListener, c = a ? n :  ; t.getIframeUr l = functio n()  { var  , e = "//g.alicdn.com  ;retur  t  =goldlo  g&  &"function "= =typeof goldlog.getCdnPat h  ?goldlog.getCdnPath  )| | e  :  ,  o|  |"https ) +": " + t + "/alilog/aplus_cplugin/@@APLUS_CPLUGIN_VER/ls.html?t=@@_VERSION_  " }  , t.o n = functio n(  ,  ,)  { o[c](a ? "on " : " )  +  ,functio n( ) { o =  o|  |e.event  ;var  t  =o.targe t|  |o.srcElement  ;"function  "=  =typeo   r&  &r(  ,  )}  ,!1  )}  ,t.checkL s  =functio n )  {var  ;tr y  {window.localStorag  e&  &(localStorage.setItem("test_log_cna, "1", "1  " == =localStorage.getItem("test_log_cna  )&  &(localStorage.removeItem("test_log_cna" , o  =!0) ) }catc h( ) { o  = 1  }retur   o}  ,t.tracker_iframe_statu s  =functio n(  , )  {va  e  =window.goldlog_queu e|  |(window.goldlog_queu e  =[]) , r  =goldlog.spm_a b  ?goldlog.spm_ab.join(". )  : " , a  ="createIframe_ "  +t.statu s  +"_id = "  +  ;t.ms  g&  &  a+ ="_ "  +t.msg)  ,e.push  {actio  :"goldlog._aplus_cplugin_m.do_tracker_browser_support, argument  : { pag: location.hostnam e  + location.pathnam, msg  :  , browser_attr  : navigator.userAgen, spm_ab  :  , cna  : t.duratio  n |  | "  ,ratio : 1} ]} )}  ,t.tracker_ls_faile d  =functio n )  {va  o  =window.goldlog_queu e|  |(window.goldlog_queu e  =[]) , t  =goldlog.spm_a b  ?goldlog.spm_ab.join(". )  : "  ;o.push  {actio  :"goldlog._aplus_cplugin_m.do_tracker_browser_support, argument  : { pag: location.hostnam e + location.pathnam, msg  : "donot support localStorage  ,browser_attr  :navigator.userAgen  ,spm_ab : t} ]} )}  ,t.processMsgDat a  =functio n( )  {va  t  ={ ;tr y  {va  e  ="{ }; e = "TextEncoder  " in windo  w &  & "object "= =typeo  o ? new window.TextDecoder("utf-8").decode() : , t = JSON.parse() }catc h() { t = } }retur   t }  , t.do_pub_f n = functio n(  ,)  {va  e = window.goldlog_queu e |  | (window.goldlog_queu e = []; e.push  { actio: "goldlog.aplus_pubsub.publish  ,argument  :[  ,  ]}  ,e.push  {actio  :"goldlog.aplus_pubsub.cachePubs, argument  : [,] ) } }]; !functio n()  {
                                function t() {i f(n[o )return n[o].export;va  r = n[] = { export: {  , i:  , loade: 1  ; return e[o].call(r.export,  , r.export, t, r.loade d = !  , r.export s  }va  n  ={  ; return t m  =  , t c  =  , t p  ="  ,t(  ) }([functio n(  ,  , )  {"use strict" ;!functio n )  {var  e  =window.goldlo g|  |(window.goldlo g  ={})  ;i f(!e._aplus_auto_ex )  {e._aplus_auto_ex p =  {tag  :{  ,statu  :"init, exp_time:  , elementSelectorSizeMa:  } }; var t = n(1); t.init(functio n)  { e._aplus_auto_exp.statu s = "complete  " ) } } ( ), functio n(  ,  ,)  { "use strict"; var  , r = n(2, i = n(3, a = n(4) ; o = n(window.IntersectionObserve r ? 1 9  : 22); var u = n(23, s = n(12)  ; t.ini t = functio n()  { var  , n = window.goldlo g|  | (window.goldlo g = {}) , l = ! , c = ! , p = functio n() { c |  | c  = , l |  | (r.wrap(functio n) { t = s.getAutoExpConfig  )|  | [, i.isDebugAplus  )&  & i.logger  { ms: "aplus-auto-exp metaVaue init:  " + JSON.stringify() })  ;var e; t &  & t.lengt h > 0 &  & (u.watch_data_change(  , o.watch_exposure_change(t, e = a.create  { isThrottleWatc: s.isThrottleWatchDom(  , autoExpConfi : t}, e.init  { typ: "init  " }), n.aplus_pubsub.subscribe("setMetaInfo  ,functio n(  ,  , )  {i f("aplus - auto - exp "== = )  {i.isDebugAplus  )&  &i.logger  {ms  :"aplus - auto - exp metaVaue change: "  +JSON.stringify(  )})  ;var  c  =s.getAutoExpConfig(r)  ;i f(JSON.stringify(  )== =JSON.stringify(t) )retur ;i f t  =  ,u.clear( ,  l|  | l =  {fro  :"setMetaInfo  "}  ,o.clear(  ,l ,  e&  &e.clear(l ,  r& &  t&  &t.lengt h  > )  {u.watch_data_change(  ,o.watch_exposure_change(t  ;va  p =  {isThrottleWatc  :s.isThrottleWatchDom(  ,autoExpConfi :  t ; e  ?e.reset(  , )  : e  =a.create(p  ,e.init  {typ  :"init  "} ) }  }} )  ,"do_init" , l  =!0) )}  ;setTimeout(functio n ) { l|  |i.logger  {ms  :"aplus_auto_exp_init failed! please check whether aplusJs is loaded correctly!  " )}  ,5e3) ;va  g  =n._ $|  |{ , f  =window.g_SP  M|  |{  ;"complete  "== =g.statu  s&  &f.sp  m&  &p(  ;va  h  =window.goldlog_queu e|  |(window.goldlog_queu e  =[]  ;h.push  {actio  :"goldlog.aplus_pubsub.subscribe, argument  : ["aplusReady  ,functio n( )  {"complete "== = e&  &p("aplusReady )} ] }  , "function  " =  = typeo   e &  & e ) } } ,functio n(  ,)  {
                                  "use strict  ;va  n  =functio n(  , )  {va  n  =window.goldlog_queu e|  |(window.goldlog_queu e  =[]  ;n.push  {actio  :"goldlog._aplus_cplugin_track_deb.monitor, argument  : { ke: "APLUS_PLUGIN_DEBUG  ,titl  :"aplus_core, ms  : ["_error_:methodName= " + t + ",params= " + JSON.stringify(e), typ  : "updateMsg  ,descriptio :  t|  |"aplus_core  "  ]  ) , o  =functio n(  ,  , )  {va  o  =window.goldlog_queu e|  |(window.goldlog_queu e  =[]  ;o.push  {actio  :["goldlog, "_aplus_cplugin_m  ,t].join("."  ,argument  :[  ,  ]  )  ;t.do_tracker_jserro r  =functio n(  , )  {va  r  ="do_tracker_jserror  ; o(  , , t, n(  ,  )}  , t.do_tracker_obsolete_inte r = functio n(  ,)  {va  r = "do_tracker_obsolete_inter  ;o(  ,  ,t  ,n(  ,  )}  ,t.wra p  =functio n( ) {i f("function  "=  =typeof  )tr y  {e ) }catc h( )  {n  {ms  :e.messag e| | e}  ,"exception" ) }finall y { } }} ,functio n(  , )  {"use strict;va  n = functio n ) {va  e = ! ;retur n"boolean  " =  = typeof goldlog.aplusDebu  g &  & e  =goldlog.aplusDebug, e; t.isDebugAplu s =  ;va  o = functio n() {
                                    e |  | e  ={ };va  t = e.leve l |  | "warn  ;window.consol  e&  &window.console[  ]&  &window.console[t](e.ms  )  ;t.logge r =  o} ,functio n(  ,  , )  {"use strict;va  o = n(5, r = n(6, i = n(2, a = n(16, u = n(3, s = n(18, l = n(12, c = n(9, p = windo, g = documen, f = r.throttle(functio n)  { var  e = arguments[0]  ; "function "=  = typeo   e&  & e), 200, h = o.extend  { eachElement: functio n(  ,) {fo r(va  n = t.logke y |  | " , o  = ; o  <e.lengt  ;o++ )  {var  i  =e[o , a  =i.getAttribute(l.DATA_APLUS_AE_KEY) ;i f(!  a&  &a.indexOf("_) > 0 )  { isNaN(parseInt(a) &  & a  =goldlog._aplus_auto_exp.elementSelectorSizeMap[t.elementSelector] +  , i.setAttribute(l.DATA_APLUS_AE_KE, a)  ;va  u = r.getElementHash( , { ignore_att: !  , inde:  , el: i }, c = u.hash_valu, p = u.hash_ke, g = s.checkIsRecord(  ,  , l.DATA_APLUS_AE_KEY, f = r.checkIsInHashMap  { logke:  , hash_valu:  , goldlogKe: "_aplus_auto_exp  " } ;i f(g &  & ! )  {va  h = { expConfi:  , hash_valu:  , hash_ke:  , elemen:  , statu:  , elementSelecto: t.elementSelecto  r  ; r.updateExpHashMap(  ,  , "ADD ) } } }}  ,handler_dom_chang :functio n(  , ) {tr y {fo r(va  n  =this.autoExpConfi g|  |[ , o  = ; o  <n.lengt  ;o++ )  {va  i  =n[o , a  =r.getElements(  ,g  ;goldlog._aplus_auto_exp.elementSelectorSizeMap[i.elementSelecto  ]|  |(goldlog._aplus_auto_exp.elementSelectorSizeMap[i.elementSelecto ]  =1  ,this.eachElements(  , )  }goldlog.aplus_pubsub.publish("APLUS_AE_DOM_CHANGE, t |  | { ) }catc h()  { u.logger  { ms: e &  & e.messag  e ) } }  , init_watch_do:functio n ) {va  e = thi, t = goldlog._aplus_auto_ex p |  | {  ; e._loop_observe r  =setTimeout(functio n)  { "blur " != =t.current_win_statu ? (goldlog.aplusDebu g &  & u.logger  { ms: "watch_dom LOOP_TIME is  " + l.LOOP_TIM E + "ms total:   " + ++t.watch_time s })  , e.handler_dom_change(nul, { typ: "polling  " }, e.init_watch_dom())  : t.watch_dom_runnin g = 1 }  , l.LOOP_TIME ) }  , onFocusHandle:functio n ) {va  e = thi, t = goldlog._aplus_auto_ex p |  | {  ; t.current_win_statu s  ="focus  ,t.watch_dom_runnin  g|  |e.init_watch_dom  )}  ,onBlurHandle :functio n )  {va  e  =goldlog._aplus_auto_ex p|  |{  ;e.current_win_statu s  ="blur  "}  ,onVisibilityChang :functio n )  {va  e  =thi  ;"visible  "== =g.visibilityStat e  ?e.onFocusHandler )  :"hidden  "== =g.visibilityStat  e&  &e.onBlurHandler  )}  ,addAllListene :functio n )  {va  e  =thi , t  =goldlog._aplus_auto_ex p|  |{  ;t.watch_time s  =  ,t.watch_dom_runnin g  =!  ,e.init_watch_dom(  ,p.WindVan  e&  &g.addEventListene  r&  &(a.on(  ,"WV.Event.APP.Active, e.onFocusHandle,!1, a.on(  , "WV.Event.APP.Background  ,e.onBlurHandle  ,!1)  ,"hidden  "i  g  ?a.on(  ,"visibilitychange, e.onVisibilityChang)  : (a.on(  , "blur  ,e.onBlurHandler  ,a.on(  ,"focus, e.onFocusHandler)}  , removeAllListene:functio n ) {va  e = thi; p.WindVan  e &  & g.removeEventListene  r &  & (a.un(  , "WV.Event.APP.Active  ,e.onFocusHandle  ,!1  ,a.un(  ,"WV.Event.APP.Background, e.onBlurHandle, !1), "hidden  "i  g ? a.un(  , "visibilitychange  ,e.onVisibilityChang )  :(a.un(  ,"blur, e.onBlurHandler, a.un(  , "focus  ,e.onFocusHandler  )}  ,isIgnoreExpos :functio n(  , )  {va  n  =goldlog.getMetaInfo("aplus - auto - exp - ignoreviews" , o  =goldlog.getMetaInfo("aplus - auto - exp - ignoreclassnames" , i  =["IFRAME, "BODY  ,"OBJECT, "SCRIPT  ,"NOSCRIPT, "LINK  ,"STYLE, "#comment" ;i f  n &  & r.isArray() &  & n.lengt h > 0 &  & i  =n, t &  & i.indexOf() > - )retur n!;va  a = ! ;i f  o &  & r.isArray(o)  {va  u = e &  & e.getAttribut e ? e.getAttribute("class )  :", s = u ? u.split("  )  :[  ;c(  ,functio n( )  {i f e& &c(  ,functio n( )  {i f(t.trim  )== =e.trim() )retur  a  =!  ,"break  "}) ,a )retur n"break  "} ) }retur  a}  ,init_observe :functio n(  , )  {va  n  =thi , o  =["class  , "style", a = functio n() {retur n"characterData  " == =e.typ e ? [e.targe] : "attributes  " == =e.typ  e &  & o.indexOf(e.attributeNam) > - 1 ? [e.targe] : "childList  " != =e.typ e ? ]  :voi   0, s = functio n(  ,) {i f  e &  & e.lengt h > )fo r(va  r = ; r < e.lengt; r++ ) {va  a = e[] |  | { , u  =a.nodeNam, s  =goldlog._aplus_auto_exp.tag s|  | {  ; s[  ]|  | (s[] = 0, s[u] +  , goldlog._aplus_auto_exp.tag s  =  , n.isIgnoreExpose(  ,) |  | i.wrap(functio n)  { var e = goldlog._aplus_auto_ex p|  | {}; ++e.observer_time;va  n = o.attributeNam; t( , { typ: o.typ e  + n ? "_ " + n : " )}  )}  ,"init_observer_init_elements" ) }  ;this._observe  r|  |(this._observe r  =new e(functio n( )  {i f e& &e.lengt h  > )fo r(va  t  = ; t  <e.lengt  ;t++ )  {va  n  =e[  ]|  |{ , o  =r.nodelistToArray(n.addedNode  s|  |[] ; o  =r.nodelistToArray(a(n  ,o  ,s(  , ) }})  ;va  l =  {attribute  :!  ,childLis  :!  ,characterDat  :!  ,subtre  :  0  ;this._observer.observe(g.bod  ,l  ,r.IS_DEBU  G&  &u.logger  {ms  :"aplus_auto_exp init MutationObserver success!  " )}  ,ini :functio n( )  {va  t  =thi , n  =goldlog._aplus_auto_ex p|  |{ ;  e&  &"reset  "!= =e.typ  e&  &!n.hash_valu  e&  &(n.hash_valu e  ={})  ,t.handler_dom_change(nul ,  {typ  :"aplus_init  "}  ;va  o  =p.MutationObserve r|  |p.WebKitMutationObserve  r|  |p.MozMutationObserve ; o  ?(n.observer_time s  =  ,t.init_observer(  ,functio n(  , )  {f(functio n )  {t.handler_dom_change(  ,  )  )}) )  :t.addAllListener )}  ,clea :functio n( ) {i f(  e|  |"appendMetaInfo  "!= =e.fro )  {va  t  =goldlog._aplus_auto_ex p|  |{  ;t._acHashMa  p&  &(t._acHashMa p  ={})  ,t.hash_valu  e&  &(t.hash_valu e  ={})  ,goldlog._aplus_auto_ex p  =  ,this._loop_observe  r&  &(clearTimeout(this._loop_observer  ,this._loop_observe r  =null)  ,this._observe r  ?(this._observer.takeRecords(  ,this._observer.disconnect( )  :this.removeAllListener )  }}  ,clearDo :functio n(  , )  {va  n  =this.autoExpConfi g|  |[ ;i f  t&  &"appendMetaInfo  "!= =t.fro )fo r(va  o  = ; o  <n.lengt  ;o++)tr y {fo r(va  r  =n[o].elementSelecto , i  =g.querySelectorAll(r , a  = ; a  <i.lengt  ;a++ )i[a].setAttribute(l.DATA_APLUS_AE_KE  ,") }catc h() { } this.autoExpConfi g = e &  & e.autoExpConfi g ? e.autoExpConfi :  ] }  , rese:functio n(  ,)  { this.clearDom(  , t, this.init  { typ: "reset  " ) } }; e.export s = h } ,functio n(  ,)  { "use strict  ;function n ) {  }n.prototype.exten d  =functio n )  {}  ,n.prototype.creat e  =functio n )  {}  ,n.exten d  =functio n( )  {return this.prototype.extend.call(thi  ,  )}  ,n.prototype.creat e  =functio n( )  {va  t  =new thi ;fo r(var n in e  )t[ ]  =e[n  ;retur   t}  ,n.prototype.exten d  =functio n( )  {va  t  =functio n )  { ;tr y  {"function "!  =typeof Object.creat  e&  &(Object.creat e  =functio n( )  {function t ) {  }return t.prototyp e  =  ,ne   t})  ,t.prototyp e  =Object.create(this.prototype ;fo r(var n in e  )t.prototype[ ]  =e[n  ;t.prototype.constructo r  =  ,t.exten d  =t.prototype.exten  ,t.creat e  =t.prototype.creat e }catc h( )  {console.log( ) }finall y  {retur  t  }}  ,e.export s =  n} ,functio n(  ,  , )  {"use strict; function o(  ,  ,) {va  o = t.hash_valu, r = a.getGoldlogVal() |  | { ; i f(r.hash_valu  e|  | (r.hash_valu e = {}, r.hash_value[] |  | (r.hash_value[] = i.Ma p ? new i.Ma : {})  , i.Map ) {va  u = r.hash_value[e].get(o ; u ? + u : u =  , r.hash_value[e].set(  ,) }else r.hash_value[e][] ? ++r.hash_value[e][] : r.hash_value[e][] =  ; a.setGoldlogVal(  ,) }va  r = documen, i = windo, a = n(7, u = n(3, s = n(8, l = n(9, c = n(10, p = n(11, g = n(12, f = functio n() { retur n"[object Array]  "== =Object.prototype.toString.call()  ; t.isArra y  =  , t.getXPat h  =functio n() { var   ,  ,  ,  ,  , , s = r.getElementsByTagName("*" ;fo r t = []; e & & 1= =e.nodeTyp; e = e.parentNode)i f(e.i) { fo r u  =e.i, i  = , n  =0 ; n<s.lengt  ; n++)i f a = s[n, a.i  d &  & a.i  d =  = )  { i+ ;brea k }i f(t.unshift(e.tagName.toLowerCase) + '[@id=" ' + u + '"]', 1 =  = )return t.unshift("/", t.join("/ ) }els e {fo r n  = , o  =e.previousSibling  ; ; o  =o.previousSibling )o.tagNam  e=  =e.tagNam  e&  &n+  ;t.unshift(e.tagName.toLowerCase )  +"[" + n  +"])  } return t.lengt h ? "/ " + t.join("/ )  :nul  l  ;va  h  =functio n(  , ) {i f  t& &  0!= =t.lengt  h|  | t  =[] ,  e&  &e.lengt h  > )fo r(va  n  = ; n  <e.lengt  ;n++ )t.push(e[n]  ;retur   t  ;t.nodelistToArra y  =  ,t.getElement s  =functio n(  , )  {va  n =  t|  | , o  =[ ;i f(n.querySelectorAl ) o  =h(n.querySelectorAll(e.elementSelecto  )|  |[] ;else fo r(va  i  =document.getElementsByTagName(e.tag , a  =e.filter.split(" = " , u  =a.lengt h > 0  ?a[0].trim )  :", s = a.lengt h > 1 ? a[1].trim ) : " , l  = ; l  <i.lengt  ;l++ )  {va  c  =i[l , p  =c.getAttribute(u , g  =c.hasAttribute(u  ;  g| |  s& &  s!= =  p|  |o.push( )  }retur   o  ;va  d  =functio n ) {retur  n /aplusDebug=tru e/.test(location.searc  ) , v  =d(  ;t.IS_DEBU G  =  ,t.fillPropsDat a  =functio n(  ,  , ) {  n|  | n  ={} ;tr y  {va  o  =e.prop s|  |[ ;i f  o&  &f(  )&  &o.lengt h  > )fo r(va  r  = ; r  <o.lengt  ;r++)i f  t&  &t.getAttribut )  {va  i  =o[r , a  =t.getAttribute(i  ;voi   0!= =typeo   a&  &nul  l!= =  a&  &"  "!= =  a&  &(n[ ]  =encodeURIComponent(a ) } }catc h( )  {u.logger  {ms :  e&  &e.messag  e )  }retur   n}  ,t.fillFilterDat a  =functio n(  ,  , ) {  n|  | n  ={} ;tr y  {va  o  =e.filte r|  |", r = o.split("=" ;i f(f() &  & r[1 )n[r[0] = r[1 ;else i f(r[] & & t &  & t.getAttribut)  {va  i = t.getAttribute(r[0  ) |  | "  ;voi   0!= =typeo   i&  &nul  l!= =  i&  &"  "!= =  i&  &(n[r[0 ]  = ) } }catc h( )  {u.logger  {ms :  e&  &e.messag  e )  }retur   n  ;va  _  =functio n( ) {retur n! !/ ^POS T |GET $ /i.test(  )  ;t.isMetho d  =  ;va  m  =functio n( )  {va  t  =!!/^\d+$/.test(e ;retur n!!  t&  &parseInt( )  >  )  ;t.isPkgSiz e  =  ,t.filterExpConfigRequestCf g  =functio n( )  {va  t  =g.getDefaultRequestCfg  )|  |{ ;tr y  {va  n =  e|  |{  ;_(n.metho  )&  &(t.metho d  =n.method)  ,m(n.pkgSiz  )&  &(t.pkgSiz e  =parseInt(n.pkgSize) ) }catc h( )  {u.logger  {ms :  e&  &e.messag  e )  }retur   t  ;va  y  =functio n( )  {va  t  =e.split(" & " , n  ={  ;return t.lengt h >  0&  &l(  ,functio n( )  {var  t  =e.split("=") ; 2== =t.lengt h&  &(n[t[0 ]  =p.tryToEncodeURIComponent(t[1] )}) ,  n  ;t.autoUserFnHandle r  =functio n(  ,  , )  {va  o =  {userdat  :{  ,sp  :", sc  : "  ";tr y  {va  r = e(  , n ; r &  & ("string  " =  = typeo  r ? o.userdat a = y()  : "object  " =  = typeo   r &  & "object "= =typeof r.userdat  a &  & (c(r.userdat, functio n(  ,)  { o.userdata[] = p.tryToEncodeURIComponent() }, o.sp m = r.sp, o.sc m = r.scm)) }catc h()  { console.log() }retur   o;va  b = functio n(  ,)  {va  n = " ;i f  e&  & )  {va  o  =[e.getAttribute(t.filter) , r  =t.prop s|  |[ ;i f( )fo r(va  i  = ; i  <r.lengt  ;i++ )o.push(e.getAttribute(r[i]) ; n  =o.join("_ ) }retur   n, w = functio n()  {va  t = e.getAttribute("data-spm-anchor-id" ;i f()  {va  n = t.split("." ;retur n  {  : n[0, b  : n[1, c  : n[2, d  : n[3, e  : n[] } }; t.getSpmOb j =  , t.getElementHas h = functio n(  ,)  {va  n = {  ; "aplus_webvt  "!= =e.sourc  e&  & n  =w(t.el) |  | g_SPM.getParam(t.ele);va  o = " , r  ="x "  +t.inde ;i f(n  a&  &n  b&  &n  c&  &n. )  {va  i  =/^i/.test(n. ) ? r  :n. ; o  =n a  +"_ "  +n b  +"_ "  +n c  +"_ " + i }els  o  =  ,goldlog.pvi  d&  &  o+ =goldlog.pvid  ;t.ignore_att  r|  |  o+ =e.logke y  +"_, o + =e.elementSelecto r + "_ ,  o+ =b(t.el  ,e)  ;va  a = r  +"_ "  +s.hash(o ;retur n  {hash_valu  :  ,hash_key : r  +"_ " + o  }}  ,t.filterUnloadAtt r  =functio n( )  {retur   e&  & e  =e.replace(/(href|style|data-spm-anchor-id)=[\'|\"][\w|\W|\.]+[\'|\"]  ,"" , e  =e.replace(/\s\>/  ," > " , e  =e.replace(new RegExp(g.DATA_APLUS_AE_KE Y  +"=[\\'|\\\"]\\w+[\\' |\\\"]", "", e = e.replace(new RegExp(g.DATA_APLUS_AC_KE Y + "=[\\'|\\\"]\\w+[\\'|\\\"]", ""), e  ; va  E = functio n(  , ) { fo r(var  , o  = , r  =e.lengt ; o<r; )  {va  i = e[] |  | { ; i f(i.hash_valu  e== =t.hash_valu ) return e[] = , n = !  ,  ; o + +  }retur   n|  | e.push(t, e, A = functio n(  ,  , , ) { i f  n|  | n  ="ADD", e &  & "object "= =typeof  ) { va  i  =a.getGoldlogVal() |  | { , u  =i._acHashMa p|  | { , s = u[] |  | [, l = functio n ) { fo r(va  e = , n = s.lengt ; e  <n;) {va  o = s[] |  | { ; i f(o.hash_valu  e== =t.hash_valu ) return; e + + }retur  n- 1} , c = l(  ; "ADD  " == =  n & & c == =- 1 ? (s.push(t, o(  ,  , r)  : "CLEAR  " == =  n & & c > - 1 ? s.splice(  ,) : "UPDATE  " == =  n &  & s  =E(  , t), u[] =  , i._acHashMa p =  , a.setGoldlogVal(  ,)  }; t.updateExpHashMa p = functio n(  ,  ,)  {
                                      A(  ,  ,  , "_aplus_auto_exp  )}  ,t.updateClkHashMa p  =functio n(  ,  , )  {A(  ,  ,  ,"_aplus_ac);va  x = functio n ) {retur n(new Date).getTime  ); t.throttl e = functio n(  ,  ,)  {
                                        var   ,  ,  , , u = ; n |  | n  ={ };va  s = functio n ) {
                                          a = e.apply(  , i, u = n.leadin  g == = 1 ? 0 : x( , o = nul, o |  | r = i = nul), l = functio n) { u |  | n.leadin  g != =  1 |  | u  =x();va  l = t - (x) - u;retur  r = thi, i = argument, l < =  0 | | l > t ? o &  & (clearTimeout(o, o = null, a = e.apply(  , i, u = x( , o |  | r = i = null) : o |  | n.trailin  g == =  1 |  | o  =setTimeout(  , l), a  ; return l.cance l = functio n ) { clearTimeout(o, u = , o = r = i = nul  l} , l }  , t.checkIsInHashMa p = functio n()  {va  t = a.getGoldlogVal(e.goldlogKe) |  | { , n  =t.hash_valu e|  | { , o  =n[e.logke] |  | (i.Ma p?new i.Ma   : { }) , r = o &  & o.ge t ? o.get(e.hash_valu) : o[e.hash_value ;i f r > )retur n!;fo r(va  u = t._acHashMa p |  | { , s  =u[e.logke] |  | [, l = s.lengt, c = ; c<  ;c++)i f(s[c].hash_valu  e == =e.hash_valu)retur n!;retur n!  1 }  , t.setRecordSucces s = functio n(  ,) {tr y  {va  n = e ? e.elemen : { , o  =e.hash_valu e|  | " ;  n&  &n.setAttribut  e&  &n.setAttribute(  , ) }catc h( ) { } }} ,functio n(  , )  {"use strict;va  n = functio n()  {
                                            var ;tr y  { window.goldlo  g |  | (window.goldlo g = {}) , t = window.goldlog[] }catc h() { t = " " }finall y  {retur  t }; t.getGoldlogVa l =  ;va  o = functio n(  ,)  {va  n = ! ;tr y  { window.goldlo  g |  | (window.goldlo g = {}) , e &  & (window.goldlog[] = , n = ! ) }catc h() { n = 1 }finall y  {retur  n }; t.setGoldlogVa l =  , t.getClientInf o = functio n ) { return n("_aplus_client  )|  | }  }} ,functio n(  , )  {"use strict  ;va  n = 131542391; t.has h = functio n(  ,)  { var   , , i = t |  | ;fo r o = e.lengt h - 1; o > =; o--) r = e.charCodeAt(o, i ^ =  i <  < ) + r + i >  > 2;va  a = (214748364 7 & i).toString(16  ;retur  a } } ,functio n(  ,)  { "use strict  ;e.export s  =functio n(  , )  {var  , o  =e.lengt ;fo r n  =0 ; n  <  ;n++ )  {va  r  =t(e[n  ,n ;i f("break  "== = )brea k }  }} ,functio n(  , )  {"use strict; e.export s = functio n(  ,) {i f(Objec  t &  & Object.key)fo r(va  n = Object.keys(e, o = n.lengt, r = ; r <  ; r++ ) {va  i = n[r  ; t(  , e[i ) }else fo r(var a in e  ) t(  , e[a ) } } ,functio n(  ,)  { "use strict  ;t.tryToEncodeURIComponen t  =functio n( )  {va  t =  e|  |";i f()tr y { t = encodeURIComponent(decodeURIComponent(e) }catc h() { }retur  t } } ,functio n(  ,  ,)  { "use strict  ;function o( )  {return goldlo  g&  &goldlog.getMetaInf o  ?goldlog.getMetaInfo( )  :i.getMetaCnt( )  }va  r  =n(13 , i  =n(14  ;t.DATA_APLUS_AE_KE Y  ="data - aplus - ae, t.DATA_APLUS_AC_KE Y = "data-aplus-clk  ,t.LOOP_TIM E  =1e  ,t.getDefaultRequestCf g  =functio n ) {retur n  {metho  :"POST, pkgSize  : 1 0 };va  a = functio n(  ,)  {va  n = ;tr y  {va  r = o(e ; r &  & n  =parseFloat(r), n < =  0 &  & n  = ) }catc h() { n = t }finall y  {retur  n } , u = a("aplus-auto-exp-visible  ,.3  ;t.AUTO_AT_VIEW_RAT E  =  ,t.AUTO_AT_VIEW_RATE_IN_WINDO W  =a("aplus - auto - exp - window,) |  |  ;va  s = functio n()  {va  t = ;tr y  {va  n = o("aplus-auto-exp-duration", r = parseInt(n ; r + " "! ="NaN  " &  & t  = ) }catc h() { }finall y  {retur  t }; t.EXP_DURATIO N = s(300  ;va  l = functio n(  ,)  {
                                              var  , i = [, a = [ ;tr y { n = t |  | o(e  ;va  u = [ ; i f  n &  & "string "= =typeof  ) tr y { u  =JSON.parse() }catc h() { u  =JSON.parse(n.replace(/'/, '"') }els e"object  " =  = typeo   n &  & n.constructo  r == =Arra  y &  & u  =n ; i f  u &  & u.constructo  r == =Arra ) fo r(va  s = ; s < u.lengt  ; s++ ) { va  l  =u[] |  | { , c  =l.logke y|  | " , p  =l.ta g  ?l.ta   :", g = l.filte, f = l.cssSelecto, h = f | | p &  & ; i f(c |  | ! )throw new Error("meta  " + e + " config error,  " + JSON.stringify(l) ; g = "string  " =  = typeo  g ? g.split("= )  :[  ;va  d  = ;i f(g.lengt  h> = 2 ?  d+ ="["  +g.shift )  +'=" '  +decodeURIComponent(g.join("" )  +'"] ' :  1=  =g.lengt  h&  &g[  ]&  &  d+ ="["  +decodeURIComponent(g[0 )  +"]" ,  f&  &  d+ =f)  ,l.elementSelecto r  =  ,r.indexof(  , )  >-1  )throw new Error("meta  " + e  +" config error, tag_filter_cssSelector  " + d  +" repeated"  ;a.push(d  ,i.push( ) } }catc h( ) { }finall y  {retur  i  }  ;t.getAutoExpConfi g  =functio n( )  {return l("aplus - auto - exp,) |  |  ] }  , t.getAutoExpUserF n = functio n ) {va  e = o("aplus-auto-exp-userfn" ;i f()  {va  t = window[] |  | ;i f("function  " =  = typeof  )retur  t } return nul  l }  , t.isThrottleWatchDo m = functio n ) {va  e = ! ;tr y { e = "throttle  " == =o("aplus-auto-exp-watchdom ) }catc h( ) {  }retur   e}  ,t.getAutoClkConfi g  =functio n( )  {return l("aplus - auto - clk,) |  |  ] }  , t.getAutoClkUserF n = functio n ) {va  e = o("aplus-auto-clk-userfn" ;i f()  {va  t = window[] |  | ;i f("function  " =  = typeof  )retur  t } return nul l } } ,functio n(  ,)  { "use strict  ;t.indexo f  =functio n(  , )  {va  n  =- ;tr y { n  =e.indexOf( ) }catc h( ) {fo r(va  o  = ; o  <e.lengt  ;o++ )e[  ]== =  t&  & n  = ) }finall y  {retur  n }  }} ,functio n(  ,  , )  {"use strict; function o() {retur  a = a |  | document.getElementsByTagName("head")[0, u &  & e ? u : a ? u = a.getElementsByTagName("meta )  : ]  }function r(  , )  {var   ,  , , a  =o( , u  =a.lengt ;fo r n  =0 ; n  <  ;n++) r  =a[n  ,s.tryToGetAttribute(  ,"name) == =  e &  & i  =s.tryToGetAttribute( , t |  | "content");retur   i |  | " " } function i() {va  t = { isonepag: "-1  ,urlpagenam  :"  " , n  =e.qGet( ;i f  n&  &n.hasOwnProperty("isonepage_data" )t.isonepag e  =n.isonepage_data.isonepag  ,t.urlpagenam e  =n.isonepage_data.urlpagenam ;els e  {va  o  =r("isonepage  )|  | "-1 , i  =o.split(" | "  ;t.isonepag e  =i[0  ,t.urlpagenam e  =i[ ]  ?i[ ]  :" "  }retur  t  }var   , , s  =n(15  ;t.getMetaTag s  =  ,t.getMetaCn t  =  ,t.getOnePageInf o =  i} ,functio n(  , )  {"use strict; t.tryToGetAttribut e = functio n(  ,)  {retur   e &  & e.getAttribut e ? e.getAttribute() |  | " " : "  ";va  n = functio n(  ,  ,) {i f  e &  & e.setAttribut )tr y  { e.setAttribute(  ,) }catc h() { }; t.tryToSetAttribut e =  , t.tryToRemoveAttribut e = functio n(  ,) {i f  e &  & e.removeAttribut )tr y  { e.removeAttribute() }catc h()  { n(  ,  , " ) }  }} ,functio n(  ,  , )  {"use strict  ; function o(  ,) {va  n = goldlog._ $ |  | { , o  =n.meta_inf  o|  | { , r  =o.aplus_cta  p|  | { , i  =o["aplus-touch" ; i f  r&  & "function "= =typeof r.o ) r.on(  , t ;els e  {va  s = "ontouchend  " in document.createElement("div" ; s &  & "tap  " == = i ? a.on(  ,) : u( , s ? "touchstart " : "mousedown  , ) }  }function r(  , )  {va  n  =goldlog._ $|  |{ , o  =n.meta_inf  o|  |{ , r  =o.aplus_cta  p|  |{ , i  =o["aplus - touch" ;i f  r&  &"function "= =typeof r.u )r.un(  ,t ;els e  {va  u  ="ontouchend  "in document.createElement("div" ;  u&  &"tap  "== = i  ?a.un(  , )  :s( , u  ?"touchstart "  :"mousedown,) } }va  i = !!document.attachEven, a = n(17, u = functio n(  ,  ,) { retur n"tap  "== = t?void o(  ,)  : voi d i?e.attachEvent(  ,)  : e.addEventListener(  , n)  ; t.o n  =  ; va  s  =functio n(  ,  ,) {retur n"tap  " == = t ? void r(  ,) : voi d i ? e.detachEvent(  ,) : e.removeEventListener(  , n); t.u n = s }, functio n(  ,) { "use strict  ;function n(  , )  {retur  e  +Math.floor(Math.random )  * t - e  +1 )  }function o(  ,  , )  {va  o  =c.createEvent("HTMLEvents" ;i f(o.initEvent(  ,!  ,!0  ,"object  "=  =typeof  )fo r(var r in n  )o[ ]  =n[r  ;e.dispatchEvent( )  }function r( ) {  0== =Object.keys(g).lengt  h&  &(p.addEventListener(  ,  ,!1  ,p.addEventListener(  ,  ,!1  ,p.addEventListener(  ,  ,!1) ;fo r(va  t  = ; t  <e.changedTouches.lengt  ;t++ )  {va  n  =e.changedTouches[t , o  ={ ;fo r(var r in n  )o[ ]  =n[r  ;va  u =  {startTouc  :  ,startTim  :Date.now(  ,statu  :  ,elemen  :e.srcElemen t|  |e.targe  t  ;g[n.identifie ] = u }  }function i( ) {fo r(va  t  = ; t  <e.changedTouches.lengt  ;t++ )  {va  n  =e.changedTouches[t , o  =g[n.identifier ;i f(! )retur  ;va  r  =n.client X -o.startTouch.client , i  =n.client Y  -o.startTouch.client , a  =Math.sqrt(Math.pow(  , )  +Math.pow(  ,2)  ;(o.statu  s== =  v|  |"pressing  "== =o.status )& & a  >1  0&  &(o.statu s  ="panning" ) }  }function a( ) {fo r(va  t  = ; t  <e.changedTouches.lengt  ;t++ )  {va  n  =e.changedTouches[t , r  =n.identifie , u  =g[r ;  u&  &(u.statu  s== =  v&  &e.typ  e== =  h&  &(u.timestam p  =Date.now(  ,o(u.elemen  , ,  {touc  :  ,touchEven :  e}))  ,delete g[r] ) }  0== =Object.keys(g).lengt  h&  &(p.removeEventListener(  ,  ,!1  ,p.removeEventListener(  ,  ,!1  ,p.removeEventListener(  ,  ,!1 )  }function u( )  {e.__fixTouchEven  t|  |(e.addEventListener(  ,functio n ) {  ,!1  ,e.__fixTouchEven t  =!0 )  }function s ) {  l|  |(p.addEventListener(  ,  ,!1 , l  =! )  }va  l  =! , c  =window.documen , p  =c.documentElemen , g  ={ , f  ="touchstart, h = "touchend , d  ="touchmove, v = "tapping , _  ="touchcancel, m = "aplus_tap " + n(  , 1e5  ; e.export s = { o: functio n(  ,) { s( , e &  & e.addEventListene  r & & t &  & (u(e, e.addEventListener(  , t._aplus_tap_callbac k = functio n()  { t(  , e.target ), !1))}, u: functio n(  ,) { e &  & e.removeEventListene  r & & t &  & t._aplus_tap_callbac  k &  & e.removeEventListener(  , t._aplus_tap_callbac, ! ) } } }, functio n(  ,  ,) { "use strict  ;va  o  =n(3 , r  =documen , i  =functio n(  , )  {return t  x> =e.pLeftTop[  ]&  &t  x< =e.pRightBottom[  ]&  &t  y> =e.pLeftTop[  ]&  &t  y< =e.pRightBottom[  ] , a  =functio n(  , )  {va  n  = , r =  {  :t.  ,  :t  y , a  =i(  ,r , u =  {  :t x  +t.widt  ,  :t  y , s  =i(  ,u , l =  {  :t.  ,  :t y  +t.heigh  t , c  =i(  ,l , p =  {  :t x  +t.widt  ,  :t y  +t.heigh  t , g  =i(  ,p , f  =functio n )  {va  e  =  ;retur   a& &  g&  & e  =t.siz e  /t.size) ,  e , h  =functio n )  {var  , o  = , r  =  ;retur   a& &  s&  &  c&  & g  ? o  =t.widt , r  =e.pLeftBottom[ ]  -t. , n  ="top )  : a & & s &  & c & & g ? o = e.pLeftTop[] - t. , r = t. , n = "right )  :  a&  &  s& &  c& & g  ? o  =t.widt , r  =t.heigh t  -Math.abs(e.pLeftTop[ ]  -t.y , n  ="bottom" ) :  a&  &  s& &  c&  &  g&  & o  =e.pRightTop[ ]  -t. , r  =t. , n  ="left" , o = o  >e.clientWidt h  ?e.clientWidt   : , r = r  >e.clientHeigh t  ?e.clientHeigh   : ,  {rat  :t.siz e > 0  ?Math.abs o  * )  /t.siz   :  ,exp_pos : n  }} , d  =functio n )  {va  n  = , o  = , i  =e.pLeftTop[0 , a  =e.pLeftTop[1 , u  =e.pLeftBottom[0 , s  =e.pLeftBottom[1 , c  =e.pRightBottom[0 , g  =r  x< = i&  &r  y< = , f  =p  x> =  u&  &p  y> = ;  g& &  f&  & o  =e.clientHeigh , n  =p x < c  ?p x - u  :e.clientWidth  ;va  h  =r x >  i&  &r  y< =  ;retur   h& &  f&  & o  =e.clientHeigh , n  =p x  -l.  ,p x >  c&  & n = c  -l.x)  ,t.siz e > 0  ?Math.abs n  * )  /t.siz  :  0} , v  =functio n )  {var  , o  = , r  = ;retur n!  a| |  s| |  c| | g ?  a|  |  s| |  c| | g ?  a| |  s|  |  c| | g ?  a| |  s| |  c|  |  g|  | o  =t x  +t.widt , r  =t y  +t.heigh , n  ="rightBottom )  : o = e.pRightTop[] - t. , r = e.clientHeigh t - (l y - e.pRightBottom[1], n = "leftBottom" )  : o = u. , r = e.clientHeigh t - u. , n = "rightTop" )  : o = e.clientWidt h - t. , r = e.clientHeigh t - t. , n = "leftTop") , { rat: t.siz e > 0 ? Math.abs o * ) /t.siz   :  ,exp_pos : n  } ;i f n  =f( , n  > )return   ;va  _  =h( ;i f n  =_.rat , n  > )return o.isDebugAplus  )&  &o.logger  {ms :  _}  ,  ;va  m  =v(  ;retur  n  =m.rat , n > 0  ?(o.isDebugAplus  )&  &o.logger  {ms :  m}  , )  : n  =d( , n > 0  ?(o.isDebugAplus  )&  &o.logger  {ms  :"cover rate is  " +  n}  , ) : n > 1 ? 1  :  )  ;t.wrapViewabilityRat e  =functio n(  ,  , )  {va  o  = ;i f( )fo r(va  r  = ; r  <e.lengt  ;r++)i f o  =a(e[r  ,t ,  o> = )return   ;retur   o}  ,t.getViewabilityRateInWindo w  =functio n(  ,  , )  {va  o  = ;i f( )fo r(va  r  = ; r  <e.lengt  ;r++)i f o = t  /e[r].siz ,  o> = )return   ;retur   o  ;va  u  =functio n( ) {retur n"number  "=  =typeo   e&  &Na  N!= =  e , s  =functio n( )  {va  t  ={  ;retur   e&  &("function  "=  =typeof e.getBoundingClientRec  t&  & t  =e.getBoundingClientRect  )|  |{}  ,u(t.  )|  |u(t.lef  )&  &(t x  =t.left  ,u(t.  )|  |u(t.to  )&  &(t y  =t.top  ,u(t.widt  )|  |(t.widt h  =e.offsetWidth)  ,u(t.heigh  )|  |(t.heigh t  =e.offsetHeight)) ,  t  ;t.getElementPositio n  =  ,t.getWinPosition s  =functio n( )  {va  t  =[ ;i f  e&  &"function "= =typeof document.querySelecto )  {va  n  =document.querySelector(e ;i f( )  {va  o  =s(  )|  |{  ;u(o.  )&  &u(o.  )&  &u(o.widt  )&  &u(o.heigh  )&  &t.push  {pLeftTo  :[o.  ,o.y  ,pRightTo  :[o x  +o.widt  ,o.y  ,pLeftBotto  :[o.  ,o y  +o.height  ,pRightBotto  :[o x  +o.widt  ,o y  +o.height  ,siz  :o.widt h *o.heigh  t ) }  }va  i  =r.documentElemen , a  =r.bod , l  =i.clientWidt h|  |a.offsetWidt  h|  | , c  =i.clientHeigh  t|  |a.offsetHeigh  t|  |  ;return t.push  {pLeftTo  :[  ,0  ,pRightTo  :[  ,0  ,pLeftBotto  :[  ,c  ,pRightBotto  :[  ,c  ,siz : l  *  ,clientHeigh  :  ,clientWidt :  l} ,  t}  ,t.checkIsRecor d  =functio n(  ,  , )  {var  ;tr y {i f  e&  &e.getAttribut )  {va  r  =e.getAttribute(  )|  |" ; o = t ?  r== =   :! r } }catc h( ) {  }retur  o }} ,functio n(  ,  , )  {"use strict  ;function o(  ,  , )  {va  o  =f.getWinPositions( , r  = , i  =l.getGoldlogVal("_aplus_auto_exp  )|  |{ , a  =i._acHashMa p|  |{ ;fo r(var u in a )fo r(va  c  =a[  ]|  |[ , g  = ; g  <c.lengt  ;g++ )  {va  _  =c[  ]|  |{  ;_.eventTyp e  ="IObserver  ;va  m  =!  n|  |_.elemen t== =t.targe ;i f  0== =_.statu  s&  &_.expConfi  g&  & )  {va  y  =t.boundingClientRec t|  |{ ;i f(y.widt  h|  |y.heigh  t|  | y  =t.target.getBoundingClientRect  )|  |{}  ,y.widt  h&  &y.heigh ) { _  =s.assign(  ,y  ,_ x  =y  x|  |y.lef  ,_ y  =y  y|  |y.to  ,_.widt h  =y.widt  ,_.heigh t  =y.heigh  ,_.siz e  =y.widt h  *y.heigh  ;va  b  =f.checkIsRecord(_.elemen  ,_.hash_valu  ,"_aplus_auto_exp" , w  =_.widt h  *_.heigh t  *t.intersectionRati , E  =f.getViewabilityRateInWindow(  ,  ,v ;i f(! )  {va  A  =t.intersectionRati o> = ;i f  A| |  E> = )  {_.exposureTim e  =  ,_.statu s  =  ;va  x  =p.getAutoExpUserFn( ;  x&  &(_.userParam s  =h.autoUserFnHandler(  ,_.elemen  ,_.elementSelector))  ,_.viewabilityRat e = A  ?t.intersectionRati   :  ,_.viewabilit y = A  ?"intersection "  :"fillwindow  ,p.EXP_DURATIO  N|  |(_.statu s  =2)  ,h.updateExpHashMap(  ,  ,"UPDATE"  ,+ r }els   E&  &h.updateExpHashMap(  ,Object.assign(c[g ,  {lastEventTyp  :_.eventTyp  e}  ,"UPDATE ) } } }  }retur  r  }function r(  , )  {va  n  ="APLUS_AE_EXPOSURE_CHANGE , r =  e&  &e.typ e ?e.typ   :"IObserver , i  =(new Date).getTime( , a  = ; a  ="IObserver  "!= =t.fro m  ?g.filterStartExposureSize(  ,  ,! )  :o(  ,e , a >  0&  &(p.EXP_DURATIO N  ?setTimeout(functio n ) { a =g.filterEndExposureSize(  ,r , a >  0&  &goldlog.aplus_pubsub.publish( ,  {siz  :  ,eventTyp :  r )}  ,p.EXP_DURATION )  :goldlog.aplus_pubsub.publish( ,  {siz  :  ,eventTyp :  r}) )  }function i( )  {va  t =  {roo  :nul  ,rootMargi  :"0px  ,threshol :  d  ;return new m(functio n( )  {c(  ,functio n( )  {e.intersectionRati o >  0&  &r( ,  {fro  :"IObserver  " )} )}  ,s.assign(  ,e) ) }function a( ) {i f( )  {y.io_bas  e|  |(y.io_bas e  =i()  ;va  t  =l.getGoldlogVal("_aplus_auto_exp  )|  |{ , n  =t._acHashMa p|  |{ ;fo r(var o in n )fo r(va  r  =n[  ]|  |[ , a  = ; a  <r.lengt  ;a++ )  {va  u  =r[  ]|  |{ ;i f(!u.inObserve )  {var  , c  ="io_v_ "  +encodeURIComponent(u.positionSelector  ;u.positionSelecto  r&  &!y[  ]&  & s  =i  {roo  :document.querySelector(u.positionSelector  ,expConfi :  e}  ,y[ ]  =s , s  ?s.observe(u.elemen )  :y.io_base.observe(u.element  ,u.inObserve r  = 0 } } }retur n! 0  }va  u  =n(16 , s  =n(20 , l  =n(7 , c  =n(9 , p  =n(12 , g  =n(21 , f  =n(18 , h  =n(6 , d  =p.AUTO_AT_VIEW_RAT , v  =p.AUTO_AT_VIEW_RATE_IN_WINDO , _  =windo , m  =_.IntersectionObserve , y  ={  ;goldlog._aplus_auto_exp.iobserverMa p  =  ;va  b  =h.throttle(functio n( )  {r( ,  {fro  :e.typ  e )}  ,100  ;t.watch_exposure_chang e  =functio n( )  {goldlog.aplus_pubsub.subscribe("APLUS_AE_DOM_CHANGE  ,functio n )  {a(  )}  ,u.on(windo  ,"touchmove  ,b  ,u.on(windo  ,"scroll  ,b  ,u.on(windo  ,"resize  ,b  ,a(  )}  ,t.clea r  =functio n(  , ) {i f  t&  &"appendMetaInfo  "!= =t.fro )  {u.un(windo  ,"touchmove  ,b  ,u.un(windo  ,"scroll  ,b  ,u.un(windo  ,"resize  ,b ;fo r(var n in y )  {va  o  =y[n  ;o.disconnect ) } } }} ,functio n(  ,  , )  {"use strict  ;function o(  , ) {retur n"function "!  =typeof Object.assig n  ?functio n( ) {i f(nul  l== = )throw new TypeError("Cannot convert undefined or null to object" ;fo r(va  t  =Object(e , n  = ; n  <arguments.lengt  ;n++ )  {va  o  =arguments[n ;i f(nul  l!= = )fo r(var r in o  )Object.prototype.hasOwnProperty.call(  ,  )&  &(t[ ]  =o[r )  }retur   t }(  , )  :Object.assign({  ,  , )  }function r( ) {retur n"function  "=  =typeo  e  }function i( )  {return Array.isArra y  ?Array.isArray( )  :/Array/.test(Object.prototype.toString.call(e )  }function a( ) {retur n"string  "=  =typeo  e  }function u( ) {retur n"number  "=  =typeo  e  }function s( ) {retur n"undefined  "=  =typeo  e  }function l( ) {retur n"[object Object]  "== =Object.prototype.toString.call( )  }function c( ) {i f("number  "=  =typeof  )retur n! ;i f(s(  )|  |nul  l== = )retur n! ;i f(a(e )retur n! ;i f(i(e )retur n!e.lengt ;i f(l(e ) {fo r(var t in e )i f(hasOwnProperty.call(  ,t )retur n! ;retur n! 0 }retur n! 1  }function p( ) {i f("string  "=  =typeof  )tr y  {va  t  =JSON.parse(e ;retur n!("object "!  =typeo   t|  |! ) }catc h( ) {retur n! 1 }retur n! 1  }function g(  , )  {return e.indexOf( )  >- 1  }va  f  =windo  ;t.assig n  =  ,t.makeCacheNu m  =functio n )  {return Math.floor(26843545 6  *Math.random()).toString(1  )}  ,t.eac h  =n(9  ,t.isStartWit h  =functio n(  , )  {retur   0== =e.indexOf(  )}  ,t.isEndWit h  =functio n(  , )  {va  n  =e.lengt , o  =t.lengt  ;retur   n> =  o&  &e.indexOf( )= = n -  o}  ,t.an y  =functio n(  , )  {var  , o  =e.lengt ;fo r n  =0 ; n  <  ;n++)i f(t(e[n] )retur n! ;retur n!  1}  ,t.isFunctio n  =  ,t.isArra y  =  ,t.isStrin g  =  ,t.isNumbe r  =  ,t.isUnDefine d  =  ,t.isObjec t  =  ,t.isEmpt y  =  ,t.isJSO N  =  ,t.isContai n  =  ;va  h  =functio n( )  {var  , n  =e.constructo r== =Arra y  ? ]  :{ ;i f("object  "=  =typeof  ) {i f(f.JSO  N&  &f.JSON.pars ) t  =JSON.stringify(e , n  =JSON.parse(t ;else fo r(var o in e  )n[ ]  ="object  "=  =typeof e[ ]  ?h(e[o )  :e[o  ;retur  n  }  ;t.cloneOb j  =  ,t.cloneDee p =  h} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , r  =n(7 , i  =n(12 , a  =n(6 , u  =i.AUTO_AT_VIEW_RAT , s  =i.AUTO_AT_VIEW_RATE_IN_WINDO , l  =functio n( ) {fo r(var  ;  e&  &"HTML  "!= =e.tagName; ) { t  =e.style.displa ; {i f("none  "== = )brea ; e  =e.parentNod e } }retur n"none  "== =  t  ;t.filterStartExposureSiz e  =functio n(  , )  {va  n  = , c  =o.getWinPositions( , p  =r.getGoldlogVal("_aplus_auto_exp  )|  |{ , g  =p._acHashMa p|  |{ ;fo r(var f in g )fo r(va  h  =g[  ]|  |[ , d  = ; d  <h.lengt  ;d++ )  {va  v  =h[  ]|  |{ ;i f  0== =v.statu  s&  &v.expConfi  g&  &!l(v.element )  {va  _  =o.getElementPosition(v.element ;i f(_.widt  h&  &_.heigh )  {v x  =_.  ,v y  =_.  ,v.eventTyp e  =  ,v.widt h  =_.widt  ,v.heigh t  =_.heigh  ,v.siz e  =_.widt h  *_.heigh  ;var   ;v.expConfig.positionSelecto  r&  & m  =o.getWinPositions(v.expConfig.positionSelector)  ;va  y  =o.wrapViewabilityRate  m|  |  ,  ,u , b =  y> = , w  = ;  m&  & w  =o.wrapViewabilityRate(  ,  ,u)  ;va  E  =v.widt h  *v.heigh t  * , A  =o.getViewabilityRateInWindow(  ,  ,s , x  =o.checkIsRecord(v.elemen  ,v.hash_valu  ,"_aplus_auto_exp" ;i f(  b| |  A>  =  )&  &!x )  {v.exposureTim e  =  ,v.statu s  =  ;va  T  =i.getAutoExpUserFn( ;  T&  &(v.userParam s  =a.autoUserFnHandler(  ,v.elemen  ,v.elementSelector))  ,i.EXP_DURATIO  N|  |(v.viewabilityRat e = b ? y  :  ,v.viewabilit y = b  ?"intersection "  :"fillwindow  ,v.statu s  =2)  ,a.updateExpHashMap(  ,  ,"UPDATE"  ,+ n } } }  }retur   n}  ,t.filterEndExposureSiz e  =functio n(  , )  {va  n  = , i  =o.getWinPositions( , l  =r.getGoldlogVal("_aplus_auto_exp  )|  |{ , c  =l._acHashMa p|  |{ ;fo r(var p in c )fo r(va  g  =c[  ]|  |[ , f  = ; f  <g.lengt  ;f++ )  {va  h  =g[  ]|  |{ ;i f  1== =h.statu  s&  &h.exposureTim  e== =  e&  &h.expConfi )  {h.eventTyp e  =  ;var   ;h.expConfig.positionSelecto  r&  & d  =o.getWinPositions(h.expConfig.positionSelector)  ;va  v  =o.checkIsRecord(h.elemen  ,h.hash_valu  ,"_aplus_auto_exp" , _  =o.wrapViewabilityRate  d|  |  ,  ,u , m =  _> = , y  = ;  d&  & y  =o.wrapViewabilityRate(  ,  ,u)  ;va  b  =h.widt h  *h.heigh t  * , w  =o.getViewabilityRateInWindow(  ,  ,s  ;  m| |  w>  =s )&  & v  ?(h.viewabilityRat e = m ? _  :  ,h.viewabilit y = m  ?"intersection "  :"fillwindow  ,h.statu s  =  ,a.updateExpHashMap(  ,  ,"UPDATE"  ,++n )  :(h.statu s  =  ,h.exposureTim e  ="  ,a.updateExpHashMap(  ,  ,"UPDATE") ) }  }retur  n  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(16 , r  =n(21 , i  =n(6 , a  =n(12 , u  =functio n( )  {va  t  ="APLUS_AE_EXPOSURE_CHANGE , n =  e&  &e.typ e ?e.typ   :"init , o  =(new Date).getTime( , i  =r.filterStartExposureSize(  ,  ,!1 ; i >  0&  &(a.EXP_DURATIO N  ?setTimeout(functio n ) { i =r.filterEndExposureSize(  ,n , i >  0&  &goldlog.aplus_pubsub.publish( ,  {siz  :  ,eventTyp :  n )  ,a.EXP_DURATION )  :goldlog.aplus_pubsub.publish( ,  {siz  :  ,eventTyp :  n})  )} , s  =i.throttle(functio n( )  {u(  )  ,100 , l  ={ , c  =functio n(  , ) {i f  e&  &e.forEac  h&  &Object.key  s&  &document.querySelecto )  {e.forEach(functio n( )  {e.positionSelecto r&  &document.querySelector(e.positionSelecto  )&  &(l[e.positionSelecto ]  =! )}  ;va  n  =Object.keys(l  ;n.forEach(functio n( )  {o[ ]&  &o[t](document.querySelector(e  ,"scroll  ,functio n( )  {s(  )  ) ) }  ;t.watch_exposure_chang e  =functio n( )  {goldlog.aplus_pubsub.subscribe("APLUS_AE_DOM_CHANGE  ,u  ,o.on(windo  ,"touchmove  ,s  ,o.on(windo  ,"scroll  ,s  ,o.on(windo  ,"resize  ,u  ,c(  ,"on  )}  ,t.clea r  =functio n( )  {o.un(windo  ,"touchmove  ,s  ,o.un(windo  ,"scroll  ,s  ,o.un(windo  ,"resize  ,u  ,c(  ,"un ) }} ,functio n(  ,  , )  {"use strict  ;function o(  ,  , )  {va  o  ="0 ;i f( ) {i f("spmc  "== = )  {va  r  =n.split("." ; o  =r[ ]  ?r[ ]  :r[3  ,/^(\i|\d)[0-9]+$/.test() &  & o  ="0", n = [r[0, r[1, o].join(". ) } }els e { n  ="  ; va  i = window.g_SP M |  | { ; i f("function  "=  =typeof i.getPara )  { va  a  =i.getParam(t  ; "spmc  "== = e? o  =t.getAttribute("data-spm  )|  |"0, n = [a.  , a.  , o].join(".") : n = [a.  , a.  , a.  , a.d].join(". ) }  }retur  n  }va  r  =n(2 , i  =n(20 , a  =n(7 , u  =n(3 , s  =n(10 , l  =n(6 , c  =n(12 , p  =functio n )  {va  e  =u.isDebugAplus( , t  ={ , n  =c.getDefaultRequestCfg( , r  =a.getGoldlogVal("_aplus_auto_exp) |  | { , p = r._acHashMa p |  | {  ; return s(  , functio n(  , )  { fo r(var  c = s |  | [, p = , g = c.length ; <g ; p+ ) { va  f  =c[] |  | { ; i f  2== =f.statu )  { f.statu s  =  , l.updateExpHashMap(  ,  , "UPDATE", r.exp_times +  ;var  , d  =f.expConfi g|  | { , v = goldlog.spm_a b ? goldlog.spm_ab.join(". )  :"0.0.0.0, _ = o(d.eltyp, f.elemen) |  | , m = " ;tr y  {va  y  =new Number(f.viewabilityRate ; h  =y.toFixed( ) }catc h( ) { h  =f.viewabilityRat e  }va  b =  {_  :f.widt  ,_  :f.heigh  ,_  :f.  ,_  :f.  ,_rat  :  ,_viewabilit  :f.viewabilit  y  ;"object  "=  =typeof f.userParam  s&  &("object  "=  =typeof f.userParams.userdat  a&  & b  =i.assign(  ,f.userParams.userdata)  ,f.userParams.sp  m&  & _  =o(d.eltyp  ,", f.userParams.spm)  , f.userParams.sc  m &  & m  =f.userParams.scm)), (l.isMethod(d.metho) |  | l.isPkgSize(d.pkgSize) &  & n  = l.filterExpConfigRequestCfg(d)  ; va  w = l.fillPropsData(  , f.elemen, b ; w = l.fillFilterData(  , f.elemen, b  ; va  E = { exarg:  , sc:  , sp:  , aplusContentI: "  "  ; t[  ]|  | (t[] = [], t[a].push(E, e &  & u.logger  { ms: "logkey =  " + a + ", params =  " + decodeURIComponent(JSON.stringify(E)) }  }}) , { logkeyContaine:  , request_cfg : n } } , g = functio n() {fo r(va  t = [, n = , o = e.lengt ; n <  ; n++ ) {va  r = e[] |  | { , a  ={  ; s(  , functio n(  ,)  { "element " != = e &  & (a[] = ) };va  u = i.cloneObj(a  ; u.elemen t = r.elemen, t.push() }retur  t } , f = functio n()  {va  t = a.getGoldlogVal("_aplus_auto_exp  )|  |{ , n  =t._acHashMa p|  |{ , o  =[  ;s(  ,functio n(  , )  {fo r(var  r  =g(  )|  |[ , i = , a =r.length ;  <a ;i+ )  {va  s  =r[  ]|  |{ , p  =n[  ]|  |{ ;i f  3== =s.statu )tr y  {l.setRecordSuccess(  ,c.DATA_APLUS_AE_KEY  ,goldlog.aplus_pubsub.publish("APLUS_ELEMENT_EXPOSURE, { logke:  , v_origi:  , option: e }, o.push() }catc h()  { u.logger  { ms: e &  & e.messag  e ) } }fo r(  ; o.lengt h > 0; ) l.updateExpHashMap(  , o.pop(  , "CLEAR  )} )} , h  =functio n(  ,  , )  {va  o  =e.logkeyContaine r|  |[ , i  =e.request_cf  g|  |{  ;r.wrap(functio n )  {s(  ,functio n(  , )  {i f o& &o.lengt h  > ) {fo r(va  r  = ; r  <o.length; )  {va  a  =[ , u  =JSON.stringify(o.slice( , r  +i.pkgSize)  ;a.push("expdata = "  +u  ,a.push("_is_auto_exp = 1"  ,a.push("_eventType = "  +t.eventType  ,a.push("_method = "  +i.method  ,a.push("_pkgSize = "  +i.pkgSize  ,goldlog.record(  ,"EXP, a.join("&", i.metho  d |  | "POST", r + =i.pkgSiz e  } n() } } ) }  , "recordAplusAt" ) } , d = functio n() {i f(e.siz e > )  {va  t = p  )|  | {  ; h(  ,  ,) }; t.watch_data_chang e = functio n ) { goldlog.aplus_pubsub.subscribe("APLUS_AE_EXPOSURE_CHANGE  ,  )}  ,t.clea r  =functio n )  {goldlog.aplus_pubsub.unsubscribe("APLUS_AE_EXPOSURE_CHANGE,) } }]; !functio n()  {
                                                function e() {i f(n[o )return n[o].export;va  a = n[] = { export: {  , i:  , loade: 1  ; return t[o].call(a.export,  , a.export, e, a.loade d = !  , a.export s  }va  n  ={  ; return e m  =  , e c  =  , e p  ="  ,e(  ) }([functio n(  ,  , )  {t.export s =n(  )  ,functio n(  ,  , )  {"use strict" ;!functio n )  {var  t  =window  ;n(2)() ;va  e  =n(3 , o  =n(4  ;"ontouchend  "in document.createElement("div  )&  & (t.goldlog_queu  e|  | (t.goldlog_queu e = [])).push  {
                                                  actio: "goldlog.setMetaInfo  ,argument  :["aplus - touch, "tap  ]}  ;va  a  =functio n )  {n(96  ;va  e  =n(98 , o  =n(33 ;i f(o.doPubMsg(["goldlogReady, "running"]  , document.getElementsByTagName("body").lengt ) {va  r = "g_tb_aplus_loaded ;i f(t[r )retur  ;t[ ]  =  ,n(112).initGoldlog( ) }else setTimeout(functio n )  {a  )  ,5  ) , r  =functio n( ) {tr y  {e.do_tracker_jserror  {rati  :  ,messag :  t&  &t.messag  ,erro  :encodeURIComponent  t&  &t.stac k  ?t.stac k  :""  ,filenam  :"aplusLoad  " ) }catc h( ) {  } ;tr y  {a ) }catc h( )  {r(  ,o.script_nam e  +"@"  +o.lve ) }}( )} ,functio n(  , )  {t.export s  =functio n )  {va  t  =window.goldlog_queu e|  |(window.goldlog_queu e  =[] ;tr y  {va  e  =navigator.userAgen , n  =/Trident/.test(e ;  n|  |t.push  {actio  :"goldlog.setMetaInfo, argument  : ["aplus-p-url-init  ,window.location.href.substring(  ,850  ] ) }catc h( ) { }  }} ,functio n(  , )  {"use strict  ; va  n = functio n(  , ) { va  n  =window.goldlog_queu e|  | (window.goldlog_queu e = []  ; n.push  { actio: "goldlog._aplus_cplugin_track_deb.monitor  ,argument  :  {ke  :"APLUS_PLUGIN_DEBUG, titl: "aplus_core  ,ms  :["_error_: methodName = " + e  +", params= "  +JSON.stringify(t)  ,typ  :"updateMsg, descriptio: e |  | "aplus_core  "  ]  ) , o = functio n(  ,  ,)  {va  o = window.goldlog_queu e |  | (window.goldlog_queu e = []; o.push  { actio: ["goldlog  ,"_aplus_cplugin_m, e].join(".", argument  : [,]); e.do_tracker_jserro r = functio n(  ,)  {va  a = "do_tracker_jserror  ;o(  ,  ,e  ,n(  ,  )}  ,e.do_tracker_obsolete_inte r  =functio n(  , )  {va  a  ="do_tracker_obsolete_inter; o(  ,  , e, n(  ,)}  , e.wra p = functio n() {i f("function  " =  = typeof  )tr y  {t ) }catc h()  {n  { ms: t.messag e | | t }  , "exception" ) }finall y { } } } ,functio n(  ,  ,)  { "use strict  ;va  o  =n(5 , a  =n(6 , r  =n(7  ;e.APLUS_EN V  ="production, e.lve r = a.lve, e.toUtVersio n = a.toUtVersio, e.script_nam e = a.script_nam, e.recordType s = o.recordType, e.KE Y = o.KE, e.contex t = r.contex, e.context_prep v = r.context_prep, e.aplus_ini t = n(16).plugins_ini, e.plugins_p v = n(37).plugins_p, e.plugins_prep v = n(63).plugins_prep, e.context_hjl j = n(64, e.plugins_hjl j = n(66).plugins_hjl, e.beforeUnloa d = n(78, e.initLoa d = n(82, e.spmExceptio n = n(86, e.goldlog_pat h = n(87, e.is_auto_p v = "true  ,e.utilPvi d  =n(91  ,e.disablePvi d  ="false, e.mustSpm E = !  , e.LS_CNA_KE Y = "APLUS_CNA  "} ,functio n(  ,)  { "use strict  ;e.recordType s =  {hjl  :"COMMON_HJLJ, uhjl  : "DATACLICK_HJLJ  ,p  :"PV, prep  : "PREPV  ", e.KE Y = { NAME_STORAG: { REFERRE: "wm_referrer  ,REFERRER_PV_I  :"refer_pv_id, LOST_PV_PAGE_DURATIO: "lost_pv_page_duration  ,LOST_PV_PAGE_SPMA  :"lost_pv_page_spmab, LOST_PV_PAG: "lost_pv_page  ,LOST_PV_PAGE_MS  :"lost_pv_page_msg " }  }} ,functio n(  , )  {"use strict  ; e.lve r  ="8.15.23  ,e.toUtVersio n  ="v20240222, e.script_nam e  ="aplus_int  " }, functio n(  ,  ,) { "use strict  ;e.contex t  =n(8  ,e.context_prep v  =n(1  )} ,functio n(  ,  , )  {"use strict; function o ) {retur n  { compos: { maxTimeou: 550  0 }  , eta: { egUr: "gj.mmstat.com/eg.js  ,cna  :i.getCookie("cna  ) }  , where_to_sendp: { ur: "//gj.mmstat.com/v.gif  ,urlRule  :s.getBeaconSr c } }  }function a )  {return r.assign(new s.initConfi  ,new  )  }va  r  =n(9 , i  =n(11 , s  =n(14  ;t.export s =  a} ,functio n(  ,  , )  {"use strict; function o(  ,) {retur n"function "! = typeof Object.assig n ? functio n() {i f(nul  l == =)throw new TypeError("Cannot convert undefined or null to object" ;fo r(va  e = Object(t, n = ; n < arguments.lengt; n++ ) {va  o = arguments[n ;i f(nul  l != =)fo r(var a in o  ) Object.prototype.hasOwnProperty.call(  ,) &  & (e[] = o[a ) }retur   e } (  , )  : Object.assign({  ,  , ) } function a() {retur n"function  " =  = typeo  t } function r() { return Array.isArra y ? Array.isArray() : /Array/.test(Object.prototype.toString.call(t)  } function i() {retur n"string  " =  = typeo  t } function s() {retur n"number  " =  = typeo  t } function u() {retur n"undefined  " =  = typeo  t } function c() {retur n"[object Object]  " == =Object.prototype.toString.call() } function l() {i f("number  " =  = typeof  )retur n!;i f(u() |  | nul  l == =)retur n!;i f(i(t)retur n! ;i f(r(t)retur n!t.lengt ;i f(c(t) { fo r(var e in t )i f(hasOwnProperty.call(  , e)retur n! ;retur n! 0 }retur n! 1 } function p() {i f("string  " =  = typeof  )tr y  {va  e = JSON.parse(t ;retur n!("object "! = typeo   e |  | ! ) }catc h() {retur n! 1 }retur n! 1 } function g(  ,) { return t.indexOf() > - 1 }va  f = windo; e.assig n =  , e.makeCacheNu m = functio n ) { return Math.floor(26843545 6 * Math.random()).toString(1) }  , e.eac h = n(10, e.isStartWit h = functio n(  ,)  { retur   0== =t.indexOf() }, e.isEndWit h = functio n(  ,)  { va  n  =t.lengt, o  =e.lengt  ; retur   n> =  o &  & t.indexOf()= = n - o}  , e.an y = functio n(  ,)  { var  , o = t.lengt;fo r n = 0; n <  ; n++)i f(e(t[n])retur n! ;retur n!  1 }  , e.isFunctio n =  , e.isArra y =  , e.isStrin g =  , e.isNumbe r =  , e.isUnDefine d =  , e.isObjec t =  , e.isEmpt y =  , e.isJSO N =  , e.isContai n =  ;va  d = functio n()  { var  , n = t.constructo r== =Arra y ? ]  : { ;i f("object  " =  = typeof  ) {i f(f.JSO  N &  & f.JSON.pars) e = JSON.stringify(t, n = JSON.parse(e ;else fo r(var o in t  ) n[ ]  = "object  " =  = typeof t[] ? d(t[o ) : t[o  ; retur  n }; e.cloneOb j =  , e.cloneDee p = d } ,functio n(  ,)  {
                                                    "use strict  ;t.export s  =functio n(  , )  {var  , o  =t.lengt ;fo r n  =0 ; n  <  ;n++ )  {va  a  =e(t[n  ,n ;i f("break  "== = )brea k }  }} ,functio n(  ,  , )  {"use strict; function o() {va  e = s.cookie.match(new RegExp("(?:^|;)\\s* " + t + "=([^;]+)")  ;retur  e ? e[] : " " } function a(  ,  ,) { n |  | n  ={ };va  a = new Dat;i f("session  " == =n.expires ;else i f(n.expire  s &  & ("number  " =  = typeof n.expire  s |  | n.expires.toUTCString)  ) "number  " =  = typeof n.expire s ? a.setTime(a.getTime) + 2 4 * n.expire s * 6 0 * 6 0 * 1e ) : a = n.expire, e + ="; expires= " + a.toUTCString( ;els e  {va  r = 2; c.indexof(["v.youku.com  ,"www.youku.com, "player.youku.com", location.hostnam ) > -  1 &  & r  =1, a.setTime(a.getTime) + 36 5 * r * 2 4 * 6 0 * 6 0 * 1e3, e + ="; expires= " + a.toUTCString ) } e + ="; path= " + (n.pat h ? n.pat : "/") , e + ="; domain= " + n.domai, s.cooki e = t + "= " +  ;va  i = ;tr y  {va  u = navigator.userAgent.match(/Chrome\/\d+/ ; u &  & u[] &  & i  =u[0].split("/")[1, i &  & i  = parseInt(i) ) }catc h() { } return n.SameSit  e & & i > =8  0 &  & e + ="; SameSite= " + n.SameSit, e + ="; Secure  ,s.cooki e = t  +" = "  +e)  ,o( )  }function r(  ,  , ) {tr y {i f  n|  | n  ={}  ,n.domai )a(  ,  ,n ;else fo r(va  o  =l.getDomains( , r  = ; r  <o.length; )n.domai n  =o[r  ,a(  ,  , ) ? r  =o.lengt   : r+ + }catc h( ) { }  }function i )  {va  t  ={  ;return u.each(  ,functio n( )  {t[ ]  =o(  )}  ,t.cnau i  =/\btanx\.com$/.test( )  ?o("cnaui )  : " , t  }va  s  =documen , u  =n(9 , c  =n(12 , l  =n(13 , p  =location.hostnam  ;e.getCooki e  =  ,e.setCooki e  =  ;va  g  =["tracknick, "thw  ,"cna"  ;e.getDat a  =  ,e.getHn g  =functio n )  {return encodeURIComponent(o("hng  )|  | " )  }} ,functio n(  , )  {"use strict; e.indexo f = functio n(  ,)  {va  n = - ;tr y { n = t.indexOf() }catc h() {fo r(va  o = ; o < t.lengt; o++ ) t[] == =  e &  & n  = ) }finall y  {retur  n } } } ,functio n(  ,)  {
                                                      "use strict  ;e.getDomain s  =functio n )  {va  t  =[ ;tr y {fo r(va  e  =location.hostnam , n  =e.split("." , o  = ;  o< =n.length; )t.push(n.slice(n.lengt h  -o).join(".")  , o+ + }catc h( ) {  }retur  t  }} ,functio n(  ,  , )  {"use strict; function o(  ,  ,) {va  o = window.goldlo g |  | { , s  =o.getMetaInfo("aplus-ifr-pv )  +" "= ="1  ; retur  e?r()  ?"yt ": "m " : n&  & s ? a.isContain(  , "wrating.com )  ?"k "  :i(  )|  |"y "  :i(  )|  |"v "  }va  a  =n(9 , r  =functio n( ) {fo r(va  e  =["youku.com, "soku.com  ,"tudou.com, "laifeng.com", n = ; n < e.lengt; n++ ) {va  o = e[n ;i f(a.isContain(  , o)retur n! 0 }retur n!  1, i = functio n() {fo r(va  e = [["scmp.com  ,"sc"  ,["luxehomes.com.hk, "sc", ["ays.com.hk  ,"sc"  ,["cpjobs.com, "sc", ["educationpost.com.hk  ,"sc"  ,["cosmopolitan.com.hk, "sc", ["elle.com.hk  ,"sc"  ,["harpersbazaar.com.hk, "sc", ["1688.com  ,"6"  ,["youku.com, "yt", ["soku.com  ,"yt"  ,["tudou.com, "yt", ["laifeng.com  ,"yt"] , n  = ; n  <e.lengt  ;n++ )  {va  o  =e[n ;i f(a.isContain(  ,o[0] )return o[ ] }retur n"  "  ;e.getBeaconSr c  =  ,e.initConfi g  =functio n ) {retur n  {compos  : {}  ,eta :  {egUr  :"log.mmstat.com / eg.js, cna  : "  ,tag  :", stag  : "  ,lstag  :" - 1, lscnastatus  : "  "}  , can_to_sendp: { fla: "NO  " }  , userdat: { }  , what_to_sendp: { pvdat: { }  , exparam: { } }  , what_to_pvhas: { has:  ] }  , what_to_sendpv_u: { pvdataToU: { } }  , what_to_sendpv_ut: { isSucces: !  , pvdataToUt  : { } }  , when_to_sendp: { aplusWaitin: "  " }  , where_to_sendp: {
                                                        ur: "//log.mmstat.com/o.gif  ,urlRule :  o}  ,where_to_sendlog_u :  {aplusToU  : {}  ,toUTNam  :"toUT  "}  ,hjl :  {what_to_hjl :  {logdat  :{  }}  ,what_to_hjlj_u :  {logdataToU  :{ }  }}  ,networ :  {connTyp  :"UNKNOWN  "}  ,is_singl  : 1 }  }} ,functio n(  ,  , )  {"use strict; function o ) {retur n  { eta: { egUr: "log.mmstat.com/eg.js  ,cna  :a.getCookie("cna"  ,tag  :", stag  : "  " }  , compos: { }  , where_to_prep: { ur: "//log.mmstat.com/v.gif  ,urlRule  :r.getBeaconSr  c}  ,userdat  : {}  ,what_to_prep :  {logdat  :{  }}  ,what_to_hjlj_exinf :  {EXPARAMS_FLA  :"EXPARAMS, exinfo  : [, exparams_key_names  : ["uidaplus  ,"pc_i, "pu_i  ]}  ,is_singl  : 1 }  }va  a  =n(11 , r  =n(14  ;t.export s =  o} ,functio n(  ,  , )  {"use strict  ; e.plugins_ini t = { nam: "where_to_sendpv  ,enabl  :!  ,pat  :n(1  ) ,  {nam  :"etag, enabl: !  , pat: n(3),  { nam: "etag_sync  ,enabl  :!  ,pat  :n(3  )  ]} ,functio n(  ,  , )  {"use strict  ; va  o  =n(18, a = n(25)(  ; t.export s  =functio n )  { return o.assign( ,  { ru: functio n )  { va  t  =this.getAplusMetaByKey("aplus-rhost-v", e = this.options.context.where_to_sendp v |  | { , n = e.ur  l |  | " , a  =this.getGifPath(e.urlRul  ,n , r  =o.getPvUrl  {metaNam  :"aplus - rhost - v, metaValu  :  , gifPat:  , ur: n }  ; e.ur l =  , this.options.context.where_to_sendp v = e  } ) } } ,functio n(  ,  ,)  { "use strict  ;function o( ) { t  =  t|  |"").split("#")[0].split(" ? ")[0  ;va  e  =t.lengt , n  =functio n( )  {var  , n  =t.lengt , o  = ;fo r e  =0 ; e  <  ;e++) o  =3 1 * o  +t.charCodeAt(e  ;retur   o  ;retur  e  ?n e  +"# "  +t.charCodeAt e  -1 )  :- 1  }function a( ) {fo r(va  e  =t.split(" & " , n  = , o  =e.lengt , a  ={ ; n  <  ;n++ )  {va  r  =e[n , i  =r.indexOf("=" , s  =r.substring(  ,i , u  =r.substring i  +1  ;a[ ]  =p.tryToDecodeURIComponent( )  }retur  a  }function r( ) {i f("function "!  =typeof  )throw new TypeError t  +" is not a function"  ;retur  t  }function i( )  {var   ,  , , a  =[ , r  =t.lengt ;fo r o  =0 ; o  <  ;o++) e  =t[o][0 , n  =t[o][1  ,a.push(l.isStartWith(  , ) ? n : e  +" = "  +encodeURIComponent(n)  ;return a.join(" & ) } function s() { var   ,  , , a = { , r  =t.lengt ; fo r o  =0 ; o<  ;o++) e = t[o][0, n = t[o][1, a[] =  ;retur  a } function u(  ,) { var   ,  , , r = [ ;fo r(n in  )t.hasOwnProperty() &  & o  =" " + t[n, a = n + "= " + encodeURIComponent(o, e ? r.push() : r.push(l.isStartWith(  ,) ? o : a)  ; return r.join("& )  }function c(  , )  {va  n  =t.indexOf(" ?  ) =  = - 1 ? "? " : "& , o = e  ?l.isArray( )  ?i( )  :u( )  :";retur  o ? t + n + o : t }va  l = n(9, p = n(19, g = n(22, f = paren t != =sel  ; e.is_in_ifram e =  , e.makeCacheNu m = l.makeCacheNu, e.isStartWit h = l.isStartWit, e.isEndWit h = l.isEndWit, e.an y = l.an, e.eac h = l.eac, e.assig n = l.assig, e.isFunctio n = l.isFunctio, e.isArra y = l.isArra, e.isStrin g = l.isStrin, e.isNumbe r = l.isNumbe, e.isUnDefine d = l.isUnDefine, e.isContai n = l.isContai, e.slee p = n(23).slee, e.makeChkSu m =  , e.tryToDecodeURIComponen t = p.tryToDecodeURIComponen, e.nodeListToArra y = p.nodeListToArra, e.parseSemicolonConten t = p.parseSemicolonConten, e.param2ob j =  ;va  d = n(24, _ = functio n() { retur  n/ ^ (\/\/){0,1}(\w+\.){1,}\w+((\/\w+){1,})?$/.test()  ; e.hostValidit y =  ;va  h = functio n(  ,)  {va  n = /^(\/\/){0,1}(\w+\.){1,}\w+\/\w+\.gif$/.test(t, o = _(t, a = "  ;retur  n ? a  ="isGifPath " :  o&  & a  ="isHostPath" ,  a|  |d.logger  {ms : e  +": " + t  +' is invalid, suggestion: "xxx.mmstat.com"  '} ,  a , m  =functio n( ) {retur n !/^\/\/gj\.mmstat/.test(  )&  &goldlog.isInternational  )&  & t  =t.replace(/^\/\/\w+\.mmstat  ,"//gj.mmstat") ,  t  ;e.filterIntUr l  =  ,e.getPvUr l  =functio n( ) {  t|  | t  ={}  ;var   , , o  =t.metaValu e&  &h(t.metaValu  ,t.metaName , a  ="  ;"isGifPath  "== = o  ? e  =/^\/\//.test(t.metaValu )  ?" "  :"// , a = e  +t.metaValu )  :"isHostPath  "== =  o&  & e  =/^\/\//.test(t.metaValu )  ?" "  :"// , n  =/\/$/.test(t.metaValu )  ?" "  :"/ , a = e  +t.metaValu e + n  +t.gifPath  ;var   ;retur  a ? r = a  : e =  0==  =t.gifPath.indexOf("/ )  ?t.gifPat   :"/ "  +t.gifPat , r  =t.ur  l&  &t.url.replace(/\/\w+\.gif  ,e)) ,  r}  ,e.indexo f  =n(12).indexo  ,e.callabl e  =  ;va  v  ="::-plain-::  ;e.mkPlainKe y  =functio n )  {retur  v  +Math.random  )}  ,e.s_plain_ob j  =  ,e.mkPlainKeyForExparam s  =functio n( )  {va  e =  t|  |  ;retur  e  +"exparams  "}  ,e.rndInt3 2  =functio n )  {return Math.round(214748364 7  *Math.random(  )}  ,e.arr2para m  =  ,e.arr2ob j  =  ,e.obj2para m  =  ,e.makeUr l  =  ,e.ifAd d  =functio n(  , )  {var   ,  ,  , , i  =e.lengt ;fo r n  =0 ; n  <  ;n++) o  =e[n , a  =o[0 , r  =o[1 ,  r&  &t.push([  ,r  )}  ,e.isStartWithProtoco l  =g.isStartWithProtoco  ,e.param2ar r  =functio n( ) {fo r(var  , n  =t.split("&" , o  = , a  =n.lengt , r  =[ ; o  <  ;o++) e  =n[o].split("="  ,r.push([e.shift(  ,e.join("=")]  ;retur   r}  ,e.catchExceptio n  =functio n(  ,  , )  {va  o  =windo , a  =o.goldlog_queu e|  |(o.goldlog_queu e  =[]) , r  =  ;"object  "=  =typeo   e&  &e.messag  e&  & r = r  +"_ "  +e.message ,  n&  &n.ms  g&  &  r+ ="_ "  +n.msg)  ,a.push  {actio  :"goldlog._aplus_cplugin_m.do_tracker_jserror  ,argument  :  {messag  :  ,erro  :JSON.stringify(e  ,filenam :  t  ] )  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(20 , a  =n(21  ;t.export s =  {tryToDecodeURIComponen  :functio n(  , )  {va  n =  e|  |" ;i f( )tr y { n  =decodeURIComponent( ) }catc h( ) {  }retur   n  ,parseSemicolonConten  :functio n(  ,  , ) { e =  e|  |{  ;var   , , i  =t.split(";" , s  =i.lengt ;fo r a  =0 ; a  <  ;a++ ) { r  =i[a].split("="  ;va  u  =o.trim(r.slice(1).join("=")  ;e[o.trim(r[0  )|  |" ] = n ? u  :this.tryToDecodeURIComponent( )  }retur   e  ,nodeListToArra  :functio n( )  {var   , ;tr y  {retur  e  =[].slice.call( ) }catc h( ) { e  =[ , n  =t.lengt ;fo r(va  o  = ; o  <  ;o++ )e.push(t[o]  ;retur  e  }  ,getLsCn  :functio n(  , ) {i f(a.se  t&  &a.test( )  {va  n  =" , o  =a.get(t ;i f( )  {va  r  =o.split("_  )|  |[ ; n = e  ?r.lengt h >  1& &  e== =r[ ]  ?r[ ]  :" "  :r.lengt h > 1  ?r[ ]  :" "  }return decodeURIComponent( ) }retur n"  "  ,setLsCn  :functio n(  ,  , ) {  n&  &a.se  t&  &a.test  )&  &a.set( , e  +"_ "  +encodeURIComponent(n  )  ,getUr  :functio n( )  {va  e =  t|  |"//log.mmstat.com/eg.js ;tr y  {va  n  =goldlog.getMetaInfo("aplus-rhost-v" , o  =/[[a-z|0-9\.]+[a-z|0-9] , a  =n.match(o ;  a&  &a[  ]&  & e  =e.replace(  ,a[0] ) }catc h( ) {  }retur  e }  }} ,functio n(  , )  {"use strict  ;function n( ) {retur n"string  "=  =typeo  t  ?t.replace(/^\s+|\s+$/  ," )  :" "  }e.tri m =  n} ,functio n(  , )  {"use strict  ;t.export s =  {se  :functio n(  , ) {tr y  {return localStorage.setItem(  ,e  , 0 }catc h( ) {retur n! 1  }  ,ge  :functio n( ) {tr y  {return localStorage.getItem( ) }catc h( ) {retur n" "  }  ,tes  :functio n )  {va  t  ="grey_test_key ;tr y  {return localStorage.setItem(  ,1  ,localStorage.removeItem(t  , 0 }catc h( ) {retur n! 1  }  ,remov  :functio n( )  {localStorage.removeItem( ) }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(9 , a  =functio n ) {i f(goldlog.aplusDebu )  {va  t  =location.protoco ;retur n"http:  "!= =  t&  &"https:  "!= =  t&  & t  ="https:" , t }retur n"https:  "  ;e.getProtoca l  =  ,e.isStartWithProtoco l  =functio n( ) {fo r(va  e  =["javascript:  ,"tel:  ,"sms:  ,"mailto:  ,"tmall://  ,"#" , n  = , a  =e.lengt ; n  <  ;n++)i f(o.isStartWith(  ,e[n] )retur n! ;retur n! 1  }} ,functio n(  , )  {"use strict  ;e.slee p  =functio n(  , )  {return setTimeout(functio n )  {e  )  , )  }} ,functio n(  , )  {"use strict  ;va  n  =functio n )  {va  t  =! ;retur n"boolean  "=  =typeof goldlog.aplusDebu  g&  & t  =goldlog.aplusDebug ,  t  ;e.isDebugAplu s  =  ;va  o  =functio n( ) {  t|  | t  ={}  ;va  e  =t.leve l|  |"warn  ;window.consol  e&  &window.console[  ]&  &window.console[e](t.ms  )  ;e.logge r =  o} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(26 , r  =n(27  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getMetaInf :functio n )  {va  t  =a.getGoldlogVal("_$  )|  |{ , e  =t.meta_inf o|  |r.getInfo(  ;retur   e}  ,getAplusMetaByKe :functio n( )  {va  e  =this.getMetaInfo  )|  |{  ;return e[  ]}  ,getGifPat :functio n(  , )  {var  , r  =a.getGoldlogVal("_$  )|  |{ ;i f("function  "=  =typeof  ) n  =t(location.hostnam  ,r.is_termina  ,o.is_in_ifram )  +".gif ;else i f(  n&  & )  {va  i  =e.match(/\/\w+\.gif/ ;  i&  &i.lengt h >  0&  & n  =i[0 )  }retur   n|  | n  =r.is_termina l  ?"m.gif "  :"v.gif") ,  n}  ,ru :functio n )  {va  t  =!!this.options.context.is_singl ;i f(! )  {va  e  =this.getAplusMetaByKey("aplus-rhost-v" , n  =this.options.context.where_to_sendp v|  |{ , a  =n.ur  l|  |" , r  =this.getGifPath(n.urlRul  ,a , i  =o.getPvUrl  {metaNam  :"aplus-rhost-v  ,metaValu  :  ,gifPat  :  ,ur  :o.filterIntUrl(  )}  ;n.ur l  =  ,this.options.context.where_to_sendp v = n } } }  }} ,functio n(  , )  {"use strict  ;va  n  =functio n( )  {var  ;tr y  {window.goldlo  g|  |(window.goldlo g  ={}) , e  =window.goldlog[ ] }catc h( ) { e  =" " }finall y  {retur  e  }  ;e.getGoldlogVa l  =  ;va  o  =functio n(  , )  {va  n  =! ;tr y  {window.goldlo  g|  |(window.goldlo g  ={}) ,  t&  &(window.goldlog[ ]  = , n  =! ) }catc h( ) { n  = 1 }finall y  {retur  n  }  ;e.setGoldlogVa l  =  ,e.getClientInf o  =functio n )  {return n("_aplus_client  )|  | }  }} ,functio n(  ,  , )  {"use strict  ;function o( )  {var   ,  , , a  =t.lengt , r  ={ ;fo r(h._microscope_dat a  = , e  =0 ; e  <  ;e++) n  =t[e  ,"microscope-data  "== =f.tryToGetAttribute(  ,"name  )&  & o  =f.tryToGetAttribute(  ,"content"  ,l.parseSemicolonContent(  ,r  ,h.is_head_has_meta_microscope_dat a  =!0  ;h._microscope_data_param s  =l.obj2param(r  ,h.ms_data_page_i d  =r.pageI  ,h.ms_data_shop_i d  =r.shopI  ,h.ms_data_instance_i d  =r.siteInstanceI  ,h.ms_data_siteCategoryI d  =r.siteCategor  ,h.ms_prototype_i d  =r.prototypeI  ,h.site_instance_id_or_shop_i d  =h.ms_data_instance_i  d|  |h.ms_data_shop_i  ,h._atp_beacon_dat a  ={  ,h._atp_beacon_data_param s  =" "  }function a( )  {var  , n  =functio n )  {var   ;return document.querySelecto  r&  & e  =document.querySelector("meta[name=data-spm]")  ,g.each(  ,functio n( )  {"data-spm "== =f.tryToGetAttribute(  ,"name  )&  & e  =  )} ,  e , o  =n(  ;retur   o&  & e  =f.tryToGetAttribute(  ,"data-spm-protocol") , e  }function r( )  {va  e  =t.isonepag e|  |"-1 , n  =e.split("|" , o  =n[0 , a  =n[ ]  ?n[ ]  :"  ;t.isonepage_dat a =  {isonepag  :  ,urlpagenam :  a  ,t["aplus-pagename ] = a  }function i )  {va  t  =d.getMetaTags(  ;o(t  ,g.each(  ,functio n( )  {var  e  =f.tryToGetAttribute(  ,"name")  ;i f(/ ^aplu s/.test(  )&  &(h[ ]  =d.getMetaCnt(e ,  e== =v) )tr y { c  =h[ ]  =JSON.parse(d.getMetaCnt(e ) }catc h( ) {  }})  ,g.each(  ,functio n( )  {h[ ]  =d.getMetaCnt(  )}  ,h.spm_protoco l  =a(t ,  c&  & h  =g.assign(  ,c)  ;var   , , i  =["aplus-rate-ahot" , s  =i.lengt ;fo r e  =0 ; e  <  ;e++) n  =i[e  ,h[ ]  =parseFloat(h[n]  ;return r(h , b =  h|  |{ , h  }function s )  {retur   b|  |i )  }function u( )  {p.logger  {ms  :"please do not repeat setPriorityMetaInfo  " +  t )  }var  , l  =n(18 , p  =n(24 , g  =n(9 , f  =n(28 , d  =n(29 , _  =n(30 , h  ={ , m  =["ahot-aplus  ,"isonepage  ,"spm-id  ,"data-spm  ,"microscope-data" , v  ="aplus-x-settings , b  ={  ;e.setMetaInf o  =functio n(  , ) {i f  b|  | b  ={}  ,"object  "=  =typeo   c&  &c[t )return u(t  ,! ;i f  t== = ) {i f( )u(t ;else tr y { c  ="object  "=  =typeo  e ? e  :JSON.parse(e , b  =g.assign(  , ) }catc h( ) {consol  e&  &console.log( ) }retur n! 0  }return b[ ]  =  ,  0  ;va  y  =functio n( )  {retur   b|  | b  ={}  ,b[  ]|  |"  "  ;e.getMetaInf o  =  ,e.getInf o  =  ,e.qGe t  =  ,e.appendMetaInf o  =functio n(  , )  {va  n  =functio n(  , )  {goldlog.setMetaInfo(  , ,  {fro  :"appendMetaInfo  "  ) ;i f  t&  & )  {var  , a  =functio n( ) {tr y  {va  a  ="string  "=  =typeo  e  ?JSON.parse( )  :  ;n(  ,g.assign(  ,a ) }catc h( ) {  } , r  =functio n( ) {tr y  {va  a  ="string  "=  =typeo  e  ?JSON.parse( )  :  ;n(  ,o.concat(a ) }catc h( ) {  }} , i  =functio n( ) {retur n"EXPARAMS  "== = t  ?_.getExparamsInfos("  , ) : t  ?t.split("& )  :  ]} , s  =functio n( ) {tr y  {va  a  =i(o , r  =i(e  ;n(  ,a.concat(r).join("&" ) }catc h( ) {  }} , u  =functio n( )  {t.constructo  r== =Arra y  ?r( )  :a(  )} , c  =goldlog.getMetaInfo(t ;i f("aplus-exinfo  "== =  t&  &(s(c , o  =!0  , )i f("object  "=  =typeof  )u(c , o  =! ;else tr y  {va  l  =JSON.parse(c  ;"object  "=  =typeo   l&  &(u(l , o  =! ) }catc h( ) { }  o|  |n(  , ) } }} ,functio n(  , )  {"use strict  ;e.tryToGetAttribut e  =functio n(  , )  {retur   t&  &t.getAttribut e  ?t.getAttribute(  )|  |" "  :"  "  ;va  n  =functio n(  ,  , ) {i f  t&  &t.setAttribut )tr y  {t.setAttribute(  , ) }catc h( ) {  }  ;e.tryToSetAttribut e  =  ,e.tryToRemoveAttribut e  =functio n(  , ) {i f  t&  &t.removeAttribut )tr y  {t.removeAttribute( ) }catc h( )  {n(  ,  ," ) }  }} ,functio n(  ,  , )  {"use strict  ;function o( )  {retur  i =  i|  |document.getElementsByTagName("head")[0 ,  s&  & t ? s : i ? s  =i.getElementsByTagName("meta )  : ]  }function a(  , )  {var   ,  , , i  =o( , s  =i.lengt ;fo r n  =0 ; n  <  ;n++) a  =i[n  ,u.tryToGetAttribute(  ,"name  )== =  t&  & r  =u.tryToGetAttribute( ,  e|  |"content")  ;retur   r|  |" "  }function r( )  {va  e =  {isonepag  :"-1  ,urlpagenam  :"  " , n  =t.qGet( ;i f  n&  &n.hasOwnProperty("isonepage_data" )e.isonepag e  =n.isonepage_data.isonepag  ,e.urlpagenam e  =n.isonepage_data.urlpagenam ;els e  {va  o  =a("isonepage  )|  |"-1 , r  =o.split("|"  ;e.isonepag e  =r[0  ,e.urlpagenam e  =r[ ]  ?r[ ]  :" "  }retur  e  }var   , , u  =n(28  ;e.getMetaTag s  =  ,e.getMetaCn t  =  ,e.getOnePageInf o =  r} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(31 , r  =n(12  ;e.getExparamsInfo s  =functio n(  , )  {va  n  =[ , i =  t|  |["uidaplus  ,"pc_i  ,"pu_i" , s  =a.getExParams(  )|  |" ; s  =s.replace(/&aplus&  ,"&" ;fo r(va  u  =o.param2arr(  )|  |[ , c  =functio n( )  {return r.indexof(  , )  >-  1 , l  = ; l  <u.lengt  ;l++ )  {va  p  =u[l , g  =p[  ]|  |" , f  =p[  ]|  |" ;  g& &  f&  &("EXPARAMS  "== =  e|  |c(g) )&  &n.push g  +"= "  + )  }retur  n  }} ,functio n(  ,  , )  {"use strict  ;function o )  {retur   s|  | s  =g.getElementById("beacon-aplus  )|  |g.getElementById("tb-beacon-aplus") , s  }function a( )  {va  e  =o( , n  =p.tryToGetAttribute(  ,"cspx" ;  t& &  n&  &(t.nonc e  =n )  }function r(  ,  , )  {va  r  ="script , s  =g.createElement(r  ;s.typ e  ="text/javascript  ,s.asyn c  =!  ;va  c  =o( , l =  c&  &c.hasAttribute("crossorigin" ;  l&  &(s.crossOrigi n  ="anonymous"  ;va  p  ="https:  "== =location.protoco l  e| | t  : ;  0== =p.indexOf("//  )&  & p  =u.getProtocal )  +p  ,s.sr c  = ,  n&  &(s.i d  =n)  ,a(s  ;va  f  =g.getElementsByTagName(r)[0 ; i =  i|  |g.getElementsByTagName("head")[0 , f  ?f.parentNode.insertBefore(  , ) :  i&  &i.appendChild( )  }var   , , u  =n(22 , c  =n(9 , l  =n(24 , p  =n(28 , g  =documen  ;e.getCurrentNod e  =  ,e.addScrip t  =  ,e.loadScrip t  =functio n(  , )  {function n( )  {o.onreadystatechang e  =o.onloa d  =o.onerro r  =nul , o  =nul  ,e( )  }va  o  =g.createElement("script" ;i f i =  i|  |g.getElementsByTagName("head")[0  ,o.asyn c  =!  ,"onload  "in  )o.onloa d  = ;els e  {va  r  =functio n )  {/loaded|complete/.test(o.readyStat  )&  &n  )  ;o.onreadystatechang e  =  ,r )  }o.onerro r  =functio n( )  {n(  )}  ,o.sr c  =  ,a(o  ,i.appendChild(  )}  ,e.isTouc h  =functio n ) {retur n"ontouchend  "in document.createElement("div  )  ;va  f  =functio n )  {va  t  =goldlo g&  &goldlog._ $  ?goldlog._   : {} , e  =t.meta_inf  o|  |{  ;return e["aplus-exparams  ]|  |"  "  ;e.getExParamsFromMet a  =  ,e.getExParam s  =functio n( )  {va  e  =o( , n  =p.tryToGetAttribute(  ,"exparams" , a  =d(  ,f(  ,  )|  |"  ;retur   a&  &a.replace(/&amp;/  ,"&").replace(/\buser(i|I)d=  ,"uidaplus=  )  ;va  d  =functio n(  ,  , )  {va  o  ="aplus&sidx=aplusSidex , a =  t|  | ;tr y {i f( )  {va  r  =n.param2obj(e , i  =["aplus  ,"cna  ,"spm-cnt  ,"spm-url  ,"spm-pre  ,"logtype  ,"pre  ,"uidaplus  ,"asid  ,"sidx  ,"trid  ,"gokey"  ;c.each(  ,functio n( )  {r.hasOwnProperty(  )&  &(l.logger  {ms  :"Can not inject keywords:  " +  t}  ,delete r[t  )}  ,delete r[""  ;va  s  =" ;i f( )  {va  u  =t.match(/aplus&/).inde , p = u > 0  ?n.param2obj(t.substring(  ,u )  :{  ;delete p["" , s  =n.obj2param(c.assign(  ,r )  +"& "  +t.substring(  ,t.lengt ) }els  s  =n.obj2param( )  +"& "  +  ;retur  s  }retur  a }catc h( )  {retur  a  }  ;e.mergeExparam s =  d} ,functio n(  ,  , )  {"use strict  ;va  o  =n(33 , a  =n(3 , r  =n(11 , i  =n(31 , s  =n(19 , u  =n(34 , c  =n(35 , l  =n(26 , p  =n(4  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s  =  ;va  e  =this.options.context.eta g|  |{  ;this.cn a  =e.cn  a|  |r.getCookie("cna"  ,this.setTag(0  ,this.setStag(-1  ,this.setLsTag("-1"  ,this.setEtag(this.cn  a|  |""  ,this.requestin g  =!  ,this.toda y  =u.getFormatDate  )}  ,setLsTa :functio n( )  {this.lsta g  =  ,this.options.context.etag.lsta g =  t}  ,setTa :functio n( )  {this.ta g  =  ,this.options.context.etag.ta g =  t}  ,setSta :functio n( )  {this.sta g  =  ,this.options.context.etag.sta g =  t}  ,setEta :functio n( ) {  t&  &(this.eta g  =  ,this.options.context.etag.cn a  =  ,r.getCookie("cna  )!= =  t&  &(o.publishCNA(t  ,r.setCookie("cna  , ,  {SameSit  :"none  "}))  )}  ,setLscnaStatu :functio n( )  {this.options.context.etag.lscnastatu s =  t}  ,ru :functio n(  , )  {va  n  =thi ;i f(n.cn )return void n.setTag(1  ;va  o  =nul , r  =c.getUrl(this.options.context.eta  g|  |{}  ;n.requestin g  =!  ;va  u  =functio n )  {setTimeout(functio n )  {e  )  ,20  ,clearTimeout(  )  ;return i.loadScript(  ,functio n( )  {var   ,o  ;i f t& &"error "== =t.typ e  ?(n.setStag(-3  ,a.do_tracker_jserror  {messag  :"loadError  ,erro  :"  ,filenam  :"etag_ls  "} )  : e  =l.getGoldlogVal("Etag" , o  =l.getGoldlogVal("stag"  ,"undefined "!  =typeo   o&  &n.setStag(o)  ,!n.requestin )return void n.setEtag(e ;i f  2== =  o| |  4== = )  {va  r  =s.getLsCna(p.LS_CNA_KEY ; r  ?(n.setLsTag(1  ,n.setEtag(r )  :(n.setLsTag(0  ,s.setLsCna(p.LS_CNA_KE  ,n.toda  ,e  ,n.setEtag(e ) }else n.setEtag(e  ;u  )}) , o  =setTimeout(functio n )  {n.requestin g =!  ,n.setStag(-2  ,e  )  ,1500  ,2e 3 } } }} ,functio n(  , )  {"use strict  ;va  n  ="function , o  =functio n )  {va  t  =window.goldlo g|  |{ , e  =t.aplus_pubsu  b|  |{ , o  =typeof e.publis  h== =  ;retur  o ? e  :"  " , a  =functio n( )  {va  e  =o( ;  e&  &typeof e.publis  h== =  n&  &e.publish.apply(  ,  )  ;e.doPubMs g  =  ;va  r  =functio n( )  {va  e  =o( ;  e&  &typeof e.cachePub  s== =  n&  &e.cachePubs.apply(  ,  )  ;e.doCachePub s  =  ,e.doSubMs g  =functio n(  , )  {va  a  =o( ;  a&  &typeof a.subscrib  e== =  n&  &a.subscribe(  ,  )}  ,e.doSubOnceMs g  =functio n(  , )  {va  a  =o( ;  a&  &typeof a.subscribeOnc  e== =  n&  &a.subscribeOnce(  ,  )}  ,e.publishCN A  =functio n( ) {i f( )  {va  e  =["CNA ,  {valu :  t}  ;a(e  ,r( ) }  }} ,functio n(  , )  {"use strict  ;function n(  ,  , )  {va  o  =" "  +Math.abs(t , a = e  -o.lengt , r =  t> = ;retur n r ? n  ?"+ "  :" "  :"- )  +Math.pow(1  ,Math.max(  ,a)).toString().substr( ) + o  }e.getFormatDat e  =functio n( )  {va  e  =new Dat ;tr y {retur n[e.getFullYear(  ,n(e.getMonth )  +  ,  ,0  ,n(e.getDate(  ,  ,0)].join  t|  |" ) }catc h( ) {retur n" " }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(19  ;e.getUr l  =functio n( )  {va  e  =(new Date).getTime( , n  =o.getUrl  t&  &t.egUr l  ?t.egUr l  :"gj.mmstat.com/eg.js" , a  =n.match(/[\w+\.]+[a-z|A-Z|0-9]+\/(eg|ge).js/  ;retur   0!= =n.indexOf("http  )& &  a&  &a.lengt h >  0&  & n  ="// "  +a[0] , n  +"?t= " + e  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(19 , a  =n(31 , r  =n(35 , i  =n(4 , s  =n(34 , u  =n(21  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s  =  ,this.toda y  =s.getFormatDate  )}  ,ru :functio n )  {va  t  =thi ;i f(u.test( )  {va  e  =o.getLsCna(i.LS_CNA_KE  ,t.today ;  e|  |setTimeout(functio n )  {var  e  =r.getUrl(t.options.context.eta  g|  |{})  ;a.loadScript(  ,functio n( ) { e&  &"error  "!= =e.typ  e&  &o.setLsCna(i.LS_CNA_KE  ,t.toda  ,goldlog.Eta )  )}  ,1e3 ) } } } }} ,functio n(  ,  , )  {"use strict  ;e.plugins_p v  =  {nam  :"etag  ,enabl  :!  ,pat  :n(3  ) ,  {nam  :"when_to_sendpv  ,enabl  :!  ,pat  :n(3  ) ,  {nam  :"where_to_sendlog_ut  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"is_single  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"what_to_pvhash  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"what_to_sendpv  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"what_to_sendpv_userdata  ,enabl  :!  ,pat  :n(48  ,dep  :["what_to_sendpv  ] ,  {nam  :"what_to_sendpv_etag  ,enabl  :!  ,pat  :n(53  ,dep  :["etag  ,"what_to_sendpv  ] ,  {nam  :"what_to_sendpv_ut2  ,enabl  :!  ,pat  :n(54  ,dep  :["where_to_sendlog_ut  ] ,  {nam  :"what_to_sendpv_ut  ,enabl  :!  ,pat  :n(56  ,dep  :["where_to_sendlog_ut  ] ,  {nam  :"what_to_pv_slog  ,enabl  :!  ,pat  :n(57  ,dep  :["what_to_sendpv  ,"what_to_sendpv_ut2  ,"what_to_sendpv_ut  ] ,  {nam  :"can_to_sendpv  ,enabl  :!  ,pat  :n(5  ) ,  {nam  :"where_to_sendpv  ,enabl  :!  ,pat  :n(17  ,dep  :["is_single  ] ,  {nam  :"do_sendpv_ut2  ,enabl  :!  ,pat  :n(59  ,dep  :["what_to_sendpv_ut2  ,"where_to_sendlog_ut  ] ,  {nam  :"do_sendpv_ut  ,enabl  :!  ,pat  :n(60  ,dep  :["what_to_sendpv_ut  ,"where_to_sendlog_ut  ,"do_sendpv_ut2  ] ,  {nam  :"do_sendpv  ,enabl  :!  ,pat  :n(61  ,dep  :["is_single  ,"what_to_sendpv  ,"where_to_sendpv  ,"do_sendpv_ut  ] ,  {nam  :"after_pv  ,enabl  :!  ,pat  :n(6  )  ]} ,functio n(  ,  , )  {"use strict  ;va  o  =n(33  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =thi  ;o.doSubOnceMsg("aplusInitContext  ,functio n( )  {e.eta g&  &(t.options.context.eta g  =e.eta  )} ) } } }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26 , a  =n(23 , r  =n(27  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getMetaInf :functio n )  {va  t  =o.getGoldlogVal("_$  )|  |{ , e  =t.meta_inf o|  |r.getInfo(  ;retur   e}  ,getAplusWaitin :functio n )  {va  t  =this.getMetaInfo  )|  |{  ;return t["aplus-waiting  ]}  ,ru :functio n(  , )  {va  n  =this.options.confi g|  |{ , o  =this.getAplusWaiting( ;i f  o&  &n.is_aut )switc h o  =this.getAplusWaiting )  +"  ,this.options.context.when_to_sendp v =  {aplusWaitin :  o  , ) {cas e"MAN" :retur n"done ;cas e"1"  :return this.options.context.when_to_sendpv.isWai t  =!  ,a.sleep(6e  ,functio n )  {e  )}  ,6e ;default  :va  r = 1  * ;i f r  +" "! ="NaN )return this.options.context.when_to_sendpv.isWai t  =!  ,a.sleep(  ,functio n )  {e  )} , r } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(41  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getAplusToU :functio n( ) {retur n  {toUT  :o.getAplusToUT("toUT2  ,t  ,toUT  :o.getAplusToUT("toUT  , )  }}  ,ru :functio n ) {i f("Umeng4Aplus  "== =goldlog.aplusBridgeNam )this.options.context.where_to_sendlog_ut.toUTNam e  ="toUT2 ;els e  {va  t  =this.getAplusToUT(this.options.config.recordType  ;this.options.context.where_to_sendlog_ut.aplusToU T = t } } }  }} ,functio n(  , )  {"use strict  ;va  n  =navigator.userAgen , o  =/WindVane/i.test(n  ;e.is_WindVan e  =  ;va  a  =functio n )  {va  t  =goldlog.getMetaInfo("aplus_chnl" ;retur n!(  t|  |!t.isAvailabl  e|  |"function "! =typeof t.toUT  2&  &"function "! =typeof t.toU  )& &  t  ;e.isAplusChn l  =  ,e.getAplusToU T  =functio n(  , )  {va  n  ={ , r  =a( ;i f("object  "=  =typeof  )n.bridgeNam e  =r.bridgeNam  e|  |"customBridge  ,n.bridgeVersio n  =r.bridgeVersio  n|  |r.versio  n|  |"  ,n.isAvailabl e  =r.isAvailabl  ,n.toUT 2  =r.toUT  2|  |r.toU ;els e  {va  i  =window.WindVan e|  |{ ;i f  o& &  i&  &i.isAvailabl  e&  &"function "= =typeof i.cal )  {va  s =  t|  |"toUT , u  =goldlog.getMetaInfo("aplus-toUT )  +"  ;"toUT2HC  "== =  u&  &"PV  "== =  e&  & s  =u , n =  {bridgeNam  :"WindVane  ,bridgeVersio  :i.versio n|  |"  ,isAvailable  :!  ,toUT2 :functio n(  ,  ,  , )  {return i.call("WVTBUserTrack  ,  ,  ,  ,  , ) } } }  }retur  n }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26 , a  =n(4  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,isSingle_p :functio n )  {va  t  =o.getGoldlogVal("_$  )|  |{ ;retur n!("1  "== =t.meta_info["aplus-both-request"  )}  ,isSingle_hjl :functio n( )  {va  e  =o.getGoldlogVal("_$  )|  |{ ;retur n!("1  "== =e.meta_info["aplus-both-request"  )& &  t&  &t.logke  y&  &t.gmke  y}  ,isSingle_uhjl :functio n( )  {va  e  =o.getGoldlogVal("_$  )|  |{ ;retur n(  t|  |!/^\/aplus\.99\.(\d)+$/.test(t.logkey  )&  &(!("1  "== =e.meta_info["aplus-both-request"] )& &  t&  &t.logkey  )}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =this.options.confi  g|  |{ , n  =t.where_to_sendlog_ut.aplusToU  T|  |{ , o  =n.toU  T|  |{ , r  =n.toUT  2|  |{ , i  =!(!o.isAvailabl  e&  &!r.isAvailable) , s  =t.userdat  a|  |{ , u  =!!t.is_singl ;switc h(e.recordTyp ) {case a.recordTypes.uhjlj : u  =this.isSingle_uhjlj(s  ;brea ;case a.recordTypes.hjlj : u  =this.isSingle_hjlj(s  ;brea ;case a.recordTypes.pv : u  =this.isSingle_pv(  ;brea ;default : u  =this.isSingle_pv  ) }this.options.context.is_singl e =  i&  &  ,this.options.context.ut_is_availabl e = i } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =this.options.context.what_to_pvhas h|  |{ , e  =o.getGoldlogVal("_$  )|  |{ , n  =e.meta_inf  o|  |{ , a  =n["aplus-pvhash  ]|  |" , r  =[  ;"1  "== =  a&  & r  =["_aqx_uri  ,encodeURIComponent(location.href)]  ,t.has h  =  ,this.options.context.what_to_pvhas h = t } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(9 , r  =n(31 , i  =n(26 , s  =n(28 , u  =n(11 , c  =n(45 , l  =n(46 , p  =n(47  ;t.export s  =functio n )  {return a.assign( ,  {ini  :functio n( )  {this.option s  =  ,this.cookie_dat  a|  |(this.cookie_dat a  =u.getData()  ,this.client_inf  o|  |(this.client_inf o  =i.getClientInfo  )|  |{}  ;va  e  =location.has ;  e& &  0== =e.indexOf("#  )&  & e  =e.substr(1)  ,this.loc_has h =  e}  ,getExParam :functio n )  {va  t  =windo , e  =documen , n  =[ , u  =paren t!= =t.sel , l  =e.getElementById("beacon-aplus  )|  |e.getElementById("tb-beacon-aplus" , p  =s.tryToGetAttribute(  ,"exparams" , g  =r.mergeExparams(  ,r.getExParamsFromMeta(  ,  )|  |" ; g  =g.replace(/&amp;/  ,"&"  ;var   , , _  =["taobao.com  ,"tmall.com  ,"etao.com  ,"hitao.com  ,"taohua.com  ,"juhuasuan.com  ,"alimama.com" , h  =i.getGoldlogVal("_$  )|  |{ , m  =h.meta_inf o|  |{ ;i f  u&  &!m["aplus-ifr-pv" ) {fo r d  =_.lengt , f  =0 ; f  <  ;f++)i f(o.isContain(location.hostnam  ,_[f] )return n.push([o.mkPlainKeyForExparams(  ,g]  , ; g  =g.replace(/\buser(i|I)d=\w*&?  ," ) } g  =g.replace(/\buser(i|I)d=  ,"uidaplus=" ,  g&  &n.push([o.mkPlainKeyForExparams(  ,g]  ;va  v  =a.makeCacheNum(  ;return c.updateKey(  ,"cache  ,v ,  n}  ,getExtr :functio n )  {va  t  =[ , e  =i.getGoldlogVal("_$  )|  |{ , n  =e.meta_inf o|  |{ , a  =this.cookie_dat  a|  |{ , r  =this.getClientInfo(!  )|  |[  ;return o.ifAdd(  ,r  ,o.ifAdd(  ,[["thw  ,a.thw  ,["bucket_id  ,l.getBucketId(n)  ,["urlokey  ,this.loc_hash  ,["wm_instanceid  ,n.ms_data_instance_id]] , t  }} ) }} ,functio n(  , )  {"use strict  ;function n(  ,  , )  {r(  ,"spm-cnt  ,functio n( )  {var  o  =t.split(".")  ;return o[ ]  =goldlog.spm_ab[0  ,o[ ]  =goldlog.spm_ab[1 ,  ?o[ ]  =o[1].split("/")[ ]  +"/ " + e  :o[ ]  =o[1].split("/")[0 , n&  &(o[ ]  =n  ,o.join(". )} )  }function o(  , )  {va  n  =window.g_SP M&  &g_SPM._current_sp ;  n&  &r(  ,"spm-url  ,functio n )  {retur n[n.  ,n.  ,n.  ,n.d].join(". )  + e  ?". " + e  :"  )  ,"spm-cnt )  }function a(  , )  {var   ,  , , r  =- ;fo r n  = , o  =t.length ; n  <  ;n++)i f a  =t[n  ,a[  ]== = ) { r  = ;brea k }  r> =  0&  &t.splice(  , )  }function r(  ,  ,  , )  {var   , , i  =t.lengt , s  =- , u  ="function  "=  =typeof  ;fo r a  =0 ; a  <  ;a++ ) {i f r  =t[a  ,r[  ]== = )return voi d u  ?r[ ]  =n(r[1 )  :r[ ]  =n ;  o&  &r[  ]== =  o&  & s  = ) }  o&  &  u&  & n  =n() , s  >- 1  ?t.splice(  ,  ,[  ,n )  :t.push([  ,n] )  }t.export s =  {updateSPMCn  :  ,updateSPMUr  :  ,updateKe  :  ,removeKe : a }} ,functio n(  ,  , )  {"use strict  ;function o(  , )  {var  , o  =214627121 ;fo r n  =0 ; n  <t.lengt  ;n++) o  =  o<  < ) + o  +t.charCodeAt(n ;retur n(6553 5  & ) % e  }function a( )  {var  , n  =r.getCookie("t" ;retur n"3 "!  =t.ms_prototype_i  d&  &"5 "! =t.ms_prototype_i  d|  | e = n  ?o(  ,2 )  :"" , e  }va  r  =n(11  ;e.getBucketI d =  a} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(9 , r  =n(26 , i  =n(41 , s  =n(11 , u  =n(4  ;t.export s =  {ini  :functio n( )  {this.option s  =  ,this.cookie_dat  a|  |(this.cookie_dat a  =s.getData()  )  ,getBasicParam  :functio n )  {va  t  =documen , e  =r.getGoldlogVal("_$  )|  |{ , n  =e.sp m|  |{ , a  =e.meta_inf  o|  |{ , i  =a["aplus-ifr-pv ]  +" "= ="1 , u  =o.is_in_ifram  e&  & i ? 0  : , c  =this.options.confi  g|  |{ , l  =t.titl  ;c.titl  e&  &  l+ ="_ "  +c.title  ;va  p  =[["logtype  ,u  ,["title  ,l  ,["pre  ,e.page_referre  r|  |""  ,["scr  ,screen.widt h  +"x "  +screen.height] ;tr y  {va  g  =location.href.substring(  ,1200 ;  g&  &p.push(["_p_url  ,a["aplus-p-url  ]|  |g ) }catc h( ) {  }va  f  =this.cookie_dat a|  |{ , d  =this.options.contex  t|  |{ , _  =d.eta  g|  |{ , h  =_.cn  a|  |f.cn  a|  |s.getCookie("cna" ;  h&  &p.push([o.mkPlainKey(  ,"cna= "  +h]  ,f.tracknic  k&  &p.push([o.mkPlainKey(  ,"nick= "  +f.tracknick]  ;va  m  =n.spm_ur l|  |"  ;return o.ifAdd(  ,[["wm_pageid  ,a.ms_data_page_id  ,["wm_prototypeid  ,a.ms_prototype_id  ,["wm_sid  ,a.ms_data_shop_id  ,["spm-url  ,m  ,["spm-pre  ,n.spm_pre  ,["spm-cnt  ,n.spm_cnt  ,["cnaui  ,f.cnaui]] ,  p  ,getExParam  :functio n ) {retur n  ]  ,getExtr  :functio n ) {retur n  ]  ,getClientInf  :functio n( )  {va  e  =[ , n  =r.getGoldlogVal("_$  )|  |{ , s  =this.client_inf o|  |{ , c  =s.ua_inf  o|  |{ ;i f  t|  |!i.is_WindVan  e&  &!i.isAplusChnl( ) {fo r(var  , p  =[ , g  =["p  ,"o  ,"b  ,"s  ,"w  ,"wx  ,"ism" , f  = ; l  =g[f++]; )c[  ]&  &p.push([  ,c[l]]  ;o.ifAdd(  , )  }o.ifAdd(  ,[["cache  ,a.makeCacheNum()  ,["lver  ,goldlog.lve  r|  |u.lver  ,["jsver  ,n.script_nam  e|  |u.script_name  ,["pver  ,goldlog.aplus_cplugin_ver]]  ;va  d  =this.options.confi g|  |{ , _  =d.is_aut  ;retur   _|  |o.ifAdd(  ,[["mansndlog  ,1]] ,  e  ,processLodashDolla  :functio n )  {va  t  =r.getGoldlogVal("_$  )|  |{  ;t.page_ur  l!= =location.hre  f&  &(t.page_referre r  =t.page_ur  ,t.page_ur l  =location.href)  ,r.setGoldlogVal("_$  ,  )  ,getLsParam  :functio n )  {va  t  =r.getGoldlogVal("_$  )|  |{ , e  =[  ;return t.lsparam  s&  &t.lsparams.spm_i  d&  &(e.push(["lsparams  ,t.lsparams.spm_id]  ,e.push(["lsparams_pre  ,t.lsparams.current_url]) ,  e  ,ru  :functio n )  {va  t  =this.getBasicParams  )|  |[ , e  =this.getExParams  )|  |[ , n  =this.getExtra  )|  |[  ;this.processLodashDollar(  ;va  o  =this.getLsParams  )|  |[ , a  =[].concat(  ,  ,  ,o  ;this.options.context.what_to_sendpv.pvdat a  =  ,this.options.context.what_to_sendpv.exparam s = e }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(26 , r  =n(45 , i  =n(11 , s  =n(49  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getPageI :functio n )  {va  t  =this.options.confi g|  |{ , e  =this.options.contex  t|  |{ , n  =e.userdat  a|  |{  ;return t.page_i  d|  |t.pagei  d|  |t.pageI  d|  |n.page_i  d}  ,getPageInf :functio n )  {var  ;tr y  {va  e  =top.locatio n!= =self.locatio ;  e&  &voi   0!= =window.innerWidt  h&  & t =  {widt  :window.innerWidt  ,heigh  :window.innerHeigh  t ) }catc h( ) {  }retur   t}  ,getUserdat :functio n )  {va  t  =a.getGoldlogVal("_$  )|  |{ , e  =t.sp m|  |{ , n  =this.options.contex  t|  |{ , r  =n.userdat  a|  |{ , u  =this.options.confi  g|  |{ , c  =[ ;i f  u&  &!u.is_aut )  {u.goke  y&  &c.push([o.mkPlainKey(  ,u.gokey]  ;va  l  =e.data. ;i f( )  {va  p  =this.getPageId( ; l = p  ?l.split("/")[ ]  +"/ " + p  :l.split("/")[0  ,s.setB(l  ;va  g  =e.spm_cnt.split("." ;  g&  &g.lengt h >  2&  &(g[ ]  =  ,e.spm_cn t  =g.join(".") ) }  }va  f  =functio n( ) {i f("object  "=  =typeof  )fo r(var e in t  )"object "!  =typeof t[  ]&  &"function "! =typeof t[  ]&  &c.push([  ,t[e]  )  ;f(goldlog.getMetaInfo("aplus-cpvdata")  ,f(r  ;va  d  =i.getCookie("workno  )|  |i.getCookie("emplId" ;  d&  &c.push(["workno  ,d]  ;va  _  =i.getHng( ;  _&  &c.push(["_hng  ,i.getHng()]  ;va  h  =this.getPageInfo(  ;retur   h&  &(c.push(["_pw  ,h.width]  ,c.push(["_ph  ,h.height]) ,  c}  ,processLodashDolla :functio n )  {va  t  =this.options.confi g|  |{ , e  =a.getGoldlogVal("_$  )|  |{ ;  t&  &t.referre  r&  &(e.page_referre r  =t.referrer)  ,a.setGoldlogVal("_$  ,  )}  ,updatePr :functio n( )  {va  e  =a.getGoldlogVal("_$  )|  |{  ;return e.page_referre  r&  &r.updateKey(  ,"pre  ,e.page_referrer ,  t}  ,ru :functio n )  {va  t  =this.options.context.what_to_sendpv.pvdat , e  =this.getUserdata(  ;this.processLodashDollar(  ;va  n  = , o  =this.options.context.what_to_pvhash.has ;  o&  &o.lengt h >  0&  &n.push(o , n  =n.concat(e , n  =this.updatePre(n  ;va  a  =this.getPageId( ;  a&  &r.updateSPMCnt(  ,a  ,this.options.context.what_to_sendpv.pvdat a  =  ,this.options.context.userdat a = e } }  }} ,functio n(  ,  , )  {"use strict  ;function o ) {i f(!s.data  a|  |!s.data. )  {va  t  =r._SPM_ , e  =r._SPM_ ;i f  t&  & )retur  t  =t.replace(/^{(\w+\/)}$/  ,"$1" , e  =e.replace(/^{(\w+\/)}$/  ,"$1"  ,s.is_wh_in_pag e  =!  ,void c.setAB(  ,e  ;va  n  =goldlog._$.meta_inf ; t  =n["data-spm  ]|  |n["spm-id  ]|  |"0  ;va  o  =t.split("."  ;o.lengt h >  1&  & t  =o[0 , e  =o[1]  ,c.setA(t ,  e&  &c.setB(e  ;va  a  =i.getElementsByTagName("body" ; a =  a&  &a.lengt h  ?a[ ]  :nul ,  a&  & e  =l.tryToGetAttribute(  ,"data-spm" , e  ?c.setB( ) :  1== =o.lengt  h&  &c.setAB("0  ,"0") ) }  }function a )  {va  t  =s.data. , e  =s.data. ;  t& &  e&  &(goldlog.spm_a b  =[  ,e] )  }va  r  =windo , i  =documen , s  ={ , u  ={  ;s.dat a  =  ;va  c  ={ , l  =n(28 , p  =n(50 , g  =location.hre , f  =n(51).getRefer( , d  =n(4  ;c.set A  =functio n( )  {s.data a  =  ,a  )}  ,c.set B  =functio n( )  {s.data b  =  ,a  )}  ,c.setA B  =functio n(  , )  {s.data a  =  ,s.data b  =  ,a  )  ;va  _  =p.getSPMFromUr , h  =functio n )  {va  t  =d.utilPvid.makePVId(  ;return d.mustSpm E ?  t|  |goldlog.pvi  d|  |" " :  t|  |"  " , m  =functio n(  , )  {va  n  =t.goldlo g|  |window.goldlo  g|  |{ , a  =n.meta_inf  o|  |{  ;s.meta_protoco l  =a.spm_protoco  ;var  , i  =n.spm_a b|  |[ , u  =i[  ]|  |"0 , c  =i[  ]|  |"0  ;"0  "== =  u&  &"0  "== =  c&  &(o( , u  =s.data  a|  |"0 , c  =s.data  b|  |"0" , r  =[s.data.  ,s.data.b].join("."  ,s.spm_cn t  =  r|  |"0.0 )  +".0.0  ;va  l  =t.send_pv_coun t > 0  ?h )  :n.pvi ;  l&  &(s.spm_cn  t+ =". "  +l)  ,n._$.sp m  =  ,"function  "=  =typeo   e&  &e(  )  ;c.spaIni t  =functio n(  ,  ,  , )  {va  a  ="function  "=  =typeo  o ? o  :functio n )  { , r  =s.spm_ur , i  =window.g_SP  M|  |{ , u  =t._  $|  |{ , c  =u.send_pv_coun  ;m  {goldlo  :  ,meta_inf  :  ,send_pv_coun :  c  ,functio n( )  {s.spm_cn t =s.data a  +". "  +s.data b  +".0.0 "  + t  ?". " + t  :"")  ;var  o  =e["aplus-spm-fixed"]  ;i f("1 "!= = )  {s.spm_pr e  =_(f  ,s.origin_spm_pr e  =s.spm_pr  ,s.spm_ur l  =_(location.href  ,s.origin_spm_ur l  =s.spm_ur  ;va  u  =i._current_sp m|  |{ ;  u&  &u  a&  &"0  "!= =u  a&  &u  b&  &"0  "!= =u b  ?(s.spm_ur l  =[u.  ,u.  ,u.  ,u.  ,u.e].join("."  ,s.spm_pr e  =r ) : c >  0& &  n&  &"0  "!= =n[  ]&  &"0  "!= =n[  ]&  &(s.spm_ur l  =n.concat(["0  ,"0"]).join("."  ,s.spm_pr e  =r)  ,i._current_sp m  = }  }a  )}  )}  ,c.ini t  =functio n(  ,  , )  {s.spm_ur l  =_(g  ,s.spm_pr e  =_(f  ,m  {goldlo  :  ,meta_inf :  e  ,functio n )  {"function "=  =typeo   n&  &n  )  )}  ,c.resetSpmCntPvi d  =functio n )  {va  t  =goldlog.spm_a ;i f  t& &  2== =t.lengt )  {va  e  =t.join(". )  +".0.0 , n  =h( ;  n&  & e = e  +". "  +n  ,s.spm_cn t  =  ,s.spm_ur l  =  ,goldlog._$.sp m = s  }}  ,t.export s = c} ,functio n(  , )  {"use strict  ;function n(  , ) {i f(  t|  |! )retur n"  ;var  , o  =" ;tr y  {va  a  =new RegExp("[?|&]+ " + t  +"=([^&|#|?|/]+)" ;i f("spm  "== =  t|  |"scm  "== = )  {va  r  =new RegExp("\\?.* " + t  +"=([\\w\\.\\-\\*/]+)" , i  =e.match(a , s  =e.match(r , u =  i& &  2== =i.lengt h ?i[1 ]  :" , c =  s& &  2== =s.lengt h  ?s[ ]  :" ; o = u > c ? u  : , o  =decodeURIComponent( ) }els  n  =e.match(a , o =  n& &  2== =n.lengt h  ?n[ ]  :" " }catc h( ) { }finall y  {retur  o }  }e.getParamFromUr l  =  ,e.getSPMFromUr l  =functio n( )  {return n("spm  , )  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(52).nameStorag , a  =n(5  ;e.getRefe r  =functio n )  {va  t  =a.KE Y|  |{ , e  =t.NAME_STORAG  E|  |{  ;return document.referre  r|  |o.getItem(e.REFERRE  )|  |" "  }} ,functio n(  , )  {"use strict  ;va  n  =functio n )  {function t )  {var  , e  =[ , r  =! ;fo r(var l in p  )p.hasOwnProperty(  )&  & r  =! , t  =p[  ]|  |"  ,e.push(c( ) + s  +c(t))  ;n.nam e = r ? o : a  +c( ) + i  +e.join( )  }function e(  ,  , ) {  t&  &(t.addEventListene r  ?t.addEventListener(  ,  ,! )  :t.attachEven  t&  &t.attachEvent("on "  +  ,functio n( )  {n.call(  ,  )}) )  }va  n  =windo ;i f(n.nameStorag )return n.nameStorag  ;var  , a  ="nameStorage: , r  =/^([^=]+)(?:=(.*))?$ , i  ="? , s  ="= , u  ="& , c  =encodeURIComponen , l  =decodeURIComponen , p  ={ , g  ={  ;return functio n( ) {i f  t& &  0== =t.indexOf(a )  {va  e  =t.split(/[:?]/  ;e.shift( , o  =l(e.shift(  )|  |" ;fo r(var   ,  , , c  =e.join("" , g  =c.split(u , f  = , d  =g.lengt ; f  <  ;f++) n  =g[f].match(r ,  n&  &n[  ]&  & i  =l(n[1] , s  =l(n[2  )|  |"  ,p[ ]  = ) }els  o =  t|  |"  " }(n.name  ,g.setIte m  =functio n(  , ) {  e&  &"undefined "! =typeo   n&  &(p[ ]  =String(n  ,t(  )}  ,g.getIte m  =functio n( )  {return p.hasOwnProperty( )  ?p[ ]  :nul  l}  ,g.removeIte m  =functio n( )  {p.hasOwnProperty(  )&  &(p[ ]  =nul  ,delete p[e  ,t(  )}  ,g.clea r  =functio n ) { p  ={  ,t  )}  ,g.valueO f  =functio n )  {retur   p}  ,g.toStrin g  =functio n )  {va  t  =n.nam  ;retur   0== =t.indexOf( ) ? t : a +  t}  ,e(  ,"beforeunload  ,functio n )  {t  )} ,  g}(  ;e.nameStorag e =  n} ,functio n(  ,  , )  {"use strict  ;va  o  =n(45  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,updateBasicParam :functio n )  {va  t  =this.options.context.what_to_sendpv.pvdat a|  |[ , e  =this.options.context.eta  g|  |{  ;return e.cn  a&  &(o.updateKey(  ,"cna  ,e.cna  ,this.options.context.what_to_sendpv.pvdat a  =t) ,  t}  ,addTagParam :functio n )  {va  t  =this.options.context.what_to_sendpv.pvdat a|  |[ , e  =this.options.context.eta  g|  |{ , n  =[  ;(e.ta  g| |  0== =e.tag )&  &n.push(["tag  ,e.tag]  ,(e.sta  g| |  0== =e.stag )&  &n.push(["stag  ,e.stag]  ,(e.lsta  g| |  0== =e.lstag )&  &n.push(["lstag  ,e.lstag]  ,n.lengt h >  0&  &(this.options.context.what_to_sendpv.pvdat a  =t.concat(n)  )}  ,ru :functio n )  {this.updateBasicParams(  ,this.addTagParams ) } }  }} ,functio n(  ,  , )  {"use strict  ;function o( )  {var   ,  ,  , , r  =[ , s  ={ ;fo r e  =t.lengt h  -1 ;  e> =  ;e--) n  =t[e , o  =n[0 ,  o&  &o.indexOf(i.s_plain_ob )= =-  1&  &s.hasOwnProperty(  )|  | a  =n[1  ,("aplus  "= =  o|  |  )&  &(r.unshift([  ,a]  ,s[ ]  =1)  ;retur  r  }function a( )  {var   ,  ,  , , r  =[ , u =  {logtyp  :!  ,cach  :!  ,sc  :!  ,"spm-cnt  :  0 ;fo r e  =t.lengt h  -1 ;  e> =  ;e--)i f n  =t[e , o  =n[0 , a  =n[1  ,!(s.isStartWith(  ,i.s_plain_ob  )&  &!s.isStartWith(  ,i.mkPlainKeyForExparams(  )|  |u[o] )i f(s.isStartWith(  ,i.mkPlainKeyForExparams() )  {va  c  =i.param2arr(a ;i f("object  "=  =typeo   c&  &c.lengt h  > )fo r(va  l  =c.lengt h - ;  l> =  ;l-- )  {va  p  =c[l ;  p&  &p[  ]&  &r.unshift([p[0  ,p[1] ) } }else r.unshift([  ,a]  ;retur  r  }function r )  {va  t =  {isonepag  :"-1  ,urlpagenam  :"  " , e  =g.qGet( ;i f  e&  &e.hasOwnProperty("isonepage_data" )t.isonepag e  =e.isonepage_data.isonepag  ,t.urlpagenam e  =e.isonepage_data.urlpagenam ;els e  {va  n  =c.getMetaCnt("isonepage  )|  |"-1 , o  =n.split("|"  ;t.isonepag e  =o[0  ,t.urlpagenam e  =o[ ]  ?o[ ]  :" "  }retur  t  }va  i  =n(18 , s  =n(9 , u  =n(26 , c  =n(29 , l  =n(50 , p  =n(55 , g  =n(27 , f  =n(4 , d  =n(11  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,keyIsAvailabl :functio n( )  {va  e  =["functype  ,"funcId  ,"spm-cnt  ,"spm-url  ,"spm-pre  ,"_ish5  ,"_is_g2u  ,"_h5url  ,"cna  ,"isonepage  ,"lver  ,"jsver"  ;return i.indexof(  ,  )== =-  1}  ,valIsAvailabl :functio n( ) {retur n"object "!  =typeo   t&  &"function "! =typeo   t}  ,upUtDat :functio n(  , )  {va  n  =thi ;i f t = t ? t  :{ ,  e&  &"object "= =typeof  )fo r(var o in e )  {va  a  =e[o ;  o&  &n.valIsAvailable(  )&  &n.keyIsAvailable(  )&  &(t[ ]  = )  }retur   t}  ,getToUtDat :functio n( )  {va  e  =u.getGoldlogVal("_$  )|  |{ , n  =e.sp m|  |{ , s  =this.options.contex  t|  |{ , c  =!!s.is_singl , p  =s.what_to_sendp  v|  |{ , g  =a(o(p.exparam  s|  |[]) ; g  =i.arr2obj(g  ;va  _  =i.arr2obj(p.pvdata , h  =a(o(s.userdat  a|  |[]) ; h  =i.arr2obj(h  ;va  m  =location.hre , v  ={ , b  =l.getParamFromUrl("scm  ,  )|  |" ;  b&  &(v.sc m  =b  ;va  y  =l.getParamFromUrl("pg1stepk  ,  )|  |" ;  y&  &(v.pg1step k  =y  ;va  w  =l.getParamFromUrl("point  ,  )|  |" ;  w&  &(v.iss b  =1) ,  _&  &_.mansndlo  g&  &(v.mansndlo g  =_.mansndlog) , v  =this.upUtData(  ,g , v  =this.upUtData(  ,h  ;va  x  =r(  ;v.functyp e  ="page  ,v.funcI d  ="2001  ,v.ur l  =goldlog.getMetaInfo("aplus-pagename  )|  |location.origi n  +location.pathnam  ,v._ish 5  ="1  ,v._h5ur l  =  ,v._toU T  =  ,v._bridgeNam e  =t.bridgeNam  e|  |"  ,v._bridgeVersio n  =t.bridgeVersio  n|  |"  ,v["spm-cnt ]  =n.spm_cn  t|  |"  ,v["spm-url ]  =n.spm_ur  l|  |"  ,v["spm-pre ]  =n.spm_pr  e|  |"  ,v.cn a  =d.getCookie("cna"  ,v.lve r  =goldlog.lve  r|  |f.lve  ,v.jsve r  =f.script_nam  ,v.pve r  =goldlog.aplus_cplugin_ve  ,v.isonepag e  =x.isonepag  ;va  j  =goldlog.getMetaInfo("aplus-utparam"  ;retur   j&  &(v["utparam-cnt ]  =JSON.stringify(j)  ,v._is_g2u _ = c ? 1  : ,  v}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.what_to_sendpv_ut  2|  |{ , n  =t.where_to_sendlog_u  t|  |{ , o  =n.aplusToU  T|  |{ , a  =o.toUT  2|  |{  ;  a&  &a.isAvailabl  e&  &"function "= =typeof a.toUT  2|  |p.haveNativeFlagInUA() )&  &(e.pvdataToU t  =this.getToUtData(a  ,this.options.context.what_to_sendpv_ut 2  =e ) } }  }} ,functio n(  , )  {"use strict  ;va  n  ="UT4Aplus , o  ="Umeng4Aplus  ;e.isNative4Aplu s  =functio n )  {va  t  =goldlog.getMetaInfo("aplus-toUT" , e  =goldlog.aplusBridgeNam  ;retur   e== =  n& &  t== =  n| |  e== =  o}  ,e.haveNativeFlagInU A  =functio n )  {va  t  =goldlog.aplusBridgeNam ;i f(  t&  &"boolean "! =typeof  )  {va  e  =new RegExp([  ,o].join("|"  ,"i" , a  =navigator.userAgent.match(e ; t  =!  a&  &a[0  ,goldlog.aplusBridgeNam e = t }retur n!! t  }} ,functio n(  ,  , )  {"use strict  ;function o( )  {var   ,  ,  , , i  =[ , s  ={ ;fo r e  =t.lengt h  -1 ;  e> =  ;e--) n  =t[e , o  =n[0 ,  o&  &o.indexOf(r.s_plain_ob )= =-  1&  &s.hasOwnProperty(  )|  | a  =n[1  ,("aplus  "= =  o|  |  )&  &(i.unshift([  ,a]  ,s[ ]  =1)  ;retur  i  }function a( )  {var   ,  ,  , , s  =[ , u =  {logtyp  :!  ,cach  :!  ,sc  :!  ,"spm-cnt  :  0 ;fo r e  =t.lengt h  -1 ;  e> =  ;e--)i f n  =t[e , o  =n[0 , a  =n[1  ,!(i.isStartWith(  ,r.s_plain_ob  )&  &!i.isStartWith(  ,r.mkPlainKeyForExparams(  )|  |u[o] )i f(i.isStartWith(  ,r.mkPlainKeyForExparams() )  {va  c  =r.param2arr(a ;i f("object  "=  =typeo   c&  &c.lengt h  > )fo r(va  l  =c.lengt h - ;  l> =  ;l-- )  {va  p  =c[l ;  p&  &p[  ]&  &s.unshift([p[0  ,p[1] ) } }else s.unshift([  ,a]  ;retur  s  }va  r  =n(18 , i  =n(9 , s  =n(26 , u  =n(29 , c  =n(55 , l  =n(27 , p  =n(4 , g  =n(11  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getToUtDat :functio n(  , )  {var  , i  =s.getGoldlogVal("_$  )|  |{ , c  =i.sp m|  |{ , f  =a(o(t) , d  ={ ;tr y  {va  _  =r.arr2obj(f  ;_._toU T  =  ,_._bridgeNam e  =e.bridgeNam  e|  |"  ,_._bridgeVersio n  =e.bridgeVersio  n|  |" , n  =JSON.stringify( ) }catc h( ) { n  ='{"_toUT":1} '  }va  h  =u.getOnePageInfo(l  ;d.functyp e  ="2001  ,d.urlpagenam e  =h.urlpagenam  ,d.ur l  =location.hre  ,d.spmcn t  =c.spm_cn  t|  |"  ,d.spmur l  =c.spm_ur  l|  |"  ,d.spmpr e  =c.spm_pr  e|  |"  ,d.lzsi d  ="  ,d.cn a  =g.getCookie("cna"  ,d.extendarg s  =  ,d.isonepag e  =h.isonepag  ;va  m  =this.options.contex t|  |{ , v  =!!m.is_singl  ;return d._is_g2u _ = v ? 1  :  ,d.versio n  =p.toUtVersio  ,d.lve r  =goldlog.lve  r|  |p.lve  ,d.jsve r  =p.script_nam ,  d}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.what_to_sendp  v|  |{ , n  =e.pvdat  a|  |[ , o  =t.what_to_sendpv_u  t|  |{ , a  =t.where_to_sendlog_u  t|  |{ , r  =a.aplusToU  T|  |{ , i  =r.toU  T|  |{  ;  i&  &i.isAvailabl  e&  &"function "= =typeof i.toUT  2|  |c.haveNativeFlagInUA() )&  &(o.pvdataToU t  =this.getToUtData(  ,i  ,this.options.context.what_to_sendpv_u t  =o ) } }  }} ,functio n(  , )  {"use strict  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.is_singl e  ?"1 "  :"0 ;i f(t.what_to_sendpv_ut2.pvdataToUt._slo g  =  ,t.what_to_sendpv_ut.pvdataToUt._slo g  =  ,t.what_to_sendpv.pvdata.push(["_slog  ,e]  ,t.ut_is_availabl )  {va  n  =t.is_singl e ?"1 "  :"2  ;t.what_to_sendpv.pvdata.push(["_is_g2u  ,n ) } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =o.getGoldlogVal("_$  )|  |{ , e  =this.options.context.can_to_sendp v|  |{ , n  =t.send_pv_coun  t|  | , a  =this.options.confi  g|  |{  ;return a.is_aut  o& & n > 0  ?"done "  :(e.fla g  ="YES  ,this.options.context.can_to_sendp v  =  ,t.send_pv_coun t  =++  ,void o.setGoldlogVal("_$  ,t) ) } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(55  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n(  , )  {va  n  =thi , a  =this.options.contex t|  |{ , r  =a.what_to_sendpv_ut  2|  |{ , i  =a.where_to_sendlog_u  t|  |{ , s  =r.pvdataToU  t|  |{ , u  =i.aplusToU  T|  |{ , c  =u.toUT ;i f(o.isNative4Aplus( )return u.toutfla g  ="toUT2  ,i.toUTNam e  ="toUT2  ,voi d(n.options.context.what_to_sendpv_ut2.isSucces s  =!0 ;i f  c&  &"function "= =typeof c.toUT  2&  &c.isAvailabl )tr y  {u.toutfla g  ="toUT2  ,c.toUT2(  ,functio n )  {n.options.context.what_to_sendpv_ut2.isSucces s =!  ,e("done  )  ,functio n( )  {n.options.context.what_to_sendpv_ut2.errorMs g =  ,e  )  ,2e ) }catc h( )  {e ) }finall y {retur n"pause " } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(3  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n(  , )  {va  n  =thi , a  =this.options.contex t|  |{ , r  =a.what_to_sendpv_u  t|  |{ , i  =a.what_to_sendpv_ut  2|  |{ , s  =a.where_to_sendlog_u  t|  |{ , u  =r.pvdataToU  t|  |{ , c  =s.aplusToU  T|  |{ , l  =c.toU ;i f(!i.isSucces  s& &  l&  &"function "= =typeof l.toUT  2&  &l.isAvailabl )tr y  {l.toUT2(  ,functio n )  {c.toutfla g ="toUT  ,n.options.context.what_to_sendpv_ut.isSucces s =!  ,e  )  ,functio n( )  {o.do_tracker_jserror  {messag  :"do_sendpv_ut error  ,erro  :JSON.stringify(t  ,filenam  :"do_sendpv_ut  "}  ,e  )  ,5e ) }catc h( )  {e ) }finall y {retur n"pause " } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26 , a  =n(18  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.what_to_sendpv_u  t|  |{ , n  =t.what_to_sendpv_ut  2|  |{ , r  =!!t.is_singl ;i f(  r|  |!e.isSucces  s&  &!n.isSucces )  {va  i  =t.what_to_sendp v|  |{ , s  =t.where_to_sendp  v|  |{ , u  =i.pvdat  a|  |[ , c  =goldlog.send(s.ur  ,a.arr2obj(u)  ;o.setGoldlogVal("req  , ) } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(33 , a  =n(26  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =goldlog._ $|  |{ , e  =this.options.contex  t|  |{  ;a.setGoldlogVal("pv_context  ,e  ;va  n  =goldlog.spm_a b|  |[ , r  =n.join("." , i  =t.send_pv_coun , s =  {cn  :e.etag.cn  ,coun  :  ,spmab_pr  :goldlog.spmab_pr  e  ;o.doPubMsg(["sendPV  ,"complete  ,  ,s]  ,o.doCachePubs(["sendPV  ,"complete  ,  ,s ) } }  }} ,functio n(  , )  {"use strict  ;e.plugins_prep v  =  ]} ,functio n(  ,  , )  {"use strict  ;function o ) {retur n  {where_to_hjl :  {ur  :"//gj.mmstat.com/  ,ac_atpanel  :"//gj.mmstat.com/  ,tblogUrl  :"//gj.mmstat.com/ " } }  }function a )  {return r.assign(new   ,new  )  }va  r  =n(9 , i  =n(65  ;t.export s =  a} ,functio n(  ,  , )  {"use strict  ;function o ) {retur n  {compos  : {}  ,basic_param :  {cn  :a.getCookie("cna  )}  ,where_to_hjl :  {ur  :"//gm.mmstat.com/  ,ac_atpanel  :"//ac.mmstat.com/  ,tblogUrl  :"//log.mmstat.com/  "}  ,userdat  : {}  ,what_to_hjl :  {logdat  :{  }}  ,what_to_pvhas :  {has  :  ]}  ,what_to_hjlj_exinf :  {EXPARAMS_FLA  :"EXPARAMS  ,exinfo  :[  ,exparams_key_names  :["uidaplus  ,"pc_i  ,"pu_i  ]}  ,what_to_hjlj_u :  {logdataToU  :{  }}  ,what_to_hjlj_ut :  {isSucces  :!  ,logdataToUT  :{  }}  ,where_to_sendlog_u :  {aplusToU  : {}  ,toUTNam  :"toUT  "}  ,networ :  {connTyp  :"UNKNOWN  "}  ,is_singl  : 1 }  }va  a  =n(11  ;t.export s =  o} ,functio n(  ,  , )  {"use strict  ;e.plugins_hjl j  =  {nam  :"etag  ,enabl  :!  ,pat  :n(3  ) ,  {nam  :"where_to_sendlog_ut  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"is_single  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"what_to_hjlj_exinfo  ,enabl  :!  ,pat  :n(6  ) ,  {nam  :"what_to_pvhash  ,enabl  :!  ,pat  :n(4  ) ,  {nam  :"what_to_hjlj  ,enabl  :!  ,pat  :n(68  ,dep  :["what_to_hjlj_exinfo  ,"what_to_pvhash  ] ,  {nam  :"what_to_hjlj_ut2  ,enabl  :!  ,pat  :n(69  ,dep  :["is_single  ,"what_to_hjlj_exinfo  ] ,  {nam  :"what_to_hjlj_ut  ,enabl  :!  ,pat  :n(72  ,dep  :["is_single  ,"what_to_hjlj_exinfo  ] ,  {nam  :"what_to_hjlj_slog  ,enabl  :!  ,pat  :n(73  ,dep  :["what_to_hjlj  ,"what_to_hjlj_ut2  ,"what_to_hjlj_ut  ] ,  {nam  :"where_to_hjlj  ,enabl  :!  ,pat  :n(74  ,dep  :["is_single  ,"what_to_hjlj  ] ,  {nam  :"do_sendhjlj_ut2  ,enabl  :!  ,pat  :n(75  ,dep  :["what_to_hjlj  ,"what_to_hjlj_ut2  ,"where_to_sendlog_ut  ] ,  {nam  :"do_sendhjlj_ut  ,enabl  :!  ,pat  :n(76  ,dep  :["what_to_hjlj  ,"what_to_hjlj_ut  ,"where_to_sendlog_ut  ,"do_sendhjlj_ut2  ] ,  {nam  :"do_sendhjlj  ,enabl  :!  ,pat  :n(77  ,dep  :["is_single  ,"what_to_hjlj  ,"where_to_hjlj  ,"do_sendhjlj_ut  ]  ]} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(31 , r  =n(26 , i  =n(26 , s  =n(12 , u  =n(11  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getCookieUserInf :functio n )  {va  t  =[ , e  =u.getCookie("workno  )|  |u.getCookie("emplId" ;  e&  &t.push("workno= "  +e  ;va  n  =u.getHng(  ;retur   n&  &t.push("_hng= "  +u.getHng() ,  t}  ,filterExinf :functio n( )  {va  e  =" ;tr y {  t&  &("string  "=  =typeo  t ? e  =t.replace(/&amp;/  ,"&").replace(/\buser(i|I)d=  ,"uidaplus=").replace(/&aplus&  ,"& )  :"object  "=  =typeo   t&  & e  =o.obj2param(  ,!0) ) }catc h( ) { e  =t.messag e  ?t.messag   :" "  }retur   e}  ,getExparamsFla :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.what_to_hjlj_exinf  o|  |{  ;return e.EXPARAMS_FLA  G|  |"EXPARAMS  "}  ,getCustomExParam :functio n( )  {va  e  ="  ;retur   t!= =this.getExparamsFlag  )&  & e  =this.filterExinfo(  )|  |"" , e  ?e.split("& )  :  ]}  ,getBeaconExparam :functio n(  , )  {va  n  =[ , r  =a.getExParams(  )|  |" ; r  =r.replace(/&aplus&  ,"&" ;fo r(va  i  =o.param2arr(  )|  |[ , u  =functio n( )  {return s.indexof(  , )  >-  1 , c  = ; c  <i.lengt  ;c++ )  {va  l  =i[c , p  =l[  ]|  |" , g  =l[  ]|  |" ;  p& &  g&  &  e== =this.getExparamsFlag  )|  |u(p) )&  &n.push p  +"= "  + )  }retur   n}  ,getExinf :functio n( )  {va  e  =this.options.contex t|  |{ , n  =e.what_to_hjlj_exinf  o|  |{ , o  =n.exparams_key_name  s|  |[ , a  =this.getBeaconExparams(  ,t  ;retur   a}  ,getExDat :functio n( )  {va  e  =[ ;i f("object  "=  =typeof  )fo r(var n in t )  {va  o  =t[n ;  n& &  o&  &"object "! =typeo   o&  &"function "! =typeo   o&  &e.push n  +"= "  + )  }retur   e}  ,doConcatAr :functio n(  , )  {retur   e&  &e.lengt h >  0&  & t  =t.concat(e) ,  t}  ,ru :functio n ) {tr y  {va  t  =this.options.context.what_to_hjlj_exinf o|  |{ , e  =r.getGoldlogVal("_$  )|  |{ , n  =e.meta_inf  o|  |{ , o  =n["aplus-exinfo  ]|  |" , a  =n["aplus-exdata  ]|  |" , s  =[ ; s  =this.doConcatArr(  ,t.exinf  o|  |[] , s  =this.doConcatArr(  ,this.getExinfo(o) , s  =this.doConcatArr(  ,this.getCookieUserInfo() , s  =this.doConcatArr(  ,this.getCustomExParams(o) , s  =this.doConcatArr(  ,this.getExData(a)  ,t.exinf o  =s.join("&"  ,this.options.context.what_to_hjlj_exinf o = t }catc h( )  {i.logger  {ms : t  ?t.messag   :"  " ) } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(31 , a  =n(18 , r  =n(11 , i  =n(9 , s  =n(4  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getParam :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.userdat  a|  |{ , n  =t.basic_param  s|  |{ , u  =t.what_to_hjlj_exinf  o|  |{ , c  =u.exinf  o|  |" , l  =t.eta  g|  |{ , p  =l.cn  a|  |n.cn  a|  |r.getCookie("cna" , g  =e.gmke , f  ="  ;e.goke  y& & c ? f  =[e.goke  ,c].join("& )  :e.goke y ? f  =e.goke  :  c&  & f  =c  ;va  d  =t.what_to_pvhas h|  |{ , _  =d.has  h|  |[  ;_.lengt  h&  &  f+ ="& "  +_.join("=")) ,  f+ ="&jsver= "  +s.script_nam ,  f+ ="&lver= "  +s.lve ,  f+ ="&pver= "  +goldlog.aplus_cplugin_ve ,  f+ ="&cache= "  +i.makeCacheNum( ,  f+ ="&page_cna= "  +  ;va  h =  {gmke :  g|  |"  ,goke  :  ,cn :  p ;tr y  {va  m  =location.href.substring(  ,1200 ;  m&  &(h._p_ur l  =goldlog.getMetaInfo("aplus-p-url  )|  |m ) }catc h( ) {  }e["spm-cnt  ]&  &(h["spm-cnt ]  =e["spm-cnt"]  ,e["spm-pre  ]&  &(h["spm-pre ]  =e["spm-pre"] ;tr y  {va  v  =o.getExParams(a , b  =a.param2obj(v).uidaplu ;  b&  &(h._gr_uid _  =b  ;va  y  =a.param2obj(f).uidaplu ;  y&  &(h.uidaplu s  =y ) }catc h( ) {  }retur   h}  ,ru :functio n )  {this.options.context.what_to_hjlj.logdat a  =this.getParams ) } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(70 , a  =n(26 , r  =n(4  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getToUtDat :functio n(  , )  {va  n  =a.getGoldlogVal("_$  )|  |{ , i  =n.sp m|  |{ , s  =this.options.context.userdat  a|  |{ , u  =this.options.context.basic_param  s|  |{ , c  =this.options.contex  t|  |{ , l  =c.what_to_hjlj_exinf  o|  |{ , p  =l.exinf  o|  |" , g  ="  ;s.goke  y& & p ? g  =[s.goke  ,p].join("& )  :s.goke y ? g  =s.goke  :  p&  & g  =p  ;va  f  ={  ;f.functyp e  ="ctrl  ,f.funcI d  =o.getFunctypeValue2  {logke  :s.logke  ,gmke  :s.gmke  ,spm_a  :a.getGoldlogVal("spm_ab  )}  ,f.ur l  =goldlog.getMetaInfo("aplus-pagename  )|  |location.origi n  +location.pathnam  ,f.logke y  =s.logke  ,f.goke y  =encodeURIComponent(g  ,f.gmke y  =s.gmke  ,f._ish 5  ="1  ,f._h5ur l  =location.hre  ,f._is_g2u _ = t ? 1  :  ,f._toU T  =  ,f._bridgeNam e  =e.bridgeNam  e|  |"  ,f._bridgeVersio n  =e.bridgeVersio  n|  |"  ,f["spm-cnt ]  =i.spm_cn  t|  |"  ,f["spm-url ]  =i.spm_ur  l|  |"  ,f["spm-pre ]  =i.spm_pr  e|  |"  ,f.cn a  =u.cn  ,f.lve r  =r.lve  ,f.jsve r  =r.script_nam  ,s.hasOwnProperty("autosend  )&  &(f.autosen d  =s.autosend  ;va  d  =goldlog.getMetaInfo("aplus-utparam"  ;retur   d&  &(f["utparam-cnt ]  =JSON.stringify(d) ,  f}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.what_to_hjlj_ut  2|  |{ , n  =!!t.is_singl , o  =t.where_to_sendlog_u  t|  |{ , a  =o.aplusToU  T|  |{ , r  =a.toUT  2|  |{  ;e.logdataToU T  =this.getToUtData(  ,r  ,this.options.context.what_to_hjlj_ut 2 = e } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(71 , a  =n(55 , r  =functio n( )  {va  e  =t.logkey.toLowerCase( ;  0== =e.indexOf("/  )&  & e  =e.substr(1)  ;va  n  =t.gmke y ?t.gmkey.toUpperCase   :"OTHER" ;switc h( ) {cas e"EXP" :retur n"2201 ;cas e"CLK" :retur n"2101 ;cas e"SLD" :retur n"19999 ;cas e"OTHER" :default :retur n"19999 "  } , i  =/\sA2U\/x/.test(window.navigator.userAgent , s  =functio n )  {va  t  =window.navigator.userAgen , e  =! , n  =/AliApp\((DM|DY|DingTalk|CN|LA)\/(\d+[._]\d+[._]\d+)/ , r  =n.test(t  ;retur  e  = ,  i|  |a.haveNativeFlagInUA  )| |  e|  |o.webviewIsAbove  {version_ios_t  :[  ,1  ,7  ,version_ios_t  :[  ,2  ,1  ,version_android_t  :[  ,1  ,7  ,version_android_t  :[  ,2  ,  ]  )  ;e.isSingleUaVersio n  =  ,e.isSingleSendLo g  =functio n( ) {retur n(  t|  |!/^\/fsp\.1\.1$/.test(t.logkey  )&  &!!  t&  &t.logke  y&  &s()  )}  ,e.getFunctypeValu e  =functio n( )  {return e.isSingleSendLog( )  ?r( )  :"2101  "}  ,e.getFunctypeValue 2  =functio n( )  {return r( )  }} ,functio n(  , )  {"use strict  ;va  n  =functio n( )  {va  e  =[  ,  ,0 ;tr y {i f( )  {va  n  =t[1 , o  =n.split("." ;i f(o.lengt h  > )fo r(va  a  = ; a  <o.length; )e[ ]  =parseInt(o[a]  , a+ + } }catc h( ) { e  =[  ,  , ] }finall y  {retur  e  }  ;e.parseVersio n  =  ;va  o  =functio n(  , )  {va  n  =! ;tr y  {va  o  =t[ ]  >e[0 , a  =t[ ]  >e[1 , r  =t[ ]  >e[2 , i  =t[  ]== =e[0] , s  =t[  ]== =e[1 , u  =t[  ]== =e[2 ; n  =!  o|  |(!(  i|  |!  )|  |(!!  i& &  s&  &  )|  |!!  i& &  s&  &u) ) }catc h( ) { n  = 1 }finall y  {retur  n  }  ;e.isAboveVersio n  =  ,e.webviewIsAbov e  =functio n(  , )  {va  a  =! ;tr y {  e|  | e  =navigator.userAgent  ;va  r  =e.match(/AliApp\(TB\/(\d+[._]\d+[._]\d+)/i , i  =n(r , s  =e.match(/AliApp\(TM\/(\d+[._]\d+[._]\d+)/i , u  =n(s , c  =/iPhone|iPad|iPod|ios/i.test(e , l  =/android/i.test(e ; c ?  r& & i ? a  =o(  ,t.version_ios_t ) :  s& &  u&  & a  =o(  ,t.version_ios_tm ) :  l&  &  r& & i ? a  =o(  ,t.version_android_t ) :  s& &  u&  & a  =o(  ,t.version_android_tm) ) }catc h( ) { a  = 1  }retur   a}  ,e.webviewIsEqua l  =functio n(  , )  {va  n  =! ;tr y {  e|  | e  =navigator.userAgent  ;va  o  =e.match(/AliApp\(CN\/(\d+[._]\d+[._]\d+)/i , a = o  ?o[ ]  :"0.0.0 , r  =e.match(/AliApp\(DingTalk\/(\d+[._]\d+[._]\d+)/i , i = r  ?r[ ]  :"0.0.0 , s  =/iPhone|iPad|iPod|ios/i.test(e , u  =/android/i.test(e ; s ?  o& & a ? n  =t.version_ios_c  n== =  :  r& &  i&  & n  =t.version_ios_d  d== =i ) :  u&  &  o& & a ? n  =t.version_android_c  n== =  :  r& &  i&  & n  =t.version_android_d  d== =i) ) }catc h( ) { n  = 1  }retur   n}  ,e.webviewIsBelo w  =functio n(  , )  {va  a  =! ;tr y {  e|  | e  =navigator.userAgent  ;va  r  =e.match(/AliApp\(CN\/(\d+[._]\d+[._]\d+)/i , i  =n(r , s  =/iPhone|iPad|iPod|ios/i.test(e , u  =/android/i.test(e ; s ?  r& &  i&  & a  =!o(  ,t.version_ios_cn ) :  u& &  r& &  i&  & a  =!o(  ,t.version_android_cn ) }catc h( ) { a  = 1  }retur  a  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(70 , a  =n(11 , r  =n(26 , i  =n(4  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getToUtDat :functio n(  , )  {va  n  =r.getGoldlogVal("_$  )|  |{ , s  =n.sp m|  |{ , u  =this.options.contex  t|  |{ , c  =u.userdat  a|  |{ , l  =u.what_to_hjlj_exinf  o|  |{ , p  =l.exinf  o|  |" , g  ="  ;c.goke  y& & p ? g  =[c.goke  ,p].join("& )  :c.goke y ? g  =c.goke  :  p&  & g  =p  ;va  f =  {gmke  :c.gmke  ,goke  :  ,lve  :i.lve  ,jsve  :i.script_nam  ,versio  :i.toUtVersio  ,spm_cn  :s.spm_cn t|  |"  ,spm_ur  :s.spm_ur l|  |"  ,spm_pre  :s.spm_pr  e|  |"  "  ;f._is_g2u _ = t ? 1  :  ,f._bridgeNam e  =e.bridgeNam  e|  |"  ,f.bridgeVersio n  =e.bridgeVersio  n|  |"  ,f._toU T  = ;tr y { f  =JSON.stringify(f  ,"{}  "= =  f&  & f  =" ) }catc h( ) { f  =" "  }va  d  =n.meta_inf o|  |{ , _  =d.isonepage_dat  a|  |{ , h  ={  ;return h.functyp e  =o.getFunctypeValue  {logke  :c.logke  ,gmke  :c.gmke  ,spm_a  :r.getGoldlogVal("spm_ab  )}  ,h.spmcn t  =s.spm_cn  t|  |"  ,h.spmur l  =s.spm_ur  l|  |"  ,h.spmpr e  =s.spm_pr  e|  |"  ,h.logke y  =c.logke  ,h.logkeyarg s  =  ,h.urlpagenam e  =_.urlpagenam  ,h.ur l  =location.hre  ,h.cn a  =a.getCookie("cna  )|  |"  ,h.extendarg s  ="  ,h.isonepag e  =_.isonepag ,  h}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =!!t.is_singl , n  =t.what_to_hjlj_u  t|  |{ , o  =t.where_to_sendlog_u  t|  |{ , a  =o.aplusToU  T|  |{ , r  =a.toU  T|  |{  ;n.logdataToU T  =this.getToUtData(  ,r  ,this.options.context.what_to_hjlj_u t = n } } }} ,functio n(  , )  {"use strict  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =t.is_singl e  ?"1 "  :"0  ;t.what_to_hjlj_ut2.logdataToUT._slo g  =  ,t.what_to_hjlj_ut.logdataToUT._slo g  =  ;va  n  =["_slog= "  +e ;i f(t.ut_is_availabl )  {va  o  =t.is_singl e ?"1 "  :"2  ;n.push("_is_g2u= "  + )  }t.what_to_hjlj.logdata.goke y  ?t.what_to_hjlj.logdata.goke  y+ ="& "  +n.join("& )  :t.what_to_hjlj.logdata.goke y  =n.join("& ) } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(18 , a  =n(9 , r  =n(26 , i  =n(24 , s  =n(27  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,getMetaInf :functio n )  {va  t  =r.getGoldlogVal("_$  )|  |{ , e  =t.meta_inf o|  |s.getInfo(  ;retur   e}  ,getAplusMetaByKe :functio n( )  {va  e  =this.getMetaInfo  )|  |{  ;return e[  ]}  ,cramUr :functio n( )  {va  e  =r.getGoldlogVal("_$  )|  |{ , n  =e.sp m|  |{ , o  =this.options.context.where_to_hjl  j|  |{ , i  =o.ac_atpane , s  =o.tblogUr , u  =this.options.context.what_to_hjl  j|  |{ , c  =this.options.context.userdat  a|  |{ , l  =! , p  =c.logke ;i f(! )retur n  {ur  :  ,logkey_available  :  1 ;i f("ac  "=  = ) t = i  +"1.gif ;else i f(a.isStartWith(  ,"ac-" ) t = i  +p.substr(3 ;else i f(a.isStartWith(  ,"/" ) {  t+ =p.substr(1  ;va  g  =u.logdat a|  |{  ;g["spm-cnt ]  =n.spm_cn  ,g.logtyp e  = ;tr y  {u.logdat a  =  ,this.options.context.what_to_hjl j = u }catc h( ) { } }else a.isEndWith(  ,".gif ) ? t = s + p : l  =! ;retur n  {ur  :  ,logkey_available : l  }}  ,can_to_sendhjl :functio n( )  {va  e  =this.options.contex t|  |{ , n  =e.logge  r|  |functio n )  {} , o  =this.options.context.userdat  a|  |{ ;retur n!!t.logkey_availabl  e|  |(n  {ms  :"logkey:  "  +o.logke y  +" is not legal! "})  ,!1  )}  ,ru :functio n )  {var   , , n  =this.options.context.where_to_hjlj.ur , a  =this.getAplusMetaByKey("aplus-rhost-g" , r =  a&  &o.hostValidity(a ;  r&  & t  =/^\/\//.test( )  ?" "  :"// , e  =/\/$/.test( )  ?" "  :"/ , n = t + a  +e ,  a&  &  r&  &i.logger  {ms  :"aplus-rhost-g:  " + a  +' is invalid, suggestion: "xxx.mmstat.com"  '}  ;va  s  =this.cramUrl(n  ;return this.can_to_sendhjlj( )  ?voi d(this.options.context.where_to_hjlj.ur l  =s.ur )  :"done " } } }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(55  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n(  , )  {va  n  =thi , a  =this.options.contex t|  |{ , r  =a.logge  r|  |functio n )  {} , i  =a.what_to_hjlj_ut  2|  |{ , s  =a.where_to_sendlog_u  t|  |{ , u  =!!a.is_singl , c  =i.logdataToU  T|  |{ , l  =s.aplusToU  T|  |{ , p  =l.toUT ;i f(o.isNative4Aplus( )return l.toutfla g  ="toUT2  ,s.toUTNam e  ="toUT2  ,voi d(n.options.context.what_to_hjlj_ut2.isSucces s  =!0 ;i f  p&  &"function "= =typeof p.toUT  2&  &p.isAvailabl )tr y  {l.toutfla g  ="toUT2  ,p.toUT2(  ,functio n )  {n.options.context.what_to_hjlj_ut2.isSucces s =!  ,e  )  ,functio n( )  {n.options.context.what_to_hjlj_ut2.errorMs g =  ,e  )  ,2e ) }catc h( ) {  u&  &r  {ms  :"warning: singleSendHjlj toUTName = toUT2 errorMsg: "  +t.messag  e ) }finall y {retur n"pause " } } }  }} ,functio n(  , )  {"use strict  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n(  , )  {va  n  =thi , o  =this.options.contex t|  |{ , a  =o.what_to_hjlj_ut2.isSucces , r  =o.logge  r|  |functio n )  {} , i  =!!o.is_singl , s  =o.where_to_sendlog_u  t|  |{ , u  =o.what_to_hjlj_u  t|  |{ , c  =u.logdataToU  T|  |{ , l  =s.aplusToU  T|  |{ , p  =l.toU ;i f(  a& &  p&  &"function "= =typeof p.toUT  2&  &p.isAvailabl )tr y  {p.toUT2(  ,functio n )  {l.toutfla g ="toUT  ,n.options.context.what_to_hjlj_ut.isSucces s =!  ,e  )  ,functio n )  {e  )  ,5e ) }catc h( ) {  i&  &r  {ms  :"warning: singleSendHjlj toUTName = toUT errorMsg: "  +t.messag  e ) }finall y {retur n"pause " } } }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.option s =  t}  ,ru :functio n )  {va  t  =this.options.contex t|  |{ , e  =this.options.confi  g|  |{ , n  =t.what_to_hjlj_ut.isSucces , a  =t.what_to_hjlj_ut2.isSucces , r  =!!t.is_singl ;i f(  r|  |  n&  &! )  {va  i  =t.logge r|  |{ , s  =t.what_to_hjl  j|  |{ , u  =t.where_to_hjl  j|  |{ , c  =s.logdat  a|  |{ , l  =u.ur  l|  |" ;  l|  |"function "! =typeo   i|  |i  {ms  :"warning: where_to_hjlj.url is null, goldlog.record failed!  "}  ;va  p  =goldlog.getMetaInfo("aplus-channel" ;i f("WS-ONLY  "!= = )  {va  g  =goldlog.send(u.ur  ,  ,e.metho  d|  |"GET"  ;o.setGoldlogVal("req  , ) } } } }  }} ,functio n(  ,  , )  {"use strict  ;function o )  {var   , , n  =i.KE Y|  |{ , o  =n.NAME_STORAG  E|  |{ ;i f(  c&  & )  {va  a  =location.hre , l =  u&  &(a.indexOf("login.taobao.com  )> =  0|  |a.indexOf("login.tmall.com  )> =0) , p  =s.getRefer( ;  l& & p  ? t  = , e  =r.getItem(o.REFERRER_PV_ID )  : t  = , e  =goldlog.pvid  ,r.setItem(o.REFERRE  ,t  ,r.setItem(o.REFERRER_PV_I  , ) }  }va  a  =n(79 , r  =n(52).nameStorag , i  =n(4 , s  =n(51 , u  ="https:  "=  =location.protoco , c  =paren t!= =sel  ;e.ru n  =functio n )  {va  t  ="beforeunload  ;a.on(windo  ,  ,functio n )  {o  ) )  }} ,functio n(  ,  , )  {"use strict  ;function o(  ,  , )  {va  o  =goldlog._ $|  |{ , a  =o.meta_inf  o|  |{ , r  =a.aplus_cta  p|  |{ , i  =a["aplus-touch" ;i f  r&  &"function "= =typeof r.o )r.on(  ,e ;els e  {va  u  ="ontouchend  "in document.createElement("div"  ;  u|  |"tap  "!= =  i&  &"tapSpm  "!= = n  ?s( , u  ?"touchstart "  :"mousedown  , )  :c.on(  , ) }  }function a( ) {tr y  {p.documentElement.doScroll("left ) }catc h( )  {return void setTimeout(functio n )  {a(  )  , )  }t )  }function r( )  {va  e  = , n  =functio n ) {  0== =  e&  &t(  , e+ +  ;"complete  "== =p.readyStat  e&  &n(  ;var  ;i f(p.addEventListene ) o  =functio n )  {p.removeEventListener("DOMContentLoaded  ,  ,!1  ,n  )}  ,p.addEventListener("DOMContentLoaded  ,  ,!1  ,window.addEventListener("load  ,  ,!1 ;else i f(p.attachEven ) { o  =functio n )  {"complete  "== =p.readyStat  e&  &(p.detachEvent("onreadystatechange  ,o  ,n(  )}  ,p.attachEvent("onreadystatechange  ,o  ,window.attachEvent("onload  ,n  ;va  r  =! ;tr y { r  =nul  l== =window.frameElemen t }catc h( ) {  }p.documentElement.doScrol  l& &  r&  &a( ) }  }function i( )  {"complete  "== =p.readyStat e  ?t )  :s(  ,"load  , )  }function s )  {va  t  =argument ;i f  2== =t.lengt )"DOMReady  "== =t[  ]&  &r(t[1]  ,"onload  "== =t[  ]&  &i(t[1] ;else i f  3== =t.lengt )  {va  e  =t[0 , n  =t[1 , a  =t[2  ;"tap  "== =  n|  |"tapSpm  "== = n  ?o(  ,  , )  :e[_]( g  ?"on "  :" )  +  ,functio n( ) { t =  t|  |l.event  ;var  e  =t.targe t|  |t.srcElement  ;"function  "=  =typeo   a&  &a(  ,  )}  ,!!u(  )& &  {passiv  :  0} ) }  }va  u  =n(80 , c  =n(81 , l  =windo , p  =documen , g  =!!p.attachEven , f  ="attachEvent , d  ="addEventListener , _ = g ? f  :  ;e.DOMRead y  =  ,e.onloa d  =  ,e.o n = s} ,functio n(  , )  {var   ;t.export s  =functio n( ) {i f("boolean  "=  =typeof  )return  ;i f(!/touch|mouse|scroll|wheel/i.test(t )retur n! ; n  =! ;tr y  {va  e  =Object.defineProperty({  ,"passive ,  {ge  :functio n ) { n  = 0  }}  ;window.addEventListener("test  ,nul  , ) }catc h( ) {  }retur  n  }} ,functio n(  , )  {"use strict  ;function n(  , )  {retur  t  +Math.floor(Math.random )  * e - t  +1 )  }function o(  ,  , )  {va  o  =l.createEvent("HTMLEvents" ;i f(o.initEvent(  ,!  ,!0  ,"object  "=  =typeof  )fo r(var a in n  )o[ ]  =n[a  ;t.dispatchEvent( )  }function a( ) {  0== =Object.keys(g).lengt  h&  &(p.addEventListener(  ,  ,!1  ,p.addEventListener(  ,  ,!1  ,p.addEventListener(  ,  ,!1) ;fo r(va  e  = ; e  <t.changedTouches.lengt  ;e++ )  {va  n  =t.changedTouches[e , o  ={ ;fo r(var a in n  )o[ ]  =n[a  ;va  s =  {startTouc  :  ,startTim  :Date.now(  ,statu  :  ,elemen  :t.srcElemen t|  |t.targe  t  ;g[n.identifie ] = s }  }function r( ) {fo r(va  e  = ; e  <t.changedTouches.lengt  ;e++ )  {va  n  =t.changedTouches[e , o  =g[n.identifier ;i f(! )retur  ;va  a  =n.client X -o.startTouch.client , r  =n.client Y  -o.startTouch.client , i  =Math.sqrt(Math.pow(  , )  +Math.pow(  ,2)  ;(o.statu  s== =  h|  |"pressing  "== =o.status )& & i  >1  0&  &(o.statu s  ="panning" ) }  }function i( ) {fo r(va  e  = ; e  <t.changedTouches.lengt  ;e++ )  {va  n  =t.changedTouches[e , a  =n.identifie , s  =g[a ;  s&  &(s.statu  s== =  h&  &t.typ  e== =  d&  &(s.timestam p  =Date.now(  ,o(s.elemen  , ,  {touc  :  ,touchEven :  t}))  ,delete g[a] ) }  0== =Object.keys(g).lengt  h&  &(p.removeEventListener(  ,  ,!1  ,p.removeEventListener(  ,  ,!1  ,p.removeEventListener(  ,  ,!1 )  }function s( )  {t.__fixTouchEven  t|  |(t.addEventListener(  ,functio n ) {  ,!1  ,t.__fixTouchEven t  =!0 )  }function u ) {  c|  |(p.addEventListener(  ,  ,!1 , c  =! )  }va  c  =! , l  =window.documen , p  =l.documentElemen , g  ={ , f  ="touchstart , d  ="touchend , _  ="touchmove , h  ="tapping , m  ="touchcancel , v  ="aplus_tap "  +n(  ,1e5  ;t.export s =  {o  :functio n(  , )  {u( ,  t&  &t.addEventListene  r& &  e&  &(s(t  ,t.addEventListener(  ,e._aplus_tap_callbac k  =functio n( )  {e(  ,t.target ) ,!1) )}  ,u :functio n(  , ) {  t&  &t.removeEventListene  r& &  e&  &e._aplus_tap_callbac  k&  &t.removeEventListener(  ,e._aplus_tap_callbac  ,! ) } }} ,functio n(  ,  , )  {"use strict  ;function o )  {va  t  =goldlog._ $|  |{ , e  =goldlog.getCdnPath( , n = e  +"/alilog/aplus_plugin_xwj/index.js , o = e  +"/alilog/stat/a.js , i = e  +"/secdev/sufei_data/3.9.14/index.js , s = e  +"/sd/baxia-entry/index.js , u = e  +"/alilog/mlog/wp_beacon.js , c  =t.meta_inf , l  =functio n )  {a.addScript(o  ,a.addScript(u  ,a.addScript(  )} , p  =functio n )  {Math.random )  <.0  1&  &a.addScript(o  ,c.ms_data_instance_i  d&  &c.ms_prototype_i  d&  &c.ms_prototype_id.match(/^[124]$  )&  &c.ms_data_shop_i  d&  &a.addScript(u  ;va  t  =c["aplus-rate-ahot"  ;(Math.random ) <  t|  |c["ahot-aplus"  )&  &a.addScript(  )} , g  =c["aplus-xplug"  ;r.onload(functio n )  {tr y  {switc h( ) {cas e"NONE"  :brea ;cas e"ALL"  :l(  ;brea ;defaul  :p ) } }catc h( ) {  }})  ,"NONE  "!= =  g&  &(a.addScript(  ,"  ,"aplus-baxia"  ,a.addScript(  ,"  ,"aplus-sufei" ) }va  a  =n(31 , r  =n(79 , i  =n(83  ;e.ru n  =functio n )  {o  )}  ,e.init_watchGoldlogQueu e  =i.init_watchGoldlogQueu e} ,functio n(  ,  , )  {"use strict  ;function o(  , ) {fo r(va  n =  {subscribeMwChangeQueu  :[  ,subscribeMetaQueu  :[  ,subscribeQueu  :[  ,metaQueu  :[  ,othersQueu  :  ] , o  =[ , a  ={ ; a  =t.shift();)tr y  {va  r  =a.actio , i  =a.arguments[0  ;/subscribe/.test( )  ?"setMetaInfo  "== = i  ?n.subscribeMetaQueue.push( )  :"mw_change_pv  "== =  i|  |"mw_change_hjlj  "== = i  ?n.subscribeMwChangeQueue.push( )  :n.subscribeQueue.push( )  :/MetaInfo/.test( )  ?n.metaQueue.push( )  :n.othersQueue.push( ) }catc h( )  {n.othersQueue.push(a  ,u.do_tracker_jserror  {messag :  t&  &t.messag  ,erro  :encodeURIComponent(t.stack  ,filenam  :"getFormatQueue  " )  }var   ;retur   e&  &n[  ]&  & s  =n[e  ,n[ ]  =[] , o  =n.subscribeMwChangeQueue.concat(n.metaQueue , o  =o.concat(n.subscribeQueue , o  =o.concat(n.subscribeMetaQueu  ,n.othersQueue ,  {queu  :  ,formatQueu : s }  }va  a  =windo , r  =n(9 , i  =n(84 , s  =n(85 , u  =n(3 , c  ="goldlog_queue , l  =functio n(  ,  , ) {tr y  {/_aplus_cplugin_track_deb/.test(  )|  |/_aplus_cplugin_m/.test(  )|  |u.do_tracker_jserror  {messag :  n|  |'illegal task: goldlog_queue.push(" '  +JSON.stringify( )  +'")  ,erro  :JSON.stringify(e  ,filenam  :"processTask  " ) }catc h( ) {  } , p  =functio n(  , )  {va  n = t  ?t.actio   :" , o = t  ?t.argument   :" ;tr y {i f  n& &  o&  &r.isArray(o )  {va  i  =n.split("." , s  = , u  = ;i f  3== =i.lengt ) s  =a[i[0]][i[1  ]|  |{ , u  =s[i[2 ]  ?s[i[2 ]  :" ;else fo r(  ;i.length;)i f u = s  =s[i.shift()  ,! )return voi d("function  "=  =typeo  e  ?e( )  :l(  ,t)  ;"function  "=  =typeo   u&  &u.apply(  , ) }else l(  , ) }catc h( )  {l(  ,  ,e.messag )  }} , g  =functio n( )  {function e ) {i f  t&  &r.isArray(  )&  &t.lengt ) {fo r(va  e  =o(t).queu , n  ={ , a  =[ ; n  =e.shift(); )p(  ,functio n( )  {a.push(  )}  ;a.lengt h >  0&  &setTimeout(functio n )  {fo r( ; n =a.shift();)p(  )}  ,100 ) } }tr y  {e ) }catc h( )  {u.do_tracker_jserror  {messag :  t&  &t.messag  ,erro  :encodeURIComponent(t.stack  ,filenam  :"processGoldlogQueue  " )  }  ;e.processGoldlogQueu e  =  ;va  f  =i.extend  {pus  :functio n( )  {this.length+  ,p( )  }}  ;e.init_watchGoldlogQueu e  =functio n( ) {tr y  {va  e  =a[  ]|  |[ ;i f( )  {va  n  =o(  ,t  ;a[ ]  =n.queu  ,g(n.formatQueu ) }else a[ ]  =f.create  {startLengt  :e.lengt  ,lengt :  0}  ,s.init_loadAplusPlugin(  ,g( ) }catc h( )  {u.do_tracker_jserror  {messag :  t&  &t.messag  ,erro  :encodeURIComponent(t.stack  ,filenam  :"init_watchGoldlogQueue  " ) } }} ,functio n(  , )  {"use strict  ;function n ) {  }n.prototype.exten d  =functio n )  {}  ,n.prototype.creat e  =functio n )  {}  ,n.exten d  =functio n( )  {return this.prototype.extend.call(thi  ,  )}  ,n.prototype.creat e  =functio n( )  {va  e  =new thi ;fo r(var n in t  )e[ ]  =t[n  ;retur   e}  ,n.prototype.exten d  =functio n( )  {va  e  =functio n )  { ;tr y  {"function "!  =typeof Object.creat  e&  &(Object.creat e  =functio n( )  {function e ) {  }return e.prototyp e  =  ,ne   e})  ,e.prototyp e  =Object.create(this.prototype ;fo r(var n in t  )e.prototype[ ]  =t[n  ;e.prototype.constructo r  =  ,e.exten d  =e.prototype.exten  ,e.creat e  =e.prototype.creat e }catc h( )  {console.log( ) }finall y  {retur  e  }}  ,t.export s =  n} ,functio n(  ,  , )  {"use strict  ;va  o  =n(31 , a  =n(29 , r  =n(6 , i  =functio n )  {va  t  =goldlog.getCdnPath )  +"/alilog/s/ "  +r.lve r +"/plugin/ ;retur n  {aplus_ae_pat : t  +"aplus_ae.js  ,aplus_ac_path : t  +"aplus_ac.js "  } , s  ={ , u  ="aplus-auto-exp , c  ="aplus-auto-clk , l  =functio n(  , )  {va  n  =i( , r  =goldlo g&  &goldlog.getMetaInf o  ?goldlog.getMetaInfo( )  :" , l =  e| |  r|  |a.getMetaCnt(t , p  ={  ;p[ ]  =n.aplus_ae_pat  ,p[ ]  =n.aplus_ac_pat ,  l&  &p[  ]&  &!s[  ]&  &(o.addScript(p[t]  ,s[ ]  =!  )  ;e.init_loadAplusPlugi n  =functio n ) {tr y  {!goldlog._aplus_auto_ex  p&  &l(u  ,!goldlog._aplus_a  c&  &l(c  ,goldlog.aplus_pubsub.subscribe("setMetaInfo  ,functio n(  , ) { t!= =  u|  |goldlog._aplus_auto_ex  p|  |l(  ,e ,  t!= =  c|  |goldlog._aplus_a  c|  |l(  , )} ) }catc h( ) { } }} ,functio n(  , )  {"use strict  ;function n(  , )  {return t.indexOf( )  >- 1  }function o(  , ) {fo r(va  o  = , a  =t.lengt ; o  <  ;o++)i f(n(  ,t[o] )retur n! ;retur n! 1  }va  a  =location.hos , r  =["admin.taobao.org  ,"mybank.cn" , i  =["tmc.admin.taobao.org  ,"tmall.admin.taobao.org"  ;e.is_exceptio n  =o(  ,  )&  &!o(  ,  )} ,functio n(  ,  , )  {"use strict  ;function o )  {var   ,  ,  , , a  =c.getElementsByTagName("meta" ;fo r t  = , e  =a.length ; t  <  ;t++)i f n  =a[t , o  =n.getAttribute("name"  ,"data-spm  "== =  o|  |"spm-id  "== = )retur  n  }function a )  {va  t  =c.createElement("meta"  ;t.setAttribute("name  ,"data-spm"  ;va  e  =c.getElementsByTagName("head")[0  ;retur   e&  &e.insertBefore(  ,e.firstChild , t  }function r )  {va  t  =o( ;  t|  | t  =a()  ,t.setAttribute("content  ,goldlog.spm_ab[  ]|  |""  ;va  e  =c.getElementsByTagName("body")[0 ;  e&  &e.setAttribute("data-spm  ,goldlog.spm_ab[  ]|  |" )  }function i )  {var   ,  , , o  =c.getElementsByTagName("*" ;fo r t  = , e  =o.length ; t  <  ;t++) n  =o[t  ,n.getAttribute("data-spm-max-idx  )&  &n.setAttribute("data-spm-max-idx  ,""  ,n.getAttribute("data-spm-anchor-id  )&  &n.setAttribute("data-spm-anchor-id  ," )  }function s )  {va  t  =5e ;tr y  {va  e  =goldlog.getMetaInfo("aplus-mmstat-timeout" ;i f( )  {va  n  =parseInt(e ;  n> =1e  3& &  n< =1e  4&  & t  = ) } }catc h( ) {  }retur  t  }va  u  =windo , c  =documen , l  =n(84 , p  =n(18 , g  =n(79 , f  =n(31 , d  =n(24 , _  =n(33 , h  =n(9 , m  =n(26 , v  =n(22 , b  =n(49 , y  =n(27 , w  =y.getInfo( , x  =n(4 , j  =n(3 , T  =n(88 , P  =n(11 , A  =n(91 , S  =n(93 , k  =[ , E  =[ , U  =[ , M  =[ , I  ="//g.alicdn.com , C  ="//g-assets.daily.taobao.net , N  ="//assets.alicdn.com/g , O  ="//s.alicdn.com/@g/ , V  ="//u.alicdn.com , G  ="//laz-g-cdn.alicdn.com  ;e.ru n  =l.extend  {getCdnPat  :functio n )  {va  t  =f.getCurrentNode( , e  = , n  =[  ,  ,  ,  ,G , o  =new RegExp(V ;i f( )fo r(va  a  = ; a  <n.lengt  ;a++ )  {va  r  =new RegExp(n[a] ;i f(r.test(t.src ) { e  =n[a  ,o.test(t.sr  )&  & e  =N ;brea k }  }retur   e}  ,isInternationa :functio n )  {this.cdnPat  h|  |(this.cdnPat h  =this.getCdnPath()  ;va  t  =[  ,  ,G].indexOf(this.cdnPat )  >-  ;retur   t|  |"int  "== =this.getMetaInfo("aplus-env  )}  ,getCooki :functio n( )  {return P.getCookie(  )}  ,getPara :functio n( )  {va  e  =u.WindVan e|  |{ , n =  e&  &"function "= =typeof e.getPara m  ?e.getParam( )  :"  ;retur   n}  ,beforeSendP :functio n( )  {k.push(  )}  ,afterSendP :functio n( )  {E.push(  )}  ,sen :functio n(  ,  , )  {var  ;i f  0== =t.indexOf("//" )  {va  a  =v.getProtocal( ; t = a + t  }retur  o  ="POST  "== =  n&  &navigato  r&  &navigator.sendBeaco n  ?S.postData(  , )  :S.sendImg(p.makeUrl(  ,e  ,s(  )}  ,launc :functio n(  , )  {var  ;tr y { e  =h.assign(  ,t , n  =goldlog._$._sendPV(  ,t  ;va  o  =goldlog.spm_a b ?goldlog.spm_ab.join(". )  :"0.0  ;j.do_tracker_obsolete_inter  {pag  :location.hostnam e  +location.pathnam  ,spm_ab  :  ,interface_name  :"goldlog.launch  ,interface_params  :"userdata =  "  +JSON.stringify( )  +", config =  "  +JSON.stringify( )} ) }catc h( ) { }finall y  {return d.logger  {ms  :"warning: This interface is deprecated, please use goldlog.sendPV instead! API: http://log.alibaba-inc.com/log/info.htm?type=2277&id=31  "} , n }}  ,_ :  {_sendP :functio n(  , ) {i f t =  t|  |{  ,h.any(  ,functio n( )  {return e(goldlo  ,  )== =! 1}) )retur n!  ;va  o  =n(94).SendP , a  =new  ;retur n"undefined  "=  =typeof t.recordTyp  e&  &(t.recordTyp e  =x.recordTypes.pv)  ,a.run(  , ,  {fn_after_p :  E}  ,  0}  ,_sendPseud :functio n(  , ) {  t|  | t  ={}  ;va  o  =n(95).SendPreP , a  =new  ;retur n"undefined  "=  =typeof t.recordTyp  e&  &(t.recordTyp e  =x.recordTypes.prepv)  ,a.run(  ,  ,{  ,functio n )  {_.doPubMsg(["sendPrePV  ,"complete"  )}  , 0 }}  ,sendP :functio n(  , )  {retur  e =  e|  |{  ,e.pageNam  e&  &goldlog.setMetaInfo("aplus-pagename  ,e.pageName  ,goldlog._$._sendPV(  ,  )}  ,updatePagePropertie :functio n( ) {  t&  &"object "= =typeo  t  ?(t._pag  e&  &(t.pageNam e  =t._pag  ,delete t._page)  ,t.pageNam  e&  &(goldlog.setMetaInfo("aplus-pagename  ,t.pageName  ,delete t.pageName  ,goldlog.appendMetaInfo("aplus-cpvdata  ,t) )  :d.logger  {ms  :"warning: typeof updatePageProperties's params must be object  "  )}  ,beforeRecor :functio n( )  {U.push(  )}  ,afterRecor :functio n( )  {M.push(  )}  ,recor :functio n(  ,  ,  ,  , ) {i f(!h.any(  ,functio n( )  {return t(goldlo  )== =! 1}) )retur n"POST  "!= =  o&  &"WS  "!= =  o&  &"WS-ONLY  "!= =  o&  & o  ="GET"  ,T.run  {recordTyp  :x.recordTypes.hjl  ,metho :  o ,  {logke  :  ,gmke  :  ,goke :  n ,  {fn_after_recor :  M  ,functio n )  {"function "=  =typeo   a&  &a  )}  , 0}  ,recordUdat :functio n(  ,  ,  ,  , )  {va  r  =m.getGoldlogVal("_$  )|  |{ , i  =r.sp m|  |{  ;"POST  "!= =  o&  &"WS  "!= =  o&  &"WS-ONLY  "!= =  o&  & o  ="GET"  ,T.run  {ignore_chksu  :!  ,metho  :  ,recordTyp  :x.recordTypes.uhjl  j ,  {logke  :  ,gmke  :  ,goke  :  ,"spm-cnt  :i.spm_cn  ,"spm-pre  :i.spm_pr  e  ,{  ,functio n )  {h.isFunction(  )&  &a  )  )}  ,setPageSP :functio n(  ,  , )  {va  o  ="setPageSPM , a  =goldlog.getMetaInfo("aplus-spm-fixed" , s  ="function  "=  =typeo  n ? n  :functio n )  {  ;goldlog.spm_a b  =goldlog.spm_a  b|  |[  ;va  u  =h.cloneObj(goldlog.spm_ab ;i f  t&  &(goldlog.spm_ab[ ]  =" "  +  ,goldlog._$.spm.data a  =" "  +t ,  e&  &(goldlog.spm_ab[ ]  =" "  +  ,goldlog._$.spm.data b  =" "  +e  ,b.spaInit(goldlo  ,  ,u  ,"1  "!= = )  {va  c  =u.join("."  ;goldlog.spmab_pr e = c  }va  l  =goldlog.spm_ab.join("."  ;_.doPubMsg([ ,  {spmab_pr  :goldlog.spmab_pr  ,spma :  l}]  ,_.doCachePubs([ ,  {spmab_pr  :goldlog.spmab_pr  ,spma :  l}]  ,r(  ,i(  ,s  )}  ,setMetaInf :functio n(  ,  , ) {i f(y.setMetaInfo(  ,  ,n )  {va  o  =m.getGoldlogVal("_$  )|  |{  ;o.meta_inf o  =y.qGet(  ;va  a  =m.setGoldlogVal("_$  ,o , r  =A.isDisablePvid )  +" ;retur n"aplus-disable-pvid  "== =  t& &  r!= = e  +"  "&  &b.resetSpmCntPvid(  ,_.doPubMsg(["setMetaInfo  ,  ,  ,n]  ,_.doCachePubs(["setMetaInfo  ,  ,  ,n] , a  }}  ,appendMetaInf  :y.appendMetaInf  ,getMetaInfo :functio n( )  {return y.getMetaInfo(  )}  ,o  :g.o  ,cloneDeep  :h.cloneDee  ,getPvId  :A.getPvI d} )} ,functio n(  ,  , )  {"use strict  ;va  o  =n(9 , a  =n(26 , r  =n(33 , i  =n(24 , s  =n(89 , u  =n(90 , c  =n(4  ;e.ru n  =functio n(  ,  ,  , )  {va  p  =new   ;p.init  {middlewar  :[  ,confi  :  ,plugin  :c.plugins_hjl  j}  ;va  g  =p.run( , f  =new c.context_hjl  ;f.userdat a  =  ,f.logge r  =i.logge  ;va  d =  {contex  :  ,pubsu  :a.getGoldlogVal("aplus_pubsub"  ,pubsubTyp  :"hjlj  " , _  =new   ;_.create(d  ,_.wrap(  ,functio n )  {d.context.statu s ="complete  ,d.context.metho d =t.metho  ,r.doPubMsg(["mw_change_hjlj  ,d.context] , n&  &n.fn_after_recor  d&  &o.each(n.fn_after_recor  ,functio n( )  {t(window.goldlog )})  ,"function  "=  =typeo   l&  &l  )} )( ) }} ,functio n(  ,  , )  {"use strict  ;function o ) {  }va  a  =n(12 , r  =n(23 , i  =n(24 , s  =n(3 , u  =n(11  ;o.prototype.creat e  =functio n( ) {fo r(var e in t  )"undefined  "=  =typeof this[  ]&  &(this[ ]  =t[e]  ;return thi  s}  ,o.prototype.pubsubInf o  =functio n(  , ) {tr y {  t&  &t.pubsu  b&  &t.pubsub.publish("mw_change_ "  +t.pubsubTyp  ,t.contex  , ) }catc h( ) {  }}  ,o.prototype.calledLis t  =[  ,o.prototype.setCalledLis t  =functio n( )  {a.indexof(this.calledLis  ,  )== =-  1&  &this.calledList.push(  )}  ,o.prototype.resetCalledLis t  =functio n )  {this.calledLis t  =  ]}  ,o.prototype.wra p  =functio n(  , )  {va  n  =thi , o  =this.contex t|  |{ , c  =o.compos  e|  |{ , l  =c.maxTimeou  t|  |1e  ;return functio n( )  {var  , p  =t.lengt , g  = , f  = , d  =functio n ) {i f(n.pubsubInfo(  ,t[g] ,  g== = )retur  o  ="done  ,n.resetCalledList(  ,"function  "=  =typeo   e&  &e.call(  ,o  ,void clearTimeout(c ;i f(a.indexof(n.calledLis  ,  )== =- ) {i f(n.setCalledList(g  ,!t[  ]|  |"function "! =typeof t[g][0 )retur ;tr y { o  =t[g][0].call(  ,  ,functio n )  {g+ , f  =  ,clearTimeout(c  ,d( )} ) }catc h( )  {s.do_tracker_jserror  {messag : e  ?e.messag   :"compose middleware error  ,erro  :encodeURIComponent(e.stack  ,filenam  :t[g][  ] ) } }va  _  ="number  "=  =typeof  ;i f("pause  "== =  o|  | ) { f  =  ;va  h = _ ? o  : , m  =t[ ]  ?t[g][ ]  :" ; c  =r.sleep(  ,functio n )  {i f( 0== = )  {va  t  ="jump the middleware about  " + m  +", because waiting timeout maxTimeout =  " + h  +"ms!  ;i.logger  {ms :  t}  ;va  e  =window.goldlog_queu e|  |(window.goldlog_queu e  =[]  ;e.push  {actio  :"goldlog._aplus_cplugin_m.do_tracker_browser_support  ,argument  :  {ms  :  ,spma  :goldlog.spm_a  ,pag  :location.hre  ,eta  :n.contex  ?JSON.stringify(n.context.eta )  :""  ,cn  :document.cooki  ?u.getCookie("cna )  :" "  ]} , o  =nul  ,g+  ,d( )  }} ) }els e"done  "== = o  ? g  =  ,d(g )  :(g+  ,d(g  )  ;return n.calledLis  t&  &n.calledList.lengt h >  0&  &n.resetCalledList(  ,d( ) }}  ,t.export s = o} ,functio n(  ,  , )  {"use strict  ;va  o  =n(12  ;t.export s  =functio n ) {retur n  {ini :functio n( )  {this.opt s  = ,  t&  &"object "= =typeof t.middlewar  e&  &t.middleware.lengt h > 0  ?this.middlewar e  =t.middlewar   :this.middlewar e  =[  ,this.plugins_nam e  =  ]}  ,pubsubInf :functio n(  , ) {tr y  {va  n  =t.pubsu ;  n&  &n.publish("plugins_change_ "  +t.pubsubTyp  , ) }catc h( ) {  }}  ,checkPluginLoade :functio n(  , )  {va  n  =! ;i f("object  "=  =typeof e.enabl  e&  &"function "= =typeof e.enable.isEnabl e ? n  =e.enable.isEnable(e.nam )  :"boolean  "=  =typeof e.enabl  e&  & n  =!!e.enable  ,! )retur n! ;i f  n&  &e.dep  s&  &e.deps.lengt h  > )fo r(va  a  = ; a  <e.deps.lengt  ;a++)i f(o.indexof(this.plugins_nam  ,e.deps[a  )== =- )retur n! ;retur n!  0}  ,ru :functio n( ) {  t|  | t  =0  ;va  e  =thi , n  =this.middlewar , o  =this.opt s|  |{ , a  =o.plugin ;i f  a&  &"object "= =typeo   a&  &a.lengt h  > )  {va  r  =a[t ;i f(this.checkPluginLoader(  ,  )&  &(this.plugins_name.push(r.name  ,n.push([functio n(  , )  {e.pubsubInfo(thi  ,r)  ;var  a  =new r.path  ;return a.init  {contex  :this.contex  ,confi  :o.confi  g}  ,a.run(  ,  )  ,r.name])  ,t+  ,a[t )return this.run( ) }else window.consol  e&  &console.log("aplus plugins  "  +JSON.stringify( )  +" must be object of array!"  ;retur  n } }  }} ,functio n(  ,  , )  {"use strict  ;function o )  {va  t  ="true  "== =l.disablePvi ;tr y  {va  e  =goldlog.getMetaInfo("aplus-disable-pvid )  +"  ;"true  "== = e ? t  = 0  :"false  "== =  e&  & t  =! ) }catc h( ) {  }retur  t  }function a( )  {function e( )  {va  e  ="0123456789abcdefhijklmnopqrstuvwxyzABCDEFHIJKLMNOPQRSTUVWXYZ , n  ="0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKMNOPQRSTUVWXYZ  ;retur   1= = t  ?e.substr(Math.floor(6 0  *Math.random()  , ) :  2= = t  ?n.substr(Math.floor(6 0  *Math.random()  , )  :"0 " }fo r(var  , o  =" , a  ="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ , r  =!  ;o.lengt h  <t;) n  =a.substr(Math.floor(6 2  *Math.random()  ,1  ,  r&  &o.lengt  h< =  2&  &("g  "=  =n.toLowerCase  )|  |"l "= =n.toLowerCase() )&  &  0== =o.lengt  h&  &"g "= =n.toLowerCase )  ?Math.random ) <.  5&  & n  =e(1 , r  =! ) :  1=  =o.lengt  h&  &"l "= =n.toLowerCase  )&  &"g "= =o.charAt(0).toLowerCase  )&  & n  =e(2 , r  =!0)) ,  o+ =  ;retur  o  }function r(  ,  , )  {retur  t  ?u.hash(encodeURIComponent(t)).substr(  , ) : n  }function i )  {va  t  =a(8 , e  =t.substr(  ,4 , n  =t.substr(  ,6 ;retur n[r(location.hre  ,  ,e  ,r(document.titl  ,  ,e  ,n].join(" )  }function s )  {va  t  =goldlog.pvi  ;return goldlog.pvi d  =i(  ,c.doPubMsg(["pvidChange ,  {pre_pvi  :  ,pvi  :goldlog.pvi  d}]  ,c.doCachePubs(["pvidChange ,  {pre_pvi  :  ,pvi  :goldlog.pvi  d}]  ,o )  ?" "  :goldlog.pvi d  }va  u  =n(92 , c  =n(33 , l  =n(4  ;e.isDisablePvi d  =  ,e.makePVI d  =  ,e.getPvI d  =functio n )  {return o )  ?" "  :goldlog.pvi d  }} ,functio n(  , )  {"use strict  ;va  n  =131542391  ;e.has h  =functio n(  , )  {var   , , r =  e|  | ;fo r o  =t.lengt h  -1 ;  o> =  ;o--) a  =t.charCodeAt(o ,  r^ =  r<  < ) + a  +  r>  >2  ;va  i  =(214748364 7  &r).toString(16  ;retur  i  }} ,functio n(  ,  , )  {"use strict  ;function o( ) {i f(! )retur n"  ;va  e  =decodeURIComponent(t).match(/cache=\w+/  ;retur   e& &  1== =e.lengt h  ?e[0].split("=")[ ]  :voi  0  }va  a  =n(3 , r  =windo  ;e.sendIm g  =functio n(  , )  {va  n  =new Imag , i  ="_img_ "  +Math.random(  ;r[ ]  =  ;va  s  =functio n ) {i f(r[i )tr y  {delete r[ ] }catc h( )  {r[ ]  =voi  0  }  ;return n.onloa d  =functio n )  {s  )}  ,n.onerro r  =functio n )  {a.do_tracker_jserror  {messag  :"loadError  ,erro  :"  ,filenam  :"sendImg  ,logi  :o(  )}  ,s  )}  ,setTimeout(functio n )  {window[ ]&  &(a.do_tracker_jserror  {messag  :"loadTimeout  ,erro  :  ,filenam  :"sendImg  ,logi  :o(  )}  ,window[i].sr c ="  ,s()  )} ,  e|  |3e3)  ,n.sr c  = , n  =nul ,  t}  ,e.postDat a  =functio n(  , )  {var  ;i f("string  "=  =typeof  ) n  = ;els e {fo r(var o in e )["cna"].indexOf(  )== =-  1&  &(e[ ]  =encodeURIComponent(e[o]) ; n  =JSON.stringify( )  }return navigator.sendBeacon(  ,n , t }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(9 , a  =n(26 , r  =n(33 , i  =n(24 , s  =n(89 , u  =n(90 , c  =n(4 , l  =functio n )  {  ;l.prototype.ru n  =functio n(  ,  , )  {va  l  =new   ;l.init  {middlewar  :[  ,confi  :  ,plugin  :c.plugins_p  v}  ;va  p  =l.run( , g  =new c.contex  ;g.userdat a  =  ,g.logge r  =i.logge  ;va  f =  {contex  :  ,pubsu  :a.getGoldlogVal("aplus_pubsub"  ,pubsubTyp  :"pv  " , d  =new   ;d.create(f  ,d.wrap(  ,functio n )  {var  e  =f.context.can_to_sendp v|  |{}  ;f.context.statu s  ="YES  "== =e.fla g  ?"complete "  :"skip  ,f.context.metho d  =t.metho  d|  |"GET  ,r.doPubMsg(["mw_change_pv  ,f.context] ,  n&  &n.fn_after_p  v&  &o.each(n.fn_after_p  ,functio n( )  {e(window.goldlo  ,t  )}  )} )( )}  ,e.SendP V = l} ,functio n(  ,  , )  {"use strict  ;va  o  =n(9 , a  =n(26 , r  =n(33 , i  =n(24 , s  =n(89 , u  =n(90 , c  =n(4 , l  =functio n )  {  ;l.prototype.ru n  =functio n(  ,  ,  , )  {va  p  =new   ;p.init  {middlewar  :[  ,confi  :  ,plugin  :c.plugins_prep  v}  ;va  g  =p.run( , f  =new c.context_prep  ;f.userdat a  =  ,f.logge r  =i.logge  ;va  d =  {contex  :  ,pubsu  :a.getGoldlogVal("aplus_pubsub"  ,pubsubTyp  :"prepv  " , _  =new   ;_.create(d  ,_.wrap(  ,functio n )  {d.context.statu s ="complete  ,r.doPubMsg(["mw_change_prepv  ,d.context] , n&  &n.fn_after_recor  d&  &o.each(n.fn_after_p  ,functio n( )  {e(window.goldlo  ,t )})  ,a.setGoldlogVal("prepv_context  ,f  ,"function  "=  =typeo   l&  &l  )} )( )}  ,e.SendPreP V = l} ,functio n(  ,  , )  {"use strict  ;!functio n )  {va  t  =window.goldlo g|  |(window.goldlo g  ={}) , e  =n(97  ;t.aplus_pubsu  b|  |(t.aplus_pubsu b  =e.create()  ) }(  )} ,functio n(  ,  , )  {"use strict  ;function o( ) {i f("function "!  =typeof  )throw new TypeError t  +" is not a function"  ;retur  t  }va  a  =n(84 , r  =functio n( ) {fo r(va  e  =t.lengt , n  =new Array e  -1 , o  = ; o  <  ;o++ )n o  - ]  =t[o  ;retur   n , i  =a.extend  {creat  :functio n( )  {va  e  =new thi ;fo r(var n in t )e[ ]  =t[n  ;return e.handler s  =[  ,e.pub s  ={ ,  e}  ,setHandler :functio n( )  {this.handler s =  t}  ,subscrib :functio n(  , )  {o(e  ;va  n  =thi , a  =n.pub s|  |{ , r  =a[  ]|  |[ ;i f( )fo r(va  i  = ; i  <r.lengt  ;i++ )  {va  s  =r[i](  ;e.apply(  , )  }va  u  =n.handler s|  |[  ;return t i   u|  |(u[ ]  =[]  ,u[t].push(e  ,n.setHandlers(u ,  n}  ,subscribeOnc :functio n(  , )  {o(e  ;var  , a  =thi  ;return this.subscribe.call(thi  , , n  =functio n )  {a.unsubscribe.call(  ,  ,n)  ;var  o  =Array.prototype.slice.call(arguments)  ;e.apply(  ,  )}  ,thi  s}  ,unsubscrib :functio n(  , )  {o(e  ;va  n  =this.handlers[t ;i f(! )return thi ;i f("object  "=  =typeo   n&  &n.lengt h  > ) {fo r(va  a  = ; a  <n.lengt  ;a++ )  {va  r  =e.toString( , i  =n[a].toString( ;  r== =  i&  &n.splice(  , )  }this.handlers[ ] = n }else delete this.handlers[t  ;return thi  s}  ,publis :functio n( )  {va  e  =r(arguments , n  =this.handler s|  |[ , o  =n[ ]  ?n[t].lengt   : ;i f o  > )fo r(va  a  = ; a  <  ;a++ )  {va  i  =n[t][a ;  i&  &"function "= =typeo   i&  &i.apply(thi  , )  }return thi  s}  ,cachePub :functio n( )  {va  e  =this.pub s|  |{ , n  =r(arguments  ;e[  ]|  |(e[ ]  =[]  ,e[t].push(functio n )  {return   n ) }}  ;t.export s = i} ,functio n(  ,  , )  {"use strict  ;va  o  =n(41 , a  =n(33 , r  =n(51 , i  =n(4  ;e.ini t  =functio n )  {i.initLoad.init_watchGoldlogQueue("metaQueue"  ,n(99)(functio n )  {var  t  =goldlog._ $|  |{ , e  =navigator.userAgent  ;e.match(/AliApp\(([A-Z\-]+)\/([\d\.]+)\)/  )&  &(t.is_ali_ap p  =!0)  ,i.utilPvid.makePVId(  ;va  s  =n(49  ;t.sp m  =  ,t.is_WindVan e  =o.is_WindVan  ;va  u  =t.meta_inf  ;s.init(goldlo  ,  ,functio n )  {i.initLoad.init_watchGoldlogQueue()  ;var  t  =n(4).spmExceptio , e =t.is_exception ; e|  |n(102)  ;var  , r  ="complete ; o  =["aplusReady  ,r  ,a.doPubMsg(o  ,a.doCachePubs(  )})  ,goldlog.beforeSendPV(functio n(  , )  {i f(t.page_ur l =location.hre  ,t.page_referre r =r.getRefer(  ,n.is_aut o&  &"1  "== =u["aplus-manual-pv" )retur n!  1})  ,goldlog.afterSendPV(functio n )  {window.g_SP M&  &(g_SPM._current_sp m  =" )})  ,i.is_auto_p v  +" "= ="true  "&  &goldlog.sendPV  {is_aut  :  0}  ,i.initLoad.run(  ,i.beforeUnload.run )} ) }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(33 , a  =n(100  ;t.export s  =functio n( )  {va  e  =n(101).AplusIni , r  =new   ;r.run({  ,functio n( )  {o.doPubMsg(["aplusInitContext  ,e]  ,o.doCachePubs(["aplusInitContext  ,e]  ,a()  ,"function "=  =typeo   t&  &t  ) )  }} ,functio n(  ,  , )  {"use strict  ;function o( )  {va  e  =" ;switc h(! ) {case r.isJSON(t) : e  ="settled  ;brea ;case r.isString(t) : e  =  ;brea ;case r.isNumber(t) : e = t  +"  ;brea ;default : e  ="settled  " }retur  e  }va  a  =n(26 , r  =n(9  ;t.export s  =functio n ) {tr y  {va  t  =a.getGoldlogVal("hasSendMIC" , e  =Math.floor(9 9  *Math.random() ;i f  t| |  1!= = )retur  ;va  n  =goldlo g&  &goldlog._ $  ?goldlog._$.meta_inf   : {} , i  =" ;fo r(var s in n  )r.isEmpty(n[s  )|  | i = i  +"& " + s  +"= "  +o(n[s])  ;a.setGoldlogVal("hasSendMIC  ,!0  ,goldlog.record("/m.i.c  ,"OTHER  ,  ,"POST ) }catc h( ) { }  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(26 , a  =n(24 , r  =n(89 , i  =n(90 , s  =n(4 , u  =functio n )  {  ;u.prototype.ru n  =functio n(  , )  {va  n  =new   ;n.init  {middlewar  :[  ,confi  :  ,plugin  :s.aplus_ini  t}  ;va  u  =n.run( , c  =new s.contex  ;c.logge r  =a.logge  ;va  l =  {contex  :  ,pubsu  :o.getGoldlogVal("aplus_pubsub"  ,pubsubTyp  :"aplusinit  " , p  =new   ;p.create(l  ,p.wrap(  ,functio n )  {"function "=  =typeo   e&  &e(l.contex  )})  )}  ,e.AplusIni t =  u} ,functio n(  ,  , )  {"use strict  ;!functio n )  {var  , e  =n(9 , o  =n(26 , a  =n(103 , r  =functio n ) { t  =!  ;va  n  =window.g_SP M|  |{  ;e.isFunction(n.getPara  )|  |e.isFunction(n.sp  )|  |a.run  ) , i  =window.goldlo  g|  |(window.goldlo g  ={}  ;i.aplus_pubsu  b&  &"function "= =typeof i.aplus_pubsub.publis  h&  &i.aplus_pubsub.subscribe("goldlogReady  ,functio n( )  {"complete "!= = e| |  t|  |r )}  ;va  s  = , u  =functio n ) {i f(! )  {va  e  =o.getGoldlogVal("_$  )|  |{  ;"complete  "== =e.statu s  ?r ) : s  <5  0&  &(++  ,setTimeout(functio n )  {u  )  ,200 )  }  ;u  ) }( )} ,functio n(  ,  , )  {"use strict  ;va  o  =n(31 , a  =n(26 , r  =n(104 , i  =n(108 , s  =n(109 , u  =n(110 , c  =n(111  ;e.ru n  =functio n )  {va  t  =a.getGoldlogVal("_$  )|  |{ , e  =t.meta_inf , n  =e["aplus-touch" , l =  {isTouchEnable  :o.isTouch  )|  |"1  "== = n|  |"tap  "== =  ,isTermina  :t.is_termina l|  |/WindVane/i.test(navigator.userAgen  )  ;window.g_SP M =  {spm_d_for_a  :{  ,resetModul  :r.spm_resetModul  ,anchorBeaco  :r.spm_spmAnchorCh  ,getPara  :r.spm_getSPMPara  ,sp  :r.spm_forwa  p  ,i.run(l  ,s.run(l  ,u.run(l  ,c.run( ) }} ,functio n(  ,  , )  {"use strict  ;function o( ) {i f  t& &  1== =t.nodeTyp )  {s.tryToRemoveAttribute(  ,"data-spm-max-idx"  ,s.tryToRemoveAttribute(  ,"data-auto-spmd-max-idx" ;fo r(va  e  =u.nodeListToArray(t.getElementsByTagName("a") , n  =u.nodeListToArray(t.getElementsByTagName("area") , o  =e.concat(n , a  = ; a  <o.lengt  ;a++ )s.tryToRemoveAttribute(o[a  , ) }  }function a(  , )  {va  n  =s.tryToGetAttribute(  ,l , o  ="0 ;i f  n&  &c.spm_isSPMAnchorIdMatch(n )c.spm_anchorEnsureSPMId_inHref(  ,  ,e ;els e  {va  a  =c.spm_spmGetParentSPMId(t.parentNode ;i f o  =a.spm_  ,! )return void c.spm_dealNoneSPMLink(  ,e  ;c.spm_initSPMModule(a.e  ,  ,e  ,c.spm_initSPMModule(a.e  ,  ,  ,! ) }  }function r( )  {var  , n  =t.tagNam  ;"A  "!= =  n&  &"AREA  "!= = n ? e  =c.spm_getParamForAD( )  :(a(  ,!0 , e  =s.tryToGetAttribute(  ,l) ,  e|  | e  ="0.0.0.0"  ;va  o  =goldlog.getPvId( ;  4== =e.split(".").lengt  h& &  o&  &  e+ =". "  +o)  ,"A  "!= =  n&  &"AREA  "!= =  n&  &s.tryToSetAttribute(  ,  ,e , e  =e.split("."  ;va  r =  {  :e[0  ,  :e[1  ,  :e[2  ,  :e[  ]  ;return e[  ]&  &(r e  =e[4] , r  }function i(  , )  {va  n  =r(t , o  =[n.  ,n.  ,n.  ,n.d  ;retur   e&  &n  e&  &o.push(n.e  ,o.join(". )  }va  s  =n(28 , u  =n(19 , c  =n(105 , l  ="data-spm-anchor-id  ;e.spm_resetModul e  =  ,e.spm_spmAnchorCh k  =  ,e.spm_getSPMPara m  =  ,e.spm_forwa p =  i} ,functio n(  ,  , )  {"use strict  ;function o( ) {fo r(var  , n  ="data-spm-ab-max-idx , o  ={ , a  =" ;  t&  &t.tagNam e! =  j&  &t.tagNam e!  =x; ) {i f(  a&  & a  =v.tryToGetAttribute(  ,"data-spm-ab") ) { e  =parseInt(v.tryToGetAttribute(  ,n  )|  |  ,o.a_spm_a b  =  ,o.ab_id x  =++  ,t.setAttribute(  ,e ;brea k }i f(v.tryToGetAttribute(  ,"data-spm" )brea ; t  =t.parentNod e  }retur  o  }function a )  {va  t  =b.getGoldlogVal("_$  )|  |{ , e  =t.sp m|  |{ , n  =e.dat  a|  |{ ;retur n[n.  ,n.b].join(". )  }function r( )  {va  e  =a( , n  =t.split("."  ;return n[ ]  +". "  +n[ ]= = e  }function i(  , ) {i f(!goldlog.isUT4Aplu  s|  |"UT4Aplus  "!= =goldlog.getMetaInfo("aplus-toUT" ) {i f  t&  &/&?\bspm=[^&#]*/.test(  )&  & t  =t.replace(/&?\bspm=[^&#]*/  ,"").replace(/&{2,}/  ,"&").replace(/\?&  ,"?").replace(/\?$  ,"")  ,! )return   ;var   ,  ,  ,  ,  ,  , , c  ="&  ;t.indexOf("#  )!= =-  1&  & a  =t.split("#" , t  =a.shift( , o  =a.join("#") , r  =t.split("?" , i  =r.lengt h  - , a  =r[0].split("//" , a  =a[a.lengt h  -1].split("/" , s  =a.lengt h > 1  ?a.pop )  :" , i >  0&  & n  =r.pop( , t  =r.join("?") ,  n& & i >  1&  &n.indexOf("& )= =-  1&  &n.indexOf("%  )!= =-  1&  & c  ="%26"  ;va  l  =" ;i f t = t  +"?spm= " + l + e  + n ? c + n  :" )  + o  ?"# " + o  :"" , u  =h.isContain(  ,". )  ?s.split(".").pop().toLowerCase )  :" ) {i f  {pn  :  ,jp  :  ,jpe  :  ,gi  :  ,bm  :  ,sw :  1}.hasOwnProperty(u )return   ;  n& &  i< =  1&  &  o| |  {ht  :  ,htm  :  ,ph  :  ,asp  :  ,shtm  :  ,xhtm :  1}.hasOwnProperty(  )|  |  t+ ="&file= "  +s) )  }retur  t }  }function s(  , ) {i f(!goldlog.isUT4Aplu  s|  |"UT4Aplus  "!= =goldlog.getMetaInfo("aplus-toUT" )  {var  , o  =t.innerHTM ;  o&  &o.indexOf("< )= =-  1&  & n  =document.createElement("b"  ,n.style.displa y  ="none  ,t.appendChild(n))  ,t.hre f  = ,  n&  &t.removeChild( ) }  }function u(  ,  , ) {i f(!/^0\.0\.?/.test(e )  {va  o  =y.tryToGetHref(t , r  =a( , u  =w.is_ignore_spm(t ;i f( )  {va  c  =_.param2obj(o ;i f(c.sp  m&  &c.spm.spli )fo r(va  l  =c.spm.split("." , p  =e.split("." , g  = ; g <  3&  &p[  ]== =l[g  ;g++)  2== =  g&  &l[  ]&  & e  =c.sp )  }t.setAttribute("data-spm-anchor-id  ,e  ;va  f  =goldlog.getPvId( ;  f&  &  e+ =". "  +f  ;va  d  ="0.0  ;  f| |  r& & r!  =d )&  &  u| |  n|  | o  =i(  ,e  )&  &s(  ,o ) }  }function c( )  {va  e  =v.tryToGetAttribute(  ,P , n  =m.parseSemicolonContent(  )|  |{  ;retur  n  }function l( )  {var  , n  =b.getGoldlogVal("_$  )|  |{ , o  =n.spm.dat ;retur n"0  "=  =o  a&  &"0 "= =o b ? e  ="0 "  : e  =v.tryToGetAttribute(  ,T ,  e&  &e.match(/^d\w+$  )|  | e  ="") , e  }function p(  , ) {fo r(va  n  =[ , o  =m.nodeListToArray(t.getElementsByTagName("a") , a  =m.nodeListToArray(t.getElementsByTagName("area") , r  =o.concat(a , i  = ; i  <r.lengt  ;i++ ) {fo r(va  s  =! , u  =r[i , c  =r[i  ; u  =u.parentNod  )& & u! =t;)i f(v.tryToGetAttribute(  ,T ) { s  =! ;brea k }i f(! )  {va  l  =v.tryToGetAttribute(  ,A ;  e|  |"t  "== = l ?  e&  &"t  "== =  l&  &n.push( )  :n.push( ) }  }retur  n  }function g( ) {fo r(var  , n  = ;  t&  &t.tagNam  e!= =  j&  &t.tagNam  e!= =  x&  &t.getAttribute; )  {va  o  =t.getAttribute(T ;i f( ) { e  = , n  = ;brea k }i f(! t  =t.parentNode )brea k  }retur   e&  &!/^[\w\-\.\/]+$/.test(  )&  & e  ="0" ,  {spm_  :  ,e : n }  }function f(  , )  {va  n  =paren t!= =sel ;i f(  n&  & )retur n[  ,e].join("." ;i f  t&  & )retur  t  +".i "  +  ;va  o  =window.g_SP M|  |(window.g_SP M  ={}) , a  =o.spm_d_for_a  d|  |{ ;retur n"number  "=  =typeof a[ ]  ?a[t ]+ +  :a[ ]  =  ,o.spm_d_for_a d  = , t  +".i "  +a[ ]  }function d( )  {var   ;retur   t&  & e  =t.match(/&?\bspm=([^&#]*)/ )  ?e[ ]  :" "  }va  _  =n(18 , h  =n(9 , m  =n(19 , v  =n(28 , b  =n(26 , y  =n(106 , w  =n(107 , x  ="BODY , j  ="HTML , T  ="data-spm , P  ="data-spm-click , A  ="data-auto-spmd , S  ="data-spm-anchor-id  ;e.getGlobalSPMI d  =  ,e.spm_isSPMAnchorIdMatc h  =  ,e.spm_updateHrefWithSPMI d  =  ,e.spm_writeHre f  =  ,e.spm_anchorEnsureSPMId_inHre f  =  ,e.getElDataSp m  =  ,e.spm_getAnchor4thId_spm_ d  =  ,e.spm_getModuleLink s  =  ,e.spm_spmGetParentSPMI d  =  ,e.get_spm_for_a d  =  ,e.spm_getParamForA D  =functio n( )  {va  e  =v.tryToGetAttribute(  ,S ;i f(! )  {va  n  =a( , o  =t.parentNod ;i f(! )retur n"  ;va  r  =c(  )|  |{ , i  =r.locai d|  |" , s  =t.getAttribute(  )|  | , u  =g(o , l  =u.spm_  c|  | ;  l&  &l.indexOf(".  )!= =-  1&  & l  =l.split("." , l  =l[l.lengt h  -1]) , e  =f n  +". "  +  , )  }retur   e}  ,e.spm_initSPMModul e  =functio n(  ,  ,  , )  {var  ;i f e =  e|  |t.getAttribute("data-spm  )|  |" )  {va  g  =p(  ,i ;i f  0!= =g.lengt )  {va  f  =e.split("." , d  =h.isStartWith(  ,"110  )& & 3= =f.lengt ;  d&  & s  =f[2  ,f[ ]  ="w "  +  s|  |"0" , e  =f.join(".")  ;va  _  =a( ;i f  _&  &_.match(/^[\w\-\*]+(\.[\w\-\*\/]+)?$/ )i f(h.isContain(  ,"." ) {i f(!h.isStartWith(  ,_ )  {va  m  =_.split("." ; f  =e.split("." ;fo r(va  b  = ; b  <m.lengt  ;b++ )f[ ]  =m[b ; e  =f.join(". ) } }else h.isContain(  ,".  )|  |  _+ =".0") , e = _  +". "  + ;i f(e.matc  h&  &e.match(/^[\w\-\*]+\.[\w\-\*\/]+\.[\w\-\*\/]+$/ ) {fo r(va  w  ="data-auto-spmd-max-idx , x  ="data-spm-max-idx , j = i ? w  : , T  =parseInt(v.tryToGetAttribute(  ,j  )|  | , A  = ; A  <g.lengt  ;A++ )  {va  k  =g[A , E  =y.tryToGetHref(k , U  =v.tryToGetAttribute(  ,P ;i f  i| |  E|  | ) {  d&  &k.setAttribute("data-spm-wangpu-module-id  ,s  ;va  M  =k.getAttribute(S ;i f  M&  &r(M )u(  ,  ,n ;els e  {var   , , N  =o(k.parentNode  ;N.a_spm_a b  ? C  =N.a_spm_a , I  =N.ab_id )  : C  =void   ,T+ , I  =T  ;var  , V  =c(  )|  |{ , G  =V.locai d|  |" ; G ? O = G  : O  =l(  )|  | ,  i&  & O  ="at "  +((h.isNumber( )  ?1e 3  :"" ) +O))) , M = C ? e  +"- " + C  +". " + O : e  +". "  +  ,u(  ,  , ) } }  }t.setAttribute(  , ) } }  }}  ,e.spm_dealNoneSPMLin k  =functio n(  , )  {va  n  =goldlog.getMetaInfo("aplus-getspmcd" , o  =a( , r  =y.tryToGetHref(t , i  =d(r , c  =nul , p =  o& & 2= =o.split(".").lengt ;i f( )  {var  ;retur n"function  "=  =typeo   n&  & g  =n(  ,nul  ,o) , c =  g&  &"0  "!= =g.spm_ c  ?[  ,g.spm_  ,g.spm_ ]  :[  ,  ,l(  )|  |0  ,void u(  ,c.join("."  , ) }  r& &  i&  & r  =r.replace(/&?\bspm=[^&#]*/  ,"").replace(/&{2,}/  ,"&").replace(/\?&  ,"?").replace(/\?$  ,"").replace(/\?#  ,"#"  ,s(  ,r )  }} ,functio n(  ,  , )  {"use strict  ;va  o  =n(20  ;e.tryToGetHre f  =functio n( )  {var  ;tr y { e  =o.trim(t.getAttribute("href  ,2 ) }catc h( ) {  }retur   e|  |" "  }} ,functio n(  ,  , )  {"use strict  ;function o( ) {retur n!!  t&  &!!t.match(/^[^\?]*\balipay\.(?:com|net)\b/ )  }function a( ) {retur n!!  t&  &!!t.match(/^[^\?]*\balipay\.(?:com|net)\/.*\?.*\bsign=.*/ )  }function r( )  {va  e  =location.hre  ;retur   t&  &e.split("#")[  ]== =t.split("#")[ ]  }function i( ) {fo r(var   ; t  =t.parentNod  )&  &"BODY  "!= =t.tagName;)i f e  =u.tryToGetAttribute(  ,f )return  ;retur n" "  }function s( ) {fo r(va  e  =["mclick.simba.taobao.com  ,"click.simba.taobao.com  ,"click.tanx.com  ,"click.mz.simba.taobao.com  ,"click.tz.simba.taobao.com  ,"redirect.simba.taobao.com  ,"rdstat.tanx.com  ,"stat.simba.taobao.com  ,"s.click.taobao.com" , n  = ; n  <e.lengt  ;n++)i f(t.indexOf(e[n  )!= =- )retur n! ;retur n! 1  }va  u  =n(28 , c  =n(9 , l  =n(106 , p  =n(26 , g  =n(22 , f  ="data-spm-protocol  ;e.is_ignore_sp m  =functio n( )  {va  e  =p.getGoldlogVal("_$  )|  |{ , n  =e.meta_inf o|  |{ , d  =l.tryToGetHref(t , _  =i(t , h  =u.tryToGetAttribute(  ,f , m  ="i  "== =  h| |  _|  |n.spm_protocol ;i f(  d|  |s(d )retur n!  ;va  v  =r(  )|  |g.isStartWithProtocol(d.toLowerCase() , b  =o(  )|  |a(d , y =  v|  | ;retur n!  m|  |!c.isStartWith(  ,"#  )&  &!  )| | m  }} ,functio n(  ,  , )  {"use strict  ;function o(  ,  , )  {va  o  =u.parseSemicolonContent(  ,{  ,!0 , a  =o.gost r|  |" , r  =o.locai  d|  |" , g  =t.getAttribute("data-spm  )|  | , f  ="CLK , d  =o.goke  y|  |" , _  =p.spm_getSPMParam(t , h  =[_.  ,_.  ,_.  ,g].join("." , m = a  +". "  + ;  0!= =m.indexOf("/  )&  & m  ="/ "  +m  ;va  v  =[ , b  =["gostr  ,"locaid  ,"gmkey  ,"gokey  ,"spm-cnt  ,"cna" ;fo r(var y in o  )o.hasOwnProperty(  )&  &c.indexof(  ,  )== =-  1&  &v.push y  +"= "  +o[y]  ;v.push("_g_et= "  +n  ,v.push("autosend=1" ,  d&  &v.lengt h >  0&  &  d+ ="&") ,  d+ =v.lengt h > 0  ?v.join("& )  :"  ,goldlo  g&  &s.isFunction(goldlog.recordUdat )  ?goldlog.recordUdata(  ,  ,  ,"GET  ,functio n ) { )  :l.logger  {ms  :"goldlog.recordUdata is not function!  "}  ,i.tryToSetAttribute(  ,"data-spm-anchor-id  , )  }function a(  , )  {va  n  =  ;window.g_SP  M&  &(g_SPM._current_sp m  =p.spm_getSPMParam(e) ;fo r(var  ;  e&  &"HTML  "!= =e.tagName; ) { a  =i.tryToGetAttribute(  ,"data-spm-click" ; {i f( )  {o(  ,  ,"mousedown  "== =t.typ e  ?t.typ e  :"tap" ;brea k } e  =e.parentNod e } }i f(! )  {va  r  =g.getGlobalSPMId( , s  =goldlog.getMetaInfo("aplus-getspmcd"  ;"function  "=  =typeo   s&  &s(  ,  , ) }  }va  r  =n(79 , i  =n(28 , s  =n(9 , u  =n(19 , c  =n(12 , l  =n(24 , p  =n(104 , g  =n(105  ;e.ru n  =functio n( ) {  t&  &t.isTouchEnable d  ?r.on(documen  ,"tap  , )  :r.on(documen  ,"mousedown  , )  }} ,functio n(  ,  , )  {"use strict  ;function o ) {fo r(va  t  =document.getElementsByTagName("iframe" , e  = ; e  <t.lengt  ;e++ )  {va  n  =t[e , o  =r.tryToGetAttribute(  ,"data-spm-src" ;i f(!n.sr  c&  & )  {va  a  =s.spm_getSPMParam(n ;i f( )  {va  u  =[a.  ,a.  ,a.  ,a.d  ;a  e&  &u.push(a.e , a  =u.join("."  ,n.sr c  =i.spm_updateHrefWithSPMId(  , ) }else n.sr c = o } }  }function a )  {function t )  {e+ , e  >1  0&  & n  =3e3  ,o(  ,setTimeout(  , )  }va  e  = , n  =50  ;t )  }va  r  =n(28 , i  =n(105 , s  =n(104  ;e.ru n  =functio n( ) {  t&  &!t.isTermina  l&  &a )  }} ,functio n(  ,  , )  {"use strict  ;function o(  , ) {fo r(var  , o  =windo ;  e&  & n  =e.tagName); ) {i f("A  "== =  n|  |"AREA  "== = )  {r.spm_spmAnchorChk(  ,!1  ;va  a  =o.g_SP M|  |(o.g_SP M  ={}) , i  =a._current_sp m  =r.spm_getSPMParam(e , s  =[ ;tr y { s  =[i.  ,i.  ,i.  ,i.d  ;va  u  =i  e|  |goldlog.pvi d|  |" ;  u&  &s.push( ) }catc h( ) { }brea k }i f("BODY  "= =  n|  |"HTML "= = )brea ; e  =e.parentNod e }  }va  a  =n(79 , r  =n(104  ;e.ru n  =functio n( )  {va  e  =documen ;  t&  &t.isTouchEnable d  ?a.on(  ,"tapSpm  , )  :(a.on(  ,"mousedown  ,o  ,a.on(  ,"keydown  ,o )  }} ,functio n(  ,  , )  {"use strict  ;function o(  , ) {i f  e|  | e  =p  ,p.evaluat )return e.evaluate(  ,  ,nul  ,  ,null).singleNodeValu ;fo r(var  , a  =t.split("/"  ;  n&  &a.lengt h  >0;) n  =a.shift(  ;var  , i  =/^.+?\[@id='(.+?)']$/ , s  =/^(.+?)\[(\d+)]$/ ;retur n r  =n.match(i ) ? e  =e.getElementById(r[1 )  : r  =n.match(s  )&  & e  =e.getElementsByTagName(r[1])[parseInt(r[2 )  -1] , e ?  0== =a.lengt h ? e  :o(a.join("/"  , )  :nul ;  }function a )  {va  t  ={ ;fo r(var e in l )i f(l.hasOwnProperty(e )  {va  n  =o(e ;i f( )  {t[ ]  =  ;va  a  =l[e , r  ="A  "== =n.tagNam e ?a.spm   :a.spm  ;s.tryToSetAttribute(  ,"data-spm ,  r|  |" ) } }fo r(var i in t  )t.hasOwnProperty(  )&  &delete l[ ]  }function r ) {i f(  c&  &g.spmDat ) { c  =!  ;va  t  =g.spmData.dat ;i f  t&  &i.isArray(t ) {fo r(va  e  = ; e  <t.lengt  ;e++ )  {va  n  =t[e , o  =n.xpat ; o  =o.replace(/^id\('(.+?)'\)(.*)/  ,"//*[@id='$1']$2"  ,l[ ] =  {spm  :n.spm  ,spm  :n.spm d }  }a ) } }  }va  i  =n(9 , s  =n(28 , u  =n(79 , c  =! , l  ={ , p  =documen , g  =windo  ;e.wh_updateXPathElement s  =  ,e.init_w h  =  ,e.ru n  =functio n )  {u.DOMReady(functio n )  {r  ) )  }} ,functio n(  ,  , )  {"use strict  ;function o )  {var  , e  =p.getParamFromUrl("utparamcnt  ,location.href ;i f( )tr y { t = e  =JSON.parse(decodeURIComponent(e ) }catc h( ) {  }retur  t  }function a )  {var  , e  =d["aplus-utparam" ;i f( )i f("object  "=  =typeof  ) t  = ;else tr y { t  =JSON.parse( ) }catc h( ) {  }retur  t  }va  r  =n(11 , i  =n(51 , s  =n(52 , u  =n(33 , c  =n(55 , l  =n(9 , p  =n(50 , g  =n(4 , f  =n(27 , d  =f.getInfo( , _  ="complete  ;e.initGoldlo g  =functio n( )  {va  e  =window.goldlo g|  |(window.goldlo g  ={}) , n  =g.goldlog_path.run.create(  ;e._ready_tim e  =(new Date).getTime( ;fo r(var p in n  )e[ ]  =n[p  ;va  f  =/TB\-PD/i.test(navigator.userAgent , h  =e._ $  =e._ $|  |{ , m  =o( , v  =a( ;retur n"object  "=  =typeo   m&  &  v&  & m  =l.assign(  ,v)  ,d["aplus-utparam ]  =m  ,h.meta_inf o  =  ,h.is_termina l  ="aplus_wap  "== =g.script_nam  e| |  f|  |"1 "= =d["aplus-terminal"  ,h.send_pv_coun t  =  ,h.statu s  =  ,h.script_nam e  =g.script_nam  ,h.sp m =  {dat  :  }  ,h.page_referre r  =i.getRefer(  ,h.pageLoadTim e  =(new Date).getTime(  ,e.lve r  =g.lve  ,e.nameStorag e  =s.nameStorag  ,c.haveNativeFlagInUA(  ,u.doPubMsg(["goldlogReady  ,_]  ,u.doCachePubs(["goldlogReady  ,_]  ,u.publishCNA(r.getCookie("cna")  ,t.init( , e  }}]  ;!functio n( )  {function e( ) {i f(r[n )return r[n].export  ;va  a  =r[ ] =  {export  :{  ,i  :  ,loade  :  1  ;return t[n].call(a.export  ,  ,a.export  ,e  ,a.loade d  =!  ,a.export s  }va  r  ={  ;return e m  =  ,e c  =  ,e p  ="  ,e(  ) }([functio n(  , )  {"use strict" ;!functio n )  {function t(  ,  , )  {t[_]( h  ?"on "  :" )  +  ,functio n( ) { t =  t|  |s.event  ;var  e  =t.targe t|  |t.srcElement  ;r(  , )  ,!1 ) }function e ) {retur  n/&?\bsp m =[^&# ] */.test(location.href ) ?location.href.match( /&?\bsp m =[^&# ] */gi)[0].split("=")[1 ] :" " }function r(t ,e ) {i f( t& & /&?\bsp m =[^&# ] */.test(t )& &( t =t.replace( /&?\bsp m =[^&# ] */g ,"").replace( / & {2 , } /  ,"&").replace(/\?&  ,"?").replace(/\?$  ,"")  ,!e )return   ;var   ,  ,  ,  ,  ,  , , s  ="& ;i f(t.indexOf("# )!  =-  1&  & a  =t.split("#" , t  =a.shift( , n  =a.join("#") , i  =t.split("?" , o  =i.lengt h  - , a  =i[0].split("//" , a  =a[a.lengt h  -1].split("/" , c  =a.lengt h > 1  ?a.pop )  :" , o >  0&  & r  =i.pop( , t  =i.join("?") ,  r& & o >  1&  &r.indexOf("& )= =-  1&  &r.indexOf("% )! =-  1&  & s  ="%26" , t = t  +"?spm= " + e  + r ? s + r  :" )  + n  ?"# " + n  :"" , p  =c.indexOf(". )  >- 1  ?c.split(".").pop().toLowerCase )  :" ) {i f  {pn  :  ,jp  :  ,jpe  :  ,gi  :  ,bm  :  ,sw :  1}.hasOwnProperty(p )return   ;  r& &  o< =  1&  &  n| |  {ht  :  ,htm  :  ,ph :  1}.hasOwnProperty(  )|  |  t+ ="&file= "  +c) )  }retur  t }function n( )  {function e( )  {retur  t  =t.replace(/refpos[=(%3D)]\w*/g  ,c).replace(  ,"%3D " + n  +"%26 "  +a.replace("=  ,"%3D")).replace(  ,n  ,a.lengt h >  0&  &  t+ ="& "  +a) , t  }va  r  =window.location.hre , n  =r.match(/mm_\d{0,24}_\d{0,24}_\d{0,24}/i , a  =r.match(/[&\?](pvid=[^&]*)/i , i  =new RegExp("%3Dmm_\\d+_\\d+_\\d+  ,"ig" , o  =new RegExp("mm_\\d+_\\d+_\\d+  ,"ig" ; a =  a&  &a[ ]  ?a[ ]  :"  ;va  c  =r.match(/(refpos=(\d{0,24}_\d{0,24}_\d{0,24})?(,[a-z]+)?)(,[a-z]+)?/i  ;retur  c =  c&  &c[ ]  ?c[ ]  :" , n  ? n  =n[0  ,e(t ) : t  }function a( )  {va  r  =s.KISS ; r  ?r.ready( )  :s.jQuer y  ?jQuery(m).ready( )  :"complete  "== =m.readyStat e  ?e )  :t(  ,"load  , )  }function i(  , )  {retur   t&  &t.getAttribut e  ?t.getAttribute(  )|  |" "  :" "  }function o( ) {i f( )  {var  , r  =g.lengt ;fo r e  =0 ; e  <  ;e++)i f(t.indexOf(g[e )  >- )retur n! ;retur n! 1 }  }function c(  , ) {i f  t&  &/&?\bspm=[^&#]*/.test(  )&  & t  =t.replace(/&?\bspm=[^&#]*/  ,"").replace(/&{2,}/  ,"&").replace(/\?&  ,"?").replace(/\?$  ,"")  ,! )return   ;var   ,  ,  ,  ,  ,  , , s  ="& ;i f(t.indexOf("# )!  =-  1&  & a  =t.split("#" , t  =a.shift( , n  =a.join("#") , i  =t.split("?" , o  =i.lengt h  - , a  =i[0].split("//" , a  =a[a.lengt h  -1].split("/" , c  =a.lengt h > 1  ?a.pop )  :" , o >  0&  & r  =i.pop( , t  =i.join("?") ,  r& & o >  1&  &r.indexOf("& )= =-  1&  &r.indexOf("% )! =-  1&  & s  ="%26" , t = t  +"?spm= " + e  + r ? s + r  :" )  + n  ?"# " + n  :"" , p  =c.indexOf(". )  >- 1  ?c.split(".").pop().toLowerCase )  :" ) {i f  {pn  :  ,jp  :  ,jpe  :  ,gi  :  ,bm  :  ,sw :  1}.hasOwnProperty(p )return   ;  r& &  o< =  1&  &  n| |  {ht  :  ,htm  :  ,shtm  :  ,ph :  1}.hasOwnProperty(  )|  |  t+ ="&__file= "  +c) )  }retur  t  }function p( ) {i f(o(t.href )  {va  r  =i(  ,u ;i f(! )  {va  n  =l()(t , a  =[n.  ,n.  ,n.  ,n.d].join("."  ;n  e&  &  n+ =". "  +n.e) ,  d&  & a  =[n  a|  |"0  ,n  b|  |"0  ,n  c|  |"0  ,n  d|  |"0"].join("." , a  =(e  )|  |"0.0.0.0.0 )  +"_ "  +a  ,t.hre f  =c(t.hre  ,a  ,t.setAttribute(  , ) } }  }va  s  =windo , m  =documen ;i f  1!= =s.aplus_spmac )  {s.aplus_spmac t  =  ;va  f  =functio n ) {retur n  {  :  ,b  :  ,c  :  ,d  :  ,e : 0  } , l  =functio n )  {return s.g_SP  M&  &s.g_SPM.getPara m  ?s.g_SPM.getPara  :  f} , d  =! ;tr y { d  =self.locatio n!  =top.locatio n }catc h( ) {  }va  u  ="data-spm-act-id , g  =["mclick.simba.taobao.com  ,"click.simba.taobao.com  ,"click.tanx.com  ,"click.mz.simba.taobao.com  ,"click.tz.simba.taobao.com  ,"redirect.simba.taobao.com  ,"rdstat.tanx.com  ,"stat.simba.taobao.com  ,"s.click.taobao.com" , h  =!!m.attachEven , b  ="attachEvent , v  ="addEventListener , _ = h ? b  :  ;t(  ,"mousedown  ,functio n(  , )  {fo r(var  , n =0 ; e&  & r  =e.tagName); ) {i f("A  "= =  r|  |"AREA "= = )  {p(e ;brea k }i f("BODY  "= =  r|  |"HTML "= = )brea ; e  =e.parentNod ,  n+ = 1  }})  ,a(functio n )  {fo r(var   , , o =document.getElementsByTagName("iframe" , c =0 ;  <o.length  ;c+ ) { t  =i(o[c  ,"mmsrc" , a  =i(o[c  ,"mmworked"  ;va  p  =l()(o[c] , s  =[p  a|  |"0  ,p  b|  |"0  ,p  c|  |"0  ,p  d|  |"0  ,p  e|  |"0"].join("." ;  t&  & a  ?  d&  & s  =[p  a|  |"0  ,p  b|  |"0  ,p  c|  |"0  ,p  d|  |"0"].join("." , s  =e )  +"_ "  +s  ,o[c].sr c  =r(n(t  ,s  ,o[c].setAttribute("mmworked  ,"mmworked") )  :o[c].setAttribute(  , ) }} ) }}( )}]);</script>
  <script>(function () { try { if (window.aplusPageIdSetComplete || /AliApp/i.test(navigator.userAgent)) { return; } var get_cookie = function (sName) { var sRE = "(?:; )?" + sName + "=([^;]*);?"; var oRE = new RegExp(sRE); if (oRE.test(document.cookie)) { var str = decodeURIComponent(RegExp["$1"]) || ""; if (str.trim().length > 0) { return str; } else { return "-"; } } else { return "-"; } }; var getRand = function () { var page_id = get_cookie("cna") || "001"; page_id = page_id.toLowerCase().replace(/[^a-z\d]/g, ""); page_id = page_id.substring(0, 16); var d = new Date().getTime(); var randend = [page_id, d.toString(16)].join(""); for (var i = 1; i < 10; i++) { var _r = parseInt(Math.round(Math.random() * 10000000000), 10).toString(16); randend += _r; } randend = randend.substr(0, 42); return randend; }; var pageid = getRand(); var aq = window.aplus_queue || (window.aplus_queue = []); aq.push({ action: "aplus.appendMetaInfo", arguments: ["aplus-cpvdata", { pageid: pageid }], }); aq.push({ action: "aplus.appendMetaInfo", arguments: ["aplus-exdata", { st_page_id: pageid }], }); var gq = window.goldlog_queue || (window.goldlog_queue = []); gq.push({ action: "goldlog.appendMetaInfo", arguments: ["aplus-cpvdata", { pageid: pageid }], }); gq.push({ action: "goldlog.appendMetaInfo", arguments: ["aplus-exdata", { st_page_id: pageid }], }); window.aplusPageIdSetComplete = true; } catch (err) { console.error(err); } })();</script>

  <script
    type="text/javascript">var timings = { start: Date.now(), }; var dataLayer = window.dataLayer || []; var pdpTrackingData = '{"pdt_category":["Televisi & Video"],"pagetype":"pdp","pdt_discount":"","pdt_photo":"https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png","v_voya":1,"brand_name":"Samsung","brand_id":"842","pdt_sku":3642482616,"core":{"country":"ID","layoutType":"desktop","language":"in","currencyCode":"IDR"},"seller_name":"","pdt_simplesku":6108584955,"pdt_name":"<?php echo $BRANDS ?>: Link Situs Terpercaya Dengan Layanan Fast Respond","page":{"regCategoryId":"300300002584","xParams":"_p_typ=pdp&_p_ispdp=1&_p_item=3642482616_ID-6108584955&_p_prod=3642482616&_p_sku=6108584955&_p_slr="},"supplier_id":"","pdt_price":"Rp2.699.000"}'; try { pdpTrackingData = JSON.parse(pdpTrackingData); pdpTrackingData.v_voya = false; dataLayer.push(pdpTrackingData); dataLayer.push({ gtm_enable: false, v_voya: false, }); } catch (e) { if (window.console) { console.log(e); } } var siteNameForApluPluginLoader = "Lazada";</script>


  <!-- csrf -->
  <meta name="X-CSRF-TOKEN" id="X-CSRF-TOKEN" content="eb3380311eeee">

  <style>
    a strong {
      color: red
    }

    ul {
      list-style: initial;
      margin-inline-start: 20px
    }

    p {
      margin-block-start: 1em;
      margin-block-end: 1em
    }

    .lzd-header .lzd-logo-bar .logo-bar-content .lzd-logo-content img {
      width: 15em !important;
      object-fit: contain;
      aspect-ratio: 1/1
    }

    .lzd-links-bar {
      background: #fff !important
    }

    .lzd-logo-bar {
      background: #001032
    }

    #container,
    body {
      background: #000
    }

    #pdp-nav {
      background: #777
    }

    .lzd-header-banner {
      background-image: url(https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png) !important;
      background-size: contain !important;
      background-repeat: no-repeat
    }

    .add-to-cart-buy-now-btn {
      background-image: url() !important;
      background-size: contain !important
    }

    .add-to-cart-buy-now-btn:hover {
      filter: invert()
    }

    #root.pdp-block {
      background-color: #fff
    }

    .pdp-mod-common-image {
      transition: ease-in .3s
    }

    .pdp-mod-common-image:hover {
      border: solid 5px #991e1e
    }

    .pdp-block__product-detail {
      width: 100%
    }

    .content {
      margin-top: 2rem
    }

    .content p {
      margin-bottom: 1rem;
      font-size: 1.2rem
    }
  </style>
  <script async="" src="//gj.mmstat.com/eg.js?t=1742015475387"></script>
  <style>
    @font-face {
      font-family: 'nc_iconfont';
      src: url(//at.alicdn.com/t/font_1465353706_4784257.eot);
      src: url(//at.alicdn.com/t/font_1465353706_4784257.eot?#iefix) format('embedded-opentype'), url(//at.alicdn.com/t/font_1465353706_4784257.woff) format('woff'), url(//at.alicdn.com/t/font_1465353706_4784257.ttf) format('truetype'), url(//at.alicdn.com/t/font_1465353706_4784257.svg#iconfont) format('svg')
    }

    @font-face {
      font-family: 'ncpc_iconfont';
      src: url(//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.eot);
      src: url(//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.eot?#iefix) format('embedded-opentype'), url(//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.woff) format('woff'), url(//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.ttf) format('truetype'), url(//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.svg#ncpc_iconfont) format('svg')
    }

    .nc-container div#nc-loading-circle {
      background: transparent;
      width: 20px;
      height: 20px;
      display: inline-block;
      position: relative;
      vertical-align: middle
    }

    .nc-container div#nc-loading-circle .sk-circle {
      background: transparent;
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0
    }

    .nc-container #nc-loading-circle .sk-circle:before {
      content: '';
      display: block;
      margin: 0 auto;
      width: 15%;
      height: 15%;
      background-color: #818181;
      border-radius: 100%;
      -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
      animation: sk-circleFadeDelay 1.2s infinite ease-in-out both
    }

    .nc-container #nc-loading-circle .sk-circle2 {
      -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
      transform: rotate(30deg)
    }

    .nc-container #nc-loading-circle .sk-circle3 {
      -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
      transform: rotate(60deg)
    }

    .nc-container #nc-loading-circle .sk-circle4 {
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .nc-container #nc-loading-circle .sk-circle5 {
      -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
      transform: rotate(120deg)
    }

    .nc-container #nc-loading-circle .sk-circle6 {
      -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
      transform: rotate(150deg)
    }

    .nc-container #nc-loading-circle .sk-circle7 {
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    .nc-container #nc-loading-circle .sk-circle8 {
      -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
      transform: rotate(210deg)
    }

    .nc-container #nc-loading-circle .sk-circle9 {
      -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
      transform: rotate(240deg)
    }

    .nc-container #nc-loading-circle .sk-circle10 {
      -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
      transform: rotate(270deg)
    }

    .nc-container #nc-loading-circle .sk-circle11 {
      -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
      transform: rotate(300deg)
    }

    .nc-container #nc-loading-circle .sk-circle12 {
      -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
      transform: rotate(330deg)
    }

    .nc-container #nc-loading-circle .sk-circle2:before {
      -webkit-animation-delay: -1.1s;
      animation-delay: -1.1s
    }

    .nc-container #nc-loading-circle .sk-circle3:before {
      -webkit-animation-delay: -1s;
      animation-delay: -1s
    }

    .nc-container #nc-loading-circle .sk-circle4:before {
      -webkit-animation-delay: -.9s;
      animation-delay: -.9s
    }

    .nc-container #nc-loading-circle .sk-circle5:before {
      -webkit-animation-delay: -.8s;
      animation-delay: -.8s
    }

    .nc-container #nc-loading-circle .sk-circle6:before {
      -webkit-animation-delay: -.7s;
      animation-delay: -.7s
    }

    .nc-container #nc-loading-circle .sk-circle7:before {
      -webkit-animation-delay: -.6s;
      animation-delay: -.6s
    }

    .nc-container #nc-loading-circle .sk-circle8:before {
      -webkit-animation-delay: -.5s;
      animation-delay: -.5s
    }

    .nc-container #nc-loading-circle .sk-circle9:before {
      -webkit-animation-delay: -.4s;
      animation-delay: -.4s
    }

    .nc-container #nc-loading-circle .sk-circle10:before {
      -webkit-animation-delay: -.3s;
      animation-delay: -.3s
    }

    .nc-container #nc-loading-circle .sk-circle11:before {
      -webkit-animation-delay: -.2s;
      animation-delay: -.2s
    }

    .nc-container #nc-loading-circle .sk-circle12:before {
      -webkit-animation-delay: -.1s;
      animation-delay: -.1s
    }

    @-webkit-keyframes sk-circleFadeDelay {

      0%,
      39%,
      100% {
        opacity: 0
      }

      40% {
        opacity: 1
      }
    }

    @-webkit-keyframes sk-circleFadeDelay {

      0%,
      39%,
      100% {
        opacity: 0
      }

      40% {
        opacity: 1
      }
    }

    @keyframes sk-circleFadeDelay {

      0%,
      39%,
      100% {
        opacity: 0
      }

      40% {
        opacity: 1
      }
    }

    .nc-container .scale_text2 #nc-loading-circle .sk-circle:before {
      background-color: #fff
    }

    .nc_iconfont {
      font-family: "nc_iconfont";
      color: #ff3f08;
      font-size: 16px;
      font-style: normal
    }

    .ncpc_iconfont {
      font-family: "ncpc_iconfont";
      color: #ff3f08;
      font-size: 16px;
      font-style: normal
    }

    .captcha-error .icon_ban {
      float: left;
      font-size: 16px;
      padding-right: 5px;
      line-height: 14px
    }

    .clickCaptcha_text .btn_refresh {
      font-style: normal;
      cursor: pointer;
      background: #fff;
      color: #737383
    }

    .imgCaptcha .btn_refresh {
      font-size: 20px;
      cursor: pointer;
      background: #fff;
      color: #737383
    }

    .nc_voice {
      display: none;
      position: relative;
      margin-top: -34px;
      z-index: 99;
      width: auto;
      height: 34px;
      background: #fff
    }

    .omeo-code-img,
    .omeo-code-audio {
      font-size: 0;
      text-align: left
    }

    .omeo-code-audiobox,
    .omeo-code-img a,
    .omeo-code-audio a,
    .omeo-code-state {
      display: inline-block;
      *display: inline;
      zoom: 1;
      height: 32px;
      vertical-align: top;
      font-size: 12px
    }

    .omeo-code .omeo-code-refresh {
      background: transparent;
      width: 32px;
      height: 32px;
      font-size: 20px;
      color: #888;
      text-align: center;
      text-decoration: none;
      padding-left: 4px;
      line-height: 32px
    }

    .omeo-code .omeo-switch {
      display: none;
      width: 32px;
      height: 32px;
      border-left: 1px solid #e1e1e1;
      background-image: url(//g.alicdn.com/sd/ncpc/images/checkcode.png);
      background-repeat: no-repeat
    }

    .omeo-img-active .omeo-code-img {
      display: block
    }

    .omeo-img-active .omeo-code-audio {
      display: none
    }

    .omeo-code-img img {
      border: 1px solid #cdcdcd;
      cursor: pointer
    }

    .omeo-code-img .omeo-switch {
      background-position: 9px -41px
    }

    .omeo-audio-active .omeo-code-audio {
      display: block
    }

    .omeo-audio-active .omeo-code-img {
      display: none
    }

    .omeo-code-refresh {
      position: relative;
      left: 95px
    }

    .omeo-code-audiobox {
      position: relative;
      height: 30px;
      line-height: 32px;
      border: 1px solid #e1e1e1;
      text-align: center;
      overflow: hidden;
      left: 100px;
      top: 1px;
      width: 45%;
      min-width: 80px;
      background-color: #eee
    }

    .omeo-code-audiobox a {
      display: block;
      text-decoration: none;
      color: #06c
    }

    .omeo-code-audiobox-playing a {
      visibility: hidden
    }

    .omeo-code-audiobox span,
    .omeo-code-audiobox b {
      visibility: hidden;
      position: absolute;
      top: 0;
      left: 0;
      height: 30px;
      font-weight: 100;
      overflow: hidden
    }

    .omeo-code-audiobox-playing span,
    .omeo-code-audiobox-playing b {
      visibility: visible
    }

    .omeo-code-audiobox span {
      z-index: 0;
      width: 0;
      background: #186bca
    }

    .omeo-code-audiobox b {
      width: 100%;
      z-index: 1;
      text-align: left;
      text-indent: 30px;
      color: #999;
      background: url(//g.alicdn.com/sd/ncpc/images/checkcode.png) no-repeat 14px -89px
    }

    .omeo-code-audio .omeo-switch {
      background-position: 5px 10px
    }

    input[type="text"]::-ms-clear {
      display: none
    }

    .omeo-box {
      position: relative;
      background-color: #fff
    }

    .omeo-code-echo {
      position: absolute;
      top: 2px;
      left: 2px
    }

    .omeo-code-echo input {
      padding: 5px;
      height: 18px;
      line-height: 18px;
      border: 1px solid #ddd;
      width: 80px;
      outline: 0
    }

    .omeo-code-state {
      height: 30px;
      line-height: 30px;
      text-indent: 25px;
      white-space: nowrap;
      background-image: url(//g.alicdn.com/sd/ncpc/images/checkcode.png);
      background-repeat: no-repeat;
      background-position: 100px 100px
    }

    .omeo-code-echo .omeo-code-state-error {
      width: auto;
      background-position: 7px -193px
    }

    .omeo-code-echo .omeo-code-state-success {
      position: absolute;
      width: 30px;
      background-position: 7px -243px
    }

    .omeo-code-state {
      position: absolute;
      left: 0;
      top: 28px
    }

    .nc_voice_close {
      display: inline-block;
      position: relative;
      cursor: pointer;
      left: 95px;
      top: 0;
      border-left: #ddd 2px solid;
      padding: 0 0 0 7px;
      background-color: #fff;
      font-size: 20px;
      color: #888;
      line-height: 32px
    }

    .nc_help {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      z-index: 99999
    }

    .nc_help .mask {
      background-color: #000;
      opacity: .5;
      filter: alpha(opacity=50);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0
    }

    .nc_btn_close {
      position: absolute;
      height: 20px;
      left: 500px;
      border-radius: 20px;
      padding: 10px 30px;
      background-color: #aaa;
      color: #fff;
      cursor: pointer;
      z-index: 10
    }

    .nc_btn_close:hover {
      background-color: #afafaf
    }

    .nc_hand {
      position: absolute;
      width: 68px;
      height: 53px;
      background-image: url(//g.alicdn.com/sd/ncpc/images/hand.png);
      z-index: 3
    }

    .nc_slide_bg {
      z-index: 3;
      font-size: 12px;
      text-align: center;
      color: #fff;
      line-height: 34px
    }

    .nc_voicebtn {
      position: absolute;
      padding: 0;
      right: -25px;
      font-size: 23px;
      color: #888;
      cursor: pointer;
      line-height: 34px
    }

    .nc_helpbtn {
      position: absolute;
      cursor: pointer;
      right: -95px;
      top: 4px;
      font-size: 12px;
      background-color: #ffb668;
      color: #fff;
      padding: 4px;
      border-radius: 2px;
      line-height: 18px;
      display: none
    }

    .nc_helpbtn:before {
      width: 0;
      height: 0;
      content: "";
      position: absolute;
      left: -2px;
      top: 6px;
      border-top: 4px solid transparent;
      border-bottom: 4px solid transparent;
      border-right: 4px solid #ffb668
    }

    .nc-container .errloading {
      border: #faf1d5 1px solid;
      text-indent: 3px;
      background-image: none;
      font-size: 12px;
      width: 290px;
      line-height: 20px;
      padding: 7px 5px 8px 5px;
      color: #ef9f06
    }

    .nc-container .errloading a {
      color: #30a7fc
    }

    .nc_captcha_text .nc_err {
      float: left;
      text-indent: 0
    }

    .button_move {
      transition: left .5s;
      -moz-transition: left .5s;
      -webkit-transition: left .5s;
      -o-transition: left .5s
    }

    .bg_move {
      transition: width .5s;
      -moz-transition: width .5s;
      -webkit-transition: width .5s;
      -o-transition: width .5s
    }

    .nc_slide_box {
      position: absolute
    }

    .nc_captcha_text {
      height: auto;
      line-height: 20px;
      visibility: hidden;
      font-size: 12px;
      color: #999;
      font-weight: normal
    }

    .nc-container .nc_captcha_img_text {
      width: auto;
      height: auto;
      line-height: 20px;
      visibility: hidden;
      font-size: 12px;
      color: #999;
      font-weight: normal;
      display: none;
      padding: 0 0 10px 0;
      background-position: 0 0
    }

    .nc-container .nc_captcha_img_text span.nc-lang-cnt {
      line-height: inherit
    }

    .nc-container .imgCaptcha .nc_captcha_img_text {
      width: auto
    }

    .nc_captcha_img_text {
      height: auto;
      line-height: 20px;
      visibility: hidden;
      font-size: 12px;
      color: #999;
      font-weight: normal;
      display: none;
      padding: 0 0 10px 3px;
      background-position: 0 0
    }

    .nc-container .nc_wrapper {
      width: auto
    }

    .nc_scale {
      width: auto;
      height: 34px;
      background: #e8e8e8;
      position: relative;
      margin: 0;
      padding: 0
    }

    .nc_scale.is_audio {
      margin-right: 25px
    }

    .nc-container .nc_scale div {
      height: auto
    }

    .nc-container .nc_scale ul {
      list-style: none
    }

    .nc-container .nc_scale .btn_slide {
      color: #737383;
      background-image: none;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .nc-container .nc_scale span {
      text-align: center;
      width: 40px;
      height: 32px;
      line-height: 32px;
      border: 1px solid #ccc;
      position: absolute;
      left: 0;
      cursor: move;
      background: #fff;
      z-index: 2
    }

    .nc-container .nc_scale span.nc-lang-cnt {
      *line-height: 34px;
      float: none;
      width: auto;
      height: auto;
      *height: 34px;
      border: none;
      position: static;
      cursor: inherit;
      background: none;
      z-index: 0;
      display: inline
    }

    .nc_slide_button {
      width: 40px;
      height: 32px;
      border: 1px solid #ccc;
      position: absolute;
      left: 0;
      cursor: move;
      background: #fff url(//g.alicdn.com/sd/ncpc/images/rt.png) no-repeat center;
      z-index: 2
    }

    @media screen and (-ms-high-contrast:active),
    (-ms-high-contrast:none) {
      .nc_scale span {
        height: 32px
      }
    }

    .nc-container .nc_scale .btnok {
      cursor: default;
      background: #fff url(//g.alicdn.com/sd/ncpc/images/yes.png) no-repeat center;
      z-index: 3
    }

    .nc-container .nc_scale .btnok2 {
      cursor: default;
      font-size: 20px;
      background: #fff url(//g.alicdn.com/sd/ncpc/images/no.png) no-repeat center;
      z-index: 3
    }

    .nc-container .nc_scale .btn_warn {
      cursor: default;
      color: #ff3f08;
      line-height: 34px;
      text-align: center;
      font-size: 20px;
      background: #fff;
      z-index: 3
    }

    .nc-container .clickCaptcha_text .btn_refresh {
      font-size: 20px
    }

    .nc-container .clickCaptcha_text .icon_close {
      line-height: 30px;
      margin-left: 8px;
      cursor: default;
      color: #ff3f08;
      font-size: 16px;
      float: left;
      margin-right: 2px;
      background: transparent;
      z-index: 3
    }

    .nc-container .nc_captcha_img_text .icon_close {
      cursor: default;
      color: #ff3f08;
      font-size: 16px;
      float: left;
      margin-right: 4px;
      background: transparent;
      z-index: 3;
      line-height: 18px
    }

    .nc-container .errloading .icon_warn {
      cursor: default;
      color: #ff3f08;
      font-size: 18px;
      float: left;
      background: transparent;
      z-index: 3
    }

    .nc-container .nc_scale .btn_ok {
      cursor: default;
      line-height: 34px;
      text-align: center;
      font-size: 20px;
      background: #fff;
      z-index: 3;
      color: #76c61d
    }

    .nc-container .nc_scale .nc_ok,
    .nc-container .nc_scale .nc_bg {
      background: #7ac23c
    }

    .nc-container .nc_scale .nc_bg {
      position: absolute;
      height: 100%;
      _height: 34px;
      left: 0;
      width: 10px
    }

    .nc-container .nc_scale div.redbar {
      background: #fc461e;
      opacity: .5;
      filter: alpha(opacity=50)
    }

    .nc-container .nc_scale div.orange {
      background: red
    }

    .nc-container .nc_scale .scale_text {
      width: 100%;
      height: 100%;
      text-align: center;
      position: absolute;
      z-index: 1;
      background: transparent;
      color: #9c9c9c;
      line-height: 34px;
      font-size: 12px;
      cursor: pointer
    }

    .nc-container .nc_scale .scale_text2 {
      text-align: left;
      color: #fff;
      font-size: 12px;
      text-indent: 10px
    }

    .nc-container .nc_scale .scale_text2 b {
      padding-left: 0;
      font-weight: normal
    }

    .nc-container .nc_scale .scale_text.scale_loading_text {
      text-align: center
    }

    .nc-container .nc_scale .imgCaptcha,
    .nc-container .nc_scale .clickCaptcha {
      display: none;
      overflow: hidden;
      border: 1px solid #ccc;
      background: #fff;
      z-index: 20000
    }

    .nc-container .nc_scale .imgCaptcha p.error span,
    .nc-container .nc_scale .clickCaptcha p.error span {
      line-height: normal
    }

    .nc-container .nc_scale .imgCaptcha {
      height: auto
    }

    .nc-container .nc_scale .clickCaptcha {
      position: absolute;
      left: 0;
      top: 35px;
      height: 270px;
      background: #fff;
      display: none
    }

    .nc-container .nc_scale .clickCaptcha p.error i {
      color: #ff3f08;
      font-style: normal
    }

    .nc-container .nc_scale .clickCaptcha div {
      position: static;
      clear: both;
      width: 100%;
      background: #fff;
      height: auto
    }

    .nc-container .nc_scale .clickCaptcha .clickCaptcha_text {
      height: 30px;
      line-height: 30px;
      font-size: 12px;
      color: #999
    }

    .nc-container .nc_scale .clickCaptcha .clickCaptcha_text b {
      font-weight: normal
    }

    .nc_btn_2 {
      position: absolute;
      right: 0;
      top: 0;
      cursor: pointer;
      margin: 2px 9px 0 0
    }

    .nc_iconfont.nc_btn_2 {
      position: absolute;
      right: 0;
      top: 0;
      cursor: pointer
    }

    .nc_iconfont.nc_btn_1 {
      position: absolute;
      top: 10px;
      right: 5px
    }

    .nc_btn_1 {
      top: 10px;
      right: 10px
    }

    .scale_text i {
      font-style: normal;
      border: none;
      position: static;
      cursor: default;
      color: #fffc00;
      background: none;
      display: inline;
      width: 100%
    }

    .nc-container .clickCaptcha .clickCaptcha_img {
      margin: 0 auto;
      clear: both;
      position: relative
    }

    .nc-container .clickCaptcha .clickCaptcha_img img {
      width: 230px;
      height: 230px;
      margin-left: 10px;
      margin-top: 5px
    }

    .nc-container .clickCaptcha .clickCaptcha_btn {
      margin: 10px 0 0 15px;
      position: relative;
      text-align: left
    }

    .nc-container .clickCaptcha .clickCaptcha_btn img {
      cursor: pointer
    }

    .nc-container .imgCaptcha {
      position: absolute;
      left: 0;
      top: 35px;
      height: auto;
      padding-bottom: 15px;
      border: 1px solid #ccc;
      background: #fff
    }

    .nc-container .imgCaptcha div {
      position: static;
      width: 90%;
      background-color: #fff
    }

    .nc-container .imgCaptcha,
    .nc-container .clickCaptcha {
      text-align: left
    }

    .nc-container .imgCaptcha a,
    .nc-container .clickCaptcha a {
      color: #ff3f08
    }

    .nc-container .imgCaptcha .imgCaptcha_text {
      height: 42px;
      line-height: 42px;
      width: 120px;
      background: #fff;
      font-size: 14px;
      text-align: left;
      color: #747474;
      float: left;
      margin-left: 10px
    }

    .nc-container .imgCaptcha .imgCaptcha_text input {
      margin-top: 5px;
      height: 30px;
      line-height: 30px;
      font-size: 14px;
      width: 90px;
      background: #fff
    }

    .nc-container .imgCaptcha .imgCaptcha_text input:focus {
      outline: none;
      color: #bbb
    }

    .nc-container .imgCaptcha .imgCaptcha_btn {
      margin: 0 0 0 12px;
      *margin-left: 0;
      clear: both;
      padding-top: 5px;
      width: 90%
    }

    .nc-container .imgCaptcha .imgCaptcha_btn img {
      cursor: pointer
    }

    .nc-container .imgCaptcha .nc_scale_submit {
      margin: 0 auto;
      cursor: pointer;
      background-color: #fc461e;
      width: 120px;
      height: 32px;
      line-height: 32px;
      color: #fff;
      text-align: center
    }

    .nc-container .imgCaptcha .imgCaptcha_img {
      margin: 4px 0 0 100px;
      height: 40px;
      width: 130px;
      overflow: hidden;
      cursor: pointer
    }

    .nc-container .imgCaptcha .imgCaptcha_img img {
      width: 130px
    }

    .nc-container .imgCaptcha .imgCaptcha_img input {
      border: solid 1px #ccc
    }

    .nc-lang-ar_MA,
    .nc-lang-ar_SA,
    .nc-lang-iw_HE,
    .nc-lang-iw_IL {
      text-align: right;
      *text-align: left
    }

    .nc-lang-ar_MA .nc_scale .scale_text2,
    .nc-lang-ar_SA .nc_scale .scale_text2,
    .nc-lang-iw_HE .nc_scale .scale_text2,
    .nc-lang-iw_IL .nc_scale .scale_text2 {
      text-align: right
    }

    .nc-lang-ar_MA .nc_scale .scale_text2 span,
    .nc-lang-ar_SA .nc_scale .scale_text2 span,
    .nc-lang-iw_HE .nc_scale .scale_text2 span,
    .nc-lang-iw_IL .nc_scale .scale_text2 span {
      *display: inline-block;
      padding: 0 56px 0 0
    }

    .nc-lang-ar_MA .nc_captcha_img_text,
    .nc-lang-ar_SA .nc_captcha_img_text,
    .nc-lang-iw_HE .nc_captcha_img_text,
    .nc-lang-iw_IL .nc_captcha_img_text {
      *text-align: right
    }

    .nc-lang-ar_MA span.nc-lang-cnt,
    .nc-lang-ar_SA span.nc-lang-cnt,
    .nc-lang-iw_HE span.nc-lang-cnt,
    .nc-lang-iw_IL span.nc-lang-cnt {
      text-align: right;
      direction: rtl
    }

    .nocaptcha span.nc-lang-cnt {
      float: none;
      height: auto;
      line-height: 30px
    }

    .nc-container {
      font-size: 12px;
      -ms-touch-action: none;
      touch-action: none
    }

    .nc-container p {
      margin: 0;
      padding: 0;
      display: inline
    }

    .nc-container .scale_text.scale_text span[data-nc-lang="_startTEXT"] {
      display: inline-block;
      width: 100%
    }

    .nc-container .scale_text.scale_text.slidetounlock span[data-nc-lang="_startTEXT"] {
      background: -webkit-gradient(linear, left top, right top, color-stop(0, #4d4d4d), color-stop(.4, #4d4d4d), color-stop(.5, #fff), color-stop(.6, #4d4d4d), color-stop(1, #4d4d4d));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      -webkit-animation: slidetounlock 3s infinite;
      -webkit-text-size-adjust: none
    }

    .nc-container .nc_scale .nc-align-center.scale_text2 {
      text-align: center;
      text-indent: -42px
    }

    @-webkit-keyframes slidetounlock {
      0% {
        background-position: -200px 0
      }

      100% {
        background-position: 200px 0
      }
    }

    .nc-container.tb-login .clickCaptcha_text .icon_close {
      line-height: 30px;
      margin-left: 0;
      cursor: default;
      color: #ff3f08;
      font-size: 16px;
      float: left;
      margin-right: 0;
      background: transparent;
      z-index: 3
    }

    .nc-container.tb-login {
      position: relative;
      margin-top: 20px;
      display: none
    }

    .nc-container.tb-login .nc_scale {
      width: auto
    }

    .nc-container.tb-login .nc_scale .scale_text2 {
      text-indent: -42px;
      text-align: center
    }

    .nc-container.tb-login .nc_scale .scale_text2 b {
      padding: 0
    }

    .nc-container.tb-login .nc_scale.nc_err div.scale_text {
      background: #f79977
    }

    .nc-container.tb-login .errloading {
      width: auto
    }

    .nc-container.tb-login .imgCaptcha,
    .nc-container.tb-login .clickCaptcha {
      width: 252px;
      *width: 256px;
      border: 0;
      *height: 300px;
      min-height: 300px;
      max-height: inherit !important
    }

    .nc-container.tb-login .imgCaptcha div.login-msg.error,
    .nc-container.tb-login .clickCaptcha div.login-msg.error {
      background: #fff2f2
    }

    .nc-container.tb-login .imgCaptcha .captcha-error,
    .nc-container.tb-login .clickCaptcha .captcha-error {
      position: absolute;
      top: 0;
      width: 244px;
      height: auto;
      margin-bottom: 15px;
      padding: 3px;
      border: solid 1px #ff8e8e;
      line-height: 18px
    }

    .nc-container.tb-login .imgCaptcha .captcha-inform,
    .nc-container.tb-login .clickCaptcha .captcha-inform {
      font-size: 110%;
      margin-left: 20px
    }

    .nc-container.tb-login .imgCaptcha {
      padding-top: 66px
    }

    .nc-container.tb-login .imgCaptcha .imgCaptcha_text {
      width: 100px;
      margin-left: 0
    }

    .nc-container.tb-login .imgCaptcha .imgCaptcha_text input:focus {
      color: #000
    }

    .nc-container.tb-login .imgCaptcha .imgCaptcha_img {
      width: 120px;
      _width: 100px
    }

    .nc-container.tb-login .imgCaptcha .imgCaptcha_btn {
      width: 100%;
      margin-left: 0
    }

    .nc-container.tb-login .imgCaptcha .nc_scale_submit {
      width: 100%;
      height: 36px;
      line-height: 36px;
      margin-top: 20px;
      margin-left: 0;
      border-radius: 3px;
      font-size: 16px;
      font-family: Tahoma, Helvetica, Arial, sans-serif;
      background: #ff3f08
    }

    .nc-container.tb-login .clickCaptcha {
      padding-top: 40px
    }

    .nc-container.tb-login .clickCaptcha .clickCaptcha_text {
      text-indent: 4px
    }

    .nc-container.tb-login .clickCaptcha .clickCaptcha_img img {
      margin-left: 10px
    }

    .nc-container.tb-login .nc_btn_1 {
      top: 77px;
      _top: 57px
    }

    .nc-container.tb-login .nc_btn_2 {
      top: 36px
    }

    .login .nc-container.tb-login .login-msg p,
    .login-box .nc-container.tb-login .login-msg p {
      width: auto;
      float: left
    }

    .nc-container.tb-login.nc-old-login {
      margin: 20px 0 10px 0;
      width: 250px
    }

    .nc-container.tb-login.nc-old-login .nc_wrapper {
      width: 250px
    }

    .nc-container.tb-login.nc-old-login .imgCaptcha,
    .nc-container.tb-login.nc-old-login .clickCaptcha {
      width: 250px;
      min-height: auto
    }

    .nc-container.tb-login.nc-old-login .imgCaptcha .captcha-error,
    .nc-container.tb-login.nc-old-login .clickCaptcha .captcha-error {
      line-height: 16px
    }

    .nc-container.tb-login.nc-old-login .clickCaptcha {
      padding-top: 28px
    }

    .nc-container.tb-login.nc-old-login .clickCaptcha .clickCaptcha_img img {
      width: 200px;
      height: 200px
    }

    .nc-container.nc-old-login.show-click-captcha {
      padding-bottom: 60px
    }

    .nc-container.nc-old-login.show-click-captcha.nc-tm-min-fix {
      padding-bottom: 40px
    }

    .nc-container.tb-login.nc-tm-min-fix .clickCaptcha {
      max-height: 340px !important
    }

    #content .login-box .bd .nc-container.tb-login .login-msg {
      margin: 10px auto 15px auto
    }

    #content .login-box .bd .nc-container.tb-login.nc-old-login.show-click-captcha .login-msg {
      margin: 2px 0 0 0
    }

    .nc-container .nc_scale .nc-cc {
      display: none;
      position: absolute;
      left: 0;
      top: 35px;
      z-index: 20000;
      width: 360px;
      height: 570px;
      border: 1px solid #5eaef1;
      border-radius: 4px;
      background: #fff;
      font-size: 14px;
      line-height: 18px;
      color: #333
    }

    .nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-btn,
    .nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-btn {
      background-color: #90c1eb
    }

    .nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-btn,
    .nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-btn,
    .nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-refresh,
    .nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-refresh {
      cursor: default
    }

    .nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-refresh,
    .nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-refresh {
      color: #999
    }

    .nc-container .nc_scale .nc-cc a {
      color: #3199f4;
      text-decoration: none
    }

    .nc-container .nc_scale .nc-cc .nc_iconfont {
      vertical-align: top;
      margin-right: 8px
    }

    .nc-container .nc_scale .nc-cc-btn {
      display: inline-block;
      *display: inline;
      *zoom: 1;
      vertical-align: top;
      letter-spacing: normal;
      word-spacing: normal;
      width: 100px;
      line-height: 30px;
      text-align: center;
      background-color: #3199f4;
      color: #fff;
      border-radius: 4px;
      cursor: pointer
    }

    .nc-container .nc_scale .nc-cc-btn.nc-cc-disabled {
      background-color: #90c1eb;
      cursor: default
    }

    .nc-container .nc_scale .nc-cc-btn .nc-lang-cnt {
      line-height: 18px
    }

    .nc-container .nc_scale .nc-cc-header {
      padding: 20px 20px 19px 20px;
      height: 100px;
      background: #f4f8fa;
      border-bottom: 1px solid #ccc
    }

    .nc-container .nc_scale .nc-cc-img1-box {
      float: left;
      width: 100px;
      height: 100px;
      margin-right: 16px
    }

    .nc-container .nc_scale .nc-cc-txt {
      overflow: hidden;
      *zoom: 1;
      line-height: 30px;
      padding-top: 11px
    }

    .nc-container .nc_scale .nc-cc-img2-box {
      position: relative;
      padding: 0 20px;
      margin-top: 20px
    }

    .nc-container .nc_scale .nc-cc-items {
      position: absolute;
      left: 20px;
      _left: 0;
      top: 0;
      width: 320px;
      overflow: hidden
    }

    .nc-container .nc_scale .nc-cc-items-inner {
      margin-right: -20px
    }

    .nc-container .nc_scale .nc-cc-item {
      position: relative;
      display: inline-block;
      *display: inline;
      *zoom: 1;
      vertical-align: top;
      letter-spacing: normal;
      word-spacing: normal;
      margin-right: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      width: 98px;
      height: 98px;
      background: url(//gtms02.alicdn.com/tps/i2/T1ty2QFNNXXXc6Yc2r-1-1.gif)
    }

    .nc-container .nc_scale .nc-cc-item:hover {
      border-color: #3199f4
    }

    .nc-container .nc_scale .nc-cc-item .nc_iconfont {
      display: none;
      position: absolute;
      right: 0;
      bottom: 0;
      color: #3199f4;
      font-size: 22px;
      margin-right: 0
    }

    .nc-container .nc_scale .nc-cc-item.nc-cc-selected .nc_iconfont {
      display: block
    }

    .nc-container .nc_scale .nc-cc-tip {
      display: none;
      position: absolute;
      left: 0;
      bottom: 60px;
      width: 360px;
      line-height: 18px;
      text-align: center;
      color: #eb4f38
    }

    .nc-container .nc_scale .nc-cc-tip span {
      line-height: normal
    }

    .nc-container .nc_scale .nc-cc-footer {
      position: absolute;
      left: 0;
      bottom: 20px;
      width: 360px;
      height: 30px;
      line-height: 30px;
      text-align: center
    }

    .nc-container .nc_scale .nc-cc-footer .nc_iconfont {
      color: #c4cbd0
    }

    .nc-container .nc_scale .nc-cc-refresh,
    .nc-container .nc_scale .nc-cc-wait {
      position: absolute;
      left: 20px;
      top: 0;
      color: #3199f4;
      cursor: pointer
    }

    .nc-container .nc_scale .nc-cc-wait {
      display: none
    }

    .nc-container .nc_scale .nc-cc-cancel {
      position: absolute;
      right: 20px;
      top: 0;
      color: #3199f4;
      cursor: pointer
    }

    .nc-container .nc_scale .nc-cc-cancel .nc_iconfont {
      position: relative;
      top: -1px
    }

    .nc-container .nc_scale .nc-cc-loading {
      margin-top: 247px;
      text-align: center;
      line-height: 14px
    }

    .nc-container .nc_scale .nc-cc-loading-img {
      display: inline-block;
      *display: inline;
      *zoom: 1;
      vertical-align: top;
      letter-spacing: normal;
      word-spacing: normal;
      vertical-align: middle;
      background: url(//img.alicdn.com/tps/TB1OdxsKpXXXXcgXFXXXXXXXXXX-14-14.gif) no-repeat;
      width: 14px;
      height: 14px;
      position: relative;
      top: -1px;
      margin-right: 9px
    }

    .nc-container .nc_scale .nc-cc-fail {
      position: absolute;
      left: 50%;
      top: 50%;
      width: 320px;
      height: 180px;
      margin-left: -160px;
      margin-top: -90px;
      background: #fff;
      border-radius: 4px
    }

    .nc-container .nc_scale .nc-cc-fail-inner {
      text-align: center;
      padding: 55px 10px 10px
    }

    .nc-container .nc_scale .nc-cc-fail-action {
      margin: 28px 0 18px
    }

    .nc-container .nc_scale .nc-cc-fail-action a {
      display: inline-block;
      *display: inline;
      *zoom: 1;
      vertical-align: top;
      letter-spacing: normal;
      word-spacing: normal;
      line-height: 30px;
      margin-left: 16px
    }

    .nc-container .nc_scale .nc-cc-contact {
      text-align: right;
      color: #666;
      padding-right: 9px
    }

    .nc-container .nc_scale .nc-cc-mask {
      display: none;
      position: absolute;
      left: 0;
      top: 0;
      width: 360px;
      height: 570px;
      background: rgba(0, 0, 0, .3);
      filter: progid:DXImageTransform.Microsoft.gradient(enabled='true', startColorstr='#4C000000', endColorstr='#4C000000')
    }

    :root .nc-container .nc_scale .nc-cc-mask {
      -webkit-filter: none;
      filter: none
    }

    .nc-container .nc_scale .nc-cc-arrow-1,
    .nc-container .nc_scale .nc-cc-arrow-2 {
      display: none;
      position: absolute;
      top: 340px;
      border: solid transparent;
      height: 0;
      width: 0
    }

    .nc-container .nc_scale .nc-cc-arrow-1 {
      border-width: 16px;
      margin-top: -1px
    }

    .nc-container .nc_scale .nc-cc-arrow-2 {
      border-width: 15px
    }

    .nc-container .nc_scale .nc-cc-right .nc-cc-arrow-1,
    .nc-container .nc_scale .nc-cc-left .nc-cc-arrow-1,
    .nc-container .nc_scale .nc-cc-right .nc-cc-arrow-2,
    .nc-container .nc_scale .nc-cc-left .nc-cc-arrow-2 {
      display: block;
      _display: none
    }

    .nc-container .nc_scale .nc-cc-right {
      left: 180px;
      top: -339px
    }

    .nc-container .nc_scale .nc-cc-right .nc-cc-arrow-1 {
      border-right-color: #5eaef1;
      left: -32px
    }

    .nc-container .nc_scale .nc-cc-right .nc-cc-arrow-2 {
      border-right-color: #fff;
      left: -30px
    }

    .nc-container .nc_scale .nc-cc-left {
      left: -335px;
      top: -339px
    }

    .nc-container .nc_scale .nc-cc-left .nc-cc-arrow-1 {
      border-left-color: #5eaef1;
      right: -32px
    }

    .nc-container .nc_scale .nc-cc-left .nc-cc-arrow-2 {
      border-left-color: #fff;
      right: -30px
    }
  </style>
</head>

<body data-spm="pdp_revamp" style="overflow-y: scroll">
  <script>window.__lzd__svg__cssinject__ = true;</script>
  <style>
    .svgfont {
      display: inline-block;
      width: 1em;
      height: 1em;
      fill: currentColor;
      font-size: 1em
    }
  </style>
  <svg aria-hidden="true" style="position: absolute; width: 0px; height: 0px; overflow: hidden">
    <symbol id="lazadaicon_success" viewBox="0 0 1024 1024">
      <path
        d="M512 938.666667c234.666667 0 426.666667-192 426.666667-426.666667s-192-426.666667-426.666667-426.666667-426.666667 192-426.666667 426.666667 192 426.666667 426.666667 426.666667z">
      </path>
      <path
        d="M418.133333 691.2c-8.533333 0-12.8-4.266667-21.333333-8.533333l-115.2-115.2c-12.8-12.8-12.8-29.866667 0-38.4 12.8-12.8 29.866667-12.8 38.4 0l93.866667 93.866666 256-247.466666c12.8-12.8 29.866667-12.8 38.4 0s12.8 29.866667 0 38.4l-273.066667 268.8c0 8.533333-8.533333 8.533333-17.066667 8.533333"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_cart" viewBox="0 0 1024 1024">
      <path
        d="M381.248 761.344a51.328 51.328 0 1 0 0 102.656 51.328 51.328 0 0 0 0-102.656z m-252.928-118.4v68.416h125.056l-14.88-68.448H128.32z m0-145.824v68.448h92.896l-14.88-68.448H128.32zM377.6 237.12l14.912 68.448h419.616V642.88H384.96L289.6 193.504 128.64 192 128 260.448l106.048 0.992 95.488 449.92h551.04V237.12H377.6z m458.4 575.552a51.328 51.328 0 1 1-102.72 0 51.328 51.328 0 0 1 102.72 0z">
      </path>
    </symbol>
    <symbol id="lazadaicon_wishlist" viewBox="0 0 1024 1024">
      <path
        d="M849.067 233.244c-82.49-82.488-209.067-82.488-291.556 0l-166.4 164.978 52.622 51.2 164.978-164.978c55.467-55.466 135.111-55.466 189.156 0 45.51 45.512 61.155 128 0 189.156l-72.534 72.533L509.156 748.09 292.978 546.133 220.444 473.6c-49.777-56.889-41.244-146.489 0-189.156 51.2-51.2 132.267-52.622 184.89-4.266l51.2-51.2c-81.067-76.8-209.067-75.378-287.29 2.844-65.422 65.422-82.488 200.534-1.422 290.134l75.378 75.377 265.956 248.89 265.955-248.89 73.956-73.955c91.022-89.6 71.11-219.022 0-290.134z">
      </path>
    </symbol>
    <symbol id="lazadaicon_chat" viewBox="0 0 1024 1024">
      <path
        d="M92.471652 820.758261l165.286957-123.547826h666.935652V136.993391H92.449391v683.742609zM0 887.318261l92.471652-66.56v-134.455652L0 741.62087V44.521739h1017.143652v745.160348H283.692522L0 989.807304V887.318261z">
      </path>
      <path
        d="M261.988174 275.70087h477.762783v92.471652H261.988174zM261.988174 445.217391h261.988174v92.471652H261.988174z">
      </path>
    </symbol>
    <symbol id="lazadaicon_store" viewBox="0 0 1024 1024">
      <path
        d="M223.833043 141.868522l180.936348 1.669565h332.221218l92.471652-92.471652H405.504L160.723478 48.88487 19.945739 316.549565a142.06887 142.06887 0 0 0 95.654957 188.66087 158.118957 158.118957 0 0 0 134.322087-24.998957l26.37913-24.197565 27.469913 23.863652a159.209739 159.209739 0 0 0 90.445913 28.026435 159.432348 159.432348 0 0 0 111.304348-45.100522l2.381913-2.337391 2.381913 2.337391a159.432348 159.432348 0 0 0 111.304348 45.100522c30.764522 0 59.503304-8.681739 83.878956-23.752348l35.617392-29.874087 34.148174 30.430609a158.029913 158.029913 0 0 0 128.289391 20.813913 142.870261 142.870261 0 0 0 96.478609-188.994783l-92.249044-173.367652-68.608 66.404174 74.48487 139.976348a50.398609 50.398609 0 0 1-34.059131 66.671304 65.958957 65.958957 0 0 1-67.673043-21.370435l-68.741565-81.92-71.123479 79.872a67.072 67.072 0 0 1-50.44313 22.639305 66.982957 66.982957 0 0 1-47.972174-20.034783l-65.714087-66.404174-65.736348 66.426435c-12.644174 12.777739-29.606957 20.012522-47.949913 20.012522a67.049739 67.049739 0 0 1-49.775304-21.904696l-70.010435-76.354782-67.940174 78.202434a65.936696 65.936696 0 0 1-66.960696 20.524522 49.597217 49.597217 0 0 1-33.391304-65.869913l117.693217-208.161391z">
      </path>
      <path d="M184.943304 876.744348V445.217391H92.471652v523.976348h832.200348V445.217391h-92.449391v431.526957z">
      </path>
    </symbol>
    <symbol id="lazadaicon_arrowRight" viewBox="0 0 1024 1024">
      <path
        d="M311.466667 814.933333l68.266666 59.733334 332.8-366.933334-332.8-358.4-64 59.733334 273.066667 298.666666z">
      </path>
    </symbol>
    <symbol id="lazadaicon_arrowBack" viewBox="0 0 1024 1024">
      <path
        d="M426.666667 507.733333L763.733333 170.666667l-85.333333-85.333334L256 507.733333l4.266667 4.266667 422.4 422.4 85.333333-85.333333-341.333333-341.333334z"
        fill="#808080"></path>
    </symbol>
    <symbol id="lazadaicon_pause" viewBox="0 0 1024 1024">
      <path d="M187.733333 102.4h256v819.2H187.733333zM597.333333 102.4h256v819.2H597.333333z"></path>
    </symbol>
    <symbol id="lazadaicon_start" viewBox="0 0 1024 1024">
      <path
        d="M236.249425 10.759014l591.395068 460.126685a42.082192 42.082192 0 0 1 0.490959 66.055013l-591.395068 474.266302A42.082192 42.082192 0 0 1 168.328767 978.396932V43.989918A42.082192 42.082192 0 0 1 236.249425 10.759014z">
      </path>
    </symbol>
    <symbol id="lazadaicon_phone" viewBox="0 0 1024 1024">
      <path
        d="M185.6 21.333333v85.333334h567.466667v29.866666H185.6v874.666667h652.8V21.333333H185.6z m567.466667 904.533334H270.933333v-123.733334h482.133334v123.733334z m0-206.933334H270.933333V221.866667h482.133334v497.066666z"
        fill=""></path>
      <path d="M512 864m-42.666667 0a42.666667 42.666667 0 1 0 85.333334 0 42.666667 42.666667 0 1 0-85.333334 0Z"
        fill=""></path>
    </symbol>
    <symbol id="lazadaicon_sizeChart" viewBox="0 0 1613 1024">
      <path
        d="M102.4 68.267h1405.673v893.672H102.4V68.267z m89.988 803.685h1225.697V158.255H192.388v713.697z m294.788 0h-89.988V425.115h89.988v446.837z m363.054 0h-89.988V605.09h89.988v266.86z m359.952 0h-89.988V425.115h89.988v446.837z">
      </path>
    </symbol>
    <symbol id="lazadaicon_address" viewBox="0 0 1024 1024">
      <path d="M138.971 980.114H43.886V190.171h412.038v95.086H138.97V885.03h599.772V694.857h95.086v285.257H138.97z">
      </path>
      <path
        d="M980.114 343.771c0 65.829-21.943 124.343-70.704 170.667-31.696 31.695-68.267 53.638-112.153 63.39l-351.086 65.83c-9.752 2.437-19.504-7.315-17.066-17.068l70.705-341.333c0-2.438 2.438-7.314 2.438-7.314 9.752-41.448 31.695-75.581 63.39-107.276 46.324-48.762 104.838-70.705 170.667-70.705s124.343 24.38 170.666 73.143c48.762 46.324 73.143 102.4 73.143 170.666z m-190.171-58.514C770.438 265.752 748.495 256 721.676 256c-26.819 0-48.762 9.752-65.828 26.819-19.505 19.505-26.82 41.448-26.82 68.267 0 26.819 9.753 48.762 29.258 68.266 19.504 19.505 41.447 29.258 68.266 29.258 26.82 0 48.762-9.753 68.267-26.82 19.505-19.504 26.82-41.447 26.82-65.828-2.439-29.257-12.191-51.2-31.696-70.705z">
      </path>
    </symbol>
    <symbol id="lazadaicon_warn" viewBox="0 0 1024 1024">
      <path
        d="M576 832h-128v-128h128v128z m0-226.133333h-128v-384h128v384zM512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512S793.6 0 512 0z"
        fill="#FF9000"></path>
    </symbol>
    <symbol id="lazadaicon_pin" viewBox="0 0 1024 1024">
      <path
        d="M512 544c64 0 118.4-51.2 118.4-115.2S576 313.6 512 313.6s-118.4 51.2-118.4 115.2S448 544 512 544z m0 345.6l-25.6-25.6c-28.8-28.8-268.8-297.6-268.8-444.8 0-156.8 131.2-284.8 291.2-284.8s291.2 128 291.2 284.8c0 147.2-240 416-268.8 444.8l-19.2 25.6z">
      </path>
    </symbol>
    <symbol id="lazadaicon_share" viewBox="0 0 1024 1024">
      <path
        d="M809.344 695.369143c-44.580571 0-85.101714 17.792-113.481143 49.243428L340.553143 535.332571a101.193143 101.193143 0 0 0 0-49.243428l355.309714-207.908572a152.246857 152.246857 0 0 0 113.481143 50.614858c86.473143-1.371429 151.314286-67.035429 152.667429-154.569143C960.658286 86.674286 895.817143 19.657143 809.344 18.285714c-86.454857 1.371429-152.667429 68.388571-154.002286 155.940572 0 9.563429 1.334857 19.145143 2.688 28.708571L305.426286 408.137143c-28.379429-31.451429-67.547429-51.968-114.834286-51.968-86.473143 1.353143-152.685714 67.017143-154.020571 154.569143 1.353143 87.533714 67.547429 153.197714 154.020571 154.550857 44.580571 0 86.454857-20.516571 114.834286-51.968l352.603428 206.537143c-1.334857 9.581714-2.688 19.163429-2.688 30.098285 1.334857 87.552 67.547429 153.197714 154.002286 154.569143 86.473143-1.371429 151.314286-67.017143 152.667429-154.569143-1.353143-87.533714-66.194286-153.197714-152.667429-154.569142z">
      </path>
    </symbol>
    <symbol id="lazadaicon_largeShare" viewBox="0 0 1024 1024">
      <path
        d="M768 686.933333c-34.133333 0-59.733333 12.8-85.333333 34.133334l-302.933334-179.2c4.266667-8.533333 4.266667-17.066667 4.266667-29.866667 0-8.533333 0-21.333333-4.266667-29.866667L682.666667 307.2c21.333333 21.333333 51.2 34.133333 85.333333 34.133333 72.533333 0 128-55.466667 128-128s-55.466667-128-128-128-128 55.466667-128 128c0 8.533333 0 21.333333 4.266667 29.866667L341.333333 418.133333C320 396.8 290.133333 384 256 384c-72.533333 0-128 55.466667-128 128s55.466667 128 128 128c34.133333 0 64-12.8 85.333333-34.133333l302.933334 179.2c-4.266667 8.533333-4.266667 17.066667-4.266667 29.866666 0 68.266667 55.466667 123.733333 123.733333 123.733334s123.733333-55.466667 123.733334-123.733334c4.266667-68.266667-51.2-128-119.466667-128z"
        fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_notes" viewBox="0 0 1024 1024">
      <path
        d="M512 0c282.624 0 512 229.376 512 512s-229.376 512-512 512S0 794.624 0 512 229.376 0 512 0zM460.8 768h102.4V460.8H460.8v307.2z m0-409.6h102.4V256H460.8v102.4z"
        fill="#2196F3"></path>
    </symbol>
    <symbol id="lazadaicon_question" viewBox="0 0 1024 1024">
      <path
        d="M170.666667 85.333333c-46.933333 0-85.333333 38.4-85.333334 85.333334v768l170.666667-170.666667h597.333333c46.933333 0 85.333333-38.4 85.333334-85.333333V170.666667c0-46.933333-38.4-85.333333-85.333334-85.333334H170.666667z m512 320c0 34.133333-4.266667 64-17.066667 89.6-12.8 25.6-25.6 42.666667-46.933333 59.733334l59.733333 46.933333-34.133333 38.4-76.8-59.733333c-8.533333 4.266667-21.333333 4.266667-34.133334 4.266666-29.866667 0-55.466667-8.533333-76.8-21.333333s-38.4-34.133333-51.2-59.733333c-12.8-29.866667-21.333333-59.733333-21.333333-93.866667v-21.333333c0-34.133333 4.266667-64 17.066667-93.866667 12.8-25.6 29.866667-46.933333 51.2-59.733333s51.2-21.333333 81.066666-21.333334 55.466667 8.533333 76.8 21.333334 38.4 34.133333 51.2 59.733333 21.333333 59.733333 21.333334 93.866667v17.066666z m-64-17.066666c0-38.4-8.533333-72.533333-21.333334-93.866667-17.066667-21.333333-38.4-29.866667-64-29.866667s-46.933333 12.8-64 34.133334c-12.8 21.333333-21.333333 51.2-21.333333 89.6v21.333333c0 38.4 8.533333 68.266667 21.333333 89.6s38.4 34.133333 64 34.133333c29.866667 0 51.2-8.533333 64-29.866666 12.8-21.333333 21.333333-51.2 21.333334-93.866667v-21.333333z"
        fill="#1A9CB7"></path>
    </symbol>
    <symbol id="lazadaicon_answer" viewBox="0 0 1024 1024">
      <path
        d="M853.333333 85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333334v768l170.666667-170.666667h597.333333c46.933333 0 85.333333-38.4 85.333334-85.333333V170.666667c0-46.933333-38.4-85.333333-85.333334-85.333334z m-260.266666 439.466667h-140.8l-29.866667 85.333333H358.4l136.533333-362.666666h55.466667l136.533333 362.666666h-64l-29.866666-85.333333zM469.333333 473.6h106.666667l-51.2-149.333333-55.466667 149.333333z"
        fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_questionSymbol" viewBox="0 0 1024 1024">
      <path
        d="M328 723.2l-121.6 121.6c-12.8 12.8-33.6 3.2-33.6-14.4V256c0-46.4 38.4-83.2 83.2-83.2h512c46.4 0 83.2 38.4 83.2 83.2v384c0 46.4-38.4 83.2-83.2 83.2H328z m-22.4-33.6c3.2-3.2 9.6-6.4 14.4-6.4h448c24 0 44.8-19.2 44.8-44.8V256c0-24-19.2-44.8-44.8-44.8H256c-24 0-44.8 19.2-44.8 44.8v528l94.4-94.4z"
        fill="#979797"></path>
      <path
        d="M507.2 628.8c-14.4 0-27.2-11.2-27.2-27.2 0-14.4 11.2-27.2 27.2-27.2 14.4 0 27.2 11.2 27.2 27.2-1.6 16-12.8 27.2-27.2 27.2zM588.8 438.4L564.8 464c-19.2 19.2-30.4 35.2-30.4 75.2H480v-12.8c0-28.8 12.8-56 32-75.2L544 416c9.6-9.6 16-22.4 16-36.8C560 350.4 536 326.4 507.2 326.4c-28.8 0-52.8 24-52.8 52.8H400a107.2 107.2 0 0 1 214.4 0c-1.6 22.4-11.2 44.8-25.6 59.2z"
        fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_filter" viewBox="0 0 1024 1024">
      <path
        d="M918.75555522 201.95555522c-4.266667-8.533333-17.066667-17.066667-25.6-17.066666H129.42222222c-12.8 0-21.333333 8.533333-25.6 17.066666-4.266667 12.8-4.266667 25.6 4.266667 34.133334L411.02222222 611.55555522v256c0 17.066667 12.8 29.866667 29.866667 29.866667 17.066667 0 29.866667-12.8 29.866666-29.866667v-277.333333l-277.333333-341.333333H824.88888922l-277.333334 341.333333V867.55555522c0 17.066667 12.8 29.866667 29.866667 29.866667s29.866667-12.8 29.866667-29.866667v-256L910.22222222 236.08888922c12.8-8.533333 12.8-21.333333 8.533333-34.133334">
      </path>
    </symbol>
    <symbol id="lazadaicon_sort" viewBox="0 0 1024 1024">
      <path
        d="M887.466667 725.333333l-192 192-12.8 12.8c-4.266667 4.266667-12.8 8.533333-17.066667 8.533334-8.533333 0-12.8-4.266667-21.333333-8.533334l-8.533334-8.533333-192-192c-8.533333-12.8-8.533333-29.866667 0-38.4l12.8-12.8c12.8-12.8 34.133333-8.533333 42.666667 4.266667l128 128v-345.6c0-21.333333 17.066667-38.4 38.4-38.4s38.4 17.066667 38.4 38.4V810.666667l128-132.266667c8.533333-12.8 29.866667-12.8 38.4 0l12.8 12.8c12.8 8.533333 17.066667 21.333333 4.266667 34.133333z m-320-375.466666c-12.8 12.8-34.133333 8.533333-42.666667-4.266667l-128-128v345.6c0 21.333333-17.066667 38.4-38.4 38.4s-38.4-17.066667-38.4-38.4V217.6l-128 128c-8.533333 12.8-29.866667 12.8-38.4 0l-17.066667-8.533333c-8.533333-12.8-12.8-25.6 0-38.4l192-192 8.533334-12.8c8.533333-4.266667 12.8-8.533333 21.333333-8.533334s12.8 4.266667 21.333333 8.533334l4.266667 8.533333 196.266667 192c8.533333 12.8 8.533333 29.866667 0 38.4l-12.8 17.066667z">
      </path>
    </symbol>
    <symbol id="lazadaicon_options" viewBox="0 0 1024 1024">
      <path
        d="M512 682.666667c46.933333 0 85.333333 38.4 85.333333 85.333333s-38.4 85.333333-85.333333 85.333333-85.333333-38.4-85.333333-85.333333 38.4-85.333333 85.333333-85.333333z m0-85.333334c-46.933333 0-85.333333-38.4-85.333333-85.333333s38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333z m0-256c-46.933333 0-85.333333-38.4-85.333333-85.333333s38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333z">
      </path>
    </symbol>
    <symbol id="lazadaicon_like" viewBox="0 0 1024 1024">
      <path
        d="M136.533333 849.066667h140.8v-426.666667H136.533333v426.666667z m785.066667-388.266667c0-38.4-34.133333-72.533333-72.533333-72.533333h-226.133334l34.133334-162.133334V213.333333c0-12.8-4.266667-29.866667-17.066667-38.4l-38.4-38.4-230.4 234.666667c-12.8 12.8-21.333333 34.133333-21.333333 51.2v354.133333c0 38.4 34.133333 72.533333 72.533333 72.533334h320c29.866667 0 55.466667-17.066667 64-42.666667l106.666667-251.733333c4.266667-8.533333 4.266667-17.066667 4.266666-25.6v-68.266667h4.266667z"
        fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_facebook" viewBox="0 0 1024 1024">
      <path
        d="M548.864 1024h-73.728C212.992 1024 0 811.008 0 548.864v-73.728C0 212.992 212.992 0 475.136 0h73.728C811.008 0 1024 212.992 1024 475.136v73.728C1024 811.008 811.008 1024 548.864 1024z"
        fill="#3B5998"></path>
      <path
        d="M534.528 778.24h-110.592V512H368.64v-92.16h55.296v-55.296c0-75.776 30.72-118.784 118.784-118.784h73.728v92.16h-45.056c-34.816 0-36.864 12.288-36.864 36.864v45.056h83.968l-10.24 92.16h-73.728v266.24z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_soldbyLAZ" viewBox="0 0 1024 1024">
      <path d="M512 512m-512 0a512 512 0 1 0 1024 0 512 512 0 1 0-1024 0Z" fill="#F37226"></path>
      <path
        d="M625.777778 341.333333h208.782222l-133.12 213.617778a249.457778 249.457778 0 0 0-28.444444-12.515555L568.888889 312.888889h-33.848889l-178.631111 398.222222h32.995555l43.235556-97.848889 6.257778-14.222222a223.573333 223.573333 0 0 1 131.413333-42.097778 253.724444 253.724444 0 0 1 115.484445 22.755556l-70.542223 113.777778 8.248889 18.204444h222.151111l13.653334-30.151111h-201.671111l215.324444-341.333333V312.888889h-260.266667z m-55.182222 185.457778a287.288889 287.288889 0 0 0-110.08 23.893333l2.56-5.688888L551.537778 341.333333l83.626666 190.293334a309.191111 309.191111 0 0 0-64.853333-4.835556z"
        fill="#FFFFFF"></path>
      <path
        d="M850.488889 718.222222h-231.537778l-11.662222-25.884444 68.266667-109.795556a256 256 0 0 0-104.96-18.488889 214.755556 214.755556 0 0 0-125.724445 39.537778l-50.915555 113.777778h-48.64l185.173333-412.444445h42.666667l103.822222 230.968889c7.111111 2.844444 14.506667 5.688889 21.617778 9.102223l122.88-197.404445h-200.817778l-19.057778-42.666667h278.471111v38.115556l-209.635555 330.808889h199.111111z m-222.435556-14.222222h213.048889l7.111111-15.928889h-203.377777l221.013333-350.435555v-17.635556h-242.346667l6.542222 14.222222h217.031112l-142.222223 229.831111-5.688889-2.844444a278.471111 278.471111 0 0 0-28.444444-11.946667h-2.844444l-1.422223-2.844444-100.977777-225.564445H540.444444l-170.666666 384h17.351111l49.777778-110.648889a229.831111 229.831111 0 0 1 135.68-43.52 261.404444 261.404444 0 0 1 118.613333 23.324445l7.111111 3.413333-72.817778 116.906667z m-181.76-139.377778l105.244445-239.786666 95.573333 217.6-13.368889-2.844445a316.017778 316.017778 0 0 0-63.146666-5.688889 284.444444 284.444444 0 0 0-107.52 23.04z m105.244445-204.515555l-77.937778 177.208889a308.337778 308.337778 0 0 1 96.711111-17.635556 300.942222 300.942222 0 0 1 52.906667 3.697778zM181.76 312.888889H151.04v398.222222h186.88l12.8-29.013333H181.76V312.888889z"
        fill="#FFFFFF"></path>
      <path
        d="M341.333333 718.222222H142.222222v-412.444444h46.648889v369.777778h172.942222z m-184.32-14.222222h174.933334l6.826666-14.791111H174.648889v-369.777778h-16.497778z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_officialBadge" viewBox="0 0 1024 1024">
      <path d="M512 1024c281.6 0 512-230.4 512-512S793.6 0 512 0 0 230.4 0 512s230.4 512 512 512z" fill="#CE0909">
      </path>
      <path
        d="M853.333333 785.066667v8.533333c0 8.533333-8.533333 17.066667-17.066666 17.066667h-8.533334l-110.933333-34.133334-25.6 110.933334c0 8.533333-8.533333 17.066667-17.066667 17.066666s-17.066667-8.533333-17.066666-8.533333l-128-256h-42.666667l-119.466667 247.466667c0 8.533333-8.533333 8.533333-17.066666 8.533333s-17.066667-8.533333-17.066667-17.066667l-25.6-102.4-110.933333 42.666667c-8.533333 0-17.066667 0-25.6-8.533333v-17.066667l128-256c-34.133333-42.666667-51.2-93.866667-51.2-153.6 0-145.066667 119.466667-256 264.533333-256s256 110.933333 256 256c0 51.2-17.066667 102.4-51.2 145.066667l136.533333 256zM512 580.266667c110.933333 0 204.8-85.333333 204.8-196.266667 0-110.933333-93.866667-196.266667-204.8-196.266667-110.933333 0-204.8 85.333333-204.8 196.266667 0 110.933333 85.333333 196.266667 204.8 196.266667zM546.133333 341.333333h93.866667l-76.8 59.733334 25.6 93.866666-76.8-51.2-85.333333 51.2 25.6-93.866666-76.8-59.733334h93.866666l34.133334-85.333333 42.666666 85.333333z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_taobaoBadge" viewBox="0 0 1024 1024">
      <path d="M512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512-230.4-512-512-512z" fill="#FF440B">
      </path>
      <path
        d="M256 264.533333c34.133333 0 68.266667 25.6 68.266667 59.733334 0 34.133333-25.6 59.733333-68.266667 59.733333-34.133333 0-68.266667-25.6-68.266667-59.733333 0-34.133333 34.133333-59.733333 68.266667-59.733334zM307.2 614.4c-17.066667 51.2-17.066667 34.133333-85.333333 179.2l-93.866667-59.733333s110.933333-102.4 136.533333-145.066667c17.066667-42.666667-25.6-76.8-25.6-76.8l-76.8-42.666667 42.666667-59.733333c59.733333 42.666667 59.733333 42.666667 102.4 85.333333 25.6 25.6 17.066667 68.266667 0 119.466667z"
        fill="#FFFFFF"></path>
      <path
        d="M844.8 682.666667c-17.066667 179.2-256 110.933333-256 110.933333l17.066667-51.2 51.2 8.533333c102.4 8.533333 93.866667-85.333333 93.866666-85.333333v-256c0-93.866667-93.866667-110.933333-256-51.2l42.666667 8.533333c0 8.533333-17.066667 25.6-34.133333 51.2h221.866666v42.666667H597.333333v59.733333h128v42.666667H597.333333v93.866667l51.2-25.6-8.533333-25.6 59.733333-17.066667 51.2 119.466667-76.8 25.6-17.066666-42.666667c-34.133333 25.6-93.866667 59.733333-213.333334 51.2-128 0-93.866667-136.533333-93.866666-136.533333h85.333333c0 17.066667-8.533333 51.2 0 68.266666 17.066667 8.533333 34.133333 8.533333 51.2 8.533334h8.533333V580.266667H366.933333v-51.2h128v-51.2h-34.133333c-34.133333 25.6-59.733333 51.2-59.733333 51.2l-34.133334-34.133334c25.6-25.6 51.2-68.266667 68.266667-102.4-8.533333 8.533333-25.6 17.066667-42.666667 17.066667-8.533333 17.066667-25.6 42.666667-42.666666 59.733333l-59.733334-34.133333C349.866667 375.466667 384 256 384 256l93.866667 25.6s-8.533333 17.066667-25.6 42.666667c366.933333-102.4 384 59.733333 384 59.733333s25.6 119.466667 8.533333 298.666667z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_certified" viewBox="0 0 1024 1024">
      <path
        d="M512 0c282.766222 0 512 229.233778 512 512s-229.233778 512-512 512S0 794.766222 0 512 229.233778 0 512 0z m255.914667 318.577778l-25.315556-0.455111c-0.568889 0-57.429333-1.251556-116.053333-25.514667-60.188444-24.917333-98.986667-53.475556-99.271111-53.76L511.914667 227.555556l-15.189334 11.292444c-0.369778 0.284444-39.139556 28.842667-99.271111 53.76-58.624 24.291556-115.484444 25.514667-116.024889 25.514667L256 318.577778v263.082666C256 713.671111 422.456889 853.333333 512 853.333333c89.543111 0 256-139.633778 256-271.701333l-0.085333-263.082667zM487.736889 682.666667L341.333333 565.646222l44.999111-49.692444 93.866667 74.979555L658.460444 398.222222 711.111111 441.088 487.708444 682.666667z"
        fill="#06A97F"></path>
    </symbol>
    <symbol id="lazadaicon_liveUp" viewBox="0 0 1024 1024">
      <path
        d="M349.866667 72.533333h324.266666c153.6 0 277.333333 123.733333 277.333334 277.333334v320c0 153.6-123.733333 277.333333-277.333334 277.333333H349.866667c-153.6 0-277.333333-123.733333-277.333334-277.333333V349.866667c0-153.6 123.733333-277.333333 277.333334-277.333334"
        fill="#38C0C6"></path>
      <path
        d="M755.2 422.4l-89.6-89.6c-8.533333-8.533333-17.066667-12.8-29.866667-12.8-8.533333 0-21.333333 4.266667-29.866666 12.8l-89.6 89.6c-17.066667 17.066667-17.066667 42.666667 0 55.466667 17.066667 17.066667 42.666667 17.066667 55.466666 0l21.333334-21.333334v89.6c0 64-34.133333 93.866667-85.333334 93.866667s-85.333333-34.133333-85.333333-98.133333c0-25.6-21.333333-42.666667-42.666667-42.666667-25.6 0-42.666667 17.066667-42.666666 42.666667v4.266666c0 115.2 64 174.933333 170.666666 174.933334s174.933333-59.733333 174.933334-179.2v-85.333334l21.333333 21.333334c17.066667 17.066667 42.666667 17.066667 55.466667 0 12.8-12.8 12.8-38.4-4.266667-55.466667m-379.733333-8.533333c25.6 0 51.2-21.333333 51.2-46.933334 0-25.6-21.333333-46.933333-51.2-46.933333s-51.2 17.066667-51.2 46.933333c0 25.6 25.6 46.933333 51.2 46.933334"
        fill="#FFCD05"></path>
    </symbol>
    <symbol id="lazadaicon_fulfilledbyLazada" viewBox="0 0 1024 1024">
      <path
        d="M911.829333 510.762667c0-221.866667-179.2-401.066667-401.066666-401.066667s-401.066667 179.2-401.066667 401.066667 179.2 401.066667 401.066667 401.066666 401.066667-179.2 401.066666-401.066666m-42.666666 0c0 196.266667-157.866667 354.133333-354.133334 354.133333s-358.4-157.866667-358.4-354.133333 157.866667-354.133333 354.133334-354.133334 358.4 157.866667 358.4 354.133334"
        fill="#00374C"></path>
      <path
        d="M463.829333 369.962667h196.266667v-64h-196.266667v64z m-102.4 349.866666h72.533334v-132.266666h-72.533334v132.266666z"
        fill="#F07025"></path>
      <path d="M438.229333 493.696v-187.733333h-76.8v251.733333h200.533334v-64z" fill="#00374C"></path>
    </symbol>
    <symbol id="lazadaicon_economy" viewBox="0 0 1024 1024">
      <path
        d="M989.866667 529.066667c-132.266667-256-256-273.066667-294.4-273.066667H238.933333c-12.8 0-21.333333 8.533333-21.333333 21.333333v174.933334h42.666667V298.666667h439.466666c4.266667 0 98.133333-4.266667 213.333334 170.666666h-153.6c-34.133333 0-34.133333-29.866667-34.133334-38.4V358.4c0-12.8-8.533333-21.333333-21.333333-21.333333s-21.333333 8.533333-21.333333 21.333333v72.533333c0 29.866667 21.333333 76.8 76.8 76.8h174.933333c4.266667 12.8 12.8 21.333333 21.333333 38.4V640c0 12.8-12.8 25.6-25.6 25.6h-25.6c-8.533333-42.666667-42.666667-68.266667-85.333333-68.266667s-76.8 29.866667-85.333333 68.266667h-238.933334c-8.533333-42.666667-46.933333-68.266667-85.333333-68.266667-42.666667 0-76.8 29.866667-85.333333 68.266667h-38.4c-12.8 0-25.6-12.8-25.6-25.6v-34.133333h34.133333c12.8 0 21.333333-8.533333 21.333333-21.333334s-8.533333-21.333333-21.333333-21.333333H179.2c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333334h38.4v34.133333c0 38.4 29.866667 68.266667 68.266667 68.266667h29.866666c8.533333 42.666667 42.666667 68.266667 85.333334 68.266666s76.8-29.866667 85.333333-68.266666H725.333333c8.533333 42.666667 42.666667 68.266667 85.333334 68.266666s76.8-29.866667 85.333333-68.266666h25.6c38.4 0 68.266667-29.866667 64-68.266667v-98.133333c8.533333-4.266667 8.533333-8.533333 4.266667-12.8m-174.933334 209.066666c-68.266667 0-68.266667-102.4 0-102.4s68.266667 102.4 0 102.4m-413.866666 0c-68.266667 0-68.266667-102.4 0-102.4s68.266667 102.4 0 102.4m-337.066667-251.733333c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333334h273.066667c12.8 0 21.333333-8.533333 21.333333-21.333334s-8.533333-21.333333-21.333333-21.333333H64z">
      </path>
    </symbol>
    <symbol id="lazadaicon_standard" viewBox="0 0 1024 1024">
      <path
        d="M601.6 268.8h-68.266667V196.266667h68.266667v72.533333z m332.8 529.066667V128H234.666667c-8.533333 0-12.8 4.266667-21.333334 8.533333-8.533333 8.533333-8.533333 25.6 4.266667 34.133334l230.4 200.533333-162.133333 166.4L170.666667 435.2c-8.533333-8.533333-25.6-8.533333-34.133334 4.266667-8.533333 8.533333-8.533333 25.6 4.266667 34.133333l68.266667 59.733333v273.066667H426.666667l17.066666 34.133333c0 4.266667 12.8 25.6 34.133334 34.133334 4.266667 0 8.533333 4.266667 17.066666 4.266666s17.066667-4.266667 29.866667-8.533333l12.8-4.266667c4.266667 4.266667 12.8 8.533333 17.066667 12.8 4.266667 4.266667 8.533333 4.266667 17.066666 4.266667s21.333333-4.266667 34.133334-8.533333l12.8-4.266667c4.266667 4.266667 12.8 8.533333 17.066666 12.8 4.266667 0 8.533333 4.266667 17.066667 4.266667s21.333333-4.266667 34.133333-8.533334l17.066667-12.8c4.266667 4.266667 8.533333 4.266667 17.066667 8.533334 4.266667 0 8.533333 4.266667 12.8 4.266666 8.533333 0 17.066667-4.266667 29.866666-8.533333 8.533333-4.266667 12.8-17.066667 4.266667-25.6-4.266667-8.533333-17.066667-12.8-29.866667-4.266667l-4.266666 4.266667c-4.266667 0-4.266667-4.266667-4.266667-8.533333l-51.2-106.666667c-4.266667-8.533333-17.066667-17.066667-29.866667-8.533333-8.533333 4.266667-17.066667 17.066667-8.533333 25.6l42.666667 93.866666-17.066667 8.533334c-4.266667 4.266667-8.533333 4.266667-12.8 4.266666-4.266667 0-4.266667-4.266667-8.533333-8.533333l-38.4-85.333333c-8.533333-34.133333-21.333333-38.4-29.866667-34.133334-8.533333 4.266667-17.066667 17.066667-12.8 25.6l29.866667 68.266667-12.8 8.533333c-4.266667 4.266667-12.8 4.266667-17.066667 4.266667-4.266667-4.266667-8.533333-4.266667-8.533333-8.533333l-21.333334-55.466667c-4.266667-8.533333-17.066667-17.066667-29.866666-12.8-8.533333 4.266667-17.066667 17.066667-12.8 25.6l17.066666 38.4-12.8 4.266667c-4.266667 4.266667-8.533333 4.266667-12.8 4.266666-4.266667 0-4.266667-4.266667-4.266666-4.266666l-38.4-81.066667v-4.266667l-72.533334-157.866666-29.866666 29.866666 64 145.066667H256v-179.2l17.066667 17.066667c4.266667 4.266667 8.533333 4.266667 17.066666 4.266666 4.266667 0 12.8-4.266667 17.066667-4.266666l196.266667-200.533334c8.533333-8.533333 4.266667-25.6-4.266667-34.133333L294.4 179.2h187.733333V298.666667h162.133334V179.2h243.2v584.533333h-106.666667l-68.266667-140.8 55.466667 17.066667c4.266667 0 29.866667 4.266667 55.466667-8.533333 8.533333-4.266667 25.6-21.333333 29.866666-46.933334v-4.266666c4.266667-8.533333-4.266667-17.066667-8.533333-21.333334l-196.266667-102.4h-4.266666-4.266667l-110.933333-17.066666-34.133334 29.866666 136.533334 21.333334 179.2 93.866666c-4.266667 4.266667-4.266667 12.8-8.533334 17.066667-4.266667 4.266667-17.066667 4.266667-21.333333 4.266667l-89.6-25.6-8.533333-21.333334c-4.266667-8.533333-17.066667-17.066667-29.866667-8.533333-8.533333 4.266667-17.066667 17.066667-8.533333 25.6l25.6 46.933333 68.266666 140.8 21.333334 34.133334h174.933333z">
      </path>
    </symbol>
    <symbol id="lazadaicon_expressDelivery" viewBox="0 0 1401 1024">
      <path
        d="M877.714286 0l-508.819876 203.52795-184.447205-69.962733c-12.720497-6.360248-25.440994 0-31.801242 6.360249s-12.720497 25.440994-12.720497 31.801242c0 12.720497 12.720497 19.080745 19.080745 25.440994l178.086957 63.602484v279.850932L248.049689 508.819876c-19.080745-6.360248-38.161491 0-44.521739 19.080745-6.360248 19.080745 0 38.161491 19.080746 44.521739l114.484472 44.521739v178.086957l559.701863 228.968944 496.099379-260.770186V190.807453l-515.180124-190.807453z m0 69.962733l407.0559 146.285714-146.285714 76.322982L731.428571 127.204969l146.285715-57.242236z m19.080745 349.813665L464.298137 235.329193 636.024845 165.36646l413.416149 171.726708-152.645963 82.68323z m432.496894 292.571428l-394.335403 209.888199v-445.217391l171.726708-89.043479v159.006211l69.962733-38.16149V356.173913L1335.652174 273.490683v438.857143z m-1081.242236-25.440994c19.080745 6.360248 25.440994 25.440994 19.080746 44.521739-6.360248 19.080745-25.440994 25.440994-44.521739 19.080746l-63.602485-25.440994c-19.080745-6.360248-25.440994-25.440994-19.080745-44.521739 6.360248-19.080745 25.440994-25.440994 44.521739-19.080745l63.602484 25.440993z m0-330.732919c0 12.720497-6.360248 19.080745-12.720496 25.440994-6.360248 6.360248-19.080745 6.360248-31.801243 6.360248l-178.086956-63.602484C12.720497 318.012422 0 305.291925 0 298.931677c0-12.720497 0-25.440994 12.720497-31.801242s19.080745-12.720497 31.801242-6.360249l178.086957 63.602485c19.080745 6.360248 25.440994 19.080745 25.440993 31.801242z m604.223603 120.844721v445.217391l-445.217391-178.086957V292.571429l445.217391 184.447205z">
      </path>
    </symbol>
    <symbol id="lazadaicon_shipping" viewBox="0 0 1024 1024">
      <path
        d="M576 819.2h-341.333333l8.533333-34.133333h307.2l170.666667-588.8h34.133333l-179.2 622.933333zM332.8 196.266667h341.333333l-157.866666 541.866666h-341.333334L332.8 196.266667z m516.266667-51.2H174.933333c-34.133333 0-64 29.866667-64 68.266666v102.4c0 38.4 29.866667 68.266667 64 68.266667h8.533334l12.8-51.2h-21.333334c-8.533333 0-17.066667-8.533333-17.066666-17.066667V213.333333c0-8.533333 8.533333-17.066667 17.066666-17.066666h106.666667l-170.666667 588.8h85.333334l-25.6 85.333333h443.733333L810.666667 196.266667h42.666666c8.533333 0 17.066667 8.533333 17.066667 17.066666v102.4c0 8.533333-8.533333 17.066667-17.066667 17.066667h-42.666666L797.866667 384h51.2c34.133333 0 64-29.866667 64-68.266667V213.333333c0-38.4-29.866667-68.266667-64-68.266666zM362.666667 588.8l8.533333-29.866667h-4.266667c-25.6-4.266667-46.933333-17.066667-59.733333-34.133333-4.266667-4.266667-4.266667-8.533333-4.266667-12.8l42.666667-12.8c4.266667 4.266667 17.066667 12.8 38.4 12.8h4.266667l21.333333-64h-4.266667c-25.6-4.266667-42.666667-12.8-55.466666-21.333333 0 0-4.266667 0-4.266667-4.266667 0 0 0-4.266667-4.266667-4.266667-12.8-4.266667-17.066667-21.333333-12.8-34.133333 12.8-42.666667 68.266667-59.733333 110.933334-64h4.266666l8.533334-29.866667h38.4l-8.533334 29.866667h4.266667c29.866667 4.266667 55.466667 17.066667 64 34.133333 4.266667 4.266667 4.266667 8.533333 4.266667 12.8l-38.4 12.8c-4.266667-4.266667-21.333333-12.8-42.666667-17.066666H469.333333l-21.333333 64h4.266667c34.133333 4.266667 55.466667 17.066667 59.733333 21.333333l4.266667 4.266667v4.266666c8.533333 12.8 12.8 25.6 8.533333 42.666667-12.8 38.4-68.266667 59.733333-115.2 64h-4.266667l-8.533333 25.6h-34.133333z m59.733333-221.866667c-34.133333 4.266667-51.2 17.066667-55.466667 29.866667 0 8.533333 17.066667 17.066667 42.666667 21.333333h4.266667l12.8-55.466666-4.266667 4.266666z m0 149.333334h4.266667c34.133333-4.266667 59.733333-21.333333 59.733333-34.133334 0-8.533333-21.333333-17.066667-46.933333-21.333333h-4.266667l-12.8 55.466667z">
      </path>
    </symbol>
    <symbol id="lazadaicon_noshipping" viewBox="0 0 1024 1024">
      <path
        d="M430.933333 401.066667c-25.6-4.266667-42.666667-12.8-42.666666-21.333334 4.266667-8.533333 21.333333-25.6 55.466666-29.866666h4.266667l-17.066667 51.2z m59.733334-55.466667c21.333333 0 34.133333 8.533333 42.666666 12.8l29.866667-25.6c-12.8-17.066667-29.866667-25.6-55.466667-29.866667h-4.266666l8.533333-29.866666h-42.666667l-8.533333 29.866666h-4.266667c-42.666667 4.266667-98.133333 25.6-110.933333 64-4.266667 12.8 0 29.866667 8.533333 42.666667 0 0 0 4.266667 4.266667 4.266667 0 0 4.266667 0 4.266667 4.266666 8.533333 8.533333 29.866667 12.8 55.466666 21.333334h4.266667l-8.533333 21.333333 59.733333-51.2 17.066667-64z m-170.666667 153.6c0 4.266667 4.266667 8.533333 4.266667 12.8 4.266667 4.266667 12.8 8.533333 17.066666 12.8l34.133334-29.866667c-8.533333 0-12.8-4.266667-12.8-4.266666l-42.666667 8.533333z m89.6 221.866667l-55.466667 51.2h217.6l76.8-260.266667-68.266666 59.733333-42.666667 149.333334h-128zM192 366.933333h8.533333L213.333333 315.733333h-21.333333c-8.533333 0-17.066667-4.266667-17.066667-17.066666V196.266667c0-8.533333 8.533333-17.066667 17.066667-17.066667H298.666667L149.333333 695.466667l68.266667-59.733334L349.866667 179.2h345.6L682.666667 226.133333 793.6 128H192C157.866667 128 128 157.866667 128 196.266667V298.666667c0 38.4 29.866667 68.266667 64 68.266666M891.733333 298.666667c0 8.533333-8.533333 17.066667-17.066666 17.066666h-4.266667l-46.933333 42.666667-4.266667 8.533333h55.466667c34.133333 0 64-29.866667 64-68.266666V256l-46.933334 42.666667zM597.333333 806.4H315.733333l-55.466666 51.2h375.466666l128-443.733333-68.266666 55.466666-98.133334 337.066667z m285.866667-674.133333L128 793.6l38.4 42.666667L921.6 174.933333l-38.4-42.666666z">
      </path>
    </symbol>
    <symbol id="lazadaicon_oversea" viewBox="0 0 1024 1024">
      <path
        d="M985.6 337.066667c-4.266667 12.8-12.8 29.866667-34.133333 38.4l-320 132.266666s-29.866667 8.533333-55.466667 8.533334c-21.333333 0-38.4-8.533333-51.2-17.066667L443.733333 426.666667c-4.266667-4.266667-4.266667-8.533333-4.266666-17.066667s4.266667-12.8 8.533333-17.066667c4.266667 0 17.066667-12.8 42.666667-12.8 8.533333 0 17.066667 0 29.866666 4.266667l42.666667 12.8h12.8c8.533333 0 17.066667-4.266667 29.866667-8.533333l12.8-4.266667-81.066667-68.266667c-4.266667-4.266667-8.533333-12.8-4.266667-21.333333 0-8.533333 4.266667-12.8 12.8-17.066667 4.266667 0 21.333333-8.533333 46.933334-8.533333 17.066667 0 34.133333 4.266667 55.466666 8.533333 42.666667 17.066667 106.666667 42.666667 128 42.666667l102.4-42.666667c4.266667 0 25.6-8.533333 55.466667-8.533333 21.333333 0 38.4 8.533333 51.2 21.333333l4.266667 4.266667c-12.8 0 0 21.333333-4.266667 42.666667z m-42.666667-17.066667c-4.266667-4.266667-12.8-8.533333-17.066666-8.533333-17.066667 0-34.133333 8.533333-34.133334 8.533333l-106.666666 46.933333H768c-34.133333 0-128-34.133333-140.8-46.933333-8.533333-4.266667-17.066667-8.533333-25.6-8.533333l68.266667 59.733333c4.266667 4.266667 8.533333 12.8 4.266666 21.333333 0 8.533333-4.266667 12.8-12.8 17.066667l-51.2 21.333333c-12.8 8.533333-29.866667 8.533333-42.666666 8.533334s-25.6-4.266667-25.6-4.266667l-34.133334-8.533333 46.933334 42.666666c4.266667 8.533333 17.066667 8.533333 25.6 8.533334 17.066667 0 42.666667-8.533333 42.666666-8.533334L938.666667 332.8c4.266667-4.266667 12.8-8.533333 12.8-8.533333-4.266667 0-8.533333-4.266667-8.533334-4.266667z m-268.8-68.266667c-51.2-38.4-110.933333-59.733333-179.2-59.733333-166.4 0-298.666667 136.533333-298.666666 302.933333 0 34.133333 4.266667 68.266667 17.066666 102.4 55.466667-12.8 128-38.4 234.666667-81.066666 8.533333-4.266667 21.333333 0 29.866667 12.8 4.266667 8.533333 0 21.333333-12.8 29.866666-98.133333 38.4-174.933333 64-230.4 81.066667 51.2 98.133333 149.333333 166.4 264.533333 166.4 166.4 0 298.666667-136.533333 298.666667-302.933333v-4.266667l42.666666-17.066667v21.333334c0 192-153.6 345.6-337.066666 345.6-136.533333 0-251.733333-81.066667-307.2-196.266667-29.866667 8.533333-55.466667 8.533333-76.8 8.533333-42.666667 0-55.466667-12.8-68.266667-25.6-29.866667-42.666667 25.6-102.4 34.133333-115.2 4.266667-8.533333 21.333333-8.533333 29.866667 0 8.533333 8.533333 8.533333 21.333333 0 29.866667-17.066667 21.333333-34.133333 55.466667-29.866667 59.733333 0 0 12.8 17.066667 89.6 0-8.533333-34.133333-17.066667-72.533333-17.066666-110.933333 0-192 149.333333-345.6 337.066666-345.6 110.933333 0 204.8 51.2 268.8 136.533333-17.066667-12.8-55.466667-25.6-89.6-38.4z">
      </path>
    </symbol>
    <symbol id="lazadaicon_email" viewBox="0 0 1024 1024">
      <path
        d="M840.533333 776.533333H307.2c-17.066667 0-34.133333-8.533333-42.666667-21.333333-12.8-12.8-12.8-29.866667-12.8-46.933333l72.533334-358.4c8.533333-25.6 38.4-51.2 68.266666-51.2h533.333334c17.066667 0 34.133333 8.533333 42.666666 21.333333 8.533333 12.8 12.8 29.866667 12.8 42.666667l-72.533333 358.4c-8.533333 29.866667-38.4 55.466667-68.266667 55.466666zM307.2 716.8h533.333333c4.266667 0 8.533333-4.266667 8.533334-8.533333l72.533333-354.133334H392.533333c-4.266667 0-8.533333 4.266667-12.8 8.533334l-72.533333 354.133333z">
      </path>
      <path
        d="M610.133333 610.133333c-17.066667 0-34.133333-8.533333-46.933333-21.333333l-200.533333-213.333333 42.666666-38.4 200.533334 213.333333c4.266667 4.266667 8.533333 4.266667 8.533333 0l294.4-217.6 34.133333 46.933333-294.4 217.6c-12.8 8.533333-25.6 12.8-38.4 12.8z m-465.066666-256h132.266666v55.466667H145.066667V354.133333zM42.666667 486.4h204.8v55.466667H42.666667v-55.466667z m72.533333 119.466667H213.333333v55.466666H115.2v-55.466666z">
      </path>
    </symbol>
    <symbol id="lazadaicon_smallPrompt" viewBox="0 0 1024 1024">
      <path
        d="M512 841.589844c181.27441433 0 329.589844-148.31542969 329.589844-329.589844s-148.31542969-329.589844-329.589844-329.589844-329.589844 148.31542969-329.589844 329.589844 148.31542969 329.589844 329.589844 329.589844z"
        fill="#FF9800"></path>
      <path
        d="M538.36718725 327.42968775v128.54003907c0 13.18359399 0 26.36718725-3.29589793 39.55078125 0 13.18359399-3.29589869 26.36718725-6.59179739 42.84667918h-39.55078125c-3.29589869-16.47949193-3.29589869-29.66308594-6.59179662-42.84667918 0-13.18359399-3.29589869-26.36718725-3.29589869-39.55078125v-128.54003907h59.32617188z m-62.6220698 299.92675731c0-3.29589869 0-9.8876953 3.29589792-13.18359324 3.29589869-3.29589869 3.29589869-6.59179662 6.59179738-9.88769532 3.29589869-3.29589869 6.59179662-6.59179662 9.88769532-6.59179737 3.29589869-3.29589869 9.8876953-3.29589869 13.18359324-3.29589794 3.29589869 0 9.8876953 0 13.18359399 3.29589794 3.29589869 3.29589869 6.59179662 3.29589869 9.88769535 6.59179737 3.29589869 3.29589869 6.59179662 6.59179662 6.5917966 9.88769532 3.29589869 3.29589869 3.29589869 9.8876953 3.29589869 13.18359324 0 3.29589869 0 9.8876953-3.29589869 13.183594s-3.29589869 6.59179662-6.59179663 9.88769532c-3.29589869 3.29589869-6.59179662 6.59179662-9.8876953 6.59179662-3.29589869 3.29589869-9.8876953 3.29589869-13.18359401 3.29589869-3.29589869 0-9.8876953 0-13.18359324-3.29589869-3.29589869-3.29589869-6.59179662-3.29589869-9.88769532-6.59179662-3.29589869-3.29589869-6.59179662-6.59179662-6.59179738-9.88769532s-3.29589869-9.8876953-3.29589792-13.183594z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_largePrompt" viewBox="0 0 1024 1024">
      <path
        d="M512 938.666667c234.666667 0 426.666667-192 426.666667-426.666667s-192-426.666667-426.666667-426.666667-426.666667 192-426.666667 426.666667 192 426.666667 426.666667 426.666667z"
        fill="#FF9800"></path>
      <path
        d="M546.133333 273.066667v166.4c0 17.066667 0 34.133333-4.266666 51.2 0 17.066667-4.266667 34.133333-8.533334 55.466666h-51.2c-4.266667-21.333333-4.266667-38.4-8.533333-55.466666 0-17.066667-4.266667-34.133333-4.266667-51.2v-166.4h76.8z m-81.066666 388.266666c0-4.266667 0-12.8 4.266666-17.066666 4.266667-4.266667 4.266667-8.533333 8.533334-12.8 4.266667-4.266667 8.533333-8.533333 12.8-8.533334 4.266667-4.266667 12.8-4.266667 17.066666-4.266666 4.266667 0 12.8 0 17.066667 4.266666 4.266667 4.266667 8.533333 4.266667 12.8 8.533334 4.266667 4.266667 8.533333 8.533333 8.533333 12.8 4.266667 4.266667 4.266667 12.8 4.266667 17.066666 0 4.266667 0 12.8-4.266667 17.066667s-4.266667 8.533333-8.533333 12.8c-4.266667 4.266667-8.533333 8.533333-12.8 8.533333-4.266667 4.266667-12.8 4.266667-17.066667 4.266667-4.266667 0-12.8 0-17.066666-4.266667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333-4.266667-4.266667-8.533333-8.533333-8.533334-12.8s-4.266667-12.8-4.266666-17.066667z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_gojek" viewBox="0 0 1024 1024">
      <path
        d="M799.511273 727.831273a130.094545 130.094545 0 0 0-52.922182 8.797091c-16.896-33.605818-31.418182-64.093091-28.346182-63.906909l34.071273 1.396363s4.608-42.356364 2.839273-65.675636c-1.722182-23.458909-9.867636-23.877818-9.867637-23.877818l-30.533818 9.681454c-36.026182 12.194909-41.425455 9.169455-41.425455 9.169455s0.465455-36.165818-6.376727-36.445091c-6.795636-0.279273-40.122182-8.750545-40.122182-8.750546-2.792727-5.492364-25.227636-17.408-36.910545-26.158545-13.079273-14.941091-58.647273-48.081455-91.601455-71.168a59.531636 59.531636 0 0 0 75.636364-54.784 59.624727 59.624727 0 0 0-56.785455-62.184727 59.485091 59.485091 0 0 0-61.905454 57.064727c-0.651636 14.242909 3.816727 27.508364 11.682909 38.167273a340.48 340.48 0 0 1-4.514909-3.025455c-7.912727-7.214545-17.035636 2.280727-17.035636 2.280727s-76.194909 151.831273-80.709819 161.233455c-4.514909 9.402182 13.777455 29.463273 13.777455 29.463273l-103.982546 2.327272c-17.826909 0.605091-31.278545 60.462545-31.278545 60.462546-68.887273 12.101818-109.474909 96.861091-109.474909 96.861091l17.221818 13.079272-1.256727 28.765091-31.371637-1.349818c-11.403636 11.822545-0.791273 19.176727-0.791272 19.176727l31.325091 1.396364v0.512l-0.186182 4.980364h0.139636a134.330182 134.330182 0 0 0 128.186182 134.516363 134.190545 134.190545 0 0 0 139.264-123.112727c14.475636-0.139636 80.477091-0.605091 122.833455 0 47.802182 0.698182 59.904-27.601455 59.904-27.601454l4.282181-100.072728s30.068364 1.396364 44.032-4.933818c13.870545-6.237091 34.536727-39.610182 34.536728-39.610182l33.885091 59.298909a131.397818 131.397818 0 0 0-52.64291 99.746909 131.258182 131.258182 0 0 0 125.160728 137.076364 131.118545 131.118545 0 0 0 136.424727-125.765818 131.258182 131.258182 0 0 0-125.160727-136.983273zM330.193455 776.471273c21.643636 13.963636 36.770909 37.096727 39.889454 63.767272l-40.029091-1.722181a50.455273 50.455273 0 0 0-16.756363-23.086546l16.896-38.958545z m-43.566546-13.963637c4.189091 0.139636 8.145455 0.744727 12.101818 1.536l-12.427636 41.053091-1.489455-0.093091c-20.48-0.884364-39.517091 10.705455-48.034909 29.416728l-40.029091-1.722182a88.064 88.064 0 0 1 89.879273-70.237091v0.046545z m-7.633454 176.686546a88.203636 88.203636 0 0 1-84.154182-87.365818l37.329454 1.582545c-1.256727 27.927273 20.340364 51.572364 48.221091 52.875636 27.927273 1.210182 51.386182-20.48 52.596364-48.453818l37.282909 1.629091a88.110545 88.110545 0 0 1-91.229091 79.732364z m365.847272-338.292364c-80.430545-6.283636-150.202182 27.741091-150.202182 27.741091s-2.373818 3.258182-4.794181-0.186182c-14.010182-20.014545-15.546182-35.048727-15.546182-35.048727l33.512727-78.196364c25.832727 32.768 137.774545 67.863273 137.774546 67.863273l-0.791273 17.826909h0.046545z m146.571637 344.762182a88.436364 88.436364 0 0 1-84.340364-92.299636 88.389818 88.389818 0 0 1 29.789091-62.510546l20.154182 35.188364a46.778182 46.778182 0 0 0 30.673454 79.965091 46.638545 46.638545 0 0 0 34.304-80.244364 46.685091 46.685091 0 0 0-36.072727-13.032727c-4.701091-8.890182-12.055273-22.993455-20.340364-39.005091a88.064 88.064 0 0 1 117.713455 87.226182 88.389818 88.389818 0 0 1-91.880727 84.712727z m-270.196364-18.106182v-3.630545l132.654545 0.093091 3.49091 3.723636-136.145455-0.186182zM470.109091 964.421818v-3.677091l204.660364 0.139637 4.282181 3.816727L470.109091 964.421818z m85.643636-72.750545v-5.352728h91.229091l1.070546 3.909819-92.346182 1.396363zM234.496 163.188364c-21.922909 13.451636-41.425455-23.365818-31.511273-30.161455 332.148364-224.535273 603.648-2.699636 605.463273 16.430546 1.861818 19.176727-27.136 26.065455-27.136 26.065454-266.24-208.523636-524.986182-25.832727-546.816-12.334545z m62.370909 83.549091c-16.709818 10.845091-30.301091-18.757818-22.714182-24.203637 253.300364-180.177455 460.241455-2.187636 461.730909 13.172364 1.396364 15.406545-22.062545 20.945455-22.062545 20.945454-202.938182-167.377455-400.290909-20.759273-417.000727-9.914181zM368.733091 321.629091c-11.031273 7.819636-20.852364-15.313455-15.825455-19.176727 166.865455-129.722182 303.290182-1.582545 304.221091 9.495272 0.930909 11.077818-13.684364 16.896-13.684363 16.896-133.725091-120.552727-263.726545-14.987636-274.711273-7.168V321.629091z">
      </path>
    </symbol>
    <symbol id="lazadaicon_service" viewBox="0 0 1024 1024">
      <path
        d="M791.236118 531.80270466A78.30034946 78.30034946 0 0 0 785.77330297 517.91804997a61.45666943 61.45666943 0 0 0-30.38690869-29.02120529 20.03032178 20.03032178 0 0 0-8.19422255-3.30045065l-46.32012027-7.2837541a20.03032178 20.03032178 0 0 0-22.76172928 16.38844581l-36.76019288 219.99211563a19.80270466 19.80270466 0 0 0 16.27463616 22.76173001l42.79205178 6.94232733a17.41272317 17.41272317 0 0 0 3.41425958 0h5.34900611a60.7738181 60.7738181 0 0 0 41.54015658-17.75414919 79.66605358 79.66605358 0 0 0 9.78754377-11.38086501 79.66605358 79.66605358 0 0 0 8.9908828 0.79666097 77.73130633 77.73130633 0 0 0 26.6312238-4.77996369l-5.121389 30.1592923a83.30793026 83.30793026 0 0 1-35.96353262 51.10008252c-31.75261281 23.67219847-94.11975141 46.66154558-214.52930132 36.64638469a56.90432358 56.90432358 0 0 0-44.27156411-32.20784776c-29.47643951-4.89377188-56.90432358 9.78754378-60.43239133 33.00450801s16.95748823 45.52345929 46.43392773 50.7586572A58.2700277 58.2700277 0 0 0 530.84193207 869.58677086c22.76172928 2.16236438 44.61299011 3.18664247 65.09854685 3.18664248 80.69033094 0 142.60223533-16.27463689 184.82524325-48.59629284a120.86478413 120.86478413 0 0 0 49.84818803-76.59322005l17.98176632-108.23202392 3.18664246-18.66461766a77.95892343 77.95892343 0 0 0-60.54620098-88.88455421z m20.94079094 82.28365219l-5.23519719 31.41118677a38.125897 38.125897 0 0 1-30.72833545 30.61452652l17.07129715-101.74493154a38.01208808 38.01208808 0 0 1 18.89223549 39.71921825zM723.17854652 698.87379943a20.03032178 20.03032178 0 0 1-16.04701904 6.48709312l-22.76172929-3.86949381 30.27309978-180.95575016 22.76173 3.64187668a20.3717478 20.3717478 0 0 1 13.08799443 11.380865 48.82390995 48.82390995 0 0 1 3.8694938 30.04548266l-17.64034029 105.72823352A49.05152707 49.05152707 0 0 1 723.17854652 698.87379943zM285.58429604 491.28682617A19.91651357 19.91651357 0 0 0 262.25352361 475.80885026l-45.52345929 8.99088279a20.14413068 20.14413068 0 0 0-8.08041363 3.64187669 61.34286124 61.34286124 0 0 0-29.81786626 30.15929157A88.42931928 88.42931928 0 0 0 173.2551612 573.68428727l21.73745121 104.93157327c7.85279651 37.67066206 36.6463847 64.41569478 67.2609112 64.41569405a54.05910787 54.05910787 0 0 0 6.03185818-0.56904314h0.56904314a16.72987112 16.72987112 0 0 0 4.09711163 0l42.45062575-9.44611774A19.80270466 19.80270466 0 0 0 330.5387122 709.57181237zM264.75731402 703.19852818c-11.380865 2.27617329-26.40360597-11.380865-30.72833544-32.43546488L212.17771847 565.60387292a50.30342227 50.30342227 0 0 1 2.73140751-30.15929158A20.48555673 20.48555673 0 0 1 228.11092933 523.60848211l22.76172928-4.55234584L287.74666042 698.87379943zM771.43341334 458.62374419a93.09547403 93.09547403 0 0 1 16.04701904 9.78754378c0-103.56586915-25.37932861-183.80096588-74.20323782-238.99816004C661.38045108 171.02929132 582.85248376 141.21142578 479.28661461 141.21142578S297.87563022 171.02929132 245.86507854 229.52693612C196.47212546 285.29317342 171.20660503 366.89397427 171.77564889 472.39459067a89.56740555 89.56740555 0 0 1 19.11985261-13.54322937 54.05910787 54.05910787 0 0 1 18.77842655-7.6251794l3.6418767-0.68285133c2.84521643-83.87697341 23.89981629-148.97551953 63.5052256-193.47470145a67.37471941 67.37471941 0 0 0 34.1425943 37.67066277 63.96045983 63.96045983 0 0 0 26.06218066 5.34900612 88.54312818 88.54312818 0 0 0 45.52345857-13.31561155 139.52940179 139.52940179 0 0 1 22.76173002-10.69801295 234.44581418 234.44581418 0 0 1 74.43085566-11.380865 234.21819706 234.21819706 0 0 1 74.31704676 11.38086501 144.99221681 144.99221681 0 0 1 22.76172927 10.69801294 88.54312818 88.54312818 0 0 0 45.5234593 13.31561155 63.96045983 63.96045983 0 0 0 26.06217995-5.34900612 67.37471941 67.37471941 0 0 0 34.14259501-37.67066277c39.26398328 44.15775518 60.31858315 109.37011021 63.6190338 194.0437446l6.25947528 0.91046916a56.90432358 56.90432358 0 0 1 19.00604441 6.60090131z m-139.98463673-201.78273218a23.78600738 23.78600738 0 0 1-9.21850063 1.82093833 39.4916004 39.4916004 0 0 1-11.38086429-1.93474726A217.82975197 217.82975197 0 0 0 569.53687222 237.49354157l-1.25189519-0.56904315v1.02427808-1.02427808a273.82360639 273.82360639 0 0 0-87.74646722-13.65703758H478.48995436a272.45790226 272.45790226 0 0 0-87.5188501 13.7708465l-1.59332123 0.56904314a211.57027597 211.57027597 0 0 0-40.85730452 19.1198526 40.06064427 40.06064427 0 0 1-12.06371634 2.04855545 23.78600738 23.78600738 0 0 1-9.21850063-1.82093834c-10.01516088-4.55234587-14.90893277-18.55080946-17.18510606-29.70405662C353.30044148 197.43289802 410.20476579 182.41015633 479.62804064 182.29634741S606.06944801 197.43289802 649.20292582 227.13695464c-2.84521643 11.15324717-7.6251794 25.1517115-17.75414922 29.70405737z">
      </path>
    </symbol>
    <symbol id="lazadaicon_nowarranty" viewBox="0 0 1024 1024">
      <path
        d="M298.666667 648.533333l-29.866667 34.133334C153.6 490.666667 170.666667 256 170.666667 251.733333c0-4.266667 4.266667-12.8 8.533333-17.066666 4.266667-4.266667 12.8-4.266667 17.066667-4.266667 217.6 25.6 285.866667-85.333333 285.866666-85.333333 4.266667-8.533333 12.8-12.8 21.333334-12.8s17.066667 4.266667 21.333333 8.533333c4.266667 4.266667 38.4 59.733333 140.8 81.066667l-34.133333 38.4c-68.266667-17.066667-106.666667-51.2-128-72.533334-34.133333 38.4-119.466667 102.4-285.866667 89.6-4.266667 59.733333 4.266667 226.133333 81.066667 371.2z m537.6-401.066666v4.266666c0 4.266667 34.133333 482.133333-320 631.466667h-8.533334H494.933333c-55.466667-21.333333-98.133333-51.2-136.533333-85.333333l29.866667-34.133334c34.133333 29.866667 68.266667 55.466667 115.2 76.8C763.733333 725.333333 789.333333 409.6 793.6 298.666667l42.666667-51.2zM814.933333 128l38.4 34.133333L226.133333 883.2l-38.4-34.133333L814.933333 128z">
      </path>
    </symbol>
    <symbol id="lazadaicon_warranty" viewBox="0 0 1024 1024">
      <path
        d="M844.8 234.666667c-4.266667-4.266667-12.8-4.266667-17.066667-4.266667-217.6 25.6-290.133333-85.333333-294.4-89.6-4.266667-8.533333-12.8-12.8-21.333333-12.8s-17.066667 4.266667-21.333333 12.8c0 0-72.533333 115.2-294.4 89.6-4.266667 0-12.8 0-17.066667 4.266667-4.266667 0-8.533333 8.533333-8.533333 12.8 0 4.266667-34.133333 494.933333 332.8 648.533333h21.333333C891.733333 742.4 853.333333 256 853.333333 247.466667c0-4.266667-4.266667-12.8-8.533333-12.8z m-627.2 42.666666c170.666667 12.8 260.266667-51.2 294.4-89.6 34.133333 38.4 123.733333 102.4 294.4 89.6 4.266667 93.866667-12.8 448-294.4 571.733334C230.4 725.333333 217.6 371.2 217.6 277.333333z"
        fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_0day" viewBox="0 0 1024 1024">
      <path
        d="M512 281.6c-136.533333 0-247.466667 106.666667-247.466667 238.933333 0 38.4 8.533333 76.8 29.866667 110.933334l-38.4 38.4c-25.6-42.666667-42.666667-93.866667-42.666667-149.333334 0-157.866667 132.266667-290.133333 294.4-290.133333 51.2 0 102.4 12.8 145.066667 38.4l-12.8 17.066667-38.4 12.8c-25.6-12.8-59.733333-17.066667-89.6-17.066667z m149.333333 430.933333c12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 38.4-110.933333 59.733333-179.2 59.733334-59.733333 0-110.933333-17.066667-157.866667-42.666667l34.133334-34.133333c34.133333 21.333333 76.8 29.866667 119.466666 29.866666 59.733333 0 110.933333-17.066667 153.6-51.2z m251.733334-213.333333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133333-93.866667 0-179.2-29.866667-247.466667-81.066666l34.133334-38.4c59.733333 42.666667 136.533333 64 213.333333 64 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-21.333333 25.6-21.333333zM823.466667 298.666667c-4.266667 17.066667-17.066667 29.866667-34.133334 34.133333h-4.266666l38.4-34.133333zM200.533333 725.333333l-34.133333 34.133334C115.2 695.466667 85.333333 610.133333 85.333333 520.533333c0-230.4 192-418.133333 426.666667-418.133333 59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c8.533333-12.8 21.333333-21.333333 38.4-17.066667 17.066667 0 34.133333 12.8 38.4 29.866667l4.266666 21.333333-42.666666 42.666667-8.533334-34.133334-34.133333 55.466667C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 76.8 21.333333 149.333333 64 204.8zM896 85.333333l42.666667 38.4-810.666667 810.666667-42.666667-38.4L896 85.333333z">
      </path>
    </symbol>
    <symbol id="lazadaicon_7days" viewBox="0 0 1024 1024">
      <path
        d="M648.533333 409.6v38.4l-106.666666 238.933333h-76.8l98.133333-217.6h-119.466667V409.6h204.8z m264.533334 85.333333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133334S85.333333 750.933333 85.333333 520.533333s192-418.133333 426.666667-418.133333c59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c4.266667-17.066667 21.333333-21.333333 38.4-21.333334s34.133333 12.8 38.4 29.866667l42.666666 162.133333c8.533333 21.333333-8.533333 46.933333-29.866666 55.466667l-179.2 55.466667h-8.533334c-8.533333 0-21.333333-8.533333-25.6-17.066667-8.533333-12.8 0-25.6 12.8-29.866667l174.933334-55.466666-34.133334-140.8-34.133333 59.733333C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 204.8 170.666667 366.933333 375.466667 366.933334 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-25.6 25.6-25.6z m-401.066667-213.333333c-136.533333 0-247.466667 106.666667-247.466667 243.2 0 132.266667 110.933333 243.2 247.466667 243.2 55.466667 0 106.666667-17.066667 149.333333-51.2 12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 34.133333-110.933333 55.466667-179.2 55.466667-162.133333 0-294.4-132.266667-294.4-290.133334 0-157.866667 132.266667-290.133333 294.4-290.133333 55.466667 0 110.933333 17.066667 157.866667 46.933333l-68.266667 21.333334c-25.6-12.8-59.733333-17.066667-89.6-17.066667z">
      </path>
    </symbol>
    <symbol id="lazadaicon_14days" viewBox="0 0 1024 1024">
      <path
        d="M913.066667 494.933333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133334S85.333333 750.933333 85.333333 520.533333s192-418.133333 426.666667-418.133333c59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c4.266667-17.066667 21.333333-21.333333 38.4-21.333334s34.133333 12.8 38.4 29.866667l42.666666 162.133333c8.533333 21.333333-8.533333 46.933333-29.866666 55.466667l-179.2 55.466667h-8.533334c-8.533333 0-21.333333-8.533333-25.6-17.066667-8.533333-12.8 0-25.6 12.8-29.866667l174.933334-55.466666-34.133334-140.8-34.133333 59.733333C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 204.8 170.666667 366.933333 375.466667 366.933334 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-25.6 25.6-25.6zM392.533333 469.333333V413.866667h115.2c0 17.066667-4.266667 29.866667-4.266666 46.933333v157.866667c0 17.066667 0 29.866667 4.266666 46.933333h-68.266666c0-12.8 4.266667-29.866667 4.266666-46.933333V469.333333H392.533333z m153.6 145.066667v-55.466667c12.8-12.8 12.8-12.8 29.866667-34.133333l68.266667-76.8c12.8-17.066667 21.333333-25.6 29.866666-34.133333h64c0 17.066667-4.266667 29.866667-4.266666 51.2v98.133333h8.533333c8.533333 0 21.333333 0 29.866667-4.266667v55.466667H733.866667v12.8c0 17.066667 0 25.6 4.266666 38.4h-64c0-8.533333 4.266667-21.333333 4.266667-38.4v-12.8h-132.266667z m123.733334-51.2v-34.133333-42.666667c-4.266667 8.533333-12.8 12.8-17.066667 25.6l-42.666667 51.2h59.733334zM512 281.6c-136.533333 0-247.466667 106.666667-247.466667 243.2 0 132.266667 110.933333 243.2 247.466667 243.2 55.466667 0 106.666667-17.066667 149.333333-51.2 12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 34.133333-110.933333 55.466667-179.2 55.466667-162.133333 0-294.4-132.266667-294.4-290.133334 0-157.866667 132.266667-290.133333 294.4-290.133333 55.466667 0 110.933333 17.066667 157.866667 46.933333l-68.266667 21.333334c-25.6-12.8-59.733333-17.066667-89.6-17.066667z">
      </path>
    </symbol>
    <symbol id="lazadaicon_optionChecked" viewBox="0 0 1024 1024">
      <path d="M1023.6802 0v1023.3604H0.3198L1023.6802 0z" fill="#0a5d24"></path>
      <path
        d="M652.072455 910.790756l-173.971268-173.331668 49.249219-49.249219 124.722049 124.722049 263.515303-263.515303 48.609619 49.249219-312.124922 312.124922zM0.3198 1023.3604v-63.960025L959.720175 0h63.960025v44.772017L45.091818 1024 0.3198 1023.3604z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_google" viewBox="0 0 1024 1024">
      <path
        d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
        fill="#D34836"></path>
      <path
        d="M583.68 559.104v-81.92H389.12v81.92h112.64c-16.384 49.152-63.488 81.92-116.736 81.92-51.2 0-114.688-47.104-114.688-122.88 0-69.632 49.152-122.88 114.688-122.88 30.72 0 61.44 12.288 81.92 30.72l59.392-59.392c-36.864-34.816-86.016-55.296-139.264-55.296-112.64 0-202.752 92.16-202.752 202.752s92.16 202.752 202.752 202.752c106.496 4.096 184.32-61.44 196.608-157.696zM839.68 483.328v51.2h-71.68v71.68H716.8v-71.68h-71.68v-51.2H716.8v-71.68h51.2v71.68H839.68z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_twitter" viewBox="0 0 1024 1024">
      <path
        d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
        fill="#5EAADE"></path>
      <path
        d="M784.384 346.112c-20.48 8.192-40.96 14.336-63.488 18.432 22.528-14.336 40.96-34.816 49.152-61.44-22.528 12.288-45.056 22.528-71.68 26.624-20.48-22.528-49.152-34.816-81.92-34.816-61.44 0-112.64 49.152-112.64 112.64 0 8.192 0 16.384 2.048 24.576-92.16-4.096-176.128-49.152-231.424-116.736-8.192 14.336-14.336 32.768-14.336 53.248 0 38.912 20.48 73.728 49.152 92.16-18.432 0-34.816-6.144-51.2-14.336v2.048c0 53.248 38.912 100.352 90.112 110.592-10.24 2.048-18.432 4.096-28.672 4.096-8.192 0-14.336 0-20.48-2.048 14.336 45.056 55.296 77.824 104.448 77.824-38.912 30.72-86.016 47.104-139.264 47.104-8.192 0-18.432 0-26.624-2.048 49.152 32.768 108.544 51.2 172.032 51.2 206.848 0 319.488-169.984 319.488-319.488v-14.336c20.48-14.336 38.912-34.816 55.296-55.296z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_pinterest" viewBox="0 0 1024 1024">
      <path
        d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
        fill="#CA242D"></path>
      <path
        d="M354.304 555.008c12.288 8.192 20.48 10.24 24.576-2.048 4.096-12.288 4.096-16.384 6.144-28.672 2.048-12.288 0-12.288-10.24-24.576-10.24-14.336-26.624-53.248-4.096-114.688 24.576-69.632 94.208-100.352 155.648-96.256 61.44 4.096 118.784 36.864 120.832 120.832 2.048 79.872-24.576 124.928-36.864 139.264-12.288 14.336-43.008 47.104-83.968 28.672-49.152-22.528-22.528-71.68-18.432-90.112 4.096-20.48 26.624-63.488 16.384-102.4-8.192-24.576-43.008-36.864-61.44-22.528-26.624 20.48-32.768 38.912-36.864 67.584-4.096 30.72 10.24 61.44 10.24 61.44s-32.768 131.072-38.912 165.888c-8.192 47.104-12.288 77.824-4.096 120.832 2.048 10.24 8.192 14.336 14.336 4.096 14.336-22.528 43.008-65.536 55.296-116.736 8.192-36.864 16.384-69.632 16.384-69.632s20.48 34.816 61.44 38.912c40.96 4.096 83.968-2.048 133.12-53.248 47.104-51.2 57.344-151.552 51.2-192.512-8.192-53.248-53.248-137.216-151.552-153.6-108.544-18.432-172.032 26.624-186.368 38.912-28.672 22.528-77.824 69.632-81.92 147.456-8.192 100.352 32.768 122.88 49.152 133.12z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_tumblr" viewBox="0 0 1024 1024">
      <path
        d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
        fill="#181818"></path>
      <path
        d="M649.216 679.936l26.624 81.92c-6.144 8.192-18.432 16.384-38.912 22.528-20.48 6.144-40.96 10.24-61.44 10.24-24.576 0-45.056-2.048-65.536-8.192-20.48-6.144-36.864-14.336-49.152-24.576L430.08 724.992c-8.192-14.336-14.336-26.624-18.432-40.96-4.096-14.336-6.144-26.624-6.144-40.96v-186.368H348.16v-73.728c16.384-6.144 30.72-14.336 45.056-24.576 12.288-10.24 22.528-20.48 30.72-30.72 8.192-10.24 14.336-22.528 20.48-34.816 6.144-12.288 10.24-24.576 12.288-34.816l6.144-30.72c0-2.048 0-2.048 2.048-2.048l2.048-2.048h83.968V368.64h114.688v86.016h-114.688v178.176c0 6.144 0 12.288 2.048 18.432 2.048 6.144 4.096 12.288 8.192 18.432 4.096 6.144 10.24 10.24 16.384 14.336s16.384 4.096 28.672 4.096c14.336 2.048 28.672-2.048 43.008-8.192z"
        fill="#FFFFFF"></path>
    </symbol>
    <symbol id="lazadaicon_next" viewBox="0 0 1024 1024">
      <path
        d="M618.66666633 516.26666699L281.60000033 853.33333299l85.333333 85.33333401L789.33333332 516.266667l-4.266667-4.266667-422.39999999-422.4-85.333333 85.333333 341.333333 341.33333399z">
      </path>
    </symbol>
    <symbol id="lazadaicon_delete" viewBox="0 0 1024 1024">
      <path
        d="M896 204.8L819.2 128 512 435.2 204.8 128 128 204.8l307.2 307.2L128 819.2 204.8 896l307.2-307.2 307.2 307.2 76.8-76.8-307.2-307.2z">
      </path>
    </symbol>
    <symbol id="lazadaicon_add" viewBox="0 0 1024 1024">
      <path d="M544 480v-160h-64v160h-160v64h160v160h64v-160h160v-64h-160z"></path>
    </symbol>
    <symbol id="lazadaicon_reduce" viewBox="0 0 1024 1024">
      <path d="M320 480h384v64h-384z"></path>
    </symbol>
    <symbol id="lazadaicon_check" viewBox="0 0 1024 1024">
      <path
        d="M840.533333 213.333333L938.666667 311.466667 362.666667 883.2 85.333333 605.866667l98.133334-98.133334 179.2 179.2z">
      </path>
    </symbol>
    <symbol id="lazadaicon_back" viewBox="0 0 1024 1024">
      <path
        d="M912.00000031 464H303.99999969l280.00000031-280.00000031L512 111.99999969 111.99999969 512l400.00000031 400.00000031 72-72-280.00000031-280.00000031H912.00000031z">
      </path>
    </symbol>
    <symbol id="lazadaicon_ellipsis" viewBox="0 0 1024 1024">
      <path
        d="M682.666667 512c0-46.933333 38.4-85.333333 85.333333-85.333333s85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333-85.333333-38.4-85.333333-85.333333z m-85.33333399 0c0 46.933333-38.4 85.333333-85.33333301 85.33333301s-85.333333-38.4-85.33333301-85.33333301 38.4-85.333333 85.33333301-85.33333301 85.333333 38.4 85.33333301 85.33333301z m-256.00000001 0c0 46.933333-38.4 85.333333-85.333333 85.333333s-85.333333-38.4-85.333333-85.333333 38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333z"
        fill="#808080"></path>
    </symbol>
    <symbol id="lazadaicon_bgCircle" viewBox="0 0 1024 1024">
      <path
        d="M512 512m-426.666667 0a426.666667 426.666667 0 1 0 853.333334 0 426.666667 426.666667 0 1 0-853.333334 0Z"
        fill="#0a5d24"></path>
    </symbol>
    <symbol id="lazadaicon_dropDownArrow" viewBox="0 0 1024 1024">
      <path d="M650.08 458.08l52.32 52.32L512 700.8l-190.4-190.4 52.32-52.32L512 596.16z" fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_btnCheck" viewBox="0 0 1024 1024">
      <path
        d="M433.694118 602.352941l-90.352942-90.352941-57.223529 57.223529 147.576471 141.552942 304.188235-337.317647-57.223529-57.22353-246.964706 286.117647zM512 60.235294c249.976471 0 451.764706 201.788235 451.764706 451.764706s-201.788235 451.764706-451.764706 451.764706S60.235294 761.976471 60.235294 512 262.023529 60.235294 512 60.235294z"
        fill="#FF330C"></path>
    </symbol>
    <symbol id="lazadaicon_addToCart" viewBox="0 0 1024 1024">
      <path
        d="M520.533333 738.133333c-34.133333 0-64 29.866667-64 64s29.866667 64 64 64 64-29.866667 64-64-25.6-64-64-64zM324.266667 213.333333v64h64l119.466666 251.733334-46.933333 76.8c-4.266667 8.533333-8.533333 21.333333-8.533333 34.133333 0 34.133333 29.866667 64 64 64h392.533333V640h-379.733333c-4.266667 0-8.533333-4.266667-8.533334-8.533333v-4.266667l29.866667-55.466667h243.2c25.6 0 46.933333-12.8 55.466667-34.133333l119.466666-213.333333c12.8-4.266667 12.8-4.266667 12.8-12.8 0-21.333333-12.8-34.133333-34.133333-34.133334H460.8L430.933333 213.333333H324.266667z m524.8 524.8c34.133333 0 64 29.866667 64 64s-29.866667 64-64 64-64-29.866667-64-64 29.866667-64 64-64z m-610.133334-256h123.733334V554.666667H238.933333v140.8H166.4V554.666667H42.666667v-72.533334h123.733333v-128h76.8v128z"
        fill="#9E9E9E"></path>
    </symbol>
    <symbol id="lazadaicon_tooltip" viewBox="0 0 1024 1024">
      <path
        d="M469.333333 725.333333h85.333334v-256h-85.333334v256z m42.666667-640C277.333333 85.333333 85.333333 277.333333 85.333333 512s192 426.666667 426.666667 426.666667 426.666667-192 426.666667-426.666667S746.666667 85.333333 512 85.333333z m0 768c-187.733333 0-341.333333-153.6-341.333333-341.333333s153.6-341.333333 341.333333-341.333333 341.333333 153.6 341.333333 341.333333-153.6 341.333333-341.333333 341.333333zM469.333333 384h85.333334V298.666667h-85.333334v85.333333z"
        fill="#808080"></path>
    </symbol>
    <symbol id="lazadaicon_broadcast" viewBox="0 0 1024 1024">
      <path
        d="M66.28571471 360.11428538v303.87428619h197.99999994L512 917.18857149V106.81142851L264.28571481 360.11428538H66.28571471zM734.85714313 512c0-91.13142842-49.57714313-167.14285687-123.84-202.59428526v405.18857052C685.27999998 679.14285687 734.85714313 603.23428535 734.85714313 512zM611.01714313 66.28571471v106.35428524c143.65714313 45.60000006 247.6457147 177.2571431 247.64571372 339.3942854 0 162.06857149-104.02285691 293.76000001-247.64571372 339.32571454V957.71428529C809.12000005 912.11428539 957.71428529 729.78285684 957.71428529 512 957.71428529 294.28571476 809.12000005 111.88571461 611.01714313 66.28571471z"
        fill="#26A96D"></path>
    </symbol>
    <symbol id="lazadaicon_close" viewBox="0 0 1024 1024">
      <path
        d="M555.424 516.608l158.4-158.4-54.336-54.304-158.4 158.4-153.856-153.856-54.304 54.304 153.888 153.856-149.344 149.344 54.304 54.304 149.344-149.344 153.856 153.856 54.304-54.304-153.856-153.856z m-43.008 472.64c-265.088 0-480-214.944-480-480 0-265.12 214.912-480 480-480 265.088 0 480 214.88 480 480 0 265.056-214.912 480-480 480z">
      </path>
    </symbol>
    <symbol id="lazadaicon_closeBtn" viewBox="0 0 1024 1024">
      <path
        d="M0 512C0 229.23 229.23 0 512 0s512 229.23 512 512-229.23 512-512 512S0 794.77 0 512z m768-204.8L716.8 256 512 460.8 307.2 256 256 307.2 460.8 512 256 716.8l51.2 51.2L512 563.2 716.8 768l51.2-51.2L563.2 512 768 307.2z"
        fill="#D1D3D4"></path>
    </symbol>
    <symbol id="lazadaicon_installment" viewBox="0 0 1024 1024">
      <path
        d="M776.7552 779.6224l-3.0464 0.4864v-41.856l3.072 0.4864c23.04 3.4816 39.04 13.568 39.0144 20.3776 0 6.8864-16.0256 16.9984-39.04 20.5056z m-32.2304-73.6l-3.0208-0.384c-25.472-3.4048-41.0624-14.336-41.1136-20.7104 0.0768-6.3744 15.7184-17.3568 41.1136-20.7616l3.0208-0.384v42.24z m88.192 26.2912a47.8976 47.8976 0 0 0-11.0592-6.9632c-10.5728-5.0944-26.4192-9.6-45.7472-13.056l-2.2016-0.4096v-47.9488l3.072 0.4608c17.92 2.7136 30.5152 9.1136 35.9168 14.7712l28.2624-10.0352c-9.1648-17.7408-33.6896-30.8224-64.896-34.4064l-2.3552-0.2816v-25.7536h-29.184v25.5744l-2.4064 0.2304c-41.728 4.224-70.8352 24.9856-70.8352 50.4576 0 12.9024 7.2192 24.6784 21.0432 34.048l1.1264 0.5888c6.6816 3.5328 21.8624 10.1376 48.8448 14.4896l2.2272 0.3584v45.9264l-3.0208-0.4096c-19.712-2.6624-34.048-9.9584-39.0144-16.2304l-29.0304 7.1424c7.424 20.1472 33.9712 35.2256 68.6592 38.7584l2.4064 0.256v26.24l29.184 0.0256v-26.4704l2.3552-0.256c40.576-4.6592 68.9152-25.3696 68.9152-50.304 0-8.6784-3.2768-16.8192-9.6256-24.1408a64.1536 64.1536 0 0 0-2.6368-2.6624z m-74.624 137.7792c-83.968 0-152.2944-68.7104-152.2944-153.1648 0-84.4544 68.352-153.1904 152.32-153.1904 84.0192 0 152.3456 68.736 152.3456 153.1904s-68.3264 153.1648-152.3712 153.1648z m0-347.6224c-106.624 0-193.3824 87.2448-193.3824 194.4576 0 107.2384 86.784 194.432 193.3824 194.432 106.6752 0 193.4336-87.1936 193.4336-194.432 0-107.2128-86.7584-194.4576-193.4336-194.4576z m-467.0976 94.4384h53.8368v-54.144h-53.8368v54.144z m0 108.0064h53.8112v-54.144h-53.8368v54.144z m0-216.064h53.8368v-54.144h-53.8368v54.144z m-107.3152 108.0576H237.568v-54.144H183.68v54.144z m0 108.0064h53.8368v-54.144H183.6544v54.144z m214.6816-216.064h53.8368v-54.144h-53.8368v54.144zM118.528 788.8128a20.5312 20.5312 0 0 1-20.1984-20.3008V389.8368h652.032v96.2304c1.8944-0.0256 3.6096-0.256 5.5296-0.256 14.6688 0 28.3648 1.408 41.5744 3.584V217.728a67.6864 67.6864 0 0 0-67.328-67.6608h-71.6288v47.36h71.6288c10.9568 0 20.224 9.3184 20.224 20.3008v124.7488H98.304V217.728c0-10.9824 9.2672-20.3008 20.224-20.3008h85.8624v60.5952a23.6032 23.6032 0 0 0 47.1552 0V197.4272h0.128v-47.36h-0.128V100.48A23.6288 23.6288 0 0 0 227.9936 76.8a23.6544 23.6544 0 0 0-23.6032 23.68v49.5872H118.528A67.6864 67.6864 0 0 0 51.2 217.728V768.512a67.6864 67.6864 0 0 0 67.328 67.6864h447.7952a236.5696 236.5696 0 0 1-19.456-47.3856H118.4768z m439.2448-530.7904a23.6032 23.6032 0 0 0 47.1296 0V100.48a23.6288 23.6288 0 0 0-23.552-23.68 23.6544 23.6544 0 0 0-23.552 23.68v49.5616h-75.648v47.3856h75.6224v60.5952z m-176.64 0c0 13.0816 10.5216 23.6544 23.552 23.6544a23.552 23.552 0 0 0 23.552-23.6544V197.4272h0.0768V150.0416h-0.1024V100.48A23.6032 23.6032 0 0 0 404.6592 76.8a23.6288 23.6288 0 0 0-23.552 23.68v49.5616h-75.5968v47.3856h75.5712v60.5952z m17.2544 466.8928h53.8368v-54.144h-53.8368v54.144z m0-108.0064h53.8368v-54.144h-53.8368v54.144z m107.3664-108.0576h53.8624v-54.144h-53.8624v54.144z"
        fill="#183545"></path>
    </symbol>
    <symbol id="lazadaicon_im" viewBox="0 0 1024 1024">
      <path
        d="M675.84 499.712c0 4.096 0 8.192-4.096 12.288 0 4.096-4.096 8.192-8.192 12.288-4.096 4.096-8.192 4.096-12.288 8.192-4.096 0-8.192 4.096-12.288 4.096H286.72l-143.36 143.36V180.224c0-4.096 0-8.192 4.096-12.288 0-4.096 4.096-8.192 8.192-12.288 0-4.096 4.096-8.192 8.192-8.192s8.192-4.096 12.288-4.096h462.848c4.096 0 8.192 0 12.288 4.096 4.096 0 8.192 4.096 12.288 8.192 4.096 4.096 4.096 8.192 8.192 12.288 0 4.096 4.096 8.192 4.096 12.288v319.488z m167.936-192.512c4.096 0 8.192 0 12.288 4.096 4.096 0 8.192 4.096 12.288 8.192 4.096 4.096 4.096 8.192 8.192 12.288 0 4.096 4.096 8.192 4.096 12.288v536.576L737.28 737.28H344.064c-4.096 0-8.192 0-12.288-4.096-4.096 0-8.192-4.096-12.288-8.192-4.096-4.096-4.096-8.192-8.192-12.288 0-4.096-4.096-8.192-4.096-12.288v-69.632h466.944V307.2h69.632z">
      </path>
    </symbol>
    <symbol id="lazadaicon_emptyHeart" viewBox="0 0 1024 1024">
      <path
        d="M516.266667 874.666667l-328.533334-324.266667c-76.8-76.8-76.8-200.533333 0-277.333333 34.133333-42.666667 85.333333-59.733333 136.533334-59.733334s102.4 21.333333 140.8 55.466667L512 320l46.933333-46.933333c38.4-42.666667 89.6-59.733333 140.8-59.733334s102.4 21.333333 140.8 55.466667c38.4 38.4 55.466667 85.333333 55.466667 136.533333s-21.333333 102.4-55.466667 136.533334l-324.266666 332.8zM324.266667 260.266667c-42.666667 0-76.8 12.8-106.666667 42.666666-55.466667 55.466667-59.733333 153.6 0 213.333334L512 810.666667l294.4-294.4c29.866667-29.866667 42.666667-64 42.666667-106.666667 0-38.4-12.8-76.8-42.666667-106.666667-55.466667-55.466667-153.6-55.466667-213.333333 0L512 384l-81.066667-81.066667c-25.6-29.866667-64-42.666667-106.666666-42.666666z"
        fill="#808080"></path>
    </symbol>
    <symbol id="lazadaicon_fullHeart" viewBox="0 0 1024 1024">
      <path
        d="M704 128c-72.533333 0-145.066667 34.133333-192 89.6-46.933333-55.466667-119.466667-89.6-192-89.6-132.266667 0-234.666667 102.4-234.666667 234.666667 0 162.133333 145.066667 294.4 362.666667 490.666666l64 55.466667 64-55.466667c217.6-200.533333 362.666667-332.8 362.666667-490.666666 0-132.266667-102.4-234.666667-234.666667-234.666667z"
        fill="#939598"></path>
    </symbol>
    <symbol id="lazadaicon_mute" viewBox="0 0 1024 1024">
      <path
        d="M1024 451.142621l-63.346759-63.329104-89.15862 89.176276-89.193931-89.158621-63.382069 63.311449 89.229241 89.193931-89.229241 89.193931 63.346758 63.329103 89.229242-89.193931 89.15862 89.193931L1024 629.530483l-89.193931-89.193931zM0 280.364138v463.271724h227.116138L647.062069 1019.003586V4.996414L227.186759 280.364138H0z m94.119724 94.119724h99.998897V649.533793H94.102069V374.466207zM552.96 844.729379l-264.686345-173.550345v-318.322758l264.686345-173.585655v665.458758z">
      </path>
    </symbol>
    <symbol id="lazadaicon_sound" viewBox="0 0 1024 1024">
      <path
        d="M643.990069 8.474483L226.674759 282.129655H0.865103v460.446897h225.739035l417.368276 273.655172V8.474483h0.017655zM94.419862 375.684414h99.36331V649.004138H94.419862V375.702069z m456.033104 467.367724l-263.09738-172.491035V354.198069l263.079724-172.526345v661.362759zM745.613241 383.735172h93.554759v257.218207h-93.554759zM930.445241 302.856828H1024v419.027862h-93.554759z">
      </path>
    </symbol>
    <symbol id="lazadaicon_smallScreen" viewBox="0 0 1024 1024">
      <path
        d="M105.6 105.6h208.384V0H0v309.141333h105.6zM918.4 705.216v213.184h-208.405333V1024H1024V705.216zM84.394667 676.394667h190.613333L18.752 932.650667l74.666667 74.666666 256.256-256.256v190.634667h105.6V570.794667H84.394667zM939.626667 347.605333h-190.634667L1005.226667 91.349333l-74.666667-74.666666-256.213333 256.256V82.325333h-105.6v370.88h370.88z">
      </path>
    </symbol>
    <symbol id="lazadaicon_largeScreen" viewBox="0 0 1024 1024">
      <path
        d="M105.621333 309.162667V105.621333h208.384V0.021333H0v309.141334zM710.4 105.621333h208.405333v203.541334h105.6V0.021333H710.4zM313.984 918.378667H105.621333v-213.184H0v318.784h313.984zM918.784 705.194667v213.184H710.4v105.6h313.962667V705.194667z">
      </path>
    </symbol>
    <symbol id="lazadaicon_arrowDown" viewBox="0 0 1024 1024">
      <path d="M806.4 341.333333l89.6 89.6-384 379.733334-384-379.733334L217.6 341.333333l294.4 294.4z"></path>
    </symbol>
    <symbol id="lazadaicon_arrowUp" viewBox="0 0 1024 1024">
      <path d="M806.4 768l89.6-89.6L512 298.666667l-384 379.733333L217.6 768l294.4-294.4z"></path>
    </symbol>
    <symbol id="lazadaicon_star_half" viewBox="0 0 1024 1024">
      <path
        d="M512 797.866667l260.266667 166.4c8.533333 4.266667 21.333333 4.266667 29.866666-8.533334 4.266667-4.266667 4.266667-8.533333 4.266667-17.066666l-68.266667-315.733334 234.666667-213.333333c8.533333-8.533333 8.533333-21.333333 0-29.866667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333l-307.2-25.6-119.466667-294.4c-4.266667-12.8-17.066667-17.066667-29.866666-12.8l-12.8 12.8-115.2 294.4-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z"
        fill="#EFF0F5"></path>
      <path
        d="M512 797.866667V51.2c0-4.266667-4.266667-8.533333-8.533333-8.533333s-8.533333 4.266667-8.533334 4.266666l-119.466666 298.666667-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z">
      </path>
    </symbol>
    <symbol id="lazadaicon_star_full" viewBox="0 0 1024 1024">
      <path
        d="M512 797.866667l260.266667 166.4c8.533333 4.266667 21.333333 4.266667 29.866666-8.533334 4.266667-4.266667 4.266667-8.533333 4.266667-17.066666l-68.266667-315.733334 234.666667-213.333333c8.533333-8.533333 8.533333-21.333333 0-29.866667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333l-307.2-25.6-119.466667-294.4c-4.266667-12.8-17.066667-17.066667-29.866666-12.8l-12.8 12.8-115.2 294.4-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z">
      </path>
    </symbol>
    <symbol id="lazadaicon_location" viewBox="0 0 1024 1024">
      <path
        d="M520.533333 264.533333c-42.666667 0-76.8 12.8-106.666666 42.666667s-42.666667 64-42.666667 106.666667 12.8 76.8 42.666667 106.666666 64 42.666667 106.666666 42.666667 76.8-12.8 106.666667-42.666667 42.666667-68.266667 42.666667-106.666666c0-42.666667-12.8-76.8-42.666667-106.666667s-68.266667-42.666667-106.666667-42.666667z m0 34.133334c34.133333 0 59.733333 8.533333 81.066667 34.133333 21.333333 21.333333 34.133333 51.2 34.133333 81.066667 0 34.133333-12.8 59.733333-34.133333 81.066666s-51.2 34.133333-81.066667 34.133334c-34.133333 0-59.733333-12.8-81.066666-34.133334s-34.133333-51.2-34.133334-81.066666c0-34.133333 12.8-59.733333 34.133334-81.066667s46.933333-34.133333 81.066666-34.133333z">
      </path>
      <path
        d="M729.6 187.733333c-59.733333-55.466667-128-85.333333-209.066667-85.333333-81.066667 0-153.6 29.866667-209.066666 85.333333-59.733333 55.466667-85.333333 128-85.333334 209.066667 0 55.466667 12.8 102.4 38.4 149.333333 0 0 4.266667 4.266667 4.266667 8.533334l230.4 358.4c8.533333 12.8 21.333333 12.8 29.866667 0l247.466666-362.666667c29.866667-46.933333 42.666667-98.133333 42.666667-153.6 0-81.066667-29.866667-153.6-89.6-209.066667z m-21.333333 21.333334c51.2 51.2 76.8 110.933333 76.8 183.466666 0 51.2-12.8 93.866667-34.133334 132.266667l-247.466666 362.666667h29.866666L298.666667 533.333333c0-4.266667-8.533333-8.533333-4.266667-8.533333-21.333333-38.4-34.133333-81.066667-34.133333-128 0-72.533333 25.6-132.266667 76.8-183.466667 51.2-51.2 110.933333-76.8 183.466666-76.8 72.533333 0 132.266667 21.333333 187.733334 72.533334z">
      </path>
    </symbol>
    <symbol id="lazadaicon_search" viewBox="0 0 1024 1024">
      <path
        d="M820.662857 785.554286L635.611429 600.502857c33.645714-43.154286 52.662857-95.817143 52.662857-151.405714 0-65.097143-25.6-126.537143-71.68-173.348572-46.811429-45.348571-108.251429-70.948571-173.348572-70.948571-65.828571 0-127.268571 25.6-173.348571 71.68-46.08 46.08-71.68 107.52-71.68 173.348571s25.6 126.537143 71.68 173.348572c46.08 46.08 107.52 71.68 173.348571 71.68 64.365714 0 124.342857-24.868571 170.422857-69.485714l183.588572 183.588571 23.405714-23.405714zM444.708571 664.868571c-57.051429 0-110.445714-21.942857-151.405714-62.902857-40.228571-40.228571-62.902857-93.622857-62.902857-150.674285 0-57.051429 21.942857-110.445714 62.902857-150.674286 40.96-40.96 94.354286-62.902857 151.405714-62.902857 57.051429 0 110.445714 21.942857 150.674286 62.902857S658.285714 394.24 658.285714 451.291429s-21.942857 110.445714-62.902857 150.674285c-40.228571 40.228571-93.622857 62.902857-150.674286 62.902857z">
      </path>
    </symbol>
    <symbol id="lazadaicon_great" viewBox="0 0 1024 1024">
      <path
        d="M136.533333 849.066667h140.8v-426.666667H136.533333v426.666667z m785.066667-388.266667c0-38.4-34.133333-72.533333-72.533333-72.533333h-226.133334l34.133334-162.133334V213.333333c0-12.8-4.266667-29.866667-17.066667-38.4l-38.4-38.4-230.4 234.666667c-12.8 12.8-21.333333 34.133333-21.333333 51.2v354.133333c0 38.4 34.133333 72.533333 72.533333 72.533334h320c29.866667 0 55.466667-17.066667 64-42.666667l106.666667-251.733333c4.266667-8.533333 4.266667-17.066667 4.266666-25.6v-68.266667h4.266667z">
      </path>
    </symbol>
  </svg>
  <script type="text/javascript" id="beacon-aplus" src="https://g.lazcdn.com/g/alilog/mlog/aplus_int.js"
    exparams="clog=o&amp;aplus&amp;sidx=aplusSidx&amp;ckx=aplusCkx" async="" defer=""></script>

  <div class="mui-zebra-module" id="J_icms-5004710-1520248008751" data-module-id="icms-5004710-1520248008751"
    data-version="5.0.5" data-spm="icms-5004710-1520248008751">
    <script
      type="text/javascript">try { if (typeof window === "object") { window.CROSSIMAGE_GRAYSCALE_RULE = { "id-live-01.slatic.net": "id-test-11.slatic.net", "id-live-02.slatic.net": "id-test-11.slatic.net", "id-live-03.slatic.net": "id-test-11.slatic.net", "id-live.slatic.net": "id-test-11.slatic.net", }; window.crossimageConfig = { quality: "q80", }; } } catch (error) { console.log("CROSSIMAGE CONFIG ERROR"); }</script>
  </div>

  <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "<?php echo $BRANDS ?>: Link Situs Terpercaya Dengan Layanan Fast Respond",
        "image": "https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png",
        "description": "<?php echo $BRANDS ?> adalah situs terpercaya karena sudah memiliki lisensi resmi dan juga memiliki pelayanan terbaik fast respond selama 24 jam penuh.",
        "url": "https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>",
        "brand": {
          "@type": "Brand",
          "name": "<?php echo $BRANDS ?>"
        },
        "offers": {
          "@type": "Offer",
          "url": "https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>",
          "price": "10000",
          "priceCurrency": "IDR",
          "priceValidUntil": "2025-03-03",
          "availability": "http://schema.org/InStock",
          "hasMerchantReturnPolicy": {
            "@type": "MerchantReturnPolicy",
            "refundType": "http://schema.org/FullRefund",
            "merchantReturnLink": "https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>",
            "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
            "merchantReturnDays": 60,
            "returnMethod": "https://schema.org/ReturnByMail",
            "returnFees": "https://schema.org/FreeReturn",
            "returnPolicyCountry": {
              "@type": "Country",
              "name": "ID"
            },
            "applicableCountry": {
              "@type": "Country",
              "name": "ID"
            }
          },
          "shippingDetails": {
            "@type": "OfferShippingDetails",
            "shippingRate": {
              "@type": "MonetaryAmount",
              "value": "1000",
              "currency": "IDR"
            },
            "shippingDestination": {
              "@type": "DefinedRegion",
              "addressCountry": {
                "@type": "Country",
                "name": "ID"
              }
            },
            "deliveryTime": {
              "@type": "ShippingDeliveryTime",
              "cutoffTime": "15:00",
              "handlingTime": {
                "@type": "QuantitativeValue",
                "value": "1-2",
                "unitCode": "DAY",
                "minValue": 1,
                "maxValue": 2
              },
              "transitTime": {
                "@type": "QuantitativeValue",
                "value": "2-3",
                "unitCode": "DAY",
                "minValue": 2,
                "maxValue": 3
              }
            }
          }
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.9",
          "reviewCount": "88888"
        },
        "review": {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "author": {
            "@type": "Person",
            "name": "lil"
          },
          "reviewBody": "Product <?php echo $BRANDS ?>"
        }
      }
    </script>
  <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [{
            "@type": "Question",
            "name": "Apa itu situs <?php echo $BRANDS ?>?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Situs <?php echo $BRANDS ?> merupakan situs permainan online yang memiliki akses termudah dan bisa dimainkan di mana pun karena support beragam device."
            }
          },{
            "@type": "Question",
            "name": "Kenapa kamu wajib daftar di <?php echo $BRANDS ?>?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "<?php echo $BRANDS ?> daftar dan login ini bisa memberikan banyak keuntungan, mulai dari bonus new member hingga bonus cashback harian khusus member aktif."
            }
          },{
            "@type": "Question",
            "name": "Metode pembayaran apa yang ada di <?php echo $BRANDS ?>?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Situs <?php echo $BRANDS ?> punya metode pembayaran paling lengkap yaitu dengan transfer bank, E-Wallet, pulsa, dan Qris."
            }
          },{
            "@type": "Question",
            "name": "Apakah situs <?php echo $BRANDS ?> ini terpercaya?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Link <?php echo $BRANDS ?> merupakan situs permainan online terpercaya karena sudah memiliki lisensi resmi dan punya reputasi sangat baik di media sosial."
            }
          },{
            "@type": "Question",
            "name": "Berapa winrate permainan di situs <?php echo $BRANDS ?>?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Situs <?php echo $BRANDS ?> memiliki rata-rata RTP di atas 95% sehingga mudah bagi kamu untuk memenangkan hadiah."
            }
          }]
        }
        </script>
  <script>window.__bl = {}; (window._blReport = function (e, t) { window.__bl && (__bl.api ? __bl[e].apply(__bl, t) : ((__bl.pipe = __bl.pipe || []), __bl.pipe.push([e].concat(t)))); }), window.addEventListener("error", function (e) { _blReport("error", [e.error, e]); }), window.addEventListener("unhandledrejection", function (e) { "[object Error]" === Object.prototype.toString.call(e.reason) && _blReport("error", [e.reason]); });</script>
  <script>window.g_config = window.g_config || {}; window.g_config.regionID = "ID"; window.g_config.language = "id";</script>
  <script
    src="https://g.lazcdn.com/g/lzd/assets/1.2.13/??babel-polyfill/6.26.0/polyfill.min.js,react/16.8.0/react.production.min.js,react-dom/16.8.0/react-dom.production.min.js"></script>
  <script src="https://g.lazcdn.com/g/lzd/assets/0.0.5/next/0.19.21/next.min.js"></script>
  <link rel="stylesheet"
    href="https://g.lazcdn.com/g/lzdmod/??site-nav-pc/5.2.43/pc/index.css,site-menu-nav-pc/5.0.83/pc/index.css,site-menu-pc/5.0.51/pc/index.css">
  <script>window.g_config = window.g_config || {}; window.g_config.loadedCss = window.g_config.loadedCss || []; window.g_config.loadedCss = ["@ali/lzdmod-site-nav-pc/pc/index.css", "@ali/lzdmod-site-menu-nav-pc/pc/index.css", "@ali/lzdmod-site-menu-pc/pc/index.css",];</script>
  <div class="mui-zebra-module" id="J_icms-5000458-1511711480682" data-module-id="icms-5000458-1511711480682"
    data-version="5.2.43" data-spm="icms-5000458-1511711480682">
    <script>(function () { try { if (window.aplusPageIdSetComplete || /AliApp/i.test(navigator.userAgent)) { return; } var get_cookie = function (sName) { var sRE = "(?:; )?" + sName + "=([^;]*);?"; var oRE = new RegExp(sRE); if (oRE.test(document.cookie)) { var str = decodeURIComponent(RegExp["$1"]) || ""; if (str.trim().length > 0) { return str; } else { return "-"; } } else { return "-"; } }; var getRand = function () { var page_id = get_cookie("cna") || "001"; page_id = page_id.toLowerCase().replace(/[^a-z\d]/g, ""); page_id = page_id.substring(0, 16); var d = new Date().getTime(); var randend = [page_id, d.toString(16)].join(""); for (var i = 1; i < 10; i++) { var _r = parseInt(Math.round(Math.random() * 10000000000), 10).toString(16); randend += _r; } randend = randend.substr(0, 42); return randend; }; var pageid = getRand(); var aq = window.aplus_queue || (window.aplus_queue = []); aq.push({ action: "aplus.appendMetaInfo", arguments: ["aplus-cpvdata", { pageid: pageid }], }); aq.push({ action: "aplus.appendMetaInfo", arguments: ["aplus-exdata", { st_page_id: pageid }], }); var gq = window.goldlog_queue || (window.goldlog_queue = []); gq.push({ action: "goldlog.appendMetaInfo", arguments: ["aplus-cpvdata", { pageid: pageid }], }); gq.push({ action: "goldlog.appendMetaInfo", arguments: ["aplus-exdata", { st_page_id: pageid }], }); window.aplusPageIdSetComplete = true; } catch (err) { console.error(err); } })();</script>
    <link rel="stylesheet" href="https://g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.11/index.css">
    <script src="https://g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.11/index.js"></script>
    <script>window.g_config = window.g_config || {}; window.g_config.voyagerVersion = "2"; window.g_config.voyagerEnv = "product"; window.g_config.channel = "pdp"; window.g_config.showPcSearchboxHotWords = true;</script>
    <div id="J_LzdSiteNav" class="site-nav J_NavScroll" data-mod-name="@ali/lzdmod-site-nav-pc/pc/index"
      data-config="{}">
      <div class="lzd-header" data-spm="header" data-tag="links">
        <div id="topActionHeader" class="lzd-header-content-wrap J_NavScroll">
          <div class="lzd-header-content">
            <div class="lzd-links-bar" id="topActionLinks">
              <div class="links-list header-content ID id">
                <div class="top-links-item" id="topActionInternalFeedback" style="display: none">
                  <a class="highlight" target="_blank"
                    href="https://yida.alibaba-inc.com/alibaba/web/APP_NZEYXSPGPBMKO7Z1LCE5/inst/homepage/?spm=a2o42.home.header.d0.654346b5QeptXc#/"
                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d0">
                    INTERNAL FEEDBACK
                  </a>
                </div>
                <div class="top-links-item" id="topActionFeedback">
                  <a class="highlight" target="_blank" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>"
                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=dfeedback">Permainan</a>
                </div>
                <div class="top-links-item orange" id="topActionDownload"
                  data-spm-click="gostr=/lzdpub.header.tbar;locaid=d1">
                  <span><?php echo $BRANDS ?></span>
                  <div class="lzd-download-popup top-popup-wrap" id="lzdDownloadPopup">
                    <div class="top-popup-content lzd-download-content">
                      <div class="get-the-app-scope">
                        <div class="get-the-app">
                          <div class="get-the-app-title">
                            <?php echo $BRANDS ?> Terbaik 2025
                          </div>
                          <div class="get-the-app-promotion">
                            <div class="get-the-app-lazada-qr-wrap">
                              <img class="get-the-app-lazada-qr"
                                src="https://laz-img-cdn.alicdn.com/images/ims-web/TB1b43RtrvpK1RjSZFqXXcXUVXa.png"
                                alt="">
                            </div>

                            <div class="promotion-text">
                              <a href="https://pages.lazada.co.id/wow/i/id/IDCampaign/Download-App?hybrid=1">
                                <div class="get-the-app-download-text">
                                  <p>
                                    Daftar Game Online <?php echo $BRANDS ?> Paling Top:
                                  </p>
                                  <ul>
                                    <li>Mahjong Wins 3</li>
                                    <li>The Great Icescape</li>
                                    <li>Wild Bounty</li>
                                  </ul>
                                </div>
                              </a>
                            </div>
                          </div>
                          <form class="get-the-app-form" id="topActionDownloadForm">
                            <div class="top-input-wrap get-the-app-input-wrap">
                              <input class="tel-text top-input" id="topActionDownloadInput" placeholder="eg. 0123456789"
                                autocomplete="off">
                              <button class="top-button button-submit" id="txt-submit">
                                <i class="icon icon-arrow-on-button"></i>
                              </button>
                            </div>
                          </form>
                          <div class="success-message" id="topActionDownloadSuccessMsg">
                            <span class="alert alert-success">Success! Please check your
                              phone for the
                              download link
                            </span>
                          </div>
                          <div class="error-message" id="topActionDownloadErrorMsg"></div>
                          <div class="app-stores">
                            <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>" class="store-link">
                              <i class="app-apple"></i>
                            </a>
                            <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>" class="store-link">
                              <i class="app-google"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="top-links-item" id="topActionSell">
                  <a class="cyan" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>" data-spm-click="gostr=/lzdpub.header.tbar;locaid=d2">Link
                    <?php echo $BRANDS ?></a>
                </div>
                <div class="top-links-item" id="topActionCustomCare"
                  data-spm-click="gostr=/lzdpub.header.tbar;locaid=d3">
                  <span>Daftar <?php echo $BRANDS ?></span>
                  <div class="lzd-customcare-popup top-popup-wrap">
                    <div class="top-popup-content l-customcare-content">
                      <ul class="care-list">
                        <li class="care-item">
                          <a href="https://www.lazada.co.id/helpcenter/" class="care-item-anchor">
                            <span class="care-icon help-center"> </span>
                            Pusat Bantuan
                          </a>
                        </li>
                        <li class="care-item">
                          <a href="https://www.lazada.co.id/helpcenter/payments/" class="care-item-anchor">
                            <span class="care-icon order-payment"> </span>
                            Order &amp; Pembayaran
                          </a>
                          <a href="https://www.lazada.co.id/helpcenter/orders-payment/#answer-faq-howtocancel-ans"
                            class="care-item-anchor care-item-anchor-next">
                            Pembatalan Pesanan
                          </a>
                        </li>
                        <li class="care-item">
                          <a href="https://www.lazada.co.id/helpcenter/#answer-faq-delivery-ans"
                            class="care-item-anchor">
                            <span class="care-icon shipping-delivery"> </span>
                            Pengiriman
                          </a>
                        </li>
                        <li class="care-item">
                          <a href="https://www.lazada.co.id/helpcenter/returns/" class="care-item-anchor">
                            <span class="care-icon returns-refunds"> </span>
                            Pengembalian Barang &amp; Dana
                          </a>
                        </li>
                        <li class="care-item">
                          <div class="care-item-anchor">
                            <span class="care-icon chat"></span>
                            <span class="care-title">Hubungi kami di</span>
                            <span class="--js-csc-trigger">
                              <a href="javascript:;"> Live Chat (24 Jam) </a>
                            </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="top-links-item grey" id="topActionTrack"
                  data-spm-click="gostr=/lzdpub.header.tbar;locaid=d4">
                  <span>Situs permainan online Terbaik</span>
                  <div class="lzd-track-popup top-popup-wrap" id="lzdTrackPop">
                    <div class="top-popup-content lzd-track-content">
                      <div id="topActionMyLastOrder"></div>
                      <div class="track-title">LACAK PESANAN</div>
                      <form class="track-order-form" id="topActionTrackForm">
                        <label for="topActionTrackOrderNumber" class="top-input-label">Nomor
                          pesanan:</label>
                        <div class="top-input-wrap track-order-input-wrap">
                          <input placeholder="eg.123456789" id="topActionTrackOrderNumber" class="order-text top-input">
                          <button type="button" class="top-button button-submit">
                            <i class="icon icon-arrow-on-button"></i>
                          </button>
                        </div>
                        <p class="track-order-more-text">
                          Untuk bantuan silakan,<a
                            href="https://www.lazada.co.id/helpcenter/shipping-delivery/#answer-faq-trackorder-ans"
                            title="Untuk bantuan silakan,">Klik disini</a>
                        </p>
                      </form>
                      <div class="error-message" id="topActionTrackErrorMsg"></div>
                    </div>
                  </div>
                </div>

                <div class="top-links-item grey" id="anonLogin">
                  <a class="grey" href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>"
                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d5">DAFTAR</a>
                </div>
                <div class="top-links-item grey" id="anonSignup">
                  <a class="grey" href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>"
                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d6">LOGIN</a>
                </div>
                <div class="top-links-item top-links-item-hidden" id="topActionUserAccont"
                  data-spm-click="gostr=/lzdpub.header.tbar;locaid=d7">
                  <span id="myAccountTrigger" class="grey"></span>
                  <div class="lzd-account-popup top-popup-wrap" id="lzdMyAccountPop">
                    <div class="top-popup-content lzd-account-content">
                      <ul class="account-list">
                        <li class="account-item">
                          <a href="https://member.lazada.co.id/user/account#/" class="account-item-anchor">
                            <span class="account-icon test manage-account"></span>Panel Akun
                          </a>
                        </li>
                        <li class="account-item">
                          <a href="https://my.lazada.co.id/customer/order/index/" class="account-item-anchor">
                            <span class="account-icon test my-orders"></span>Pesanan Saya
                          </a>
                        </li>
                        <li class="account-item">
                          <a href="https://my.lazada.co.id/wishlist/index" class="account-item-anchor">
                            <span class="account-icon test wishlist"></span>Wishlist dan
                            Toko yang Saya Ikuti
                          </a>
                        </li>
                        <li class="account-item">
                          <a href="https://my.lazada.co.id/customer/myReview/my-reviews" class="account-item-anchor">
                            <span class="account-icon test my-reviews"></span>Ulasan Saya
                          </a>
                        </li>
                        <li class="account-item">
                          <a href="https://my.lazada.co.id/customer/returns/index?requestType=return"
                            class="account-item-anchor">
                            <span class="account-icon test returns"></span>Pengembalian
                            &amp; Pembatalan
                          </a>
                        </li>
                        <li class="account-item">
                          <a href="https://member.lazada.co.id/user/logout" class="account-item-anchor"
                            id="account-popup-logout">
                            <span class="account-icon test logout"></span>Logout
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="lzd-logo-bar">
              <div class="logo-bar-content header-content">
                <div class="lzd-logo-content">
                  <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>" data-spm="dhome"><img
                      src="https://res.cloudinary.com/dprkgulb9/image/upload/v1751297387/images_8_ub8qqa.jpg"
                      alt="<?php echo $BRANDS ?>"></a>
                </div>
                <div class="lzd-nav-search" data-spm="search">
                  <marquee behavior="" direction="">Daftar Sekarang dan dapatkan Bonus Terbesar <?php echo $BRANDS ?>!</marquee>
                  <div id="button" data-spm-click="gostr=/lzdpub.header.search;locaid=d_go"></div>
                </div>
                <div class="lzd-nav-menu-redmart" style="display: none">
                  <div class="mui-zebra-module" id="J_icms-5000527-1511531232618"
                    data-module-id="icms-5000527-1511531232618" data-version="5.0.83"
                    data-spm="icms-5000527-1511531232618">
                    <div class="lzd-site-nav-menu lzd-site-nav-menu-active"
                      data-mod-name="@ali/lzdmod-site-menu-nav-pc/pc/index" data-config="{}">
                      <div class="lzd-site-menu-nav-container">
                        <div class="lzd-site-menu-nav-category">
                          <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                            <span class="lzd-site-menu-nav-category-text"><?php echo $BRANDS ?></span>
                          </a>
                          <div class="lzd-site-menu-nav-menu">
                            <div class="mui-zebra-module" id="J_icms-5000518-1511530513406"
                              data-module-id="icms-5000518-1511530513406" data-version="5.0.51"
                              data-spm="icms-5000518-1511530513406">
                              <div class="lzd-site-nav-menu-dropdown" data-mod-name="@ali/lzdmod-site-menu-pc/pc/index"
                                data-config="{}">
                                <ul class="lzd-site-menu-root" data-spm="cate">
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No1">
                                    <a>
                                      <span>Peralatan Elektronik</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No2">
                                    <a>
                                      <span>Aksesoris Elektronik</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No3">
                                    <a>
                                      <span>Fashion &amp; Aksesoris Wanita</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No4">
                                    <a>
                                      <span>Fashion &amp; Aksesoris Pria</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No5">
                                    <a>
                                      <span>Fashion &amp; Aksesoris Anak</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No6">
                                    <a>
                                      <span>Kesehatan &amp; Kecantikan</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No7">
                                    <a>
                                      <span>Bayi &amp; Mainan</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No8">
                                    <a>
                                      <span>TV &amp; Elektronik Rumah</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No9">
                                    <a>
                                      <span>Keperluan Rumah &amp; Gaya
                                        Hidup</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No10">
                                    <a>
                                      <span>Kebutuhan Rumah Tangga</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No11">
                                    <a>
                                      <span>Olahraga &amp; Outdoor</span>
                                    </a>
                                  </li>
                                  <li class="lzd-site-menu-root-item" id="Level_1_Category_No12">
                                    <a>
                                      <span>Otomotif</span>
                                    </a>
                                  </li>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No1" data-spm="cate_1">
                                    <li class="sub-item-remove-arrow" data-cate="cate_1_1">
                                      <a href="https://www.lazada.co.id/beli-handphone">
                                        <span>Handphone</span>
                                      </a>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_1_2">
                                      <a href="https://www.lazada.co.id/shop-beli-laptop/">
                                        <span>Laptop</span>
                                      </a>
                                      <script type="text" class="J_data_0_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Laptop Consumer","childCategoryUrl":"https://www.lazada.co.id/jual-laptop-umum/"},{"childCategoryName":"Laptop Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-gaming/"},{"childCategoryName":"Laptop 2-in-1s","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-2-in-1/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_1_3">
                                      <a href="https://www.lazada.co.id/beli-komputer/">
                                        <span>Desktop</span>
                                      </a>
                                      <script type="text" class="J_data_0_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"PC Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-pc-gaming/"},{"childCategoryName":"Komputer Rakitan","childCategoryUrl":"https://www.lazada.co.id/beli-komputer-rakitan/"},{"childCategoryName":"All-In-One","childCategoryUrl":"https://www.lazada.co.id/beli-pc-all-in-one/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_1_4">
                                      <a href="https://www.lazada.co.id/beli-kamera/">
                                        <span>Kamera</span>
                                      </a>
                                      <script type="text" class="J_data_0_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"DSLR","childCategoryUrl":"https://www.lazada.co.id/beli-slr/"},{"childCategoryName":"Kamera Mirrorless","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-mirrorless/"},{"childCategoryName":"Kamera Pocket","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-pocket/"},{"childCategoryName":"Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-video-aksi/"},{"childCategoryName":"360 Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-360/"},{"childCategoryName":"Kamera CCTV","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-cctv/"},{"childCategoryName":"IP Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-ip/"},{"childCategoryName":"Video Camera","childCategoryUrl":"https://www.lazada.co.id/beli-camcorders/"},{"childCategoryName":"Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-instan/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_1_5">
                                      <a href="https://www.lazada.co.id/shop-gaming-konsol/">
                                        <span>Game Console</span>
                                      </a>
                                      <script type="text" class="J_data_0_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Gaming Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-permainan-konsol/"},{"childCategoryName":"Permainan Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-game-konsol/"},{"childCategoryName":"Pengontrol Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-pengontrol-game-konsol/"},{"childCategoryName":"Konsol Pelindung Penutup","childCategoryUrl":"https://www.lazada.co.id/shop-konsolpelindung-penutup/"},{"childCategoryName":"Aksesoris Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-game-konsol/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_1_6">
                                      <a href="https://www.lazada.co.id/beli-gadget/">
                                        <span>Gadget</span>
                                      </a>
                                      <script type="text" class="J_data_0_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Rokok Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-rokok-elektrik/"},{"childCategoryName":"Drone","childCategoryUrl":"https://www.lazada.co.id/jual-kamera-drone/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/beli-media-player/"},{"childCategoryName":"Walkie-Talkie","childCategoryUrl":"https://www.lazada.co.id/jual-walkie-talkie/"}]
                                        </script>
                                    </li>
                                    <li class="sub-item-remove-arrow" data-cate="cate_1_7">
                                      <a href="https://www.lazada.co.id/beli-tablet-2">
                                        <span>Tablet</span>
                                      </a>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No2" data-spm="cate_2">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_1">
                                      <a href="https://www.lazada.co.id/beli-aksesori-handphone">
                                        <span>Aksesoris Handphone</span>
                                      </a>
                                      <script type="text" class="J_data_1_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Powerbank","childCategoryUrl":"https://www.lazada.co.id/beli-power-bank/"},{"childCategoryName":"Kabel Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-kabel-handphone/"},{"childCategoryName":"Charger Handphone","childCategoryUrl":"https://www.lazada.co.id/jual-charger-kabel/"},{"childCategoryName":"Casing Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-handphone/"},{"childCategoryName":"Pelindung Layar","childCategoryUrl":"https://www.lazada.co.id/jual-pelindung-layar/"},{"childCategoryName":"Tongsis","childCategoryUrl":"https://www.lazada.co.id/jual-tongsis/"},{"childCategoryName":"Phone Holder","childCategoryUrl":"https://www.lazada.co.id/jual-dudukan-mobil/"},{"childCategoryName":"Baterai Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-baterai-handphone/"},{"childCategoryName":"Peralatan & Suku Cadang","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-handphone/"},{"childCategoryName":"Aksesoris Handphone Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-ponsel/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_2">
                                      <a href="https://www.lazada.co.id/beli-aksesori-komputer/">
                                        <span>Aksesoris Komputer</span>
                                      </a>
                                      <script type="text" class="J_data_1_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mouse","childCategoryUrl":"https://www.lazada.co.id/beli-mouse/"},{"childCategoryName":"Keyboard Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard/"},{"childCategoryName":"Monitor","childCategoryUrl":"https://www.lazada.co.id/beli-monitor/"},{"childCategoryName":"Adaptor Jaringan","childCategoryUrl":"https://www.lazada.co.id/adaptor-jaringan/"},{"childCategoryName":"Audio PC","childCategoryUrl":"https://www.lazada.co.id/beli-audio-pc/"},{"childCategoryName":"Adaptor & Kabel","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-kabel/"},{"childCategoryName":"Adaptor Baterai Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-adaptor-baterai-komputer/"},{"childCategoryName":"Mousepad","childCategoryUrl":"https://www.lazada.co.id/beli-mousepad/"},{"childCategoryName":"Cooling Pads","childCategoryUrl":"https://www.lazada.co.id/beli-alas-pendingin/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_3">
                                      <a href="https://www.lazada.co.id/shop-audio/">
                                        <span>Audio</span>
                                      </a>
                                      <script type="text" class="J_data_1_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Headphone & Headset","childCategoryUrl":"https://www.lazada.co.id/beli-headphone-dan-headset/"},{"childCategoryName":"Speaker Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"},{"childCategoryName":"Speaker Smart","childCategoryUrl":"https://www.lazada.co.id/beli-speaker-smart/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_4">
                                      <a href="https://www.lazada.co.id/shop-perangkat-pintar/">
                                        <span>Aksesoris Berteknologi</span>
                                      </a>
                                      <script type="text" class="J_data_1_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-smartwatch/"},{"childCategoryName":"Aksesoris Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-tali-smartwatch/"},{"childCategoryName":"Activity Tracker","childCategoryUrl":"https://www.lazada.co.id/beli-tracker-fitness-aktivitas/"},{"childCategoryName":"Aksesoris Fitness Tracker","childCategoryUrl":"https://www.lazada.co.id/jual-strap-tracker-aktivitas/"},{"childCategoryName":"Virtual Reality","childCategoryUrl":"https://www.lazada.co.id/jual-virtual-reality/"},{"childCategoryName":"Kendali Gerakan","childCategoryUrl":"https://www.lazada.co.id/jual-kendali-gerakan/"},{"childCategoryName":"Kacamata Pintar","childCategoryUrl":"https://www.lazada.co.id/beli-smart-glasses/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_5">
                                      <a href="https://www.lazada.co.id/beli-aksesoris-2/">
                                        <span>Aksesoris Kamera</span>
                                      </a>
                                      <script type="text" class="J_data_1_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tripod & Monopod","childCategoryUrl":"https://www.lazada.co.id/beli-tripod-monopod/"},{"childCategoryName":"Kartu Memori","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-memori/"},{"childCategoryName":"Lensa Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-lensa-kamera/"},{"childCategoryName":"Flash","childCategoryUrl":"https://www.lazada.co.id/beli-flash/"},{"childCategoryName":"Sarung, Pelindung & Tas Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-tas-kamera/"},{"childCategoryName":"Charger Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-charger-baterai/"},{"childCategoryName":"Baterai Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-baterai/"},{"childCategoryName":"Aksesoris Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-kamera-aksi/"},{"childCategoryName":"Aksesoris Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/jual-film-kamera-instan/"},{"childCategoryName":"Perlengkapan Lighting & Studio","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-lighting-studio/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_6">
                                      <a href="https://www.lazada.co.id/shop-penyimpanan-data/">
                                        <span>Penyimpanan Data</span>
                                      </a>
                                      <script type="text" class="J_data_1_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Flash Drive","childCategoryUrl":"https://www.lazada.co.id/jual-flash-drives/"},{"childCategoryName":"OTG Drive","childCategoryUrl":"https://www.lazada.co.id/jual-otg-drives/"},{"childCategoryName":"Harddisk Eksternal","childCategoryUrl":"https://www.lazada.co.id/beli-harddisk-eksternal/"},{"childCategoryName":"Hard Drive Internal","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-internal/"},{"childCategoryName":"Internal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-solid-state-drive/"},{"childCategoryName":"Eksternal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-external-solid-state-drive/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_7">
                                      <a href="https://www.lazada.co.id/beli-printers/">
                                        <span>Printer</span>
                                      </a>
                                      <script type="text" class="J_data_1_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Printer","childCategoryUrl":"https://www.lazada.co.id/beli-printers/"},{"childCategoryName":"Tinta Printer","childCategoryUrl":"https://www.lazada.co.id/tinta-printer/"},{"childCategoryName":"Printer 3D","childCategoryUrl":"https://www.lazada.co.id/pencetak-3d/"},{"childCategoryName":"Printer POS & Thermal","childCategoryUrl":"https://www.lazada.co.id/beli-printer-stand/"},{"childCategoryName":"Mesin Faks","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-fax/"},{"childCategoryName":"Mesin Cutting Sticker","childCategoryUrl":"https://www.lazada.co.id/printer-pemotong/"},{"childCategoryName":"Memori Printer","childCategoryUrl":"https://www.lazada.co.id/modul-memori-printer/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_8">
                                      <a href="https://www.lazada.co.id/beli-aksesori-handphone/">
                                        <span>Aksesoris Tablet</span>
                                      </a>
                                      <script type="text" class="J_data_1_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Casing Tablet","childCategoryUrl":"https://www.lazada.co.id/jual-casing-cover-tablet/"},{"childCategoryName":"Keyboard Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard-tablet/"},{"childCategoryName":"Pen Stylus Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-pen-stylus-tablet/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_2_9">
                                      <a href="https://www.lazada.co.id/beli-komponen-komputer/">
                                        <span>Komponen Komputer</span>
                                      </a>
                                      <script type="text" class="J_data_1_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"RAM","childCategoryUrl":"https://www.lazada.co.id/beli-ram/"},{"childCategoryName":"Motherboard","childCategoryUrl":"https://www.lazada.co.id/beli-motherboard/"},{"childCategoryName":"Prosesor","childCategoryUrl":"https://www.lazada.co.id/beli-prosesor/"},{"childCategoryName":"Kartu Grafis","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-grafis/"},{"childCategoryName":"Casing Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-casing-cpu/"},{"childCategoryName":"Power Supply Unit","childCategoryUrl":"https://www.lazada.co.id/beli-power-supply-unit/"},{"childCategoryName":"Soundcard","childCategoryUrl":"https://www.lazada.co.id/soundcard/"},{"childCategoryName":"Front Panel","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-optikal/"},{"childCategoryName":"Water Cooling System","childCategoryUrl":"https://www.lazada.co.id/beli-water-cooling-system/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No3" data-spm="cate_3">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_1">
                                      <a href="https://www.lazada.co.id/pakaian-wanita/">
                                        <span>Pakaian Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_2_0">
                                          [{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-wanita/"},{"childCategoryName":"Dress","childCategoryUrl":"https://www.lazada.co.id/gaun-wanita/"},{"childCategoryName":"Atasan","childCategoryUrl":"https://www.lazada.co.id/kaos-atasan-wanita/"},{"childCategoryName":"Sweater & Cardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-wanita/"},{"childCategoryName":"Celana & Legging","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-wanita/"},{"childCategoryName":"Rok","childCategoryUrl":"https://www.lazada.co.id/rok-wanita/"},{"childCategoryName":"Jaket & Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-wanita/"},{"childCategoryName":"Kaus Kaki & Celana Ketat","childCategoryUrl":"https://www.lazada.co.id/kaos-kaki-celana-tights-wanita/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-wanita/"},{"childCategoryName":"Jumpsuit & Playsuit","childCategoryUrl":"https://www.lazada.co.id/overalls-jumpsuit-wanita/"},{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/hoodie-sweatshirt-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_2">
                                      <a href="https://www.lazada.co.id/baju-muslim-wanita/">
                                        <span>Baju Muslim</span>
                                      </a>
                                      <script type="text" class="J_data_2_1">
                                          [{"childCategoryName":"Perlengkapan Shalat","childCategoryUrl":"https://www.lazada.co.id/baju-muslim-wanita/"},{"childCategoryName":"Hijab","childCategoryUrl":"https://www.lazada.co.id/hijab/"},{"childCategoryName":"Atasan Muslimah","childCategoryUrl":"https://www.lazada.co.id/atasan-muslimah-wanita/"},{"childCategoryName":"Baju Muslim & Jumpsuit","childCategoryUrl":"https://www.lazada.co.id/dress-muslimah/"},{"childCategoryName":"Bawahan Muslim","childCategoryUrl":"https://www.lazada.co.id/bawahan-muslimah/"},{"childCategoryName":"Luaran Muslim","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-kardigan-wanita-muslim/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-wanita/"},{"childCategoryName":"Baju Renang Muslim","childCategoryUrl":"https://www.lazada.co.id/jual-baju-renang-muslim-wanita/"},{"childCategoryName":"Baju Kurung","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kurung-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_3">
                                      <a href="https://www.lazada.co.id/lingerie-baju-tidur/">
                                        <span>Lingerie, Baju Tidur &amp;
                                          Santai</span>
                                      </a>
                                      <script type="text" class="J_data_2_2">
                                          [{"childCategoryName":"Bra","childCategoryUrl":"https://www.lazada.co.id/bra-wanita/"},{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-wanita/"},{"childCategoryName":"Shapewear","childCategoryUrl":"https://www.lazada.co.id/shapewear-baju-pembentuk-tubuh-wanita/"},{"childCategoryName":"Baju Tidur & Santai","childCategoryUrl":"https://www.lazada.co.id/bathrobe-baju-mandi-wanita/"},{"childCategoryName":"Jubah Tidur","childCategoryUrl":"https://www.lazada.co.id/jual-jubah-tidur-wanita/"},{"childCategoryName":"Set Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-set-lingerie/"},{"childCategoryName":"Kamisol & Slips","childCategoryUrl":"https://www.lazada.co.id/jual-kamisol-slips-wanita/"},{"childCategoryName":"Bodysuit","childCategoryUrl":"https://www.lazada.co.id/jual-bodysuit-wanita/"},{"childCategoryName":"Aksesori Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-lingerie-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_4">
                                      <a href="https://www.lazada.co.id/sepatu-wanita/">
                                        <span>Sepatu Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_2_3">
                                          [{"childCategoryName":"Sepatu Flat","childCategoryUrl":"https://www.lazada.co.id/flat-shoes/"},{"childCategoryName":"Sepatu Hak Tinggi","childCategoryUrl":"https://www.lazada.co.id/heels/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers/"},{"childCategoryName":"Wedges","childCategoryUrl":"https://www.lazada.co.id/wedges/"},{"childCategoryName":"Sepatu Boot","childCategoryUrl":"https://www.lazada.co.id/boots-wanita/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-wanita/"},{"childCategoryName":"Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-wanita/"},{"childCategoryName":"Sandal & Flip Flop","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_5">
                                      <a href="https://www.lazada.co.id/aksesoris-wanita/">
                                        <span>Aksesoris</span>
                                      </a>
                                      <script type="text" class="J_data_2_4">
                                          [{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-wanita/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-wanita/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-wanita/"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-rambut/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/scarf-wanita/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-wanita/"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-women-fabricmask/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_6">
                                      <a href="https://www.lazada.co.id/tas-wanita/">
                                        <span>Tas Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_2_5">
                                          [{"childCategoryName":"Tas Ransel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-punggung-wanita/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-tas-wanita/"},{"childCategoryName":"Tas Pinggang Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-pinggang-wanita/"},{"childCategoryName":"Dompet Kartu Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-wanita/"},{"childCategoryName":"Clutches","childCategoryUrl":"https://www.lazada.co.id/tas-genggam-wanita/"},{"childCategoryName":"Dompet Koin & Pouch Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-wanita/"},{"childCategoryName":"Tas Selempang & Bahu Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-selempang-badan-wanita/"},{"childCategoryName":"Tas Luxury Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-mewah-wanita/"},{"childCategoryName":"Top-handle Bag","childCategoryUrl":"https://www.lazada.co.id/top-handle-bag/"},{"childCategoryName":"Tote Bag Wanita","childCategoryUrl":"https://www.lazada.co.id/tote-bag-wanita/"},{"childCategoryName":"Dompet Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_7">
                                      <a href="https://www.lazada.co.id/beli-perhiasan-wanita/">
                                        <span>Perhiasan Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_2_6">
                                          [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-logam-berharga/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_3_8">
                                      <a href="https://www.lazada.co.id/beli-jam-tangan-wanita/">
                                        <span>Jam Tangan Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_2_7">
                                          [{"childCategoryName":"Aksesori","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Kasual Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-wanita/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-wanita/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-wanita/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-pre-owned-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-wanita/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No4" data-spm="cate_4">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_1">
                                      <a href="https://www.lazada.co.id/pakaian-pria/">
                                        <span>Pakaian Pria</span>
                                      </a>
                                      <script type="text" class="J_data_3_0">
                                          [{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-pria/"},{"childCategoryName":"Jaket dan Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-pria/"},{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-pria/"},{"childCategoryName":"Celana","childCategoryUrl":"https://www.lazada.co.id/celana-pendek-dan-panjang-pria/"},{"childCategoryName":"Polo Shirt","childCategoryUrl":"https://www.lazada.co.id/polo-shirt-pria/"},{"childCategoryName":"Kemeja","childCategoryUrl":"https://www.lazada.co.id/kemeja-pria/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-pria/"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/jual-kaus-kaki-pria/"},{"childCategoryName":"Jas & Blazer","childCategoryUrl":"https://www.lazada.co.id/jas-pria/"},{"childCategoryName":"Sweater dan Kardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-pria/"},{"childCategoryName":"Baju Renang","childCategoryUrl":"https://www.lazada.co.id/baju-renang-pria/"},{"childCategoryName":"T-Shirt & Kaos Dalam","childCategoryUrl":"https://www.lazada.co.id/atasan-kasual-kaos-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_2">
                                      <a href="https://www.lazada.co.id/baju-muslim-pria/">
                                        <span>Baju Muslim</span>
                                      </a>
                                      <script type="text" class="J_data_3_1">
                                          [{"childCategoryName":"Jubah Muslim","childCategoryUrl":"https://www.lazada.co.id/jubah-muslim-pria/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-pria/"},{"childCategoryName":"Baju Muslimin","childCategoryUrl":"https://www.lazada.co.id/cekak-musang-pria/"},{"childCategoryName":"Kopiah","childCategoryUrl":"https://www.lazada.co.id/shop-kopiah/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_3">
                                      <a href="https://www.lazada.co.id/pakaian-dalam-dan-kaos-kaki-pria/">
                                        <span>Pakaian Dalam</span>
                                      </a>
                                      <script type="text" class="J_data_3_2">
                                          [{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-pria/"},{"childCategoryName":"Pakaian Tidur","childCategoryUrl":"https://www.lazada.co.id/baju-tidur-pria/"},{"childCategoryName":"Boxer","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-boxer-pria/"},{"childCategoryName":"Thongs  & Lainnya","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-pria-thongs-lainnya/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_4">
                                      <a href="https://www.lazada.co.id/sepatu-pria/">
                                        <span>Sepatu Pria</span>
                                      </a>
                                      <script type="text" class="J_data_3_3">
                                          [{"childCategoryName":"Boots","childCategoryUrl":"https://www.lazada.co.id/boots-pria/"},{"childCategoryName":"Flip Flop & Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-pria/"},{"childCategoryName":"Sepatu Formal","childCategoryUrl":"https://www.lazada.co.id/sepatu-pantofel/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-pria/"},{"childCategoryName":"Slip-On & Loafer","childCategoryUrl":"https://www.lazada.co.id/jual-slip-on-loafer-pria/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_5">
                                      <a href="https://www.lazada.co.id/aksesoris-pria/">
                                        <span>Aksesoris</span>
                                      </a>
                                      <script type="text" class="J_data_3_4">
                                          [{"childCategoryName":"Dasi","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi/"},{"childCategoryName":"Aksesoris Dasi Kupu-kupu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi-kupu-kupu/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/syal-pria/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-pria/"},{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-pria/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-pria/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-pria/"},{"childCategoryName":"Braces","childCategoryUrl":"https://www.lazada.co.id/suspender-pria/"},{"childCategoryName":"Face Mask","childCategoryUrl":"https://www.lazada.co.id/shop-masker-wajah-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_6">
                                      <a href="https://www.lazada.co.id/tas-pria/">
                                        <span>Tas Pria</span>
                                      </a>
                                      <script type="text" class="J_data_3_5">
                                          [{"childCategoryName":"Tas Ransel Pria","childCategoryUrl":"https://www.lazada.co.id/shop-ransel-pria/"},{"childCategoryName":"Tas Laptop Jinjing","childCategoryUrl":"https://www.lazada.co.id/tas-kerja-pria/"},{"childCategoryName":"Dompet Kartu Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-pria/"},{"childCategoryName":"Dompet Koin & Pouch Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-pria/"},{"childCategoryName":"Tas Selempang Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-selempang-pria/"},{"childCategoryName":"Tas Laptop Bahu & Messenger","childCategoryUrl":"https://www.lazada.co.id/tas-messenger-pria/"},{"childCategoryName":"Tote Bag Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-tote-pria/"},{"childCategoryName":"Tas Pinggang","childCategoryUrl":"https://www.lazada.co.id/beli-tas-pinggang/"},{"childCategoryName":"Dompet Pria","childCategoryUrl":"https://www.lazada.co.id/shop-dompet-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_7">
                                      <a href="https://www.lazada.co.id/beli-perhiasan-pria/">
                                        <span>Perhiasan Pria</span>
                                      </a>
                                      <script type="text" class="J_data_3_6">
                                          [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-pria-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-pria-logam-berharga/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_4_8">
                                      <a href="https://www.lazada.co.id/beli-jam-tangan-pria/">
                                        <span>Jam Tangan Pria</span>
                                      </a>
                                      <script type="text" class="J_data_3_7">
                                          [{"childCategoryName":"Aksesoris Jam Tangan Pria","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-jam-tangan-pria/"},{"childCategoryName":"Jam Tangan Kasual Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-pria/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-pria/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-pria/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-pre-owned-pria/"},{"childCategoryName":"Jam Tangan Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-pria/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No5" data-spm="cate_5">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_1">
                                      <a href="https://www.lazada.co.id/fashion-pakaian-anak-laki-laki">
                                        <span>Pakaian Anak Laki-laki</span>
                                      </a>
                                      <script type="text" class="J_data_4_0">
                                          [{"childCategoryName":"Topi Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/topi-anak-laki-laki"},{"childCategoryName":"Hoodie Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki"},{"childCategoryName":"Jaket & Mantel Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-laki-laki"},{"childCategoryName":"Celana Pendek Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/beli-celana-pendek-pria"},{"childCategoryName":"Pakaian Tidur Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-laki-laki"},{"childCategoryName":"Sweater & Cardigan Anak","childCategoryUrl":"https://www.lazada.co.id/sweater-cardigan-anak-laki-laki"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-pakaian-hujan-anak-laki-laki"},{"childCategoryName":"Pakaian dalam","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-dalam"},{"childCategoryName":"Celana & Jeans Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-laki-laki"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/shop-kaus-kaki"},{"childCategoryName":"Baju & Atasan Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-laki-laki"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_2">
                                      <a href="https://www.lazada.co.id/pakaian-anak-perempuan">
                                        <span>Pakaian Anak Perempuan</span>
                                      </a>
                                      <script type="text" class="J_data_4_1">
                                          [{"childCategoryName":"Bawahan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-perempuan"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-dress-anak-perempuan"},{"childCategoryName":"Scarf Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/scarf-sarung-tangan-anak-perempuan"},{"childCategoryName":"Aksesori Rambut Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-rambut-anak-perempuan"},{"childCategoryName":"Topi Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/topi-anak-perempuan"},{"childCategoryName":"Hoodie Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki-2"},{"childCategoryName":"Jaket & Mantel Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-perempuan"},{"childCategoryName":"Baju & Atasan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-perempuan"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-jas-hujan-anak-perempuan"},{"childCategoryName":"Pakaian Dalam Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-perempuan"},{"childCategoryName":"Jumpsuits & Overalls","childCategoryUrl":"https://www.lazada.co.id/shop-girls-jumpsuits-overalls"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_3">
                                      <a href="https://www.lazada.co.id/shop-boy's-muslim-wear">
                                        <span>Pakaian Anak Muslim
                                          Laki-Laki</span>
                                      </a>
                                      <script type="text" class="J_data_4_2">
                                          [{"childCategoryName":"Kemeja Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-shirt"},{"childCategoryName":"Celana Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-pants"},{"childCategoryName":"Aksesoris Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-accessories"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_4">
                                      <a href="https://www.lazada.co.id/shop-girls-muslim-wear">
                                        <span>Pakaian Anak Muslim
                                          Perempuan</span>
                                      </a>
                                      <script type="text" class="J_data_4_3">
                                          [{"childCategoryName":"Hijab Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-hijabs/"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-dresses-jumpsuits/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_5">
                                      <a href="https://www.lazada.co.id/fashion-sepatu-anak-laki-laki">
                                        <span>Sepatu Anak Laki-laki</span>
                                      </a>
                                      <script type="text" class="J_data_4_4">
                                          [{"childCategoryName":"Sepatu Boot Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-laki-laki"},{"childCategoryName":"Sandal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-laki-laki"},{"childCategoryName":"Sepatu Formal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-laki-laki"},{"childCategoryName":"Aksesoris Sepatu Anak Laki","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-laki-laki"},{"childCategoryName":"Slip-n Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-slip-on-anak-laki-laki"},{"childCategoryName":"Sepatu Sneaker Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneaker-anak-laki-laki"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_6">
                                      <a href="https://www.lazada.co.id/fashion-sepatu-anak-perempuan">
                                        <span>Sepatu Anak Perempuan</span>
                                      </a>
                                      <script type="text" class="J_data_4_5">
                                          [{"childCategoryName":"Sepatu Flat Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-balerina-anak-perempuan"},{"childCategoryName":"Sepatu Boot Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-perempuan"},{"childCategoryName":"Sandal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-perempuan"},{"childCategoryName":"Sepatu Formal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-perempuan"},{"childCategoryName":"Aksesoris Sepatu Anak","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-perempuan"},{"childCategoryName":"Sepatu Sneaker Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneakers-anak-perempuan"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_7">
                                      <a href="https://www.lazada.co.id/beli-tas-anak-tl/">
                                        <span>Tas Anak</span>
                                      </a>
                                      <script type="text" class="J_data_4_6">
                                          [{"childCategoryName":"Tas Bahu Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-bahu-anak/"},{"childCategoryName":"Ransel Troli Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-troli-anak/"},{"childCategoryName":"Ransel Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-anak/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-anak/"},{"childCategoryName":"Koper","childCategoryUrl":"https://www.lazada.co.id/koper-anak-2/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_8">
                                      <a href="https://www.lazada.co.id/beli-perhiasan-anak/">
                                        <span>Perhiasan Anak</span>
                                      </a>
                                      <script type="text" class="J_data_4_7">
                                          [{"childCategoryName":"Emas Murni","childCategoryUrl":"https://www.lazada.co.id/beli-anak-emas-murni/"},{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-anak-perhiasan-fashion/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_5_9">
                                      <a href="https://www.lazada.co.id/beli-jam-tangan-anak/">
                                        <span>Jam Tangan Anak</span>
                                      </a>
                                      <script type="text" class="J_data_4_8">
                                          [{"childCategoryName":"Jam Tangan Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-laki-laki/"},{"childCategoryName":"Jam Tangan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-perempuan/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No6" data-spm="cate_6">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_1">
                                      <a href="https://www.lazada.co.id/beli-perawatan-kulit/">
                                        <span>Perawatan Kulit</span>
                                      </a>
                                      <script type="text" class="J_data_5_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Serum Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-serum-perawatan-wajah"},{"childCategoryName":"Dermacare","childCategoryUrl":"https://www.lazada.co.id/beli-dermacare"},{"childCategoryName":"Pelembab Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-pelembab-wajah"},{"childCategoryName":"Pembersih Wajah","childCategoryUrl":"https://www.lazada.co.id/pembersih-wajah"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-masker-wajah"},{"childCategoryName":"Toner","childCategoryUrl":"https://www.lazada.co.id/beli-toner"},{"childCategoryName":"Tabir Surya","childCategoryUrl":"https://www.lazada.co.id/beli-tabir-surya-aftersun"},{"childCategoryName":"Set Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-set-perawatan-wajah"},{"childCategoryName":"Pelembab & Perawatan Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-lip-balm-perawatan-bibir"},{"childCategoryName":"Face Scrubs & Exfoliators","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-pengelupas-wajah"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-mata"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_2">
                                      <a href="https://www.lazada.co.id/beli-makeup/">
                                        <span>Makeup</span>
                                      </a>
                                      <script type="text" class="J_data_5_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makeup Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-make-up-bibir"},{"childCategoryName":"Lipstik","childCategoryUrl":"https://www.lazada.co.id/beli-lipstik"},{"childCategoryName":"Makeup Wajah","childCategoryUrl":"https://www.lazada.co.id/makeup-wajah"},{"childCategoryName":"Foundation","childCategoryUrl":"https://www.lazada.co.id/beli-foundation"},{"childCategoryName":"Makeup Mata","childCategoryUrl":"https://www.lazada.co.id/beli-mata"},{"childCategoryName":"Maskara","childCategoryUrl":"https://www.lazada.co.id/beli-maskara"},{"childCategoryName":"Aksesoris Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-makeup"},{"childCategoryName":"Set Kuas & Kuas Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-kuas-aplikator"},{"childCategoryName":"Perawatan Kuku","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kuku"},{"childCategoryName":"Set Makeup & Palet","childCategoryUrl":"https://www.lazada.co.id/shop-palet-set-makeup"},{"childCategoryName":"Pembersih Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-makeup"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_3">
                                      <a href="https://www.lazada.co.id/beli-perawatan-rambut/">
                                        <span>Perawatan Rambut</span>
                                      </a>
                                      <script type="text" class="J_data_5_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Shampo","childCategoryUrl":"https://www.lazada.co.id/beli-sampo"},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/perawatan-intensif"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-perawatan-rambut"},{"childCategoryName":"Styling Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-styling-rambut"},{"childCategoryName":"Pewarna Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-cat-rambut"},{"childCategoryName":"Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-kondisioner"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-perawatan-rambut"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_4">
                                      <a href="https://www.lazada.co.id/beli-perlengkapan-mandi-tubuh/">
                                        <span>Perawatan Tubuh</span>
                                      </a>
                                      <script type="text" class="J_data_5_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Losion Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-losion-krim-tubuh"},{"childCategoryName":"Sabun Cair","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Cair"},{"childCategoryName":"Scrub Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-tubuh"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/perawatan-payudara"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-Perawatan-Tubuh"},{"childCategoryName":"Perawatan Kaki","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kaki"},{"childCategoryName":"Sabun Batang","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Batang"},{"childCategoryName":"Aksesoris Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-perlengkapan-mandi-tubuh"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-alat-mandi-tubuh"},{"childCategoryName":"Penghilang Bulu","childCategoryUrl":"https://www.lazada.co.id/beli-perontok-rambut"},{"childCategoryName":"Sabun Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-tangan"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_5">
                                      <a href="https://www.lazada.co.id/beli-perawatan-kesehatan-pribadi/">
                                        <span>Perawatan Diri</span>
                                      </a>
                                      <script type="text" class="J_data_5_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Mulut","childCategoryUrl":"https://www.lazada.co.id/perawatan-mulut"},{"childCategoryName":"Pembersih Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-wanita"},{"childCategoryName":"Keamanan Diri","childCategoryUrl":"https://www.lazada.co.id/beli-keamanan-diri"},{"childCategoryName":"Beli Deodoran","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-optik-pribadi"},{"childCategoryName":"Obat Anti Serangga","childCategoryUrl":"https://www.lazada.co.id/shop-Obat-Anti-Serangga"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_6">
                                      <a href="https://www.lazada.co.id/beli-parfum/">
                                        <span>Parfum</span>
                                      </a>
                                      <script type="text" class="J_data_5_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pria","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-pria"},{"childCategoryName":"Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-wanita"},{"childCategoryName":"Unisex","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-unisex"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_7">
                                      <a href="https://www.lazada.co.id/beli-alat-kesehatan-kecantikan/">
                                        <span>Alat Kecantikan</span>
                                      </a>
                                      <script type="text" class="J_data_5_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Alat Pelangsing & Pijat","childCategoryUrl":"https://www.lazada.co.id/alat-pelangsing-dan-pemijat-elektrik"},{"childCategoryName":"Sauna Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-sauna-portabel"},{"childCategoryName":"Foot Relief","childCategoryUrl":"https://www.lazada.co.id/beli-foot-relief"},{"childCategoryName":"Alat Cukur & Trimmer","childCategoryUrl":"https://www.lazada.co.id/aksesoris-alat-cukur-dan-trimmer"},{"childCategoryName":"Alat Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-wajah"},{"childCategoryName":"Alat Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-tubuh"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_8">
                                      <a href="https://www.lazada.co.id/beli-suplemen-makanan/">
                                        <span>Suplemen Makanan</span>
                                      </a>
                                      <script type="text" class="J_data_5_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengatur Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-pengatur-berat-badan"},{"childCategoryName":"Pembakar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-pembakar-lemak"},{"childCategoryName":"Minuman Pelangsing","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-pelangsing"},{"childCategoryName":"Suplemen Kecantikan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-kecantikan"},{"childCategoryName":"Suplemen Pemutih","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-pemutih"},{"childCategoryName":"Multivitamin","childCategoryUrl":"https://www.lazada.co.id/multivitamin/"},{"childCategoryName":"Obat Tradisional","childCategoryUrl":"https://www.lazada.co.id/beli-obat-obatan-tradisional"},{"childCategoryName":"Sistem Imun","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-imun"},{"childCategoryName":"Nutrisi Olahraga","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-olahraga"},{"childCategoryName":"Penambah Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-penambah-berat-badan"},{"childCategoryName":"Protein","childCategoryUrl":"https://www.lazada.co.id/beli-protein"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_9">
                                      <a href="https://www.lazada.co.id/beli-alat-medis/">
                                        <span>Alat Medis</span>
                                      </a>
                                      <script type="text" class="J_data_5_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Aksesoris Kesehatan","childCategoryUrl":"https://www.lazada.co.id/aksesoris-kesehatan"},{"childCategoryName":"Alat Tes Kesehatan","childCategoryUrl":"https://www.lazada.co.id/beli-alat-tes-kesehatan"},{"childCategoryName":"Obat-Obatan","childCategoryUrl":"https://www.lazada.co.id/shop-over-the-counter-medicine/"},{"childCategoryName":"Perban & Perlengkapan Cedera","childCategoryUrl":"https://www.lazada.co.id/perban-alat-terapi-cedera"},{"childCategoryName":"Timbangan & Alat Kadar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-alat-ukur-kadar-lemak"},{"childCategoryName":"P3K","childCategoryUrl":"https://www.lazada.co.id/beli-p3k"},{"childCategoryName":"Kursi Roda","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-roda"},{"childCategoryName":"Salep & Krim","childCategoryUrl":"https://www.lazada.co.id/shop-salep-dan-krim"},{"childCategoryName":"Alat Inhalasi & Nebulizer","childCategoryUrl":"https://www.lazada.co.id/beli-alat-inhalasi-nebulizer"},{"childCategoryName":"Alat Tes Medis","childCategoryUrl":"https://www.lazada.co.id/tes-medis"},{"childCategoryName":"Stetoskop","childCategoryUrl":"https://www.lazada.co.id/beli-stetoskop"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_10">
                                      <a href="https://www.lazada.co.id/jual-perlengkapan-kesehatan-seksual/">
                                        <span>Sexual Wellness</span>
                                      </a>
                                      <script type="text" class="J_data_5_9">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kondom","childCategoryUrl":"https://www.lazada.co.id/beli-kondom"},{"childCategoryName":"Pelumas","childCategoryUrl":"https://www.lazada.co.id/beli-pelumas"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_11">
                                      <a href="https://www.lazada.co.id/beli-perawatan-tubuh-kesehatan-pria/">
                                        <span>Perawatan Pria</span>
                                      </a>
                                      <script type="text" class="J_data_5_10">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-rambut-pria"},{"childCategoryName":"Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria"},{"childCategoryName":"Alat Cukur Pria","childCategoryUrl":"https://www.lazada.co.id/beli-alat-cukur-pria"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/perawatan-tubuh"},{"childCategoryName":"Deodoran Pria","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran-pria"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_6_12">
                                      <a href="https://www.lazada.co.id/kesehatan-manula/">
                                        <span>Popok Dewasa</span>
                                      </a>
                                      <script type="text" class="J_data_5_11">
                                          [{"childCategoryName":"Popok Dewasa","childCategoryUrl":"https://www.lazada.co.id/kesehatan-manula/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No7" data-spm="cate_7">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_1">
                                      <a href="https://www.lazada.co.id/jual-perlengkapan-bayi-balita/">
                                        <span>Ibu &amp; Anak</span>
                                      </a>
                                      <script type="text" class="J_data_6_0">
                                          [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_2">
                                      <a href="https://www.lazada.co.id/beli-popok-pispot-bb/">
                                        <span>Popok Sekali Pakai</span>
                                      </a>
                                      <script type="text" class="J_data_6_1">
                                          [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Popok Kain & Aksesori","childCategoryUrl":"https://www.lazada.co.id/beli-popok-kain/"},{"childCategoryName":"Lap Bayi & Penyangga","childCategoryUrl":"https://www.lazada.co.id/beli-lap-bayi-penyangga/"},{"childCategoryName":"Perawatan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-popok/"},{"childCategoryName":"Krim & Salep Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-krim-salep-bayi/"},{"childCategoryName":"Tas Perlengkapan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-tas-popok-tb/"},{"childCategoryName":"Meja Ganti Popok","childCategoryUrl":"https://www.lazada.co.id/beli-meja-ganti/"},{"childCategoryName":"Cover Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-bantalan/"},{"childCategoryName":"Lapisan Penyerap & Liner Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-lapisan-penyerap-liner-popok-kain/"},{"childCategoryName":"Potty Training","childCategoryUrl":"https://www.lazada.co.id/beli-potty-training/"},{"childCategoryName":"Bangku Langkah","childCategoryUrl":"https://www.lazada.co.id/beli-bangku-langkah/"},{"childCategoryName":"Detergent Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-detergen-popok-kain/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_3">
                                      <a href="https://www.lazada.co.id/beli-susu-formula/">
                                        <span>Makanan Bayi &amp; Balita</span>
                                      </a>
                                      <script type="text" class="J_data_6_2">
                                          [{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Nutrisi Khusus Anak","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-khusus-anak/"},{"childCategoryName":"Minuman","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-bayi-balita/"},{"childCategoryName":"Sereal","childCategoryUrl":"https://www.lazada.co.id/beli-sereal-bayi-balita/"},{"childCategoryName":"Cracker & Biskuit","childCategoryUrl":"https://www.lazada.co.id/beli-cracker-biskuit-bayi-balita/"},{"childCategoryName":"Makanan Ringan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ringan-bayi-balita/"},{"childCategoryName":"Makanan puree bayi","childCategoryUrl":"https://www.lazada.co.id/beli-puree-bayi/"},{"childCategoryName":"Susu Ibu Hamil","childCategoryUrl":"https://www.lazada.co.id/beli-susu-maternal/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_4">
                                      <a href="https://www.lazada.co.id/jual-baju-aksesoris-anak/">
                                        <span>Pakaian &amp; Aksesoris</span>
                                      </a>
                                      <script type="text" class="J_data_6_3">
                                          [{"childCategoryName":"(0--6 bulan) Set Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-set-pakaian-bayi/"},{"childCategoryName":"(0--6 bulan) Body Suits","childCategoryUrl":"https://www.lazada.co.id/beli-bodysuit-one-piece-bayi/"},{"childCategoryName":"(0--6 bulan) Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-pakaian-anak/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Dress Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-dress-bayi-perempuan/"},{"childCategoryName":"Sepatu Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-perempuan/"},{"childCategoryName":"Aksesoris Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-bayi-perempuan/"},{"childCategoryName":"Baju Renang Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Sepatu Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-laki-laki/"},{"childCategoryName":"Aksesoris Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-aksesori-bayi-laki-laki/"},{"childCategoryName":"Baju Renang Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-laki-laki/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_5">
                                      <a href="https://www.lazada.co.id/beli-makanan-bayi/">
                                        <span>Perlengkapan Menyusui</span>
                                      </a>
                                      <script type="text" class="J_data_6_4">
                                          [{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Botol","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi-balita/"},{"childCategoryName":"Aksesoris Dot Botol","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-botol-dot-bayi/"},{"childCategoryName":"Penghangat & Sterilizers","childCategoryUrl":"https://www.lazada.co.id/beli-penghangat-sterilizer/"},{"childCategoryName":"Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-pompa-asi/"},{"childCategoryName":"Aksesesoris Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-pompa-asi/"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-puting/"},{"childCategoryName":"Bantal Menyusui","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-kursi-bayi/"},{"childCategoryName":"Kursi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-tinggi-bayi-kursi-booster/"},{"childCategoryName":"Food Blenders","childCategoryUrl":"https://www.lazada.co.id/beli-blender-makanan-bayi/"},{"childCategoryName":"Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-makan-bayi-bb/"},{"childCategoryName":"Set Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-piring-mangkok-bayi/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_6">
                                      <a href="https://www.lazada.co.id/beli-perlengkapan-berkendara-bayi/">
                                        <span>Perlengkapan Bayi</span>
                                      </a>
                                      <script type="text" class="J_data_6_5">
                                          [{"childCategoryName":"Sling Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sling-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Car Seat","childCategoryUrl":"https://www.lazada.co.id/beli-car-seat-bb/"},{"childCategoryName":"Playard","childCategoryUrl":"https://www.lazada.co.id/beli-playard/"},{"childCategoryName":"Ayunan, Jumper & Bouncer Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-ayunan-jumper-bouncer-bayi/"},{"childCategoryName":"Walker","childCategoryUrl":"https://www.lazada.co.id/beli-walker/"},{"childCategoryName":"Tempat Duduk & Trailer Sepeda","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-trailer-sepeda/"},{"childCategoryName":"Tas Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-anak/"},{"childCategoryName":"Koper Anak","childCategoryUrl":"https://www.lazada.co.id/beli-koper-anak/"},{"childCategoryName":"Tali & Harness Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tali-harness-bayi/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_7">
                                      <a href="https://www.lazada.co.id/jual-perlengkapan-kamar-bayi/">
                                        <span>Kamar Bayi</span>
                                      </a>
                                      <script type="text" class="J_data_6_6">
                                          [{"childCategoryName":"Matras Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kasur-seprai-bayi/"},{"childCategoryName":"Selimut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-bayi/"},{"childCategoryName":"Seprai Keranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-seprai-keranjang-bayi/"},{"childCategoryName":"Kelengkapan Alat Tidur Balita","childCategoryUrl":"https://www.lazada.co.id/beli-kelengkapan-alat-tidur-balita/"},{"childCategoryName":"Selimut Tebal & Bed Cover Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-tebal-bed-cover-bayi/"},{"childCategoryName":"Bantal, Pelindung & Sarung Bantal Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-pelindung-sarung-bantal-bayi/"},{"childCategoryName":"Furnitur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-bayi/"},{"childCategoryName":"Ranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-ranjang-bayi/"},{"childCategoryName":"Keranjang Bayi Cradle","childCategoryUrl":"https://www.lazada.co.id/beli-keranjang-bayi-cradle/"},{"childCategoryName":"Laci & Lemari Pakaian Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-laci-lemari-pakaian-bayi/"},{"childCategoryName":"Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-pengatur-penyimpanan/"},{"childCategoryName":"Dekorasi Kamar Anak","childCategoryUrl":"https://www.lazada.co.id/beli-dekorasi-kamar-anak/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_8">
                                      <a href="https://www.lazada.co.id/beli-perlengkapan-mandi-perawatan-kulit-anak/">
                                        <span>Perawatan Bayi</span>
                                      </a>
                                      <script type="text" class="J_data_6_7">
                                          [{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-bayi/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Sabun & Pembersih Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-bayi/"},{"childCategoryName":"Perawatan Mulut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Sikat Gigi & Pasta Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Tempat Duduk & Bak Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-bak-mandi-bayi/"},{"childCategoryName":"Lap Mandi & Handuk Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-handuk-bayi/"},{"childCategoryName":"Pelindung Matahari Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-matahari-bayi/"},{"childCategoryName":"Aromaterapi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-aromaterapi-bayi/"},{"childCategoryName":"Perlengkapan Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-mandi-bayi-bb/"},{"childCategoryName":"Alas Mandi Bayi Anti Slip","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi-bayi-anti-slip/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_9">
                                      <a href="https://www.lazada.co.id/beli-mainan-anak/">
                                        <span>Mainan</span>
                                      </a>
                                      <script type="text" class="J_data_6_8">
                                          [{"childCategoryName":"Action Figure & Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/jual-koleksi-mainan-action-figure/"},{"childCategoryName":"Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-koleksi-tg/"},{"childCategoryName":"Mini Figur","childCategoryUrl":"https://www.lazada.co.id/beli-mini-figure-tg/"},{"childCategoryName":"Kerajinan Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-kerajinan-tangan-kesenian-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Boneka & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-boneka-aksesori/"},{"childCategoryName":"Kostum Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dress-up/"},{"childCategoryName":"Mainan Edukasi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-pembelajaran-edukasi/"},{"childCategoryName":"Puzzle & Games","childCategoryUrl":"https://www.lazada.co.id/beli-permainan-tradisional/"},{"childCategoryName":"Hobi & Hiburan","childCategoryUrl":"https://www.lazada.co.id/Shop-Hobbies-Entertainment/"},{"childCategoryName":"Perlengkapan Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-pesta/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_10">
                                      <a href="https://www.lazada.co.id/beli-remote-control-mainan-kendaraan/">
                                        <span>Mainan Elektronik &amp; RC</span>
                                      </a>
                                      <script type="text" class="J_data_6_9">
                                          [{"childCategoryName":"Mobil Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-rc-baterai/"},{"childCategoryName":"Robot Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-rc-figure-robot/"},{"childCategoryName":"Mobil Die Cast","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-die-cast/"},{"childCategoryName":"Mainan Mobil","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-kendaraan-tg/"},{"childCategoryName":"Mainan Kereta Api & Rel","childCategoryUrl":"https://www.lazada.co.id/beli-set-mainan-kereta/"},{"childCategoryName":"Drone Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-drones-quadcopters/"},{"childCategoryName":"Helikopter","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-helikopter/"},{"childCategoryName":"Video Games & Hiburan","childCategoryUrl":"https://www.lazada.co.id/shop-hiburan-video-game/"},{"childCategoryName":"Walkie Talkies","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-walkie-talkie/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_11">
                                      <a href="https://www.lazada.co.id/beli-olahraga-permainan-luar-ruangan/">
                                        <span>Mainan Olahraga &amp; Luar
                                          Ruangan</span>
                                      </a>
                                      <script type="text" class="J_data_6_10">
                                          [{"childCategoryName":"Kolam Renang & Mainan Air","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-air-kolam-renang/"},{"childCategoryName":"Mainan Olahraga","childCategoryUrl":"https://www.lazada.co.id/shop-mainan-baseball-softball/"},{"childCategoryName":"Mainan Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-aktivitas-dan-olahraga-luar-ruangan/"},{"childCategoryName":"Mainan Blaster","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-blaster/"},{"childCategoryName":"Kolam Bola & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-bola-pit-aksesori/"},{"childCategoryName":"Mainan Terbang","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-terbang/"},{"childCategoryName":"Layangan & Kincir Angin","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-layang-layang/"},{"childCategoryName":"Istana Balon","childCategoryUrl":"https://www.lazada.co.id/beli-balon-loncat-istana-balon/"},{"childCategoryName":"Yoyo & Kendama","childCategoryUrl":"https://www.lazada.co.id/beli-yo-yo-kendama/"},{"childCategoryName":"Set Mainan Taman Bermain","childCategoryUrl":"https://www.lazada.co.id/beli-set-peralatan-permainan-playground/"},{"childCategoryName":"Kemah & Terowongan Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-tenda-terowongan/"},{"childCategoryName":"Mainan Rumah-rumahan","childCategoryUrl":"https://www.lazada.co.id/beli-playhouses/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_7_12">
                                      <a href="https://www.lazada.co.id/baby-toddler-toys/">
                                        <span>Mainan Bayi &amp; Balita</span>
                                      </a>
                                      <script type="text" class="J_data_6_11">
                                          [{"childCategoryName":"Playgym & Playmat","childCategoryUrl":"https://www.lazada.co.id/jual-mainan-gym-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Mainan Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-mandi-anak-tg/"},{"childCategoryName":"Mainan Tidur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-keranjang-bayi-perlengkapannya-tg/"},{"childCategoryName":"Mainan Balita","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-edukatif-anak-tg/"},{"childCategoryName":"Mainan Musik & Suara","childCategoryUrl":"https://www.lazada.co.id/beli-musik-suara-tg/"},{"childCategoryName":"Mainan Tarik Ulur","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dorong-tarik-tg/"},{"childCategoryName":"Mainan Shape Sorting","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-shape-sorting-tg/"},{"childCategoryName":"Indoor Climbers & Play Structures","childCategoryUrl":"https://www.lazada.co.id/beli-indoor-climbers-play-structure-tg/"},{"childCategoryName":"Rocking & Spring Ride-Ons","childCategoryUrl":"https://www.lazada.co.id/beli-rocking-spring-ride-on-tg/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No8" data-spm="cate_8">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_1">
                                      <a href="https://www.lazada.co.id/beli-tv-audio-video-permainan-dan-gadget/">
                                        <span>TV &amp; Perangkat Video</span>
                                      </a>
                                      <script type="text" class="J_data_7_0">
                                          [{"childCategoryName":""},{"childCategoryName":"TV LED","childCategoryUrl":"https://www.lazada.co.id/shop-televisi-digital/"},{"childCategoryName":"TV Smart","childCategoryUrl":"https://www.lazada.co.id/beli-smart-tv/"},{"childCategoryName":"Blu-Ray/DVD Player","childCategoryUrl":"https://www.lazada.co.id/beli-blu-ray-player/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/shop-media-player/"},{"childCategoryName":"Proyektor","childCategoryUrl":"https://www.lazada.co.id/beli-proyektor-3/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_2">
                                      <a href="https://www.lazada.co.id/beli-perlengkapan-dapur/">
                                        <span>Peralatan Dapur Kecil</span>
                                      </a>
                                      <script type="text" class="J_data_7_1">
                                          [{"childCategoryName":""},{"childCategoryName":"Rice Cooker","childCategoryUrl":"https://www.lazada.co.id/beli-rice-cooker/"},{"childCategoryName":"Blender, Mixer & Grinder","childCategoryUrl":"https://www.lazada.co.id/beli-blender-mixer-juicer/"},{"childCategoryName":"Kompor Gas","childCategoryUrl":"https://www.lazada.co.id/beli-kompor-gas/"},{"childCategoryName":"Teko Listrik","childCategoryUrl":"https://www.lazada.co.id/beli-ketel-elektrik-2/"},{"childCategoryName":"Juicer","childCategoryUrl":"https://www.lazada.co.id/beli-juicer-pengekstrak-buah/"},{"childCategoryName":"Mesin Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-kopi/"},{"childCategoryName":"Air Fryer","childCategoryUrl":"https://www.lazada.co.id/beli-air-fryers/"},{"childCategoryName":"Peralatan Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-ska-lainnya/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_3">
                                      <a href="https://www.lazada.co.id/shop-perlatan-besar/">
                                        <span>Elektronik Rumah Besar</span>
                                      </a>
                                      <script type="text" class="J_data_7_2">
                                          [{"childCategoryName":""},{"childCategoryName":"Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-cuci/"},{"childCategoryName":"Kulkas","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-es/"},{"childCategoryName":"Microwave","childCategoryUrl":"https://www.lazada.co.id/beli-microwave/"},{"childCategoryName":"Oven","childCategoryUrl":"https://www.lazada.co.id/beli-ovens/"},{"childCategoryName":"Dispenser Air Minum","childCategoryUrl":"https://www.lazada.co.id/beli-dispenser-air/"},{"childCategoryName":"AC","childCategoryUrl":"https://www.lazada.co.id/beli-ac/"},{"childCategoryName":"Pemanas Air","childCategoryUrl":"https://www.lazada.co.id/beli-pemanas-air/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_4">
                                      <a href="https://www.lazada.co.id/shop-pendingin-pembersih-udara-mini/">
                                        <span>Penyejuk dan Pembersih
                                          Udara</span>
                                      </a>
                                      <script type="text" class="J_data_7_3">
                                          [{"childCategoryName":""},{"childCategoryName":"Kipas Angin","childCategoryUrl":"https://www.lazada.co.id/shop-kipas/"},{"childCategoryName":"Air Cooler","childCategoryUrl":"https://www.lazada.co.id/beli-pendingin-udara-2/"},{"childCategoryName":"Air Purifier","childCategoryUrl":"https://www.lazada.co.id/beli-penjernih-udara-2/"},{"childCategoryName":"Humidifier","childCategoryUrl":"https://www.lazada.co.id/beli-humidifier/"},{"childCategoryName":"Dehumidifier","childCategoryUrl":"https://www.lazada.co.id/beli-dehumidifier/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_5">
                                      <a href="https://www.lazada.co.id/beli-perawatan-lantai/">
                                        <span>Penghisap Debu &amp; Perawatan
                                          Lantai</span>
                                      </a>
                                      <script type="text" class="J_data_7_4">
                                          [{"childCategoryName":""},{"childCategoryName":"Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu/"},{"childCategoryName":"Penghisap Debu Robotik","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-robot/"},{"childCategoryName":"Penghisap Debu dengan Tongkat","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-tongkat/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_6">
                                      <a href="https://www.lazada.co.id/shop-peralatan-perawatan-personal/">
                                        <span>Alat Perawatan Diri</span>
                                      </a>
                                      <script type="text" class="J_data_7_5">
                                          [{"childCategoryName":""},{"childCategoryName":"Hair Dryer","childCategoryUrl":"https://www.lazada.co.id/beli-pengering-rambut/"},{"childCategoryName":"Alat Penata Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-styling-rambut/"},{"childCategoryName":"Shaver & Pencukur Kumis Jenggot","childCategoryUrl":"https://www.lazada.co.id/beli-shaver/"},{"childCategoryName":"Sikat Gigi Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-elektrik/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_7">
                                      <a href="https://www.lazada.co.id/jual-aksesoris-elektronik-rumah-tangga/">
                                        <span>Aksesoris &amp; Suku Cadang</span>
                                      </a>
                                      <script type="text" class="J_data_7_6">
                                          [{"childCategoryName":""},{"childCategoryName":"Suku Cadang & Aksesoris Peralatan Dapur Kecil","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-blender-dan-mixer/"},{"childCategoryName":"Suku Cadang & Aksesoris AC","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-aksesoris-ac/"},{"childCategoryName":"Suku Cadang & Aksesoris Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-mesin-cuci-dan-pengering-pakaian/"},{"childCategoryName":"Suku Cadang & Filter Pengganti","childCategoryUrl":"https://www.lazada.co.id/beli-filter-air/"},{"childCategoryName":"Suku Cadang & Filter Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/beli-suku-kadang-aksesoris-vacuum-cleaner/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_8">
                                      <a href="https://www.lazada.co.id/jual-aksesoris-televisi/">
                                        <span>Aksesoris Televisi</span>
                                      </a>
                                      <script type="text" class="J_data_7_7">
                                          [{"childCategoryName":""},{"childCategoryName":"TV Box","childCategoryUrl":"https://www.lazada.co.id/jual-tv-receiver/"},{"childCategoryName":"Antena TV","childCategoryUrl":"https://www.lazada.co.id/jual-antena-tv/"},{"childCategoryName":"Bracket Dinding TV & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jual-bracket-dinding-tv/"},{"childCategoryName":"Remote Control TV","childCategoryUrl":"https://www.lazada.co.id/jual-remote-control-tv/"},{"childCategoryName":"Kabel TV","childCategoryUrl":"https://www.lazada.co.id/jual-kabel-tv/"},{"childCategoryName":"Adaptor TV","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-tv/"},{"childCategoryName":"Kacamata 3D TV","childCategoryUrl":"https://www.lazada.co.id/jual-kacamata-3d-tv/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_8_9">
                                      <a href="https://www.lazada.co.id/jual-home-entertainment/">
                                        <span>Home Entertainment</span>
                                      </a>
                                      <script type="text" class="J_data_7_8">
                                          [{"childCategoryName":""},{"childCategoryName":"Soundbar","childCategoryUrl":"https://www.lazada.co.id/jual-soundbar/"},{"childCategoryName":"Sistem Karaoke","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-karaoke/"},{"childCategoryName":"Sistem Hi-Fi","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-hi-fi/"},{"childCategoryName":"Sound System Panggung","childCategoryUrl":"https://www.lazada.co.id/sound-system-panggung/"},{"childCategoryName":"Player Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No9" data-spm="cate_9">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_1">
                                      <a href="https://www.lazada.co.id/beli-dekorasi-rumah/">
                                        <span>Dekorasi Rumah</span>
                                      </a>
                                      <script type="text" class="J_data_8_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Stiker Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-stiker-dinding/"},{"childCategoryName":"Gorden","childCategoryUrl":"https://www.lazada.co.id/gorden-dan-kerai/"},{"childCategoryName":"Tikar & Karpet","childCategoryUrl":"https://www.lazada.co.id/beli-tikar-karpet/"},{"childCategoryName":"Hiasan Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-hiasan-dinding/"},{"childCategoryName":"Dekorasi Aksen","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-dekor/"},{"childCategoryName":"Bunga & Tanaman Artifisial","childCategoryUrl":"https://www.lazada.co.id/beli-bunga-tanaman-artifisial/"},{"childCategoryName":"Jam","childCategoryUrl":"https://www.lazada.co.id/beli-jam/"},{"childCategoryName":"Dalaman & Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/shop-dalaman-sarung-bantal/"},{"childCategoryName":"Bingkai","childCategoryUrl":"https://www.lazada.co.id/beli-bingkai/"},{"childCategoryName":"Wewangian Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-wewangian-rumah/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_2">
                                      <a href="https://www.lazada.co.id/beli-furnitur/">
                                        <span>Furnitur</span>
                                      </a>
                                      <script type="text" class="J_data_8_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tempat Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpanan/"},{"childCategoryName":"Lemari Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-pakaian/"},{"childCategoryName":"Kasur","childCategoryUrl":"https://www.lazada.co.id/beli-kasur/"},{"childCategoryName":"Kamar Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-kamar-tidur/"},{"childCategoryName":"Rak","childCategoryUrl":"https://www.lazada.co.id/rak/"},{"childCategoryName":"Rak TV dan Media","childCategoryUrl":"https://www.lazada.co.id/tempat-penyimpanan-media-dan-tv/"},{"childCategoryName":"Sofa","childCategoryUrl":"https://www.lazada.co.id/beli-sofa/"},{"childCategoryName":"Ruang Tamu","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-tamu/"},{"childCategoryName":"Ruang Kerja Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-kerja-rumah/"},{"childCategoryName":"Dapur & Ruang Makan","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-dapur-ruang-makan/"},{"childCategoryName":"Ruang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-bayi/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_3">
                                      <a href="https://www.lazada.co.id/beli-peralatan-ranjang/">
                                        <span>Kelengkapan Tempat Tidur</span>
                                      </a>
                                      <script type="text" class="J_data_8_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Seprai","childCategoryUrl":"https://www.lazada.co.id/seprei-ranjang/"},{"childCategoryName":"Seprai Set","childCategoryUrl":"https://www.lazada.co.id/perangkat-seprei/"},{"childCategoryName":"Selimut","childCategoryUrl":"https://www.lazada.co.id/selimut-dan-selimut-panjang/"},{"childCategoryName":"Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-bantal/"},{"childCategoryName":"Aksesoris Tempat Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-ranjang/"},{"childCategoryName":"Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-bantal/"},{"childCategoryName":"Selimut Tebal","childCategoryUrl":"https://www.lazada.co.id/seprei-dan-selimut-tebal/"},{"childCategoryName":"Pelindung Kasur","childCategoryUrl":"https://www.lazada.co.id/kasur-pelindung/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_4">
                                      <a href="https://www.lazada.co.id/penerangan/">
                                        <span>Penerangan</span>
                                      </a>
                                      <script type="text" class="J_data_8_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-lampu/"},{"childCategoryName":"Lampu Khusus","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-khusus/"},{"childCategoryName":"Lampu Langit-langit","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-langit-langit-hias/"},{"childCategoryName":"Penerangan Outdoor","childCategoryUrl":"https://www.lazada.co.id/beli-penerangan-outdoor/"},{"childCategoryName":"Lampu Dinding & Tempel","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-dinding-tempel/"},{"childCategoryName":"Lampu Meja","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-meja/"},{"childCategoryName":"Komponen Lampu","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-komponen/"},{"childCategoryName":"Kap Lampu","childCategoryUrl":"https://www.lazada.co.id/kap-lampu/"},{"childCategoryName":"Lampu Lantai","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-lantai/"},{"childCategoryName":"Lampu Rechargeable & Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_5">
                                      <a href="https://www.lazada.co.id/beli-peralatan-mandi/">
                                        <span>Peralatan Mandi</span>
                                      </a>
                                      <script type="text" class="J_data_8_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Handuk Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-handuk-mandi/"},{"childCategoryName":"Timbangan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-kamar-mandi/"},{"childCategoryName":"Wadah Penyimpanan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpan-kamar-mandi/"},{"childCategoryName":"Rak Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/jual-laci-kamar-mandi/"},{"childCategoryName":"Gantungan Handuk & Penghangat","childCategoryUrl":"https://www.lazada.co.id/gantungan-handuk-dan-penghangat/"},{"childCategoryName":"Tempat & Gantungan Shower","childCategoryUrl":"https://www.lazada.co.id/tempat-dan-gantungan-shower/"},{"childCategoryName":"Keset Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi/"},{"childCategoryName":"Jubah & Kimono Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-jubah-mandi/"},{"childCategoryName":"Tirai Shower","childCategoryUrl":"https://www.lazada.co.id/shop-tirai-mandi-aksesoris/"},{"childCategoryName":"Cermin Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-cermin-kamar-mandi/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_6">
                                      <a href="https://www.lazada.co.id/beli-perlengkapan-dapur-makan/">
                                        <span>Alat Dapur</span>
                                      </a>
                                      <script type="text" class="J_data_8_5">
                                          [{"childCategoryName":"Botol minum","childCategoryUrl":"https://www.lazada.co.id/botol-minum/"},{"childCategoryName":"Tempat Penyimpanan Makanan","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-penyimpan-makanan/"},{"childCategoryName":"Alas Meja & Aksesoris Dapur","childCategoryUrl":"https://www.lazada.co.id/beli-alas-meja-aksesoris-dapur/"},{"childCategoryName":"Kopi & Teh","childCategoryUrl":"https://www.lazada.co.id/beli-kopi-dan-teh/"},{"childCategoryName":"Rak Piring & Aksesoris Wastafel","childCategoryUrl":"https://www.lazada.co.id/beli-rak-piring-aksesoris-bak/"},{"childCategoryName":"Panci & Wajan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-masak/"},{"childCategoryName":"Perangkat Minum","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-minum-gelas/"},{"childCategoryName":"Perangkat Makan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-penyajian-makanan/"},{"childCategoryName":"Perangkat Pemanggang","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-pemanggang/"},{"childCategoryName":"Perangkat Penyajian","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-penyaji/"},{"childCategoryName":"Pisau & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-pisau-dan-aksesoris/"},{"childCategoryName":"Alat Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-dapur/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_7">
                                      <a href="https://www.lazada.co.id/beli-binatu-kebersihan/">
                                        <span>Binatu &amp; Alat
                                          Kebersihan</span>
                                      </a>
                                      <script type="text" class="J_data_8_6">
                                          [{"childCategoryName":"Gantungan Baju","childCategoryUrl":"https://www.lazada.co.id/gantungan-baju/"},{"childCategoryName":"Keranjang Baju","childCategoryUrl":"https://www.lazada.co.id/keranjang-cucian/"},{"childCategoryName":"Jemuran Pakaian","childCategoryUrl":"https://www.lazada.co.id/rak-pengering/"},{"childCategoryName":"Alat Binatu & Setrika","childCategoryUrl":"https://www.lazada.co.id/beli-alat-binatu-setrika/"},{"childCategoryName":"Meja Setrika","childCategoryUrl":"https://www.lazada.co.id/papan-setrika/"},{"childCategoryName":"Produk Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Sapu & Alat Pel","childCategoryUrl":"https://www.lazada.co.id/beli-sapu-pel/"},{"childCategoryName":"Lap Kain Penghilang Debu","childCategoryUrl":"https://www.lazada.co.id/shop-Sapu-Sikat-Kemoceng/"},{"childCategoryName":"Sikat Pembersih","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-aksesoris-pembersih/"},{"childCategoryName":"Tempat Sampah","childCategoryUrl":"https://www.lazada.co.id/tempat-sampah/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_8">
                                      <a href="https://www.lazada.co.id/beli-perawatan-rumah/">
                                        <span>Perkakas &amp; Perbaikan
                                          Rumah</span>
                                      </a>
                                      <script type="text" class="J_data_8_7">
                                          [{"childCategoryName":"Alat Penyimpanan & Rak","childCategoryUrl":"https://www.lazada.co.id/beli-garasi-penyimpanan-alat-alat/"},{"childCategoryName":"Kabel & Perlengkapan Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-elektrik/"},{"childCategoryName":"Pengecatan & Dekorasi","childCategoryUrl":"https://www.lazada.co.id/beli-pengecatan-dekorasi/"},{"childCategoryName":"Perkakas","childCategoryUrl":"https://www.lazada.co.id/beli-perkakas/"},{"childCategoryName":"Perkakas Listrik","childCategoryUrl":"https://www.lazada.co.id/jual-perkakas-listrik/"},{"childCategoryName":"Perkakas Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-genggam/"},{"childCategoryName":"Pipa Saluran Air & Kelengkapan","childCategoryUrl":"https://www.lazada.co.id/beli-ledeng/"},{"childCategoryName":"Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter"},{"childCategoryName":"Tangga & Kursi Peninggi","childCategoryUrl":"https://www.lazada.co.id/beli-tangga-kursi-peninggi/"},{"childCategoryName":"perlengkapan keamanan","childCategoryUrl":"https://www.lazada.co.id/lampu-penerangan-tempat-kerja/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_9">
                                      <a href="https://www.lazada.co.id/Kebun &amp; Luar Ruangan/">
                                        <span>Kebun &amp; Luar Ruangan</span>
                                      </a>
                                      <script type="text" class="J_data_8_8">
                                          [{"childCategoryName":"Peralatan Listrik Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-listrik-taman-luar-ruangan/"},{"childCategoryName":"Peralatan Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-kebun/"},{"childCategoryName":"Sistem Pengairan","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-pengairan/"},{"childCategoryName":"Bibit & Biji Bijian","childCategoryUrl":"https://www.lazada.co.id/beli-tumbuhan-biji-bijian/"},{"childCategoryName":"Pembasmi Hama","childCategoryUrl":"https://www.lazada.co.id/beli-pembasmi-rumput-liar-hama/"},{"childCategoryName":"Aksesoris Genset","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-peralatan-listrik-luar-ruangan/"},{"childCategoryName":"Genset","childCategoryUrl":"https://www.lazada.co.id/shop-generator/"},{"childCategoryName":"Pemanggang","childCategoryUrl":"https://www.lazada.co.id/pemanggang-dan-penyajian-masakan-outdoor/"},{"childCategoryName":"Alat Pembunuh Serangga","childCategoryUrl":"https://www.lazada.co.id/alat-pembunuh-serangga/"},{"childCategoryName":"Aksesoris Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-luar-ruangan/"},{"childCategoryName":"Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-taman-dan-kebun/"},{"childCategoryName":"","childCategoryUrl":""}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_10">
                                      <a href="https://www.lazada.co.id/beli-alat-tulis-kerajinan/">
                                        <span>Alat Tulis &amp; Kerajinan</span>
                                      </a>
                                      <script type="text" class="J_data_8_9">
                                          [{"childCategoryName":"Peralatan Kesenian dan Kerajinan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-seni/"},{"childCategoryName":"Peralatan Mewarnai dan Copic","childCategoryUrl":"https://www.lazada.co.id/beli-alat-mewarnai-copic/"},{"childCategoryName":"Kerajinan Umum","childCategoryUrl":"https://www.lazada.co.id/beli-alat-kerajinan-umum/"},{"childCategoryName":"Pernak Pernik Hadiah dan Kado","childCategoryUrl":"https://www.lazada.co.id/beli-pernak-pernik-hadiah/"},{"childCategoryName":"Tas Belanja","childCategoryUrl":"https://www.lazada.co.id/beli-tas-belanjaan/"},{"childCategoryName":"Buku Catatan","childCategoryUrl":"https://www.lazada.co.id/buku-catatan/"},{"childCategoryName":"Kertas Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-kertas-komputer/"},{"childCategoryName":"Perlengkapan Sekolah","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-sekolah/"},{"childCategoryName":"Perlengkapan Meja Kerja","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-alat-alat-kantor/"},{"childCategoryName":"Perlengkapan Jahit","childCategoryUrl":"https://www.lazada.co.id/beli-bahan-bahan-kerajinan-tangan/"},{"childCategoryName":"Pulpen","childCategoryUrl":"https://www.lazada.co.id/beli-pulpen/"},{"childCategoryName":"Pensil","childCategoryUrl":"https://www.lazada.co.id/beli-pensil-2/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_9_11">
                                      <a href="https://www.lazada.co.id/beli-media-musik-dan-buku/">
                                        <span>Media, Musik &amp; Buku</span>
                                      </a>
                                      <script type="text" class="J_data_8_10">
                                          [{"childCategoryName":"Instrumen Musik","childCategoryUrl":"https://www.lazada.co.id/instrumen-musik/"},{"childCategoryName":"Buku","childCategoryUrl":"https://www.lazada.co.id/buku/"},{"childCategoryName":"Musik","childCategoryUrl":"https://www.lazada.co.id/lagu/"},{"childCategoryName":"Majalah","childCategoryUrl":"https://www.lazada.co.id/majalah/"},{"childCategoryName":"Film","childCategoryUrl":"https://www.lazada.co.id/film/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No10" data-spm="cate_10">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_1">
                                      <a href="https://www.lazada.co.id/beli-minuman/">
                                        <span>Minuman</span>
                                      </a>
                                      <script type="text" class="J_data_9_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"UHT, Susu & Susu Bubuk","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-uht-milk-milk-powder/"},{"childCategoryName":"Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-kopi/"},{"childCategoryName":"Minuman Serbuk","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-serbuk/"},{"childCategoryName":"Minuman Berenergi","childCategoryUrl":"https://www.lazada.co.id/shop-Minuman-Olahraga-Energi/"},{"childCategoryName":"Teh","childCategoryUrl":"https://www.lazada.co.id/beli-teh/"},{"childCategoryName":"Chocolate, Malt & Hot Cereals","childCategoryUrl":"https://www.lazada.co.id/coklat-panas/"},{"childCategoryName":"Air Mineral","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-air/"},{"childCategoryName":"Minuman Berkarbonasi","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-minuman-ringan/"},{"childCategoryName":"Jus","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-jus/"},{"childCategoryName":"Sirup","childCategoryUrl":"https://www.lazada.co.id/beli-sirup/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_2">
                                      <a href="https://www.lazada.co.id/shop-Bahan-Utama-Pelengkap-Masakan">
                                        <span>Bahan &amp; Bumbu Masakan</span>
                                      </a>
                                      <script type="text" class="J_data_9_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan Instant & Siap santap","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Instan-Siap-Santap/"},{"childCategoryName":"Bahan Pembuat Kue","childCategoryUrl":"https://www.lazada.co.id/shop-Bahan-Pembuat-Kue/"},{"childCategoryName":"Beras","childCategoryUrl":"https://www.lazada.co.id/shop-Beras/"},{"childCategoryName":"Garam & Bumbu Dapur","childCategoryUrl":"https://www.lazada.co.id/shop-Bumbu-Dapur/"},{"childCategoryName":"Mie & Bihun","childCategoryUrl":"https://www.lazada.co.id/shop-Mi-Bihun/"},{"childCategoryName":"Makanan Kering","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kering/"},{"childCategoryName":"Minyak","childCategoryUrl":"https://www.lazada.co.id/shop-Minyak/"},{"childCategoryName":"Makanan Kaleng","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kaleng/"},{"childCategoryName":"Pasta","childCategoryUrl":"https://www.lazada.co.id/shop-Pasta/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_3">
                                      <a href="https://www.lazada.co.id/shop-Cokelat-Camilan-Permen/">
                                        <span>Cokelat, Camilan &amp;
                                          Permen</span>
                                      </a>
                                      <script type="text" class="J_data_9_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Camilan","childCategoryUrl":"https://www.lazada.co.id/shop-Camilan/"},{"childCategoryName":"Cokelat","childCategoryUrl":"https://www.lazada.co.id/shop-Cokelat/"},{"childCategoryName":"Biskuit & Kerupuk","childCategoryUrl":"https://www.lazada.co.id/shop-Biskuit-Manis/"},{"childCategoryName":"Permen","childCategoryUrl":"https://www.lazada.co.id/shop-Manisan/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_4">
                                      <a href="https://www.lazada.co.id/beli-makanan-sarapan">
                                        <span>Makanan Sarapan, Sereal &amp;
                                          Selai</span>
                                      </a>
                                      <script type="text" class="J_data_9_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Selai & Madu","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-selai-madu-spread/"},{"childCategoryName":"Oatmeal","childCategoryUrl":"https://www.lazada.co.id/beli-oatmeal/"},{"childCategoryName":"Sereal Sarapan","childCategoryUrl":"https://www.lazada.co.id/beli-sereal/"},{"childCategoryName":"Tepung Pancake & Waffle","childCategoryUrl":"https://www.lazada.co.id/beli-pancake-waffle/"},{"childCategoryName":"Bars","childCategoryUrl":"https://www.lazada.co.id/shop-bar/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_5">
                                      <a href="https://www.lazada.co.id/beli-makanan-minuman-hasil-segar">
                                        <span>Buah &amp; Sayur</span>
                                      </a>
                                      <script type="text" class="J_data_9_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Buah Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-buah/"},{"childCategoryName":"Sayur Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-sayuran-segar/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_6">
                                      <a href="https://www.lazada.co.id/shop-kebutuhan-rumah-tangga">
                                        <span>Kebutuhan Rumah Tangga</span>
                                      </a>
                                      <script type="text" class="J_data_9_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengharum Ruangan","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-udara/"},{"childCategoryName":"Kebutuhan Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Pengendalian Hama","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pengendalian-hama/"},{"childCategoryName":"Sabun Pencuci Piring","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-mencuci-piring/"},{"childCategoryName":"Kebutuhan Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-cucian/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_7">
                                      <a href="https://www.lazada.co.id/shop-makanan-hewan">
                                        <span>Makanan Hewan Peliharaan</span>
                                      </a>
                                      <script type="text" class="J_data_9_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan & Camilan Kucing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-kucing/"},{"childCategoryName":"Makanan Burung","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-burung/"},{"childCategoryName":"Makanan Ikan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ikan/"},{"childCategoryName":"Makanan & Camilan Anjing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-anjing/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_8">
                                      <a href="https://www.lazada.co.id/shop-aksesoris-hewan">
                                        <span>Aksesoris Hewan Peliharaan</span>
                                      </a>
                                      <script type="text" class="J_data_9_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Keperluan Akuarium","childCategoryUrl":"https://www.lazada.co.id/shop-keperluan-akuarium/"},{"childCategoryName":"Kandang & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-kandang-terbuka-pintu-anjing/"},{"childCategoryName":"Peralatan Grooming","childCategoryUrl":"https://www.lazada.co.id/jual-persediaan-grooming-hewan/"},{"childCategoryName":"Rumah,Alas & Tempat tidur","childCategoryUrl":"https://www.lazada.co.id/beli-ranjang-alas-tidur-rumah-anjing/"},{"childCategoryName":"Alat Makan Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-mangkuk-makan-anjing/"},{"childCategoryName":"Tali dan Kalung Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-tali-kalung-moncong-anjing/"},{"childCategoryName":"Kebutuhan Travel Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-pengangkut-perjalanan-anjing/"},{"childCategoryName":"Mainan Hewan","childCategoryUrl":"https://www.lazada.co.id/shop-mainan/"},{"childCategoryName":"Alat Pelatihan Anjing","childCategoryUrl":"https://www.lazada.co.id/beli-alat-latih-olahraga-anjing/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_10_9">
                                      <a href="https://www.lazada.co.id/shop-kesehatan-hewan-peliharaan">
                                        <span>Kesehatan Hewan Peliharaan</span>
                                      </a>
                                      <script type="text" class="J_data_9_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-kesehatan-gigi-anjing/"},{"childCategoryName":"Pembasmi Kutu Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-kutu-anjing/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No11" data-spm="cate_11">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_1">
                                      <a href="https://www.lazada.co.id/baju-olahraga-pria/">
                                        <span>Baju Olahraga Pria</span>
                                      </a>
                                      <script type="text" class="J_data_10_0">
                                          [{"childCategoryName":"Celana Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-pria/"},{"childCategoryName":"Kaos Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/kaos-olahraga-pria/"},{"childCategoryName":"Jaket Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-olahraga-pria/"},{"childCategoryName":"Pakaian Renang Pria","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-pria/"},{"childCategoryName":"Jersey Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-olahraga-pria/"},{"childCategoryName":"Celana Pendek Pria","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-pria/"},{"childCategoryName":"Hoodies Pria","childCategoryUrl":"https://www.lazada.co.id/hoodies-pria/"},{"childCategoryName":"Topi Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-topi-olahraga-pria/"},{"childCategoryName":"Tas Ransel Sport Pria","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-pria/"},{"childCategoryName":"Tas Serut Pria","childCategoryUrl":"https://www.lazada.co.id/tas-serut-pria/"},{"childCategoryName":"Tas Duffel Pria","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-pria/"},{"childCategoryName":"Gym Tote Pria","childCategoryUrl":"https://www.lazada.co.id/gym-tote-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_2">
                                      <a href="https://www.lazada.co.id/pakaian-olahraga-wanita/">
                                        <span>Baju Olahraga Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_10_1">
                                          [{"childCategoryName":"Celana Panjang Wanita","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-wanita/"},{"childCategoryName":"Kaos Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/kaos-dan-atasan-olahraga-wanita/"},{"childCategoryName":"Jaket Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-sport-wanita/"},{"childCategoryName":"Sport Bra Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sport-bra-wanita/"},{"childCategoryName":"Celana Pendek Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-wanita/"},{"childCategoryName":"Rok Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-rok-olahraga-wanita/"},{"childCategoryName":"Hoodies Wanita","childCategoryUrl":"https://www.lazada.co.id/hoodies-wanita/"},{"childCategoryName":"Pakaian Renang Wanita","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-wanita/"},{"childCategoryName":"Tas Ransel Sport Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-wanita/"},{"childCategoryName":"Tas Serut Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-serut-wanita/"},{"childCategoryName":"Tas Duffel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-wanita/"},{"childCategoryName":"Gym Tote Wanita","childCategoryUrl":"https://www.lazada.co.id/gym-tote-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_3">
                                      <a href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-pria/">
                                        <span>Sepatu Olahraga Pria</span>
                                      </a>
                                      <script type="text" class="J_data_10_2">
                                          [{"childCategoryName":"Sepatu Sepakbola Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Sepatu Lari Pria","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-pria/"},{"childCategoryName":"Sepatu Hiking Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-hiking-pria/"},{"childCategoryName":"Sepatu Basket Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-basket-pria/"},{"childCategoryName":"Sepatu Olahraga Air Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-olahraga-air-pria/"},{"childCategoryName":"Sepatu Badminton ria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-badminton-pria/"},{"childCategoryName":"Sepatu Training Pira","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-pria/"},{"childCategoryName":"Sepatu Skateboard Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-pria/"},{"childCategoryName":"Sepatu Sneakers Pria","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-pria/"},{"childCategoryName":"Sandal Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-pria/"},{"childCategoryName":"Sepatu Jalan Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-pria/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_4">
                                      <a href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-wanita/">
                                        <span>Sepatu Olahraga Wanita</span>
                                      </a>
                                      <script type="text" class="J_data_10_3">
                                          [{"childCategoryName":"Sepatu Badminton Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-badminton-wanita/"},{"childCategoryName":"Sepatu Lari Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-wanita/"},{"childCategoryName":"Sepatu Futsal Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-futsal-wanita/"},{"childCategoryName":"Sepatu Basket Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-basket-wanita/"},{"childCategoryName":"Sepatu Sepakbola Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepakbola-wanita/"},{"childCategoryName":"Sepatu Olahraga Air Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-olaraga-air-wanita/"},{"childCategoryName":"Sepatu Hiking Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-hiking-wanita/"},{"childCategoryName":"Sepatu Training Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-wanita/"},{"childCategoryName":"Septu Skateboard Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-wanita/"},{"childCategoryName":"Sepatu Sneakers Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-wanita/"},{"childCategoryName":"Sandal Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-wanita/"},{"childCategoryName":"Sepatu Jalan Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-wanita/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_5">
                                      <a href="https://www.lazada.co.id/camping-dan-hiking/">
                                        <span>Camping dan Hiking</span>
                                      </a>
                                      <script type="text" class="J_data_10_4">
                                          [{"childCategoryName":"Tenda dan furniture Camping","childCategoryUrl":"https://www.lazada.co.id/tenda-dan-furniture/"},{"childCategoryName":"Perlengkapan Tidur Camping","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-tidur-camping/"},{"childCategoryName":"Tas Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tas-ransel/"},{"childCategoryName":"Tempat berteduh Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tempat-berteduh-dan-kanopi/"},{"childCategoryName":"Perabotan Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-perabotan-kemah/"},{"childCategoryName":"Alat Dapur Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-dapur-kemah/"},{"childCategoryName":"Alat penerangan Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-penerangan/"},{"childCategoryName":"Navigasi Elektroning Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-navigasi-elektronik/"},{"childCategoryName":"Tongkat Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-hiking/"},{"childCategoryName":"Pisau Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-pisau-alat-multifungsi/"},{"childCategoryName":"Peralatan Survival Camping","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-survival-dan-keamanan/"},{"childCategoryName":"Perlengkapan Panjat Tebing","childCategoryUrl":"https://www.lazada.co.id/panjat-tebing/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_6">
                                      <a href="https://www.lazada.co.id/jual-peralatan-memancing/">
                                        <span>Peralatan Memancing</span>
                                      </a>
                                      <script type="text" class="J_data_10_5">
                                          [{"childCategoryName":"Tongkat Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-pancing/"},{"childCategoryName":"Alat Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/alat-gulungan-pancing/"},{"childCategoryName":"Set Tongkat dan Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/set-tongkat-dan-gulungan-pancing/"},{"childCategoryName":"Senar Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-senar-pancing/"},{"childCategoryName":"Umpan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-umpan/"},{"childCategoryName":"Peralatan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-pancing/"},{"childCategoryName":"GPS alat pencari ikan","childCategoryUrl":"https://www.lazada.co.id/jual-gps-alat-pencari-ikan/"},{"childCategoryName":"Jaring Penangkap Ikan","childCategoryUrl":"https://www.lazada.co.id/jual-jaring-penangkap-ikan/"},{"childCategoryName":"Aksesoris Memancing","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-memancing/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_7">
                                      <a href="https://www.lazada.co.id/olahraga-sepeda/">
                                        <span>Olahraga Sepeda</span>
                                      </a>
                                      <script type="text" class="J_data_10_6">
                                          [{"childCategoryName":"Komponen Part Sepeda","childCategoryUrl":"https://www.lazada.co.id/komponen-dan-parts-sepeda/"},{"childCategoryName":"Aksesoris Sepeda","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepeda/"},{"childCategoryName":"Sepeda","childCategoryUrl":"https://www.lazada.co.id/sepeda/"},{"childCategoryName":"Kaos Sepeda","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kaos-sepeda/"},{"childCategoryName":"Sepatu Sepeda Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-pria/"},{"childCategoryName":"Sepatu Sepeda Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepeda-wanita/"},{"childCategoryName":"Sepatu Sepeda Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-perempuan/"},{"childCategoryName":"Sepatu Sepeda Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-laki-laki/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_8">
                                      <a href="https://www.lazada.co.id/olahraga-air/">
                                        <span>Olahraga Air</span>
                                      </a>
                                      <script type="text" class="J_data_10_7">
                                          [{"childCategoryName":"Kapal","childCategoryUrl":"https://www.lazada.co.id/jual-kapal/"},{"childCategoryName":"Peralatan Menyelam","childCategoryUrl":"https://www.lazada.co.id/diving-snorkeling/"},{"childCategoryName":"Peralatan Renang","childCategoryUrl":"https://www.lazada.co.id/renang/"},{"childCategoryName":"Papan Renang","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-papan/"},{"childCategoryName":"Tubing dan Towables","childCategoryUrl":"https://www.lazada.co.id/jual-tubing-towables/"},{"childCategoryName":"Akesesoris Olahraga Air","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-olahraga-air/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_9">
                                      <a href="https://www.lazada.co.id/latihan-dan-fitness/">
                                        <span>Gym, Yoga &amp; Fitness</span>
                                      </a>
                                      <script type="text" class="J_data_10_8">
                                          [{"childCategoryName":"Peralatan Pelatihan Ketangkasan","childCategoryUrl":"https://www.lazada.co.id/shop-pelatihan-kecepatan-ketangkasan/"},{"childCategoryName":"Aksesoris Gym","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris/"},{"childCategoryName":"Pilates Gym","childCategoryUrl":"https://www.lazada.co.id/pilates/"},{"childCategoryName":"Alat Latihan Angkat Beban","childCategoryUrl":"https://www.lazada.co.id/alat-latihan-angkat-beban/"},{"childCategoryName":"Yoga","childCategoryUrl":"https://www.lazada.co.id/yoga/"},{"childCategoryName":"Peralatan Kardio","childCategoryUrl":"https://www.lazada.co.id/peralatan-latihan-kardio/"},{"childCategoryName":"Perlengkapan Fitnes","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-fitness/"},{"childCategoryName":"Perlengkapan Lari","childCategoryUrl":"https://www.lazada.co.id/temporary-url-sport-catl3-1/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_10">
                                      <a href="https://www.lazada.co.id/olahraga-raket/">
                                        <span>Olahraga Raket</span>
                                      </a>
                                      <script type="text" class="J_data_10_9">
                                          [{"childCategoryName":"Tenis Meja","childCategoryUrl":"https://www.lazada.co.id/tenis-meja/"},{"childCategoryName":"Badminton","childCategoryUrl":"https://www.lazada.co.id/bulutangkis/"},{"childCategoryName":"Tennis","childCategoryUrl":"https://www.lazada.co.id/tenis/"},{"childCategoryName":"Squash","childCategoryUrl":"https://www.lazada.co.id/squash/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_11">
                                      <a href="https://www.lazada.co.id/shop-perlengkapan-olah-raga/">
                                        <span>Perlengkapan Olahraga</span>
                                      </a>
                                      <script type="text" class="J_data_10_10">
                                          [{"childCategoryName":"Oxrashoan Tinju-Bela Mma","childCategoryUrl":"https://www.lazada.co.id/jual-tinju-bela-diri-mma/"},{"childCategoryName":"Golf Gym","childCategoryUrl":"https://www.lazada.co.id/golf/"},{"childCategoryName":"Bola Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-bola/"},{"childCategoryName":"Basket Gym","childCategoryUrl":"https://www.lazada.co.id/basket/"},{"childCategoryName":"Voli Gym","childCategoryUrl":"https://www.lazada.co.id/voli/"},{"childCategoryName":"Cricket Gym","childCategoryUrl":"https://www.lazada.co.id/cricket/"},{"childCategoryName":"Rugby Gym","childCategoryUrl":"https://www.lazada.co.id/rugby/"},{"childCategoryName":"Takraw Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-takraw/"},{"childCategoryName":"Baseball Gym","childCategoryUrl":"https://www.lazada.co.id/baseball/"},{"childCategoryName":"Perlengkapan Olahraga Senam","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-senam/"},{"childCategoryName":"Hoki Gym","childCategoryUrl":"https://www.lazada.co.id/olahraga-hoki/"},{"childCategoryName":"Peralatan Cheerleading","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-cheerleading/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_11_12">
                                      <a href="https://www.lazada.co.id/sepak-bola/">
                                        <span>Perlengkapan Sepak Bola</span>
                                      </a>
                                      <script type="text" class="J_data_10_11">
                                          [{"childCategoryName":"Sepatu Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Jersey Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-pria/"},{"childCategoryName":"Jersey Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-anak-laki-laki/"},{"childCategoryName":"Sepatu Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepak-bola/"},{"childCategoryName":"Sepatu Futsal Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal/"},{"childCategoryName":"Bola","childCategoryUrl":"https://www.lazada.co.id/bola-sepak-bola/"},{"childCategoryName":"Sarung Tangan Keeper","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-kiper/"},{"childCategoryName":"Pelindung Lutut","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-tulang-kering/"},{"childCategoryName":"Peralatan Latihan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-berlatih-dan-lapangan/"},{"childCategoryName":"Tas","childCategoryUrl":"https://www.lazada.co.id/jual-tas-peralatan/"},{"childCategoryName":"Fan Merchandise Team International","childCategoryUrl":"https://www.lazada.co.id/international-football-clubs-fan-merchandise/"}]
                                        </script>
                                    </li>
                                  </ul>
                                  <ul class="lzd-site-menu-sub Level_1_Category_No12" data-spm="cate_12">
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_1">
                                      <a href="https://www.lazada.co.id/shop-auto-parts-spares/">
                                        <span>Suku Cadang &amp; Peralatan
                                          Mobil</span>
                                      </a>
                                      <script type="text" class="J_data_11_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Lampu, Bohlam & LED","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-led-hid/"},{"childCategoryName":"Rem","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-brake-system/"},{"childCategoryName":"Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shocks-struts-suspension/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-engine-parts/"},{"childCategoryName":"Suku Cadang Body","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-parts/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exhaust-emissions/"},{"childCategoryName":"Aki Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-batteries-accessories/"},{"childCategoryName":"Wiper & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-windshield-wipers-washers/"},{"childCategoryName":"Klakson & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-horns-accessories/"},{"childCategoryName":"Peralatan Pengapian & Kelistrikan","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-ignition-electrical/"},{"childCategoryName":"Peralatan & Suku Cadang Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trim/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_2">
                                      <a href="https://www.lazada.co.id/aksesoris-interior-mobil/">
                                        <span>Aksesoris Interior Mobil</span>
                                      </a>
                                      <script type="text" class="J_data_11_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Jok & Trim","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok-aksesoris-kursi/"},{"childCategoryName":"Aksesoris Stir Mobil","childCategoryUrl":"https://www.lazada.co.id/setir-mobil-dan-aksesoris/"},{"childCategoryName":"Persneling","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shift-boots-knobs/"},{"childCategoryName":"Pedal","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-pedals-pedal-accessories/"},{"childCategoryName":"Spidometer & Pengukur","childCategoryUrl":"https://www.lazada.co.id/alat-pengukur-kecepatan/"},{"childCategoryName":"Aksesoris Elektronik Interior","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-electrical-appliances/"},{"childCategoryName":"Aksesoris Interior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-consoles-organizers/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_3">
                                      <a href="https://www.lazada.co.id/aksesoris-eksterior-mobil/">
                                        <span>Aksesoris Exterior Mobil</span>
                                      </a>
                                      <script type="text" class="J_data_11_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Mobil","childCategoryUrl":"https://www.lazada.co.id/penutup-mobil/"},{"childCategoryName":"Stiker & Emblems","childCategoryUrl":"https://www.lazada.co.id/shop-stiker/"},{"childCategoryName":"Lis & Garnis","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-chrome-trim-accessories/"},{"childCategoryName":"Penutup Pelat Nomer","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-license-plate-covers-frames/"},{"childCategoryName":"Aksesoris Serbaguna","childCategoryUrl":"https://www.lazada.co.id/shop-manajemen-kargo/"},{"childCategoryName":"Kaca Angin, Deflektor & Talang Air","childCategoryUrl":"https://www.lazada.co.id/pelindung-dan-talang-air-mobil/"},{"childCategoryName":"Kaca & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exterior-mirrors/"},{"childCategoryName":"Spoiler, Sayap & Body Kit","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-spoilers-wings-styling-kits/"},{"childCategoryName":"Aksesoris Offroad","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-armor/"},{"childCategoryName":"Aksesoris Exterior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trailer-accessories/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_4">
                                      <a href="https://www.lazada.co.id/shop-elektronik/">
                                        <span>Kamera Mobil, Audio &amp;
                                          Video</span>
                                      </a>
                                      <script type="text" class="J_data_11_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kamera Mobil & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-kamera-mobil/"},{"childCategoryName":"Headunit","childCategoryUrl":"https://www.lazada.co.id/shop-car-video-in-dash-navigation/"},{"childCategoryName":"Spiker","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-speakers/"},{"childCategoryName":"Subwoofer","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-subwoofers/"},{"childCategoryName":"Power, amplifier & Kapasitor Bank","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-equalizers/"},{"childCategoryName":"GPS","childCategoryUrl":"https://www.lazada.co.id/shop-motors-gps/"},{"childCategoryName":"Video, TV Aksesoris mobil","childCategoryUrl":"https://www.lazada.co.id/shop-car-video/"},{"childCategoryName":"Aksesoris Audio & Video Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-audio-video-accessories/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_5">
                                      <a href="https://www.lazada.co.id/shop-perawatan-mobil/">
                                        <span>Perawatan &amp; Pengkilat
                                          Mobil</span>
                                      </a>
                                      <script type="text" class="J_data_11_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Pengkilat & Detailing Bodi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-waxing-kits/"},{"childCategoryName":"Pelapis & Pembersih Kaca","childCategoryUrl":"https://www.lazada.co.id/glass-care/"},{"childCategoryName":"Kompon & Penghilang Baret","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-rubbing-compounds/"},{"childCategoryName":"Cat Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-paints-primers/"},{"childCategoryName":"Perawatan Ban & Velg","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-tire-wheel-care/"},{"childCategoryName":"Perawatan Interior","childCategoryUrl":"https://www.lazada.co.id/interior-care/"},{"childCategoryName":"Paket Perawatan Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-paket-perawatan-mobil/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_6">
                                      <a href="https://www.lazada.co.id/roda-dan-ban/">
                                        <span>Ban &amp; Velg Mobil</span>
                                      </a>
                                      <script type="text" class="J_data_11_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Velg","childCategoryUrl":"https://www.lazada.co.id/jual-roda/"},{"childCategoryName":"Ban","childCategoryUrl":"https://www.lazada.co.id/jual-ban/"},{"childCategoryName":"Aksesoris Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-roda-suku-cadang/"},{"childCategoryName":"Peralatan Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/shop-tire-parts-air-compressors-inflators/"},{"childCategoryName":"Servis & Pemasangan Velg, Ban","childCategoryUrl":"https://www.lazada.co.id/shop-paket-ban-pelek/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_7">
                                      <a href="https://www.lazada.co.id/oli-dan-pelumas/">
                                        <span>Oli &amp; Cairan Mobil</span>
                                      </a>
                                      <script type="text" class="J_data_11_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-oils/"},{"childCategoryName":"Aditif & Penguat Bensin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-auto-oils-fluids-additives/"},{"childCategoryName":"Pendingin Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-antifreezes-coolants/"},{"childCategoryName":"Pembersih Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-cleaners/"},{"childCategoryName":"Oli Powersteering","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-power-steering-fluids/"},{"childCategoryName":"Cairan & Oli Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-greases-lubricants/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_8">
                                      <a href="https://www.lazada.co.id/shop-motorcycle-riding-gear/">
                                        <span>Perlengkapan Berkendara &amp;
                                          Helm</span>
                                      </a>
                                      <script type="text" class="J_data_11_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Helm","childCategoryUrl":"https://www.lazada.co.id/helmets-automotive/"},{"childCategoryName":"Jaket & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jackets/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-gloves/"},{"childCategoryName":"Sepatu & Boot","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-footwear/"},{"childCategoryName":"Masker & Pelindung Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-face-masks/"},{"childCategoryName":"Kacamata Angin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-eyewear/"},{"childCategoryName":"Peralatan Hujan","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-hujan/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_9">
                                      <a href="https://www.lazada.co.id/shop-motorcycle-parts-spares/">
                                        <span>Suku Cadang &amp; Peralatan
                                          Motor</span>
                                      </a>
                                      <script type="text" class="J_data_11_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam, LED & Rumah Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-penerangan/"},{"childCategoryName":"Rem & Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brakes-suspension/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/moto-knalpot-system-pembuangan/"},{"childCategoryName":"Aki Motor & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-moto-batteries-accessories/"},{"childCategoryName":"Kaca / Cermin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-mirrors/"},{"childCategoryName":"Filter Motor","childCategoryUrl":"https://www.lazada.co.id/shop-saringan-udara/"},{"childCategoryName":"Suku Cadang Bodi & Rangka","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-body-frame/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-drivetrain-transmission/"},{"childCategoryName":"Busi","childCategoryUrl":"https://www.lazada.co.id/shop-busi-motor/"},{"childCategoryName":"Suku Cadang Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-stands-accessories/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_10">
                                      <a href="https://www.lazada.co.id/shop-motorcycle-exterior-accessories/">
                                        <span>Aksesoris &amp; Elektronik
                                          Motor</span>
                                      </a>
                                      <script type="text" class="J_data_11_9">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Jok","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok/"},{"childCategoryName":"Stiker & Emblem","childCategoryUrl":"https://www.lazada.co.id/shop-stiker-emblem/"},{"childCategoryName":"Pengukur","childCategoryUrl":"https://www.lazada.co.id/shop-indikator/"},{"childCategoryName":"Aksesoris Elektronik","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-electronics/"},{"childCategoryName":"Pelindung Plat Nomor","childCategoryUrl":"https://www.lazada.co.id/shop-frame-plat-nomor/"},{"childCategoryName":"Sarung Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-covers/"},{"childCategoryName":"Windshield & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-windshields-accessories/"},{"childCategoryName":"Bagasi Penyimpanan & Bantalan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-luggage-saddlebags/"},{"childCategoryName":"Aksesoris & Elektronik Motor Lainny","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-racks/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_11">
                                      <a href="https://www.lazada.co.id/shop-motorcycle-oils-fluids/">
                                        <span>Ban, Velg, Oli &amp; Cairan
                                          Motor</span>
                                      </a>
                                      <script type="text" class="J_data_11_10">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oli-mesin/"},{"childCategoryName":"Oli Rem Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brake-fluid/"},{"childCategoryName":"Oli Transmisi Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oligirboks/"},{"childCategoryName":"Pendingin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-coolant/"},{"childCategoryName":"Aditif & Penguat Bensin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pembersih/"},{"childCategoryName":"Pelumas Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pelumas-dan-gemuk/"},{"childCategoryName":"Ban & Velg Motor","childCategoryUrl":"https://www.lazada.co.id/jual-roda-ban-motor/"},{"childCategoryName":"Oli & Cairan Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-oli-shock-breaker/"}]
                                        </script>
                                    </li>
                                    <li class="lzd-site-menu-sub-item" data-cate="cate_12_12">
                                      <a href="https://www.lazada.co.id/mobil-motor/">
                                        <span>Kendaraan</span>
                                      </a>
                                      <script type="text" class="J_data_11_11">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-mobil/"},{"childCategoryName":"Motor","childCategoryUrl":"https://www.lazada.co.id/shop-sepeda-motor-skuter/"}]
                                        </script>
                                    </li>
                                  </ul>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <nav class="lzd-menu-labels" data-spm="menu">
                          <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                            <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                              <img alt="<?php echo $BRANDS ?>" class="lzd-site-nav-menu-iconfont-img"
                                src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                            </span>
                            <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-LazMall">&#xe629;</i>-->
                            <span class="lzd-menu-labels-item-text"><?php echo $BRANDS ?></span>
                          </a>
                          <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                            <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                              <img alt="Situs <?php echo $BRANDS ?>" class="lzd-site-nav-menu-iconfont-img"
                                src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                            </span>
                            <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-MobileTop1">&#xe768;</i>-->
                            <span class="lzd-menu-labels-item-text">Situs <?php echo $BRANDS ?> </span>
                          </a>
                          <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                            <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                              <img alt="Situs <?php echo $BRANDS ?>" class="lzd-site-nav-menu-iconfont-img"
                                src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                            </span>
                            <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-Vouchers">&#xe76a;</i>-->
                            <span class="lzd-menu-labels-item-text">Situs <?php echo $BRANDS ?></span>
                          </a>
                          <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                            <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                              <img alt="<?php echo $BRANDS ?> Login" class="lzd-site-nav-menu-iconfont-img"
                                src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                            </span>
                            <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-Categories">&#xe765;</i>-->
                            <span class="lzd-menu-labels-item-text"><?php echo $BRANDS ?> Login</span>
                          </a>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="lzd-nav-cart">
                  <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>" data-spm="dcart"><span class="cart-icon"></span>
                    <span class="cart-num" id="topActionCartNumber"></span></a>
                </div>
                <div class="lzd-header-banner" id="topActionLiveUpBanner"></div>
              </div>
            </div>
          </div>
          <div class="mui-zebra-module" id="J_icms-5000527-1511531232618" data-module-id="icms-5000527-1511531232618"
            data-version="5.0.83" data-spm="icms-5000527-1511531232618">
            <div class="lzd-site-nav-menu lzd-site-nav-menu-active"
              data-mod-name="@ali/lzdmod-site-menu-nav-pc/pc/index" data-config="{}">
              <div class="lzd-site-menu-nav-container">
                <div class="lzd-site-menu-nav-category">
                  <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                    <span class="lzd-site-menu-nav-category-text"><?php echo $BRANDS ?></span>
                  </a>
                  <div class="lzd-site-menu-nav-menu">
                    <div class="mui-zebra-module" id="J_icms-5000518-1511530513406"
                      data-module-id="icms-5000518-1511530513406" data-version="5.0.51"
                      data-spm="icms-5000518-1511530513406">
                      <div class="lzd-site-nav-menu-dropdown" data-mod-name="@ali/lzdmod-site-menu-pc/pc/index"
                        data-config="{}">
                        <ul class="lzd-site-menu-root" data-spm="cate">
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No1">
                            <a>
                              <span>Peralatan Elektronik</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No2">
                            <a>
                              <span>Aksesoris Elektronik</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No3">
                            <a>
                              <span>Fashion &amp; Aksesoris Wanita</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No4">
                            <a>
                              <span>Fashion &amp; Aksesoris Pria</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No5">
                            <a>
                              <span>Fashion &amp; Aksesoris Anak</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No6">
                            <a>
                              <span>Kesehatan &amp; Kecantikan</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No7">
                            <a>
                              <span>Bayi &amp; Mainan</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No8">
                            <a>
                              <span>TV &amp; Elektronik Rumah</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No9">
                            <a>
                              <span>Keperluan Rumah &amp; Gaya Hidup</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No10">
                            <a>
                              <span>Kebutuhan Rumah Tangga</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No11">
                            <a>
                              <span>Olahraga &amp; Outdoor</span>
                            </a>
                          </li>
                          <li class="lzd-site-menu-root-item" id="Level_1_Category_No12">
                            <a>
                              <span>Otomotif</span>
                            </a>
                          </li>
                          <ul class="lzd-site-menu-sub Level_1_Category_No1" data-spm="cate_1">
                            <li class="sub-item-remove-arrow" data-cate="cate_1_1">
                              <a href="https://www.lazada.co.id/beli-handphone">
                                <span>Handphone</span>
                              </a>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_1_2">
                              <a href="https://www.lazada.co.id/shop-beli-laptop/">
                                <span>Laptop</span>
                              </a>
                              <script type="text" class="J_data_0_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Laptop Consumer","childCategoryUrl":"https://www.lazada.co.id/jual-laptop-umum/"},{"childCategoryName":"Laptop Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-gaming/"},{"childCategoryName":"Laptop 2-in-1s","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-2-in-1/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_1_3">
                              <a href="https://www.lazada.co.id/beli-komputer/">
                                <span>Desktop</span>
                              </a>
                              <script type="text" class="J_data_0_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"PC Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-pc-gaming/"},{"childCategoryName":"Komputer Rakitan","childCategoryUrl":"https://www.lazada.co.id/beli-komputer-rakitan/"},{"childCategoryName":"All-In-One","childCategoryUrl":"https://www.lazada.co.id/beli-pc-all-in-one/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_1_4">
                              <a href="https://www.lazada.co.id/beli-kamera/">
                                <span>Kamera</span>
                              </a>
                              <script type="text" class="J_data_0_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"DSLR","childCategoryUrl":"https://www.lazada.co.id/beli-slr/"},{"childCategoryName":"Kamera Mirrorless","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-mirrorless/"},{"childCategoryName":"Kamera Pocket","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-pocket/"},{"childCategoryName":"Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-video-aksi/"},{"childCategoryName":"360 Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-360/"},{"childCategoryName":"Kamera CCTV","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-cctv/"},{"childCategoryName":"IP Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-ip/"},{"childCategoryName":"Video Camera","childCategoryUrl":"https://www.lazada.co.id/beli-camcorders/"},{"childCategoryName":"Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-instan/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_1_5">
                              <a href="https://www.lazada.co.id/shop-gaming-konsol/">
                                <span>Game Console</span>
                              </a>
                              <script type="text" class="J_data_0_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Gaming Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-permainan-konsol/"},{"childCategoryName":"Permainan Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-game-konsol/"},{"childCategoryName":"Pengontrol Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-pengontrol-game-konsol/"},{"childCategoryName":"Konsol Pelindung Penutup","childCategoryUrl":"https://www.lazada.co.id/shop-konsolpelindung-penutup/"},{"childCategoryName":"Aksesoris Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-game-konsol/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_1_6">
                              <a href="https://www.lazada.co.id/beli-gadget/">
                                <span>Gadget</span>
                              </a>
                              <script type="text" class="J_data_0_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Rokok Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-rokok-elektrik/"},{"childCategoryName":"Drone","childCategoryUrl":"https://www.lazada.co.id/jual-kamera-drone/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/beli-media-player/"},{"childCategoryName":"Walkie-Talkie","childCategoryUrl":"https://www.lazada.co.id/jual-walkie-talkie/"}]
                                </script>
                            </li>
                            <li class="sub-item-remove-arrow" data-cate="cate_1_7">
                              <a href="https://www.lazada.co.id/beli-tablet-2">
                                <span>Tablet</span>
                              </a>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No2" data-spm="cate_2">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_1">
                              <a href="https://www.lazada.co.id/beli-aksesori-handphone">
                                <span>Aksesoris Handphone</span>
                              </a>
                              <script type="text" class="J_data_1_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Powerbank","childCategoryUrl":"https://www.lazada.co.id/beli-power-bank/"},{"childCategoryName":"Kabel Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-kabel-handphone/"},{"childCategoryName":"Charger Handphone","childCategoryUrl":"https://www.lazada.co.id/jual-charger-kabel/"},{"childCategoryName":"Casing Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-handphone/"},{"childCategoryName":"Pelindung Layar","childCategoryUrl":"https://www.lazada.co.id/jual-pelindung-layar/"},{"childCategoryName":"Tongsis","childCategoryUrl":"https://www.lazada.co.id/jual-tongsis/"},{"childCategoryName":"Phone Holder","childCategoryUrl":"https://www.lazada.co.id/jual-dudukan-mobil/"},{"childCategoryName":"Baterai Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-baterai-handphone/"},{"childCategoryName":"Peralatan & Suku Cadang","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-handphone/"},{"childCategoryName":"Aksesoris Handphone Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-ponsel/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_2">
                              <a href="https://www.lazada.co.id/beli-aksesori-komputer/">
                                <span>Aksesoris Komputer</span>
                              </a>
                              <script type="text" class="J_data_1_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mouse","childCategoryUrl":"https://www.lazada.co.id/beli-mouse/"},{"childCategoryName":"Keyboard Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard/"},{"childCategoryName":"Monitor","childCategoryUrl":"https://www.lazada.co.id/beli-monitor/"},{"childCategoryName":"Adaptor Jaringan","childCategoryUrl":"https://www.lazada.co.id/adaptor-jaringan/"},{"childCategoryName":"Audio PC","childCategoryUrl":"https://www.lazada.co.id/beli-audio-pc/"},{"childCategoryName":"Adaptor & Kabel","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-kabel/"},{"childCategoryName":"Adaptor Baterai Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-adaptor-baterai-komputer/"},{"childCategoryName":"Mousepad","childCategoryUrl":"https://www.lazada.co.id/beli-mousepad/"},{"childCategoryName":"Cooling Pads","childCategoryUrl":"https://www.lazada.co.id/beli-alas-pendingin/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_3">
                              <a href="https://www.lazada.co.id/shop-audio/">
                                <span>Audio</span>
                              </a>
                              <script type="text" class="J_data_1_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Headphone & Headset","childCategoryUrl":"https://www.lazada.co.id/beli-headphone-dan-headset/"},{"childCategoryName":"Speaker Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"},{"childCategoryName":"Speaker Smart","childCategoryUrl":"https://www.lazada.co.id/beli-speaker-smart/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_4">
                              <a href="https://www.lazada.co.id/shop-perangkat-pintar/">
                                <span>Aksesoris Berteknologi</span>
                              </a>
                              <script type="text" class="J_data_1_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-smartwatch/"},{"childCategoryName":"Aksesoris Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-tali-smartwatch/"},{"childCategoryName":"Activity Tracker","childCategoryUrl":"https://www.lazada.co.id/beli-tracker-fitness-aktivitas/"},{"childCategoryName":"Aksesoris Fitness Tracker","childCategoryUrl":"https://www.lazada.co.id/jual-strap-tracker-aktivitas/"},{"childCategoryName":"Virtual Reality","childCategoryUrl":"https://www.lazada.co.id/jual-virtual-reality/"},{"childCategoryName":"Kendali Gerakan","childCategoryUrl":"https://www.lazada.co.id/jual-kendali-gerakan/"},{"childCategoryName":"Kacamata Pintar","childCategoryUrl":"https://www.lazada.co.id/beli-smart-glasses/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_5">
                              <a href="https://www.lazada.co.id/beli-aksesoris-2/">
                                <span>Aksesoris Kamera</span>
                              </a>
                              <script type="text" class="J_data_1_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tripod & Monopod","childCategoryUrl":"https://www.lazada.co.id/beli-tripod-monopod/"},{"childCategoryName":"Kartu Memori","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-memori/"},{"childCategoryName":"Lensa Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-lensa-kamera/"},{"childCategoryName":"Flash","childCategoryUrl":"https://www.lazada.co.id/beli-flash/"},{"childCategoryName":"Sarung, Pelindung & Tas Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-tas-kamera/"},{"childCategoryName":"Charger Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-charger-baterai/"},{"childCategoryName":"Baterai Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-baterai/"},{"childCategoryName":"Aksesoris Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-kamera-aksi/"},{"childCategoryName":"Aksesoris Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/jual-film-kamera-instan/"},{"childCategoryName":"Perlengkapan Lighting & Studio","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-lighting-studio/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_6">
                              <a href="https://www.lazada.co.id/shop-penyimpanan-data/">
                                <span>Penyimpanan Data</span>
                              </a>
                              <script type="text" class="J_data_1_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Flash Drive","childCategoryUrl":"https://www.lazada.co.id/jual-flash-drives/"},{"childCategoryName":"OTG Drive","childCategoryUrl":"https://www.lazada.co.id/jual-otg-drives/"},{"childCategoryName":"Harddisk Eksternal","childCategoryUrl":"https://www.lazada.co.id/beli-harddisk-eksternal/"},{"childCategoryName":"Hard Drive Internal","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-internal/"},{"childCategoryName":"Internal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-solid-state-drive/"},{"childCategoryName":"Eksternal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-external-solid-state-drive/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_7">
                              <a href="https://www.lazada.co.id/beli-printers/">
                                <span>Printer</span>
                              </a>
                              <script type="text" class="J_data_1_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Printer","childCategoryUrl":"https://www.lazada.co.id/beli-printers/"},{"childCategoryName":"Tinta Printer","childCategoryUrl":"https://www.lazada.co.id/tinta-printer/"},{"childCategoryName":"Printer 3D","childCategoryUrl":"https://www.lazada.co.id/pencetak-3d/"},{"childCategoryName":"Printer POS & Thermal","childCategoryUrl":"https://www.lazada.co.id/beli-printer-stand/"},{"childCategoryName":"Mesin Faks","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-fax/"},{"childCategoryName":"Mesin Cutting Sticker","childCategoryUrl":"https://www.lazada.co.id/printer-pemotong/"},{"childCategoryName":"Memori Printer","childCategoryUrl":"https://www.lazada.co.id/modul-memori-printer/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_8">
                              <a href="https://www.lazada.co.id/beli-aksesori-handphone/">
                                <span>Aksesoris Tablet</span>
                              </a>
                              <script type="text" class="J_data_1_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Casing Tablet","childCategoryUrl":"https://www.lazada.co.id/jual-casing-cover-tablet/"},{"childCategoryName":"Keyboard Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard-tablet/"},{"childCategoryName":"Pen Stylus Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-pen-stylus-tablet/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_2_9">
                              <a href="https://www.lazada.co.id/beli-komponen-komputer/">
                                <span>Komponen Komputer</span>
                              </a>
                              <script type="text" class="J_data_1_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"RAM","childCategoryUrl":"https://www.lazada.co.id/beli-ram/"},{"childCategoryName":"Motherboard","childCategoryUrl":"https://www.lazada.co.id/beli-motherboard/"},{"childCategoryName":"Prosesor","childCategoryUrl":"https://www.lazada.co.id/beli-prosesor/"},{"childCategoryName":"Kartu Grafis","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-grafis/"},{"childCategoryName":"Casing Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-casing-cpu/"},{"childCategoryName":"Power Supply Unit","childCategoryUrl":"https://www.lazada.co.id/beli-power-supply-unit/"},{"childCategoryName":"Soundcard","childCategoryUrl":"https://www.lazada.co.id/soundcard/"},{"childCategoryName":"Front Panel","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-optikal/"},{"childCategoryName":"Water Cooling System","childCategoryUrl":"https://www.lazada.co.id/beli-water-cooling-system/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No3" data-spm="cate_3">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_1">
                              <a href="https://www.lazada.co.id/pakaian-wanita/">
                                <span>Pakaian Wanita</span>
                              </a>
                              <script type="text" class="J_data_2_0">
                                  [{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-wanita/"},{"childCategoryName":"Dress","childCategoryUrl":"https://www.lazada.co.id/gaun-wanita/"},{"childCategoryName":"Atasan","childCategoryUrl":"https://www.lazada.co.id/kaos-atasan-wanita/"},{"childCategoryName":"Sweater & Cardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-wanita/"},{"childCategoryName":"Celana & Legging","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-wanita/"},{"childCategoryName":"Rok","childCategoryUrl":"https://www.lazada.co.id/rok-wanita/"},{"childCategoryName":"Jaket & Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-wanita/"},{"childCategoryName":"Kaus Kaki & Celana Ketat","childCategoryUrl":"https://www.lazada.co.id/kaos-kaki-celana-tights-wanita/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-wanita/"},{"childCategoryName":"Jumpsuit & Playsuit","childCategoryUrl":"https://www.lazada.co.id/overalls-jumpsuit-wanita/"},{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/hoodie-sweatshirt-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_2">
                              <a href="https://www.lazada.co.id/baju-muslim-wanita/">
                                <span>Baju Muslim</span>
                              </a>
                              <script type="text" class="J_data_2_1">
                                  [{"childCategoryName":"Perlengkapan Shalat","childCategoryUrl":"https://www.lazada.co.id/baju-muslim-wanita/"},{"childCategoryName":"Hijab","childCategoryUrl":"https://www.lazada.co.id/hijab/"},{"childCategoryName":"Atasan Muslimah","childCategoryUrl":"https://www.lazada.co.id/atasan-muslimah-wanita/"},{"childCategoryName":"Baju Muslim & Jumpsuit","childCategoryUrl":"https://www.lazada.co.id/dress-muslimah/"},{"childCategoryName":"Bawahan Muslim","childCategoryUrl":"https://www.lazada.co.id/bawahan-muslimah/"},{"childCategoryName":"Luaran Muslim","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-kardigan-wanita-muslim/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-wanita/"},{"childCategoryName":"Baju Renang Muslim","childCategoryUrl":"https://www.lazada.co.id/jual-baju-renang-muslim-wanita/"},{"childCategoryName":"Baju Kurung","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kurung-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_3">
                              <a href="https://www.lazada.co.id/lingerie-baju-tidur/">
                                <span>Lingerie, Baju Tidur &amp; Santai</span>
                              </a>
                              <script type="text" class="J_data_2_2">
                                  [{"childCategoryName":"Bra","childCategoryUrl":"https://www.lazada.co.id/bra-wanita/"},{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-wanita/"},{"childCategoryName":"Shapewear","childCategoryUrl":"https://www.lazada.co.id/shapewear-baju-pembentuk-tubuh-wanita/"},{"childCategoryName":"Baju Tidur & Santai","childCategoryUrl":"https://www.lazada.co.id/bathrobe-baju-mandi-wanita/"},{"childCategoryName":"Jubah Tidur","childCategoryUrl":"https://www.lazada.co.id/jual-jubah-tidur-wanita/"},{"childCategoryName":"Set Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-set-lingerie/"},{"childCategoryName":"Kamisol & Slips","childCategoryUrl":"https://www.lazada.co.id/jual-kamisol-slips-wanita/"},{"childCategoryName":"Bodysuit","childCategoryUrl":"https://www.lazada.co.id/jual-bodysuit-wanita/"},{"childCategoryName":"Aksesori Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-lingerie-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_4">
                              <a href="https://www.lazada.co.id/sepatu-wanita/">
                                <span>Sepatu Wanita</span>
                              </a>
                              <script type="text" class="J_data_2_3">
                                  [{"childCategoryName":"Sepatu Flat","childCategoryUrl":"https://www.lazada.co.id/flat-shoes/"},{"childCategoryName":"Sepatu Hak Tinggi","childCategoryUrl":"https://www.lazada.co.id/heels/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers/"},{"childCategoryName":"Wedges","childCategoryUrl":"https://www.lazada.co.id/wedges/"},{"childCategoryName":"Sepatu Boot","childCategoryUrl":"https://www.lazada.co.id/boots-wanita/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-wanita/"},{"childCategoryName":"Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-wanita/"},{"childCategoryName":"Sandal & Flip Flop","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_5">
                              <a href="https://www.lazada.co.id/aksesoris-wanita/">
                                <span>Aksesoris</span>
                              </a>
                              <script type="text" class="J_data_2_4">
                                  [{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-wanita/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-wanita/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-wanita/"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-rambut/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/scarf-wanita/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-wanita/"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-women-fabricmask/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_6">
                              <a href="https://www.lazada.co.id/tas-wanita/">
                                <span>Tas Wanita</span>
                              </a>
                              <script type="text" class="J_data_2_5">
                                  [{"childCategoryName":"Tas Ransel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-punggung-wanita/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-tas-wanita/"},{"childCategoryName":"Tas Pinggang Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-pinggang-wanita/"},{"childCategoryName":"Dompet Kartu Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-wanita/"},{"childCategoryName":"Clutches","childCategoryUrl":"https://www.lazada.co.id/tas-genggam-wanita/"},{"childCategoryName":"Dompet Koin & Pouch Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-wanita/"},{"childCategoryName":"Tas Selempang & Bahu Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-selempang-badan-wanita/"},{"childCategoryName":"Tas Luxury Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-mewah-wanita/"},{"childCategoryName":"Top-handle Bag","childCategoryUrl":"https://www.lazada.co.id/top-handle-bag/"},{"childCategoryName":"Tote Bag Wanita","childCategoryUrl":"https://www.lazada.co.id/tote-bag-wanita/"},{"childCategoryName":"Dompet Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_7">
                              <a href="https://www.lazada.co.id/beli-perhiasan-wanita/">
                                <span>Perhiasan Wanita</span>
                              </a>
                              <script type="text" class="J_data_2_6">
                                  [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-logam-berharga/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_3_8">
                              <a href="https://www.lazada.co.id/beli-jam-tangan-wanita/">
                                <span>Jam Tangan Wanita</span>
                              </a>
                              <script type="text" class="J_data_2_7">
                                  [{"childCategoryName":"Aksesori","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Kasual Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-wanita/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-wanita/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-wanita/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-pre-owned-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-wanita/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No4" data-spm="cate_4">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_1">
                              <a href="https://www.lazada.co.id/pakaian-pria/">
                                <span>Pakaian Pria</span>
                              </a>
                              <script type="text" class="J_data_3_0">
                                  [{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-pria/"},{"childCategoryName":"Jaket dan Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-pria/"},{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-pria/"},{"childCategoryName":"Celana","childCategoryUrl":"https://www.lazada.co.id/celana-pendek-dan-panjang-pria/"},{"childCategoryName":"Polo Shirt","childCategoryUrl":"https://www.lazada.co.id/polo-shirt-pria/"},{"childCategoryName":"Kemeja","childCategoryUrl":"https://www.lazada.co.id/kemeja-pria/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-pria/"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/jual-kaus-kaki-pria/"},{"childCategoryName":"Jas & Blazer","childCategoryUrl":"https://www.lazada.co.id/jas-pria/"},{"childCategoryName":"Sweater dan Kardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-pria/"},{"childCategoryName":"Baju Renang","childCategoryUrl":"https://www.lazada.co.id/baju-renang-pria/"},{"childCategoryName":"T-Shirt & Kaos Dalam","childCategoryUrl":"https://www.lazada.co.id/atasan-kasual-kaos-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_2">
                              <a href="https://www.lazada.co.id/baju-muslim-pria/">
                                <span>Baju Muslim</span>
                              </a>
                              <script type="text" class="J_data_3_1">
                                  [{"childCategoryName":"Jubah Muslim","childCategoryUrl":"https://www.lazada.co.id/jubah-muslim-pria/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-pria/"},{"childCategoryName":"Baju Muslimin","childCategoryUrl":"https://www.lazada.co.id/cekak-musang-pria/"},{"childCategoryName":"Kopiah","childCategoryUrl":"https://www.lazada.co.id/shop-kopiah/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_3">
                              <a href="https://www.lazada.co.id/pakaian-dalam-dan-kaos-kaki-pria/">
                                <span>Pakaian Dalam</span>
                              </a>
                              <script type="text" class="J_data_3_2">
                                  [{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-pria/"},{"childCategoryName":"Pakaian Tidur","childCategoryUrl":"https://www.lazada.co.id/baju-tidur-pria/"},{"childCategoryName":"Boxer","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-boxer-pria/"},{"childCategoryName":"Thongs  & Lainnya","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-pria-thongs-lainnya/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_4">
                              <a href="https://www.lazada.co.id/sepatu-pria/">
                                <span>Sepatu Pria</span>
                              </a>
                              <script type="text" class="J_data_3_3">
                                  [{"childCategoryName":"Boots","childCategoryUrl":"https://www.lazada.co.id/boots-pria/"},{"childCategoryName":"Flip Flop & Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-pria/"},{"childCategoryName":"Sepatu Formal","childCategoryUrl":"https://www.lazada.co.id/sepatu-pantofel/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-pria/"},{"childCategoryName":"Slip-On & Loafer","childCategoryUrl":"https://www.lazada.co.id/jual-slip-on-loafer-pria/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_5">
                              <a href="https://www.lazada.co.id/aksesoris-pria/">
                                <span>Aksesoris</span>
                              </a>
                              <script type="text" class="J_data_3_4">
                                  [{"childCategoryName":"Dasi","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi/"},{"childCategoryName":"Aksesoris Dasi Kupu-kupu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi-kupu-kupu/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/syal-pria/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-pria/"},{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-pria/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-pria/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-pria/"},{"childCategoryName":"Braces","childCategoryUrl":"https://www.lazada.co.id/suspender-pria/"},{"childCategoryName":"Face Mask","childCategoryUrl":"https://www.lazada.co.id/shop-masker-wajah-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_6">
                              <a href="https://www.lazada.co.id/tas-pria/">
                                <span>Tas Pria</span>
                              </a>
                              <script type="text" class="J_data_3_5">
                                  [{"childCategoryName":"Tas Ransel Pria","childCategoryUrl":"https://www.lazada.co.id/shop-ransel-pria/"},{"childCategoryName":"Tas Laptop Jinjing","childCategoryUrl":"https://www.lazada.co.id/tas-kerja-pria/"},{"childCategoryName":"Dompet Kartu Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-pria/"},{"childCategoryName":"Dompet Koin & Pouch Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-pria/"},{"childCategoryName":"Tas Selempang Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-selempang-pria/"},{"childCategoryName":"Tas Laptop Bahu & Messenger","childCategoryUrl":"https://www.lazada.co.id/tas-messenger-pria/"},{"childCategoryName":"Tote Bag Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-tote-pria/"},{"childCategoryName":"Tas Pinggang","childCategoryUrl":"https://www.lazada.co.id/beli-tas-pinggang/"},{"childCategoryName":"Dompet Pria","childCategoryUrl":"https://www.lazada.co.id/shop-dompet-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_7">
                              <a href="https://www.lazada.co.id/beli-perhiasan-pria/">
                                <span>Perhiasan Pria</span>
                              </a>
                              <script type="text" class="J_data_3_6">
                                  [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-pria-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-pria-logam-berharga/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_4_8">
                              <a href="https://www.lazada.co.id/beli-jam-tangan-pria/">
                                <span>Jam Tangan Pria</span>
                              </a>
                              <script type="text" class="J_data_3_7">
                                  [{"childCategoryName":"Aksesoris Jam Tangan Pria","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-jam-tangan-pria/"},{"childCategoryName":"Jam Tangan Kasual Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-pria/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-pria/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-pria/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-pre-owned-pria/"},{"childCategoryName":"Jam Tangan Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-pria/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No5" data-spm="cate_5">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_1">
                              <a href="https://www.lazada.co.id/fashion-pakaian-anak-laki-laki">
                                <span>Pakaian Anak Laki-laki</span>
                              </a>
                              <script type="text" class="J_data_4_0">
                                  [{"childCategoryName":"Topi Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/topi-anak-laki-laki"},{"childCategoryName":"Hoodie Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki"},{"childCategoryName":"Jaket & Mantel Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-laki-laki"},{"childCategoryName":"Celana Pendek Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/beli-celana-pendek-pria"},{"childCategoryName":"Pakaian Tidur Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-laki-laki"},{"childCategoryName":"Sweater & Cardigan Anak","childCategoryUrl":"https://www.lazada.co.id/sweater-cardigan-anak-laki-laki"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-pakaian-hujan-anak-laki-laki"},{"childCategoryName":"Pakaian dalam","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-dalam"},{"childCategoryName":"Celana & Jeans Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-laki-laki"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/shop-kaus-kaki"},{"childCategoryName":"Baju & Atasan Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-laki-laki"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_2">
                              <a href="https://www.lazada.co.id/pakaian-anak-perempuan">
                                <span>Pakaian Anak Perempuan</span>
                              </a>
                              <script type="text" class="J_data_4_1">
                                  [{"childCategoryName":"Bawahan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-perempuan"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-dress-anak-perempuan"},{"childCategoryName":"Scarf Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/scarf-sarung-tangan-anak-perempuan"},{"childCategoryName":"Aksesori Rambut Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-rambut-anak-perempuan"},{"childCategoryName":"Topi Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/topi-anak-perempuan"},{"childCategoryName":"Hoodie Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki-2"},{"childCategoryName":"Jaket & Mantel Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-perempuan"},{"childCategoryName":"Baju & Atasan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-perempuan"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-jas-hujan-anak-perempuan"},{"childCategoryName":"Pakaian Dalam Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-perempuan"},{"childCategoryName":"Jumpsuits & Overalls","childCategoryUrl":"https://www.lazada.co.id/shop-girls-jumpsuits-overalls"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_3">
                              <a href="https://www.lazada.co.id/shop-boy's-muslim-wear">
                                <span>Pakaian Anak Muslim Laki-Laki</span>
                              </a>
                              <script type="text" class="J_data_4_2">
                                  [{"childCategoryName":"Kemeja Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-shirt"},{"childCategoryName":"Celana Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-pants"},{"childCategoryName":"Aksesoris Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-accessories"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_4">
                              <a href="https://www.lazada.co.id/shop-girls-muslim-wear">
                                <span>Pakaian Anak Muslim Perempuan</span>
                              </a>
                              <script type="text" class="J_data_4_3">
                                  [{"childCategoryName":"Hijab Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-hijabs/"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-dresses-jumpsuits/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_5">
                              <a href="https://www.lazada.co.id/fashion-sepatu-anak-laki-laki">
                                <span>Sepatu Anak Laki-laki</span>
                              </a>
                              <script type="text" class="J_data_4_4">
                                  [{"childCategoryName":"Sepatu Boot Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-laki-laki"},{"childCategoryName":"Sandal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-laki-laki"},{"childCategoryName":"Sepatu Formal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-laki-laki"},{"childCategoryName":"Aksesoris Sepatu Anak Laki","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-laki-laki"},{"childCategoryName":"Slip-n Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-slip-on-anak-laki-laki"},{"childCategoryName":"Sepatu Sneaker Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneaker-anak-laki-laki"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_6">
                              <a href="https://www.lazada.co.id/fashion-sepatu-anak-perempuan">
                                <span>Sepatu Anak Perempuan</span>
                              </a>
                              <script type="text" class="J_data_4_5">
                                  [{"childCategoryName":"Sepatu Flat Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-balerina-anak-perempuan"},{"childCategoryName":"Sepatu Boot Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-perempuan"},{"childCategoryName":"Sandal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-perempuan"},{"childCategoryName":"Sepatu Formal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-perempuan"},{"childCategoryName":"Aksesoris Sepatu Anak","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-perempuan"},{"childCategoryName":"Sepatu Sneaker Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneakers-anak-perempuan"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_7">
                              <a href="https://www.lazada.co.id/beli-tas-anak-tl/">
                                <span>Tas Anak</span>
                              </a>
                              <script type="text" class="J_data_4_6">
                                  [{"childCategoryName":"Tas Bahu Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-bahu-anak/"},{"childCategoryName":"Ransel Troli Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-troli-anak/"},{"childCategoryName":"Ransel Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-anak/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-anak/"},{"childCategoryName":"Koper","childCategoryUrl":"https://www.lazada.co.id/koper-anak-2/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_8">
                              <a href="https://www.lazada.co.id/beli-perhiasan-anak/">
                                <span>Perhiasan Anak</span>
                              </a>
                              <script type="text" class="J_data_4_7">
                                  [{"childCategoryName":"Emas Murni","childCategoryUrl":"https://www.lazada.co.id/beli-anak-emas-murni/"},{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-anak-perhiasan-fashion/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_5_9">
                              <a href="https://www.lazada.co.id/beli-jam-tangan-anak/">
                                <span>Jam Tangan Anak</span>
                              </a>
                              <script type="text" class="J_data_4_8">
                                  [{"childCategoryName":"Jam Tangan Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-laki-laki/"},{"childCategoryName":"Jam Tangan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-perempuan/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No6" data-spm="cate_6">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_1">
                              <a href="https://www.lazada.co.id/beli-perawatan-kulit/">
                                <span>Perawatan Kulit</span>
                              </a>
                              <script type="text" class="J_data_5_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Serum Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-serum-perawatan-wajah"},{"childCategoryName":"Dermacare","childCategoryUrl":"https://www.lazada.co.id/beli-dermacare"},{"childCategoryName":"Pelembab Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-pelembab-wajah"},{"childCategoryName":"Pembersih Wajah","childCategoryUrl":"https://www.lazada.co.id/pembersih-wajah"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-masker-wajah"},{"childCategoryName":"Toner","childCategoryUrl":"https://www.lazada.co.id/beli-toner"},{"childCategoryName":"Tabir Surya","childCategoryUrl":"https://www.lazada.co.id/beli-tabir-surya-aftersun"},{"childCategoryName":"Set Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-set-perawatan-wajah"},{"childCategoryName":"Pelembab & Perawatan Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-lip-balm-perawatan-bibir"},{"childCategoryName":"Face Scrubs & Exfoliators","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-pengelupas-wajah"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-mata"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_2">
                              <a href="https://www.lazada.co.id/beli-makeup/">
                                <span>Makeup</span>
                              </a>
                              <script type="text" class="J_data_5_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makeup Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-make-up-bibir"},{"childCategoryName":"Lipstik","childCategoryUrl":"https://www.lazada.co.id/beli-lipstik"},{"childCategoryName":"Makeup Wajah","childCategoryUrl":"https://www.lazada.co.id/makeup-wajah"},{"childCategoryName":"Foundation","childCategoryUrl":"https://www.lazada.co.id/beli-foundation"},{"childCategoryName":"Makeup Mata","childCategoryUrl":"https://www.lazada.co.id/beli-mata"},{"childCategoryName":"Maskara","childCategoryUrl":"https://www.lazada.co.id/beli-maskara"},{"childCategoryName":"Aksesoris Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-makeup"},{"childCategoryName":"Set Kuas & Kuas Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-kuas-aplikator"},{"childCategoryName":"Perawatan Kuku","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kuku"},{"childCategoryName":"Set Makeup & Palet","childCategoryUrl":"https://www.lazada.co.id/shop-palet-set-makeup"},{"childCategoryName":"Pembersih Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-makeup"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_3">
                              <a href="https://www.lazada.co.id/beli-perawatan-rambut/">
                                <span>Perawatan Rambut</span>
                              </a>
                              <script type="text" class="J_data_5_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Shampo","childCategoryUrl":"https://www.lazada.co.id/beli-sampo"},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/perawatan-intensif"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-perawatan-rambut"},{"childCategoryName":"Styling Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-styling-rambut"},{"childCategoryName":"Pewarna Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-cat-rambut"},{"childCategoryName":"Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-kondisioner"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-perawatan-rambut"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_4">
                              <a href="https://www.lazada.co.id/beli-perlengkapan-mandi-tubuh/">
                                <span>Perawatan Tubuh</span>
                              </a>
                              <script type="text" class="J_data_5_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Losion Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-losion-krim-tubuh"},{"childCategoryName":"Sabun Cair","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Cair"},{"childCategoryName":"Scrub Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-tubuh"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/perawatan-payudara"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-Perawatan-Tubuh"},{"childCategoryName":"Perawatan Kaki","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kaki"},{"childCategoryName":"Sabun Batang","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Batang"},{"childCategoryName":"Aksesoris Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-perlengkapan-mandi-tubuh"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-alat-mandi-tubuh"},{"childCategoryName":"Penghilang Bulu","childCategoryUrl":"https://www.lazada.co.id/beli-perontok-rambut"},{"childCategoryName":"Sabun Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-tangan"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_5">
                              <a href="https://www.lazada.co.id/beli-perawatan-kesehatan-pribadi/">
                                <span>Perawatan Diri</span>
                              </a>
                              <script type="text" class="J_data_5_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Mulut","childCategoryUrl":"https://www.lazada.co.id/perawatan-mulut"},{"childCategoryName":"Pembersih Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-wanita"},{"childCategoryName":"Keamanan Diri","childCategoryUrl":"https://www.lazada.co.id/beli-keamanan-diri"},{"childCategoryName":"Beli Deodoran","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-optik-pribadi"},{"childCategoryName":"Obat Anti Serangga","childCategoryUrl":"https://www.lazada.co.id/shop-Obat-Anti-Serangga"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_6">
                              <a href="https://www.lazada.co.id/beli-parfum/">
                                <span>Parfum</span>
                              </a>
                              <script type="text" class="J_data_5_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pria","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-pria"},{"childCategoryName":"Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-wanita"},{"childCategoryName":"Unisex","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-unisex"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_7">
                              <a href="https://www.lazada.co.id/beli-alat-kesehatan-kecantikan/">
                                <span>Alat Kecantikan</span>
                              </a>
                              <script type="text" class="J_data_5_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Alat Pelangsing & Pijat","childCategoryUrl":"https://www.lazada.co.id/alat-pelangsing-dan-pemijat-elektrik"},{"childCategoryName":"Sauna Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-sauna-portabel"},{"childCategoryName":"Foot Relief","childCategoryUrl":"https://www.lazada.co.id/beli-foot-relief"},{"childCategoryName":"Alat Cukur & Trimmer","childCategoryUrl":"https://www.lazada.co.id/aksesoris-alat-cukur-dan-trimmer"},{"childCategoryName":"Alat Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-wajah"},{"childCategoryName":"Alat Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-tubuh"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_8">
                              <a href="https://www.lazada.co.id/beli-suplemen-makanan/">
                                <span>Suplemen Makanan</span>
                              </a>
                              <script type="text" class="J_data_5_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengatur Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-pengatur-berat-badan"},{"childCategoryName":"Pembakar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-pembakar-lemak"},{"childCategoryName":"Minuman Pelangsing","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-pelangsing"},{"childCategoryName":"Suplemen Kecantikan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-kecantikan"},{"childCategoryName":"Suplemen Pemutih","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-pemutih"},{"childCategoryName":"Multivitamin","childCategoryUrl":"https://www.lazada.co.id/multivitamin/"},{"childCategoryName":"Obat Tradisional","childCategoryUrl":"https://www.lazada.co.id/beli-obat-obatan-tradisional"},{"childCategoryName":"Sistem Imun","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-imun"},{"childCategoryName":"Nutrisi Olahraga","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-olahraga"},{"childCategoryName":"Penambah Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-penambah-berat-badan"},{"childCategoryName":"Protein","childCategoryUrl":"https://www.lazada.co.id/beli-protein"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_9">
                              <a href="https://www.lazada.co.id/beli-alat-medis/">
                                <span>Alat Medis</span>
                              </a>
                              <script type="text" class="J_data_5_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Aksesoris Kesehatan","childCategoryUrl":"https://www.lazada.co.id/aksesoris-kesehatan"},{"childCategoryName":"Alat Tes Kesehatan","childCategoryUrl":"https://www.lazada.co.id/beli-alat-tes-kesehatan"},{"childCategoryName":"Obat-Obatan","childCategoryUrl":"https://www.lazada.co.id/shop-over-the-counter-medicine/"},{"childCategoryName":"Perban & Perlengkapan Cedera","childCategoryUrl":"https://www.lazada.co.id/perban-alat-terapi-cedera"},{"childCategoryName":"Timbangan & Alat Kadar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-alat-ukur-kadar-lemak"},{"childCategoryName":"P3K","childCategoryUrl":"https://www.lazada.co.id/beli-p3k"},{"childCategoryName":"Kursi Roda","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-roda"},{"childCategoryName":"Salep & Krim","childCategoryUrl":"https://www.lazada.co.id/shop-salep-dan-krim"},{"childCategoryName":"Alat Inhalasi & Nebulizer","childCategoryUrl":"https://www.lazada.co.id/beli-alat-inhalasi-nebulizer"},{"childCategoryName":"Alat Tes Medis","childCategoryUrl":"https://www.lazada.co.id/tes-medis"},{"childCategoryName":"Stetoskop","childCategoryUrl":"https://www.lazada.co.id/beli-stetoskop"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_10">
                              <a href="https://www.lazada.co.id/jual-perlengkapan-kesehatan-seksual/">
                                <span>Sexual Wellness</span>
                              </a>
                              <script type="text" class="J_data_5_9">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kondom","childCategoryUrl":"https://www.lazada.co.id/beli-kondom"},{"childCategoryName":"Pelumas","childCategoryUrl":"https://www.lazada.co.id/beli-pelumas"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_11">
                              <a href="https://www.lazada.co.id/beli-perawatan-tubuh-kesehatan-pria/">
                                <span>Perawatan Pria</span>
                              </a>
                              <script type="text" class="J_data_5_10">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-rambut-pria"},{"childCategoryName":"Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria"},{"childCategoryName":"Alat Cukur Pria","childCategoryUrl":"https://www.lazada.co.id/beli-alat-cukur-pria"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/perawatan-tubuh"},{"childCategoryName":"Deodoran Pria","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran-pria"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_6_12">
                              <a href="https://www.lazada.co.id/kesehatan-manula/">
                                <span>Popok Dewasa</span>
                              </a>
                              <script type="text" class="J_data_5_11">
                                  [{"childCategoryName":"Popok Dewasa","childCategoryUrl":"https://www.lazada.co.id/kesehatan-manula/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No7" data-spm="cate_7">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_1">
                              <a href="https://www.lazada.co.id/jual-perlengkapan-bayi-balita/">
                                <span>Ibu &amp; Anak</span>
                              </a>
                              <script type="text" class="J_data_6_0">
                                  [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_2">
                              <a href="https://www.lazada.co.id/beli-popok-pispot-bb/">
                                <span>Popok Sekali Pakai</span>
                              </a>
                              <script type="text" class="J_data_6_1">
                                  [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Popok Kain & Aksesori","childCategoryUrl":"https://www.lazada.co.id/beli-popok-kain/"},{"childCategoryName":"Lap Bayi & Penyangga","childCategoryUrl":"https://www.lazada.co.id/beli-lap-bayi-penyangga/"},{"childCategoryName":"Perawatan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-popok/"},{"childCategoryName":"Krim & Salep Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-krim-salep-bayi/"},{"childCategoryName":"Tas Perlengkapan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-tas-popok-tb/"},{"childCategoryName":"Meja Ganti Popok","childCategoryUrl":"https://www.lazada.co.id/beli-meja-ganti/"},{"childCategoryName":"Cover Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-bantalan/"},{"childCategoryName":"Lapisan Penyerap & Liner Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-lapisan-penyerap-liner-popok-kain/"},{"childCategoryName":"Potty Training","childCategoryUrl":"https://www.lazada.co.id/beli-potty-training/"},{"childCategoryName":"Bangku Langkah","childCategoryUrl":"https://www.lazada.co.id/beli-bangku-langkah/"},{"childCategoryName":"Detergent Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-detergen-popok-kain/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_3">
                              <a href="https://www.lazada.co.id/beli-susu-formula/">
                                <span>Makanan Bayi &amp; Balita</span>
                              </a>
                              <script type="text" class="J_data_6_2">
                                  [{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Nutrisi Khusus Anak","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-khusus-anak/"},{"childCategoryName":"Minuman","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-bayi-balita/"},{"childCategoryName":"Sereal","childCategoryUrl":"https://www.lazada.co.id/beli-sereal-bayi-balita/"},{"childCategoryName":"Cracker & Biskuit","childCategoryUrl":"https://www.lazada.co.id/beli-cracker-biskuit-bayi-balita/"},{"childCategoryName":"Makanan Ringan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ringan-bayi-balita/"},{"childCategoryName":"Makanan puree bayi","childCategoryUrl":"https://www.lazada.co.id/beli-puree-bayi/"},{"childCategoryName":"Susu Ibu Hamil","childCategoryUrl":"https://www.lazada.co.id/beli-susu-maternal/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_4">
                              <a href="https://www.lazada.co.id/jual-baju-aksesoris-anak/">
                                <span>Pakaian &amp; Aksesoris</span>
                              </a>
                              <script type="text" class="J_data_6_3">
                                  [{"childCategoryName":"(0--6 bulan) Set Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-set-pakaian-bayi/"},{"childCategoryName":"(0--6 bulan) Body Suits","childCategoryUrl":"https://www.lazada.co.id/beli-bodysuit-one-piece-bayi/"},{"childCategoryName":"(0--6 bulan) Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-pakaian-anak/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Dress Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-dress-bayi-perempuan/"},{"childCategoryName":"Sepatu Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-perempuan/"},{"childCategoryName":"Aksesoris Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-bayi-perempuan/"},{"childCategoryName":"Baju Renang Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Sepatu Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-laki-laki/"},{"childCategoryName":"Aksesoris Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-aksesori-bayi-laki-laki/"},{"childCategoryName":"Baju Renang Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-laki-laki/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_5">
                              <a href="https://www.lazada.co.id/beli-makanan-bayi/">
                                <span>Perlengkapan Menyusui</span>
                              </a>
                              <script type="text" class="J_data_6_4">
                                  [{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Botol","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi-balita/"},{"childCategoryName":"Aksesoris Dot Botol","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-botol-dot-bayi/"},{"childCategoryName":"Penghangat & Sterilizers","childCategoryUrl":"https://www.lazada.co.id/beli-penghangat-sterilizer/"},{"childCategoryName":"Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-pompa-asi/"},{"childCategoryName":"Aksesesoris Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-pompa-asi/"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-puting/"},{"childCategoryName":"Bantal Menyusui","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-kursi-bayi/"},{"childCategoryName":"Kursi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-tinggi-bayi-kursi-booster/"},{"childCategoryName":"Food Blenders","childCategoryUrl":"https://www.lazada.co.id/beli-blender-makanan-bayi/"},{"childCategoryName":"Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-makan-bayi-bb/"},{"childCategoryName":"Set Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-piring-mangkok-bayi/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_6">
                              <a href="https://www.lazada.co.id/beli-perlengkapan-berkendara-bayi/">
                                <span>Perlengkapan Bayi</span>
                              </a>
                              <script type="text" class="J_data_6_5">
                                  [{"childCategoryName":"Sling Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sling-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Car Seat","childCategoryUrl":"https://www.lazada.co.id/beli-car-seat-bb/"},{"childCategoryName":"Playard","childCategoryUrl":"https://www.lazada.co.id/beli-playard/"},{"childCategoryName":"Ayunan, Jumper & Bouncer Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-ayunan-jumper-bouncer-bayi/"},{"childCategoryName":"Walker","childCategoryUrl":"https://www.lazada.co.id/beli-walker/"},{"childCategoryName":"Tempat Duduk & Trailer Sepeda","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-trailer-sepeda/"},{"childCategoryName":"Tas Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-anak/"},{"childCategoryName":"Koper Anak","childCategoryUrl":"https://www.lazada.co.id/beli-koper-anak/"},{"childCategoryName":"Tali & Harness Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tali-harness-bayi/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_7">
                              <a href="https://www.lazada.co.id/jual-perlengkapan-kamar-bayi/">
                                <span>Kamar Bayi</span>
                              </a>
                              <script type="text" class="J_data_6_6">
                                  [{"childCategoryName":"Matras Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kasur-seprai-bayi/"},{"childCategoryName":"Selimut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-bayi/"},{"childCategoryName":"Seprai Keranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-seprai-keranjang-bayi/"},{"childCategoryName":"Kelengkapan Alat Tidur Balita","childCategoryUrl":"https://www.lazada.co.id/beli-kelengkapan-alat-tidur-balita/"},{"childCategoryName":"Selimut Tebal & Bed Cover Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-tebal-bed-cover-bayi/"},{"childCategoryName":"Bantal, Pelindung & Sarung Bantal Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-pelindung-sarung-bantal-bayi/"},{"childCategoryName":"Furnitur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-bayi/"},{"childCategoryName":"Ranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-ranjang-bayi/"},{"childCategoryName":"Keranjang Bayi Cradle","childCategoryUrl":"https://www.lazada.co.id/beli-keranjang-bayi-cradle/"},{"childCategoryName":"Laci & Lemari Pakaian Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-laci-lemari-pakaian-bayi/"},{"childCategoryName":"Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-pengatur-penyimpanan/"},{"childCategoryName":"Dekorasi Kamar Anak","childCategoryUrl":"https://www.lazada.co.id/beli-dekorasi-kamar-anak/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_8">
                              <a href="https://www.lazada.co.id/beli-perlengkapan-mandi-perawatan-kulit-anak/">
                                <span>Perawatan Bayi</span>
                              </a>
                              <script type="text" class="J_data_6_7">
                                  [{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-bayi/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Sabun & Pembersih Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-bayi/"},{"childCategoryName":"Perawatan Mulut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Sikat Gigi & Pasta Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Tempat Duduk & Bak Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-bak-mandi-bayi/"},{"childCategoryName":"Lap Mandi & Handuk Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-handuk-bayi/"},{"childCategoryName":"Pelindung Matahari Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-matahari-bayi/"},{"childCategoryName":"Aromaterapi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-aromaterapi-bayi/"},{"childCategoryName":"Perlengkapan Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-mandi-bayi-bb/"},{"childCategoryName":"Alas Mandi Bayi Anti Slip","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi-bayi-anti-slip/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_9">
                              <a href="https://www.lazada.co.id/beli-mainan-anak/">
                                <span>Mainan</span>
                              </a>
                              <script type="text" class="J_data_6_8">
                                  [{"childCategoryName":"Action Figure & Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/jual-koleksi-mainan-action-figure/"},{"childCategoryName":"Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-koleksi-tg/"},{"childCategoryName":"Mini Figur","childCategoryUrl":"https://www.lazada.co.id/beli-mini-figure-tg/"},{"childCategoryName":"Kerajinan Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-kerajinan-tangan-kesenian-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Boneka & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-boneka-aksesori/"},{"childCategoryName":"Kostum Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dress-up/"},{"childCategoryName":"Mainan Edukasi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-pembelajaran-edukasi/"},{"childCategoryName":"Puzzle & Games","childCategoryUrl":"https://www.lazada.co.id/beli-permainan-tradisional/"},{"childCategoryName":"Hobi & Hiburan","childCategoryUrl":"https://www.lazada.co.id/Shop-Hobbies-Entertainment/"},{"childCategoryName":"Perlengkapan Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-pesta/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_10">
                              <a href="https://www.lazada.co.id/beli-remote-control-mainan-kendaraan/">
                                <span>Mainan Elektronik &amp; RC</span>
                              </a>
                              <script type="text" class="J_data_6_9">
                                  [{"childCategoryName":"Mobil Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-rc-baterai/"},{"childCategoryName":"Robot Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-rc-figure-robot/"},{"childCategoryName":"Mobil Die Cast","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-die-cast/"},{"childCategoryName":"Mainan Mobil","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-kendaraan-tg/"},{"childCategoryName":"Mainan Kereta Api & Rel","childCategoryUrl":"https://www.lazada.co.id/beli-set-mainan-kereta/"},{"childCategoryName":"Drone Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-drones-quadcopters/"},{"childCategoryName":"Helikopter","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-helikopter/"},{"childCategoryName":"Video Games & Hiburan","childCategoryUrl":"https://www.lazada.co.id/shop-hiburan-video-game/"},{"childCategoryName":"Walkie Talkies","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-walkie-talkie/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_11">
                              <a href="https://www.lazada.co.id/beli-olahraga-permainan-luar-ruangan/">
                                <span>Mainan Olahraga &amp; Luar Ruangan</span>
                              </a>
                              <script type="text" class="J_data_6_10">
                                  [{"childCategoryName":"Kolam Renang & Mainan Air","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-air-kolam-renang/"},{"childCategoryName":"Mainan Olahraga","childCategoryUrl":"https://www.lazada.co.id/shop-mainan-baseball-softball/"},{"childCategoryName":"Mainan Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-aktivitas-dan-olahraga-luar-ruangan/"},{"childCategoryName":"Mainan Blaster","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-blaster/"},{"childCategoryName":"Kolam Bola & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-bola-pit-aksesori/"},{"childCategoryName":"Mainan Terbang","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-terbang/"},{"childCategoryName":"Layangan & Kincir Angin","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-layang-layang/"},{"childCategoryName":"Istana Balon","childCategoryUrl":"https://www.lazada.co.id/beli-balon-loncat-istana-balon/"},{"childCategoryName":"Yoyo & Kendama","childCategoryUrl":"https://www.lazada.co.id/beli-yo-yo-kendama/"},{"childCategoryName":"Set Mainan Taman Bermain","childCategoryUrl":"https://www.lazada.co.id/beli-set-peralatan-permainan-playground/"},{"childCategoryName":"Kemah & Terowongan Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-tenda-terowongan/"},{"childCategoryName":"Mainan Rumah-rumahan","childCategoryUrl":"https://www.lazada.co.id/beli-playhouses/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_7_12">
                              <a href="https://www.lazada.co.id/baby-toddler-toys/">
                                <span>Mainan Bayi &amp; Balita</span>
                              </a>
                              <script type="text" class="J_data_6_11">
                                  [{"childCategoryName":"Playgym & Playmat","childCategoryUrl":"https://www.lazada.co.id/jual-mainan-gym-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Mainan Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-mandi-anak-tg/"},{"childCategoryName":"Mainan Tidur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-keranjang-bayi-perlengkapannya-tg/"},{"childCategoryName":"Mainan Balita","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-edukatif-anak-tg/"},{"childCategoryName":"Mainan Musik & Suara","childCategoryUrl":"https://www.lazada.co.id/beli-musik-suara-tg/"},{"childCategoryName":"Mainan Tarik Ulur","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dorong-tarik-tg/"},{"childCategoryName":"Mainan Shape Sorting","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-shape-sorting-tg/"},{"childCategoryName":"Indoor Climbers & Play Structures","childCategoryUrl":"https://www.lazada.co.id/beli-indoor-climbers-play-structure-tg/"},{"childCategoryName":"Rocking & Spring Ride-Ons","childCategoryUrl":"https://www.lazada.co.id/beli-rocking-spring-ride-on-tg/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No8" data-spm="cate_8">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_1">
                              <a href="https://www.lazada.co.id/beli-tv-audio-video-permainan-dan-gadget/">
                                <span>TV &amp; Perangkat Video</span>
                              </a>
                              <script type="text" class="J_data_7_0">
                                  [{"childCategoryName":""},{"childCategoryName":"TV LED","childCategoryUrl":"https://www.lazada.co.id/shop-televisi-digital/"},{"childCategoryName":"TV Smart","childCategoryUrl":"https://www.lazada.co.id/beli-smart-tv/"},{"childCategoryName":"Blu-Ray/DVD Player","childCategoryUrl":"https://www.lazada.co.id/beli-blu-ray-player/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/shop-media-player/"},{"childCategoryName":"Proyektor","childCategoryUrl":"https://www.lazada.co.id/beli-proyektor-3/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_2">
                              <a href="https://www.lazada.co.id/beli-perlengkapan-dapur/">
                                <span>Peralatan Dapur Kecil</span>
                              </a>
                              <script type="text" class="J_data_7_1">
                                  [{"childCategoryName":""},{"childCategoryName":"Rice Cooker","childCategoryUrl":"https://www.lazada.co.id/beli-rice-cooker/"},{"childCategoryName":"Blender, Mixer & Grinder","childCategoryUrl":"https://www.lazada.co.id/beli-blender-mixer-juicer/"},{"childCategoryName":"Kompor Gas","childCategoryUrl":"https://www.lazada.co.id/beli-kompor-gas/"},{"childCategoryName":"Teko Listrik","childCategoryUrl":"https://www.lazada.co.id/beli-ketel-elektrik-2/"},{"childCategoryName":"Juicer","childCategoryUrl":"https://www.lazada.co.id/beli-juicer-pengekstrak-buah/"},{"childCategoryName":"Mesin Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-kopi/"},{"childCategoryName":"Air Fryer","childCategoryUrl":"https://www.lazada.co.id/beli-air-fryers/"},{"childCategoryName":"Peralatan Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-ska-lainnya/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_3">
                              <a href="https://www.lazada.co.id/shop-perlatan-besar/">
                                <span>Elektronik Rumah Besar</span>
                              </a>
                              <script type="text" class="J_data_7_2">
                                  [{"childCategoryName":""},{"childCategoryName":"Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-cuci/"},{"childCategoryName":"Kulkas","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-es/"},{"childCategoryName":"Microwave","childCategoryUrl":"https://www.lazada.co.id/beli-microwave/"},{"childCategoryName":"Oven","childCategoryUrl":"https://www.lazada.co.id/beli-ovens/"},{"childCategoryName":"Dispenser Air Minum","childCategoryUrl":"https://www.lazada.co.id/beli-dispenser-air/"},{"childCategoryName":"AC","childCategoryUrl":"https://www.lazada.co.id/beli-ac/"},{"childCategoryName":"Pemanas Air","childCategoryUrl":"https://www.lazada.co.id/beli-pemanas-air/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_4">
                              <a href="https://www.lazada.co.id/shop-pendingin-pembersih-udara-mini/">
                                <span>Penyejuk dan Pembersih Udara</span>
                              </a>
                              <script type="text" class="J_data_7_3">
                                  [{"childCategoryName":""},{"childCategoryName":"Kipas Angin","childCategoryUrl":"https://www.lazada.co.id/shop-kipas/"},{"childCategoryName":"Air Cooler","childCategoryUrl":"https://www.lazada.co.id/beli-pendingin-udara-2/"},{"childCategoryName":"Air Purifier","childCategoryUrl":"https://www.lazada.co.id/beli-penjernih-udara-2/"},{"childCategoryName":"Humidifier","childCategoryUrl":"https://www.lazada.co.id/beli-humidifier/"},{"childCategoryName":"Dehumidifier","childCategoryUrl":"https://www.lazada.co.id/beli-dehumidifier/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_5">
                              <a href="https://www.lazada.co.id/beli-perawatan-lantai/">
                                <span>Penghisap Debu &amp; Perawatan Lantai</span>
                              </a>
                              <script type="text" class="J_data_7_4">
                                  [{"childCategoryName":""},{"childCategoryName":"Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu/"},{"childCategoryName":"Penghisap Debu Robotik","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-robot/"},{"childCategoryName":"Penghisap Debu dengan Tongkat","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-tongkat/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_6">
                              <a href="https://www.lazada.co.id/shop-peralatan-perawatan-personal/">
                                <span>Alat Perawatan Diri</span>
                              </a>
                              <script type="text" class="J_data_7_5">
                                  [{"childCategoryName":""},{"childCategoryName":"Hair Dryer","childCategoryUrl":"https://www.lazada.co.id/beli-pengering-rambut/"},{"childCategoryName":"Alat Penata Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-styling-rambut/"},{"childCategoryName":"Shaver & Pencukur Kumis Jenggot","childCategoryUrl":"https://www.lazada.co.id/beli-shaver/"},{"childCategoryName":"Sikat Gigi Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-elektrik/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_7">
                              <a href="https://www.lazada.co.id/jual-aksesoris-elektronik-rumah-tangga/">
                                <span>Aksesoris &amp; Suku Cadang</span>
                              </a>
                              <script type="text" class="J_data_7_6">
                                  [{"childCategoryName":""},{"childCategoryName":"Suku Cadang & Aksesoris Peralatan Dapur Kecil","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-blender-dan-mixer/"},{"childCategoryName":"Suku Cadang & Aksesoris AC","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-aksesoris-ac/"},{"childCategoryName":"Suku Cadang & Aksesoris Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-mesin-cuci-dan-pengering-pakaian/"},{"childCategoryName":"Suku Cadang & Filter Pengganti","childCategoryUrl":"https://www.lazada.co.id/beli-filter-air/"},{"childCategoryName":"Suku Cadang & Filter Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/beli-suku-kadang-aksesoris-vacuum-cleaner/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_8">
                              <a href="https://www.lazada.co.id/jual-aksesoris-televisi/">
                                <span>Aksesoris Televisi</span>
                              </a>
                              <script type="text" class="J_data_7_7">
                                  [{"childCategoryName":""},{"childCategoryName":"TV Box","childCategoryUrl":"https://www.lazada.co.id/jual-tv-receiver/"},{"childCategoryName":"Antena TV","childCategoryUrl":"https://www.lazada.co.id/jual-antena-tv/"},{"childCategoryName":"Bracket Dinding TV & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jual-bracket-dinding-tv/"},{"childCategoryName":"Remote Control TV","childCategoryUrl":"https://www.lazada.co.id/jual-remote-control-tv/"},{"childCategoryName":"Kabel TV","childCategoryUrl":"https://www.lazada.co.id/jual-kabel-tv/"},{"childCategoryName":"Adaptor TV","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-tv/"},{"childCategoryName":"Kacamata 3D TV","childCategoryUrl":"https://www.lazada.co.id/jual-kacamata-3d-tv/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_8_9">
                              <a href="https://www.lazada.co.id/jual-home-entertainment/">
                                <span>Home Entertainment</span>
                              </a>
                              <script type="text" class="J_data_7_8">
                                  [{"childCategoryName":""},{"childCategoryName":"Soundbar","childCategoryUrl":"https://www.lazada.co.id/jual-soundbar/"},{"childCategoryName":"Sistem Karaoke","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-karaoke/"},{"childCategoryName":"Sistem Hi-Fi","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-hi-fi/"},{"childCategoryName":"Sound System Panggung","childCategoryUrl":"https://www.lazada.co.id/sound-system-panggung/"},{"childCategoryName":"Player Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No9" data-spm="cate_9">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_1">
                              <a href="https://www.lazada.co.id/beli-dekorasi-rumah/">
                                <span>Dekorasi Rumah</span>
                              </a>
                              <script type="text" class="J_data_8_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Stiker Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-stiker-dinding/"},{"childCategoryName":"Gorden","childCategoryUrl":"https://www.lazada.co.id/gorden-dan-kerai/"},{"childCategoryName":"Tikar & Karpet","childCategoryUrl":"https://www.lazada.co.id/beli-tikar-karpet/"},{"childCategoryName":"Hiasan Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-hiasan-dinding/"},{"childCategoryName":"Dekorasi Aksen","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-dekor/"},{"childCategoryName":"Bunga & Tanaman Artifisial","childCategoryUrl":"https://www.lazada.co.id/beli-bunga-tanaman-artifisial/"},{"childCategoryName":"Jam","childCategoryUrl":"https://www.lazada.co.id/beli-jam/"},{"childCategoryName":"Dalaman & Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/shop-dalaman-sarung-bantal/"},{"childCategoryName":"Bingkai","childCategoryUrl":"https://www.lazada.co.id/beli-bingkai/"},{"childCategoryName":"Wewangian Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-wewangian-rumah/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_2">
                              <a href="https://www.lazada.co.id/beli-furnitur/">
                                <span>Furnitur</span>
                              </a>
                              <script type="text" class="J_data_8_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tempat Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpanan/"},{"childCategoryName":"Lemari Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-pakaian/"},{"childCategoryName":"Kasur","childCategoryUrl":"https://www.lazada.co.id/beli-kasur/"},{"childCategoryName":"Kamar Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-kamar-tidur/"},{"childCategoryName":"Rak","childCategoryUrl":"https://www.lazada.co.id/rak/"},{"childCategoryName":"Rak TV dan Media","childCategoryUrl":"https://www.lazada.co.id/tempat-penyimpanan-media-dan-tv/"},{"childCategoryName":"Sofa","childCategoryUrl":"https://www.lazada.co.id/beli-sofa/"},{"childCategoryName":"Ruang Tamu","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-tamu/"},{"childCategoryName":"Ruang Kerja Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-kerja-rumah/"},{"childCategoryName":"Dapur & Ruang Makan","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-dapur-ruang-makan/"},{"childCategoryName":"Ruang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-bayi/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_3">
                              <a href="https://www.lazada.co.id/beli-peralatan-ranjang/">
                                <span>Kelengkapan Tempat Tidur</span>
                              </a>
                              <script type="text" class="J_data_8_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Seprai","childCategoryUrl":"https://www.lazada.co.id/seprei-ranjang/"},{"childCategoryName":"Seprai Set","childCategoryUrl":"https://www.lazada.co.id/perangkat-seprei/"},{"childCategoryName":"Selimut","childCategoryUrl":"https://www.lazada.co.id/selimut-dan-selimut-panjang/"},{"childCategoryName":"Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-bantal/"},{"childCategoryName":"Aksesoris Tempat Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-ranjang/"},{"childCategoryName":"Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-bantal/"},{"childCategoryName":"Selimut Tebal","childCategoryUrl":"https://www.lazada.co.id/seprei-dan-selimut-tebal/"},{"childCategoryName":"Pelindung Kasur","childCategoryUrl":"https://www.lazada.co.id/kasur-pelindung/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_4">
                              <a href="https://www.lazada.co.id/penerangan/">
                                <span>Penerangan</span>
                              </a>
                              <script type="text" class="J_data_8_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-lampu/"},{"childCategoryName":"Lampu Khusus","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-khusus/"},{"childCategoryName":"Lampu Langit-langit","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-langit-langit-hias/"},{"childCategoryName":"Penerangan Outdoor","childCategoryUrl":"https://www.lazada.co.id/beli-penerangan-outdoor/"},{"childCategoryName":"Lampu Dinding & Tempel","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-dinding-tempel/"},{"childCategoryName":"Lampu Meja","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-meja/"},{"childCategoryName":"Komponen Lampu","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-komponen/"},{"childCategoryName":"Kap Lampu","childCategoryUrl":"https://www.lazada.co.id/kap-lampu/"},{"childCategoryName":"Lampu Lantai","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-lantai/"},{"childCategoryName":"Lampu Rechargeable & Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_5">
                              <a href="https://www.lazada.co.id/beli-peralatan-mandi/">
                                <span>Peralatan Mandi</span>
                              </a>
                              <script type="text" class="J_data_8_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Handuk Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-handuk-mandi/"},{"childCategoryName":"Timbangan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-kamar-mandi/"},{"childCategoryName":"Wadah Penyimpanan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpan-kamar-mandi/"},{"childCategoryName":"Rak Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/jual-laci-kamar-mandi/"},{"childCategoryName":"Gantungan Handuk & Penghangat","childCategoryUrl":"https://www.lazada.co.id/gantungan-handuk-dan-penghangat/"},{"childCategoryName":"Tempat & Gantungan Shower","childCategoryUrl":"https://www.lazada.co.id/tempat-dan-gantungan-shower/"},{"childCategoryName":"Keset Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi/"},{"childCategoryName":"Jubah & Kimono Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-jubah-mandi/"},{"childCategoryName":"Tirai Shower","childCategoryUrl":"https://www.lazada.co.id/shop-tirai-mandi-aksesoris/"},{"childCategoryName":"Cermin Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-cermin-kamar-mandi/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_6">
                              <a href="https://www.lazada.co.id/beli-perlengkapan-dapur-makan/">
                                <span>Alat Dapur</span>
                              </a>
                              <script type="text" class="J_data_8_5">
                                  [{"childCategoryName":"Botol minum","childCategoryUrl":"https://www.lazada.co.id/botol-minum/"},{"childCategoryName":"Tempat Penyimpanan Makanan","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-penyimpan-makanan/"},{"childCategoryName":"Alas Meja & Aksesoris Dapur","childCategoryUrl":"https://www.lazada.co.id/beli-alas-meja-aksesoris-dapur/"},{"childCategoryName":"Kopi & Teh","childCategoryUrl":"https://www.lazada.co.id/beli-kopi-dan-teh/"},{"childCategoryName":"Rak Piring & Aksesoris Wastafel","childCategoryUrl":"https://www.lazada.co.id/beli-rak-piring-aksesoris-bak/"},{"childCategoryName":"Panci & Wajan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-masak/"},{"childCategoryName":"Perangkat Minum","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-minum-gelas/"},{"childCategoryName":"Perangkat Makan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-penyajian-makanan/"},{"childCategoryName":"Perangkat Pemanggang","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-pemanggang/"},{"childCategoryName":"Perangkat Penyajian","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-penyaji/"},{"childCategoryName":"Pisau & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-pisau-dan-aksesoris/"},{"childCategoryName":"Alat Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-dapur/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_7">
                              <a href="https://www.lazada.co.id/beli-binatu-kebersihan/">
                                <span>Binatu &amp; Alat Kebersihan</span>
                              </a>
                              <script type="text" class="J_data_8_6">
                                  [{"childCategoryName":"Gantungan Baju","childCategoryUrl":"https://www.lazada.co.id/gantungan-baju/"},{"childCategoryName":"Keranjang Baju","childCategoryUrl":"https://www.lazada.co.id/keranjang-cucian/"},{"childCategoryName":"Jemuran Pakaian","childCategoryUrl":"https://www.lazada.co.id/rak-pengering/"},{"childCategoryName":"Alat Binatu & Setrika","childCategoryUrl":"https://www.lazada.co.id/beli-alat-binatu-setrika/"},{"childCategoryName":"Meja Setrika","childCategoryUrl":"https://www.lazada.co.id/papan-setrika/"},{"childCategoryName":"Produk Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Sapu & Alat Pel","childCategoryUrl":"https://www.lazada.co.id/beli-sapu-pel/"},{"childCategoryName":"Lap Kain Penghilang Debu","childCategoryUrl":"https://www.lazada.co.id/shop-Sapu-Sikat-Kemoceng/"},{"childCategoryName":"Sikat Pembersih","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-aksesoris-pembersih/"},{"childCategoryName":"Tempat Sampah","childCategoryUrl":"https://www.lazada.co.id/tempat-sampah/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_8">
                              <a href="https://www.lazada.co.id/beli-perawatan-rumah/">
                                <span>Perkakas &amp; Perbaikan Rumah</span>
                              </a>
                              <script type="text" class="J_data_8_7">
                                  [{"childCategoryName":"Alat Penyimpanan & Rak","childCategoryUrl":"https://www.lazada.co.id/beli-garasi-penyimpanan-alat-alat/"},{"childCategoryName":"Kabel & Perlengkapan Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-elektrik/"},{"childCategoryName":"Pengecatan & Dekorasi","childCategoryUrl":"https://www.lazada.co.id/beli-pengecatan-dekorasi/"},{"childCategoryName":"Perkakas","childCategoryUrl":"https://www.lazada.co.id/beli-perkakas/"},{"childCategoryName":"Perkakas Listrik","childCategoryUrl":"https://www.lazada.co.id/jual-perkakas-listrik/"},{"childCategoryName":"Perkakas Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-genggam/"},{"childCategoryName":"Pipa Saluran Air & Kelengkapan","childCategoryUrl":"https://www.lazada.co.id/beli-ledeng/"},{"childCategoryName":"Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter"},{"childCategoryName":"Tangga & Kursi Peninggi","childCategoryUrl":"https://www.lazada.co.id/beli-tangga-kursi-peninggi/"},{"childCategoryName":"perlengkapan keamanan","childCategoryUrl":"https://www.lazada.co.id/lampu-penerangan-tempat-kerja/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_9">
                              <a href="https://www.lazada.co.id/Kebun &amp; Luar Ruangan/">
                                <span>Kebun &amp; Luar Ruangan</span>
                              </a>
                              <script type="text" class="J_data_8_8">
                                  [{"childCategoryName":"Peralatan Listrik Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-listrik-taman-luar-ruangan/"},{"childCategoryName":"Peralatan Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-kebun/"},{"childCategoryName":"Sistem Pengairan","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-pengairan/"},{"childCategoryName":"Bibit & Biji Bijian","childCategoryUrl":"https://www.lazada.co.id/beli-tumbuhan-biji-bijian/"},{"childCategoryName":"Pembasmi Hama","childCategoryUrl":"https://www.lazada.co.id/beli-pembasmi-rumput-liar-hama/"},{"childCategoryName":"Aksesoris Genset","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-peralatan-listrik-luar-ruangan/"},{"childCategoryName":"Genset","childCategoryUrl":"https://www.lazada.co.id/shop-generator/"},{"childCategoryName":"Pemanggang","childCategoryUrl":"https://www.lazada.co.id/pemanggang-dan-penyajian-masakan-outdoor/"},{"childCategoryName":"Alat Pembunuh Serangga","childCategoryUrl":"https://www.lazada.co.id/alat-pembunuh-serangga/"},{"childCategoryName":"Aksesoris Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-luar-ruangan/"},{"childCategoryName":"Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-taman-dan-kebun/"},{"childCategoryName":"","childCategoryUrl":""}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_10">
                              <a href="https://www.lazada.co.id/beli-alat-tulis-kerajinan/">
                                <span>Alat Tulis &amp; Kerajinan</span>
                              </a>
                              <script type="text" class="J_data_8_9">
                                  [{"childCategoryName":"Peralatan Kesenian dan Kerajinan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-seni/"},{"childCategoryName":"Peralatan Mewarnai dan Copic","childCategoryUrl":"https://www.lazada.co.id/beli-alat-mewarnai-copic/"},{"childCategoryName":"Kerajinan Umum","childCategoryUrl":"https://www.lazada.co.id/beli-alat-kerajinan-umum/"},{"childCategoryName":"Pernak Pernik Hadiah dan Kado","childCategoryUrl":"https://www.lazada.co.id/beli-pernak-pernik-hadiah/"},{"childCategoryName":"Tas Belanja","childCategoryUrl":"https://www.lazada.co.id/beli-tas-belanjaan/"},{"childCategoryName":"Buku Catatan","childCategoryUrl":"https://www.lazada.co.id/buku-catatan/"},{"childCategoryName":"Kertas Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-kertas-komputer/"},{"childCategoryName":"Perlengkapan Sekolah","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-sekolah/"},{"childCategoryName":"Perlengkapan Meja Kerja","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-alat-alat-kantor/"},{"childCategoryName":"Perlengkapan Jahit","childCategoryUrl":"https://www.lazada.co.id/beli-bahan-bahan-kerajinan-tangan/"},{"childCategoryName":"Pulpen","childCategoryUrl":"https://www.lazada.co.id/beli-pulpen/"},{"childCategoryName":"Pensil","childCategoryUrl":"https://www.lazada.co.id/beli-pensil-2/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_9_11">
                              <a href="https://www.lazada.co.id/beli-media-musik-dan-buku/">
                                <span>Media, Musik &amp; Buku</span>
                              </a>
                              <script type="text" class="J_data_8_10">
                                  [{"childCategoryName":"Instrumen Musik","childCategoryUrl":"https://www.lazada.co.id/instrumen-musik/"},{"childCategoryName":"Buku","childCategoryUrl":"https://www.lazada.co.id/buku/"},{"childCategoryName":"Musik","childCategoryUrl":"https://www.lazada.co.id/lagu/"},{"childCategoryName":"Majalah","childCategoryUrl":"https://www.lazada.co.id/majalah/"},{"childCategoryName":"Film","childCategoryUrl":"https://www.lazada.co.id/film/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No10" data-spm="cate_10">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_1">
                              <a href="https://www.lazada.co.id/beli-minuman/">
                                <span>Minuman</span>
                              </a>
                              <script type="text" class="J_data_9_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"UHT, Susu & Susu Bubuk","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-uht-milk-milk-powder/"},{"childCategoryName":"Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-kopi/"},{"childCategoryName":"Minuman Serbuk","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-serbuk/"},{"childCategoryName":"Minuman Berenergi","childCategoryUrl":"https://www.lazada.co.id/shop-Minuman-Olahraga-Energi/"},{"childCategoryName":"Teh","childCategoryUrl":"https://www.lazada.co.id/beli-teh/"},{"childCategoryName":"Chocolate, Malt & Hot Cereals","childCategoryUrl":"https://www.lazada.co.id/coklat-panas/"},{"childCategoryName":"Air Mineral","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-air/"},{"childCategoryName":"Minuman Berkarbonasi","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-minuman-ringan/"},{"childCategoryName":"Jus","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-jus/"},{"childCategoryName":"Sirup","childCategoryUrl":"https://www.lazada.co.id/beli-sirup/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_2">
                              <a href="https://www.lazada.co.id/shop-Bahan-Utama-Pelengkap-Masakan">
                                <span>Bahan &amp; Bumbu Masakan</span>
                              </a>
                              <script type="text" class="J_data_9_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan Instant & Siap santap","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Instan-Siap-Santap/"},{"childCategoryName":"Bahan Pembuat Kue","childCategoryUrl":"https://www.lazada.co.id/shop-Bahan-Pembuat-Kue/"},{"childCategoryName":"Beras","childCategoryUrl":"https://www.lazada.co.id/shop-Beras/"},{"childCategoryName":"Garam & Bumbu Dapur","childCategoryUrl":"https://www.lazada.co.id/shop-Bumbu-Dapur/"},{"childCategoryName":"Mie & Bihun","childCategoryUrl":"https://www.lazada.co.id/shop-Mi-Bihun/"},{"childCategoryName":"Makanan Kering","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kering/"},{"childCategoryName":"Minyak","childCategoryUrl":"https://www.lazada.co.id/shop-Minyak/"},{"childCategoryName":"Makanan Kaleng","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kaleng/"},{"childCategoryName":"Pasta","childCategoryUrl":"https://www.lazada.co.id/shop-Pasta/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_3">
                              <a href="https://www.lazada.co.id/shop-Cokelat-Camilan-Permen/">
                                <span>Cokelat, Camilan &amp; Permen</span>
                              </a>
                              <script type="text" class="J_data_9_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Camilan","childCategoryUrl":"https://www.lazada.co.id/shop-Camilan/"},{"childCategoryName":"Cokelat","childCategoryUrl":"https://www.lazada.co.id/shop-Cokelat/"},{"childCategoryName":"Biskuit & Kerupuk","childCategoryUrl":"https://www.lazada.co.id/shop-Biskuit-Manis/"},{"childCategoryName":"Permen","childCategoryUrl":"https://www.lazada.co.id/shop-Manisan/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_4">
                              <a href="https://www.lazada.co.id/beli-makanan-sarapan">
                                <span>Makanan Sarapan, Sereal &amp; Selai</span>
                              </a>
                              <script type="text" class="J_data_9_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Selai & Madu","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-selai-madu-spread/"},{"childCategoryName":"Oatmeal","childCategoryUrl":"https://www.lazada.co.id/beli-oatmeal/"},{"childCategoryName":"Sereal Sarapan","childCategoryUrl":"https://www.lazada.co.id/beli-sereal/"},{"childCategoryName":"Tepung Pancake & Waffle","childCategoryUrl":"https://www.lazada.co.id/beli-pancake-waffle/"},{"childCategoryName":"Bars","childCategoryUrl":"https://www.lazada.co.id/shop-bar/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_5">
                              <a href="https://www.lazada.co.id/beli-makanan-minuman-hasil-segar">
                                <span>Buah &amp; Sayur</span>
                              </a>
                              <script type="text" class="J_data_9_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Buah Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-buah/"},{"childCategoryName":"Sayur Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-sayuran-segar/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_6">
                              <a href="https://www.lazada.co.id/shop-kebutuhan-rumah-tangga">
                                <span>Kebutuhan Rumah Tangga</span>
                              </a>
                              <script type="text" class="J_data_9_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengharum Ruangan","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-udara/"},{"childCategoryName":"Kebutuhan Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Pengendalian Hama","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pengendalian-hama/"},{"childCategoryName":"Sabun Pencuci Piring","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-mencuci-piring/"},{"childCategoryName":"Kebutuhan Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-cucian/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_7">
                              <a href="https://www.lazada.co.id/shop-makanan-hewan">
                                <span>Makanan Hewan Peliharaan</span>
                              </a>
                              <script type="text" class="J_data_9_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan & Camilan Kucing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-kucing/"},{"childCategoryName":"Makanan Burung","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-burung/"},{"childCategoryName":"Makanan Ikan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ikan/"},{"childCategoryName":"Makanan & Camilan Anjing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-anjing/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_8">
                              <a href="https://www.lazada.co.id/shop-aksesoris-hewan">
                                <span>Aksesoris Hewan Peliharaan</span>
                              </a>
                              <script type="text" class="J_data_9_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Keperluan Akuarium","childCategoryUrl":"https://www.lazada.co.id/shop-keperluan-akuarium/"},{"childCategoryName":"Kandang & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-kandang-terbuka-pintu-anjing/"},{"childCategoryName":"Peralatan Grooming","childCategoryUrl":"https://www.lazada.co.id/jual-persediaan-grooming-hewan/"},{"childCategoryName":"Rumah,Alas & Tempat tidur","childCategoryUrl":"https://www.lazada.co.id/beli-ranjang-alas-tidur-rumah-anjing/"},{"childCategoryName":"Alat Makan Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-mangkuk-makan-anjing/"},{"childCategoryName":"Tali dan Kalung Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-tali-kalung-moncong-anjing/"},{"childCategoryName":"Kebutuhan Travel Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-pengangkut-perjalanan-anjing/"},{"childCategoryName":"Mainan Hewan","childCategoryUrl":"https://www.lazada.co.id/shop-mainan/"},{"childCategoryName":"Alat Pelatihan Anjing","childCategoryUrl":"https://www.lazada.co.id/beli-alat-latih-olahraga-anjing/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_10_9">
                              <a href="https://www.lazada.co.id/shop-kesehatan-hewan-peliharaan">
                                <span>Kesehatan Hewan Peliharaan</span>
                              </a>
                              <script type="text" class="J_data_9_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-kesehatan-gigi-anjing/"},{"childCategoryName":"Pembasmi Kutu Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-kutu-anjing/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No11" data-spm="cate_11">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_1">
                              <a href="https://www.lazada.co.id/baju-olahraga-pria/">
                                <span>Baju Olahraga Pria</span>
                              </a>
                              <script type="text" class="J_data_10_0">
                                  [{"childCategoryName":"Celana Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-pria/"},{"childCategoryName":"Kaos Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/kaos-olahraga-pria/"},{"childCategoryName":"Jaket Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-olahraga-pria/"},{"childCategoryName":"Pakaian Renang Pria","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-pria/"},{"childCategoryName":"Jersey Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-olahraga-pria/"},{"childCategoryName":"Celana Pendek Pria","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-pria/"},{"childCategoryName":"Hoodies Pria","childCategoryUrl":"https://www.lazada.co.id/hoodies-pria/"},{"childCategoryName":"Topi Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-topi-olahraga-pria/"},{"childCategoryName":"Tas Ransel Sport Pria","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-pria/"},{"childCategoryName":"Tas Serut Pria","childCategoryUrl":"https://www.lazada.co.id/tas-serut-pria/"},{"childCategoryName":"Tas Duffel Pria","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-pria/"},{"childCategoryName":"Gym Tote Pria","childCategoryUrl":"https://www.lazada.co.id/gym-tote-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_2">
                              <a href="https://www.lazada.co.id/pakaian-olahraga-wanita/">
                                <span>Baju Olahraga Wanita</span>
                              </a>
                              <script type="text" class="J_data_10_1">
                                  [{"childCategoryName":"Celana Panjang Wanita","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-wanita/"},{"childCategoryName":"Kaos Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/kaos-dan-atasan-olahraga-wanita/"},{"childCategoryName":"Jaket Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-sport-wanita/"},{"childCategoryName":"Sport Bra Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sport-bra-wanita/"},{"childCategoryName":"Celana Pendek Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-wanita/"},{"childCategoryName":"Rok Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-rok-olahraga-wanita/"},{"childCategoryName":"Hoodies Wanita","childCategoryUrl":"https://www.lazada.co.id/hoodies-wanita/"},{"childCategoryName":"Pakaian Renang Wanita","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-wanita/"},{"childCategoryName":"Tas Ransel Sport Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-wanita/"},{"childCategoryName":"Tas Serut Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-serut-wanita/"},{"childCategoryName":"Tas Duffel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-wanita/"},{"childCategoryName":"Gym Tote Wanita","childCategoryUrl":"https://www.lazada.co.id/gym-tote-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_3">
                              <a href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-pria/">
                                <span>Sepatu Olahraga Pria</span>
                              </a>
                              <script type="text" class="J_data_10_2">
                                  [{"childCategoryName":"Sepatu Sepakbola Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Sepatu Lari Pria","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-pria/"},{"childCategoryName":"Sepatu Hiking Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-hiking-pria/"},{"childCategoryName":"Sepatu Basket Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-basket-pria/"},{"childCategoryName":"Sepatu Olahraga Air Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-olahraga-air-pria/"},{"childCategoryName":"Sepatu Badminton ria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-badminton-pria/"},{"childCategoryName":"Sepatu Training Pira","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-pria/"},{"childCategoryName":"Sepatu Skateboard Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-pria/"},{"childCategoryName":"Sepatu Sneakers Pria","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-pria/"},{"childCategoryName":"Sandal Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-pria/"},{"childCategoryName":"Sepatu Jalan Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-pria/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_4">
                              <a href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-wanita/">
                                <span>Sepatu Olahraga Wanita</span>
                              </a>
                              <script type="text" class="J_data_10_3">
                                  [{"childCategoryName":"Sepatu Badminton Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-badminton-wanita/"},{"childCategoryName":"Sepatu Lari Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-wanita/"},{"childCategoryName":"Sepatu Futsal Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-futsal-wanita/"},{"childCategoryName":"Sepatu Basket Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-basket-wanita/"},{"childCategoryName":"Sepatu Sepakbola Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepakbola-wanita/"},{"childCategoryName":"Sepatu Olahraga Air Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-olaraga-air-wanita/"},{"childCategoryName":"Sepatu Hiking Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-hiking-wanita/"},{"childCategoryName":"Sepatu Training Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-wanita/"},{"childCategoryName":"Septu Skateboard Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-wanita/"},{"childCategoryName":"Sepatu Sneakers Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-wanita/"},{"childCategoryName":"Sandal Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-wanita/"},{"childCategoryName":"Sepatu Jalan Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-wanita/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_5">
                              <a href="https://www.lazada.co.id/camping-dan-hiking/">
                                <span>Camping dan Hiking</span>
                              </a>
                              <script type="text" class="J_data_10_4">
                                  [{"childCategoryName":"Tenda dan furniture Camping","childCategoryUrl":"https://www.lazada.co.id/tenda-dan-furniture/"},{"childCategoryName":"Perlengkapan Tidur Camping","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-tidur-camping/"},{"childCategoryName":"Tas Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tas-ransel/"},{"childCategoryName":"Tempat berteduh Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tempat-berteduh-dan-kanopi/"},{"childCategoryName":"Perabotan Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-perabotan-kemah/"},{"childCategoryName":"Alat Dapur Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-dapur-kemah/"},{"childCategoryName":"Alat penerangan Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-penerangan/"},{"childCategoryName":"Navigasi Elektroning Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-navigasi-elektronik/"},{"childCategoryName":"Tongkat Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-hiking/"},{"childCategoryName":"Pisau Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-pisau-alat-multifungsi/"},{"childCategoryName":"Peralatan Survival Camping","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-survival-dan-keamanan/"},{"childCategoryName":"Perlengkapan Panjat Tebing","childCategoryUrl":"https://www.lazada.co.id/panjat-tebing/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_6">
                              <a href="https://www.lazada.co.id/jual-peralatan-memancing/">
                                <span>Peralatan Memancing</span>
                              </a>
                              <script type="text" class="J_data_10_5">
                                  [{"childCategoryName":"Tongkat Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-pancing/"},{"childCategoryName":"Alat Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/alat-gulungan-pancing/"},{"childCategoryName":"Set Tongkat dan Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/set-tongkat-dan-gulungan-pancing/"},{"childCategoryName":"Senar Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-senar-pancing/"},{"childCategoryName":"Umpan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-umpan/"},{"childCategoryName":"Peralatan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-pancing/"},{"childCategoryName":"GPS alat pencari ikan","childCategoryUrl":"https://www.lazada.co.id/jual-gps-alat-pencari-ikan/"},{"childCategoryName":"Jaring Penangkap Ikan","childCategoryUrl":"https://www.lazada.co.id/jual-jaring-penangkap-ikan/"},{"childCategoryName":"Aksesoris Memancing","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-memancing/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_7">
                              <a href="https://www.lazada.co.id/olahraga-sepeda/">
                                <span>Olahraga Sepeda</span>
                              </a>
                              <script type="text" class="J_data_10_6">
                                  [{"childCategoryName":"Komponen Part Sepeda","childCategoryUrl":"https://www.lazada.co.id/komponen-dan-parts-sepeda/"},{"childCategoryName":"Aksesoris Sepeda","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepeda/"},{"childCategoryName":"Sepeda","childCategoryUrl":"https://www.lazada.co.id/sepeda/"},{"childCategoryName":"Kaos Sepeda","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kaos-sepeda/"},{"childCategoryName":"Sepatu Sepeda Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-pria/"},{"childCategoryName":"Sepatu Sepeda Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepeda-wanita/"},{"childCategoryName":"Sepatu Sepeda Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-perempuan/"},{"childCategoryName":"Sepatu Sepeda Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-laki-laki/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_8">
                              <a href="https://www.lazada.co.id/olahraga-air/">
                                <span>Olahraga Air</span>
                              </a>
                              <script type="text" class="J_data_10_7">
                                  [{"childCategoryName":"Kapal","childCategoryUrl":"https://www.lazada.co.id/jual-kapal/"},{"childCategoryName":"Peralatan Menyelam","childCategoryUrl":"https://www.lazada.co.id/diving-snorkeling/"},{"childCategoryName":"Peralatan Renang","childCategoryUrl":"https://www.lazada.co.id/renang/"},{"childCategoryName":"Papan Renang","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-papan/"},{"childCategoryName":"Tubing dan Towables","childCategoryUrl":"https://www.lazada.co.id/jual-tubing-towables/"},{"childCategoryName":"Akesesoris Olahraga Air","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-olahraga-air/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_9">
                              <a href="https://www.lazada.co.id/latihan-dan-fitness/">
                                <span>Gym, Yoga &amp; Fitness</span>
                              </a>
                              <script type="text" class="J_data_10_8">
                                  [{"childCategoryName":"Peralatan Pelatihan Ketangkasan","childCategoryUrl":"https://www.lazada.co.id/shop-pelatihan-kecepatan-ketangkasan/"},{"childCategoryName":"Aksesoris Gym","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris/"},{"childCategoryName":"Pilates Gym","childCategoryUrl":"https://www.lazada.co.id/pilates/"},{"childCategoryName":"Alat Latihan Angkat Beban","childCategoryUrl":"https://www.lazada.co.id/alat-latihan-angkat-beban/"},{"childCategoryName":"Yoga","childCategoryUrl":"https://www.lazada.co.id/yoga/"},{"childCategoryName":"Peralatan Kardio","childCategoryUrl":"https://www.lazada.co.id/peralatan-latihan-kardio/"},{"childCategoryName":"Perlengkapan Fitnes","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-fitness/"},{"childCategoryName":"Perlengkapan Lari","childCategoryUrl":"https://www.lazada.co.id/temporary-url-sport-catl3-1/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_10">
                              <a href="https://www.lazada.co.id/olahraga-raket/">
                                <span>Olahraga Raket</span>
                              </a>
                              <script type="text" class="J_data_10_9">
                                  [{"childCategoryName":"Tenis Meja","childCategoryUrl":"https://www.lazada.co.id/tenis-meja/"},{"childCategoryName":"Badminton","childCategoryUrl":"https://www.lazada.co.id/bulutangkis/"},{"childCategoryName":"Tennis","childCategoryUrl":"https://www.lazada.co.id/tenis/"},{"childCategoryName":"Squash","childCategoryUrl":"https://www.lazada.co.id/squash/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_11">
                              <a href="https://www.lazada.co.id/shop-perlengkapan-olah-raga/">
                                <span>Perlengkapan Olahraga</span>
                              </a>
                              <script type="text" class="J_data_10_10">
                                  [{"childCategoryName":"Oxrashoan Tinju-Bela Mma","childCategoryUrl":"https://www.lazada.co.id/jual-tinju-bela-diri-mma/"},{"childCategoryName":"Golf Gym","childCategoryUrl":"https://www.lazada.co.id/golf/"},{"childCategoryName":"Bola Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-bola/"},{"childCategoryName":"Basket Gym","childCategoryUrl":"https://www.lazada.co.id/basket/"},{"childCategoryName":"Voli Gym","childCategoryUrl":"https://www.lazada.co.id/voli/"},{"childCategoryName":"Cricket Gym","childCategoryUrl":"https://www.lazada.co.id/cricket/"},{"childCategoryName":"Rugby Gym","childCategoryUrl":"https://www.lazada.co.id/rugby/"},{"childCategoryName":"Takraw Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-takraw/"},{"childCategoryName":"Baseball Gym","childCategoryUrl":"https://www.lazada.co.id/baseball/"},{"childCategoryName":"Perlengkapan Olahraga Senam","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-senam/"},{"childCategoryName":"Hoki Gym","childCategoryUrl":"https://www.lazada.co.id/olahraga-hoki/"},{"childCategoryName":"Peralatan Cheerleading","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-cheerleading/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_11_12">
                              <a href="https://www.lazada.co.id/sepak-bola/">
                                <span>Perlengkapan Sepak Bola</span>
                              </a>
                              <script type="text" class="J_data_10_11">
                                  [{"childCategoryName":"Sepatu Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Jersey Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-pria/"},{"childCategoryName":"Jersey Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-anak-laki-laki/"},{"childCategoryName":"Sepatu Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepak-bola/"},{"childCategoryName":"Sepatu Futsal Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal/"},{"childCategoryName":"Bola","childCategoryUrl":"https://www.lazada.co.id/bola-sepak-bola/"},{"childCategoryName":"Sarung Tangan Keeper","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-kiper/"},{"childCategoryName":"Pelindung Lutut","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-tulang-kering/"},{"childCategoryName":"Peralatan Latihan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-berlatih-dan-lapangan/"},{"childCategoryName":"Tas","childCategoryUrl":"https://www.lazada.co.id/jual-tas-peralatan/"},{"childCategoryName":"Fan Merchandise Team International","childCategoryUrl":"https://www.lazada.co.id/international-football-clubs-fan-merchandise/"}]
                                </script>
                            </li>
                          </ul>
                          <ul class="lzd-site-menu-sub Level_1_Category_No12" data-spm="cate_12">
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_1">
                              <a href="https://www.lazada.co.id/shop-auto-parts-spares/">
                                <span>Suku Cadang &amp; Peralatan Mobil</span>
                              </a>
                              <script type="text" class="J_data_11_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Lampu, Bohlam & LED","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-led-hid/"},{"childCategoryName":"Rem","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-brake-system/"},{"childCategoryName":"Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shocks-struts-suspension/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-engine-parts/"},{"childCategoryName":"Suku Cadang Body","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-parts/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exhaust-emissions/"},{"childCategoryName":"Aki Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-batteries-accessories/"},{"childCategoryName":"Wiper & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-windshield-wipers-washers/"},{"childCategoryName":"Klakson & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-horns-accessories/"},{"childCategoryName":"Peralatan Pengapian & Kelistrikan","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-ignition-electrical/"},{"childCategoryName":"Peralatan & Suku Cadang Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trim/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_2">
                              <a href="https://www.lazada.co.id/aksesoris-interior-mobil/">
                                <span>Aksesoris Interior Mobil</span>
                              </a>
                              <script type="text" class="J_data_11_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Jok & Trim","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok-aksesoris-kursi/"},{"childCategoryName":"Aksesoris Stir Mobil","childCategoryUrl":"https://www.lazada.co.id/setir-mobil-dan-aksesoris/"},{"childCategoryName":"Persneling","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shift-boots-knobs/"},{"childCategoryName":"Pedal","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-pedals-pedal-accessories/"},{"childCategoryName":"Spidometer & Pengukur","childCategoryUrl":"https://www.lazada.co.id/alat-pengukur-kecepatan/"},{"childCategoryName":"Aksesoris Elektronik Interior","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-electrical-appliances/"},{"childCategoryName":"Aksesoris Interior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-consoles-organizers/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_3">
                              <a href="https://www.lazada.co.id/aksesoris-eksterior-mobil/">
                                <span>Aksesoris Exterior Mobil</span>
                              </a>
                              <script type="text" class="J_data_11_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Mobil","childCategoryUrl":"https://www.lazada.co.id/penutup-mobil/"},{"childCategoryName":"Stiker & Emblems","childCategoryUrl":"https://www.lazada.co.id/shop-stiker/"},{"childCategoryName":"Lis & Garnis","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-chrome-trim-accessories/"},{"childCategoryName":"Penutup Pelat Nomer","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-license-plate-covers-frames/"},{"childCategoryName":"Aksesoris Serbaguna","childCategoryUrl":"https://www.lazada.co.id/shop-manajemen-kargo/"},{"childCategoryName":"Kaca Angin, Deflektor & Talang Air","childCategoryUrl":"https://www.lazada.co.id/pelindung-dan-talang-air-mobil/"},{"childCategoryName":"Kaca & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exterior-mirrors/"},{"childCategoryName":"Spoiler, Sayap & Body Kit","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-spoilers-wings-styling-kits/"},{"childCategoryName":"Aksesoris Offroad","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-armor/"},{"childCategoryName":"Aksesoris Exterior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trailer-accessories/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_4">
                              <a href="https://www.lazada.co.id/shop-elektronik/">
                                <span>Kamera Mobil, Audio &amp; Video</span>
                              </a>
                              <script type="text" class="J_data_11_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kamera Mobil & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-kamera-mobil/"},{"childCategoryName":"Headunit","childCategoryUrl":"https://www.lazada.co.id/shop-car-video-in-dash-navigation/"},{"childCategoryName":"Spiker","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-speakers/"},{"childCategoryName":"Subwoofer","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-subwoofers/"},{"childCategoryName":"Power, amplifier & Kapasitor Bank","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-equalizers/"},{"childCategoryName":"GPS","childCategoryUrl":"https://www.lazada.co.id/shop-motors-gps/"},{"childCategoryName":"Video, TV Aksesoris mobil","childCategoryUrl":"https://www.lazada.co.id/shop-car-video/"},{"childCategoryName":"Aksesoris Audio & Video Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-audio-video-accessories/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_5">
                              <a href="https://www.lazada.co.id/shop-perawatan-mobil/">
                                <span>Perawatan &amp; Pengkilat Mobil</span>
                              </a>
                              <script type="text" class="J_data_11_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Pengkilat & Detailing Bodi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-waxing-kits/"},{"childCategoryName":"Pelapis & Pembersih Kaca","childCategoryUrl":"https://www.lazada.co.id/glass-care/"},{"childCategoryName":"Kompon & Penghilang Baret","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-rubbing-compounds/"},{"childCategoryName":"Cat Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-paints-primers/"},{"childCategoryName":"Perawatan Ban & Velg","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-tire-wheel-care/"},{"childCategoryName":"Perawatan Interior","childCategoryUrl":"https://www.lazada.co.id/interior-care/"},{"childCategoryName":"Paket Perawatan Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-paket-perawatan-mobil/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_6">
                              <a href="https://www.lazada.co.id/roda-dan-ban/">
                                <span>Ban &amp; Velg Mobil</span>
                              </a>
                              <script type="text" class="J_data_11_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Velg","childCategoryUrl":"https://www.lazada.co.id/jual-roda/"},{"childCategoryName":"Ban","childCategoryUrl":"https://www.lazada.co.id/jual-ban/"},{"childCategoryName":"Aksesoris Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-roda-suku-cadang/"},{"childCategoryName":"Peralatan Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/shop-tire-parts-air-compressors-inflators/"},{"childCategoryName":"Servis & Pemasangan Velg, Ban","childCategoryUrl":"https://www.lazada.co.id/shop-paket-ban-pelek/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_7">
                              <a href="https://www.lazada.co.id/oli-dan-pelumas/">
                                <span>Oli &amp; Cairan Mobil</span>
                              </a>
                              <script type="text" class="J_data_11_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-oils/"},{"childCategoryName":"Aditif & Penguat Bensin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-auto-oils-fluids-additives/"},{"childCategoryName":"Pendingin Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-antifreezes-coolants/"},{"childCategoryName":"Pembersih Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-cleaners/"},{"childCategoryName":"Oli Powersteering","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-power-steering-fluids/"},{"childCategoryName":"Cairan & Oli Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-greases-lubricants/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_8">
                              <a href="https://www.lazada.co.id/shop-motorcycle-riding-gear/">
                                <span>Perlengkapan Berkendara &amp; Helm</span>
                              </a>
                              <script type="text" class="J_data_11_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Helm","childCategoryUrl":"https://www.lazada.co.id/helmets-automotive/"},{"childCategoryName":"Jaket & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jackets/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-gloves/"},{"childCategoryName":"Sepatu & Boot","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-footwear/"},{"childCategoryName":"Masker & Pelindung Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-face-masks/"},{"childCategoryName":"Kacamata Angin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-eyewear/"},{"childCategoryName":"Peralatan Hujan","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-hujan/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_9">
                              <a href="https://www.lazada.co.id/shop-motorcycle-parts-spares/">
                                <span>Suku Cadang &amp; Peralatan Motor</span>
                              </a>
                              <script type="text" class="J_data_11_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam, LED & Rumah Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-penerangan/"},{"childCategoryName":"Rem & Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brakes-suspension/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/moto-knalpot-system-pembuangan/"},{"childCategoryName":"Aki Motor & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-moto-batteries-accessories/"},{"childCategoryName":"Kaca / Cermin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-mirrors/"},{"childCategoryName":"Filter Motor","childCategoryUrl":"https://www.lazada.co.id/shop-saringan-udara/"},{"childCategoryName":"Suku Cadang Bodi & Rangka","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-body-frame/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-drivetrain-transmission/"},{"childCategoryName":"Busi","childCategoryUrl":"https://www.lazada.co.id/shop-busi-motor/"},{"childCategoryName":"Suku Cadang Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-stands-accessories/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_10">
                              <a href="https://www.lazada.co.id/shop-motorcycle-exterior-accessories/">
                                <span>Aksesoris &amp; Elektronik Motor</span>
                              </a>
                              <script type="text" class="J_data_11_9">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Jok","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok/"},{"childCategoryName":"Stiker & Emblem","childCategoryUrl":"https://www.lazada.co.id/shop-stiker-emblem/"},{"childCategoryName":"Pengukur","childCategoryUrl":"https://www.lazada.co.id/shop-indikator/"},{"childCategoryName":"Aksesoris Elektronik","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-electronics/"},{"childCategoryName":"Pelindung Plat Nomor","childCategoryUrl":"https://www.lazada.co.id/shop-frame-plat-nomor/"},{"childCategoryName":"Sarung Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-covers/"},{"childCategoryName":"Windshield & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-windshields-accessories/"},{"childCategoryName":"Bagasi Penyimpanan & Bantalan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-luggage-saddlebags/"},{"childCategoryName":"Aksesoris & Elektronik Motor Lainny","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-racks/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_11">
                              <a href="https://www.lazada.co.id/shop-motorcycle-oils-fluids/">
                                <span>Ban, Velg, Oli &amp; Cairan Motor</span>
                              </a>
                              <script type="text" class="J_data_11_10">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oli-mesin/"},{"childCategoryName":"Oli Rem Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brake-fluid/"},{"childCategoryName":"Oli Transmisi Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oligirboks/"},{"childCategoryName":"Pendingin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-coolant/"},{"childCategoryName":"Aditif & Penguat Bensin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pembersih/"},{"childCategoryName":"Pelumas Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pelumas-dan-gemuk/"},{"childCategoryName":"Ban & Velg Motor","childCategoryUrl":"https://www.lazada.co.id/jual-roda-ban-motor/"},{"childCategoryName":"Oli & Cairan Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-oli-shock-breaker/"}]
                                </script>
                            </li>
                            <li class="lzd-site-menu-sub-item" data-cate="cate_12_12">
                              <a href="https://www.lazada.co.id/mobil-motor/">
                                <span>Kendaraan</span>
                              </a>
                              <script type="text" class="J_data_11_11">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-mobil/"},{"childCategoryName":"Motor","childCategoryUrl":"https://www.lazada.co.id/shop-sepeda-motor-skuter/"}]
                                </script>
                            </li>
                          </ul>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <nav class="lzd-menu-labels" data-spm="menu">
                  <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                    <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                      <img alt="<?php echo $BRANDS ?>" class="lzd-site-nav-menu-iconfont-img"
                        src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                    </span>
                    <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-LazMall">&#xe629;</i>-->
                    <span class="lzd-menu-labels-item-text"><?php echo $BRANDS ?></span>
                  </a>
                  <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                    <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                      <img alt="Situs <?php echo $BRANDS ?>" class="lzd-site-nav-menu-iconfont-img"
                        src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                    </span>
                    <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-MobileTop1">&#xe768;</i>-->
                    <span class="lzd-menu-labels-item-text">Situs <?php echo $BRANDS ?></span>
                  </a>
                  <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                    <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                      <img alt="Daftar <?php echo $BRANDS ?>" class="lzd-site-nav-menu-iconfont-img"
                        src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                    </span>
                    <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-Vouchers">&#xe76a;</i>-->
                    <span class="lzd-menu-labels-item-text">Daftar <?php echo $BRANDS ?></span>
                  </a>
                  <a class="lzd-menu-labels-item" href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>">
                    <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                      <img alt="<?php echo $BRANDS ?> Login" class="lzd-site-nav-menu-iconfont-img"
                        src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png">
                    </span>
                    <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-Categories">&#xe765;</i>-->
                    <span class="lzd-menu-labels-item-text"><?php echo $BRANDS ?> Login</span>
                  </a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>function generateUUID() { var d = new Date().getTime(); var uuid = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (c) { var r = (d + Math.random() * 16) % 16 | 0; d = Math.floor(d / 16); return (c == "x" ? r : (r & 0x7) | 0x8).toString(16); }); return uuid; } var lzdDocCookies = { getItem: function (sKey) { return (decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null); }, setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) { if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; } var sExpires = ""; var exdate = new Date(); exdate.setDate(exdate.getDate() + vEnd); sExpires = ";expires=" + exdate.toGMTString(); document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "; path=/") + (bSecure ? "; secure" : ""); return true; }, hasItem: function (sKey) { if (!sKey) { return false; } return new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(document.cookie); }, removeItem: function (sKey, sPath, sDomain) { if (!this.hasItem(sKey)) { return false; } document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "; path=/"); return true; }, }; var LZD_HOST_ARRAY = [".lazada.co.id", ".lazada.com.my", ".lazada.com.ph", ".lazada.sg", ".lazada.co.th", ".lazada.vn", ".daraz.com.bd", ".daraz.lk", ".shop.com.mm", ".daraz.com.np", ".daraz.pk", ".lazada.test",]; var currentDomain = ".lazada.sg"; var UUID = generateUUID(); var t_uid = lzdDocCookies.getItem("t_uid"); var anon_uid = lzdDocCookies.getItem("anon_uid"); for (var i = 0; i < LZD_HOST_ARRAY.length; i++) { if (window.location.host.indexOf(LZD_HOST_ARRAY[i]) > -1) { currentDomain = LZD_HOST_ARRAY[i]; } } if (!lzdDocCookies.getItem("lzd_cid")) { lzdDocCookies.setItem("lzd_cid", UUID, 365, null, currentDomain); } if (!lzdDocCookies.getItem("t_uid")) { if (anon_uid) { lzdDocCookies.setItem("t_uid", anon_uid, 365, null, currentDomain); } else { lzdDocCookies.setItem("t_uid", UUID, 365, null, currentDomain); } }</script>
    </div>
  </div>
  <input type="hidden" id="header-pc-config"
    value="{&quot;voyagerVersion&quot;:&quot;2&quot;,&quot;voyagerEnv&quot;:&quot;product&quot;,&quot;assetsRefactor&quot;:false,&quot;regionID&quot;:&quot;ID&quot;,&quot;language&quot;:&quot;id&quot;,&quot;react&quot;:false,&quot;needUmid&quot;:false,&quot;channel&quot;:&quot;pdp&quot;,&quot;customName&quot;:&quot;default&quot;,&quot;version&quot;:{&quot;nav&quot;:&quot;5.2.32&quot;,&quot;search&quot;:&quot;0.4.11&quot;,&quot;menu&quot;:&quot;5.0.45&quot;,&quot;menuNav&quot;:&quot;5.0.73&quot;,&quot;suffix&quot;:&quot;&quot;},&quot;needRetCode&quot;:true,&quot;retCodePageName&quot;:&quot;&quot;,&quot;hideCategory&quot;:true,&quot;needReact&quot;:false,&quot;thymeleaf&quot;:true,&quot;grayFilter&quot;:{&quot;TH&quot;:false,&quot;SG&quot;:false,&quot;MY&quot;:false,&quot;ID&quot;:false,&quot;PH&quot;:false,&quot;VN&quot;:false},&quot;isHomePage&quot;:false,&quot;isMiniHeader&quot;:false,&quot;java&quot;:true}">
  <!-- Floating Cart UMD -->
  <script>window.__LIB_CART_SCENE__ = "pdp"; window.__LIB_CART_VERSION__ = "1.0.16"; window.__LIB_CART_ASSETS_ENV__ = "product";</script>
  <!-- PC Login / Signup Popup UMD -->
  <!-- online version -->
  <script>window.__LIB_LOGIN_SIGNUP_POPUP_VERSION__ = "0.0.4";</script>
  <div id="pdp-nav">
    <div>
      <div>
        <style>
          .breadcrumb_list {
            width: 1188px;
            height: 48px;
            border-bottom: 1px solid #eff0f5;
            margin: 0 auto;
            overflow: hidden;
            text-overflow: ellipsis
          }

          .breadcrumb_list_empty {
            height: 0;
            border: none;
            overflow: hidden
          }

          .breadcrumb_list .breadcrumb {
            padding-left: 0;
            margin-left: -4px;
            height: 48px;
            vertical-align: middle;
            display: inline-block;
            white-space: nowrap
          }

          .breadcrumb_list .breadcrumb .breadcrumb_item {
            position: relative;
            display: table-cell;
            vertical-align: middle;
            font-size: 13px;
            font-weight: 300;
            height: 48px
          }

          .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text {
            vertical-align: middle;
            padding: 0;
            margin: 0;
            line-height: 100%;
            display: inline-block;
            font-weight: 300
          }

          .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor {
            display: inline-block;
            vertical-align: middle;
            color: #1a9cb7;
            padding: 0 4px;
            font-size: 14px;
            font-family: Roboto-Regular, Helvetica, Arial, sans-serif;
            max-width: 200px;
            white-space: nowrap;
            line-height: 16px;
            overflow: hidden;
            text-overflow: ellipsis
          }

          .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor_last {
            color: #757575;
            max-width: none;
            height: 16px;
            line-height: 16px;
            white-space: normal
          }

          .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_right_arrow {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACKUExURUxpcYGBgYGBgYWFhYCAgICAgICAgIKCgv///4GBgZWVlYyMjIGBgYCAgIKCgoGBgYGBgaqqqoODg7+/v4GBgZKSko6OjoGBgYWFhYGBgYSEhIGBgZmZmYCAgIGBgYGBgYCAgICAgIGBgYCAgICAgIiIiICAgIeHh4GBgYSEhIODg4GBgYGBgYCAgPLijmAAAAAtdFJOUwCS7jCDi/E1AbYMFJrrK9ToAycEugcJtBfYG64Fp+S+vb+god0e4SLcHyPgwPJLUkAAAAB6SURBVDjLY2AYYoCdkwu/AgVdHTG8Crj5dUVE8aqQkNQVl8GrQkpDV1oYrwpVbV1ZQbwq1OV0lTnwqhAS0OXBr4KPV5cRf3AwM+myEghRNl0WihQQsoKQIwl5U0tOVwmfvKYa/qCWUsEfWYSim2CCkddVFKMs0Q5aAABM4wlSQJ87yAAAAABJRU5ErkJggg==);
            background-repeat: no-repeat;
            background-size: contain;
            display: inline-block;
            width: 16px;
            height: 16px;
            vertical-align: middle
          }
        </style>
        <style>
          .baxia-dialog {
            display: none !important
          }
        </style>
        <div data-spm="breadcrumb" id="J_breadcrumb_list" class="breadcrumb_list breadcrumb_custom_cls">
          <ul class="breadcrumb" id="J_breadcrumb"></ul>
        </div>
        <script>function htmlEncodePdp(input) { var el = document.createElement("div"); el.innerText = input; return el.innerHTML; } window.LZD = window.LZD || {}; window.LZD.updateBreadcrumb = function (list) { if (!list || !list instanceof Array) { return; } var parentNode = document.getElementById("J_breadcrumb"); while (parentNode.hasChildNodes()) { parentNode.removeChild(parentNode.firstChild); } var size = list.length; for (var i = 0; i < size; i++) { var item = list[i]; item.title = htmlEncodePdp(item.title); var liNode = document.createElement("li"); liNode.className = "breadcrumb_item"; if (i === size - 1) { liNode.innerHTML = '<span class="breadcrumb_item_text">' + '<span class="breadcrumb_item_anchor breadcrumb_item_anchor_last">' + item.title + "</span>" + "</span>"; } else { if (item.url) { item.url = window.location.host.indexOf("h5.lazada.") > -1 ? item.url.replace("www.lazada.", "h5.lazada.") : item.url; } liNode.innerHTML = '<span class="breadcrumb_item_text">' + '<a title="' + item.title + '" href="' + item.url + '" class="breadcrumb_item_anchor">' + "<span>" + item.title + "</span>" + "</a>" + '<div class="breadcrumb_right_arrow"></div>' + "</span>"; } parentNode.appendChild(liNode); } var breadcrumbListNode = document.getElementById("J_breadcrumb_list"); var cls = breadcrumbListNode.className; if (size === 0) { if (cls.indexOf("breadcrumb_list_empty") < 0) { breadcrumbListNode.className = "breadcrumb_list_empty"; } } else { breadcrumbListNode.className = "breadcrumb_list"; } };</script>
      </div>
    </div>
  </div>
  <div id="container" style="visibility: visible">
    <div id="root" class="pdp-block" data-reactroot="">
      <div id="module_core" class="pdp-block module">
        <p></p>
      </div>
      <div id="block-r3bZB9J63C" class="pdp-block pdp-block_group_buy_tip">
        <div id="module_group_buy_tip" class="pdp-block module"></div>
      </div>
      <div id="block-9uUVSSMxTb" class="pdp-block pdp-block__main-information">
        <div id="block-W59OjAyxSy" class="pdp-block pdp-block__gallery">
          <div id="module_item_gallery_1" class="pdp-block module">
            <div class="item-gallery" data-spm="gallery">
              <div class="gallery-preview-panel">
                <div class="gallery-preview-panel__content">
                  <img class="pdp-mod-common-image gallery-preview-panel__image" alt="<?php echo $BRANDS ?>"
                    src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748953534/banner_konten_advfpc.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="block-n8THsmEaVS" class="pdp-block pdp-block__main-information-detail">
          <div id="block-6QhDn4z1db" class="pdp-block">
            <div id="block-ssuYrXSucaM" class="pdp-block pdp-block__product-detail">
              <div id="module_flash_sale" class="pdp-block module"></div>
              <div id="module_crazy_deal" class="pdp-block module"></div>
              <div id="module_redmart_top_promo_banner" class="pdp-block module"></div>
              <style>
                .n-columns-2 {
                  display: grid;
                  grid-template-columns: repeat(2, 1fr);
                  font-weight: 700;
                  width: 350px
                }

                .n-columns-2 a {
                  text-align: center
                }

                .login,
                .register {
                  color: #fff;
                  padding: 13px 10px
                }

                .login,
                .login-button {
                  text-shadow: 2px 2px #0c0f12;
                  border-radius: 10px 10px;
                  border: 1px solid #000;
                  background: linear-gradient(to bottom, #ff00b2 0, #c7038c 100%);
                  color: #fff
                }

                .register,
                .register-button {
                  text-shadow: 2px 2px #000;
                  border-radius: 10px 10px;
                  background: linear-gradient(to bottom, #a844fb 0, #3ebbf3 100%);
                  border: 1px solid #000
                }
              </style>
              <div id="module_product_title_1" class="pdp-block module">
                <div class="pdp-product-title">
                  <div class="pdp-mod-product-badge-wrapper">
                    <h1 class="pdp-mod-product-badge-title"><?php echo $BRANDS ?>: Link Situs Terpercaya Dengan Layanan Fast Respond</h1>
                      
                    <div class="n-columns-2">
                      <a href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>" rel="nofollow noreferrer" class="login">DAFTAR</a>
                      <a href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>" rel="nofollow noreferrer" class="register">LOGIN</a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="module_pre-order-tag" class="pdp-block module"></div>
              <div id="block-C7wdxsrWYA0" class="pdp-block pdp-block__rating-questions-summary">
                <div id="block-qkzkCPtx4vZ" class="pdp-block pdp-block__rating-questions">
                  <div id="module_product_review_star_1" class="pdp-block module">
                    <div class="pdp-review-summary">
                      <div class="container-star pdp-review-summary__stars pdp-stars_size_s">
                        <img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"><img
                          class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png">
                        <img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png"><img
                          class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png">
                        <img class="star" src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png">
                      </div>
                      <a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-review-summary__link"
                        data-spm-anchor-id="12anj4u.pdp_revamp.0.0">503rb+ Penilaian</a>
                    </div>
                  </div>
                </div>
                <div id="block-ztlO6gvyRIv" class="pdp-block pdp-block__share">
                  <div id="block--PRjoF98du4" class="pdp-block"
                    style="display: inline-block; width: 24px; height: 54px">
                    <div id="module_product_share_1" class="pdp-block module"></div>
                  </div>
                  <div id="block-7fC8S_Z8DDj" class="pdp-block" style="display: inline-block">
                    <div id="module_product_wishlist_1" class="pdp-block module">
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="module_product_brand_1" class="pdp-block module">
                <div class="pdp-product-brand">
                  <span class="pdp-product-brand__name">Merek<!-- -->:<!-- -->
                  </span>
                  <a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__brand-link" target="_self"
                    href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>"><?php echo $BRANDS ?></a>
                  <div class="pdp-product-brand__divider"></div>
                </div>
              </div>
              <p style="text-align: justify;">
                <a href="https://khushijewels.com/?plusplus=<?php echo $BRANDS ?>"><?php echo $BRANDS ?></a> adalah situs game online aman dan terpercaya di Asia yang menawarkan pengalaman bermain terbaik
            dengan layanan cepat dan profesional.
              </p>

              <div style="display: flex">
                <div style="width: 50%">
                  <div id="module_product_attrs" class="pdp-block module"></div>
                  <div id="block-cKVxLtoIbl2" class="pdp-block module"></div>
                  <div id="module_product_price_1" class="pdp-block module">
                    <div class="pdp-mod-product-price">
                      <div class="pdp-product-price" bis_skin_checked="1">
                        <span
                          class="notranslate pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl"
                          data-spm-anchor-id="12anj4u.pdp_revamp.0.i0.241073bdUG5ius">Rp 20.000</span>
                        <div class="origin-block" bis_skin_checked="1">
                          <span
                            class="notranslate pdp-price pdp-price_type_deleted pdp-price_color_lightgray pdp-price_size_xs">Rp
                            200.000</span><span class="pdp-product-price__discount">-90%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="width: 50%">
                  <div id="module_redmart_product_price" class="pdp-block module"></div>
                  <div id="module_promotion_tags" class="pdp-block module"></div>
                  <div id="module_installment" class="pdp-block module"></div>
                  <div id="module_quantity-input" class="pdp-block module">
                    <div class="pdp-mod-product-info-section sku-quantity-selection" bis_skin_checked="1">
                      <h6 class="section-title">Kuantitas</h6>
                      <div class="section-content" bis_skin_checked="1">
                        <div class="next-number-picker next-number-picker-inline" bis_skin_checked="1">
                          <div class="next-number-picker-handler-wrap" bis_skin_checked="1">
                            <a unselectable="unselectable"
                              class="next-number-picker-handler next-number-picker-handler-up">
                              <span unselectable="unselectable" class="next-number-picker-handler-up-inner"><i
                                  class="next-icon next-icon-add next-icon-medium"></i></span>
                            </a>
                            <a unselectable="unselectable"
                              class="next-number-picker-handler next-number-picker-handler-down next-number-picker-handler-down-disabled">
                              <span unselectable="unselectable" class="next-number-picker-handler-down-inner"><i
                                  class="next-icon next-icon-minus next-icon-medium"></i></span>
                            </a>
                          </div>
                          <div class="next-number-picker-input-wrap" bis_skin_checked="1">
                            <span class="next-input next-input-single next-input-medium next-number-picker-input">
                              <input min="1" max="5" step="1" autocomplete="off" type="text" height="100%" value="1">
                            </span>
                          </div>
                        </div>
                        <span class="quantity-content-default"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <style>
                .content h2,
                .content h3 {
                  text-align: center
                }

                .content p {
                  text-align: justify
                }

                .content li {
                  font-weight: bold;
                  list-style-type: decimal;
                  font-size: 15px
                }

                .cell2 {
                  margin-bottom: 1em
                }

                .cell2 li {
                  font-weight: normal;
                  font-size: 14px
                }

                .content a {
                  font-weight: bold;
                  color: #912200
                }

                .content a:hover {
                  color: #09f
                }
              </style>
              <div id="block-O-HF3LN4YVI" class="pdp-block pdp-block__delivery-seller">
                <div id="module_seller_delivery" class="pdp-block module">
                  <div data-spm="delivery_options" data-nosnippet="true"></div>
                </div>
                <div id="module_redmart_delivery" class="pdp-block module"></div>
                <div id="module_seller_warranty" class="pdp-block module"></div>
                <div id="module_guide_app" class="pdp-block module"></div>
                <div id="module_redmart_service" class="pdp-block module"></div>
                <div id="module_seller_info" class="pdp-block module">
                  <div class="seller-container" data-spm="seller">
                    <div class="seller-name">
                      <div class="seller-name__wrapper">
                        <div class="seller-name__title">Dijual oleh <?php echo $BRANDS ?></div>
                        <div class="seller-name__detail" data-spm="seller">
                          <a class="pdp-link pdp-link_size_l pdp-link_theme_black seller-name__detail-name"></a>
                        </div>
                      </div>
                    </div>
                    <div class="pdp-seller-info-pc"></div>
                  </div>
                </div>
                <div id="module_redmart_seller_info" class="pdp-block module"></div>
              </div>

              <script>var requirejs = { onNodeCreated: function (node, config, id, url) { node.setAttribute("crossorigin", "anonymous"); }, };</script>
              <script
                src="https://g.lazcdn.com/g/??mtb/lib-promise/3.1.3/polyfillB.js,mtb/lib-mtop/2.5.1/mtop.js,lazada-decorate/lazada-mod-lib/0.0.20/LazadaModLib.min.js"
                charset="utf-8"></script>
              <script
                src="https://g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js"></script>
              <script>function pdpLog(logkey, gmkey = "CLK", args = {}, chksum = "") { if (!logkey) return; var pdpMsiteExperimentEnable = window.__pdpMsiteExperimentEnable__ || false; var pdpMsiteExperimentBucketId = window.__pdpMsiteExperimentConfig__ ? window.__pdpMsiteExperimentConfig__.bucketId : "-"; var query = ""; if (Object.prototype.toString.call(args) === "[object Object]") { query = Object.keys(args).map(function (key) { return (encodeURIComponent(key) + "=" + encodeURIComponent(args[key])); }).join("&"); query = "&" + query; } var gokey = "pdpMsiteExperimentEnable=" + pdpMsiteExperimentEnable + "&pdpMsiteExperimentBucketId=" + pdpMsiteExperimentBucketId + query; if (window.goldlog && window.goldlog.record) { window.goldlog.record(logkey, gmkey, gokey, chksum); } else { window.goldlog_queue = window.goldlog_queue || []; window.goldlog_queue.push({ action: "goldlog.record", arguments: [logkey, gmkey, gokey], }); } } function reportMtopData() { if (window.__wpk && window.__pdpMtopStartTime) { window.__wpk.report({ category: 111, msg: "PDP CSR MTOP API Success Rate", w_succ: window.__pdpMtopStatus || 0, wl_avgv1: window.__pdpMtopEndTime ? window.__pdpMtopEndTime - window.__pdpMtopStartTime : 0, c1: window.__regionID__, }); } } function reportMtopData2() { if (window.__wpk && window.__pdpTriggerCSR) { window.__wpk.report({ category: 112, msg: "PDP CSR MTOP API Trigger Rate", w_succ: window.__pdpTriggerMtopStatus, c1: window.__regionID__, }); } } function reportMtopData3() { if (window.__wpk) { window.__wpk.report({ category: 113, msg: "PDP CSR Hydrate Success Rate", w_succ: window.__pdpHydrateStatus || 0, c1: window.__regionID__, }); } } function hydrate() { var modulePath = "https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js"; window.__pdpHydrateStatus = 0; require([modulePath], function (app) { try { console.log("start run..."); app.run(__moduleData__, function () { timings.render = Date.now(); pdpLog("/lazada_bounce_rendered", "EXP", { content: "pdp-m", }); window.__pdpHydrateStatus = 1; var loading = document.getElementById("pdp-skeleton-new"); if (loading) { loading.style.display = "none"; } reportMtopData3(); }); } catch (e) { console.error("render error", e); reportMtopData3(); if (window._blReport) { window._blReport("error", [e, { file: "page.html", },]); } } }); }</script>

              <!-- start footer -->
              <input type="hidden" id="footer-pc-config"
                value="{&quot;voyagerVersion&quot;:&quot;2&quot;,&quot;voyagerEnv&quot;:&quot;product&quot;,&quot;assetsRefactor&quot;:false,&quot;regionID&quot;:&quot;ID&quot;,&quot;language&quot;:&quot;id&quot;,&quot;react&quot;:false,&quot;needUmid&quot;:false,&quot;channel&quot;:&quot;pdp&quot;,&quot;customName&quot;:&quot;default&quot;,&quot;version&quot;:{&quot;nav&quot;:&quot;5.2.38&quot;,&quot;search&quot;:&quot;0.4.11&quot;,&quot;menu&quot;:&quot;5.0.45&quot;,&quot;menuNav&quot;:&quot;5.0.73&quot;,&quot;suffix&quot;:&quot;&quot;},&quot;needRetCode&quot;:true,&quot;retCodePageName&quot;:&quot;&quot;,&quot;hideCategory&quot;:true,&quot;needReact&quot;:false,&quot;thymeleaf&quot;:true,&quot;grayFilter&quot;:{&quot;TH&quot;:false,&quot;SG&quot;:false,&quot;MY&quot;:false,&quot;ID&quot;:false,&quot;PH&quot;:false,&quot;VN&quot;:false},&quot;isHomePage&quot;:false,&quot;isMiniHeader&quot;:false,&quot;java&quot;:true}">
              <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdmod/desktop-footer/6.1.1/??pc/index.css">
              <script>window.g_config = window.g_config || {}; window.g_config.loadedCss = window.g_config.loadedCss || []; window.g_config.loadedCss = ["@ali/lzdmod-desktop-footer/pc/index.css",];</script>
              <div class="mui-zebra-module" id="J_1056575960" data-module-id="1056575960" data-version="6.1.1"
                data-spm="1056575960">
                <script type="text/data" class="J-dynamic-data"></script>
                <section class="desktop-footer" data-mod-name="@ali/lzdmod-desktop-footer/pc/index" data-config="{}">
                  <div class="footer-first">
                    <div class="lzd-footer-inner" data-spm="footer_top">
                      <div class="lzd-footer-width-25">
                        <h3 class="footer-title">Layanan Pelanggan</h3>
                        <ul class="footer-list">
                          <li class="footer-li">
                            <a href="https://www.lazada.co.id/helpcenter/">Pusat Bantuan</a>
                          </li>
                          <li class="footer-li">
                            <a href="https://www.lazada.co.id/helpcenter/payments/">Cara
                              Pembelian</a>
                          </li>
                          <li class="footer-li">
                            <a href="https://www.lazada.co.id/helpcenter/shipping-and-delivery/">Pengiriman</a>
                          </li>
                          <li class="footer-li">
                            <a
                              href="https://www.lazada.co.id/helpcenter/products-on-lazada/#answer-faq-internationalproduct-ans">Kebijakan
                              Produk Internasional</a>
                          </li>
                          <li class="footer-li">
                            <a href="https://www.lazada.co.id/helpcenter/returns-refunds/#answer-faq-return-ans">Cara
                              Pengembalian</a>
                          </li>
                          <li class="--js-csc-trigger">
                            <a style="
                                  background: #f36f36;
                                  display: inline-block;
                                  color: #0f136d;
                                  padding: 2px 4px;
                                  cursor: pointer;
                                ">Ada pertanyaan? Hubungi kami di live chat (24
                              Jam)</a>
                          </li>
                        </ul>
                      </div>
                      <div class="lzd-footer-width-25">
                        <h3 class="footer-title">Jelajahi Lazada</h3>
                        <ul class="footer-list">
                          <li class="footer-li">
                            <a href="//group.lazada.com/en/about/">Tentang Lazada</a>
                          </li>
                          <li class="footer-li">
                            <a
                              href="//pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/partnership/AffiliatesID">
                              Afﬁliate Program
                            </a>
                          </li>
                          <li class="footer-li">
                            <a href="//www.lazada.com/work-at-lazada/">Karir</a>
                          </li>
                          <li class="footer-li">
                            <a
                              href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/terms-of-use">
                              Syarat &amp; Ketentuan
                            </a>
                          </li>
                          <li class="footer-li">
                            <a
                              href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/PrivacyPolicy">
                              Kebijakan Privasi
                            </a>
                          </li>
                          <li class="footer-li">
                            <a href="//group.lazada.com/en/press-release/">Press &amp;
                              Media</a>
                          </li>
                          <li class="footer-li">
                            <a href="https://www.lazada.co.id/marketplace/">Jual Di
                              Lazada</a>
                          </li>
                          <li class="footer-li">
                            <a href="https://www.lazada.co.id/security/">Lazada Security</a>
                          </li>
                          <li class="footer-li">
                            <a
                              href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/ipr-policy">
                              Intellectual Property Protection
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="lzd-footer-width-50">
                        <div class="lzd-footer-app-downloads">
                          <div class="lzd-footer-appIcon pull-left logo icon-logo-lazada-footer">
                          </div>
                          <div class="pull-left lzd-app-download-text">
                            <div class="title">Go where your heart beats</div>
                            <div class="text">Download the App</div>
                          </div>
                          <div class="pull-left" style="width: 290px">
                            <a class="lzd-footer-sprit pull-left icon-appStore-footer icon-appstore-footer"
                              href="https://bit.ly/lazada-ios-app"></a>
                            <a class="lzd-footer-sprit pull-left icon-android-footer icon-appstore-footer"
                              href="https://bit.ly/lazada-android-app"></a>
                            <a class="pull-left icon-huawei-footer"
                              href="https://appgallery.huawei.com/#/app/C100164557"></a>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-second">
                    <div class="lzd-footer-inner">
                      <div class="lzd-footer-width-32">
                        <h3 class="lzd-footer-h3">Metode Pembayaran</h3>
                        <span class="lzd-icon-payment lzd-footer-sprit"
                          style="background-position: -768px -768px"></span>
                        <span class="lzd-icon-payment lzd-footer-sprit"
                          style="background-position: -329px -768px"></span>
                        <span class="lzd-icon-payment lzd-footer-sprit"
                          style="background-position: -209px -829px"></span>
                      </div>
                      <div class="lzd-footer-width-32 lzd-footer-spacing">
                        <h3 class="lzd-footer-h3">Jasa Pengiriman</h3>
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01RNizk522j2cPtaRjc_!!6000000007155-2-tps-96-70.png"
                          alt="Lazada Logistics" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01Y8JAuA1pB4EhCiF0K_!!6000000005321-2-tps-96-70.png"
                          alt="JNE" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01qvF2hw1lWoZrnGZev_!!6000000004827-2-tps-96-70.png"
                          alt="Ninja Express" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01DGonqR1H5qmpBI2hf_!!6000000000707-2-tps-96-70.png"
                          alt="GoSend" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i2/O1CN01ENOAXK1UR05CB9iwA_!!6000000002513-2-tps-96-70.png"
                          alt="Sicepat" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01mFypLB1jt8eRUFBC0_!!6000000004605-2-tps-96-70.png"
                          alt="Grab Parcel" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN011Ya3Kg1OSw3sg81tm_!!6000000001705-2-tps-96-70.png"
                          alt="J &amp; T" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN019tUhkL1abQnOURPrd_!!6000000003348-2-tps-96-70.png"
                          alt="anter" style="height: 70px; width: 96px">
                        <img class="lzd-icon-delivery"
                          src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01uOZizA1UOFhot1z5u_!!6000000002507-2-tps-96-70.png"
                          alt="SAP" style="height: 70px; width: 96px">
                      </div>
                      <div class="lzd-footer-width-32">
                        <h3 class="lzd-footer-h3">Verified by</h3>
                        <div class="pull-left">
                          <a href="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01bvSldX1gkULXWGauo_!!6000000004180-2-tps-1190-1683.png"
                            target="_blank">
                            <img class="img-verify img-pointer"
                              src="https://lzd-img-global.slatic.net/g/tps/tfs/TB1lbmoqYr1gK0jSZR0XXbP8XXa-340-200.png"
                              alt="ISO" style="height: 60px">
                          </a>
                        </div>
                        <div class="pull-left">
                          <a href="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01dinKMe26jjo1yfe9j_!!6000000007698-0-tps-2480-3509.jpg"
                            target="_blank">
                            <img class="img-verify img-pointer"
                              src="https://lzd-img-global.slatic.net/g/tps/tfs/TB1jyJMv.H1gK0jSZSyXXXtlpXa-184-120.png"
                              alt="PCI DSS" style="height: 60px">
                          </a>
                        </div>
                        <div class="pull-left"></div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-fourth">
                    <div class="lzd-footer-inner">
                      <div class="lzd-footer-width-50" data-spm="venture">
                        <h3 class="lzd-footer-title">
                          Lazada Southeast Asia Indonesia
                        </h3>
                        <a class="lzd-footer-sprit lzd-footer-country country-id" href="https://www.lazada.co.id"></a>
                        <a class="lzd-footer-sprit lzd-footer-country country-my" href="https://www.lazada.com.my"></a>
                        <a class="lzd-footer-sprit lzd-footer-country country-ph" href="https://www.lazada.com.ph"></a>
                        <a class="lzd-footer-sprit lzd-footer-country country-sg" href="https://www.lazada.sg"></a>
                        <a class="lzd-footer-sprit lzd-footer-country country-th" href="https://www.lazada.co.th"></a>
                        <a class="lzd-footer-sprit lzd-footer-country country-vn" href="https://www.lazada.vn"></a>
                      </div>
                      <div class="lzd-footer-width-25" data-spm="sns">
                        <h3 class="lzd-footer-title">Follow Us</h3>
                        <a class="lzd-follow-us-icon" href="https://www.facebook.com/LazadaIndonesia"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_fbk" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01Wdetn224xMIRNihao_!!6000000007457-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="fb">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://www.linkedin.com/company/lazada/"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_lnk" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01D6oQr31GPG1ONK9jd_!!6000000000614-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="linkin">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://www.youtube.com/@LazadaIndonesia"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_ytb" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01zt1zOu1zsFnzoIWje_!!6000000006769-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="yt">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://www.pinterest.com/lazadaid/"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_pnt" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i2/O1CN01b9cK511pjsP40xyAX_!!6000000005397-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="pnt">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://www.instagram.com/lazada_id/"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_ins" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN011gka8L1E0PIZlHK7e_!!6000000000289-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="ins">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://twitter.com/LazadaID"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_twr" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01bSHOIg1O2N9lO20XK_!!6000000001647-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="tw">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://www.tiktok.com/@lazadaid"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_tkk" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN0193C9ay1QIykTmUlwk_!!6000000001954-2-tps-34-34.png"
                            style="width: 32px; height: 32px" alt="tiktok">
                        </a>
                        <a class="lzd-follow-us-icon" href="https://www.lazada.co.id/blog/"
                          data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_blg" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                          <img
                            src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01EShTwh1uKIMLn9AjA_!!6000000006018-0-tps-34-34.jpg"
                            style="width: 32px; height: 32px" alt="Lazada Blg">
                        </a>
                      </div>
                      <div class="lzd-footer-width-25">
                        <div class="lzd-footer-copyright">© Lazada 2025</div>
                      </div>
                    </div>
                  </div>
                </section>
                <div id="webim-container"
                  onclick="javascript:goldlog.record('/lazada.IM.im-msgbox','CLK','platform=desktop&amp;pagename='+ window.LZD_RETCODE_PAGENAME || 'other','GET')">
                </div>
                <script>var imCssLink = "https://g.lazcdn.com/g/lzdmod/im/5.0.103/index.css"; var gConfig = window.g_config || {};</script>
                <style>
                  .m-common-more .link-lazada-ic-Message {
                    display: none
                  }
                </style>
              </div>
              <script
                src="https://g.lazcdn.com/g/??mui/feloader/5.0.0/feloader-min.js,lzdmod/site-nav-pc/5.2.38/pc/index.js,lzdmod/jquery/5.0.9/index.js,lzdmod/site-nav-pc/5.2.38/assets/links-bar/index.js,lzdmod/common-info/5.0.30/index.js,lzdmod/site-nav-pc/5.2.38/assets/reqwest/index.js,lzdmod/site-nav-pc/5.2.38/assets/common/popper/index.js,lzdmod/site-nav-pc/5.2.38/assets/cart/index.js,lzdmod/site-nav-pc/5.2.38/assets/download-app/index.js,lzdmod/site-nav-pc/5.2.38/i18n.js,lzdmod/site-nav-pc/5.2.38/assets/track-order/index.js,lzdmod/site-nav-pc/5.2.38/assets/switch-lang/index.js,lzdmod/site-nav-pc/5.2.38/assets/user-info/index.js,lzdmod/site-nav-pc/5.2.38/assets/affiliate/index.js,lzdmod/site-nav-pc/5.2.38/assets/logo-bar/index.js,lzdmod/site-nav-pc/5.2.38/assets/search-box/index.js,lzdmod/site-nav-pc/5.2.38/assets/liveup/index.js,lzdmod/site-menu-pc/5.0.45/pc/index.js,lzdmod/site-menu-nav-pc/5.0.73/pc/index.js,lzdmod/desktop-footer/6.1.1/pc/index.js,lzdmod/desktop-footer/6.1.1/pc/reqwest/index.js"></script>
              <script>(function (S) { window.g_config = window.g_config || {}; S.config(window.g_config.seed); S.config("combine", true); feloader.noConflict(); })(feloader);</script>
              <script>feloader.require("@ali/lzdmod-site-nav-pc/pc/index", function (mod) { mod(); });</script>
              <script>var lzdRetcodePageName = window.LZD_RETCODE_PAGENAME || "" || location.pathname; if (window.LZD_ROUTER_POSTFIX) { if (lzdRetcodePageName.indexOf(window.LZD_ROUTER_POSTFIX) === -1) { lzdRetcodePageName = lzdRetcodePageName + window.LZD_ROUTER_POSTFIX; } } var lzdRetcodePid = window.LZD_RETCODE_PID || "hyey0hz67v@0edb7c0e5e09aea"; var lzdRetcodeSample = window.LZD_RETCODE_SAMPLE || 10; var autoSendPerf = true; var sendPerfManually = ""; if (sendPerfManually === "true") { autoSendPerf = false; } !(function (c, b, d, a) { c[a] || (c[a] = {}), (c[a].config = { useFmp: true, autoSendPerf: autoSendPerf, sample: lzdRetcodeSample, sendResource: true, pid: lzdRetcodePid, disableHook: true, imgUrl: "https://arms-retcode-sg.aliyuncs.com/r.png?", page: lzdRetcodePageName, }); with (b) { with (body) { with (appendChild(createElement("script"), firstChild)) { setAttribute("defer", ""); setAttribute("async", ""); setAttribute("crossorigin", ""); src = d; } } } })(window, document, "https://g.lazcdn.com/g/retcode/cloud-sdk/bl.js", "__bl");</script>
              <div th:if="${script} ne null and ${script.umid} ne null and ${script.umid} eq true"></div>
              <script src="//aeis.alicdn.com/sd/ncpc/nc.js?t=18507" defer="" async=""></script>
              <script>(function () { try { var webVitalsScript = document.createElement("script"); webVitalsScript.src = "https:https://g.lazcdn.com/g/lzd/assets/1.2.10/web-vitals/3.4.0/index.js"; webVitalsScript.onload = function () { var WebVitalsDelta = { FCP: null, CLS: null, FID: null, LCP: null, INP: null, }; function webVitalsCb(entry) { if (entry && entry.name && entry.delta) { WebVitalsDelta[entry.name] = entry.delta; if (entry.name === "INP") { webVitalsSingleReport(entry); } else if (window.requestIdleCallback) { window.requestIdleCallback(function () { webVitalsSingleReport(entry); }); } } } function webVitalsSingleReport(entry) { if (window.__wpk && window.__wpk.report) { var name = (entry && entry.name) || ""; var delta = (entry && entry.delta) || ""; const categories = { FCP: 101, CLS: 103, FID: 104, LCP: 102, INP: 119, }; window.__wpk.report({ category: categories[name], msg: window.location.host, wl_avgv1: delta, bl1: entry && Object.prototype.toString.call(entry) === "[object Object]" ? JSON.stringify(entry) : "", c1: (entry && entry.rating) || "", }); } } window.webVitals.getFCP(webVitalsCb); window.webVitals.getCLS(webVitalsCb); window.webVitals.getFID(webVitalsCb); window.webVitals.getLCP(webVitalsCb); window.webVitals.getINP(webVitalsCb); }; function report() { var fsp = null; var csr = null; if (timings.start && timings.render) { if (timings.ssr) { fsp = timings.ssr - timings.start; csr = timings.render - timings.ssr; } else { fsp = timings.render - timings.start; } } if (fsp && window.__wpk && window.__wpk.report) { __wpk.report({ category: 105, msg: window.location.host, wl_avgv1: fsp, wl_avgv2: csr || 0, c1: window.__hasSSR__ ? 1 : 0, }); } } document.addEventListener("DOMContentLoaded", function () { if (window.timings) { if (window.timings.render) { report(); } else { setTimeout(function () { report(); }, 3000); } } }); } catch (err) { console.log(err && err.message); } })();</script>
              <script>if (window.baxiaCommon) { baxiaCommon.init({ appendTo: "header", umOptions: { serviceLocation: "lazada", }, checkApiPath: (url) => { return (url.indexOf("mtop.lazada.promotion.voucher.spread") > -1); }, }); }</script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script defer="" async="" crossorigin="" src="https://g.lazcdn.com/g/retcode/cloud-sdk/bl.js"></script>
  <style>
    .fixed-footer {
      display: flex;
      justify-content: space-around;
      position: fixed;
      background: linear-gradient(to bottom, #001032 0%, #001032 50%, #001032 100%);
      padding: 5px 0;
      box-shadow: 0 0 8px 4px #ff00b2;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 99
    }

    .fixed-footer a {
      flex-basis: calc((100% - 15px*6)/ 5);
      text-decoration: none;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      max-width: 75px;
      font-size: 12px;
      font-family: Ubuntu, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    }

    .fixed-footer a:hover {
      font-weight: bold
    }

    .fixed-footer .center {
      transform: scale(1.5) translateY(-5px);
      background: center no-repeat;
      background-size: contain;
      background-color: inherit;
      border-radius: 50%
    }

    .fixed-footer img {
      max-width: 20px;
      margin-bottom: 0;
      max-height: 20px
    }
  </style>
  <div class="fixed-footer">

    <a href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>" rel="nofollow noopener" target="_blank">
      <img layout="intrinsic" height="20px" width="20px"
        src="https://res.cloudinary.com/dsmgkmvwo/image/upload/v1717411649/ICON_LOGIN_ytme0w.png" alt="LOGIN">LOGIN</a>

    <a href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>" rel="nofollow noopener" target="_blank">
      <img layout="intrinsic" height="20px" width="20px"
        src="https://res.cloudinary.com/dsmgkmvwo/image/upload/v1717411649/ICON_DAFTAR_pwjmxm.png"
        alt="DAFTAR">DAFTAR</a>

    <a href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>" rel="nofollow noopener" target="_blank">
      <img layout="intrinsic" height="20px" width="20px"
        src="https://res.cloudinary.com/dsmgkmvwo/image/upload/v1717411649/ICON_LOGIN_ytme0w.png"
        alt="WHATSAPP">WHATSAPP</a>

    <a href="https://miniso888.com/?plusplus=<?php echo $BRANDS ?>" rel="nofollow noopener" target="_blank">
      <img layout="intrinsic" height="20px" width="20px"
        src="https://res.cloudinary.com/dprkgulb9/image/upload/v1748800013/favarista_bda6bf.png"
        alt="LIVECHAT">LIVECHAT</a>
  </div>
</body>

</html>
