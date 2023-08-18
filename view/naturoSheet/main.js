
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