<?php
 namespace Optimization\Cache; use Boilerplate\Util\AjaxUtil; use Boilerplate\Util\UserUtil; use Optimization\Notice; class WPCache extends Common { public function addActions() : self { $this->addAction("\141\x64\x6d\x69\x6e\137\x69\156\151\x74", [$this, "\141\144\155\x69\156\111\156\x69\164"])->addAction("\x75\x70\144\141\x74\145\137\x6f\160\x74\x69\x6f\156\x5f\x6f\x70\x74\151\155\x69\172\141\164\x69\x6f\156\x5f\x73\145\164\x74\x69\x6e\147\163", [$this, "\155\x61\x79\142\x65\123\x65\164"]); return parent::addActions(); } public function addFilters() : self { $this->addFilter("\x73\151\x74\x65\137\163\x74\x61\164\165\x73\x5f\x74\145\163\164\163", [$this, "\x61\144\144\123\x74\x61\164\x75\163\124\145\163\164"]); return parent::addFilters(); } public function adminInit() { $this->maybeSet(); $this->hasPermission(); } public function maybeSet() { goto IkZ6b; lxjCh: cV57k: goto SOMiZ; IkZ6b: if (!(!AjaxUtil::isAjax() && !Util::getConstant("\104\x4f\x49\x4e\107\x5f\x41\x55\x54\117\123\x41\126\105") && !Util::getConstant("\127\120\x5f\103\101\103\x48\105"))) { goto cV57k; } goto rl50b; rl50b: $this->setConstant(true); goto lxjCh; SOMiZ: } public function setConstant(bool $value) { goto nmDEj; xcoLj: $value = $value ? "\164\162\x75\x65" : "\146\x61\154\x73\145"; goto L90P6; nmDEj: if (!$this->shouldSetConstant($value)) { goto WK4rY; } goto GEHoy; coDIz: $found = preg_match("\57\136\x5c\163\52\144\x65\146\151\156\x65\134\x28\x5c\x73\x2a\x27\x57\x50\137\103\x41\x43\110\x45\x27\x5c\x73\x2a\54\x5c\163\52\x28\77\74\166\x61\x6c\165\145\76\x5b\136\x5c\x73\x5c\51\135\52\51\x5c\x73\52\134\x29\x2f\155", $content, $matches); goto orb6c; L90P6: $value = $this->applyFilters("\x6f\160\x74\x69\155\x69\172\x61\164\151\157\x6e\x5f\x73\145\x74\137\x63\141\143\x68\x65\137\167\160\137\143\141\x63\150\x65\137\x64\x65\146\151\x6e\145", $value); goto coDIz; Eqb5_: if (!empty($matches["\x76\141\x6c\x75\x65"]) && $matches["\166\141\154\x75\x65"] !== $value) { goto wO7tF; } goto Vn1_q; WQ90o: if (!$found) { goto B9096; } goto Eqb5_; GEHoy: $filepath = $this->findWpConfigPath(); goto ciofR; Vn1_q: goto jLgot; goto TPeCx; OiqcC: $content = $this->getFilesystem()->getContent($filepath); goto xcoLj; TPeCx: B9096: goto jFYKk; skYnF: WK4rY: goto Al0td; OI7Zi: goto jLgot; goto sQ05y; sQ05y: wO7tF: goto p3zAC; J85hv: jLgot: goto Ul0OF; jFYKk: $content = preg_replace("\x2f\x28\74\134\77\x70\150\x70\x29\57\x69", "\74\77\x70\150\x70\15\12{$constant}\xd\xa", $content); goto OI7Zi; ciofR: if (!$filepath) { goto KgQiA; } goto OiqcC; orb6c: if (!(!isset($matches["\166\141\154\165\x65"]) || $matches["\166\141\154\165\x65"] !== $value)) { goto iqX0R; } goto Jn43f; Jn43f: $constant = $this->getContent($value); goto WQ90o; hvBi4: iqX0R: goto o4Kg2; o4Kg2: KgQiA: goto skYnF; p3zAC: $content = preg_replace("\x2f\x5e\134\163\x2a\x64\145\146\x69\x6e\145\x5c\x28\134\x73\x2a\x27\127\x50\x5f\x43\x41\103\x48\105\47\x5c\163\x2a\54\134\163\x2a\50\x5b\x5e\x5c\x73\134\51\135\x2a\51\x5c\163\52\134\x29\x2e\x2b\x2f\155", $constant, $content); goto J85hv; Ul0OF: $this->getFilesystem()->putContent($filepath, $content); goto hvBi4; Al0td: } private function shouldSetConstant($value) { goto E7Jc9; uuj3z: $should = false; goto aDrPE; aDrPE: lx2Yr: goto tqvfB; tqvfB: return $should; goto u5e2V; DZj8o: v7zDW: goto uuj3z; xJbB4: goto lx2Yr; goto DZj8o; E7Jc9: if (!$this->isUserAllowed() && $value && Util::getConstant("\x57\120\x5f\103\x41\103\110\x45")) { goto v7zDW; } goto D02B0; D02B0: $should = (bool) $this->applyFilters("\157\x70\164\151\155\x69\172\x61\164\151\157\156\x5f\x63\x61\x63\x68\145\137\x73\x65\164\137\167\160\x5f\143\141\x63\150\x65\137\x63\x6f\156\x73\164\141\156\164", true); goto xJbB4; u5e2V: } private function findWpConfigPath() { goto nwz3t; DLngz: $fileAlt = "{$absPathParent}{$filename}\x2e\x70\x68\x70"; goto I8GVL; iCCU9: if ($this->getFilesystem()->isWritable($file)) { goto OnPC4; } goto fDqYx; e1sVq: OnPC4: goto i3bfg; fDqYx: $absPathParent = dirname($absPath) . DIRECTORY_SEPARATOR; goto DLngz; I8GVL: if (!($this->getFilesystem()->exists($fileAlt) && $this->getFilesystem()->isWritable($fileAlt) && !$this->getFilesystem()->exists("{$absPathParent}\x77\x70\x2d\x73\x65\x74\x74\x69\x6e\x67\163\x2e\x70\150\x70"))) { goto Vhl4v; } goto MEYpO; aAaJg: goto NNtRp; goto e1sVq; mbsKo: NNtRp: goto v4VdM; MEYpO: $path = $fileAlt; goto WTMfa; WTMfa: Vhl4v: goto aAaJg; R8x3N: $file = "{$absPath}{$filename}\x2e\160\x68\x70"; goto dnspm; v4VdM: return $path; goto pk0Us; i3bfg: $path = $file; goto mbsKo; nwz3t: $filename = $this->applyFilters("\157\160\x74\151\x6d\151\x7a\x61\164\x69\157\x6e\137\x63\141\143\x68\145\137\167\x70\x5f\x63\157\156\x66\151\x67\137\x6e\141\x6d\x65", "\x77\x70\55\143\157\156\x66\151\147"); goto SHsXW; SHsXW: $absPath = trailingslashit(Util::getConstant("\101\102\x53\x50\x41\x54\110")); goto R8x3N; dnspm: $path = false; goto iCCU9; pk0Us: } public function hasPermission() { goto McGqJ; McGqJ: global $pagenow; goto SQBWP; Eyvfo: Notice::writingPermission("\x63\141\143\150\x65\x5f\x61\x64\x76\141\x6e\143\x65\144\137\143\141\143\x68\145\137\x70\x65\x72\x6d\151\163\163\151\157\x6e\x73", "\167\160\x2d\143\x6f\x6e\146\x69\147\x2e\x70\150\160", __("\103\x61\x63\150\145", OPTIMIZATION_DOMAIN)); goto ShsY1; JqO2x: if (!($this->isUserAllowed() && !$this->findWpConfigPath() && !Util::getConstant("\127\120\x5f\103\x41\x43\x48\x45") && !("\x70\x6c\x75\147\151\156\x73\56\160\x68\x70" === $pagenow || isset($_GET["\141\143\164\151\166\141\164\x65"])) && (bool) $this->applyFilters("\x63\141\143\x68\145\x5f\163\x65\x74\x5f\167\x70\x5f\x63\141\x63\x68\145\137\143\x6f\x6e\x73\164\x61\x6e\x74", true))) { goto zZUUD; } goto AZM0l; SQBWP: $has = true; goto JqO2x; AZM0l: $has = false; goto Eyvfo; ShsY1: zZUUD: goto qGPDE; qGPDE: return $has; goto rTcLz; rTcLz: } private function isUserAllowed() { return UserUtil::currentCan(); } private function getContent($value = "\164\x72\x75\x65") { return "\x64\145\146\x69\x6e\145\50\40\47\x57\120\137\103\101\103\x48\x45\47\x2c\x20{$value}\40\51\73\x20\x2f\x2f\x20\101\x64\144\145\x64\40\142\171\40\x4f\x70\x74\151\x6d\x69\x7a\141\x74\151\x6f\x6e"; } public function addStatusTest($tests) { $tests["\x64\x69\162\x65\143\164"]["\167\160\137\x63\x61\143\x68\x65\137\163\164\x61\x74\165\163"] = ["\x6c\x61\x62\x65\x6c" => __("\x57\120\x5f\x43\101\x43\110\x45\x20\x76\141\x6c\165\145", OPTIMIZATION_DOMAIN), "\x74\145\x73\x74" => [__CLASS__, "\143\x68\145\x63\x6b\126\141\x6c\165\145"]]; return $tests; } public function checkValue() { goto gG3t7; C4Uhr: $result["\163\x74\141\x74\x75\163"] = "\143\x72\151\164\x69\x63\x61\154"; goto V6Ufc; WmRQ6: $result["\142\141\x64\x67\x65"]["\x63\157\154\x6f\x72"] = "\147\162\145\x65\156"; goto XyDi7; i7HjU: if (!(false === $value)) { goto XsVlZ; } goto GycbA; TP8E0: if (!(true === $value)) { goto Xu6uS; } goto c4Qol; V6Ufc: $result["\142\141\144\x67\x65"]["\x63\157\154\157\x72"] = "\162\145\x64"; goto q1pVx; K9SDe: $result["\142\141\x64\x67\145"]["\143\x6f\154\157\x72"] = "\x72\x65\144"; goto Sj39x; XyDi7: return $result; goto tfCwz; GycbA: $result["\154\141\x62\145\154"] = __("\127\120\x5f\103\101\103\110\105\x20\151\163\40\x73\145\x74\40\164\157\x20\146\141\154\x73\x65", OPTIMIZATION_DOMAIN); goto DA2Fd; c4Qol: $result["\154\141\x62\x65\154"] = __("\x57\x50\137\x43\101\103\110\105\40\151\163\40\163\x65\x74\40\164\157\x20\x74\162\x75\x65", OPTIMIZATION_DOMAIN); goto QUVDS; ojiu8: return $result; goto zhu4E; jwegR: XsVlZ: goto ojiu8; gG3t7: $result = ["\x62\x61\144\147\145" => ["\154\x61\142\145\x6c" => __("\x43\141\143\150\145", OPTIMIZATION_DOMAIN)], "\x64\x65\x73\143\x72\151\x70\164\151\x6f\156" => sprintf("\74\x70\76\x25\x73\74\57\160\76", __("\x54\150\x65\40\x57\x50\x5f\103\101\x43\x48\105\40\143\x6f\156\x73\x74\x61\156\x74\x20\156\x65\x65\x64\x73\x20\164\157\40\142\145\x20\x73\145\164\x20\164\157\40\x74\x72\x75\x65\x20\x66\x6f\162\x20\103\141\143\x68\145\x20\x74\157\40\167\157\x72\x6b\x20\x70\x72\x6f\160\x65\162\154\171", OPTIMIZATION_DOMAIN)), "\x61\143\164\x69\x6f\x6e\x73" => '', "\164\145\163\x74" => "\167\160\x5f\x63\x61\143\x68\x65\x5f\163\x74\x61\164\165\163"]; goto aMSbM; aMSbM: $value = Util::getConstant("\x57\x50\137\x43\x41\103\110\105"); goto TP8E0; tfCwz: Xu6uS: goto InQbE; QUVDS: $result["\x73\x74\x61\164\165\x73"] = "\147\x6f\x6f\144"; goto WmRQ6; q1pVx: return $result; goto phAZu; phAZu: VFQi3: goto i7HjU; DA2Fd: $result["\163\164\141\164\165\163"] = "\x63\x72\151\164\x69\143\x61\x6c"; goto K9SDe; Sj39x: return $result; goto jwegR; InQbE: if (!(null === $value)) { goto VFQi3; } goto J52EL; J52EL: $result["\154\x61\x62\x65\154"] = __("\x57\x50\137\x43\x41\x43\110\x45\40\151\163\x20\156\x6f\164\x20\163\x65\x74", OPTIMIZATION_DOMAIN); goto C4Uhr; zhu4E: } }
