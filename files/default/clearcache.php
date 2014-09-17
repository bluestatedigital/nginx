<?php

clearstatcache(true);
apc_clear_cache();
clearstatcache(true);
apc_clear_cache('user');
clearstatcache(true);
apc_clear_cache('opcode');
clearstatcache(true);

?>
