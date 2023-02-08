jQuery(document).ready(function() {

function findURL(audioURL){
    let audioURL = [];

};

async function getURL(){
    let headersList = {
        "Accept": "*/*",
        "User-Agent": "Thunder Client c/o Nonarchival"
       }
       
       let response = await fetch("https://resonance.local/wp-json/wp/v2/media?_fields=link&media_type=audio", { 
         method: "GET",
         headers: headersList
       });
       
       let data = await response.text();
       console.log(data);
}

function waveformOptions(){

    var wavesurfer = WaveSurfer.create({
        container: '#waveform',
        waveColor: '#D9DCFF',
        progressColor: '#333333',
        cursorColor: '#ffffff',
        barWidth:4, barRadius:3,
        cursorWidth:1, height:50,
        barGap:3
    });    

}


wavesurfer.load('/assets/audio/clap.mp3');

var audioURL = 'http://resonance.local/wp/v2/media?media_type=audio';

});

// });

// wavesurfer.load("./template-parts/post/format-audio.php?url=url");

// console.log(' Wavesurver loaded...')

// wavesurfer.zoom(75);

// console.log(' Wavesurver zoomed...')


// });