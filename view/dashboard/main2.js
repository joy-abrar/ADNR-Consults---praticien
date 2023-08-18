 /* --------------------------- LOADING SCREEN SCRIPT -------------------- */
//paste this code under the head tag or in a separate js file.
// Wait for window load
$(window).load(function() 
{
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});

/* -------------------- END LOADING SCREEN SCRIPT -------------------- */

  let dashboardAppearenceStatus = "dashboard";

   function dashboardAppearence(getvalue)
   {

        dashboardAppearenceStatus = getvalue;


       	switch(dashboardAppearenceStatus)
       	{
       		case 'dashboard' :
                console.log("dashboard found !") ;
                dashboardAppearenceStatus = 'dashboard';
                document.getElementById('fifthSubBlocOne').style = "background-color: #ff9971";
                document.getElementById('dashboardButton').style = "background-color: #ff9971";
                document.getElementById('dashboardButton').style = "color: white";

                document.getElementById('fifthSubBlocTwo').style = "background-color: white";
                document.getElementById('rendezVousButton').style = "background-color: white";
                document.getElementById('rendezVousButton').style = "color: grey";
       		   
                document.getElementById('fifthSubBlocThree').style = "background-color: white";
                document.getElementById('documentsButton').style = "background-color: white";
                document.getElementById('documentsButton').style = "color: grey";

                document.getElementById('fifthSubBlocFour').style = "background-color: white";
                document.getElementById('courriersButton').style = "background-color: white";
                document.getElementById('courriersButton').style = "color: grey";

           
                document.getElementById('thirdBloc').style ="visibility:visible";
                document.getElementById('forthBloc').style ="visibility:visible";

                document.getElementById('sixthBloc').style ="visibility:hidden";
                document.getElementById('sixthSubBlocOne').style ="visibility:hidden";

                document.getElementById('seventhBloc').style = "visibility:hidden";
                document.getElementById('seventhSubBlocOne').style = "visibility:hidden";

                document.getElementById('documentsBloc').style = "visibility:hidden";
            break;

       		case 'rendezvous' :
            console.log("rendezvous found !") ;
            dashboardAppearenceStatus = 'rendezvous';
            document.getElementById('fifthSubBlocTwo').style = "background-color: #ff9971";
            document.getElementById('rendezVousButton').style = "background-color: #ff9971";
            document.getElementById('rendezVousButton').style = "color: white";

            document.getElementById('fifthSubBlocOne').style = "background-color: white";
            document.getElementById('dashboardButton').style = "background-color: white";
            document.getElementById('dashboardButton').style = "color: grey";
           
            document.getElementById('fifthSubBlocThree').style = "background-color: white";
            document.getElementById('documentsButton').style = "background-color: white";
            document.getElementById('documentsButton').style = "color: grey";

            document.getElementById('fifthSubBlocFour').style = "background-color: white";
            document.getElementById('courriersButton').style = "background-color: white";
            document.getElementById('courriersButton').style = "color: grey";
       		
            document.getElementById('thirdBloc').style = "visibility:hidden";
            document.getElementById('forthBloc').style = "visibility:hidden";

            document.getElementById('sixthBloc').style = "visibility:visible";
            document.getElementById('sixthSubBlocOne').style = "visibility:visible";
            
            document.getElementById('seventhBloc').style = "visibility:hidden";
            document.getElementById('seventhSubBlocOne').style = "visibility:hidden";

            document.getElementById('documentsBloc').style = "visibility:hidden";
            break;

            case 'documents' :
            console.log("documents found !") ;
            dashboardAppearenceStatus = 'documents';
            document.getElementById('fifthSubBlocThree').style = "background-color: #ff9971";
            document.getElementById('documentsButton').style = "background-color: #ff9971";
            document.getElementById('documentsButton').style = "color: white";

            document.getElementById('fifthSubBlocTwo').style = "background-color: white";
            document.getElementById('rendezVousButton').style = "background-color: white";
            document.getElementById('rendezVousButton').style = "color: grey";
           
            document.getElementById('fifthSubBlocOne').style = "background-color: white";
            document.getElementById('dashboardButton').style = "background-color: white";
            document.getElementById('dashboardButton').style = "color: grey";

            document.getElementById('fifthSubBlocFour').style = "background-color: white";
            document.getElementById('courriersButton').style = "background-color: white";
            document.getElementById('courriersButton').style = "color: grey";

            document.getElementById('thirdBloc').style = "visibility:hidden";
            document.getElementById('forthBloc').style = "visibility:hidden";

            document.getElementById('sixthBloc').style = "visibility:hidden";
            document.getElementById('sixthSubBlocOne').style = "visibility:hidden";
            
            document.getElementById('seventhBloc').style = "visibility:hidden";
            document.getElementById('seventhSubBlocOne').style = "visibility:hidden";

            document.getElementById('documentsBloc').style = "visibility:visible";
            break;

            case 'courriers' :
            console.log("courriers found !") ;
            dashboardAppearenceStatus = 'courriers';
            document.getElementById('fifthSubBlocFour').style = "background-color: #ff9971";
            document.getElementById('courriersButton').style = "background-color: #ff9971";
            document.getElementById('courriersButton').style = "color: white";

            document.getElementById('fifthSubBlocTwo').style = "background-color: white";
            document.getElementById('rendezVousButton').style = "background-color: white";
            document.getElementById('rendezVousButton').style = "color: grey";
               
            document.getElementById('fifthSubBlocThree').style = "background-color: white";
            document.getElementById('documentsButton').style = "background-color: white";
            document.getElementById('documentsButton').style = "color: grey";

            document.getElementById('fifthSubBlocOne').style = "background-color: white";
            document.getElementById('dashboardButton').style = "background-color: white";
            document.getElementById('dashboardButton').style = "color: grey";

            document.getElementById('thirdBloc').style = "visibility:hidden";
            document.getElementById('forthBloc').style = "visibility:hidden";

            document.getElementById('sixthBloc').style = "visibility:hidden";
            document.getElementById('sixthSubBlocOne').style = "visibility:hidden";
            
            document.getElementById('seventhBloc').style = "visibility:visible";
            document.getElementById('seventhSubBlocOne').style = "visibility:visible";

            document.getElementById('documentsBloc').style = "visibility:hidden";
            break;
       		
       	}

   }

    function getPatientDetails()
    {
        console.log('here is your client details');
        window.location = "index.php?action=gotoMails";
    }