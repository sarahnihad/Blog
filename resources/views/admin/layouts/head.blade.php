<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script rel="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 <script>
  $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});
 </script>

<style>

.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}


/* paginate */

#pagination {
    display: inline-block;
    vertical-align: middle;
    border-radius: 4px;
    padding: 1px 2px 4px 2px;
    border-top: 1px solid #f6f6f6;
   
    
}
#pagination a, #pagination i {
    display: inline-block;
    vertical-align: middle;
    width: 22px;
    color: #7D7D7D;
    text-align: center;
    font-size: 10px;
    padding: 3px 0 2px 0;
    -webkit-user-select:none;
       -moz-user-select:none;
        -ms-user-select:none;
         -o-user-select:none;
            user-select:none;
}

#pagination a {
    margin: 0 2px 0 2px;
    border-radius: 4px;
    border: 1px solid #E3E3E3;
    cursor: pointer;
    box-shadow: inset 0 1px 0 0 #FFF, 0 1px 2px #666;
    text-shadow: 0 1px 1px #FFF;
    background-color: #E6E6E6;
    background-image: -webkit-linear-gradient(top, #F3F3F3, #D7D7D7);
    background-image:    -moz-linear-gradient(top, #F3F3F3, #D7D7D7);
    background-image:     -ms-linear-gradient(top, #F3F3F3, #D7D7D7);
    background-image:      -o-linear-gradient(top, #F3F3F3, #D7D7D7);
    background-image:         linear-gradient(top, #F3F3F3, #D7D7D7);
}
#pagination i {
    margin: 0 3px 0 3px;
}
#pagination a.current {
    border: 1px solid #E9E9E9;
    box-shadow: 0 1px 1px #999;
    background-color: #DFDFDF;
    background-image: -webkit-linear-gradient(top, #D0D0D0, #EBEBEB);
    background-image:    -moz-linear-gradient(top, #D0D0D0, #EBEBEB);
    background-image:     -ms-linear-gradient(top, #D0D0D0, #EBEBEB);
    background-image:      -o-linear-gradient(top, #D0D0D0, #EBEBEB);
    background-image:         linear-gradient(top, #D0D0D0, #EBEBEB);
} 
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</head>

