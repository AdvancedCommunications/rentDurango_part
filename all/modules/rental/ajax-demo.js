Drupal.behaviors.ajax_demo = function(){
  $('#edit-get-node').unbind().click(
      function(){
        var nodeTitle = $('#edit-node-autocomplete').val();
        $.get('/ajax/getdata/' + nodeTitle, null, insertData);
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

