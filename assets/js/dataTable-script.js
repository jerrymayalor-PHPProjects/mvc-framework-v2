 // ===========  data table js ===========================
 $(document).ready(function(){
    $('.table').DataTable({
        retrieve: true,
        pagingType:'full_numbers',
        lengthMenu:[[10,20,30,50,-1],[10,20,30,50,"All"]],
        "order": [[ 3, "ASC" ]]
    });
  });