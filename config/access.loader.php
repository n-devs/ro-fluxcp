<?php
return array_replace_recursive(require(FLUX_CONFIG_DIR.'/access.base.php'), require(FLUX_CONFIG_DIR.'/access.override.php'));
?>