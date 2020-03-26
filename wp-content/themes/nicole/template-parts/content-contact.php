<div class="contact">
    <div class="grid bgGray">
        <div class="left-side">
            <div>
                <div class="title">
                    <?php the_field('texto_contato', 'option'); ?>
                </div>
                <div class="text">
                    <?php the_field('texto', 'option'); ?>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div>
                <div class="title white-text">
                    Entre em contato abaixo
                </div>
                <div class="subtitle white-text">
                    em até 48 horas irei te retornar.
                </div>

                <div class="row">
                    <div class="col s12 m6">
                        <input type="text" placeholder="Seu nome">
                    </div>
                    <div class="col s12 m6">
                        <input type="text" placeholder="Seu Email">
                    </div>
                    <div class="col s12 m12">
                        <textarea class="materialize-textarea" placeholder="Digite sua mensagem" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button class="button-default">
                    Enviar mensagem
                </button>
            </div>
        </div>
    </div>
</div>