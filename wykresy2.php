     <?php
    header('Content-type: image/png');
imagepng($im);
exit;
	set_time_limit(1);
    $limit=1000;
    $im = imagecreate($limit, $limit);
    $bgcolor = imagecolorallocate($im, 0, 0, 0); // white background
    $for = imagecolorallocate($im, 255, 0, 0);
    $xy= imagecolorallocate($im, 0, 0, 225);
	$gray = imagecolorallocate($im, 0, 100, 0);
	for($i = 0; $i <= $limit; $i = $i + 20){
    imageline($im, $i, 0, $i, $limit, $gray);
    }
    for($i = 0; $i <= $limit; $i = $i + 20)
    {
    imageline($im, 0, $i, $limit, $i, $gray);
    }
    imageline($im, 0, $limit/2, $limit, $limit/2, $xy);imageline($im, $limit/2, 0 , $limit/2, $limit, $xy);$x=1;$y=0;$sublimit=$limit/4;
    while($x < 23)
    {
    $x=$x+0.01;
     
    $y=($limit/2)-($x*$x);
    //imageline($im, $x+($limit/2), $y, $x+($limit/2), $y, $for);
    imagesetpixel ( $im , $x+($limit/2) , $y , $for);
    }
    while($x>-23)
    {
    $x=$x-0.01;
    $y=($limit/2)-($x*$x);
    imagesetpixel ( $im , $x+($limit/2) , $y , $for);
    }
    imagestring($im,5,($limit-($limit/4))-100,($limit-($limit/4)),"By Chetan Mendhe  Y=X*X Equation" , imagecolorallocate($im,225,225,225));
     
    imagepng($im);
    exit;
    ?>