<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Details</title>
</head>
    <body style='margin: 0; padding: 0;'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tbody>
                <tr>
                    <td style='padding: 10px 0 30px 0;'>
                        <table align='center' border='0' cellpadding='0' cellspacing='0' width='700' style='border: 1px solid #cccccc; border-collapse: collapse;'>
                            <tbody>
                                <tr>
                                    <td align='center' bgcolor='#fff' style='padding: 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;'><img src='{{ asset('around') }}/img/logo_email.jpg' alt='Logo' style='display: block;'></td>
                                </tr>
                                <tr>
                                    <td bgcolor='#ffffff' style='padding: 40px 30px 0px 30px;'>
                                        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                            <tbody>
                                                <tr>
                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px;'>
                                                        Dear <b>{{ $book->name }},</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;' align='justify'>
                                                        Thanks for shopping on our website. Below you have the data that you will need to have a hand on your trip. If you want to manage your reservation, you can do it.
                                                        <br><br>
                                                        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border: 1px solid #cccccc; border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 20px; height: 20px; padding: 20px;' colspan='2'>
                                                                        <b>YOUR RESERVATION</b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px'><b>Reservation number</b></td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px'><b>Order summary:</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $book->id_pago }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>Pax: </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Service name</b></td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Total ammout</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $book->purchase }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>$ {{ $book->precio }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Date</b></td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Payment</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $book->created_at }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $book->precio }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px;'>Pick Up time: {{ $book->horario }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px;'></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-bottom: 20px;'>Lobby hotel: {{ $book->hotel }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-bottom: 20px;'></td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='padding: 0px;' colspan='2'>
                                                                        <hr style="border: 0.5px #cccccc dashed;">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Name:</b></td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Provider:</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $book->nombre }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>Dominicana Around</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px;'>Room: {{ $book->room }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 50px;'>info@dominicanaaround.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-bottom: 40px;'>Email: {{ $book->correo }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 50px; padding-bottom: 40px;'>+1 (829) 821-5833</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td style='padding: 0px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;' align='justify'>If you have any questions, please call us at <b>829-821-5833</b> and email <b>info@dominicanaaround.com</b>.
                                                        <br><br>
                                                        <b>OBSERVATIONS:</b>
                                                        <br><br>
                                                        Cancellations are only admitted 48hrs in advance. Cancellation do not apply on bookings for the same day or the Next. Dominicana Around reserves the right to cancel any excursion or change the program of an excursion if circunstances require it.<br><br>
                                                        If canceled more than 48 hours in advance, 100% refund will be made. For cancellations less than 48 hours prior to reservation, or for no-show, no refund will be applied unless an official medical certificate is presented.<br><br>
                                                        > More than 48 hours before the 100% activity.<br>
                                                        < Less than 48 hours before the 0% activity.<br><br>
                                                        <b>GIFTS FOR BOOKING ON OUR WEB:</b><br>
                                                        FREE SHOPPING TOUR AND  20% OFF ON YOUR NEXT EXCURSION
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor='#431A10' style='padding: 20px 30px 20px 30px;'>
                                        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                            <tbody>
                                                <tr>
                                                    <td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>
                                                        <center>© Copyright Dominicana Around 2019</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>