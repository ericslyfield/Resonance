<?php
class audioWaveformFilter{
    public function audioWaveformFilter(){
        if ( wp_attachment_is('audio') ){
            $media = get_attached_media( 'audio' );

            return '<div id="clitoris">'.$media.'</div>'
        };
    }
}
?>