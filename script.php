<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    function submitData(action){
        $(document).ready(function(){
            var data = {
                action: action,
                f_name: $("#f_name").val(),
                l_name: $("#l_name").val(),
                email: $("#email").val(),
                gender: $("#gender").val(),
            }

            $.ajax({
                url: "function.php",
                type: "post",
                data: data,
                success: function(response){
                    alert(response)
                }
            });

        });
    }
</script>