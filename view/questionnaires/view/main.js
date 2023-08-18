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