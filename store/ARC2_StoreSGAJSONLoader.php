<?php
/*
homepage: http://arc.semsol.org/
license:  http://arc.semsol.org/license

class:    ARC2 Store SG API JSON Loader
author:   Benjamin Nowack
version:  2010-11-16
*/

ARC2::inc('SGAJSONParser');

class ARC2_StoreSGAJSONLoader extends ARC2_SGAJSONParser {




  /*  */

  function done() {
    $this->extractRDF();
  }

  function addT($s, $p, $o, $s_type, $o_type, $o_dt = '', $o_lang = '') {
    $this->caller->addT($s, $p, $o, $s_type, $o_type, $o_dt, $o_lang);
    $this->t_count++;
  }

  /*  */

}
