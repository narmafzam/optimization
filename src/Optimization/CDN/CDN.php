<?php
 namespace Optimization\CDN; class CDN extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { JsDeliver::getInstance(); } }
