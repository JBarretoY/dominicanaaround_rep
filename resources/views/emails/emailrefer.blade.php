<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reference Code</title>
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
                                                        <center><b>Notificación de Cupón de Referido - Dominicana Around</b></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;' align='justify'>
                                                        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border: 1px solid #cccccc; border-collapse: collapse;'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px'><b>Email</b></td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px'><b>Cupón</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $coupon->refers }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $coupon->code }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Porcentaje de Comisión</b></td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 16px; padding-left: 40px; padding-top: 20px;'><b>Fecha</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $coupon->percentage }}</td>
                                                                    <td style='color: #153643; font-family: Arial, sans-serif; font-size: 18px; height: 25px; padding-left: 50px'>{{ $coupon->created_at }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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