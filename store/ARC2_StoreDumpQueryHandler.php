<?php
/*
homepage: http://arc.semsol.org/
license:  http://arc.semsol.org/license

class:    ARC2 RDF Store DUMP Query Handler
author:   Benjamin Nowack
version:  2010-11-16
*/

ARC2::inc('StoreQueryHandler');

class ARC2_StoreDumpQueryHandler extends ARC2_StoreQueryHandler {

  function __init() {/* db_con */
    parent::__init();
    $this->store = $this->caller;
  }

  /*  */

  function runQuery($infos, $keep_bnode_ids = 0) {
    $this->infos = $infos;
    $con = $this->store->getDBCon();
    ARC2::inc('StoreDumper');
    $d = new ARC2_StoreDumper($this->a, $this->store);
    $d->dumpSPOG();
    return 1;
  }

  /*  */

}
