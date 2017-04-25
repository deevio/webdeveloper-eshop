<?php 
/**
 * show thumbnail of item
 *
 * @param string $title  - title
 * @param string $excerpt - excerpt
 * @param float  $price - price
 * @param string $url - item url
 * @param string $imgUrl - image url
 *
 * @return string $thumbnail - thumbnail of item 
 *
 */

function thumbnail($title, $excerpt, $price, $url, $imgUrl) {

    $thumbnail = '    
                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="' . $imgUrl . '" alt="">
                        <div class="caption">
                            <h3>' . $title . '</h3>
                            <p>' . $excerpt . '</p>
                            <p><strong>' . $price . ' </strong> EUR</p>
                            <p>
                                <a href="#" class="btn btn-primary">Buy Now!</a> 
                                <a href="' . $url . '" class="btn btn-default"title="' . $title . '" >More Info</a>
                            </p>
                        </div>
                    </div>
                </div>
            ';

            return $thumbnail;            
};

?>