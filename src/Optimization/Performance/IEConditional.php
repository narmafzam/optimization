<?php
 namespace Optimization\Performance; class IEConditional extends Common { const IE_PATTERN = "\57\x3c\x21\55\x2d\x5c\133\151\146\x5b\136\134\x5d\135\52\x3f\134\x5d\x3e\56\x2a\77\x3c\x21\x5c\133\145\x6e\x64\x69\146\x5c\135\55\55\76\57\x69\163"; const OPTIMIZATION_CONDITIONAL = "\74\x21\x2d\55\x7b\173\x4f\120\124\111\115\111\x5a\101\124\111\117\x4e\x5f\x43\x4f\x4e\104\111\124\111\x4f\x4e\101\114\x7d\175\x2d\55\x3e"; protected ?array $conditionals = []; public function addFilters() : self { $this->addFilter("\x6f\160\164\151\155\151\x7a\141\164\151\x6f\x6e\x5f\142\x75\146\x66\145\162\x5f\160\162\x6f\143\x65\163\x73", [$this, "\x65\170\x74\162\x61\x63\x74"], 1, 1)->addFilter("\x6f\160\x74\151\x6d\x69\172\141\x74\151\157\156\x5f\142\165\x66\x66\145\162\137\x70\x72\157\143\145\163\x73", [$this, "\151\156\x6a\x65\x63\x74"], 1, 34); return parent::addFilters(); } public function extract(string $html) { goto eHVfF; yCGjv: Pafd3: goto v0Wt0; Xf85j: return $html; goto gZVNJ; eHVfF: if (!preg_match_all(self::IE_PATTERN, $html, $matches)) { goto li9vj; } goto c2khm; v0Wt0: $html = preg_replace(self::IE_PATTERN, self::OPTIMIZATION_CONDITIONAL, $html); goto YCJ7X; c2khm: foreach ($matches[0] as $conditional) { $this->conditionals[] = $conditional; ogg1X: } goto yCGjv; YCJ7X: li9vj: goto Xf85j; gZVNJ: } public function inject(string $html) { goto anlT3; ENln2: b5ySl: goto RShge; gSUKk: return $html; goto K3Tal; RShge: ahV9d: goto gSUKk; zLZ1s: foreach ($this->conditionals as $conditional) { goto Dpxwl; M_COR: e8lob: goto yJGHS; YSfcu: $conditional = $matches["\157\160\145\156\x69\x6e\x67"] . preg_replace("\43\x28\77\74\x21\134\134\51\x28\x5c\44\x7c\134\134\x29\x23", "\134\x5c\x24\61", $matches["\x63\x6f\x6e\164\145\x6e\x74"]) . $matches["\143\x6c\x6f\163\151\x6e\x67"]; goto M_COR; Dpxwl: if (!preg_match("\100\136\x28\77\74\x6f\160\145\x6e\151\x6e\147\76\74\x21\55\x2d\x5c\133\151\x66\133\x5e\x5c\135\x5d\x2a\77\134\x5d\x3e\134\163\x2a\77\x28\x3f\x3a\x3c\41\x2d\x2d\76\51\77\134\x73\52\74\x73\143\162\x69\x70\x74\x28\77\x3a\x5c\x73\x5b\136\76\135\52\77\x3e\51\x29\134\163\x2a\50\x3f\74\x63\x6f\x6e\x74\145\x6e\164\x3e\x2e\52\77\51\x5c\163\52\50\x3f\74\x63\x6c\157\163\x69\x6e\147\x3e\x3c\x2f\x73\143\162\x69\x70\164\76\134\x73\x2a\50\x3f\72\x3c\41\55\x2d\x29\77\x5c\x73\x2a\x3f\x3c\41\134\133\145\x6e\x64\151\146\134\x5d\x2d\x2d\76\x29\x24\x40\x69\x73", $conditional, $matches)) { goto e8lob; } goto YSfcu; yZKnN: bRNOZ: goto DRutg; yJGHS: $html = $this->replaceConditionalTag($html, $conditional); goto yZKnN; DRutg: } goto ENln2; anlT3: if (!$this->hasConditionalTag($html)) { goto ahV9d; } goto zLZ1s; K3Tal: } private function hasConditionalTag(string $html) { return false !== strpos($html, self::OPTIMIZATION_CONDITIONAL); } private function replaceConditionalTag(string $html, string $original) { $tagPosition = strpos($html, self::OPTIMIZATION_CONDITIONAL); return substr_replace($html, $original, $tagPosition, strlen(self::OPTIMIZATION_CONDITIONAL)); } }
