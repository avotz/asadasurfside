<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asadasurfside
 */
if ( defined('CBXPHPSPREADSHEET_PLUGIN_NAME') && file_exists( CBXPHPSPREADSHEET_ROOT_PATH . 'lib/vendor/autoload.php' ) ) {
	//Include PHPExcel
	require_once( CBXPHPSPREADSHEET_ROOT_PATH . 'lib/vendor/autoload.php' );

	//now take instance
	//$objPHPExcel = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

}
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "query_medidor") {
   
    $error = "";

    if (!empty($_POST['post_medidor'])) {
        $medidor = trim($_POST['post_medidor']);
    } else {
        $error .= "Por favor escribe el numero de medidor <br />";
    }
    
    if (empty($error)) {
        
        

        $query = new WP_Query( array( 'post_type' => 'medidor', 'posts_per_page' => '1' ) ); 
 
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
        

           $files = rwmb_meta( 'rw_file_medidores', array( 'limit' => 1 ) );
           $file = reset( $files );
         

            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
            $reader->setReadDataOnly(TRUE);
           
            $spreadsheet = $reader->load($file['path']);
           
            $foundInCells = array();
            $searchValue = $medidor;
           
            for ($i=0; $i < $spreadsheet->getSheetCount(); $i++) { 
                $worksheet = $spreadsheet->getSheet($i);
                
                $ws = $worksheet->getTitle();

                $highestRow = $worksheet->getHighestRow(); // e.g. 10
                $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

                
                for ($row = 1; $row <= $highestRow; ++$row) {
                    
                       
                        if ($worksheet->getCellByColumnAndRow(8, $row)->getValue() == $searchValue) {
                            $foundInCells[] = $ws . '!' . $worksheet->getCellByColumnAndRow(8, $row)->getCoordinate();
                        }
                }
               
                            
                // foreach ($worksheet->getRowIterator() as $row) {
                //     $cellIterator = $row->getCellIterator();
                //     if($cellIterator){

                //         //$cellIterator->setIterateOnlyExistingCells(true);
                    
                //         foreach ($cellIterator as $cell) {
                //             if ($cell && $cell->getValue() == $searchValue) {
                //                 $foundInCells[] = $ws . '!' . $cell->getCoordinate();
                //             }
                //         }

                //     }
                   
                // }

                # code...
            }
           
           

        endwhile; endif; 
        wp_reset_query(); 

        if ( !count($foundInCells) ) {
            $error .= "Medidor no encontrado <br />";
        }
    }
           
} // END THE IF STATEMENT THAT STARTED THE WHOLE FORM

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    
    <?php
        if (!empty($error)) {
            echo '<p class="error"> <strong>Revisa los siguientes errores:</strong><br/>' . $error . '</p>';
        } 
    ?>
    <form action="" class="post-medidor-form" method="post">
        <p>Para ver la información ingresa el numero de medidor:</p>
        <p><label for="post_medidor">Numero de Medidor: <input name="post_medidor" id="post_medidor" type="text" value="<?php echo isset($medidor) ? $medidor : '' ?>"></label> <input type="submit" name="Submit" value="Consultar" class="btn"></p>
            <input type="hidden" name="action" value="query_medidor" />
            <?php wp_nonce_field( 'query-medidor' ); ?>
        </form>
    <?php  if ( empty($error) && !empty($foundInCells) && count($foundInCells) ) : ?>

        <?php asadasurfside_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
            the_content();

            
            ?>
        </div><!-- .entry-content -->
   
    <?php endif; ?>
    
</article><!-- #post-<?php the_ID(); ?> -->
