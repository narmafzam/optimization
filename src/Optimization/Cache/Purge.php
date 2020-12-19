<?php
 namespace Optimization\Cache; use Boilerplate\Util\PostUtil; use Boilerplate\Util\UserUtil; use Optimization\Purge as BaseClass; use Optimization\Util\FileUtil; use Optimization\Util\FormatUtil; use Optimization\Util\I18NUtil; class Purge extends BaseClass { public function __construct() { goto pho7D; CPl2E: $this->paths = [Util::getCachePath()]; goto BIWG1; pho7D: $this->id = "\143\x61\x63\x68\145"; goto CPl2E; BIWG1: parent::__construct(); goto KfS9G; KfS9G: } public function addActions() : self { $this->addAction("\x64\145\154\x65\x74\145\x5f\160\157\x73\164", [$this, "\143\154\145\141\x6e\120\x6f\x73\164"])->addAction("\167\x70\137\x75\160\144\x61\164\145\x5f\x6e\141\166\137\155\145\156\165", [$this, "\x63\154\x65\x61\x6e\104\157\155\141\151\x6e"])->addAction("\165\x70\x64\141\x74\145\137\157\x70\x74\x69\157\156\137\163\x69\x64\x65\142\141\x72\163\x5f\x77\x69\144\147\145\x74\x73", [$this, "\143\x6c\145\141\x6e\x44\x6f\x6d\141\x69\156"])->addAction("\160\145\162\155\141\154\151\x6e\x6b\x5f\163\164\x72\x75\143\164\165\x72\145\137\x63\x68\141\x6e\x67\x65\x64", [$this, "\x63\x6c\x65\141\156\104\157\155\x61\151\156"])->addAction("\x65\144\x69\x74\x5f\164\x65\162\x6d", [$this, "\x6d\141\171\142\x65\x50\165\162\147\145\x43\141\143\x68\x65\117\x6e\124\x65\x72\x6d\103\150\141\156\x67\x65"], 3)->addAction("\x63\162\145\x61\164\x65\x5f\164\x65\162\x6d", [$this, "\x6d\141\171\142\x65\x50\165\x72\147\x65\103\141\x63\x68\x65\117\156\x54\x65\162\155\103\x68\141\x6e\x67\x65"], 3)->addAction("\144\x65\x6c\x65\164\x65\137\x74\x65\162\x6d", [$this, "\155\141\171\142\x65\x50\x75\x72\x67\x65\103\141\143\150\x65\x4f\156\124\145\162\155\103\x68\141\x6e\x67\145"], 3)->addAction("\x70\162\x65\x5f\x70\157\x73\x74\x5f\165\160\x64\141\x74\x65", [$this, "\160\165\x72\147\x65\120\x6f\163\164\x4f\x6e\123\154\165\147\103\150\x61\x6e\x67\x65"], 2, 99999)->addAction("\x77\x70\137\165\160\144\141\x74\145\x5f\x63\x6f\155\x6d\145\x6e\164\137\x63\157\165\156\164", [$this, "\143\154\x65\x61\x6e\120\157\x73\164"])->addAction("\x75\160\144\141\164\145\x5f\157\x70\x74\151\x6f\x6e\x5f\164\x61\x67\x5f\x62\x61\x73\x65", [$this, "\x63\x6c\x65\x61\x6e\x44\157\x6d\x61\x69\156"])->addAction("\165\x70\144\141\x74\145\137\x6f\x70\x74\x69\x6f\x6e\137\x63\x61\x74\x65\147\157\x72\171\x5f\142\141\163\x65", [$this, "\x63\x6c\145\141\x6e\104\157\x6d\141\x69\x6e"])->addAction("\x61\x64\x64\137\154\x69\x6e\153", [$this, "\143\x6c\145\x61\156\x44\157\x6d\141\151\156"])->addAction("\x65\144\151\x74\x5f\154\x69\x6e\x6b", [$this, "\143\154\x65\141\156\x44\x6f\155\x61\151\156"])->addAction("\x64\x65\x6c\145\x74\145\137\x6c\x69\x6e\153", [$this, "\143\x6c\x65\x61\x6e\104\x6f\155\141\151\156"])->addAction("\143\x75\163\164\157\155\151\x7a\x65\x5f\x73\x61\x76\145", [$this, "\x63\x6c\x65\x61\x6e\104\x6f\155\x61\x69\x6e"])->addAction("\x75\160\x64\141\x74\x65\x5f\x6f\x70\164\x69\x6f\x6e\137\164\150\145\x6d\145\x5f\155\x6f\x64\163\137" . Util::getOption("\163\x74\171\154\145\x73\150\145\x65\x74"), [$this, "\x63\154\145\x61\156\104\x6f\x6d\141\x69\x6e"])->addAction("\167\x70\x5f\164\x72\141\x73\x68\x5f\x70\157\x73\x74", [$this, "\x63\x6c\x65\x61\156\x50\157\163\x74"])->addAction("\143\154\x65\x61\x6e\x5f\160\x6f\x73\164\x5f\143\141\x63\150\145", [$this, "\x63\x6c\x65\x61\156\x50\157\163\164"])->addAction("\x70\x72\x65\137\160\157\x73\164\137\x75\160\144\141\x74\x65", [$this, "\x63\x6c\x65\141\156\120\157\x73\164\103\x61\143\x68\x65\117\156\x53\164\141\x74\165\163\103\150\x61\x6e\x67\145"], 2)->addAction("\141\144\155\151\156\x5f\x70\x6f\x73\x74\x5f\x6f\160\164\x69\x6d\x69\x7a\141\164\x69\157\x6e\137\160\165\162\x67\x65\x5f\157\160\x63\141\x63\150\145", [$this, "\141\x64\155\151\x6e\120\157\163\164\x50\x75\x72\x67\145\117\160\143\x61\x63\150\145"])->addAction("\144\145\x6c\x65\x74\145\x5f\x75\x73\x65\162", [$this, "\160\x75\162\147\145\x55\163\145\x72\103\x61\x63\150\145"])->addAction("\x70\x72\157\146\151\154\x65\137\x75\160\144\x61\164\x65", [$this, "\x70\x75\x72\x67\x65\x55\x73\x65\x72\103\141\x63\x68\x65"]); return parent::addActions(); } public function purgePostOnSlugChange($u2ese, $vwB7A) { goto WcjZJ; KSg3u: bgyWx: goto mjcYT; mjcYT: CUK0k: goto vdzdm; E6BKZ: if (!($wYOl6 && $wYOl6 !== $vwB7A["\160\x6f\x73\164\x5f\x6e\141\155\x65"])) { goto bgyWx; } goto rzmO7; rzmO7: $this->cleanFiles(PostUtil::getPermalink($u2ese)); goto KSg3u; uq2Yi: if (in_array($g0ltr, ["\144\162\141\146\x74", "\x70\x65\156\144\151\156\147", "\x61\165\164\157\55\x64\162\x61\146\164"], true)) { goto CUK0k; } goto hAKy6; hAKy6: $wYOl6 = PostUtil::getSlug($u2ese); goto E6BKZ; WcjZJ: $g0ltr = PostUtil::getStatus($u2ese); goto uq2Yi; vdzdm: } public function addFilters() : self { $this->addFilter("\x77\x69\144\147\145\164\137\x75\x70\144\x61\164\145\137\x63\x61\x6c\x6c\142\x61\x63\153", [$this, "\x77\x69\x64\x67\145\x74\125\x70\x64\141\164\145\x43\141\154\x6c\142\141\x63\x6b"]); return parent::addFilters(); } public function resetOpcache() { goto F0Qoi; zzLN0: return false; goto gztbx; IZe2v: $TjjJ1 = ini_get("\157\160\143\x61\143\x68\x65\x2e\x72\x65\163\164\x72\x69\x63\164\x5f\141\160\x69"); goto mAE2l; Nek5J: if (!function_exists("\x6f\160\143\141\x63\150\145\x5f\x72\x65\x73\145\164")) { $cQlm7 = false; return false; } goto IZe2v; gztbx: Ns_0c: goto P30Je; cwV86: if ($cQlm7) { goto Ns_0c; } goto zzLN0; o3bNu: if (isset($cQlm7)) { goto Mcvox; } goto Nek5J; pCNfw: $cQlm7 = false; goto yZyDD; yZyDD: return false; goto WU1eS; P30Je: $nM61U = opcache_reset(); goto ZLSIl; ZLSIl: do_action("\157\160\164\151\155\151\x7a\x61\x74\x69\x6f\156\137\x61\146\164\x65\162\137\162\x65\163\x65\x74\x5f\157\160\143\x61\x63\x68\145"); goto nOiUX; fVrrN: $cQlm7 = true; goto LFd7F; LFd7F: Mcvox: goto cwV86; ZcCXt: do_action("\x6f\x70\x74\x69\x6d\x69\x7a\141\164\151\157\x6e\x5f\x62\145\146\x6f\162\145\x5f\x72\x65\163\x65\164\x5f\x6f\x70\x63\x61\x63\150\x65"); goto o3bNu; WU1eS: hX93R: goto fVrrN; F0Qoi: static $cQlm7; goto ZcCXt; nOiUX: return $nM61U; goto drAbn; mAE2l: if (!($TjjJ1 && strpos(__FILE__, $TjjJ1) !== 0)) { goto hX93R; } goto pCNfw; drAbn: } public function purgeUserCache($p1ua7) { goto aANDi; V7qhE: lPKxe: goto ddNhZ; WTkjL: $this->cleanUser($p1ua7); goto V7qhE; aANDi: if (!$this->shouldPurgeUserCache()) { goto lPKxe; } goto WTkjL; ddNhZ: } private function shouldPurgeUserCache() { goto Syjjn; RlNVN: $OaTi2 = !(bool) $this->applyFilters("\x6f\x70\164\151\155\x69\172\x61\x74\x69\157\x6e\137\143\157\x6d\x6d\x6f\x6e\x5f\x63\141\x63\x68\145\x5f\154\x6f\x67\x67\145\x64\x5f\165\x73\145\162\163", false); goto Ahg9J; Ahg9J: EHBqG: goto cOlRp; Syjjn: $OaTi2 = false; goto Giwfn; Giwfn: if (!Setting::isCacheLoggedUser()) { goto EHBqG; } goto RlNVN; cOlRp: return $OaTi2; goto yjRIh; yjRIh: } public function cleanUser($Q6Bxn, $Onk5O = '') { goto exeNq; qrMp0: $BWnT3 = $this->applyFilters("\157\x70\x74\151\x6d\151\x7a\x61\164\151\x6f\x6e\137\x63\x6c\x65\x61\x6e\137\144\157\155\x61\x69\156\x5f\x75\162\x6c\x73", $BWnT3, $Onk5O); goto hBeP5; v_hUY: $p1ua7 = UserUtil::getField($Q6Bxn); goto gsayT; W3LU7: $BWnT3 = (array) $BWnT3; goto qrMp0; gsayT: if (!$p1ua7) { goto guF_D; } goto TkJfw; hBeP5: $BWnT3 = array_filter($BWnT3); goto v_hUY; pi1Qm: foreach ($BWnT3 as $hgTz4) { goto RTB0q; FJDuN: if (!$fTqn_) { goto HdogC; } goto BAUxz; CH6dN: VlNpd: goto U6qRz; RTB0q: $NFJp4 = FormatUtil::getParseUrl($hgTz4); goto zykRA; RPTat: HdogC: goto Owouv; l3xuM: $this->doAction("\x6f\x70\x74\151\155\151\x7a\x61\x74\151\x6f\x6e\x5f\x62\145\x66\157\162\145\137\x63\141\x63\x68\x65\137\x63\154\145\x61\156\137\165\x73\145\x72", $Q6Bxn, $Onk5O); goto oMxUT; Owouv: $this->doAction("\x6f\x70\x74\x69\x6d\x69\172\141\x74\151\x6f\x6e\x5f\x61\146\x74\145\162\137\x63\x61\143\x68\145\137\x63\154\145\141\156\137\165\163\x65\x72", $Q6Bxn, $Onk5O); goto n7IFQ; U6qRz: $tQVlb = Util::getConstant("\117\120\x54\111\115\111\x5a\x41\124\111\117\x4e\x5f\x43\x41\103\110\x45\x5f\120\101\x54\x48") . $NFJp4["\x68\x6f\163\x74"] . "\x2d" . $l6zhM . "\52" . $NFJp4["\160\141\164\150"]; goto l3xuM; mdZGE: DMm2w: goto RPTat; n7IFQ: HHdIs: goto rW9YI; zykRA: if (!isset($NFJp4["\x68\x6f\163\164"])) { goto VlNpd; } goto OsIna; OsIna: $NFJp4["\x68\x6f\163\164"] = FormatUtil::maybeUrlNoDots($NFJp4["\x68\x6f\x73\x74"]); goto CH6dN; BAUxz: foreach ($fTqn_ as $lzD2z) { FileUtil::rrmdir($lzD2z, I18NUtil::getDirectoriesToPreserve($Onk5O)); U3sLx: } goto mdZGE; oMxUT: $fTqn_ = glob($tQVlb . "\x2a", GLOB_NOSORT); goto FJDuN; rW9YI: } goto JNwu8; JNwu8: Vebr6: goto UY90D; exeNq: $BWnT3 = !$Onk5O || is_object($Onk5O) ? I18NUtil::getUri() : I18NUtil::getHomeUrlByLang($Onk5O); goto W3LU7; UY90D: guF_D: goto wWWAp; TkJfw: $l6zhM = $p1ua7->user_login . "\55" . Setting::getSecretCacheKey(); goto pi1Qm; wWWAp: } public function adminPostPurgeOpcache() { goto u5wte; ntwMI: set_transient(UserUtil::getId() . "\137\157\x70\x63\141\x63\150\x65\x5f\x70\x75\x72\147\x65\x5f\x72\x65\163\165\154\164", $CRRxp); goto Bqh28; KFJoj: zr5gm: goto ntwMI; pp7S4: die; goto B93xV; u5wte: if (!(!isset($_GET["\x5f\x77\x70\156\157\156\x63\x65"]) || !wp_verify_nonce(sanitize_key($_GET["\x5f\x77\160\x6e\157\x6e\x63\x65"]), "\x6f\x70\164\x69\155\x69\172\141\x74\x69\157\156\137\x70\x75\x72\x67\145\137\157\160\143\141\x63\x68\145"))) { goto z2m2c; } goto uV_qW; B93xV: yBiWe: goto gqWLF; Us2Hy: if (!UserUtil::currentCan("\x6d\x61\156\x61\147\x65\x5f\157\x70\x74\x69\x6f\x6e\163")) { goto yBiWe; } goto aehiO; aehiO: $nM61U = $this->resetOpcache(); goto mIDAn; YkzXi: $CRRxp = ["\162\145\x73\165\x6c\x74" => "\145\162\162\157\162", "\x6d\145\x73\163\141\147\x65" => __("\117\120\x63\141\x63\x68\x65\x20\160\165\162\147\145\40\x66\141\151\x6c\145\x64\x2e", OPTIMIZATION_DOMAIN)]; goto KFJoj; Bqh28: wp_safe_redirect(esc_url_raw(wp_get_referer())); goto pp7S4; u203z: z2m2c: goto Us2Hy; mIDAn: if (!$nM61U) { goto EUJHK; } goto wwPLa; WOGGS: EUJHK: goto YkzXi; SeCLT: goto zr5gm; goto WOGGS; uV_qW: wp_nonce_ays(''); goto u203z; wwPLa: $CRRxp = ["\162\x65\163\165\154\164" => "\x73\165\143\x63\145\x73\x73", "\155\145\163\163\x61\147\145" => __("\x4f\x50\143\141\x63\x68\145\x20\163\165\x63\143\x65\x73\x73\146\x75\x6c\x6c\x79\40\160\165\162\x67\145\144", OPTIMIZATION_DOMAIN)]; goto SeCLT; gqWLF: } public function widgetUpdateCallback($E9o22) { $this->cleanDomain(); return $E9o22; } }
