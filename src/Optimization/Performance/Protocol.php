<?php
 namespace Optimization\Performance; class Protocol extends Common { public function __construct() { goto Pt26W; ZOscH: parent::__construct(); goto HdgEh; HdgEh: kyoXC: goto sbrHa; Pt26W: if (!$this->applyFilters("\157\x70\164\151\155\x69\x7a\x61\164\x69\x6f\156\x5f\x70\x65\162\x66\157\162\155\x61\156\143\x65\x5f\160\162\157\164\x6f\143\x6f\154\137\x64\157\x5f\x72\x65\167\162\x69\x74\145", false)) { goto kyoXC; } goto ZOscH; sbrHa: } public function addFilters() : self { $this->addFilter("\157\160\x74\x69\x6d\151\172\x61\x74\151\157\156\137\142\165\x66\146\145\162\x5f\x70\x72\157\x63\x65\x73\x73", [$this, "\x72\x65\x77\162\151\164\x65"], 1, PHP_INT_MAX)->addFilter("\x77\x70\x5f\143\x61\154\143\165\x6c\141\x74\x65\x5f\x69\x6d\x61\147\x65\137\163\162\143\x73\x65\164", [$this, "\162\145\x77\162\x69\x74\x65\x53\x72\x63\x73\145\x74"], 1, PHP_INT_MAX); return parent::addFilters(); } function rewrite(string $vwY7Y) { goto CLrbg; CLrbg: $U82SK = "\x2f\50\74\50\x73\x63\x72\x69\160\x74\x7c\154\x69\x6e\x6b\174\151\155\147\174\146\157\162\x6d\51\x28\x5b\x5e\76\x5d\x2a\51\x28\x68\162\x65\146\x7c\163\162\143\174\x61\143\164\151\157\156\51\75\133\x22\47\135\51\150\x74\164\x70\x73\77\x3a\x5c\x2f\134\57\x2f\x69"; goto pBAyS; pBAyS: $A5HEn = "\44\x31\x2f\57"; goto QqY90; eNZ7V: if (!$pHq9s) { goto hPevc; } goto z1dbd; z1dbd: $vwY7Y = $pHq9s; goto P60jr; StM2S: return $vwY7Y; goto r6oJL; P60jr: hPevc: goto StM2S; QqY90: $pHq9s = preg_replace($U82SK, $A5HEn, $vwY7Y); goto eNZ7V; r6oJL: } public function rewriteSrcset(array $X7olV) { goto EySwI; EySwI: if (!(bool) $X7olV) { goto SRL0z; } goto Ru92U; gTGXy: return $X7olV; goto mqCTm; WsubQ: GvYSk: goto PRDx0; PRDx0: SRL0z: goto gTGXy; Ru92U: foreach ($X7olV as $VuHLh => $o9yCo) { $X7olV[$VuHLh]["\165\162\x6c"] = str_replace(["\150\x74\x74\x70\x3a", "\150\164\164\160\x73\x3a"], '', $o9yCo["\165\x72\154"]); oKDGP: } goto WsubQ; mqCTm: } }
