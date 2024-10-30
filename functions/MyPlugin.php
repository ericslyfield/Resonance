<?php

namespace MyPlugin;

class MyPlugin {
    public function __construct() {
        add_action('init', [$this, 'init']);
    }

    public function init() {
        echo "MyPlugin initialized!";
    }
}