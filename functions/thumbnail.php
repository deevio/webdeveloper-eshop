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

function thumbnail($id, $title, $excerpt, $price, $url, $imgUrl) {

    $thumbnail = '    
                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="' . $imgUrl . '" alt="">
                        <div class="caption">
                            <h3>' . $title . '</h3>
                            <p>' . $excerpt . '</p>
                            <p><strong>' . priceFormat($price) . ' </strong></p>
                            <p>
                                <br>
                                <input type="submit" value="Buy Now!" name="kupit" class="btn btn-success" />
                                <a href="' . $url . '" class="btn btn-default" title="' . $title . '" >More Info</a>
                                <input type="checkbox" name="doKosika[]" value="' . $id . '" />
                            </p>
                        </div>
                    </div>
                </div>
            ';

            return $thumbnail;            
};

?>