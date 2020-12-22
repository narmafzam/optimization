<?php
 namespace Optimization\Performance; use Boilerplate\DOMCrawler; use Boilerplate\Util\ArrayUtil; use Boilerplate\Util\UserUtil; use DOMElement; use Optimization\Util\FormatUtil; use Optimization\Util\Util; use WP_Scripts; class Resource extends Common { public function removeActions() : self { $this->removeAction("\167\160\x5f\x70\162\151\156\x74\x5f\163\164\x79\154\x65\163", "\160\162\x69\x6e\x74\137\145\155\157\152\x69\x5f\x73\x74\x79\x6c\x65\163")->removeAction("\141\x64\155\151\156\x5f\160\162\151\156\x74\137\163\x74\x79\x6c\x65\163", "\160\162\x69\156\x74\x5f\x65\155\157\152\x69\137\x73\164\171\154\x65\x73")->removeAction("\167\160\137\x68\x65\141\x64", "\160\x72\151\x6e\164\137\145\x6d\157\x6a\151\137\144\145\164\x65\143\x74\151\157\x6e\x5f\x73\143\162\x69\160\x74", 7)->removeAction("\141\x64\155\151\156\137\160\x72\x69\x6e\x74\137\163\x63\162\151\160\x74\163", "\160\x72\151\x6e\x74\137\x65\155\x6f\x6a\151\x5f\144\x65\164\145\143\x74\151\157\156\137\x73\143\x72\151\x70\164"); return parent::removeActions(); } public function addActions() : self { $this->addAction("\x77\160\x5f\x65\x6e\161\x75\x65\x75\145\137\163\143\162\x69\160\164\163", [$this, "\144\145\161\x75\145\x75\145\101\163\163\x65\x74\163"], 0, 999); return parent::addActions(); } public function addFilters() : self { $this->addFilter("\x73\x74\171\x6c\145\x5f\154\157\141\x64\145\162\x5f\x73\162\x63", [$this, "\x72\145\155\157\x76\x65\x56\145\162\x73\151\157\156"], 1, 9999)->addFilter("\x73\143\162\x69\160\164\x5f\154\x6f\141\x64\145\162\137\x73\x72\x63", [$this, "\162\x65\x6d\x6f\x76\145\x56\x65\x72\x73\x69\157\156"], 1, 9999)->addFilter("\157\x70\164\151\x6d\151\x7a\x61\x74\x69\x6f\x6e\x5f\x62\x75\146\x66\145\x72\137\160\162\157\143\145\x73\163", [$this, "\x6c\x61\172\x79\x4c\157\141\x64\101\x73\x73\x65\164\163"], 1, 24)->addFilter("\x6f\x70\x74\151\155\x69\x7a\x61\164\x69\157\156\x5f\142\x75\x66\146\145\162\x5f\160\x72\x6f\143\145\163\x73", [$this, "\144\145\146\x65\x72\x4a\141\166\x61\x73\x63\x72\151\x70\164"], 1, 99999)->addFilter("\x6f\x70\164\151\155\151\x7a\141\164\151\x6f\156\137\x62\x75\x66\x66\145\x72\x5f\160\x72\157\x63\x65\x73\x73", [$this, "\162\145\155\157\x76\145\124\x79\160\145\101\164\164\162\151\x62\x75\x74\x65"], 1, 25)->addFilter("\x62\157\x69\154\x65\162\160\x6c\141\x74\145\137\x61\163\x73\145\x74\x5f\x69\156\154\151\156\x65\x5f\x6a\x61\x76\141\163\x63\x72\151\x70\x74", [$this, "\x61\x64\x64\111\x6e\154\x69\156\x65\x4a\x73"], 1, 9999); return parent::addFilters(); } public function dequeueAssets() { goto V5T8a; BpKOL: IjXtu: goto iMd39; V5T8a: if (UserUtil::isUserLoggedIn()) { goto IjXtu; } goto Em66O; fgTXD: wp_dequeue_script("\167\160\55\145\x6d\x62\145\x64"); goto hunCK; GpU0C: wp_dequeue_style("\163\x65\x6c\x65\143\164\x32"); goto hWe80; hWe80: wp_deregister_style("\163\145\x6c\x65\x63\x74\x32"); goto fgTXD; mdnrV: wp_dequeue_script("\x73\x74\x79\154\145"); goto Tdu7T; BiCuJ: wp_deregister_style("\144\x61\x73\x68\x69\143\x6f\156\163"); goto GpU0C; hunCK: wp_deregister_script("\167\160\x2d\145\x6d\142\145\144"); goto mdnrV; Em66O: wp_dequeue_style("\x64\141\x73\150\x69\143\x6f\156\x73"); goto BiCuJ; Tdu7T: wp_deregister_script("\x73\x74\x79\154\x65"); goto BpKOL; iMd39: } public function addInlineJs($scripts) { goto HtrSw; YnEas: $scripts[] = $lazyLoadJs; goto RLKtp; kUivM: return $scripts; goto mutSu; HtrSw: $lazyLoadJs = $this->renderTwigTemplate("\x6c\x61\172\171\154\157\x61\144\56\x6a\x73", ["\151\x73\x5f\x61\144\x6d\151\x6e" => is_admin()]); goto mIA6u; RLKtp: lmbwU: goto kUivM; mIA6u: if (!$lazyLoadJs) { goto lmbwU; } goto YnEas; mutSu: } private function isAllowed() { return !Util::getConstant("\x44\x4f\116\124\x5f\120\105\122\x46\x4f\x52\x4d\101\x4e\x43\105\137\x4f\120\x54\111\115\x49\x5a\x45", false); } public function removeVersion($src) { goto zW97v; JnYGv: $src = remove_query_arg("\166\145\x72", $src); goto uCudf; zW97v: if (!strpos($src, "\166\x65\x72\x3d")) { goto c6She; } goto JnYGv; WGQL_: return $src; goto NYBZ9; uCudf: c6She: goto WGQL_; NYBZ9: } public function getExcludeDeferJs() { goto Qyf13; Qyf13: $excludes = ["\147\151\163\x74\x2e\147\x69\164\150\165\x62\x2e\143\157\x6d", "\x63\x6f\156\164\145\156\x74\x2e\152\x77\160\154\x61\x74\x66\x6f\x72\155\x2e\143\157\155", "\152\x73\x2e\x68\163\x66\157\162\x6d\x73\56\x6e\145\x74", "\x77\167\167\x2e\165\160\154\141\x75\x6e\143\150\x2e\143\x6f\155", "\147\x6f\157\x67\x6c\145\56\143\157\155\x2f\x72\145\143\x61\160\164\143\x68\141", "\x77\x69\144\x67\x65\x74\x2e\x72\x65\166\x69\145\167\163\56\x63\x6f\56\165\153", "\x76\145\x72\x69\146\x79\x2e\141\165\164\150\x6f\x72\x69\172\x65\x2e\x6e\x65\x74\x2f\141\x6e\145\164\163\145\141\154", "\154\x69\x62\57\141\x64\x6d\151\x6e\57\141\x73\x73\145\164\163\57\x6c\x69\142\57\x77\145\x62\146\x6f\x6e\164\x2f\x77\x65\x62\146\157\156\x74\x2e\155\151\x6e\x2e\152\x73", "\x61\x70\x70\56\155\x61\x69\154\145\x72\154\151\x74\x65\x2e\143\x6f\x6d", "\x77\x69\144\147\145\164\x2e\162\145\x76\x69\145\167\x73\x2e\x69\157"]; goto w33kY; bpKAq: $excludes = $this->applyFilters("\157\x70\x74\x69\155\151\x7a\x61\164\x69\x6f\156\x5f\x70\145\162\146\x6f\x72\155\141\x6e\x63\x65\137\x72\x65\163\157\x75\162\143\145\x5f\x65\170\x63\154\x75\x64\145\x5f\144\145\146\145\x72\137\152\x73", $excludes); goto Cmvb3; w33kY: $cdnjs = "\x63\x64\156\152\163\56\143\154\x6f\x75\x64\x66\x6c\141\162\145\x2e\143\157\x6d\x2f\141\152\x61\170\x2f\x6c\x69\x62\163\x2f\x6a\x71\x75\145\x72\171\x2f\x28\x3f\72\56\53\x29\x2f\152\161\165\x65\162\x79\50\77\72\x5c\x2e\x6d\151\156\51\x3f\x2e\152\163"; goto wfo22; MsM6z: $excludes[] = $googleapis; goto Fy548; PAx4k: return $excludes; goto kj90n; vXy3d: MHHnA: goto PAx4k; dGaaj: $jetpack = "\x63\x30\x2e\167\x70\x2e\x63\x6f\155\x2f\143\57\50\77\72\56\x2b\x29\x2f\x77\x70\x2d\151\x6e\x63\154\x75\144\x65\x73\x2f\x6a\163\x2f\152\x71\x75\x65\162\x79\x2f\152\x71\165\145\162\x79\x2e\x6a\163"; goto kQzMc; Cmvb3: foreach ($excludes as $i => $exclude) { $excludes[$i] = str_replace("\43", "\134\43", $exclude); iV3HR: } goto vXy3d; kQzMc: $googleapis = "\x61\x6a\141\170\x2e\x67\x6f\157\x67\154\x65\141\160\x69\x73\x2e\143\157\155\x2f\x61\152\141\x78\57\x6c\x69\142\x73\57\x6a\x71\x75\x65\x72\171\57\x28\x3f\x3a\56\x2b\51\57\x6a\x71\165\x65\x72\171\x28\x3f\x3a\134\x2e\x6d\151\x6e\x29\77\x2e\152\163"; goto fzjJA; Fy548: $excludes[] = $cdnjs; goto bpKAq; fzjJA: $excludes[] = FormatUtil::cleanExcludeFile($jquery); goto jK9vE; wfo22: $jquery = site_url(wp_scripts()->registered["\x6a\161\165\x65\162\x79\55\143\157\x72\x65"]->src); goto dGaaj; jK9vE: $excludes[] = $jetpack; goto MsM6z; kj90n: } public function lazyLoadAssets($buffer) { goto TDS4S; ySrGC: return $buffer; goto heTER; mfkds: $replacement = ["\150\x72\145\x66" => "\144\x61\x74\x61\55\x68\162\x65\x66", "\163\162\x63" => "\x64\141\x74\141\x2d\163\x72\143"]; goto LMvjr; l2AHW: ydZHU: goto DAzQZ; N8F2J: $buffer = DOMCrawler::elementsMap($buffer, $selectors, function (DOMElement $node) use($replacement, $includes) { goto uK0id; uK0id: foreach ($replacement as $old => $new) { goto I6HyX; NWcwM: jpGec: goto s2urX; GoMDT: if (!$canLazyLoad) { goto jpGec; } goto n135t; Vh1gb: if (!$includes) { goto qgRv1; } goto HHp8X; GuLRe: $priority = 1; goto sa1Z5; yoi9P: qgRv1: goto GoMDT; HHp8X: $canLazyLoad = false; goto K9ezb; zm9OM: if (!$value) { goto eRRQ6; } goto GuLRe; lAWXE: $node->setAttribute("\x64\141\164\x61\x2d\160\x72\151\x6f\x72\x69\x74\171", $priority); goto krjVS; jsF2i: BzbCi: goto OUm_O; s2urX: eRRQ6: goto jsF2i; K9ezb: foreach ($includes as $include => $num) { goto jbBLJ; jbBLJ: if (!(strpos($value, $include) !== false)) { goto VLnmH; } goto ybh1o; OfYQ1: hl3yV: goto Ry6v8; QWXJ7: goto F37Zx; goto coIEp; coIEp: VLnmH: goto OfYQ1; ybh1o: $priority = $num; goto uHd9z; uHd9z: $canLazyLoad = true; goto QWXJ7; Ry6v8: } goto Smy0l; Smy0l: F37Zx: goto yoi9P; krjVS: $node->removeAttribute($old); goto U_9Gg; n135t: $node->setAttribute($new, $value); goto lAWXE; sa1Z5: $canLazyLoad = true; goto Vh1gb; I6HyX: $value = $node->getAttribute($old); goto zm9OM; U_9Gg: goto lGTB_; goto NWcwM; OUm_O: } goto PB50Q; PB50Q: lGTB_: goto SJ1jX; SJ1jX: return $node; goto stYw3; stYw3: }); goto l2AHW; LMvjr: $selectors = $this->applyFilters("\x6f\x70\x74\x69\155\x69\x7a\141\164\151\157\156\x5f\x70\x65\162\146\157\162\x6d\x61\x6e\143\x65\x5f\x72\145\163\x6f\x75\x72\x63\145\137\x6c\x61\x7a\x79\137\154\157\141\144\137\x73\x65\154\x65\x63\164\157\x72", "\x6c\x69\x6e\153\x5b\x68\162\x65\x66\x5d\x5b\162\145\x6c\75\163\x74\x79\154\x65\x73\x68\145\x65\164\x5d\54\x20\x73\143\162\x69\160\x74\x5b\163\x72\143\x5d"); goto SEMiX; DAzQZ: DaZuu: goto ySrGC; deCUi: $includes = $this->applyFilters("\x6f\x70\164\151\155\151\x7a\x61\x74\151\x6f\156\x5f\x70\145\x72\x66\157\162\x6d\x61\x6e\143\145\x5f\x72\x65\163\x6f\165\162\x63\x65\137\154\x61\172\x79\137\x6c\x6f\141\x64\137\x69\x6e\143\x6c\165\144\x65\163", []); goto N8F2J; TDS4S: if (!$this->applyFilters("\157\160\x74\x69\155\151\x7a\141\164\x69\x6f\x6e\x5f\160\x65\x72\x66\157\162\x6d\141\156\143\145\137\162\x65\163\x6f\165\162\143\x65\137\154\141\x7a\x79\137\x6c\x6f\x61\144\x5f\x61\163\x73\145\x74\x73", true)) { goto DaZuu; } goto mfkds; SEMiX: if (!$selectors) { goto ydZHU; } goto deCUi; heTER: } public function deferJavascript($buffer) { goto ROMWR; AkoXY: DOMCrawler::addAttribute($buffer, ["\163\x63\162\x69\x70\164\x5b\x73\x72\143\x5d" => ["\x64\145\x66\146\145\162" => true]]); goto LYMww; LYMww: K4xKi: goto kuuXu; ROMWR: if (!($buffer && $this->isAllowed())) { goto K4xKi; } goto AkoXY; kuuXu: return $buffer; goto dX1nt; dX1nt: } public function removeTypeAttribute($tag) { return preg_replace("\57\x74\171\160\145\75\x5b\47\x22\x5d\x74\x65\x78\x74\134\x2f\50\152\x61\x76\x61\163\143\162\x69\x70\x74\x7c\143\x73\x73\51\x5b\47\x22\x5d\x2f", '', $tag); } }
