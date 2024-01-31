<?php
function mandarConfirmacionReservacion($datos_cliente)
{
    $destinatario = "$datos_cliente[1]";
    $asunto = 'Merci davoir effectué votre réservation avec México Amazing Travels.';
    $cuerpo = ' 
        <!DOCTYPE html>
        <html
          lang="en"
          xmlns="http://www.w3.org/1999/xhtml"
          xmlns:o="urn:schemas-microsoft-com:office:office"
        >
          <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width,initial-scale=1" />
            <meta name="x-apple-disable-message-reformatting" />
            <style>
              table,
              td,
              div,
              h1,
              p {
                font-family: Arial, sans-serif;
              }
              @media screen and (max-width: 530px) {
                .unsub {
                  display: block;
                  padding: 8px;
                  margin-top: 14px;
                  border-radius: 6px;
                  background-color: #555555;
                  text-decoration: none !important;
                  font-weight: bold;
                }
                .col-lge {
                  max-width: 100% !important;
                }
              }
              @media screen and (min-width: 531px) {
                .col-sml {
                  max-width: 27% !important;
                }
                .col-lge {
                  max-width: 73% !important;
                }
              }
            </style>
          </head>
          <body
            style="
              margin: 0;
              padding: 0;
              word-spacing: normal;
              background-color: #ffffff;
            "
          >
            <div
              role="article"
              aria-roledescription="email"
              lang="en"
              style="
                text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                background-color: #fff;
              "
            >
              <table
                role="presentation"
                style="width: 100%; border: none; border-spacing: 0"
              >
                <tr>
                  <td align="center" style="padding: 0">
                    <table
                      role="presentation"
                      style="
                        width: 94%;
                        max-width: 600px;
                        border: none;
                        border-spacing: 0;
                        text-align: left;
                        font-family: Arial, sans-serif;
                        font-size: 16px;
                        line-height: 22px;
                        color: #363636;
                      "
                    >
                      <tr>
                        <td
                          style="
                            padding: 40px 30px 30px 30px;
                            text-align: center;
                            font-size: 24px;
                            font-weight: bold;
                          "
                        >
                          <a
                            href="https://mexicoamazingtravels.com/"
                            style="text-decoration: none"
                            ><img
                              src="https://mexicoamazingtravels.com/assets/images/logo.png"
                              alt="Logo"
                              style="
                                width: 100%;
                                height: auto;
                                border: none;
                                text-decoration: none;
                                color: #ffffff;
                              "
                          /></a>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding: 30px; background-color: #ffffff">
                          <h1
                            style="
                              margin-top: 0;
                              margin-bottom: 16px;
                              font-size: 26px;
                              line-height: 32px;
                              font-weight: bold;
                              letter-spacing: -0.02em;
                            "
                          >
                          <center>
                          Vous avez réservé avec succès votre voyage à Oaxaca, félicitations !
                          </center>
                          </h1>
                          <p style="margin: 0">
                          Vous pouvez annuler si vous le souhaitez dans un délai ne dépassant pas 48 heures. à partir de maintenant.<br><br>

                          Si vous avez décidé de confirmer, votre code de réservation avec México Amazing Travels est :<br><br>
                           <center><strong>FFG89201</strong></center> .<br><br>
                           Merci d effectuer votre virement à : <br><br>
                           <center>
                           <strong>Banque : INTERCAM</strong> <br>
                           <strong>CLABE : 014589678936</strong> <br>
                           <strong>Montant : 6 800 $ USD</strong> <br>
                         </center> .<br><br>
                         Lorsque vous effectuez le transfert, veuillez nous envoyer à contacto@mexicoamazingtravels.com la photo du reçu de paiement et vos noms complets et ceux de vos accompagnants (les mêmes que sur le passeport) afin que nous puissions vous envoyer la réservation pour chacun. Avec lequel ils peuvent enregistrer leurs bagages et monter à bord de l avion.
                         <br><br>
                         N oubliez pas que vous devez avoir votre passeport en main, sans lequel vous ne pourrez pas embarquer.
                         <br><br>
                         Cela nous aidera à effectuer la réservation de vol et d’hébergement en votre nom et à sécuriser les lieux dans un délai suffisant.
                         <br><br>
                         Enfin, vous recevrez sous peu un email contenant des réservations et des informations sur l aéroport, la destination, la date et l heure du vol.
                         <br><br>
                         Merci pour votre préférence, nous savons que vous vivrez une expérience inoubliable et que vous nous rejoindrez à nouveau pour une autre aventure incroyable !
                            
                          </p>
                          <br />
                        </td>
                      </tr>
                      <tr>
                        <td
                          style="
                            padding: 30px;
                            text-align: center;
                            font-size: 12px;
                            background-color: #2b3f54;
                            color: #fff;
                          "
                        >
                          <p style="margin: 0; font-size: 14px; line-height: 20px">
                            &reg; Mexico Amazing Travels, todos los derechos reservados 2023<br /><a
                              class="unsub"
                              href="https://mexicoamazingtravels.com/"
                              style="color: #fff; text-decoration: underline"
                              >www.mexicoamazingtravels.com</a
                            >
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </body>
        </html>    
      ';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .=
        "From: Departamento de Ventas <contacto@mexicoamazingtravels.com>\r\n";
    mail($destinatario, $asunto, $cuerpo, $headers);
}
function mandarReservacionVentas($datos_cliente)
{
    $destinatario = 'contacto@mexicoamazingtravels.com';
    $asunto = 'Reservacion del sitio web';
    $cuerpo =
        ' 
        <!DOCTYPE html>
        <html
          lang="en"
          xmlns="http://www.w3.org/1999/xhtml"
          xmlns:o="urn:schemas-microsoft-com:office:office"
        >
          <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width,initial-scale=1" />
            <meta name="x-apple-disable-message-reformatting" />
            <style>
              table,
              td,
              div,
              h1,
              p {
                font-family: Arial, sans-serif;
              }
              @media screen and (max-width: 530px) {
                .unsub {
                  display: block;
                  padding: 8px;
                  margin-top: 14px;
                  border-radius: 6px;
                  background-color: #555555;
                  text-decoration: none !important;
                  font-weight: bold;
                }
                .col-lge {
                  max-width: 100% !important;
                }
              }
              @media screen and (min-width: 531px) {
                .col-sml {
                  max-width: 27% !important;
                }
                .col-lge {
                  max-width: 73% !important;
                }
              }
            </style>
          </head>
          <body
            style="
              margin: 0;
              padding: 0;
              word-spacing: normal;
              background-color: #ffffff;
            "
          >
            <div
              role="article"
              aria-roledescription="email"
              lang="en"
              style="
                text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                background-color: #fff;
              "
            >
              <table
                role="presentation"
                style="width: 100%; border: none; border-spacing: 0"
              >
                <tr>
                  <td align="center" style="padding: 0">
                    <table
                      role="presentation"
                      style="
                        width: 94%;
                        max-width: 600px;
                        border: none;
                        border-spacing: 0;
                        text-align: left;
                        font-family: Arial, sans-serif;
                        font-size: 16px;
                        line-height: 22px;
                        color: #363636;
                      "
                    >
                      <tr>
                        <td
                          style="
                            padding: 40px 30px 30px 30px;
                            text-align: center;
                            font-size: 24px;
                            font-weight: bold;
                          "
                        >
                          <a
                            href="https://mexicoamazingtravels.com/"
                            style="text-decoration: none"
                            ><img
                              src="https://mexicoamazingtravels.com/assets/images/logo.png"
                              width="165"
                              alt="Logo"
                              style="
                                width: 165px;
                                max-width: 80%;
                                height: auto;
                                border: none;
                                text-decoration: none;
                                color: #ffffff;
                              "
                          /></a>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding: 30px; background-color: #ffffff">
                          <h1
                            style="
                              margin-top: 0;
                              margin-bottom: 16px;
                              font-size: 26px;
                              line-height: 32px;
                              font-weight: bold;
                              letter-spacing: -0.02em;
                            "
                          >
                            Hemos tenido una nueva peticion de reservacion atender a la brevedad administrador!
                          </h1>
                          <p style="margin: 0">
                              Administrador ha llegado una nueva reservacion a nombre de: ' .
        utf8_encode($datos_cliente[0]) .
        ', numero de telefono ' .
        utf8_encode($datos_cliente[4]) .
        '. <br><br>
                              Destino: ' .
        utf8_encode($datos_cliente[5]) .
        ' <br><br>
                              Tipo de paquete: ' .
        $datos_cliente[6] .
        ' <br><br>
                              Numero de adultos: ' .
        $datos_cliente[7] .
        ' <br><br>
                              Numero de menores: ' .
        $datos_cliente[8] .
        ' <br><br>
                              Fecha de seleccionadas: ' .
        $datos_cliente[9] .
        ' <br><br>
                          </p>
                          <br />
                        </td>
                      </tr>
                      <tr>
                        <td
                          style="
                            padding: 30px;
                            text-align: center;
                            font-size: 12px;
                            background-color: #2b3f54;
                            color: #fff;
                          "
                        >
                          <p style="margin: 0; font-size: 14px; line-height: 20px">
                            &reg; Mexico Amazing Travels, todos los derechos reservados 2023<br /><a
                              class="unsub"
                              href="https://mexicoamazingtravels.com/"
                              style="color: #fff; text-decoration: underline"
                              >www.mexicoamazingtravels.com</a
                            >
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </body>
        </html>    
      ';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Departamento de Ventas <$datos_cliente[1]>\r\n";
    mail($destinatario, $asunto, $cuerpo, $headers);
}
