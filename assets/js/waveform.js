document.addEventListener("DOMContentLoaded", () => {
    
// Button to Test Logs
let button = document.querySelector('button');

button.addEventListener('click', () => {
    console.log('Audio Button Cicked!');
  });

  // Run Function
// fetchURL().then(() => console.log('Ready to Run...'));

// Fetch URL Logic
async function fetchURL(audioURL){

    let headersList = {
        "Accept": "*/*",
        "User-Agent": "Thunder Client c/o Nonarchival",
    }

    let array = await fetch("https://resonance.local/wp-json/wp/v2/media?media_type=audio", { 
        method: "GET",
        headers: headersList,
    }); 



    
    audioURL = await array.json();

    async function iterate(){

        let i;

        for (let i = 0; i <= 101; i++) {
            console.log(audioURL[i].source_url) + "<br>";
            let url = audioURL[i].source_url;
            
          }
    }

    iterateURL = iterate( console.log("Is iterating...") );


        // var wavesurfer = [iterateURL];

        // var wavesurfer = WaveSurfer.create({
        //             container: '#waveform',
        //             waveColor: '#D9DCFF',
        //             progressColor: '#333333',
        //             cursorColor: '#ffffff',
        //             barWidth: 4,
        //             barRadius: 3,
        //             cursorWidth: 1,
        //             height: 50,
        //             barGap: 3
        //         });
           
        //     console.log(iterateURL);
        //     console.log("Iterated through URL's")  
        //     // wavesurfer( console.log("Iterated") );
    }

})