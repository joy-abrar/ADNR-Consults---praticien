/*
$(".removeSpace").on({
  keydown: function(e) 
  {
    if (e.which === 32)
      return false;
  },
  change: function() 
  {
    this.value = this.value.replace(/\s/g, "a");
  }
});
*/



$(document).ready(function() {
// do not allow users to enter spaces:
$(  ".removeSpace" ).on({
keydown: function(event) {
if (event.which === 32)
return false;
},
// if a space copied and pasted in the input field, replace it (remove it):
change: function() {
this.value = this.value.replace(/\s/g, "");
}
});
});