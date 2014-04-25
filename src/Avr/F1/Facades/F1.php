<?php namespace Avr\F1\Facades;

use Illuminate\Support\Facades\Facade;

class F1 extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'f1'; }

}
