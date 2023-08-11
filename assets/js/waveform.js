// document.addEventListener("DOMContentLoaded", () => {
    
//   // Run Function
// // fetchURL().then(() => console.log('Ready to Run...'));

// // Fetch URL Logic
// async function fetchURL(){

//     let headersList = {
//         "Accept": "*/*",
//         "User-Agent": "Thunder Client c/o Nonarchival",
//     }

//     let currentSong = await fetch("http://resonance.local/wp-json/wp/v2/media?media_type=audio", { 
//         method: "GET",
//         headers: headersList,
//     });
    
//     audioURL = await currentSong.json();

//     async function iterate(){

//         let link = [];

//         for (const link in audioURL) {
//             // console.log(audioURL[link]?.source_url) + "<br>";
//             let url = [[audioURL[link]?.source_url]];

//             const contentArea = document.getElementById('waveform');
//             const audioFragment = document.createDocumentFragment();

//             let array = [[url]]

//             var wavesurfer = WaveSurfer.create({
//                 container: '.waveform',
//                 waveColor: '#FFF',
//                 progressColor: '#CCC333',
//                 height: 100,
//                 barWidth: 3,
//                 barRadius: 4
//             });

//             console.log(url);
    
//             // wavesurfer.load(url);

//                 // Button to Test Logs
// let button = document.querySelector('button');

// button.addEventListener('click', () => {
//     wavesurfer.play();
//     console.log('Audio Button Cicked!');
// });


            

//             console.log('-----')
        

// }

// }

//     iterateURL = iterate();
    
//     }

//  fetchURL();

// })