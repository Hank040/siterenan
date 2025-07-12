
<div class="container">
    <section id="contato" class="section-padding">
        <h2>Entre em Contato Conosco</h2>
        <p>Tem alguma dúvida, sugestão ou comentário? Fique à vontade para nos mandar uma mensagem!</p>

        <form action="submit_form.php" method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>

        <div class="contact-info">
            <h3>Informações de Contato</h3>
            <p><strong>Endereço:</strong> Rua Manoel Francisco da Silva, 1389, Mamborê, Paraná</p>
            <p><strong>Telefone:</strong> (44) 99988-8693</p>
            <p><strong>E-mail:</strong> contato@duelistacentral.com.br</p>
        </div>
    </section>
</div>

