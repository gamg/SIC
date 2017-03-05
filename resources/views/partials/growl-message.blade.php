<script>
    $(document).ready(function(){
        function notify(message, type){
            $.growl({
                message: message
            },{
                type: type,
                allow_dismiss: false,
                label: 'Cancel',
                className: 'btn-xs btn-inverse',
                placement: {
                    from: 'top',
                    align: 'right'
                },
                delay: 2500,
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                },
                offset: {
                    x: 20,
                    y: 85
                }
            });
        }
        @if(session('message'))
            notify("{{session('message')['text']}}", "{{session('message')['alert']}}");
            {{session()->forget('message')}}
        @endif
    });
</script>