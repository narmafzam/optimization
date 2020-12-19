<?php
 namespace Optimization\Process; use Optimization\Common; class Process extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { Batch::getInstance(); } }
