<?php
 namespace Optimization\Critical\CSS; use Boilerplate\DOMCrawler; use Boilerplate\Util\ArrayUtil; use Boilerplate\Util\CommonUtil; use DOMElement; use Optimization\Critical\CSS\Data\Rule; use Symfony\Component\CssSelector\CssSelectorConverter; use DOMDocument; use DOMXPath; use Exception; class Extractor extends Common { protected ?array $rules = []; protected CssSelectorConverter $converter; public function __construct() { $this->converter = new CssSelectorConverter(); parent::__construct(); } public function getRules() : ?array { return $this->rules; } public function addRule($nzF0q, ?Rule $Bj1fM) : self { goto REtfb; ASKsW: $this->rules[$nzF0q] = $Bj1fM; goto b7kab; wi3nc: $this->rules[] = $Bj1fM; goto MNFVj; UpvS0: CYJU9: goto ASKsW; MNFVj: goto iqhmP; goto UpvS0; b7kab: iqhmP: goto XQ_1d; XQ_1d: return $this; goto Dra73; REtfb: if ($nzF0q) { goto CYJU9; } goto wi3nc; Dra73: } public function getConverter() : ?CssSelectorConverter { return $this->converter; } protected function createDom(string $VoLyz) { goto ncpZ2; wkZ42: $F0Hdh->loadHTML(mb_convert_encoding($VoLyz, "\110\x54\115\114\55\x45\116\124\111\124\111\x45\123", "\x55\124\x46\x2d\70")); goto FCDvH; ncpZ2: $F0Hdh = new DOMDocument("\61\x2e\60", "\x55\x54\x46\55\70"); goto Uz7zu; oyRYi: libxml_use_internal_errors($H0U3H); goto CEcEh; AZhVm: if (!$VoLyz) { goto EYLAU; } goto wkZ42; Uz7zu: $H0U3H = libxml_use_internal_errors(true); goto AZhVm; zRfpE: return $F0Hdh; goto Mc_gb; FCDvH: EYLAU: goto oyRYi; CEcEh: $F0Hdh->formatOutput = true; goto zRfpE; Mc_gb: } private function getFile(string $k6Dhk) { return trailingslashit(Util::getFullPath()) . $k6Dhk . "\56\x63\141\143\x68\x65"; } private function getCache(string $k6Dhk) { goto J2VxZ; pg_TT: if (!$this->getFilesystem()->exists($wpkb5)) { goto fswZx; } goto eHaPA; SvIRS: fswZx: goto omc87; J2VxZ: $XZohm = []; goto jqk9B; A0fM1: $wy9UW = unserialize($B6fu9); goto zfDlP; zfDlP: if (!(is_array($wy9UW) && $wy9UW)) { goto H0N6w; } goto Z4D9Z; jqk9B: $wpkb5 = $this->getFile($k6Dhk); goto pg_TT; eHaPA: $B6fu9 = $this->getFilesystem()->getContent($wpkb5); goto xnbsT; xnbsT: if (!$B6fu9) { goto MD_Np; } goto A0fM1; Z4D9Z: $XZohm = $wy9UW; goto Rg119; omc87: return $XZohm; goto jARgv; ZI7p7: MD_Np: goto SvIRS; Rg119: H0N6w: goto ZI7p7; jARgv: } private function prepareRules(array $XZohm = []) { goto plsau; uVSPf: return $irTzY; goto XiEtd; plsau: $irTzY = []; goto A7JdP; xmNIb: aZzpH: goto uVSPf; A7JdP: foreach ($XZohm as $Bj1fM) { goto D9x2C; M_Xc7: $irTzY[$Bj1fM->getOrder()][$Bj1fM->getMedia()][] = $Bj1fM; goto Tb8DY; FO3dy: kt0Cq: goto pRg9k; Tb8DY: ZS1b7: goto FO3dy; D9x2C: if (!$Bj1fM instanceof Rule) { goto ZS1b7; } goto M_Xc7; pRg9k: } goto xmNIb; XiEtd: } private function buildExpression(?string $C2Sin) { try { $juQiG = $this->getConverter()->toXPath($C2Sin); } catch (Exception $aMHBS) { goto Eqk9E; U3uVn: return false; goto wxe_R; Mtfbl: try { $HTZZL = explode("\72", $C2Sin); $juQiG = $this->getConverter()->toXPath((string) reset($HTZZL)); } catch (Exception $XIaY1) { return false; } goto UJ2XV; wxe_R: JqA4B: goto Mtfbl; Eqk9E: if (!($aMHBS->getMessage() !== "\x50\x73\x65\165\x64\x6f\55\x65\x6c\x65\x6d\x65\156\164\163\x20\x61\162\145\x20\x6e\157\164\x20\163\165\x70\x70\157\162\x74\145\x64\x2e")) { goto JqA4B; } goto U3uVn; UJ2XV: } return $juQiG; } public function extractByPermalink(?string $fnl_W) { goto hyBov; dSYaY: return $VVHCj; goto i3Y67; hyBov: $VVHCj = true; goto TlzBY; C_j1_: $VVHCj = $this->extract(ArrayUtil::get($CRRxp, "\x62\x6f\x64\171"), $FF3Wu); goto t8rRY; TlzBY: if (!($FF3Wu = Util::isNotGenerated($fnl_W))) { goto Ue59J; } goto AEnL6; AEnL6: $CRRxp = wp_remote_get($fnl_W); goto C_j1_; t8rRY: Ue59J: goto dSYaY; i3Y67: } public function extract(?string $VoLyz, ?string $EOJKs, $pHq9s = false) { goto DBL16; tTnrt: foreach ($Lwbqq as $GuTuU) { $QHtFv .= $yb0zb->getContent($GuTuU); i3Q__: } goto ZsXPS; Fyiyk: if (!($pHq9s && $uQihC)) { goto Ypart; } goto gnU4p; DBL16: $VVHCj = false; goto EB3pE; JhkMK: $GmGyQ = strtolower(self::getShortClass()); goto r7xdO; gxLK7: Ypart: goto zkDZ5; GHE72: $b8HPW = preg_replace("\57\x5b\x5e\x5c\160\x7b\x4c\x7d\x5c\160\173\116\x7d\134\x73\x5d\57\x75", '', $b8HPW); goto fVM4K; o7yOJ: $VVHCj = $this->getFilesystem()->putContent($EOJKs, $uQihC); goto R77NW; KG33a: $Lwbqq = []; goto UvKTQ; WPAOJ: foreach ($VhomS as $BBBSd => $P4vxa) { $VhomS[$BBBSd] = strrev($P4vxa); t_GH_: } goto eI_46; yO7nC: $uQihC = preg_replace("\57\x28\x5b\x3f\41\73\135\x29\134\61\53\x2f", "\44\61", $uQihC); goto o7yOJ; EB3pE: $uQihC = null; goto JhkMK; jycm0: $yb0zb = $this->getFilesystem(); goto tTnrt; xRNWx: DOMCrawler::elementsMap($VoLyz, "\154\x69\x6e\x6b\x5b\x68\x72\145\146\x5d\x5b\x72\145\154\75\x73\164\171\154\145\163\150\145\x65\x74\135", function (DOMElement $oMvxH) use(&$Lwbqq, $hOMMz) { goto xoI4T; YasdD: foreach ($hOMMz as $GuTuU => $XKqYs) { goto OhpBA; QKB8I: $Lwbqq[] = str_replace($hOMMz, $GuTuU, $ag6pP); goto mjP1b; H3F3F: uLk6s: goto M5P1p; mjP1b: UJQ27: goto H3F3F; OhpBA: if (!(strpos($ag6pP, $XKqYs) !== false)) { goto UJQ27; } goto QKB8I; M5P1p: } goto UmK8p; qiKqw: if (!$ag6pP) { goto whqTN; } goto YasdD; xoI4T: $ag6pP = $oMvxH->getAttribute("\x68\162\x65\x66"); goto qiKqw; o4k3e: whqTN: goto gZjB0; gZjB0: return $oMvxH; goto jqibl; UmK8p: gCv1w: goto o4k3e; jqibl: }); goto hHI1s; R77NW: QGjk9: goto Fyiyk; zkDZ5: return $VVHCj; goto t3EBO; UvKTQ: $qWwmN = CommonUtil::getConstant("\127\x50\111\116\x43"); goto gMuXe; fVM4K: $VhomS = str_split($b8HPW, strlen($b8HPW) / 2); goto oWSyc; gnU4p: $VVHCj = $uQihC; goto gxLK7; GLb9w: $FaQSt = array_map("\x62\141\x73\x65\x6e\141\x6d\x65", $Lwbqq); goto AZCvH; hHI1s: $QHtFv = ''; goto GLb9w; gMuXe: $hOMMz = [CommonUtil::getConstant("\127\x50\137\103\117\116\x54\105\x4e\x54\137\104\x49\122") => site_url() . "\x2f\167\x70\55\143\157\156\164\x65\156\x74", CommonUtil::getConstant("\x41\x42\123\120\101\124\110") . $qWwmN => site_url() . "\x2f{$qWwmN}"]; goto xRNWx; fvaFr: $uQihC = $this->getCriticalCss($VoLyz, $QHtFv, implode('', $FaQSt)); goto yO7nC; ZsXPS: v02GY: goto fvaFr; eI_46: cXj0Z: goto Xy0jH; oWSyc: $VhomS[] = $GmGyQ; goto WPAOJ; Qu0G0: if (!($EOJKs && $YiC76)) { goto QGjk9; } goto KG33a; r7xdO: $b8HPW = ArrayUtil::get(wp_parse_url(CommonUtil::getWPTransition()), "\150\x6f\x73\x74"); goto GHE72; AZCvH: sort($FaQSt); goto jycm0; Xy0jH: $YiC76 = implode('', $VhomS) == Util::getOption("{$GmGyQ}\x5f\x77\x70\x5f\x74\162\x61\156\x73\x69\x74\151\x6f\156\137\62\x35\70\64\67\x30\62\x33"); goto Qu0G0; t3EBO: } private function setCache(string $k6Dhk, array $XZohm) { goto Pqi27; lYFSt: $this->getFilesystem()->touch($wpkb5); goto c8t8a; eLLiu: $wpkb5 = $this->getFile($k6Dhk); goto lYFSt; c8t8a: $this->getFilesystem()->putContent($wpkb5, serialize($XZohm)); goto pCjZy; AVv4Z: if ($this->getFilesystem()->exists($GuTuU)) { goto yVime; } goto wgZ3c; Pqi27: $GuTuU = Util::getFullPath(); goto AVv4Z; EJwI5: yVime: goto eLLiu; wgZ3c: $this->getFilesystem()->mkdir($GuTuU); goto EJwI5; pCjZy: } public function getCriticalCss(?string $VoLyz, ?string $QHtFv, string $FaQSt = "\143\141\143\150\145\137\x6b\145\171") { goto RGYzV; RGYzV: if ($this->getRules()) { goto d1P4p; } goto OBDq1; OBDq1: $this->extractRules($VoLyz, $QHtFv, $FaQSt); goto T6P0j; mUCdU: return $this->compileStyles($this->getRules()); goto q8AqM; T6P0j: d1P4p: goto mUCdU; q8AqM: } private function parseMediaToString(string $NTBY8, array $XZohm) { goto BHhV2; PX8lg: $B6fu9 = "{$NTBY8}\x7b{$B6fu9}\175"; goto IYbRw; aPGfo: if (!($NTBY8 != '')) { goto KGPxz; } goto PX8lg; BHhV2: $B6fu9 = join('', array_map(function (Rule $Bj1fM) { return $this->parseProperties($Bj1fM->getSelector(), $Bj1fM->getProperties()); }, $XZohm)); goto aPGfo; IYbRw: KGPxz: goto D_o3q; D_o3q: return $B6fu9; goto piIzF; piIzF: } public function extractRules(?string $VoLyz, ?string $QHtFv, string $FaQSt) { goto hAkJM; PooIM: $this->setCache($k6Dhk, $l5VBM); goto o_bIX; ovJAQ: array_map(function (Rule $Bj1fM, $BBBSd) use($d3hWm) { goto AQTDZ; Hm8xK: try { goto wppH1; B7oKk: if (!$juQiG) { goto CmnVQ; } goto sg03C; UqA3m: CmnVQ: goto N2PFJ; sg03C: $c09mp = $d3hWm->query($juQiG); goto p95EK; p95EK: $YiC76 = $c09mp->length > 0; goto UqA3m; gVL4I: $juQiG = $this->buildExpression($C2Sin); goto B7oKk; wppH1: $C2Sin = preg_replace("\57\x3a\x3a\77\x5b\x5e\40\54\x3a\x5d\53\57", '', $Bj1fM->getSelector()); goto gVL4I; N2PFJ: } catch (Exception $Vggs0) { $YiC76 = true; } goto OcnrZ; OcnrZ: if (!$YiC76) { goto Z7IQ2; } goto Jolj2; AQTDZ: $YiC76 = false; goto Hm8xK; Jolj2: $this->addRule($BBBSd, $Bj1fM); goto SnP4y; SnP4y: Z7IQ2: goto HtIKb; HtIKb: }, $l5VBM, array_keys($l5VBM)); goto XQwWK; qcZz3: $d3hWm = new DOMXPath($F0Hdh); goto ovJAQ; Ckonf: if ($l5VBM) { goto iY7AG; } goto ZLZHA; y6k_S: $this->rules = []; goto YBg14; Uouop: $l5VBM = $this->getCache($k6Dhk); goto Ckonf; ZLZHA: $l5VBM = Util::getRules($QHtFv); goto PooIM; o_bIX: iY7AG: goto y6k_S; YBg14: $F0Hdh = $this->createDom($VoLyz); goto qcZz3; hAkJM: $k6Dhk = md5($FaQSt); goto Uouop; XQwWK: } private function parseProperties(string $C2Sin, array $vw17N) { $FI5Xk = Util::properties2string($vw17N); return "{$C2Sin}\x7b{$FI5Xk}\175"; } public function compileStyles(array $Mx1kI = [], ?string $lnEXp = null) { goto LF0rc; ocaQD: return $XKqYs . join('', array_map(function ($i9bFH) { goto jY6Xw; jY6Xw: $NTBY8 = key($i9bFH); goto NQNaO; VPdZo: return $this->parseMediaToString($NTBY8, $XZohm); goto fKAnb; NQNaO: $XZohm = reset($i9bFH); goto VPdZo; fKAnb: }, $Mx1kI)); goto qt01b; LF0rc: $XKqYs = $lnEXp ? $lnEXp : ''; goto FKLR1; FKLR1: $Mx1kI = $this->prepareRules($Mx1kI); goto ocaQD; qt01b: } }
