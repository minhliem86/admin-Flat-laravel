
function confirm_remove(a){
alertify.confirm('You can not undo this action. Are you sure ?', function(e){
  if(e){
    a.parentElement.submit();
  }
});
}
