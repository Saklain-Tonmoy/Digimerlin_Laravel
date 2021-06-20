<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Digimerlin</title>
    @include('frontend.layout.style')
</head>

<body class="defult-home">
    @include('frontend.layout.preloader')
    <div class="main-content">
        @include('frontend.layout.header')
        @yield('content')
    </div>

    @include('frontend.layout.footer')
    @include('frontend.layout.script')

</body>
<script>
    function clearForm() {
        $("#id").val('');
        $("#name").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#subject").val('');
        $("#content").val('');
    };

    $('#submitbtn').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let subject = $('#subject').val();
        let content = $('#content').val();

        clearForm();

        $.ajax({
            type: "POST",
            url: "{{route('contact')}}",
            data: {
                name: name,
                email: email,
                phone: phone,
                subject: subject,
                content: content,
            },
            success: function(response) {
                console.log('success');
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                };
                toastr.success('DIGIMERLIN', 'Successfully submitted the form.');
            },
            error: function(error) {
                console.error();
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                };
                toastr.error('DIGIMERLIN', 'Something went wrong! Please try again.')
            }
        });
    });
</script>

</html>