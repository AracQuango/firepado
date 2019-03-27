<?php


namespace Firepado\Core;

/**
 * Creates the base code, on which custom controllers are built.
 *
 * Class Controller
 * @package Firepado\Core
 * @author Wesley Peeters [@link me@wesleypeeters.com]
 * @author Jason Tavernier [@link Jason@tavernier.nl]
 * @version V0.1
 * @since V0.1
 */

use Firepado\Core\Error;

abstract class Controller {

    /**
     * Handles all calls to undefined functions.
     *
     * @access public
     * @param string $method: the name of the method called.
     */
    public function __call($method) {
        Error::throwError("unknown.method", $method);
    }
}