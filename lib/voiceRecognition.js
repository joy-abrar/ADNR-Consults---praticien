function runSpeechRecognition() 
{
      var mic = document.getElementById('mic');
  
      var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
      var recognition = new SpeechRecognition();
      
      recognition.lang = 'fr-FR';

      recognition.onstart = function() 
      {
          mic.style.color = "red";
      };
      
      recognition.onspeechend = function() 
      {
          mic.style.color = "black";
          recognition.stop();
      }
    
      
      recognition.onresult = function(event)
      {
          var transcript = event.results[0][0].transcript;
          var confidence = event.results[0][0].confidence;
          console.log(event.results);
          console.log(confidence);
          console.log(transcript);

          let keyWord = transcript;

          searchInDictionary(keyWord);
      };
    
       recognition.start();
}