<?php
 namespace Optimization\Buffer; use Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($CVKvJ = []) { goto occUb; occUb: if ($this->getPath()) { goto ZAXgG; } goto k1iCO; nwYSA: $this->server = $CVKvJ["\x73\145\x72\166\x65\162"]; goto UyMTa; Z3wz1: if (!(is_array($CVKvJ["\x73\145\x72\x76\x65\162"]) && $CVKvJ["\x73\x65\162\166\x65\162"])) { goto DU3VB; } goto nwYSA; V7a6T: $this->path = trailingslashit($CVKvJ["\160\x61\164\150"]); goto Z3wz1; k1iCO: $CVKvJ = wp_parse_args($CVKvJ, ["\160\141\164\x68" => '', "\x73\145\162\166\145\162" => $_SERVER]); goto V7a6T; UyMTa: DU3VB: goto Bm_fy; Bm_fy: ZAXgG: goto iQ1lE; iQ1lE: } public function getPath() : ?string { return $this->path; } public function getServer() : ?array { return $this->server; } public function getServerInput($GmGyQ, $oEaun = null) { goto HWuM_; L5lLi: $S_U2C = $oEaun; goto a6lD6; a6lD6: if (!isset($NfHk0[$GmGyQ])) { goto r3ypx; } goto Lhslc; HWuM_: $NfHk0 = $this->getServer(); goto L5lLi; Lhslc: $S_U2C = $NfHk0[$GmGyQ]; goto FKWLv; FKWLv: r3ypx: goto sZtgw; sZtgw: return $S_U2C; goto MKTWK; MKTWK: } public function get($GmGyQ) { goto boKlN; R8_CD: $dL3HD = $LfYsX[$GmGyQ]; goto tFbrU; boKlN: $dL3HD = ''; goto NaHw6; NaHw6: $LfYsX = $this->getConfigs(); goto THdyB; zDCs3: return $dL3HD; goto GPsoU; THdyB: if (!isset($LfYsX[$GmGyQ])) { goto biCa6; } goto R8_CD; tFbrU: biCa6: goto zDCs3; GPsoU: } public function getConfigs() { goto he7mD; vJLqi: return $this->memoize(__FUNCTION__, [], false); goto kSm7s; qVi1U: if (!file_exists($csL05["\x70\x61\x74\x68"])) { goto gEZBq; } goto cxt3z; kSm7s: Z2lTB: goto qVi1U; e7IBG: gEZBq: goto RL6AF; he7mD: if (!$this->isMemoized(__FUNCTION__)) { goto O1SeM; } goto hoUG4; sKaSL: foreach ($dL3HD as $GmGyQ => $b8HPW) { goto KDnJt; Mzatm: goZ82: goto I0BEI; I0BEI: z81hF: goto ivJ7q; IVvTv: $dL3HD[$GmGyQ] = ${$GmGyQ}; goto Mzatm; KDnJt: if (!isset(${$GmGyQ})) { goto goZ82; } goto IVvTv; ivJ7q: } goto xMorZ; RL6AF: $dL3HD = ["\x63\141\x63\x68\x65\x5f\163\163\154" => 0, "\x63\141\143\x68\x65\137\x77\x65\x62\160" => 0, "\x63\157\157\x6b\151\x65\137\x68\141\163\150" => '', "\165\x72\154\137\x6e\157\137\x64\157\x74\163" => 0, "\143\x61\143\x68\145\137\145\x6e\x61\142\154\x65" => 1, "\x63\141\x63\150\x65\137\155\157\x62\x69\x6c\145" => 0, "\x63\141\x63\x68\x65\x5f\x72\x65\x6a\145\143\x74\137\165\141" => '', "\163\x65\x63\x72\145\x74\137\143\141\143\x68\x65\137\x6b\145\171" => '', "\154\x6f\147\147\145\x64\x5f\151\x6e\137\x63\157\157\153\x69\145" => '', "\x63\141\143\x68\x65\137\162\x65\x6a\145\x63\164\x5f\x75\x72\151" => '', "\x63\x61\143\x68\x65\x5f\x71\x75\145\162\x79\137\x73\x74\x72\x69\x6e\x67\163" => [], "\x63\141\143\150\x65\137\162\x65\x6a\x65\x63\x74\x5f\143\x6f\157\x6b\x69\145\163" => '', "\x63\x61\143\x68\145\137\144\x79\156\141\x6d\x69\x63\x5f\x63\157\157\x6b\x69\145\x73" => [], "\x63\x61\x63\150\145\137\x6d\141\156\144\x61\x74\x6f\x72\x79\x5f\x63\x6f\x6f\x6b\151\145\163" => '', "\143\x61\x63\x68\145\x5f\x69\147\156\x6f\x72\145\144\x5f\x70\x61\162\x61\x6d\145\x74\145\x72\x73" => [], "\143\x6f\x6d\155\157\x6e\x5f\x63\x61\x63\150\x65\x5f\154\x6f\147\147\x65\x64\x5f\x75\x73\145\162\163" => 0]; goto sKaSL; hoUG4: return $this->getMemoizedBy(__FUNCTION__); goto R3HC7; m47ZG: return $this->memoize(__FUNCTION__, [], $dL3HD); goto JAdsr; cxt3z: include $csL05["\x70\x61\x74\x68"]; goto e7IBG; iEp9P: $csL05 = $this->getConfigFilePath(); goto RXz3_; xMorZ: NNsbZ: goto m47ZG; RXz3_: if (!(!isset($csL05["\163\x75\x63\x63\x65\x73\x73"]) || !$csL05["\x73\165\143\x63\145\163\163"])) { goto Z2lTB; } goto vJLqi; R3HC7: O1SeM: goto iEp9P; JAdsr: } public function getHost() { goto ao_uf; f5p8I: return $this->memoize(__FUNCTION__, [], rawurlencode($SZK3T)); goto fUi6E; QB0Se: $SZK3T = $this->getServerInput("\110\x54\124\120\x5f\110\x4f\123\x54", (string) time()); goto K7aof; K7aof: $SZK3T = preg_replace("\x2f\72\x5c\x64\53\44\x2f", '', $SZK3T); goto U_jNi; ao_uf: if (!$this->isMemoized(__FUNCTION__)) { goto Z068C; } goto YIrq9; F3EHa: Z068C: goto QB0Se; U_jNi: $SZK3T = trim(strtolower($SZK3T), "\x2e"); goto f5p8I; YIrq9: return $this->getMemoizedBy(__FUNCTION__); goto F3EHa; fUi6E: } public function getConfigFilePath() { goto cPGl9; UnMq9: goto WTypL; goto nrN8w; Rb16r: nm8Vu: goto SDhaa; fIlNi: $wpkb5 = "{$GpbaC}{$SZK3T}\56\160\x68\x70"; goto LE8gj; UeTKi: $SZK3T = $this->getHost(); goto fIlNi; SfALV: $KuNmg = realpath($GpbaC) . DIRECTORY_SEPARATOR; goto UeTKi; Tm8CL: LSYIn: goto RrOm1; Qi7_u: $GuTuU = preg_replace("\x7c\x28\x3f\74\x3d\x2e\51\x2f\x2b\174", "\57", $GuTuU); goto OtlQ2; nrN8w: g2loZ: goto kRnT0; RrOm1: $GpbaC = $this->getPath(); goto SfALV; T86jL: WTypL: goto eTpq6; yuvKF: $GuTuU = str_replace("\x5c", "\x2f", strtok($this->getServerInput("\122\105\x51\125\105\x53\124\137\x55\x52\x49", ''), "\x3f")); goto Qi7_u; E0w5x: foreach ($GuTuU as $SfGE6) { goto ij9gn; IjLMq: bkNc2: goto AG0u9; ij9gn: static $lzD2z; goto How5U; wr34c: goto EHSmA; goto IjLMq; JpyAu: $csL05 = $GpbaC . $SZK3T . "\56" . $lzD2z . $SfGE6 . "\x2e\160\x68\160"; goto OV8Ra; S1LuA: SkXb7: goto JpyAu; How5U: if (realpath($GpbaC . $SZK3T . "\x2e" . $SfGE6 . "\56\x70\150\x70") && 0 === stripos(realpath($GpbaC . $SZK3T . "\x2e" . $SfGE6 . "\56\160\150\160"), $KuNmg)) { goto bkNc2; } goto d4ZCd; CiM_U: $lzD2z .= $SfGE6 . "\x2e"; goto XJo83; aL626: return $this->memoize(__FUNCTION__, [], ["\163\x75\143\x63\x65\x73\163" => true, "\160\141\164\x68" => $csL05]); goto Ru2sB; XJo83: FgETp: goto Ak_sC; Ru2sB: goto EHSmA; goto S1LuA; NPEEJ: EHSmA: goto CiM_U; d4ZCd: if (realpath($GpbaC . $SZK3T . "\56" . $lzD2z . $SfGE6 . "\56\160\150\x70") && 0 === stripos(realpath($GpbaC . $SZK3T . "\56" . $lzD2z . $SfGE6 . "\x2e\160\150\x70"), $KuNmg)) { goto SkXb7; } goto wr34c; AG0u9: $csL05 = $GpbaC . $SZK3T . "\x2e" . $SfGE6 . "\x2e\x70\150\160"; goto aL626; OV8Ra: return $this->memoize(__FUNCTION__, [], ["\163\x75\143\x63\x65\x73\x73" => true, "\160\x61\164\150" => $csL05]); goto NPEEJ; Ak_sC: } goto Rb16r; LE8gj: if (realpath($wpkb5) && 0 === stripos(realpath($wpkb5), $KuNmg)) { goto g2loZ; } goto yuvKF; SDhaa: return $this->memoize(__FUNCTION__, [], ["\163\165\143\x63\145\x73\x73" => false, "\160\x61\x74\150" => $this->getPath() . $SZK3T . implode("\x2f", $GuTuU) . "\56\x70\x68\160"]); goto UnMq9; QTo1p: return $this->memoize(__FUNCTION__, [], ["\x73\x75\x63\x63\145\163\163" => true, "\160\141\x74\150" => $csL05]); goto T86jL; kRnT0: $csL05 = $wpkb5; goto QTo1p; cPGl9: if (!$this->isMemoized(__FUNCTION__)) { goto LSYIn; } goto d3D2g; d3D2g: return $this->getMemoizedBy(__FUNCTION__); goto Tm8CL; OtlQ2: $GuTuU = explode("\x25\62\106", preg_replace("\x2f\x5e\x28\x3f\72\x25\62\106\x29\52\50\56\52\x3f\51\x28\x3f\72\x25\x32\x46\x29\x2a\44\57", "\x24\61", rawurlencode($GuTuU))); goto E0w5x; eTpq6: } public function getRejectedCookies() { goto tJX8Q; H9dnb: $dA_0n = "\x23{$dA_0n}\43"; goto tewM5; tJX8Q: $dA_0n = $this->get("\143\141\143\150\x65\137\x72\x65\152\x65\x63\x74\x5f\143\157\157\x6b\x69\x65\x73"); goto v1tAN; Q4kgn: return $dA_0n; goto m8bfg; v1tAN: if (!('' !== $dA_0n)) { goto r5q6Z; } goto H9dnb; tewM5: r5q6Z: goto Q4kgn; m8bfg: } public function getMandatoryCookies() { goto SWKvl; BhZGN: $dA_0n = "\43{$dA_0n}\43"; goto VmX2V; LvYsI: return $dA_0n; goto C69B6; RiK69: if (!('' !== $dA_0n)) { goto HwcNR; } goto BhZGN; VmX2V: HwcNR: goto LvYsI; SWKvl: $dA_0n = $this->get("\x63\x61\143\x68\145\137\x6d\141\156\x64\141\x74\157\x72\x79\137\x63\x6f\x6f\153\151\145\163"); goto RiK69; C69B6: } }
