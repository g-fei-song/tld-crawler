<?php

$gTLD = "(?:)";
$ccTLD = "(?:)";
$gTLD_IDN = "(?:
            
            .aaa|
            
            .aarp|
            
            .abb|
            
            .abbott|
            
            .abogado|
            
            .academy|
            
            .accenture|
            
            .accountant|
            
            .accountants|
            
            .aco|
            
            .active|
            
            .actor|
            
            .ads|
            
            .adult|
            
            .aeg|
            
            .aero|
            
            .afl|
            
            .agency|
            
            .aig|
            
            .airforce|
            
            .airtel|
            
            .allfinanz|
            
            .alsace|
            
            .amica|
            
            .amsterdam|
            
            .android|
            
            .apartments|
            
            .app|
            
            .apple|
            
            .aquarelle|
            
            .aramco|
            
            .archi|
            
            .army|
            
            .arpa|
            
            .arte|
            
            .asia|
            
            .associates|
            
            .attorney|
            
            .auction|
            
            .audi|
            
            .audio|
            
            .author|
            
            .auto|
            
            .autos|
            
            .axa|
            
            .azure|
            
            .band|
            
            .bank|
            
            .bar|
            
            .barcelona|
            
            .barclaycard|
            
            .barclays|
            
            .bargains|
            
            .bauhaus|
            
            .bayern|
            
            .bbc|
            
            .bbva|
            
            .bcn|
            
            .beats|
            
            .beer|
            
            .bentley|
            
            .berlin|
            
            .best|
            
            .bet|
            
            .bharti|
            
            .bible|
            
            .bid|
            
            .bike|
            
            .bing|
            
            .bingo|
            
            .bio|
            
            .biz|
            
            .black|
            
            .blackfriday|
            
            .bloomberg|
            
            .blue|
            
            .bms|
            
            .bmw|
            
            .bnl|
            
            .bnpparibas|
            
            .boats|
            
            .boehringer|
            
            .bom|
            
            .bond|
            
            .boo|
            
            .book|
            
            .boots|
            
            .bostik|
            
            .bot|
            
            .boutique|
            
            .bradesco|
            
            .bridgestone|
            
            .broadway|
            
            .broker|
            
            .brother|
            
            .brussels|
            
            .budapest|
            
            .bugatti|
            
            .build|
            
            .builders|
            
            .business|
            
            .buy|
            
            .buzz|
            
            .bzh|
            
            .cab|
            
            .cafe|
            
            .cal|
            
            .call|
            
            .camera|
            
            .camp|
            
            .cancerresearch|
            
            .canon|
            
            .capetown|
            
            .capital|
            
            .car|
            
            .caravan|
            
            .cards|
            
            .care|
            
            .career|
            
            .careers|
            
            .cars|
            
            .cartier|
            
            .casa|
            
            .cash|
            
            .casino|
            
            .cat|
            
            .catering|
            
            .cba|
            
            .cbn|
            
            .ceb|
            
            .center|
            
            .ceo|
            
            .cern|
            
            .cfa|
            
            .cfd|
            
            .chanel|
            
            .channel|
            
            .chat|
            
            .cheap|
            
            .chloe|
            
            .christmas|
            
            .chrome|
            
            .church|
            
            .cipriani|
            
            .circle|
            
            .cisco|
            
            .citic|
            
            .city|
            
            .cityeats|
            
            .claims|
            
            .cleaning|
            
            .click|
            
            .clinic|
            
            .clothing|
            
            .cloud|
            
            .club|
            
            .clubmed|
            
            .coach|
            
            .codes|
            
            .coffee|
            
            .college|
            
            .cologne|
            
            .com|
            
            .commbank|
            
            .community|
            
            .company|
            
            .computer|
            
            .comsec|
            
            .condos|
            
            .construction|
            
            .consulting|
            
            .contractors|
            
            .cooking|
            
            .cool|
            
            .coop|
            
            .corsica|
            
            .country|
            
            .coupons|
            
            .courses|
            
            .credit|
            
            .creditcard|
            
            .creditunion|
            
            .cricket|
            
            .crown|
            
            .crs|
            
            .cruises|
            
            .csc|
            
            .cuisinella|
            
            .cymru|
            
            .cyou|
            
            .dabur|
            
            .dad|
            
            .dance|
            
            .date|
            
            .dating|
            
            .datsun|
            
            .day|
            
            .dclk|
            
            .deals|
            
            .degree|
            
            .delivery|
            
            .dell|
            
            .delta|
            
            .democrat|
            
            .dental|
            
            .dentist|
            
            .desi|
            
            .design|
            
            .dev|
            
            .diamonds|
            
            .diet|
            
            .digital|
            
            .direct|
            
            .directory|
            
            .discount|
            
            .dnp|
            
            .docs|
            
            .dog|
            
            .doha|
            
            .domains|
            
            .doosan|
            
            .download|
            
            .drive|
            
            .durban|
            
            .dvag|
            
            .earth|
            
            .eat|
            
            .edu|
            
            .education|
            
            .email|
            
            .emerck|
            
            .energy|
            
            .engineer|
            
            .engineering|
            
            .enterprises|
            
            .epson|
            
            .equipment|
            
            .erni|
            
            .esq|
            
            .estate|
            
            .eurovision|
            
            .eus|
            
            .events|
            
            .everbank|
            
            .exchange|
            
            .expert|
            
            .exposed|
            
            .express|
            
            .fage|
            
            .fail|
            
            .fairwinds|
            
            .faith|
            
            .family|
            
            .fan|
            
            .fans|
            
            .farm|
            
            .fashion|
            
            .fast|
            
            .feedback|
            
            .ferrero|
            
            .film|
            
            .final|
            
            .finance|
            
            .financial|
            
            .firestone|
            
            .firmdale|
            
            .fish|
            
            .fishing|
            
            .fit|
            
            .fitness|
            
            .flights|
            
            .florist|
            
            .flowers|
            
            .flsmidth|
            
            .fly|
            
            .foo|
            
            .football|
            
            .forex|
            
            .forsale|
            
            .forum|
            
            .foundation|
            
            .frl|
            
            .frogans|
            
            .fund|
            
            .furniture|
            
            .futbol|
            
            .fyi|
            
            .gal|
            
            .gallery|
            
            .game|
            
            .garden|
            
            .gbiz|
            
            .gdn|
            
            .gea|
            
            .gent|
            
            .genting|
            
            .ggee|
            
            .gift|
            
            .gifts|
            
            .gives|
            
            .giving|
            
            .glass|
            
            .gle|
            
            .global|
            
            .globo|
            
            .gmail|
            
            .gmo|
            
            .gmx|
            
            .gold|
            
            .goldpoint|
            
            .golf|
            
            .goo|
            
            .goog|
            
            .google|
            
            .gop|
            
            .got|
            
            .gov|
            
            .grainger|
            
            .graphics|
            
            .gratis|
            
            .green|
            
            .gripe|
            
            .group|
            
            .gucci|
            
            .guge|
            
            .guide|
            
            .guitars|
            
            .guru|
            
            .hamburg|
            
            .hangout|
            
            .haus|
            
            .healthcare|
            
            .help|
            
            .here|
            
            .hermes|
            
            .hiphop|
            
            .hitachi|
            
            .hiv|
            
            .hockey|
            
            .holdings|
            
            .holiday|
            
            .homedepot|
            
            .homes|
            
            .honda|
            
            .horse|
            
            .host|
            
            .hosting|
            
            .hoteles|
            
            .hotmail|
            
            .house|
            
            .how|
            
            .hsbc|
            
            .hyundai|
            
            .ibm|
            
            .icbc|
            
            .ice|
            
            .icu|
            
            .ifm|
            
            .iinet|
            
            .immo|
            
            .immobilien|
            
            .industries|
            
            .infiniti|
            
            .info|
            
            .ing|
            
            .ink|
            
            .institute|
            
            .insurance|
            
            .insure|
            
            .int|
            
            .international|
            
            .investments|
            
            .ipiranga|
            
            .irish|
            
            .ist|
            
            .istanbul|
            
            .itau|
            
            .iwc|
            
            .jaguar|
            
            .java|
            
            .jcb|
            
            .jetzt|
            
            .jewelry|
            
            .jlc|
            
            .jll|
            
            .jobs|
            
            .joburg|
            
            .jot|
            
            .joy|
            
            .jprs|
            
            .juegos|
            
            .kaufen|
            
            .kddi|
            
            .kia|
            
            .kim|
            
            .kinder|
            
            .kitchen|
            
            .kiwi|
            
            .koeln|
            
            .komatsu|
            
            .krd|
            
            .kred|
            
            .kyoto|
            
            .lacaixa|
            
            .lamborghini|
            
            .lancaster|
            
            .land|
            
            .landrover|
            
            .lasalle|
            
            .lat|
            
            .latrobe|
            
            .law|
            
            .lawyer|
            
            .lds|
            
            .lease|
            
            .leclerc|
            
            .legal|
            
            .lexus|
            
            .lgbt|
            
            .liaison|
            
            .lidl|
            
            .life|
            
            .lifestyle|
            
            .lighting|
            
            .like|
            
            .limited|
            
            .limo|
            
            .linde|
            
            .link|
            
            .live|
            
            .lixil|
            
            .loan|
            
            .loans|
            
            .lol|
            
            .london|
            
            .lotte|
            
            .lotto|
            
            .love|
            
            .ltd|
            
            .ltda|
            
            .lupin|
            
            .luxe|
            
            .luxury|
            
            .madrid|
            
            .maif|
            
            .maison|
            
            .man|
            
            .management|
            
            .mango|
            
            .market|
            
            .marketing|
            
            .markets|
            
            .marriott|
            
            .mba|
            
            .med|
            
            .media|
            
            .meet|
            
            .melbourne|
            
            .meme|
            
            .memorial|
            
            .men|
            
            .menu|
            
            .meo|
            
            .miami|
            
            .microsoft|
            
            .mil|
            
            .mini|
            
            .mma|
            
            .mobi|
            
            .moda|
            
            .moe|
            
            .moi|
            
            .mom|
            
            .monash|
            
            .money|
            
            .montblanc|
            
            .mormon|
            
            .mortgage|
            
            .moscow|
            
            .motorcycles|
            
            .mov|
            
            .movie|
            
            .movistar|
            
            .mtn|
            
            .mtpc|
            
            .mtr|
            
            .museum|
            
            .mutuelle|
            
            .nadex|
            
            .nagoya|
            
            .name|
            
            .navy|
            
            .nec|
            
            .net|
            
            .netbank|
            
            .network|
            
            .neustar|
            
            .new|
            
            .news|
            
            .nexus|
            
            .ngo|
            
            .nhk|
            
            .nico|
            
            .ninja|
            
            .nissan|
            
            .nokia|
            
            .norton|
            
            .nowruz|
            
            .nra|
            
            .nrw|
            
            .ntt|
            
            .nyc|
            
            .obi|
            
            .office|
            
            .okinawa|
            
            .omega|
            
            .one|
            
            .ong|
            
            .onl|
            
            .online|
            
            .ooo|
            
            .oracle|
            
            .orange|
            
            .org|
            
            .organic|
            
            .osaka|
            
            .otsuka|
            
            .ovh|
            
            .page|
            
            .panerai|
            
            .paris|
            
            .pars|
            
            .partners|
            
            .parts|
            
            .party|
            
            .pet|
            
            .pharmacy|
            
            .philips|
            
            .photo|
            
            .photography|
            
            .photos|
            
            .physio|
            
            .piaget|
            
            .pics|
            
            .pictet|
            
            .pictures|
            
            .pin|
            
            .ping|
            
            .pink|
            
            .pizza|
            
            .place|
            
            .play|
            
            .playstation|
            
            .plumbing|
            
            .plus|
            
            .pohl|
            
            .poker|
            
            .porn|
            
            .post|
            
            .praxi|
            
            .press|
            
            .pro|
            
            .prod|
            
            .productions|
            
            .prof|
            
            .properties|
            
            .property|
            
            .protection|
            
            .pub|
            
            .qpon|
            
            .quebec|
            
            .racing|
            
            .read|
            
            .realtor|
            
            .realty|
            
            .recipes|
            
            .red|
            
            .redstone|
            
            .redumbrella|
            
            .rehab|
            
            .reise|
            
            .reisen|
            
            .reit|
            
            .ren|
            
            .rent|
            
            .rentals|
            
            .repair|
            
            .report|
            
            .republican|
            
            .rest|
            
            .restaurant|
            
            .review|
            
            .reviews|
            
            .rich|
            
            .ricoh|
            
            .rio|
            
            .rip|
            
            .rocher|
            
            .rocks|
            
            .rodeo|
            
            .room|
            
            .rsvp|
            
            .ruhr|
            
            .run|
            
            .rwe|
            
            .ryukyu|
            
            .saarland|
            
            .safe|
            
            .sakura|
            
            .sale|
            
            .salon|
            
            .samsung|
            
            .sandvik|
            
            .sandvikcoromant|
            
            .sanofi|
            
            .sap|
            
            .sapo|
            
            .sarl|
            
            .saxo|
            
            .sbs|
            
            .sca|
            
            .scb|
            
            .schmidt|
            
            .scholarships|
            
            .school|
            
            .schule|
            
            .schwarz|
            
            .science|
            
            .scor|
            
            .scot|
            
            .seat|
            
            .security|
            
            .seek|
            
            .sener|
            
            .services|
            
            .seven|
            
            .sew|
            
            .sex|
            
            .sexy|
            
            .sfr|
            
            .sharp|
            
            .shell|
            
            .shia|
            
            .shiksha|
            
            .shoes|
            
            .show|
            
            .shriram|
            
            .singles|
            
            .site|
            
            .ski|
            
            .sky|
            
            .skype|
            
            .smile|
            
            .sncf|
            
            .soccer|
            
            .social|
            
            .software|
            
            .sohu|
            
            .solar|
            
            .solutions|
            
            .sony|
            
            .soy|
            
            .space|
            
            .spiegel|
            
            .spreadbetting|
            
            .srl|
            
            .stada|
            
            .starhub|
            
            .statoil|
            
            .stc|
            
            .stcgroup|
            
            .stockholm|
            
            .studio|
            
            .study|
            
            .style|
            
            .sucks|
            
            .supplies|
            
            .supply|
            
            .support|
            
            .surf|
            
            .surgery|
            
            .suzuki|
            
            .swatch|
            
            .swiss|
            
            .sydney|
            
            .symantec|
            
            .systems|
            
            .tab|
            
            .taipei|
            
            .tatamotors|
            
            .tatar|
            
            .tattoo|
            
            .tax|
            
            .taxi|
            
            .tci|
            
            .team|
            
            .tech|
            
            .technology|
            
            .tel|
            
            .telefonica|
            
            .temasek|
            
            .tennis|
            
            .thd|
            
            .theater|
            
            .theatre|
            
            .tickets|
            
            .tienda|
            
            .tips|
            
            .tires|
            
            .tirol|
            
            .today|
            
            .tokyo|
            
            .tools|
            
            .top|
            
            .toray|
            
            .toshiba|
            
            .tours|
            
            .town|
            
            .toyota|
            
            .toys|
            
            .trade|
            
            .trading|
            
            .training|
            
            .travel|
            
            .travelers|
            
            .travelersinsurance|
            
            .trust|
            
            .trv|
            
            .tui|
            
            .tushu|
            
            .ubs|
            
            .university|
            
            .uno|
            
            .uol|
            
            .vacations|
            
            .vana|
            
            .vegas|
            
            .ventures|
            
            .verisign|
            
            .versicherung|
            
            .vet|
            
            .viajes|
            
            .video|
            
            .villas|
            
            .vin|
            
            .vip|
            
            .virgin|
            
            .vision|
            
            .vista|
            
            .vistaprint|
            
            .viva|
            
            .vlaanderen|
            
            .vodka|
            
            .vote|
            
            .voting|
            
            .voto|
            
            .voyage|
            
            .wales|
            
            .walter|
            
            .wang|
            
            .wanggou|
            
            .watch|
            
            .watches|
            
            .webcam|
            
            .website|
            
            .wed|
            
            .wedding|
            
            .weir|
            
            .whoswho|
            
            .wien|
            
            .wiki|
            
            .williamhill|
            
            .win|
            
            .windows|
            
            .wine|
            
            .wme|
            
            .work|
            
            .works|
            
            .world|
            
            .wtc|
            
            .wtf|
            
            .xbox|
            
            .xerox|
            
            .xin|
            
            .测试|
            
            .कॉम|
            
            .परीक्षा|
            
            .佛山|
            
            .慈善|
            
            .集团|
            
            .在线|
            
            .点看|
            
            .คอม|
            
            .八卦|
            
            ‏.موقع‎|
            
            .公益|
            
            .公司|
            
            .移动|
            
            .我爱你|
            
            .москва|
            
            .испытание|
            
            .онлайн|
            
            .сайт|
            
            ‏.קום‎|
            
            .时尚|
            
            .테스트|
            
            .淡马锡|
            
            .орг|
            
            .नेट|
            
            .삼성|
            
            .商标|
            
            .商店|
            
            .商城|
            
            .дети|
            
            ‏.טעסט‎|
            
            .ポイント|
            
            .新闻|
            
            .工行|
            
            ‏.كوم‎|
            
            .中文网|
            
            .中信|
            
            .娱乐|
            
            .谷歌|
            
            .測試|
            
            ‏.آزمایشی‎|
            
            .பரிட்சை|
            
            .网店|
            
            .संगठन|
            
            .餐厅|
            
            .网络|
            
            .ком|
            
            .δοκιμή|
            
            .飞利浦|
            
            ‏.إختبار‎|
            
            .手表|
            
            .手机|
            
            ‏.ارامكو‎|
            
            ‏.بازار‎|
            
            ‏.همراه‎|
            
            .닷컴|
            
            .政府|
            
            ‏.شبكة‎|
            
            .机构|
            
            .组织机构|
            
            .健康|
            
            .рус|
            
            .珠宝|
            
            .大拿|
            
            .みんな|
            
            .グーグル|
            
            .世界|
            
            .网址|
            
            .닷넷|
            
            .コム|
            
            .游戏|
            
            .vermögensberater|
            
            .vermögensberatung|
            
            .企业|
            
            .信息|
            
            .广东|
            
            .テスト|
            
            .政务|
            
            .xperia|
            
            .xxx|
            
            .xyz|
            
            .yachts|
            
            .yamaxun|
            
            .yandex|
            
            .yodobashi|
            
            .yoga|
            
            .yokohama|
            
            .youtube|
            
            .zara|
            
            .zero|
            
            .zip|
            
            .zone|
            
            .zuerich)";
$ccTLD_IDN = "(?:
            
            .ac|
            
            .ad|
            
            .ae|
            
            .af|
            
            .ag|
            
            .ai|
            
            .al|
            
            .am|
            
            .an|
            
            .ao|
            
            .aq|
            
            .ar|
            
            .as|
            
            .at|
            
            .au|
            
            .aw|
            
            .ax|
            
            .az|
            
            .ba|
            
            .bb|
            
            .bd|
            
            .be|
            
            .bf|
            
            .bg|
            
            .bh|
            
            .bi|
            
            .bj|
            
            .bl|
            
            .bm|
            
            .bn|
            
            .bo|
            
            .bq|
            
            .br|
            
            .bs|
            
            .bt|
            
            .bv|
            
            .bw|
            
            .by|
            
            .bz|
            
            .ca|
            
            .cc|
            
            .cd|
            
            .cf|
            
            .cg|
            
            .ch|
            
            .ci|
            
            .ck|
            
            .cl|
            
            .cm|
            
            .cn|
            
            .co|
            
            .cr|
            
            .cu|
            
            .cv|
            
            .cw|
            
            .cx|
            
            .cy|
            
            .cz|
            
            .de|
            
            .dj|
            
            .dk|
            
            .dm|
            
            .do|
            
            .dz|
            
            .ec|
            
            .ee|
            
            .eg|
            
            .eh|
            
            .er|
            
            .es|
            
            .et|
            
            .eu|
            
            .fi|
            
            .fj|
            
            .fk|
            
            .fm|
            
            .fo|
            
            .fr|
            
            .ga|
            
            .gb|
            
            .gd|
            
            .ge|
            
            .gf|
            
            .gg|
            
            .gh|
            
            .gi|
            
            .gl|
            
            .gm|
            
            .gn|
            
            .gp|
            
            .gq|
            
            .gr|
            
            .gs|
            
            .gt|
            
            .gu|
            
            .gw|
            
            .gy|
            
            .hk|
            
            .hm|
            
            .hn|
            
            .hr|
            
            .ht|
            
            .hu|
            
            .id|
            
            .ie|
            
            .il|
            
            .im|
            
            .in|
            
            .io|
            
            .iq|
            
            .ir|
            
            .is|
            
            .it|
            
            .je|
            
            .jm|
            
            .jo|
            
            .jp|
            
            .ke|
            
            .kg|
            
            .kh|
            
            .ki|
            
            .km|
            
            .kn|
            
            .kp|
            
            .kr|
            
            .kw|
            
            .ky|
            
            .kz|
            
            .la|
            
            .lb|
            
            .lc|
            
            .li|
            
            .lk|
            
            .lr|
            
            .ls|
            
            .lt|
            
            .lu|
            
            .lv|
            
            .ly|
            
            .ma|
            
            .mc|
            
            .md|
            
            .me|
            
            .mf|
            
            .mg|
            
            .mh|
            
            .mk|
            
            .ml|
            
            .mm|
            
            .mn|
            
            .mo|
            
            .mp|
            
            .mq|
            
            .mr|
            
            .ms|
            
            .mt|
            
            .mu|
            
            .mv|
            
            .mw|
            
            .mx|
            
            .my|
            
            .mz|
            
            .na|
            
            .nc|
            
            .ne|
            
            .nf|
            
            .ng|
            
            .ni|
            
            .nl|
            
            .no|
            
            .np|
            
            .nr|
            
            .nu|
            
            .nz|
            
            .om|
            
            .pa|
            
            .pe|
            
            .pf|
            
            .pg|
            
            .ph|
            
            .pk|
            
            .pl|
            
            .pm|
            
            .pn|
            
            .pr|
            
            .ps|
            
            .pt|
            
            .pw|
            
            .py|
            
            .qa|
            
            .re|
            
            .ro|
            
            .rs|
            
            .ru|
            
            .rw|
            
            .sa|
            
            .sb|
            
            .sc|
            
            .sd|
            
            .se|
            
            .sg|
            
            .sh|
            
            .si|
            
            .sj|
            
            .sk|
            
            .sl|
            
            .sm|
            
            .sn|
            
            .so|
            
            .sr|
            
            .ss|
            
            .st|
            
            .su|
            
            .sv|
            
            .sx|
            
            .sy|
            
            .sz|
            
            .tc|
            
            .td|
            
            .tf|
            
            .tg|
            
            .th|
            
            .tj|
            
            .tk|
            
            .tl|
            
            .tm|
            
            .tn|
            
            .to|
            
            .tp|
            
            .tr|
            
            .tt|
            
            .tv|
            
            .tw|
            
            .tz|
            
            .ua|
            
            .ug|
            
            .uk|
            
            .um|
            
            .us|
            
            .uy|
            
            .uz|
            
            .va|
            
            .vc|
            
            .ve|
            
            .vg|
            
            .vi|
            
            .vn|
            
            .vu|
            
            .wf|
            
            .ws|
            
            .한국|
            
            .ভারত|
            
            .বাংলা|
            
            .қаз|
            
            .срб|
            
            .бел|
            
            .சிங்கப்பூர்|
            
            .мкд|
            
            .中国|
            
            .中國|
            
            .భారత్|
            
            .ලංකා|
            
            .ભારત|
            
            .भारत|
            
            .укр|
            
            .香港|
            
            .台湾|
            
            .台灣|
            
            .мон|
            
            ‏.الجزائر‎|
            
            ‏.عمان‎|
            
            ‏.ایران‎|
            
            ‏.امارات‎|
            
            ‏.پاكستان‎|
            
            ‏.پاکستان‎|
            
            ‏.الاردن‎|
            
            ‏.بھارت‎|
            
            ‏.المغرب‎|
            
            ‏.السعودية‎|
            
            ‏.سودان‎|
            
            ‏.عراق‎|
            
            ‏.مليسيا‎|
            
            .澳門|
            
            .გე|
            
            .ไทย|
            
            ‏.سورية‎|
            
            .рф|
            
            ‏.تونس‎|
            
            .ελ|
            
            .ਭਾਰਤ|
            
            ‏.مصر‎|
            
            ‏.قطر‎|
            
            .இலங்கை|
            
            .இந்தியா|
            
            .հայ|
            
            .新加坡|
            
            ‏.فلسطين‎|
            
            .ye|
            
            .yt|
            
            .za|
            
            .zm|
            
            .zw)";
