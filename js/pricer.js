$(window).load(function() {

    // Basic (calcucate starts in euro)
    var base = 14;

    $.ajax({
    method: 'GET',
    url: 'https://www.nbrb.by/api/exrates/rates/eur?parammode=2',
    data: {
    },
        }).done(function (data) {
        
        // Get currency (eur)
        var eurRate = JSON.parse(data.Cur_OfficialRate)
        console.log('EURO currency today is: ' + eurRate);
		
		var baseByn = Math.ceil(base * eurRate);
		console.log('BYN tariff today is: ' + baseByn);

        // Calculate label prices (eur)
        var for_labels_eur_light = Math.ceil(base*16);
        var for_labels_eur_basic = Math.ceil(base*19);
        var for_labels_eur_standart = Math.ceil(base*22);
        var for_labels_eur_premium = Math.ceil(base*25);

        // Set label prices (eur)
        $('#for_labels_eur_light').text('');
        $('#for_labels_eur_light').append(for_labels_eur_light);
        $('#for_labels_eur_basic').text('');
        $('#for_labels_eur_basic').append(for_labels_eur_basic);
        $('#for_labels_eur_standart').text('');
        $('#for_labels_eur_standart').append(for_labels_eur_standart);
        $('#for_labels_eur_premium').text('');
        $('#for_labels_eur_premium').append(for_labels_eur_premium);
        

        // Calculate prices (eur) - Artists - Standart table
        var for_artists_eur_basic = Math.ceil(base);
        var for_artists_eur_basic1 = Math.ceil(for_artists_eur_basic - 1);
        var for_artists_eur_basic2 = Math.ceil(for_artists_eur_basic - 2);
        var for_artists_eur_basic3 = Math.ceil(for_artists_eur_basic - 3);
        var for_artists_eur_basic4 = Math.ceil(for_artists_eur_basic - 4);
        var for_artists_eur_basic5 = Math.ceil(for_artists_eur_basic - 5);
        var for_artists_eur_basic6 = Math.ceil(for_artists_eur_basic - 6);
        var for_artists_eur_basic7 = Math.ceil(for_artists_eur_basic - 7);
        var for_artists_eur_basic_s = Math.ceil((for_artists_eur_basic - 7)/2);
        
        // Set prices (eur) - Artists - Standart table
        $('#for_artists_eur_basic').text('');
        $('#for_artists_eur_basic').append(for_artists_eur_basic);
        $('#for_artists_eur_basic-1').append(for_artists_eur_basic1);
        $('#for_artists_eur_basic-2').append(for_artists_eur_basic2);
        $('#for_artists_eur_basic-3').append(for_artists_eur_basic3);
        $('#for_artists_eur_basic-4').append(for_artists_eur_basic4);
        $('#for_artists_eur_basic-5').append(for_artists_eur_basic5);
        $('#for_artists_eur_basic-6').append(for_artists_eur_basic6);
        $('#for_artists_eur_basic-7').append(for_artists_eur_basic7);
        $('#for_artists_eur_basic-s').append(for_artists_eur_basic_s);

        // Calculate prices (eur) - Artists - Vinyl/Tape table
        var for_artists_eur_tape = Math.ceil(for_artists_eur_basic+(for_artists_eur_basic/100*50));
        var for_artists_eur_tape1 = Math.ceil(for_artists_eur_tape - 1);
        var for_artists_eur_tape2 = Math.ceil(for_artists_eur_tape - 2);
        var for_artists_eur_tape3 = Math.ceil(for_artists_eur_tape - 3);
        var for_artists_eur_tape4 = Math.ceil(for_artists_eur_tape - 4);
        var for_artists_eur_tape5 = Math.ceil(for_artists_eur_tape - 5);
        var for_artists_eur_tape6 = Math.ceil(for_artists_eur_tape - 6);
        var for_artists_eur_tape7 = Math.ceil(for_artists_eur_tape - 7);
        var for_artists_eur_tape_s = Math.ceil((for_artists_eur_tape - 7)/2);

        // Set prices (eur) - Artists - Vinyl/Tape table
        $('#for_artists_eur_tape').text('');
        $('#for_artists_eur_tape').append(for_artists_eur_tape);
        $('#for_artists_eur_tape-1').append(for_artists_eur_tape1);
        $('#for_artists_eur_tape-2').append(for_artists_eur_tape2);
        $('#for_artists_eur_tape-3').append(for_artists_eur_tape3);
        $('#for_artists_eur_tape-4').append(for_artists_eur_tape4);
        $('#for_artists_eur_tape-5').append(for_artists_eur_tape5);
        $('#for_artists_eur_tape-6').append(for_artists_eur_tape6);
        $('#for_artists_eur_tape-7').append(for_artists_eur_tape7);
        $('#for_artists_eur_tape-s').append(for_artists_eur_tape_s);


            // Calculate label prices (byn)
            var for_labels_byn_light = Math.ceil(base*16);
            var for_labels_byn_basic = Math.ceil(base*19);
            var for_labels_byn_standart = Math.ceil(base*22);
            var for_labels_byn_premium = Math.ceil(base*25);

            // Set label prices (byn)
            $('#for_labels_byn_light').text('');
            $('#for_labels_byn_light').append(for_labels_byn_light);
            $('#for_labels_byn_basic').text('');
            $('#for_labels_byn_basic').append(for_labels_byn_basic);
            $('#for_labels_byn_standart').text('');
            $('#for_labels_byn_standart').append(for_labels_byn_standart);
            $('#for_labels_byn_premium').text('');
            $('#for_labels_byn_premium').append(for_labels_byn_premium);

            // Calculate prices (byn) - Artists - Standart table
            var for_artists_byn_basic = baseByn;
            var for_artists_byn_basic1 = Math.ceil(for_artists_byn_basic - 1);
            var for_artists_byn_basic2 = Math.ceil(for_artists_byn_basic - 2);
            var for_artists_byn_basic3 = Math.ceil(for_artists_byn_basic - 3);
            var for_artists_byn_basic4 = Math.ceil(for_artists_byn_basic - 4);
            var for_artists_byn_basic5 = Math.ceil(for_artists_byn_basic - 5);
            var for_artists_byn_basic6 = Math.ceil(for_artists_byn_basic - 6);
            var for_artists_byn_basic7 = Math.ceil(for_artists_byn_basic - 7);
            var for_artists_byn_basic_s = Math.ceil((for_artists_byn_basic - 7)/2);

            // Set prices (byn) - Artists - Standart table
            $('#for_artists_byn_basic').text('');
            $('#for_artists_byn_basic').append(for_artists_byn_basic);
            $('#for_artists_byn_basic-1').append(for_artists_byn_basic1);
            $('#for_artists_byn_basic-2').append(for_artists_byn_basic2);
            $('#for_artists_byn_basic-3').append(for_artists_byn_basic3);
            $('#for_artists_byn_basic-4').append(for_artists_byn_basic4);
            $('#for_artists_byn_basic-5').append(for_artists_byn_basic5);
            $('#for_artists_byn_basic-6').append(for_artists_byn_basic6);
            $('#for_artists_byn_basic-7').append(for_artists_byn_basic7);
            $('#for_artists_byn_basic-s').append(for_artists_byn_basic_s);

            // Calculate prices (byn) - Artists - Vinyl/Tape table
            var for_artists_byn_tape = Math.ceil(for_artists_byn_basic + (for_artists_byn_basic/100*50));
            var for_artists_byn_tape1 = Math.ceil(for_artists_byn_tape - 1);
            var for_artists_byn_tape2 = Math.ceil(for_artists_byn_tape - 2);
            var for_artists_byn_tape3 = Math.ceil(for_artists_byn_tape - 3);
            var for_artists_byn_tape4 = Math.ceil(for_artists_byn_tape - 4);
            var for_artists_byn_tape5 = Math.ceil(for_artists_byn_tape - 5);
            var for_artists_byn_tape6 = Math.ceil(for_artists_byn_tape - 6);
            var for_artists_byn_tape7 = Math.ceil(for_artists_byn_tape - 7);
            var for_artists_byn_tape_s = Math.ceil((for_artists_byn_tape - 7)/2);

            // Set prices (byn) - Artists - Vinyl/Tape table
            $('#for_artists_byn_tape').text('');
            $('#for_artists_byn_tape').append(for_artists_byn_tape);
            $('#for_artists_byn_tape-1').append(for_artists_byn_tape1);
            $('#for_artists_byn_tape-2').append(for_artists_byn_tape2);
            $('#for_artists_byn_tape-3').append(for_artists_byn_tape3);
            $('#for_artists_byn_tape-4').append(for_artists_byn_tape4);
            $('#for_artists_byn_tape-5').append(for_artists_byn_tape5);
            $('#for_artists_byn_tape-6').append(for_artists_byn_tape6);
            $('#for_artists_byn_tape-7').append(for_artists_byn_tape7);
            $('#for_artists_byn_tape-s').append(for_artists_byn_tape_s);
            //location.reload();
        
        }).fail(function (error) {
        $.ajax({
                method: 'POST',
                url: '/v2/inc/sendEmail.php',
                data: {
                    'contactName': 'ErrorBOT (sledgermastering.by)',
                    'contactEmail': 'sledger@ya.ru',
                    'contactSubject': 'На сайте возникла ошибка обновления курсов валют',
                    'contactMessage': 'Ajax-функция №1 (EUR) загрузки курсов валют не отработала'
                },
                dataType: 'html'
        })
    });

    $.ajax({
        method: 'GET',
        url: 'https://www.nbrb.by/api/exrates/rates/usd?parammode=2',
        data: {
        },
        }).done(function (data) {

            // Get currency (usd)
            var usdRate = JSON.parse(data.Cur_OfficialRate)
            console.log('USD currency today is: ' + usdRate);
			
            // Calculate label prices (usd)
            var for_labels_usd_light = Math.ceil((base/usdRate)*16);
            var for_labels_usd_basic = Math.ceil((base/usdRate)*19);
            var for_labels_usd_standart = Math.ceil((base/usdRate)*22);
            var for_labels_usd_premium = Math.ceil((base/usdRate)*25);

            // Set label prices (usd)
            $('#for_labels_usd_light').text('');
            $('#for_labels_usd_light').append(for_labels_usd_light);
            $('#for_labels_usd_basic').text('');
            $('#for_labels_usd_basic').append(for_labels_usd_basic);
            $('#for_labels_usd_standart').text('');
            $('#for_labels_usd_standart').append(for_labels_usd_standart);
            $('#for_labels_usd_premium').text('');
            $('#for_labels_usd_premium').append(for_labels_usd_premium);

            // Calculate prices (usd) - Artists - Standart table
            var for_artists_usd_basic = Math.ceil(base/usdRate);
            var for_artists_usd_basic1 = Math.ceil(for_artists_usd_basic - 1);
            var for_artists_usd_basic2 = Math.ceil(for_artists_usd_basic - 2);
            var for_artists_usd_basic3 = Math.ceil(for_artists_usd_basic - 3);
            var for_artists_usd_basic4 = Math.ceil(for_artists_usd_basic - 4);
            var for_artists_usd_basic5 = Math.ceil(for_artists_usd_basic - 5);
            var for_artists_usd_basic6 = Math.ceil(for_artists_usd_basic - 6);
            var for_artists_usd_basic7 = Math.ceil(for_artists_usd_basic - 7);
            var for_artists_usd_basic_s = Math.ceil((for_artists_usd_basic - 7)/2);
            
            // Set prices (usd) - Artists - Standart table
            $('#for_artists_usd_basic').text('');
            $('#for_artists_usd_basic').append(for_artists_usd_basic);
            $('#for_artists_usd_basic-1').append(for_artists_usd_basic1);
            $('#for_artists_usd_basic-2').append(for_artists_usd_basic2);
            $('#for_artists_usd_basic-3').append(for_artists_usd_basic3);
            $('#for_artists_usd_basic-4').append(for_artists_usd_basic4);
            $('#for_artists_usd_basic-5').append(for_artists_usd_basic5);
            $('#for_artists_usd_basic-6').append(for_artists_usd_basic6);
            $('#for_artists_usd_basic-7').append(for_artists_usd_basic7);
            $('#for_artists_usd_basic-s').append(for_artists_usd_basic_s);

            // Calculate prices (usd) - Artists - Vinyl/Tape table
            var for_artists_usd_tape = Math.ceil(for_artists_usd_basic+(for_artists_usd_basic/100*50));
            var for_artists_usd_tape1 = Math.ceil(for_artists_usd_tape - 1);
            var for_artists_usd_tape2 = Math.ceil(for_artists_usd_tape - 2);
            var for_artists_usd_tape3 = Math.ceil(for_artists_usd_tape - 3);
            var for_artists_usd_tape4 = Math.ceil(for_artists_usd_tape - 4);
            var for_artists_usd_tape5 = Math.ceil(for_artists_usd_tape - 5);
            var for_artists_usd_tape6 = Math.ceil(for_artists_usd_tape - 6);
            var for_artists_usd_tape7 = Math.ceil(for_artists_usd_tape - 7);
            var for_artists_usd_tape_s = Math.ceil((for_artists_usd_tape - 7)/2);

            // Set prices (usd) - Artists - Vinyl/Tape table
            $('#for_artists_usd_tape').text('');
            $('#for_artists_usd_tape').append(for_artists_usd_tape);
            $('#for_artists_usd_tape-1').append(for_artists_usd_tape1);
            $('#for_artists_usd_tape-2').append(for_artists_usd_tape2);
            $('#for_artists_usd_tape-3').append(for_artists_usd_tape3);
            $('#for_artists_usd_tape-4').append(for_artists_usd_tape4);
            $('#for_artists_usd_tape-5').append(for_artists_usd_tape5);
            $('#for_artists_usd_tape-6').append(for_artists_usd_tape6);
            $('#for_artists_usd_tape-7').append(for_artists_usd_tape7);
            $('#for_artists_usd_tape-s').append(for_artists_usd_tape_s);
            

        }).fail(function (error) {
            $.ajax({
                    method: 'POST',
                    url: '/v2/inc/sendEmail.php',
                    data: {
                        'contactName': 'ErrorBOT (sledgermastering.by)',
                        'contactEmail': 'sledger@ya.ru',
                        'contactSubject': 'На сайте возникла ошибка обновления курсов валют',
                        'contactMessage': 'Ajax-функция №2 (USD/BYN) загрузки курсов валют не отработала'
                    },
                    dataType: 'html'
            })
    });
    console.log('All prices are updated successfully');
})