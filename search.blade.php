<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>PHP Live MySQL Database Search</title>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="/member/search-results" method="get">
        @csrf
        <div class="form-group">
            <input type="text" class="form-controller" id="search" name="search"></input>
        </div>
    </form>

    <div id="datanew" style="margin-top: 50px;">
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#search').keyup(function(e){
                 e.preventDefault();
                 $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN' : $("meta[name='csrf-token']").attr('content')
                 }
                 });

                 $.ajax({
                    url: "{{url('/member/search_results')}}",
                    method: 'GET',
                    data: {search: $('#search').val()},
                    success: function(result){
                        var i;
                        if (result.length) {
                            for (i = 0; i < result.length; i++) {
                                var name = result[i].name;
                                var data = "<tr>" + "<td align='center'>" + name + "</td>" + "</tr>";
                                $("#datanew").html(data);
                            }
                        }else{
                            var data = "<p>" + "No result Found." + "</p>";
                            $("#datanew").html(data);   
                        }
                    }
                 });
               });
            });
    </script> 
</body>
</html>