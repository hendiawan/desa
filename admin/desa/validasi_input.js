$(document).ready(function() {
    $('#nim,#cari').keyup(function() { // Keyup function for check the user action in input
        var nim                     = $(this).val(); // Get the username textbox using $(this) or you can use directly $('#username')
        var UsernameAvailResult     = $('#pesan'); // Get the ID of the result where we gonna display the results
        var Hasil_Duplikat          = $('#pesan_duplikat'); // Get the ID of the result where we gonna display the results
        var UsernameAvailResult1    = $('#pesan1'); // Get the ID of the result where we gonna display the results
        var hasil                   = $('#cari'); // Get the ID of the result where we gonna display the results
        if (nim.length > 9) { // check if greater than 2 (minimum 3)
            UsernameAvailResult.html('Loading..'); // Preloader, use can use loading animation here
            var UrlToPass = 'action=username_availability&nim=' + nim;
            $.ajax({// Send the username val to another checker.php using Ajax in POST menthod
                type    : 'POST',
                data    : UrlToPass,
                url     : 'checker.php',
                success: function(hasil) { // Get the result and asign to each cases
                    if (hasil !== nim) {
                        UsernameAvailResult.html(hasil);
                    } else if (hasil === !nim) {
                        UsernameAvailResult.html('Tidak Tersedia');
                    }
                    else {
                        alert('Problem with sql query');
                    }
                }
            });


            $.ajax({// Send the username val to another checker.php using Ajax in POST menthod
                type    : 'POST',
                data    : UrlToPass,
                url     : 'checker1.php',
                success: function(hasil) { // Get the result and asign to each cases
                    if (hasil !== nim) {
                        UsernameAvailResult1.html(hasil);
                    } else {
                        alert('Problem with sql query');
                    }
                }
            });

        } else {
            UsernameAvailResult.html('Enter atleast 3 characters');
        }
        if (Username.length == 0) {
            UsernameAvailResult.html('');
        }
    });
});
