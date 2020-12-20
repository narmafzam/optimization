<?php
 namespace Optimization; use Boilerplate\Util\AjaxUtil; use Boilerplate\Util\StringUtil; use Optimization\Buffer\Config; use Optimization\Buffer\Test; use Optimization\Cache\Cache; use Optimization\Critical\Critical; use Optimization\Media\Media; use Optimization\Minify\Minify; use Optimization\Performance\Performance; use Optimization\Process\Process; use Optimization\Util\FormatUtil; use Optimization\Util\I18NUtil; use Optimization\Util\Util; class Optimization extends Common { public function __construct() { goto YHNyr; Aq9PT: parent::__construct(); goto QTtCX; QTtCX: KywbO: goto ONsnR; YHNyr: if (!$this->loadConstant()) { goto KywbO; } goto Aq9PT; ONsnR: } public function addActions() : self { $this->addAction("\x61\144\155\151\156\137\x69\x6e\151\x74", [$this, "\141\x64\155\151\x6e\x49\156\151\x74"])->addAction("\164\145\155\x70\x6c\x61\164\x65\x5f\162\145\x64\x69\x72\145\143\164", [$this, "\163\164\141\162\164\120\162\x6f\143\x65\163\163"])->addAction("\155\165\160\154\x75\147\x69\156\163\x5f\154\157\x61\x64\145\x64", [$this, "\x6d\165\120\154\x75\147\151\156\163\x4c\157\x61\x64\x65\144"])->addAction("\x61\146\164\145\162\x5f\x73\145\x74\165\x70\x5f\164\150\x65\155\145", [$this, "\x6c\x6f\x61\x64\x52\x65\161\x75\x69\x72\145\x6d\145\x6e\164"]); return parent::addActions(); } public function startProcess() { goto qHH1R; jiF9p: (new Buffer(new Test($dL3HD, [])))->maybeInitProcess(); goto QYME2; qHH1R: if (is_admin()) { goto dqjXi; } goto PdVkB; PdVkB: $dL3HD = new Config(["\x70\x61\x74\x68" => Util::getConstant("\x4f\120\124\111\115\111\x5a\101\x54\111\x4f\116\137\x43\117\116\x46\x49\x47\x5f\120\101\124\110")]); goto jiF9p; QYME2: dqjXi: goto NekVJ; NekVJ: } public function loadConstant() { goto Bnw1o; hUWYV: $this->getFilesystem()->addRequireDir(OPTIMIZATION_CONFIG_PATH); goto zJ9Gk; SMOa1: if (Util::hasConstant("\102\x4f\x49\114\x45\x52\x50\x4c\x41\124\x45\x5f\x56\x41\122\x5f\120\101\124\110")) { goto uXoET; } goto jLmLq; G57D7: define("\x4f\120\x54\111\115\111\132\x41\124\x49\117\116\x5f\122\x4f\117\124\x5f\x44\x49\x52\105\103\124\117\x52\131", realpath(__DIR__ . "\x2f\x2e\56\x2f\56\x2e\x2f")); goto f9uVS; f9uVS: return $pHq9s; goto LMpVY; jLmLq: Notice::warning(sprintf(__("\45\163\x20\x63\157\x6e\x73\164\x61\x6e\164\x20\156\157\x74\40\144\145\x66\x69\x6e\145\144\x2c\40\x70\154\x65\141\x73\x65\40\x64\145\146\x69\x6e\x65\40\164\150\141\x74\40\151\156\x20\x77\x70\x2d\143\x6f\156\x66\151\147\56\160\150\160\x2e", OPTIMIZATION_DOMAIN), "\74\x63\x6f\x64\145\76\x57\x50\137\126\x41\122\x5f\120\101\x54\x48\74\57\143\x6f\144\145\76")); goto ZKrL0; tnoFe: define("\x4f\120\124\111\x4d\x49\x5a\101\124\111\117\116\x5f\104\117\115\x41\111\116", "\157\x70\164\x69\x6d\x69\172\x61\164\151\x6f\x6e"); goto G57D7; rGc0y: if (!define("\117\120\124\x49\x4d\x49\x5a\101\124\111\117\x4e\137\x43\x4f\116\106\x49\x47\x5f\120\x41\x54\110", Util::getConstant("\102\117\x49\114\105\x52\120\x4c\101\124\105\137\126\101\x52\x5f\x50\x41\124\x48") . "\57\143\157\156\146\151\x67")) { goto xJDYR; } goto hUWYV; Ua4Ui: caGzL: goto tnoFe; Bnw1o: $pHq9s = false; goto SMOa1; zJ9Gk: xJDYR: goto Ua4Ui; DxPZk: $pHq9s = true; goto rGc0y; HNlaz: uXoET: goto DxPZk; ZKrL0: goto caGzL; goto HNlaz; LMpVY: } public function adminInit() { $this->createConfigFile(); } public function muPluginsLoaded() { $this->doAction("\x62\157\x69\x6c\145\x72\x70\x6c\x61\164\x65\137\164\x77\x69\x67\137\x61\x64\144\137\x70\141\x74\x68", OPTIMIZATION_DOMAIN, OPTIMIZATION_ROOT_DIRECTORY)->loadTextDomain(OPTIMIZATION_DOMAIN); } public function loadRequirement() { goto xGxnK; zY25c: goto Q_x4d; goto aaAKo; tmBYE: if (!AjaxUtil::isAjax()) { goto m1iFY; } goto KpUbW; xGxnK: Media::getInstance(); goto MWsf9; wntgi: Q_x4d: goto MtR1k; mRQdY: Theme::getInstance(); goto CaaZw; KpUbW: Ajax::getInstance(); goto zY25c; aaAKo: m1iFY: goto mRQdY; CaaZw: Minify::getInstance(); goto OMGaN; MWsf9: Cache::getInstance(); goto tmBYE; OMGaN: Performance::getInstance(); goto wntgi; MtR1k: } public function getFiles() : array { goto gyUEv; d8I_w: m9BLw: goto E8MOS; ral8L: $BWnT3 = $JSjLt; goto d8I_w; ZSW7d: vSLSr: goto l1IWI; oyeFn: if (!$JSjLt) { goto m9BLw; } goto ral8L; gdMhd: $BWnT3 = [I18NUtil::getHomeUrl()]; goto JHTCR; gyUEv: $KWSCi = []; goto gdMhd; E8MOS: foreach ($BWnT3 as $hgTz4) { goto VBmco; FUP7H: $wpkb5 = FormatUtil::getParseUrl(untrailingslashit($hgTz4)); goto LSFw0; LSFw0: if (!$GuTuU) { goto n8xCR; } goto dvbbS; MyAte: OViCC: goto n4Kao; VBmco: $GuTuU = Util::getConstant("\117\x50\x54\x49\x4d\111\x5a\x41\124\x49\x4f\x4e\137\x43\117\x4e\106\x49\x47\x5f\x50\101\124\x48"); goto FUP7H; Exlmu: $GmGyQ = strtolower($wpkb5["\150\157\163\x74"]) . $wpkb5["\x70\x61\164\x68"] . "\x2e\160\x68\x70"; goto tiH4R; tiH4R: $KWSCi[$GmGyQ] = $GuTuU; goto WhWN6; WhWN6: n8xCR: goto MyAte; dvbbS: $wpkb5["\160\141\164\150"] = $wpkb5["\160\141\x74\150"] ? str_replace("\57", "\56", untrailingslashit($wpkb5["\x70\141\164\x68"])) : ''; goto Exlmu; n4Kao: } goto ZSW7d; l1IWI: return $this->applyFilters("\157\x70\x74\151\x6d\151\x7a\x61\164\151\157\x6e\x5f\143\157\x6e\146\151\147\x75\162\141\164\151\x6f\x6e\137\x66\151\154\145\x73\137\160\x61\164\150", $KWSCi); goto VW6Zk; JHTCR: $JSjLt = I18NUtil::getSubdomains(); goto oyeFn; VW6Zk: } public function createConfigFile() { goto AQogb; AQogb: $KWSCi = $this->getFiles(); goto DmTvG; nMUA_: dZV_f: goto M138A; FlGYc: if (!(is_array($KWSCi) && $KWSCi)) { goto c1F6t; } goto Valua; Valua: foreach ($KWSCi as $wpkb5 => $GuTuU) { goto cFubt; EZ83V: Aw_5_: goto e7vit; uw8Hz: $B6fu9 = preg_replace("\100\x61\x72\x72\141\x79\134\163\x2b\x5c\x28\100\151", "\x61\x72\x72\x61\x79\50", $B6fu9); goto aaCsc; z9Nw7: $B6fu9 = $this->renderTwigTemplate("\143\x6f\156\146\151\x67\56\160\150\x70", ["\143\157\156\x66\x69\147\x73" => $LfYsX]); goto uw8Hz; bMXQJ: goto QuT7A; goto gd3U8; FscrV: Notice::writingPermission("\157\x70\164\151\x6d\151\x7a\x61\x74\x69\157\156\x2d\x63\x6f\x6e\146\x69\147", $GuTuU); goto bMXQJ; S3Ib6: $this->getFilesystem()->mkfile($GuTuU, $wpkb5, $B6fu9); goto oMMUe; gd3U8: jdjfk: goto z9Nw7; pfYQO: QuT7A: goto EZ83V; e7vit: kv80i: goto ID_Uw; JMwQo: if ($this->getFilesystem()->mkdir($GuTuU) && $this->getFilesystem()->isReadable($GuTuU)) { goto jdjfk; } goto FscrV; cFubt: if ($this->getFilesystem()->exists(trailingslashit($GuTuU) . $wpkb5)) { goto Aw_5_; } goto JMwQo; aaCsc: $B6fu9 = preg_replace("\100\x61\162\x72\x61\171\x5c\x28\x5c\x73\53\x5c\51\x40\x69", "\141\162\x72\x61\x79\x28\51", $B6fu9); goto S3Ib6; oMMUe: Notice::info(sprintf(__("\x4f\x70\164\151\x6d\151\x7a\141\164\151\x6f\x6e\x20\143\x6f\x6e\x66\x69\x67\x20\146\151\x6c\x65\40\x25\163\40\x67\145\156\145\162\x61\x74\145\144\40\151\x6e\40\45\163", OPTIMIZATION_DOMAIN), "\x3c\x63\x6f\144\x65\x3e{$wpkb5}\x3c\57\x63\157\x64\145\76", "\x3c\x63\x6f\x64\x65\76{$GuTuU}\74\x2f\143\x6f\x64\x65\76"), "\x6f\x70\x74\x69\x6d\x69\x7a\141\x74\x69\157\x6e\55\143\x6f\156\146\151\x67"); goto pfYQO; ID_Uw: } goto nMUA_; DmTvG: $LfYsX = $this->getConfiguration(); goto FlGYc; M138A: c1F6t: goto dZAr_; dZAr_: } public function getConfiguration() : array { $LfYsX = ["\x63\x61\x63\150\145\137\163\x73\x6c" => 0, "\143\141\143\150\x65\x5f\x77\x65\142\x70" => 0, "\x63\x6f\157\x6b\x69\145\x5f\150\141\163\x68" => "\x27" . Util::getConstant("\103\117\117\113\x49\x45\x48\x41\x53\110") . "\x27", "\143\x61\x63\150\x65\137\x72\145\152\145\x63\164\x5f\x75\141" => 0, "\154\x6f\x67\x67\145\144\x5f\x69\156\x5f\x63\157\x6f\153\x69\x65" => "\47" . Util::getConstant("\114\x4f\x47\x47\105\x44\x5f\x49\116\137\x4b\105\x59") . "\x27", "\143\x61\x63\150\145\137\x72\145\152\145\143\164\137\165\x72\151" => 0, "\x63\141\143\150\x65\x5f\x71\165\145\x72\171\137\163\164\162\x69\156\x67\x73" => 0, "\x63\141\x63\150\145\x5f\x72\145\x6a\x65\143\164\137\143\157\157\153\151\x65\163" => $this->getRejectCookies()]; return $this->applyFilters("\x6f\x70\164\151\x6d\151\172\x61\x74\x69\x6f\x6e\137\x63\x6f\x6e\146\151\x67\165\162\141\164\x69\x6f\x6e\x73", $LfYsX); } public function getRejectCookies() : string { goto EQR0t; RXOqE: $dA_0n[] = $zuYNJ; goto qm4Ne; VMK1h: $dA_0n = array_flip(array_flip($dA_0n)); goto SB94w; qm4Ne: $dA_0n[] = "\167\160\55\x70\x6f\163\164\160\141\x73\163\x5f"; goto gdKnc; pYbj_: $dA_0n = (array) $this->applyFilters("\157\x70\164\x69\x6d\x69\x7a\x61\x74\151\157\x6e\137\143\141\x63\150\x65\137\x72\x65\x6a\145\x63\164\137\x63\157\157\153\151\x65\163", $dA_0n); goto AbYrq; OxNR7: $zuYNJ = implode("\56\x2b", $zuYNJ); goto RXOqE; vrY7k: $dA_0n[] = "\x63\157\155\155\145\156\164\137\x61\x75\x74\150\x6f\162\x5f"; goto ZfPud; SB94w: return StringUtil::addAroundQuotes(implode("\x7c", $dA_0n)); goto cZpvs; gdKnc: $dA_0n[] = "\x77\160\164\x6f\x75\143\150\137\x73\167\151\x74\x63\150\137\164\x6f\x67\x67\x6c\x65"; goto vrY7k; AbYrq: $dA_0n = array_filter($dA_0n); goto VMK1h; ZfPud: $dA_0n[] = "\x63\157\x6d\x6d\145\156\164\x5f\x61\165\x74\x68\157\162\137\x65\x6d\141\151\x6c\137"; goto pYbj_; H4Ads: $zuYNJ = array_map("\x70\x72\145\x67\x5f\161\x75\x6f\x74\145", $zuYNJ); goto OxNR7; EQR0t: $zuYNJ = explode(COOKIEHASH, LOGGED_IN_COOKIE); goto H4Ads; cZpvs: } }
