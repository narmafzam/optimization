<?php
 namespace Optimization; use Boilerplate\Util\ThemeUtil; class Theme extends Common { public function addActions() : self { $this->addAction("\167\160\137\x62\157\x64\171\x5f\x6f\160\145\x6e", [$this, "\162\145\156\x64\x65\x72\114\x6f\141\144\151\156\147"], 0, 999); return parent::addActions(); } public function addFilters() : self { $this->addFilter("\x62\157\x64\x79\137\143\154\x61\163\x73", [$this, "\141\144\144\103\x6c\x61\x73\163\x54\157\x42\157\x64\x79"])->addFilter("\x62\157\x69\154\x65\162\160\154\x61\164\145\x5f\x61\163\x73\145\164\137\x69\156\x6c\x69\x6e\145\x5f\x73\x74\171\x6c\x65\163", [$this, "\x61\144\x64\x49\x6e\x6c\151\156\x65\123\x74\x79\x6c\x65"])->addFilter("\x62\x6f\151\154\x65\x72\x70\154\141\164\145\x5f\x61\x73\x73\145\x74\x5f\x69\156\x6c\151\x6e\x65\137\152\x61\166\141\163\143\162\x69\x70\164", [$this, "\x61\x64\144\x49\156\154\x69\x6e\x65\112\x73"]); return parent::addFilters(); } public function addClassToBody($classes) { $classes[] = "\157\166\145\162\x66\x6c\x6f\x77\55\150\151\x64\144\145\156"; return $classes; } public function addInlineJs($scripts) { goto GdCMO; nJn74: if (!$script) { goto B_jsa; } goto QjjPt; u9tXo: B_jsa: goto L7WBT; GdCMO: $script = $this->renderTwigTemplate("\x6c\x6f\x61\x64\x69\156\x67\x2e\152\163"); goto nJn74; QjjPt: $scripts[] = $script; goto u9tXo; L7WBT: return $scripts; goto fVXvq; fVXvq: } public function addInlineStyle($styles) { $styles .= $this->renderTwigTemplate("\x6c\x6f\141\144\151\156\x67\x2e\x63\x73\163", ["\143\157\x6c\x6f\x72" => "\x23\x46\106\x46\x46\x46\x46", "\142\141\143\x6b\147\162\x6f\x75\x6e\144\x5f\x63\157\154\157\162" => "\x23\63\64\64\x39\x36\66"]); return $styles; } public function renderLoading() { goto TRqT9; TRqT9: $html = ''; goto nO9NZ; vE22J: if (!($i < 15)) { goto YnjX3; } goto fdeHO; xtUmw: lffPE: goto ET7eb; ET7eb: $i++; goto fAoBz; nO9NZ: $i = 0; goto mZYv5; QoVX8: ThemeUtil::renderElement("\144\x69\x76", ["\143\x6c\141\x73\x73" => "\x70\141\147\x65\x2d\160\x72\x65\x6c\x6f\x61\144\145\x72\55\143\157\166\145\x72\x20\x73\150\x6f\167"], true, [ThemeUtil::generateElement("\144\151\x76", ["\x63\x6c\141\163\163" => "\160\141\x67\145\x2d\160\162\145\154\157\141\x64\145\x72"], true, $html), ThemeUtil::generateElement("\x70", ["\143\x6c\141\163\x73" => "\160\141\147\145\x2d\x70\162\x65\154\157\141\144\x65\162\x2d\x74\x65\x78\164"], true, __("\x4c\x6f\141\x64\151\x6e\147\x2e\56\x2e", OPTIMIZATION_DOMAIN))]); goto YnVd4; fAoBz: goto wzlE9; goto XkR1q; mZYv5: wzlE9: goto vE22J; XkR1q: YnjX3: goto QoVX8; fdeHO: $html .= ThemeUtil::generateElement("\x64\151\x76", ["\x63\x6c\141\163\163" => "\x74\150\151\x6e\147"], true); goto xtUmw; YnVd4: } }
