<?php
 namespace Optimization\Cache; use Boilerplate\Util\ArrayUtil; use Boilerplate\Util\StringUtil; use Boilerplate\Notice; use Optimization\Util\FormatUtil; class Cache extends Common { public function __construct() { goto f_G9Q; bbrCb: $this->loadRequirement(); goto tZuce; f_G9Q: if (!$this->loadConstant()) { goto IX10S; } goto ppi7Q; tZuce: IX10S: goto fmNiS; ppi7Q: parent::__construct(); goto bbrCb; fmNiS: } public function addFilters() : self { $this->addFilter("\x6f\x70\164\x69\155\x69\x7a\141\164\x69\x6f\156\x5f\143\x72\157\x6e\137\x65\166\145\x6e\164\163", [$this, "\141\x64\144\124\x6f\103\162\157\156\x45\x76\x65\x6e\164"])->addFilter("\x63\157\x6d\155\x65\156\164\x5f\143\x6f\157\153\151\x65\137\x6c\x69\146\x65\164\151\x6d\x65", [$this, "\x63\x6f\x6d\155\145\156\x74\x43\157\157\x6b\151\x65\114\151\146\x65\164\x69\155\x65"])->addFilter("\160\162\145\x6c\x6f\141\144\x5f\x72\145\152\x65\x63\x74\x5f\x75\x72\151", [$this, "\x61\x64\144\122\x65\x6a\145\143\x74\125\162\151"], 2)->addFilter("\x66\151\x6c\x65\x73\x79\163\164\x65\x6d\x5f\162\x65\161\x75\151\162\x65\x5f\144\x69\x72\x65\x63\x74\157\162\151\145\x73", [$this, "\x61\x64\x64\124\157\x52\x65\x71\165\x69\x72\145\104\x69\162\145\x63\x74\x6f\162\171"])->addFilter("\x66\151\154\145\163\171\x73\x74\145\x6d\x5f\x72\x65\161\165\151\162\x65\137\x64\x69\x72\x65\143\164\x6f\x72\151\145\x73", [$this, "\141\x64\x64\124\x6f\x52\145\161\165\x69\x72\145\104\x69\162\x65\x63\164\x6f\x72\171"])->addFilter("\157\160\164\x69\155\x69\172\141\164\x69\157\156\x5f\x63\141\156\137\x70\x72\x65\x6c\x6f\141\x64", [$this, "\151\x73\x41\154\162\145\x61\x64\x79\103\141\143\x68\x65\144"], 2)->addFilter("\157\x70\164\x69\155\151\x7a\x61\x74\151\157\x6e\x5f\x69\x73\137\x6f\160\x74\x69\155\151\172\x65\x64", [$this, "\151\x73\x41\x6c\x72\145\141\144\171\x43\x61\x63\150\x65\x64"], 2)->addFilter("\x6f\x70\164\151\155\x69\172\141\x74\x69\157\x6e\x5f\143\x61\x63\150\145\x5f\x71\x75\x65\x72\171\x5f\163\164\x72\x69\x6e\147\x73", [$this, "\x62\x65\164\x74\145\162\116\147\151\x6e\x78\x43\x6f\x6d\x70\141\x74\x69\142\x69\x6c\x69\164\x79"]); return parent::addFilters(); } public function loadConstant() { goto d_vzF; h8fIz: nJf65: goto ywwR2; ks32y: $pHq9s &= $this->getFilesystem()->mkdir(OPTIMIZATION_BUSTING_PATH); goto h8fIz; d_vzF: $pHq9s = false; goto gYiBr; AkOxT: vfzET: goto HOrgx; GNBxG: define("\x4f\x50\x54\x49\115\x49\132\101\x54\111\x4f\116\137\x42\x55\x53\x54\x49\116\x47\x5f\x50\101\x54\110", untrailingslashit($GuTuU) . "\x2f\142\x75\x73\164\151\156\147"); goto ks32y; ywwR2: return $pHq9s; goto wfgIF; gYiBr: if ($GuTuU = Util::getConstant("\127\x50\137\x43\101\x43\110\105\x5f\x50\101\124\x48")) { goto vfzET; } goto AHBeX; HOrgx: define("\x4f\x50\124\111\115\111\x5a\101\x54\111\117\116\137\x43\x41\103\x48\x45\137\x50\101\x54\x48", $GuTuU . "\57\167\160\x2d\x63\x61\x63\x68\145"); goto tHn8O; tHn8O: $pHq9s = $this->getFilesystem()->mkdir(OPTIMIZATION_CACHE_PATH); goto GNBxG; AHBeX: Notice::warning(sprintf(__("\x25\163\x20\x63\157\x6e\x73\x74\141\x6e\164\40\156\x6f\164\x20\144\145\146\x69\156\x65\144\54\x20\x70\x6c\x65\x61\163\145\40\144\x65\146\151\x6e\x65\x20\164\150\141\x74\x20\151\x6e\40\167\160\x2d\x63\157\156\x66\x69\x67\56\160\150\160\56", OPTIMIZATION_DOMAIN), "\74\x63\x6f\144\145\x3e\127\120\x5f\103\x41\103\110\x45\137\x50\x41\x54\x48\x3c\57\143\x6f\x64\x65\76")); goto OyQe4; OyQe4: goto nJf65; goto AkOxT; wfgIF: } public function loadRequirement() { goto gD0Py; KwziN: Advanced::getInstance(); goto Tuy9o; Tuy9o: ZEdQa: goto PqmI8; sfwh8: WPCache::getInstance(); goto KwziN; gD0Py: if (!is_admin()) { goto ZEdQa; } goto TEI_f; TEI_f: Purge::getInstance(); goto sfwh8; PqmI8: } public function addToCronEvent($UGmeO) { $UGmeO["\157\160\164\x69\x6d\151\x7a\x61\x74\151\x6f\156\x5f\x70\x75\162\x67\145\x5f\164\x69\x6d\x65\x5f\145\x76\x65\x6e\164"] = __("\x53\x63\x68\x65\144\x75\154\145\x64\40\103\141\x63\150\145\x20\x50\x75\x72\x67\x65", OPTIMIZATION_DOMAIN); return $UGmeO; } public function isAlreadyCached($wFOOF, $kJMVe) { goto cQjjj; sHcUj: if (!('' !== $gJJsP["\x71\165\x65\162\171"])) { goto igt_o; } goto i5YgU; EVPBA: if (!is_string($hgTz4)) { goto zTIMb; } goto g2V3z; cQjjj: static $EUWxk; goto l1KSq; iPn3m: $EUWxk = is_ssl() ? "\x2d\x68\164\x74\x70\x73" : ''; goto tXWqF; YbNF9: igt_o: goto QvEEy; QvEEy: $cJrik = ArrayUtil::get($kJMVe, "\155\157\142\151\154\x65") ? "\x2d\x6d\x6f\142\x69\x6c\x65" : ''; goto T_LZ8; D3t8C: $hgTz4 = ArrayUtil::get($kJMVe, "\x75\162\154", $kJMVe); goto EVPBA; ZYYR5: if (isset($EUWxk)) { goto ywpla; } goto iPn3m; i5YgU: $gJJsP["\x71\x75\x65\x72\x79"] = "\43" . $gJJsP["\161\165\145\x72\x79"] . "\x2f"; goto YbNF9; g2V3z: $gJJsP = FormatUtil::getParseUrl($hgTz4); goto EAaAV; sGfAT: pnT1g: goto sqjuv; hfSgE: $wFOOF = $this->getFilesystem()->exists($oI6GX); goto E6HTQ; l1KSq: if (!$wFOOF) { goto pnT1g; } goto ZYYR5; VQuT_: $gJJsP["\160\141\x74\x68"] = trailingslashit($gJJsP["\x70\x61\164\x68"]); goto sHcUj; EAaAV: $gJJsP["\x68\157\x73\x74"] = FormatUtil::maybeUrlNoDots($gJJsP["\150\157\163\x74"]); goto VQuT_; sqjuv: return $wFOOF; goto k6Ts1; E6HTQ: zTIMb: goto sGfAT; T_LZ8: $oI6GX = Util::getConstant("\x4f\x50\124\111\115\111\x5a\x41\x54\111\x4f\x4e\137\103\x41\103\110\105\x5f\120\x41\x54\110") . $gJJsP["\x68\x6f\163\164"] . strtolower($gJJsP["\x70\141\164\x68"] . $gJJsP["\x71\165\x65\162\x79"]) . "\x69\156\144\145\x78" . $cJrik . $EUWxk . "\56\x68\164\155\154"; goto hfSgE; tXWqF: ywpla: goto D3t8C; k6Ts1: } public function addRejectUri($p6fEV, $y_msF) { return $p6fEV; } public function addOptionsToConfig(array $LfYsX, array $K87Lv = []) { goto VnyFa; aEN1W: $LfYsX["\165\162\x6c\x5f\x6e\x6f\x5f\x64\157\x74\x73"] = 1; goto RtO9R; zJUCj: ts7sk: goto r5I6X; RtO9R: Ag2N1: goto MkYZZ; Xr7kO: $K87Lv[Setting::CACHE_WEBP] = 0; goto ZyB13; aN4EA: qWF4t: goto moOho; ZyB13: jGTYe: goto lEqxU; XdeA1: $LfYsX["\x63\157\x6d\155\x6f\x6e\137\143\x61\143\x68\145\137\x6c\x6f\147\147\x65\144\137\165\163\x65\x72\x73"] = 1; goto aN4EA; gYmbE: foreach ($K87Lv as $qTQA0 => $b8HPW) { goto HfsdI; QhArh: eCOxM: goto BweUs; K1fRX: $LfYsX[$qTQA0] = $b8HPW; goto r4bEh; HfsdI: switch ($qTQA0) { case Setting::CACHE_SSL: case Setting::CACHE_WEBP: goto VOao3; o_hjU: goto XBr66; goto iMncm; VOao3: $b8HPW = (int) $b8HPW; goto CfWHY; t7kZw: RpBta: goto o0TSi; ec2UU: K7GP6: goto o_hjU; V2mie: if (!(1 !== $b8HPW)) { goto Ulli1; } goto ZIPYa; o0TSi: Ulli1: goto ec2UU; CfWHY: if (!(Setting::CACHE_SSL === $qTQA0)) { goto K7GP6; } goto V2mie; ZIPYa: if (!Util::isSSLWebsite()) { goto RpBta; } goto wY8F_; ZZ47J: $b8HPW = 1; goto t7kZw; wY8F_: Setting::getObject()::updateSetting(Setting::CACHE_SSL, "\x6f\156"); goto ZZ47J; iMncm: case Setting::CACHE_REJECT_URI: $b8HPW = StringUtil::addAroundQuotes(Setting::getCacheRejectUri()); goto XBr66; case Setting::CACHE_QUERY_STRINGS: $b8HPW = call_user_func("\x76\x61\x72\137\x65\x78\x70\x6f\162\x74", Setting::getCacheQueryString(), true); goto XBr66; case Setting::CACHE_REJECT_COOKIES: goto jKA53; d5r6f: $b8HPW = StringUtil::addAroundQuotes($b8HPW); goto LTe7T; ANJyH: $zuYNJ = explode(COOKIEHASH, LOGGED_IN_COOKIE); goto ouaiA; h3WxQ: $b8HPW = preg_replace("\57\134\x7c" . $zuYNJ . "\134\174\x2f", "\x7c", "\174" . $b8HPW . "\174"); goto U4fni; FLBkP: if (!($b8HPW && Setting::isCacheLoggedUser())) { goto vGKcg; } goto ANJyH; EjJHH: vGKcg: goto d5r6f; LTe7T: goto XBr66; goto FEInY; jCAgp: $zuYNJ = implode("\133\136\174\x5d\x2a", $zuYNJ); goto h3WxQ; jKA53: $b8HPW = Setting::getCacheRejectCookies(); goto FLBkP; ouaiA: $zuYNJ = array_map("\x70\x72\145\x67\x5f\x71\165\x6f\164\145", $zuYNJ); goto jCAgp; U4fni: $b8HPW = trim($b8HPW, "\174"); goto EjJHH; FEInY: case Setting::CACHE_REJECT_UA: $b8HPW = StringUtil::addAroundQuotes(Setting::getCacheRejectUA()); goto XBr66; default: $b8HPW = null; } goto QhArh; BweUs: XBr66: goto tBxRc; tBxRc: if (!(null !== $b8HPW)) { goto r_Lr3; } goto K1fRX; lkIBM: T0PQk: goto G5HR0; r4bEh: r_Lr3: goto lkIBM; G5HR0: } goto zJUCj; Z9lmd: if (!FormatUtil::isUrlNoDots()) { goto Ag2N1; } goto aEN1W; VnyFa: if (!$this->applyFilters("\x6f\x70\164\151\x6d\151\172\141\x74\x69\157\156\137\143\157\x6d\155\x6f\x6e\137\x63\141\x63\x68\145\137\154\x6f\x67\147\x65\144\x5f\165\163\145\162\x73", false)) { goto qWF4t; } goto XdeA1; r5I6X: $LfYsX["\143\x61\143\150\x65\137\x69\x67\156\157\162\145\144\x5f\160\141\x72\x61\155\x65\x74\x65\162\163"] = call_user_func("\166\141\x72\x5f\145\x78\x70\157\162\x74", Setting::getIgnoredParameters(), true); goto kBlfq; lEqxU: $K87Lv = wp_parse_args($K87Lv, [Setting::CACHE_SSL => 0, Setting::CACHE_WEBP => 0, Setting::CACHE_REJECT_UA => '', Setting::CACHE_REJECT_URI => '', Setting::CACHE_QUERY_STRINGS => '', Setting::CACHE_REJECT_COOKIES => '']); goto gYmbE; MkYZZ: return $LfYsX; goto eoz0I; kBlfq: $LfYsX["\143\141\143\x68\145\x5f\x6d\x61\x6e\x64\141\164\157\162\x79\x5f\143\x6f\x6f\x6b\151\x65\163"] = call_user_func("\166\x61\162\x5f\x65\170\x70\157\162\164", Setting::getCacheMandatoryCookies(), true); goto tmuQg; moOho: if (!(!isset($K87Lv[Setting::CACHE_WEBP]) && $this->applyFilters("\x6f\x70\x74\x69\x6d\151\x7a\141\x74\151\157\x6e\137\x63\141\143\x68\x65\x5f\144\x69\163\141\x62\154\145\137\x77\145\x62\x70\137\x63\x61\x63\150\x65", false))) { goto jGTYe; } goto Xr7kO; tmuQg: $LfYsX["\143\141\143\150\x65\137\144\171\156\x61\155\x69\x63\x5f\x63\157\157\x6b\151\x65\163"] = call_user_func("\166\141\162\137\x65\x78\160\x6f\162\164", Setting::getCacheDynamicCookies(), true); goto Z9lmd; eoz0I: } public function commentCookieLifetime($qqjK7) { $qqjK7 = $this->applyFilters("\157\x70\x74\151\x6d\x69\x7a\x61\x74\151\x6f\x6e\137\143\141\x63\x68\145\137\143\x6f\x6d\155\145\156\x74\137\143\x6f\157\x6b\x69\145\x5f\154\x69\x66\x65\164\x69\x6d\x65", 3 * MINUTE_IN_SECONDS); return $qqjK7; } public function addCacheQueryStrings($Qj8wK) { goto cCqsT; cCqsT: $gKlG3 = Setting::getCacheQueryString(); goto ZricW; ZricW: $Qj8wK = array_merge($Qj8wK, $gKlG3); goto QEYR1; QEYR1: return $Qj8wK; goto QYGyx; QYGyx: } public function addToRequireDirectory($lP5J0) { goto Zk_s0; hsvpo: $lP5J0[] = Util::getConstant("\x4f\120\124\111\115\111\x5a\x41\124\111\117\x4e\137\102\x55\x53\x54\111\116\107\137\x50\x41\124\x48"); goto drztQ; Zk_s0: $lP5J0[] = Util::getConstant("\x4f\x50\x54\x49\x4d\111\132\101\x54\x49\x4f\116\x5f\103\x41\103\110\x45\137\x50\x41\124\110"); goto PJD8f; drztQ: return $lP5J0; goto mE2tf; PJD8f: $lP5J0[] = Util::getConstant("\117\120\124\111\x4d\x49\132\101\x54\111\117\x4e\137\103\117\x4e\106\111\x47\137\120\x41\124\110"); goto hsvpo; mE2tf: } public function betterNginxCompatibility($Qj8wK) { goto t82Ok; Up1Xv: B2sLg: goto vZRx4; vZRx4: return $Qj8wK; goto d50iC; ZvO3T: if (!$t3Kmn) { goto B2sLg; } goto fOyxu; fOyxu: $Qj8wK[] = "\x71"; goto Up1Xv; t82Ok: global $t3Kmn; goto ZvO3T; d50iC: } public function updateSslOptionAfterSaveHomeUrl(array $SQ1cp, array $GYJ7g) { goto S_6oQ; PBhRD: kvU4q: goto M4Esk; X156F: $q2dHY = FormatUtil::extractUrlComponent($GYJ7g, PHP_URL_SCHEME); goto PJmKg; PJmKg: Setting::getObject()::updateSetting(Setting::CACHE_SSL, "\150\164\x74\x70\163" === $q2dHY ? 1 : 0); goto PBhRD; S_6oQ: if (!($SQ1cp !== $GYJ7g && Setting::isCacheSSL())) { goto kvU4q; } goto X156F; M4Esk: } }
