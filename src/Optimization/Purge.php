<?php
 namespace Optimization; use Boilerplate\Util\AjaxUtil; use Boilerplate\Util\CommentUtil; use Boilerplate\Util\CommonUtil; use Boilerplate\Util\PluginUtil; use Boilerplate\Util\PostUtil; use Boilerplate\Util\TaxonomyUtil; use Boilerplate\Util\TermUtil; use Boilerplate\Util\UserUtil; use Optimization\Util\FileUtil; use Optimization\Util\FormatUtil; use Optimization\Util\I18NUtil; use Optimization\Util\Util; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Purge extends Common { protected ?string $id = null; protected $paths; public function addActions() : self { $this->addAction("\163\167\x69\x74\143\150\137\x74\x68\145\155\x65", [$this, "\143\154\x65\141\x6e\x44\157\155\x61\x69\x6e"])->addAction("\157\160\164\x69\155\151\x7a\x61\x74\x69\157\x6e\137\x70\165\x72\147\x65\x5f\x63\141\x63\150\145\x5f\x66\151\154\145\x73", [$this, "\x63\154\145\141\x6e\x44\157\155\141\151\x6e"])->addAction("\x61\146\x74\145\x72\137\x6f\x70\164\151\155\151\x7a\141\x74\151\x6f\x6e\x5f\x63\154\x65\x61\156\137\x70\x6f\163\x74", [$this, "\x70\x75\x72\147\145\120\157\x73\x74\124\145\x72\155\x73\125\x72\x6c\163"])->addAction("\157\160\164\x69\x6d\151\x7a\141\164\151\157\156\x5f{$this->getId()}\137\143\x6c\x65\x61\x6e\137\144\x6f\155\141\151\x6e", [$this, "\x63\154\x65\x61\156\104\x6f\x6d\x61\x69\x6e"])->addAction("\x63\157\155\155\145\156\164\x5f\160\157\x73\x74", [$this, "\x63\154\x65\x61\x6e\x50\x6f\163\x74\x4f\156\x50\x6f\x73\x74\x43\157\x6d\x6d\x65\156\x74"], 2, 99)->addAction("\160\162\145\137\x70\157\163\x74\x5f\165\x70\144\x61\x74\x65", [$this, "\x63\x6c\145\x61\156\120\157\163\164\103\141\143\150\145\x4f\156\x53\x74\141\x74\165\x73\103\150\141\156\147\145"], 2)->addAction("\165\160\147\x72\141\144\x65\x72\x5f\160\x72\x6f\x63\145\163\x73\x5f\x63\157\x6d\160\154\145\x74\x65", [$this, "\160\x75\x72\x67\145\117\156\124\150\x65\155\145\x55\x70\x64\x61\164\145"], 2); return parent::addActions(); } public function addFilters() : self { goto WNtNI; sQzpR: sbzIC: goto IquD1; IquD1: u81Yy: goto UKKuD; VGNsl: if (!(!AjaxUtil::isAjax() && is_admin())) { goto u81Yy; } goto MrXwm; UKKuD: return parent::addFilters(); goto Vhn_Q; MrXwm: $BEHRo = TaxonomyUtil::getList(["\x70\x75\x62\154\x69\x63" => true, "\160\x75\x62\x6c\151\x63\154\x79\x5f\x71\x75\x65\162\171\141\x62\x6c\x65" => true], TaxonomyUtil::NAMES); goto Hbzrr; WNtNI: $this->addFilter("\x6f\x70\164\x69\155\x69\172\x61\x74\x69\x6f\156\137\143\x6c\145\x61\x6e\x5f\x66\x69\154\x65\163", [$this, "\x63\x6c\145\141\156\106\x69\154\x65\x73\125\x73\145\162\x73"]); goto VGNsl; Hbzrr: foreach ($BEHRo as $jkW51) { $this->addFilter("{$jkW51}\137\162\157\x77\x5f\141\143\x74\151\157\156\x73", [$this, "\x61\x64\x64\x50\x75\x72\147\145\x54\x65\162\x6d\x4c\151\x6e\x6b"], 2); sJMA_: } goto sQzpR; Vhn_Q: } public function cleanPostOnPostComment($yLzE8, $bAQ5Q) { goto IwRxH; ipMXb: oV020: goto AssbQ; MOkDK: $this->cleanPost(PostUtil::getId($post)); goto ipMXb; IwRxH: $post = CommentUtil::getPost($yLzE8); goto MeWQ9; MeWQ9: if (!$post) { goto oV020; } goto MOkDK; AssbQ: } public function getId() : string { return $this->id; } public function getPaths() : array { goto QzuSP; ezaOh: Norm5: goto ftE1r; ftE1r: return $Lwbqq; goto ZZ2pl; ys1PC: $Lwbqq = [$Lwbqq]; goto ezaOh; kMwQv: if (!is_string($Lwbqq)) { goto Norm5; } goto ys1PC; QzuSP: $Lwbqq = $this->paths; goto kMwQv; ZZ2pl: } public function cleanPostCacheOnStatusChange($u2ese, $vwB7A) { goto KNVxw; vmH4v: $this->doAction("{$this->getId()}\137\x61\x66\164\x65\x72\x5f\157\160\164\x69\155\151\x7a\x61\x74\151\x6f\x6e\137\143\x6c\x65\141\x6e\x5f\160\157\x73\x74", $post, $bPP0q, $Onk5O); goto A_Odi; bvoAx: if (!($post && "\x70\165\142\x6c\x69\163\x68" === PostUtil::getField("\x70\157\x73\164\137\163\x74\x61\164\x75\163", $post))) { goto C20BB; } goto zKktr; sw_dO: $this->cleanHome($Onk5O); goto xVY28; haQ1h: $bPP0q = $this->getPurgeUrls($u2ese, $post); goto TQAcB; ttJ8H: $this->doAction("\141\146\x74\x65\x72\x5f\157\160\x74\x69\155\151\172\141\x74\151\157\x6e\137\143\154\145\141\x6e\137\x70\157\x73\164", $post, $bPP0q, $Onk5O); goto vmH4v; PJBHc: $this->cleanFiles($bPP0q); goto sw_dO; u1WPX: $this->doAction("\x62\x65\x66\157\162\x65\x5f\157\x70\x74\x69\x6d\151\x7a\x61\164\x69\157\x6e\137\x63\x6c\145\141\x6e\137\x70\157\163\164", $post, $bPP0q, $Onk5O); goto PJBHc; A_Odi: C20BB: goto eMwMI; xVY28: $this->cleanHomeFeeds(); goto ttJ8H; TQAcB: $bPP0q = (array) $this->applyFilters("\x6f\x70\x74\x69\155\x69\172\141\164\x69\x6f\156\x5f\160\157\x73\x74\137\x70\x75\x72\x67\x65\x5f\x75\162\154\x73", $bPP0q, $post); goto u1WPX; zKktr: $Onk5O = I18NUtil::getLang($u2ese); goto haQ1h; KNVxw: $post = PostUtil::get($u2ese); goto bvoAx; eMwMI: } public function cleanFilesUsers($BWnT3) { goto K4y_m; PFXk7: foreach ($BWnT3 as $hgTz4) { goto Eoj1W; Eoj1W: $NFJp4 = FormatUtil::getParseUrl($hgTz4); goto ZbZMA; SQU4W: ScUWE: goto rnn8B; ZbZMA: $ud6fw[] = $NFJp4["\163\143\150\145\x6d\145"] . "\72\57\x2f" . $NFJp4["\150\x6f\x73\x74"] . "\52" . $NFJp4["\x70\x61\164\x68"]; goto SQU4W; rnn8B: } goto Z5RpH; tC_rY: return $ud6fw; goto Dcfud; K4y_m: $ud6fw = []; goto PFXk7; Z5RpH: YiFir: goto tC_rY; Dcfud: } public function purgeOnThemeUpdate($d3OaO, $vJ8FL) { goto y5De6; Ol1Rs: if (!("\164\x68\x65\155\x65" === $vJ8FL["\164\171\160\145"])) { goto eSWP5; } goto EtTAO; EtTAO: if (!is_array($vJ8FL["\164\x68\145\155\x65\163"])) { goto ifnsx; } goto kBB2C; YlwJV: if (!array_intersect($vJ8FL["\x74\150\x65\x6d\145\x73"], $VLSMF)) { goto DZI58; } goto EmE_p; y5De6: if (!("\x75\160\144\141\164\145" === $vJ8FL["\x61\143\164\151\157\x6e"])) { goto cCQ3p; } goto Ol1Rs; lf_Jn: $VLSMF = [$qSlqr->get_template(), $qSlqr->get_stylesheet()]; goto YlwJV; kBB2C: $qSlqr = wp_get_theme(); goto lf_Jn; bD46q: cCQ3p: goto txV1b; jnt8B: eSWP5: goto bD46q; Pdi7j: ifnsx: goto jnt8B; EmE_p: $this->cleanDomain(); goto Q31hU; Q31hU: DZI58: goto Pdi7j; txV1b: } public function maybePurgeCacheOnTermChange($uFNn1, $AI2tI, $jkW51) { goto CkiMt; DiUZZ: $this->cleanDomain(); goto seLK2; CkiMt: if (!TaxonomyUtil::isPublic($jkW51)) { goto vsH4H; } goto DiUZZ; seLK2: vsH4H: goto kfbry; kfbry: } private function maybeRemoveDirectory($lzD2z) { goto IkL1k; gF34P: qQBy8: goto qCLZ_; IkL1k: if (!$this->getFilesystem()->isDirectory($lzD2z)) { goto qQBy8; } goto PcAWh; PcAWh: FileUtil::rrmdir($lzD2z); goto gF34P; qCLZ_: } private function purgeUrl(string $hgTz4, $HqUIe = false) { goto WcOrq; WcOrq: global $wp_rewrite; goto z4zia; k4mr3: foreach ($this->getCacheDirectories($gJJsP["\x68\157\x73\x74"]) as $lzD2z) { goto sb7WL; qzlJo: gXZuM: goto BIwgq; BIwgq: if (!$HqUIe) { goto WsjV8; } goto IiBK3; g16Ud: p8t_Z: goto mdmYk; sb7WL: $GuTuU = $lzD2z . $gJJsP["\x70\x61\164\150"]; goto lVPhm; pvctB: WsjV8: goto g16Ud; lVPhm: if (!$this->getFilesystem()->exists($GuTuU)) { goto p8t_Z; } goto KDo5T; KDo5T: foreach (FileUtil::getIterator($GuTuU) as $kJMVe) { goto e4liG; GOKkR: $this->getFilesystem()->remove($kJMVe->getPathname()); goto f80nz; UHNMe: or6zV: goto kfG35; f80nz: q13zN: goto UHNMe; e4liG: if (!$kJMVe->isFile()) { goto q13zN; } goto GOKkR; kfG35: } goto qzlJo; IiBK3: $this->maybeRemoveDirectory(trailingslashit($GuTuU) . $wp_rewrite->pagination_base); goto pvctB; mdmYk: lc2Uk: goto dwxFp; dwxFp: } goto aaZE8; z4zia: $gJJsP = $this->parseUrl($hgTz4); goto k4mr3; aaZE8: fQrfn: goto ycaWb; ycaWb: } public function getCacheDirectories($sIP9w, $GuTuU = '', $zzgax = false) { goto LWLDp; n8WPC: $nS1YM[$sIP9w] = []; goto l1rL8; HsDFc: $Lwbqq = [$GuTuU]; goto eCN7D; dptG3: F_hMQ: goto HsDFc; Q8Kl6: goto HYBMB; goto dptG3; LWLDp: if (!$GuTuU) { goto XqzF8; } goto UX9zK; NEjqI: duhNY: goto r5FGZ; eCN7D: HYBMB: goto QU3ST; Okyb8: $Lwbqq = $GuTuU; goto R7Q4G; ZePUm: $Lwbqq = $this->getPaths(); goto Q8Kl6; Ofjrm: XqzF8: goto ZePUm; i17Ji: RAm9C: goto NEjqI; r5FGZ: return $nS1YM[$sIP9w]; goto kQKvf; l1rL8: foreach ($Lwbqq as $GuTuU) { goto l92ln; RKmh8: oDHYI: goto owWip; NuF2J: $NeAew = sprintf("\x2f\x25\61\x24\x73\x25\62\44\x73\x28\56\x2a\51\57\x69", FileUtil::normalizePath($GuTuU, true), $sIP9w); goto gJ74I; gJ74I: try { goto fzyA3; QNXL8: foreach ($ahdVm as $yH61N) { $nS1YM[$sIP9w][] = $yH61N->getPathname(); OcA5o: } goto aHDNX; aHDNX: jUSsG: goto VmXCN; fzyA3: $ahdVm = new RegexIterator($T1d9t, $NeAew); goto QNXL8; VmXCN: } catch (Exception $XIaY1) { $nS1YM[$sIP9w] = []; } goto RKmh8; l92ln: $GuTuU = trailingslashit($GuTuU); goto MJFAL; MJFAL: try { $T1d9t = new IteratorIterator(new FilesystemIterator($GuTuU)); } catch (Exception $XIaY1) { return []; } goto NuF2J; owWip: } goto i17Ji; R7Q4G: goto HYBMB; goto Ofjrm; UX9zK: if (!is_array($GuTuU)) { goto F_hMQ; } goto Okyb8; QU3ST: if (isset($nS1YM[$sIP9w])) { goto duhNY; } goto n8WPC; kQKvf: } public function purgePostTermsUrls(WP_Post $post) { foreach ($this->getPostTermsUrls($post) as $hgTz4) { $this->purgeUrl($hgTz4); BBf8f: } X6lb4: } public function addPurgeTermLink($HUGaN, $qaCDz) { goto UoP0D; r5YzO: return $HUGaN; goto rQ1s6; eY1gG: $hgTz4 = wp_nonce_url(admin_url("\141\x64\x6d\151\156\x2d\160\157\163\164\x2e\160\x68\160\x3f\x61\143\164\x69\157\156\x3d\157\160\164\151\x6d\151\172\x61\164\x69\x6f\x6e\x5f\160\x75\x72\x67\x65\x5f{$this->getId()}\46\164\x79\160\x65\75\164\x65\162\155\x2d{$qaCDz->term_id}\x26\x74\x61\x78\x6f\x6e\157\x6d\x79\75{$qaCDz->taxonomy}"), "\x6f\160\164\151\x6d\x69\172\x61\x74\x69\x6f\x6e\x5f\160\x75\162\147\145\x5f{$this->getId()}\137\164\x65\162\155\x2d{$qaCDz->term_id}"); goto Kr7oZ; Kr7oZ: $HUGaN["\157\x70\x74\x69\155\151\172\141\x74\x69\x6f\156\x5f\x70\165\162\x67\145\x5f{$this->getId()}"] = sprintf("\x3c\141\x20\x68\x72\145\x66\x3d\x22\x25\61\x24\x73\x22\x3e\x25\62\44\163\x3c\57\x61\76", $hgTz4, sprintf(__("\x43\x6c\145\x61\x72\40\x74\150\x69\163\40\x25\163", OPTIMIZATION_DOMAIN), $this->getId())); goto hpAk1; hpAk1: cvomM: goto r5YzO; UoP0D: if (!UserUtil::currentCan("\x6d\141\x6e\141\147\x65\x5f\x6f\x70\x74\151\x6f\156\x73")) { goto cvomM; } goto eY1gG; rQ1s6: } private function parseUrl(string $hgTz4) { goto NUNko; dvsG7: return $gJJsP; goto ahqAX; KKg0k: if (!isset($gJJsP["\x68\x6f\163\164"])) { goto rkpAf; } goto rO4e7; NUNko: $gJJsP = FormatUtil::getParseUrl($hgTz4); goto KKg0k; yxqsk: rkpAf: goto dvsG7; rO4e7: $gJJsP["\150\x6f\x73\164"] = FormatUtil::maybeUrlNoDots($gJJsP["\x68\x6f\164\x73"]); goto yxqsk; ahqAX: } private function getDatesArchives($post) { goto hKNQ5; hKNQ5: $QEgui = get_the_time("\131\55\155\55\x64", $post); goto YFdoe; xaapT: FRmLA: goto caYGv; rA5Tx: $SHoO9 = explode("\x2d", $QEgui); goto nfVso; YFdoe: $BWnT3 = []; goto jTUir; jTUir: if (!$QEgui) { goto FRmLA; } goto rA5Tx; p61Ry: $BWnT3 = (array) $this->applyFilters("\x6f\160\164\x69\155\151\172\x61\164\151\157\156\137\160\157\x73\x74\x5f\x64\x61\164\x65\x73\x5f\165\162\x6c\x73", $BWnT3); goto xaapT; nfVso: $BWnT3 = [get_year_link($SHoO9[0]), get_month_link($SHoO9[0], $SHoO9[1]), get_day_link($SHoO9[0], $SHoO9[1], $SHoO9[2])]; goto p61Ry; caYGv: return $BWnT3; goto sA5TO; sA5TO: } public function purgeDatesArchives($post) { foreach ($this->getDatesArchives($post) as $hgTz4) { $this->purgeUrl($hgTz4, true); J1TyS: } Ks4H8: } private function getPostTermsUrls(WP_Post $post) { goto jEN69; Q6fdn: VEfh3: goto XTEUU; XTEUU: return $this->applyFilters("\157\160\164\x69\x6d\x69\x7a\x61\x74\x69\x6f\x6e\x5f\x70\157\x73\164\137\164\145\162\155\x73\137\x75\162\154\163", $BWnT3); goto Bjuqu; jEN69: $BWnT3 = []; goto B1kdn; ISnIN: foreach ($BEHRo as $jkW51) { goto qtT3I; rCopk: F81M1: goto lr7Um; lr7Um: SsYA3: goto u__se; GwtmY: $xIOIC = PostUtil::getTerms($post, $jkW51); goto bYPpE; qtT3I: if (!($jkW51 instanceof WP_Taxonomy && $jkW51->public && "\160\x72\x6f\x64\x75\x63\164\x5f\x73\x68\x69\160\x70\151\156\x67\137\143\154\141\x73\163" === $jkW51->name)) { goto SsYA3; } goto Vku1Q; O65gV: foreach ($xIOIC as $qaCDz) { goto ud09f; ud09f: $fnl_W = TermUtil::getLink($qaCDz, $jkW51); goto sV5i3; O0G_e: $BWnT3[] = $fnl_W; goto ySEZJ; sV5i3: if (!$fnl_W) { goto ZSC1k; } goto O0G_e; WH4La: JAk7F: goto Qz9bq; F9ZwI: wVkJC: goto OMGV3; XgKkM: foreach ($fF4B9 as $DMCj3) { goto wC9lX; I3el7: oRuW_: goto dCQoJ; MMi4k: if (!$U2aaP) { goto vdcmZ; } goto C6g2z; t8CfN: $U2aaP = TermUtil::getLink($VuR6L, $jkW51); goto MMi4k; rfLsB: fmDjG: goto I3el7; rpqrZ: if (!$VuR6L) { goto fmDjG; } goto t8CfN; C6g2z: $BWnT3[] = $U2aaP; goto d2gdS; wC9lX: $VuR6L = TermUtil::get($DMCj3, $jkW51); goto rpqrZ; d2gdS: vdcmZ: goto rfLsB; dCQoJ: } goto F9ZwI; ySEZJ: ZSC1k: goto P53ch; OMGV3: Ixdf4: goto WH4La; fWmdM: $fF4B9 = (array) get_ancestors(TermUtil::getId($qaCDz), $jkW51); goto XgKkM; P53ch: if (!TaxonomyUtil::isHierarchical($jkW51)) { goto Ixdf4; } goto fWmdM; Qz9bq: } goto WqcTc; Vku1Q: $jkW51 = TaxonomyUtil::getName($jkW51); goto GwtmY; u__se: EAj8k: goto luIqM; bYPpE: if (!$xIOIC) { goto F81M1; } goto O65gV; WqcTc: ZglId: goto rCopk; luIqM: } goto Q6fdn; B1kdn: $BEHRo = PostUtil::getTaxonomiesObject($post, PostUtil::OBJECT); goto ISnIN; Bjuqu: } public function cleanDomain($Onk5O = '') { goto yzWN8; OZGE3: $BWnT3 = (array) $this->applyFilters("\157\x70\164\x69\x6d\x69\x7a\x61\x74\151\x6f\x6e\x5f\143\154\145\x61\156\137\x64\157\x6d\141\151\156\x5f\165\162\x6c\x73", $BWnT3, $Onk5O); goto wLD9k; wLD9k: $BWnT3 = array_filter($BWnT3); goto SHWIE; mi3Vn: UaJsI: goto CUQX1; Db1ww: foreach ($Lwbqq as $GuTuU) { goto LvOxd; LvOxd: $gFaTf = I18NUtil::getDirectoriesToPreserve($Onk5O, $GuTuU); goto LdAup; LdAup: foreach ($BWnT3 as $hgTz4) { goto Cg78D; JPOsQ: ueXLM: goto H_DIe; Cg78D: $gJJsP = FormatUtil::getParseUrl($hgTz4); goto qwwg6; KcW1m: $gJJsP["\150\x6f\x73\164"] = FormatUtil::maybeUrlNoDots($gJJsP["\x68\157\163\164"]); goto iAqUZ; qwwg6: if (!isset($gJJsP["\150\x6f\x73\x74"])) { goto BdHuf; } goto KcW1m; M3StP: jYrFH: goto gxL0F; iAqUZ: BdHuf: goto ot3oB; bJVwV: foreach ($this->getCacheDirectories($gJJsP["\150\157\x73\164"], $GuTuU) as $lzD2z) { goto czwYJ; CzNyi: R8e1y: goto mBEWO; wEYXJ: Caz3k: goto tyeR9; Uieto: if ($yb0zb->isDirectory($yH61N)) { goto R8e1y; } goto b49N9; tyeR9: IV7Cd: goto HufZJ; b49N9: $yb0zb->remove($yH61N); goto mNwLO; xzkJg: if (!$yb0zb->exists($yH61N)) { goto IV7Cd; } goto Uieto; mBEWO: FileUtil::rrmdir($yH61N, $gFaTf, $yb0zb); goto wEYXJ; l_dYx: $yb0zb = $this->getFilesystem(); goto xzkJg; mNwLO: goto Caz3k; goto CzNyi; HufZJ: xsmhh: goto csfvG; czwYJ: $yH61N = $lzD2z . $gJJsP["\160\141\x74\150"]; goto l_dYx; csfvG: } goto M3StP; gxL0F: $this->doAction("\x61\x66\x74\x65\162\x5f\157\160\x74\x69\155\x69\172\x61\x74\x69\x6f\x6e\137\143\x6c\x65\x61\156\x5f\x64\157\155\x61\x69\x6e", $tQVlb, $Onk5O, $hgTz4); goto JPOsQ; kOWXD: $this->doAction("\x62\x65\x66\157\162\x65\x5f\x6f\x70\x74\151\x6d\x69\x7a\x61\x74\x69\157\x6e\x5f\x63\154\145\141\x6e\x5f\144\157\155\141\x69\x6e", $tQVlb, $Onk5O, $hgTz4); goto bJVwV; ot3oB: $tQVlb = $GuTuU . $gJJsP["\150\x6f\x73\x74"] . $gJJsP["\160\141\164\150"]; goto kOWXD; H_DIe: } goto PD1R3; PD1R3: gm7bJ: goto umtEv; umtEv: T8NpC: goto w_I9t; w_I9t: } goto mi3Vn; H0FqS: if (!($BWnT3 && $Lwbqq)) { goto XtwiU; } goto Db1ww; yzWN8: $BWnT3 = !$Onk5O || is_object($Onk5O) || is_array($Onk5O) || is_int($Onk5O) ? (array) I18NUtil::getUri() : (array) I18NUtil::getHomeUrlByLang($Onk5O); goto OZGE3; SHWIE: $Lwbqq = $this->getPaths(); goto H0FqS; CUQX1: XtwiU: goto haoiO; haoiO: } public function getPurgeUrls($Q6Bxn, $post) { goto qBQxx; VQU_n: if (!(!empty($blog_id) && is_multisite())) { goto CfpRT; } goto gQ13O; hS9B0: XIbTT: goto YVFlU; YVFlU: $P43Sp = PostUtil::getType($post); goto WGHsx; yr9yR: return array_flip(array_flip($BWnT3)); goto FiSJw; IlXkj: Qpknf: goto pz9uh; HhRHN: $Lwbqq = $this->getPaths(); goto VSMrQ; oC4ck: $ERaDD = "{$umFiA["\x73\x63\x68\x65\155\145"]}\x3a\57\57{$umFiA["\x68\157\x73\164"]}"; goto HhRHN; BMVco: GrCHq: goto hljAn; gnzeq: CfpRT: goto uOhh7; p9SWz: global $wp_rewrite; goto VXd0k; mBbTR: foreach ($X17Cd as $X4T7F) { $BWnT3[] = PostUtil::getPermalink($X4T7F); sk1im: } goto BMVco; VSMrQ: foreach ($Lwbqq as $GuTuU) { goto ZQThl; K7Zzq: IrETz: goto LtfTm; ZQThl: $GuTuU .= $umFiA["\150\157\163\164"]; goto nTyCu; LtfTm: xpovL: goto OCB09; nTyCu: foreach ($xIgOP as $xC4VR) { goto SYbse; ksFJz: g8mX8: goto vFgFO; e8e3J: $upoja = FileUtil::getRecursiveDirFilesByRegex($GuTuU, "\43" . $xC4VR . "\x23\151"); goto ma4M_; SYbse: if (!strstr($xC4VR, "\x2a")) { goto iSsMA; } goto e8e3J; ma4M_: foreach ($upoja as $wpkb5) { $BWnT3[] = str_replace($GuTuU, untrailingslashit($ERaDD), $wpkb5->getPath()); HVxrl: } goto wmxwg; NuU4e: $BWnT3[] = trailingslashit($ERaDD) . $xC4VR; goto ksFJz; wmxwg: PPu9k: goto D6cLo; WJSGL: iSsMA: goto NuU4e; D6cLo: goto g8mX8; goto WJSGL; vFgFO: } goto K7Zzq; OCB09: } goto aBmsh; HoGE9: $fnl_W = str_replace(["\x25\160\157\163\164\x6e\141\155\x65\45", "\x25\x70\x61\x67\x65\x6e\x61\155\145\x25"], $a9mAM[1], $a9mAM[0]); goto vWo8W; vWo8W: if (!(FormatUtil::extractUrlComponent($fnl_W, PHP_URL_PATH) !== "\x2f")) { goto XIbTT; } goto tRF7i; pz9uh: $xIgOP = []; goto uwBm1; rLcs1: $X17Cd = get_post_ancestors($Q6Bxn); goto vbTp2; vbTp2: if (!(bool) $X17Cd) { goto j6ll7; } goto mBbTR; WGHsx: $g4jCN = PostUtil::getTypeArchiveLink($P43Sp); goto XBipv; gQ13O: switch_to_blog($blog_id); goto jzet0; uwBm1: if (!$xIgOP) { goto UOl6K; } goto WKYEn; XBipv: if (!$g4jCN) { goto Qpknf; } goto p9SWz; qBQxx: $BWnT3 = []; goto Ghn_w; aBmsh: Gy3qg: goto GpYs8; WKYEn: global $blog_id; goto oJHEA; OMlHV: restore_current_blog(); goto gnzeq; VXd0k: $BWnT3[] = $g4jCN; goto XFw0U; XFw0U: $BWnT3[] = $g4jCN . "{$wp_rewrite->pagination_base}"; goto IlXkj; GpYs8: UOl6K: goto N2chO; uOhh7: $umFiA = FormatUtil::getParseUrl($ERaDD); goto oC4ck; jzet0: $ERaDD = CommonUtil::getOption("\x68\157\x6d\x65"); goto OMlHV; oJHEA: $ERaDD = CommonUtil::getOption("\x68\x6f\x6d\145"); goto VQU_n; N2chO: $BWnT3[] = PostUtil::getAuthorUrl($post); goto rLcs1; hljAn: j6ll7: goto yr9yR; tRF7i: $BWnT3[] = $fnl_W; goto hS9B0; Ghn_w: $a9mAM = Util::getSamplePermalink($Q6Bxn); goto HoGE9; FiSJw: } public function cleanPost(?string $u2ese) { goto kEU0V; DW46N: goto wGnmY; goto HV_pR; ypNpf: $bPP0q = $this->applyFilters("\157\x70\x74\x69\x6d\151\x7a\x61\164\x69\x6f\156\137\160\157\163\x74\137\x70\x75\x72\147\x65\x5f\x75\x72\x6c\x73", $bPP0q, $post); goto c2hGY; hi5Tp: wGnmY: goto IS2zg; byx1u: $m8MCa = I18NUtil::has(); goto z0u7J; V4HAL: if (defined("\x44\117\111\116\107\137\x41\125\x54\x4f\123\x41\x56\x45")) { goto jVg2i; } goto mOjbj; HEm3P: $Onk5O = pll_get_post_language($u2ese); goto hi5Tp; T6eSq: $this->cleanHomeFeeds(); goto xNY0W; MuLdh: $this->doAction("\142\x65\x66\157\x72\145\x5f\x6f\x70\164\x69\x6d\151\172\x61\x74\151\157\x6e\137\x63\154\145\141\156\137\x70\x6f\x73\164", $post, $bPP0q, $Onk5O); goto ypNpf; YUQu3: JM575: goto e91mp; mOjbj: $post = PostUtil::get($u2ese); goto knhw_; z0u7J: $Onk5O = false; goto axOJ2; WiUXu: global $sitepress; goto mn1MI; c2hGY: $this->cleanFiles($bPP0q); goto Vp5tf; HV_pR: t6EZJ: goto WiUXu; Vp5tf: $this->cleanHome($Onk5O); goto T6eSq; hgp8T: jVg2i: goto YUQu3; yaxQ3: hY9ed: goto hgp8T; uI0y9: if (!PostUtil::isTypePublic($P43Sp)) { goto mhjwy; } goto byx1u; AijFh: goto wGnmY; goto nXtY6; j223b: if ("\160\x6f\x6c\x79\x6c\x61\x6e\147" === $m8MCa && function_exists("\160\154\154\137\x67\x65\x74\x5f\160\x6f\163\x74\137\x6c\141\156\x67\165\141\147\145")) { goto v5J1i; } goto DW46N; knhw_: $P43Sp = PostUtil::getType($post); goto EI0r4; xNY0W: $this->doAction("\x61\x66\164\x65\162\137\157\160\164\151\155\151\172\x61\x74\151\157\156\x5f\x63\x6c\145\141\x6e\x5f\x70\x6f\163\x74", $post, $bPP0q, $Onk5O); goto D1XP2; axOJ2: if ("\x77\160\155\154" === $m8MCa && !PluginUtil::isActive("\167\x6f\x6f\143\157\x6d\x6d\145\162\x63\x65\55\x6d\x75\x6c\164\x69\154\x69\x6e\147\165\141\154\57\x77\160\x6d\x6c\55\x77\x6f\157\143\157\155\155\x65\x72\x63\x65\x2e\160\x68\160")) { goto t6EZJ; } goto j223b; IS2zg: $bPP0q = $this->getPurgeUrls($u2ese, $post); goto MuLdh; NxtIt: if (isset($poC8P[$u2ese])) { goto JM575; } goto aWK9P; D1XP2: mhjwy: goto yaxQ3; mn1MI: $Onk5O = $sitepress->get_language_for_element($u2ese, "\x70\x6f\163\164\x5f" . $P43Sp); goto AijFh; EI0r4: if (!($post && $P43Sp && !in_array($P43Sp, ["\141\164\164\141\x63\150\x6d\x65\156\x74", "\156\x61\x76\x5f\x6d\x65\156\165\x5f\x69\164\x65\155"]) && !in_array($post->post_status, ["\144\x72\141\146\164", "\x61\x75\x74\157\55\x64\162\141\146\164"]))) { goto hY9ed; } goto uI0y9; aWK9P: $poC8P[$u2ese] = 1; goto V4HAL; kEU0V: static $poC8P = []; goto NxtIt; nXtY6: v5J1i: goto HEm3P; e91mp: } public function cleanFiles($BWnT3) { goto tgAgJ; tgAgJ: $BWnT3 = array_filter((array) $BWnT3); goto tyA4P; jD3px: $this->doAction("\x62\145\x66\x6f\x72\x65\x5f\157\x70\x74\x69\x6d\151\x7a\x61\x74\151\157\156\137\x63\x6c\145\x61\x6e\x5f\146\x69\x6c\x65\163", $BWnT3); goto miESz; QdQv4: $this->doAction("\141\146\x74\x65\162\x5f\x6f\x70\x74\x69\x6d\x69\x7a\x61\x74\151\157\x6e\137\143\x6c\145\x61\x6e\137\x66\x69\x6c\x65\163", $BWnT3); goto RW0lb; RW0lb: g49jj: goto l2ECU; tyA4P: if (!$BWnT3) { goto g49jj; } goto pWBFi; OjH5F: BgAqk: goto QdQv4; pWBFi: $Lwbqq = $this->getPaths(); goto beHLf; miESz: foreach ($BWnT3 as $hgTz4) { goto Ttblw; Au2Ea: $this->doAction("\141\x66\x74\x65\162\x5f\x6f\x70\164\x69\x6d\151\172\x61\164\x69\157\156\137\143\154\x65\x61\156\x5f\146\151\154\145", $hgTz4); goto tbQnR; i4pKE: UimKg: goto Au2Ea; WEEfL: foreach ($Lwbqq as $GuTuU) { goto CxTuK; CxTuK: foreach ($this->getCacheDirectories($gJJsP["\150\157\163\x74"], $GuTuU) as $lzD2z) { goto N_W6v; sRufz: eBujj: goto wVOFI; wVOFI: Ss3Ar: goto LNcI1; UzLe3: if (!$yb0zb->exists($yH61N)) { goto eBujj; } goto Q489U; N_W6v: $yH61N = $lzD2z . $gJJsP["\160\x61\164\150"]; goto UzLe3; Q489U: $yb0zb->remove($yH61N); goto sRufz; LNcI1: } goto k2ygs; kX6Qt: Pm9GM: goto gcCzk; k2ygs: tJheO: goto kX6Qt; gcCzk: } goto i4pKE; Ttblw: $this->doAction("\142\145\146\x6f\162\145\x5f\x6f\160\x74\151\155\151\x7a\141\164\x69\x6f\156\x5f\143\x6c\x65\x61\156\x5f\x66\151\x6c\x65", $hgTz4); goto C3Mpt; zPy49: $gJJsP = FormatUtil::getParseUrl($hgTz4); goto WEEfL; tbQnR: QSGIa: goto xxZO1; C3Mpt: $hgTz4 = FormatUtil::maybeUrlNoDots($hgTz4); goto zPy49; xxZO1: } goto OjH5F; beHLf: $yb0zb = $this->getFilesystem(); goto jD3px; l2ECU: } public function cleanHome($Onk5O = '') { goto TtFpP; xQdJq: IoTyh: goto hdK2E; lbTHP: if (!isset($NFJp4["\x68\x6f\163\164"])) { goto IoTyh; } goto MOa71; MOa71: $NFJp4["\150\x6f\163\164"] = FormatUtil::maybeUrlNoDots($NFJp4["\150\x6f\x73\x74"]); goto xQdJq; TtFpP: $NFJp4 = FormatUtil::getParseUrl(I18NUtil::getHomeUrlByLang($Onk5O)); goto lbTHP; ZPG4a: LHTdu: goto rl50N; vhkkd: foreach ($Lwbqq as $GuTuU) { goto U8Bqa; w7Egl: $tQVlb = $this->applyFilters("\x6f\160\x74\x69\x6d\151\172\141\164\x69\157\x6e\x5f\x63\154\145\141\156\137\150\x6f\155\145\137\x72\x6f\157\164", $tQVlb, $NFJp4["\x68\x6f\x73\164"], $NFJp4["\160\141\x74\150"]); goto WvB4b; Tu9rK: DCX0K: goto NGKev; fQUyK: $this->doAction("\141\x66\164\x65\x72\137\157\160\x74\151\155\x69\172\141\x74\151\157\x6e\137\143\x6c\145\141\x6e\x5f\150\x6f\155\x65", $tQVlb, $Onk5O); goto S64YK; caynN: PnFnx: goto NAkKd; i8UGc: if (!$KWSCi) { goto OjiLB; } goto G1LCT; o6wdP: XiDgw: goto bLk5a; OMniq: $PxU3F = glob($tQVlb . "\x2f\56\156\x6f\x2d\167\x65\142\x70", GLOB_BRACE | GLOB_NOSORT); goto IGJFy; gll_o: if (!$TpWug) { goto L9QWb; } goto tW1nU; IGJFy: if (!$PxU3F) { goto J7Gmr; } goto RofKY; UJ_hk: O0Bdt: goto ZJWgO; PEod_: global $wp_rewrite; goto JpYmT; NAkKd: OjiLB: goto PEod_; NGKev: y5Veq: goto MAQzz; MAQzz: $TpWug = glob($tQVlb . "\57\x2e\x6d\157\x62\151\154\145\x2d\141\x63\x74\151\166\x65", GLOB_BRACE | GLOB_NOSORT); goto gll_o; G1LCT: foreach ($KWSCi as $wpkb5) { $this->getFilesystem()->remove($wpkb5); b8ehL: } goto caynN; S64YK: ccyXR: goto xn4Z2; U8Bqa: $tQVlb = $GuTuU . $NFJp4["\x68\x6f\163\164"] . "\52" . untrailingslashit($NFJp4["\160\x61\164\150"]); goto w7Egl; j_erc: if (!$fTqn_) { goto y5Veq; } goto eg6QC; ZJWgO: L9QWb: goto OMniq; eg6QC: foreach ($fTqn_ as $lzD2z) { FileUtil::rrmdir($lzD2z); o4VSZ: } goto Tu9rK; WvB4b: $this->doAction("\x62\145\x66\x6f\x72\x65\137\x6f\160\164\x69\x6d\x69\x7a\x61\164\x69\x6f\x6e\x5f\143\x6c\145\x61\156\x5f\x68\x6f\x6d\x65", $tQVlb, $Onk5O); goto Gbrp_; Gbrp_: $KWSCi = glob($tQVlb . "\57\173\x69\156\144\x65\x78\54\151\156\x64\x65\x78\x2d\52\175\x2e\x7b\x68\x74\x6d\x6c\54\150\164\x6d\154\137\x67\x7a\151\x70\175", GLOB_BRACE | GLOB_NOSORT); goto i8UGc; RofKY: foreach ($PxU3F as $LgnRt) { $this->getFilesystem()->remove($LgnRt); bSSOf: } goto o6wdP; tW1nU: foreach ($TpWug as $HIl3a) { $this->getFilesystem()->remove($HIl3a); iuTim: } goto UJ_hk; JpYmT: $fTqn_ = glob($tQVlb . "\52\57" . $wp_rewrite->pagination_base, GLOB_NOSORT); goto j_erc; bLk5a: J7Gmr: goto fQUyK; xn4Z2: } goto ZPG4a; hdK2E: $Lwbqq = $this->getPaths(); goto vhkkd; rl50N: } public function cleanHomeFeeds() { goto ZYum3; eVaiF: $BWnT3[] = get_feed_link(); goto nZ9Jm; ZYum3: $BWnT3 = []; goto eVaiF; bIkSV: $this->doAction("\x61\146\x74\145\x72\x5f\x6f\160\164\151\155\x69\172\141\x74\x69\x6f\x6e\x5f\143\x6c\x65\x61\x6e\x5f\x68\157\155\145\x5f\146\145\145\x64\163", $BWnT3); goto Zsuu4; nZ9Jm: $BWnT3[] = get_feed_link("\x63\157\x6d\x6d\x65\x6e\164\163\x5f"); goto mJqu4; mJqu4: $BWnT3 = $this->applyFilters("\157\160\x74\x69\x6d\151\172\x61\x74\151\x6f\x6e\137\x63\154\x65\141\156\x5f\150\157\155\x65\137\146\145\145\144\x73", $BWnT3); goto ID9VW; ID9VW: $this->doAction("\142\145\146\x6f\162\145\x5f\x6f\160\164\151\155\x69\172\x61\x74\x69\x6f\156\x5f\x63\154\x65\141\x6e\137\150\x6f\155\x65\x5f\146\x65\x65\x64\163", $BWnT3); goto w7ydI; w7ydI: self::cleanFiles($BWnT3); goto bIkSV; Zsuu4: } public function cleanTerm($uFNn1, $wvCBd) { goto E5Tv1; rrjuF: G5yk9: goto fpoJo; k6qVp: goto y_kBR; goto qj03m; BrgAh: goto y_kBR; goto rrjuF; qj03m: MV5sC: goto TLPCU; HbEjr: $Onk5O = false; goto k6qVp; ZoEOk: if (!("\x2f" !== FormatUtil::extractUrlComponent($fnl_W, PHP_URL_PATH))) { goto s9Wp3; } goto O3Au6; fpoJo: $Onk5O = pll_get_term_language($uFNn1); goto kTdBF; BLZIP: $bPP0q = $this->applyFilters("\162\x6f\143\153\145\x74\x5f\x74\145\162\x6d\x5f\x70\x75\x72\147\x65\137\x75\162\x6c\x73", $bPP0q, $qaCDz); goto OzRfe; gvaK6: $qaCDz = TermUtil::getBy("\x69\x64", $uFNn1, $wvCBd); goto fh03E; s5LZ8: s9Wp3: goto xP01s; lpeZw: $fnl_W = TermUtil::getLink($qaCDz, $wvCBd); goto ZoEOk; E5Tv1: $bPP0q = []; goto gvaK6; UqoT1: if ("\160\157\x6c\171\x6c\141\156\147" === $m8MCa) { goto G5yk9; } goto HbEjr; dfYGh: $Onk5O = $sitepress->get_language_for_element($uFNn1, "\164\141\170\137" . $wvCBd); goto BrgAh; O3Au6: array_push($bPP0q, $fnl_W); goto s5LZ8; nKiaN: if ("\167\160\155\x6c" === $m8MCa && !PluginUtil::isActive("\x77\x6f\157\143\x6f\x6d\x6d\145\162\143\x65\55\x6d\x75\x6c\164\151\x6c\x69\156\147\x75\141\x6c\57\x77\x70\x6d\x6c\x2d\167\157\x6f\143\157\155\x6d\145\x72\x63\x65\56\x70\150\160")) { goto MV5sC; } goto UqoT1; kTdBF: y_kBR: goto lpeZw; xP01s: $this->doAction("\x62\x65\x66\x6f\162\145\137\x72\x6f\143\x6b\x65\164\x5f\143\154\x65\141\x6e\x5f\x74\x65\162\155", $qaCDz, $bPP0q, $Onk5O); goto BLZIP; Rr2Yu: $this->doAction("\141\x66\x74\x65\x72\x5f\162\x6f\143\x6b\x65\164\137\143\x6c\145\141\x6e\137\164\145\162\155", $qaCDz, $bPP0q, $Onk5O); goto Hbqet; TLPCU: global $sitepress; goto dfYGh; fh03E: $m8MCa = I18NUtil::has(); goto nKiaN; OzRfe: $this->cleanFiles($bPP0q); goto x4ejK; x4ejK: $this->cleanHome($Onk5O); goto Rr2Yu; Hbqet: } }
