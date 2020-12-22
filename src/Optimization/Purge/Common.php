<?php
 namespace Optimization\Purge; use Optimization\Common as BaseClass; class Common extends BaseClass { protected ?string $path; public function __construct(?string $path) { $this->path = $path; parent::__construct(); } }
