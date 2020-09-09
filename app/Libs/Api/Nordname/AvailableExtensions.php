<?php

namespace ModulesGarden\DomainOrdersExtended\App\Libs\Api\Nordname;


use ModulesGarden\DomainOrdersExtended\App\Helper\AbstractAvailableExtensions;

class AvailableExtensions extends AbstractAvailableExtensions
{
    protected $submoduleConfigKey = 'Nordname';
    protected $tlds = ['.ac', '.ae', '.af', '.com.af', '.net.af', '.org.af', '.ag', '.co.ag', '.com.ag', '.net.ag', '.org.ag', '.ai', '.net.ai', '.org.ai', '.al', '.com.al', '.net.al', '.org.al', '.am', '.co.am', '.com.am', '.net.am', '.org.am', '.ar', '.com.ar', '.as', '.at', '.co.at', '.or.at', '.asn.au', '.com.au', '.id.au', '.net.au', '.org.au', '.ax', '.ba', '.be', '.bg', '.bi', '.co.bi', '.com.bi', '.org.bi', '.bj', '.com.bo', '.com.br', '.net.br', '.org.br', '.ac.bw', '.co.bw', '.net.bw', '.org.bw', '.by', '.com.by', '.minsk.by', '.net.by', '.бел', '.bz', '.co.bz', '.com.bz', '.net.bz', '.ca', '.cc', '.cd', '.com.cd', '.net.cd', '.org.cd', '.cf', '.cg', '.ch', '.ci', '.ac.ci', '.co.ci', '.com.ci', '.ed.ci', '.edu.ci', '.go.ci', '.in.ci', '.int.ci', '.net.ci', '.nom.ci', '.or.ci', '.org.ci', '.cl', '.cm', '.co.cm', '.com.cm', '.net.cm', '.cn', '.com.cn', '.net.cn', '.org.cn', '.co', '.co.dm', '.co.na', '.co.nl', '.co.no', '.com.de', '.com.hr', '.com.na', '.com.co', '.net.co', '.co.cr', '.cr', '.cx', '.cy', '.com.cy', '.cz', '.co.cz', '.de', '.dj', '.dk', '.dm', '.com.dm', '.net.dm', '.org.dm', '.do', '.com.do', '.net.do', '.org.do', '.dz', '.ec', '.com.ec', '.net.ec', '.ee', '.com.ee', '.eg', '.com.eg', '.es', '.com.es', '.org.es', '.eu', '.ευ', '.ею', '.fi', '.fm', '.fo', '.fr', '.ga', '.gd', '.ge', '.com.ge', '.net.ge', '.org.ge', '.gf', '.gg', '.co.gg', '.gl', '.co.gl', '.com.gl', '.net.gl', '.org.gl', '.com.gn', '.gp', '.com.gp', '.net.gp', '.gq', '.gr', '.com.gr', '.net.gr', '.org.gr', '.ελ', '.gs', '.gt', '.com.gt', '.net.gt', '.org.gt', '.gw', '.gy', '.co.gy', '.com.gy', '.net.gy', '.hk', '.com.hk', '.hm', '.hn', '.com.hn', '.net.hn', '.org.hn', '.hr', '.ht', '.com.ht', '.org.ht', '.hu', '.co.hu', '.org.hu', '.id', '.ie', '.co.il', '.org.il', '.im', '.co.im', '.com.im', '.org.im', '.in', '.co.in', '.net.in', '.org.in', '.io', '.ir', '.is', '.it', '.je', '.co.je', '.jp', '.ke', '.co.ke', '.info.ke', '.me.ke', '.ne.ke', '.or.ke', '.ki', '.kr', '.co.kr', '.ne.kr', '.or.kr', '.pe.kr', '.re.kr', '.seoul.kr', '.kz', '.la', '.lc', '.li', '.lt', '.lu', '.lv', '.com.lv', '.net.lv', '.org.lv', '.ly', '.com.ly', '.id.ly', '.net.ly', '.org.ly', '.ma', '.co.ma', '.net.ma', '.org.ma', '.mc', '.tm.mc', '.md', '.me', '.mg', '.co.mg', '.com.mg', '.net.mg', '.org.mg', '.mk', '.com.mk', '.net.mk', '.org.mk', '.мкд', '.ml', '.mn', '.mq', '.mr', '.edu.mr', '.org.mr', '.perso.mr', '.ms', '.mt', '.com.mt', '.net.mt', '.org.mt', '.mu', '.ac.mu', '.co.mu', '.com.mu', '.net.mu', '.or.mu', '.org.mu', '.mw', '.co.mw', '.com.mw', '.org.mw', '.mx', '.com.mx', '.my', '.com.my', '.net.my', '.org.my', '.co.mz', '.net.mz', '.org.mz', '.na', '.net.za', '.nf', '.ng', '.com.ng', '.org.ng', '.nl', '.no', '.nu', '.nz', '.ac.nz', '.co.nz', '.geek.nz', '.gen.nz', '.kiwi.nz', '.maori.nz', '.net.nz', '.org.nz', '.school.nz', '.org.za', '.pa', '.com.pa', '.pe', '.com.pe', '.net.pe', '.org.pe', '.ph', '.com.ph', '.net.ph', '.org.ph', '.pk', '.com.pk', '.net.pk', '.org.pk', '.pl', '.com.pl', '.edu.pl', '.net.pl', '.org.pl', '.pm', '.pr', '.biz.pr', '.com.pr', '.info.pr', '.isla.pr', '.name.pr', '.net.pr', '.org.pr', '.pro.pr', '.ps', '.com.ps', '.net.ps', '.org.ps', '.pt', '.com.pt', '.pw', '.qa', '.re', '.ro', '.com.ro', '.info.ro', '.org.ro', '.rs', '.co.rs', '.org.rs', '.срб', '.ru', '.com.ru', '.net.ru', '.org.ru', '.msk.ru', '.рф', '.rw', '.ac.rw', '.co.rw', '.net.rw', '.org.rw', '.sb', '.com.sb', '.net.sb', '.org.sb', '.com.sc', '.sc', '.sd', '.se', '.sg', '.com.sg', '.sh', '.si', '.sk', '.sl', '.com.sl', '.net.sl', '.org.sl', '.sn', '.com.sn', '.so', '.com.so', '.net.so', '.org.so', '.sr', '.st', '.su', '.sx', '.tf', '.tg', '.co.th', '.tk', '.tl', '.tn', '.com.tn', '.org.tn', '.to', '.com.tr', '.tv', '.tw', '.com.tw', '.ac.tz', '.co.tz', '.ne.tz', '.or.tz', '.ua', '.co.ua', '.com.ua', '.in.ua', '.kiev.ua', '.net.ua', '.org.ua', '.укр', '.ug', '.co.ug', '.com.ug', '.ne.ug', '.or.ug', '.org.ug', '.uk', '.co.uk', '.ltd.uk', '.me.uk', '.org.uk', '.plc.uk', '.sch.uk', '.us', '.vc', '.co.ve', '.com.ve', '.info.ve', '.net.ve', '.org.ve', '.vg', '.vn', '.com.vn', '.net.vn', '.org.vn', '.vu', '.web.za', '.wf', '.ws', '.yt', '.co.za', '.abogado', '.academy', '.accountant', '.accountants', '.actor', '.adult', '.aero', '.africa', '.agency', '.airforce', '.alsace', '.amsterdam', '.apartments', '.app', '.archi', '.army', '.art', '.asia', '.associates', '.attorney', '.auction', '.audio', '.auto', '.autos', '.baby', '.band', '.bar', '.barcelona', '.bargains', '.bayern', '.beer', '.berlin', '.best', '.bet', '.bid', '.bike', '.bingo', '.bio', '.biz', '.black', '.blackfriday', '.blog', '.blue', '.boats', '.bond', '.boutique', '.brussels', '.build', '.builders', '.business', '.buzz', '.bzh', '.cab', '.cafe', '.cam', '.camera', '.camp', '.capetown', '.capital', '.car', '.cards', '.care', '.career', '.careers', '.cars', '.casa', '.cash', '.casino', '.cat', '.catering', '.center', '.ceo', '.charity', '.chat', '.cheap', '.christmas', '.church', '.city', '.claims', '.cleaning', '.click', '.clinic', '.clothing', '.cloud', '.club', '.coach', '.codes', '.coffee', '.college', '.cologne', '.com', '.community', '.company', '.compare', '.computer', '.condos', '.construction', '.consulting', '.contractors', '.cooking', '.cool', '.corsica', '.country', '.coupons', '.credit', '.creditcard', '.cricket', '.cruises', '.cymru', '.cyou', '.dance', '.date', '.dating', '.dealer', '.deals', '.degree', '.delivery', '.democrat', '.dental', '.dentist', '.desi', '.design', '.dev', '.diamonds', '.diet', '.digital', '.direct', '.directory', '.discount', '.doctor', '.dog', '.domains', '.download', '.durban', '.earth', '.eco', '.education', '.email', '.energy', '.engineer', '.engineering', '.enterprises', '.equipment', '.estate', '.eus', '.events', '.exchange', '.expert', '.exposed', '.express', '.fail', '.faith', '.family', '.fan', '.fans', '.farm', '.fashion', '.feedback', '.film', '.finance', '.financial', '.fish', '.fishing', '.fit', '.fitness', '.flights', '.florist', '.flowers', '.football', '.forsale', '.foundation', '.fun', '.fund', '.furniture', '.futbol', '.fyi', '.gallery', '.game', '.games', '.garden', '.gay', '.gent', '.gift', '.gifts', '.gives', '.glass', '.global', '.gmbh', '.gold', '.golf', '.graphics', '.gratis', '.green', '.gripe', '.group', '.guide', '.guitars', '.guru', '.hamburg', '.haus', '.health', '.healthcare', '.help', '.hiphop', '.hockey', '.holdings', '.holiday', '.homes', '.horse', '.hospital', '.host', '.hosting', '.house', '.how', '.icu', '.immo', '.immobilien', '.inc', '.industries', '.info', '.ink', '.institute', '.insure', '.international', '.investments', '.irish', '.jetzt', '.jewelry', '.joburg', '.juegos', '.kaufen', '.kitchen', '.kiwi', '.koeln', '.land', '.law', '.lawyer', '.lease', '.legal', '.lgbt', '.life', '.lighting', '.limited', '.limo', '.link', '.live', '.llc', '.loan', '.loans', '.lol', '.london', '.love', '.ltd', '.ltda', '.luxe', '.luxury', '.madrid', '.maison', '.management', '.market', '.marketing', '.mba', '.media', '.memorial', '.men', '.menu', '.miami', '.mobi', '.moda', '.moe', '.mom', '.money', '.monster', '.mortgage', '.motorcycles', '.movie', '.museum', '.name', '.navy', '.net', '.network', '.news', '.ninja', '.observer', '.one', '.online', '.ooo', '.org', '.organic', '.орг', '.page', '.paris', '.partners', '.parts', '.party', '.pet', '.photo', '.photography', '.photos', '.pics', '.pictures', '.pink', '.pizza', '.place', '.plumbing', '.plus', '.poker', '.porn', '.press', '.pro', '.productions', '.promo', '.properties', '.property', '.protection', '.pub', '.quebec', '.racing', '.radio', '.radio.am', '.radio.fm', '.realty', '.recipes', '.red', '.rehab', '.reise', '.reisen', '.reit', '.rent', '.rentals', '.repair', '.report', '.republican', '.rest', '.restaurant', '.review', '.reviews', '.rip', '.rocks', '.rodeo', '.ruhr', '.run', '.saarland', '.sale', '.salon', '.sarl', '.school', '.schule', '.science', '.scot', '.security', '.select', '.services', '.sex', '.sexy', '.shoes', '.shop', '.shopping', '.show', '.singles', '.site', '.ski', '.soccer', '.social', '.software', '.solar', '.solutions', '.soy', '.space', '.sport', '.srl', '.storage', '.store', '.stream', '.studio', '.style', '.sucks', '.supplies', '.supply', '.support', '.surf', '.surgery', '.swiss', '.systems', '.tattoo', '.tax', '.taxi', '.team', '.tech', '.technology', '.tel', '.tennis', '.theater', '.tickets', '.tienda', '.tips', '.tires', '.tirol', '.today', '.tools', '.top', '.tours', '.town', '.toys', '.trade', '.training', '.travel', '.tube', '.university', '.uno', '.vacations', '.vegas', '.ventures', '.vet', '.viajes', '.video', '.villas', '.vin', '.vip', '.vision', '.vlaanderen', '.vodka', '.vote', '.voto', '.voyage', '.wales', '.watch', '.webcam', '.website', '.wedding', '.wien', '.wiki', '.win', '.wine', '.work', '.works', '.world', '.wtf', '.xxx', '.xyz', '.yachts', '.yoga', '.zone', '.ae.org', '.africa.com', '.br.com', '.cn.com', '.co.com', '.com.se', '.de.com', '.eu.com', '.gr.com', '.in.net', '.jp.net', '.jpn.com', '.mex.com', '.ru.com', '.uk.com', '.uk.net', '.us.com', '.za.com'];
}