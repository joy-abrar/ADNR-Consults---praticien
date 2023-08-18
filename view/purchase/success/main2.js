/* --------------------------- LOADING SCREEN SCRIPT -------------------- */
//paste this code under the head tag or in a separate js file.
// Wait for window load
$(window).load(function() 
{
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});



function redirection() 
{
    window.location.replace("../../../index.php?action=accueil");
}      
setTimeout("redirection()", 5000);