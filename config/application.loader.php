<?php
return array_replace_recursive(require(FLUX_CONFIG_DIR.'/application.base.php'), require(FLUX_CONFIG_DIR.'/application.override.php'));
?>