<?php
global $product;
function functionSimuladorparc() {
           $product_id = get_the_ID();
		
            $product = wc_get_product($product_id);
            
            if ($product->is_on_sale()) {
                if ($product->is_type('variable')) { // Verifica se o produto tem variações
                
                 $preco = $product->get_price();
                 $preco_oferta = $product->get_sale_price();

                 $variations = $product->get_available_variations();
                 $preco_variacao = $variation['display_regular_price'];
                 foreach($variations as $variation) {
                     $preco_variacaor = $variation['display_regular_price'];
                 }
                 $preco_format = wc_price($preco);

                 $numro_parc = 3;
                 $parcelamento = $preco / $numro_parc;

                ?>
                    <span class="de_price">De <s><?php echo wc_price($preco_variacaor); ?></s></span> <span class="por_price">Por apenas <?php echo $preco_format; ?> no pix<br></span>
                    <span class="parcela_price">ou <b>3x</b> <?php echo wc_price($parcelamento); ?> no cartão sem juros.</span>
                <?php
                } else {
                     $numro_parc = 3;
                $preco = $product->get_price();
                $parcelamento = $preco / $numro_parc;
                $preco_format = wc_price($preco);
                ?> 
                 <span class="por_price">Por apenas <?php echo $preco_format; ?> no pix<br></span>
                    <span class="parcela_price">ou <b>3x</b> <?php echo wc_price($parcelamento); ?> no cartão sem juros.</span>
                <?php
                }
            }else {
            $numro_parc = 3;
            $preco = $product->get_price();
            $parcelamento = $preco / $numro_parc;
            $preco_format = wc_price($preco);
	    ?>
            <span class="por_price">Por apenas <?php echo $preco_format; ?> no pix<br></span>
            <span class="parcela_price">ou <b>3x</b> <?php echo wc_price($parcelamento); ?> no cartão sem juros.</span>
           <?php
		}
}