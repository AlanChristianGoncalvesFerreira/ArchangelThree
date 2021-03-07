<?php

	if (isset($_POST[nome])){
				$nome =   $_POST[nome];
				$email =  $_POST[email];
				$recado = $_POST[message];
				$assunto = "Contato";
				
					$send = ("alanchristiangoncalvesferreira@gmail.com"); //Coloque seu E-mail aqui.
					
					$data = date("d/m/y");	   
					$hora = date("H:i:s");
					$ip = $_SERVER[REMOTE_ADDR];
					
					$headers .= "From: $send\r\n"; 
											//para o envio em formato HTML
											$headers = "MIME-Version: 1.0\r\n";
											$headers .= "Content-type: text/html;
											charset=iso-8859-1\r\n";
											
											$corpo =("
														 
														<b>De:</b> $_POST[nome]; <br/>
														<b>E-mail:</b> $email<br/>
														<b>Assunto:</b> $assunto<br/>
														<b>Para:</b> $send<br/>
															<hr/><br/>
														<b>Recado:</b> <br/> 
														$recado
														<br/>
															<hr/>
														<br/>
														
														<b>Data:</b> $data <br/>
														<b>Hora:</b> $hora	<br/>
														<b>IP:</b>	$ip			<br/>
														
														");
																		
												mail($send, $assunto, $corpo, $headers); 
										
											echo "
<script type=\"text/javascript\"> alert('Obrigado $nome, Seu Recado Foi Enviado Com sucesso!!!') </script>";

					
				} else{
				
				
				}


$exibir_apos_enviar='index.php';

?>