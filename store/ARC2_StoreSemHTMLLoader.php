<?php
/*
homepage: http://arc.semsol.org/
license:  http://arc.semsol.org/license

class:    ARC2 Store SemHTML Loader
author:   Benjamin Nowack
version:  2010-11-16
*/

ARC2::inc('SemHTMLParser');

class ARC2_StoreSemHTMLLoader extends ARC2_SemHTMLParser {




  /*  */

  function done() {
    $this->extractRDF();
  }

  function addT($t) {
    $this->caller->addT($t['s'], $t['p'], $t['o'], $t['s_type'], $t['o_type'], $t['o_datatype'], $t['o_lang']);
    $this->t_count++;
  }

  /*  */

}
