var switchEmailSectionStatus = "hidden";
var see = 0;

// ---------------------------------- PDF GENERATOR HTML2PDF ----------------------------

function generatePDF()
{
    const element = document.getElementById('invoice');
    console.log(invoice);
    console.log(window);
    var opt = {
        margin: 0,
        filename: "Suggestions_praticien.pdf",
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
    html2pdf().from(invoice).set(opt).save()

}

// ---------------------------------- END PDF GENERATOR HTML2PDF ----------------------------

// ---------------------------------------  SENDING EMAIL FUNCTION ----------------------------------
function sendEmailFunction()
{
    //var data = document.getElementById('invoice').innerHTML;
    //sessionStorage.setItem("data" , data);

    switch(switchEmailSectionStatus)
    {
        case 'hidden':
            document.getElementById('emailWindow').style.display="block";
            switchEmailSectionStatus = "shown";
            document.getElementById('emailWindow').style.transition= "all .5s ease-in-out";
        break;

        case 'shown':
            document.getElementById('emailWindow').style.display= "none";
            switchEmailSectionStatus = "hidden";
        break;
    }
}

// ------------------------------- END SENDING EMAIL FUNCTION -----------------------------------

// ---------------------------- CLOSING EMAIL WINDOW ---------------------------------------
function closeEmailWindow()
{
    document.getElementById('emailWindow').style.display ="none";
    switchEmailSectionStatus="hidden";
}
// ---------------------------- END CLOSING EMAIL WINDOW ---------------------------------------


// ------------------------------------- USER GUIDE ---------------------------------------------

function endGuide1()
{
    document.getElementById('userGuide1').style.display = "none";
    document.getElementById('fullQuestions1Bloc').style.display = "block";
}

function endGuide2()
{
    document.getElementById('userGuide2').style.display = "none";
    document.getElementById('fullQuestions2Bloc').style.display = "block";
}

function endGuide3()
{
    document.getElementById('userGuide3').style.display = "none";
    document.getElementById('fullQuestions3Bloc').style.display = "block";
}

function endGuide4()
{
    document.getElementById('userGuide4').style.display = "none";
    document.getElementById('fullQuestions4Bloc').style.display = "block";
}

// ------------------------------------ END USER GUIDE ------------------------------




/* ----------------------------- CONFIRMATION FOR SAVING PDF FORM PARAM --------------------- */
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("fleursSaveButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() 
{
    modal.style.display = "block";

    const element = document.getElementById('invoice');
    html2pdf().from(element).toPdf().output('datauristring').then(
    function (pdfAsString)
    {
        var pdfData = pdfAsString;
        document.getElementById('dataInHere').value = pdfData;
        //document.getElementById('fleursSaveButton').style = "display:none";
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
var btn2 = document.getElementById("fleursSaveButtonWithoutSharing");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() 
{
    modal2.style.display = "block";

    const element2 = document.getElementById('invoice');
    html2pdf().from(element2).toPdf().output('datauristring').then(
    function (pdfAsString)
    {
        var pdfData = pdfAsString;
        document.getElementById('dataInHere2').value = pdfData;
        //document.getElementById('fleursSaveButton').style = "display:none";
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
