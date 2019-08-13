<?php
    include_once('_head.php');
?>
<br><br>
<div class="container">


<form method="post">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-success" role="alert">
                                <center>Entrar em contato</center>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="usuario" placeholder="Digite o seu nome" class="form-control" required><br>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <input type="mail" name="email" placeholder="Digite seu email" class="form-control" required><br>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <textarea name="mensagem" rows="5" class="form-control" placeholder="Digite sua mensagem" required></textarea>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        <center>
                            <br>
                            <button type="submit" value="Enviar" name="entrar" class=" btn btn-primary">Enviar</button>
                            <a name="voltar" class=" btn btn-danger" href="index.php">Voltar</a>
                            <input type="hidden" value="envia" name="envia" />
                        </center>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <?php
                        if(isset($_POST['envia'])){
                            $to = "jeiceignacio@hotmail.com";
                            $email = $_POST['email'];
                            $usuario = $_POST['usuario'];
                            $assunto = "Ajuda do APP";
                            $mensagem = $_POST['mensagem'];
                        
                            $headers = "From: $email";
                            $headers = "From: " . $email . "\r\n";
                            $headers .= "Reply-To: ". $email . "\r\n";
                            $headers .= "MIME-Version: 1.0\r\n";
                            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                                        
                            $body = "<!DOCTYPE html><html lang='pt'><head><meta charset='utf-8'><title>Contato</title></head><body>";
                            $body .= "<table style='width: 100%;'>";
                            $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
                            $body .= "</td></tr></thead><tbody><tr>";
                            $body .= "<td style='border:none;'><strong>usuario:</strong> {$usuario}</td>";
                            $body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";
                            $body .= "</tr>";
                            $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$assunto}</td></tr>";
                            $body .= "<tr><td></td></tr>";
                            $body .= "<tr><td colspan='2' style='border:none;'>{$mensagem}</td></tr>";
                            $body .= "</tbody></table>";
                            $body .= "</body></html>";
                        
                            $send = mail($to, $assunto, $body, $headers);
                            ?>  
                            <br>
                                <div class="alert alert-success" role="alert">
                                    Mensagem enviada com sucesso!
                                </div>
                            <?php
                            
                            if($send === TRUE){
                               ?><meta http-equiv="Refresh" content="0.1; url=index.php"><?php
                            }
                        }
                    ?>
                </form>
</div>
</div>