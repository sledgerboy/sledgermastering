$(window).load(function() {

    // Basic (calcucate starts in euro)
    window.base = 14;
    //let eurRate = 1

  
  // где угодно в коде


    $.ajax({
    method: 'GET',
    url: 'https://www.nbrb.by/api/exrates/rates/eur?parammode=2',
    data: {
    },
        }).done(function (data) {

        // Get currency (eur)
        window.eurRate = JSON.parse(data.Cur_OfficialRate)
        console.log('EURO currency today is: ' + window.eurRate);
		


        

        // Set label prices (eur)
        var for_labels_eur_light = Math.ceil(window.base*16);
        $('#for_labels_eur_light').text('');
        $('#for_labels_eur_light').append(for_labels_eur_light);
        var for_labels_eur_basic = Math.ceil(window.base*19);
        $('#for_labels_eur_basic').text('');
        $('#for_labels_eur_basic').append(for_labels_eur_basic);
        var for_labels_eur_standart = Math.ceil(window.base*22);
        $('#for_labels_eur_standart').text('');
        $('#for_labels_eur_standart').append(for_labels_eur_standart);
        var for_labels_eur_premium = Math.ceil(window.base*25);
        $('#for_labels_eur_premium').text('');
        $('#for_labels_eur_premium').append(for_labels_eur_premium);
        

        // Set prices (eur) - Artists - Standart table
        $('#for_artists_eur_basic').text('');
        $('#for_artists_eur_basic').append(window.base);
        var for_artists_eur_basic1 = Math.ceil(window.base - 1);
        $('#for_artists_eur_basic-1').append(for_artists_eur_basic1);
        var for_artists_eur_basic2 = Math.ceil(window.base - 2);
        $('#for_artists_eur_basic-2').append(for_artists_eur_basic2);
        var for_artists_eur_basic3 = Math.ceil(window.base - 3);
        $('#for_artists_eur_basic-3').append(for_artists_eur_basic3);
        var for_artists_eur_basic4 = Math.ceil(window.base - 4);
        $('#for_artists_eur_basic-4').append(for_artists_eur_basic4);
        var for_artists_eur_basic5 = Math.ceil(window.base - 5);
        $('#for_artists_eur_basic-5').append(for_artists_eur_basic5);
        var for_artists_eur_basic6 = Math.ceil(window.base - 6);
        $('#for_artists_eur_basic-6').append(for_artists_eur_basic6);
        var for_artists_eur_basic7 = Math.ceil(window.base - 7);
        $('#for_artists_eur_basic-7').append(for_artists_eur_basic7);
        var for_artists_eur_basic_s = Math.ceil((window.base - 7)/2);
        $('#for_artists_eur_basic-s').append(for_artists_eur_basic_s);

        // Set prices (eur) - Artists - Vinyl/Tape table
        var for_artists_eur_tape = Math.ceil(window.base+(window.base/100*50));
        $('#for_artists_eur_tape').text('');
        $('#for_artists_eur_tape').append(for_artists_eur_tape);
        var for_artists_eur_tape1 = Math.ceil(for_artists_eur_tape - 1);
        $('#for_artists_eur_tape-1').append(for_artists_eur_tape1);
        var for_artists_eur_tape2 = Math.ceil(for_artists_eur_tape - 2);
        $('#for_artists_eur_tape-2').append(for_artists_eur_tape2);
        var for_artists_eur_tape3 = Math.ceil(for_artists_eur_tape - 3);
        $('#for_artists_eur_tape-3').append(for_artists_eur_tape3);
        var for_artists_eur_tape4 = Math.ceil(for_artists_eur_tape - 4);
        $('#for_artists_eur_tape-4').append(for_artists_eur_tape4);
        var for_artists_eur_tape5 = Math.ceil(for_artists_eur_tape - 5);
        $('#for_artists_eur_tape-5').append(for_artists_eur_tape5);
        var for_artists_eur_tape6 = Math.ceil(for_artists_eur_tape - 6);
        $('#for_artists_eur_tape-6').append(for_artists_eur_tape6);
        var for_artists_eur_tape7 = Math.ceil(for_artists_eur_tape - 7);
        $('#for_artists_eur_tape-7').append(for_artists_eur_tape7);
        var for_artists_eur_tape_s = Math.ceil((for_artists_eur_tape - 7)/2);
        $('#for_artists_eur_tape-s').append(for_artists_eur_tape_s);


            // Calculate label prices (byn)
            window.baseByn = Math.ceil(window.base * window.eurRate);
            console.log('BYN tariff today is: ' + window.baseByn);
            var for_labels_byn_light = Math.ceil(window.baseByn*16);
            var for_labels_byn_basic = Math.ceil(window.baseByn*19);
            var for_labels_byn_standart = Math.ceil(window.baseByn*22);
            var for_labels_byn_premium = Math.ceil(window.baseByn*25);

            // Set label prices (byn)
            $('#for_labels_byn_light').text('');
            $('#for_labels_byn_light').append(for_labels_byn_light);
            $('#for_labels_byn_basic').text('');
            $('#for_labels_byn_basic').append(for_labels_byn_basic);
            $('#for_labels_byn_standart').text('');
            $('#for_labels_byn_standart').append(for_labels_byn_standart);
            $('#for_labels_byn_premium').text('');
            $('#for_labels_byn_premium').append(for_labels_byn_premium);

            // Set prices (byn) - Artists - Standart table
            $('#for_artists_byn_basic').text('');
            $('#for_artists_byn_basic').append(window.baseByn);
            var for_artists_byn_basic1 = Math.ceil(window.baseByn - 1);
            $('#for_artists_byn_basic-1').append(for_artists_byn_basic1);
            var for_artists_byn_basic2 = Math.ceil(window.baseByn - 2);
            $('#for_artists_byn_basic-2').append(for_artists_byn_basic2);
            var for_artists_byn_basic3 = Math.ceil(window.baseByn - 3);
            $('#for_artists_byn_basic-3').append(for_artists_byn_basic3);
            var for_artists_byn_basic4 = Math.ceil(window.baseByn - 4);
            $('#for_artists_byn_basic-4').append(for_artists_byn_basic4);
            var for_artists_byn_basic5 = Math.ceil(window.baseByn - 5);
            $('#for_artists_byn_basic-5').append(for_artists_byn_basic5);
            var for_artists_byn_basic6 = Math.ceil(window.baseByn - 6);
            $('#for_artists_byn_basic-6').append(for_artists_byn_basic6);
            var for_artists_byn_basic7 = Math.ceil(window.baseByn - 7);
            $('#for_artists_byn_basic-7').append(for_artists_byn_basic7);
            var for_artists_byn_basic_s = Math.ceil((window.baseByn - 7)/2);
            $('#for_artists_byn_basic-s').append(for_artists_byn_basic_s);

            // Set prices (byn) - Artists - Vinyl/Tape table
            var for_artists_byn_tape = Math.ceil(window.baseByn + (window.baseByn/100*50));
            $('#for_artists_byn_tape').text('');
            $('#for_artists_byn_tape').append(for_artists_byn_tape);
            var for_artists_byn_tape1 = Math.ceil(for_artists_byn_tape - 1);
            $('#for_artists_byn_tape-1').append(for_artists_byn_tape1);
            var for_artists_byn_tape2 = Math.ceil(for_artists_byn_tape - 2);
            $('#for_artists_byn_tape-2').append(for_artists_byn_tape2);
            var for_artists_byn_tape3 = Math.ceil(for_artists_byn_tape - 3);
            $('#for_artists_byn_tape-3').append(for_artists_byn_tape3);
            var for_artists_byn_tape4 = Math.ceil(for_artists_byn_tape - 4);
            $('#for_artists_byn_tape-4').append(for_artists_byn_tape4);
            var for_artists_byn_tape5 = Math.ceil(for_artists_byn_tape - 5);
            $('#for_artists_byn_tape-5').append(for_artists_byn_tape5);
            var for_artists_byn_tape6 = Math.ceil(for_artists_byn_tape - 6);
            $('#for_artists_byn_tape-6').append(for_artists_byn_tape6);
            var for_artists_byn_tape7 = Math.ceil(for_artists_byn_tape - 7);
            $('#for_artists_byn_tape-7').append(for_artists_byn_tape7);
            var for_artists_byn_tape_s = Math.ceil((for_artists_byn_tape - 7)/2);
            $('#for_artists_byn_tape-s').append(for_artists_byn_tape_s);
            //location.reload();
        
        }).fail(function (error) {
            $.ajax({
                method: 'POST',
                url: '/inc/sendEmail.php',
                data: {
                    'contactName': 'Sledgermastering MailBOT',
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
            //alert(window.base); // 14
            //alert(window.baseByn); // 41
            window.usdRate = JSON.parse(data.Cur_OfficialRate)
            console.log('USD currency today is: ' + window.usdRate);
			
            // Set label prices (usd)
            var for_labels_usd_light = Math.ceil((window.baseByn/usdRate)*15.3);
            $('#for_labels_usd_light').text('');
            $('#for_labels_usd_light').append(for_labels_usd_light);
            var for_labels_usd_basic = Math.ceil((window.baseByn/usdRate)*18.3);
            $('#for_labels_usd_basic').text('');
            $('#for_labels_usd_basic').append(for_labels_usd_basic);
            var for_labels_usd_standart = Math.ceil((window.baseByn/usdRate)*21.3);
            $('#for_labels_usd_standart').text('');
            $('#for_labels_usd_standart').append(for_labels_usd_standart);
            var for_labels_usd_premium = Math.ceil((window.baseByn/usdRate)*24.3);
            $('#for_labels_usd_premium').text('');
            $('#for_labels_usd_premium').append(for_labels_usd_premium);

            // Calculate prices (usd) - Artists - Standart table
            
            
            
            
            
            
            
            
            
            
            // Set prices (usd) - Artists - Standart table
            var for_artists_usd_basic = Math.ceil(window.baseByn/usdRate);
            $('#for_artists_usd_basic').text('');
            var for_artists_usd_basic1 = Math.ceil(for_artists_usd_basic - 1);
            $('#for_artists_usd_basic').append(for_artists_usd_basic);
            $('#for_artists_usd_basic-1').append(for_artists_usd_basic1);
            var for_artists_usd_basic2 = Math.ceil(for_artists_usd_basic - 2);
            $('#for_artists_usd_basic-2').append(for_artists_usd_basic2);
            var for_artists_usd_basic3 = Math.ceil(for_artists_usd_basic - 3);
            $('#for_artists_usd_basic-3').append(for_artists_usd_basic3);
            var for_artists_usd_basic4 = Math.ceil(for_artists_usd_basic - 4);
            $('#for_artists_usd_basic-4').append(for_artists_usd_basic4);
            var for_artists_usd_basic5 = Math.ceil(for_artists_usd_basic - 5);
            $('#for_artists_usd_basic-5').append(for_artists_usd_basic5);
            var for_artists_usd_basic6 = Math.ceil(for_artists_usd_basic - 6);
            $('#for_artists_usd_basic-6').append(for_artists_usd_basic6);
            var for_artists_usd_basic7 = Math.ceil(for_artists_usd_basic - 7);
            $('#for_artists_usd_basic-7').append(for_artists_usd_basic7);
            var for_artists_usd_basic_s = Math.ceil((for_artists_usd_basic - 7)/2);
            $('#for_artists_usd_basic-s').append(for_artists_usd_basic_s);

            // Set prices (usd) - Artists - Vinyl/Tape table
            var for_artists_usd_tape = Math.ceil(for_artists_usd_basic+(for_artists_usd_basic/100*50));
            $('#for_artists_usd_tape').text('');
            $('#for_artists_usd_tape').append(for_artists_usd_tape);
            var for_artists_usd_tape1 = Math.ceil(for_artists_usd_tape - 1);
            $('#for_artists_usd_tape-1').append(for_artists_usd_tape1);
            var for_artists_usd_tape2 = Math.ceil(for_artists_usd_tape - 2);
            $('#for_artists_usd_tape-2').append(for_artists_usd_tape2);
            var for_artists_usd_tape3 = Math.ceil(for_artists_usd_tape - 3);
            $('#for_artists_usd_tape-3').append(for_artists_usd_tape3);
            var for_artists_usd_tape4 = Math.ceil(for_artists_usd_tape - 4);
            $('#for_artists_usd_tape-4').append(for_artists_usd_tape4);
            var for_artists_usd_tape5 = Math.ceil(for_artists_usd_tape - 5);
            $('#for_artists_usd_tape-5').append(for_artists_usd_tape5);
            var for_artists_usd_tape6 = Math.ceil(for_artists_usd_tape - 6);
            $('#for_artists_usd_tape-6').append(for_artists_usd_tape6);
            var for_artists_usd_tape7 = Math.ceil(for_artists_usd_tape - 7);
            $('#for_artists_usd_tape-7').append(for_artists_usd_tape7);
            var for_artists_usd_tape_s = Math.ceil((for_artists_usd_tape - 7)/2);
            $('#for_artists_usd_tape-s').append(for_artists_usd_tape_s);
            

        }).fail(function (error) {
            $.ajax({
                    method: 'POST',
                    url: '/inc/sendEmail.php',
                    data: {
                        'contactName': 'Sledgermastering MailBOT',
                        'contactEmail': 'sledger@ya.ru',
                        'contactSubject': 'На сайте возникла ошибка обновления курсов валют',
                        'contactMessage': 'Ajax-функция №2 (USD/BYN) загрузки курсов валют не отработала'
                    },
                    dataType: 'html'
            })
    });
    console.log('All prices are updated successfully');
})