Drupal.behaviors.rental_scan = function(){
  $('#edit-get-source').unbind().click(
      function(){
        var source = $('#edit-source').val();
        $.get('/ajax/getdata/' + source, null, insertData);
        return false;
      }
  );
  $('#edit-get-contact-info').unbind().click(
      function(){
        var contact = $('#edit-contact-info').val();
        $.get('/ajax/getdata/' + contact, null, insertData);
        return false;
      }
  );
  function insertData(data){
    $('#node-area')
      .fadeOut(
        'medium', 
        function(){
          $(this).html(data)
        }
      )
      .fadeIn();
  }
}
