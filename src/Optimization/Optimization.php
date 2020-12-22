<?php
 namespace Optimization; use Boilerplate\Util\AjaxUtil; use Boilerplate\Util\StringUtil; use Optimization\Buffer\Config; use Optimization\Buffer\Test; use Optimization\Cache\Cache; use Optimization\CDN\CDN; use Optimization\Combine\Combine; use Optimization\Critical\Critical; use Optimization\Media\Media; use Optimization\Minify\Minify; use Optimization\Performance\Performance; use Optimization\Process\Process; use Optimization\Util\FormatUtil; use Optimization\Util\I18NUtil; use Optimization\Util\Util; class Optimization extends Common { public function __construct() { goto MZOAQ; b1w8W: jnnGc: goto proko; oJdzX: Process::getInstance(); goto ecprl; ecprl: parent::__construct(); goto b1w8W; MZOAQ: if (!$this->loadConstant()) { goto jnnGc; } goto oJdzX; proko: } public function addActions() : self { $this->addAction("\141\x64\155\151\x6e\x5f\x69\156\151\x74", [$this, "\x61\144\x6d\x69\x6e\111\x6e\x69\164"])->addAction("\164\145\155\x70\154\141\x74\145\x5f\162\145\144\x69\162\x65\x63\164", [$this, "\x73\164\x61\162\164\120\x72\157\143\145\x73\163"])->addAction("\155\165\160\x6c\x75\x67\151\x6e\x73\x5f\154\x6f\x61\144\x65\x64", [$this, "\155\165\x50\x6c\x75\147\151\156\x73\x4c\x6f\x61\144\x65\144"])->addAction("\x61\x66\x74\145\162\137\x73\x65\164\x75\x70\x5f\164\x68\x65\155\145", [$this, "\x6c\x6f\x61\x64\122\x65\x71\165\151\162\145\x6d\145\156\x74"]); return parent::addActions(); } public function startProcess() { goto DU6xY; B5Pg4: $dL3HD = new Config(["\160\141\x74\150" => Util::getConstant("\117\120\124\111\x4d\x49\x5a\101\124\x49\117\x4e\x5f\x43\117\x4e\x46\x49\x47\137\x50\x41\124\x48")]); goto x7V_5; x7V_5: (new Buffer(new Test($dL3HD, [])))->maybeInitProcess(); goto oeHnI; oeHnI: LbMkM: goto okZG2; DU6xY: if (is_admin()) { goto LbMkM; } goto B5Pg4; okZG2: } public function loadConstant() { goto ejV9S; tyXkq: Vuold: goto fe31r; AFULO: if (!define("\x4f\120\124\111\x4d\111\x5a\x41\x54\x49\117\116\x5f\x43\117\x4e\106\x49\x47\x5f\120\101\124\110", Util::getConstant("\102\117\x49\114\x45\x52\x50\114\101\x54\105\x5f\x56\x41\x52\x5f\120\x41\x54\x48") . "\57\x63\x6f\156\146\151\147")) { goto MJRo_; } goto dR0Al; fe31r: $pHq9s = true; goto AFULO; pQD_U: MJRo_: goto Gvw_9; Gvw_9: kIsv1: goto Xgkfh; jSHw0: define("\x4f\120\x54\x49\115\x49\132\101\124\111\117\x4e\x5f\122\117\x4f\x54\137\x44\111\x52\105\103\x54\x4f\122\x59", realpath(__DIR__ . "\x2f\x2e\56\57\x2e\56\x2f")); goto m47Yd; ejV9S: $pHq9s = false; goto L9Q3F; eYVYJ: goto kIsv1; goto tyXkq; L9Q3F: if (Util::hasConstant("\x42\117\x49\x4c\x45\122\x50\x4c\x41\124\105\x5f\126\101\122\x5f\120\101\x54\x48")) { goto Vuold; } goto Kxgrs; m47Yd: return $pHq9s; goto NIH7t; Kxgrs: Notice::warning(sprintf(__("\x25\163\40\x63\x6f\x6e\163\164\141\156\164\x20\x6e\157\x74\x20\144\145\146\151\x6e\145\144\54\40\160\154\x65\141\163\x65\40\x64\145\x66\x69\x6e\x65\40\x74\x68\141\164\x20\151\156\40\x77\160\55\143\x6f\x6e\146\151\147\x2e\x70\x68\x70\x2e", OPTIMIZATION_DOMAIN), "\x3c\143\157\x64\145\x3e\127\120\137\x56\x41\x52\x5f\120\x41\x54\110\x3c\57\143\157\x64\x65\x3e")); goto eYVYJ; Xgkfh: define("\x4f\x50\124\x49\115\x49\132\101\124\111\x4f\x4e\137\x44\x4f\115\101\111\x4e", "\x6f\x70\x74\x69\x6d\151\172\141\x74\151\157\x6e"); goto jSHw0; dR0Al: $this->getFilesystem()->addRequireDir(OPTIMIZATION_CONFIG_PATH); goto pQD_U; NIH7t: } public function adminInit() { $this->createConfigFile(); } public function muPluginsLoaded() { $this->doAction("\x62\157\151\154\145\x72\160\x6c\x61\164\145\x5f\x74\167\x69\147\137\x61\x64\144\137\x70\141\x74\x68", OPTIMIZATION_DOMAIN, OPTIMIZATION_ROOT_DIRECTORY)->loadTextDomain(OPTIMIZATION_DOMAIN); } public function loadRequirement() { goto eUj9e; NSit5: Ajax::getInstance(); goto EfPAy; EfPAy: goto CdbF4; goto WKUT8; bqkO8: Performance::getInstance(); goto kSLYu; tgVsY: Cache::getInstance(); goto gbbTQ; FLPzD: Media::getInstance(); goto tgVsY; eUj9e: CDN::getInstance(); goto FLPzD; gbbTQ: if (!AjaxUtil::isAjax()) { goto bV7lU; } goto NSit5; WKUT8: bV7lU: goto sa2DJ; sa2DJ: Theme::getInstance(); goto bqkO8; kSLYu: CdbF4: goto J95Lg; J95Lg: } public function getFiles() : array { goto C2aHQ; tdrMa: $JSjLt = I18NUtil::getSubdomains(); goto gPtDi; wwUw6: foreach ($BWnT3 as $hgTz4) { goto x23WH; JB48K: $KWSCi[$GmGyQ] = $GuTuU; goto Qbj6h; Qbj6h: ySeDS: goto j3tdj; fPeDZ: $wpkb5["\x70\141\164\150"] = $wpkb5["\x70\141\x74\150"] ? str_replace("\x2f", "\x2e", untrailingslashit($wpkb5["\x70\x61\164\150"])) : ''; goto k3C8T; IoTN3: if (!$GuTuU) { goto ySeDS; } goto fPeDZ; k3C8T: $GmGyQ = strtolower($wpkb5["\150\157\163\x74"]) . $wpkb5["\160\x61\164\x68"] . "\56\160\150\x70"; goto JB48K; j3tdj: GBp3b: goto K4PMw; x23WH: $GuTuU = Util::getConstant("\117\120\124\x49\x4d\111\x5a\x41\x54\111\117\x4e\x5f\x43\x4f\x4e\106\111\x47\137\120\101\x54\110"); goto iDfjb; iDfjb: $wpkb5 = FormatUtil::getParseUrl(untrailingslashit($hgTz4)); goto IoTN3; K4PMw: } goto WT1yR; vhPZ2: return $this->applyFilters("\157\160\x74\151\155\151\x7a\141\164\151\157\x6e\137\143\x6f\x6e\x66\151\x67\165\x72\x61\164\x69\157\156\x5f\146\151\154\x65\163\137\160\x61\x74\x68", $KWSCi); goto xX9q4; gF7s6: $BWnT3 = [I18NUtil::getHomeUrl()]; goto tdrMa; p_IFj: EyVIG: goto wwUw6; ruRGz: $BWnT3 = $JSjLt; goto p_IFj; C2aHQ: $KWSCi = []; goto gF7s6; WT1yR: AWDKl: goto vhPZ2; gPtDi: if (!$JSjLt) { goto EyVIG; } goto ruRGz; xX9q4: } public function createConfigFile() { goto yau_L; XfokV: if (!(is_array($KWSCi) && $KWSCi)) { goto D9MM7; } goto lc222; BHEym: $LfYsX = $this->getConfiguration(); goto XfokV; lc222: foreach ($KWSCi as $wpkb5 => $GuTuU) { goto Mxlqf; vlfeP: $this->getFilesystem()->mkfile($GuTuU, $wpkb5, $B6fu9); goto iIYHi; VqN9r: fc40G: goto z0x3D; GCaYR: PvjBQ: goto z7ak2; Mxlqf: if ($this->getFilesystem()->exists(trailingslashit($GuTuU) . $wpkb5)) { goto OVIQs; } goto EBtLi; p1U_y: OVIQs: goto GCaYR; U6a6I: wdj0z: goto p1U_y; gv2Yc: goto wdj0z; goto VqN9r; RLjLf: $B6fu9 = preg_replace("\100\x61\162\x72\x61\x79\134\x28\x5c\x73\53\134\51\x40\x69", "\141\x72\162\x61\x79\50\51", $B6fu9); goto vlfeP; HfIN8: $B6fu9 = preg_replace("\x40\141\x72\162\141\171\134\x73\x2b\x5c\50\100\151", "\x61\162\162\141\171\x28", $B6fu9); goto RLjLf; EBtLi: if ($this->getFilesystem()->mkdir($GuTuU) && $this->getFilesystem()->isReadable($GuTuU)) { goto fc40G; } goto cnJD_; cnJD_: Notice::writingPermission("\157\160\x74\x69\x6d\151\172\141\x74\151\157\x6e\55\x63\x6f\156\146\x69\147", $GuTuU); goto gv2Yc; iIYHi: Notice::info(sprintf(__("\x4f\x70\164\x69\155\151\x7a\x61\164\x69\x6f\156\x20\x63\x6f\x6e\x66\151\147\40\146\151\154\145\x20\45\x73\40\x67\145\x6e\x65\162\x61\164\x65\144\40\x69\156\40\x25\x73", OPTIMIZATION_DOMAIN), "\x3c\143\157\x64\x65\76{$wpkb5}\x3c\x2f\143\x6f\144\145\x3e", "\74\x63\x6f\144\145\x3e{$GuTuU}\x3c\x2f\143\157\x64\x65\x3e"), "\157\x70\164\151\155\x69\172\x61\164\151\157\156\55\143\157\156\146\151\x67"); goto U6a6I; z0x3D: $B6fu9 = $this->renderTwigTemplate("\143\157\156\146\151\147\x2e\160\150\160", ["\143\157\x6e\146\151\x67\x73" => $LfYsX]); goto HfIN8; z7ak2: } goto RCV_Z; RCV_Z: fyKKL: goto AaRCn; AaRCn: D9MM7: goto Qa3SN; yau_L: $KWSCi = $this->getFiles(); goto BHEym; Qa3SN: } public function getConfiguration() : array { $LfYsX = ["\x63\x61\143\x68\x65\x5f\x73\x73\x6c" => 0, "\143\141\x63\150\145\x5f\167\x65\142\x70" => 0, "\x63\x6f\157\x6b\x69\145\137\x68\x61\163\x68" => "\x27" . Util::getConstant("\103\x4f\x4f\113\x49\x45\x48\x41\x53\x48") . "\47", "\x63\141\143\150\x65\137\x72\x65\152\x65\143\164\x5f\165\141" => 0, "\x6c\x6f\x67\x67\x65\x64\x5f\x69\x6e\x5f\x63\157\157\153\151\145" => "\47" . Util::getConstant("\114\x4f\x47\x47\105\104\x5f\x49\x4e\x5f\x4b\x45\131") . "\x27", "\x63\141\x63\x68\x65\137\x72\145\x6a\x65\x63\164\x5f\165\162\151" => 0, "\x63\x61\143\150\145\137\x71\x75\145\162\x79\137\163\164\x72\x69\156\x67\x73" => 0, "\143\141\143\150\x65\x5f\x72\145\x6a\145\143\164\x5f\143\157\157\x6b\x69\x65\163" => $this->getRejectCookies()]; return $this->applyFilters("\157\x70\x74\151\x6d\151\172\x61\164\x69\157\x6e\x5f\x63\157\x6e\x66\151\x67\165\162\x61\164\151\x6f\156\x73", $LfYsX); } public function getRejectCookies() : string { goto Sg41v; h4nbX: $dA_0n = array_filter($dA_0n); goto r_mOB; Sg41v: $zuYNJ = explode(COOKIEHASH, LOGGED_IN_COOKIE); goto DqihQ; yHzud: $dA_0n[] = "\x63\x6f\x6d\x6d\145\156\164\137\141\165\x74\x68\x6f\162\x5f\145\155\141\151\x6c\137"; goto xwva0; mLg_T: $dA_0n[] = "\143\x6f\155\x6d\145\x6e\x74\137\x61\165\x74\150\157\162\x5f"; goto yHzud; GfESX: $dA_0n[] = "\x77\x70\x74\157\x75\x63\150\137\x73\x77\x69\164\x63\x68\x5f\164\x6f\x67\147\154\x65"; goto mLg_T; wiyU2: return StringUtil::addAroundQuotes(implode("\x7c", $dA_0n)); goto m_oit; xwva0: $dA_0n = (array) $this->applyFilters("\157\x70\x74\x69\x6d\151\x7a\141\x74\151\157\156\137\143\141\x63\150\145\137\162\x65\152\x65\x63\x74\x5f\143\157\157\x6b\x69\x65\x73", $dA_0n); goto h4nbX; fZyXJ: $dA_0n[] = "\x77\160\55\160\x6f\163\x74\160\x61\163\x73\x5f"; goto GfESX; DqihQ: $zuYNJ = array_map("\x70\x72\145\147\137\161\x75\157\x74\145", $zuYNJ); goto rTI4e; wPtfA: $dA_0n[] = $zuYNJ; goto fZyXJ; r_mOB: $dA_0n = array_flip(array_flip($dA_0n)); goto wiyU2; rTI4e: $zuYNJ = implode("\56\53", $zuYNJ); goto wPtfA; m_oit: } }
