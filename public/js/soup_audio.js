window.addEventListener('load', function() {

  const speech = new webkitSpeechRecognition();
  speech.lang = 'ja-JP';
  const btn = document.getElementById('soupbtn');
  const content = document.getElementById('voice_content');
  

  // 使用音源を定義
  const audio_01 = `<div class="audiojs loading" classname="audiojs" id="audiojs_wrapper01">
                  <audio autoplay src="/audios/soup_audio_01.mp3">
                </audio>          
                <div class="play-pause">             
                  <p class="play"></p>             
                  <p class="pause"></p>             
                  <p class="loading"></p>             
                  <p class="error"></p>           
                </div>           
                <div class="scrubber">             
                  <div class="progress"></div>             
                  <div class="loaded"></div>           
                </div>
                  <div class="error-message">
                  </div>
                </div>
                `
  const audio_02 = `<div class="audiojs loading" classname="audiojs" id="audiojs_wrapper01">
                      <audio autoplay src="/audios/soup_audio_02.mp3">
                      </audio>
                      <div class="play-pause">             
                        <p class="play"></p>             
                        <p class="pause"></p>             
                        <p class="loading"></p>             
                        <p class="error"></p>           
                      </div>           
                      <div class="scrubber">             
                        <div class="progress"></div>             
                        <div class="loaded"></div>           
                      </div>
                      <div class="error-message">
                      </div>
                    </div>
                    `
  const audio_03 = `<div class="audiojs loading" classname="audiojs" id="audiojs_wrapper01">
                      <audio autoplay src="/audios/soup_audio_03.mp3">
                      </audio>
                      <div class="play-pause">             
                        <p class="play"></p>             
                        <p class="pause"></p>             
                        <p class="loading"></p>             
                        <p class="error"></p>           
                      </div>           
                      <div class="scrubber">             
                        <div class="progress"></div>             
                        <div class="loaded"></div>           
                      </div>
                      <div class="error-message">
                      </div>
                    </div>
                    `
  const audio_04 = `<div class="audiojs loading" classname="audiojs" id="audiojs_wrapper01">
                      <audio autoplay src="/audios/soup_audio_04.mp3">
                      </audio>
                      <div class="play-pause">             
                        <p class="play"></p>             
                        <p class="pause"></p>             
                        <p class="loading"></p>             
                        <p class="error"></p>           
                      </div>           
                      <div class="scrubber">             
                        <div class="progress"></div>             
                        <div class="loaded"></div>           
                      </div>
                      <div class="error-message">
                      </div>
                    </div>
                    `
  const audio_05 = `<div class="audiojs loading" classname="audiojs" id="audiojs_wrapper01">
                      <audio autoplay src="/audios/soup_audio_05.mp3">
                      </audio>
                      <div class="play-pause">             
                        <p class="play"></p>             
                        <p class="pause"></p>             
                        <p class="loading"></p>             
                        <p class="error"></p>           
                      </div>           
                      <div class="scrubber">             
                        <div class="progress"></div>             
                        <div class="loaded"></div>           
                      </div>
                      <div class="error-message">
                      </div>
                    </div>
                    `
  const audio_06 = `<div class="audiojs loading" classname="audiojs" id="audiojs_wrapper01">
                      <audio autoplay src="/audios/soup_audio_06.mp3">
                      </audio>
                      <div class="play-pause">             
                        <p class="play"></p>             
                        <p class="pause"></p>             
                        <p class="loading"></p>             
                        <p class="error"></p>           
                      </div>           
                      <div class="scrubber">             
                        <div class="progress"></div>             
                        <div class="loaded"></div>           
                      </div>
                      <div class="error-message">
                      </div>
                    </div>
                    `


  // 今どの工程にいるか管理
  var audio_id = 1;

  btn.addEventListener('click' , function() {
    // 音声認識をスタート
    content.innerHTML -= `<div class="js_audio">`;
    content.innerHTML += '<div class="js_audio">'+ audio_01 +'</div>';
    speech.start();
  });
  
  speech.onresult = function(e) {
    speech.stop();
    if(e.results[0].isFinal){
      var autotext =  e.results[0][0].transcript
      // 「次」と言った時だけ処理を進める
      if(autotext == "次")getAudio();
        function getAudio() {
          audio_id++;
          content.innerHTML -= `<div class="js_audio">`;
          if (audio_id == 2) {
            content.innerHTML += '<div class="js_audio">'+ audio_02 +'</div>';
          } else if (audio_id == 3) {
            content.innerHTML += '<div class="js_audio">'+ audio_03 +'</div>';
          } else if (audio_id == 4) {
            content.innerHTML += '<div class="js_audio">'+ audio_04 +'</div>';
          } else if (audio_id == 5) {
            content.innerHTML += '<div class="js_audio">'+ audio_05 +'</div>';
          } else if (audio_id == 6) {
            content.innerHTML += '<div class="js_audio">'+ audio_06 +'</div>';
          }
        }

        // 「もう1回」と言った時だけ同じ音源を再度流す
        if(autotext == "もう1回")repeatAudio();
        function repeatAudio() {
          content.innerHTML -= `<div class="js_audio">`;
          if (audio_id == 1) {
            content.innerHTML += '<div class="js_audio">'+ audio_01 +'</div>';
          } else if (audio_id == 2) {
            content.innerHTML += '<div class="js_audio">'+ audio_02 +'</div>';
          } else if (audio_id == 3) {
            content.innerHTML += '<div class="js_audio">'+ audio_03 +'</div>';
          } else if (audio_id == 4) {
            content.innerHTML += '<div class="js_audio">'+ audio_04 +'</div>';
          } else if (audio_id == 5) {
            content.innerHTML += '<div class="js_audio">'+ audio_05 +'</div>';
          } else if (audio_id = 6) {
            content.innerHTML += '<div class="js_audio">'+ audio_06 +'</div>';
          }
        }

        // 「戻る」と言った時だけ1つ前の音源を流す
        if(autotext == "戻る" && audio_id >= 2)backAudio();
        function backAudio() {
          audio_id -= 1;
          content.innerHTML -= `<div class="js_audio">`;
          if (audio_id == 1) {
            content.innerHTML += '<div class="js_audio">'+ audio_01 +'</div>';
          } else if (audio_id == 2) {
            content.innerHTML += '<div class="js_audio">'+ audio_02 +'</div>';
          } else if (audio_id == 3) {
            content.innerHTML += '<div class="js_audio">'+ audio_03 +'</div>';
          } else if (audio_id == 4) {
            content.innerHTML += '<div class="js_audio">'+ audio_04 +'</div>';
          } else if (audio_id == 5) {
            content.innerHTML += '<div class="js_audio">'+ audio_05 +'</div>';
          } 
        }
      }
    };
  speech.onend = () => { 
    speech.start() 
  };
});