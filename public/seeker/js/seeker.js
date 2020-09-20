$(document).ready(function () {
    $('.fcat').change(function () { 
      var id=$('.fcat').val();
      var path='/seeker/filter/category/'+id;
      window.location.href=path;
    });

    $('.fnat').change(function () { 
      var id=$('.fnat').val();
      var path='/seeker/filter/nature/'+id;
      window.location.href=path;
    });

    $('.fexp').change(function () { 
      var id=$('.fexp').val();
      var path='/seeker/filter/experience/'+id;
      window.location.href=path;
    });

    $('.fsal').change(function () { 
        var id=$('.fsal').val();
        var path='/seeker/filter/salary/'+id;
        window.location.href=path;
      });

      $('.name').keypress(function (e) { 
        var key=e.which;
        var id=$('.name').val();
        if(key==13 && id){
          
        var path='/seeker/filter/name/'+id;
        window.location.href=path;
        }
        
      });

      $('.find').click(function () { 
        var id=$('.jname').val();
        if(id){
          var path='/seeker/filter/name/'+id;
          window.location.href=path;
        }
        
      });
})