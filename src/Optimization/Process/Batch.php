<?php
 namespace Optimization\Process; use Boilerplate\Process\Background; use Boilerplate\Util\AjaxUtil; use Boilerplate\Util\ArrayUtil; use Boilerplate\Util\CommonUtil; use Boilerplate\Util\PageUtil; use Optimization\Notice; use Optimization\Util\Util; class Batch extends Background { const OPTIMIZATION = "\157\x70\x74\x69\155\x69\172\141\164\x69\157\x6e\137"; const OPTIMIZATION_URLS = self::OPTIMIZATION . "\165\162\154\163"; const OPTIMIZATION_STARTED = self::OPTIMIZATION . "\163\164\141\162\164\145\x64"; const RUNNING_PROCESS_TRANSITION = self::OPTIMIZATION . "\162\x75\x6e\x6e\151\x6e\x67\137\x70\162\157\143\x65\163\163"; public function __construct() { $this->action = "\x6f\160\x74\151\x6d\x69\172\x61\x74\x69\157\156\x5f\142\x61\x74\143\x68\137\x70\162\157\143\145\163\x73"; parent::__construct(); } public function addActions() : self { $this->addAction("\141\x64\x6d\x69\x6e\x5f\151\x6e\x69\x74", [$this, "\x61\x64\155\151\x6e\111\x6e\x69\164"], 0, 99)->addAction("\141\x66\164\x65\162\137\157\160\164\x69\x6d\151\172\141\164\151\157\156\137\x63\154\145\141\156\x5f\x70\157\x73\164", [$this, "\157\156\x43\x6c\145\141\156\120\157\x73\x74"], 2, 99)->addAction("\141\146\x74\x65\162\137\x6f\160\164\x69\155\x69\172\x61\164\x69\157\x6e\137\x63\154\x65\x61\156\x5f\144\x6f\155\x61\x69\x6e", [$this, "\x72\145\x73\x65\164\120\x72\157\x63\145\163\163"], 0, 99); return parent::addActions(); } public function onCleanPost($post, $vlmBW) { goto SbBTy; iTA7Y: if (!(join('', $vlmBW) !== join('', $sVhRw))) { goto WfuOx; } goto LVaFz; lrzXx: $sVhRw = (array) Util::getOption(self::OPTIMIZATION_URLS, []); goto iTA7Y; LVaFz: $vlmBW = array_unique(array_merge($vlmBW, $sVhRw), SORT_REGULAR); goto ynEAQ; Dic2J: WfuOx: goto XwOTF; SbBTy: $vlmBW[] = PageUtil::getFrontPagePermalink(); goto lrzXx; ynEAQ: Util::updateOption(self::OPTIMIZATION_URLS, $vlmBW); goto Dic2J; XwOTF: } public function resetProcess() { $this->complete(); Util::deleteOption(self::OPTIMIZATION_STARTED); } protected function complete() { goto i5SMa; i5SMa: parent::complete(); goto ZLrpy; PeCaz: wp_cache_delete(self::RUNNING_PROCESS_TRANSITION, "\x74\x72\x61\x6e\163\151\x65\x6e\164"); goto VBZpp; ZLrpy: Util::deleteOption(self::OPTIMIZATION_URLS); goto u5mWB; u5mWB: delete_transient(self::RUNNING_PROCESS_TRANSITION); goto PeCaz; VBZpp: } public function adminInit() { goto zT_jl; zT_jl: if (AjaxUtil::isAjax()) { goto zYd1j; } goto dehfc; dehfc: if (CommonUtil::getOption(self::OPTIMIZATION_STARTED, false)) { goto CJIrv; } goto qSuqk; dbBEa: zYd1j: goto w4Oug; GzF55: Util::updateOption(self::OPTIMIZATION_STARTED, true); goto JOTS3; VodHl: $this->startOptimization(); goto dbBEa; qSuqk: $this->maybeStartProcess(Util::getPublicPermalinks()); goto GzF55; JOTS3: CJIrv: goto VodHl; w4Oug: } public function startOptimization() { goto naYRc; WOEA5: Util::deleteOption(self::OPTIMIZATION_URLS); goto cEiuw; EQ0jN: if (!$vlmBW) { goto jHlM4; } goto kBaXx; kBaXx: $IMdqE = md5(join('', $vlmBW)); goto k5xaZ; cEiuw: jHlM4: goto sxtde; naYRc: $vlmBW = Util::getOption(self::OPTIMIZATION_URLS, []); goto EQ0jN; k5xaZ: $this->maybeStartProcess($vlmBW, $IMdqE); goto WOEA5; sxtde: } public function task($fnl_W) { goto qnVFI; Nm106: YeG_c: goto XR7Ml; XR7Ml: return false; goto EnE6b; T1OEA: $VVHCj = false; goto w9wJ1; Ql8mK: ujweC: goto XfCfJ; vaHDL: if (!is_wp_error($LeuxT)) { goto ujweC; } goto T1OEA; XfCfJ: $this->updateRunningTransient($VVHCj); goto Nm106; w9wJ1: $vwB7A["\145\162\x72\x6f\x72\x73"] = json_encode($LeuxT->errors); goto Ql8mK; Rkj5K: $VVHCj = true; goto cL0uI; qnVFI: if (!$fnl_W) { goto YeG_c; } goto Rkj5K; cL0uI: $LeuxT = Util::sendOptRequest($fnl_W); goto vaHDL; EnE6b: } private function updateRunningTransient($ZR0Sv) { goto Ytfsh; xxw77: $IMdqE["\163\x75\143\143\145\163\x73"] = ++$VVHCj; goto CtMcF; ME4Lt: $VVHCj = (int) ArrayUtil::get($IMdqE, "\x73\x75\143\143\145\x73\x73", 0); goto LpshG; LpshG: if ($ZR0Sv) { goto N2YUh; } goto fZUzE; CtMcF: mvA3g: goto o8KUM; GITzP: $FdVTn = (int) ArrayUtil::get($IMdqE, "\146\141\151\154\x65\144", 0); goto ME4Lt; eIi6p: $yOKwM = (int) ArrayUtil::get($IMdqE, "\164\157\164\141\x6c", 0); goto GITzP; o8KUM: set_transient($nzF0q, $IMdqE, $this->getExpire($yOKwM)); goto xZ7tH; Ytfsh: $nzF0q = self::RUNNING_PROCESS_TRANSITION; goto q0nQg; q0nQg: $IMdqE = get_transient($nzF0q); goto eIi6p; r178h: N2YUh: goto xxw77; fZUzE: $IMdqE["\x66\x61\151\154\145\144"] = ++$FdVTn; goto QwiqN; QwiqN: goto mvA3g; goto r178h; xZ7tH: } public function generationRunningNotice() { goto P6Z2I; UG21w: $FdVTn = ArrayUtil::get($IMdqE, "\146\141\151\154\145\144", 0); goto lYVXd; ENK8_: wp_cache_delete(self::RUNNING_PROCESS_TRANSITION, "\164\162\x61\x6e\x73\151\145\156\164"); goto me5vG; Uwj2E: $yOKwM = ArrayUtil::get($IMdqE, "\164\157\x74\x61\154", 0); goto l0jsk; me5vG: goto OwlMG; goto yKspL; aD_aw: $VVHCj = ArrayUtil::get($IMdqE, "\x73\x75\143\143\x65\163\163", 0); goto UG21w; HQZSp: delete_transient(self::RUNNING_PROCESS_TRANSITION); goto ENK8_; lYVXd: Notice::info(sprintf(__("\117\x70\x74\x69\155\151\172\141\164\x69\157\x6e\x20\160\162\x6f\x63\x65\x73\163\40\x69\163\40\x63\x75\x72\x72\145\156\x74\154\171\x20\x72\x75\156\156\151\156\147\x3a\40\45\x73\40\163\165\143\143\145\x73\x73\x20\141\x6e\x64\x20\45\163\x20\x66\x61\x69\154\x65\144\x20\x6f\x66\40\x25\163\40\x70\x61\147\145\x20\164\171\160\x65\163\x20\143\157\x6d\160\x6c\x65\x74\145\144\56\40\x28\122\145\x66\162\x65\163\x68\40\164\x68\x69\x73\40\160\x61\x67\145\x20\164\157\x20\166\x69\145\167\40\160\162\x6f\147\x72\x65\163\163\51", OPTIMIZATION_DOMAIN), $VVHCj, $FdVTn, $yOKwM), "\x6f\x70\x74\151\x6d\151\172\x61\164\151\x6f\156"); goto Y7kT5; Y7kT5: OwlMG: goto S6lMC; l0jsk: if ($IMdqE && $yOKwM) { goto UQ_GM; } goto HQZSp; P6Z2I: $IMdqE = get_transient(self::RUNNING_PROCESS_TRANSITION); goto Uwj2E; yKspL: UQ_GM: goto aD_aw; S6lMC: } public function getExpire($yOKwM) { goto s2kgo; fmi8v: return HOUR_IN_SECONDS * $o375o; goto PHjmy; QPoW4: $o375o = 1; goto XWdon; jqXhq: if (!($o375o < 1)) { goto oGFjv; } goto QPoW4; s2kgo: $o375o = $yOKwM / 500; goto jqXhq; XWdon: oGFjv: goto fmi8v; PHjmy: } public function maybeStartProcess($xk0w4 = [], ?string $IMdqE = self::RUNNING_PROCESS_TRANSITION) { goto YjWVp; YjWVp: if (!($xk0w4 && $this->applyFilters("\x6f\x70\164\151\x6d\151\172\141\164\x69\157\x6e\137\x64\157\137\x6f\x70\x74\x69\155\x69\x7a\x61\164\x69\x6f\x6e\137\160\162\157\x63\145\x73\163", true) && (!$IMdqE || !get_transient($IMdqE)))) { goto hC6L6; } goto n3eMK; TL_su: if (!$IMdqE) { goto GJE4M; } goto GLScL; oFEWT: $this->save()->dispatch(); goto gtQA7; EQ40J: hC6L6: goto TRudr; uFBZG: $vwB7A = ["\x74\157\164\141\x6c" => $yOKwM, "\146\141\x69\154\x65\x64" => 0, "\163\x75\143\x63\x65\x73\x73" => 0]; goto ySmKI; GLScL: $yOKwM = count($this->getData()); goto uFBZG; gtQA7: Notice::info(__("\117\x70\164\151\x6d\151\172\x61\164\151\157\156\40\160\x72\157\143\x65\163\x73\x20\151\x73\40\143\165\162\x72\145\156\x74\x6c\x79\x20\x72\165\x6e\156\151\156\x67\x2e", OPTIMIZATION_DOMAIN), "\x6f\160\164\151\x6d\x69\172\x61\x74\x69\x6f\x6e"); goto EQ40J; n3eMK: array_map([$this, "\160\x75\x73\x68\62\161\165\145\x75\145"], $xk0w4); goto TL_su; IWG0C: GJE4M: goto oFEWT; ySmKI: set_transient($IMdqE, $vwB7A, $this->getExpire($yOKwM)); goto IWG0C; TRudr: } }
