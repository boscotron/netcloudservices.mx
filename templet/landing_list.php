<?php $page = "blog"; ?>
<article id="post-7" class="post-7 page type-page status-publish hentry">
   <div class="entry-content">
      <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
         <div class="et_pb_top_inside_divider"></div>
         <div class=" et_pb_row et_pb_row_2">
            <div class="et_pb_column et_pb_column_4_4  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
               <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_0">
                  <div class="et_pb_text_inner">
                     <h1 class="jmy_web_div" data-page="<?php echo $page; ?>" id="titulo_inicio" data-editor="no"><?php $this->pnt('titulo_inicio','TU ALIADO EN'); ?><br>
                        <strong class="jmy_web_div" data-page="<?php echo $page; ?>" id="sub_titulo_inicio" data-editor="no"><?php $this->pnt('sub_titulo_inicio','SOLUCIONES TECNOLÓGICAS'); ?></strong>
                     </h1>
                     <p class="jmy_web_div" data-page="<?php echo $page; ?>" id="descripcion_inicio" data-editor="no"><?php $this->pnt('descripcion_inicio','COMUNICACIÓN. CIBERNÉTICA. VIGILANCIA. SERVICIOS EN LA NUBE'); ?></p>
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
      <div id="netcloud" class="et_pb_section et_pb_section_1 et_section_regular et_section_transparent">
         <div class=" et_pb_row et_pb_row_1">
            <div class="et_pb_column et_pb_column_1_3  et_pb_column_1 et_pb_column_empty et_pb_css_mix_blend_mode_passthrough">
            </div>
            <!-- .et_pb_column -->
            <div class="et_pb_column et_pb_column_1_3  et_pb_column_2 et_pb_column_empty et_pb_css_mix_blend_mode_passthrough">
            </div>
            <!-- .et_pb_column -->
            <div class="et_pb_column et_pb_column_1_3  et_pb_column_3 et_pb_css_mix_blend_mode_passthrough et-last-child">
				<div class="jmy_web_slider"  data-page="<?php echo $page; ?>"   data-tabla="blog"  id="marco_imagen_top_blog"  data-marco="marco_imagen_top_blog" data-var='<?php echo json_encode([ [ 
					"type"=>"imagen",
					"id"=>"imagen_top_blog",
					"idadd"=>"imagen_top_blog",
					 "width"=>"367",
					 "height"=>"165",
					   ]]); ?>'></div>
               <div class="et_pb_module et_pb_image et_pb_image_0 et_always_center_on_mobile">
                  <span class="et_pb_image_wrap"><img id="imagen_top_blog" src="<?php $this->pnt('imagen_top_blog',$this->url_templet(["return"=>1]).'/assets/img/avanzamos.jpg'); ?>" alt=""></span>
               </div>
            </div>
            <!-- .et_pb_column -->
         </div>
         <!-- .et_pb_row -->
      </div>
      <!-- .et_pb_section -->
      <div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular">
         <div class=" et_pb_row et_pb_row_2">
         <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_3">
                  <div class="et_pb_text_inner">
                     <h3 class="jmy_web_div" data-page="<?php echo $page; ?>" id="h2_inicio" data-editor="no"><?php $this->pnt('h2_inicio','Compartimos la misma misión: <span style="color: #00aeef;">Hacer crecer tu negocio</span>'); ?></h3>
                  </div>
               </div>
               <!-- .et_pb_text -->
               <div class="et_pb_button_module_wrapper et_pb_module et_pb_button_alignment_left">
                  <a href="<?php $this->pnt('btn_inicio_1_href','./#contacto'); ?>" class="et_pb_button  et_pb_button_0 et_pb_module et_pb_bg_layout_dark jmy_web_div" data-page="<?php echo $page; ?>" id="btn_inicio_1" data-editor="no"><?php $this->pnt('btn_inicio_1','ÚNETE A LA TRANSFORMACIÓN'); ?></a>
               </div>
            <div class="et_pb_column et_pb_column_1_2  et_pb_column_4 et_pb_css_mix_blend_mode_passthrough">
               <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_1">
                  <div class="et_pb_text_inner jmy_web_div" data-page="<?php echo $page; ?>" id="nosotros_desc_1" data-editor="no"><?php $this->pnt('nosotros_desc_1','<p>En <strong>Netcloud Services</strong> avanzamos junto con la tecnología, <strong>contamos con la capacidad de ejecución y experiencia técnica para implantar tecnologías innovadoras</strong> y mantener un alto nivel de calidad en el servicio al cliente, porque sabemos que contar con las herramientas&nbsp; adecuadas en las empresas tiene un impacto directo y tangible en los negocios.&nbsp;&nbsp;Diseñamos e implementamos estrategias tecnologicas a la medida para que las <strong>empresas optimicen sus procesos y potencialicen sus servicios.&nbsp;</strong></p>'); ?></div>
               </div>
               <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_1">
               <?php
					$p=$this->modulos(['modulos_permisos'=>1]);
//					$this->pre(['p'=>$p['modulos_permisos']['vistaweb'],'t'=>'TITULO_ARAY']);
					if($p['modulos_permisos']['vistaweb']>2)
						echo '<input type="text" id="nueva_pagina" class="input" placeholder="Ingrese aquí el titulo de su nueva página legal"><button class="btn btn-flat btn-succes agregar_url" data-target="nueva_pagina" data-url="blog" >Agregar nuevo</button>';
				 ?> 
                    <div class=" et_pb_row et_pb_row_6">                    
                    <?php
                 //   $this ->pre(['p'=>$data,'t'=>'TITULO_ARAY']);
                    foreach ($data['lista'] as &$v) {
                        echo(trim($v['titulo'])!='')? '</div><div class=" et_pb_row et_pb_row_6">':'';
                            echo(trim($v['titulo'])!='')? '<div class="et_pb_column et_pb_column_1_3  et_pb_column_8 et_pb_css_mix_blend_mode_passthrough" style="
                            width: 100%;
                        ">
                        <a href="'.$this->url_actual(['return'=>1]).'/'.$v['ID_F'].'"><div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_5">
                            <div class="et_pb_text_inner">
                                <h4 >'.$this->pnt('CAMBIAR',($v['titulo']!='')?$v['titulo']:"Texto",["return"=>1]).' </h4>
                            </div></a>
                            </div>
                            <!-- .et_pb_text -->
                        </div>
                        <!-- .et_pb_column -->':''; 
                        }
                    ?>
                    </div>
                    <!-- .et_pb_row -->
               </div>
               <!-- .et_pb_text -->
            </div>
            <!-- .et_pb_column -->            
            <!-- .et_pb_column -->
         </div>
         <!-- .et_pb_row -->        
      </div>			
   </div>
   <!-- .entry-content -->
</article>
<!-- .et_pb_post -->