
        <h4>Preview Images from uploads/ folder:<br>
		<?php
//Your folder
$files = glob("uploads/*.*");
$colCnt=0;
echo '<table>';
for ($i=0; $i<count($files); $i++)
    {
    $colCnt++;
    if ($colCnt==1)
    echo '<tr>';
    echo '<td>';
    $num = $files[$i];
    echo '<a href="'.$num.'" href="#'.$i.'"><img width="200" height="200" src="'.$num.'" /></a>';
    print substr(substr($num,4,200),0,-4);
    echo '</td>';
    if ($colCnt==1)
        {
        echo '</tr>';
        $colCnt=0;
        }
    }
echo '</table>';
?>
	