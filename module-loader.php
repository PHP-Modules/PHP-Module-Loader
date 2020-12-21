<?php

  function useInstalledModule($moduleId) {
    include "/modules/$moduleId/module.php";
    return true;
  }
  function moduleExists($moduleId) {
    if(readfile("/modules/$moduleId/module.php")) {
      return true;
    } else {
      return false;
    }
  }

?>
