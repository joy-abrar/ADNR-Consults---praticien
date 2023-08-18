/* ------------------------ SEARCHBAR FUNCTION --------------------- */
function myFunction() 
{
  // Declare variables
  var searchBox, filter, table, tr, td, i, txtValue;
  searchBox = document.getElementById('mySearchBox');
  filter = searchBox.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName('tr');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) 
  {
    /* --------- SEARCH BY LASTNAME ----------------*/
    td = tr[i].getElementsByTagName("td")[0];
    txtValue = td.textContent || td.innerText;
    
    td2 = tr[i].getElementsByTagName("td")[1];
    txtValue2 = td2.textContent || td2.innerText;

    if (txtValue.toUpperCase().indexOf(filter) > -1) 
    {
      tr[i].style.display = "";
    } 

    else if (txtValue2.toUpperCase().indexOf(filter) > -1) 
    {
      tr[i].style.display = "";
    }

    else 
    {
      tr[i].style.display = "none";
    }
  }
}

/* ------------------------ END SEARCHBAR FUNCTION --------------------- */



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


/* ------------------- NOTIFICATION BOX ---------------------- */

   $(document).ready(function()
   {      
      var down = false;   
      $('#bell').click(function(e)
      {    
          var color = $(this).text();
          if(down)
          {       
              $('#box').css('height','0px');
              $('#box').css('opacity','0');
              down = false;
          }

          else
          {   
              $('#box').css('height','auto');
              $('#box').css('opacity','1');
              down = true;   
          } 
      });      
    });
  /* ------------------- END NOTIFICATION BOX ---------------------- */


    /* ----------------------------- TRIAL WARNING MESSAGE --------------------- */


    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName('close')[0];
    var cancelOne = document.getElementById('clientCancelButton');
    var cancelTwo = document.getElementById('clientCancelButton2');

    span.onclick = function() 
    {
      modal.style.display = "none";
    }

    cancelOne.onclick = function() 
    {
      modal.style.display = "none";
    }

    cancelTwo.onclick = function() 
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

    /* ----------------- END TRIAL WARNING MESSAGE ----------------- */