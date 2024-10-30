<?php
class postMetadata{
    public function __construct(){
        add_action( 'add_meta_boxes', [$this, 'create_meta_box'] );
    }
}