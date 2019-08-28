<?php
$to = $correo;
$subject = "Notificación Tu Opinión PUCV";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<center>
<table align='center' bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse !important; width: 100%; height: 100%;'>
	<tbody>
		<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
			<td align='center' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;'><a href='www.tuopinion.pucv.cl'><img alt='' src='http://www.e.pcspucv.cl/upload/templates/TU-OPINI%C3%93N/files/port.png' style='width: 580px; height: 167px;' /></a></td>
		</tr>
		<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
			<td align='center' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;' valign='top'>
			<table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' class='responsive-table' style='overflow: hidden !important; border-radius: 3px; border-collapse: collapse !important; width: 580px !important;' valign='top'>
				<tbody>

					<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
						<td height='20' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
						<p><strong><span style='font-size:18px;'><span style='color:#008d40;'>Estimado(a) Usuario:</span></span></strong></p>
						</td>
					</tr>
					<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
						<td align='center' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
						<p style='text-align: justify;'> </p>

						<p style='text-align: justify;'><span style='font-size: 14px;'><span style='font-family: arial, helvetica, sans-serif;'><span style='color:#696969;'>J</span></span></span><span style='font-size:16px;'><span style='font-family: arial, helvetica, sans-serif;'><span style='color:#696969;'>unto con saludar y agradecer su comunicación, informamos que hemos recibido satisfactoriamente su solicitud. Con el fin de que pueda hacer seguimiento a su requerimiento, favor ingresar al link dispuesto en el botón denominado </span> <font color='008d40'><span style='color:#008d40;'><strong>'Seguimiento Tu Opinión'</strong></span></font> <span style='color:#696969;'>, con el código: <font color='008d40'><strong>";

							$message .= $codigo;
							$message .= "</strong></font> podrá verificar el estado de su requerimiento.</span></span></span></p>

						<p style='text-align: center;'> </p>

						<p style='text-align: center;'> </p>

						<table align='center' bgcolor='#008d40' border='0' cellpadding='0' cellspacing='0' style='border-radius: 8px !important; border-collapse: collapse !important; width: 50%; height: 30px;'>
							<tbody>
									<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
										<td style='text-size-adjust: 100%; font-family: Arial, Helvetica, sans-serif !important; text-align: center;' valign='middle'>
										<p><a href='#' style='text-decoration:none; line-height: 25px; display: block; text-decoration: none !important; width: 100%; -webkit-text-size-adjust: none; mso-hide: all; font-family: Arial, Helvetica, sans-serif !important; -ms-text-size-adjust: 100%;'><span style='font-size:18px;'><span style='font-family: &quot;Open Sans&quot;, arial, sans-serif !important; color: rgb(254, 254, 254) !important; border-radius: 1px !important; text-decoration: none !important; font-weight: 600 !important;'><font color='ffffff'>Hacer Seguimiento</font></span></span></a></p>
										</td>
									</tr>
								</tbody>
						</table>
						<p style='text-align: justify;'><span style='font-size:16px;'><span style='color:#696969;'><font face='arial, helvetica, sans-serif'>Resulta importante tener presente que de acuerdo a la política establecida por la Dirección General de Asuntos Económicos y Administrativos en este tipo de materias, el responsable del servicio al cual usted realiza la comunicación, contará con un plazo máximo de 48 hrs. hábiles para responder a quienes han registrado su correo electrónico.  </font></span></span></p>

						<p style='text-align: justify;'><span style='font-size:16px;'><span style='color:#696969;'><font face='arial, helvetica, sans-serif'>Le saluda cordialmente, </font></span></span></p>

						<p style='text-align: justify;'><span style='color:#000066;'><font face='arial, helvetica, sans-serif'><span style='font-size: 14px;'><img alt='' src='http://e.pcspucv.cl/upload/surveys/621863/images/TuOpinion.png' style='width: 500px; height: 71px;' /></span></font></span></p>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
			<td height='20' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;'> </td>
		</tr>
	</tbody>
</table>

<table border='0' cellpadding='0' cellspacing='0' class='responsive-table' style='border-collapse: collapse !important; width: 580px !important;'>
	<tbody>
		<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
			<td style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
			<div class='social-cell' style='width: 31%; float: left; display: inline;'>
			<table bgcolor='#008d40' border='0' cellpadding='0' cellspacing='0' style='border-radius: 3px !important; border-collapse: collapse !important; width: 100%; height: 30px;'>
				<tbody>
					<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
						<td align='center' style='text-size-adjust: 100%;' valign='middle'><a href='#' style='line-height: 30px; display: block; width: 100%; text-size-adjust: none; text-decoration: none !important;'><font color='#ffffff'>+56 32 2273576</font></a></td>
					</tr>
				</tbody>
			</table>
			</div>

			<div class='social-spacer' style='width: 3.5%; height: 30px; float: left; display: inline; *margin-right: -1px;'> </div>

			<div class='social-cell' style='width: 31%; float: left; display: inline;'>
			<table bgcolor='#008d40' border='0' cellpadding='0' cellspacing='0' style='border-radius: 3px !important; border-collapse: collapse !important; width: 100%; height: 30px;'>
				<tbody>
					<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
						<td align='center' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;' valign='middle'><a href='#' style='line-height: 30px; display: block; width: 100%; text-size-adjust: none; text-decoration: none !important;'><font color='#ffffff'>Contáctanos</font></a></td>
					</tr>
				</tbody>
			</table>
			</div>

			<div class='social-spacer' style='width: 3.5%; height: 30px; float: left; display: inline; *margin-right: -1px;'> </div>

			<div class='social-cell' style='width: 31%; float: left; display: inline;'>
			<table bgcolor='#008d40' border='0' cellpadding='0' cellspacing='0' style='border-radius: 3px !important; border-collapse: collapse !important; width: 100%; height: 30px;'>
				<tbody>
					<tr style='font-family: Arial, Helvetica, sans-serif !important;'>
						<td align='center' style='font-family: Arial, Helvetica, sans-serif !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;' valign='middle'><a href='#' style='line-height: 30px; display: block; width: 100%; text-size-adjust: none; text-decoration: none !important;''><font color='#ffffff'>tuopinion@pucv.cl</font></a></td>
					</tr>
				</tbody>
			</table>
			</div>
			</td>
		</tr>
	</tbody>
</table>

<p><span style='font-size:10px;'><a href='http://www.dgaea.pucv.cl/' style='text-decoration:none' target='_blank'><span style='color:#008d40;'>Dirección General de Asuntos Económicos y Administrativos</span></a> | <a href='http://www.pucv.cl/' style='text-decoration:none' target='_blank'><span style='color:#008d40;'>Pontificia Universidad Católica de Valparaíso</span></a></span></p>

<div id='footer-bottom'> </div>

<div id='footer-bottom'><span style='color:#008d40;'><!-- .container --></span></div>

<table border='0' cellpadding='0' cellspacing='0' class='responsive-table' style='border-collapse: collapse !important; width: 580px !important;' valign='top'>
	<tbody>
	</tbody>
</table>

<table border='0' cellpadding='0' cellspacing='0' class='responsive-table' style='border-collapse: collapse !important; width: 580px !important;' valign='top'>
</table>
</center>
</body>
</html>
";
//$message .=$comentario;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <tuopinion@pucv.cl>' . "\r\n";
//$headers .= 'Cc: rosa.llanosleon@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
