<?php

namespace Matriphe\ISO639;

class ISO639
{
    /*
     * Language database, based on Wikipedia.
     * Source: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     */
    protected $languages = array(
            array("ab","abk","abk","abk","Abkhaz","аҧсуа бызшәа, аҧсшәа","abkhaz"),
            array("aa","aar","aar","aar","Afar","Afaraf","afar"),
            array("af","afr","afr","afr","Afrikaans","Afrikaans","africaans"),
            array("ak","aka","aka","aka","Akan","Akan","akan"),
            array("sq","sqi","alb","sqi","Albanian","Shqip","albanés"),
            array("am","amh","amh","amh","Amharic","አማርኛ","amárico"),
            array("ar","ara","ara","ara","Arabic","العربية","arábica"),
            array("an","arg","arg","arg","Aragonese","aragonés","aragonés"),
            array("hy","hye","arm","hye","Armenian","Հայերեն","armenio"),
            array("as","asm","asm","asm","Assamese","অসমীয়া","assamese"),
            array("av","ava","ava","ava","Avaric","авар мацӀ, магӀарул мацӀ","avaric"),
            array("ae","ave","ave","ave","Avestan","avesta","avestan"),
            array("ay","aym","aym","aym","Aymara","aymar aru","aimara"),
            array("az","aze","aze","aze","Azerbaijani","azərbaycan dili","azerbaiyán"),
            array("bm","bam","bam","bam","Bambara","bamanankan","bambara"),
            array("ba","bak","bak","bak","Bashkir","башҡорт теле","bashkir"),
            array("eu","eus","baq","eus","Basque","euskara, euskera","vasco"),
            array("be","bel","bel","bel","Belarusian","беларуская мова","bielorruso"),
            array("bn","ben","ben","ben","Bengali, Bangla","বাংলা","bengalí, bangla"),
            array("bh","bih","bih","Bihari","भोजपुरी","bihari"),
            array("bi","bis","bis","bis","Bislama","Bislama","bislama"),
            array("bs","bos","bos","bos","Bosnian","bosanski jezik","bosnio"),
            array("br","bre","bre","bre","Breton","brezhoneg","bretón"),
            array("bg","bul","bul","bul","Bulgarian","български език","búlgaro"),
            array("my","mya","bur","mya","Burmese","ဗမာစာ","birmano"),
            array("ca","cat","cat","cat","Catalan","català","catalán"),
            array("ch","cha","cha","cha","Chamorro","Chamoru","chamorro"),
            array("ce","che","che","che","Chechen","нохчийн мотт","chechen"),
            array("ny","nya","nya","nya","Chichewa, Chewa, Nyanja","chiCheŵa, chinyanja","chichewa, chewa, nyanja"),
            array("zh","zho","chi","zho","Chinese","中文 (Zhōngwén 汉语, 漢語","chino"),
            array("cv","chv","chv","chv","Chuvash","чӑваш чӗлхи","chuvashia"),
            array("kw","cor","cor","cor","Cornish","Kernewek","de cornualles"),
            array("co","cos","cos","cos","Corsican","corsu, lingua corsa","corso"),
            array("cr","cre","cre","cre","Cree","ᓀᐦᐃᔭᐍᐏᐣ","cree"),
            array("hr","hrv","hrv","hrv","Croatian","hrvatski jezik","croata"),
            array("cs","ces","cze","ces","Czech","čeština, český jazyk","checo"),
            array("da","dan","dan","dan","Danish","dansk","danés"),
            array("dv","div","div","div","Divehi, Dhivehi, Maldivian","ދިވެހި","divehi, dhivehi, maldivas"),
            array("nl","nld","dut","nld","Dutch","Nederlands, Vlaams","holandés"),
            array("dz","dzo","dzo","dzo","Dzongkha","རྫོང་ཁ","dzongkha"),
            array("en","eng","eng","eng","English","English","inglés"),
            array("eo","epo","epo","epo","Esperanto","Esperanto","esperanto"),
            array("et","est","est","est","Estonian","eesti, eesti keel","estonia"),
            array("ee","ewe","ewe","ewe","Ewe","Eʋegbe","oveja"),
            array("fo","fao","fao","fao","Faroese","føroyskt","faroese"),
            array("fj","fij","fij","fij","Fijian","vosa Vakaviti","fiyiano"),
            array("fi","fin","fin","fin","Finnish","suomi, suomen kieli","finlandés"),
            array("fr","fra","fre","fra","French","français, langue française","francés"),
            array("ff","ful","ful","ful","Fula, Fulah, Pulaar, Pular","Fulfulde, Pulaar, Pular","fula, fula, pulaar, pular"),
            array("gl","glg","glg","glg","Galician","galego","gallego"),
            array("ka","kat","geo","kat","Georgian","ქართული","georgiano"),
            array("de","deu","ger","deu","German","Deutsch","alemán"),
            array("el","ell","gre","ell","Greek (modern)","ελληνικά","griego (moderno)"),
            array("gn","grn","grn","grn","Guaraní","Avañe\ẽ","guaraní"),
            array("gu","guj","guj","guj","Gujarati","ગુજરાતી","gujarati"),
            array("ht","hat","hat","hat","Haitian, Haitian Creole","Kreyòl ayisyen","haití, criollo haitiano"),
            array("ha","hau","hau","hau","Hausa","(Hausa) هَوُسَ","hausa"),
            array("he","heb","heb","heb","Hebrew (modern)","עברית","hebreo (moderna)"),
            array("hz","her","her","her","Herero","Otjiherero","herero"),
            array("hi","hin","hin","hin","Hindi","हिन्दी, हिंदी","hindi"),
            array("ho","hmo","hmo","hmo","Hiri Motu","Hiri Motu","hiri motu"),
            array("hu","hun","hun","hun","Hungarian","magyar","húngaro"),
            array("ia","ina","ina","ina","Interlingua","Interlingua","interlingua"),
            array("id","ind","ind","ind","Indonesian","Bahasa Indonesia","indonesio"),
            array("ie","ile","ile","ile","Interlingue","Originally called Occidental; then Interlingue after WWII","occidental"),
            array("ga","gle","gle","gle","Irish","Gaeilge","irlandesa"),
            array("ig","ibo","ibo","ibo","Igbo","Asụsụ Igbo","igbo"),
            array("ik","ipk","ipk","ipk","Inupiaq","Iñupiaq, Iñupiatun","inupiak"),
            array("io","ido","ido","ido","Ido","Ido","hago"),
            array("is","isl","ice","isl","Icelandic","Íslenska","islandés"),
            array("it","ita","ita","ita","Italian","italiano","italiano"),
            array("iu","iku","iku","iku","Inuktitut","ᐃᓄᒃᑎᑐᑦ","inuktitut"),
            array("ja","jpn","jpn","jpn","Japanese","日本語 (にほんご)","japonés"),
            array("jv","jav","jav","jav","Javanese","basa Jawa","javanés"),
            array("kl","kal","kal","kal","Kalaallisut, Greenlandic","kalaallisut, kalaallit oqaasii","groenlandés, groenlandia"),
            array("kn","kan","kan","kan","Kannada","ಕನ್ನಡ","kannada"),
            array("kr","kau","kau","kau","Kanuri","Kanuri","kanuri"),
            array("ks","kas","kas","kas","Kashmiri","कश्मीरी, كشميري‎","cachemira"),
            array("kk","kaz","kaz","kaz","Kazakh","қазақ тілі","kazaja"),
            array("km","khm","khm","khm","Khmer","ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ","khmer"),
            array("ki","kik","kik","kik","Kikuyu, Gikuyu","Gĩkũyũ","kikuyu, gikuyu"),
            array("rw","kin","kin","kin","Kinyarwanda","Ikinyarwanda","kinyarwanda"),
            array("ky","kir","kir","kir","Kyrgyz","Кыргызча, Кыргыз тили","kyrgyz"),
            array("kv","kom","kom","kom","Komi","коми кыв","komi"),
            array("kg","kon","kon","kon","Kongo","Kikongo","kongo"),
            array("ko","kor","kor","kor","Korean","한국어, 조선어","coreano"),
            array("ku","kur","kur","kur","Kurdish","Kurdî, كوردی‎","kurdo"),
            array("kj","kua","kua","kua","Kwanyama, Kuanyama","Kuanyama","kwanyama, kuanyama"),
            array("la","lat","lat","lat","Latin","latine, lingua latina","latín"),
            array("lld","Ladin","ladin, lingua ladina","ladin"),
            array("lb","ltz","ltz","ltz","Luxembourgish, Letzeburgesch","Lëtzebuergesch","luxemburgués, el luxemburgués"),
            array("lg","lug","lug","lug","Ganda","Luganda","ganda"),
            array("li","lim","lim","lim","Limburgish, Limburgan, Limburger","Limburgs","limburgués, limburgan, limburger"),
            array("ln","lin","lin","lin","Lingala","Lingála","lingala"),
            array("lo","lao","lao","lao","Lao","ພາສາລາວ","lao"),
            array("lt","lit","lit","lit","Lithuanian","lietuvių kalba","lituano"),
            array("lu","lub","lub","lub","Luba-Katanga","Tshiluba","luba-katanga"),
            array("lv","lav","lav","lav","Latvian","latviešu valoda","letón"),
            array("gv","glv","glv","glv","Manx","Gaelg, Gailck","lengua de la isla de man"),
            array("mk","mkd","mac","mkd","Macedonian","македонски јазик","macedónio"),
            array("mg","mlg","mlg","mlg","Malagasy","fiteny malagasy","madagascarí"),
            array("ms","msa","may","msa","Malay","bahasa Melayu, بهاس ملايو‎","malayo"),
            array("ml","mal","mal","mal","Malayalam","മലയാളം","malayalam"),
            array("mt","mlt","mlt","mlt","Maltese","Malti","maltés"),
            array("mi","mri","mao","mri","Māori","te reo Māori","maorí"),
            array("mr","mar","mar","mar","Marathi (Marāṭhī)","मराठी","maratí (marathi)"),
            array("mh","mah","mah","mah","Marshallese","Kajin M̧ajeļ","marshallese"),
            array("mn","mon","mon","mon","Mongolian","монгол","mongol"),
            array("na","nau","nau","nau","Nauru","Ekakairũ Naoero","nauru"),
            array("nv","nav","nav","nav","Navajo, Navaho","Diné bizaad","navajo, navajo"),
            array("nd","nde","nde","nde","Northern Ndebele","isiNdebele","ndebele del norte"),
            array("ne","nep","nep","nep","Nepali","नेपाली","nepalí"),
            array("ng","ndo","ndo","ndo","Ndonga","Owambo","ndonga"),
            array("nb","nob","nob","nob","Norwegian Bokmål","Norsk bokmål","noruego"),
            array("nn","nno","nno","nno","Norwegian Nynorsk","Norsk nynorsk","nynorsk"),
            array("no","nor","nor","nor","Norwegian","Norsk","noruego"),
            array("ii","iii","iii","iii","Nuosu","ꆈꌠ꒿ Nuosuhxop","nuosu"),
            array("nr","nbl","nbl","nbl","Southern Ndebele","isiNdebele","ndebele del sur"),
            array("oc","oci","oci","oci","Occitan","occitan, lenga d\òc","occitano"),
            array("oj","oji","oji","oji","Ojibwe, Ojibwa","ᐊᓂᔑᓈᐯᒧᐎᓐ","ojibwe, ojibwa"),
            array("cu","chu","chu","chu","Old Church Slavonic, Church Slavonic, Old Bulgarian","ѩзыкъ словѣньскъ","antiguo eslavo, eslavo, búlgaro de edad"),
            array("om","orm","orm","orm","Oromo","Afaan Oromoo","oromo"),
            array("or","ori","ori","ori","Oriya","ଓଡ଼ିଆ","oriya"),
            array("os","oss","oss","oss","Ossetian, Ossetic","ирон æвзаг","osetia, ossetic"),
            array("pa","pan","pan","pan","Panjabi, Punjabi","ਪੰਜਾਬੀ, پنجابی‎","panjabi, punjabi"),
            array("pi","pli","pli","pli","Pāli","पाऴि","pali"),
            array("fa","fas","per","fas","Persian (Farsi)","فارسی","persa (farsi)"),
            array("pl","pol","pol","pol","Polish","język polski, polszczyzna","polaco"),
            array("ps","pus","pus","pus","Pashto, Pushto","پښتو","pashto, pushto"),
            array("pt","por","por","por","Portuguese","português","portugués"),
            array("qu","que","que","que","Quechua","Runa Simi, Kichwa","quechua"),
            array("rm","roh","roh","roh","Romansh","rumantsch grischun","romansh"),
            array("rn","run","run","run","Kirundi","Ikirundi","kirundi"),
            array("ro","ron","rum","ron","Romanian","limba română","rumano"),
            array("ru","rus","rus","rus","Russian","Русский","ruso"),
            array("sa","san","san","san","Sanskrit (Saṁskṛta)","संस्कृतम्","sánscrito (samskrta)"),
            array("sc","srd","srd","srd","Sardinian","sardu","sardo"),
            array("sd","snd","snd","snd","Sindhi","सिन्धी, سنڌي، سندھی‎","sindhi"),
            array("se","sme","sme","sme","Northern Sami","Davvisámegiella","sami septentrional"),
            array("sm","smo","smo","smo","Samoan","gagana fa\a Samoa","samoano"),
            array("sg","sag","sag","sag","Sango","yângâ tî sängö","sango"),
            array("sr","srp","srp","srp","Serbian","српски језик","serbio"),
            array("gd","gla","gla","gla","Scottish Gaelic, Gaelic","Gàidhlig","gaélico escocés, gaélico"),
            array("sn","sna","sna","sna","Shona","chiShona","shona"),
            array("si","sin","sin","sin","Sinhala, Sinhalese","සිංහල","cingaleses, cingaleses"),
            array("sk","slk","slo","slk","Slovak","slovenčina, slovenský jazyk","eslovaco"),
            array("sl","slv","slv","slv","Slovene","slovenski jezik, slovenščina","esloveno"),
            array("so","som","som","som","Somali","Soomaaliga, af Soomaali","somalí"),
            array("st","sot","sot","sot","Southern Sotho","Sesotho","sesotho meridional"),
            array("es","spa","spa","spa","Spanish","español","español"),
            array("su","sun","sun","sun","Sundanese","Basa Sunda","sundanese"),
            array("sw","swa","swa","swa","Swahili","Kiswahili","swahili"),
            array("ss","ssw","ssw","ssw","Swati","SiSwati","swati"),
            array("sv","swe","swe","swe","Swedish","svenska","sueco"),
            array("ta","tam","tam","tam","Tamil","தமிழ்","tamil"),
            array("te","tel","tel","tel","Telugu","తెలుగు","telugu"),
            array("tg","tgk","tgk","tgk","Tajik","тоҷикӣ, toçikī, تاجیکی‎","tayiko"),
            array("th","tha","tha","tha","Thai","ไทย","tailandés"),
            array("ti","tir","tir","tir","Tigrinya","ትግርኛ","tigriño"),
            array("bo","bod","tib","bod","Tibetan Standard, Tibetan, Central","བོད་ཡིག","estándar tibetano, tibetano, centro"),
            array("tk","tuk","tuk","tuk","Turkmen","Türkmen, Түркмен","turkmen"),
            array("tl","tgl","tgl","tgl","Tagalog","Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔","tagalo"),
            array("tn","tsn","tsn","tsn","Tswana","Setswana","tsuana"),
            array("to","ton","ton","ton","Tonga (Tonga Islands)","faka Tonga","tonga (islas tonga)"),
            array("tr","tur","tur","tur","Turkish","Türkçe","turco"),
            array("ts","tso","tso","tso","Tsonga","Xitsonga","tsonga"),
            array("tt","tat","tat","tat","Tatar","татар теле, tatar tele","tártaro"),
            array("tw","twi","twi","twi","Twi","Twi","twi"),
            array("ty","tah","tah","tah","Tahitian","Reo Tahiti","tahití"),
            array("ug","uig","uig","uig","Uyghur","ئۇيغۇرچە‎, Uyghurche","uyghur"),
            array("uk","ukr","ukr","ukr","Ukrainian","українська мова","ucranio"),
            array("ur","urd","urd","urd","Urdu","اردو","urdu"),
            array("uz","uzb","uzb","uzb","Uzbek","Oʻzbek, Ўзбек, أۇزبېك‎","uzbeko"),
            array("ve","ven","ven","ven","Venda","Tshivenḓa","venda"),
            array("vi","vie","vie","vie","Vietnamese","Việt Nam","vietnamita"),
            array("vo","vol","vol","vol","Volapük","Volapük","volapük"),
            array("wa","wln","wln","wln","Walloon","walon","valonia"),
            array("cy","cym","wel","cym","Welsh","Cymraeg","galés"),
            array("wo","wol","wol","wol","Wolof","Wollof","wolof"),
            array("fy","fry","fry","fry","Western Frisian","Frysk","frisón"),
            array("xh","xho","xho","xho","Xhosa","isiXhosa","xhosa"),
            array("yi","yid","yid","yid","Yiddish","ייִדיש","yídish"),
            array("yo","yor","yor","yor","Yoruba","Yorùbá","yoruba"),
            array("za","zha","zha","zha","Zhuang, Chuang","Saɯ cueŋƅ, Saw cuengh","zhuang, chuang"),
            array("zu","zul","zul","zul","Zulu","isiZulu","zulú")

    );

    /*
     * Get all language data
     *
     * @return (array)
    */
    public function allLanguages()
    {
        return $this->languages;
    }

    /*
     * Get language name from ISO-639-1 (two-letters code)
     *
     * @return (string)
     */
    public function languageByCode1($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[0] == $code) {
                $result = $lang[4];
                break;
            }
        }

        return $result;
    }

    /*
     * Get native language name from ISO-639-1 (two-letters code)
     *
     * @return (string)
     */
    public function nativeByCode1($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[0] == $code) {
                $result = $lang[5];
                break;
            }
        }

        return $result;
    }

    /*
     * Get language name from ISO-639-2/t (three-letter codes) terminologic
     *
     * @return (string)
     */
    public function languageByCode2t($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[1] == $code) {
                $result = $lang[4];
                break;
            }
        }

        return $result;
    }

    /*
     * Get native language name from ISO-639-2/t (three-letter codes) terminologic
     *
     * @return (string)
     */
    public function nativeByCode2t($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[1] == $code) {
                $result = $lang[5];
                break;
            }
        }

        return $result;
    }

    /*
     * Get language name from ISO-639-2/b (three-letter codes) bibliographic
     *
     * @return (string)
     */
    public function languageByCode2b($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[2] == $code) {
                $result = $lang[4];
                break;
            }
        }

        return $result;
    }

    /*
     * Get native language name from ISO-639-2/b (three-letter codes) bibliographic
     *
     * @return (string)
     */
    public function nativeByCode2b($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[2] == $code) {
                $result = $lang[5];
                break;
            }
        }

        return $result;
    }

    /*
     * Get language name from ISO-639-3 (three-letter codes)
     *
     * @return (string)
     */
    public function languageByCode3($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[3] == $code) {
                $result = $lang[4];
                break;
            }
        }

        return $result;
    }

    /*
     * Get native language name from ISO-639-3 (three-letter codes)
     *
     * @return (string)
     */
    public function nativeByCode3($code)
    {
        $code = strtolower($code);

        $result = '';

        foreach ($this->languages as $lang) {
            if ($lang[3] == $code) {
                $result = $lang[5];
                break;
            }
        }

        return $result;
    }

    /*
     * Get ISO-639-1 (two-letters code) from language name
     *
     * @return (string)
     */
    public function code1ByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        $result = '';

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[4]))) {
                $result = $lang[0];
                break;
            }
        }

        return $result;
    }

    /*
     * Get ISO-639-2/t (three-letter codes) terminologic from language name
     *
     * @return (string)
     */
    public function code2tByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        $result = '';

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[4]))) {
                $result = $lang[1];
                break;
            }
        }

        return $result;
    }

    /*
     * Get ISO-639-2/b (three-letter codes) bibliographic from language name
     *
     * @return (string)
     */
    public function code2bByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        $result = '';

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[4]))) {
                $result = $lang[2];
                break;
            }
        }

        return $result;
    }

    /*
     * Get ISO-639-3 (three-letter codes) from language name
     *
     * @return (string)
     */
    public function code3ByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        $result = '';

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[4]))) {
                $result = $lang[3];
                break;
            }
        }

        return $result;
    }

    public function code3ByLanguageEs($language)
    {
        
        $language_key = strtolower($language);
        $result = '';

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[6]))) {
                $result = $lang[3];
                break;
            }
        }

        return $result;
    }
}
