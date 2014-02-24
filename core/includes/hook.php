<?php
class hook {

	private $_hooks = [];

	public function on($name,$hook) { 
		$this->_hooks[$name][] = $hook;
	}

	public function trigger($name,$args = [],$default = null) { 
		$hooks = isset($this->_hooks[$name]) ? $this->_hooks[$name] : [];

		if (!count($hooks)) {
			if (is_callable($default)) return call_user_func_array($default, $args);
			return $default;
		}

		$continue = true;
		array_map(function($func) use ($args,$continue) {
			if (!$continue) return $continue;
			$ret = call_user_func_array($func, $args);
			if ($ret === false) $continue = false;
		}, $hooks);

		return $continue;
	}
}