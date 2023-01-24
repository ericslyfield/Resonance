console.clear();

var soundBite = new Howl({
    src: ['/assets/audio/audio.wav']
  });
    
  function playSound(event){
      soundBite.play('soundBite');
        console.log('Audio Should Play...')
  }