<?php
/*
homepage: http://arc.semsol.org/
license:  http://arc.semsol.org/license

class:    ARC2 Store Atom(2) Loader
author:   Benjamin Nowack
version:  2008-09-26
*/

ARC2::inc('AtomParser');

class ARC2_StoreAtomLoader extends ARC2_AtomParser {





  /*  */

  function addT($t) {
    $this->caller->addT($t['s'], $t['p'], $t['o'], $t['s_type'], $t['o_type'], $t['o_datatype'], $t['o_lang']);
    $this->t_count++;
  }

  /*  */

}
