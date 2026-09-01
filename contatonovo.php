<?php 
include 'header.php';
?>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-8">
<h2>Fale Conosco</h2>

<p>Se você tem dúvidas, sugestões, deseja fazer um pedido, parceria ou saber mais sobre nossos produtos, entre em contato com a nossa equipe. Será um prazer falar com você.</p><br>

Valorizamos cada mensagem e buscamos responder o mais rápido possível, com atenção e qualidade no atendimento.<br>

Fale conosco<br>

Entre em contato pelos nossos canais:<br>
@Carvas_cookies<br>

📱 WhatsApp: (19) 99119-1555<br>

📍 Localização: Campinas – SP, Parque Prado<br>


Sua mensagem é importante para nós.</p>
                  </div>
            <aside class="col-md-4">
    <div class="p-4 bg-light rounded shadow-sm">
        <div class="card h-100">
            <img src="images/aoleite.png" class="card-img-top" alt="Cookie ao Leite">
            <div class="card-body">
                <h5 class="card-title">Cookie com chocolate ao leite</h5>
                <p class="card-text">Delicioso cookie de chocolate com um pedaço de chocolate ao leite por cima.</p>
                <a href="https://api.whatsapp.com/send/?phone=5519991191555&text&type=phone_number&app_absent=0&utm_source=ig" class="btn btn-primary w-100">Disponível</a>
            </div>
        </div>
    </div>
</aside>

    </div> </main>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 card p-4 shadow"> 
            
            <form action="https://formspree.io/f/mpqjpboq" method="POST">
                <input type="hidden" name="_next" value="https://carvascookie.com/obrigado.php/carvas_cookie/obrigado.php">
                
                <div class="mb-3">
                    <label for="inputNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="nome_cliente" required>
                </div>

                <div class="mb-3">
                    <label for="inputPedido" class="form-label">Seu pedido</label>
                    <input type="text" class="form-control" id="inputPedido" name="pedido_cliente" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
            
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>