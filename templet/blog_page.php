<?php 
    //$this ->pre(['p'=>$data,'t'=>'TITULO_ARRAY']);  
    $tabla = "blog";
    $page = $data['page'];
?>
<article id="post-7" class="post-7 page type-page status-publish hentry">
   <div class="entry-content">
      <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
         <div class="et_pb_top_inside_divider"></div>
         <div class=" et_pb_row et_pb_row_2">
            <div class="et_pb_column et_pb_column_4_4  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
               <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_0">
                  <div class="et_pb_text_inner">
                     <h1 class="jmy_web_div" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>" id="titulo" data-editor="no"><?php $this->pnt('titulo','TÍTULO <br> <strong>SUB TÍTULO</strong>'); ?></h1>
                     <p class="jmy_web_div" data-page="<?php echo $page; ?>" data-tabla="<?php echo $tabla; ?>"  id="descripcion_inicio" data-editor="no"><?php $this->pnt('descripcion_inicio','DESCRIPCIÓN'); ?></p>
                  </div>
               </div>
               <!-- .et_pb_text -->
            </div>
            <!-- .et_pb_column -->
         </div>
         <!-- .et_pb_row -->
         <div class="et_pb_bottom_inside_divider"></div>
      </div>
      <!-- .et_pb_section -->
      <div id="foto" class="et_pb_section et_pb_section_4 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider foto">
         <div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="<?php echo $tabla; ?>"  id="marco_foto"  data-marco="marco_foto" data-var='<?php echo json_encode([ [ 
            "type"=>"imagen",
            "id"=>"foto",
            "background"=>"foto",
             "width"=>"385",
             "height"=>"252" ]]); ?>'></div>
         <div class="et_pb_top_inside_divider"></div>
         <div class=" et_pb_row et_pb_row_6 et_pb_gutters2">
            <div class="et_pb_column et_pb_column_1_4  et_pb_column_14 et_pb_column_empty et_pb_css_mix_blend_mode_passthrough">
            </div>
            <!-- .et_pb_column -->
            <div class="et_pb_column et_pb_column_3_4  et_pb_column_15 et_pb_css_mix_blend_mode_passthrough et-last-child" style="top: -120px;">
               <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_11">
                  <div class="et_pb_text_inner">
                     <h2 class="jmy_web_div" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>" id="contacto_titulo" data-editor="no"><?php $this->pnt('contacto_titulo','<b>¡CABECERA &nbsp;</b><span style="color: #00aeef;"><strong>PRINCIPAL!</strong></span>'); ?></h2>
                     <p class="jmy_web_div" data-page="<?php echo $page; ?>"  data-tabla="<?php echo $tabla; ?>" id="contacto_descripcion" data-editor="no"><?php $this->pnt('contacto_descripcion',' Desarrollamos aplicaciones móviles con ingenio e inteligencia para impulsar el uso de la tecnología de gran impacto con relevancia educativa, empresarial y social. Buscamos jovenes apasionados de la tecnología y con experiencia en programación.'); ?></p>
                   
                  </div>
               </div>
               <!-- .et_pb_text -->
              
               <!-- .et_pb_text -->
            </div>
            <!-- .et_pb_column -->
         </div>
         <!-- .et_pb_row -->
      </div>
      <!-- .et_pb_section -->					
   </div>
   <!-- .entry-content -->
</article>
<!-- .et_pb_post -->