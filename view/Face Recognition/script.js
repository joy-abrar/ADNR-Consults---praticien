const imageUpload = document.getElementById('imageUpload');
let image_to_upload;
let status;
/* ---------------------------------- START CAMERA & TAKE PHOTOS ----------------------- */
const canvas2 = document.getElementById('canvas2');
function startVideo()
{
  navigator.getUserMedia({
    video: {}},
    stream => video.srcObject = stream,
    err => console.error(err)
  )

  setTimeout(function()
  {
    canvas2.getContext('2d').drawImage(video, 0, 0, canvas2.width, canvas2.height);
    let image_data_url = canvas2.toDataURL('image/jpeg');

    // data url of the image
    //console.log(image_data_url);


    image_to_upload = document.createElement("img");
    image_to_upload.src = image_data_url;
    document.body.append(image_to_upload);

   document.getElementById('video').style.display= "none";
    image_to_upload.style.display= "none";
    status = "completed";

    document.getElementById('loaderBloc').style.display = "flex";
  },2000)

}
startVideo();
 /* ----------------------------------  END START CAMERA & TAKE PHOTOS ----------------------- */


/* --------------------------- UPLOAD IMAGES & MATCH ---------------------------------- */



//const imageUpload = document.getElementById('imageUpload')
setTimeout(function()
{
    Promise.all([
      
      //faceapi.nets.faceRecognitionNet.loadFromUri('/Progiciel/praticien/view/faceRecognition/models'),
      //faceapi.nets.faceLandmark68Net.loadFromUri('/Progiciel/praticien/view/faceRecognition/models'),
      //faceapi.nets.ssdMobilenetv1.loadFromUri('/Progiciel/praticien/view/faceRecognition/models')
      
      faceapi.nets.faceRecognitionNet.loadFromUri('models'),
      faceapi.nets.faceLandmark68Net.loadFromUri('models'),
      faceapi.nets.ssdMobilenetv1.loadFromUri('models')
    ]).then(start)

  

    async function start() 
    {

      const container = document.createElement('div');
      container.style.position = 'relative';
      document.body.append(container);
      const labeledFaceDescriptors = await loadLabeledImages();
      const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.60);
      let image;
      let canvas;
      document.body.append('Chargement Terminé');
      

      if (status == "completed")
      {
        async function runThisCode()
        { 
          if (image) 
          {
            image.remove();
          }

          if (canvas) 
          {
            canvas.remove()
          }

          image = await image_to_upload;

          image.style.width = "30vw";
          image.style.height = "50vh";
          container.append(image);
          canvas = faceapi.createCanvasFromMedia(image);
          container.append(canvas);
          const displaySize = 
          { 
            width: image.width, height: image.height 
          };

          faceapi.matchDimensions(canvas, displaySize);

          const detections = await faceapi.detectAllFaces(image).withFaceLandmarks().withFaceDescriptors();

          const resizedDetections = faceapi.resizeResults(detections, displaySize);

          const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor));
          
          recognitionStatus = results['length'];

          if (recognitionStatus == 1) 
          {
            loginUserName = results[0]['_label'];

            document.getElementById('loaderBloc').style.display = "none";
            window.location = "../../index.php?action=loginThisUserByFaceRecognition&userId="+loginUserName;  
          }

          else if(recognitionStatus >=  2)
          {
            console.log("plusieurs visages détecté. veuillez mettre juste le visage de la personne à qui appartient le compte.")
          }

          else if(recognitionStatus == 0)
          {
            window.location = "../../index.php?action=accueil";
          }
          
          
          results.forEach((result, i) => 
          {
            const box = resizedDetections[i].detection.box;
            const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() });
            drawBox.draw(canvas);
          })
        }
        runThisCode();
      }
    }


  function loadLabeledImages() 
  {
    for (var i = 0; i <= totalContents; i++)
    {
      const labels = namesInJs;

      return Promise.all(
        labels.map(async label => 
        {
          const descriptions = [];
            const img = await faceapi.fetchImage(`labeled_images/All/${label}.png`);
            const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor();
            descriptions.push(detections.descriptor);
          
          return new faceapi.LabeledFaceDescriptors(label, descriptions);
        })
      )
    }
  }
},2500)

/* --------------------------- END UPLOAD IMAGES & MATCH ---------------------------------- */