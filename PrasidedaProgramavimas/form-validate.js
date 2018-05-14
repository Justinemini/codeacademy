$(document).ready(function () {

    $('#btn').click(function () {
        if ($("#forma").valid()) {
            console.log('Forma uzpildyta teisingai');
            var data = {
                'vardas': $('#forma input[name=vardas]').val(),
                'pavarde': $('#forma input[name=pavarde]').val(),
                'amzius': $('#forma input[name=amzius]').val(),
                'epastas': $('#forma input[name=epastas]').val()
            };
            $.ajax({
                method: "POST",
                url: "form-validate.php",
                dataType: 'json',
                data: data,
                success: function(data) {
                    console.log(data);
                    $('#tekstas').text(data);
                }
            });
        }
        else {
            console.log('Forma uzpildyta neteisingai: istaisykite');
    }
        return false;
    });

    $("#forma").validate({
        rules: {
            'vardas': {
                required: true,
                maxlength: 15
            },
            'pavarde': {
                required: true,
                maxlength: 15
            },
            'amzius': {
                required: true,
                min: 18,
                max: 100
            },
            'epastas': {
                required: false,
                email: true
            }
        },
        messages: {
            'vardas': {
                required: 'Prasome ivesti varda',
                maxlength: 'Max 15 simboliu'
            },
            'pavarde': {
                required: 'Prasome ivesti pavarde',
                maxlength: 'Max 15 simboliu'
            },
            'amzius': {
                required: 'Prasome ivesti amziu',
                min: 'MIN amzius - 18 metu',
                max: 'MAX amzius - 100 metu'
            },
            'epastas': {
                email: "Prasome ivesti teisinga el. pasta"
            }
        }
    });
});