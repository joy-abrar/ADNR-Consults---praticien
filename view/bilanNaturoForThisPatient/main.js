
 /* --------------------------- LOADING SCREEN SCRIPT -------------------- */
//paste this code under the head tag or in a separate js file.
// Wait for window load
$(window).load(function() 
{
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});

/* -------------------- END LOADING SCREEN SCRIPT -------------------- */


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












/* ---------------------------------- ADDING SPECIALISTS BOXES ----------------------------- */

function addMedicalSpecialistBox()
{
    document.getElementById('naturoSheetOtherSpecialistsInput').style.display = "flex";
}


function onChange() 
{
    var value = document.getElementById("otherMedicalSpecialists").value;
    
    if (value == 'kine') 
    {
        document.getElementById('kineSpecialistsNamesBloc').style.display = 'flex';
        document.getElementById('kineSpecialistsNames').style.display = 'flex';
        document.getElementById('kineSpecialistsNamesBlocCancelButton').style.display = "flex";
    } 

    if (value == 'naturo') 
    {
        document.getElementById('naturoSpecialistsNamesBloc').style.display = 'flex';
        document.getElementById('naturoSpecialistsNames').style.display = 'flex';
        document.getElementById('naturoSpecialistsNamesBlocCancelButton').style.display = "flex";
    } 

    if (value == 'reflexo') 
    {
        document.getElementById('reflexoSpecialistsNamesBloc').style.display = 'flex';
        document.getElementById('reflexoSpecialistsNames').style.display = 'flex';
        document.getElementById('reflexoSpecialistsNamesBlocCancelButton').style.display = "flex";
    } 
}

function notFound1()
{

    let value = document.getElementById('kineSpecialistsNames').value;

    if (value == "noKineFound") 
    {
        document.getElementById('naturoSheetKineInput').style.display = "flex";
        
    }

    else
    {
        document.getElementById('naturoSheetKineInput').style.display = "none";  
    }

}


function notFound2()
{
    let value = document.getElementById('naturoSpecialistsNames').value;

    if (value == "noNaturoFound")
    {
        document.getElementById('naturoSheetNaturoInput').style.display = "flex";
        
    }

    else
    {
        document.getElementById('naturoSheetNaturoInput').style.display = "none";
    }
}

function notFound3()
{
    let value = document.getElementById('reflexoSpecialistsNames').value;

    if (value == "noReflexoFound")
    {
        document.getElementById('naturoSheetReflexoInput').style.display = "flex";
    }

    else
    {
        document.getElementById('naturoSheetReflexoInput').style.display = "none";
    }
}

function cancelKineSpecialistsNamesBloc()
{
    document.getElementById('kineSpecialistsNames').value = null;
    document.getElementById('kineSpecialistsNamesBloc').style.display = "none";
}

function cancelNaturoSpecialistsNamesBloc()
{
    document.getElementById('naturoSpecialistsNames').value = null;
    document.getElementById('naturoSpecialistsNamesBloc').style.display = "none";
}

function cancelReflexoSpecialistsNamesBloc()
{
    document.getElementById('reflexoSpecialistsNames').value = null;
    document.getElementById('reflexoSpecialistsNamesBloc').style.display = "none";
}



/* ---------------------------------- END ADDING SPECIALISTS BOXES ----------------------------- */


/* ---------------------------------- RANGE BUTTONS ----------------------------- */
function vitalEnergyValue(val) 
{
    document.getElementById('vitalEnergyValue').innerHTML = val; 
}

function moralValue(val) 
{
    document.getElementById('moralValue').innerHTML = val; 
}

function stressValue(val) 
{
    document.getElementById('stressValue').innerHTML = val; 
}

function emotionsValue(val) 
{
    document.getElementById('emotionsValue').innerHTML = val; 
}

/* -------------------------------- END RANGE BUTTONS --------------------------- */









// ---------------------------------- PDF GENERATOR HTML2PDF ----------------------------

function generatePDF()
{
    const element = document.getElementById('naturoSheetResultBloc');
    //console.log(element);
    //console.log(window);
    var opt = {
        margin: 0,
        filename: "bilan naturo.pdf",
        image: {
            type: 'jpeg',
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
    };
    html2pdf().from(element).set(opt).save()
}

// ---------------------------------- END PDF GENERATOR HTML2PDF ----------------------------

/* ----------------------------- CONFIRMATION FOR SAVING PDF FORM PARAM --------------------- */
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("naturoSaveButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() 
{
    modal.style.display = "block";

    const element = document.getElementById('naturoSheetResultBloc');
    html2pdf().from(element).toPdf().output('datauristring').then(
    function (pdfAsString)
    {
        var pdfData = pdfAsString;
        document.getElementById('dataInHere').value = pdfData;
        //document.getElementById('naturoSaveButton').style = "display:none";
    }
    );
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() 
{
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
  if (event.target == modal) 
  {
    modal.style.display = "none";
  }
}
/* ----------------- END CONFIRMATION FOR SAVING PDF FORM PARAM ----------------- */





/* ----------------------------- CONFIRMATION FOR SAVING PDF FORM WITHOUT SHARING PARAM --------------------- */
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("naturoSaveButtonWithoutSharing");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() 
{
    modal2.style.display = "block";

    const element2 = document.getElementById('naturoSheetResultBloc');
    html2pdf().from(element2).toPdf().output('datauristring').then(
    function (pdfAsString)
    {
        var pdfData = pdfAsString;
        document.getElementById('dataInHere2').value = pdfData;
        //document.getElementById('naturoSaveButton').style = "display:none";
    }
    );
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() 
{
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
  if (event.target == modal2) 
  {
    modal2.style.display = "none";
  }
}
/* ----------------- END CONFIRMATION FOR SAVING PDF FORM WITHOUT SHARING PARAM ----------------- */