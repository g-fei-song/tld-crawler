<?php

$gTLD = "(?:abogado|academy|accountants|active|actor|adult|aero|agency|airforce|allfinanz|alsace|amsterdam|android|aquarelle|archi|army|arpa|asia|associates|attorney|auction|audio|autos|axa|band|bank|bar|barclaycard|barclays|bargains|bayern|beer|berlin|best|bid|bike|bingo|bio|biz|black|blackfriday|bloomberg|blue|bmw|bnpparibas|boo|boutique|brussels|budapest|build|builders|business|buzz|bzh|cab|cal|camera|camp|cancerresearch|capetown|capital|caravan|cards|care|career|careers|cartier|casa|cash|cat|catering|center|ceo|cern|channel|chat|cheap|christmas|chrome|church|citic|city|claims|cleaning|click|clinic|clothing|club|coach|codes|coffee|college|cologne|com|community|company|computer|condos|construction|consulting|contractors|cooking|cool|coop|country|credit|creditcard|cricket|crs|cruises|cuisinella|cymru|dabur|dad|dance|dating|day|dclk|deals|degree|delivery|democrat|dental|dentist|desi|design|dev|diamonds|diet|digital|direct|directory|discount|dnp|docs|domains|doosan|durban|dvag|eat|edu|education|email|emerck|energy|engineer|engineering|enterprises|equipment|esq|estate|eurovision|eus|events|everbank|exchange|expert|exposed|fail|farm|fashion|feedback|finance|financial|firmdale|fish|fishing|fit|fitness|flights|florist|flowers|flsmidth|fly|foo|forsale|foundation|frl|frogans|fund|furniture|futbol|gal|gallery|garden|gbiz|gent|ggee|gift|gifts|gives|glass|gle|global|globo|gmail|gmo|gmx|goog|google|gop|gov|graphics|gratis|green|gripe|guide|guitars|guru|hamburg|hangout|haus|healthcare|help|here|hermes|hiphop|hiv|holdings|holiday|homes|horse|host|hosting|house|how|ibm|ifm|immo|immobilien|industries|info|ing|ink|institute|insure|int|international|investments|irish|iwc|jcb|jetzt|jobs|joburg|juegos|kaufen|kddi|kim|kitchen|kiwi|koeln|krd|kred|kyoto|lacaixa|land|lat|latrobe|lawyer|lds|lease|legal|lgbt|lidl|life|lighting|limited|limo|link|loans|london|lotte|lotto|ltda|luxe|luxury|madrid|maison|management|mango|market|marketing|marriott|media|meet|melbourne|meme|memorial|menu|miami|mil|mini|mobi|moda|moe|monash|money|mormon|mortgage|moscow|motorcycles|mov|museum|nagoya|name|navy|net|network|neustar|new|nexus|ngo|nhk|ninja|nra|nrw|ntt|nyc|okinawa|one|ong|onl|ooo|org|organic|osaka|otsuka|ovh|paris|partners|parts|party|pharmacy|photo|photography|photos|physio|pics|pictures|pink|pizza|place|plumbing|pohl|poker|porn|post|praxi|press|pro|prod|productions|prof|properties|property|pub|qpon|quebec|realtor|recipes|red|rehab|reise|reisen|reit|ren|rentals|repair|report|republican|rest|restaurant|reviews|rich|rio|rip|rocks|rodeo|rsvp|ruhr|ryukyu|saarland|sale|samsung|sarl|sca|scb|schmidt|schule|schwarz|science|scot|services|sew|sexy|shiksha|shoes|shriram|singles|sky|social|software|sohu|solar|solutions|soy|space|spiegel|style|supplies|supply|support|surf|surgery|suzuki|sydney|systems|taipei|tatar|tattoo|tax|technology|tel|temasek|tennis|tienda|tips|tires|tirol|today|tokyo|tools|top|town|toys|trade|training|travel|trust|tui|university|uno|uol|vacations|vegas|ventures|versicherung|vet|viajes|video|villas|vision|vlaanderen|vodka|vote|voting|voto|voyage|wales|wang|watch|webcam|website|wed|wedding|whoswho|wien|wiki|williamhill|wme|work|works|world|wtc|wtf|xxx|xyz|yachts|yandex|yoga|yokohama|youtube|zip|zone|zuerich)";
$ccTLD = "(?:ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bl|bm|bn|bo|bq|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cw|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mf|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|ss|st|su|sv|sx|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|za|zm|zw)";
$gTLD_IDN = "(?:测试|परीक्षा|佛山|集团|在线|八卦|موقع|公益|公司|移动|我爱你|москва|испытание|онлайн|сайт|테스트|淡马锡|орг|삼성|商标|商店|商城|дети|טעסט|中文网|中信|谷歌|測試|آزمایشی|பரிட்சை|网店|संगठन|网络|δοκιμή|إختبار|手机|بازار|شبكة|机构|组织机构|рус|みんな|グーグル|世界|网址|游戏|vermögensberater|vermögensberatung|企业|广东|テスト|政务)";
$ccTLD_IDN = "(?:한국|ভারত|বাংলা|қаз|срб|бел|சிங்கப்பூர்|мкд|中国|中國|భారత్|ලංකා|ભારત|भारत|укр|香港|台湾|台灣|мон|الجزائر|عمان|ایران|امارات|پاکستان|الاردن|بھارت|المغرب|السعودية|سودان|عراق|مليسيا|გე|ไทย|سورية|рф|تونس|ਭਾਰਤ|مصر|قطر|இலங்கை|இந்தியா|հայ|新加坡|فلسطين)";
