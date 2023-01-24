var wavesurfer = WaveSurfer.create({
    container: '#waveform',
    waveColor: '#D9DCFF',
    progressColor: '#333333',
    cursorColor: '#ffffff',
    barWidth:4, barRadius:3,
    cursorWidth:1, height:50,
    barGap:3
});

var audioURL = new XMLHttpRequest();;

audioURL.open('GET', 'http://resonance.local/wp/v2/media?media_type=audio');

audioURL.onload = function() {
    console.log(audioURL);
};

audioURL.send();

// });

// jQuery(document).ready(function() {

//     var wavesurfer = WaveSurfer.create({
//         container: '#waveform',
//         waveColor: '#D9DCFF',
//         progressColor: '#333333',
//         cursorColor: '#ffffff',
//         barWidth: 4,
//         barRadius: 3,
//         cursorWidth: 1,
//         height: 50,
//         barGap: 3
//     });

//     jQuery(".non-play-button").click(function(e){
// 	wavesurfer.playPause();
// });


// wavesurfer.load("./template-parts/post/format-audio.php?url=url");

// console.log(' Wavesurver loaded...')

// wavesurfer.zoom(75);

// console.log(' Wavesurver zoomed...')


// });