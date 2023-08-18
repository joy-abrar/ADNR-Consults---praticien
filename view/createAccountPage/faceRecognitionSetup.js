/* --------------------------- FACE RECOGNITION ACTIVATE ENABLE BUTTON ---------------------- */

  let faceRecognitionButton = document.getElementById('enableFaceRec');

  faceRecognitionButton.addEventListener('click', function()
  {
    let faceRecognitionStatus = document.getElementById('enableFaceRec');
    faceRecognitionStatus.value = "yes";
    if (faceRecognitionStatus.value == "yes") 
    {
      document.getElementById('faceRecognitionBloc').style.display = "flex";
    
      //const imageUpload = document.getElementById('imageUpload');
      let image_to_upload;
      let status;
      let takePictureButton = document.getElementById('takePictureButton');
      /* ---------------------------------- START CAMERA & TAKE PHOTOS ----------------------- */
      const canvas = document.getElementById('canvas');
      function startVideo()
      {
        navigator.getUserMedia({
          video: {}},
          stream => video.srcObject = stream,
          err => console.error(err)
        )

        takePictureButton.addEventListener("click", function()
        {

          canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
          let image_data_url = canvas.toDataURL('image/png');

          // data url of the image
          //console.log(image_data_url);
          document.getElementById('capturedImage').value = image_data_url;

          image_to_upload = document.getElementById("takenPicture");
          image_to_upload.src = image_data_url;

          document.getElementById('video').style.display= "none";
          status = "taken";

          if (status == "taken") 
          {
            const video = document.getElementById('video');
            const mediaStream = video.srcObject;
            
            const tracks = mediaStream.getTracks();       
            tracks[0].stop();
            tracks.forEach(track => track.stop())
          }
        
        });
      }
      startVideo();



    }
  })
  
  


/* ------------------------- END FACE RECOGNITION ACTIVATE ENABLE BUTTON -------------------- */
