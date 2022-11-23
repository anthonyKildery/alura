<?php

add_action('widgets_init', 'al_pat_pal_registra_widget');

function al_pat_pal_registra_widget() {
    register_widget( 'PatrocinadoresAlura' );
}

// Foi criado a clss PatrocinadoresAlura que extends a class WP_Widget
class PatrocinadoresAlura extends WP_Widget {

    //Contrução do contrutor da class
    public function __construct()
    {
        parent::__construct(
            'al_patrocinadores_palestras_widget',                                  //Nome de identificação deve ser único
            'Patrocinadores Palestras',                                            //Nome que irá aparecer no painel administrativo do wordpress
            array( 'descriptions' => 'Selecione os patrocinadores da palestra' ),  //Opções do widget. Ex.: descriptions: para adicionar uma descrição
        );
    }

    /*
    Função que adicionar formulario ao widget
    Devemos buscar o id da class PatrocinadoresAlura
    */
    public function form( $instance )
    {
        ?>
        <p>
            <input  type="checkbox" 
                    name    ="<?= $this -> get_field_name( 'caelum' ) ?>" 
                    id      ="<?= $this -> get_field_id( 'caelum' ) ?>"
                    value   ="1">
            <label for="<?= $this -> get_field_id( 'caelum' ) ?>">Caelum</label>
        </p>
        <p>
            <input  type="checkbox" 
                    name    ="<?= $this -> get_field_name( 'casa_do_codigo' ) ?>" 
                    id      ="<?= $this -> get_field_id( 'casa_do_codigo' ) ?>"
                    value   ="1">
            <label for="<?= $this -> get_field_id( 'casa_do_codigo' ) ?>">Casa do Código</label>
        </p>
        <p>
            <input  type="checkbox" 
                    name    ="<?= $this -> get_field_name( 'hipster' ) ?>" 
                    id      ="<?= $this -> get_field_id( 'hipster' ) ?>"
                    value   ="1">
            <label for="<?= $this -> get_field_id( 'hipster' ) ?>">Hipster</label>
        </p>
        <?php
    }

    //Capitura dados vindo do formulario wiget do Wordpress
    public function update( $new_instance, $old_instance )
    {
        //Corfimando se os paramentros estão sendo pasados
        error_log( "Valor vindo do formúlario" . print_r( $new_instance, 1 ) );

        /*
            !empty( condição ): verificar se é verdadeira ou não retornando true ou false
            strip_tags(): remove qualquer código html ou php vindo do formúlario
        */
        $instance = array();
        $instance[ 'caelum' ]           = !empty( $new_instance[ 'caelum' ] ) ? strip_tags( $new_instance[ 'caelum' ] ) : '';
        $instance[ 'casa_do_codigo' ]   = !empty( $new_instance[ 'casa_do_codigo' ] ) ? strip_tags( $new_instance[ 'casa_do_codigo' ] ) : '';
        $instance[ 'hipster' ]           = !empty( $new_instance[ 'hipster' ] ) ? strip_tags( $new_instance[ 'hipster' ] ) : '';
        return $instance;
    }

    public function widget($args, $instance)
    {
        ?>
            <section class="patrocinadores-principais">
                <h3 class="titulo-patrocinadores">Patrocinadores</h3>
                <ul class="lista-patrocinadores">
                
                
                </ul>
            </section>
        <?php
    }
}
