<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 31/05/17
 * Time: 11:17
 */

class Hooks
{
    private $hooks;

    public function __construct()
    {
        $this->hooks = array();
    }

    public function add($name, $callback) {
        // callback parameters must be at least syntactically
        // correct when added.
        if (!is_callable($callback, true))
        {
            throw new InvalidArgumentException(sprintf('Invalid callback: %s.', print_r($callback, true)));
        }
        $this->hooks[$name][] = $callback;
    }

    public function getCallbacks($name)
    {
        return isset($this->hooks[$name]) ? $this->hooks[$name] : array();
    }

    public function fire($name)
    {
        foreach($this->getCallbacks($name) as $callback)
        {
            // prevent fatal errors, do your own warning or
            // exception here as you need it.
            if (!is_callable($callback))
                continue;

            call_user_func($callback);
        }
    }
}

$hooks = new Hooks;
$hooks->add('event', function() {echo 'morally disputed.';});
$hooks->add('event', function() {echo 'explicitly called.';});
$hooks->fire('event');
?>