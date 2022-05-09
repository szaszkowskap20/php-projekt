<?php
    include('phplot.php');

    $graph = new PHPlot(450, 250);
    $graph->SetPointSize("10");// wielkość punktów w px
    $graph->SetPointShape("dot"); // ksztaut punktów dozwolone to : rect,circle,diamond,triangle,dot,line,halfline 
    
?>