<?php
 namespace Optimization\Critical\CSS; use Boilerplate\DOMCrawler; use Boilerplate\Util\ArrayUtil; use Boilerplate\Util\ThemeUtil; use Boilerplate\Util\UserUtil; class CSS extends Common { const CRITICAL_CSS_GENERATION_ = "\x6f\x70\164\151\x6d\151\172\141\x74\151\x6f\x6e\137\143\x72\x69\164\151\x63\141\x6c\137\143\163\163\x5f\x67\x65\x6e\145\162\x61\164\x69\157\156\137"; const RUNNING_PROCESS_TRANSITION = self::CRITICAL_CSS_GENERATION_ . "\160\x72\x6f\143\x65\x73\163\x5f\x72\x75\156\x6e\151\156\147"; const CRITICAL_CSS_GENERATION_DONE = self::CRITICAL_CSS_GENERATION_ . "\x64\x6f\x6e\x65"; public function __construct() { $this->loadRequirement(); parent::__construct(); } public function addActions() : self { $this->addAction("\x6f\160\x74\x69\x6d\151\172\x61\164\151\157\156\137\142\x75\x66\x66\x65\x72\x5f\160\162\x6f\x63\145\x73\x73", [$this, "\145\x78\164\x72\x61\143\164\103\162\x69\x74\151\143\141\154"], 1, 99); return parent::addActions(); } public function addFilters() : self { $this->addFilter("\x64\157\x5f\x63\x61\143\150\145\137\147\x65\x6e\x65\162\141\164\145\x5f\x63\x61\x63\150\151\156\x67\x5f\146\x69\154\x65\x73", [$this, "\x69\x73\x4f\160\164\x69\155\151\172\145\x64"], 0)->addFilter("\157\160\x74\151\x6d\x69\172\x61\164\151\157\x6e\137\x69\163\x5f\157\160\164\151\x6d\151\x7a\145\144", [$this, "\x69\163\117\160\164\151\x6d\151\x7a\x65\x64"], 1, 0)->addFilter("\x63\163\x73\x5f\x61\163\x73\x65\x74\x5f\165\162\x6c", [$this, "\x6d\x61\x79\x62\x65\104\151\x73\x61\142\x6c\145\110\x65\x61\x64\x43\x73\163\106\x69\154\145"], 1, 999)->addFilter("\x62\157\151\154\145\x72\160\x6c\141\x74\x65\x5f\x61\163\163\145\164\137\x69\156\x6c\x69\x6e\145\137\163\164\x79\x6c\x65\x73", [$this, "\x61\144\144\123\164\x79\154\x65\x54\x6f\110\145\141\144"], 1, 99)->addFilter("\x6f\160\x74\151\x6d\x69\x7a\141\164\151\157\x6e\137\x63\x72\x69\x74\x69\143\141\x6c\137\143\163\163\137\151\163\137\x6f\x70\x74\x69\155\x69\172\x65\144", [$this, "\x69\163\x4f\x70\164\151\155\151\x7a\x65\144"], 1, 0)->addFilter("\164\x68\145\155\145\x5f\146\x6f\x6f\164\x65\162\x5f\x6c\157\141\144\137\x6a\163\137\x6c\157\x61\144\x65\x72\137\x77\151\164\150\x5f\x65\166\x65\156\x74", [$this, "\x69\163\117\160\164\151\x6d\x69\x7a\145\144"], 1, 0); return parent::addFilters(); } public function isOptimized($NxGo9 = true) { goto x3K2g; jvCX_: return $NxGo9; goto e1HRQ; x3K2g: if ($NxGo9) { goto pZJUx; } goto Kh2DZ; Y9oEa: pZJUx: goto jvCX_; Kh2DZ: $NxGo9 = !UserUtil::isUserLoggedIn() && $this->getFilesystem()->exists(Util::getFullName()); goto Y9oEa; e1HRQ: } public function maybeDisableHeadCssFile($hgTz4) { goto d2Vdx; v5ENj: t_cB6: goto LAAZv; LAAZv: zxsel: goto pPR8X; w_3OE: if (!trim($B6fu9)) { goto t_cB6; } goto Iad74; Raf3r: $B6fu9 = $this->getFilesystem()->getContent($FF3Wu); goto w_3OE; d2Vdx: if (!$this->isOptimized(false)) { goto zxsel; } goto k2bwB; Iad74: $hgTz4 = ''; goto v5ENj; pPR8X: return $hgTz4; goto RwvXW; k2bwB: $FF3Wu = Util::getFullName(); goto Raf3r; RwvXW: } public function addStyleToHead($QHtFv) { goto Eayan; eXZk7: $FF3Wu = Util::isGenerated(); goto TU3mL; Eayan: if (!$this->isOptimized(false)) { goto UCMVN; } goto eXZk7; ghs6e: $QHtFv .= $B6fu9; goto AT8nK; TU3mL: $B6fu9 = $this->getFilesystem()->getContent($FF3Wu); goto fBBcV; AT8nK: YWv8o: goto gNxkr; fBBcV: if (!is_string($B6fu9)) { goto YWv8o; } goto ghs6e; gNxkr: UCMVN: goto CPuOT; CPuOT: return $QHtFv; goto pfKc1; pfKc1: } public function loadRequirement() { Purge::getInstance(); Extractor::getInstance(); } public function extractCritical(?string $vwY7Y) { goto Xwcu1; Xwcu1: if (!$this->applyFilters("\x6f\160\x74\x69\155\x69\172\141\164\151\157\x6e\x5f\143\162\151\x74\x69\143\141\154\x5f\x63\x73\x73\x5f\143\141\156\137\145\170\164\162\x61\143\164", true)) { goto YrmZo; } goto Knve8; BD6wG: YrmZo: goto WWG7M; PtrID: Drs9D: goto oP23k; xIoaT: $vwY7Y = DOMCrawler::updateContent($vwY7Y, $C2Sin, $uQihC); goto QKQbp; Knve8: if (!($FF3Wu = Util::isNotGenerated())) { goto mb0wV; } goto ktDZC; pZj35: $vwY7Y = DOMCrawler::addChild($vwY7Y, "\150\145\141\144", $uQihC); goto PtrID; ktDZC: $uQihC = Extractor::getInstance()->extract($vwY7Y, $FF3Wu, true); goto N3gS4; oP23k: SaxHQ: goto Omqwj; BLJpQ: $uQihC = ThemeUtil::generateElement("\x73\164\x79\x6c\x65", [], true, $uQihC); goto pZj35; Omqwj: mb0wV: goto BD6wG; QKQbp: goto Drs9D; goto AbCg5; jIFlu: if (!DOMCrawler::has($vwY7Y, $C2Sin)) { goto NWj0h; } goto xIoaT; AbCg5: NWj0h: goto BLJpQ; JPN7j: $C2Sin = "\163\x74\171\x6c\145\43\142\x6f\151\154\145\162\160\154\141\164\x65\137\x69\x6e\154\x69\x6e\x65\x5f\x73\164\x79\154\x65"; goto jIFlu; N3gS4: if (!$uQihC) { goto SaxHQ; } goto JPN7j; WWG7M: return $vwY7Y; goto hfzfm; hfzfm: } }
