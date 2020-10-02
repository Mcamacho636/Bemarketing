<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "Administrador BeMarketing";
    $to = "sochoa@bemarketingmx.com";
    $subject="";
    $message="";
    if($tipo == 'general'){
        $subject = "Contacto General";
        $message = '<html>
        <head>
            <title>Formulario de contacto</title>
        </head>

        <body>
            <div style="width: 100%; align-items: center; text-align: center;">
                <p style="font-size:30px; font-family: Arial, Helvetica, sans-serif;">¡Se envió un mensaje a la página web!</p>
                <br><br>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th colspan="3" style="color:white;border: 1px solid black; background-color: black; padding: 12px 0;;">MENSAJE</th>
                    </tr>
                    <tr style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                        <td style="border: 1px solid #ddd; padding: 8px;">Nombre</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Correo</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Contacto</td>
                    </tr>
                    <tr style="border: 1px solid #ddd; padding: 8px; background-color: #ddd;">
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[0] . '</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[1] . '</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[2] .'</td>
                    </tr>
                </table>
            </div>
        </body>

        </html>';
    }else{
        $subject = "Contacto Proyecto";
        $message = '<html>
        <head>
            <title>Formulario de contacto</title>
        </head>

        <body>
            <div style="width: 100%; align-items: center; text-align: center;">
                <p style="font-size:30px; font-family: Arial, Helvetica, sans-serif;">¡Se envió un mensaje a la página web!</p>
                <br><br>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th colspan="3" style="color:white;border: 1px solid black; background-color: black; padding: 12px 0;;">MENSAJE</th>
                    </tr>
                    <tr style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                        <td style="border: 1px solid #ddd; padding: 8px;">Nombre</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Empresa</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Teléfono</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Correo</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Giro de la Empresa</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">Detalles</td>
                    </tr>
                    <tr style="border: 1px solid #ddd; padding: 8px; background-color: #ddd;">
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[0] . '</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[1] . '</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[2] .'</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[3] . '</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[4] . '</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">' . $claves[5] .'</td>
                    </tr>
                </table>
            </div>
        </body>

        </html>';
    }
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= "From:" . $from . "\r\n";
    mail($to,$subject,$message, $headers);
?>