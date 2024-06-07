<?php
return array_replace_recursive(require(FLUX_CONFIG_DIR.'/servers.base.php'), require(FLUX_CONFIG_DIR.'/servers.override.php'));
?>