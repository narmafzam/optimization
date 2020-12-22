<?php
 namespace Optimization\Media; use Boilerplate\DOMCrawler; use Boilerplate\Util\ArrayUtil; use Boilerplate\Util\PostUtil; use Boilerplate\Util\ThemeUtil; use DOMElement; class LQIP extends Common { const IMAGE_SIZE = "\x6c\161\x69\160\137\163\x69\x7a\145"; const ATTACHMENT_META = "\x6f\x70\164\x69\x6d\151\x7a\141\x74\151\157\156\137\x6d\x65\x64\151\x61\137\154\x71\x69\160\x5f\x6d\145\164\141\x64\x61\164\x61"; public function addActions() : self { $this->addAction("\x61\146\164\145\x72\x5f\x73\145\x74\165\160\137\x74\x68\x65\x6d\x65", [$this, "\x61\x64\144\x49\155\141\x67\x65\x53\x69\x7a\145"], 0, 9999); return parent::addActions(); } public function addFilters() : self { $this->addFilter("\150\145\x61\144\145\162\137\x68\145\x61\144\137\x73\x74\171\x6c\x65\x73", [$this, "\141\x64\144\x53\164\171\154\145\163"], 1, 99)->addFilter("\167\x70\137\x67\145\x6e\145\162\x61\x74\145\137\x61\x74\164\141\143\150\155\145\x6e\x74\x5f\x6d\145\164\141\144\141\x74\x61", [$this, "\147\x65\156\145\162\141\x74\145"], 2, 10)->addFilter("\157\160\164\151\x6d\x69\172\x61\164\x69\x6f\156\137\142\165\146\x66\145\162\137\160\x72\x6f\143\145\163\x73", [$this, "\141\x64\144\120\154\141\143\x65\x68\x6f\154\x64\x65\162\124\157\x49\155\141\x67\x65\163"], 1, 20)->addFilter("\157\160\164\x69\155\151\172\141\x74\x69\157\156\137\142\165\x66\146\x65\x72\137\156\157\x74\x5f\160\162\x6f\x63\145\x73\163\145\144", [$this, "\x61\x64\144\x50\154\x61\143\145\150\x6f\x6c\144\145\x72\x54\157\x49\x6d\141\x67\145\x73"], 1, 20); return parent::addFilters(); } public function addImageSize() { add_image_size(self::IMAGE_SIZE, 30, 20); } public function addStyles($styles) { $styles .= $this->renderTwigTemplate("\x73\164\171\x6c\x65\x73\x2e\143\163\163"); return $styles; } public function addPlaceholderToImages($buffer) { $buffer = preg_replace_callback("\57\74\151\x6d\147\56\52\x3f\x5b\x5e\x5c\x3e\x5d\x2b\76\x2f", function ($matches) { goto aN2kY; KoBYj: if (!$image) { goto VhTHs; } goto Uyq1f; Pm0kK: VhTHs: goto h9VO0; p9kmk: if (!$placeholder) { goto Gb0Cq; } goto sRgJp; g8shE: Gb0Cq: goto zB3vD; YYP7o: $id = ArrayUtil::get($attrs, "\144\x61\164\x61\55\151\144"); goto miUdn; zB3vD: Pb3Nz: goto Pm0kK; h9VO0: return $image; goto Zh8Fb; Gadk0: $width = ArrayUtil::get($attrs, "\x77\x69\144\x74\150", 0); goto ANUX2; Uyq1f: $attrs = DOMCrawler::getAttributes($image, "\151\155\147"); goto YYP7o; miUdn: if (!($id && wp_attachment_is_image($id))) { goto Pb3Nz; } goto x8HuZ; x8HuZ: $placeholder = PostUtil::getMeta(self::ATTACHMENT_META, true, $id); goto p9kmk; ANUX2: $image = ThemeUtil::generateElement("\144\151\166", ["\x63\x6c\141\163\163" => "\160\154\x61\143\x65\x68\x6f\154\144\145\162\55\x63\157\x6e\x74\141\151\156\145\162", "\163\164\171\154\x65" => "\155\151\156\x2d\167\x69\x64\164\150\x3a\x20{$width}\160\170"], true, [$image, $placeholder]); goto g8shE; aN2kY: $image = ArrayUtil::get($matches, 0); goto KoBYj; OCHGh: $image = DOMCrawler::addAttribute($image, ["\151\x6d\147" => ["\143\x6c\141\163\163" => "\x6f\x70\x61\x63\151\164\171\55\x74\162\141\x6e\x73\x69\164\151\157\156"]]); goto Gadk0; sRgJp: $placeholder = ThemeUtil::generateElement("\163\160\x61\x6e", ["\x73\x74\x79\154\x65" => "\142\141\x63\x6b\147\x72\x6f\165\156\x64\55\x69\x6d\141\x67\x65\72\40\x75\x72\154\50\x27{$placeholder}\47\x29\73", "\143\x6c\x61\x73\x73" => trim("\x62\x67\x2d\143\157\x76\x65\162\x20\157\x70\141\143\x69\x74\x79\55\164\162\x61\x6e\x73\151\164\x69\157\x6e\x20\x69\x6d\x67\x2d\x62\154\x75\x72\x20\167\x2d\x31\60\x30\40\x68\x2d\x31\x30\x30")]); goto OCHGh; Zh8Fb: }, $buffer); return $buffer; } public function generate($metadata, $attachment) { goto dWMPl; TrktU: yaOWL: goto UjyX9; ftuk6: if (!($filename && $original)) { goto yaOWL; } goto WJMpw; WJMpw: $file = str_replace(basename($original), $filename, get_attached_file($attachment)); goto kAPjU; YAPH6: if (!$base64) { goto qggAa; } goto WpYug; YedsR: tEQhs: goto TrktU; h0_u_: $base64 = "\x64\141\164\x61\72\151\155\x61\x67\x65\57{$mimetype}\x3b\142\141\x73\145\66\64\x2c" . base64_encode($this->getFilesystem()->getContent($file)); goto YAPH6; wR4St: $filename = ArrayUtil::getByPath($metadata, "\x73\151\x7a\145\x73\56" . self::IMAGE_SIZE . "\x2e\x66\x69\154\145"); goto ftuk6; UjyX9: return $metadata; goto C9u5l; dWMPl: $original = ArrayUtil::get($metadata, "\x66\151\154\x65"); goto wR4St; OQ6zr: qggAa: goto YedsR; WpYug: PostUtil::addMeta(self::ATTACHMENT_META, $base64, $attachment); goto OQ6zr; kAPjU: if (!$this->getFilesystem()->exists($file)) { goto tEQhs; } goto Wnpvg; Wnpvg: $mimetype = ArrayUtil::getByPath($metadata, "\163\x69\x7a\145\163\56" . self::IMAGE_SIZE . "\56\155\x69\155\145\55\x74\171\160\x65"); goto h0_u_; C9u5l: } }
