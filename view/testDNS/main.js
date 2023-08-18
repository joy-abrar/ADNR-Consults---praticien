const getCurrentTimeDate = () => {
        let currentTimeDate = new Date();

        var weekday = new Array(7);
        weekday[0] = "DIM";
        weekday[1] = "LUN";
        weekday[2] = "MAR";
        weekday[3] = "MER";
        weekday[4] = "JEU";
        weekday[5] = "VEN";
        weekday[6] = "SAM";

        var month = new Array();
        month[0] = "JAN";
        month[1] = "FEV";
        month[2] = "MAR";
        month[3] = "AVR";
        month[4] = "MAI";
        month[5] = "JUN";
        month[6] = "JUI";
        month[7] = "AOU";
        month[8] = "SEP";
        month[9] = "OCT";
        month[10] = "NOV";
        month[11] = "DEC";

        var hours   =  currentTimeDate.getHours();

        var minutes =  currentTimeDate.getMinutes();
        minutes = minutes < 10 ? '0'+minutes : minutes;

        /*
         var AMPM = hours >= 12 ? 'PM' : 'AM';

        
        if(hours === 12)
        {
            hours=12;

        }
        else
        {
            hours = hours%12;
        }
        */
        //var currentTime = `${hours}:${minutes}${AMPM}`;
        var currentTime = `${hours}:${minutes}`;
        var currentDay = weekday[currentTimeDate.getDay()];

        var currentDate  = currentTimeDate.getDate();
        var currentMonth = month[currentTimeDate.getMonth()];
        var CurrentYear = currentTimeDate.getFullYear();

        var fullDate = `${currentDate} ${currentMonth} ${CurrentYear}`;


        document.getElementById("time").innerHTML = currentTime;
        document.getElementById("day").innerHTML = currentDay;
        document.getElementById("date").innerHTML = fullDate;

        setTimeout(getCurrentTimeDate, 500);

    }
    getCurrentTimeDate();


    // ---------------------------------- PDF GENERATOR HTML2PDF ----------------------------

function generatePDF()
{
    const element = document.getElementById('dnsBlocToDownload');
    document.getElementById('praticienSignature').style.display = "flex";
    var opt = {
        margin: 0,
        filename: "Test DNS.pdf",
        image: {
            type: 'png',
            quality: 1
        },
        htmlcanvas: {
            scale: 0.9
        },
        jsPDF: {
            unit: 'in',
            format: 'tabloid'
            /*,
            orientation: 'landscape'
            */
        }

        /*
        ,
        html2canvas: 
        {

            onclone: (element) => {
                const svgElements = Array.from(element.querySelectorAll('svg'));
                svgElements.forEach(s => {
                    const bBox = s.getBBox();
                    s.setAttribute("x", bBox.x);
                    s.setAttribute("y", bBox.y);
                    s.setAttribute("width", bBox.width);
                    s.setAttribute("height", bBox.height);
                })
              }
        }
        */
        
    }; 

    html2pdf().from(element).set(opt).save();

}

// ---------------------------------- END PDF GENERATOR HTML2PDF ----------------------------